<?php 
    get_header();
?>
<div>

<?php 
    if (have_rows('blocks')) :

        

        while (have_rows('blocks')) : the_row();


        include 'blocks' .get_row_layout() . '.php';

        if (get_row_layout() == 'hero' ) :

        
        endif;






    // End loop.
    endwhile;

// No value.
else :
// Do something..
endif;

?>
<?php   // If post show on this page
    include "posts.php";
?>

</div>
<?php
    get_footer();
?>

