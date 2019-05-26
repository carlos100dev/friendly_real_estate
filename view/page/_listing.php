<?php
  $queryResult=$data;
  if(($queryResult !== NULL) && (count($queryResult) > 0)){
    foreach($queryResult as $row){
      $price = number_format($row['price'], 2);
      $status = ($row['LISTING_STATUS'] == 'Y') ? 'active' : 'not active';
      $address = $row['HOUSE_NUMBER'].' '.$row['street'].
                  ', '.$row['city'].', '.$row['STATE'].
                  ' '.$row['ZIP'];
      ?>

      <div class="col-md-4">
        <div class="card mb-4 friendly-card" style="width: 100%;">

          <img src="<?php echo $row['url']; ?>" class="card-img-top" alt="...">


          <div class="card-body">
            <h5 class="card-title">$<?php echo $price; ?></h5>
            <p class="card-text">
              status: <?php echo $status; ?><br />
              beds: <?php echo $row['NUMBER_OF_BEDROOMS']; ?><br />
              baths: <?php echo $row['NUMBER_OF_BATHROOMS']; ?><br />
              acres: <?php echo $row['LOT_ACRES']; ?><br />
              location: <?php echo $address; ?><br />

            </p>
            <a href="<?php echo 'single/'.$row['id']; ?>" class="btn bg-primary text-white">VIEW</a>
            <a href="#" class="btn btn-warning text-white">EDIT</a>
          </div>
        </div>
      </div>

      <?php
    }
    unset($queryResult);
  }
