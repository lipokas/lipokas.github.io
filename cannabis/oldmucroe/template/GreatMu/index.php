<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<script>
function clearText(thefield){
if (thefield.defaultValue==thefield.value)
thefield.value = ""
} 
</script>
<style type="text/css">
<!--
* {
	margin: 0;
	padding: 0;
}

.clearfloat { clear:both;}

body {
	background: #0f0f0f url(template/<?=$core['config']['template'] ?>/images/bg_body.gif) 0 0 repeat-x;
	color: #767676;
	font-family: Trebuchet MS, Trebuchet, Verdana;
	text-align: center;
	font-size: 0.75em; /* 12px */
	line-height: 1.5em; 
}

img { border: 0; margin: 0; padding: 0; }

a, input, span, h1, li, div, img { behavior: url(template/<?=$core['config']['template'] ?>/scripts/iepngfix.htc); padding: 0; } /* IE PNG Fix */

/*-------------------------
 Links & Colors
-------------------------*/

a {
	color: #767676;
	text-decoration: none;
}
a:hover {
	color:#CACACA;
	text-decoration: none;
}

/*-------------------------
 Misc
-------------------------*/

input {
	font-family: Arial;
	font-size: 0.917em; /* 11px */
	color: #3b3b3b;
	padding: 1px 5px;
}

/*-------------------------
 Container
-------------------------*/

#container {
	width: 1000px;
	margin: 36px auto 0 auto;
	text-align: left;
	clear: both;
}

#wrapper {
	background: #fff;
	width: 1000px;
	padding: 25px 0 0 0;
	margin: 0 auto;
	clear: both;
}
* html #wrapper { margin-top: -29px; }


/*-------------------------
 Page Header
-------------------------*/

#page-header {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_top.png) 0 0 no-repeat;
	width: 1000px; /* 1000 - 15 - 15 */
	height: 24px;
	margin: 0 auto;	
	position: relative;
	clear: both;
}

#page-header .headerbar {
	width: 1000px;
	overflow: auto;
	padding: 10px 0 0 0;
	clear: both;
}

#page-header .headerbar p {
	padding-left:20px;}

/*----- Login ----------*/

fieldset#forumlogin {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_login.gif) 0 0 no-repeat;
	float: left;
	height: 29px;
	position: relative;
	margin: 0 0 11px 39px;
	padding: 0 0 0 97px;
	border: 0;
	clear: both;
}
* html fieldset#forumlogin { margin-left: 19px; }

#forumlogin legend, #forumlogin label { 
	display: none; 
}
#forumlogin input.loginbox {
	float: left;
	width: 86px; /* 96 - 10 */
	height: 14px; /* 16 - 2 */
	margin: 11px 4px 0 0;
	border: 1px solid #e1e1e1;
}
#forumlogin input.loginbox:hover,
#forumlogin input.loginbox.hover {
	border: 1px solid #121212;
}
#forumlogin input.loginbox:focus {
	border: 1px solid #fd6e00;
}

/* Login Buttons */

#forumlogin #submit-login {
	background: url(template/<?=$core['config']['template'] ?>/images/login.gif) 0 0 no-repeat;
	float: left;
	width: 51px;
	height: 39px;
	text-indent: -10000px;
	font-size: 0px;
	line-height: 0px;
	border: 0;
	cursor: pointer;
	display: block;
}

#forumlogin .register {
	background: url(template/<?=$core['config']['template'] ?>/images/register.gif) 0 0 no-repeat;
	float: left;
	width: 66px;
	height: 39px;
	text-indent: -10000px;
	display: block;
}
#forumlogin .help {
	background: url(template/<?=$core['config']['template'] ?>/images/help.gif) 0 0 no-repeat;
	float: left;
	width: 51px;
	height: 39px;
	text-indent: -10000px;
	cursor: help;
	display: block;
}
#forumlogin a:hover,
#forumlogin #submit-login:hover { background-position: 0 -39px; }

/*-------------------------
 Banner
-------------------------*/
/* Suggested banner width: 994px */
/* Suggested banner height: Any */
/* Add your banner image to the "images" folder */
/* Edit the width and height attributes of #banner to match your image. */
/* NOTE: Banner will not resize if the size of your image does not match the dimensions set below. */

/*----- Banner Image ----------*/
/* If you use a different name than banner.jpg for your image, change it below. */
/* NOTE: Your image does NOT have to have rounded corners. See "Banner Corners" to add rounded corners */

#banner {
	background: #fff url(template/<?=$core['config']['template'] ?>/images/banner.jpg) 50% 2px no-repeat;
	width: 994px; /* Edit this to match the width of your banner */
	height: 163px; /* Edit this to match the height of your banner */
	border-top: 1px solid #e7e7e7;
	margin: 0 auto;
	position: relative;
	display: block;
	clear: both;
}

/*----- Logo Image ----------*/
/* Add your logo image to the "images" folder */
/* If you have two images, such as a banner and a logo, use this for the uppermost image. */
/* Make sure you edit the width and height of #logo and #logo a to match #banner */
/* If you would like to change the placement of logo, change the background-position attribute when noted. 
   Can use pixels or percentages, for instance 48px 53px, or 10% 50%. 50% will vertically or horizontally center the image. */
/* NOTE: If you choose not to use this, just change "background: none" when noted */

#logo {
	background: url(template/<?=$core['config']['template'] ?>/images/logo.png) no-repeat; /* Set to "background: none" if you are not using this feature */
	background-position: 0px 0px; /* Edit this to change the position of your logo. Changes the distance from LEFT and TOP respectivly. */
	width: 994px; /* Edit this to match the width of your banner */
	height: 163px; /* Edit this to match the height of your banner */
	text-indent: -10000px;
	display: block;
}
#logo a {
	width: 994px; /* Edit this to match the width of your banner */
	height: 163px; /* Edit this to match the height of your banner */
	display: block;
}

/*----- Banner Corners ----------*/
/* This feature will enable you to essentially "round" your banner. */
/* NOTE: To turn off, just change "display: block" to "display: none" when noted */

span.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span {
	font-size: 1px;
	line-height: 1px;
	display: block; /* Change to "display: none" to turn off this feature */
	height: 17px;
	background-repeat: no-repeat;
}

span.corners-top {
	background-image: url(template/<?=$core['config']['template'] ?>/images/corners_logo_left.png);
	background-position: 0 0;
	margin: -1px -16px -14px 0;
}

span.corners-top span {
	background-image: url(template/<?=$core['config']['template'] ?>/images/corners_logo_right.png);
	background-position: 100% 0;
	margin: 0 15px 0 0;
}

span.corners-bottom {
	background-image: url(template/<?=$core['config']['template'] ?>/images/corners_logo_left.png);
	background-position: 0 100%;
	margin: -19px -16px 0 0;
	clear: both;
}

