<?php get_header(); ?>

<div class="container">
    <?php
    // Check If There Is A Post In Database
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <div class="single-post p-4 mt-5">
                <?php if (current_user_can('administrator')) : ?>
                    <?php edit_post_link('Edit <i class="fa fa-pencil fa-fw"></i>'); ?>
                <?php endif; ?>
                <h2 class="single-post-header m-0">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="single-post-detail my-2">
                    <span class="post-auther mr-3">
                        <i class="fa fa-user fa-fw"></i><?php the_author_posts_link(); ?>
                    </span>
                    <span class="post-date mr-3">
                        <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
                    </span>
                    <span class="post-comment">
                        <i class="fa fa-comments fa-fw"></i>
                        <?php comments_popup_link('0 Comment', 'One Comment', '% Comments', '', 'disabled Comment'); ?>
                    </span>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-post-img">
                        <?php the_post_thumbnail('', ['class' => 'img-fluid img-thumbnail', 'alt' => 'Post Image']); ?>
                    </div>
                <?php endif; ?>
                <hr>
                <div class="post-content mt-3">
                    <?php the_content(); ?>
                </div>
                <p class="post-categories">                    
                    <i class="fa fa-tags fa-fw"></i> Cat :                    
                    <?php
                    // Print The Categories 
                    the_category(', ');
                    echo '<br />';
                    // Check If There Is Tags Or Not
                    if (has_tag()) {
                        echo '<i class="fa fa-tags fa-fw"></i> ';
                        the_tags();
                    } else {
                        echo '<i class="fa fa-tags fa-fw"></i>Tags: There\'s No Tags For This Post';
                    }
                    ?>
                </p>
            </div>
        <?php
    } // End While Loop
} // End Check For Having Post



// Start Random Posts Section
$post_rand_argument = array(
    'post_per_page' => 5,     // get 5 artical
    'orderby' => 'rand',    // order random
    'category__in' => wp_get_post_categories(get_queried_object_id()), // Bring All Posts In This Category
    'post__not_in' => array(get_queried_object_id()) // Execlude This Posts Id

);
$rand_post_query = new WP_Query($post_rand_argument);
// Check If There Is A Post In Database
if ($rand_post_query->have_posts()) {
    echo '<div class="random-post my-4">';
    echo '<h4 class="post-author-title mt-2">Random Posts On This Category</h4>';
    while ($rand_post_query->have_posts()) {
        $rand_post_query->the_post(); ?>
            <h4 class="post-author-random-posts text-secondary p-2">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
        <?php
    } // End While Loop
    echo '</div>';
} else {
    echo '<div class="random-post">
            <h4 class="post-author-random-posts text-secondary my-2 p-2" style="border-color:#45a9b7">
                There Is No Post To Display
            </h4>
          </div>';
} // End Check For Having Post
wp_reset_postdata(); // reset loop query
// End Random Posts Section


// Start Author Section
echo '<div class="author-box">';
    $author_img_arguament = array( // avatar argument
        'class' => 'img-thumbnail img-fluid m-1'
    );
    echo get_avatar(get_the_author_meta('id'), 50, '', 'User Avatar', $author_img_arguament);
    echo '<h5>';
        the_author_meta('first_name'); // print first name
        echo ' ';
        the_author_meta('last_name'); // Print last name
        echo ' ( <span class="author-nickname">';
            the_author_meta('nickname'); // print nickname
        echo '</span> )';
    echo '</h5>';
    echo '<p>';
        if (get_the_author_meta('description')) {
            the_author_meta('description');
        } else {
            echo 'There Is No Biography';
        }
    echo '</p>';
    echo '<hr>';
    echo '<div class="author-status">';
        // the author post count
        echo '<i class="fa fa-tags p-1"></i>User Post Count: <span class="posts-count">';
        echo count_user_posts(get_the_author_meta('ID'));
        echo '</span><br>';
        // the author link
        echo '<i class="fa fa-home p-1"></i>User Profile Link: ';
        the_author_posts_link();
    echo '</div>';
echo '</div>';
// End Author Section


// Start Pagination Section
echo '<div class="col-sm-12">';
    echo '<div class="post-pagination text-center">';
    // Create The Pagination Pages
    if (get_previous_post_link()) {
        previous_post_link();
    } else {
        echo '<span>Prev</span>';
    }
    if (get_next_post_link()) {
        next_post_link();
    } else {
        echo '<span>Next</span>';
    }
    echo '</div>';
echo '</div>';
echo '<hr>';

// Start Comments Section
comments_template();
// End Comments Section
?>
</div>

<?php get_footer(); ?>