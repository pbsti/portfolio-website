<?php

$arguments = array(
"post_type" => "work_card",
"posts_per_page" => -1
);
$loop = new WP_Query($arguments);

?>
<div class="work-area col-10">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>
            <?php    
                $workTitle = get_field("work_title");
                $workDescription = get_field("work_description");
                $workrole = get_field("work_role");
                $workImage = get_field("work_image");
            ?>

            <div class="card bg-dark text-white">
                <img src="<?php echo esc_url($workImage["url"])?>" class="card-img" alt="project poster"/>
                <div class="card-img-overlay">
                    <h4 class="card-title"><?php echo esc_html($workTitle)?></h4>
                    <p class="card-text"> <?php echo esc_html($workDescription)?><br><br>
                    <?php echo esc_html($workrole)?></p>
                </div>
            </div>

        <?php endwhile ?>
        <?php wp_reset_postdata() ?> 
    <?php endif ?>
      
</div>  