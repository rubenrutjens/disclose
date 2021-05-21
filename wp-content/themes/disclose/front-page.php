<?php
   get_header(); 
   include get_template_directory() . '/sidebar.php';
   
   ?>

<body class="stopTransition">
   <?php wp_body_open() ?>
   <!-- Scroll effect, this text must match the one given above apart from colors -->
   <div class="logo">
        <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
        <div class="logoPart logoText black"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
   </div>
   <h2 class="menuHeading">Menu</h2>
   <div class="innerText black">Je visuele identiteit is<br/>het verlengstuk van<br/>je ambitie.</div>
   <?php echoMenu(true); ?>
   <div class="globeBackground" >
      <div class="innerTextRelativeContainer">
         <div class="innerTextAbsoluteContainer">
            <div class="logo">
               <div class="logoPart logoIcon"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoIcon.svg"); ?></a></div>
               <div class="logoPart logoText"><a href="<?php echo get_option("siteurl"); ?>"><?php echo file_get_contents(get_template_directory() . "/img/logoText.svg"); ?></a></div>
            </div>
            <h2 class="menuHeading">Menu</h2>
            <div class="innerText">Je <span class="bronze">visuele identiteit</span> is<br/>het <span class="bronze">verlengstuk</span> van<br/>je <span class="bronze">ambitie</span>.</div>
            <?php echoMenu(false); ?>
         </div>
      </div>
   </div>
   <!-- Article First container -->
   <main>
      <div id="changecolor_uitleg">
         <div class="main">
            <article class="doelContainer" >
               <div class="doelTextContainer">
                  <div class="flex-child text" data-aos="fade-right">
                     <h2>Onze missie: Making <span class="bronze">Brands</span> Memorable</h2>
                     <p><?php echo get_theme_mod('text-callout-first-section') ?></p>
                     <a href="#"><?php echo get_theme_mod('button-callout-first-section')?></a>
                  </div>
                  <div class="flex-child image" data-aos="fade-left"><img src="<?php echo get_theme_mod('image-callout-first-section')?>" alt="">
                  </div>
               </div>
            </article>
            <!-- Article Second container -->
            <article class="doelContainer reverse">
               <div class="doelTextContainer">
                  <div class="flex-child text reverse" data-aos="fade-left">
                     <h2>Onze visie: Eerst terug naar de kern, daarna bouwen</h2>
                     <p>‘Disclose’ betekend ‘openbaren’.</p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi error optio dolorem praesentium aliquam. Et eligendi nostrum odit, excepturi veritatis eum, aspernatur, labore itaque iure vel pariatur? Quo, ex eum.</p>
                     <a href="#">Lees meer</a>
                  </div>
               </div>
               <div class="doelImageContainer">
                  <div class="flex-child image reverse" data-aos="fade-right"><img src="<?php echo get_theme_mod('image-callout-first-section')?>" alt=""></div>
               </div>
            </article>
            <!-- Section Quote Jeff Bezos -->
            <section class="quoteContainer jeffBezos"data-aos="zoom-in">
               <h2 class="quote">“<?php echo get_theme_mod('text-callout-quote-section')?>”</h2>
               <div class="cloud"></div>
            </section>
            <section class="expertiseContainer">
               <h1 class="expertisesHeading bronze" data-aos="zoom-out-right">Expertises</h1>
               <p class="expertisesText"data-aos="zoom-out-right">Wij bieden onze diensten verdeeld in drie kernactiviteiten.</p>
               <div class="expertiseDisplay">
                  <?php            
                     $expertiseCreated2 = arrayExpertise();
                     foreach ($expertiseCreated2 as $expertiseCreated) {
                     ?>
                  <div class="row mr-0 pr-0">
                     <div class="col mr-0 pr-0">
                        <article class="expertise" data-aos="flip-up" data-aos-duration="4000">
                           <img src="<?php echo wp_get_attachment_url(get_theme_mod('image-callout-expertise-section'.$expertiseCreated[$i])) ?>" alt="">
                           <div class="expertiseText">
                              <h2 class="bronze"><?php echo get_theme_mod('title-callout-expertise-section'.$expertiseCreated[$i]) ?></h2>
                              <p><?php echo get_theme_mod('text-callout-expertise-section'.$expertiseCreated[$i]) ?></p>
                              <a href="#">Ontdek meer</a>
                           </div>
                        </article>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </section>
         </div>
      </div>
      <article class="banner-blok">
         <?php echoMenu(false); ?>
         <div class="banner"  id="content">
            <div class="banner-title" id="magnite">
               Het proces naar 
               <class class="bronze">resultaat</class>
            </div>
            <div class="twoVerticleBronzeLines-small"></div>
            <div id="banner-story" >
               <div class="branding" id="effect">
                  <h1 class="banner-letter" id="taviraj-r">B</h1>
                  <h4 class="banner-topic" id="taviraj-sb">I. Branding</h4>
                  <p class="banner-text" id="taviraj-l">
                     We starten door terug te gaan naar de kern van je organisatie. Waar sta je voor, wat zijn je drijfveren en unique selling points? 
                     Deze informatie is ontzettend waardevol om als uitgangspunt te gebruiken voor de ontwikkeling van een identiteit die past bij jou als organisatie. 
                     We leggen een merkstrategie vast waarna we de stap gaan zetten naar het creatieve gedeelte: De visuele identiteit.
                     In tegenstelling tot vaak wordt gedacht is een branding dus niet alleen een logo. Een branding is de manier waarop jij het verhaal van je organisatie 
                     naar buiten draagt. Een visuele identiteit is daarvan een belangrijk onderdeel. 
                     Tot slot zorgen wordt je huisstijl vast gelegd in een handboek, waardoor iedereen binnen én buiten de organisatie de huisstijl op 
                     een consequente en correcte manier kan toepassen. 
                  </p>
               </div>
               <div class="marketing" id="effect2">
                  <h1 class="banner-letter2" id="taviraj-r">O</h1>
                  <h4 class="banner-topic" id="taviraj-sb">II. Online Marketing</h4>
                  <p class="banner-text" id="taviraj-l">
                     Online marketing kan niet zorgvuldig worden uitgevoerd zonder een solide strategie. We gaan doelstellingen bepalen, onderzoeken waar de doelgroep
                     online actief is, welke kanalen daarvoor geschikt zijn en wat het plan van aanpak wordt. Al deze facetten leggen we vast in een online strategie.
                     Het begrip ‘online marketing’ is ontzettend breed en bevat alle activiteiten op het gebied van marketing welke je online kunt uitvoeren:
                     Website, social media, e-mail marketing, zoekmachine optimalisatie en advertenties plaatsen. De online wereld veranderd ontzettend snel en door
                     gaandeweg data te verzamelen kunnen we continu blijven optimaliseren en bijsturen binnen de online marketing activiteiten voor jouw organisatie.
                  </p>
               </div>
               <div class="merkactivatie" id="effect3">
                  <h1 class="banner-letter3" id="taviraj-r">M</h1>
                  <h4 class="banner-topic" id="taviraj-sb">III. Merkactivatie</h4>
                  <p class="banner-text" id="taviraj-l">
                     Online marketing kan niet zorgvuldig worden uitgevoerd zonder een solide strategie. We gaan doelstellingen bepalen, onderzoeken waar de doelgroep
                     online actief is, welke kanalen daarvoor geschikt zijn en wat het plan van aanpak wordt. Al deze facetten leggen we vast in een online strategie.
                     Het begrip ‘online marketing’ is ontzettend breed en bevat alle activiteiten op het gebied van marketing welke je online kunt uitvoeren:
                     Website, social media, e-mail marketing, zoekmachine optimalisatie en advertenties plaatsen. De online wereld veranderd ontzettend snel en door
                     gaandeweg data te verzamelen kunnen we continu blijven optimaliseren en bijsturen binnen de online marketing activiteiten voor jouw organisatie.
                  </p>
               </div>
            </div>
         </div>
      </article>

      <article id="changecolor_contact">
         <div class="frontpage-blogs">
            <h2 class="frontpage-title pb-0 mb-0" id="magnite">Memorable verhalen om te lezen</h2>
            <div class="row">
            <?php 
            $the_query = new WP_Query( array('posts_per_page' => 4)); 
               if ( $the_query->have_posts()) { while ( $the_query->have_posts()) { $the_query->the_post();
            ?> 
               <section class="blogs col-md-6">
                  <div class="card">
                     <div class="card-horizontal">
                        <div class="img-square-wrapper">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="mr-3 img-fluid post-thumb d-none d-md-flex">
                        </div>
                        <div class="card-body">
                           <h4 class="card-date"id="taviraj-r"><?php the_time(get_option('date_format'));?></h4>
                           <h4 class="card-title ml-0"id="taviraj-r"><?php the_title();?></h4>
                           <a href="<?php the_permalink(); ?>" class="card-read pt-5 mt-4"id="taviraj-r">Volledig artikel &rarr;</a>
                        </div>
                     </div>
                     <div class="card-bottom">
                        <p class="card-text pb-3" id="taviraj-r"><?php echo excerpt(30); ?></p>
                        <a href="<?php the_permalink(); ?>" class="more-link">Lees artikel</a>
                     </div>
                  </div>
               </section>
               <?php  }}  ?>
            </div>
         </div>
      </article>

      <article class="test">
         <div class="main">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro voluptatibus iste adipisci labore, temporibus quidem facere numquam nemo velit aut ullam laborum cumque sint veritatis est, tempora doloribus in? <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro voluptatibus iste adipisci labore, temporibus quidem facere numquam nemo velit aut ullam laborum cumque sint veritatis est, tempora doloribus in? <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro voluptatibus iste adipisci labore, temporibus quidem facere numquam nemo velit aut ullam laborum cumque sint veritatis est, tempora doloribus in? <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus porro voluptatibus iste adipisci labore, temporibus quidem facere numquam nemo velit aut ullam laborum cumque sint veritatis est, tempora doloribus in? <br>
         </div>
      </article>
   </main>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   </main>
   <?php wp_footer() ?>
   <?php get_footer(); ?>