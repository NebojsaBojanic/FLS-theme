<?php
/**
 * The template for displaying all pages
 *
 */

get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




   <section class="paragraph-image"><!-- start section -->
        

      <div class="grid-1160">

       <div class="grid-50 fl">

          <div class="paragraph">
           
                  <h2>Lorem Ipsum</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  <a href="test" class="fls-button blue">Mehr Lesen</a>
              
              </div>
             
       </div>


       <div class="grid-50 fr">
           
          <img src="images/Unsere-Schule_image-min.jpg" class="frame">


       </div>  


       </div>

   </section><!-- end section -->

                    
  <section class="gallery"><!-- start gallery -->
          
          <h2>Galerie</h2>


          <ul>
              <li><a href=""><img src="images/gallery/Image_1.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_2.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_3.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_4.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_5.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_6.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_7.jpg"></a></li>
              <li><a href=""><img src="images/gallery/Image_8.jpg"></a></li>
             
           </ul>

  </section><!-- end section -->


  <section class="offer"><!-- start offer -->
    
    <div class="grid-1440">
      <h2>Besondere Angebote</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perspiciatis quibusdam iure mollitia architecto corrupti molestias ducimus.</p>
   
    <ul>
        <li><a href="">
                  
                  <div style="background: #de8e2b;"><!-- cross browser padding -->

                        <div class="offerThumb"><img src="images/Courses_background-img.jpg" alt=""></div>
                        <div class="offerDescription">
                            
                              <h3>Lorem Ipsum</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>
                        </div>

                </div><!-- end cross browser padding -->
            </a>
              
        </li>
          
          <li>
            <a href="">

              <div style="background:#14a57c;"><!-- cross browser padding -->
                <div class="offerThumb"><img src="images/Courses_background-img.jpg" alt=""></div>
                <div class="offerDescription">
                    
                      <h3>Lorem Ipsum</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat.</p>
                </div>
              </div><!-- end cross browser padding -->
            </a>

        </li>
        <li>
          <a href="">
              <div style="background:#8e41a7;"><!-- cross browser padding -->
          
                <div class="offerThumb"><img src="images/Courses_background-img.jpg" alt=""></div>
                <div class="offerDescription">
                    
                  <h3>Lorem Ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div><!-- end cross browser padding -->
          </a>

        </li>

    </ul>

      <div class="permalink">
          
          <a href="test" class="fls-button green">See All Courses</a>

      </div>
  
        </div>

  </section><!-- end offer -->

            

                <section class="news"><!-- start news -->
                      
                      <div class="grid-1160">
                    <h2>What's New?</h2>
                    <p>Keep up to date with the latest news</p>
                    
                    <ul>
                        <li>
                       

                       <a href="afa">
                
                         <div><!-- cross browser padding -->

                                <div class="newsThumb grid-45 fl"><img src="images/skola.jpg" alt=""></div><!-- end newsThumb -->
                                
                                  <div class="newsDescription grid-55 fl"><!-- start newsDescription -->
       
                                    <div><!-- start cross browser padding -->
                                    
                                        <h3>Lorem Ipsum</h3>
                                        <span class="newsCategory">by <!-- <a href="#">Zorana Vukotic</a> --></span>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. 
                                       </p>
                                        

                                        <div class="newsDate"><!-- start newsDate -->
                                           
                                            <span><img src="images/kalendar.png"></span>
                                            <span>25.06.18</span>
                
                                       </div> <!-- end newsDate -->   

                                     </div><!-- end cross browser padding -->
                                    
                                   </div><!-- end newsDescription -->
                            
                                 </div><!-- end cross browser padding -->


                          </a>
                        </li>

                            <li>
                       

                       <a href="afa">
                
                             <div><!-- cross browser padding -->

                                <div class="newsThumb grid-45 fl"><img src="images/skola.jpg" alt=""></div><!-- end newsThumb -->
                                
                                  <div class="newsDescription grid-55 fl"><!-- start newsDescription -->
       
                                    <div><!-- start cross browser padding -->
                                    
                                        <h3>Lorem Ipsum</h3>
                                        <span class="newsCategory">by <!-- <a href="#">Zorana Vukotic</a> --></span>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. 
                                       </p>
                                        

                                        <div class="newsDate"><!-- start newsDate -->
                                           
                                            <span><img src="images/kalendar.png"></span>
                                            <span>25.06.18</span>
                
                                       </div> <!-- end newsDate -->   

                                     </div><!-- end cross browser padding -->
                                    
                                   </div><!-- end newsDescription -->
                            
                                 </div><!-- end cross browser padding -->


                          </a>
                        </li>

                  <li>
                       

                       <a href="afa">
                
                         <div><!-- cross browser padding -->

                                <div class="newsThumb grid-45 fl"><img src="images/skola.jpg" alt=""></div><!-- end newsThumb -->
                                
                                  <div class="newsDescription grid-55 fl"><!-- start newsDescription -->
       
                                    <div><!-- start cross browser padding -->
                                    
                                        <h3>Lorem Ipsum</h3>
                                        <span class="newsCategory">by <!-- <a href="#">Zorana Vukotic</a> --></span>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. 
                                       </p>
                                        

                                        <div class="newsDate"><!-- start newsDate -->
                                           
                                            <span><img src="images/kalendar.png"></span>
                                            <span>25.06.18</span>
                
                                       </div> <!-- end newsDate -->   

                                     </div><!-- end cross browser padding -->
                                    
                                   </div><!-- end newsDescription -->
                            
                                 </div><!-- end cross browser padding -->


                          </a>
                        </li>
                        

                           <li>
                       

                       <a href="afa">
                
                         <div><!-- cross browser padding -->

                                <div class="newsThumb grid-45 fl"><img src="images/skola.jpg" alt=""></div><!-- end newsThumb -->
                                
                                  <div class="newsDescription grid-55 fl"><!-- start newsDescription -->
       
                                    <div><!-- start cross browser padding -->
                                    
                                        <h3>Lorem Ipsum</h3>
                                        <span class="newsCategory">by <!-- <a href="#">Zorana Vukotic</a> --></span>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. 
                                       </p>
                                        

                                        <div class="newsDate"><!-- start newsDate -->
                                           
                                            <span><img src="images/kalendar.png"></span>
                                            <span>25.06.18</span>
                
                                       </div> <!-- end newsDate -->   

                                     </div><!-- end cross browser padding -->
                                    
                                   </div><!-- end newsDescription -->
                            
                                 </div><!-- end cross browser padding -->


                          </a>
                        </li>

                    </ul>

                    
                      <div class="permalink">
                        
                        <a href="test" class="fls-button blue">Read All News</a>

                    </div>

                    </div>

                </section><!-- end news -->




<!-- start two image content -->

<section class="two-image-layout"> 
  
  <div class="grid-1160">
  <div class="grid-50 fl">
    
    <img src="images/one.jpg">
  
    <h3>Lorem Ipsum</h3>

     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
  </div>
 
  <div class="grid-50 fl">
    
    <img src="images/two.jpg">
  
    <h3>Lorem Ipsum</h3>

     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  
  </div>
  </div>
</section>



<!-- end start two image content -->



<?php endwhile; ?>

<?php endif; ?>

<?php get_footer();?>