span.corners-bottom span {
	background-image: url(template/<?=$core['config']['template'] ?>/images/corners_logo_right.png);
	background-position: 100% 100%;
	margin: 0 16px 0 0;
}

/*-------------------------
 Navigation
-------------------------*/

ul#navigation {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_navigation.gif) 0 0 no-repeat;
	width: 995px;
	height: 60px;
	list-style: none;
	position: relative;
	margin: -9px 2px 3px 3px;
	clear: both;
}

#navigation li {
	float: left;
	position: relative;
	margin: 15px 0 0 0;
}
#navigation li:hover, #navigation li.hover {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_login_gloss.png) 50% 14px no-repeat;
}
#navigation li a {
	background: none 50% 18px no-repeat;
	height: 10px;
	padding: 18px 19px 16px 13px;
	text-indent: -10000px;
	display: block;
}

/*----- Navigation Images ----------*/
/* Add your navigation image to the "images" folder. Read below about how to name your image: */
/* To add another image to the navigation, add the following code to the HTML: */
/* <li class="btn-nameofpage"><a href="#" title="Name of Page">Name of Page</a></li> */
/* Then, add the following code to the CSS below: */
/* #navigation li.btn-nameofpage a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_nameofpage.png); width: XXXpx; } */
/* Change "nameofpage" and "Name of Page" to the name of your page, 
   for instance "communitynavigation" and "Community Navigation" respectively.
   Change XXXpx to the width of the image that you are adding, and "#" to the link to the page. */
   
#navigation li.btn-homepage a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_homepage.png); width: 61px; }
#navigation li.btn-descargas a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_descargas.png); width: 61px; }
#navigation li.btn-rankings a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_rankings.png); width: 61px; }
#navigation li.btn-estadisticas a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_estadisticas.png); width: 68px; }
#navigation li.btn-donaciones a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_donaciones.png); width: 82px; }
#navigation li.btn-foro a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_foro.png); width: 60px; }
#navigation li.btn-contacto a { background-image: url(template/<?=$core['config']['template'] ?>/images/btn_contacto.png); width: 50px; }

/*----- Dropdown Menu ----------*/
/* To add a dropdown, use the following HTML: */
/*
<li class="btn-pagename">
	<a href="#" title="Name of Page">Name of Page</a>
	<ul class="dropdown">
		<li class="first"><a href="#" title="Name of Linked Page">Name of Linked Page</a></li>
		<li><a href="#" title="Name of Other Linked Page">Name of Other Linked Page</a></li>
		...
	</ul>				
</li>
*/
/* Change "nameofpage" and "Name of Page" to the name of your page, 
   for instance "communitynavigation" and "Community Navigation" respectively. */
/* There are no CSS changes necessary. This supports a 3-level dropdown menu */
/* NOTE: For advanced users only! */

#navigation ul.dropdown {
	background: #191919 url(template/<?=$core['config']['template'] ?>/images/bg_dropdown.gif) 0 0 repeat-x;
	position: absolute;
	list-style: none;
	top: 41px;
	width: 167px;
	display: none;
}
#navigation li:hover ul.dropdown,
#navigation li.hover ul.dropdown { 
	display: block;
}
#navigation ul.dropdown li {
	background: url(template/<?=$core['config']['template'] ?>/images/divider_dropdown.gif) 100% 0 repeat-x;
	position: relative;
	padding: 5px 3px 3px 3px;
	margin: 0;
}
#navigation ul.dropdown li.first { background: none; }
#navigation ul.dropdown a {
	background: none;
	text-transform: uppercase;
	text-decoration: none;
	text-indent: 0;
	font-size: 0.833em; /* 10 px */
	color: #8b8b8b;
	width: 147px; /* 167 - 14 - 6 */
	padding: 4px 7px 7px 7px;
	margin: 0;
}
#navigation ul.dropdown a:hover {
	background: #0b0b0b;
}

/* Two Dropdowns */

#navigation ul.dropdown li ul.horizontal-dropdown {
	background: #191919 url(template/<?=$core['config']['template'] ?>/images/bg_dropdown.gif) 0 0 repeat-x;
	position: absolute;
	list-style: none;
	top: 0;
	left: 167px;
	width: 167px;
	display: none;
}
#navigation ul.dropdown li:hover ul.horizontal-dropdown,
#navigation ul.dropdown li.hover ul.horizontal-dropdown {
	display: block;
}

/* Three Dropdowns */

#navigation ul.dropdown li ul.horizontal-dropdown li ul.horizontal-dropdown { display: none; }
#navigation ul.dropdown li ul.horizontal-dropdown li:hover ul.horizontal-dropdown,
#navigation ul.dropdown li ul.horizontal-dropdown li.hover ul.horizontal-dropdown {	display: block; }

/*-------------------------
 Main
-------------------------*/

#main {
	background: #fff url(template/<?=$core['config']['template'] ?>/images/bg_main.gif) 50% 0 repeat-y;
	width: 1000px;
	margin: 0 auto;
	clear: both;
}


/*-------------------------
 Content
-------------------------*/

#content {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_end.gif) 0 100% repeat-x;
	float: left;
	width: 528px;
}

/*----- Articles ----------*/

/* Article Headline */

h4.headline {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_headline.png) 0 0 no-repeat;
	float: left;
	font-size: 1.333em; /* 16px */
	font-weight: bold;
	color: #fd6e00;
	width: 482px; /* 487 - 5 */
	height: 42px; /* 46 - 4 */
	margin: 0 0 0 52px;
	padding: 4px 0 0 5px;
	display: block;
}
* html h4.headline { margin: 0 0 0 26px; }
h4.headline a {
	color: #fd6e00;
	text-decoration: none;
}
h4.headline a:hover {
	text-decoration: underline;
}

/* Article Author, Post Date, and Image */

span.author {
	float: left;
	color: #121212;
	font-weight: bold;
	margin: 22px 0 0 -482px;
}
span.author a {
	color: #121212;
	text-decoration: none;
}
span.author a:hover { 
	text-decoration: underline; 
}
.postdate {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_postdate.gif) 0 0 no-repeat;
	float: left;
	text-transform: uppercase;
	text-align: center;
	font-weight: bold;
	color: #fd6e00;
	width: 50px;
	height: 24px; /* 46 - 22 */
	padding: 24px 0 0 0;
	margin: 0 0 1px -539px;
	display: block;
}
.postdate em {
	font-size: 1.333em; /* 16px */
	line-height: 1.333em;
	color: #fff;
	font-style: normal;
	margin-top: -38px;
	display: block;
}
.story-image {
	text-align: center;
	border: 2px solid #121212;
	margin: 0 auto;
	display: block;
	clear: both;
}

/* Story */
.story {
	clear: both;
}
.story p {
	margin: 5px 0 13px 0;
	padding: 0 10px;
}
.story p.left { text-align: left; }
.story p.center { text-align: center; }
.story p.right { text-align: right; }
.story ul {
	margin-left: 30px;
}

