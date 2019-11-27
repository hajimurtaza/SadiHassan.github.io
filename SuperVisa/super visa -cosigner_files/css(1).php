@charset "UTF-8";

/* --- adqn.css --- */


.adqnNodeNavForm {
	display: inline-block;
	line-height: 24px;
}

/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	padding: 5px 15px;
margin-bottom: 15px;
margin-left: 15px;
border-left: 2px solid #DB291C;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}

	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-size: 12px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
background-color: #FFFFFF;

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(226, 236, 241);
background-repeat: repeat-x;
background-position: top;
word-wrap: normal;
overflow: auto;
line-height: 26px;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;
background-image: -webkit-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image: -moz-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image: -ms-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image: -o-repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);
background-image: repeating-linear-gradient(top, rgba(0,0,0,.015) 0px, rgba(0,0,0,.015) 26px, rgba(0,0,0,.045) 26px, rgba(0,0,0,.045) 52px);

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	border-left: 2px solid #DB291C;

}

.bbCodeQuote .attribution
{
	font-size: 12px;
color: rgb(22, 22, 22);
background-color: #FFFFFF;
background-repeat: repeat-x;
background-position: top;

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;

	font-style: italic;
font-size: 12px;
color: rgb(114, 114, 114);
background-repeat: repeat-x;
background-position: top;
margin-top: 5px;

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}

		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{
		display: none;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 70px;
		left: 0;
		right: 0;

		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: rgb(138, 162, 174);
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top,  0%,  80%);
		background: -moz-linear-gradient(top,  0%,  80%);
		background: -o-linear-gradient(top,  0%,  80%);
		background: linear-gradient(to bottom,  0%,  80%);

		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}

	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}

	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}

	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}

	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}

	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}

	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}

.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}

.hasJs .bbCodeSpoilerText
{
	display: none;
	color: rgb(114, 114, 114);
background-color: #F0F0F0;
padding: 15px;
border: 0 solid #ccc;
border-top-style: solid;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}

