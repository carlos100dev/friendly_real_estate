<?php
$queryResult=NULL;
$queryResult=$data;
// if $queryResult is not null, then there is a listing id provided
// and $queryResult is that listing
?>
<div class="container-fluid">

<?php
  if($queryResult!=NULL){
    $price = number_format($queryResult['PRICE'], 2);
    $last_sold_price = number_format($queryResult['LAST_SOLD_AMOUNT'], 2);
    $address = $queryResult['HOUSE_NUMBER'].' '.$queryResult['STREET'].
                ', '.$queryResult['CITY'].', '.$queryResult['STATE'].
                ' '.$queryResult['ZIP'];
    $beds = $queryResult['NUMBER_OF_BEDROOMS'];
    $baths = $queryResult['NUMBER_OF_BATHROOMS'];
    $floors = $queryResult['NUMBER_OF_FLOORS'];
    // explode with delimiter: newline character (php end of line character)
    $features = explode(PHP_EOL, $queryResult['FEATURES']);
    $listing_status = ($queryResult['LISTING_STATUS'] == 'Y') ? 'active' : 'not active';
?>
    <!-- house banner -->
    <div class="row listing-single-banner" style="
              background-image: url('<?php echo $queryResult['URL']; ?>');">
      <div class="col">
        <div class="jumbotron">

        </div>
      </div>
    </div>

    <!-- info side bar -->
    <div class="row bg-secondary">
      <div class="col">
        <div class="mt-5 mb-5">
          <div class="container">
            <div class="row text-light">
              <div class="col-sm text-center">
                <div class="d-block">
                  <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $address; ?></p>
                  </blockquote>
                </div>
                <div class="d-block">
                  <div class="btn btn-primary">
                    <h4 class="text-white">$<?php echo $price; ?></h4>
                  </div>
                </div>
              </div>
              <div class="col-sm text-center">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <p><?php echo $beds; ?> Bedrooms</p>
                      <div class="">
                        <p>bed icon</p>
                      </div>
                    </div>
                    <div class="col-sm">
                      <p><?php echo $baths; ?> Bathrooms</p>
                      <div class="">
                        <p>bath icon</p>
                      </div>
                    </div>
                    <div class="col-sm">
                      <p><?php echo $floors; ?> Floors</p>
                      <div class="">
                        <p>floor icon</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- about section -->
    <div class="row">
      <div class="col py-5 bg-dark text-white">
        <h3 class="display-4 text-center">About</h3>
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h2>Features</h2>
                <?php
                foreach($features as $f){
                  ?>
                  <ul class="list-unstyled">
                    <li><b><?php echo $f; ?></b></li>
                  </ul>
                  <?php
                }
                 ?>
              </div>
              <div class="col-md-3">
                <h2>Property</h2>
                <ul class="list-unstyled">
                  <li><b>Listing Status</b> <?php echo $listing_status; ?></li>
                  <li><b>Price</b> <?php echo $price; ?></li>
                  <li><b>Last Sold Amount</b> <?php echo $last_sold_price; ?></li>
                  <li><b>Bedrooms</b> <?php echo $beds; ?></li>
                  <li><b>Bathrooms</b> <?php echo $baths; ?></li>
                  <li><b>Year Built</b> <?php echo date('Y', strtotime($queryResult['YEAR_BUILT'])); ?></li>
                  <li><b>Last Remodeled</b> <?php echo date('Y', strtotime($queryResult['LAST_REMODELED'])); ?></li>
                  <li><b>Lot Acres</b> <?php echo $queryResult['LOT_ACRES']; ?></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2>Utilities</h2>
                <ul class="list-unstyled">
                  <li><b>Heating</b> <?php echo $queryResult['HEATING']; ?></li>
                  <li><b>Cooling</b> <?php echo $queryResult['COOLING']; ?></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2>Building</h2>
                <ul class="list-unstyled">
                  <li><b>Floors</b> <?php echo $floors; ?></li>
                  <li><b>Number of Units</b> <?php echo $queryResult['NUMBER_OF_UNITS']; ?></li>
                  <li><b>Floor Type</b> <?php echo $queryResult['FLOOR_TYPE']; ?></li>
                  <li><b>Exterior Material</b> <?php echo $queryResult['EXTERIOR_MATERIAL']; ?></li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- seller section -->
    <div class="row">
      <div class="col jumbotron bg-secondary text-light">
        <h1 class="display-4 text-center">Seller</h1>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img class="img-fluid" style="border-radius: 50%;" src="assets/img/seller.jpg" alt="">
            </div>
            <div class="col-md-8">
              <h1 class="display-4">Meet the Agent</h1>
              <ul class="list-unstyled">
                <li><h3><b>Name: </b><?php echo $queryResult['NAME'] ?></h3></li>
                <li><h3><b>Type: </b><?php echo $queryResult['TYPE'] ?></h3></li>
                <li><h3><b>Phone: </b><?php echo $queryResult['PHONE'] ?></h3></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  unset($queryResult);
  }
 ?>

</div>
