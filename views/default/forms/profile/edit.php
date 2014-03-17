<?php
/**
 * Edit profile form				
 *
 * @uses vars['entity']
 */

?>

<div class="form-group row">
	<label class="control-label"><?php echo elgg_echo('user:name:label'); ?></label>
	<?php echo elgg_view('input/text', array('class' => '', 'id' => 'name', 'name' => 'name', 'value' => $vars['entity']->name)); ?>
</div>
<?php

$profile_fields = elgg_get_config('profile_fields');
if (is_array($profile_fields) && count($profile_fields) > 0) {
	foreach ($profile_fields as $shortname => $valtype) {
		$metadata = elgg_get_metadata(array(
			'guid' => $vars['entity']->guid,
			'metadata_name' => $shortname
		));
		if ($metadata) {
			if (is_array($metadata)) {
				$value = '';
				foreach ($metadata as $md) {
					if (!empty($value)) {
						$value .= ', ';
					}
					$value .= $md->value;
					$access_id = $md->access_id;
				}
			} else {
				$value = $metadata->value;
				$access_id = $metadata->access_id;
			}
		} else {
			$value = '';
			$access_id = ACCESS_DEFAULT;
		}

	if ($shortname === 'description') {
?>
	<div class="form-group row">
<?php
		$params = array(
			'name' => $shortname,
			'value' => $value,
			'placeholder' => 'About Me',
		);
		echo elgg_view("input/{$valtype}", $params);
		$params = array(
			'name' => "accesslevel[$shortname]",
			'value' => $access_id,
		);
		echo elgg_view('input/access', $params);
?>
	</div>

<?php

	} else {
?>
<div class="form-group row">
	<label class="control-label"><?php echo elgg_echo("profile:{$shortname}") ?></label>
	<?php
		$params = array(
			'name' => $shortname,
			'value' => $value,
			'class' => '',
		);
		echo elgg_view("input/{$valtype}", $params);
		$params = array(
			'name' => "accesslevel[$shortname]",
			'value' => $access_id,
		);
		echo '<div class="col-md-4 pull-right">'.elgg_view('input/access', $params).'</div>';
	?>
</div>
<?php
	}
	}
}
?>
<div class="form-group">
<?php
	echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['entity']->guid));
	echo elgg_view('input/button', array('type' => 'submit', 'class' => 'btn btn-default', 'value' => elgg_echo('save')));
?>
</div>
<?php 
return FALSE;
