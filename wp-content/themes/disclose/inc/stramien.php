<?php

    get_header(); 
    include get_template_directory() . '/sidebar.php';

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.feedback-input').on('input', function(){
        if ( $(this).val().length > 0 ) {
            $("#label").css("opacity", "0");
        } else {
            $("#label").css("opacity", "1");
        }
    });
});

</script>
    <!-- Scroll effect, this text must match the one given above apart from colors -->
    <div class="logo">
        <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
        <div class="logoPart logoText black"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
    </div>
    <h2 class="menuHeading">Menu</h2>
    <?php echoMenu(true); ?>
    <div class="stramienBackground overlay">
        <div class="innerTextRelativeContainer">
            <div class="innerTextAbsoluteContainer">    
                <div class="logo">
                    <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
                    <div class="logoPart logoText"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
                </div>
                    <h2 class="menuHeading">Menu</h2>
                    <?php echoMenu(false); ?> 
                    <?php if(is_page(127)) { //contact page ?>
                        <div class="row contactContainer">
                            <div class="contactHeader bronze"><?php the_title(); ?></div>
                            <div class="col-md-6">
                                <div class="gegevens bronze">Gegevens</div>
                                <div class="row contactLeftSideContainer">
                                    <div class="col-md-8">
                                        <i id="icon" class="far fa-envelope"></i>
                                            <p class="information">info@discloseagency.nl</p>
                                        <i id="icon" class="far fa-envelope"></i>
                                            <p class="information">info@discloseagency.nl</p>
                                    </div>
                                </div>
                                <div class="gegevens bronze mt-5">Adres</div>
                                <div class="row contactLeftSideContainer">
                                    <div class="col-md-8">
                                        <i id="icon" class="far fa-address-book"></i>
                                            <p class="information">Ommelseweg 55, 5721 WT Asten</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row contactRightSideContainer pb-5">
                                    <form method="POST" action="<?php bloginfo('template_directory')?>/js/mail.php" class="contact">
                                        <input type="text" name="name" placeholder="Naam">
                                        <input type="text" name="email" placeholder="E-mail adres">
                                        <input type="text" name="phonenumber" placeholder="Telefoonnummer">
                                        <label class="placeholder" id="label">Bericht</label>  
                                        <textarea type="text" class="feedback-input" name="message"></textarea>
                                    </form>
                                        <input class="contactForm-Button" type="submit" value="Verstuur">
                                </div>
                                

                            </div>
                        </div>
                    <?php } else {?>
                        
                    <div class="stramienHeader bronze"><?php the_title(); ?></div>
                    <?php }?>
                </div>
            </div>
        </div>
