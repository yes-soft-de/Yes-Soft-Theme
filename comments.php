<?php
	// Check If Comments Open Or CLose
	if (comments_open()) { // Check If Comments Are Open
		echo "<h4 class='comment-number'>Comments Number : ";
			comments_number();
		echo "</h4>";
		
		echo '<ul class="list-unstyled comments-list">';
			$arg = array( // Comments Arguments
				'max_depth' => 2, // Comments Level
				'type' => 'comment' // Comments Type
			);
			wp_list_comments($arg); // List All Comments
		echo '</ul>';

		echo '<hr>';
		// Comments Form
		comment_form();

	} else {
		echo 'sorry This Post Are Closed The Comments';
	}

?>