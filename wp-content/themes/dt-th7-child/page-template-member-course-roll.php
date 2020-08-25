<?php 
/*
Template Name: BTS Real Estate League Course Roll
*/

get_header('membership');
?>


<div class="main-content">
    <div class="title">
        <h3>My Courses</h3>
        <div class="post-title main-title">
            <p style="display: block;"><a href="<?php get_template_directory_uri(); ?>/membership-dashboard"> > Dashboard</a></p>
        </div>    
    </div>

    <div>

        <ul class="graphic_blocks">
			<?php



				// 'cat' => '46', BTS Real Estate League
				// 'cat' => '207', BTS Newsletter Category

                $paged = ( get_query_var( 'courses' ) ) ? get_query_var( 'courses' ) : 1;

                $args = array(
                    'cat' => '46',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 12,
                    'paged' => $paged
                );                

			$loop = new WP_Query($args);

            $paging_args = array(
                'base'         =>  str_replace('%_%', 1 == $paged ? '' : "?courses=%#%", "?courses=%#%"),
                'format'       => '?courses=%#%',
                'total'        => $loop->max_num_pages,
                'current'      => max(1, $paged),
                'end_size'     => 2,
                'mid_size'     => 2,
                'prev_next'    => true,
                'prev_text'    => __('« Previous'),
                'next_text'    => __('Next »'),
                'show_all'     => true 
            );
            $latest_posts_paging = paginate_links($paging_args);

             while ( $loop->have_posts() ) : $loop->the_post();

                $ID = $post->ID;

                //IF CONTENT DOES NOT INCLUDE A VIDEO, NEED TO PUT IN AN IMAGE
                $image = get_the_post_thumbnail($ID);

                $link = "https://betterthansuccess.com/single-course";


                $listitem = "<li>";
                $listitem .= "<a href='". $link . "?post_id=" . $ID ."'>";
                $listitem .= "<div class='course_description'>";
                if (strpos($post->post_content, "iframe") !== false ) {          
                    $listitem .= "<span class='course_content'>" . $post->post_content . "</span>";
                } else {
                    $listitem .= "<img src='https://betterthansuccess.com/wp-content/uploads/2020/08/BTS_logo_default_thumbnail-1.png' width='355' />";
                }
                $listitem .= "<div class='course_title'>";
                $listitem .= "<h4>" . $post->post_title . "</h4>";
                $listitem .= "</div>";                
                //course progression
                $listitem .= "<span class='gb_button green'>Let's Go!</span>";               
                $listitem .= "</div>";
                $listitem .= "</a>";
                $listitem .= "</li>";

                echo $listitem;

            endwhile;


            ?>
		</ul>

	</div>

        <nav id="nav-posts">
            <div class=""><?php echo $latest_posts_paging; ?></div>
        </nav>

        <?php wp_reset_postdata(); ?>


</div>