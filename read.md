Custom Theme Notes



Menu of Child Links




<div class="container container--narrow page-section">



This will check if the post has a parent post



```phpx

    <?php //this will check if the post has a parent post
    $theParent = wp_get_post_parent_id(get_the_ID());
    if($theParent ) {  ?>

    

```

This section contains the slug or permalink



```phpx
     <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo  get_permalink();  ?>"><i class="fa fa-home" aria-hidden="true"></i> 

```

```phpx
        <?php 
        get_the_title($theParent);  //this will display the title of the parent post
        
        ?>
        
        </a> <span class="metabox__main">

          <?php the_title(); ?> <!-- this will display the title of the post -->
          </span>
       
```

 </p>
      </div>


