<?php
get_header();
//create a loop that will display the content of the post
while (have_posts()) {

    //get the post
    the_post();  ?> 

    <!-- Display title in h2 wrapper -->   
    <h2>
        <!-- Link to the post -->
        <?php the_title(); ?>

    </h2>
    <!-- Display the content of the post -->
    <?php the_content(); ?>
    
 

<?php } //closing bracket and escape get out of phps 

get_footer();
?> 
