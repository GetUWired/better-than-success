<?php 
/*
Template Name: BTS Members Only Single News
*/

get_header('membership');
?>


<?php 


$post_id = $_GET['post_id'];

$title = get_the_title($post_id);

$current_post = get_post($post_id);
// echo "<pre>";
// var_dump($stuff);

// echo "</pre>";

// $content = get_the_content($post_id);
$content = $current_post->post_content;

// echo $content;

// print_r($content);

?>

<div class="main-content">
    <div class="title">
        <h3>Newsletter</h3>

        <div class="post-title main-title">
            <p style="display: block;"><a href="<?php get_template_directory_uri(); ?>/member-dashboard">Dashboard > </a><a href="<?php get_template_directory_uri(); ?>/bts-members-newsletter">Newsletter > </a><?php echo $title;?>
        	</p>
        </div>

    </div> <!-- title -->

    <div class="course_info">

        <div class="single_course">
            <div class="lesson_title single_news"><?php echo $title; ?></div>
            <div class="single_news_content"><?php echo $content; ?></div>
        </div>
    </div> <!-- course_info -->
</div>