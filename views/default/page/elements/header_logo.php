<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_description = $site->description;
$site_url = elgg_get_site_url();
$logo = '<img src="mod/twitter_bootstrap/responsive.png" alt="'.$site_name.'" class="img-responsive" id="tbs_logo" />';
?>

<h1>
	<a class="" href="<?php echo $site_url; ?>">
		<?php echo $logo; ?>
	</a>
</h1>
