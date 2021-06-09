<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require("headerLinksView.php")?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <?php require("headerView.php")?>
    <!-- header-end -->
  
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3><?php echo $category?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                
                   <?php if($categoryProduct != null){
                       foreach($categoryProduct as $category){?>
                           
                   <div class="col-md-4">
                    <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
                                
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2><?php echo $category->categoryname?></h2>
                                </a>
                                
                            </div>
                        </article>
                        </div>
                   
                       <?php }
                   }?>
                   
                   
                 
                
              
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<!-- footer start -->
<?php require("footerView.php")?>
<!-- footer end  -->
<!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>
                    Book an 
                <span>Appointment</span>
                </h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Please select doctor to visit">Please select doctor to visit </option>
                                <option value="1">Anaf</option>
                                <option value="2">Nayna Therapy</option>
                                <option value="3">Nadif</option>
                            </select>
                        </div>
                        <div class="col-xl-9">
                            <input type="text"  placeholder="Your name ">
                        </div>
                        <div class="col-xl-3">
                            <input type="text"  placeholder="Your age">
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Phone number ">
                        </div>
                        <div class="col-xl-6">
                            <input type="email"  placeholder="Email Address">
                        </div>
                        <div class="col-xl-6">
                            <input class="datepicker" placeholder="Appointment Date">
                        </div>
                        <div class="col-xl-6">
                            <input class="timepicker" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Make an Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

 <?php require("footerLinksView.php")?>
</body>
</html>