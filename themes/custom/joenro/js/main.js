(function ($, Drupal) {

    $(document).ready(function () {
        if ($('body').hasClass('path-frontpage')) {
            new Splide('.vista-testimonios', {
                type: 'slide',
                perPage: 2,
                arrows: true,
                pagination: false,
                gap: '.5rem',
                breakpoints: {
                    640: {
                        perPage: 2,
                        gap: '.7rem',
                        height: '6rem',
                    },
                    480: {
                        perPage: 1,
                        gap: '.7rem',
                        height: '6rem',
                    },
                },
            }).mount();

            new Splide('.vista-clientes', {
                type: 'loop',
                perPage: 2,
                autoplay: true,
                perPage: 5,
                perMove: 1,
                gap: '1rem',
                autoplay: true,
                interval: 0,        // sin pausa entre movimientos
                speed: 500000,        // velocidad muy alta = efecto cinta
                pauseOnHover: false,
                pauseOnFocus: false,
                arrows: false,      // ❌ oculta flechas
                pagination: false,
            }).mount();
        }


    })




})(jQuery, Drupal);

//placeholders
jQuery('html[lang="es"] .path-user  .region-content .user-login-form .form-item-name input.form-text').attr('placeholder', 'Usuario');

jQuery('html[lang="es"] .path-user  .region-content .user-login-form .form-item-pass input.form-text').attr('placeholder', 'Contraseña');
jQuery('html[lang="es"]   #contact-message-contacto-form .form-item input.form-text').attr('placeholder', 'Nombre Completo'); 
jQuery('html[lang="es"]   #contact-message-contacto-form .form-item input[type="email"]').attr('placeholder', 'Correo electrónico'); 
jQuery('html[lang="es"]   #contact-message-contacto-form .form-item textarea').attr('placeholder', 'Descripción del requerimiento'); 




jQuery('html[lang="en"] .path-user  .region-content .user-login-form .form-item-name input.form-text').attr('placeholder', 'User');

jQuery('html[lang="en"] .path-user  .region-content .user-login-form .form-item-pass input.form-text').attr('placeholder', 'Password');

jQuery('html[lang="en"] .region-contacto #block-joenro-contactblock #contact-message-contacto-form .form-item input.form-text').attr('placeholder', 'Last name'); 

jQuery('html[lang="en"]   #contact-message-contacto-form .form-item input.form-text').attr('placeholder', 'Full Name'); 
jQuery('html[lang="en"]   #contact-message-contacto-form .form-item input[type="email"]').attr('placeholder', 'Email'); 
jQuery('html[lang="en"]   #contact-message-contacto-form .form-item textarea').attr('placeholder', 'Description of requirements'); 

document.addEventListener('DOMContentLoaded', function () {
    if (jQuery('body').hasClass("path-contact")) {

        var map = L.map("map_contact").setView([18.5600, -68.3724], 12);

        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution:
                '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        }).addTo(map);

        L.marker([18.56, -68.37])
            .addTo(map)
            .bindPopup("<b>JOENRO GROUP</b> <br> Sede Punta Cana")
            .openPopup();


    }
});
