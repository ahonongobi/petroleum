
<!DOCTYPE html>
<html lang="zxx">

<head>
    <style>
        .btn{
    color: #fff;
    font-size: 13px;
    display: block;
    text-align: center;
    line-height: 50px;
    font-family: 'Muli', sans-serif;
    font-weight: 800;
    border-radius: 5px;
    padding: 0;
    border: 0;
    display: inline-block;
}
.btn.btn-primary{
    background: #3a7cdd;
}

.btn.btn-primary:hover{
    background: #24c8a6;
    color: #fff
}

.btn.btn-default{
    background: #24c8a6;
}
.btn.btn-default:hover{
    background: #3a7cdd;
    color: #fff
}
.btn.btn-lg{
    width: 100%;
}
.btn.btn-sm{
    width: 200px;
}
   /*start loan page css*/

.single-nav h3 {
    font-size: 17px;
    color: #232323;
    font-weight: 600;
}

.single-nav h3 span {
    font-size: 18px;
    font-weight: 700;
    display: block;
}

.single-nav {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 10px;
    transition: .4s
}

.single-nav:before {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    content: "";
    background: #fbfbfb;
    z-index: -1;
    border: 1px solid #e9e9e9;
}

.single-nav:hover:before {
    background: #232935;
}

.loan-slider-box {
    background: #fbfbfb;
    padding: 50px;
    border: 1px solid #e9e9e9;
}

.single-nav:hover h3 {
    color: #fff
}

.single-loan-slider:last-child {
    margin-bottom: 0;
}

.single-loan-slider h4 {
    font-size: 20px;
    color: #232323;
    font-weight: 600;
}

.single-loan-slider {
    margin-bottom: 40px;
}

.ui-widget-header {
    background: #24c8a6 !important;
    border: 0 !important;
}

.ui-widget-content {
    background: #e3e3e3 !important;
    border: 0 !important;
}

.ui-slider-horizontal {
    height: 7px !important;
}

.ui-slider-horizontal .ui-slider-handle {
    top: -0.5em !important;
    margin-left: -.2em !important;
}

.ui-slider .ui-slider-handle {
    width: 7px !important;
}

.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
    background: #24c8a6 !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    background: #24c8a6 !important;
}

.single-loan-slider input {
    color: #aaaaaa;
    font-size: 16px;
    border: 0;
    margin-top: 10px;
}

.loan-emi {
    background: #3a7cdd;
    color: #fff;
    padding: 30px;
}

.single-total h5 {
    font-size: 20px;
    font-weight: 600;
}

.single-total h2 {
    color: #232935;
    font-size: 20px;
    font-weight: 600;
    font-family: 'Nunito Sans', sans-serif;
}

.single-total h2.emi-price {
    font-size: 50px;
}

button.btn.applybtn.btn-default.btn-sm:hover {
    background: #232323;
    color: #fff;
}

    </style>
    <title>Petroleum bank Aide en toute complicité.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Intense Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link rel="stylesheet" type="text/css" href="css/loadergo.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="home">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="m-0">Acceuil</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Simuler un prêt</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="loan-calculator-page mt-3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 single-nav">
                    <h3>Maison de prêt
                     <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3> Prêt personnel
                        <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3> Prêt moto
                        <span>@ 2%</span>
                    </h3>
                </div>
                <div class="col-md-3 single-nav">
                    <h3>Prêt étudiant
                        <span>@ 2%</span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 loan-slider-box">
                    <div class="single-loan-slider">
                        <h4>Montant du prêt</h4>
                        <div id="pricipal-slide"></div>
                        <div>
                            <span>$</span>
                            <h6 id="pricipal"></h6>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Durée (en mois) </h4>
                        <div id="totalyear-slide"></div>
                        <div>
                            <h6 id="totalyear"></h6>
                            <span>Durr</span>
                        </div>
                    </div>
                    <div class="single-loan-slider">
                        <h4>Taux d'intérêt</h4>
                        <div id="intrest-slide"></div>
                        <div>
                            <h6 id="intrest"></h6>
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center loan-emi">
                    <div class="total-calculation">
                        <div class="single-total">
                            <h5>Prêt EMI</h5>
                            <h2 class="emi-price" id="emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Total des intérêts à payer</h5>
                            <h2 id="tbl_emi">0</h2>
                        </div>
                        <div class="single-total">
                            <h5>Paiement total
<br>(Principal + intérêt)</h5>
                            <h2 id="tbl_la">0</h2>
                        </div>
                        <a   href="askpret.php" class="btn applybtn btn-default btn-sm">Emprunter maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer class="footer py-md-5 mt-3 pt-md-3 pb-sm-5">
         <?php include 'footer.php'; ?>      <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p class="text-wh">© 2019 Intense. All rights reserved | Design by
            <a href="#">.</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>
    <!-- //move top icon -->
    <script src="css/jquery-2.1.4.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/menumaker.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/calculator.js"></script>
    <script src="assets/js/active.js"></script>
    <script src='js/aos.js'></script>
    <script src="js/aosindex.js"></script>
    <script>
      <script>

 (function($) {

    $("#pricipal-slide").slider({
        range: "min",
        min: 4000,
        max: 50000000,
        value: 4000,
        step: 1000,
        slide: function(event, ui) {
            $("#pricipal").text(ui.value);
            loancalculate();
        }
    });
    $("#pricipal").text($("#pricipal-slide").slider("value"));

    $("#totalyear-slide").slider({
        range: "min",
        min: 12,
        max: 360,
        step: 1,
        value: 120,
        slide: function(event, ui) {
            $("#totalyear").text(ui.value);
            loancalculate();
        }
    });
    $("#totalyear").text($("#totalyear-slide").slider("value"));

    $("#intrest-slide").slider({
        range: "min",
        min: 2,
        max: 3,
        step: 0.01,
        value: 10,
        slide: function(event, ui) {
            $("#intrest").text(ui.value);
            loancalculate();
        }
    });
    $("#intrest").text($("#intrest-slide").slider("value"));

    loancalculate();
})(jQuery);

function loancalculate()
{
    var loanAmount =$("#pricipal").text();
    var numberOfMonths =$("#totalyear").text();
    var rateOfInterest=$("#intrest").text();

    var monthlyInterestRatio = (rateOfInterest/100)/12;

    var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
    var bottom = top -1;
    var sp = top / bottom;
    var emi = ((loanAmount * monthlyInterestRatio) * sp);
    var full = numberOfMonths * emi;
    var interest = full - loanAmount;
    var int_pge =  (interest / full) * 100;
    //$("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
    //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");

    var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");


    $("#emi").html(emi_str);
    $("#tbl_emi").html(int_str);
    $("#tbl_la").html(full_str);
}
      </script>
      <script src="js/jquery-2.1.4.min.js"></script>
     <script>
         (function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: 2.0 Nav Active Code
    if ($.fn.classyNav) {
        $('#cryptosNav').classyNav();
    }

    // :: 3.0 Sliders Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlide = $('.hero-slides');
        var aboutSlide = $('.about-slides');

        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['Prev', 'Next'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            var slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });
 
        aboutSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        $('.megamenu-slides').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 1000
        });
    }

    // :: 4.0 Gallery Active Code
    if ($.fn.magnificPopup) {
        $('.videobtn').magnificPopup({
            type: 'iframe'
        });
    }

    // :: 5.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    // :: 6.0 CouterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 7.0 wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }
    
    // :: 8.0 prevent default a click
    $('a[href="#"]').click(function ($) {
        $.preventDefault()
    });

})(jQuery);
     </script>
</body>

</html>