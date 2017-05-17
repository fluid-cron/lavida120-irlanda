<?php 
get_header("modal");
while ( have_posts() ) : the_post();
?>    

    <section class="shadow-box" >
     
       <!--a href="javascript:history.back(-1);">
        <img src="/ir/wp-content/themes/vida120/modal-120/img/icon-close.png" id="close-mymodal" title="Cerrar">  
       </a-->

        <div class="box-modal" id="#mymodal120">
               
       
         <div class="head-modal-img">
             <img src="<?php echo get_field("imagen_header");?>">
         </div>
         <div class="content-text-modal">
         
              <h4><strong><?php echo get_field("titulo_1");?> <br><?php echo get_field("titulo_2");?></strong></h4>
         
         
         <div class="my-col-01">
             <h3><strong>Sommelier's advice</strong></h3>
             <p><?php echo get_field("titulo");?></p>
             <div class="row" >
                <div class="col-md-6 col-xs-6">
                    <img src="<?php echo get_field("imagen");?>">
                </div>        
                <?php if( get_field("imagen_2") ): ?>     
                    <div class="col-md-6 col-xs-6">
                        <img src="<?php echo get_field("imagen_2");?>">
                    </div>                  
                <?php endif; ?>
             </div>
         </div>
         
         
         <div class="my-col-02">
             
             <h5><strong>Ingredients</strong></h5>
             
             
             <ul>
                <?php
                $Ingredients = get_field("ingredientes");
                foreach($Ingredients as $ingredient){
                    echo "<li>".$ingredient["ingrediente"]."</li>";
                }
                ?>
             </ul>
             
             
         </div>
         
         
         <div class="my-col-03">
             
             
             <h5><strong>Preparation</strong></h5>
             
             
             <ul>
                <?php
                $preparaciones = get_field("preparaciones");
                foreach($preparaciones as $preparacion){
                    echo "<li>".$preparacion["preparacion"]."</li>";
                }
                ?>
             </ul>
             
             
             
             
         </div>
         
         
         
         
          
          </div> 
             
        </div>
        
    </section>


<?php 
endwhile;
get_footer("modal"); ?>