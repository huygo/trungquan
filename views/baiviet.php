<!--================Home Banner Area =================-->
<section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div
        class="banner_content d-md-flex justify-content-between align-items-center"
      >
        <div class="mb-3 mb-md-0">
          <h1 style="font-family: 'Roboto', sans-serif" ><?php echo $page['data']['name']; ?></h1>
          <!-- <p>Very us move be blessed multiply night</p> -->
          <ul class="blog-info-link mt-3 mb-4">
              <li><a href="#"><i class="ti-user"></i><?php echo $page['data']['nhanvien']; ?></a></li>
              <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
          </ul>
        </div>
        <div class="page_link">
          <a href="index.html">Home</a>
          <a href="blog/1/<?php echo $page['data']['danhmucurl']; ?>"><?php echo $page['data']['danhmuc']; ?></a>
          <!-- <a href="single-blog.html">Blog Details</a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap" style="padding: 60px 0px;">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 posts-list">
              <div class="single-post">
                      <div class="feature-img">
                          <img class="img-fluid" src="<?php echo $page['data']['hinh_anh']; ?>" alt="<?php echo $page['data']['hinh_anh']; ?>">
                      </div>
                  <div class="blog_details">
                      <h4 style="font-family: 'Roboto', sans-serif"><?php echo $page['data']['mo_ta']; ?></h4>
                        <!-- <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                          <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                        </ul> -->
                      <!-- <p class="excert">
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower

                      </p> -->
                      <!-- <div class="quote-wrapper">
                        <div class="quotes">
                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                        </div>
                      </div> -->
                      <p><?php echo $page['data']['noi_dung']; ?></p>
                  </div>
              </div>
              <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span> Lily and 4 people like this</p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                    <p class="comment-count"><span class="align-middle"><i class="ti-comment"></i></span> 06 Comments</p>
                  </div>
                  <ul class="social-icons">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-dribbble"></i></a></li>
                    <li><a href="#"><i class="ti-wordpress"></i></a></li>
                  </ul>
                </div>

                <!-- <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-fluid" src="img/blog/prev.jpg" alt="">
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="#">
                                    <span class="ti-arrow-left text-white"></span>
                                </a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#">
                                    <h4>Space The Final Frontier</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="#">
                                    <h4>Telescopes 101</h4>
                                </a>
                            </div>
                            <div class="arrow">
                                <a href="#">
                                    <span class="ti-arrow-right text-white"></span>
                                </a>
                            </div>
                            <div class="thumb">
                                <a href="#">
                                    <img class="img-fluid" src="img/blog/next.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
              </div>


              <!-- <div class="blog-author">
                <div class="media align-items-center">
                  <img src="img/blog/author.png" alt="">
                  <div class="media-body">
                    <a href="#">
                      <h4>Harvard milan</h4>
                    </a>
                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                  </div>
                </div>
              </div> -->

              <!-- <div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                      <div class="user justify-content-between d-flex">
                          <div class="thumb">
                              <img src="img/blog/c1.png" alt="">
                          </div>
                          <div class="desc">
                              <p class="comment">
                                Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>

                              <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                  <h5>
                                    <a href="#">Emilly Blunt</a>
                                  </h5>
                                  <p class="date">December 4, 2017 at 3:12 pm </p>
                                </div>

                                <div class="reply-btn">
                                  <a href="#" class="btn-reply text-uppercase">reply</a>
                                </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  </div>
                  <div class="comment-list">
                      <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                  <img src="img/blog/c2.png" alt="">
                              </div>
                              <div class="desc">
                                  <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                  </p>

                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                      <h5>
                                        <a href="#">Emilly Blunt</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>

                                    <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="comment-list">
                      <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                  <img src="img/blog/c3.png" alt="">
                              </div>
                              <div class="desc">
                                  <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                  </p>

                                  <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                      <h5>
                                        <a href="#">Emilly Blunt</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>

                                    <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div> -->
              <!-- <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="main_btn">Send Message</button>
                    </div>
                  </form>
              </div> -->
          </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                      <form action="#">
                        <div class="form-group">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Gõ từ khóa">
                            <div class="input-group-append">
                              <button class="btn" type="button"><i class="ti-search"></i></button>
                            </div>
                          </div>
                        </div>
                        <button class="main_btn rounded-0 w-100" type="submit">Tìm kiếm</button>
                      </form>
                  </aside>

                  <aside class="single_sidebar_widget post_category_widget">
                    <h4 style="font-family: 'Roboto', sans-serif" class="widget_title">Danh mục tin tức</h4>
                    <ul class="list cat-list">
                    <?php
                        $danhmuc= $page = $data->danhmuc();
                        foreach ($danhmuc AS $item)
                            echo '
                            <li>
                                <a href="blog/1/'.$item['url'].'" class="d-flex">
                                    <p>'.$item['name'].' </p>
                                    <p> ('.$item['total'].')</p>
                                </a>
                            </li>
                            ';
                    ?>
                    </ul>
                  </aside>

                  <aside class="single_sidebar_widget popular_post_widget">
                      <h3 class="widget_title">Bài viết mới</h3>
                      <?php
                          $newpost= $page = $data->newpost(6);
                          foreach ($newpost AS $item)
                              echo '
                              <div class="media post_item">
                                  <img src="'.$item['hinh_anh'].'" alt="'.$item['hinh_anh'].'" width="100">
                                  <div class="media-body">
                                      <a href="blog/'.$item['url'].'">
                                          <h3 style="font-family: \'Roboto\', sans-serif">'.$item['name'].'</h3>
                                      </a>
                                      <p>'.$item['updated'].'</p>
                                  </div>
                              </div>
                              ';
                      ?>

                      <!-- <div class="media post_item">
                          <img src="img/blog/popular-post/post2.jpg" alt="post">
                          <div class="media-body">
                              <a href="single-blog.html">
                                  <h3>The Amazing Hubble</h3>
                              </a>
                              <p>02 Hours ago</p>
                          </div>
                      </div>
                      <div class="media post_item">
                          <img src="img/blog/popular-post/post3.jpg" alt="post">
                          <div class="media-body">
                              <a href="single-blog.html">
                                  <h3>Astronomy Or Astrology</h3>
                              </a>
                              <p>03 Hours ago</p>
                          </div>
                      </div>
                      <div class="media post_item">
                          <img src="img/blog/popular-post/post4.jpg" alt="post">
                          <div class="media-body">
                              <a href="single-blog.html">
                                  <h3>Asteroids telescope</h3>
                              </a>
                              <p>01 Hours ago</p>
                          </div>
                      </div> -->
                  </aside>
                  <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                      <h4 class="widget_title">Tag Clouds</h4>
                      <ul class="list">
                          <li>
                              <a href="#">project</a>
                          </li>
                          <li>
                              <a href="#">love</a>
                          </li>
                          <li>
                              <a href="#">technology</a>
                          </li>
                          <li>
                              <a href="#">travel</a>
                          </li>
                          <li>
                              <a href="#">restaurant</a>
                          </li>
                          <li>
                              <a href="#">life style</a>
                          </li>
                          <li>
                              <a href="#">design</a>
                          </li>
                          <li>
                              <a href="#">illustration</a>
                          </li>
                      </ul>
                  </aside> -->


                  <!-- <aside class="single_sidebar_widget instagram_feeds">
                    <h4 class="widget_title">Instagram Feeds</h4>
                    <ul class="instagram_row flex-wrap">
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                              <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                            </a>
                        </li>
                    </ul>
                  </aside> -->


                  <!-- <aside class="single_sidebar_widget newsletter_widget">
                    <h4 class="widget_title">Newsletter</h4>

                    <form action="#">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter email" required>
                      </div>
                      <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
                    </form>
                  </aside> -->
              </div>
          </div>
      </div>
  </div>
