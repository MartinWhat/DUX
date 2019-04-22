<?php 
/* 热门文章排行榜（支持按阅读数及评论数排行）
*/
function qgg_recent_posts_most() { 
    global $wpdb;
    // $days=400;
    $days=_hui('most_list_date');
    $limit=_hui('most_list_number');
    $output = '';
    
    if( !_hui('most_list_style') || _hui('most_list_style')=='comment' ){

        $today = date("Y-m-d H:i:s");
        $daysago = date( "Y-m-d H:i:s", strtotime($today) - ($days * 24 * 60 * 60) );  
        $result = $wpdb->get_results("SELECT comment_count, ID, post_title, post_date FROM $wpdb->posts WHERE post_date BETWEEN '$daysago' AND '$today' AND post_status='publish' AND post_type='post' ORDER BY comment_count DESC LIMIT 0 , $limit");
        if(empty($result)) {
            $output = '<li>'.__('暂无最多评论文章！', 'haoui').'</li>';
        } else {
            $i = 1;
            foreach ($result as $C_topten) {
                $postid = $C_topten->ID;
                $title = $C_topten->post_title.get_the_subtitle();
                $commentcount = $C_topten->comment_count;
                if ($commentcount != 0) {
                    $output .= '<li><p class="text-muted"><span class="post-comments">&nbsp;'.__('评论', 'haoui').' ('.$commentcount.')</span></p><span class="label label-'.$i.'">'.$i.'</span><a  target="_blank" href="'.get_permalink($postid).'" title="'.$title.'">'.$title.'</a></li>';
                    $i++;
                }

            }
        }

    }else if( _hui('most_list_style')=='view' ){

        global $post;
        $limit_date = current_time('timestamp') - ($days*86400);
        $limit_date = date("Y-m-d H:i:s",$limit_date);
        $where = '';
        $mode = 'post';

        if(!empty($mode) && $mode != 'both') {
            $where = "post_type = '$mode'";
        } else {
            $where = '1=1';
        }

        $most_viewed = $wpdb->get_results("SELECT DISTINCT $wpdb->posts.*, (meta_value+0) AS views FROM $wpdb->posts LEFT JOIN $wpdb->postmeta ON $wpdb->postmeta.post_id = $wpdb->posts.ID WHERE post_date < '".current_time('mysql')."' AND post_date > '".$limit_date."' AND $where AND post_status = 'publish' AND meta_key = 'views' AND post_password = '' ORDER  BY views DESC LIMIT $limit");

        if($most_viewed) {
            $i = 1;
            foreach ($most_viewed as $post) {
                $title = get_the_title().get_the_subtitle();
				$commentcount = $post->comment_count;
                $post_views = intval($post->views);
                $output .= '<li><p class="text-muted"><span class="post-comments">&nbsp;'.__('阅读', 'haoui').' ('.$post_views.')</span></p><span class="label label-'.$i.'">'.$i.'</span><a target="_blank" href="'.get_permalink($post->ID).'" title="'.$title.'">'.$title.'</a></li>';
                $i++;
            }
        } else {
            $output = '<li>'.__('暂无最多阅读文章！', 'haoui').'</li>';
        }

    }

    echo '<div class="most-comment-posts">
            <div class="title"><h3>'._hui('most_list_title').'</h3></div>
            <div class="mpc-bg wow fadeInUp"><ul>'.$output.'</ul></div>
        </div>';
}