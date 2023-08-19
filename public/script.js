$(document).ready(function(){       // les boutons pour voir les images avec un background transparant
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
            event.preventDefault();        // Empêche le comportement de lien par défaut
            var target = $(this).attr("href");          // Récupère la cible de l'attribut href <-
            $("html, body").animate(
                {
                    scrollTop: $(target).offset().top      // Fait défiler la page pour atteindre la cible
                },
                1000      
            );
        });
    });

