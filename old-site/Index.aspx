<%@ page title="" language="C#" masterpagefile="~/webmaster.master" autoeventwireup="true" inherits="Index, App_Web_npiis2vy" %>

<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <!--=== Slider ===-->
    <!--// Start carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/img/1.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/img/2.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/img/3.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/img/4.jpg" alt="" />
            </div>
            <div class="item">
                <img src="assets/img/2.jpg" alt="" />
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a><a class="right carousel-control" href="#myCarousel"
            role="button" data-slide="next">
            <span class="fa fa-angle-right glyphicon-chevron-right"
                aria-hidden="true"></span><span class="sr-only">Next</span>
        </a>
    </div>
    <!--// End carousel //-->
    <div class="bg-color-light">
        <div class="container content">
            <div class="headline-center margin-bottom-60">
                <h2>WHAT PEOPLE SAY</h2>
            </div>
            <!-- Testimonials Wrap -->
            <div class="testimonials-v6 testimonials-wrap">
                <div class="row margin-bottom-50">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="assets/img/testimonials/img5.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Evan Bohringer</strong>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="assets/img/testimonials/img6.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Sara Lisbon</strong>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/end row-->

                <div class="row margin-bottom-20">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="assets/img/testimonials/img3.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Alice Williams</strong>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testimonials-info rounded-bottom">
                            <img class="rounded-x" src="assets/img/testimonials/img2.jpg" alt="">
                            <div class="testimonials-desc">
                                <p>Donec quis lorem sit amet nibh tempor porttitor non eu justo. Fusce iaculis scelerisque nibh at rhoncus. Aliquam blandit.</p>
                                <strong>Jane Wearne</strong>
                                <span>Technical Direector</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/end row-->
            </div>
            <!-- End Testimonials Wrap -->
        </div>
        <!--/end container-->
    </div>
    <!--=== End Testimonials v6 ===-->
    <!--=== Parallax Counter v4 ===-->
    <div class="parallax-counter-v4 parallaxBg">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-xs-6 md-margin-bottom-50">
                    <i class="fa fa-indent"></i>
                    <span class="counter">5</span>
                    <h4>Certifications</h4>
                </div>
                <div class="col-md-3 col-xs-6 md-margin-bottom-50">
                    <i class="fa fa-th-large"></i>
                    <span class="counter">1957</span>
                    <h4>Partners</h4>
                </div>
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-arrows-alt"></i>
                    <span class="counter">3495</span>
                    <h4>Happy Participants</h4>
                </div>
                <div class="col-md-3 col-xs-6">
                    <i class="fa fa-codepen"></i>
                    <span class="counter">576</span>
                    <h4>Knowledge Partners</h4>
                </div>
            </div>
            <!--/end row-->
        </div>
        <!--/end container-->
    </div>
    <!--=== End Parallax Counter v4 ===-->
    <!--===End Content Part ===-->
</asp:Content>