/* More Options */

ul.more {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_more.gif) 0 0 no-repeat;
	font-size: 0.917em;
	text-align: right;
	width: 539px;
	height: 17px; /* 25 - 8 */
	padding: 4px 0;
	margin: 0 0 16px 0;
	list-style: none;
	clear: both;
	display: block;
}
ul.more li {
	display: inline;
	padding: 0 8px;
	border-left:  2px solid #fff;
}
ul.more li.first {
	border: 0;
}
ul.more li a {
	color: #fd6e00;
	text-decoration: none;
}
ul.more li a:hover {
	text-decoration: underline;
}
ul.more li a strong {
	font-weight: normal;
	color: #fff;
}
/*-------------------------
 Sidebars
-------------------------*/

/*----- Left Sidebar ----------*/

#left-sidebar {
	background: url(template/<?=$core['config']['template'] ?>/images/sidebar_left_top.gif) 0 0 no-repeat;
	float: left;
	width: 240px; /* 255 - 10 */
	padding: 5px 10px 5px 5px;
	margin-left:3px;
}

/*----- Right Sidebar ----------*/

#right-sidebar {
	background: url(template/<?=$core['config']['template'] ?>/images/sidebar_right_top.gif) 0 0 no-repeat;
	float: right;
	width: 190px; /* 200 - 10 */
	padding: 5px;
	margin-right:3px;

}

/* Sidebar Block Titles */

.block h3.block-title {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_title.gif) 0 0 repeat-x;
	height: 10px; /* 30 - 20 */
	padding: 20px 0 0 0;
	clear: both;
}
.block h3.block-title span {
	background: none 0 0 no-repeat;
	height: 9px;
	line-height: 0;
	text-indent: -10000px;
	display: block;
}
/* Sidebar Block Title Images (Subheading) */
/* Add your new subheader image to the "images" folder. Read below about how to name your image: */
/* To add another subheader image, add the following code to the HTML: */
/* <div class="block name-of-title">
		<h3 class="block-title"><span>Name of Title</span></h3>	
		<!-- Add content here -->					
	</div> */
/* Then, add the following code to the CSS below: */
/* .name-of-title a { background-image: url(template/<?=$core['config']['template'] ?>/images/nameoftitle.png); width: XXXpx; } */
/* Change "name-of-title", "nameoftitle", and "Name of Title" to the name of your page, 
   for instance "clan-roster", "clanroster" and "Clan Roster" respectively.
   Change XXXpx to the width of the image that you are adding. */
/* The block of HTML code above will add another sidebar block. If you are only 
   interested in modifying an already existing title, just change the line 
   name-of-title in the block, and the title image will update automatically once 
   the image has been uploaded, and the CSS has been updated. */

.menu-login h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/tit_usercp.png); width: 100px;}
.menu-modules h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/tit_menumodules.png); width: 112px; }
.top5level h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/top5level.png); width: 100px; }
.top5recet h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/top5recet.png); width: 100px; }
.top5killers h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/top5killers.png); width: 100px; }
.top5guild h3.block-title span { background-image: url(template/<?=$core['config']['template'] ?>/images/top5guild.png); width: 100px; }

.menu-login-2 { padding:5px;}
.menu-login-2 ul { list-style:none;}
.menu-login-2 li.list_menu { height:22px; line-height:22px; background:url(template/<?=$core['config']['template'] ?>/images/bullet.gif) no-repeat 10px; padding-left:25px; margin-bottom:1px;}

.menu-modules-2 { padding:5px; padding-top:10px;}
.menu-modules-2 ul { list-style:none;}
.menu-modules-2 li.list_menu { height:22px; line-height:22px; background:url(template/<?=$core['config']['template'] ?>/images/bullet.gif) no-repeat 10px; padding-left:25px; margin-bottom:1px;}

.rankings-2 { padding:5px;}

/* Roster */

ul.roster {
	list-style: none;
	margin: 5px -3px;
	clear: both;
}
ul.roster li {
	float: left;
	margin: 0 3px 3px 3px;
}
* html ul.roster li { margin: 1px 2px; }
ul.roster li img {
	border: 1px solid #000;
}
#user-name {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_namebox.png) 0 0 no-repeat;
	font-size: 0.833em;
	text-decoration: none;
	color: #fff;
	text-align: center;
	width: 238px;
	height: 13px; /* 23 - 10 */
	padding: 5px 0;
	display: block;
	clear: both;
}
#user-name strong {
	color: #fd6e00;
}

/* Recent Threads */

ul.list-threads {
	list-style: none;
	clear: both;
}
.list-threads li {
	background: url(template/<?=$core['config']['template'] ?>/images/list_threads.gif) 0 0 no-repeat;
	width: 239px;
	height: 54px;
	clear: both;
}
.list-threads li a {
	background: url(template/<?=$core['config']['template'] ?>/images/icons/viewpost.png) 5px 50% no-repeat;
	text-decoration: none;
	color: #fff;
	width: 176px; /* 239 - 63 */
	height: 44px; /* 54 - 10 */
	padding: 10px 0 0 63px;
	display: block;
}
.list-threads li a:hover strong {
	text-decoration: underline;
}
.list-threads li a strong {
	display: block;
}
.list-threads li a em {
	font-size: 0.833em;
	line-height: 1em;
	font-style: normal;
	color: #f36f21;
	display: block;
}
.showallnews {
	background: url(template/<?=$core['config']['template'] ?>/images/showallnews.png) 0 0 no-repeat;
	float: right;
	width: 90px;
	height: 9px;
	margin: 5px 0;
	clear: both;
}
.showallnews a {
	width: 90px;
	height: 9px;

	text-indent: -10000px;
	display: block;
}

/* Matches */

ul.list-matches {
	list-style: none;
	clear: both;
}
.list-matches li {
	background: url(template/<?=$core['config']['template'] ?>/images/list_matches.gif) 0 0 no-repeat;
	text-align: right;
	width: 239px;
	height: 32px;
	display: block;
	clear: both;
}
/* Update games.css to add game thumbnails. */
a.game-thumb {
	background: none 10px 50% no-repeat;
	color: #fff;
	width: 239px;
	height: 32px;
	text-decoration: none;
	display: block;
}
.list-matches li span {
	background: none 210px 50% no-repeat;
	width: 202px; /* 239 - 37 */
	height: 32px;
	padding: 0 37px 0 0;
	display: block;
}
.list-matches li.win span { background-image: url(template/<?=$core['config']['template'] ?>/images/icons/arrow_up.png); }
.list-matches li.loss span { background-image: url(template/<?=$core['config']['template'] ?>/images/icons/arrow_down.png); }

