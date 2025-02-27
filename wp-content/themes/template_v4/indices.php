<?php
/*Template Name: Indices
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
    
    <!--Customers start-->
    <section class="customers position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector6.png" alt="vector" class="position-absolute rotate d-none d-xxxl-flex start-0 top-0 pt-20 mt-5 ps-20 ms-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector8.png" alt="vector" class="position-absolute bottom-0 pb-20 mb-4 d-none d-xxl-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/earth.png" alt="vector" class="position-absolute d-none d-xl-flex bottom-0 end-0 rotate">
        </div>
        <div class="container">
            <div class="row gy-10 gy-xl-0 justify-content-center justify-content-lg-between align-items-center align-items-xxl-end">
                <div class="col-lg-6 col-xxl-5 pb-0 pt-120 pb-lg-120">
                    <div class="customers__content me-xxl-18">
                        <h3 class="mb-4">We help our customers.</h3>
                        <p class="mx-ch">The rise of cryptocurrencies has opened up new trading 
                            In this beginner's guide to cryptocurrency trading we demystify the world of digital currencies</p>   
                        <ul class="list_divided d-flex flex-wrap gap-5 mt-5 mt-xxl-6">
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Charts trading</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Supreme Authority</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Worldly Power</li>
                            <li class="d-flex align-items-center gap-3 fs-six-up"><i class="ti ti-circle-check s1-color fs-four"></i>Global Dominance</li>
                        </ul>
                        <div class="pt-7 pt-lg-8 mt-7 mt-lg-8 border-top border-color four">
                            <div class="counter-area d-flex gap-8 gap-xxl-10 ">
                                <div class="counter-part">
                                    <span class="box_15 p1-bg rounded-circle d-center mb-5"><i class="ti ti-send fs-four nb4-color"></i></span>
                                    <div class="counters d-flex">
                                        <span class="odometer display-four" data-odometer-final="276">0</span>
                                    </div>
                                    <span class="mt-4">Investor engaged</span>
                                </div>
                                <div class="counter-part">
                                    <span class="box_15 p1-bg rounded-circle d-center mb-5"><i class="ti ti-user fs-four nb4-color"></i></span>
                                    <div class="counters d-flex">
                                        <span class="odometer display-four" data-odometer-final="126">0</span>
                                    </div>
                                    <span class="mt-4">Business launch</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-6 col-xxl-6 ">
                    <div class="customers__thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customers.png" class="w-100 max-xxl-un cus-rounded-2" alt="video">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customers end -->
<?php get_footer(); ?>