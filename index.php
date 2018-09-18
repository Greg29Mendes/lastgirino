<?php get_header();?>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2>NOVO TEMA</h2>
            </div>
        </div>
    </div>
        <?php
        
    $cont = 0;    
        
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $cont++;
                    if($cont <= 3){
                        
                    }
                    the_title();
                    the_excerpt();
                }
            }
        ?>

<div class="col-md-4" >
    <h3><?php the_title(); ?></h3>
    <div class="img-responsive img-thumbnail foto" > <?php the_post_thumbnail(); ?> </div>
    <p><?php the_excerpt();  ?></p>
    <a class="btn btn-primary" href="<?php the_permalink();?>">Read More</a>
</div>

<?php get_footer();?>