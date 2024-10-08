 <?php include 'views/LayoutClient/header.php' ?>
 <!--header middel end-->
 <?php include 'views/LayoutClient/menu.php' ?>
 <!--header end -->

 <!--pos home section-->
 <div class="pos_home_section">
     <div class="row">
         <!--banner slider start-->
         <div class="col-12">
             <div class="banner_slider slider_two">
                 <div class="slider_active owl-carousel">
                     <div class="single_slider" style="background-image: url(assets/img/slider/slider_2.png)">
                         <div class="slider_content">
                             <div class="slider_content_inner">
                                 <h1>fashion for you</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                 <a href="#">shop now</a>
                             </div>
                         </div>
                     </div>
                     <div class="single_slider" style="background-image: url(assets/img/slider/slide_4.png)">
                         <div class="slider_content">
                             <div class="slider_content_inner">
                                 <h1>fashion for you</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                 <a href="#">shop now</a>
                             </div>
                         </div>
                     </div>
                     <div class="single_slider" style="background-image: url(assets/img/slider/slider_3.png)">
                         <div class="slider_content">
                             <div class="slider_content_inner">
                                 <h1>fashion for you</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                 <a href="#">shop now</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!--banner slider start-->
         </div>
     </div>
     <!--new product area start-->
     <div class="new_product_area product_two">
         <div class="row">
             <div class="col-12">
                 <div class="block_title">
                     <h3> New Products</h3>
                 </div>
             </div>
         </div>
         <div class="row"> <!-- Gộp tất cả sản phẩm vào một hàng duy nhất -->
             <?php if (isset($listProduct) && is_array($listProduct) && !empty($listProduct)): ?>
                 <?php foreach ($listProduct as $key => $product): ?>
                     <div class="col-lg-3 col-md-4 col-sm-6"> <!-- Sử dụng các lớp Bootstrap để căn chỉnh -->
                         <div class="single_product">
                             <div class="product_thumb">
                                 <a href="<?= BASE_URL . '?act=detail-product&id_product=' . $product['id']; ?>">
                                     <img src="<?= BASE_URL . $product['thumbnail'] ?>" alt="">
                                 </a>
                                 <div class="img_icone">
                                     <img src="assets/img/cart/span-new.png" alt="">
                                 </div>
                                 <div class="product_action">
                                     <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                 </div>
                             </div>
                             <div class="product_content">
                                 <span class="product_price"><?= $product['price'] ?>$</span>
                                 <h3 class="product_title">
                                     <a href="<?= BASE_URL . '?act=detail-product&id_product=' . $product['id']; ?>"><?= $product['title'] ?></a>
                                 </h3>
                             </div>
                             <div class="product_info">
                                 <ul>
                                     <li><a href="#" title="Add to Wishlist">Add to Wishlist</a></li>
                                     <li><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="Quick view">View Detail</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             <?php else: ?>
                 <p>No products available.</p>
             <?php endif; ?>
         </div>



     </div>
     <!--new product area start-->

     <!--banner -->
     <div class="banner_area banner_two">
         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <div class="single_banner">
                     <a href="#"><img src="assets/img/banner/banner7.jpg" alt=""></a>
                     <div class="banner_title">
                         <p>Up to <span> 40%</span> off</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="single_banner">
                     <a href="#"><img src="assets/img/banner/banner8.jpg" alt=""></a>
                     <div class="banner_title title_2">
                         <p>sale off <span> 30%</span></p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6">
                 <div class="single_banner">
                     <a href="#"><img src="assets/img/banner/banner11.jpg" alt=""></a>
                     <div class="banner_title title_3">
                         <p>sale off <span> 30%</span></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--banner -->


 </div>
 <!--pos home section end-->
 </div>
 <!--pos page inner end-->
 </div>
 </div>
 <!--pos page end-->

 <!--footer area start-->
 <?php include 'views/LayoutClient/footer.php' ?>
 <!--footer area end-->

 <?php include 'views/LayoutClient/detailProduct.php' ?>
 <!-- modal area end -->




 <!-- all js here -->
 <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
 <script src="assets/js/popper.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/ajax-mail.js"></script>
 <script src="assets/js/plugins.js"></script>
 <script src="assets/js/main.js"></script>
 </body>