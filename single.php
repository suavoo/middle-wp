<?php
    get_header(); 
?>

    
    <div class="container">
        <div class="main-content">

            <?php
                if(have_posts()){

                    while(have_posts()){

                        the_post();
                        
                        get_template_part('template-parts/content', 'article');

                    }
                    
                }
            ?>

        </div>
    </div>
    

    <!-- Javascript -->
    <?php
        wp_footer();
    ?>
</body> 
</html>