<?php
	// Bring The Header
get_header();
echo '<div class="container">';
    echo '<h1 class="author-header text-center mt-4">';
        the_author_meta('nickname');
    echo ' Page</h1>';
    // Start Author Section
    echo '<div class="author-page">';
        echo '<div class="row">';
            echo '<div class="col-md-3">';
                $author_img_arguament = array( // avatar argument
                    'class' => 'img-thumbnail img-fluid'
                );
                echo get_avatar(get_the_author_meta('id'), 196, '', 'User Avatar', $author_img_arguament);
            echo '</div>';
            echo '<div class="col-md-9">';
                echo '<ul class="list-unstyled">';
                    echo '<li>First Name : ';
                        the_author_meta('first_name'); // print first name
                    echo '</li>';
                    echo '<li>Last Name : ';
                        the_author_meta('last_name'); // Print last name
                    echo '</li>';
                    echo '<li>Nick Name : ';
                        the_author_meta('nickname'); // Print Nick Name
                    echo '</li>';
                echo '</ul>';
                echo '<hr class="bg-info">';
                echo '<p>';
                    if (get_the_author_meta('description')) {
                        the_author_meta('description');
                    } else {
                        echo 'There Is No Biography';
                    }
                echo '</p>';
            echo '</div>';
        echo '</div>'; // End Row Div
    echo '</div>';
    // End Author Section

    // Start Author Stats Section
    echo '<div class="row author-stats">';
        echo '<div class="col-md-3">';
            echo '<div class="stats">'; 
                echo 'Posts Count';
                echo '<span>' . count_user_posts(get_the_author_meta('id')) . '</span>';
            echo '</div>';
        echo '</div>';
        echo '<div class="col-md-3">';
            echo '<div class="stats">'; 
                echo 'Comments Count';
                echo '<span>';
                    $com_arg = array(
                        'user_id' => get_the_author_meta('id'),
                        'count' => true
                    );
                    echo get_comments($com_arg);
                echo '</span>';
            echo '</div>';
        echo '</div>';
        echo '<div class="col-md-3">';
            echo '<div class="stats">'; 
                echo 'Total Posts View';
                echo '<span>0</span>';
            echo '</div>';
        echo '</div>';
        echo '<div class="col-md-3">';
            echo '<div class="stats">'; 
                echo 'Testing';
                echo '<span>0</span>';
            echo '</div>';
        echo '</div>';			
    echo '</div>'; // End Section Author Stats



// Start Author Posts Section
$author_posts_per_page = 4;
$post_author_argument = array(
    'author' => get_the_author_meta('id'),
    'posts_per_page' => $author_posts_per_page
);
$author_post_query = new WP_Query($post_author_argument);
// Check If There Is A Post In Database
if ($author_post_query->have_posts()) {
    echo '<h3 class="post-author-title">Latest ';
    the_author_meta('nickname');
    echo ' Posts :</h3>';
    while ($author_post_query->have_posts()) {
        $author_post_query->the_post(); ?>

        <div class="custom-post mt-2 p-3 p-md-2">
            <div class="row">
                <div class="col-sm-2">
                    <?php the_post_thumbnail('', ['class' => 'author-post-img img-fluid img-thumbnail']); ?>
                </div>
                <div class="col-sm-10">
                    <h4 class="text-secondary my-2 m-md-0">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <span class="post-date mr-3">
                        <i class="fa fa-calendar fa-fw"></i> <?php the_time('F j, Y'); ?>
                    </span>
                    <span class="post-comment">
                        <i class="fa fa-comments fa-fw"></i>
                        <?php comments_popup_link('0 Comment', 'One Comment', '% Comments', '', 'disabled Comment'); ?>
                    </span>
                    <div class="post-content my-1">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>

    <?php
} // End While Loop
} // End Check For Having Post
wp_reset_postdata(); // reset loop query
// End Author Posts Section


// Start Author Comments Section
$comment_per_page = 4;
$comment_author_argument = array(
    'user_id' => get_the_author_meta('id'),
    'status' => 'approve',
    'number' => $comment_per_page,
    'post_status' => 'publish',
    'post_type' => 'post'
);
$comments = get_comments($comment_author_argument);
echo '<h3 class="post-author-title mt-3">Latest ';
the_author_meta('nickname');
echo ' Comments :</h3>';
// Check If There Is A Comments For This Author Or Not
if ($comments) {
    foreach ($comments as $comment) { ?>
        <div class="custom-post my-2 p-2">
            <h6 class="text-secondary m-0">
                <a href="<?php echo get_permalink($comment->comment_post_ID); ?>">
                    <?php echo get_the_title($comment->comment_post_ID); ?>
                </a>
            </h6>
            <span class="post-date mr-3">
                <i class="fa fa-calendar fa-fw"></i> <?php echo mysql2date('l, F j, Y', $comment->comment_date); ?>
            </span>
            <div class="post-content">
                <?php echo $comment->comment_content; ?>
            </div>
        </div>
    <?php
} // End Foreach Loop
} else {
    echo '<div class="alert alert-info text-center my-1">This Author Does Not Have Any Comments</div>';
} // End If Condition


echo '</div>'; // End Container
// Bring The Footer
get_footer();