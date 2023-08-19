<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="http://localhost/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('script.js'); ?>">
    <title>Mon Site</title>
</head>
<body class="overflow-x: hidden;">
<div>
<?php 
include_once 'templates/header.php'; 
include_once 'homeView.php';
include_once 'aboutView.php';
include_once 'aboutDetailsView.php';
include_once 'facilityView.php';
include_once 'OurCommitmentsView.php';
include_once 'contactView.php';
include_once 'templates/footer.php'; 
?>
</div>
<!-- Intégrer jQuery avant Magnific Popup -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--AOS js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- Magnific-popup -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Intégrer Bootstrap JS -->
<script src="http://localhost/bootstrap/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){       //  background transparant
$('.box-container').magnificPopup({
         delegate: 'a',
         type: 'image',
         gallery: {
             enabled: true
         }
    });
 });
      //les images qui viennent à droite et à gauche
 AOS.init({              
    duration: 1000,
    delay: 400
});

$(document).ready(function() {
    $(".scroll-link").click(function(event) {
        event.preventDefault();        
        var target = $(this).attr("href");          
        $("html, body").animate(
            {
                scrollTop: $(target).offset().top      
            },
                1000      
        );
    });
});

</script>

</body>
</html>






