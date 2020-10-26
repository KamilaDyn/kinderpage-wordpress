<?php
get_header();
?>
<div class="main">
    <?php
    while (have_posts()) {
        the_post();

    ?>
        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
            <div class="bookmark container-fluid">
                <h1 class="text-center"> <?php echo get_the_title($theParent); ?></h1>
            </div>
        <?php } else {
        ?>
            <div class="bookmark container-fluid">
                <h1 class="text-center"> <?php the_title(); ?></h1>
            </div>
        <?php
        } ?>
        <!-- get pages -->

        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
            <div class="metabox">
                <p>Wróć do: <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?> </a><span class="metabox__main"><?php the_title(); ?></span></p>
            </div>

        <?php }
        ?>

        <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID(),
        ));
        if ($theParent or $testArray) { ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent) ?></a></h2>
                <ul class="min-list">
                    <?php
                    if ($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID();
                    };
                    wp_list_pages(array(
                        'title_li' => NULL,
                        'child_of' => $findChildrenOf,
                        'sort_column' => 'menu_order',
                    ));
                    ?>
                </ul>
            </div>
        <?php }
        ?>
        <section>
            <div class="about-conatiner col-10  mx-auto text-justify ">
                <div class="content mx-auto"><?php
                                                the_content(); ?> </div>

            </div>
        </section>

</div>
<?php }
    get_footer();
