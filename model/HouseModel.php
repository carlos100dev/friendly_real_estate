<?php

// get id, img url, price, active status, beds, baths, acres, address
function getAllForListings($db){
  try{
    $sql = "select listing.id, picture.url, listing.price, listing.LISTING_STATUS, listing.NUMBER_OF_BEDROOMS,
listing.NUMBER_OF_BATHROOMS, listing.LOT_ACRES, address.HOUSE_NUMBER, address.street,
address.city, address.STATE, address.ZIP
from listing inner join is_located_at on listing.id=is_located_at.LISTING_ID
inner join address on is_located_at.ADDRESS_ID=address.id inner join picture on picture.LISTING_ID=listing.id
";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /* The following call to closeCursor() */
  	$stmt->closeCursor();

    return $data;

  }catch (PDOException $e){
		print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
} // end getAllForListings()

function getSingleListing($db, $id){
  try{
    $sql = "select * from listing inner join is_located_at on listing.id=is_located_at.LISTING_ID
    inner join address on is_located_at.ADDRESS_ID=address.id
    inner join picture on picture.LISTING_ID=listing.id inner join seller on listing.SELLER_ID=seller.ID
    where listing.id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /* The following call to closeCursor() */
  	$stmt->closeCursor();

    return $data;

  }catch (PDOException $e){
		print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
} // end getSingleListing()

function getFeaturedListings($db){
  try{
    $sql = "select listing.id, picture.url, listing.price, listing.LISTING_STATUS, listing.NUMBER_OF_BEDROOMS,
listing.NUMBER_OF_BATHROOMS, listing.LOT_ACRES, address.HOUSE_NUMBER, address.street,
address.city, address.STATE, address.ZIP
from listing inner join is_located_at on listing.id=is_located_at.LISTING_ID
inner join address on is_located_at.ADDRESS_ID=address.id inner join picture on picture.LISTING_ID=listing.id order by rand() limit 3
";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /* The following call to closeCursor() */
  	$stmt->closeCursor();

    return $data;

  }catch (PDOException $e){
		print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
} // end getAllForListings()
