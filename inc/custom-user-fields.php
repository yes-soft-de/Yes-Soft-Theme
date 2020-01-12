<?php
/*
	==================================
		ADMIN USER FUNCTIONS PAGE
	==================================
*/

function yse_soft_add_custom_user_profile_fields( $user ) {?>
	<!-- Field Title-->
	<h3><?php _e('Yes Soft User Information', 'yes_custom_fields' ); ?></h3>
	<table class="form-table">
        <!-- User Character Traits Field -->
        <tr>
            <th>
                <label for="character_traits"><?php _e('User Character Traits', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="character_traits" id="character_traits" value="<?php echo esc_attr( get_the_author_meta( 'character_traits', $user->ID ) );?>" class="regular-text" placeholder="ex : Clever . Organize . Curious" /><br />
                <span class="description"><?php _e('Please enter your character traits', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Age Field -->
        <tr>
            <th>
                <label for="user_age"><?php _e('User Age', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_age" id="user_age" value="<?php echo esc_attr( get_the_author_meta( 'user_age', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your age', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Location Field -->
        <tr>
            <th>
                <label for="user_location"><?php _e('User Location', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_location" id="user_location" value="<?php echo esc_attr( get_the_author_meta( 'user_location', $user->ID ) );?>" class="regular-text"/><br />
                <span class="description"><?php _e('Please enter your location', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- Job Title Field -->
		<tr>
			<th>
				<label for="job_title"><?php _e('Job Title', 'yes_custom_fields' )?></label>
			</th>
			<td>
				<input type="text" name="job_title" id="job_title" value="<?php echo esc_attr( get_the_author_meta( 'job_title', $user->ID ) );?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your job title', 'yes_custom_fields' ); ?></span>
			</td>
		</tr>
        <!-- User Experience Field -->
        <tr>
            <th>
                <label for="user_experience"><?php _e('Job Title', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_experience" id="user_experience" value="<?php echo esc_attr( get_the_author_meta( 'user_experience', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Experience', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Mobile Field -->
        <tr>
            <th>
                <label for="user_mobile"><?php _e('User Mobile Number', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_mobile" id="user_mobile" value="<?php echo esc_attr( get_the_author_meta( 'user_mobile', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your mobile number', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Skype Field -->
        <tr>
            <th>
                <label for="user_skype"><?php _e('User Skype', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_skype" id="user_skype" value="<?php echo esc_attr( get_the_author_meta( 'user_skype', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your skype account', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Github Field -->
        <tr>
            <th>
                <label for="user_github"><?php _e('User Github', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_github" id="user_github" value="<?php echo esc_attr( get_the_author_meta( 'user_github', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your github account', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User LinkedIn Field -->
        <tr>
            <th>
                <label for="user_linkedin"><?php _e('User Linkedin', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_linkedin" id="user_linkedin" value="<?php echo esc_attr( get_the_author_meta( 'user_linkedin', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Linkedin account', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Facebook Field -->
        <tr>
            <th>
                <label for="user_facebook"><?php _e('User Facebook', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="user_facebook" id="user_facebook" value="<?php echo esc_attr( get_the_author_meta( 'user_facebook', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Facebook account', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
        <!-- User Mother Language Field -->
        <tr>
            <th>
                <label for="mother_language"><?php _e('User Mother Language', 'yes_custom_fields' )?></label>
            </th>
            <td>
                <input type="text" name="mother_language" id="mother_language" value="<?php echo esc_attr( get_the_author_meta( 'mother_language', $user->ID ) );?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your mother language', 'yes_custom_fields' ); ?></span>
            </td>
        </tr>
	</table>
<?php
}

function yse_soft_save_custom_user_profile_fields ( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) {
		return;
	}
	update_user_meta( $user_id, 'character_traits', $_POST['character_traits'] );
	update_user_meta( $user_id, 'user_age', $_POST['user_age'] );
	update_user_meta( $user_id, 'user_location', $_POST['user_location'] );
	update_user_meta( $user_id, 'job_title', $_POST['job_title'] );
	update_user_meta( $user_id, 'user_experience', $_POST['user_experience'] );
	update_user_meta( $user_id, 'user_mobile', $_POST['user_mobile'] );
	update_user_meta( $user_id, 'user_skype', $_POST['user_skype'] );
	update_user_meta( $user_id, 'user_github', $_POST['user_github'] );
	update_user_meta( $user_id, 'user_linkedin', $_POST['user_linkedin'] );
	update_user_meta( $user_id, 'user_facebook', $_POST['user_facebook'] );
	update_user_meta( $user_id, 'mother_language', $_POST['mother_language'] );
}

add_action( 'show_user_profile', 'yse_soft_add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'yse_soft_add_custom_user_profile_fields' );

add_action( 'personal_options_update', 'yse_soft_save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'yse_soft_save_custom_user_profile_fields' );
