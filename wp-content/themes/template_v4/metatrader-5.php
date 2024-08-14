<?php
/*Template Name: Metatrader 5
*/
?>
<?php get_header(); ?>
    <!-- banner section start-->
    <section class="banner-section  pt-120 pb-120">
        <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
            <div class="row">
                <div class="col-12 breadcrumb-area ">
                    <h2 class="mb-4"><?php echo the_title(); ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span><?php echo the_title(); ?></span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    
    <!-- Blog details start -->
    <section class="blog-details overflow-visible sidebar-section  pt-120 pb-120">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-7 col-xl-12">
                    <div class="d-lg-none">
                        <button class="button sidebar_toggler_btn mb-4 d-flex align-items-center gap-2">
                            <i class="ti ti-layout-sidebar-left-collapse"></i>
                            <span>Sidebar Toggler</span>
                        </button>
                    </div>
                    <div class="d-flex flex-column gap-10 gap-lg-15 ">
                        <div class="blog__card">
                            <div class="blog__thumbs position-relative">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_details.png" alt="Image" class="w-100 cus-rounded-1">
                            </div>
                            <div class="blog_news__content mt-5">
                                <h2 class="mb-5">Trading Pitfalls Common Mistakes and How to Avoid Them...</h2>
                                <p class=" mb-7 mb-lg-8">rading can be a rewarding endeavor, but it's not without its challenges. Even experienced traders can fall victim to common mistakes that can negatively impact their portfolios. In this blog post, we'll highlight ten common trading mistakes and provide insights on how to avoid them to enhance your chances of success in the financial markets.</p>
                                <div class="border-start border-color border-4 ps-4 ps-lg-5 py-1">
                                    <em class="fs-five fw_500 nw1-color">One of the most prevalent mistakes is trading without a well-defined plan. Trading without clear objectives, entry and exit strategies, and risk management guidelines can lead to impulsive decisions and losses.</em>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details__inner">
                            <h3>Navigating the Trading Jungle A Beginner's Guide</h3>
                            <p class="mt-3">Before you venture into the trading world, it's crucial to grasp the fundamentals. Trading involves the buying and selling of financial assets, such as stocks, currencies, commodities, or cryptocurrencies, with the goal of making a profit. </p>
                            <div class="row mt-5" >
                                <div class="col-md-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_details_inner.png" class="cus-rounded" alt="Images">
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_details_inner2.png" class="cus-rounded" alt="Images">
                                </div>
                            </div>
                            <p class="mt-5">One of the most prevalent mistakes is trading without a well-defined plan. Trading without clear objectives and risk management guidelines can lead to impulsive decisions and losses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog details end -->
      
    <!--blog_news start-->
    <section class="blog_news pb-120 position-relative z-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="heading__content d-flex row-gap-7 gap-20 flex-wrap justify-content-between align-items-center mb-10 mb-lg-15 ">
                    <div class="heading__part">
                        <span class="heading s1-color fs-five mb-5">Blog</span>
                        <h3>News & Analysis</h3>
                    </div>
                </div>
            </div>
            <div class="row gy-6">
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg rounded-3 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_news.png" alt="Image" class="w-100">
                            <a href="#" class="border-color-s1 nw1-color fs-seven rounded-2 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">News</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                        <a href="#"><h5 class="mb-4 mb-lg-5">Trading Psychology: Mastering Your Mind for Profit</h5></a>
                        <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="#" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6 mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg rounded-3 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_news2.png" alt="Image" class="w-100">
                            <a href="#" class="border-color-s1 nw1-color fs-seven rounded-2 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">Features</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                        <a href="#"><h5 class="mb-4 mb-lg-5">Trading Pitfalls Common Mistakes and How to Avoid Them...</h5></a>
                        <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="#" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6 mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-4">
                    <div class="blog_news__card nb3-bg rounded-3 overflow-hidden">
                        <div class="blog_news__thumbs position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_news3.png" alt="Image" class="w-100">
                            <a href="#" class="border-color-s1 nw1-color fs-seven rounded-2 position-absolute top-0 end-0 py-1 px-3 mt-5 me-5">News</a>
                        </div>
                        <div class="blog_news__content py-6 py-lg-7 py-xxl-8 px-4 px-lg-5 px-xxl-6">
                        <a href="#"><h5 class="mb-4 mb-lg-5">Trading Platforms: Tools for Success in Financial Markets</h5></a>
                        <p>Trading in financial markets involves a wide 
                            employ to make informed decisions.</p>
                            <a href="#" class="link fs-five fw-semibold d-flex gap-2 gap-lg-3 align-items-center mt-6 mt-lg-8"> Continue Reading <i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- blog_news end -->  
<?php get_footer(); ?>