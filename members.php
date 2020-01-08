<?php
/* Template Name: members */


global $wpdb;
$query = "SELECT ID from $wpdb->users";
$author_ids = $wpdb->get_results($query);
$users = array();
foreach($author_ids as $author) {
	// Get user data
	$curauth = get_userdata($author->ID);
	// Get link to author page
	$link = 'author/' . $curauth->user_nicename;
	$name = $curauth->display_name;
	$users[$link] = $name;
}
asort($users);
?>
<ol>
	// Loop through each author
	<?php foreach($users as $link => $name) : ?>
		<li>
			<a href="<?php echo $link; ?>" title="<?php echo $name; ?>">
				<?php echo $name; ?>
			</a>
		</li>
	<?php endforeach; ?>
</ol>


