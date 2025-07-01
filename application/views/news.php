<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our News</h1>
              <!-- <span class="color-text-a">Grid News</span> -->
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  News
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container-fluid">
        <div class="row">
          <?php foreach ($listofprop as $key => $value) { ?>
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
    </section><!-- End Blog Grid-->

  </main><!-- End #main -->