.NoJs .bbCodeSpoilerContainer
{
	background-color: #151515; /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}

		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- cv_footer.css --- */

.cv-footer {
	border-top: 2px solid #000;
	background: #333;
	color: #999;
	font-weight: 300;
	font-size: 14px;
	overflow: hidden;
	line-height: 1.42857143;
}

.t3-module .module-inner {
	padding: 0;
}


.t3-footnav .t3-module {
	background: #333;
	color: #999;
	margin-top: 10px;
	margin-bottom: 10px;
}

.t3-module {
	background: url(rgba.php?r=0&g=0&b=0&a=0); background: rgba(0, 0, 0, 0); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000,endColorstr=#00000000);
	color: inherit;
	margin-bottom: 20px;
}

.t3-service .t3-module, .t3-footnav .t3-module {
	margin: 15px 15px;
}

@media screen and (min-width: 768px){
	.t3-module {
		margin-bottom: 20px;
	}
}

.module-ct:before, .module-ct:after {
	content: " ";
	display: table;
}

.module-ct:after {
	clear: both;
}


.t3-footnav .t3-module .module-title {
	color: #fff;
	font-size: 18px;
	margin-bottom: 10px;
}

.cv-footer .module-title {
	text-transform: inherit;
}

.module-title {
	background: url(rgba.php?r=0&g=0&b=0&a=0); background: rgba(0, 0, 0, 0); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000,endColorstr=#00000000);
	color: #000;
	font-size: 28px;
	margin: 0 0 10px 0;
	padding: 0;
	font-weight: 800;
}


@media screen and (min-width: 768px) {
	.t3-footnav {
		padding: 40px 0;
	}
}

.t3-footnav .t3-module ul > li {
	line-height: 24px;
}

.nav-pills > li {
	float: left;
}
.nav-stacked > li {
	float: none;
}
.nav > li {
	position: relative;
	display: block;
}

.cv-footer .nav > li > a:first-child {
	padding: 0 0 5px 0;
}
.t3-footnav .t3-module ul > li > a {
	color: #999;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}
.cv-footer .nav > li > a {
	padding: 5px 0;
}
.cv-footer .nav-pills > li > a {
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}
.nav-pills > li > a {
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}
.nav-pills > li > a {
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}
.nav > li > a {
	position: relative;
	display: block;
	padding: 10px 15px;
}

.t3-footnav .t3-module ul > li:before {
	content: "\f105";
	font-family: FontAwesome;
	float: left;
	padding-right: 10px;
}

.t3-footnav .t3-module .footer-social ul li {
	list-style: none;
}
.t3-footnav .t3-module ul > li {
	line-height: 24px;
}
.cv-footer .nav > li > a:first-child {
	padding: 0 0 5px 0;
}

.cv-footer .footer-social li {
	margin: 0;
	padding: 0 5px;
	float: left;
	list-style: none;
	font-size: 16px;
}
.footer-social li {
	margin: 0;
	padding: 0 5px;
	float: left;
	list-style: none;
	font-size: 16px;
}

.t3-footnav .t3-module .footer-social ul li:before {
	content: '';
}

.cv-footer .footer-social ul {
	margin: 0;
	padding: 0;
}
.t3-footnav .t3-module ul {
	list-style: none;
	margin-left: 0;
	margin-bottom: 0;
	padding-left: 0;
}

.phone {
	font-size: 1.3em;
}





.agnes-copyright {
	font-size: 12px;
	padding: 22px 0 0;
	background: #000;
	color: #999;
	border-top: 1px solid #333;
	line-height: 1.42857143;
}


.copyright {
	margin-bottom: 20px;
}

.list-inline {
	padding-left: 0;
	list-style: none;
	margin-left: -5px;
}

.list-unstyled {
	padding-left: 0;
	list-style: none;
}

.list-inline > li {
	display: inline-block;
	padding-left: 5px;
	padding-right: 5px;
}



.agnes-copyright a {
	color: #707070;
}

.cv-footer p, 
.agnes-copyright p {
	margin: 0 0 10px;
}







.t3-footnav .t3-module ul > li > a:hover, .t3-footnav .t3-module ul > li > a:active, .t3-footnav .t3-module ul > li > a:focus {
	color: #337ab7;
	text-decoration: none;
}

/* --- cv_mainNav.css --- */

.header_nav {
	display: inline-block;
	vertical-align: middle;
	line-height: 34px; /* height of search */
}

.cv_mainNav {
	float: left;
}

.cv_mainNav > li {
	display: inline-block;
}

.cv_mainNav > li > a {
	font-weight: 400;
	font-size: 12px;
	padding: 0px 10px;
	color: #151515;
}

.cv_mainNav > li > a:hover {color: #DB291C; text-decoration: none;}

.cv_mainNav > li.active > a {font-weight: bold; color: #DB291C;}

/* --- funbox.css --- */

.funzone img {
	max-width: 100%;
}

.funzone.funbox_left {
	float: left;
}
.funzone.funbox_center {
	margin: 0 auto;
	text-align: center;
}
.funzone.funbox_right {
	float: right;
}

@media( max-width: 520px) {
	.dfpHideMobile {
		display: none;
	}
}

@media( min-width: 521px) and (max-width: 800px) {
	.dfpHideTabletPortrait {
		display: none;
	}
}

@media( min-width: 801px) and (max-width: 1050px) {
	.dfpHideTabletLandscape {
		display: none;
	}
}

@media( min-width: 1051px) {
	.dfpHideDesktop {
		display: none;
	}
}

/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar .pageContent 
{
	color: #F8F8F8;
background-color: #337AB7;

}

	

	#loginBar .pageContent
	{
		padding-top: 0;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgba(255,255,255,.8);

	}

	#loginBar form
	{
		padding: 20px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}

		#loginBar .xenForm .ctrlUnit,
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}

		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}

	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}

	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: #FFFFFF;
background: url(rgba.php?r=0&g=0&b=0&a=38); background: rgba(0, 0, 0, 0.15); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#26000000,endColorstr=#26000000);
border-color:  rgb(0, 0, 0); border-color:  rgba(0, 0, 0, 0.15); _border-color:  rgb(0, 0, 0);

	}

	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: url(rgba.php?r=0&g=0&b=0&a=38) !important; background: rgba(0, 0, 0, 0.15) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#26000000,endColorstr=#26000000);
		color: #FFFFFF;
	}

	#loginBar .textCtrl:focus
	{
		background: url(rgba.php?r=0&g=0&b=0&a=76) none; background: rgba(0, 0, 0, 0.3) none; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4C000000,endColorstr=#4C000000);

	}

	#loginBar input.textCtrl.disabled
	{
		color: rgb(55, 55, 55);
background-color: #000;
border-style: dashed;

	}

	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}

		#loginBar .button.primary
		{
			font-weight: bold;
		}

