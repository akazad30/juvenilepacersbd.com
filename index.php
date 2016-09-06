<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>juvenilepacersBD</title>
     <?php include 'head_link.php'; ?>
  </head>
  
  <body class="size-1140">
    <!-- HEADER -->
    <header role="banner" class="position-absolute" style="background-color:#94B3CE">    
        <?php include 'header.php'; ?>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <?php //include 'header_main_bottom.php'; ?>
        <br/>
        <?php include 'slider.php'; ?>

      </header>
      
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <?php include 'section1_we_are_available_for.php' ?>
        
      </section>
      
      <!-- Section 1 -->
      <section class="section">
        <?php include 'section1_about_us.php'; ?>   
      </section>
      
      <!-- Section 2 -->
      <section class="full-width">
        <?php include 'section2_left_right_menu.php'; ?>
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white" >  
        <?php include 'section3_stats.php'; ?>
      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 -->
       <section class="section-top-padding full-width">
        <h2 class="text-size-50 text-center">Our Work</h2>
        <hr class="break-small background-primary break-center"> 
        <?php include 'section4_our_work.php'; ?>
      </section>
      
      <!-- Section 5 -->    
      <section class="section background-white text-center">
        <?php include 'section5_testimonial.php'; ?>
      </section>
    </main>
    
    <!-- FOOTER -->
    <footer>
      <?php include 'footer_content.php'; ?>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>