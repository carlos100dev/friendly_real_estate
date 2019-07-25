<?php

  // handle post request to this page

  // print create listing form
 ?>

 <div class="container-fluid">
   <div class="row home-banner">
     <div class="col">
       <?php include_once('_search_bar.php'); ?>
     </div>
   </div>
   <div class="row">
     <div class="col py-5 bg-secondary">
       <h1 class="display-2 text-white text-center">NEW LISTING</h1>
         <div class="container">
           <div class="row">
             <div class="col-md-4">
               <!-- <h1>col1</h1> -->
             </div>
             <div class="col-md-4 text-white">

               <form method="post" action="create_listing">
                 <h3 class="text-center">Address</h3>
                <div class="form-group">
                  <label for="house_number">House Number</label>
                  <input type="text" class="form-control" id="house_number" name="house_number" placeholder="House Number">
                </div>
                <div class="form-group">
                  <label for="street">Street</label>
                  <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City">
                </div>
                <div class="form-group">
                  <label for="state">State</label>
                  <input type="text" class="form-control" id="state" name="state" placeholder="State">
                </div>
                <div class="form-group">
                  <label for="zip">Zip Code</label>
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code">
                </div>
                <div class="form-group">
                  <label for="county">County</label>
                  <input type="text" class="form-control" id="county" name="county" placeholder="County">
                </div>
                  <h3 class="text-center">Listing</h3>
                  <div class="form-group">
                    <div class="custom-control custom-switch">
                      <input checked="checked" id="listing_status" name="listing_status" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="listing_status">Active Listing Status</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                      <div class="input-group-append">
                        <span class="input-group-text">USD</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_sold_amount">Price Last Sold</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" id="last_sold_amount" name="last_sold_amount" placeholder="Price Last Sold For">
                      <div class="input-group-append">
                        <span class="input-group-text">USD</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="features">Features</label>
                    <input type="text" class="form-control" id="features" name="features" placeholder="Features">
                  </div>
                  <div class="form-group">
                    <label for="bedrooms">Number of Bedrooms</label>
                    <select name="bedrooms" id="bedrooms" class="custom-select">
                      <option value="-1" selected>Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5 or more</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="bathrooms">Number of Bathrooms</label>
                    <select name="bathrooms" id="bathrooms" class="custom-select">
                      <option value="-1" selected>Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5 or more</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="floors">Number of Floors</label>
                    <select name="floors" id="floors" class="custom-select">
                      <option value="-1" selected>Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5 or more</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="year_built">Year Built</label>
                    <input type="date" class="form-control" id="year_built" name="year_built">
                  </div>
                  <div class="form-group">
                    <label for="lot_acres">Acres</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="lot_acres" name="lot_acres" placeholder="Lot Acres">
                      <div class="input-group-append">
                        <span class="input-group-text">ACRES</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_remodeled">Year Last Remodeled</label>
                    <input type="date" class="form-control" id="last_remodeled" name="last_remodeled">
                  </div>
                  <div class="form-group">
                    <label for="number_of_units">Number of Units</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="number_of_units" name="number_of_units" placeholder="Number of Units">
                      <div class="input-group-append">
                        <span class="input-group-text">UNITS</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="floor_type">Floor Type</label>
                    <select class="custom-select" name="floor_type" id="floor_type">
                      <option value="-1" selected>Select</option>
                      <option value="Hardwood">Hardwood</option>
                      <option value="Carpet">Carpet</option>
                      <option value="Ceramic Tile">Ceramic Tile</option>
                      <option value="Porcelain Tile">Porcelain Tile</option>
                      <option value="Vinyl">Vinyl</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exterior_material">Exterior Material</label>
                    <select class="custom-select" name="exterior_material" id="exterior_material">
                      <option value="-1" selected>Select</option>
                      <option value="Brick">Brick</option>
                      <option value="Stucco">Stucco</option>
                      <option value="Vinyl Siding">Vinyl Siding</option>
                      <option value="Aluminum Siding">Aluminum Siding</option>
                      <option value="Wood Siding">Wood Siding</option>
                      <option value="Log Siding">Log Siding</option>
                      <option value="Glass Block Walls">Glass Block Walls</option>
                      <option value="Composite Siding">Composite Siding</option>
                      <option value="Stone Siding">Stone Siding</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="heating">Heating Type</label>
                    <select class="custom-select" name="heating" id="heating">
                      <option value="-1" selected>Select</option>
                      <option value="central_furnace">Central - Furnace</option>
                      <option value="central_boiler">Central - Boiler</option>
                      <option value="central_heatpumps">Central - Heat Pumps</option>
                      <option value="direct_gasfiredspaceheaters">Direct - Gas-Fired Space Heaters</option>
                      <option value="direct_electricspaceheaters">Direct - Electric Space Heaters</option>
                      <option value="special_radiantfloorheat">Special - Radiant Floor Heat</option>
                      <option value="special_ductless">Special - Ductless, Mini-Split, Multi-Split</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cooling">Cooling Type</label>
                    <select class="custom-select" name="cooling" id="cooling">
                      <option value="-1" selected>Select</option>
                      <option value="central_air">Central - Air</option>
                      <option value="ductless">Ductless Mini-split</option>
                      <option value="swampcooler">Swamp Cooler</option>
                      <option value="windowac">Window A/C</option>
                      <option value="wallmountedac">Wall Mounted A/C</option>
                      <option value="portaleac">Portable A/C</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                  <h3 class="text-center">Seller</h3>
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Type">
                  </div>
                  <div class="form-group">
                    <label for="phone">Contact Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                  </div>
                  <h3 class="text-center">Picture</h3>
                  <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="picture">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                  <button type="submit" class="btn home-banner-btn-outline btn-lg btn-block">Create Listing</button>
              </form>

             </div>
             <div class="col-md-4">
               <!-- <h1>col3</h1> -->
             </div>
           </div>
         </div>
     </div>
   </div>
 </div>
