<?
mssql_connect($core['db_host'],$core['db_user'],$core['db_password']);
mssql_select_db($core['db_name']);
?>
<?php
require_once("config/config.php");
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>

<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/lf.js"></script>

<style type="text/css">


*{

font-family: "Arial";



}




.node-unpublished{background-color:#fff4f4;}.preview .node{background-color:#ffffea;}#node-admin-filter ul{list-style-type:none;padding:0;margin:0;width:100%;}#node-admin-buttons{float:left;margin-left:0.5em;clear:right;}td.revision-current{background:#ffc;}.node-form .form-text{display:block;width:95%;}.node-form .container-inline .form-text{display:inline;width:auto;}.node-form .standard{clear:both;}.node-form textarea{display:block;width:95%;}.node-form .attachments fieldset{float:none;display:block;}.terms-inline{display:inline;}


.poll .bar{height:1em;margin:1px 0;background-color:#ddd;}.poll .bar .foreground{background-color:#000;height:1em;float:left;}.poll .links{text-align:center;}.poll .percent{text-align:right;}.poll .total{text-align:center;}.poll .vote-form{text-align:center;}.poll .vote-form .choices{text-align:left;margin:0 auto;display:table;}.poll .vote-form .choices .title{font-weight:bold;}.node-form #edit-poll-more{margin:0;}td.poll-chtext{width:80%;}td.poll-chvotes .form-text{width:85%;}


#permissions td.module{font-weight:bold;}#permissions td.permission{padding-left:1.5em;}#access-rules .access-type,#access-rules .rule-type{margin-right:1em;float:left;}#access-rules .access-type .form-item,#access-rules .rule-type .form-item{margin-top:0;}#access-rules .mask{clear:both;}#user-login-form{text-align:center;}#user-admin-filter ul{list-style-type:none;padding:0;margin:0;width:100%;}#user-admin-buttons{float:left;margin-left:0.5em;clear:right;}#user-admin-settings fieldset .description{font-size:0.85em;padding-bottom:.5em;}.profile{clear:both;margin:1em 0;}.profile .picture{float:right;margin:0 1em 1em 0;}.profile h3{border-bottom:1px solid #ccc;}.profile dl{margin:0 0 1.5em 0;}.profile dt{margin:0 0 0.2em 0;font-weight:bold;}.profile dd{margin:0 0 1em 0;}



.field .field-label,.field .field-label-inline,.field .field-label-inline-first{font-weight:bold;}.field .field-label-inline,.field .field-label-inline-first{display:inline;}.field .field-label-inline{visibility:hidden;}.node-form .content-multiple-table td.content-multiple-drag{width:30px;padding-right:0;}.node-form .content-multiple-table td.content-multiple-drag a.tabledrag-handle{padding-right:.5em;}.node-form .content-add-more .form-submit{margin:0;}.node-form .number{display:inline;width:auto;}.node-form .text{width:auto;}.form-item #autocomplete .reference-autocomplete{white-space:normal;}.form-item #autocomplete .reference-autocomplete label{display:inline;font-weight:normal;}#content-field-overview-form .advanced-help-link,#content-display-overview-form .advanced-help-link{margin:4px 4px 0 0;}#content-field-overview-form .label-group,#content-display-overview-form .label-group,#content-copy-export-form .label-group{font-weight:bold;}table#content-field-overview .label-add-new-field,table#content-field-overview .label-add-existing-field,table#content-field-overview .label-add-new-group{float:left;}table#content-field-overview tr.content-add-new .tabledrag-changed{display:none;}table#content-field-overview tr.content-add-new .description{margin-bottom:0;}table#content-field-overview .content-new{font-weight:bold;padding-bottom:.5em;}.advanced-help-topic h3,.advanced-help-topic h4,.advanced-help-topic h5,.advanced-help-topic h6{margin:1em 0 .5em 0;}.advanced-help-topic dd{margin-bottom:.5em;}.advanced-help-topic span.code{background-color:#EDF1F3;font-family:"Bitstream Vera Sans Mono",Monaco,"Lucida Console",monospace;font-size:0.9em;padding:1px;}.advanced-help-topic .content-border{border:1px solid #AAA}

.ctools-locked{color:red;border:1px solid red;padding:1em;}.ctools-owns-lock{background:#FFFFDD none repeat scroll 0 0;border:1px solid #F0C020;padding:1em;}a.ctools-ajaxing,input.ctools-ajaxing,select.ctools-ajaxing{padding-right:18px !important;background:url(/sites/all/modules/contrib/ctools/template/<?=$core['config']['template'] ?>/images/status-active.gif) right center no-repeat;}div.ctools-ajaxing{float:left;width:18px;background:url(/sites/all/modules/contrib/ctools/template/<?=$core['config']['template'] ?>/images/status-active.gif) center center no-repeat;}

.container-inline-date{width:auto;clear:both;display:inline-block;vertical-align:top;margin-right:0.5em;}.container-inline-date .form-item{float:none;padding:0;margin:0;}.container-inline-date .form-item .form-item{float:left;}.container-inline-date .form-item,.container-inline-date .form-item input{width:auto;}.container-inline-date .description{clear:both;}.container-inline-date .form-item input,.container-inline-date .form-item select,.container-inline-date .form-item option{margin-right:5px;}.container-inline-date .date-spacer{margin-left:-5px;}.views-right-60 .container-inline-date div{padding:0;margin:0;}.container-inline-date .date-timezone .form-item{float:none;width:auto;clear:both;}#calendar_div,#calendar_div td,#calendar_div th{margin:0;padding:0;}#calendar_div,.calendar_control,.calendar_links,.calendar_header,.calendar{width:185px;border-collapse:separate;margin:0;}.calendar td{padding:0;}span.date-display-single{}span.date-display-start{}span.date-display-end{}span.date-display-separator{}.date-repeat-input{float:left;width:auto;margin-right:5px;}.date-repeat-input select{min-width:7em;}.date-repeat fieldset{clear:both;float:none;}.date-views-filter-wrapper{min-width:250px;}.date-views-filter input{float:left !important;margin-right:2px !important;padding:0 !important;width:12em;min-width:12em;}.date-nav{width:100%;}.date-nav div.date-prev{text-align:left;width:24%;float:left;}.date-nav div.date-next{text-align:right;width:24%;float:right;}.date-nav div.date-heading{text-align:center;width:50%;float:left;}.date-nav div.date-heading h3{margin:0;padding:0;}.date-clear{float:none;clear:both;display:block;}.date-clear-block{float:none;width:auto;clear:both;}.date-clear-block:after{content:" ";display:block;height:0;clear:both;visibility:hidden;}.date-clear-block{display:inline-block;}/*_\*/ 	 
 * html .date-clear-block{height:1%;}.date-clear-block{display:block;}/* End hide from IE-mac */

.date-container .date-format-delete{margin-top:1.8em;margin-left:1.5em;float:left;}.date-container .date-format-name{float:left;}.date-container .date-format-type{float:left;padding-left:10px;}.date-container .select-container{clear:left;float:left;}div.date-calendar-day{line-height:1;width:40px;float:left;margin:6px 10px 0 0;background:#F3F3F3;border-top:1px solid #eee;border-left:1px solid #eee;border-right:1px solid #bbb;border-bottom:1px solid #bbb;color:#999;text-align:center;font-family:Georgia,Arial,Verdana,sans;}div.date-calendar-day span{display:block;text-align:center;}div.date-calendar-day span.month{font-size:.9em;background-color:#B5BEBE;color:white;padding:2px;text-transform:uppercase;}div.date-calendar-day span.day{font-weight:bold;font-size:2em;}div.date-calendar-day span.year{font-size:.9em;padding:2px;}







.filefield-icon{float:left;margin-right:0.4em;}.filefield-element{margin:1em 0;white-space:normal;}.filefield-element .widget-preview{float:left;padding-right:10px;border-right:1px solid #CCC;margin-right:10px;max-width:30%;}.filefield-element .widget-edit{float:left;max-width:70%;}.filefield-element .filefield-preview{width:16em;overflow:hidden;}.filefield-element .widget-edit .form-item{margin:0 0 1em 0;}.filefield-element input.form-submit,.filefield-element input.form-file{margin:0;}.filefield-element input.progress-disabled{float:none;display:inline;}.filefield-element div.ahah-progress,.filefield-element div.throbber{display:inline;float:none;padding:1px 13px 2px 3px;}.filefield-element div.ahah-progress-bar{display:none;margin-top:4px;width:28em;padding:0;}.filefield-element div.ahah-progress-bar div.bar{margin:0;}.filefield-generic-edit .filefield-icon{float:left;margin-right:0.7em;margin-top:0.3em;}.filefield-generic-edit-description{margin-right:6em;}.filefield-generic-edit .form-text{width:99%;}.filefield-generic-edit .description{white-space:normal;margin-bottom:0;overflow:auto;}
.menu-890,ul.links li.menu-890{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_890.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-891,ul.links li.menu-891{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_891.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-892,ul.links li.menu-892{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_892.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1254,ul.links li.menu-1254{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1254.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1255,ul.links li.menu-1255{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1255.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1256,ul.links li.menu-1256{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1256.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1257,ul.links li.menu-1257{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1257.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1258,ul.links li.menu-1258{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1258.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1259,ul.links li.menu-1259{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1259.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1260,ul.links li.menu-1260{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1260.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1261,ul.links li.menu-1261{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1261.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1262,ul.links li.menu-1262{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1262.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1263,ul.links li.menu-1263{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1263.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1383,ul.links li.menu-1383{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1383.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1384,ul.links li.menu-1384{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1384.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1387,ul.links li.menu-1387{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1387.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1388,ul.links li.menu-1388{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1388.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1389,ul.links li.menu-1389{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1389.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1390,ul.links li.menu-1390{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1390.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1391,ul.links li.menu-1391{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1391.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1392,ul.links li.menu-1392{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1392.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1393,ul.links li.menu-1393{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1393.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1394,ul.links li.menu-1394{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1394.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1395,ul.links li.menu-1395{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1395.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1396,ul.links li.menu-1396{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1396.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1397,ul.links li.menu-1397{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1397.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1398,ul.links li.menu-1398{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1398.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1399,ul.links li.menu-1399{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1399.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1400,ul.links li.menu-1400{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1400.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1401,ul.links li.menu-1401{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1401.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1402,ul.links li.menu-1402{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1402.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1403,ul.links li.menu-1403{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1403.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1404,ul.links li.menu-1404{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1404.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-1405,ul.links li.menu-1405{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1405.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1406,ul.links li.menu-1406{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1406.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1407,ul.links li.menu-1407{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1407.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1408,ul.links li.menu-1408{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1408.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1409,ul.links li.menu-1409{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1409.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1410,ul.links li.menu-1410{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1410.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1411,ul.links li.menu-1411{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1411.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1412,ul.links li.menu-1412{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1412.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1413,ul.links li.menu-1413{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1413.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1414,ul.links li.menu-1414{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1414.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1415,ul.links li.menu-1415{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1415.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1417,ul.links li.menu-1417{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1417.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1418,ul.links li.menu-1418{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1418.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1420,ul.links li.menu-1420{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1420.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1421,ul.links li.menu-1421{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1421.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1422,ul.links li.menu-1422{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1422.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1423,ul.links li.menu-1423{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1423.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1424,ul.links li.menu-1424{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1424.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1425,ul.links li.menu-1425{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1425.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1426,ul.links li.menu-1426{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1426.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1651,ul.links li.menu-1651{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1651.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-1847,ul.links li.menu-1847{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1847.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1848,ul.links li.menu-1848{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1848.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1849,ul.links li.menu-1849{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1849.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1850,ul.links li.menu-1850{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1850.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1851,ul.links li.menu-1851{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1851.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1852,ul.links li.menu-1852{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1852.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-1902,ul.links li.menu-1902{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1263.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2617,ul.links li.menu-2617{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_2617.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-2618,ul.links li.menu-2618{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_2618.png);padding-left:302px;background-repeat:no-repeat;background-position:left;height:302px;}.menu-2657,ul.links li.menu-2657{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1420.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2659,ul.links li.menu-2659{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1421.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2660,ul.links li.menu-2660{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1407.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2661,ul.links li.menu-2661{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1261.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2662,ul.links li.menu-2662{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1263.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2663,ul.links li.menu-2663{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1258.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2664,ul.links li.menu-2664{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1262.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-2671,ul.links li.menu-2671{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1393.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-2672,ul.links li.menu-2672{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1402.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-2673,ul.links li.menu-2673{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1255.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-2674,ul.links li.menu-2674{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_892.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-2675,ul.links li.menu-2675{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1254.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-2676,ul.links li.menu-2676{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1392.png);padding-left:64px;background-repeat:no-repeat;background-position:left;height:64px;}.menu-4235,ul.links li.menu-4235{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1651.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-4237,ul.links li.menu-4237{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1651.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-4238,ul.links li.menu-4238{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1651.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}.menu-4239,ul.links li.menu-4239{background-image:url(template/<?=$core['config']['template'] ?>/images/menu_icon_1651.png);padding-left:32px;background-repeat:no-repeat;background-position:left;height:32px;}



.wrapper.tagadelic{text-align:justify;margin-right:1em;}#region_sidebar .tagadelic.level1{font-size:1em;}#region_sidebar .tagadelic.level2{font-size:1.2em;}#region_sidebar .tagadelic.level3{font-size:1.4em;}#region_sidebar .tagadelic.level4{font-size:1.6em;}#region_sidebar .tagadelic.level5{font-size:1.8em;}#region_sidebar .tagadelic.level6{font-size:2em;}#region_sidebar .tagadelic.level7{font-size:2.2em;}#region_sidebar .tagadelic.level8{font-size:2.4em;}#region_sidebar .tagadelic.level9{font-size:2.6em;}#region_sidebar .tagadelic.level10{font-size:2.8em;}

body.pvpnetbar,body.pvpnetbar.admin-menu{}#lol-pvpnet{top:0px;left:0px;width:100%;font-family:Arial,Helvetica,Verdana,"Bitstream Vera Sans",sans-serif;font-size:10px;color:#ffc600;z-index:100;text-align:center;}#lol-pvpnet a,#lol-pvpnet a:link,#lol-pvpnet a:visited{color:#ffc600;}#lol-pvpnet a:hover,#lol-pvpnet a:active{color:white;}#lol-pvpnet-bar{height:31px;border-bottom:1px solid rgb(43,43,43);background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) repeat-x 0px -66px rgb(22,22,22);background:rgba(22,22,22,1) none;-webkit-box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.2);-moz-box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.2);box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.2);}#lol-pvpnet-bar-inner{width:1000px;margin:0 auto;position:relative;}#lol-pvpnet-bar-logo{height:24px;width:162px;margin:0 10px 0 0;float:left;}#lol-pvpnet-bar-logo a{background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) 0px 0px no-repeat transparent;height:24px;width:162px;display:block;text-indent:-9999px;overflow:none;margin-top:3px;}#lol-pvpnet-bar .separator-text{padding:0 10px;}#lol-pvpnet-bar .lol-pvpnet-bar-support-link{float:right;}#lol-pvpnet-bar .lol-pvpnet-bar-account{float:right;}#lol-pvpnet-bar .lol-pvpnet-bar-account a,#lol-pvpnet-bar .lol-pvpnet-bar-support-link a{color:#ffc600;background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) 0px -110px repeat-x;padding:0 10px;line-height:31px;height:31px;text-transform:uppercase;display:block;display:inline-block;text-decoration:none;border-left:1px solid rgb(43,43,43);border-right:1px solid rgb(35,35,35);border-right:1px solid rgba(35,35,35,.7);background:rgba(32,32,32,1) none;-webkit-box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.3);-moz-box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.3);box-shadow:inset 0px 40px 20px -25px rgba(100,100,100,0.3);}#lol-pvpnet-bar .lol-pvpnet-bar-account a:hover,#lol-pvpnet-bar .lol-pvpnet-bar-support-link a:hover{background-position:0px -162px;color:#fff;text-decoration:none;background:rgba(32,32,32,1) none;-webkit-box-shadow:inset 0px 40px 25px -25px rgba(100,100,100,0.5);-moz-box-shadow:inset 0px 40px 25px -25px rgba(100,100,100,0.5);box-shadow:inset 0px 40px 25px -25px rgba(100,100,100,0.5);}#lol-pvpnet-bar-activator{float:left;height:31px;text-align:left;padding:0px 5px;padding-right:25px;padding:0px;text-transform:capitalize;margin-right:-200px;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-o-user-select:none;user-select:none;}#lol-pvpnet-bar-activator .lol-pvpnet-bar-selected{cursor:pointer;line-height:31px;height:31px;padding:0 10px;float:left;}#lol-pvpnet-bar-activator .activator-region{text-transform:uppercase;color:#ffc600;}#lol-pvpnet-bar-activator:hover{color:#fff;text-decoration:none;background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) 0px -110px repeat-x transparent;}#lol-pvpnet-bar-activator .activator-button{float:left;height:31px;width:34px;background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) 0px -110px repeat-x transparent;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-o-user-select:none;user-select:none;}#lol-pvpnet-bar-activator .activator-button span{background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) no-repeat scroll -198px 0px transparent;display:block;height:31px;width:34px;}#lol-pvpnet.pvpnet-open #lol-pvpnet-bar-activator .activator-button span{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);-o-transform:rotate(180deg);}#lol-pvpnet-bar-activator:hover .activator-button,#lol-pvpnet-bar-activator .activator-button:hover{background-position:0 -148px;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-o-user-select:none;user-select:none;}#lol-pvpnet-bar-activator ul{font-weight:bold;border-left:1px solid #444444;border-right:1px solid #444444;border-bottom:1px solid #444444;color:#ffc600;position:absolute;top:32px;left:0;right:0;list-style:none;margin:0;padding:0;display:none;z-index:100;}#lol-pvpnet-bar-activator ul li a{color:#ffc600 !important;padding:6px 15px;display:block;border-bottom:1px solid #333333;background:transparent url(/sites/all/modules/riot/lol_pvpnet_bar/img/overlay.png) repeat 0 0;background:rgba(0,0,0,0.75) none;}#lol-pvpnet-bar-activator ul li a:hover{background:rgba(0,0,0,0.9) none;text-decoration:none;color:white !important;}#lol-pvpnet-bar-activator ul li .active{color:#ffc600 !important;}#lol-pvpnet-bar #lol-pvpnet-bar-region-selector{height:31px;left:380px;line-height:31px;padding:2px 25px 2px 5px;position:absolute;text-align:left;top:-2px;}#lol-pvpnet-bar .lol-pvpnet-bar-region{margin-left:20px;color:#585858;text-transform:uppercase;}#lol-pvpnet-bar .lol-pvpnet-bar-region a{color:#585858;}#lol-pvpnet-bar .lol-pvpnet-bar-region a:hover{color:#585858;text-decoration:none;}#lol-pvpnet #lol-pvpnet-dropdown{position:absolute;top:32px;left:0px;background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) repeat-x scroll 0px -186px rgb(23,23,23);z-index:81;width:100%;text-align:left;-webkit-box-shadow:0 5px 15px -2px rgba(0,0,0,0.7) inset;-moz-box-shadow:0 5px 15px -2px rgba(0,0,0,0.7) inset;box-shadow:0 5px 15px -2px rgba(0,0,0,0.7) inset;display:none;}#lol-pvpnet-dropdown-inner{width:1000px;margin:0 auto;position:relative;padding:10px 0 15px;min-height:155px;}#lol-pvpnet .lol-pvpnet-dropdown-bg{background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) no-repeat scroll 0px -480px transparent;height:155px;width:385px;position:absolute;right:0px;}#lol-pvpnet #lol-pvpnet-selection-list,#lol-pvpnet #lol-pvpnet-selection-list ul,#lol-pvpnet #lol-pvpnet-selection-list li{list-style:none;margin:0px;padding:0px;}#lol-pvpnet #lol-pvpnet-selection-list li.region{width:180px;margin-right:30px;float:left;}#lol-pvpnet #lol-pvpnet-selection-list li.region .region-name{display:table-cell;background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) no-repeat scroll 0px -23px transparent;font-size:14px;height:40px;line-height:16px;margin-bottom:5px;min-height:40px;padding-left:40px;text-align:left;vertical-align:middle;}#lol-pvpnet #lol-pvpnet-selection-list li.region ul{background:rgb(38,38,38);padding:5px 0;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}#lol-pvpnet #lol-pvpnet-selection-list li.language a{display:block;padding-left:40px;height:20px;line-height:20px;text-transform:uppercase;text-align:left;}#lol-pvpnet #lol-pvpnet-selection-list li.selected-language a,#lol-pvpnet #lol-pvpnet-selection-list li.selected-language a:hover{background:url(template/<?=$core['config']['template'] ?>/images/pvpnet-sprite.png) no-repeat scroll -198px -34px transparent;color:#888888;}#lol-pvpnet #lol-pvpnet-selection-list li.language a:hover{background-color:rgb(52,52,52);color:#FFF;}#lol-pvpnet .clearall{clear:both;}#lol-pvpnet-bar-login{height:32px;float:right;margin-right:10px;}#lol-pvpnet-bar-account{float:right;margin-right:15px;line-height:30px;text-align:left;font-size:11px;}#pvp-login-username,#pvp-login-password{float:left;width:90px;padding:1px 3px;margin:5px;border:1px solid #363636;background:#000;color:#BBB;}#pvp-login-password{width:90px;}#lol-pvpnet-bar-login label{float:left;height:22px;padding:5px 0px 5px 5px;line-height:22px;text-transform:uppercase;}#lol-pvpnet-bar-login input.login_button{float:left;height:22px;color:#fff;border:none;margin:4px 0 0 0;padding:5px;font-size:10px;background:#0078E1;text-transform:uppercase;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;-moz-box-shadow:inset 2px 4px 10px 0px rgba(255,255,255,0.4),inset -2px -4px 10px 0px rgba(0,0,0,0.4);-webkit-box-shadow:inset 2px 4px 10px 0px rgba(255,255,255,0.4),inset -2px -4px 10px 0px rgba(0,0,0,0.4);box-shadow:inset 2px 4px 10px 0px rgba(255,255,255,0.4),inset -2px -4px 10px 0px rgba(0,0,0,0.4);}#lol-pvpnet-bar-login input.login_button:hover{background-color:#ffc600;}
#ladders-summary-page{height:480px;width:945px;margin:0 auto;background:url(/sites/all/themes/community_v2/img/layout/ladder_sum_bg.jpg) 0 0 no-repeat;position:relative;left:-4px;}#ladders-summary-page.ladder-archive{height:330px;}.ladder_top_players-header{height:75px;padding:0 0 0 10px;}#ladder_summary,#ladder_fastest_movers{padding:0 5px;width:427px;}table.ladder-archive-summary{position:absolute;left:325px;top:15px;width:220px;}table.ladder-archive-summary td{padding:5px 5px;font-size:11px;margin:0px;}table.ladder-archive-summary td.td-label{text-align:right;}table.ladder-archive-summary td.td-value{text-align:left;font-weight:bold;}.ladder-archive-summary td,.ladder-archive-summary th{}.ladder-archive-summary td{text-align:right;}.ladder-selector{position:absolute;right:35px;top:25px;width:250px;}.ladder-selector a.button-switch-ladder{display:block;text-align:right;height:13px;line-height:13px;padding-right:30px;background:url(/sites/all/themes/community_v2/img/icons/archived_ladders.png) 100% 0 no-repeat;border:none;font-weight:bold;font-size:14px;font-family:"ITC Friz Quadrata",Times;}.ladder-selector a.button-switch-ladder:hover{background-position:100% -13px;}#region_content #ladders-summary-page h2{margin:0 0 0 0;padding:10px 0 0 0;line-height:36px;height:36px;background:none;font-family:"ITC Friz Quadrata",Times;}.ladder-archived-subtitle{font-family:"ITC Friz Quadrata",Times;font-size:14px;}#ladder_summary{position:absolute;top:326px;left:25px;}#ladder_summary tr{height:34px;}#ladder_summary td{text-align:right;}#ladder_fastest_movers{position:absolute;top:326px;right:25px;}#ladder_top_players{position:absolute;top:10px;left:25px;right:25px;}#ladders-summary-page #ladder_top_players .ladder_top_players-top5{padding:0 0px;}#region_content #ladder_top_players .ladder_top_players-top5 h3{height:65px;margin:0px;}#region_content #ladder_top_players .ladder_top_players-top5 h3 a{float:none;display:block;color:white;font-size:18px;font-family:'ITC Friz Quadrata',Verdana,Arial;text-align:center;height:24px;line-height:24px;padding-top:36px;}#region_content #ladder_top_players .ladder_top_players-top5 h3 a:hover{background:rgba(255,255,255,0.1);}#region_content #ladder_top_players .ladder_top_players-top5{width:298px;float:left;}#ladder_top_players .ladder_top_players-top5 table tr{height:33px;}#ladder_top_players table td{white-space:nowrap;}.ladder-field-rank{padding:3px 5px;width:40px;text-align:center;font-weight:bold;}#ladders-summary-page .ladder-field-rank{width:20px;padding:0;padding-top:3px;}td.ladder-field-rating{text-align:center;width:80px;font-weight:bold;}#ladders-summary-page td.ladder-field-rating{text-align:right;padding-right:5px;}#ladder_top_players table td.ladder-field-rank{padding-left:6px;}#ladder_fastest_movers table td.ladder-field-rank{padding-left:2px;}.ladder-field-player{text-align:left;padding-left:10px;}td.ladder-field-player{font-weight:bold;line-height:31px;}td.ladder-field-player img{float:left;height:24px;width:24px;margin-right:6px;margin-top:3px;}#ladder_top_players td.ladder-field-player img{margin-top:5px;}.delta_positive{color:green;}.delta_negative{color:red;}td.ladder-field-wins{width:80px;text-align:center;color:green;font-weight:bold;}td.ladder-field-losses{width:80px;color:red;text-align:center;font-weight:bold;}#ladder_summary th span{font-size:10px;color:#333;}.ladder-table{border:1px solid #be8620;border-top:0;border-bottom:0;}.ladder-table tbody tr{height:33px;border-top:0;}.ladder-table tbody td{background:url(template/<?=$core['config']['template'] ?>/images/alt_row_bg.jpg) 0 0 repeat-x;}.ladder-table tbody tr.alt td{background-position:0 -33px;}.ladder-table tbody tr:hover td,.ladder-table tbody tr.highlight td{background-position:0 -66px;}.ladder-tab-header > .item-list{height:22px;position:relative;padding:0 6px;padding-top:6px;border-top:none;}.ladder-filter-form{width:340px;position:absolute;top:0;right:0;}#edit-player-wrapper input{position:absolute;height:20px;top:0;right:30px;}#edit-submit{cursor:pointer;position:absolute;top:0;right:0;}.ladder-header{position:relative;}#block-ladders-0{width:592px;}#region_content #block-ladders-0 .content hr{background:url(template/<?=$core['config']['template'] ?>/images/runes.png) top left no-repeat;width:594px;height:14px;border:none;margin-top:10px;margin-bottom:10px;}#block-ladders-0 .ladders-tab{display:none;}#block-ladders-0 .ladders-tab.ladders-tab-active{display:block;}#ladder_list{list-style:none;height:133px;padding:0;margin-left:50px;}#ladder_list li{float:left;padding:0 40px;}#ladder_list li a{display:block;height:32px;width:186px;line-height:32px;padding:3px;padding-top:98px;text-align:center;color:white;font-family:'ITC Friz Quadrata',Verdana,serif;font-size:16px;background:url(/sites/all/themes/community_v2/img/ladders_large_button.png) -192px 0 no-repeat;}#ladder_list li a:hover{background-position:-192px -133px;}#ladder_list li:first-child a{background-position:0 0;}#ladder_list li:first-child a:hover{background-position:0 -133px;}#ladder_list li:last-child a{background-position:-384px 0;}#ladder_list li:last-child a:hover{background-position:-384px -133px;}#block-ladders-0 .ladders-block-footer{font-weight:bold;position:relative;top:-2px;height:31px;line-height:31px;text-align:center;background:url(template/<?=$core['config']['template'] ?>/images/table_footer.jpg) bottom center no-repeat;}
#block-views-front_promos-block_1 .promo_controls{position:absolute;top:20px;left:19px;width:72px;text-align:center;}#block-views-front_promos-block_1 .promo_slide_previews{height:207px;overflow:hidden;margin:8px 0;position:relative;}#block-views-front_promos-block_1 .promo_slide_previews ul{padding:0;margin:0;list-style:none;position:absolute;top:0;}#block-views-front_promos-block_1 .promo_slide_previews a{display:block;border:1px solid #39383b;height:48px;width:70px;}#block-views-front_promos-block_1 .promo_slide_previews a.active{border-color:#ffc600;}#block-views-front_promos-block_1 .promo_slide_previews a:hover{border-color:white;}#block-views-front_promos-block_1 .promo_slide_previews li{margin:1px 0;}#block-views-front_promos-block_1 .promo_controls .prev_button{display:block;height:9px;width:35px;background:url(template/<?=$core['config']['template'] ?>/images/arrows.png) 0 -9px;margin:0 auto;}#block-views-front_promos-block_1 .promo_controls .prev_button:hover{background-position:-35px 0;}#block-views-front_promos-block_1 .promo_controls .next_button{display:block;height:9px;width:35px;background:url(template/<?=$core['config']['template'] ?>/images/arrows.png) -35px -9px;margin:0 auto;}#block-views-front_promos-block_1 .promo_controls .next_button:hover{background-position:0 0;}#block-views-front_promos-block_1 .views-row{position:absolute;top:8px;left:8px;display:none;}#block-views-front_promos-block_1 .views-row-first{display:block;}#block-views-front_promos-block_1 .views-field-title{position:absolute;top:172px;left:0px;right:0px;height:78px;padding-top:18px;background:url(template/<?=$core['config']['template'] ?>/images/text_overlay.png) 0 0 no-repeat;padding-left:96px;padding-right:20px;color:white;font-size:24px;text-align:left;}#block-views-front_promos-block_1 .views-field-field-promo-text-value{position:absolute;top:220px;left:0px;right:0px;padding-left:96px;padding-right:20px;color:white;font-size:12px;text-align:left;}#block-views-front_promos-block_1 .views-field-field-image-fid-1{display:none;}
.views-row .body_hidden .article_body{display:none;}.views-row .body_hidden .article_detail{bottom:auto;left:auto;right:14px;top:12px;}.views-row .body_hidden .article_title .title,.views-row .body_hidden .article_title > a{width:290px;top:10px;font-size:14px;right:auto;}.views-row .body_hidden .article_title{background:url(template/<?=$core['config']['template'] ?>/images/alt_row_bg.jpg) 0 0 no-repeat;height:32px;padding:0 12px;cursor:pointer;}#block-views-news-block_1 .body_hidden h3:hover,.views-row .body_hidden h3:hover{background-position:0px -33px;}
@font-face{font-family:"ITC Friz Quadrata";src:url(/sites/all/themes/community_v2/fonts/friz.ttf) format("truetype");}body,html{margin:0;padding:0;}body{font-family:Arial,Helvetica,sans-serif;text-align:center;color:black;font-size:12px;}#footer_badges img{padding:2px;}#footer{width:750px;margin:0 auto;margin-top:20px;color:#666;font-size:10px;}#footer a,#footer a:visited{color:#ffc600;}#footer p{margin-top:2px;margin-bottom:2px;}#copyright_info{margin:0 100px;}#f2phold{width:1080px;height:320px;margin:-182px auto 0;}#f2p{background:url(/sites/all/themes/community_v2/img/layout/playforfree.png) top right no-repeat;width:503px;height:348px;position:relative;margin:0;z-index:0;top:0;left:643px;}#f2p a:hover{background:url(/sites/all/themes/community_v2/img/layout/playforfree.png) no-repeat;background-position:-10px -566px;}a,a:active,a:visited,a:hover{color:#043a5c;text-decoration:none;}a,a img{border:none;outline:none;}.breadcrumb{color:#ffc600;font-size:14px;font-weight:bold;text-align:left;background:url(/sites/all/themes/community_v2/img/layout/shield.png) 0 0 no-repeat;padding-left:25px;margin-left:5px;margin-top:10px;line-height:19px;}#layout_1_content{position:relative;width:1013px;margin:0 auto;overflow:hidden;background:url(template/<?=$core['config']['template'] ?>/images/left_tile.jpg) 0 0 repeat-y;}#layout_1_content #container_top{display:none;}#layout_1_content #container_bottom{display:none;}#layout_2_content{position:relative;width:1012px;margin:0 auto;overflow:hidden;background:url(/sites/all/themes/community_v2/img/layout/layout_2/content_tile.jpg) 0 0 repeat-y;min-height:300px;}#layout_2_content #container_top{display:none;}#layout_2_content #container_bottom{display:none;}#region_content{margin-top:10px;padding:0 36px;margin-bottom:35px;position:relative;text-align:left;}#layout_1_content #region_content{padding-right:15px;padding-left:32px;width:619px;float:left;}#layout_1_content #region_sidebar{margin-top:0px;margin-bottom:144px;width:310px;padding:10px 14px 25px 5px;text-align:center;float:right;background:none;position:relative;}#layout_1_content #region_sidebar_bottom{display:none;}.block{margin:0 auto;margin-bottom:12px;}#region_sidebar .block{width:294px;}#layout_1_content #region_content .block{width:605px;}#region_sidebar a{color:#ffc600;font-size:10px;}#region_sidebar.le a{font-size:11px;}#region_sidebar.le a:hover{color:#ffc600;}#region_sidebar li{line-height:30px;background:url(/sites/all/themes/community_v2/img/layout/list_style_2_bg.jpg) 0 -31px repeat-x;font-size:12px;text-align:left;padding-left:36px;position:relative;padding-top:2px;}#region_sidebar li li{line-height:30px;background:url(/sites/all/themes/community_v2/img/layout/list_style_2_bg.jpg) 0 -61px repeat-x;font-size:12px;text-align:left;padding-left:36px;position:relative;padding-top:2px;}#region_sidebar ul li.last{padding-top:0;height:33px;background-position:0 -62px;}#region_sidebar ul{list-style:none;margin:0;padding:0;}#region_sidebar .date{position:absolute;right:15px;color:#666;}#content_area{background:none;padding-bottom:50px;}#region_content #block-views-fpimage-block_1 h2{font-size:16px;background:url(template/<?=$core['config']['template'] ?>/images/h2_bg2.png) no-repeat 0px 0px;}#block-views-live_events_update-block_2{margin-top:-12px;}#le_forums{background:url(/sites/all/themes/community_v2/img/live_events/forums.png) top left no-repeat;height:68px;width:601px;margin-left:4px;}#le_forums:hover{background-position:0px -68px;}.le_article_top{height:55px;width:613px;position:relative;background:url(/sites/all/themes/community_v2/img/live_events/update_top.png) top left no-repeat;}.le_article_top h3{position:absolute;top:5px;left:42px;font-size:17px;font-family:Arial;color:#003967;font-weight:bold;}.le_article_timestamp{position:absolute;right:17px;top:22px;font-family:Arial;font-size:14px;color:white;font-weight:bold;}.le_article_posted_by{position:absolute;left:43px;top:40px;font-family:Arial;font-size:10px;color:#7a7976;}.le_article_top a{color:#b40000;font-family:Arial;font-style:italic;font-size:10px;}.le_article_top h3:hover{color:#ffc600;}.le_article_body{position:relative;background:url(/sites/all/themes/community_v2/img/live_events/update_body.png) top left repeat-y;padding-left:17px;padding-top:2px;width:610px;}.le_article_body_content{width:580px;line-height:18px;margin-top:12px;margin-bottom:12px;}#le_block_body_details{padding-left:10px;}#le_block_body_results{padding-top:10px;}#region_sidebar #le_block_body_results li{padding-bottom:5px;}#region_sidebar .le_block_body a{color:#003866;}.le_article_bottom{position:relative;height:52px;width:610px;background:url(/sites/all/themes/community_v2/img/live_events/update_bottom.png) bottom left no-repeat;margin-top:-22px;}.le_article_more{position:absolute;top:17px;right:5px;}.le_article_more:hover{background:url(/sites/all/themes/community_v2/img/live_events/piece.png) top left no-repeat;}.le_article_bottom a{font-family:Arial;font-weight:bold;font-size:12px;color:white;}#RayvControlContainer{height:310px;margin-bottom:15px;margin-left:30px;margin-top:5px;padding-bottom:15px;width:550px;}#stream_container_top{background:url(/sites/all/themes/community_v2/img/live_events/stream_container_top.png) top left no-repeat;width:607px;height:80px;padding-left:15px;margin-bottom:10px;}#stream_container_top:hover{background-position:0px -80px;}#le_older_news_top{background:url(/sites/all/themes/community_v2/img/live_events/older_news_top.png) top left no-repeat;width:607px;height:41px;padding-left:15px;margin-bottom:10px;}#le_older_news_body,#stream_container_body{background:url(/sites/all/themes/community_v2/img/live_events/older_news_body.png) top left repeat-y;width:607px;margin-top:-10px;padding-top:10px;}#le_older_news_body ul{margin-top:0px;padding-bottom:6px;}#le_older_news_body .views-row{list-style-type:disc;position:relative;margin-bottom:6px;color:#003866;font-family:Arial;font-weight:bold;}#le_older_news_body .views-row a{font-size:12px;color:#003866;}#le_older_news_body .views-row a:hover{color:#ffc600;}#le_older_news_body .views-field-created{position:absolute;right:30px;top:0px;font-size:10px;color:#6D6D6D;text-transform:uppercase;}#le_older_news_bottom,#stream_container_bottom{background:url(/sites/all/themes/community_v2/img/live_events/older_news_bottom.png) top left no-repeat;width:607px;height:14px;margin-top:-15px;}.le_block{margin-top:-4px;}.le_block h3,#region_content #le_older_news_top h2{margin:0px;padding:0px;padding-top:1px;font-size:17px;font-family:Arial;color:black;background:url(/sites/all/themes/community_v2/img/layout/block_header_hr.png) no-repeat bottom left;}#region_content #le_older_news_top h2{padding-top:6px;}.le_block h4{font-size:14px;font-weight:bold;font-family:Arial;color:#9B7A01;margin-top:5px;margin-bottom:5px;}#region_sidebar .le_block ul{list-style-type:disc;margin-left:45px;padding-bottom:15px;}#region_sidebar .le_block li{background:none;font-size:11px;font-family:Arial;padding:0px;line-height:14px;}.le_block_top,.le_block_body,.le_block_bottom{padding-left:13px;}.le_block_top{background:url(/sites/all/themes/community_v2/img/layout/block_top.png) no-repeat 0px 0px;width:327px;height:9px;}.le_block_body{background:url(/sites/all/themes/community_v2/img/layout/block_body.png) repeat-y 0px 0px;width:327px;}.le_block_bottom{background:url(/sites/all/themes/community_v2/img/layout/block_bottom.png) no-repeat 0px 0px;width:327px;height:9px;}.le_block_body .social_share{float:left;}#content_share #share_services{width:220px;height:155px;margin-top:13px;margin-left:30px;position:absolute;top:260px;}#share_services{position:static;}#digg,#stumble,#tweets{margin:auto;padding:10px;height:64px;}#reddit{margin-right:10px;padding-left:10px;}#header{height:160px;position:relative;width:1080px;margin:32px auto;background:url(/sites/all/themes/community_v2/img/layout/top_bar.png) 0px 0 no-repeat;z-index:10;}#header a,#header a:hover,#header a:visited,#header a:active{color:#ffc600;}#top_login{height:34px;line-height:34px;width:530px;position:absolute;top:11px;right:6px;text-align:center;padding:0 4px;font-size:10px;}#top_login .welcome_text{margin-left:12px;text-align:left;color:#E8BD34;float:left;}#top_login .account_link{float:right;text-align:right;}#top_login .label{color:#e8bd34;}#top_login input{line-height:20px;height:20px;width:118px;padding:2px 4px;color:#666;background:black;border:1px solid #321a13;border-radius:3px;-moz-border-radius:3px;}#top_login .login_button{height:24px;width:24px;background:url(/sites/all/themes/community_v2/img/layout/login_button.jpg) 0 0 no-repeat;border:none;}#top_login .login_button:hover{background-position:0 -26px;}#region_selector{position:absolute;top:10px;left:333px;width:195px;height:34px;line-height:34px;color:#e8bd34;font-size:10px;}#region_selector .selected,#region_selector .selected:hover{color:#666;}#region_content hr{height:15px;background:url(/sites/all/themes/community_v2/img/layout/hr_sep.png) top center no-repeat;border:none;}#region_content  hr.full_width{height:15px;background:url(/sites/all/themes/community_v2/img/layout/hr_sep_full.png) top center no-repeat;border:none;}#region_content h2{color:#750d09;font-family:"Times New Roman","Times",serif;font-size:24px;text-align:left;margin:0;padding-left:35px;padding-right:16px;background:url(template/<?=$core['config']['template'] ?>/images/h2_bg.png) 0 0 no-repeat;height:28px;line-height:28px;margin-bottom:12px;clear:both;}#region_content h2 a{font-family:Arial,Helvetica,sans-serif;font-size:14px;float:right;}table{width:100%;border-collapse:collapse;}table thead{background:url(template/<?=$core['config']['template'] ?>/images/thead_gradient.jpg) 0 0 repeat-x;line-height:25px;color:white;font-size:11px;}table thead a,table thead a:hover,table thead a:active,table thead a:visited{color:white;}table thead th{text-align:center;background:url(template/<?=$core['config']['template'] ?>/images/th_sep.jpg) 0 0 no-repeat;}table thead th:first-child{background:none;}.views-table tbody tr{height:32px;}.views-table tbody{border:1px solid #be8620;border-top:none;border-bottom:none;background:url(template/<?=$core['config']['template'] ?>/images/alt_row_bg.jpg) 0 0;}table td{font-size:14px;}table thead .sort_button{padding-right:12px;background:url(/sites/all/themes/community_v2/img/layout/sort_unsorted.jpg) right center no-repeat;}table thead .sort_asc{background:url(/sites/all/themes/community_v2/img/layout/sort_asc.jpg) right center no-repeat;}table thead .sort_desc{background:url(/sites/all/themes/community_v2/img/layout/sort_desc.jpg) right center no-repeat;}.tabbed_box .tabs,.tabbed_box .tab_contents{list-style:none;padding:0;margin:0;}.pager{font-size:11px;width:160px;height:15px;line-height:15px;list-style:none;margin:0;padding:0;float:right;text-align:center;position:relative;}.pager li{position:absolute;top:0;height:15px;width:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 0 no-repeat;}.pager .pager-first{left:0;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 -30px no-repeat;}.pager .pager-previous{left:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -19px -30px no-repeat;}.pager .pager-next{right:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -38px -30px no-repeat;}.pager .pager-last{right:0;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -57px -30px no-repeat;}.pager .pager-text{background:none;left:38px;right:38px;width:auto;}.pager .pager-first a,.pager .pager-previous a,.pager .pager-next a,.pager .pager-last a{display:block;height:15px;width:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 0 no-repeat;}.pager .pager-previous a{background-position:-19px 0;}.pager .pager-next a{background-position:-38px 0;}.pager .pager-last a{background-position:-57px 0;}.pager .pager-first:hover a{background-position:0 -15px;}.pager .pager-previous:hover a{background-position:-19px -15px;}.pager .pager-next:hover a{background-position:-38px -15px;}.pager .pager-last:hover a{background-position:-57px -15px;}.box_footer{width:592px;height:31px;line-height:31px;background:url(template/<?=$core['config']['template'] ?>/images/table_footer.jpg) 0 0 no-repeat;text-align:center;margin:0 auto;}.box_footer a{background:url(template/<?=$core['config']['template'] ?>/images/arrow_icon.png) left center no-repeat;padding-left:12px;font-weight:bold;}.tab_header{height:22px;position:relative;padding:0 6px;padding-top:6px;border-top:none;background:url(template/<?=$core['config']['template'] ?>/images/active_tab_grad.jpg) bottom left repeat-x;border:1px solid #60696f;border-top:0;border-bottom:0;}.item-list > .pager{margin-right:15px;}.tabs{margin:0;padding:0;list-style:none;height:30px;border-bottom:1px solid #60696f;position:relative;}.tabs li{float:left;}.tabs a{display:block;color:white;font-size:12px;font-weight:bold;height:20px;padding:6px 15px;padding-bottom:0;border-top-left-radius:3px;border-top-right-radius:3px;-moz-border-radius-topleft:3px;-moz-border-radius-topright:3px;background:url(template/<?=$core['config']['template'] ?>/images/tab_grad.jpg) 0 0 repeat-x;position:relative;top:5px;margin-right:3px;}.tabs a:hover{color:white;background-position:0 -26px;}.tabs a.active{color:#410000;height:22px;background:url(template/<?=$core['config']['template'] ?>/images/active_tab_grad.jpg) top left repeat-x;border:1px solid #60696f;border-bottom:none;top:0px;padding-top:8px;}.tabs a.active:hover{color:#410000;}.article_body{border:1px solid #d4ad54;padding:14px;background:url(template/<?=$core['config']['template'] ?>/images/article_body_bg.jpg) 0 0 repeat-y;line-height:18px;}.article{text-align:left;width:605px;margin:0 auto;}.article .article_title img{position:absolute;top:8px;left:12px;}.article .article_controls{text-align:right;margin-top:15px;}#region_content .links{margin:0;list-style:none;height:20px;}#region_content .links li{background:url(template/<?=$core['config']['template'] ?>/images/arrow_icon.png) left center no-repeat;padding-left:14px;font-weight:bold;float:right;margin:0 6px;}.article_author{color:#ae0000;font-style:italic;}.article .posted_by a{font-size:11px;color:#ae0000;font-style:italic;}.article .article_detail{position:absolute;font-size:10px;bottom:6px;left:13px;}.article .article_title{background:url(template/<?=$core['config']['template'] ?>/images/table_header.jpg) 0 0 no-repeat;margin:0;padding:0;height:36px;padding:6px 12px;position:relative;}.article .article_title .title{color:#750d09;font-family:"Times New Roman","Times",serif;}#content_area .views-admin-links{display:none;}#region_sidebar.le .block{margin-bottom:0px;}#region_sidebar .block h2 a{font-size:12px;}#region_sidebar .block h2{font-size:12px;font-weight:bold;background:url(template/<?=$core['config']['template'] ?>/images/top-leaf.jpg) 0 0 no-repeat;font-size:12px;text-align:left;padding-left:36px;position:relative;margin-top:10px;line-height:32px;color:white;margin-bottom:0px;margin-left:0px;}#region_sidebar .block .item-list a{color:##ffc600;font-size:12px;margin-left:-8px;padding-bottom:4px;}#region_sidebar .views-field-created{font-size:10px;}#region_sidebar .block .item-list .views-field-created{color:#acb0b9;float:right;padding-right:10px;}#play_for_free{position:absolute;height:75px;width:406px;top:218px;left:10px;}#region_sidebar .block .item-list li{height:28px;line-height:28px;background:url(template/<?=$core['config']['template'] ?>/images/list-item.jpg) no-repeat;font-size:12px;text-align:left;padding-left:36px;position:relative;padding-top:2px;}#region_sidebar .block .item-list li:hover{background:url(template/<?=$core['config']['template'] ?>/images/list-item-hover.jpg) no-repeat;}#region_sidebar .block .item-list li:first-child{background:url(template/<?=$core['config']['template'] ?>/images/list-first-child.jpg) no-repeat;}#region_sidebar .block .item-list li:first-child:hover{background:url(template/<?=$core['config']['template'] ?>/images/list-first-child-hover.jpg) no-repeat;}#region_sidebar .block .item-list li:last-child{padding-top:0;height:33px;background:url(template/<?=$core['config']['template'] ?>/images/list-last-child.jpg) no-repeat;}#region_sidebar .block .item-list li:last-child:hover{background:url(template/<?=$core['config']['template'] ?>/images/list-last-child-hover.jpg) no-repeat;}#region_sidebar .block .item-list ul{list-style:none;margin:0;padding:0;}#region_sidebar .block .item-list .views-field-changed{position:absolute;right:15px;top:0;color:#666;}#home_link{position:absolute;height:117px;width:281px;top:28px;left:32px;}#block-menu-primary-links h2{display:none;}#block-menu-primary-links .menu{position:absolute;list-style:none;padding:0;margin:0;text-align:left;display:none;width:212px;z-index:100;height:0px;}#block-menu-primary-links .menu a{height:39px;width:185px;display:table-cell;vertical-align:middle;font-family:"ITC Friz Quadrata";font-size:12px;padding:0 4px;padding-left:15px;color:white;}#block-menu-primary-links .menu li.expanded > a{background:url(/sites/all/themes/community_v2/img/layout/nav_expanded.png) right center  no-repeat;}#block-menu-primary-links .menu li{position:relative;background:url(/sites/all/themes/community_v2/img/layout/nav_dropdown_bg.png) 0 -40px repeat-y;height:39px;}#block-menu-primary-links .menu li.first{background-position:0 0;}#block-menu-primary-links .menu li.last{background-position:0 -79px;padding-bottom:1px;}#block-menu-primary-links .menu li:hover{background-position:-212px -40px;}#block-menu-primary-links .menu li.first:hover{background-position:-212px 0;}#block-menu-primary-links .menu li.last:hover{background-position:-212px -79px;}#block-menu-primary-links .content > .menu > li > a{width:86px;font-size:14px;padding:0 4px;height:54px;text-align:center;background:url(/sites/all/themes/community_v2/img/layout/top_nav.jpg) -96px 0 no-repeat;}#block-menu-primary-links .menu > li > .menu{top:54px;left:0;}#block-menu-primary-links .menu > li > .menu > li > .menu{left:211px;top:0;}#block-menu-primary-links .content > .menu{top:70px;left:315px;height:74px;width:760px;background:none;padding:0;display:block;}#block-menu-primary-links .content > .menu > li{float:left;}#block-menu-primary-links .content > .menu > li.first > a{padding-left:6px;background-position:0 0;}#block-menu-primary-links .content > .menu > li.last > a{padding-right:6px;background-position:-190px 0;}#block-menu-primary-links .content > .menu > li > a:hover{background-position:-96px -108px;}#block-menu-primary-links .content > .menu > li.first a:hover{background-position:0 -108px;}#block-menu-primary-links .content > .menu > li.last a:hover{background-position:-190px -108px;}#region_sidebar  a{font:Helvetica;}#region_sidebar .menu{margin:0;padding:0;list-style:none;}#region_sidebar .menu > li{font-size:12px;font-weight:bold;background:url(/sites/all/themes/community_v2/img/layout/treemenu/top.jpg) 0 0 no-repeat;font-size:12px;text-align:left;padding-left:36px;position:relative;padding-top:2px;margin-top:4px;line-height:32px;}#region_sidebar .menu > li.last{background-position:0 0;}#region_sidebar .menu > li.leaf{background:url(template/<?=$core['config']['template'] ?>/images/top-leaf.jpg) 0 0 no-repeat;}#region_sidebar .menu > li > a{font-size:12px;font-weight:bold;width:300px;height:100%;display:block;}#region_sidebar .menu > li.open > a{color:white;height:33px;}#region_sidebar .menu > li.open{background:url(/sites/all/themes/community_v2/img/layout/treemenu/top-expanded.jpg) 0 0 no-repeat;line-height:32px;}#region_sidebar .menu > li.closed{background-position:0px 0px;margin-top:4px;line-height:32px;}#region_sidebar .menu > li:hover > a{color:white;}#region_sidebar .menu > li > ul > li{font-variant:normal;line-height:30px;font-size:10px;margin-left:-36px;width:294px;background:url(/sites/all/themes/community_v2/img/layout/treemenu/first-child.jpg) no-repeat;margin-top:-1px;padding-bottom:0px;}#region_sidebar .menu > li > ul > li.leaf{background:url(/sites/all/themes/community_v2/img/layout/treemenu/first-child-leaf.jpg) 0 0 no-repeat;}#region_sidebar .menu > li > ul > li.last{background:url(/sites/all/themes/community_v2/img/layout/treemenu/first-child-bottom.jpg) 0 0 no-repeat;}#region_sidebar .menu > li > ul > li > a{font-size:10px;font-variant:normal;}#region_sidebar .menu > li > ul > li.open{background:url(/sites/all/themes/community_v2/img/layout/treemenu/first-child-expanded.jpg) no-repeat;margin-top:-1px;padding-bottom:0px;line-height:30px;}#region_sidebar .menu > li > ul > li.expanded.open{height:114px;}#region_sidebar .menu > li > ul > li.closed{background:url(/sites/all/themes/community_v2/img/layout/treemenu/first-child.jpg) no-repeat;margin-top:-1px;padding-bottom:0px;line-height:30px;}#region_sidebar .menu > li > ul > li > ul > li.leaf{background:url(/sites/all/themes/community_v2/img/layout/treemenu/grandchild.jpg) 0px no-repeat;}#region_sidebar .menu > li > ul > li > ul > li > a{font-variant:normal;color:#ffc600;font-size:10px;margin-left:15px;}#region_sidebar .menu > li > ul > li > ul > li{font-variant:normal;font-size:10px;margin-top:-2px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;background:url(/sites/all/themes/community_v2/img/layout/treemenu/grandchild.jpg) 0px no-repeat;line-height:30px;height:30px;}#region_sidebar .menu > li > ul > li > ul > li:hover{background:url(/sites/all/themes/community_v2/img/layout/treemenu/grandchild-hover.jpg) no-repeat;margin-top:-2px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;height:30px;line-height:30px;}#region_sidebar .streemenu > li.menu-mlid-458{background:url(template/<?=$core['config']['template'] ?>/images/top-leaf.jpg) 0 0 no-repeat;}#region_sidebar .views-field-timestamp{display:none;}#language_selector{height:32px;line-height:34px;width:109px;padding:2px 5px;padding-right:25px;text-align:left;font-size:13px;font-weight:bold;color:#e8bd34;position:absolute;top:128px;right:8px;}#language_selector div{position:absolute;top:0px;}.select_button{position:absolute;top:9px;right:4px;height:17px;width:17px;background:url(/sites/all/themes/community_v2/img/layout/lang_select_button.jpg) 0 0 no-repeat;}#language_selector .select_button:hover{background-position:0 -17px;}#language_selector ul{border-left:1px solid #444444;border-right:1px solid #444444;border-bottom:1px solid #444444;background:url(/sites/all/themes/community_v2/img/layout/overlay.png) 0 0;background-repeat:repeat;color:#E8BD34;position:absolute;top:32px;left:0;right:0;list-style:none;margin:0;display:none;}#language_selector ul li a{color:#2267D1 !important;}#language_selector ul li a:hover{color:#2e98fb !important;}#language_selector ul li .active{color:#2e98fb !important;}#region_sidebar #block-menu-menu-fp-top-right .menu > li.leaf{margin:4px 0;height:55px;width:297px;background:url(template/<?=$core['config']['template'] ?>/images/helpful_link_button.jpg) 0 0 no-repeat;position:relative;padding:0 10px;}#region_sidebar #block-menu-menu-fp-top-right a{height:55px;line-height:55px;display:block;font-family:"ITC Friz Quadrata";font-size:16px;padding-left:40px;text-align:left;}#region_sidebar #block-menu-menu-fp-top-right a,#region_sidebar #block-menu-menu-fp-top-right a:visited,#region_sidebar #block-menu-menu-fp-top-right a:active,#region_sidebar #block-menu-menu-fp-top-right a:hover,#region_sidebar #block-menu_block-2 h2 a:hover{color:white;}div#content_area div#layout_1_content div#region_sidebar div#block-menu-menu-fp-top-right.clear-block div.content ul.menu li.leaf:hover{background-position:0 -55px;}div#pvpnet_landing_content div#region_sidebar div#block-menu-menu-fp-top-right.clear-block div.content ul.menu li.leaf:hover{background-position:0 -55px;}#region_sidebar #block-menu-menu-fp-bottom-right li{background:none;height:120px;padding:0;}#region_sidebar #block-menu-menu-fp-bottom-right a{display:block;text-indent:-9000px;height:120px;background-position:50% 50%;padding:0px;}#block-menu-menu-fp-bottom-right h2,#block-menu-menu-fp-top-right h2,#block-menu-menu-fp-content h2{display:none;}#comments{padding:10px;border:1px solid #D4AD54;padding:0 14px;margin:0 7px;}#comments_title{background:url(template/<?=$core['config']['template'] ?>/images/table_header.jpg) 0 0 no-repeat;margin:0 7px;margin-top:10px;line-height:36px;padding:6px 12px;position:relative;width:605px;color:#750D09;font-family:'Times New Roman',Times,serif;font-size:20px;}#comments_title .comments_nowshowing{font-family:Arial,Helvetica,sans-serif;float:right;font-size:11px;color:#333333;font-weight:bold;margin-top:2px;margin-right:30px;}#comments .show_more{display:none;background:url(/sites/all/themes/community_v2/img/show_more_comments.png) 0 0 no-repeat;height:0px;width:605px;margin:-168px 0px -20px -15px;padding-top:33px;position:absolute;z-index:1;}#comments .show_more_anon{display:none;background:url(/sites/all/themes/community_v2/img/show_more_comments.png) 0 0 no-repeat;height:0px;width:605px;margin:5px 0px -20px -15px;padding-top:33px;position:absolute;z-index:1;}#comments .show_more:hover{}#comments .show_more:hover span{color:green;}#comments .show_more > span{margin-top:-22px;margin-left:34%;color:#3366cc;display:block;font-weight:bold;}#comments .pager{z-index:2;margin:15px 210px 0px 0px;}#sharebar_title{color:#333333;font-weight:bold;margin:15px 0px 0px 7px;}#retweet{float:right;margin:4px 4px 0px 0px;}#sharebar > span{float:right;margin:4px 4px 0px 0px;}.connect_widget{width:200px;}#sharebar{background:url(/sites/all/themes/community_v2/img/sharebar.jpg) 0 0 no-repeat;padding:5px 0px 0px 6px;margin:0px 0px 15px 7px;height:34px;width:604px;}#add_comment{margin-top:-7px;background:#f2efe4;padding:25px;border:1px solid #3b1500;margin-bottom:20px;*margin-left:6px;*margin-right:6px;}#add_comment:hover{background:#e6e3d9;}#comment-form fieldset.collapsible{margin-left:-5px;display:none;}#comments * h2{background:url(/sites/all/themes/community_v2/img/h2_bg_small.png) no-repeat scroll 7px 7px transparent;margin-top:20px;margin-left:-7px;margin-top:0px;margin-bottom:2px;padding-bottom:0px;line-height:36px;position:relative;width:605px;border:none;color:#660000;font-family:'Times New Roman',Times,serif;font-size:20px;}#comments .box{padding-top:53px;margin-left:-13px;}#comment-form textarea{width:611px;border:1px solid #3b1500;background:#f2efe4;margin-left:1px;resize:none;height:200px;}#comments * #comment-form textarea{resize:none;width:600px;height:59px;}.preview > .comment{padding:6px;}.preview > .comment > .rating{margin:30px 0px 10px 60px;}#region_content > .comment > .rating{margin:30px 0px 10px 60px;}#region_content > .comment{padding:7px;}#comment-form > .form-item{display:none;}#edit-comment-wrapper > label{display:none;}#comment-form .form-item > label{display:none;}#add_comment > span{margin-left:175px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px;color:#1a1a1a;display:block;font-weight:bold;font-size:12px;font-family:arial;}#add_comment > span > a{color:#3366cc;}#add_comment_title{margin-left:6px;background:none;margin-top:45px;margin-bottom:0px;padding-bottom:0px;line-height:36px;position:relative;width:605px;border:none;color:#660000;font-family:'Times New Roman',Times,serif;font-size:20px;}.comment{padding-top:10px;margin-top:10px;border-bottom:1px solid #D4AD54;position:relative;}.comment > .content{margin-left:60px;}.comment > .content p{margin:0;font:Helvetica;size:11px;color:#1a1a1a;font-weight:bold;font-size:11px;}.comment .rating .thumbsup{display:inline-block;width:17px;height:17px;background:url(/sites/all/themes/community_v2/img/thumbsup.png) 0 0 no-repeat;margin-left:3px;}.comment .rating .thumbsup:hover{background:url(/sites/all/themes/community_v2/img/thumbsup-hover.png) 0 0 no-repeat;}.comment .rating .thumbsdown{display:inline-block;width:17px;height:17px;background:url(/sites/all/themes/community_v2/img/thumbsdown.png) 0 0 no-repeat;}.comment .rating .thumbsdown:hover{background:url(/sites/all/themes/community_v2/img/thumbsdown-hover.png) 0 0 no-repeat;}.comment  .score{position:absolute;font:Helvetica;font-size:12px;color:#59b405;margin-left:10px;margin-top:2px;font-weight:bold;text-shadow:0.1em 0.1em 0.1em #FFC;}.comment .rating{margin-top:-20px;margin-left:103px;margin-bottom:15px;}.comment .picture{float:left;}.comment .picture img{border:1px solid #D4AD54;height:48px;width:48px;}.comment .submitted{font-size:14px;font-weight:bold;margin-bottom:10px;color:black;}.comment .avatar{width:46px;height:47px;background:url(/sites/all/themes/community_v2/img/avatar.jpg) 0 0 no-repeat;float:left;}.comment .submitted .poster{color:black;margin-left:7px;}.comment .submitted .number{float:left;font-size:12px;font-color:#333333;}.comment .submitted .age{font-size:10px;float:right;color:#333333;}.comment .links{clear:left;padding-top:10px;}.comment .links{clear:left;padding-top:10px;font-size:14px;font-variant:small-caps;}.comment_forbidden{visibility:hidden;}.comment .links a{color:#3366cc;}#region_content li.comment_reply{float:left;background:none;}#region_content li.comment_reply a{font-size:14px;font-variant:small-caps;color:#3366cc;}#region_content li.comment_reply a:hover{color:green;}.main_title{width:592px;height:119px;text-align:left;margin-top:7px;margin-left:3px;padding-left:10px;}.top_content{background:url(/sites/all/themes/community_v2/img/layout/page_img_bg.jpg) no-repeat scroll 0 0 transparent;margin:3px 0 0;padding-left:1px;padding-top:1px;width:605px;height:132px;}.main_content_right{float:right;margin-right:15px;}.main_content_right img{padding-right:5px;}h1.page_title{float:left;text-shadow:2px 2px 2px #000000;font-size:32pt;font-family:'ITC Friz Quadrata',Verdana,Arial;color:#FFFFFF;margin:0;padding-top:50px;height:50px;margin-left:10px;}.pg_dd_text{float:left;padding-right:7px;}.pg_dd_select{margin-right:10px;margin-left:10px;margin-top:3px;float:left;}#pg_list{margin:0 auto;width:592px;}.select_replacement{float:left;background:#faf6eb;line-height:20px;height:22px;text-align:left;overflow:hidden;position:relative;width:115px;border:1px solid #3b1500;}.select_replacement:hover{background:white;}.select_replacement .text{background:url(/sites/all/themes/community_v2/img/icons/ddl_selector.gif) center right no-repeat;margin-right:2px;margin-top:1px;padding-left:10px;height:20px;}.select_replacement select{opacity:0;filter:alpha(opacity=0);moz-opacity:0;top:0;left:0;width:100%;height:100%;position:absolute;}.wide .select_replacement{width:163px;}#filters{font-weight:bold;color:#4b452b;margin:10px 0px 0;text-align:left;padding-bottom:3px;padding-left:15px;}.submit_button{text-indent:-9000px;height:24px;width:24px;background:url(/sites/all/themes/community_v2/img/layout/login_button.jpg) 0 0 no-repeat;border:none;}.submit_button:hover{background-position:0 -26px;}#mode_view{background:url(/sites/all/themes/community_v2/img/layout/hr_split.gif) 0 0 no-repeat;margin:10px auto;text-align:center;width:592px;}#mode_view img{padding-right:15px;}.switch_button{background:url(/sites/all/themes/community_v2/img/icons/icon_btn.jpg) no-repeat scroll 0 0 transparent;height:19px;width:78px;border:medium none;border-radius:3px;-moz-border-radius:3px;color:white;padding-bottom:3px;}.switch_button:hover{background-position:0 -19px;}#champions_legend{list-style:none outside none;padding:0;margin:0;}#champions_legend li{float:left;padding-right:20px;}#champions_legend li.bullet{padding-right:5px;}.search_text{display:none;}.view-filters{float:right;}.block-views{position:relative;}.views-exposed-form{position:absolute;top:0;right:0;}.views-exposed-form .views-exposed-widget{padding:0;}.views-exposed-form .views-exposed-widget .form-submit{float:right;margin:0;}.content_body{padding-left:10px;padding-right:10px;}.blue_button{background:url(/sites/all/themes/community_v2/img/buttons/blue_button.png) no-repeat;}.grey_button{background:url(/sites/all/themes/community_v2/img/buttons/grey_button.png) no-repeat;}.blue_button,.grey_button{width:96px;height:27px;line-height:27px;text-align:center;color:#fff;font-size:11px;font-weight:bold;}.center{text-align:center;}.learn_card{float:left;width:192px;height:133px;padding-right:10px;padding-bottom:15px;}.learn_card .learn_champion{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_champion.png) transparent  no-repeat;}.learn_card .learn_runes{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_runes.png) transparent  no-repeat;}.learn_item{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_items.png) transparent  no-repeat;}.learn_dota{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_dota.png) transparent  no-repeat;}.learn_gameplay{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_gameplay.png) transparent  no-repeat;}.learn_indev{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_indev.png) transparent  no-repeat;}.learn_lore{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_lore.png) transparent  no-repeat;}.learn_maps{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_maps.png) transparent  no-repeat;}.learn_newuser{width:192px;height:133px;background:url(/sites/all/themes/community_v2/img/learn_newuser.png) transparent  no-repeat;}.learn_champion:hover,.learn_item:hover,.learn_runes:hover,.learn_dota:hover,.learn_gameplay:hover,.learn_indev:hover,.learn_lore:hover,.learn_maps:hover,.learn_newuser:hover{background-position:0 -133px;}.learn_card .learn_text{font-family:'ITC Friz Quadrata',Verdana,serif;font-size:16px;color:white;padding-top:105px;text-align:center;font-weight:bold}#page_header{margin:7px 13px;width:605px;height:111px;background:url(/sites/all/themes/community_v2/img/layout/header_full.png) transparent  no-repeat;}#page_header.full{width:100%;height:144px;background:none;margin:0 0;}#page_header.no_bg{height:auto;background:none;width:592px;}#page_header.no_bg  .breadcrumb{min-height:20px;height:auto;}#page_header.full .header_left{overflow:hidden;margin:0;float:left;width:100%;height:144px;background:url(/sites/all/themes/community_v2/img/layout/header_icon.png) transparent  no-repeat;}#page_header.full .header_right{overflow:hidden;float:right;width:100%;height:144px;background:url(/sites/all/themes/community_v2/img/layout/header_right.png) transparent  no-repeat;background-position:right top}#page_header.full .page_header_text{position:absolute;top:25px;left:175px;font-size:30px;color:#660000;}#page_header .page_header_text{position:absolute;top:25px;left:155px;font-size:30px;color:#660000;font-family:"ITC Friz Quadrata",Times;}#page_header .page_header_breadcrumb{position:absolute;top:65px;left:155px;font-weight:bold;}#page_header.full .page_header_breadcrumb{left:175px;}#page_header .last_breadcrumb{padding-left:18px;margin-left:13px;color:#2d3032;font-weight:bold;font-size:14px;background:url(/sites/all/themes/community_v2/img/layout/bracket.png) transparent  no-repeat;}#page_header .crumb_text{float:right;vertical-align:middle;color:#134561;padding-left:10px;}#page_header .crumb_bracket{padding-left:10px;}#card_list{min-height:750px;}.form_help{color:#FFFFFF;font-size:13px;font-face:Arial;margin-left:30px;}.form_container{margin-left:auto;margin-right:auto;margin-top:30px;width:450px;text-align:center;}.page_form_container{margin-left:auto;margin-right:auto;width:450px;text-align:center;}.page_form_container .form-item label{width:155px;text-align:right;padding-right:15px;display:block;float:left;color:#750D09;font-size:15px;line-height:35px;font-weight:bold;}.form-item label{width:150px;text-align:right;padding-right:15px;display:block;float:left;color:#e8bd34;font-size:15px;line-height:35px;font-weight:bold;}.form-item input{float:left;width:270px;height:30px;margin-bottom:20px;background:#e6e7e8 url(/sites/all/themes/community_v2/img/layout/input_inner_shadow.jpg) top left no-repeat;}#content_frame  input.form-submit{float:right;}.form-item{clear:both;}.form-required{display:none;}.popup_button{background:#FFFFFF url(/sites/all/themes/community_v2/img/buttons/popup_button.png) top left no-repeat;width:132px;height:30px;border:0px;margin-right:15px;line-height:30px;vertical-align:middle;color:#ede6db;font-size:16px;font-family:Arial;cursor:pointer;}.popup_button a{text-decoration:none;color:#ede6db;}.popup_tooltip{position:absolute;background:#000000 url(/sites/all/themes/community_v2/img/layout/popup_bg.png) 0 0 repeat-x;border:2px solid #303030;border-radius:5px;width:300px;font-size:12px;font-family:Arial;text-align:left;}#box-overlay{background-color:#000;}#box-object{height:400px;width:750px;color:#ccc;background-color:#444;border:3px solid #555;padding:14px;}#box-object a.closeImg{background:url(/sites/all/themes/community_v2/img/box-close.png) no-repeat;width:24px;height:24px;display:inline;z-index:3500;position:absolute;top:-15px;right:-16px;cursor:pointer;}@-moz-document url-prefix() {#add_comment{margin-top:-7px;background:#f2efe4;padding:20px;border:1px solid #3b1500;margin-bottom:20px;margin-left:6px;margin-right:6px;}#comment-form textarea{width:615px;}}
.pager{font-size:11px;width:220px;height:15px;line-height:15px;list-style:none;margin:0;padding:0;float:right;text-align:center;position:relative;}.pager li{position:absolute;top:0;height:15px;width:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 0 no-repeat;}.pager .pager-first{left:0;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 -30px no-repeat;}.pager .pager-previous{left:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -19px -30px no-repeat;}.pager .pager-next{right:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -38px -30px no-repeat;}.pager .pager-last{right:0;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) -57px -30px no-repeat;}.pager .pager-text{background:none;left:38px;right:38px;width:auto;}.pager .pager-first a,.pager .pager-previous a,.pager .pager-next a,.pager .pager-last a{display:block;height:15px;width:19px;background:url(/sites/all/themes/community_v2/img/layout/pagination_buttons.jpg) 0 0 no-repeat;}.pager .pager-previous a{background-position:-19px 0;}.pager .pager-next a{background-position:-38px 0;}.pager .pager-last a{background-position:-57px 0;}.pager .pager-first:hover a{background-position:0 -15px;}.pager .pager-previous:hover a{background-position:-19px -15px;}.pager .pager-next:hover a{background-position:-38px -15px;}.pager .pager-last:hover a{background-position:-57px -15px;}

#block-menu-menu-fp-content ul{height:95px;width:607px;list-style:none;padding:0;margin:0 auto;}#block-menu-menu-fp-content li{float:left;height:95px;width:100px;background:url(template/<?=$core['config']['template'] ?>/images/quick_links_bg.jpg) -106px 0 no-repeat;text-align:center;}#block-menu-menu-fp-content li.first{background-position:0 0;}#block-menu-menu-fp-content li.last{width:107px;background-position:-206px 0px;}#block-menu-menu-fp-content li a{background-position:50% 10px;padding:0;padding-top:75px;display:block;vertical-align:bottom;color:white;font-family:Arial;font-size:11px;text-align:center;}#block-menu-menu-fp-content li a.menu-1255{background-position:50% 6px;}#block-menu-menu-fp-content li a.menu-1256{background-position:50% 6px;}#block-menu-menu-fp-content li:hover{background-position:-106px -95px;}#block-menu-menu-fp-content li.first:hover{background-position:0 -95px;}#block-menu-menu-fp-content li.last:hover{background-position:-206px -95px;}#block-views-news-block_1 .body_hidden .article_body{display:none;}#block-views-news-block_1 .body_hidden .article_detail{bottom:auto;left:auto;right:14px;top:12px;}#block-views-news-block_1 .body_hidden .article_title .title,#block-views-news-block_1 .body_hidden .article_title > a{width:290px;top:10px;font-size:14px;right:auto;}#block-views-news-block_1 .body_hidden .article_title{background:url(template/<?=$core['config']['template'] ?>/images/alt_row_bg.jpg) 0 0 no-repeat;height:32px;padding:0 12px;cursor:pointer;}#block-views-news-block_1 .article_body{border-bottom:none;}#region_content #block-views-news-block_1 .content .view-footer hr{background:url(/sites/all/themes/community_v2/img/layout/runes.png) top left no-repeat;width:594px;height:14px;border:none;margin-top:10px;margin-bottom:10px;}#screenshots{width:298px;height:242px;margin:0 auto;position:relative;background:url(/sites/all/themes/community_v2/img/layout/front/ss_frame.jpg) 0 0 no-repeat;}#screenshots h2{color:white;font-size:12px;font-family:Arial,Helvetica,sans-serif;font-weight:bold;text-align:left;margin:0;background:none;padding-left:12px;padding-top:6px;}#screenshots a{color:#ffc600;font-size:16px;}#screenshots img{position:absolute;top:36px;left:5px;}#screenshots .caption{position:absolute;bottom:4px;left:0;right:0;height:20px;line-height:20px;color:#666;font-size:10px;}#layout_1_content #region_content #block-views-front_promos-block_1{background:url(template/<?=$core['config']['template'] ?>/images/home_promo_bg.jpg) 0 0 no-repeat;width:613px;height:285px;overflow:hidden;position:relative;margin:0;margin-left:3px;margin-bottom:10px;}#region_sidebar #block-menu-menu-fp-top-right li{margin:4px 0;height:55px;width:297px;background:url(/sites/all/themes/community_v2/img/layout/helpful_link_button.jpg) 0 0 no-repeat;position:relative;padding:0 10px;}#region_sidebar #block-menu-menu-fp-top-right a{height:55px;line-height:55px;display:block;font-family:"ITC Friz Quadrata";font-size:16px;padding-left:40px;text-align:left;}#region_sidebar #block-menu-menu-fp-top-right a,#region_sidebar #block-menu-menu-fp-top-right a:visited,#region_sidebar #block-menu-menu-fp-top-right a:active,#region_sidebar #block-menu-menu-fp-top-right a:hover{color:white;}#region_sidebar #block-menu-menu-fp-top-right li:hover{background-position:0 -55px;}#region_sidebar #block-menu-menu-fp-bottom-right li{background:none;height:120px;padding:0;}#region_sidebar #block-menu-menu-fp-bottom-right a{display:block;text-indent:-9000px;height:120px;background-position:50% 50%;padding:0px;}#block-menu-menu-fp-bottom-right h2,#block-menu-menu-fp-top-right h2,#block-menu-menu-fp-content h2{display:none;}.view-fpimage .views-row-even{float:right;margin-right:15px;}.view-fpimage .views-row-odd{float:left;margin-left:15px;}.view-fpimage .views-field-field-image-fid{background:url(template/<?=$core['config']['template'] ?>/images/img_frame.png) no-repeat;}.view-fpimage img{padding:3px;}.ssotd{font-size:9px;color:#FFF;width:294px;height:242px;background:url(/sites/all/themes/community_v2/img/layout/ssotd_frame.png) no-repeat;}.ssotd .screenshot_label{font-size:11px;float:left;font-weight:bold;line-height:37px;margin-left:10px;}.ssotd .view_more{line-height:35px;float:right;margin-right:15px;}.ssotd .caption{line-height:20px;}#region_content .block:first-child p{margin-bottom:-5px;}
#sb-title-inner,#sb-info-inner,#sb-loading-inner,div.sb-message{color:#fff;font-family:"HelveticaNeue-Light","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:200;}#sb-container{display:none;left:0;margin:0;padding:0;position:fixed;text-align:left;top:0;visibility:hidden;z-index:999;}#sb-overlay{height:100%;position:relative;width:100%;}#sb-wrapper{position:absolute;visibility:hidden;width:100px;}#sb-wrapper-inner{border:2px solid #303030;height:100px;overflow:hidden;position:relative;border-radius:5px;}#sb-body{padding-top:25px;height:100%;position:relative;background:url(/sites/all/themes/community_v2/img/layout/popup_bg.png) 0 0 repeat-x;}#sb-body-inner{height:100%;position:absolute;width:100%;}#sb-player.html{height:100%;overflow:auto;}#sb-body img{border:none;}#sb-loading{height:100%;position:relative;}#sb-loading-inner{font-size:14px;height:24px;line-height:24px;margin-top:-12px;position:absolute;text-align:center;top:50%;width:100%;}#sb-loading-inner span{background:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/loading.gif) no-repeat;display:inline-block;padding-left:34px;}#sb-body{background-color:#060606;}#sb-loading{background-color:#060606;margin-top:-25px;}#sb-title,#sb-info{margin:0;overflow:hidden;padding:0;position:relative;}#sb-info{position:absolute;top:36px;right:15px;}#sb-title,#sb-title-inner{height:26px;line-height:26px;}#sb-title-inner{font-size:16px;}#sb-info,#sb-info-inner{height:30px;line-height:30px;}#sb-info-inner{font-size:12px;}#sb-nav{float:right;height:16px;padding:2px 0;width:45%;}#sb-nav a{background-repeat:no-repeat;cursor:pointer;display:block;float:right;height:19px;margin-left:3px;width:19px;}#sb-nav-close{background-image:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/close.png);}#sb-nav-next{background-image:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/next.png);}#sb-nav-previous{background-image:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/previous.png);}#sb-nav-play{background-image:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/play.png);}#sb-nav-pause{background-image:url(/sites/all/themes/community_v2/js/shadowbox-3.0.3/pause.png);}#sb-counter{float:left;width:45%;}#sb-counter a{color:#fff;cursor:pointer;padding:0 4px 0 0;text-decoration:none;}#sb-counter a.sb-counter-current{text-decoration:underline;}div.sb-message{font-size:12px;padding:10px;text-align:center;}div.sb-message a:link,div.sb-message a:visited{color:#fff;text-decoration:underline;}

.iN_title{
font-size:16px;
font-weight:bold;

}
.iN_title a:hover{
	font-size:16px;
	font-weight:bold;
	color:#055881;
}
.iN_date{
font-size:12px;
font-weight:bold;
}

.ann_date{
font-size:12px;
font-weight:bold;
}

.ann_titulo{
	font-size:14px;
	font-weight:bold;
	color:#055881;
}

.ann_titulo a:hover{
	font-size:14px;
	font-weight:bold;
	color:#055881;
}

.list_menu{
font-weight:bold;
}

.menu-loginlf {
 background: url(template/<?=$core['config']['template'] ?>/images/login_bg_foot.jpg) bottom no-repeat, 
   url(template/<?=$core['config']['template'] ?>/images/login_bg.jpg) center repeat-y;
}

.menu-loginlf2 {
 background: url(template/<?=$core['config']['template'] ?>/images/login_bg_foot.jpg) bottom no-repeat, url(template/<?=$core['config']['template'] ?>/images/login_bg_foot.jpg) top no-repeat, 
   url(template/<?=$core['config']['template'] ?>/images/login_bg.jpg) center repeat-y;
}
.iN_download_cat {
	font-weight:bold;
	color:#ffc600;
	font-size:16px;
	}

.iR_rank {
	background-color: #d4ad54;
	font-weight:bold;

}

.iR_name {
	background-color: #333;
	padding-left:2px;
	font-weight:bold;
	color:#FFF;
}

.iR_class {
	background-color: #b9984e;
	padding-left:2px;
}

.iR_status {
	background-color: #b9984e;
	padding-left:2px;
}
.iR_stats {
	background-color: #b9984e;
	padding-left:2px;
	color:#FFF;
	font-weight:bold;
}
.iR_stats_2 {
	background-color: #b9984e;
	padding-left:2px;
	color:#FFF;
	font-weight:bold;
}
.iR_func_status {
	background-color: #745F2E;
	padding-left:2px;
	color:#FFF;
	font-weight:bold;
}
.iR_stats_level {
	background-color: #745F2E;
	padding-left:2px;
	color:#FFF;
	font-weight:bold;
}
.iR_stats_reset {
	background-color: #745F2E;
	padding-left:2px;
	color:#FFF;
	font-weight:bold;
}
.iRg_line {
	border-bottom: groove #C8AF75;
	font-weight:bold;
	}
.iRg_input{
	width:150px;
	}
.iRg_inf {
	padding-top:10px;
	padding-bottom:10px;
	font-size:9px;
	font-weight:bolder;
	}
.iRg_text {
	font-size:16px;
	color:#ffc600;
	font-weight:900;
	padding-top:10px;
	padding-bottom:10px;
	}
.stadisticas_td_bg {
	font-size:13px;
	border-bottom: 1px solid #1f2933;
	color:#ff7200;
	}
	
.curent_step {
	color:#FFF;
	font-weight:bold;
	background-color:#720505;
	}
	.step {
	color:#FFF;
	font-weight:bold;
	background-color:#000;
	}
  </style>
  
<style>
    @import url('template/<?=$core['config']['template'] ?>/css/lol_global_elements.css');
    .tabs1 {margin:0;padding:0;list-style:none;height:30px;border-bottom:1px solid #60696f;position:relative;}
</style>
  </head>
  <div id="lol-pvpnet">
	<div id="lol-pvpnet-bar">
	  <div  align="right"  id="lol-pvpnet-bar-inner"><div  align="right"  id="lol-pvpnet-bar-inner2">
	    <table>
	      <td style="padding-top:8px;" align="left"><?
if($core['config']['on_off'] == '0' || $core['debug'] == '1'){
	if(isset($_SESSION['admin_login_auth'])){
		echo '<div align="center" style="color: red; background-color: white; padding:2px"><b>Warning: The website is currently turned off!</b></div>';
	}

}
echo '<script type="text/javascript">
<!--
var currentTime = new Date();
var c_hours = currentTime.getHours() ;
var c_minutes = currentTime.getMinutes();
time_c_d = c_hours;


function make_header_welcome(time,user,last_msg){
	if(time < \'1\'){
		welcome_start =  "Shouldn\'t you be going to bed soon";
		welcome_end = \'?\';
	}
	else if(time < \'2\'){
		welcome_start =  "Up late, aren\'t we";
		welcome_end = \'?\';
	}
	else if(time < \'4\'){
		welcome_start =  "Having trouble sleeping";
		welcome_end = \'?\';
	}
	else if(time < \'5\'){
		welcome_start =  "Still can\'t sleep";
		welcome_end = \'?\';
	}
	else if(time < \'7\'){
		welcome_start =  "Aren\'t you the early bird";
		welcome_end = \'?\';
	}
	else if(time <\'12\'){
		welcome_start =  "Buenos Dias";
		welcome_end = \'.\';
	}
	else if(time < \'13\'){
		welcome_start =  "Enjoying your lunch break";
		welcome_end = \'?\';
	}
	else if(time < \'17\'){
		welcome_start =  "Good Afternoon";
		welcome_end = \'.\';
	}	
	else if(time < \'18\'){
		welcome_start =  "What\'s for dinner";
		welcome_end = \'?\';
	}
	else if(time < \'22\'){
		welcome_start =  "Good Evening";
		welcome_end =  \'.\';
	}
	else if(time < \'23\'){
		welcome_start =  "Where your children are";
		welcome_end = \'?\';
	}else{
		welcome_start =  "Shouldn\'t you be going to bed soon";
		welcome_end = \'?\';
	}
	document.getElementById(\'welcome_stats\').innerHTML = welcome_start+\', \'+user+welcome_end+last_msg;
}
//-->
</script>';
?><?
 if ($user_login == '1') { 
 	echo '<script type="text/javascript">make_header_welcome(time_c_d,\'<a href="">'.$user_auth_id.'</a>\',\'\');</script>';
 }else{
 	echo ''.text_not_loggd_in.', <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'">'.text_log_in.'</a>';
 }
?></td>  <td style="padding-top:8px;" align="right"><?
                    if($core['language_switch'] == '1'){
                        foreach ($languages as $language_id =>  $language_data){
                            echo '&nbsp;<img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'">  <a  href="'.ROOT_INDEX.'?change_language='.$language_id.'">'.$language_data[0].'</a>';
                        }
                    }
                    ?></td>
        </table>
	    </div>
	  </div>
	</div>

</div>

<div id="lol-header" role="banner" class="i18n-es">
  <div class="section clearfix">
    <div id="lol-header-sitename"></div>
    <div id="lol-header-play-free">
      <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>register" class="play-free-link">Registre-se</a>    </div>
    <div id="lol-header-nav" role="navigation">
      <ul class="lol-menu lol-menu-down level-0" id="lol-menu-0"><li class="menu-item menu-314 menuparent menu-path-leagueoflegendscom-news first  odd "><a href="<?=ROOT_INDEX?>" title=""><span><?=link_home;?></span></a><div class="lol-nav-dropdown-trigger"><div class="lol-nav-dropdown-container"> 
<li class="menu-item menu-315 menuparent menu-path-leagueoflegendscom-learn even "><a href="" title=""><span>Novidades</span></a>
  <div class="lol-nav-dropdown-trigger">
  <div class="lol-nav-dropdown-container">  <ul class="level-1">
    <li class="menu-item menu-344 menuparent menu-path-leagueoflegendscom-learn-gameplay first  odd "><a href="<?=ROOT_INDEX?>" title=""><span>Noticias</span></a> </li>
<li class="menu-item menu-321 menu-path-leagueoflegendscom-champions even "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE  ?>" title=""><span><?=link_announcements;?></span></a></li>
  </ul>  <span class="lol-nav-rightbar"></span>  <span class="lol-nav-leftbar"></span>  <span class="lol-nav-topbar"></span>  <span class="lol-nav-bottombar"></span></div></div></li>
<li class="menu-item menu-337 menuparent menu-path-competitive odd "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings" title=""><span>Rankings</span></a><div class="lol-nav-dropdown-trigger"><div class="lol-nav-dropdown-container">  <ul class="level-1"><li class="menu-item menu-892 menu-path-node-2257 first  odd "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings"><span>Jogadores</span></a></li>
<li class="menu-item menu-956 menuparent menu-path-competitive-circuit even "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings&rank=guilds" title=""><span>Guilds</span></a></li>
</ul>  <span class="lol-nav-rightbar"></span>  <span class="lol-nav-leftbar"></span>  <span class="lol-nav-topbar"></span>  <span class="lol-nav-bottombar"></span></div></div></li>
<li class="menu-item menu-952 menuparent menu-path-euwleagueoflegendscom-board- even "><a href="board/indexd78f.html?langid=3" title=""><span>Jogar</span></a><div class="lol-nav-dropdown-trigger">
  <div class="lol-nav-dropdown-container">  <ul class="level-1"><li class="menu-item menu-955 menu-path-euwleagueoflegendscom-board-forumdisplayphpf3 first  odd "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE  ?>" title=""><span><?=link_new_account;?></span></a></li>
<li class="menu-item menu-912 menu-path-euwleagueoflegendscom-board-devtrackerphpgRiot even "><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads" title=""><span>Downalod</span></a></li>
  </ul>  <span class="lol-nav-rightbar"></span>  <span class="lol-nav-leftbar"></span>  <span class="lol-nav-topbar"></span>  <span class="lol-nav-bottombar"></span></div></div></li>
<li class="menu-item menu-1012 menu-path-jinxcom-shop-coll-leagueoflegends-langen-IE odd "><a href="<?php echo MENU_LINK_CUSTOM1;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM1;?></span></a></li>
<li class="menu-item menu-319 menuparent menu-path-media even  last "><a href="<?php echo MENU_LINK_CUSTOM2;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM2;?></span></a><div class="lol-nav-dropdown-trigger">
  <div class="lol-nav-dropdown-container">  <ul class="level-1">
    <li class="menu-item menu-724 menuparent menu-path-media-videos-all first  odd "><a href="<?php echo MENU_LINK_CUSTOM2_SUB1;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM2_SUB1;?> </span></a> </li>
<li class="menu-item menu-726 menu-path-media-galleries-fan-art odd "><a href="<?php echo MENU_LINK_CUSTOM2_SUB2;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM2_SUB2;?></span></a></li>
<li class="menu-item menu-340 menu-path-media-galleries-screenshot even "><a href="<?php echo MENU_LINK_CUSTOM2_SUB3;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM2_SUB3;?></span></a></li>
<li class="menu-item menu-343 menu-path-media-wallpaper odd  last "><a href="<?php echo MENU_LINK_CUSTOM2_SUB4;?>" title=""><span><?php echo MENU_NOMBRE_CUSTOM2_SUB4;?></span></a></li>
  </ul>  <span class="lol-nav-rightbar"></span>  <span class="lol-nav-leftbar"></span>  <span class="lol-nav-topbar"></span>  <span class="lol-nav-bottombar"></span></div></div></li>
</ul>
    </div>
    <div class="lol-header-flang lol-header-flang-left"></div>
    <div class="lol-header-flang lol-header-flang-right"></div>
  </div>
</div>

		<div id="content_area">
		  <div id="layout_1_content">
		    <div id="container_top"></div>
		    <div id="container_bottom"></div>
		    <div id="region_content">
		      <?php 

if(isset($_GET['page_id'])){
   switch ($_GET['page_id']) {
     
       

   }
}else{
  include('imagesl.php');
}

?>
		      <div id="block-block-17" class="clear-block block block-block"n;">
		        <div class="content"></div>
	          </div>
		      <div id="block-menu-menu-fp-content" class="clear-block block block-menu">
		        <div class="content"> </div>
	          </div>
		      <div id="block-views-news-block_1" class="clear-block block block-views" style="color:#bd1300;">
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
                  	$title_p =  '<a href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>';
                  }elseif (isset($_GET[LOAD_GET_PAGE])){
                  	if(isset($_GET[USER_GET_PAGE])){
                  		$usercp_module_title = str_replace($modules_text_tile,$modules_text_translate,$secondary_l);
$title_p =  '<a href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a> &gt; <a href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a> &gt; <a href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'&panel='.$l2_name[3].'">'.$usercp_module_title.'</a>';
                  	}else{
                  		$title_p =  '<a href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a> &gt; <a href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>';
                  	}
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
					<div class="tmp_right_title"><h2>'.text_announcement.'</h2></div>
					<div class="article_body">
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
					  <tr>
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/images/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;" class="ann_titulo"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="right" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
					  </tr>
					  <tr>
					  <td colspan="2"  align="left" style="background-image:url(template/'.$core['config']['template'].'/images/inner_line.jpg); height: 2px;"></td>
					  </tr>
					  
					  ';
		if($core['ANNOUNCEMENT']['AUTHOR'] == '1'){
			echo '<tr>
			<td height="40" colspan="2" align="right"><b>'.$core['config']['admin_nick'].'</b> (Administrator)</td>
			</tr>';
			
		}
		echo '</table></div>
							</div><div style="background-image: url(template/'.$core['config']['template'].'/images/article_footer_bg.jpg); height: 1px;"> </div>
						<p>';
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
						  
						  echo '</p>
						
					<div class="tmp_m_content"> 
					<div class="tmp_right_title"><h2>'.htmlspecialchars(str_replace($modules_text_tile,$modules_text_translate,$give_me_out[3])).'</h2></div>
					<div class="article_body">';
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
		echo '</div> </div>			<div style="background-image: url(template/'.$core['config']['template'].'/images/article_footer_bg.jpg); height: 1px;"> </div>
		';
				}
			}
		}
	}
}
}
?>
	          </div>
		      <div id="block-ladders-0" class="clear-block block block-ladders">
		        <h2>Top 10</h2>
		        <div class="content">
		          <div class="item-list">
		            <ul class="tabs1">
		              <li class="first"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings">Top Resets</a></li>
		              <li><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings&rank=guilds">Top Guilds</a></li>
	                </ul>
	              </div>
		          <div class="ladders-tab ladders-tab- ladders-tab-active">
		            <table class="ladder-table">
		              <thead>
		                <tr>
		                  <th class="ladder-field-rank">Rank</th>
		                  <th class="ladder-field-player">Jugador</th>
		                  <th class="ladder-field-wins">Kills</th>
		                  <th class="ladder-field-losses">Level</th>
		                  <th class="ladder-field-rating">Resets</th>
	                    </tr>
	                  </thead>
		              <tbody>
		                <?
include("../config.php");
$cnn=@mssql_connect($core['db_host'],$core['db_user'],$core['db_password']) or die('Error al conectar al sql');
$db=@mssql_select_db($core['db_name'],$cnn) or die('Error al conectar la database'); 
$query=mssql_query("select TOP 10 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc , PkCount desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$rst[37]=$row['Resets'];
$resetsz=$row['Resets'];
$pkcountz=$row['PkCount'];
?>
		                <tr class="alt">
		                  <td class="ladder-field ladder-field-rank"><?=++$count2;?></td>
		                  <td class="ladder-field ladder-field-player"><?=$namez;?></td>
		                  <td class="ladder-field ladder-field-wins"><?=$pkcountz;?></td>
		                  <td class="ladder-field ladder-field-losses"><span class="ladder-field ladder-field-rating">
		                    <?=$levelz;?>
		                    </span></td>
		                  <td class="ladder-field ladder-field-rating"><?=$rst[37];?></td>
	                    </tr>
		                <?

}
?>
	                  </tbody>
	                </table>
	              </div>
		          <div class="ladders-tab ladders-tab-">
		            <table class="ladder-table">
		              <thead>
		                <tr>
		                  <th class="ladder-field-rank">Rank</th>
		                  <th class="ladder-field-player">Nombre</th>
		                  <th class="ladder-field-losses">Score</th>
		                  <th class="ladder-field-rating">Logo</th>
	                    </tr>
	                  </thead>
		              <tbody>
		                <?
				include("../config.php");
$cnn=@mssql_connect($core['db_host'],$core['db_user'],$core['db_password']) or die('Error al conectar al sql');
$db=@mssql_select_db($core['db_name'],$cnn) or die('Error al conectar la database'); 
$Guild=mssql_query("select TOP 10 * from MuOnline.dbo.guild order by G_Score desc");
while($row=mssql_fetch_assoc($Guild)){
$G_Namez=$row['G_Name'];
$G_Markz=$row['G_Mark'];
$G_Scorez=$row['G_Score'];
$Resetsz=$row['Resets'];
$logo=urlencode(bin2hex($G_Markz));
?>
		                <tr class="alt">
		                  <td class="ladder-field ladder-field-rank"><?=++$count1;?></td>
		                  <td class="ladder-field ladder-field-player"><?=$G_Namez;?></td>
		                  <td class="ladder-field ladder-field-wins"><?=$G_Scorez;?></td>
		                  <td class="ladder-field ladder-field-rating"><div align="center" class="Estilo36"><img src="get.php?aL=<?=$logo;?>.png" alt="logo" width="30" height="30"></div></td>
	                    </tr>
		                <?

}
?>
	                  </tbody>
	                </table>
	              </div>
		          <div class="ladders-block-footer"> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings">Ver todos</a></div>
		          <script type="text/javascript" charset="utf-8">
	var ladderTabContents = $('#block-ladders-0 .ladders-tab');
	var ladderTabs = $('#block-ladders-0 .tabs li a');
	
	// Show the first tab as active on page load
	$(ladderTabs[0]).addClass('active');

	// Now handle the click event to change the active tab
	ladderTabs.click(function () {
		if ($(this).hasClass('active')) {
			return false;
		}
		
		var index = $(this).parent().index();
		var tabContents = ladderTabContents[index];
		
		if (tabContents != null) {
			// Update the tab contents to show
			ladderTabContents.removeClass('ladders-tab-active');
			$(tabContents).addClass('ladders-tab-active');
			
			// Update the tab to be highlighted properly
			ladderTabs.removeClass('active');
			$(this).addClass('active');

			// Alter the View All link to reflect the proper location
			$('#block-ladders-0 .ladders-block-footer a').attr('href', $(this).attr('href'));
		}
		
		return false;
	});
          </script>
	            </div>
	          </div>
		      <div id="block-views-fpimage-block_1" class="clear-block block block-views">
		        <div class="content">
		          <div class="view view-fpimage view-id-fpimage view-display-id-block_1 view-dom-id-3">
		            <hr>
	              </div>
	            </div>
	          </div>
	        </div>
		    <div id="region_sidebar">
		      <div id="block-views-latest_articles-block_1" class="clear-block block block-views">
		        <h2>
		          <?=text_member_area; ?>
	            </h2>
		        <div class="content">
		          <div class="view view-latest-articles view-id-latest_articles view-display-id-block_1 view-dom-id-4">
		            <div class="view-content">
		              <div class="item-list">
		                <ul>
		                  <div class="menu-loginlf">
		                  <?
		  if($user_login == '1'){
		  	echo '<div class="tmp_left_menu">
		  	<ul>';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms',',');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			#explode(",",$tr);
			
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					if($tr[7] != '1'){
						echo '<li class="list_menu"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
					}
				}
				
			}
		}
		echo ' </ul>
		 </div>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		  <td style="padding-left:25px; padding-bottom:5px;" align="left" class="yellow"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td style="padding-right:25px; padding-bottom:5px;" align="right" class="yellow"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
			 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td style="height: 25px; padding-left: 20px;  " width="130"><input name="uss_id" type="text" id="pvp-login-username" style="width:150px" OnClick="this.value=\'\'" value="USER ID" maxlength="10" ></td>
    <td rowspan="2"><input type="image" src="template/'.$core['config']['template'].'/images/login.png" width="55" height="55" onclick="uss_login_form.submit();" style=" padding-left:10PX"></td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 20px;"><input type="password" name="uss_password"  style="width:150px" id="pvp-login-username" value="PASSWORD" maxlength="12" OnClick="this.value=\'\'"><input type="hidden" name="process_login"></td>
  </tr>
    <tr>
    <td style="height: 25px; padding-left: 20px;" colspan="2" align="left" class="yellow"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">'.link_lost_password.'</a></td>
  </tr>
     <tr>
    <td style="height: 25px; padding-left: 20px;" colspan="2" align="left"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">'.link_sign_up.'</a></td>
  </tr>
</table>
</form>';
		  }
		  ?>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
		      <div id="block-views-latest_articles-block_2" class="clear-block block block-views">
		        <h2>Estatisticas</h2>
		        <div class="content">
		          <div class="view view-latest-articles view-id-latest_articles view-display-id-block_1 view-dom-id-4">
		            <div class="view-content">
		              <div class="item-list">
		                <ul>
		                  <div class="menu-loginlf">
		                  <td colspan="2"><table align="center" style="width: 80%;" cellspacing=;"0" cellpadding="0">
		                    <tr>          
		                    <tr>
		                      <td class="style16" ><table  style="width: 100%; text-align:left;" cellspacing="0" cellpadding="0">
	                            <tr>
	                              <?
//Estadisticas Usuarios

$statistics_accounts=mssql_query("SELECT count(*) memb___id FROM MuOnline.dbo.MEMB_INFO");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['accounts_reults']=$row['memb___id'];
?>

                                  
	                              <td width="258" style="color:#ffd308;"><strong>Vers&atilde;o: Season 6 Ep 2</strong></td>
	                              <td width="1" style="color:#ffd308;"></td>
	                              <?

}
?>
                                </tr>
	                            <tr>
	                              <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
	                              <td style="color:#ffd308;"><strong>Exp: 25x</strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
                                
                                <tr>
	                              <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
	                              <td style="color:#ffd308;"><strong>Drop: 30x</strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
                                
                                <tr>
	                              <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
	                              <td style="color:#ffd308;"><strong>Uptime: 99%</strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
                                
                                
                                <tr>
	                              <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
	                              <td style="color:#ffd308;"><strong>Resets: OFF</strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
                                
                                
	                            <tr>
	                              <?
//Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
	                              <td style="color:#ffd308;"><strong>Anti-Hacker: PS Silent</strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
	                            <tr>
	                              <?
//Estadisticas Usuarios Conectados

$statistics_players=mssql_query("SELECT count(*) ConnectStat FROM MuOnline.dbo.MEMB_STAT WHERE ConnectStat='1'");
while($row=mssql_fetch_assoc($statistics_players)){
$core['config']['statistics_results']=$row['ConnectStat'];
?>
	                              <td class="stadisticas_td_bg"><strong>
	                                <hr>
	                                </strong></td>
	                              <td class="stadisticas_td_bg"></td>
	                              <?

}
?>
                                </tr>
	                            </table></td>
	                        </tr>
		                    <td style="height:5px;"></td>
		                                </table>
		                    <table align="center" style="width: 80%;" cellspacing=;"0" cellpadding="0">
		                      <tr>
	                          <tr>
		                          <td class="style16" ><table style="width: 100%; text-align:left;" cellspacing="0" cellpadding="0">
		                            <tr>
		                              <td width="179" class="stadisticas_td_bg"><strong>Server</strong>:</td>
		                              <td width="52" class="stadisticas_td_bg" style="width: 52px"><? include("config/servidor.php"); ?></td>
	                                </tr>
		                            <tr>
		                              <td class="stadisticas_td_bg"><strong>Castle Siege</strong>:</td>
		                              <td class="stadisticas_td_bg"><? include("config/estadocs.php"); ?></td>
	                                </tr>
		                            <tr>
		                              <td></td>
		                              <td></td>
	                                </tr>
		                            </table>
		                            <table  style="width: 100%; text-align:left;" cellspacing="0" cellpadding="0">
		                              <tr>
		                                <?
//Estadisticas Usuarios

$statistics_accounts=mssql_query("SELECT count(*) memb___id FROM MuOnline.dbo.MEMB_INFO");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['accounts_reults']=$row['memb___id'];
?>
		                                <td width="179" class="stadisticas_td_bg"><strong>Contas</strong>:</td>
		                                <td width="52" class="stadisticas_td_bg"><?=$core['accounts_reults'];?></td>
		                                <?

}
?>
	                                  </tr>
		                              <tr>
		                                <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
		                                <td class="stadisticas_td_bg"><strong>Personagens</strong>:</td>
		                                <td class="stadisticas_td_bg"><?=$core['character_reults'];?></td>
		                                <?

}
?>
	                                  </tr>
		                              <tr>
		                                <?
//Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
		                                <td class="stadisticas_td_bg"><strong>Guilds</strong>:</td>
		                                <td class="stadisticas_td_bg"><?=$core['guild_reults'];?></td>
		                                <?

}
?>
	                                  </tr>
		                              <tr>
		                                <?
//Estadisticas Usuarios Conectados

$statistics_players=mssql_query("SELECT count(*) ConnectStat FROM MuOnline.dbo.MEMB_STAT WHERE ConnectStat='1'");
while($row=mssql_fetch_assoc($statistics_players)){
$core['config']['statistics_results']=$row['ConnectStat'];
?>
		                                <td class="stadisticas_td_bg"><strong>Usuarios Conectados</strong>:</td>
		                                <td class="stadisticas_td_bg"><?=$core['config']['statistics_results'];?></td>
		                                <?

}
?>
	                                  </tr>
	                                </table></td>
	                          </tr>
		                      <td style="height:5px;"></td>
	                                    </table>
                        </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
		      <div id="block-views-latest_articles-block_1" class="clear-block block block-views">
		        <h2>
		          <?=text_menu?>
	            </h2>
		        <div class="content">
		          <div class="view view-latest-articles view-id-latest_articles view-display-id-block_1 view-dom-id-4">
		            <div class="view-content">
		              <div class="item-list">
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
					   				echo '<li class="list_menu"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="list_menu"><a href="'.$li[10].'" target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li> ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
		      <div id="block-views-latest_articles-block_1" class="clear-block block block-views">
		        <div class="content">
		          <div class="view view-latest-articles view-id-latest_articles view-display-id-block_1 view-dom-id-4">
		            <div class="view-content">
		              <div class="item-list">
		                <ul>
		                  <div class="menu-loginlf2">
		                  <?
$load_pages_lef = file('engine/cms_data/pag_d.cms');
foreach ($load_pages_lef as $pages_loaded_lef){
	$pages_loaded_lef = explode(",",$pages_loaded_lef);
	if($pages_loaded_lef[3] == $page_check_id){
		$p_loaded_array_lef = preg_split( "/\ /", $pages_loaded_lef[4]); 
		$p_l_lef = '1';
		break;
	}
}
if($p_l_lef == '1'){
$load_mods_lef = file('engine/cms_data/mods.cms');
foreach ($load_mods_lef as $mods_loaded_lef){
	$mods_loaded_lef = explode(",",$mods_loaded_lef);

	if(in_array($mods_loaded_lef[0],$p_loaded_array_lef)){
		$_c_id_m_lef[] = $mods_loaded_lef[0];
	}else {
		$_c_id_m_lef[] = 'NULL';
	}
}
$co=0;
foreach ($p_loaded_array_lef as $give_lef){
	#echo $give;
	if(in_array($give_lef,$_c_id_m_lef)){
		foreach ($load_mods_lef as $give_me_out_lef){
			$give_me_out_lef = explode(",",$give_me_out_lef);
			if($give_me_out_lef[0] == $give_lef){
				if($give_me_out_lef[4] == '1'){
					echo '
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 15px; ">
		  <tr>
		  <td width="2" height="33"><img src="template/'.$core['config']['template'].'/images/left_title_side.gif" width="2" height="33"></td>
		  <td class="tmp_left_title">'.htmlspecialchars(str_replace($modules_text_tile,$modules_text_translate,$give_me_out_lef[3])).'</td>
		  <td width="2" height="33"><img src="template/'.$core['config']['template'].'/images/left_title_right.gif" width="2" height="33"></td>
		  </tr>
		  </table>
		  <div class="tmp_left_m">
		   <div class="right_page_content">';
				
					
				if($give_me_out_lef[1] == '1'){
					$mod_file_lef = $give_me_out_lef[2];
					if(is_file('pages_modules/'.$mod_file_lef.'')){
						include('pages_modules/'.$mod_file_lef.'');
					}else{
						echo 'Unable to load module file, reason: not found.';
					}
				}elseif ($give_me_out_lef[1] == '0'){
					if(is_file('engine/cms_data/cms_co/'.$give_me_out_lef[0].'_cms.cms')){
						include('engine/cms_data/cms_co/'.$give_me_out_lef[0].'_cms.cms');
					}else{
						echo 'Unable to load module content, reason: not found.';
					}
					
					#echo $give_me_out_lef[4];
				}
				
				echo '</div></div>';
				}
			}
		}
		#echo $module;
	}
}
}
      ?>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
		      <div id="block-menu-menu-fp-top-right" class="clear-block block block-menu">
		        <div class="content">
		          <ul class="menu">
		            <li class="leaf last"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads" title="" class="menu_icon menu-1418">Download Do Cliente</a></li>
	              </ul>
	            </div>
	          </div>
		      <div id="block-menu-menu-fp-bottom-right" class="clear-block block block-menu"></div>
		      <div id="region_sidebar_bottom"></div>
	        </div>
		    <div style="clear:both;"></div>
	      </div>
		  <div id="lol-footer" role="contentinfo" class="i18n-es">
		    <div class="section">
    <div id="lol-footer-top">
      <div id="lol-footer-info">
        <a href="<?=FACEBOOK_LINK;?>" class="logo-riotgamescom hidden-text" alt="Logotipo de Riot Games" target="_blank"></a>        <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>register" class="play-free-link" target="_blank">Registre-Se</a>        <a href="#" class="logo-pvpnet hidden-text" alt="Logotipo PvP.net" target="_blank"></a>        
        <div id="lol-footer-copyright">
         <?=build_footer();?>
        </div>
    </div>
    </div>
  </div>
</div>

  </div>
	</body>
</html>