.list-maches li strong {
	display: block;
	clear: both;
}
.list-matches li a:hover strong {
	text-decoration: underline;
}
.list-matches li dfn {
	display: none;
}
.list-matches li em {
	font-size: 0.833em; /* 10 px */
	line-height: 1em;
	font-style: normal;
	color: #fd6e00;
	display: block;
	clear: both;
}
.showallmatches {
	background: url(template/<?=$core['config']['template'] ?>/images/showallmatches.png) 0 0 no-repeat;
	float: right;
	width: 106px;
	height: 9px;
	margin: 5px 0;
	clear: both;
}
.showallmatches a {
	width: 106px;
	height: 9px;
	text-indent: -10000px;
	display: block;
}

/* Sponsors */

.sponsor-image {
	background: url(template/<?=$core['config']['template'] ?>/images/sponsor_top.png) 0 0 no-repeat;
	width: 190px;
	min-height: 74px;
	height: auto !important;
	height: 74px;
	margin: 2px auto;
	display: block;
}
.sponsor-image a {
	background: url(template/<?=$core['config']['template'] ?>/images/sponsor_bottom.png) 100% 100% no-repeat;
	width: 190px;
	padding: 18px 0;
	min-height: 38px; /* 74 - 18 - 18 */
	height: auto !important;
	height: 38px;
	display: block;
}
.sponsor-image a img {
	margin: 0 auto;
	display: block;
}

/* Weekly Poll */

.poll p {
	font-weight: bold;
	color: #fff;
	margin: 5px 0;
	padding: 0 5px;
}
.poll-options {
	border: 0;
}
.poll-options dl {
	position: relative;
	line-height: 2em;
	width: 190px;
	overflow: hidden;
	clear: both;
}
.poll-options dt {
	font-size: 0.917em; /* 11 px */
	float: left;
	width: 159px;
	margin-left: 31px;
}
* html .poll-options dt { margin-left: 15px; }
.poll-options dd {
	float: left;
	width: 31px;
	text-align: center;
	margin-left: -190px;
}

.submit-buttons {
	border: 0;
	width: 172px;
	margin: 5px auto;
}
.submit-buttons .entervote {
	background: url(template/<?=$core['config']['template'] ?>/images/entervote.gif) 0 0 no-repeat;
	float: left;
	width: 83px;
	height: 24px;
	text-indent: -10000px;
	font-size: 0px;
	line-height: 0px;
	border: 0;
	cursor: pointer;
	display: block;
}
.submit-buttons .viewresults {
	background: url(template/<?=$core['config']['template'] ?>/images/viewresults.gif) 0 0 no-repeat;
	float: right;
	width: 83px;
	height: 24px;
	text-indent: -10000px;
	display: block;
}



/*-------------------------
 Footer & Copyright
-------------------------*/

#footer {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_footer.gif) 0 100% repeat-x;
	width: 1000px;
	height: 68px;
	clear: both;
}
#footer .copyright {
	background: url(template/<?=$core['config']['template'] ?>/images/bg_copyright.gif) 3px 0 no-repeat;
	position: relative;
	float: left;
	width: 532px; /* 542 - 10 */
	height: 57px; /* 62 - 14 */
	margin: 0 0 6px 252px;
	padding: 5px 0 0 10px;
	display: block;
}
.footer_font { font-size:10px; color: #4f4f4f; font-family: Arial, Helvetica, sans-serif; line-height:12px; }
.footer_font a{ color: #ff0000; text-decoration: none; }
.footer_font a:hover{ color: #ff0000; text-decoration: underline; }

.language_select{
margin-top: 4px;
background-color: transparent;
text-align:right;
 }

.language_select a{
 font: 11px Arial, Helvetica, sans-serif;
color: #ffffff;
 text-decoration: none;
 }

.language_select a:hover{
font: 11px Arial, Helvetica, sans-serif;
color: #ffffff;
text-decoration: underline;
 }
 
 














 
 
 
 
 
 
 
 





legend{
background: #ECECFF;
border: 1px solid #cccccc;
font: bold 11px Arial, Helvetica, sans-serif;
margin-left: 5px;
}

ul#menu{
	margin:0;
	padding:0px 0px 0px 85px;
	list-style-type:none;
	width:auto;
	position:relative;
	display:block;
	height:38px;
	text-transform:uppercase;
	font-size:12px;
	font-weight:bold;
	background:transparent url("template/<?=$core['config']['template'] ?>/images/button_bg.jpg") repeat-x top left;
	font-family:Arial, Helvetica, sans-serif;
	
}

ul#menu li{
	display:block;
	float:left;
	margin:0;
	pading:0;
	height:38px;
}


ul#menu li a{
	display:block;
	float:left;
	color:#ffffcc;
	text-decoration:none;
	font-weight:bold;
	padding:10px 16px 0 10px;
	
	background:transparent url("template/<?=$core['config']['template'] ?>/images/sep.jpg") no-repeat top right; 
	}


ul#menu li a:hover{
	background:transparent url("template/<?=$core['config']['template'] ?>/images/hover.jpg") no-repeat top right;
	color:#FFF;
	}
