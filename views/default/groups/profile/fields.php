<?php
/**
 * Group profile fields
 */

$group = $vars['entity'];

$profile_fields = elgg_get_config('group');

if (is_array($profile_fields) && count($profile_fields) > 0) {

	foreach ($profile_fields as $key => $valtype) {
		// do not show the name or brief description on profile page
		if ($key == 'name' || $key == 'briefdescription') {
			continue;
		}

		$value = $group->$key;
		if (is_null($value)) {
			continue;
		}

		$options = array('value' => $group->$key);
		if ($valtype == 'tags') {
			$options['tag_names'] = $key;
		}

		echo '<h4 class="media-heading">'.elgg_echo("groups:$key").'</h4>';
		echo elgg_view("output/$valtype", $options);
	}
}
