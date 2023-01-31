<?php
$title = "Blog";                   
include "include/header.php";                 
?>

<main>
    <!-- Bread crumb section start -->

    <section class="banner_breadcrumb paddingY-36">
        <div class="container-md">
            <div class="banner_crumb paddingY-60 px-3 px-sm-5">
                <h2 class="text-white">Blog</h2>
                <h6 class="text-white">
                    <a class="text-decoration-underline text-white" href="index.html">Home</a>
                    <span>/ Blog</span>
                </h6>
            </div>
        </div>
    </section>

    <!-- Bread crumb section End -->

    <section class="search_blog_wrapper paddingY-36">
        <div class="container">
            <div class="search_input_wrapper">
                <i class="uil uil-search"></i>
                <input class="form-control" type="search" name="" id="" placeholder="Search Blog">
                <button type="submit">Search</button>
            </div>
            <div class="tab_pane_wrapper paddingtop-36">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                            aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                            aria-controls="profile-tab-pane" aria-selected="false">Fantasy</button>
                    </li>
                </ul>
            </div>

            <div class="tab_section">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="paddingtop-60">
                            <div class="main_blog_wrapper row align-items-center blog_hover">
                                <div class="col-lg-6 col-md-5">
                                    <div class="blog_image">
                                        <img src="images/technology.webp" alt="" class="img-fluid">
                                        <a href="blog-details.php" class="blog_details_link">
                                            <i class="uil uil-telegram-alt"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7">
                                    <div class="blog_content ps-md-4">
                                        <a href="" class="fw-medium text-theme mb-1 h6 text-decoration-none d-block">Technology</a>
                                        <a href="blog-details.php" class="h2 text-main text-decoration-none">An extraordinary WebGL has been released by great china scientist</a>
                                        <p class="text-grey my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                        <div class="profile_blogger">
                                            <div class="profile_img">
                                                <img src="images/hasan.webp" alt="" class="img-fluid">
                                            </div>
                                            <div class="profile_data">
                                                <h5 class="fw-medium">Mohammad Raza</h5>
                                                <h6 class="text-grey">Jun 27, 2021</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_cards_wrapper paddingY-90">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog1.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">Elecricity</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">Hang onto your memories</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/syed.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Parvej Alam</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog2.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">NFT</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">Best tech blogs</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/amit.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Mohammad Faiz</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog3.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">Education</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">The blog’s simple black</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/bakaulllah.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Mohammad Dansih</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog4.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">Products</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">Gizmodo is another pack</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/daniyaz.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Suresh Sir</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog5.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">Fantasy</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">What Can We Learn</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/firoz.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Firoz Sir</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 blog_hover">
                                        <div class="blog_cards">
                                            <div class="blog_image">
                                                <img src="images/blog6.webp" alt="" class="img-fluid">
                                                <a href="blog-details.php" class="blog_details_link">
                                                    <i class="uil uil-telegram-alt"></i>
                                                </a>
                                            </div>
                                            <div class="blog_content">
                                                <a href="#" class="h6 text-decoration-none text-theme mb-1">Education</a>
                                                <a href="blog-details.php" class="h4 text-decoration-none text-main d-block fw-600 mb-2">The blog’s simple black</a>
                                                <p class="text-grey mb-3">Save the moments that matter. Blogger lets you safely store thousands of posts, photos, and more with Google.</p>
                                                <div class="profile_blogger">
                                                    <div class="profile_img">
                                                        <img src="images/bakaulllah.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="profile_data">
                                                        <h5 class="fw-medium">Mohammad Dansih</h5>
                                                        <h6 class="text-grey">Jun 27, 2021</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_wrapper d-flex justify-content-center paddingtop-36">
                                    <a href="#" class="btn btn-main">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
$title = "Php Header Footer";                   
include "include/footer.php";                 
?>