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
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="<?=base_url()?>news">News</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?=$list['news_title']?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container-fluid">
        <div class="design-about" style="padding: 30px 30px">
          <div class="">
            <div class="">
              <div class="news-img-box" style="text-align: center;border-radius: 5px;box-shadow: 0 3px 15px 0 rgb(206 206 206 / 50%);">
                <img src="<?=base_url()?>uploads_news/<?=$list['news_image']?>" alt="" class="img-fluid">
              </div>
            </div>
            <div class="">
              <div class="post-information">
                <ul class="list-inline text-center color-a">
                  <li class="list-inline-item mr-2">
                    <strong>Author: </strong>
                    <span class="color-text-a"><?=$list['news_author']?></span>
                  </li>
                  <li class="list-inline-item mr-2">
                    <strong>Category: </strong>
                    <span class="color-text-a"><?=$list['news_category']?></span>
                  </li>
                  <li class="list-inline-item">
                    <strong>Date: </strong>
                    <span class="color-text-a"><?=$list['news_date']?></span>
                  </li>
                </ul>
              </div>
              <div class="title-single-box">
                <h1 class="title-single"><?=$list['news_title']?></h1>
                <!-- <span class="color-text-a"><?=$list['news_subtitle']?></span> -->
              </div>
              <div class="post-content color-text-a">
                
                <p>
                  <?=$list['news_description']?>
                </p>
              </div>

            </div>

          </div>
        </div>
        
      </div>
    </section><!-- End Blog Single-->

  </main><!-- End #main -->