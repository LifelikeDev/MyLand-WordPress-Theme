<?php
/*
Single post template

@package myland
*/

get_header();
?>

<div class="content-wrapper">

    <?php esc_html_e( "Single Post", "myland" ); ?>

    <p>Single post here...</p>

</div>

<?php get_footer() ?>