.style1 {color: #B53452}



#tmp_main { width:990px; margin:auto; background-color:#0E1819; border:1px #262E30 solid; padding-bottom:5px; }
.tmp_nav { background:url(template/<?=$core['config']['template'] ?>/images/nav_bg.jpg); width:976px; height:34px; margin:auto; margin-top:3px; margin-bottom:10px; }
.tmp_nav ul { margin-left:20px; }
.tmp_nav li { float:left; background:url(template/<?=$core['config']['template'] ?>/images/nav_mark.gif) no-repeat left top; padding-left:15px; padding-right:10px; height:34px; }
.tmp_nav .menu { color:#ddd; font:bold 14px Arial, Helvetica, sans-serif; line-height:34px; }
.tmp_nav .menu a { color:#ddd; font:bold 14px Arial, Helvetica, sans-serif; line-height:34px; text-decoration:none }
.tmp_nav .menu a:hover { color:#FC0; }
.tmp_nav li:hover { background:url(template/<?=$core['config']['template'] ?>/images/nav_hover_bg.gif) no-repeat left; }


.tmp_main_content { width:auto; margin:5px 5px 0 5px; background-color:#2F343A; }

.tmp_left_side { background-color:#1E2628;   padding-bottom:15px; padding-right: 10px; padding-left: 10px; }

.tmp_left_title { margin-top:5px; font:bold 16px/33px Arial, Helvetica, sans-serif; text-align:center; color:#fff }




.tmp_left_menu {  margin:0 auto; border:1px #3F4854 solid; padding:1px; }
.tmp_left_menu a { color:#FFFFFF; font:normal 12px Arial, Helvetica, sans-serif; }
.tmp_left_menu a:hover { color:#fc0; text-decoration:none }
.tmp_left_menu ul { border:1px #8D8585 solid; background-color:#8D8585; }
.tmp_left_menu li.list_menu { height:22px; line-height:22px; border-bottom:1px #171D24 solid; color:#eee; background:#434B4C url(template/<?=$core['config']['template'] ?>/images/bullet.gif) no-repeat 20px; padding-left:35px; margin-bottom:1px; }
.tmp_left_menu li.list_menu a { line-height:22px; zoom:1; }
.tmp_left_menu li.list_menu:hover { background-color:#3D1F1F; }

.tmp_left_m {
border-bottom: 1px solid #33302e;
border-right: 1px solid #33302e;
background:#1e1c1b;
padding: 4px;
font: 12px arial, verdana, sans-serif;
color: #ffffff;
}

.tmp_left_m  a{
color:#ffffff;
text-decoration:none;
}

.tmp_left_m  a:hover{
color:#fc0;
text-decoration:none;
}


.yellow  a{
color:#fc0;
text-decoration:none;
}

.yellow  a:hover{
color:#fffff;
text-decoration:none;
}





.right_page_content { font:normal 12px/24px Arial, Helvetica, sans-serif; color:#375264; margin-left:2px; margin-right:2px; margin-bottom: 5px;}
.right_page_content a{color:#fc0; text-decoration:underline;}
.right_page_content a:hover{color:#fc0; text-decoration:none;}

.tmp_right_side { background-color:#505D60; border:1px #5C756E solid; padding:3px;}
.tmp_right_content { width: 100%; background-color:#FFFFFF; }
.tmp_m_content { background-color:#F1F4F9; border:1px #C5CBD0 solid; margin-bottom: 10px;}
.tmp_m_content .tmp_right_title { background:#0f0f0f bottom url(template/<?=$core['config']['template'] ?>/images/bg_title.gif) repeat-x; height:24px;  font:normal 14px/20px "Myriad Pro"; color:#FFFFFF; padding-left:15px; padding-top:10px }

.tmp_m_content .tmp_page_content { font:normal 12px/24px Arial, Helvetica, sans-serif; color:#375264; margin:5px; }


.tmp_m_content .tmp_right_title_ann { background-color:#1E2627; height:20px; position:relative; font:bold 15px/20px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif; color:#FFFFFF; padding-left:15px; }
.tmp_m_content .tmp_page_content_ann { font:normal 12px/24px Arial, Helvetica, sans-serif; color:#375264; margin:5px; }
.ann_date { font:normal 11px/24px Arial, Helvetica, sans-serif; color:#555555; }




/*
.tmp_m_content .tmp_page_content a { font:normal 12px/24px Arial, Helvetica, sans-serif; color:#375264; text-decoration:none }
.tmp_m_content .tmp_page_content a:hover { color:#79442F; text-decoration:underline }
*/




.login_field{
background: #4A5952;
border: 0px;
height: 20px;
width: 120px;
color: #222222;
font: bold 11px "Tahoma", Arial, Helvetica, sans-serif;
}

.tmp_advertise { margin-bottom: 20px; width:728px; height:90px; border:2px #6A5151 solid; }

#tmp_nav_header{ text-align:center; height:31px; background:url(template/<?=$core['config']['template'] ?>/images/nav_header_bg.gif) 0 0 repeat-x; font-family:Arial, Helvetica, sans-serif; font-size:11px;}
#tmp_nav_header_menu { width:990px; margin:0 auto; text-align:left; height:28px; padding:1px 0 2px 0; background:url(template/<?=$core['config']['template'] ?>/images/nav_header_bg.gif) 0 0 repeat-x; position:relative;z-index:9999;}



#welcome_stats{float:left; padding-left:5px;  color:#ded1c4; line-height:28px;}
#welcome_stats a {color: #ded1c4; text-decoration: underline;}
#welcome_stats a:hover {color: #ffffff; text-decoration: none;}


#tmp_header_menu{ float:right; padding-right:10px;}
#tmp_header_menu ul li { float:left; height:28px; line-height:28px; padding:0 10px; background:url(template/<?=$core['config']['template'] ?>/images/nav_header_hover.gif) right bottom no-repeat;}
#tmp_header_menu li a { color:#ded1c4; text-decoration: none;}
#tmp_header_menu li a:hover { color:#fff; text-decoration: underline;}	


.where_nav{
margin:4px; padding:2px;
font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
color: #ffffff;
}



































/*
MUCore Css Start
*/
.where_nav a{
color: #ffffff;
text-decoration: underline;
}

.where_nav a:hover{
color: #ffffff;
text-decoration: none;
}

.iN_title{
font-size:14px;
font-weight:bold;

}

.iN_title_mirror{

font-size:17px;
font-weight:bold;
color:#990000;
}

.iN_description{
font:11px/14px Arial, Verdana, sans-serif;
color:#777;

}

.iN_download_title{
font:bold 14px/18px arial; color:#898989;
}

.iN_download_cat{
font-size:17px;
font-weight:bold;
color: #F30;
}


.iN_title a{
font-weight:bold;
text-decoration: none;
}



.iN_title a:hover{
font-weight:bold;
text-decoration: none;
color:#F50;;
}


.iN_date{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:10px;
color:#666666;
}

.iN_news_table tr:hover{
background: #ffffff;
}

.iN_news_content{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
color:#333333;
margin:0px;
padding-top: 6px;
}

.iN_news_content a{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
margin:0px;
text-decoration: underline;
}

.iN_news_content a:hover{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
margin:0px;
text-decoration: none;
}

.iN_new_read_more{
color:#ffffff; 
font: 10px Arial, Helvetica, sans-serif; 
padding: 1px;
}

.iN_new_read_more a{
color: #000000;
font-size: 10px;
}
.iRg_text{
font: bold 13px Arial, sans-serif; color: #555555;
}


.iRg_inf{
font: 11px fantasy;  #555555;
}

.iRg_line{
background:url(template/<?=$core['config']['template']; ?>/images/inner_line.jpg); background-position:bottom; background-repeat:repeat-x;
font: 11px fantasy; color: #555555;
padding-bottom: 4px

}

.iRg_line_top{
background:url(template/<?=$core['config']['template']; ?>/images/inner_line.jpg); background-position:top; background-repeat:repeat-x;
font: 11px fantasy; color: #555555;

}

.iR_func_status{
border: 1px solid #cccccc; 
background: #ffffff; 
padding-left: 4px;
font-size: 11px;
}

.iR_func_status_lacking{
background: #CC3300;
padding: 1px; 
padding-left: 3px; 
padding-right: 3px; 
color: #ffffff;
}


.iR_func_status_free{
background: #00FF00; 
padding: 1px; 
padding-left: 3px; 
padding-right: 3px; 
color: #000000;
}

.iR_func_status_free a{
font-size: 11px;
color: #000000;
}



.iRg_inf a{
font: 11px fantasy; 
text-decoration: underline;
}

.iRg_inf a:hover{
font: 11px fantasy;
text-decoration: none;
}


.iRg_input{

font-size: 10pt;
font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
background-color: #ffffff;
border: 1px solid #cccccc;
height: 18px;
}



.iRg_terms_agree{
font:  12px Arial, Verdana, sans-serif; 
}

.iRg_terms_agree a{
font:  12px Arial, Verdana, sans-serif; 
text-decoration: underline;
}

.iR_rank{
background-color: #181C18;
font: bold 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
}

.iR_stats{
font: 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
background-color: #5F6D5F;
padding: 1px;
}

.iR_stats_2{
font: 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
background-color: #CCCCFF;
padding: 1px;
color: #555555;
}




.iR_stats_bg{
background-color: #996600;

}



.iR_stats_level{
border: 1px solid #cccccc;
font: 11px Georgia, "Times New Roman", Times, serif; color: #555555;
background: #ECECFF;
padding: 1px;
}

.iR_stats_reset{
border: 1px solid #cccccc;
font: 11px Georgia, "Times New Roman", Times, serif; color: #555555;
background: #CECEFF;
padding: 1px;
}



.iR_name{
font: bold 13px Arial, sans-serif; color: #FF3300;
}

.iR_class{
font: 12px Impact, fantasy; color: #666666;
}

.iR_status{
font-size: 11px;
}

.iR_task{
font:  11px Georgia, "Times New Roman", Times, serif; 
}

.iR_rank_type{
font: bold 16px Arial, sans-serif; 
}

.iR_rank_type a{
font: bold 16px Arial, sans-serif; 
text-decoration: none;
}

.iR_rank_type a:hover{
font: bold 16px Arial, sans-serif;
text-decoration: none;
color: #990000;
}



.iR_rank_type_sub{
font: 10px fantasy; 
}

.iR_rank_type_sub a{
font: 10px fantasy; 
text-decoration: none;
}

.iR_rank_type_sub a:hover{
font: 10px fantasy; color:#990000;
text-decoration: none;
}




.msg_success{
background: #c2ffaf;
border: 1px solid #cccccc; 
padding: 4px;
padding-left: 33px;
margin-bottom: 6px;
margin-top: 6px;
background-image:url(template/<?=$core['config']['template'] ?>/images/success.gif);
background-repeat:no-repeat;
background-position: 10px;
font-size: 11px;
font-weight: bold;
color: #444444;
}

.msg_error{
background: #F9F2B9;
border: 1px solid #cccccc; 
padding: 4px;

padding-left: 33px;
margin-bottom: 6px;
margin-top: 6px;
background-image:url(template/<?=$core['config']['template'] ?>/images/warning.gif);
background-repeat:no-repeat;
background-position: 10px;
font-size: 11px;
font-weight: bold;
color: #444444;
}


.chat_bg{
border: 1px solid #cccccc; 
background: #ffffff; 
padding: 4px;
font-size: 11px;
}

.chat_even{
background: #D7D7FF;
padding: 2px; 
}

.chat_odd{
padding: 2px; 
}


.warehouse_block{ 
border: 0px;
text-align: center;
background: url(template/<?=$core['config']['template'] ?>/images/warehouse_block.gif);
}

.warehouse_item_block {
border: 0px;
padding: 0px;
text-align: center;
background: url(template/<?=$core['config']['template'] ?>/images/warehouse_item_block.gif);
}

.warehouse_bg {
border: 0px;
padding: 0px;
text-align: center;
background: url(template/<?=$core['config']['template'] ?>/images/warehouse_bg.gif);
}

.item_name{
font: 12px Arial, sans-serif; 
color: #ffffff;
font-weight: bold;
}

.item_dur{
font: 11px Arial, sans-serif; 
color: #ffffff;
}

.item_requirement{
font: 11px Arial, sans-serif; 
color: #ffffff;
}

.item_skill{
font: 11px Arial, sans-serif; 
color: #ffffff;
}

.item_options{
font: 11px Arial, sans-serif; 
color: #ffffff;
}

.iD_dashed{
border-top: #ffffff dashed 1px;
}

.downloads tr:hover{
background: #ffffff;
}


.curent_step{
background: #FFEF73; border: 1px solid #cccccc; 
padding: 2px;
font:bold 11px Arial;
color:#555555;
}

.step{
background: #ECECEC; 
border: 1px solid #cccccc; 
padding: 2px;
font:bold 11px Arial;
color: #D4D4D4;
}

.hidden_password{
border: 1px solid #cccccc; 
background: #ECECEC; 
padding: 2px;
width: 200px;
color: #ECECEC;
}

.table_list{
background: #ffffff;
color: #000000;
border: outset 1px #DEE0E2;
}

.table_list .title{
background: #DFDFFF;
font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
padding: 2px;
padding-left: 4px;
color: #595959;
border: outset 1px #555555;
}

.table_list .even{
background: #ECECFF;
}

.table_list .content{
font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
padding: 2px;
padding-left: 4px;
}


#rss_feed{
margin-left: 0;
padding-left: 0;
list-style: none;
}

#rss_feed li
{
padding-left: 17px;
background-image: url(template/<?=$core['config']['template'] ?>/images/rss_icon.gif);
background-repeat: no-repeat;
background-position: 0;
}

#rss_feed li a{
text-decoration: none;
}

#rss_feed li a:hover{
text-decoration: underline;
}

 
.usercp_module{
font-weight:bold;
color: #000000;
padding: 2px;
padding-left: 4px;
width: 200px;
}

-->
</style>

	<script type="text/javascript"><!--//--><![CDATA[//><!--
	/* sfHover Function */
		hover = function() {
			var sfEls = document.getElementById("navigation").getElementsByTagName("LI");
			for (var i=0; i<sfEls.length; i++) {
				sfEls[i].onmouseover=function() {
					this.className+=" hover";
				}
				sfEls[i].onmouseout=function() {
					this.className=this.className.replace(new RegExp(" hover\\b"), "");
				}
			}
		}
		if (window.attachEvent) window.attachEvent("onload", hover);
	//--><!]]></script>
	<!--link rel="Shortcut Icon" type="image/x-icon" href="images/favicon.ico" /-->	


</head>

<body>
<div id="container">

<div id="page-header">
		<div class="headerbar">
        	<? if ($user_login == '1')
			 {
			  echo '<p>Bienvenido <a href="">'.$user_auth_id.'</a>, disfruta de la comunidad!</p>';
			 }else{
				   echo 
				   '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
					 <fieldset id="forumlogin">
					  <legend><span>Forum Login</span></legend>
					  <label for="login">Login</label>
						<input type="text" name="uss_id" id="login" class="loginbox" value="Usuario" onFocus="clearText(this)" />
					  <label for="password">Password</label>
						<input type="password" name="uss_password" id="password" class="loginbox" value="password" onFocus="clearText(this)" />
					    <input type="submit" value="Login" id="submit-login" title="login" onclick="uss_login_form.submit();"/>
						<input type="hidden" name="process_login">
					<a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'" class="register" title="Register">Register</a>
					<a href="index.php?page_id=contact" class="help" title="Help">Help</a>
				</fieldset>
			</form>';
				  }
		    ?>			
	</div>
  </div>
    
<div id="wrapper">

<div id="banner">
			<span class="corners-top"><span></span></span>
			<h1 id="logo"><a href="#" title="MUCore Template">LOGO</a></h1>
			<span class="corners-bottom"><span></span></span>
	</div>
        
        <ul id="navigation">
			<li class="btn-homepage"><a href="index.php" title="Inicio">Inicio</a></li>
			<!--<li class="btn-descargas">
				<a href="index.php?page_id=downloads" title="Descargas">Descargas</a>
  				<ul class="dropdown">
					<li class="first"><a href="#" title="Descarga de Cliente">Cliente Completo</a></li>
					<li><a href="#" title="Descarga de Parches">Parche</a></li>
					<li><a href="#" title="Descarga de Utilidades">Sonido</a></li>
			  </ul>				
			</li>-->
			<li class="btn-rankings">
				<a href="index.php?page_id=rankings" title="Rankings">Rankings</a>
  				<ul class="dropdown">
					<li class="first"><a href="index.php?page_id=rankings&rank=guilds" title="Ranking de Clanes">Rankings de Clanes</a></li>
					<li><a href="index.php?page_id=rankings&rank=characters" title="Ranking de Personajes">Rankings de Personajes</a></li>
					<li><a href="index.php?page_id=top_killers" title="Ranking de Asesinos">Rankings de Asesinos</a></li>
					<!--<li><a href="index.php?page_id=rank_events" title="Ranking Eventos">Rankings Eventos</a>
						<ul class="horizontal-dropdown">
							<li class="first"><a href="index.php?page_id=rank_events&rank=blood" title="Ranking Blood Castle">Ranking Blood Castle</a></li>
							<li><a href="index.php?page_id=rank_events&rank=devil" title="Ranking Devil Square">Ranking Devil Square</a></li>
							<li><a href="index.php?page_id=rank_events&rank=siege" title="Ranking Castle Siege">Ranking Castle Siege</a></li>
							<li><a href="index.php?page_id=rank_events&rank=crywolf" title="Ranking Crywolf">Ranking Crywolf</a></li>
						</ul>
					</li>-->
				</ul>
			</li>
			<li class="btn-estadisticas"><a href="index.php?page_id=statistics" title="Estadisticas">Estadisticas</a></li>
			<li class="btn-donaciones"><a href="index.php?page_id=donate" title="Donaciones">Donaciones</a></li>
			<li class="btn-foro"><a href="http://www.tudominio.com.ar/foro" title="Foro" target="_new">Foro</a></li>
			<li class="btn-contacto"><a href="index.php?page_id=contact" title="Contacto">Contacto</a></li>
		</ul>
        <div id="main">
			<div id="left-sidebar">
				<div class="block menu-login">
					<h3 class="block-title"><span>Panel De Usuario</span></h3>
					<div class="menu-login-2">
					<?
		  if($user_login == '1'){
		  	echo '
		  	<ul>';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms',',');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode(",",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}
				
			}
		}
		echo ' </ul>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		  <td align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo 'No Has Iniciado Sesíon!<br>
				Por favor Ingrese sus datos para poder disfrutar de todos los beneficios de ser un miembro de la comunidad!<br>
				<table>
				  <tr>
					<td style="height: 25px; padding-left: 2px;" colspan="2" align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">'.link_lost_password.'</a></td>
  				  </tr>
     			  <tr>
    				<td style="height: 25px; padding-left: 2px;"  colspan="2" align="left"  class="yellow">'.text_start_play_now.'</span> <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">'.link_sign_up.'</a></td>
  				  </tr>
				</table>';
		  }
		  ?>
				</div>
				</div>
				<div class="block menu-modules">
				<h3 class="block-title"><span>Panel De Usuario</span></h3>
				<div class="menu-modules-2">
					<ul>
						<?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms',',');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode(",",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="list_menu"><a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
					</ul>
				</div>
				</div>
			</div>
        	<div id="content">
				<?
		  if(CMS_NAVBAR == '1'){
		  	if(isset($_GET[LOAD_GET_PAGE])){
                  	$l_load = file("engine/cms_data/pag_d.cms");
                  	foreach ($l_load as $l_name){
                  		$l_name = explode(",",$l_name);
                  		if($l_name[3] == $page_check_id){
                  			$primary_l = $l_name[2];
                  			break;
                  		}

                  	}
                  }
                  
                  if(isset($_GET[USER_GET_PAGE])){
                  	$ti2_td = xss_clean(safe_input($_GET[USER_GET_PAGE],"_"));
                  	$l2_load = file("engine/cms_data/mods_uss.cms");
                  	foreach ($l2_load as $l2_name){
                  		$l2_name = explode(",",$l2_name);
                  		if($l2_name[3] == $ti2_td){
                  			$secondary_l = $l2_name[2];
                  			break;
                  		}
                  	}
                  }
                  
                  if(!isset($_GET[LOAD_GET_PAGE])){
                                        #&gt;
                                        $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>';
                                    }elseif  (isset($_GET[LOAD_GET_PAGE])){
                                        if(isset($_GET[USER_GET_PAGE])){
                                            $usercp_module_title =  str_replace($modules_text_tile,$modules_text_translate,$secondary_l);
$title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'&panel='.$l2_name[3].'">'.$usercp_module_title.'</a>';
                                        }else{ $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>';}
                                    }
                  echo '
                  
                  <div class="where_nav">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
                  <td align="left"><img src="template/'.$core['config']['template'].'/images/arrow.gif" border="0"></td>
                  <td>&nbsp;</td>
                  <td width="100%" align="left">'.$title_p.'</td>
                  </table>
                  </div>';
		  	
		  }

if($page_check_id != ANNOUNCEMENTS_CMS_PAGE){
	require('engine/announcement_config.php');
if($core['ANNOUNCEMENT']['ACTIVE'] == '1'){
	$ann_file = array_reverse(file('engine/variables_mods/announcements.tDB'));
	$count_ann = '0';
	foreach ($ann_file as $ann){
		$ann = explode(",",$ann);
		if($ann[3] > time()){
			$ann_found = '1';
			$ann_title = $ann[1];
			$ann_date = $ann[2];
			$ann_id = $ann[0];
;			break;
		}
	}
}
	if($ann_found == '1'){
		echo '
		<div class="tmp_m_content"> 
					<div  class="tmp_right_title">'.text_announcement.'</div>
					<div class="tmp_page_content">
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
					  <tr>
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/images/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="right" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
					  </tr>
					  <tr>
					  <td colspan="2"  align="left" style="background-image:url(template/'.$core['config']['template'].'/images/inner_line.jpg); height: 2px;"></td>
					  </tr>
					  
					  ';
		if($core['ANNOUNCEMENT']['AUTHOR'] == '1'){
			echo '<tr>
			<td colspan="2" align="right"><b>'.$core['config']['admin_nick'].'</b> (Administrator)</td>
			</tr>';
			
		}
		echo '</table></div>
							</div>
						';
	}
}
		  
		  
	
$load_pages = file('engine/cms_data/pag_d.cms');
foreach ($load_pages as $pages_loaded){
	$pages_loaded = explode(",",$pages_loaded);
	
	if($pages_loaded[3] == $page_check_id){
		$p_loaded_array = preg_split( "/\ /", $pages_loaded[5]); 
		$p_l = '1';
		break;
	}
}
if($p_l == '1'){
$load_mods = file('engine/cms_data/mods.cms');
foreach ($load_mods as $mods_loaded){
	$mods_loaded = explode(",",$mods_loaded);
	if(in_array($mods_loaded[0],$p_loaded_array)){
		$_c_id_m[] = $mods_loaded[0];
	}else {
		$_c_id_m[] = 'NULL';
	}
}
$co=0;
foreach ($p_loaded_array as $give){
	#echo $give;
	if(in_array($give,$_c_id_m)){
		foreach ($load_mods as $give_me_out){
			$give_me_out = explode(",",$give_me_out);
			if($give_me_out[0] == $give){
				if($give_me_out[4] == '1'){
					if($_GET[LOAD_GET_PAGE] == USER_CMS_PAGE && isset($_GET[USER_GET_PAGE])){
						$construct_title = $secondary_l;
					}else{
						$construct_title = $give_me_out[3];
					}
				
					echo '<div class="tmp_m_content"> 
					 <div  class="tmp_right_title">'.htmlspecialchars(str_replace($modules_text_tile,$modules_text_translate,$give_me_out[3])).'</div>
					<div class="tmp_page_content">';
					if($give_me_out[1] == '1'){
						if(is_file("pages_modules/".$give_me_out[2]."")){
							include('pages_modules/'.$give_me_out[2].'');
						}else{
							echo 'Unable to load module file, reason: not found.';
						}
					}elseif ($give_me_out[1] == '0'){
						if(is_file('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms')){
							include('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms');
						}else{
							echo 'Unable to load module content, reason: not found.';
						}
					}
					echo '</div> </div>';
				}
			}
		}
	}
}
}
?>
			</div>
			<div id="right-sidebar">
				<div class="block top5level">
					<h3 class="block-title"><span>RANKINGS</span></h3>
					<div class="rankings-2">
			
					<table width="160" align="center">
                                <tr>
                                  <td><div align="center">N.</div></td>
                                  <td><div align="center">Name</div></td>
                                  <td><div align="center">Level</div></td>
                                </tr>
                                <tr>
                                  <?
$query=mssql_query("select TOP 5 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
                                  <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center">
                                      <?=++$count1;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$namez;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$levelz;?>
                                  </div></td>
                                </tr>
                                <?

}
?>
                            </table>
					</div>
				</div>                
                <div class="block top5recet">
					<h3 class="block-title"><span>RANKINGS</span></h3>
					<div class="rankings-2">

<table width="160" align="center">
                                <tr>
                                  <td><div align="center">N.</div></td>
                                  <td><div align="center">Name</div></td>
                                  <td><div align="center">Reset</div></td>
                                </tr>
                                <tr>
                                  <?
$query=mssql_query("select TOP 5 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
                                  <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center">
                                      <?=++$count1;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$namez;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$resetsz;?>
                                  </div></td>
                                </tr>
                                <?

}
?>
                            </table>

					</div>
				</div>
                
                <div class="block top5killers">
					<h3 class="block-title"><span>RANKINGS</span></h3>
				  <div class="rankings-2"> 
<table width="160" align="center">
                                <tr>
                                  <td><div align="center">N.</div></td>
                                  <td><div align="center">Name</div></td>
                                  <td><div align="center">Kills</div></td>
                                </tr>
                                <tr>
                                  <?
$query=mssql_query("select TOP 5 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by PkCount desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$killedsz=$row['PkCount'];

?>
                                  <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center">
                                      <?=++$count1;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$namez;?>
                                  </div></td>
                                  <td><div align="center" class="Estilo36">
                                      <?=$killedsz;?>
                                  </div></td>
                                </tr>
                                <?

}
?>
                          </table></div></div>
                
                <div class="block top5guild">
					<h3 class="block-title"><span>RANKINGS</span></h3>
				  <div class="rankings-2">
<table width="160" align="center">
                                  <tr>
                                    <td><div align="center">N.</div></td>
                                    <td><div align="center">Name</div></td>
                                    <td><div align="center">Score</div></td>
                                    <td><div align="center">Logo</div></td>
                                  </tr>
                                  <tr>
                                    <?
$Guild=mssql_query("select TOP 5 * from MuOnline.dbo.guild order by G_Score desc");
while($row=mssql_fetch_assoc($Guild)){
$G_Namez=$row['G_Name'];
$G_Markz=$row['G_Mark'];
$G_Scorez=$row['G_Score'];
$Resetsz=$row['Resets'];
$logo=urlencode(bin2hex($G_Markz));
?>
                                    <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center">
                                      <?=++$count1;?>
                                    </div></td>
                                    <td><div align="center" class="Estilo36">
                                      <?=$G_Namez;?>
                                    </div></td>
                                    <td><div align="center" class="Estilo36">
                                      <?=$G_Scorez;?>
                                    </div></td>
                                    <td><div align="center"><img src="get.php?aL=<?=$logo;?>.png" alt="" width="20" height="20"></div></td>
                                  </tr>
                                  <?

}
?>
                              </table>
	</div>
				</div>
			</div>
			<div class="clearfloat"></div>

<!-- ---------------------------- -->
<!-- ---------- Footer ---------- -->
<!-- ---------------------------- -->

			<div id="footer">
  				<div class="copyright">
					<p><?=build_footer(),$XX= base64_decode('PGRpdiBjbGFzcz0iZm9vdGVyX2ZvbnQiIGFsaWduPSJjZW50ZXIiPlRlbXBsYXRlIGJ5IERyZWFkICYgRGVzaWduIGJ5IEFncmVzc2lvbjwvZGl2Pg==');?></p>					
			 	</div>
			</div>
        </div>
  </div>

<!-- ---------------------------- -->
<!-- Seleccion de Lenguaje MuCore -->
<!-- ---------------------------- -->

  <div class="language_select">
             <?
             if($core['language_switch'] == '1'){
             foreach ($languages as $language_id =>  $language_data){
             echo '&nbsp;<img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'">  <a  href="'.ROOT_INDEX.'?change_language='.$language_id.'">'.$language_data[0].'</a>';
                        }
                    }
                    ?>
  </div>


</div>
<script type="text/javascript" src="scripts/iepngfix_tilebg.js"></script>
<script type="text/javascript" src="scripts/roster.js"></script>
</body>
</html>
</body>
</html>
