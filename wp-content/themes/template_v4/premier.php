<?php
/*Template Name: Premier
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


    <section class="provide-world pt-120">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="apply-card  nb3-bg nb3-bg cus-rounded-1 py-10 py-md-14 py-lg-20 px-4 px-lg-18">
                        <div class="d-center"><span class="d-center gap-1"><i class="ti ti-map-pin fs-six p1-color"></i>San Francisco</span> <span class="mx-3 ">-</span> <span class="d-center gap-1"><i class="ti ti-clock-hour-10  fs-six p1-color"></i>San Francisco</span> </div>
                        <h3 class="mb-3 mt-3">Lead Backend Developer</h3>
                        <p class="mx-ch mx-auto">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidatat non proident, sunt in culpa.</p>
                        <a href="#" class="cmn-btn py-3 px-5 px-lg-6 mt-5 mt-lg-6" name="submit">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Apply Today start-->
    <section class="provide-world overflow-visible sidebar-section pt-120 pb-120  position-relative z-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="d-lg-none">
                        <button class="button sidebar_toggler_btn mb-4 d-flex align-items-center gap-2">
                            <i class="ti ti-layout-sidebar-left-collapse fs-four"></i>
                            <span>Apply Now</span>
                        </button>
                    </div>
                    <div class="d-flex flex-column gap-5">
                        <div class="part">
                            <h3>About the job</h3>
                            <p class="mt-5">Porta sed in leo, faucibus etiam. Rhoncus, lobortis nec, venenatis at. Tellus egestas quam cursus proin congue aenean faucibus quam tortor in interdum nevitae mi eleifend eu nulla eget. Pulvinar nibh nisi, porttitor vitae iaculis sed. Eros pretium scelerisque quis turpis risus viverra vivamus. Lorem a feugiat vitae lorem leo.</p>
                            <ul class="ul-decimal mt-4 ms-5 ">
                                <li>Nunc eget lorem velit nulla purus, massa gravida non dui ser</li>
                                <li>Amet in amet sit dictum eget facilisi scelerisque risus auctor sit</li>
                                <li>Platea sit ipsum lorem pretium neque velic  facilisis consequat</li>
                                <li>Sit ullamcorper mi et molestie fermentum morbi justo ornare</li>
                            </ul>
                        </div>
                        <div class="part">
                            <h3>Job responsibilities</h3>
                            <p class="mt-5">Porta sed in leo, faucibus etiam. Rhoncus, lobortis nec, venenatis at. Tellus egestas quam cursus proin congue aenean faucibus quam tortor in interdum nevitae mi eleifend eu nulla eget pulvinar nibh nisi, porttitor vitae.</p>
                        </div>
                        <div class="part">
                            <h3>Job requirements</h3>
                            <p class="mt-5">Mauris donec gravida aliquam ridiculus. A netus cras eros ullamcorper morbi tortor egestas lectus neque. Tincidunt ut magna orci convallis at duis morbi pulvinar dignissim lorem in adipiscing volutpat velit fames egestas consequat sagittis pulvinar massa ullamcorper tempus.</p>
                            <ul class="ul-dots mt-4">
                                <li>Consequat arcu diam rhoncus vel sit enim purus turpis etnibh</li>
                                <li>Facilisis sollicitudin quis pretium tellus tincidunt consectetur lorem</li>
                                <li>Et quam viverra nunc posuere pellentesque adipiscing commodo</li>
                                <li>Vulputate mauris massa consequat suspendisse massa nisi non diam</li>
                            </ul>
                            <p class="mt-5">A netus cras eros ullamcorper morbi tortor egestas lectus neque. Tincidunt ut magna orci convallis at duis morbi pulvinar dignissim lorem in adipiscing volutpat velit fames egestas consequat sagittis pulvinar massa.</p>
                            <a href="#" class="cmn-btn py-3 px-5 px-lg-6 mt-7 mt-lg-8" name="submit">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar nb4-bg cus-scrollbar sidebar-lg-section d-flex flex-column gap-5 gap-lg-6">
                        <div class="apply-card nb3-bg cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                            <i class="ti ti-brand-pocket fs-two"></i>
                            <h3 class="mb-3 mt-3">Data Analysist</h3>
                            <p>Trading doesn't have to be a solitary adventure. Join online trading communities, forums, and social media groups to connect with experienced traders.</p>
                            <a href="apply-job.html" class="cmn-btn py-3 px-5 px-lg-6 mt-5 mt-lg-6" name="submit">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Apply Today end -->  
<?php get_footer(); ?>