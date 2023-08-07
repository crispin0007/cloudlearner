<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | CloudLearner</title>
    <?php 
	include 'elements/topheader.php';
	include 'database.php';
	?>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header section -->
    <?php 
	include 'elements/navbar.php'
	?>
    <!-- Header section end -->


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg="img/page-bg/3.jpg">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="#">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- search section -->
    <section class="search-section ss-other-page">
        <div class="container">
            <div class="search-warp">
                <div class="section-title text-white">
                    <h2><span>Search your course</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!-- search form -->
                        <form class="course-search-form">
                            <input type="text" placeholder="Course">
                            <input type="text" class="last-m" placeholder="Category">
                            <button class="site-btn btn-dark">Search Couse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->


    <!-- Page  -->
    <section class="blog-page spad pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- blog post -->
                    <?php 
                            $sql = "SELECT * FROM blog_posts WHERE status='1'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // Output the blog post HTML dynamically
                                    echo '<div class="blog-post">';
                                    echo '<img src='.$row["postimagelocation"].' alt="">';
                                    echo '<h3>' . $row["post_title"] . '</h3>';
                                    echo '<div class="blog-metas">';
                                    echo '<div class="blog-meta author">';
                                    echo '<div class="post-author set-bg" data-setbg="img/authors/1.jpg"></div>';
                                    echo '<a href="#">' . $row["post_author"] . '</a>';
                                    echo '</div>';
                                    echo '<div class="blog-meta">';
                                    echo '<a href="#">' . $row["post_topic"] . '</a>';
                                    echo '</div>';
                                    echo '<div class="blog-meta">';
                                    echo '<a href="#">' . $row["post_date"] . '</a>';
                                    echo '</div>';
                                    echo '<div class="blog-meta">';
                                    echo '<a href="#">' . $row["post_comment"] . ' Comments</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<p>' . $row["post_descrip"] . '</p>';
                                    echo '<a href="" class="site-btn readmore">Read More</a>';
                                    echo '</div>';
                                }
                            } else {
                                echo "No blog posts found.";
                            }
                    ?>
                    <!-- blog post -->


                </div>
                <div class="col-lg-3 col-md-5 col-sm-9 sidebar">
                    <div class="sb-widget-item">
                        <form class="search-widget">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sb-widget-item">
                        <h4 class="sb-w-title">Categories</h4>
                        <ul>
                            <li><a href="#">Developement</a></li>
                            <li><a href="#">Social Media</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Events & Lifestyle</a></li>
                            <li><a href="#">Uncategorizes</a></li>
                        </ul>
                    </div>
                    <div class="sb-widget-item">
                        <h4 class="sb-w-title">Archives</h4>
                        <ul>
                            <li><a href="#">February 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                            <li><a href="#">April 2018</a></li>
                            <li><a href="#">May 2018</a></li>
                            <li><a href="#">June 2018</a></li>
                        </ul>
                    </div>
                    <div class="sb-widget-item">
                        <h4 class="sb-w-title">Archives</h4>
                        <div class="tags">
                            <a href="#">education</a>
                            <a href="#">courses</a>
                            <a href="#">development</a>
                            <a href="#">design</a>
                            <a href="#">on line courses</a>
                            <a href="#">wp</a>
                            <a href="#">html5</a>
                            <a href="#">music</a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- Page end -->


    <!-- banner section -->
    <section class="banner-section spad">
        <div class="container">
            <div class="section-title mb-0 pb-2">
                <h2>Join Our Community Now!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris
                    scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>
            <div class="text-center pt-5">
                <a href="#" class="site-btn">Register Now</a>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- footer section -->
    <?php 
	include 'elements/footer.php'
	?>
    <!-- footer section end -->



</body>

</html>