$(document).ready(function(){       
$('.box-container').magnificPopup({
         delegate: 'a',
         type: 'image',
         gallery: {
             enabled: true
         }
    });
 });

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