/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 720px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right:  1px dotted rgb(248, 248, 248); border-right:  1px dotted rgba(248, 248, 248, .5); _border-right:  1px dotted rgb(248, 248, 248);
		margin-right: 220px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 0;
		width: 200px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}

/** handle **/

#loginBar #loginBarHandle label 
{
	font-weight: bold;
font-size: 12px;
color: #FFF;
background-color: #337AB7;
padding: 0 15px;
-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
-webkit-border-bottom-right-radius: 4px; -moz-border-radius-bottomright: 4px; -khtml-border-bottom-right-radius: 4px; border-bottom-right-radius: 4px;
-webkit-border-bottom-left-radius: 4px; -moz-border-radius-bottomleft: 4px; -khtml-border-bottom-left-radius: 4px; border-bottom-left-radius: 4px;
position: absolute;
right: 0;
display: inline-block;
text-align: center;
z-index: 1;
line-height: 30px;
height: 30px;

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 0;
		padding-top: 20px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 200px;
		margin: 0 auto;
	}
}
@media (max-width:610px)
{
	.Responsive #loginBar .xenForm .ctrlUnit > dd {padding-left: 0; padding-right: 0;}
	.Responsive #loginBar form.eAuth #eAuthUnit {width: auto; margin-left: 20px; margin-right: 20px;}
}



/* --- message.css --- */



.messageList
{
	
}

