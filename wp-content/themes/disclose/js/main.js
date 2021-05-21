window.onload = function () {
    const EFFECT = document.getElementById("effect");

    window.addEventListener('scroll', scrollEffectBranding);

    function scrollEffectBranding() {

        var branding = $(".branding");
        
        if(branding.offset().top - $(window).scrollTop() >= -30) {
            EFFECT.style.opacity = '1';
            EFFECT.style.transform = 'translateX(0px)';
            EFFECT.style.transition = '0.2s ease-in-out';
        } else {
            EFFECT.style.opacity = '0';
            EFFECT.style.transform = 'translateX(-50px)';
        }
    
    }
    scrollEffectBranding();
    

    window.addEventListener('scroll', scrollEffectMarketing);
    const EFFECT2 = document.getElementById("effect2");

    function scrollEffectMarketing() {

        var marketing = $(".marketing");
        
        if(marketing.offset().top - $(window).scrollTop() >= 0) {
            EFFECT2.style.opacity = '1';
            EFFECT2.style.transform = 'translateX(0px)';
            EFFECT2.style.transition = '0.2s ease-in-out';
        } else {
            EFFECT2.style.opacity = '0';
            EFFECT2.style.transform = 'translateX(-50px)';
        }
    
    }
    scrollEffectMarketing();
    

    window.addEventListener('scroll', scrollEffectMerkactivatie);
    const EFFECT3 = document.getElementById("effect3");

    function scrollEffectMerkactivatie() {

        var merkactivatie = $(".merkactivatie");
        
        if(merkactivatie.offset().top - $(window).scrollTop() >= 0) {
            EFFECT3.style.opacity = '1';
            EFFECT3.style.transform = 'translateX(0px)';
            EFFECT3.style.transition = '0.2s ease-in-out';
        } else {
            EFFECT3.style.opacity = '0';
            EFFECT3.style.transform = 'translateX(-50px)';
        }
    
    }
    scrollEffectMerkactivatie();
}



$(document).ready(function(){
	$(window).scroll(function(){

    var uitlegDiv_Pos = $('#changecolor_uitleg').offset().top;
    var uitlegDiv_Height = $('#changecolor_uitleg').height();
    
  	var contactDiv_Pos = $('#changecolor_contact').offset().top;
    var contactDiv_Height = $('#changecolor_contact').height();

    
    var logo_pos = $('.logoPart').offset().top;
    
    if(logo_pos > uitlegDiv_Pos && logo_pos < (uitlegDiv_Pos + uitlegDiv_Height) || logo_pos > contactDiv_Pos && logo_pos < (contactDiv_Pos + contactDiv_Height)) {
        
    	$('.logoPart').addClass('black'); $('.logoPart').removeClass('white');
    }

    else { 
        $('.logoPart').removeClass('black'); $('.logoPart').addClass('white'); 
    }
    
  })
});