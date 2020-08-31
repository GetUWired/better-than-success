<?php 
/*
Template Name: BTS Real Estate League Single Post
*/

get_header('membership');
?>


<?php 


$post_id = $_GET['post_id'];

$title = get_the_title($post_id);

$current_post = get_post($post_id);

$content = $current_post->post_content;


?>

<div class="main-content">
    <div class="title">
        <h3>BTS Mastermind and Lecture Recordings</h3>

        <div class="post-title main-title">
            <p style="display: block;"><a href="<?php get_template_directory_uri(); ?>/membership-dashboard">Dashboard > </a><a href="<?php get_template_directory_uri(); ?>/bts-realestate-league-member-courses-roll">BTS Mastermind and Lecture Recordings > </a><?php echo $title; ?>
        	</p>
        </div>

    </div> <!-- title -->

    <div class="course_info">

        <div class="single_course">
            <div class="lesson_title"><?php echo $title; ?></div>
            <div class="single_course_content"><?php echo $content; ?></div>
        </div>
    </div><!-- course_info -->
</div>