.messageList .message
{
	margin: 20px auto;

	background-color: #fff;
padding: 0;
border: 0 solid rgb(187, 187, 187);
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
-webkit-box-shadow: 0 2px 3px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 3px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 3px rgba(0,0,0,.25); box-shadow: 0 2px 3px rgba(0,0,0,.25);

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo
{
	background-color: transparent;
padding: 0;
border-bottom: 1px none black;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: inherit;
color: #337AB7;
padding: 0;
margin: 0;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
float: right;
text-transform: uppercase;


	}
		

	.message .messageContent
	{
		padding: 15px 0;
min-height: 40px;
overflow: hidden;
*zoom: 1;

	}
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow: hidden;
	}
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(55, 55, 55);
	}

	.message .signature
	{
		font-size: 9pt;
color: rgb(114, 114, 114);
background-color: #F0F0F0;
padding: 15px;
margin: 15px -15px -15px;
border-width: 0;
-webkit-box-shadow: 0px 2px 0 rgba(0,0,0,.25) inset; -moz-box-shadow: 0px 2px 0 rgba(0,0,0,.25) inset; -khtml-box-shadow: 0px 2px 0 rgba(0,0,0,.25) inset; box-shadow: 0px 2px 0 rgba(0,0,0,.25) inset;

	}

	
		.hasJs .signature.uix_signatureCut .uix_signature { pointer-events: none; }

		.signature.uix_signatureCut.uix_signatureExpanded .uix_signature { pointer-events: auto; }

		.uix_signatureWrapperInner {
			position: relative;
			max-height: 100px;
			transition: max-height 0.3s ease-in-out;
			overflow-y: hidden;
		}

		.NoJs .uix_signatureWrapperInner { max-height: none; }

		.signature.is-notCollapsible .uix_signatureWrapperInner { max-height: none; }

		.uix_signatureToggle {
			font-size: 11px;
color: #DB291C;
margin-right: auto;
margin-left: auto;
text-align: center;


			display: none;
			cursor: pointer;

			
			position: relative;
			z-index: 1;
		}
		
		.signature.uix_signatureCut .uix_signatureToggle {
			display: inline-block;
		}

		.NoJs .uix_signatureToggle { display: none; }

		.signature.is-notCollapsible .uix_signatureToggle { display: none; }

		

		

		.uix_signatureExpand { display: none; }

		.signature.uix_signatureCut .uix_signatureExpand { 
			display: inline; 
			padding: 5px;
		}

		.signature.uix_signatureExpanded .uix_signatureExpand { display: none; }

		.uix_signatureCollapse { display: none; }

		.signature.uix_signatureExpanded .uix_signatureCollapse { 
			display: inline; 
			padding: 5px;
		}

		

			.uix_signatureCollapse__phrase--hover { display: none; }

			.uix_signatureExpand__phrase--hover { display: none; }

		


		.uix_signatureCover {
			display: none;
			opacity: 0;
			-webkit-transition: opacity 0.3s ease-out;
			transition: opacity 0.3s ease-out;
			-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			padding-top: 33.333333333333px;
			text-align: center;

			background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #fff 80%);
			background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #fff 80%);
			background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0%, #fff 80%);
			background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #fff 80%);
		}

		.signature.uix_show .uix_signatureCover { display: block; }

		.signature.uix_signatureExpanded.uix_show .uix_signatureCover {	display: block; }

		.signature.uix_signatureCut .uix_signatureCover
		{
			display: block;
			opacity: 1;
		}

		.signature.uix_signatureExpanded .uix_signatureCover
		{
			display: none;
			opacity: 0;
		}

		.NoJs .uix_signatureCover { display: none !important; }

		.signature.is-notCollapsible .uix_signatureCover { display: none !important; }

	

	.message .messageMeta
	{
		font-size: 11px;
padding: 15px;
margin: 15px -15px -15px;
border-top: 1px solid rgb(187, 187, 187);
overflow: hidden;
zoom: 1;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
				.message .messageMeta .control
				{
					color: rgb(114, 114, 114);
padding-right: 8px;
padding-left: 8px;
margin: 0 1px 4px 0;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
line-height: 1;
float: none;
display: inline-block;
vertical-align: bottom;

				}
					.message .messageMeta .control:focus
					{
						
					}
					.message .messageMeta .control:hover
					{
						color: #337AB7;
text-decoration: none;

					}
					.message .messageMeta .control:active
					{
						color: #337AB7;
background-color: transparent;

					}
	/*** multiquote +/- ***/

	

		.messageNotices li
	{
		font-size: 11px;
color: rgb(138, 162, 174);
background-color: rgb(226, 236, 241);
padding: 15px;
margin-bottom: 15px;
border: 1px solid rgb(166, 188, 198);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/canadavisa/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	.message .likesSummary
	{
		color: #333;
background-color: rgb(226, 236, 241);
padding: 10px;
margin-top: 15px;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

	}
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background-color: rgb(224, 247, 250);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(224, 247, 250);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid #F0F0F0;
	background: #F8F8F8 url(styles/canadavisa/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{
	overflow: hidden; zoom: 1;
	color: #ccc;
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(55, 55, 55);
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		-webkit-border-top-right-radius: 4px; -moz-border-radius-topright: 4px; -khtml-border-top-right-radius: 4px; border-top-right-radius: 4px;
	}
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:610px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}
	

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	.Responsive .message .signature
	{
		display: none;
	}
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	background-color: #F8F8F8;
border: 0px solid rgb(187, 187, 187);
border-right-width: 1px;
float: left;
width: 180px;

}

	.messageUserBlock
	{
		
		position: relative;
	}
		.messageUserBlock div.avatarHolder
		{
			padding: 15px 20px;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;
text-align: center;


			position: relative;
		}
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: 14px;
				left: 19px;
				
				color: rgb(127, 185, 0);
