<?php
//	Custom styles / required Elgg styles where I don't want to include the whole Elgg file
?>

/** SOME CORE OVERRIDES **/

.hidden {
	display:none;
}

.elgg-page .elgg-page-header {
	position: relative;
	padding-top:15px;
	margin-top:40px;
}

.elgg-page-header h1 {
	padding-bottom:10px;
}

.elgg-page-header h1 a {
	font-size:32px;
	color:#000;
}

.elgg-menu-extras-default {
	margin:10px 0 10px -10px;
	min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.elgg-menu-longtext-default > li, .elgg-menu-extras-default > li {
	padding:0 10px 0 10px;
}

ul.elgg-menu-river-default, ul.elgg-menu-annotation-default {
	float:right;
}

ul.elgg-tags {
	margin:0;
}

.page-header {
	margin:0 0 5px 0;
	padding:0 0 5px 0;
}

li {
	list-style:none;
}

.elgg-foot {
	margin-top:20px;
}

/** system messages **/

.elgg-page-messages {
	height: 0;
}

.bootstrap-messages {
	top:35px;
	z-index:100;
 }

/** Footer **/

.elgg-page-footer {
	border-top:1px solid #DDDDDD;
}

.elgg-page-footer li  {
	padding:0 0 0 10px;
}

.elgg-page-footer {
	padding-bottom:20px;
}

.elgg-body:after,
.elgg-col-last:after {
	display: block;
	visibility: hidden;
	height: 0 !important;
	line-height: 0;
	overflow: hidden;
	
	/* Stretch to fill up available space */
	font-size: xx-large;
	content: " x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x ";
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 0px solid #CCC;
	margin-bottom: 0px;
	padding-bottom: 0px;
}

/** Elgg access label **/

.elgg-access {
	 font-size: 10.998px;
  font-weight: bold;
  line-height: 14px;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #999999;
	padding: 1px 9px 2px;
  -webkit-border-radius: 9px;
     -moz-border-radius: 9px;
          border-radius: 9px;
}

.elgg-access:hover {
  color: #ffffff;
  text-decoration: none;
}

/*****	you decide button	*****/

div#read-access.btn-group div.dropdown-menu label:hover {
	cursor:pointer;
	color: rgb(255, 255, 255);
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
    background-color: rgb(91, 183, 91);
    background-image: -moz-linear-gradient(center top , rgb(98, 196, 98), rgb(81, 163, 81));
    background-repeat: repeat-x;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

#access_id_btn, #access_id_label {
	margin: 10px;
}

#read-access {border: 1px solid;}

/*****	wysihtml5	*****/

.wysihtml5-sandbox {
  border-color: rgba(82, 168, 236, 0.8);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(82, 168, 236, 0.6);
  outline: 0 none;
}



/** Elgg Avatar within elgg-page-body **/

.elgg-page-body .elgg-avatar {
	float:left;
	margin:0 10px 10px 0;
}


/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */

.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}

.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/*** MISC ***/

.elgg-tagcloud {
	margin:10px 0 10px 0;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 5px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 25px;
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;

	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: solid 1px;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: #FFF;
	
	-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #ddd;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #ccc;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 80%;
	font-weight: bold;
	line-height: 1.2em;
	color: #bababa;
	margin-left:4px;
	padding:10px 0 0 0;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999;
}
.elgg-breadcrumbs > li > a:hover {
	color: #0054a7;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	left: 0;
	margin-top:5px;
}

/** The wire **/

#thewire-textarea {
	height: 40px;
	padding: 4px;
}

.page-header {
	border-bottom: none;
}

/*****	dealing with the header	*****/
#tbs_logo {
	padding-top: 10px;
}
