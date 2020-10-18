<?php
get_header();
?>
<div class="main">
    <?php
    while (have_posts()) {
        the_post();

    ?>

        <div class="bookmark container-fluid">
            <h1 class="text-center">Oferta dla Paśtwa dzieci-replace me later <?php the_title(); ?></h1>

        </div>


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
        if ($theParent or $testArray) {
        ?>
            <div class="list-pages">
                <h2 class="page_link_title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent); ?></a></h2>
                <ul>
                    <li>
                        <?php
                        if ($theParent) {
                            $findChildrenOf = $theParent;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }
                        wp_list_pages(array(
                            'title_li' => Null,
                            'child_of' => $findChildrenOf,
                            'sort_column' => 'menu_order'
                        ));
                        ?>
                    </li>
                </ul>
            </div>
        <?php
        }

        ?>
        <div class="about-conatiner col-10 col-md-7 col-lg-8 text-justify ">
            <div class="content"><?php the_content(); ?></div>
        </div>

    <?php }
    ?>
</div>
<?php
get_footer();
