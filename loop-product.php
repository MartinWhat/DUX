<section class="container">
    <div class="loop-product-container">
        
        <div class="loop-product-side">
            <div class="loop-product-filters">
                <?php $root = get_category($cat_root_id); ?>
                <h3><span class="loop-product-filters-more"><i class="fa fa-chevron-down"></i></span><i class="fa fa-folder"></i><?php echo $root->cat_name ?></h3>
                <ul>
                    <?php 
                        $catprm = 'child_of='. $cat_root_id .'&depth=0&hide_empty=0&title_li=&orderby=id&order=ASC&echo=0';
                        if( _hui('catpage_cat_showcount') ){
                            $catprm .= '&show_count=1';
                        }
                        $res = wp_list_categories($catprm);
                        // echo str_replace("<ul class='children", "<span class='childrengo'><i class='faent faent1'>&#xe613;</i><i class='faent faent2'>&#xe614;</i></span><ul class='children", $res); 
                        echo $res;
                    ?>
                </ul>
            </div>
            <?php if( _hui('catp_qrcode') ){ ?>
            <div class="loop-product-qrcode">
                <?php if( _hui('catp_qrcode_tit') ){ ?><h4><?php echo _hui('catp_qrcode_tit') ?></h4><?php } ?>
                <div class="tbqrcode" data-url="<?php echo get_category_link($cat_id) ?>"></div>
            </div>
            <?php } ?>
        </div>

        <?php 
            if ( have_posts() ): 
                echo '<div class="loop-product-content">';
                    while ( have_posts() ) : the_post();
                        echo '<article class="loop-item">';
                            echo '<a'. _post_target_blank() .' class="thumbnail" href="'.get_permalink().'">'._get_post_thumbnail().'</a>';
                            echo '<h2><a'. _post_target_blank() .' href="'.get_permalink().'">'.get_the_title().'</a></h2>';

                            if( _get_post_price() ){
                                echo '<footer>';
                                    echo '<span class="price">'._get_post_price(_get_price_pre().' ').'</span>';
                                echo '</footer>';
                            }

                        echo '</article>';
                    endwhile; 
                    wp_reset_query();
                echo '</div>';
                _moloader('mo_paging');

            else:

                get_template_part( 'content-404' );

            endif; 
        ?>
    </div>

</section>