
 <?php 
 $msg="";
include 'ajax5.php';

  ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Petroleum bank Aide en toute complicité.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Petroleum bank Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
          }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/loadergo.css">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- ##### Preloader ##### -->
    
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
            <li class="breadcrumb-item active" aria-current="page">Connexion</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- login  -->
    <div class="modal-body align-w3">
        <form action="" method="post" class="p-sm-3">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email</label>
                <input type="text" class="form-control" placeholder="votre email" name="email" id="email"
                    >
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label">Mot de Passe</label>
                <input type="password" class="form-control" placeholder="*****" name="password" id="password" >
            </div>
            <div class="right-w3l">
                
                <?php echo $msg; ?>
            </div>
            <div class="right-w3ls">
                <input type="submit" class="form-control bg-theme" value="Login">
                
            </div>
            <div class="row sub-w3l my-3">
                <div class="col-sm-6 sub-w3layouts_hub">
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1" class="text-secondary">
                        <span></span>se souvenir?</label>
                </div>
                <div class="col-sm-6 forgot-w3l text-sm-right">
                    <a href="forgotpassword.php" class="text-secondary">Mot de Passe oublié?</a>
                </div>
            </div>
            <p class="text-center dont-do text-secondary">Pas encore de compte?
                <a href="register.php" class="text-theme-2 font-weight-bold">
                    S'inscrire maintenat</a>
            </p>
        </form>
    </div>

    <!-- //login -->

    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
   <?php include 'footer.php'; ?>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p class="text-wh">© 2019 Petroleum bank.Tout droits reservés| 
            <a href="#"> ...</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- move top icon -->
    <a href="#home" class="move-top text-center">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </a>
    <script>
         (function() {
    if (!localStorage.getItem('cookieconsent')) {
        document.body.innerHTML += '\
        <div class="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#000;color:#FFF;text-align:center;width:100%;z-index:99999;">\
            This site uses cookies. By continuing to use this website, you agree to their use. \
            <a href="#" style="color:#CCCCCC;">I Understand</a>\
        </div>\
        ';
        document.querySelector('.cookieconsent a').onclick = function(e) {
            e.preventDefault();
            document.querySelector('.cookieconsent').style.display = 'none';
            localStorage.setItem('cookieconsent', true);
        };
    }
})();
     </script>
    <!-- //move top icon -->
   <!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
facebook: "1639986620602076", // Facebook page ID
whatsapp: "+22964745149", // WhatsApp number
call_to_action: "Contactez nous", // Call to action
button_color: "#FF6550", // Color of button
position: "right", // Position may be 'right' or 'left'
order: "facebook,whatsapp", // Order of buttons
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>


<script src="js/jquery.min.js"></script>
<script>
$("form").submit(function() {
    var delay = 2000;
    
        
        var password = $('#password').val();
        if(password == ''){
            $('.right-w3l').html(
            '<span style="color:red;">Entrer votre code de connexion!</span>'
            );
            $('#password').focus();
            return false;
            }
             
            var email = $('#email').val();
        if(email == ''){
            $('.right-w3l').html(
            '<span style="color:red;">Entrer une adresse email!</span>'
            );
            $('#email').focus();
            return false;
            }
        if( $("#email").val()!='' ){
            if( !isValidEmailAddress( $("#email").val() ) ){
            $('.right-w3l').html(
            '<span style="color:red;">L\'addresse Email entré est incorrect!</span>'
            );
            $('#email').focus();
            return false;
            }
            }
            

             
        
            
        //var message = $('#message').val();
        //if(message == ''){
           // $('.message_box').html(
            //'<span style="color:red;">Enter Your Message Here!</span>'
            //);
            //$('#message').focus();
            //return false;
            //}       
            //$.ajax
            //({
             //type: "POST",
             //url: "ajax5.php",
             //data: "password="+password+"&email="+email,
             //beforeSend: function() {
             //$('.right-w3l').html(
             //'<img src="Loader.gif" width="25" height="25"/>'
             //);
             //},      
             //success: function(data)
             //{  

              //  if (data.response==1) {
              //   window.location = "index.php";
               // }
               // else if(data.response==0){
                // setTimeout(function() {
                //    $('.right-w3l').html(data);
                    
                //}, delay);}
            
             //}
            // });
    
            
});
//Email validation Function 
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
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