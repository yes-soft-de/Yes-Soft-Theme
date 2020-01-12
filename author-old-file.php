<?php
$curauth = $wp_query->get_queried_object();
$authid = $curauth->ID;
?>
	Email: <?php echo $curauth->user_email; ?>
	Website: <?php echo $curauth->user_url; ?>
	Name: <?php echo $curauth->user_firstname . " " . $curauth->user_lastname; ?>
	Bio: <?php echo $curauth->user_description; ?>