border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
-webkit-border-bottom-left-radius: 3px; -moz-border-radius-bottomleft: 3px; -khtml-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px;
top: -1px;
left: -1px;

			}
		.messageUserBlock h3.userText
		{
			padding: 5px 20px;
border: 0 solid rgb(187, 187, 187);
text-align: center;

		}
		.messageUserBlock .userBanner
		{
			display: block;
			margin-bottom: 5px;
			margin-left: -26px;
			margin-right: -26px;
		}
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
		.messageUserBlock a.username
		{
			color: #333;
display: block;
overflow: hidden;
text-align: center;
font-weight: 500;

		}
		.messageUserBlock .userTitle
		{
			font-size: 11px;
display: block;
clear: both;

		}
		.messageUserBlock .extraUserInfo
		{
			font-size: 11px;
padding: 5px 20px 15px;
border: 0 solid rgb(187, 187, 187);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;

		}
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
			
			.messageUserBlock .extraUserInfo dl:first-child {margin-top: 0;}

			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			border: 10px solid transparent;
			border-left-color: rgb(187, 187, 187);
			-moz-border-left-colors: rgb(187, 187, 187);
			border-right: none;
			/* Hide from IE6 */
			_display: none;
		}
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				border: 10px solid transparent;
				border-left-color: ;
				-moz-border-left-colors: ;
				border-right: none;
			}



	/*** UIX -- USER INFO -- COLLAPSIBLE USER BLOCK ***/

	.messageUserBlockToggle {
		color: rgb(114, 114, 114);
background-color: #F8F8F8;
float: right;
cursor: pointer;
text-align: center;
line-height: 16px;


		display: none;
	}

	.messageUserBlock.is-collapsed .messageUserBlockToggle .uix_icon-collapse { display: none; }

	.messageUserBlock.is-expanded .messageUserBlockToggle .uix_icon-expand { display: none; }

	@media (min-width: 611px) {

		.messageUserBlock .messageUserBlockToggle { display: inline-block; }

		

		
			.messageUserBlock.messageUserBlock--hasCollapsibleElements .extraUserInfo { display: none; }
		

		.messageUserBlock.is-collapsed h3.userText {
			
			border-bottom-width: 0;
		}

		

	}




/* clearfix */ .uix_userTextInner { zoom: 1; } .uix_userTextInner:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }


@media (max-width:610px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto;
		margin-bottom: 5px;
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
		-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none !important;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- moderator_bar.css --- */

#moderatorBar
{
	background-color: #000;
	border-bottom: 1px solid #ccc;	
	font-size: 11px;
}

/*#moderatorBar
{
	-webkit-box-shadow: 0 0 5px #999; -moz-box-shadow: 0 0 5px #999; -khtml-box-shadow: 0 0 5px #999; box-shadow: 0 0 5px #999;
	width: 100%;
	position: fixed;
	top: 0px;
	z-index: 100;
}

body
{
	padding-top: 25px;
}*/

/* clearfix */ #moderatorBar { zoom: 1; } #moderatorBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#moderatorBar .pageContent
{
	padding: 2px 0;
	overflow: auto;
}

#moderatorBar a
{
	display: inline-block;
	padding: 2px 10px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

#moderatorBar a,
#moderatorBar .itemCount
{
	color: #F0F0F0;
}

	#moderatorBar a:hover
	{
		text-decoration: none;
		background-color: #333;
		color: #F8F8F8;
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#moderatorBar .itemLabel,
#moderatorBar .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#moderatorBar .itemCount
{	
	background: #333;
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
	text-shadow: none;
}

	#moderatorBar .itemCount.alert
	{
		background: #e03030;
		color: white;
		-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	}
	
#moderatorBar .adminLink
{
	float: right;
}

#moderatorBar .permissionTest,
#moderatorBar .permissionTest:hover
{
	background: #e03030;
	color: white;
	-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	font-weight: bold;
}

/* --- share_page.css --- */

.sharePage
{
}

/* clearfix */ .sharePage { zoom: 1; } .sharePage:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.sharePage .shareControl
	{
		float: left;
	}
	
	.sharePage .tweet
	{
		margin-right: 30px;
	}

	.sharePage .facebookLike .label
	{
		font-size: 11px;
		line-height: 24px;
		float: left;
		margin-right: 7px;
		display: none;
	}
	
	.sharePage iframe
	{
		height: 20px;
	}
	
	.sharePage .facebookLike iframe
	{
		z-index: 52;
	}
	



@media (max-width:480px)
{
	.Responsive .sharePage
	{
		display: none;
	}
}


/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	border: 1px solid #F8F8F8;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
	background-image: url('styles/canadavisa/xenforo/gradients/form-button-white-25px.png');
}
	
	.thread_view .threadAlerts dt
	{
		color: rgb(187, 187, 187);
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: #333;
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/canadavisa/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: #FFFFFF;
	border: 1px solid #F0F0F0;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

/* CSS returned from cache. */