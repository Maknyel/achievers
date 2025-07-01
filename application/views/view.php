<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<main id="main">


    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-8">
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?=base_url()?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="<?=base_url()?>property">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?=$list['house_name']?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
                  
                
            <!-- <div style="width: 100%;height:50px;"></div> -->
            <section class="intro-single" style="padding-bottom: 3rem; padding-top: 0rem; ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-6 col-xs-6 col-sm-6 col-md-8 col-md-lg-8 col-xl-8">
                    <div class="title-single-box">
                      <h1 class="title-single"><?=$list['house_name']?></h1>
                      <span class="color-text-a"><?=$list['address']?></span>
                    </div>
                  </div>
                  <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-md-lg-4 col-xl-4" style="text-align: right;">
                    <h5 class="title-c">₱<?=number_format($list['tota_contart_price'])?></h5>
                  </div>
                </div>
              </div>
            </section><!-- End Intro Single-->
            <div class="w3-content w3-display-container">
                  <img class="mySlides" src="<?=base_url()?>uploads/<?=$list['image']?>" style="width:100%" onclick="window.open(`<?=base_url()?>uploads/<?=$list['image']?>`,`Preview`,`width=100vw,height=auto`)">
                  <?php foreach(get_houselisting_image($list['house_id']) as $key => $value){ ?>  
                    <img class="mySlides" src="<?=base_url()?>houseimage/<?=$value['house_id']?>/<?=$value['image_name']?>" style="width:100%" onclick="window.open(`<?=base_url()?>houseimage/<?=$value['house_id']?>/<?=$value['image_name']?>`,`Preview`,`width=100vw,height=auto`)">
                  <?php } ?>
                  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                </div>

                <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                  showDivs(slideIndex += n);
                }

                function showDivs(n) {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  if (n > x.length) {slideIndex = 1}
                  if (n < 1) {slideIndex = x.length}
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  x[slideIndex-1].style.display = "block";  
                }
                </script>
            <div style="width: 100%;height:50px;"></div>
            
            <div class="design-about">
                <div class="">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    <?=$list['house_decs']?>
                  </p>
                </div>
            </div>
            <div class="design-about">
                <div class="">
                    <div class="title-box-d">
                      <h3 class="title-d">Features</h3>
                    </div>
                </div>
                <div class="amenities-list color-text-a">
                  <div class="row">
                    <?php 
                    $var=explode(',',$list['with_balcony']);
                     foreach($var as $row){
                      echo '<div class="col-3" style="word-break:break-all;"><span class="fa fa-check"></span>'.$row.'</div>';
                     }?>
                  </div>
                </div>
            </div>
            <div class="design-about">      
                  <div class="">
                    <div class="title-box-d">
                      <h3 class="title-d">Sample Computation</h3>
                    </div>
                  </div>
                  <div class="row">
                    <?php foreach (get_available_months($list['house_id']) as $value) { ?>
                      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title"><?=$value['type_of_entity']?></h3>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <label for="text">Total Contract Price:</label>
                              <input type="text" value="₱ <?=number_format($value['reservation_fee']+$value['downpayment']+$value['loanable_amount'])?>" class="form-control" autocomplete="off" readonly>
                            </div>
                            <div class="form-group">
                              <label for="text">Reservation Fee:</label>
                              <input type="text" value="₱ <?=number_format($value['reservation_fee'])?>" class="form-control" autocomplete="off" readonly>
                            </div>
                            <div class="form-group">
                              <label for="text">Total Downpayment(Net Equity):</label>
                              <input type="text" value="₱ <?=number_format($value['downpayment'])?>" class="form-control" autocomplete="off" readonly>
                            </div>
                            <div class="form-group">
                              <label for="text">Downpayment Term:</label>
                              <input type="text" value="<?=($value['downpayment_term'])?>" class="form-control" autocomplete="off" readonly>
                            </div>
                            <div class="form-group">
                              <label for="text">Loanable Amount:</label>
                              <input type="text" value="₱ <?=number_format($value['loanable_amount'])?>" class="form-control" autocomplete="off" readonly>
                            </div>

                            <div class="form-group">
                              <label for="text">MA Term:</label>
                              <input type="text" value="<?=$value['per_month']?> months" class="form-control" autocomplete="off" readonly>
                            </div>

                            <div class="form-group">
                              <label for="text">MA Amortization:</label>
                              <input type="text" value="₱<?=number_format($value['price'])?>" class="form-control" autocomplete="off" readonly>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
            </div>
            
            <div class="design-about">
              <div class="">
                <div class="title-box-d">
                  <h3 class="title-d">Quick Summary</h3>
                </div>
              </div>
                    
              <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="summary-list">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Location:</strong>
                          <span><?=$list['address']?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Property Type:</strong>
                          <span><?=$list['house_type']?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Lot Area:</strong>
                          <span><?=$list['lot_area']?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Floor Area:</strong>
                          <span><?=$list['floor_area']?>m
                            <sup>2</sup>
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Bed Rooms:</strong>
                          <span><?=$list['bed_rooms']?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Bath Rooms:</strong>
                          <span><?=$list['bath_rooms']?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Car Garage:</strong>
                          <span><?=$list['car_garage']?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Storeys:</strong>
                          <span><?=$list['storeys']?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
            <div class="design-about">
              <?php if($list['video'] != ''){ ?>

              
                  <div class="col-12">
                    
                    <div class="">
                        <div class="title-box-d">
                          <h3 class="title-d">Property Video</h3>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                        <iframe src="" id="iframe" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                      </div>
                     
                    </div>
                  </div>
              <?php } ?>
            </div>
            </div>
          </div>
          
                
        </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

  <script>
    $(window).ready(function(){
        var str = "<?=$list['video']?>";
        var res = str.split("=");
        var embeddedUrl = "https://www.youtube.com/embed/"+res[1];
        $('#iframe').attr('src',embeddedUrl);
        // document.getElementById("iframe").innerHTML = res;
    });

    function path_image_big(path){
      alert(path);
    }
  </script>