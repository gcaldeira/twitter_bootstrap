<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

//bootstrapped

if (elgg_get_plugin_setting('display_footer', 'twitter_bootstrap') == 'yes') {

$footer_menu = elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => ''));

echo <<<HTML
<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				Powered by the <a href="http://elgg.org">Elgg engine</a> and <a href="http://getbootstrap.com/">Twitter Bootstrap</a>.
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				add content here
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				add content here
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-body">
				{$footer_menu}
			</div>
		</div>
	</div>
</div>
HTML;
}
