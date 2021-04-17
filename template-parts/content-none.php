<?php
/*
No content template

@package myland

*/

?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"> <?php esc_html_e( "No result found", "myland" ); ?> </h1>
    </header>

    <div class="page-content">
        <?php
            if ( is_home() && current_user_can( "publish_posts") ) {
                ?>
                    <p>
                        <?php 
                            printf(
                                wp_kses( 
                                    __('Ready to publish your first post? <a href="%s">Get Started Here <a/>', "myland"),
                                    [
                                        "a" => [
                                            "href" => []
                                        ]
                                    ]
                                        ), esc_url( admin_url( "post-new.php") )
                            )
                        ?>
                    </p>
            
            <?php
            } elseif ( is_search() ) {
            ?>
                <p> <?php esc_html_e( "Sorry! Nothing matched your search item. Please try again with a different keyword", "myland" ) ?> </p>
            <?php
                get_search_form();
            } else {
                ?>
                <p> <?php esc_html_e( "We are unable to find what you are looking for. Try using the search option", "myland" ) ?> </p>
            <?php
                get_search_form();
            }
        ?>

    </div>


</section>