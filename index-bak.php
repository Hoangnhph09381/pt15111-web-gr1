<?php
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
// $loggedInUser = $_SESSION[AUTH];
$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";

$typeQuery = 'select t.* from types t';
$types = queryExecute($typeQuery, true);
// echo $loggedInUser['name'];

$placeQuery = 'select p.* from places p';
$places = queryExecute($placeQuery, true);

$getFoodQuery = "select f.* from foods f";

if ($keyword !== ""){
    $getFoodQuery .= "where f.name like '%$keyword%'";
}
$food = queryExecute($getFoodQuery);
 ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from frenify.com/envato/frenify/html/directify/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 03:34:00 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Directify">
<meta name="author" content="Frenify">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Directify</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Work+Sans:300,400,500,600,700,800,900" rel="stylesheet">
<!--    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">-->

<?php include_once '_share/style.php'?>

</head>

<body>

<!-- WRAPPER ALL -->
<div class="directify_fn_wrapper_all">
    <!-- MOBILE MENU -->
    <?php include_once  '_share/mobilemenu.php'?>
	<!-- /MOBILE MENU -->

    <!-- HEADER -->
    <?php include_once  '_share/header.php'?>
    <!-- /HEADER -->

    <!-- CONTENT -->
    <div class="directify_fn_content">

    	<div class="directify_fn_all_listings_wrap index10 index30">
    		<div class="directify_fn_all_listings_bg">
    			<div class="overlay_color"></div>
    			<div class="overlay_image"></div>
    		</div>
    		<div class="directify_fn_all_listings">
    			<div class="all_listings">
    				<div class="container">
    					<div class="listings_wrap">
    						<div class="discovering_wrap">
    							<div class="discovering">
    								<div class="title_holder">
    									<h3>KHÁM PHÁ CÁC MÓN ĂN NGON NHẤT</h3>
										<span>Directify sẽ giúp bạn khám phá các món ăn bạn muốn</span>
    								</div>
    								<div class="searching">
    									<input class="directify_fn_search_input" type="search" name="keyword" placeholder="Nhập tên món ăn bạn muốn tìm?" />
    									<a class="directify_fn_search_btn" href="#"><img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/search.svg" alt="" /><span>Tìm kiếm</span></a>
    								</div>
    								<div class="cat_single_wrap" data-hover-text="#fff" data-hover-bg="" data-hover-border="rgba(255,255,255,1)" data-skew="6" data-text-color="#fff" data-bg-color="" data-bg-opacity="" data-border-width="1" data-border-color="rgba(255,255,255,0.64)">
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/restaurant.svg" alt="" />
													<span class="cat_title">Restaurants</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/hotel.svg" alt="" />
													<span class="cat_title">Hotels</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/shopping.svg" alt="" />
													<span class="cat_title">Shopping</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/gallery.svg" alt="" />
													<span class="cat_title">Gallery</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/park.svg" alt="" />
													<span class="cat_title">Park</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/movie.svg" alt="" />
													<span class="cat_title">Movie</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/service.svg" alt="" />
													<span class="cat_title">Services</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/theatre.svg" alt="" />
													<span class="cat_title">Theatres</span>
												</a>
											</div>
										</div>
										<div class="cat_single">
											<div class="cat_single_bg">
												<div class="overlay_color"></div>
											</div>
											<div class="cat_single_content">
												<a href="#">
													<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/hospital.svg" alt="" />
													<span class="cat_title">Hospitals</span>
												</a>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
									<!-- #1 item -->
                                    <?php $id=1;?>
									<div class="fdbox">
										<div class="featured_box_wrap">
											<div class="featured_box">
												<div class="featured_box_img">
													<img src="<?= THEME_ASSET_URL ?>img/featured_listing/list1-l.jpg" alt="" />
												</div>
												<div class="featured_box_price">
													<span class="text">$44</span>
													<span class="after"></span>
												</div>
												<div class="featured_box_info_wrap">
													<div class="featured_box_info">
														<div class="featured_box_like">
															<a href="<?= BASE_URL.'detail.php' ?>">
																<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/bookmark.svg" alt="" />
															</a>
															<div class="featured_box_tooltip">
																<span>Bookmark</span>
															</div>
														</div>
														<div class="featured_box_title">
															<h3><a href="<?= BASE_URL.'detail.php?id='.$id ?>">Casablanca Hotel</a></h3>
														</div>
														<div class="directify_fn_rating" data-rating="4.2">
															<div class="behind">
																<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/review.svg" alt="" />
															</div>
															<div class="up">
																<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/review.svg" alt="" />
															</div>
															<div class="featured_box_preview">
																<a href="#"><span>Preview</span></a>
															</div>
														</div>
														<div class="featured_box_address">
															<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/placeholder.svg" alt="" />
															<span>147 W 43rd St New York, NY 10036</span>
														</div>
														<div class="featured_box_author_img">
															<div class="author_img">
																<img src="<?= THEME_ASSET_URL ?>img/featured_listing/author1.jpg" alt="" />
																<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/checked.svg" alt="" />
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- /#1 item -->
   									</div>
    							</div>
							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<!-- FAMOUS FOODS HOVERTAB -->
    	<div class="directify_fn_tab_famous_cities_wrap">
    		<div class="directify_fn_tab_famous_cities">
    			<div class="tab_famous_cities">
    				<div class="container">
						<div class="directify_fn_tabs" data-skin="light" data-x-pos="left">
							<div class="title_holder">
								<h3>CÁC MÓN ĂN NGON BẠN NÊN THỬ</h3>
								<span class="title">Đây là các món ăn được đề cử bởi Directify</span>
								<span class="line"></span>
							</div>
							<ul class="fam_city tabHeader">
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">01</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món khai vị</h3>
<!--													<span>227 Listings</span>-->
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city1-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">02</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món chính</h3>
<!--													<span>154 Listings</span>-->
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city2-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">03</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món ăn nhanh</h3>
<!--													<span>854 Listings</span>-->
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city3-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">04</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món tráng miệng</h3>
<!--													<span>239 Listings</span>-->
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city4-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">05</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món nướng</h3>
<!--													<span>634 Listings</span>-->
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city5-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<div class="fam_city_wrap">
											<div class="number">
												<span class="text">06</span>
												<span class="after"></span>
											</div>
											<div class="fam_city_content">
												<div class="title_holder">
													<h3>Món lẩu</h3>
													<span></span>
												</div>
												<div class="arrow">
													<i class="xcon-angle-right"></i>
												</div>
											</div>
											<div class="hidden_img">
												<img src="<?= THEME_ASSET_URL ?>img/popular_cities/city6-s.jpg" alt="" />
											</div>
										</div>
									</a>
								</li>
							</ul>
							<div class="tabContent">
								<nav>
									<div class="active"><a href="#"></a><nav class="overlay"></nav></div>
									<div class=""><a href="#"></a><nav class="overlay"></nav></div>
									<div class=""><a href="#"></a><nav class="overlay"></nav></div>
									<div class=""><a href="#"></a><nav class="overlay"></nav></div>
									<div class=""><a href="#"></a><nav class="overlay"></nav></div>
									<div class=""><a href="#"></a><nav class="overlay"></nav></div>
								</nav>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- /FAMOUS FOODS HOVERTAB -->




    	<!-- FROM OUR BLOG -->
    	<div class="directify_fn_exmblog_wrap">
    		<div class="directify_fn_exmblog">
    			<div class="exmblog_wrap">
    				<div class="container">
    					<div class="exmblogs">
    						<div class="title_holder">
								<h3>From Our Blog</h3>
								<span class="title">Chúng tôi cập nhật và thêm các bài review hằng ngày.</span>
								<span class="line"></span>
							</div>
    						<div class="exmblog_single_wrap">
    							<div class="exmblog_single">
    								<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/open-book.svg" alt="" />
    								<div class="title_holder">
    									<h3><a href="#">Trang web tốt nhất cho reviewer</a></h3>
    									<span class="title">Viết bài review cho món ăn bạn thích, hoặc bình luận cho các bài review khác</span>
    									<span class="read_more"><a href="#">Read More</a><span class="date"> - April 01</span></span>
    								</div>
    							</div>
    							<div class="exmblog_single">
    								<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/open-book.svg" alt="" />
    								<div class="title_holder">
    									<h3><a href="#">Tìm hiểu về các món ăn nổi tiếng</a></h3>
    									<span class="title">Bạn muốn tìm hiểu về món ăn nổi tiếng mà bạn chưa ăn bao giờ??</span>
    									<span class="read_more"><a href="#">Read More</a><span class="date"> - March 27</span></span>
    								</div>
    							</div>
    							<div class="exmblog_single">
    								<img class="svg" src="<?= THEME_ASSET_URL ?>img/svg/open-book.svg" alt="" />
    								<div class="title_holder">
    									<h3><a href="#">Những gợi ý về món ăn </a></h3>
    									<span class="title">Bạn đến 1 địa điểm du lịch và không biết nên ăn gì? Hãy ghé thăm chúng tôi</span>
    									<span class="read_more"><a href="#">Read More</a><span class="date"> - January 18</span></span>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- /FROM OUR BLOG -->

    </div>
    <!-- /CONTENT -->

    <!-- FOOTER -->
    <?php include_once '_share/footer.php'?>
    <!-- /FOOTER -->

    <a class="totop" href="#"><i class="xcon-angle-up"></i></a>
<!--    <a class="listed" href="submit.html"><img class="svg" src="--><?//= THEME_ASSET_URL ?><!--img/svg/pencil.svg" alt="" /></a>-->

</div>
<!-- /WRAPPER ALL -->

<!-- SCRIPTS -->
<?php include_once '_share/script.php'?>

</body>

<!-- Mirrored from frenify.com/envato/frenify/html/directify/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 03:34:26 GMT -->
</html>