</section>
<!--================Blog Area =================-->



<!-- <style type="text/css">
    .abc img{
        width: 100%;
    }
</style> -->


<!--     <div class="site-section" data-aos="fade-up">-->
<!--      <div class="container">-->
<!--        <div class="row align-items-center">-->
<!--          <div class="col-md-12">-->
<!--            <img src="--><?php //echo $baiviet['hinh_anh']; ?><!--" alt="Image" class="img-fluid" style="width: 100%;height: 512px;object-fit: cover;">-->
<!--         </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <!-- <div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 pr-md-5">
            <h2 class="text-black"></h2>
            <div class="abc">
            <p class="lead"><?php echo $baiviet['noi_dung']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

   <!--  <div class="slide-one-item owl-carousel">
      <div class="bg-image center overlay" style="background-image: url('template/images/hero_bg_1.jpg'); "></div>
      <div class="bg-image center overlay" style="background-image: url('template/images/hero_bg_2.jpg'); "></div>
      <div class="bg-image center overlay" style="background-image: url('template/images/hero_bg_3.jpg'); "></div>
      <div class="bg-image center overlay" style="background-image: url('template/images/hero_bg_4.jpg'); "></div>
    </div> -->

    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-black">Xem thêm</h2>
          </div>
        </div>
        <div class="row">
          <?php foreach ($xemthem as $key) {?>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="<?php echo $key['hinh_anh']; ?>" alt="Image" class="img-fluid" style="width: 100%;height: 227px;object-fit: cover;">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="blog/<?php echo $key['url']; ?>"><?php echo $key['name']; ?></a></h2>
                <span class="text-uppercase date d-block mb-3"><small><?php echo date('d/m/Y',strtotime($key['ngay_cap_nhat'])); ?></small></span>
                <p class="mb-0"><?php echo $key['mo_ta']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div> -->
