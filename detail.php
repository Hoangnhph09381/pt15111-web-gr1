<?php
// bắt đầu sử dụng session
session_start();
require_once "./config/utils.php";
// $loggedInUser = $_SESSION[AUTH];
$typeQuery = 'select * from types';
$types = queryExecute($typeQuery, true);
// echo $loggedInUser['name'];

$placeQuery = 'select * from places';
$places = queryExecute($placeQuery, true);
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
    <?php include_once  '_share/mobilemenu-white.php'?>
    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <?php include_once  '_share/header-white.php'?>
    <!-- /HEADER -->

    <!-- CONTENT -->
    <div class="directify_fn_content">

        <!-- BLOG -->
        <div class="directify_fn_blog_single_wrap">
            <div class="directify_fn_blog_single">
                <div class="blog_single">
                    <div class="container">
                        <div class="blog_single_wrapper">

                            <!-- POST IMAGE -->
                            <div class="post_img">
                                <div class="bg-img jarallax" data-speed=".55"></div>
                            </div>
                            <!-- /POST IMAGE -->

                            <!-- POST CONTENT -->
                            <div class="post_content">
                                <div class="title_holder">
                                    <span><a href="#">Travel</a><span class="date">April 01</span></span>
                                    <h3>Best Destinations for Travellers</h3>
                                    <p class="post_intro">This is just hightlight content of the post. Rest goes as it should be.  Integer non augue et dui sagittis pellentesque. Pellentesque viverra vitae mi a luctus. Suspendisse id ligula molestie, mollis dolor vitae, sagittis diam. Sed vitae malesuada dolor. </p>
                                    <p class="text">Cras cursus commodo nisl, eget facilisis ipsum molestie ac. Nullam vel sem congue, feugiat risus ut, efficitur velit. Nam tincidunt in mi at porttitor.</p>
                                    <p class="text">Nullam maximus eget odio nec elementum. Aliquam convallis in mauris vulputate mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultrices, mi non ultricies sagittis, sem erat consequat justo, ac imperdiet justo felis id felis. Fusce ac lacus lorem. Vivamus ullamcorper purus a purus dapibus pellentesque. Sed tristique pretium ipsum at commodo. Nullam viverra iaculis tortor, sed dictum mauris. </p>
                                </div>
                                <div class="directify_fn_tags">
                                    <label>Tags:</label>
                                    <em><a href="#">Travel</a>,<a href="#">Destination</a>,<a href="#">Holiday</a>,<a href="#">Europe</a></em>
                                </div>
                                <div class="directify_fn_social_icons">
                                    <label>Share:</label>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="xcon-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="xcon-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="xcon-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="xcon-pinterest"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="xcon-gplus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /POST CONTENT -->

                            <!-- POST COMMENT -->
                            <div class="directify_fn_comment_wrapper">
                                <div class="directify_fn_comment">

                                    <!-- COMMENTS -->
                                    <div class="comments">

                                        <div class="title_holder">
                                            <h3>All Comments</h3>
                                        </div>

                                        <!-- #1 COMMENT -->
                                        <div class="comment_single">
                                            <div class="person_info">
                                                <div class="info">
                                                    <div class="img_holder">
                                                        <img src="<?= THEME_ASSET_URL ?>img/blog/single1-com1.jpg" alt="" />
                                                    </div>
                                                    <span class="number">07</span>
                                                    <span class="reviews">Reviews</span>
                                                    <span class="name">Markos</span>
                                                </div>
                                            </div>
                                            <div class="person_comment">
                                                <div class="inner">
                                                    <span><span class="date">2 Month ago</span><a href="#">Reply</a></span>
                                                    <p>We took the Greenwich Village Food tour followed by the Historic Downtown tour.  Jen was a great guide.  Full of energy and interesting information.  She also was flexible when we wanted to go inside a church that wasn't actually part of the tour.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#1 COMMENT -->

                                    </div>
                                    <!-- /COMMENTS -->

                                    <!-- ADDING A COMMENT -->
                                    <div class="add_comment_wrap">
                                        <div class="add_comment">
                                            <div class="title_holder">
                                                <h3>Bình luận</h3>
                                            </div>
                                            <form action="<?= BASE_URL.'save-comment.php' ?>" method="post">
                                                <div class="your-comment">
                                                    <label>Bình luận của bạn<span>*</span></label>
                                                    <textarea id="creator-comment" name="content" cols="3" rows="10"></textarea>
                                                </div>
                                                <div class="your-button">
                                                    <input type="submit" id="creator-submit" value="Submit Your Comment" />
                                                </div>
                                                <?php if(isset($_GET['msg'])): ?>
                                                    <span class="text-danger"><?php echo $_GET['msg']; ?></span>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /ADDING A COMMENT -->

                                </div>
                            </div>
                            <!-- /POST COMMENT -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /BLOG -->


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