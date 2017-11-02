<?php get_header();?>
      <div class="container posts bg-magento">
        <div class="row">
            <div class=" col-xs-12 col-sm-10">
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
            ?>
                <div class="col-xs-12">
                    <?=the_title()?>
                    <?=the_content()?>
                </div>

            <?php
                    endwhile;
                endif;
            ?>
            </div>           
        <?php get_sidebar(); ?>    
        </div>
        <nav class="text-center"aria-label="...">
          <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
          </ul>
        </nav>
      </div>
      
<?php get_footer();?>