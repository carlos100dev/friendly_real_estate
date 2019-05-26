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

               <form>
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
                    <label for="blank">blank</label>
                    <input type="text" class="form-control" id="blank" name="blank" placeholder="blank">
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
