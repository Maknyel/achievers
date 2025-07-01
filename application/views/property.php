<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Properties</h1>
              <!-- <span class="color-text-a">Properties</span> -->
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Our Property
                </li>
              </ol>
              
            </nav>
            <br>
            <div class="title-single-box">
              <label>Filter by Subdivision</label>
              <select class="form-control" id="subdivision">
                <option></option>
                <?php foreach (get_subdivision() as $key => $value) { ?>
                  <?php if (isset($_GET['subdivision'])){ ?>
                    <?php if ($_GET['subdivision'] == $value['sub_name']){ ?>
                      <option value="<?=$value['sub_name']?>" selected><?=$value['sub_name']?></option>
                    <?php }else{ ?>
                      <option value="<?=$value['sub_name']?>"><?=$value['sub_name']?></option>
                    <?php } ?>
                  <?php }else{ ?>
                    <option value="<?=$value['sub_name']?>"><?=$value['sub_name']?></option>
                  <?php } ?>
                  
                <?php } ?>
              </select>
            </div>
          </div>
          <!-- <div class="col-12 portfolios sortable">
            <header class="sort_by_cat">
              <span>Show:</span>
                  <a class="current <?=isset($_GET['subdivision'])?'':'active'?>" data-value="all" href="<?=base_url()?>property">All</a>
                  <?php foreach (get_subdivision() as $key => $value) { ?>
                    <a data-value="lancaster-new-city" href="<?=base_url()?>property?subdivision=<?=$value['sub_name']?>" class="<?=isset($_GET['subdivision'])?(($_GET['subdivision'] == $value['sub_name'])?'active':''):''?>"><?=$value['sub_name']?></a>
                  <?php } ?>
                  
            </header>
          </div> -->
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container-fluid">
        <div class="row">
          <?php foreach ($listofprop as $key => $value) { ?>
            <!-- <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?=base_url()?>uploads/<?=$value['image']?>" alt="" class="img-a img-fluid datafunction">
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
            </div> -->
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
        <div class="row">
          <div class="col-sm-12" style="text-align: right;">
            <?php
              echo "<div class = 'pagination_div'>";
                foreach ($page_links as $link){
                  echo $link;
                }
              echo "</div>";
            ?>
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

  <script type="text/javascript">
    $("#subdivision").change(function(){
      window.location.href = "<?=base_url()?>property?subdivision="+$('#subdivision').val();
    });
  </script>