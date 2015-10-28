<?php 
    while(the_flexible_field("general_content",$P)):
    
        if(get_row_layout() == "content_with_image_on_right"): 
?>     

        <div class="col-md-12">
            <div class="col-md-6">
                <?php the_sub_field('content'); ?>
            </div>
            <div class="col-md-6">
            <?php $img = get_sub_field('image'); ?>
            <?php if(isset($img['sizes']['side-img'])){ ?><img src="<?php echo $img['sizes']['side-img']; ?>" alt="<?php echo $img['alt']; ?>" class="img-responsive" /><?php } ?>
            </div>
        </div>

<?php 
        elseif(get_row_layout() == "content_with_image_on_left"): 
?>
        <div class="col-md-12">
            <div class="col-md-6">
                <?php $img = get_sub_field('image'); ?>
                <?php if(isset($img['sizes']['side-img'])){ ?><img src="<?php echo $img['sizes']['side-img']; ?>" alt="<?php echo $img['alt']; ?>" class="img-responsive" /><?php } ?>
            </div>
            <div class="col-md-6">
                <?php the_sub_field('content'); ?>
            </div>
        </div>
   

<?php   endif; endwhile; ?>