

  <main id="main">


    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8" style="display: none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Properties</h2>
              </div>
              <div class="title-link">
                <a href="<?=base_url()?>property">All Property
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
          <?php foreach (get_houselisting_limit(6) as $key => $value) { ?>
          <div class="carousel-item-b">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="<?=base_url()?>uploads/<?=$value['image']?>" alt="" class="img-a imgresize img-fluid">
                <!-- <img src="<?=base_url()?>assets/clients/assets/img/property-6.jpg" alt="" class="img-a img-fluid"> -->
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="<?=base_url()?>view/<?=$value['house_id']?>"><?=$value['house_name']?></a><br>
                      <a href="<?=base_url()?>view/<?=$value['house_id']?>" style="font-size: 10px;">Locations: <?=$value['address']?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Price | ₱ <?=$value['tota_contart_price']?></span>
                    </div>
                    <a href="<?=base_url()?>view/<?=$value['house_id']?>" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Lot Area</h4>
                        <span><?=$value['lot_area']?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span><?=$value['bed_rooms']?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span><?=$value['bath_rooms']?></span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span><?=$value['car_garage']?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8 background-properties" style="display: none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Properties</h2>
              </div>
              <div class="title-link">
                <a href="<?=base_url()?>property">All Property
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <?php foreach (get_houselisting_limit(3) as $key => $value) { ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            
              <div class="admin2div">
                        <div class="admin2_image" onclick="location_href(`<?=base_url()?>view/<?=$value['house_id']?>`)">
                          <div class="img_profile_div_admin on-pointer" style="background-image: url('<?=base_url()?>uploads/<?=$value['image']?>');"></div>                                        
                        </div>

                    <div class="div-text">
                      <div style="padding: 0px 20px;">
                        <h6 class="admin2wrapword font-title"><?=$value['house_name'];?></h6>
                        <h6 class="admin2wrapword font-sub-title">Location: <?=$value['address']?></h6>
                        <h6 class="admin2wrapword font-sub-title">Price: ₱ <?=$value['tota_contart_price']?></h6>
                        <h6 class="admin2wrapword font-sub-title">Lot Area: <?=$value['lot_area']?></h6>
                        <h6 class="admin2wrapword font-sub-title">Floor Area: <?=$value['floor_area']?></h6>  
                      </div>
                      
                      <div class="text-center mt-3 team-info">
                        <ul class="list-unstyled social-icon mb-0">
                          <li class="list-inline-item"><a href="<?=base_url()?>view/<?=$value['house_id']?>"><i class="fa fa-eye"></i></a></li>
                        </ul>
                      </div>
                    </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8 background-news" style="display: none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest News</h2>
              </div>
              <div class="title-link">
                <a href="<?=base_url()?>news">All News
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="new-carousel" class="owl-carousel owl-theme"> -->
          <div class="row">
          <?php foreach (get_news_arraaylimit(3) as $key => $value) { ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="admin2div">  
                  <div class="admin2_image" onclick="location_href(`<?=base_url()?>news/<?=$value['news_id']?>`)">
                    <div class="img_profile_div_admin on-pointer" style="background-image: url('<?=base_url()?>uploads_news/<?=$value['news_image']?>');"></div>                                        
                  </div>

                  <div class="div-text text-center padding-25-0">
                    <h6 class="admin2wrapword font-title"><?=$value['news_title'];?></h6>
                    <h6 class="admin2wrapword font-sub-title"><small><?=$value['news_subtitle']?></small></h6>
                    <div class="text-center mt-3 team-info">
                      <ul class="list-unstyled social-icon mb-0">
                        <li class="list-inline-item"><a href="<?=base_url()?>news/<?=$value['news_id']?>"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="" ></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
          <?php } ?>
          </div>
        </div>
      <!-- </div> -->
    </section><!-- End Latest News Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8 background-agents"style="display: none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Marketing Officers</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach (get_employee_limit(3) as $key => $value) { ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="admin2div">
                        <div class="admin2_image" onclick="location_href(`<?=base_url()?>agent/<?=$value['emp_id']?>?>`)">
                          <div class="img_profile_div_admin on-pointer" style="background-image: url('<?=base_url()?>users/<?=$value['emp_id']?>/<?=$value['image']?>');"></div>                                        
                        </div>

                    <div class="div-text">
                      <div style="padding: 0px 20px;">
                        <h6 class="admin2wrapword font-title"><?=$value['fname'];?> <?=$value['mname'];?> <?=$value['lname'];?></h6>
                        <h6 class="admin2wrapword font-sub-title">Phone: <?=$value['contact_number']?></h6>
                        <h6 class="admin2wrapword font-sub-title">Email: ₱ <?=$value['email']?></h6>
                      </div>
                      
                      <div class="text-center mt-3 team-info">
                        <ul class="list-unstyled social-icon mb-0">
                          <li class="list-inline-item"><a href="<?=base_url()?>agent/<?=$value['emp_id']?>"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="" ></i></a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Agents Section -->

  </main><!-- End #main -->
  <style>
    .section-footer{
          margin-top: 0px;
    }
  </style>