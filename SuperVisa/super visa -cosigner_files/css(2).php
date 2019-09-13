@charset "UTF-8";

/* --- uix.css --- */














	









	




	




	





	




	
		
	
	
	
		
	




	







.dataTable tr.dataRow th,
.discussionListFilters .removeFilter,
.discussionListFilters .removeAllFilters,
.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic,
.inlineCtrlGroup,
.PrefixMenu .PrefixGroup h3 { background-image: none; }

.MultiQuoteItem {border-bottom: 1px solid rgb(166, 188, 198);}

.MultiQuoteItem .messageInfo {
	background: rgb(226, 236, 241);
}

.MultiQuoteItem .avatarHolder {
	border-right: 1px solid rgb(166, 188, 198);
}

.importantMessage {
	background: rgb(245, 249, 251);
	border: 2px solid rgb(138, 162, 174);
	color: rgb(138, 162, 174);
	font-weight: bold;
	padding: 20px;
	margin: 20px 0;
}

.prefix.prefixPrimary {border-color: rgb(187, 187, 187);}

.prefix.prefixRed        { color: white; background-color: #e74c3c; border-color: #e74c3c; }
.prefix.prefixGreen      { color: white; background-color: #27ae60; border-color: #27ae60; }
.prefix.prefixOlive      { color: black; background-color: #16a085; border-color: #16a085; }
.prefix.prefixLightGreen { color: black; background-color: #2ecc71; border-color: #2ecc71; }
.prefix.prefixBlue       { color: white; background-color: #2980b9; border-color: #2980b9; }
.prefix.prefixRoyalBlue  { color: white; background-color: #2c3e50; border-color: #2c3e50;  }
.prefix.prefixSkyBlue    { color: black; background-color: #3498db; border-color: #3498db; }
.prefix.prefixGray       { color: black; background-color: #bdc3c7; border-color: #bdc3c7; }
.prefix.prefixSilver     { color: black; background-color: #7f8c8d; border-color: #7f8c8d; }
.prefix.prefixYellow     { color: black; background-color: #f1c40f; border-color: #f1c40f; }
.prefix.prefixOrange     { color: black; background-color: #e67e22; border-color: #e67e22; }

.userBanner.bannerStaff {background: #337AB7; color: #FFF; border-color: transparent;}

.userBanner.bannerStaff.wrapped span {background: url(rgba.php?r=0&g=0&b=0&a=178); background: rgba(0,0,0,.7); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#B2000000,endColorstr=#B2000000);}

.userBanner.wrapped span {top: -5px;}

.conversation_view .message:first-child,
.messageList .message:first-child,
.thread_view .pageNavLinkGroup + .section {margin-top: 0;}

.avatarHeap ol {margin: -4px;text-align: center;}

.avatarHeap li {float: none; display: inline-block; margin: 4px;}

.LikeText a {
	font-weight: bold;
	color: inherit;
}

.funbox
{
	overflow: hidden;
	margin: 20px 0;
}

.funbox img {max-width: 100%;}
.funbox {text-align: center;}





#logoBlock .funbox,
#logoBlock .funbox .section
{
	margin: 0;
}
#logoBlock .funbox .funboxWrapper
{
	vertical-align: middle;
	display: inline-block;
	line-height: normal;
}



	#logoBlock .funbox
	{
		float: right;
		line-height: 76px;
		*line-height: 80px;
		height: 80px;
		margin-left: 20px;
	}

	@media (max-width: 480px)
	{
		.Responsive #logoBlock .funbox
		{
			height: auto;
			line-height: normal;
			text-align: center;
			float: none;
			margin-left: 0;
		}
	}


@media (max-width: 480px)
{
	#logoBlock .funbox
	{
		margin-bottom: 20px;
	}
}



	/*** UIX PANELS -- BREAKPOINTS ***/

	.navTab--panelTrigger { display: none !important; }

	.Responsive #userBar.uix_offCanvasVisitorTabs.uix_noUserBarContent { display: none; }


	/*** UIX PANELS -- PUBLIC TABS BREAKPOINT IF NAVIGATION TYPE SIDE PANEL ***/

	
		
			
				
			
		

		@media screen and (max-width: 800px) {

			.Responsive #navigation .publicTabs .navTab:not(.navTab--navPanelTrigger):not(.selected) { display: none !important; }

			.Responsive #navigation .publicTabs .selected .navLink,
			.Responsive #navigation .publicTabs .selected .SplitCtrl { display: none !important; }

			.Responsive .navTab--navPanelTrigger {display: list-item !important;}

		}
	


	/*** UIX PANELS -- VISITOR TABS BREAKPOINT IF VISITOR TYPE SIDE PANEL ***/

	

		
			
				
			
		

		@media screen and (max-width: 800px) {

			.Responsive .visitorTabs .navTab.account:not(.navTab--panelTrigger),
			.Responsive .visitorTabs .navTab.inbox,
			.Responsive .visitorTabs .navTab.alerts {
				display: none !important;
			}

			.Responsive .navTab--visitorPanelTrigger {display: list-item !important;}

		}
	

	/*** UIX PANELS -- SIDEBAR BREAKPOINT IF SIDEBAR SIDE PANEL ***/

	

	.uix_panels.is-triggered .sticky_wrapper,
	.uix_panels.is-animating .sticky_wrapper {
		position: static !important;
		margin-left: 0 !important;
		margin-right: 0 !important;
	}

	.uix_panels.is-triggered .uix_mainSidebar.sticky .inner_wrapper,
	.uix_panels.is-animating .uix_mainSidebar.sticky .inner_wrapper {
		position: static !important;
	}

	.hasJs #userBar { display: none; }

	.uix_panels {
		position: relative;
		overflow: hidden;
		
		width: 100%;
		min-height: 100vh;
	}

	.mainPanelWrapper {
		position: relative;
		min-height: 100vh;
		left: 0px;
	}

	.sidePanelWrapper {
		width: 250px; 

		position: absolute;
		top: 0px;
		bottom: 0px;
		-webkit-backface-visibility: hidden;

		color: #151515;
background-color: #F0F0F0;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
width: 300px;

	}

	
	.uix_panels.is-leftShowing .mainPanelWrapper,
	.uix_panels.is-leftShowing .sidePanelWrapper--left {
		overflow-x: hidden;
	}


	/*** PANEL OVERLAY MASKS ***/

	@-webkit-keyframes panelMaskIn {
		from {opacity: 0;}
		to {opacity: 0.6;}
	}

	@keyframes panelMaskIn {
		from {opacity: 0;}
		to {opacity: 0.6;}
	}

	@-webkit-keyframes panelMaskOut {
		from {opacity: 0.6;}
		to {opacity: 0;}
	}

	@keyframes panelMaskOut {
		from {opacity: 0.6;}
		to {opacity: 0;}
	}

	.uix_panelMask {
		visibility: hidden;
		width: 100%;
		height: 100%;

		z-index: 1001;

		position: absolute;
		top: 0px;
		left: 0px;

		background: #333;

		opacity: 0;
		-webkit-animation: panelMaskOut 100ms linear;
		animation: panelMaskOut 100ms linear;
	}

	.uix_panels.is-triggered .mainPanelWrapper .uix_panelMask,
	.uix_panels.is-leftTriggered .sidePanelWrapper:not(.sidePanelWrapper--left) .uix_panelMask,
	.uix_panels.is-rightTriggered .sidePanelWrapper:not(.sidePanelWrapper--right) .uix_panelMask {
		visibility: visible;

		opacity: 0.6;
		-webkit-animation-name: panelMaskIn;
		animation-name: panelMaskIn;
	}

	

	
		
		
	

	

	.uix_panels:not(.is-animating):not(.is-leftShowing) .sidePanelWrapper--left,
	.uix_panels:not(.is-animating):not(.is-leftShowing) .sidePanelWrapper--left *,
	.uix_panels:not(.is-animating):not(.is-rightShowing) .sidePanelWrapper--right,
	.uix_panels:not(.is-animating):not(.is-rightShowing) .sidePanelWrapper--right * {
		visibility: hidden !important;
	}


	/*** UIX PANELS -- ANIMATIONS ***/

	
	

	.mainPanelWrapper,
	.sidePanelWrapper {
		-moz-transition: -moz-transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms; /* Older Firefox */
		-o-transition: -o-transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms;
		-o-transition: transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms;

		-webkit-transition: -webkit-transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms; /* Older Android Browser  */
		transition: -webkit-transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms; /* Safari, iOS Safari, Blackberry Browser */
		transition: transform cubic-bezier(0.22, 0.61, 0.36, 1) 300ms; /* Chrome, Android Chrome, Firefox  */
	}

	


	/*** UIX PANELS -- ANIMATION TYPES ***/

	

	/*** UIX PANELS -- ANIMATIONS -- PUSH ***/

		.sidePanelWrapper,
		.mainPanelWrapper { z-index: 1; }

		.sidePanelWrapper--left { left: -300px; }

		.sidePanelWrapper--right { right: -300px; }

		.uix_panels.is-rightTriggered .mainPanelWrapper,
		.uix_panels.is-rightTriggered .sidePanelWrapper--right {
			-webkit-transform:  translate(-300px, 0); -moz-transform:  translate(-300px, 0); -o-transform:  translate(-300px, 0); -ms-transform:  translate(-300px, 0);transform: translate(-300px, 0);
		}

		.uix_panels.is-leftTriggered .sidePanelWrapper--right {
			-webkit-transform:  translate(300px, 0); -moz-transform:  translate(300px, 0); -o-transform:  translate(300px, 0); -ms-transform:  translate(300px, 0);transform: translate(300px, 0);
		}

		.uix_panels.is-leftTriggered .mainPanelWrapper,
		.uix_panels.is-leftTriggered .sidePanelWrapper--left {
		 	-webkit-transform:  translate(300px, 0); -moz-transform:  translate(300px, 0); -o-transform:  translate(300px, 0); -ms-transform:  translate(300px, 0);transform: translate(300px, 0);
		}

		.uix_panels.is-rightTriggered .sidePanelWrapper--left {
			-webkit-transform:  translate(-300px, 0); -moz-transform:  translate(-300px, 0); -o-transform:  translate(-300px, 0); -ms-transform:  translate(-300px, 0);transform: translate(-300px, 0);
		}

		

		

		

	


	


	

	


	/*** PANELS ***/

	.sidePanel {
		height: 100%;
		overflow-x: hidden;
		overflow-y: visible;
	}

	.sidePanel a {
		color: rgb(22, 22, 22);

	}

	.sidePanel a:hover {
		color: #337AB7;
text-decoration: none;

	}
	
	.sidePanel .sidePanel__blockLinksList ul.blockLinksList {
		padding: 0;
		margin: 0;
		width: 100%;
		background: transparent;
	}

	.sidePanel__blockLinksList a {
		padding: 8px 16px;
display: block;

	}

	.sidePanel__navTabs .blockLinksList .Popup .PopupControl.PopupOpen,
	.sidePanel__navTabs .blockLinksList .Popup.PopupContainerControl.PopupOpen {
		background-repeat: repeat-x;
background-position: top;
-webkit-border-top-left-radius: 4px; -moz-border-radius-topleft: 4px; -khtml-border-top-left-radius: 4px; border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px; -moz-border-radius-topright: 4px; -khtml-border-top-right-radius: 4px; border-top-right-radius: 4px;
-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;

	}

	.sidePanel__blockLinksList .visibilityForm {
		padding: 8px 16px;
display: block;

	}

	.sidePanel .sidePanel__blockLinksList .itemCount {
		-webkit-transform:  none; -moz-transform:  none; -o-transform:  none; -ms-transform:  none;transform: none;
		position: static;
		margin-top: -2px; 
	}
	.sidePanel .sidePanel__blockLinksList .itemCount.Zero {display: none;}

	.sidePanel .pairs dt,
	.sidePanel .pairsInline dt,
	.sidePanel .pairsRows dt,
	.sidePanel .pairsColumns dt,
	.sidePanel .pairsJustified dt {color: inherit;}

	/*** SIDE PANEL -- NAVTABS ***/

	.sidePanel__navTabs .navTab { position: relative; }

	.sidePanel__navTabs .navLink {
		display: block;
		color: #151515;
padding: 0 16px;
border:  1px solid rgb(255,255,255); border:  1px solid rgba(255,255,255, .1); _border:  1px solid rgb(255,255,255);
border-right-width: 0;
border-left-width: 0;
line-height: 50px;
font-weight: 500;
height: 50px;


		padding-right: 50px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	.sidePanel__navTabs .navLink:hover {
		color: #337AB7;
text-decoration: none;

	}

	.sidePanel__navTabs .navTab.selected .navLink {
		background-color: rgb(187, 187, 187);

	}

	.sidePanel__navTabs .SplitCtrl {
		display: block;
		height: 50px;
		width: 50px;

		position: absolute;
		right: 0;
		top: 0;

		line-height: 50px;
		text-align: center;
		color: #151515;
	}

	.sidePanel__navTabs .navTab.selected .SplitCtrl {
		color: ;
	}

	.sidePanel__navTabs .SplitCtrl:hover {
		text-decoration: none;
		color: #151515;
	}

	

	.sidePanel__navTabs .navTab .tabLinks {
		opacity: 0;
		max-height: 0;

		-moz-transition: opacity .3s linear, max-height .3s cubic-bezier(0.22, 0.61, 0.36, 1);
		-o-transition: opacity .3s linear, max-height .3s cubic-bezier(0.22, 0.61, 0.36, 1);
		-webkit-transition: opacity .3s linear, max-height .3s cubic-bezier(0.22, 0.61, 0.36, 1);
		transition: opacity .3s linear, max-height .3s cubic-bezier(0.22, 0.61, 0.36, 1);

		overflow: hidden;
	}

	.sidePanel__navTabs .navTab.is-active .tabLinks {
		opacity: 1;
		max-height: 600px;
	}

	.sidePanel__navTabs .navTab .blockLinksList {
		padding: 10px 0;
		background: transparent;
		border-bottom: none;
	}

	.sidePanel__navTabs .navTab .blockLinksList a {
		color: rgb(55, 55, 55);
padding: 12px 16px;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	.sidePanel__navTabs .navTab .blockLinksList a:hover {
		color: #337AB7;
background-color: transparent;
/* background-color: transparent; */

	}

	.sidePanel__navTabs .navTab .blockLinksList a:focus {
		color: inherit;
		background-color: inherit;
	}


	/*** SIDE PANELS -- TABS AND TAB PANELS ***/

	.sidePanel__tabPanels {
		position: relative;
	}

	.sidePanel__tabPanel {
		height: 0;

		-moz-transition: -moz-transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
		-o-transition: transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
		-o-transition: -o-transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
		-webkit-transition: -webkit-transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
		transition: -webkit-transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);
		transition: transform 0.3s cubic-bezier(0.22, 0.61, 0.36, 1);

		float: left;
		width: 100%;
	}

	.sidePanel__tabPanel.is-left {
		-webkit-transform:  translate3d(-300px, 0, 0); -moz-transform:  translate3d(-300px, 0, 0); -o-transform:  translate3d(-300px, 0, 0); -ms-transform:  translate3d(-300px, 0, 0);transform: translate3d(-300px, 0, 0);
		position: absolute;
		top: 0;
		overflow-y: hidden;
	}

	.sidePanel__tabPanel.is-right {
		-webkit-transform:  translate3d(300px, 0, 0); -moz-transform:  translate3d(300px, 0, 0); -o-transform:  translate3d(300px, 0, 0); -ms-transform:  translate3d(300px, 0, 0);transform: translate3d(300px, 0, 0);
		position: absolute;
		top: 0;
		overflow-y: hidden;
	}

	.sidePanel__tabPanel.is-active {
		-webkit-transform:  translate3d(0, 0, 0); -moz-transform:  translate3d(0, 0, 0); -o-transform:  translate3d(0, 0, 0); -ms-transform:  translate3d(0, 0, 0);transform: translate3d(0, 0, 0);
		display: block;
		height: auto;
		overflow-y: auto;
	}

	.sidePanel__tabPanel.is-hidden {
		visibility: hidden;
	}

	.hasFlexbox .sidePanel__tabs {
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;

		-webkit-justify-content: space-between;
		-ms-flex-pack: justify;
	        justify-content: space-between;
	}

	/* clearfix */ .not-flexbox .sidePanel__tabs { zoom: 1; } .not-flexbox .sidePanel__tabs:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	.hasFlexbox .sidePanel__tabs li {
		max-width: 50%;
		-webkit-flex: 1 1 auto;
		-ms-flex: 1 1 auto;
		flex: 1 1 auto;
	}

	.no-flexbox .sidePanel__tabs li {
		float: left;
	}

	a.sidePanel__tab {

		font-size: 14px;
color: rgba(255, 255, 255, 0.75);
background-color: #DB291C;
padding-right: 10px;
padding-left: 10px;
border-width: 0;
border-right-style: solid;
border-right-color:  rgb(255,255,255); border-right-color:  rgba(255,255,255, .1); _border-right-color:  rgb(255,255,255);
display: block;
cursor: pointer;
text-align: center;
line-height: 50px;
white-space: nowrap;
text-overflow: ellipsis;
overflow: hidden;
height: 50px;

	}

	a.sidePanel__tab:hover {color: rgba(255, 255, 255, 0.75);}

	a.sidePanel__tab.is-active {
		color: #FFFFFF;
-webkit-box-shadow: inset 0 -3px #FFFFFF; -moz-box-shadow: inset 0 -3px #FFFFFF; -khtml-box-shadow: inset 0 -3px #FFFFFF; box-shadow: inset 0 -3px #FFFFFF;
;
	}

	.sidePanelWrapper .itemCount {
		font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(233, 30, 99);
padding: 0 2px;
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 16px;

		margin-left: 6px;
display: inline-block;
vertical-align: top;
position: relative;
top: 50%;
-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);

	}

	.sidePanel__tabs .itemCount.Zero { display: none; }

	.sidePanel__textHeading {
		font-size: 14px;
color: #151515;
background-color: transparent;
padding: 15px;
border-width: 0;
border-top-style: solid;
border-top-color: rgb(187, 187, 187);
border-bottom: 1px solid rgb(187, 187, 187);
font-weight: 500;

	}


	/*** SIDE PANELS -- ACCOUNT TAB PANEL ***/

	.sidePanel--visitor .visitorPanel .avatar {
		float: left;
		margin-right: 12px;
	}

	.sidePanel--visitor .visitorPanel .avatar img {
		width: 32px;
		height: 32px;
	}

	.sidePanel--visitor .visitorPanel .secondaryContent {
		padding: 0;
		margin: 0;
		border: none;
		background: none;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.sidePanel--visitor .visitorPanel h2 {
		font-size: 14px;
		font-weight: 600;
		margin-bottom: 5px;
	}

	.sidePanel--visitor .visitorPanel h2 .muted { display: none; }

	.sidePanel--visitor .visitorPanel .stats { font-size: 11px; }

	.sidePanel .textCtrl {
		color: #FFFFFF;
background: url(rgba.php?r=0&g=0&b=0&a=25); background: rgba(0,0,0,.1); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#19000000,endColorstr=#19000000);
border-color:  rgb(255,255,255); border-color:  rgba(255,255,255, .1); _border-color:  rgb(255,255,255);

	}

	.sidePanel .statusPoster .statusEditorCounter { display: none; }

	.sidePanel .statusPoster .button { width: 100%; padding-left: 0; padding-right: 0;}
	.sidePanel .statusPoster .button:active {background-color: ;}

	.sidePanel .statusPoster .StatusEditor { width: 100%; }


	/*** SIDE PANELS -- ALERTS AND CONVOS TAB PANELS ***/

	.sidePanel__mediaObjectList .listItem {
		font-size: 11px;
padding: 12px;
border-bottom: 1px solid rgb(187, 187, 187);

	}

	.sidePanel__mediaObjectList .listItem .listItemText {
		overflow: hidden;
		_overflow: visible;
		zoom: 1;
	}

	.sidePanel__mediaObjectList .listItem .avatar {
		margin-right: 12px;
		float: left;
	}

	.sidePanel__mediaObjectList .listItem .avatar img {
		width: 36px;
		height: 36px;
	}

	.sidePanel__mediaObjectList .listItem .title a {
		font-size: 13px;
color: #333;
margin-bottom: 5px;
display: block;

	}

	.sidePanel__mediaObjectList .listItem.unread .title a {
		color: #DB291C;

	}




	/*** SIDE PANELS -- SIDEBAR PANEL ***/


	.sidePanel .sidebar {
		width: 100%;
		background-color: transparent;
		overflow-y: hidden;
		padding: 0;
	}

	.sidePanel .sidebar .section .secondaryContent {
		background: none;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		border: none;
		padding: 0 20px;
	}

	.sidePanel .sidebar .section:first-child,
	.sidePanel .sidebar .section:last-child {margin: 20px auto;}

	.sidePanel .sidebar .section .secondaryContent h3 {
		font-size: 14px;
color: #151515;
background-color: transparent;
padding: 15px;
border-width: 0;
border-top-style: solid;
border-top-color: rgb(187, 187, 187);
border-bottom: 1px solid rgb(187, 187, 187);
font-weight: 500;


		margin-top: 20px;
		margin-bottom: 20px;
		margin-right: -20px;
		margin-left: -20px;
	}

	.sidePanel .sidebar .section .secondaryContent h3 a  {
		font-size: 14px;
color: #151515;
	}

	.sidePanel .sidebar .widget-tabs .tabs {
		margin-bottom: 20px;

		padding: 0;
	}

	.sidePanel .tabs li:hover a,
	.sidePanel .tabs.noLinks li:hover {color: #151515;}

	.sidePanel .sidebar .widget-tabs .tabs {overflow: hidden;}

	.sidebar .visitorPanel .avatar img {
    		width: 75px;
    		height: 75px;
	}







#navigation .pageContent {
	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}






.noBorderRadiusTop {
	-webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important;
	-webkit-border-top-right-radius: 0 !important; -moz-border-radius-topright: 0 !important; -khtml-border-top-right-radius: 0 !important; border-top-right-radius: 0 !important;
}

.noBorderRadiusBottom {
	-webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important;
}

.noBorderRadius {
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}




	

	.noBorderRadiusTop .navTabs {
		-webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important;
		-webkit-border-top-right-radius: 0 !important; -moz-border-radius-topright: 0 !important; -khtml-border-top-right-radius: 0 !important; border-top-right-radius: 0 !important;
	}

	.noBorderRadiusBottom .navTabs {
		-webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important;
		-webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important;
	}

	.noBorderRadius .navTabs { -webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important; }


	

	.noBorderRadiusBottom .navTabs .navTab.selected .tabLinks {
		-webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important;
		-webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important;
	}

	.noBorderRadius .navTabs .navTab.selected .tabLinks { -webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important; }


	

		

		/* THE FIRST TAB OF THE FIRST UL */

		.navTabs .navLeft:first-of-type .uix_leftMost {
			-webkit-border-top-left-radius: 0px; -moz-border-radius-topleft: 0px; -khtml-border-top-left-radius: 0px; border-top-left-radius: 0px;
			-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;
		}

		#userBar .navTabs .navLeft:first-of-type .uix_leftMost {
			-webkit-border-top-left-radius: 0px; -moz-border-radius-topleft: 0px; -khtml-border-top-left-radius: 0px; border-top-left-radius: 0px;
			-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;
		}

		

			/* NAVLINK */

			.navTabs .navLeft:first-of-type .uix_leftMost .navLink {
				-webkit-border-radius: inherit; -moz-border-radius: inherit; -khtml-border-radius: inherit; border-radius: inherit;
			}


		/* THE LAST TAB OF THE "LAST" UL */

		.navTabs .navRight .uix_rightMost {
			-webkit-border-top-right-radius: 0px; -moz-border-radius-topright: 0px; -khtml-border-top-right-radius: 0px; border-top-right-radius: 0px;
			-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; -khtml-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px;
		}

		#userBar .navTabs .navRight .uix_rightMost {
			-webkit-border-top-right-radius: 0px; -moz-border-radius-topright: 0px; -khtml-border-top-right-radius: 0px; border-top-right-radius: 0px;
			-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; -khtml-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px;
		}

		

		/* CAN'T USE LAST-OF-TYPE BECAUSE NATURE OF FLOAT: RIGHT */

		.navTabs .navRight ~ .navRight .uix_rightMost {
			-webkit-border-top-right-radius: initial !important; -moz-border-radius-topright: initial !important; -khtml-border-top-right-radius: initial !important; border-top-right-radius: initial !important;
			-webkit-border-bottom-right-radius: initial !important; -moz-border-radius-bottomright: initial !important; -khtml-border-bottom-right-radius: initial !important; border-bottom-right-radius: initial !important;
		}

			/* NAVLINK */

			.navTabs .navRight .uix_rightMost .navLink {
				-webkit-border-radius: inherit; -moz-border-radius: inherit; -khtml-border-radius: inherit; border-radius: inherit;
			}


		

		/* THE FIRST TAB OF THE FIRST UL */

		.noBorderRadius .navLeft:first-of-type .uix_leftMost {
			-webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important;
			-webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important;
		}

		.noBorderRadiusBottom .navTabs .navLeft:first-of-type .uix_leftMost { -webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important; }

		.noBorderRadiusTop .navTabs .navLeft:first-of-type .uix_leftMost { -webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important; }


		.activeSticky .navLeft:first-of-type .uix_leftMost {
			-webkit-border-bottom-left-radius: 0 !important; -moz-border-radius-bottomleft: 0 !important; -khtml-border-bottom-left-radius: 0 !important; border-bottom-left-radius: 0 !important;
			-webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important;
		}


		/* THE LAST TAB OF THE "LAST" UL */

		.noBorderRadius .navRight .uix_rightMost {
			-webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important;
			-webkit-border-top-right-radius: 0 !important; -moz-border-radius-topright: 0 !important; -khtml-border-top-right-radius: 0 !important; border-top-right-radius: 0 !important;
		}

		.noBorderRadiusBottom .navTabs .navRight .uix_rightMost { -webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important; }

		.noBorderRadiusTop .navTabs .navRight .uix_rightMost { -webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important; }


		.activeSticky .navRight .uix_rightMost {
			-webkit-border-bottom-right-radius: 0 !important; -moz-border-radius-bottomright: 0 !important; -khtml-border-bottom-right-radius: 0 !important; border-bottom-right-radius: 0 !important;
			-webkit-border-top-right-radius: 0 !important; -moz-border-radius-topright: 0 !important; -khtml-border-top-right-radius: 0 !important; border-top-right-radius: 0 !important;
		}





	








.uix_icon {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;

	

	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.uix_icon-facebook:before		 {content: "\f09a";}
.uix_icon-twitter:before		 {content: "\f099";}
.uix_icon-youtube:before		 {content: "\f16a";}
.uix_icon-dribbble:before		 {content: "\f17d";}
.uix_icon-vimeo:before		 	 {content: "\f194";}
.uix_icon-deviantArt:before		 {content: "\f1bd";}
.uix_icon-googlePlus:before		 {content: "\f0d5";}
.uix_icon-linkedIn:before		 {content: "\f0e1";}
.uix_icon-instagram:before		 {content: "\f16d";}
.uix_icon-pinterest:before	 	 {content: "\f0d2";}
.uix_icon-steam:before	 		 {content: "\f1b6";}
.uix_icon-twitch:before	 		 {content: "\f1e8";}
.uix_icon-vine:before	 		 {content: "\f1ca";}
.uix_icon-tumblr:before	 		 {content: "\f173";}
.uix_icon-git:before	 		 {content: "\f1d3";}
.uix_icon-reddit:before	 		 {content: "\f1a1";}
.uix_icon-flickr:before	 		 {content: "\f16e";}

.uix_icon-close:before		 	 {content: "\f00d";}
.uix_icon-search:before		 	 {content: "\f002";}
.uix_icon-admin:before		 	 {content: "\f013";}
.uix_icon-cog:before			 {content: "\f013";}
.uix_icon-home:before		 	 {content: "\f015";}
.uix_icon-inbox:before		 	 {content: "\f0e0";}
.uix_icon-alerts:before		 	 {content: "\f024";}
.uix_icon-menu:before			 {content: "\f0c9";}
.uix_icon-navOverflow:before		 {content: "\f141";}
.uix_icon-sitemap:before		 {content: "\f0e8";}
.uix_icon-jumpToTop:before		 {content: "\f062";}
.uix_icon-jumpToBottom:before		 {content: "\f063";}
.uix_icon-signIn:before			 {content: "\f007";}
.uix_icon-register:before		 {content: "\f09c";}

.uix_icon-permissions:before		 {content: "\f1c4";}
.uix_icon-user:before		 	 {content: "\f007";}
.uix_icon-users:before		 	 {content: "\f0c0";}
.uix_icon-reports:before		 {content: "\f0f6";}
.uix_icon-moderator:before		 {content: "\f0ae";}

.uix_icon-email:before 			 {content: "\f0e0";}
.uix_icon-rss:before 			 {content: "\f09e";}
.uix_icon-comment:before 		 {content: "\f075";}
.uix_icon-thumbsUp:before 		 {content: "\f164";}
.uix_icon-trophy:before 		 {content: "\f091";}

.uix_icon-statsDiscussions:before	 {content: "\f0e5";}
.uix_icon-statsMessages:before		 {content: "\f0c5";}
.uix_icon-statsSubforumPopup:before	 {content: "\f114";}

.uix_icon-collapse:before		 { content: "\f068"; }
.uix_icon-expand:before		 	 { content: "\f067"; }

.uix_icon-expandDropdown:before		 { content: "\f0d7"; }
.uix_icon-collapseDropdown:before	 { content: "\f0d8"; }

.uix_icon-expandWidth:before 		 { content: '\f065'; }
.uix_icon-compressWidth:before 	 	 { content: '\f066'; }

.uix_icon-collapseRightSidebar:before	 { content: '\f138'; }
.uix_icon-expandRightSidebar:before	 { content: '\f137'; }
.uix_icon-collapseLeftSidebar:before	 { content: '\f137'; }
.uix_icon-expandLeftSidebar:before	 { content: '\f138'; }

.uix_icon--fixedWidth {
	width: 1.28571429em;
	text-align: center;
}




	.breadcrumb .crust.placeholder .arrow {
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}

	.uix_icon-breadcrumbSeparator:before,
	.breadcrumb .crust.placeholder .arrow:before	 { content: "\f105"; }





	html .redactor_toolbar li a
	{
		text-indent: 0;
		text-align: center;
		line-height: 26px;
		font-size: 14px;
		color: #151515;
	}

	
	
	html .redactor_toolbar li a:hover {background: none;}
	
	html .redactor_toolbar li a:hover {background-image: none;}

	html .redactor_dropdown a.icon:before
	{
		margin-left: -22px;
		margin-right: 10px;
		font-size: 14px;
	}

	html .redactor_toolbar li a:before,
	html .redactor_dropdown a.icon:before
	{
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}

	html .redactor_toolbar li a.redactor_btn_bold {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_bold:before
	{
		content: "\f032";
	}
	html .redactor_toolbar li a.redactor_btn_italic {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_italic:before
	{
		content: "\f033";
	}
	html .redactor_toolbar li a.redactor_btn_underline {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_underline:before
	{
		content: "\f0cd";
	}
	html .redactor_toolbar li a.redactor_btn_deleted {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_deleted:before
	{
		content: "\f0cc";
	}
	html .redactor_toolbar li a.redactor_btn_fontcolor {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_fontcolor:before
	{
		content: "\f043";
	}
	html .redactor_toolbar li a.redactor_btn_fontsize {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_fontsize:before
	{
		content: "\f034";
	}
	html .redactor_toolbar li a.redactor_btn_fontfamily {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_fontfamily:before
	{
		content: "\f031";
	}
	html .redactor_toolbar li a.redactor_btn_createlink {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_createlink:before
	{
		content: "\f0c1";
	}
	html .redactor_toolbar li a.redactor_btn_unlink {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_unlink:before
	{
		content: "\f127";
	}
	html .redactor_toolbar li a.redactor_btn_alignment {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_alignment:before
	{
		content: "\f036";
	}

	html .redactor_dropdown a.alignLeft {background-image: none;}
	html .redactor_dropdown a.alignLeft:before
	{
		content: "\f036";
	}

	html .redactor_dropdown a.alignCenter {background-image: none;}
	html .redactor_dropdown a.alignCenter:before
	{
		content: "\f037";
	}
	html .redactor_dropdown a.alignRight {background-image: none;}
	html .redactor_dropdown a.alignRight:before
	{
		content: "\f038";
	}

	html .redactor_toolbar li a.redactor_btn_unorderedlist {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_unorderedlist:before
	{
		content: "\f0ca";
	}

	html .redactor_toolbar li a.redactor_btn_orderedlist {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_orderedlist:before
	{
		content: "\f0cb";
	}

	html .redactor_toolbar li a.redactor_btn_outdent {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_outdent:before
	{
		content: "\f03b";
	}

	html .redactor_toolbar li a.redactor_btn_indent {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_indent:before
	{
		content: "\f03c";
	}

	html .redactor_toolbar li a.redactor_btn_smilies {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_smilies:before
	{
		content: "\f118";
	}

	html .redactor_toolbar li a.redactor_btn_image {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_image:before
	{
		content: "\f03e";
	}

	html .redactor_toolbar li a.redactor_btn_media {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_media:before
	{
		content: "\f008";
	}

	html .redactor_toolbar li a.redactor_btn_insert {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_insert:before
	{
		content: "\f196";
	}

	html .redactor_dropdown a.quote {background-image: none;}
	html .redactor_dropdown a.quote:before
	{
		content: "\f10e";
	}

	html .redactor_dropdown a.spoiler {background-image: none;}
	html .redactor_dropdown a.spoiler:before
	{
		content: "\f070";
	}

	html .redactor_dropdown a.code {background-image: none;}
	html .redactor_dropdown a.code:before
	{
		content: "\f121";
	}

	html .redactor_dropdown a.strikethrough {background-image: none;}
	html .redactor_dropdown a.strikethrough:before
	{
		content: "\f0cc";
	}

	html .redactor_toolbar li a {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_draft:before
	{
		content: "\f0c7"
	}

	html .redactor_dropdown a.saveDraft {background-image: none;}
	html .redactor_dropdown a.saveDraft:before
	{
		content: "\f0c7"
	}

	html .redactor_dropdown a.deleteDraft {background-image: none;}
	html .redactor_dropdown a.deleteDraft:before
	{
		content: "\f014";
	}

	html .redactor_toolbar li a.redactor_btn_undo {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_undo:before
	{
		content: "\f0e2";
	}

	html .redactor_toolbar li a.redactor_btn_redo {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_redo:before
	{
		content: "\f01e";
	}

	html .redactor_toolbar li a.redactor_btn_removeformat {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_removeformat:before
	{
		content: "\f12d";
	}

	html .redactor_toolbar li a.redactor_btn_switchmode {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_switchmode:before
	{
		content: "\f0ad";
	}

	html .redactor_toolbar li a.redactor_btn_custom_gallery {background-image: none;}
	html .redactor_toolbar li a.redactor_btn_custom_gallery:before {
		content: "\f030";
	}



.navTabs .navTab .navLink > .uix_icon {
	float: left;
	margin-right: .4em;
	font-size: 1.15em;
	line-height: inherit;
}

.navTabs .navTab.navTab--justIcon .navLink > .uix_icon { margin-right: 0; }




.clear { clear:both; }
.clear_left { clear:left; }
.clear_right { clear:right; }
.float_left { float: left; }
.float_right { float: right; }
.uix_hide {display: none !important;}

.u-largeGutter {
	padding-left: 20px !important;
	padding-right: 20px !important;
}

.u-smallGutter {
	padding-left: 15px !important;
	padding-right: 15px !important;
}

u-textEllipses {
	text-overflow: ellipses;
	overflow: hidden;
	white-space: nowrap;
}

@media screen and (max-width: 800px) {
	.Responsive .u-showBelowWideWidth { display: block !important; }

	.Responsive .u-hideBelowWideWidth { display: none !important; }
}

@media screen and (max-width: 610px) {
	.Responsive .u-showBelowMediumWidth { display: block !important; }

	.Responsive .u-hideBelowMediumWidth { display: none !important; }
}

@media screen and (max-width: 480px) {
	.Responsive .u-showBelowNarrowWidth { display: block !important; }

	.Responsive .u-hideBelowNarrowWidth { display: none !important; }
}

@media screen and (min-width: 801px) {
	.Responsive .u-showAboveWideWidth { display: block !important; }
	
	.Responsive .u-hideAboveWideWidth { display: none !important; }	
}

@media screen and (min-width: 611px) {
	.Responsive .u-showAboveMediumWidth { display: block !important; }
	
	.Responsive .u-hideAboveMediumWidth { display: none !important; }	
}

@media screen and (min-width: 481px) {
	.Responsive .u-showAboveNarrowWidth { display: block !important; }
	
	.Responsive .u-hideAboveNarrowWidth { display: none !important; }	
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a label {
	cursor: pointer;
}
::selection
{
	color: #FFF;
background-color: #333;

}
body::-webkit-selection
{
	color: #FFF;
background-color: #333;

}
body::-moz-selection
{
	color: #FFF;
background-color: #333;

}
.errorPanel
{
	color: rgba(0,0,0,.8);
background-color: #FF9494;
border-color:  rgb(0,0,0); border-color:  rgba(0,0,0, .2); _border-color:  rgb(0,0,0);

}



/*** UIX -- HEADER LAYOUT STUFF ***/

.header__blockItem {
	margin-top: 0;
	margin-bottom: 0;
}

.header__blockItem:last-of-type { margin-bottom: 0; }





@media (max-width: 480px) {

	.Responsive .header__blockItem { margin: 0; }
}



	#content { margin-top: 20px; }










#navigation .visitorTabs {
    min-width: 1px;
}

/* clearfix */ #navigation.withSearch .navTabs .pageWidth { zoom: 1; } #navigation.withSearch .navTabs .pageWidth:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }


#AccountMenu {width: 288px;}
ul.col1.blockLinksList, ul.col2.blockLinksList  {width: 50%;}
#AccountMenu .menuColumns a, #AccountMenu .menuColumns label {width: auto;}

.navTabs .navLink .itemCount.Zero {
	display: none !important;
}

.xenForm .checkboxColumns.blockLinksList > dd > ul li,
ul.checkboxColumns.blockLinksList li {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.Menu.uix_megaMenu {
	max-width: 1200px;
	width: 100%;
	left: 0 !important;
	right: 0;
	margin: 0 auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	
}

#headerMover #header {
	position: static;
	width: auto;
}

#headerMover #headerProxy {
	display: none;
	height: 0;
}








.navTabs .navTab.PopupClosed .navLink { color: rgb(55, 55, 55); }

	

	.navTabs .navTab:hover,
	.navTabs .navTab.PopupClosed:hover {
		color: #151515;
background-color: transparent;

	}

	.navTabs .navTab:hover .navLink,
	.navTabs .navTab.PopupClosed:hover .navLink,
	.navTabs .navTab.PopupClosed:hover .SplitCtrl { color: inherit; }



	

	.navTabs .navTab.Popup.PopupOpen,
	.navTabs .navTab.selected.PopupOpen .navLink {
		color: #DB291C;
border-color: transparent;

	}

	.navTabs .navTab.Popup.PopupOpen .navLink,
	.navTabs .navTab.Popup.PopupOpen .SplitCtrl { color: inherit; }


	

	.navTabs .navTab.selected .navLink,
	.navTabs .navTab.PopupClosed.selected .navLink,
	.navTabs .navTab.PopupClosed.selected .SplitCtrl { color: #DB291C; }

	.hasTabLinks #navigation .navTabs .navTab.selected .navLink { border-bottom-color: ; }

	.navTabs .moderatorTabs .uix_icon { opacity: 0.5; }




	.navTabs .SplitCtrl { display: none; }







	#navigation .pageContent { height: 50px; }

	.navTabs .navTab.selected .navLink { position: static; }





.navTabs .navTab.account .itemCount,
.navTabs .navTab.inbox .itemCount,
.navTabs .navTab.alerts .itemCount {
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(233, 30, 99);
padding: 0 2px;
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 16px;

}

.Menu.uix_adminMenu .blockLinksList .itemCount.alert,
#userBar .navTabs .navTab.account .itemCount,
#userBar .navTabs .navTab.inbox .itemCount,
#userBar .navTabs .navTab.alerts .itemCount
{
	color: #FFF;
background-color: rgb(233, 30, 99);

}


	#navigation .navTabs .navLink {
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}

	#navigation .navTabs .navLink .itemCount {
		margin-left: 6px;
display: inline-block;
vertical-align: top;
position: relative;
top: 50%;
-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);

	}
	#navigation .navTabs .navLink .itemCount .arrow
	{
		display: none;
	}














/********************************
POPUP ICON SWAP
********************************/

@media (max-width: 480px) {
	.Responsive .navigationSideBar .heading span:before {
		content: '\f0d7';
		font-family: 'FontAwesome';
	}
}

.Popup .arrowWidget:before {
	content: '\f0d7';
	font-family: 'FontAwesome';
}
.Popup .PopupOpen .arrowWidget:before {
	content: '\f0d8';
	font-family: 'FontAwesome';
}

.messageSimple { border-bottom: 1px solid rgb(187, 187, 187); }

.messageSimpleList .placeholder .placeholderContent {background-image: none;}



.uix_sticky_userbar {display: none;}



.navigationSideBar {font-size: 11px;}
.navigationSideBar a:hover {
	background-image: none;
	color: #DB291C;
}
.navigationSideBar > ul {
	border: solid 1px rgb(187, 187, 187);
	border-width: 0 0 1px 1px;
	margin-bottom: 10px;
	background-color: #FFFFFF;
}
.navigationSideBar > ul,
.navigationSideBar > ul > li.section:last-child > ul > li:last-child,
.navigationSideBar > ul > li.section:last-child > ul > li:last-child a {-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;}

.navigationSideBar > ul.menuVisible,
.navigationSideBar > ul.menuVisible > li.section:last-child > ul > li:last-child,
.navigationSideBar > ul.menuVisible > li.section:last-child > ul > li:last-child a {-webkit-border-radius: 0 0 0px 0px; -moz-border-radius: 0 0 0px 0px; -khtml-border-radius: 0 0 0px 0px; border-radius: 0 0 0px 0px;}







input[type=search],
input[type=text] {
	-webkit-appearance: none;
}

#calroot {
	-webkit-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -moz-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -khtml-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1);
}

#QuickSearch input[type='checkbox'] {vertical-align: text-bottom;}

#QuickSearchQuery {
	min-height: 0;

	padding-right: 12px;
padding-left: 12px;
line-height: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
width: 280px;
height: 34px;

}

#QuickSearch .formPopup .secondaryControls {
	width: 280px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

#QuickSearch .formPopup .controlsWrapper .textCtrl {
	width: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}



	#QuickSearch {
		display: inline-block;
		position: relative;
		right: 0;
		top: 0;
		vertical-align: top;
		background-color: transparent;
		padding: 0;
		line-height: normal;
		text-align: left;
	}
	#QuickSearchPlaceholder {
		position: static;
		right: 0;
		top: 0;
		height: auto;
		width: 18px;
		padding: 0 15px;
		-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
		text-align: center;
		font-size: 18px;
		text-indent: 0;
		color: inherit;
		background-image: none;

		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;

	}
	#QuickSearchPlaceholder:before
	{
		display: inline-block;
		position: relative;
		vertical-align: top;
	}
	#QuickSearch #commonSearches .arrowWidget
	{
		float: none;
		margin: 0 auto;
	}

	

	#QuickSearch.active
	{
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		padding-bottom: 0;
	}
	#QuickSearch .formPopup
	{
		background: none;
		width: auto;
	}
	#QuickSearch .formPopup .controlsWrapper
	{
		background: none;
		padding: 0;
		margin: 0;
	}
	#QuickSearch .formPopup .primaryControls
	{
		padding: 0;
	}

#QuickSearch .formPopup .secondaryControls {
	-webkit-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -moz-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -khtml-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1);
	padding: 10px;
	border: solid 1px rgb(187, 187, 187);
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	background: #F8F8F8;
	color: #151515;
	position: absolute;
	top: 44px;
	z-index: 7500;
}

#QuickSearch input.button.primary {
	margin-right: 5px;
}

#QuickSearch a.button.moreOptions {
	float: left;
	margin: 0;
	/* width: 87px; */ 
}

input[type='search']::-webkit-search-decoration,
input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-results-button,
input[type='search']::-webkit-search-results-decoration {
	display: none;
}

#QuickSearch .primaryControls {
	position: relative;
}



	#QuickSearch.show {
		display: block;
		position: absolute;
		-webkit-transform:  none; -moz-transform:  none; -o-transform:  none; -ms-transform:  none;transform: none;
		-webkit-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -moz-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); -khtml-box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1); box-shadow: 4px 4px 10px -2px rgba(0,0,0,.1);
		border: solid 1px rgb(187, 187, 187);
		-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
		background: #F8F8F8;
		padding: 0 0 10px;
		margin-top: -10px;
	}

	#QuickSearch.show .primaryControls .uix_icon.uix_icon-search {
		display: none;
	}

	#QuickSearch.show #QuickSearchQuery {
		width: 260px;
	}

	#QuickSearch.show .formPopup .primaryControls {
		padding: 10px 10px 0 10px;
	}

	#QuickSearch.show .formPopup .secondaryControls {
		position: static;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		background: none;
		border: none;
	}




	#QuickSearchPlaceholder
	{
		display: inline-block;
	}
	#QuickSearch
	{
		display: none;
	}




#QuickSearch .primaryControls .uix_icon {
	position: absolute;
	top: 0;
	line-height: 34px;
	text-align: center;
}



	#QuickSearch .primaryControls .uix_icon
	{
		right: 0;
		font-size: 16px;
color: #FFF;
background-color: #DB291C;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
cursor: pointer;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
width: 34px;
height: 34px;

		
			-webkit-border-radius: 0 4px 4px 0; -moz-border-radius: 0 4px 4px 0; -khtml-border-radius: 0 4px 4px 0; border-radius: 0 4px 4px 0;
		
	}

	#QuickSearch:not(.show) #QuickSearchQuery
	{
		
			padding-right: 46px;
		
	}







	#uix_searchMinimal {
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		pointer-events: none;
	}

	#uix_searchMinimal.show { pointer-events: auto; }


	
	

		#uix_searchMinimal {
			float: right;
			opacity: 0;
			width: 0;

			/* transition to inactive */
			-webkit-transition-property: opacity, width;
			-webkit-transition-duration: .3s, .3s;
			-webkit-transition-delay: 0s, 0s;

			transition-property: opacity, width;
			transition-duration: .3s, .3s;
			transition-delay: 0s, 0s;
		}

			#uix_searchMinimal.show {
				opacity: 1;
				width: 100%;

				/* transition to active */
				-webkit-transition-delay: .3s, .3s;
				transition-delay: .3s, .3s;
			}

		#QuickSearchPlaceholder {
			opacity: 1;

			/* transition to inactive */
			-webkit-transition-property: width, padding, opacity;
			-webkit-transition-duration: 0s, 0s, .3s;
			-webkit-transition-delay: .3s, .3s, .3s;

			transition-property: width, padding, opacity;
			transition-duration: 0s, 0s, .3s;
			transition-delay: .3s, .3s, .3s;
		}

			.uix_searchMinimalActive #QuickSearchPlaceholder {
				opacity: 0;
				pointer-events: none;
				width: 0;
				padding: 0;

				/* transition to active */
				-webkit-transition-delay: .3s, .3s, 0s;
				transition-delay: .3s, .3s, 0s;
			}

	


	#uix_searchMinimal.show form {
		padding: 0 20px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

		width: 100%;
	}

	.hasFlexbox #uix_searchMinimal form {
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
	}

	#uix_searchMinimal form .uix_icon {
		display: none;
	}

	#uix_searchMinimal.show form .uix_icon {
		display: inline-block;
	}

	#uix_searchMinimalClose {
		padding: 0 20px 0 0;
		cursor: pointer;
		float: left;
		font-size: 18px;
	}

	.hasFlexbox #uix_searchMinimalClose {
		-ms-flex: 0 0 auto;
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}

	#uix_searchMinimalOptions {
		padding: 0 0 0 20px;
		cursor: pointer;
		float: right;
		font-size: 18px;
	}

	.hasFlexbox #uix_searchMinimalOptions {
		-ms-flex: 0 0 auto;
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;

		-ms-flex-order: 1;
		-webkit-order: 1;
		order: 1;
	}

	#uix_searchMinimalInput {
		overflow: hidden
	}

	.hasFlexbox #uix_searchMinimalInput {
		-ms-flex: 1 1 auto;
		-webkit-flex: 1 1 auto;
		flex: 1 1 auto;
	}


	

	#uix_searchMinimal input {
		font-size: 14px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
background-color: transparent;
border-style: none;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
line-height: inherit;
text-indent: 10px;
text-align: left;
width: 100%;

	}

	#uix_searchMinimal input:focus {
		outline: none;
		color: #151515;

		}

	

	

	.pageStyle_1 [id="navigation"] .uix_minimalSearchWrapper {
		position: relative;
	}






	
	

		#searchBar {
			float: right;
			line-height: 76px;
			*line-height: 80px;
			height: 80px;
		}

		.hasFlexbox #searchBar {
			margin-left: 20px;
			line-height: 34px;
			height: 34px;

			
			-ms-flex: 0 0 auto;
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}

		#QuickSearch,
		#QuickSearchPlaceholder {
			vertical-align: middle;
		}

		.hasFlexbox #QuickSearch,
		.hasFlexbox #QuickSearchPlaceholder {
			vertical-align: initial;
		}

		#QuickSearch.show {
			top: calc(50% - 17px)
		}

		@media (max-width: 480px) {
			.Responsive #searchBar {
				text-align: center;
				margin: 0 0 20px 0;
			}

			.Responsive #searchBar {
				float: none;
				line-height: 34px;
				height: 34px;
			}

			.Responsive #QuickSearch.show {
				right: calc(50% - 145px);
			}
		}

	
	


	




.pollBlock .question .questionText {color: #151515;}
.pollResult .barContainer {border-color: #337AB7; -webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;}
.pollResult .bar {background: #337AB7;}

.eventList li,
html .searchResult {border-bottom: 1px solid rgb(187, 187, 187);}






/* clearfix */ .uix_contentFix { zoom: 1; } .uix_contentFix:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }


.uix_mainSidebar {
	-moz-transition: opacity 0.4s;
	-o-transition: opacity 0.4s;
	-webkit-transition: opacity 0.4s;
	transition: opacity 0.4s;
}

.mainContainer .mainContent > *:first-child,
.mainContainer_noSidebar > *:first-child
{
	margin-top: 0;
}

.mainContainer .mainContent > *:last-child,
.mainContainer_noSidebar > *:last-child
{
	margin-bottom: 0;
}




	/* clearfix */ .mainContainer_noSidebar { zoom: 1; } .mainContainer_noSidebar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
	/* clearfix */ .mainContainer .mainContent { zoom: 1; } .mainContainer .mainContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#content .pageContent:after { content: none; }

	#content .pageContent {
		background-color: transparent;
		padding: 0;
		margin: 0;
		margin-bottom: 1px; 
		border: none;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		background-image: none;
	}
	
	
		.Responsive #content .pageContent {
			padding-left: 0;
			padding-right: 0;
		}
	
	
	
	
	.mainContainer .mainContent,
	.mainContainer_noSidebar {
		background-color: transparent;
		padding: 0;
		margin: 0;
		border: none;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		background-image: none;
	}



#InlineModOverlay {
	border-color: rgb(187, 187, 187);
	-webkit-box-shadow: 2px 4px 15px -5px rgba(0,0,0,.2); -moz-box-shadow: 2px 4px 15px -5px rgba(0,0,0,.2); -khtml-box-shadow: 2px 4px 15px -5px rgba(0,0,0,.2); box-shadow: 2px 4px 15px -5px rgba(0,0,0,.2);
}

.xenPreviewTooltip .previewContent {
	background: none;
}

.xenOverlay table.dataTable {background: #FFFFFF; margin: 0;}

.xenOverlay .xenForm {max-width: none;}

.xenOverlay.lightBox #LbUpper, .xenOverlay.lightBox #LbLower {
background-color: rgba(0,0,0,.75) !important;
}
.xenOverlay a.close
{
	right: 15px;
	top: 15px;
	width: 24px;
	height: 24px;
	color: inherit;
	font-size: 18px;
}
.xenOverlay a.close:before
{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size: inherit;
	content: "\f00d";
}
a.fbLogin span {color: #FFF;}

.xenOverlay h2.heading span.prefix.prefixPrimary {
	color: #DB291C;
	padding: 0 4px;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}

@media (max-width: 610px)
{
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
		border-width: ;
	}
}





#userBar .navTabs {
	font-size: 11px;
background-color: #333;
border-style: none;
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
clear: both;

	height: 40px;
}

#userBar .navTabs .navLink,
#userBar .navTabs .SplitCtrl {
	color: #fff;
padding-right: 10px;
padding-left: 10px;
position: relative ;
line-height: 40px;
text-transform: none;
/* alert bubbles */
height: 40px;

}

#userBar .navTabs .navTab.selected .navLink {
	color: #FFF;
background: url(rgba.php?r=0&g=0&b=0&a=51); background: rgba(0,0,0,0.2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=#33000000);
border-width: 0;

}


	

	#userBar .navTabs .navTab:hover,
	#userBar .navTabs .navTab.PopupClosed:hover {
		color: #FFF;
background-color: ;

	}

	#userBar .navTabs .navTab:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .navLink,
	#userBar .navTabs .navTab.PopupClosed:hover .SplitCtrl { color: inherit; }


	

	#userBar .navTabs .navTab.Popup.PopupOpen,
	#userBar .navTabs .navTab.selected.PopupOpen .navLink {
		color: #FFF;
background-color: ;
;
	}

	#userBar .navTabs .navTab.Popup.PopupOpen .navLink,
	#userBar .navTabs .navTab.Popup.PopupOpen .SplitCtrl { color: inherit; }


	

	#userBar .navTabs .navTab.selected .navLink,
	#userBar .navTabs .navTab.PopupClosed.selected .navLink,
	#userBar .navTabs .navTab.PopupClosed.selected .SplitCtrl { color: #FFF; }





#userBar .navTabs .navLink .itemCount
{
	color: #FFF;
background: url(rgba.php?r=0&g=0&b=0&a=51); background: rgba(0,0,0,.2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=#33000000);
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
;
}


	#userBar .navTabs .navLink
	{
		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}
	#userBar .navTabs .navLink .itemCount
	{
		margin-left: 6px;
display: inline-block;
vertical-align: top;
position: relative;
top: 50%;
-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);

	}
	#userBar .navTabs .navLink .itemCount .arrow {display: none;}



#userBar .navTabs .navLink .itemCount.alert
{
	color: #FFF;
background-color: rgb(233, 30, 99);

}
#userBar .navTabs .navLink .itemCount .arrow
{
	border-top-color:  rgb(0,0,0); border-top-color:  rgba(0,0,0, .2); _border-top-color:  rgb(0,0,0);
}
#userBar .navTabs .navLink .itemCount.alert .arrow
{
	border-top-color: rgb(233, 30, 99);
}





	.moderatorTabs .navTab.admin.Popup
	{
		display: none;
	}

	@media (max-width: 1000px)
	{
		.Responsive .moderatorTabs .navTab
		{
			display: none;
		}
		.Responsive .moderatorTabs .navTab.admin.Popup
		{
			display: inline-block;
		}
	}



.uix_userbarRenderFix {
	display: inherit;
}




.uix_mainSidebar.sticky .inner_wrapper {
	-moz-transition: top 0.2s;
	-o-transition: top 0.2s;
	-webkit-transition: top 0.2s;
	transition: top 0.2s;
}




#navigation,
#userBar {
	position: relative;
}

#navigation.withSearch,
#userBar.withSearch {
	z-index: 52;
}


#userBar .moderatorTabs > a {
	visibility: hidden;
}





	.sticky_wrapper {
		position: relative;

		-webkit-transform:  translate3d(0, 0, 0); -moz-transform:  translate3d(0, 0, 0); -o-transform:  translate3d(0, 0, 0); -ms-transform:  translate3d(0, 0, 0);transform: translate3d(0, 0, 0);
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;

		
	}

	.activeSticky .sticky_wrapper {
		position: fixed;
		left: 0;
		right: 0;
	}

	

	#navigation.activeSticky,
	#userBar.activeSticky,
	.activeSticky .sticky_wrapper { z-index: 250; }

	

	#navigation.activeSticky.withSearch,
	#userBar.activeSticky.withSearch,
	.activeSticky.withSearch .sticky_wrapper { z-index: 260; }

		#navigation.activeSticky.lastSticky,
		#userBar.activeSticky.lastSticky,
		.activeSticky.lastSticky .sticky_wrapper { z-index: 240; }

	/* style last sticky element with a box-shadow body.scrollNotTouchingTop*/
	.activeSticky.lastSticky .pageContent {
		box-shadow: 0 2px rgba(0,0,0,.1);
	}

	.activeSticky .navTabs .navLink .itemCount
	{
		margin-left: 6px;
display: inline-block;
vertical-align: top;
position: relative;
top: 50%;
-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);

	}
	.activeSticky .navTabs .navLink .itemCount .arrow
	{
		display: none;
	}

	

	#navigation.activeSticky .navTabs .navLink,
	#navigation.activeSticky .navTabs .SplitCtrl {
		height: 50px;
		line-height: 50px;
	}

	#navigation.activeSticky .navTabs {
		height: 50px;

		padding-top: ;
padding-bottom: ;
border-top-width: ;
border-bottom-width: ;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	}

	


	.activeSticky .navTabs .navTab.selected .tabLinks {
		padding-top: ;
padding-bottom: ;
border-top-width: ;
border-bottom-width: 0;


		height: 50px;
		line-height: 50px;
		top: 50px;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	}

	.activeSticky .navTabs .navTab.selected .tabLinks li { max-height: 50px; }


	
		.activeSticky.uix_hideSubElement .navTabs .navTab.selected .tabLinks { display: none !important; }
	

	#navigation.activeSticky .pageContent {
		
			height: 50px;
        
		
	}

	

	#userBar.activeSticky .navTabs .navLink,
	#userBar.activeSticky .navTabs .SplitCtrl {
		height: 40px;
		line-height: 40px;
	}

	#userBar.activeSticky .navTabs {
		height: 40px;

		padding-top: ;
padding-bottom: ;
border-top-width: ;
border-bottom-width: ;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	}









	
		@media (max-width: 800px) {
			.navTabs .navTab.account .avatar {margin-right: 0;}
			.navTabs .navTab.account .navLink .accountUsername {display: none !important;}
		}
	



.navTabs .navTab.account .avatar {
	float: left;
	position: relative;
	top: 50%;
	-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);
}

.navTabs .navTab.account .avatar img {
	display: block;
	width: 20px;
	height: 20px;
	border: none;
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
}

.navTabs .navTab.account .navLink .accountUsername {
	display: inline-block;
	vertical-align: top;
	text-transform: none;
}

.navTabs .navTab.account .navLink {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.actionFilterRow .filtersHeading {color: #151515;}

.PageNav .scrollable {width: 130px;}




.PageNav .scrollable { height: 36px; }



.PageNav a {
	max-height: 36px;
	line-height: 34px;
}

.PageNav a.text {
	padding-top: ;
	padding-bottom: ;
}

a.PageNavPrev,
a.PageNavNext {
	padding: 0;
	line-height: 36px;
}

.PageNav .pageNavHeader,
.PageNav a,
.PageNav .scrollable
{
	margin-bottom: ;
}
.textWithCount.subHeading .text
{
	color: rgb(114, 114, 114);
}
.button.spinBoxButton
{
	margin-left: 5px;
	min-width: 34px;
}

.textCtrlWrap
{
	height: auto;
	text-indent: 0;
}
.textCtrl .prefix,
.textCtrl .Popup
{
	height: 34px;
	line-height: 34px;
}
.textCtrlWrap input.textCtrl,
.textCtrlWrap input.textCtrl:focus,
.textCtrlWrap input.textCtrl.Focus {box-shadow: none !important;}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: none;
}
.xenForm fieldset,
.xenForm .formGroup,
.dataTable tr.dataRow td
{
	border-color: rgb(187, 187, 187);
}
.larger.textHeading,
.xenForm .sectionHeader,
.larger.textHeading a,
.xenForm .sectionHeader a {color: #151515; }

.formPopup .controlsWrapper,
.thread_view .threadAlerts {background-image: none;}
.thread_view .threadAlerts {
	border: 1px solid rgb(166, 188, 198);
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	background-image: none;
	background-color: rgb(207, 223, 229);
}

.thread_view .threadAlerts dt {color: rgb(138, 162, 174);}



	.footerLegal .uix_socialMediaLinks {float: right;}

	.uix_socialMediaLinks .uix_socialLink {
		display: inline-block;
		vertical-align: top;
	}

	.uix_socialLink a {
		font-size: 16px;
color: #FFF;
background-image: url('styles/canadavisa/uix/social_sprite.png');
background-repeat: no-repeat;
background-position: 0 0;
margin-right: 4px;
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
display: block;
line-height: 40px;
text-align: center;
width: 40px;
height: 40px;

	}

	.uix_socialMediaLinks .uix_socialLink:last-child  a {margin-right: 0;}

	.uix_socialLink a:hover {
		color: #FFFFFF;
text-decoration: none;
text-shadow: 0 -1px 0 rgba(0,0,0,.2);


	}

	.uix_socialLink--facebook a {
		background: #3b5998 none 0 -32px;

	}

	.uix_socialLink--twitter a {
		background: #44ccf6 none -48px -32px;

	}

	.uix_socialLink--youtube a {
		background: #ce332d none -96px -32px;

	}

	.uix_socialLink--dribbble a {
		background: #ea4c89 none -192px -32px;

	}

	.uix_socialLink--vimeo a {
		background: #86c9ef none -336px -32px;

	}

	.uix_socialLink--deviantart a {
		background: #768c82 none -240px -32px;

	}

	.uix_socialLink--googleplus a {
		background: #d13f2d none -384px -32px;

	}

	.uix_socialLink--linkedin a {
		background: #0275b6 none -288px -32px;

	}

	.uix_socialLink--pinterest a {
		background: #cb2027 none -432px -32px;

	}

	.uix_socialLink--instagram a {
		background: #604335 none -144px -32px;

	}

	.uix_socialLink--steam a {
		background: rgb(112, 108, 107) none;

	}

	.uix_socialLink--twitch a {
		background: #6441A5 none;

	}

	.uix_socialLink--vine a {
		background: #00BF8F none;

	}

	.uix_socialLink--tumblr a {
		background: #36465D none;

	}

	.uix_socialLink--git a {
		background: #4183C4 none;

	}

	.uix_socialLink--reddit a {
		background: #FF4500 none;

	}

	.uix_socialLink--flickr a {
		background: rgb(255, 0, 128) none;

	}

	.uix_socialLink--contact a {
		background: rgb(58, 132, 90) none;

	}

	.uix_socialLink--rss a {
		background: #FF6600 none;

	}


#logoBlock .pageContent {
	background-color: #FFFFFF;

}



.hasFlexbox #logoBlock .pageWidth {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;

	-ms-flex-pack: justify;
	-webkit-justify-content: space-between;
	justify-content: space-between;

	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}




.hasFlexbox #logoBlock .pageWidth:after { display: none; }


.hasFlexbox #logoBlock .pageContent span.helper { display: none; }


#logo a { text-decoration: none; }

#logo_small a { text-decoration: none; }


	#logo img {
		max-width: 214px;
		 width: 100%;
	}



	#logo_small {
		float: left;
		display: none;
	}

	.activeSmallLogo #logo_small {
		display: block;
	}

	

	#logo_small a {
		display: block;
		height: 50px;
		line-height: 50px;
		padding: 0 15px;

		-webkit-transform-style: preserve-3d;
		transform-style: preserve-3d;
	}

	.activeSticky #logo_small a {
		height: 50px;
		line-height: 50px;
	}

	#logo_small a:hover {
		color: #151515;
	}

	#logo_small img {
		width: 160px;
		display: inline-block;
		vertical-align: top;
		position: relative;
		top: 50%;
		-webkit-transform:  translateY(-50%); -moz-transform:  translateY(-50%); -o-transform:  translateY(-50%); -ms-transform:  translateY(-50%);transform: translateY(-50%);
	}



/* Styling text based logo */

.uix_logoText {
	font-size: 20px;
color: #151515;
text-decoration: none;


	white-space: nowrap;
}



.uix_logoText .uix_icon { margin-right: .5em; }

.uix_navigationLogoText {
	font-size: 20px;
color: #151515;
font-weight: 400;

}



.uix_navigationLogoText .uix_icon { margin-right: .5em; }








	@media (max-width: 480px)
	{
		.Responsive.hasFlexbox #logoBlock .pageWidth {
			-ms-flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
			flex-wrap: wrap;
		}

		.Responsive.hasFlexbox #logoBlock .pageWidth > * {
			-ms-flex: 0 1 100%;
			-webkit-flex: 0 1 100%;
			flex: 0 1 100%;
		}

		.Responsive #logo {
			float: none;
			text-align: center;
		}

		.Responsive .uix_slogan {
			display: none;
		}
	}






	/* clearfix */ #logoBlock .pageWidth { zoom: 1; } #logoBlock .pageWidth:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logoBlock .pageContent {
		border-left: none;
		border-right: none;
	}

	#logoBlock .funbox { margin-top: 0; }






.avatarScaler img,
.xenOverlay .formOverlay .avatar img,
.xenOverlay .formOverlay .avatar .img,
.xenOverlay .formOverlay .avatarCropper
{
	background-color: #999;
}
body .AvatarEditor .avatarOption
{
	background: rgb(226, 236, 241);
	border-color: rgb(207, 223, 229);
}

.xenOverlay .section.messageSimpleList .messageContent {padding-right: 42px;}



	.avatar img,
	.avatar .img,
	.avatarCropper
	{
			
		-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
	
	}

	.xenOverlay.memberCard .avatarCropper,
	.memberCard .avatarCropper .avatar img,
	.memberCard .avatarCropper .avatar
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		-webkit-clip-path: none;
		clip-path: none;
	}


.conversation_view .messageList
{
	border: none;
	padding-right: 0;
}

.conversation_view .message:first-child,
.conversation_view .quickReply
{
	border: 1px solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}

.breadBoxTop,
.breadBoxBottom {
	margin: 20px 0;
	margin: 0;
}

.breadcrumb .jumpMenuTrigger {
	line-height: 50px;
}

.breadBoxTop a.callToAction {
	height: auto;
	line-height: inherit;
}


/*** UIX -- BREADCRUMB ICONS ***/

.breadcrumb .uix_icon { vertical-align: top; }

.breadcrumb .uix_icon-home { font-size: 16px; }


/*** UIX -- BREADCRUMB ITEMS ***/

.breadcrumb .crust {
	line-height: 50px;
}

.breadcrumb .crust a.crumb,
.breadcrumb .crust .arrow { line-height: inherit; }

.breadcrumb .crust .arrow,
.breadcrumb .crust .arrow span {
	border-top-width: 25px;
	border-bottom-width: 25px;
}

.breadcrumb .crust .arrow span { top: -25px; }



	.breadcrumb .crust .arrow {
		border: none;
		height: auto;
		width: auto;
		pointer-events: none;
	}

	.breadcrumb .crust:last-child .arrow { display: none; }

	.breadcrumb .crust.placeholder .arrow span { display: none; }




/*** UIX -- BREADCRUMB TOGGLE LIST ***/

.hasLeftSidebar .uix_breadCrumb_toggleList {
	float: left;
}

.hasRightSidebar .uix_breadCrumb_toggleList {
	float: right;
}

.uix_breadCrumb_toggleList .toggleList_item {
	height: 50px;
	line-height: 50px;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

	

	
}

.hasLeftSidebar .uix_breadCrumb_toggleList .toggleList_item {
	float: right;
	margin-right: 15px;
}

.hasRightSidebar .uix_breadCrumb_toggleList .toggleList_item {
	float: left;
	margin-left: 15px;
}

.toggleList_item a {
	display: block;

	padding: 0 15px;
	color: rgb(114, 114, 114);
	text-decoration: none;
}

.toggleList_item a:hover { color: #337AB7; }

.toggleList_item .uix_icon {
	font-size: 16px;
	vertical-align: top;
}

.subForumsPopup .PopupOpen {color:  !important;}
.subForumsPopup .PopupOpen .dt {color: ;}


	.footer .pageContent { margin-bottom: 0; }





.footerLinks a.globalFeed {
	font-size: 16px;
background-color: transparent;
background-repeat: no-repeat;
background-position: 0 -448px;
margin: 1px 4px;
display: block;
white-space: nowrap;
overflow: hidden;
opacity: 0.25;
text-align: center;
width: 16px;

	opacity: 1;
	vertical-align: middle;
	display: inline-block;

}

.footerLinks .topLink .uix_icon { vertical-align: top; }

#copyright {text-align: left; color: inherit;}

/* clearfix */ .footer .pageContent { zoom: 1; } .footer .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#legal {clear: right;}
.footerLegal .pageContent {
	clear:both;
	font-size: 11px;
padding-top: 15px;
padding-bottom: 15px;
text-align: center;

}

.debugInfo {float: left; clear: both;}

#waindigoCopyrightNotice {display: none;}

#waindigoCopyrightNotice .pageContent {margin: 0; padding: 0;}

.footer .choosers dd {margin-right: 15px;}
.footer .choosers dd:last-child {margin-right: 0;}

.footer .choosers a:after
{
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	content: "\f0d7";
	font-size: 12px;
	margin-left: 4px;
}

.footer .choosers.chooser_widthToggle a:after {display: none;}

.footer .choosers a {
	text-decoration: none;
background-color: transparent;
padding: 0 10px;
border: 2px solid #ccc;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
display: inline-block;
line-height: normal;
font-weight: normal;
line-height: 30px;
height: 30px;

}
.footer .choosers a:hover {
	color: #151515;
border-color: #999;

}

@media (max-width: 800px)
{
	.Responsive .footerLegal .uix_socialMediaLinks {float: none; margin: 0; text-align: center;}
	.Responsive #copyright, .Responsive #legal, .Responsive .debugInfo {float: none; display: block;}
	.Responsive #legal li {display: inline-block;float:none}
	.Responsive #copyright {margin: 15px 0;display:block;text-align:center;}
}

	
	@media (max-width: 610px)
	{
	
		.Responsive .footer .pageContent {text-align: center;height: auto;}
		.Responsive .footer .choosers {display: inline-block; padding: 0 7.5px; float: none; vertical-align: middle; text-align: center;}
		.Responsive .footer .choosers dd {margin: 0 4px; text-align: center;}
		.Responsive .footerLinks {float: none; padding: 0;}
		.Responsive .footerLinks li {display: inline-block; float: none !important;}
	
	}
	


.profilePage .mast .sectionFooter { margin-top: 15px; }

.profilePage .mast { border-right: 0; }

.profilePage .primaryUserBlock {
	margin-top: 0;
	border-top: 0;
}

.profilePage .mast .section.infoBlock .primaryContent,
.profilePage .mast .section.infoBlock .secondaryContent {
	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}

@media (max-width: 800px) {
	.messageSimple .uix_postbit_privateControlsMenu__hide {display: none;}
}

@media (min-width: 801px) {
	.messageSimple .publicControls .item.uix_postbit_privateControlsMenu {display: none;}
}


.messageSimple .messageMeta .item {vertical-align: middle;}
.messageSimple .messageMeta .item.InlineModCheck {margin: 0; top: -2px;}

.PanelScroller .navContainer {margin-top: -16px;}

.discussionList .discussionListItem.sticky .posterAvatar,
.discussionList .discussionListItem.sticky .stats,
.discussionList .discussionListItem.moderated .listBlock,
.discussionListItem.InlineModChecked .posterAvatar,
.discussionListItem.InlineModChecked .main,
.discussionListItem.InlineModChecked .stats,
.discussionListItem.InlineModChecked .lastPost,
.discussionListItem.moderated.InlineModChecked,
.discussionListItem.deleted .posterAvatar   {background-color: transparent;}

.discussionList .discussionListItem.sticky.InlineModChecked,
.discussionList .discussionListItem.InlineModChecked,
.discussionList .discussionListItem.moderated.InlineModChecked,
.discussionList .discussionListItem.deleted.InlineModChecked {background-color: rgb(224, 247, 250);}

.discussionList.sectionMain {
	background-color: #FFFFFF;
padding: 0;
border-style: none;
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,.25); -moz-box-shadow: 0 1px 3px rgba(0,0,0,.25); -khtml-box-shadow: 0 1px 3px rgba(0,0,0,.25); box-shadow: 0 1px 3px rgba(0,0,0,.25);
;
}

.discussionListItem {
	border-bottom: 1px solid rgb(187, 187, 187);
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;


	padding: 0;
}

	.discussionListItem:nth-child(even) {
		background-color: #FFFFFF;

	}

	.discussionList .discussionListItem.sticky {
		background-color: #F8F8F8;
border-left: 3px solid rgb(244, 67, 54);

	}

	.discussionList .discussionListItem.moderated {
		background-color: rgb(241, 248, 233);

	}

	.discussionList .discussionListItem.deleted {
		color: rgb(114, 114, 114);
background-color: rgb(187, 187, 187);

	}


.discussionListItem .title a {color: inherit;}

	.discussionListItems .unread.moderated .title a,
	.discussionListItems .unread.moderated  .lastPostInfo .username {
		color: ;
	}

	.discussionListItem.deleted .title {
		color: rgb(114, 114, 114);
	}

.afterDiscussionListHandle {
	margin-top:43px;
}


	.discussionListItem .lastPostInfo .avatar {
		margin-top: 6px;
margin-left: 15px;
float: right;
width: 30px;
height: 30px;

	}
	.discussionListItem .lastPostInfo .avatar img {
		max-height: 100%;
		display: block;
		width: auto;
	}
	@media (max-width: 610px) {
		.Responsive .discussionListItem .lastPostInfo .avatar {display: none;}
	}


.threadListSeparator {
	font-size: 12px;
color: rgb(114, 114, 114);
text-decoration: none;
background-color: #FFFFFF;
padding: 15px;
margin: 0 auto;
border-width: 0;
border-top-style: solid;
border-bottom: 1px solid rgb(187, 187, 187);


	font-size: 11px;
color: rgb(22, 22, 22);
border-top-style: none;
border-bottom: 1px solid rgb(187, 187, 187);


	position: relative;
}

.threadListSeparator .uix_icon {
	font-size: 16px;
	line-height: 11px;
	cursor: pointer;
}












.uix_mainSidebar { width: 280px; }

.hasLeftSidebar .uix_mainSidebar { float: left; }

.hasRightSidebar .uix_mainSidebar { float: right; }

/* clearfix */ .sidebar .visitorPanel .secondaryContent { zoom: 1; } .sidebar .visitorPanel .secondaryContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.sidebar .featuredNotice {
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	border-color: rgb(166, 188, 198);
	background: rgb(226, 236, 241);
	display: inline-block;
	color: rgb(138, 162, 174);
}

.sidebar .visitorPanel {
	overflow: visible;
}



.no-flexbox .visitorPanel .visitorText {
	overflow: hidden;
	_overflow: visible;
	zoom: 1;
}



.sidebar .section .secondaryContent {
	background-color: #fff;
border: 1px solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;

}
.sidebar > .section:last-child
{
	margin-bottom: 0;
}

.sidebar .tabs {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-ms-flex-wrap: wrap;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-top: 0;
}
.sidebar .tabs > li {
	-ms-flex: 1 0 auto;
	-webkit-flex: 1 0 auto;
	flex: 1 0 auto;
}
.sidebar .tabs > li a {
	display: block;
	text-align: center;
	padding-left: 15px;
	padding-right: 15px;
}


.hasLeftSidebar .mainContainer {
	float: right;
	margin-left: -300px;
	margin-right: 0;
}

.hasLeftSidebar .mainContent {
	margin-left: 300px;
	margin-right: 0;
}

.hasLeftSidebar .sidebar {
	float: left;
}

.hasRightSidebar .mainContainer {
	margin-right: -300px;
}

.hasRightSidebar .mainContent {
	margin-right: 300px;
}




	.mainContainer { position: relative; }

	.uix_mainSidebar { position: relative; }

	.sidebarToggle__phrase {
		display: none;
		font-size: 11px;
	}

	.is-sidebarOpen .sidebarToggle__phrase--close { display: inline; }

	.is-sidebarCollapsed .sidebarToggle__phrase--open { display: inline; }




	.uix_mainSidebar .inner_wrapper
	{
		position: relative;
		-webkit-transform: translateZ(0);
		-webkit-transform:  translateZ(0); -moz-transform:  translateZ(0); -o-transform:  translateZ(0); -ms-transform:  translateZ(0);transform: translateZ(0);
	}
	.uix_mainSidebar.sticky .inner_wrapper
	{
		position:fixed;
		-webkit-backface-visibility: hidden;
	}




@media (min-width: 1171px) 
{
	.sidebar .section:first-child
	{
		margin-top: 0;
	}
}

@media (max-width: 1170px) 
{
	.Responsive.is-sidebarOpen .sidebarToggle { display: none; }

	.Responsive .uix_mainSidebar { width: auto; }

	.Responsive .uix_mainSidebar { float: none; }

	.Responsive .sidebar { float: none;}

	.Responsive .mainContainer { float: none; }

	.Responsive.hasLeftSidebar .mainContainer { margin-left: 0; }

	.Responsive.hasRightSidebar .mainContainer { margin-right: 0; }

	.Responsive.hasLeftSidebar .mainContent { margin-left: 0; }

	.Responsive.hasRightSidebar .mainContent { margin-right: 0; }
	
	
	
	.hasFlexbox.Responsive .sidebar {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		    flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		margin-right: -10px;
		margin-left: -10px;
		margin-top: 10px;
	}

	.hasFlexbox .sidebar > .section,
	.hasFlexbox .sidebar > .widget {
		-webkit-box-flex: 1;
		    -ms-flex-positive: 1;
		        flex-grow: 1;
		-ms-flex-preferred-size: 280px;
		    flex-basis: 280px;
		margin: 10px;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		-webkit-flex-wrap: wrap
	}
	
	.hasFlexbox .sidebar > .widget-tabs {
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		    -ms-flex-direction: column;
		        flex-direction: column;
	}
	
	.hasFlexbox .sidebar > .section.widget-tabs .primaryContent {width: 100%;}
	
	.hasFlexbox .sidebar .section > .secondaryContent,
	.hasFlexbox .sidebar > .widget > .secondaryContent,
	.hasFlexbox .sidebar > .widget > .section {
		-webkit-box-flex: 1;
		    -ms-flex-positive: 1;
		        flex-grow: 1;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		    -ms-flex-direction: column;
		        flex-direction: column;
		float: none;
		width: auto;
	}
	
	.hasFlexbox .sidebar > .widget > .section {
		width: 100%; 
		display: flex;
		margin: 0;
	}
	
	
	
	
	
}

#content.help_bb_codes .sectionMain .primaryContent,
#content.help_trophies .sectionMain .primaryContent {background-color: transparent;}

#loginBar {
	position: relative;
	z-index: 9999;
}

#loginBar #loginBarHandle {text-align: right;}

#loginBar #loginBarHandle a {display: block;}

#loginBar .pageWidth {position: relative;}

.navTabs .navTab.login {display: list-item !important;}



#loginBar .xenForm {
	max-width: 1200px;
}

#loginBar .pageContent {
	padding: 0 20px;
}



.Responsive .xenForm.xenForm--uixLoginForm .ctrlUnit {
	padding-left: 0;
	padding-right: 0;
}

.xenForm.xenForm--uixLoginForm .ctrlUnit > dd {
	padding-left: 0;
	padding-right: 0;
}

.xenForm.xenForm--uixLoginForm .ctrlUnit > dt label {
	margin-left: 0;
}



.formOverlay#pageLogin {
	max-width: 400px;
	margin: 0 auto;
}

.formOverlay#pageLogin h2.textHeading {
	display: none;
}

.formOverlay#pageLogin .textCtrl.disabled {
	display: none;
}

.formOverlay#pageLogin .ctrlUnit {
	overflow: visible;
}

.formOverlay#pageLogin .ctrlUnit dt {
	margin-bottom: 8px;
}

.formOverlay#pageLogin .ctrlUnit dt {
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.formOverlay#pageLogin .ctrlUnit dt dfn {
	display: inline;
	margin: 0;
}

.formOverlay#pageLogin .ctrlUnit > dd {
	padding-top: 0;
	float: none;
	width: auto;
	padding-left: 30px;
}

@media (max-width: 480px) {
	.Responsive .formOverlay#pageLogin .ctrlUnit > dd {
		padding-left: 0;
	}
}

.formOverlay#pageLogin .ctrlUnit dd .bbCodeEditorContainer textarea {
	margin-left: 0;
	min-height: 200px;
}

.xenForm.xenForm--uixLoginForm .ctrlUnit.submitUnit > dd { width: auto;}

.formOverlay#pageLogin .ctrlUnit > dd > ul,
.formOverlay#pageLogin .ctrlUnit > dd > input,
.formOverlay#pageLogin > dd > select,
.formOverlay#pageLogin > dd > textarea {
	margin-top: 0;
}

.formOverlay#pageLogin .ctrlUnit.submitUnit {
	margin-left: -5px;
	margin-right: -5px;
}

.formOverlay#pageLogin .ctrlUnit.submitUnit dd > input,
.formOverlay#pageLogin .ctrlUnit.submitUnit dd > label {
	margin-left: 5px;
	margin-right: 5px;
}

#XenForo a.twitterLogin span,
#XenForo a.fbLogin span,
#XenForo .googleLogin span {
	width: auto;
	height: 34px;
	margin: 0;
	padding: 0 15px;
	border: none;
	line-height: 34px;

	background: none;
	text-shadow: none;
	color: #FFF;
	text-align: center;

	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	text-overflow: ellipsis;
}



#XenForo a.twitterLogin span:before,
#XenForo a.fbLogin span:before,
#XenForo .googleLogin span:before {
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	margin-right: 15px;
}

#XenForo a.twitterLogin span:before {content: "\f099";}
#XenForo a.fbLogin span:before {content: "\f09a";}
#XenForo .googleLogin span:before {content: "\f0d5";}

#XenForo a.twitterLogin span:hover,
#XenForo a.fbLogin span:hover,
#XenForo .googleLogin span:hover {background: url(rgba.php?r=0&g=0&b=0&a=25); background: rgba(0,0,0,.1); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#19000000,endColorstr=#19000000);}

#XenForo a.twitterLogin,
#XenForo a.fbLogin,
#XenForo .googleLogin
{
	display: block;
	background: none;
	margin: 0;
	padding: 0;
	border: none;
	text-shadow: none;
	color: #FFF;
	width: 100%;
	height: auto;
	font-size: 14px;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}

#XenForo a.twitterLogin, #loginBar a.twitterLogin {background: #77CDF0;}
#XenForo a.fbLogin, #loginBar a.fbLogin {background: #537CBE;}
#XenForo .googleLogin, #loginBar .googleLogin {background: #E9654C;}













.FloatingContainer {
	margin-right: 20px;
margin-left: 20px;
width: 250px;


	left: 0;
	right: auto;
}

.FloatingContainer .floatingItem {
	font-size: 11px;
margin-bottom: 20px;
border-width: 0;
border-style: solid;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
font-weight: 500;
-webkit-box-shadow: 0px 2px 5px rgba(0,0,0,.25); -moz-box-shadow: 0px 2px 5px rgba(0,0,0,.25); -khtml-box-shadow: 0px 2px 5px rgba(0,0,0,.25); box-shadow: 0px 2px 5px rgba(0,0,0,.25);

}

.FloatingContainer .floatingItem.primary {
	color: #333;
background-color: #F8F8F8;
border-color: rgb(187, 187, 187);

}

.FloatingContainer .floatingItem.secondary {
	color: rgb(138, 162, 174);
background-color: rgb(226, 236, 241);
border-color: rgb(166, 188, 198);

}

.FloatingContainer .floatingItem.dark {
	color: #FFFFFF;
background-color: #333;
border-style: none;

}

.FloatingContainer .floatingItem.light {
	color: #333;
background-color: #FFFFFF;
border-style: none;
-webkit-box-shadow: 2px 2px 10px -2px rgba(0,0,0,.3); -moz-box-shadow: 2px 2px 10px -2px rgba(0,0,0,.3); -khtml-box-shadow: 2px 2px 10px -2px rgba(0,0,0,.3); box-shadow: 2px 2px 10px -2px rgba(0,0,0,.3);

}



a.signupButton {
	display: inline-block;
line-height: 42px;
cursor: pointer;
outline: 0 none;
height: 42px;

}

a.signupButton:hover { text-decoration: none; }

	a.signupButton span {
		font-size: 18px;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
color: #FFF;
background-color: rgb(76, 175, 80);
padding: 0 16px;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
display: block;
text-align: center;
transition: all 0.3s cubic-bezier(.25,.8,.25,1);
font-weight: 700;
-webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); -moz-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); -khtml-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12); box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
min-width: 64px;

	}

	a.signupButton:hover span {
		background-color: #333;
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); -khtml-box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);

	}

	a.signupButton:active span {
		color: #FFF;
background-color: #DB291C;
-webkit-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); -moz-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); -khtml-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25);

	}



#SignupButton { display: block; }

#SignupButton:hover .inner { text-decoration: none; }


.nodeList .categoryForumNodeInfo,
.nodeList .forumNodeInfo,
.nodeList .pageNodeInfo,
.nodeList .linkNodeInfo {
	background-color: #F8F8F8;
border-color: rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;


	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}


/*** UIX -- NODE ICONS ***/

.node .nodeIcon.hasGlyph {
	text-align: center;
	background-color: transparent;
	background: none;
	font-size: 18px;
color: #fff;
background: url(rgba.php?r=0&g=0&b=0&a=51); background: rgba(0,0,0,.2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=#33000000);
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
background-image: none !important;

}

.node .unread .nodeIcon.hasGlyph {
	background-color: #333;

}

.hasFlexbox .nodeList .categoryStrip {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;

	-ms-flex-pack: justify;
	-webkit-justify-content: space-between;
	justify-content: space-between;

	
}

.hasFlexbox .nodeList .categoryStrip .categoryText {
	-ms-flex: 1 1 auto;
	-webkit-flex: 1 1 auto;
	flex: 1 1 auto;
}

.nodeList .categoryStrip .nodeTitle { line-height: 1; }




/*** UIX -- INLINE CATEGORY DESCRIPTION ***/



	.nodeList .categoryStrip .categoryText {
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;
	}

	.nodeList .categoryStrip .nodeTitle {
		display: inline;
		padding: 0;
		margin: 0;
	}

	.nodeList .categoryStrip .nodeDescription {
		display: inline;
		padding: 0;
		margin: 0 0 0 .5em;
	}






	.categoryStrip__collapseToggle {
		font-size: 24px;
color: rgb(55, 55, 55);
margin-left: 10px;


		cursor: pointer;
		line-height: 12px;
		max-height: 12px;
		float: right;
	}

	.hasFlexbox .categoryStrip__collapseToggle {
		-ms-flex: 0 0 auto;
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;

		-ms-flex-order: 1;
		-webkit-order: 1;
		order: 1;
	}

	





/*** NODE STATS ***/


	.nodeStats dt,
	.nodeStats .dt { color: #ccc; }

	.nodeStats dt .uix_icon,
	.nodeStats .dt .uix_icon { vertical-align: top; }






/*** UIX -- SUBFORUM LIST ***/

.node .subForumList li { margin-left: 0; }

.nodeList .node.level_1 { margin-bottom: 20px; }

.nodeList .node.groupNoChildren + .node.groupNoChildren { margin-top: 0; }

.nodeList .node.groupNoChildren { margin-bottom: 20px; }

.node .categoryStrip--empty { height: 4px; padding-top: 0; padding-bottom: 0; margin-bottom: 20px; }

/* clearfix */ .nodeList { zoom: 1; } .nodeList:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }


/*** UIX -- NODE TABLE STYLE ***/


	.nodeList .categoryForumNodeInfo,
	.nodeList .forumNodeInfo,
	.nodeList .pageNodeInfo,
	.nodeList .linkNodeInfo
	{
		border-bottom: none;
	}


	.forum_view .nodeList,
	.category_view .nodeList,
	.watch_forums .nodeList {
		border: 1px solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
		border-top: 0;
	}

	.forum_list .nodeList .nodeList,
	.forum_view .nodeList,
	.category_view .nodeList,
	.watch_forums .nodeList {
		background: #F8F8F8;
		margin-top: 15px;
		border: 1px solid rgb(187, 187, 187);
		border-top: 0;
		-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
	}

	.node.level_2 .nodeInfo { border-top: 1px solid rgb(187, 187, 187); }

	.node.level_2:first-child .nodeInfo { -webkit-border-radius: 0px 0px 0 0; -moz-border-radius: 0px 0px 0 0; -khtml-border-radius: 0px 0px 0 0; border-radius: 0px 0px 0 0; }

	.node.level_2:last-child .nodeInfo { -webkit-border-radius: 0 0 0px 0px; -moz-border-radius: 0 0 0px 0px; -khtml-border-radius: 0 0 0px 0px; border-radius: 0 0 0px 0px; }

	.node.level_2:only-of-type .nodeInfo { -webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important; }

	





.node .tinyIcon { text-indent: -9999px; }

.node .tinyIcon:before {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;

	width: 16px;
	content: "\f09e";

	text-indent: 0;
	float: left;
}


	.node .nodeControls { display: none; }


.node .nodeLastPost .noMessages {
	display: block;
	text-align: center;
}




.node.link .nodeText { margin-right: 20px; }
.node.page .nodeText { margin-right: 20px; }







.node .nodeText .nodeTitle a,
.subForumList .nodeTitle a { color: inherit; }




@media (max-width: 610px) {
	.Responsive .node .nodeLastPost { margin-left: 51px; }
}




/*** UIX -- NODE STYLE RULES ***/








/* clearfix */ .message .privateControls { zoom: 1; } .message .privateControls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
/* clearfix */ .message .publicControls { zoom: 1; } .message .publicControls:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.message .messageInfo {
	margin-left: 205px;
	
}

#QuickReply {
	
	margin-left: 180px;
}

@media (max-width: 610px) {
	#QuickReply .submitUnit {
		display: flex;
		margin: 5px -5px 0;
		flex-wrap: wrap;
	}
	#QuickReply .submitUnit > *,
	#QuickReply .insertQuotes {
	    margin: 5px !important;
	    flex: 1 0 150px;
	}

	#QuickReply #ctrl_uploader {width: 100%;}
	#QuickReply #AttachmentUploader {position: relative;}
	#QuickReply .swfupload {top: 0 !important;}

	#QuickReply .submitUnit .button.primary {
		order: -1;
	}
}

.messageUserBlock div.uix_avatarHolderInner {
	position: relative;
	text-align: center;
	margin: 0 auto;
}

.message.placeholder .messageContent { min-height: 0; }




	.hasFlexbox .messageList .uix_message {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;

	        

	        -ms-flex-align: stretch; /* 2012 syntax for IE10 */
		-webkit-align-items: stretch;
		align-items: stretch;

		
	}

	.hasFlexbox .messageList .placeholder .placeholderContent {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	}

	.hasFlexbox .messageList .placeholder a.avatar {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}

	.hasFlexbox .message .messageUserInfo {
		-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 0 0 auto;
		flex: 0 0 auto;
	}

	.hasFlexbox .message .messageInfo {
		display: -ms-flexbox; /* 2012 syntax for IE10 */
	        display: -webkit-flex;
	        display: flex;
	        -ms-flex-direction: column; /* 2012 syntax for IE10 */
	        -webkit-flex-direction: column;
	        flex-direction: column;

		-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 100%;
		flex: 1 1 100%;

		overflow: hidden; /* wrap images - FF */

		margin-left: 20px;
	}

	.hasFlexbox .message .messageContent {
		-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
		-webkit-flex: 1 1 auto;
		flex: 1 1 auto;
	}



	.message .messageDetails {
		font-size: 11px;
color: rgb(114, 114, 114);

	}

	.message .messageDetails:after {
		content: '.';
		display: block;
		height: 0;
		clear: right;
		visibility: hidden;
	}

	.message .editDate {
		font-size: inherit;
		text-align: inherit;
		margin-top: 0;
	}
	.message .messageDetails .item {
		white-space: nowrap;
		display: inline-block;
		margin-left: 5px;
	}
	.message .messageDetails .postNumber {
		float: right;

	}

.attachedFiles .attachmentList,
.messageList .newMessagesNotice {
	background-image: none;
}

.userBanner {
	background-image: none;
	padding-top: 4px;
	padding-bottom: 4px;
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
}

.messageUserBlock .userBanner {
	margin-top: 5px;
}




	@media (min-width: 611px) {

		.messageUserBlock div.uix_avatarHolderInner
		{
			position: relative;

			margin: 0 auto;

			
				max-width: 96px;
			
		}
		.messageUserBlock div.avatarHolder .avatar img
		{
			max-width: 100%;
			width: auto;
			height: auto;
		}
	}

	




	

	

	.messageMeta .control:before,
	.messageMeta .uix_icon {
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;

		margin-right: 5px;
	}

	.messageMeta .control.reply:before {
		content: "\f112";
	}

	.messageMeta .control.edit:before {
		content: "\f040";
	}

	.messageMeta .control.delete:before {
		content: "\f014";
	}

	.messageMeta .control.deleteSpam:before {
		content: "\f05e";
	}

	.messageMeta .control.ip:before {
		content: "\f124";
	}

	.messageMeta .control.like:before {
		content: "\f164";
	}

	.messageMeta .control.unlike:before {
		content: "\f165";
	}

	.messageMeta .control.MultiQuoteControl:before {
		content: "\f10d";
	}

	.messageMeta .control.history:before {
		content: "\f1da";
	}

	.messageMeta .control.warn:before {
		content: "\f071";
	}

	.messageMeta .control.report:before {
		content: "\f06a";
	}

	.messageMeta .control.postComment:before {
		content: "\f075";
	}

	.messageMeta .uix_postbit_privateControlsMenu .uix_icon:before {
		content: "\f0ad";
	}

	

	

	.message .messageMeta .control,
	.message .messageMeta .uix_postbit_privateControlsMenu {
		background: none !important;
		border: none !important;
		box-shadow: none !important;
	}

	



	

	.message .messageMeta .uix_postbit_privateControlsMenu {
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

	.message .messageMeta .uix_postbit_privateControlsMenu a {
		color: inherit;
		display: block;
	}

	.message .messageMeta .uix_postbit_privateControlsMenu:hover {
		color: #151515;
text-decoration: none;

	}

	.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {
		background-repeat: repeat-x;
background-position: top;
-webkit-border-top-left-radius: 4px; -moz-border-radius-topleft: 4px; -khtml-border-top-left-radius: 4px; border-top-left-radius: 4px;
-webkit-border-top-right-radius: 4px; -moz-border-radius-topright: 4px; -khtml-border-top-right-radius: 4px; border-top-right-radius: 4px;
-webkit-border-bottom-right-radius: 0; -moz-border-radius-bottomright: 0; -khtml-border-bottom-right-radius: 0; border-bottom-right-radius: 0;
-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;

	}

		

		.message .messageMeta .uix_postbit_privateControlsMenu.PopupOpen {color: inherit !important;}

		

	

	

	.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
	{
		display: none;
	}

	@media (max-width: 900px)
	{
		.Responsive .thread_view .message .privateControls,
		.Responsive .th_liked_posts_list .message .privateControls
		{
			display: none;
		}


		.Responsive .message.deleted .messageMeta {clear: both; line-height: 30px; float: left;}
		.Responsive .message.deleted .privateControls {display: block;}
		.Responsive .message.deleted .privateControls .item.InlineModCheck {float: none; display: inline-block;}

		.Responsive .message .messageMeta .uix_postbit_privateControlsMenu
		{
			display: inline-block;
		}
	}

	

	
	

		@media (max-width: 610px) {
			.message .privateControls, .message .publicControls {float: none; text-align: center;}
		}

	
	




	

	.messageUserBlock div.avatarHolder .onlineMarker {
		background-color: rgb(127, 185, 0);
margin-top: 4px;
margin-left: 4px;
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
border-top-width: 0 !important;
border-right-width: 0 !important;
border-bottom-width: 0 !important;
border-left-width: 0 !important;
width: 10px;
height: 10px;

	}

	

	




	




@media (max-width: 610px) {

	

		.Responsive.hasFlexbox .messageList .uix_message {
			-ms-flex-direction: column; /* 2012 syntax for IE10 */
		        -webkit-flex-direction: column;
		        flex-direction: column;

	        	-ms-flex-align: stretch; /* 2012 syntax for IE10 */
			-webkit-align-items: stretch;
			align-items: stretch;
		}

		.Responsive.hasFlexbox .message .messageInfo {
			-ms-flex: 1 1 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 auto;
			flex: 1 1 auto;
		}

		.Responsive .message .messageInfo {
			padding: 0px;
			margin-left: 0px;
		}

		.Responsive.hasFlexbox #QuickReply {
			margin-left: 0;
		}

		.Responsive.hasFlexbox .messageUserBlock {
			display: -ms-flexbox; /* 2012 syntax for IE10 */
		        display: -webkit-flex;
		        display: flex;

	        	-ms-flex-pack: justify; /* 2012 syntax for IE10 */
			-webkit-justify-content: space-between;
			justify-content: space-between;
		}

		.Responsive.hasFlexbox .messageUserBlock div.avatarHolder {
			-ms-flex: 0 0 auto; /* 2012 syntax for IE10 */
			-webkit-flex: 0 0 auto;
			flex: 0 0 auto;
		}

		
		.Responsive.hasFlexbox .messageUserBlock h3.userText {
			margin-left: 0;

			-ms-flex: 1 1 100%; /* 2012 syntax for IE10 */
			-webkit-flex: 1 1 100%;
			flex: 1 1 100%;
		}


	

		.Responsive .messageUserBlock h3.userText {
			border-width: 0 0 0 1px;
		}


	

		

		.Responsive .messageUserBlock .userBanner {
			float: right;
			margin-top: 0;
		}

		.Responsive .messageUserBlock h3.userText .uix_userTextInner {
			float: left;
			text-align: left;
		}

		


	

		

		.Responsive .messageUserBlock div.avatarHolder .onlineMarker {
			margin: 0;
		}

		

}





/* Find the images, set the new image */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem .ReadToggle,
.discussionListItem .iconKey span,
.event .content .thread .icon,
.event .content .forum .icon,
.footerLinks a.globalFeed,
.messageNotices .icon,
.rating .star,
.resourceAlerts .icon,
.thread_view .threadAlerts .icon,
.alerts .newIcon,
.alertsPopup .newIcon,
.DismissParent .DismissCtrl {
	background-image: url(styles/canadavisa/uix/sprite.png) !important;
	width: 16px;
	height: 16px;
	background-repeat: no-repeat;
}


/* Set the background-position */

.LoggedIn .discussionListItem .unreadLink,
.LoggedIn .discussionListItem.unread .ReadToggle {background-position: 0 -32px;}
.LoggedIn .discussionListItem .ReadToggle:hover {background-position: -16px -32px;}

.discussionListItem .iconKey .sticky    { background-position:   0px -16px; }
.discussionListItem .iconKey .starred   { background-position: -64px -32px;}
.discussionListItem .iconKey .watched   { background-position: -144px -16px;}
.discussionListItem .iconKey .locked    { background-position: -16px -16px; }
.discussionListItem .iconKey .moderated { background-position: -32px -16px; }
.discussionListItem .iconKey .redirect  { background-position: -48px -16px; }
.discussionListItem .iconKey .new       { background-position: -64px -16px; }

.event .content .thread .icon {background-position: -96px -16px;}
.event .content .forum .icon {background-position: -80px -16px;}

.footerLinks a.globalFeed {background-position: -112px -16px;}

.messageNotices .deletedNotice .icon { background-position: -48px -32px; }
.messageNotices .warningNotice .icon { background-position: -32px -32px; }
.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }

.navTabs .navTab.PopupClosed:hover .SplitCtrl {background-position: -128px ; }

.rating .star {background-position: -96px -32px !important;}
.rating .star.Full {background-position: -64px -32px !important;}
.rating .star.Half,
.rating .star.Full.Half {background-position: -80px -32px !important;}

.resourceAlerts .deletedAlert .icon { background-position: -48px -32px; }
.resourceAlerts .moderatedAlert .icon { background-position: -32px -16px; }

.thread_view .threadAlerts .deletedAlert .icon { background-position: -48px -32px; }
.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -32px; }
.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }

.alerts .newIcon,
.alertsPopup .newIcon {background-position: -112px -32px;}

.DismissParent .DismissCtrl {background-position: -80px 0;}
.DismissParent:hover .DismissCtrl:hover {background-position: -96px 0;}
.DismissParent:hover .DismissCtrl:active {background-position: -112px 0;}



@media
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (   min--moz-device-pixel-ratio: 2),
only screen and (     -o-min-device-pixel-ratio: 2/1),
only screen and (        min-device-pixel-ratio: 2),
only screen and (                min-resolution: 192dpi),
only screen and (                min-resolution: 2dppx) {

	.LoggedIn .discussionListItem .unreadLink,
	.LoggedIn .discussionListItem .ReadToggle,
	.discussionListItem .iconKey span,
	.event .content .thread .icon,
	.event .content .forum .icon,
	.footerLinks a.globalFeed,
	.messageNotices .icon,
	.rating .star,
	.resourceAlerts .icon,
	
	.thread_view .threadAlerts .icon,
	.alerts .newIcon,
	.alertsPopup .newIcon,
	.DismissParent .DismissCtrl {
		background-image: url(styles/canadavisa/uix/sprite@2x.png) !important;
		background-size: 160px 48px;
	}

}


#calroot {
	padding: 15px;
	border: none;
	-webkit-box-shadow: 1px 2px 3px rgba(0,0,0,.2); -moz-box-shadow: 1px 2px 3px rgba(0,0,0,.2); -khtml-box-shadow: 1px 2px 3px rgba(0,0,0,.2); box-shadow: 1px 2px 3px rgba(0,0,0,.2);
	width: 220px;
}

#caltitle {
	color: #000;
	width: 178px;
}

#caldays {
	padding-bottom: 5px;
	border-bottom-color: #F0F0F0;
}

#caldays span { width: 30px; }

#calweeks { margin-top: 10px; }

.calweek { margin-top: 5px; }

.calweek a {
	margin-right: 10px;
	width: 20px;
	-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	line-height: 21px;
}

#caltoday {
	border: solid 1px #151515;
	font-weight: normal;
	line-height: 20px;
}

#calcurrent { background: #DB291C; }

a.caloff { color: #ccc; }


	.uix_javascriptNeedsInit .moderatorTabs,
.uix_javascriptNeedsInit .tabLinks li,
.uix_javascriptNeedsInit .publicTabs .navTab a,
.uix_javascriptNeedsInit .visitorTabs {
	visibility: hidden;
}

.NoJs.uix_javascriptNeedsInit .moderatorTabs,
.NoJs.uix_javascriptNeedsInit .tabLinks li,
.NoJs.uix_javascriptNeedsInit .publicTabs .navTab a,
.NoJs.uix_javascriptNeedsInit .visitorTabs {
	visibility: visible;
}




/*** UIX -- WIDE RESPONSIVE RULES ***/

@media (max-width:800px) {

	.Responsive .pageWidth { max-width: none !important; }

	.Responsive .blockLinksList a,
	.Responsive .blockLinksList label { padding: 10px; }
	
	.Responsive .profilePage .mast > * {
		max-width: none;
	}
}


/*** UIX -- MEDIUM RESPONSIVE RULES ***/

@media (max-width:610px) {


	.Responsive .navTabs {
		font-size: 12px;
	}

	.Responsive #userBar .navTabs {
		font-size: 12px;
	}

	.Responsive #navigation .navTabs,
	.Responsive #userBar .navTabs {
		padding-left: 0;
		padding-right: 0;
	}

	.Responsive .moderatorTabs a i + .itemLabel {display: none;}

	

}


/*** UIX -- NARROW RESPONSIVE RULES ***/

@media (max-width: 480px) {

	.Responsive .resourceInfo .downloadButton { display: block; }

	.Responsive .pageNavLinkGroup { text-align: center; }

	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup {
		clear: both;
		display: inline-block;
		margin-top: 15px;
	}

	.Responsive .pageNavLinkGroup .linkGroup .Popup { margin-left: 0; }

	.Responsive .pageNavLinkGroup .linkGroup .Popup,
	.Responsive .pageNavLinkGroup .linkGroup .element,
	.Responsive .pageNavLinkGroup .linkGroup a {
		margin: 0 5px;
		display: inline-block;
		float: none;
	}

	.Responsive .topCtrl.topCtrl--inContent,
	.Responsive .breadBoxTop.withTopCtrl .topCtrl,
	.Responsive .pageNavLinkGroup .linkGroup,
	.Responsive .nodeListNewDiscussionButton{
		display: block;
		float: none;
		width: 100%;
		text-align: center;
		margin-left: 0;

	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl { margin-top: 15px; }

	.Responsive .topCtrl.topCtrl--inContent { margin-bottom: 20px; }

	.Responsive .topCtrl a.callToAction,
	.Responsive .pageNavLinkGroup .linkGroup a.callToAction,
	.Responsive .nodeListNewDiscussionButton a.callToAction { display: block; }

}


/*** UIX -- HIDE AD STYLER ***/

@media (max-width: 768px) {
	.Responsive .uix_adStylerColorOptions,
	.Responsive .footer .choosers.chooser_AdStyler { display: none; }
}


.message .dark_postrating.likesSummary, .dark_postrating {
	margin: 0;
	min-height: 0;
	padding: 8px;
	color: #333;
background-color: rgb(226, 236, 241);
padding: 10px;
margin-top: 15px;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

}

.dark_postrating_outputlist {
	font-family: inherit;
	margin: 0;
	font-size: 11px;
	color: inherit;
}

.dark_postrating_outputlist li strong, .dark_postrating_thread_rating strong {color: inherit;}



.widget-container.widget-tabs .tabs {border-bottom: 0;}
.widget-container.widget-tabs .secondaryContent {
	margin-top: -1px;
}

.sidebar .pollBlock .buttons .button {
	width: 100%; 
	display: block;
	margin-top: 10px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	margin-left: 0;
}







.featuredResourceList {
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;

	height: auto;

	-ms-flex-wrap: wrap;
	-webkit-flex-wrap: wrap;
	flex-wrap: wrap;

	margin: -7.5px;
}
.featuredResourceList .featuredResource {
	margin: 0 15px 0 0;
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	border-color: rgb(166, 188, 198);
	background: rgb(226, 236, 241);

	-ms-flex: 1 0 200px;
	-webkit-flex: 1 0 200px;
	flex: 1 0 200px;

	margin: 7.5px;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
}
.featuredResourceList .featuredResource .details {left: 5px;}
.featuredResourceList .featuredResource .resourceInfo .title a {color: rgb(138, 162, 174);}

@media screen and (-webkit-min-device-pixel-ratio:0)  {
	.resourceHeaders .typeFilter {
	    bottom: 0px;
	    (-bracket-:hack;
	        bottom: 1px;
	    );
	}
}

.resourceUpdate {padding: 15px;}
.resourceListItem {border-bottom: solid 1px rgb(187, 187, 187);}
.sidebar .callToAction {margin: 15px 0;}
.sidebar .callToAction span {padding: 15px; font-size: 14px}

.resourceListSidebar .secondaryContent {
	margin-bottom: 20px;

	background-color: #fff;
border: 1px solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;

}

.resourceListMain {
	background-color: #FFFFFF;
padding: 15px;
border: 0 solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
-webkit-box-shadow: 0 2px 6px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 6px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 6px rgba(0,0,0,.25); box-shadow: 0 2px 6px rgba(0,0,0,.25);

	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}

.imageCollection {background-image: none;}

.downloadButton .inner:hover {color: #FFF;}

.resourceListSidebar, .resourceListMain {margin-bottom: 0;}

.sidebar > .callToAction {width: 100%;}

.sidebar > .callToAction {
        max-width: 220px;
        margin: 0 auto;
}




.mainContainer .mainContent > *:first-child > .sectionMain, .mainContainer_noSidebar > *:first-child {
    margin-top: 0;
}

.mediaContainer,
.albumContainer {
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
}

.xmgCarouselContainer .sectionMain .titleStrip h3 {line-height: ;}
.ratings { font-size: 16px; }

.ratings .star { font-size: inherit; }


	.xengallerySubMenu {
		display: none !important;
	}


.mediaTabHeadings .typeFilter
{
	background-image: none;
}
.mediaLabels .mediaLabel
{
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
}

@media (max-width: 800px) {
	.Responsive .xengallerySideBar > * {max-width: 100%;}
	.Responsive .xengallerySideBar {display: block; margin-top: 20px; width: auto;}
}

.buttonToolbar .toolButton .fa-lg {
	vertical-align: top;
	line-height: inherit;
}

.xengallerySideBarContainer .xengallerySideBar .section:first-child {
	margin-top: 0;
}

.xengallerySideBarContainer .xengallerySideBar .section .secondaryContent {
	background-color: #fff;
border: 1px solid rgb(187, 187, 187);
-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;

}

.xengallery_media_index .titleBar,
.xengallery_category_view .titleBar {height: auto;}


	.commentSimple .control:before,
	.mediaMeta .control:before
	{
		display: inline-block;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		line-height: 1;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;

		margin-right: 5px;
	}
	.commentMeta .control.ReplyLink:before
	{
		content: "\f112";
	}
	.commentMeta .control.edit:before
	{
		content: "\f040";
	}
	.commentMeta .control.delete:before
	{
		content: "\f014";
	}
	.commentMeta .control.deleteSpam:before
	{
		content: "\f05e";
	}
	.commentMeta .control.ip:before,
	.mediaMeta .control.ip:before
	{
		content: "\f124";
	}
	.commentMeta .control.like:before,
	.mediaMeta .control.like:before
	{
		content: "\f164";
	}
	.commentMeta .control.unlike:before,
	.mediaMeta .control.unlike:before
	{
		content: "\f165";
	}
	.commentMeta .control.MultiQuoteControl:before
	{
		content: "\f10d";
	}
	.commentMeta .control.history:before
	{
		content: "\f1da";
	}
	.commentMeta .control.warn:before
	{
		content: "\f071";
	}
	.commentMeta .control.report:before,
	.mediaMeta .control.report:before
	{
		content: "\f06a";
	}

	.commentMeta .control.postComment:before
	{
		content: "\f075";
	}











.topRightBlocks,
.midRightBlocks,
.btmRightBlocks { float: none; }



html.sidebar {
	width: auto !important;
	float: none !important;
	font-size: 100% !important;
}


.sidebar .userMood a {margin-left: 0; display: inline-block;}




.hasFlexbox .articleItem .metaData {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex; 
	-ms-flex-wrap: wrap; 
	    flex-wrap: wrap;
}

.hasFlexbox .articleItem .metaData .statData {
	-webkit-box-ordinal-group: 2;
	    -ms-flex-order: 1;
	        order: 1;
}

.hasFlexbox .articleItem .metaData .dateData {
	-webkit-box-flex: 1;
	    -ms-flex-positive: 1;
	        flex-grow: 1;
}

/* --- material.css --- */

/* MaterialDesignIcons.com */
@font-face {
  font-family: "Material Design Icons";
  src: url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.eot?v=1.6.50");
  src: url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.eot?#iefix&v=1.6.50") format("embedded-opentype"), url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.woff2?v=1.6.50") format("woff2"), url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.woff?v=1.6.50") format("woff"), url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.ttf?v=1.6.50") format("truetype"), url("styles/canadavisa/material/fonts/materialDesign-icons/materialdesignicons-webfont.svg?v=1.6.50#materialdesigniconsregular") format("svg");
  font-weight: normal;
  font-style: normal;
}
.mdi {
  display: inline-block;
  font-family: "Material Design Icons";
  font-weight: normal;
  line-height: 1;
  letter-spacing: normal;
  font-size: inherit;
  font-style: normal;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transform:  translate(0, 0); -moz-transform:  translate(0, 0); -o-transform:  translate(0, 0); -ms-transform:  translate(0, 0);transform: translate(0, 0);
}

.mdi-access-point:before {
  content: "\F002";
}

.mdi-access-point-network:before {
  content: "\F003";
}

.mdi-account:before {
  content: "\F004";
}

.mdi-account-alert:before {
  content: "\F005";
}

.mdi-account-box:before {
  content: "\F006";
}

.mdi-account-box-outline:before {
  content: "\F007";
}

.mdi-account-card-details:before {
  content: "\F5D2";
}

.mdi-account-check:before {
  content: "\F008";
}

.mdi-account-circle:before {
  content: "\F009";
}

.mdi-account-convert:before {
  content: "\F00A";
}

.mdi-account-key:before {
  content: "\F00B";
}

.mdi-account-location:before {
  content: "\F00C";
}

.mdi-account-minus:before {
  content: "\F00D";
}

.mdi-account-multiple:before {
  content: "\F00E";
}

.mdi-account-multiple-minus:before {
  content: "\F5D3";
}

.mdi-account-multiple-outline:before {
  content: "\F00F";
}

.mdi-account-multiple-plus:before {
  content: "\F010";
}

.mdi-account-network:before {
  content: "\F011";
}

.mdi-account-off:before {
  content: "\F012";
}

.mdi-account-outline:before {
  content: "\F013";
}

.mdi-account-plus:before {
  content: "\F014";
}

.mdi-account-remove:before {
  content: "\F015";
}

.mdi-account-search:before {
  content: "\F016";
}

.mdi-account-settings:before {
  content: "\F630";
}

.mdi-account-settings-variant:before {
  content: "\F631";
}

.mdi-account-star:before {
  content: "\F017";
}

.mdi-account-star-variant:before {
  content: "\F018";
}

.mdi-account-switch:before {
  content: "\F019";
}

.mdi-adjust:before {
  content: "\F01A";
}

.mdi-air-conditioner:before {
  content: "\F01B";
}

.mdi-airballoon:before {
  content: "\F01C";
}

.mdi-airplane:before {
  content: "\F01D";
}

.mdi-airplane-landing:before {
  content: "\F5D4";
}

.mdi-airplane-off:before {
  content: "\F01E";
}

.mdi-airplane-takeoff:before {
  content: "\F5D5";
}

.mdi-airplay:before {
  content: "\F01F";
}

.mdi-alarm:before {
  content: "\F020";
}

.mdi-alarm-check:before {
  content: "\F021";
}

.mdi-alarm-multiple:before {
  content: "\F022";
}

.mdi-alarm-off:before {
  content: "\F023";
}

.mdi-alarm-plus:before {
  content: "\F024";
}

.mdi-album:before {
  content: "\F025";
}

.mdi-alert:before {
  content: "\F026";
}

.mdi-alert-box:before {
  content: "\F027";
}

.mdi-alert-circle:before {
  content: "\F028";
}

.mdi-alert-circle-outline:before {
  content: "\F5D6";
}

.mdi-alert-octagon:before {
  content: "\F029";
}

.mdi-alert-outline:before {
  content: "\F02A";
}

.mdi-alpha:before {
  content: "\F02B";
}

.mdi-alphabetical:before {
  content: "\F02C";
}

.mdi-altimeter:before {
  content: "\F5D7";
}

.mdi-amazon:before {
  content: "\F02D";
}

.mdi-amazon-clouddrive:before {
  content: "\F02E";
}

.mdi-ambulance:before {
  content: "\F02F";
}

.mdi-amplifier:before {
  content: "\F030";
}

.mdi-anchor:before {
  content: "\F031";
}

.mdi-android:before {
  content: "\F032";
}

.mdi-android-debug-bridge:before {
  content: "\F033";
}

.mdi-android-studio:before {
  content: "\F034";
}

.mdi-animation:before {
  content: "\F5D8";
}

.mdi-apple:before {
  content: "\F035";
}

.mdi-apple-finder:before {
  content: "\F036";
}

.mdi-apple-ios:before {
  content: "\F037";
}

.mdi-apple-keyboard-caps:before {
  content: "\F632";
}

.mdi-apple-keyboard-command:before {
  content: "\F633";
}

.mdi-apple-keyboard-control:before {
  content: "\F634";
}

.mdi-apple-keyboard-option:before {
  content: "\F635";
}

.mdi-apple-keyboard-shift:before {
  content: "\F636";
}

.mdi-apple-mobileme:before {
  content: "\F038";
}

.mdi-apple-safari:before {
  content: "\F039";
}

.mdi-application:before {
  content: "\F614";
}

.mdi-appnet:before {
  content: "\F03A";
}

.mdi-apps:before {
  content: "\F03B";
}

.mdi-archive:before {
  content: "\F03C";
}

.mdi-arrange-bring-forward:before {
  content: "\F03D";
}

.mdi-arrange-bring-to-front:before {
  content: "\F03E";
}

.mdi-arrange-send-backward:before {
  content: "\F03F";
}

.mdi-arrange-send-to-back:before {
  content: "\F040";
}

.mdi-arrow-all:before {
  content: "\F041";
}

.mdi-arrow-bottom-left:before {
  content: "\F042";
}

.mdi-arrow-bottom-right:before {
  content: "\F043";
}

.mdi-arrow-compress:before {
  content: "\F615";
}

.mdi-arrow-compress-all:before {
  content: "\F044";
}

.mdi-arrow-down:before {
  content: "\F045";
}

.mdi-arrow-down-bold:before {
  content: "\F046";
}

.mdi-arrow-down-bold-circle:before {
  content: "\F047";
}

.mdi-arrow-down-bold-circle-outline:before {
  content: "\F048";
}

.mdi-arrow-down-bold-hexagon-outline:before {
  content: "\F049";
}

.mdi-arrow-down-drop-circle:before {
  content: "\F04A";
}

.mdi-arrow-down-drop-circle-outline:before {
  content: "\F04B";
}

.mdi-arrow-expand:before {
  content: "\F616";
}

.mdi-arrow-expand-all:before {
  content: "\F04C";
}

.mdi-arrow-left:before {
  content: "\F04D";
}

.mdi-arrow-left-bold:before {
  content: "\F04E";
}

.mdi-arrow-left-bold-circle:before {
  content: "\F04F";
}

.mdi-arrow-left-bold-circle-outline:before {
  content: "\F050";
}

.mdi-arrow-left-bold-hexagon-outline:before {
  content: "\F051";
}

.mdi-arrow-left-drop-circle:before {
  content: "\F052";
}

.mdi-arrow-left-drop-circle-outline:before {
  content: "\F053";
}

.mdi-arrow-right:before {
  content: "\F054";
}

.mdi-arrow-right-bold:before {
  content: "\F055";
}

.mdi-arrow-right-bold-circle:before {
  content: "\F056";
}

.mdi-arrow-right-bold-circle-outline:before {
  content: "\F057";
}

.mdi-arrow-right-bold-hexagon-outline:before {
  content: "\F058";
}

.mdi-arrow-right-drop-circle:before {
  content: "\F059";
}

.mdi-arrow-right-drop-circle-outline:before {
  content: "\F05A";
}

.mdi-arrow-top-left:before {
  content: "\F05B";
}

.mdi-arrow-top-right:before {
  content: "\F05C";
}

.mdi-arrow-up:before {
  content: "\F05D";
}

.mdi-arrow-up-bold:before {
  content: "\F05E";
}

.mdi-arrow-up-bold-circle:before {
  content: "\F05F";
}

.mdi-arrow-up-bold-circle-outline:before {
  content: "\F060";
}

.mdi-arrow-up-bold-hexagon-outline:before {
  content: "\F061";
}

.mdi-arrow-up-drop-circle:before {
  content: "\F062";
}

.mdi-arrow-up-drop-circle-outline:before {
  content: "\F063";
}

.mdi-assistant:before {
  content: "\F064";
}

.mdi-at:before {
  content: "\F065";
}

.mdi-attachment:before {
  content: "\F066";
}

.mdi-audiobook:before {
  content: "\F067";
}

.mdi-auto-fix:before {
  content: "\F068";
}

.mdi-auto-upload:before {
  content: "\F069";
}

.mdi-autorenew:before {
  content: "\F06A";
}

.mdi-av-timer:before {
  content: "\F06B";
}

.mdi-baby:before {
  content: "\F06C";
}

.mdi-backburger:before {
  content: "\F06D";
}

.mdi-backspace:before {
  content: "\F06E";
}

.mdi-backup-restore:before {
  content: "\F06F";
}

.mdi-bank:before {
  content: "\F070";
}

.mdi-barcode:before {
  content: "\F071";
}

.mdi-barcode-scan:before {
  content: "\F072";
}

.mdi-barley:before {
  content: "\F073";
}

.mdi-barrel:before {
  content: "\F074";
}

.mdi-basecamp:before {
  content: "\F075";
}

.mdi-basket:before {
  content: "\F076";
}

.mdi-basket-fill:before {
  content: "\F077";
}

.mdi-basket-unfill:before {
  content: "\F078";
}

.mdi-battery:before {
  content: "\F079";
}

.mdi-battery-10:before {
  content: "\F07A";
}

.mdi-battery-20:before {
  content: "\F07B";
}

.mdi-battery-30:before {
  content: "\F07C";
}

.mdi-battery-40:before {
  content: "\F07D";
}

.mdi-battery-50:before {
  content: "\F07E";
}

.mdi-battery-60:before {
  content: "\F07F";
}

.mdi-battery-70:before {
  content: "\F080";
}

.mdi-battery-80:before {
  content: "\F081";
}

.mdi-battery-90:before {
  content: "\F082";
}

.mdi-battery-alert:before {
  content: "\F083";
}

.mdi-battery-charging:before {
  content: "\F084";
}

.mdi-battery-charging-100:before {
  content: "\F085";
}

.mdi-battery-charging-20:before {
  content: "\F086";
}

.mdi-battery-charging-30:before {
  content: "\F087";
}

.mdi-battery-charging-40:before {
  content: "\F088";
}

.mdi-battery-charging-60:before {
  content: "\F089";
}

.mdi-battery-charging-80:before {
  content: "\F08A";
}

.mdi-battery-charging-90:before {
  content: "\F08B";
}

.mdi-battery-minus:before {
  content: "\F08C";
}

.mdi-battery-negative:before {
  content: "\F08D";
}

.mdi-battery-outline:before {
  content: "\F08E";
}

.mdi-battery-plus:before {
  content: "\F08F";
}

.mdi-battery-positive:before {
  content: "\F090";
}

.mdi-battery-unknown:before {
  content: "\F091";
}

.mdi-beach:before {
  content: "\F092";
}

.mdi-beats:before {
  content: "\F097";
}

.mdi-beer:before {
  content: "\F098";
}

.mdi-behance:before {
  content: "\F099";
}

.mdi-bell:before {
  content: "\F09A";
}

.mdi-bell-off:before {
  content: "\F09B";
}

.mdi-bell-outline:before {
  content: "\F09C";
}

.mdi-bell-plus:before {
  content: "\F09D";
}

.mdi-bell-ring:before {
  content: "\F09E";
}

.mdi-bell-ring-outline:before {
  content: "\F09F";
}

.mdi-bell-sleep:before {
  content: "\F0A0";
}

.mdi-beta:before {
  content: "\F0A1";
}

.mdi-bible:before {
  content: "\F0A2";
}

.mdi-bike:before {
  content: "\F0A3";
}

.mdi-bing:before {
  content: "\F0A4";
}

.mdi-binoculars:before {
  content: "\F0A5";
}

.mdi-bio:before {
  content: "\F0A6";
}

.mdi-biohazard:before {
  content: "\F0A7";
}

.mdi-bitbucket:before {
  content: "\F0A8";
}

.mdi-black-mesa:before {
  content: "\F0A9";
}

.mdi-blackberry:before {
  content: "\F0AA";
}

.mdi-blender:before {
  content: "\F0AB";
}

.mdi-blinds:before {
  content: "\F0AC";
}

.mdi-block-helper:before {
  content: "\F0AD";
}

.mdi-blogger:before {
  content: "\F0AE";
}

.mdi-bluetooth:before {
  content: "\F0AF";
}

.mdi-bluetooth-audio:before {
  content: "\F0B0";
}

.mdi-bluetooth-connect:before {
  content: "\F0B1";
}

.mdi-bluetooth-off:before {
  content: "\F0B2";
}

.mdi-bluetooth-settings:before {
  content: "\F0B3";
}

.mdi-bluetooth-transfer:before {
  content: "\F0B4";
}

.mdi-blur:before {
  content: "\F0B5";
}

.mdi-blur-linear:before {
  content: "\F0B6";
}

.mdi-blur-off:before {
  content: "\F0B7";
}

.mdi-blur-radial:before {
  content: "\F0B8";
}

.mdi-bone:before {
  content: "\F0B9";
}

.mdi-book:before {
  content: "\F0BA";
}

.mdi-book-minus:before {
  content: "\F5D9";
}

.mdi-book-multiple:before {
  content: "\F0BB";
}

.mdi-book-multiple-variant:before {
  content: "\F0BC";
}

.mdi-book-open:before {
  content: "\F0BD";
}

.mdi-book-open-page-variant:before {
  content: "\F5DA";
}

.mdi-book-open-variant:before {
  content: "\F0BE";
}

.mdi-book-plus:before {
  content: "\F5DB";
}

.mdi-book-variant:before {
  content: "\F0BF";
}

.mdi-bookmark:before {
  content: "\F0C0";
}

.mdi-bookmark-check:before {
  content: "\F0C1";
}

.mdi-bookmark-music:before {
  content: "\F0C2";
}

.mdi-bookmark-outline:before {
  content: "\F0C3";
}

.mdi-bookmark-plus:before {
  content: "\F0C5";
}

.mdi-bookmark-plus-outline:before {
  content: "\F0C4";
}

.mdi-bookmark-remove:before {
  content: "\F0C6";
}

.mdi-boombox:before {
  content: "\F5DC";
}

.mdi-border-all:before {
  content: "\F0C7";
}

.mdi-border-bottom:before {
  content: "\F0C8";
}

.mdi-border-color:before {
  content: "\F0C9";
}

.mdi-border-horizontal:before {
  content: "\F0CA";
}

.mdi-border-inside:before {
  content: "\F0CB";
}

.mdi-border-left:before {
  content: "\F0CC";
}

.mdi-border-none:before {
  content: "\F0CD";
}

.mdi-border-outside:before {
  content: "\F0CE";
}

.mdi-border-right:before {
  content: "\F0CF";
}

.mdi-border-style:before {
  content: "\F0D0";
}

.mdi-border-top:before {
  content: "\F0D1";
}

.mdi-border-vertical:before {
  content: "\F0D2";
}

.mdi-bowl:before {
  content: "\F617";
}

.mdi-bowling:before {
  content: "\F0D3";
}

.mdi-box:before {
  content: "\F0D4";
}

.mdi-box-cutter:before {
  content: "\F0D5";
}

.mdi-box-shadow:before {
  content: "\F637";
}

.mdi-bridge:before {
  content: "\F618";
}

.mdi-briefcase:before {
  content: "\F0D6";
}

.mdi-briefcase-check:before {
  content: "\F0D7";
}

.mdi-briefcase-download:before {
  content: "\F0D8";
}

.mdi-briefcase-upload:before {
  content: "\F0D9";
}

.mdi-brightness-1:before {
  content: "\F0DA";
}

.mdi-brightness-2:before {
  content: "\F0DB";
}

.mdi-brightness-3:before {
  content: "\F0DC";
}

.mdi-brightness-4:before {
  content: "\F0DD";
}

.mdi-brightness-5:before {
  content: "\F0DE";
}

.mdi-brightness-6:before {
  content: "\F0DF";
}

.mdi-brightness-7:before {
  content: "\F0E0";
}

.mdi-brightness-auto:before {
  content: "\F0E1";
}

.mdi-broom:before {
  content: "\F0E2";
}

.mdi-brush:before {
  content: "\F0E3";
}

.mdi-buffer:before {
  content: "\F619";
}

.mdi-bug:before {
  content: "\F0E4";
}

.mdi-bulletin-board:before {
  content: "\F0E5";
}

.mdi-bullhorn:before {
  content: "\F0E6";
}

.mdi-bullseye:before {
  content: "\F5DD";
}

.mdi-burst-mode:before {
  content: "\F5DE";
}

.mdi-bus:before {
  content: "\F0E7";
}

.mdi-cached:before {
  content: "\F0E8";
}

.mdi-cake:before {
  content: "\F0E9";
}

.mdi-cake-layered:before {
  content: "\F0EA";
}

.mdi-cake-variant:before {
  content: "\F0EB";
}

.mdi-calculator:before {
  content: "\F0EC";
}

.mdi-calendar:before {
  content: "\F0ED";
}

.mdi-calendar-blank:before {
  content: "\F0EE";
}

.mdi-calendar-check:before {
  content: "\F0EF";
}

.mdi-calendar-clock:before {
  content: "\F0F0";
}

.mdi-calendar-multiple:before {
  content: "\F0F1";
}

.mdi-calendar-multiple-check:before {
  content: "\F0F2";
}

.mdi-calendar-plus:before {
  content: "\F0F3";
}

.mdi-calendar-remove:before {
  content: "\F0F4";
}

.mdi-calendar-text:before {
  content: "\F0F5";
}

.mdi-calendar-today:before {
  content: "\F0F6";
}

.mdi-call-made:before {
  content: "\F0F7";
}

.mdi-call-merge:before {
  content: "\F0F8";
}

.mdi-call-missed:before {
  content: "\F0F9";
}

.mdi-call-received:before {
  content: "\F0FA";
}

.mdi-call-split:before {
  content: "\F0FB";
}

.mdi-camcorder:before {
  content: "\F0FC";
}

.mdi-camcorder-box:before {
  content: "\F0FD";
}

.mdi-camcorder-box-off:before {
  content: "\F0FE";
}

.mdi-camcorder-off:before {
  content: "\F0FF";
}

.mdi-camera:before {
  content: "\F100";
}

.mdi-camera-enhance:before {
  content: "\F101";
}

.mdi-camera-front:before {
  content: "\F102";
}

.mdi-camera-front-variant:before {
  content: "\F103";
}

.mdi-camera-iris:before {
  content: "\F104";
}

.mdi-camera-off:before {
  content: "\F5DF";
}

.mdi-camera-party-mode:before {
  content: "\F105";
}

.mdi-camera-rear:before {
  content: "\F106";
}

.mdi-camera-rear-variant:before {
  content: "\F107";
}

.mdi-camera-switch:before {
  content: "\F108";
}

.mdi-camera-timer:before {
  content: "\F109";
}

.mdi-candle:before {
  content: "\F5E2";
}

.mdi-candycane:before {
  content: "\F10A";
}

.mdi-car:before {
  content: "\F10B";
}

.mdi-car-battery:before {
  content: "\F10C";
}

.mdi-car-connected:before {
  content: "\F10D";
}

.mdi-car-wash:before {
  content: "\F10E";
}

.mdi-cards:before {
  content: "\F638";
}

.mdi-cards-outline:before {
  content: "\F639";
}

.mdi-cards-playing-outline:before {
  content: "\F63A";
}

.mdi-carrot:before {
  content: "\F10F";
}

.mdi-cart:before {
  content: "\F110";
}

.mdi-cart-off:before {
  content: "\F66B";
}

.mdi-cart-outline:before {
  content: "\F111";
}

.mdi-cart-plus:before {
  content: "\F112";
}

.mdi-case-sensitive-alt:before {
  content: "\F113";
}

.mdi-cash:before {
  content: "\F114";
}

.mdi-cash-100:before {
  content: "\F115";
}

.mdi-cash-multiple:before {
  content: "\F116";
}

.mdi-cash-usd:before {
  content: "\F117";
}

.mdi-cast:before {
  content: "\F118";
}

.mdi-cast-connected:before {
  content: "\F119";
}

.mdi-castle:before {
  content: "\F11A";
}

.mdi-cat:before {
  content: "\F11B";
}

.mdi-cellphone:before {
  content: "\F11C";
}

.mdi-cellphone-android:before {
  content: "\F11D";
}

.mdi-cellphone-basic:before {
  content: "\F11E";
}

.mdi-cellphone-dock:before {
  content: "\F11F";
}

.mdi-cellphone-iphone:before {
  content: "\F120";
}

.mdi-cellphone-link:before {
  content: "\F121";
}

.mdi-cellphone-link-off:before {
  content: "\F122";
}

.mdi-cellphone-settings:before {
  content: "\F123";
}

.mdi-certificate:before {
  content: "\F124";
}

.mdi-chair-school:before {
  content: "\F125";
}

.mdi-chart-arc:before {
  content: "\F126";
}

.mdi-chart-areaspline:before {
  content: "\F127";
}

.mdi-chart-bar:before {
  content: "\F128";
}

.mdi-chart-bubble:before {
  content: "\F5E3";
}

.mdi-chart-gantt:before {
  content: "\F66C";
}

.mdi-chart-histogram:before {
  content: "\F129";
}

.mdi-chart-line:before {
  content: "\F12A";
}

.mdi-chart-pie:before {
  content: "\F12B";
}

.mdi-chart-scatterplot-hexbin:before {
  content: "\F66D";
}

.mdi-chart-timeline:before {
  content: "\F66E";
}

.mdi-check:before {
  content: "\F12C";
}

.mdi-check-all:before {
  content: "\F12D";
}

.mdi-check-circle:before {
  content: "\F5E0";
}

.mdi-check-circle-outline:before {
  content: "\F5E1";
}

.mdi-checkbox-blank:before {
  content: "\F12E";
}

.mdi-checkbox-blank-circle:before {
  content: "\F12F";
}

.mdi-checkbox-blank-circle-outline:before {
  content: "\F130";
}

.mdi-checkbox-blank-outline:before {
  content: "\F131";
}

.mdi-checkbox-marked:before {
  content: "\F132";
}

.mdi-checkbox-marked-circle:before {
  content: "\F133";
}

.mdi-checkbox-marked-circle-outline:before {
  content: "\F134";
}

.mdi-checkbox-marked-outline:before {
  content: "\F135";
}

.mdi-checkbox-multiple-blank:before {
  content: "\F136";
}

.mdi-checkbox-multiple-blank-circle:before {
  content: "\F63B";
}

.mdi-checkbox-multiple-blank-circle-outline:before {
  content: "\F63C";
}

.mdi-checkbox-multiple-blank-outline:before {
  content: "\F137";
}

.mdi-checkbox-multiple-marked:before {
  content: "\F138";
}

.mdi-checkbox-multiple-marked-circle:before {
  content: "\F63D";
}

.mdi-checkbox-multiple-marked-circle-outline:before {
  content: "\F63E";
}

.mdi-checkbox-multiple-marked-outline:before {
  content: "\F139";
}

.mdi-checkerboard:before {
  content: "\F13A";
}

.mdi-chemical-weapon:before {
  content: "\F13B";
}

.mdi-chevron-double-down:before {
  content: "\F13C";
}

.mdi-chevron-double-left:before {
  content: "\F13D";
}

.mdi-chevron-double-right:before {
  content: "\F13E";
}

.mdi-chevron-double-up:before {
  content: "\F13F";
}

.mdi-chevron-down:before {
  content: "\F140";
}

.mdi-chevron-left:before {
  content: "\F141";
}

.mdi-chevron-right:before {
  content: "\F142";
}

.mdi-chevron-up:before {
  content: "\F143";
}

.mdi-chip:before {
  content: "\F61A";
}

.mdi-church:before {
  content: "\F144";
}

.mdi-cisco-webex:before {
  content: "\F145";
}

.mdi-city:before {
  content: "\F146";
}

.mdi-clipboard:before {
  content: "\F147";
}

.mdi-clipboard-account:before {
  content: "\F148";
}

.mdi-clipboard-alert:before {
  content: "\F149";
}

.mdi-clipboard-arrow-down:before {
  content: "\F14A";
}

.mdi-clipboard-arrow-left:before {
  content: "\F14B";
}

.mdi-clipboard-check:before {
  content: "\F14C";
}

.mdi-clipboard-outline:before {
  content: "\F14D";
}

.mdi-clipboard-text:before {
  content: "\F14E";
}

.mdi-clippy:before {
  content: "\F14F";
}

.mdi-clock:before {
  content: "\F150";
}

.mdi-clock-alert:before {
  content: "\F5CE";
}

.mdi-clock-end:before {
  content: "\F151";
}

.mdi-clock-fast:before {
  content: "\F152";
}

.mdi-clock-in:before {
  content: "\F153";
}

.mdi-clock-out:before {
  content: "\F154";
}

.mdi-clock-start:before {
  content: "\F155";
}

.mdi-close:before {
  content: "\F156";
}

.mdi-close-box:before {
  content: "\F157";
}

.mdi-close-box-outline:before {
  content: "\F158";
}

.mdi-close-circle:before {
  content: "\F159";
}

.mdi-close-circle-outline:before {
  content: "\F15A";
}

.mdi-close-network:before {
  content: "\F15B";
}

.mdi-close-octagon:before {
  content: "\F15C";
}

.mdi-close-octagon-outline:before {
  content: "\F15D";
}

.mdi-closed-caption:before {
  content: "\F15E";
}

.mdi-cloud:before {
  content: "\F15F";
}

.mdi-cloud-check:before {
  content: "\F160";
}

.mdi-cloud-circle:before {
  content: "\F161";
}

.mdi-cloud-download:before {
  content: "\F162";
}

.mdi-cloud-outline:before {
  content: "\F163";
}

.mdi-cloud-outline-off:before {
  content: "\F164";
}

.mdi-cloud-print:before {
  content: "\F165";
}

.mdi-cloud-print-outline:before {
  content: "\F166";
}

.mdi-cloud-sync:before {
  content: "\F63F";
}

.mdi-cloud-upload:before {
  content: "\F167";
}

.mdi-code-array:before {
  content: "\F168";
}

.mdi-code-braces:before {
  content: "\F169";
}

.mdi-code-brackets:before {
  content: "\F16A";
}

.mdi-code-equal:before {
  content: "\F16B";
}

.mdi-code-greater-than:before {
  content: "\F16C";
}

.mdi-code-greater-than-or-equal:before {
  content: "\F16D";
}

.mdi-code-less-than:before {
  content: "\F16E";
}

.mdi-code-less-than-or-equal:before {
  content: "\F16F";
}

.mdi-code-not-equal:before {
  content: "\F170";
}

.mdi-code-not-equal-variant:before {
  content: "\F171";
}

.mdi-code-parentheses:before {
  content: "\F172";
}

.mdi-code-string:before {
  content: "\F173";
}

.mdi-code-tags:before {
  content: "\F174";
}

.mdi-codepen:before {
  content: "\F175";
}

.mdi-coffee:before {
  content: "\F176";
}

.mdi-coffee-to-go:before {
  content: "\F177";
}

.mdi-coin:before {
  content: "\F178";
}

.mdi-collage:before {
  content: "\F640";
}

.mdi-color-helper:before {
  content: "\F179";
}

.mdi-comment:before {
  content: "\F17A";
}

.mdi-comment-account:before {
  content: "\F17B";
}

.mdi-comment-account-outline:before {
  content: "\F17C";
}

.mdi-comment-alert:before {
  content: "\F17D";
}

.mdi-comment-alert-outline:before {
  content: "\F17E";
}

.mdi-comment-check:before {
  content: "\F17F";
}

.mdi-comment-check-outline:before {
  content: "\F180";
}

.mdi-comment-multiple-outline:before {
  content: "\F181";
}

.mdi-comment-outline:before {
  content: "\F182";
}

.mdi-comment-plus-outline:before {
  content: "\F183";
}

.mdi-comment-processing:before {
  content: "\F184";
}

.mdi-comment-processing-outline:before {
  content: "\F185";
}

.mdi-comment-question-outline:before {
  content: "\F186";
}

.mdi-comment-remove-outline:before {
  content: "\F187";
}

.mdi-comment-text:before {
  content: "\F188";
}

.mdi-comment-text-outline:before {
  content: "\F189";
}

.mdi-compare:before {
  content: "\F18A";
}

.mdi-compass:before {
  content: "\F18B";
}

.mdi-compass-outline:before {
  content: "\F18C";
}

.mdi-console:before {
  content: "\F18D";
}

.mdi-contact-mail:before {
  content: "\F18E";
}

.mdi-content-copy:before {
  content: "\F18F";
}

.mdi-content-cut:before {
  content: "\F190";
}

.mdi-content-duplicate:before {
  content: "\F191";
}

.mdi-content-paste:before {
  content: "\F192";
}

.mdi-content-save:before {
  content: "\F193";
}

.mdi-content-save-all:before {
  content: "\F194";
}

.mdi-content-save-settings:before {
  content: "\F61B";
}

.mdi-contrast:before {
  content: "\F195";
}

.mdi-contrast-box:before {
  content: "\F196";
}

.mdi-contrast-circle:before {
  content: "\F197";
}

.mdi-cookie:before {
  content: "\F198";
}

.mdi-copyright:before {
  content: "\F5E6";
}

.mdi-counter:before {
  content: "\F199";
}

.mdi-cow:before {
  content: "\F19A";
}

.mdi-credit-card:before {
  content: "\F19B";
}

.mdi-credit-card-multiple:before {
  content: "\F19C";
}

.mdi-credit-card-off:before {
  content: "\F5E4";
}

.mdi-credit-card-scan:before {
  content: "\F19D";
}

.mdi-crop:before {
  content: "\F19E";
}

.mdi-crop-free:before {
  content: "\F19F";
}

.mdi-crop-landscape:before {
  content: "\F1A0";
}

.mdi-crop-portrait:before {
  content: "\F1A1";
}

.mdi-crop-square:before {
  content: "\F1A2";
}

.mdi-crosshairs:before {
  content: "\F1A3";
}

.mdi-crosshairs-gps:before {
  content: "\F1A4";
}

.mdi-crown:before {
  content: "\F1A5";
}

.mdi-cube:before {
  content: "\F1A6";
}

.mdi-cube-outline:before {
  content: "\F1A7";
}

.mdi-cube-send:before {
  content: "\F1A8";
}

.mdi-cube-unfolded:before {
  content: "\F1A9";
}

.mdi-cup:before {
  content: "\F1AA";
}

.mdi-cup-off:before {
  content: "\F5E5";
}

.mdi-cup-water:before {
  content: "\F1AB";
}

.mdi-currency-btc:before {
  content: "\F1AC";
}

.mdi-currency-eur:before {
  content: "\F1AD";
}

.mdi-currency-gbp:before {
  content: "\F1AE";
}

.mdi-currency-inr:before {
  content: "\F1AF";
}

.mdi-currency-ngn:before {
  content: "\F1B0";
}

.mdi-currency-rub:before {
  content: "\F1B1";
}

.mdi-currency-try:before {
  content: "\F1B2";
}

.mdi-currency-usd:before {
  content: "\F1B3";
}

.mdi-cursor-default:before {
  content: "\F1B4";
}

.mdi-cursor-default-outline:before {
  content: "\F1B5";
}

.mdi-cursor-move:before {
  content: "\F1B6";
}

.mdi-cursor-pointer:before {
  content: "\F1B7";
}

.mdi-cursor-text:before {
  content: "\F5E7";
}

.mdi-database:before {
  content: "\F1B8";
}

.mdi-database-minus:before {
  content: "\F1B9";
}

.mdi-database-plus:before {
  content: "\F1BA";
}

.mdi-debug-step-into:before {
  content: "\F1BB";
}

.mdi-debug-step-out:before {
  content: "\F1BC";
}

.mdi-debug-step-over:before {
  content: "\F1BD";
}

.mdi-decimal-decrease:before {
  content: "\F1BE";
}

.mdi-decimal-increase:before {
  content: "\F1BF";
}

.mdi-delete:before {
  content: "\F1C0";
}

.mdi-delete-forever:before {
  content: "\F5E8";
}

.mdi-delete-sweep:before {
  content: "\F5E9";
}

.mdi-delete-variant:before {
  content: "\F1C1";
}

.mdi-delta:before {
  content: "\F1C2";
}

.mdi-deskphone:before {
  content: "\F1C3";
}

.mdi-desktop-mac:before {
  content: "\F1C4";
}

.mdi-desktop-tower:before {
  content: "\F1C5";
}

.mdi-details:before {
  content: "\F1C6";
}

.mdi-deviantart:before {
  content: "\F1C7";
}

.mdi-dialpad:before {
  content: "\F61C";
}

.mdi-diamond:before {
  content: "\F1C8";
}

.mdi-dice-1:before {
  content: "\F1CA";
}

.mdi-dice-2:before {
  content: "\F1CB";
}

.mdi-dice-3:before {
  content: "\F1CC";
}

.mdi-dice-4:before {
  content: "\F1CD";
}

.mdi-dice-5:before {
  content: "\F1CE";
}

.mdi-dice-6:before {
  content: "\F1CF";
}

.mdi-dice-d20:before {
  content: "\F5EA";
}

.mdi-dice-d4:before {
  content: "\F5EB";
}

.mdi-dice-d6:before {
  content: "\F5EC";
}

.mdi-dice-d8:before {
  content: "\F5ED";
}

.mdi-dictionary:before {
  content: "\F61D";
}

.mdi-directions:before {
  content: "\F1D0";
}

.mdi-directions-fork:before {
  content: "\F641";
}

.mdi-discord:before {
  content: "\F66F";
}

.mdi-disk:before {
  content: "\F5EE";
}

.mdi-disk-alert:before {
  content: "\F1D1";
}

.mdi-disqus:before {
  content: "\F1D2";
}

.mdi-disqus-outline:before {
  content: "\F1D3";
}

.mdi-division:before {
  content: "\F1D4";
}

.mdi-division-box:before {
  content: "\F1D5";
}

.mdi-dns:before {
  content: "\F1D6";
}

.mdi-domain:before {
  content: "\F1D7";
}

.mdi-dots-horizontal:before {
  content: "\F1D8";
}

.mdi-dots-vertical:before {
  content: "\F1D9";
}

.mdi-download:before {
  content: "\F1DA";
}

.mdi-drag:before {
  content: "\F1DB";
}

.mdi-drag-horizontal:before {
  content: "\F1DC";
}

.mdi-drag-vertical:before {
  content: "\F1DD";
}

.mdi-drawing:before {
  content: "\F1DE";
}

.mdi-drawing-box:before {
  content: "\F1DF";
}

.mdi-dribbble:before {
  content: "\F1E0";
}

.mdi-dribbble-box:before {
  content: "\F1E1";
}

.mdi-drone:before {
  content: "\F1E2";
}

.mdi-dropbox:before {
  content: "\F1E3";
}

.mdi-drupal:before {
  content: "\F1E4";
}

.mdi-duck:before {
  content: "\F1E5";
}

.mdi-dumbbell:before {
  content: "\F1E6";
}

.mdi-earth:before {
  content: "\F1E7";
}

.mdi-earth-off:before {
  content: "\F1E8";
}

.mdi-edge:before {
  content: "\F1E9";
}

.mdi-eject:before {
  content: "\F1EA";
}

.mdi-elevation-decline:before {
  content: "\F1EB";
}

.mdi-elevation-rise:before {
  content: "\F1EC";
}

.mdi-elevator:before {
  content: "\F1ED";
}

.mdi-email:before {
  content: "\F1EE";
}

.mdi-email-open:before {
  content: "\F1EF";
}

.mdi-email-open-outline:before {
  content: "\F5EF";
}

.mdi-email-outline:before {
  content: "\F1F0";
}

.mdi-email-secure:before {
  content: "\F1F1";
}

.mdi-email-variant:before {
  content: "\F5F0";
}

.mdi-emoticon:before {
  content: "\F1F2";
}

.mdi-emoticon-cool:before {
  content: "\F1F3";
}

.mdi-emoticon-devil:before {
  content: "\F1F4";
}

.mdi-emoticon-happy:before {
  content: "\F1F5";
}

.mdi-emoticon-neutral:before {
  content: "\F1F6";
}

.mdi-emoticon-poop:before {
  content: "\F1F7";
}

.mdi-emoticon-sad:before {
  content: "\F1F8";
}

.mdi-emoticon-tongue:before {
  content: "\F1F9";
}

.mdi-engine:before {
  content: "\F1FA";
}

.mdi-engine-outline:before {
  content: "\F1FB";
}

.mdi-equal:before {
  content: "\F1FC";
}

.mdi-equal-box:before {
  content: "\F1FD";
}

.mdi-eraser:before {
  content: "\F1FE";
}

.mdi-eraser-variant:before {
  content: "\F642";
}

.mdi-escalator:before {
  content: "\F1FF";
}

.mdi-ethernet:before {
  content: "\F200";
}

.mdi-ethernet-cable:before {
  content: "\F201";
}

.mdi-ethernet-cable-off:before {
  content: "\F202";
}

.mdi-etsy:before {
  content: "\F203";
}

.mdi-ev-station:before {
  content: "\F5F1";
}

.mdi-evernote:before {
  content: "\F204";
}

.mdi-exclamation:before {
  content: "\F205";
}

.mdi-exit-to-app:before {
  content: "\F206";
}

.mdi-export:before {
  content: "\F207";
}

.mdi-eye:before {
  content: "\F208";
}

.mdi-eye-off:before {
  content: "\F209";
}

.mdi-eyedropper:before {
  content: "\F20A";
}

.mdi-eyedropper-variant:before {
  content: "\F20B";
}

.mdi-face:before {
  content: "\F643";
}

.mdi-face-profile:before {
  content: "\F644";
}

.mdi-facebook:before {
  content: "\F20C";
}

.mdi-facebook-box:before {
  content: "\F20D";
}

.mdi-facebook-messenger:before {
  content: "\F20E";
}

.mdi-factory:before {
  content: "\F20F";
}

.mdi-fan:before {
  content: "\F210";
}

.mdi-fast-forward:before {
  content: "\F211";
}

.mdi-fax:before {
  content: "\F212";
}

.mdi-ferry:before {
  content: "\F213";
}

.mdi-file:before {
  content: "\F214";
}

.mdi-file-chart:before {
  content: "\F215";
}

.mdi-file-check:before {
  content: "\F216";
}

.mdi-file-cloud:before {
  content: "\F217";
}

.mdi-file-delimited:before {
  content: "\F218";
}

.mdi-file-document:before {
  content: "\F219";
}

.mdi-file-document-box:before {
  content: "\F21A";
}

.mdi-file-excel:before {
  content: "\F21B";
}

.mdi-file-excel-box:before {
  content: "\F21C";
}

.mdi-file-export:before {
  content: "\F21D";
}

.mdi-file-find:before {
  content: "\F21E";
}

.mdi-file-hidden:before {
  content: "\F613";
}

.mdi-file-image:before {
  content: "\F21F";
}

.mdi-file-import:before {
  content: "\F220";
}

.mdi-file-lock:before {
  content: "\F221";
}

.mdi-file-multiple:before {
  content: "\F222";
}

.mdi-file-music:before {
  content: "\F223";
}

.mdi-file-outline:before {
  content: "\F224";
}

.mdi-file-pdf:before {
  content: "\F225";
}

.mdi-file-pdf-box:before {
  content: "\F226";
}

.mdi-file-powerpoint:before {
  content: "\F227";
}

.mdi-file-powerpoint-box:before {
  content: "\F228";
}

.mdi-file-presentation-box:before {
  content: "\F229";
}

.mdi-file-restore:before {
  content: "\F670";
}

.mdi-file-send:before {
  content: "\F22A";
}

.mdi-file-tree:before {
  content: "\F645";
}

.mdi-file-video:before {
  content: "\F22B";
}

.mdi-file-word:before {
  content: "\F22C";
}

.mdi-file-word-box:before {
  content: "\F22D";
}

.mdi-file-xml:before {
  content: "\F22E";
}

.mdi-film:before {
  content: "\F22F";
}

.mdi-filmstrip:before {
  content: "\F230";
}

.mdi-filmstrip-off:before {
  content: "\F231";
}

.mdi-filter:before {
  content: "\F232";
}

.mdi-filter-outline:before {
  content: "\F233";
}

.mdi-filter-remove:before {
  content: "\F234";
}

.mdi-filter-remove-outline:before {
  content: "\F235";
}

.mdi-filter-variant:before {
  content: "\F236";
}

.mdi-fingerprint:before {
  content: "\F237";
}

.mdi-fire:before {
  content: "\F238";
}

.mdi-firefox:before {
  content: "\F239";
}

.mdi-fish:before {
  content: "\F23A";
}

.mdi-flag:before {
  content: "\F23B";
}

.mdi-flag-checkered:before {
  content: "\F23C";
}

.mdi-flag-outline:before {
  content: "\F23D";
}

.mdi-flag-outline-variant:before {
  content: "\F23E";
}

.mdi-flag-triangle:before {
  content: "\F23F";
}

.mdi-flag-variant:before {
  content: "\F240";
}

.mdi-flash:before {
  content: "\F241";
}

.mdi-flash-auto:before {
  content: "\F242";
}

.mdi-flash-off:before {
  content: "\F243";
}

.mdi-flashlight:before {
  content: "\F244";
}

.mdi-flashlight-off:before {
  content: "\F245";
}

.mdi-flask:before {
  content: "\F093";
}

.mdi-flask-empty:before {
  content: "\F094";
}

.mdi-flask-empty-outline:before {
  content: "\F095";
}

.mdi-flask-outline:before {
  content: "\F096";
}

.mdi-flattr:before {
  content: "\F246";
}

.mdi-flip-to-back:before {
  content: "\F247";
}

.mdi-flip-to-front:before {
  content: "\F248";
}

.mdi-floppy:before {
  content: "\F249";
}

.mdi-flower:before {
  content: "\F24A";
}

.mdi-folder:before {
  content: "\F24B";
}

.mdi-folder-account:before {
  content: "\F24C";
}

.mdi-folder-download:before {
  content: "\F24D";
}

.mdi-folder-google-drive:before {
  content: "\F24E";
}

.mdi-folder-image:before {
  content: "\F24F";
}

.mdi-folder-lock:before {
  content: "\F250";
}

.mdi-folder-lock-open:before {
  content: "\F251";
}

.mdi-folder-move:before {
  content: "\F252";
}

.mdi-folder-multiple:before {
  content: "\F253";
}

.mdi-folder-multiple-image:before {
  content: "\F254";
}

.mdi-folder-multiple-outline:before {
  content: "\F255";
}

.mdi-folder-outline:before {
  content: "\F256";
}

.mdi-folder-plus:before {
  content: "\F257";
}

.mdi-folder-remove:before {
  content: "\F258";
}

.mdi-folder-upload:before {
  content: "\F259";
}

.mdi-food:before {
  content: "\F25A";
}

.mdi-food-apple:before {
  content: "\F25B";
}

.mdi-food-fork-drink:before {
  content: "\F5F2";
}

.mdi-food-off:before {
  content: "\F5F3";
}

.mdi-food-variant:before {
  content: "\F25C";
}

.mdi-football:before {
  content: "\F25D";
}

.mdi-football-australian:before {
  content: "\F25E";
}

.mdi-football-helmet:before {
  content: "\F25F";
}

.mdi-format-align-center:before {
  content: "\F260";
}

.mdi-format-align-justify:before {
  content: "\F261";
}

.mdi-format-align-left:before {
  content: "\F262";
}

.mdi-format-align-right:before {
  content: "\F263";
}

.mdi-format-annotation-plus:before {
  content: "\F646";
}

.mdi-format-bold:before {
  content: "\F264";
}

.mdi-format-clear:before {
  content: "\F265";
}

.mdi-format-color-fill:before {
  content: "\F266";
}

.mdi-format-float-center:before {
  content: "\F267";
}

.mdi-format-float-left:before {
  content: "\F268";
}

.mdi-format-float-none:before {
  content: "\F269";
}

.mdi-format-float-right:before {
  content: "\F26A";
}

.mdi-format-header-1:before {
  content: "\F26B";
}

.mdi-format-header-2:before {
  content: "\F26C";
}

.mdi-format-header-3:before {
  content: "\F26D";
}

.mdi-format-header-4:before {
  content: "\F26E";
}

.mdi-format-header-5:before {
  content: "\F26F";
}

.mdi-format-header-6:before {
  content: "\F270";
}

.mdi-format-header-decrease:before {
  content: "\F271";
}

.mdi-format-header-equal:before {
  content: "\F272";
}

.mdi-format-header-increase:before {
  content: "\F273";
}

.mdi-format-header-pound:before {
  content: "\F274";
}

.mdi-format-horizontal-align-center:before {
  content: "\F61E";
}

.mdi-format-horizontal-align-left:before {
  content: "\F61F";
}

.mdi-format-horizontal-align-right:before {
  content: "\F620";
}

.mdi-format-indent-decrease:before {
  content: "\F275";
}

.mdi-format-indent-increase:before {
  content: "\F276";
}

.mdi-format-italic:before {
  content: "\F277";
}

.mdi-format-line-spacing:before {
  content: "\F278";
}

.mdi-format-line-style:before {
  content: "\F5C8";
}

.mdi-format-line-weight:before {
  content: "\F5C9";
}

.mdi-format-list-bulleted:before {
  content: "\F279";
}

.mdi-format-list-bulleted-type:before {
  content: "\F27A";
}

.mdi-format-list-numbers:before {
  content: "\F27B";
}

.mdi-format-paint:before {
  content: "\F27C";
}

.mdi-format-paragraph:before {
  content: "\F27D";
}

.mdi-format-quote:before {
  content: "\F27E";
}

.mdi-format-size:before {
  content: "\F27F";
}

.mdi-format-strikethrough:before {
  content: "\F280";
}

.mdi-format-strikethrough-variant:before {
  content: "\F281";
}

.mdi-format-subscript:before {
  content: "\F282";
}

.mdi-format-superscript:before {
  content: "\F283";
}

.mdi-format-text:before {
  content: "\F284";
}

.mdi-format-textdirection-l-to-r:before {
  content: "\F285";
}

.mdi-format-textdirection-r-to-l:before {
  content: "\F286";
}

.mdi-format-title:before {
  content: "\F5F4";
}

.mdi-format-underline:before {
  content: "\F287";
}

.mdi-format-vertical-align-bottom:before {
  content: "\F621";
}

.mdi-format-vertical-align-center:before {
  content: "\F622";
}

.mdi-format-vertical-align-top:before {
  content: "\F623";
}

.mdi-format-wrap-inline:before {
  content: "\F288";
}

.mdi-format-wrap-square:before {
  content: "\F289";
}

.mdi-format-wrap-tight:before {
  content: "\F28A";
}

.mdi-format-wrap-top-bottom:before {
  content: "\F28B";
}

.mdi-forum:before {
  content: "\F28C";
}

.mdi-forward:before {
  content: "\F28D";
}

.mdi-foursquare:before {
  content: "\F28E";
}

.mdi-fridge:before {
  content: "\F28F";
}

.mdi-fridge-filled:before {
  content: "\F290";
}

.mdi-fridge-filled-bottom:before {
  content: "\F291";
}

.mdi-fridge-filled-top:before {
  content: "\F292";
}

.mdi-fullscreen:before {
  content: "\F293";
}

.mdi-fullscreen-exit:before {
  content: "\F294";
}

.mdi-function:before {
  content: "\F295";
}

.mdi-gamepad:before {
  content: "\F296";
}

.mdi-gamepad-variant:before {
  content: "\F297";
}

.mdi-gas-cylinder:before {
  content: "\F647";
}

.mdi-gas-station:before {
  content: "\F298";
}

.mdi-gate:before {
  content: "\F299";
}

.mdi-gauge:before {
  content: "\F29A";
}

.mdi-gavel:before {
  content: "\F29B";
}

.mdi-gender-female:before {
  content: "\F29C";
}

.mdi-gender-male:before {
  content: "\F29D";
}

.mdi-gender-male-female:before {
  content: "\F29E";
}

.mdi-gender-transgender:before {
  content: "\F29F";
}

.mdi-ghost:before {
  content: "\F2A0";
}

.mdi-gift:before {
  content: "\F2A1";
}

.mdi-git:before {
  content: "\F2A2";
}

.mdi-github-box:before {
  content: "\F2A3";
}

.mdi-github-circle:before {
  content: "\F2A4";
}

.mdi-glass-flute:before {
  content: "\F2A5";
}

.mdi-glass-mug:before {
  content: "\F2A6";
}

.mdi-glass-stange:before {
  content: "\F2A7";
}

.mdi-glass-tulip:before {
  content: "\F2A8";
}

.mdi-glassdoor:before {
  content: "\F2A9";
}

.mdi-glasses:before {
  content: "\F2AA";
}

.mdi-gmail:before {
  content: "\F2AB";
}

.mdi-gnome:before {
  content: "\F2AC";
}

.mdi-google:before {
  content: "\F2AD";
}

.mdi-google-cardboard:before {
  content: "\F2AE";
}

.mdi-google-chrome:before {
  content: "\F2AF";
}

.mdi-google-circles:before {
  content: "\F2B0";
}

.mdi-google-circles-communities:before {
  content: "\F2B1";
}

.mdi-google-circles-extended:before {
  content: "\F2B2";
}

.mdi-google-circles-group:before {
  content: "\F2B3";
}

.mdi-google-controller:before {
  content: "\F2B4";
}

.mdi-google-controller-off:before {
  content: "\F2B5";
}

.mdi-google-drive:before {
  content: "\F2B6";
}

.mdi-google-earth:before {
  content: "\F2B7";
}

.mdi-google-glass:before {
  content: "\F2B8";
}

.mdi-google-maps:before {
  content: "\F5F5";
}

.mdi-google-nearby:before {
  content: "\F2B9";
}

.mdi-google-pages:before {
  content: "\F2BA";
}

.mdi-google-physical-web:before {
  content: "\F2BB";
}

.mdi-google-play:before {
  content: "\F2BC";
}

.mdi-google-plus:before {
  content: "\F2BD";
}

.mdi-google-plus-box:before {
  content: "\F2BE";
}

.mdi-google-translate:before {
  content: "\F2BF";
}

.mdi-google-wallet:before {
  content: "\F2C0";
}

.mdi-grease-pencil:before {
  content: "\F648";
}

.mdi-grid:before {
  content: "\F2C1";
}

.mdi-grid-off:before {
  content: "\F2C2";
}

.mdi-group:before {
  content: "\F2C3";
}

.mdi-guitar-electric:before {
  content: "\F2C4";
}

.mdi-guitar-pick:before {
  content: "\F2C5";
}

.mdi-guitar-pick-outline:before {
  content: "\F2C6";
}

.mdi-hackernews:before {
  content: "\F624";
}

.mdi-hand-pointing-right:before {
  content: "\F2C7";
}

.mdi-hanger:before {
  content: "\F2C8";
}

.mdi-hangouts:before {
  content: "\F2C9";
}

.mdi-harddisk:before {
  content: "\F2CA";
}

.mdi-headphones:before {
  content: "\F2CB";
}

.mdi-headphones-box:before {
  content: "\F2CC";
}

.mdi-headphones-settings:before {
  content: "\F2CD";
}

.mdi-headset:before {
  content: "\F2CE";
}

.mdi-headset-dock:before {
  content: "\F2CF";
}

.mdi-headset-off:before {
  content: "\F2D0";
}

.mdi-heart:before {
  content: "\F2D1";
}

.mdi-heart-box:before {
  content: "\F2D2";
}

.mdi-heart-box-outline:before {
  content: "\F2D3";
}

.mdi-heart-broken:before {
  content: "\F2D4";
}

.mdi-heart-outline:before {
  content: "\F2D5";
}

.mdi-heart-pulse:before {
  content: "\F5F6";
}

.mdi-help:before {
  content: "\F2D6";
}

.mdi-help-circle:before {
  content: "\F2D7";
}

.mdi-help-circle-outline:before {
  content: "\F625";
}

.mdi-hexagon:before {
  content: "\F2D8";
}

.mdi-hexagon-outline:before {
  content: "\F2D9";
}

.mdi-highway:before {
  content: "\F5F7";
}

.mdi-history:before {
  content: "\F2DA";
}

.mdi-hololens:before {
  content: "\F2DB";
}

.mdi-home:before {
  content: "\F2DC";
}

.mdi-home-map-marker:before {
  content: "\F5F8";
}

.mdi-home-modern:before {
  content: "\F2DD";
}

.mdi-home-variant:before {
  content: "\F2DE";
}

.mdi-hops:before {
  content: "\F2DF";
}

.mdi-hospital:before {
  content: "\F2E0";
}

.mdi-hospital-building:before {
  content: "\F2E1";
}

.mdi-hospital-marker:before {
  content: "\F2E2";
}

.mdi-hotel:before {
  content: "\F2E3";
}

.mdi-houzz:before {
  content: "\F2E4";
}

.mdi-houzz-box:before {
  content: "\F2E5";
}

.mdi-human:before {
  content: "\F2E6";
}

.mdi-human-child:before {
  content: "\F2E7";
}

.mdi-human-female:before {
  content: "\F649";
}

.mdi-human-greeting:before {
  content: "\F64A";
}

.mdi-human-handsdown:before {
  content: "\F64B";
}

.mdi-human-handsup:before {
  content: "\F64C";
}

.mdi-human-male:before {
  content: "\F64D";
}

.mdi-human-male-female:before {
  content: "\F2E8";
}

.mdi-human-pregnant:before {
  content: "\F5CF";
}

.mdi-image:before {
  content: "\F2E9";
}

.mdi-image-album:before {
  content: "\F2EA";
}

.mdi-image-area:before {
  content: "\F2EB";
}

.mdi-image-area-close:before {
  content: "\F2EC";
}

.mdi-image-broken:before {
  content: "\F2ED";
}

.mdi-image-broken-variant:before {
  content: "\F2EE";
}

.mdi-image-filter:before {
  content: "\F2EF";
}

.mdi-image-filter-black-white:before {
  content: "\F2F0";
}

.mdi-image-filter-center-focus:before {
  content: "\F2F1";
}

.mdi-image-filter-center-focus-weak:before {
  content: "\F2F2";
}

.mdi-image-filter-drama:before {
  content: "\F2F3";
}

.mdi-image-filter-frames:before {
  content: "\F2F4";
}

.mdi-image-filter-hdr:before {
  content: "\F2F5";
}

.mdi-image-filter-none:before {
  content: "\F2F6";
}

.mdi-image-filter-tilt-shift:before {
  content: "\F2F7";
}

.mdi-image-filter-vintage:before {
  content: "\F2F8";
}

.mdi-image-multiple:before {
  content: "\F2F9";
}

.mdi-import:before {
  content: "\F2FA";
}

.mdi-inbox:before {
  content: "\F2FB";
}

.mdi-incognito:before {
  content: "\F5F9";
}

.mdi-information:before {
  content: "\F2FC";
}

.mdi-information-outline:before {
  content: "\F2FD";
}

.mdi-information-variant:before {
  content: "\F64E";
}

.mdi-instagram:before {
  content: "\F2FE";
}

.mdi-instapaper:before {
  content: "\F2FF";
}

.mdi-internet-explorer:before {
  content: "\F300";
}

.mdi-invert-colors:before {
  content: "\F301";
}

.mdi-jeepney:before {
  content: "\F302";
}

.mdi-jira:before {
  content: "\F303";
}

.mdi-jsfiddle:before {
  content: "\F304";
}

.mdi-json:before {
  content: "\F626";
}

.mdi-keg:before {
  content: "\F305";
}

.mdi-kettle:before {
  content: "\F5FA";
}

.mdi-key:before {
  content: "\F306";
}

.mdi-key-change:before {
  content: "\F307";
}

.mdi-key-minus:before {
  content: "\F308";
}

.mdi-key-plus:before {
  content: "\F309";
}

.mdi-key-remove:before {
  content: "\F30A";
}

.mdi-key-variant:before {
  content: "\F30B";
}

.mdi-keyboard:before {
  content: "\F30C";
}

.mdi-keyboard-backspace:before {
  content: "\F30D";
}

.mdi-keyboard-caps:before {
  content: "\F30E";
}

.mdi-keyboard-close:before {
  content: "\F30F";
}

.mdi-keyboard-off:before {
  content: "\F310";
}

.mdi-keyboard-return:before {
  content: "\F311";
}

.mdi-keyboard-tab:before {
  content: "\F312";
}

.mdi-keyboard-variant:before {
  content: "\F313";
}

.mdi-kodi:before {
  content: "\F314";
}

.mdi-label:before {
  content: "\F315";
}

.mdi-label-outline:before {
  content: "\F316";
}

.mdi-lambda:before {
  content: "\F627";
}

.mdi-lan:before {
  content: "\F317";
}

.mdi-lan-connect:before {
  content: "\F318";
}

.mdi-lan-disconnect:before {
  content: "\F319";
}

.mdi-lan-pending:before {
  content: "\F31A";
}

.mdi-language-c:before {
  content: "\F671";
}

.mdi-language-cpp:before {
  content: "\F672";
}

.mdi-language-csharp:before {
  content: "\F31B";
}

.mdi-language-css3:before {
  content: "\F31C";
}

.mdi-language-html5:before {
  content: "\F31D";
}

.mdi-language-javascript:before {
  content: "\F31E";
}

.mdi-language-php:before {
  content: "\F31F";
}

.mdi-language-python:before {
  content: "\F320";
}

.mdi-language-python-text:before {
  content: "\F321";
}

.mdi-laptop:before {
  content: "\F322";
}

.mdi-laptop-chromebook:before {
  content: "\F323";
}

.mdi-laptop-mac:before {
  content: "\F324";
}

.mdi-laptop-windows:before {
  content: "\F325";
}

.mdi-lastfm:before {
  content: "\F326";
}

.mdi-launch:before {
  content: "\F327";
}

.mdi-layers:before {
  content: "\F328";
}

.mdi-layers-off:before {
  content: "\F329";
}

.mdi-lead-pencil:before {
  content: "\F64F";
}

.mdi-leaf:before {
  content: "\F32A";
}

.mdi-led-off:before {
  content: "\F32B";
}

.mdi-led-on:before {
  content: "\F32C";
}

.mdi-led-outline:before {
  content: "\F32D";
}

.mdi-led-variant-off:before {
  content: "\F32E";
}

.mdi-led-variant-on:before {
  content: "\F32F";
}

.mdi-led-variant-outline:before {
  content: "\F330";
}

.mdi-library:before {
  content: "\F331";
}

.mdi-library-books:before {
  content: "\F332";
}

.mdi-library-music:before {
  content: "\F333";
}

.mdi-library-plus:before {
  content: "\F334";
}

.mdi-lightbulb:before {
  content: "\F335";
}

.mdi-lightbulb-outline:before {
  content: "\F336";
}

.mdi-link:before {
  content: "\F337";
}

.mdi-link-off:before {
  content: "\F338";
}

.mdi-link-variant:before {
  content: "\F339";
}

.mdi-link-variant-off:before {
  content: "\F33A";
}

.mdi-linkedin:before {
  content: "\F33B";
}

.mdi-linkedin-box:before {
  content: "\F33C";
}

.mdi-linux:before {
  content: "\F33D";
}

.mdi-lock:before {
  content: "\F33E";
}

.mdi-lock-open:before {
  content: "\F33F";
}

.mdi-lock-open-outline:before {
  content: "\F340";
}

.mdi-lock-outline:before {
  content: "\F341";
}

.mdi-lock-plus:before {
  content: "\F5FB";
}

.mdi-login:before {
  content: "\F342";
}

.mdi-login-variant:before {
  content: "\F5FC";
}

.mdi-logout:before {
  content: "\F343";
}

.mdi-logout-variant:before {
  content: "\F5FD";
}

.mdi-looks:before {
  content: "\F344";
}

.mdi-loupe:before {
  content: "\F345";
}

.mdi-lumx:before {
  content: "\F346";
}

.mdi-magnet:before {
  content: "\F347";
}

.mdi-magnet-on:before {
  content: "\F348";
}

.mdi-magnify:before {
  content: "\F349";
}

.mdi-magnify-minus:before {
  content: "\F34A";
}

.mdi-magnify-plus:before {
  content: "\F34B";
}

.mdi-mail-ru:before {
  content: "\F34C";
}

.mdi-map:before {
  content: "\F34D";
}

.mdi-map-marker:before {
  content: "\F34E";
}

.mdi-map-marker-circle:before {
  content: "\F34F";
}

.mdi-map-marker-minus:before {
  content: "\F650";
}

.mdi-map-marker-multiple:before {
  content: "\F350";
}

.mdi-map-marker-off:before {
  content: "\F351";
}

.mdi-map-marker-plus:before {
  content: "\F651";
}

.mdi-map-marker-radius:before {
  content: "\F352";
}

.mdi-margin:before {
  content: "\F353";
}

.mdi-markdown:before {
  content: "\F354";
}

.mdi-marker:before {
  content: "\F652";
}

.mdi-marker-check:before {
  content: "\F355";
}

.mdi-martini:before {
  content: "\F356";
}

.mdi-material-ui:before {
  content: "\F357";
}

.mdi-math-compass:before {
  content: "\F358";
}

.mdi-matrix:before {
  content: "\F628";
}

.mdi-maxcdn:before {
  content: "\F359";
}

.mdi-medium:before {
  content: "\F35A";
}

.mdi-memory:before {
  content: "\F35B";
}

.mdi-menu:before {
  content: "\F35C";
}

.mdi-menu-down:before {
  content: "\F35D";
}

.mdi-menu-left:before {
  content: "\F35E";
}

.mdi-menu-right:before {
  content: "\F35F";
}

.mdi-menu-up:before {
  content: "\F360";
}

.mdi-message:before {
  content: "\F361";
}

.mdi-message-alert:before {
  content: "\F362";
}

.mdi-message-draw:before {
  content: "\F363";
}

.mdi-message-image:before {
  content: "\F364";
}

.mdi-message-outline:before {
  content: "\F365";
}

.mdi-message-plus:before {
  content: "\F653";
}

.mdi-message-processing:before {
  content: "\F366";
}

.mdi-message-reply:before {
  content: "\F367";
}

.mdi-message-reply-text:before {
  content: "\F368";
}

.mdi-message-text:before {
  content: "\F369";
}

.mdi-message-text-outline:before {
  content: "\F36A";
}

.mdi-message-video:before {
  content: "\F36B";
}

.mdi-meteor:before {
  content: "\F629";
}

.mdi-microphone:before {
  content: "\F36C";
}

.mdi-microphone-off:before {
  content: "\F36D";
}

.mdi-microphone-outline:before {
  content: "\F36E";
}

.mdi-microphone-settings:before {
  content: "\F36F";
}

.mdi-microphone-variant:before {
  content: "\F370";
}

.mdi-microphone-variant-off:before {
  content: "\F371";
}

.mdi-microscope:before {
  content: "\F654";
}

.mdi-microsoft:before {
  content: "\F372";
}

.mdi-minecraft:before {
  content: "\F373";
}

.mdi-minus:before {
  content: "\F374";
}

.mdi-minus-box:before {
  content: "\F375";
}

.mdi-minus-circle:before {
  content: "\F376";
}

.mdi-minus-circle-outline:before {
  content: "\F377";
}

.mdi-minus-network:before {
  content: "\F378";
}

.mdi-mixcloud:before {
  content: "\F62A";
}

.mdi-monitor:before {
  content: "\F379";
}

.mdi-monitor-multiple:before {
  content: "\F37A";
}

.mdi-more:before {
  content: "\F37B";
}

.mdi-motorbike:before {
  content: "\F37C";
}

.mdi-mouse:before {
  content: "\F37D";
}

.mdi-mouse-off:before {
  content: "\F37E";
}

.mdi-mouse-variant:before {
  content: "\F37F";
}

.mdi-mouse-variant-off:before {
  content: "\F380";
}

.mdi-move-resize:before {
  content: "\F655";
}

.mdi-move-resize-variant:before {
  content: "\F656";
}

.mdi-movie:before {
  content: "\F381";
}

.mdi-multiplication:before {
  content: "\F382";
}

.mdi-multiplication-box:before {
  content: "\F383";
}

.mdi-music-box:before {
  content: "\F384";
}

.mdi-music-box-outline:before {
  content: "\F385";
}

.mdi-music-circle:before {
  content: "\F386";
}

.mdi-music-note:before {
  content: "\F387";
}

.mdi-music-note-bluetooth:before {
  content: "\F5FE";
}

.mdi-music-note-bluetooth-off:before {
  content: "\F5FF";
}

.mdi-music-note-eighth:before {
  content: "\F388";
}

.mdi-music-note-half:before {
  content: "\F389";
}

.mdi-music-note-off:before {
  content: "\F38A";
}

.mdi-music-note-quarter:before {
  content: "\F38B";
}

.mdi-music-note-sixteenth:before {
  content: "\F38C";
}

.mdi-music-note-whole:before {
  content: "\F38D";
}

.mdi-nature:before {
  content: "\F38E";
}

.mdi-nature-people:before {
  content: "\F38F";
}

.mdi-navigation:before {
  content: "\F390";
}

.mdi-near-me:before {
  content: "\F5CD";
}

.mdi-needle:before {
  content: "\F391";
}

.mdi-nest-protect:before {
  content: "\F392";
}

.mdi-nest-thermostat:before {
  content: "\F393";
}

.mdi-new-box:before {
  content: "\F394";
}

.mdi-newspaper:before {
  content: "\F395";
}

.mdi-nfc:before {
  content: "\F396";
}

.mdi-nfc-tap:before {
  content: "\F397";
}

.mdi-nfc-variant:before {
  content: "\F398";
}

.mdi-nodejs:before {
  content: "\F399";
}

.mdi-note:before {
  content: "\F39A";
}

.mdi-note-outline:before {
  content: "\F39B";
}

.mdi-note-plus:before {
  content: "\F39C";
}

.mdi-note-plus-outline:before {
  content: "\F39D";
}

.mdi-note-text:before {
  content: "\F39E";
}

.mdi-notification-clear-all:before {
  content: "\F39F";
}

.mdi-numeric:before {
  content: "\F3A0";
}

.mdi-numeric-0-box:before {
  content: "\F3A1";
}

.mdi-numeric-0-box-multiple-outline:before {
  content: "\F3A2";
}

.mdi-numeric-0-box-outline:before {
  content: "\F3A3";
}

.mdi-numeric-1-box:before {
  content: "\F3A4";
}

.mdi-numeric-1-box-multiple-outline:before {
  content: "\F3A5";
}

.mdi-numeric-1-box-outline:before {
  content: "\F3A6";
}

.mdi-numeric-2-box:before {
  content: "\F3A7";
}

.mdi-numeric-2-box-multiple-outline:before {
  content: "\F3A8";
}

.mdi-numeric-2-box-outline:before {
  content: "\F3A9";
}

.mdi-numeric-3-box:before {
  content: "\F3AA";
}

.mdi-numeric-3-box-multiple-outline:before {
  content: "\F3AB";
}

.mdi-numeric-3-box-outline:before {
  content: "\F3AC";
}

.mdi-numeric-4-box:before {
  content: "\F3AD";
}

.mdi-numeric-4-box-multiple-outline:before {
  content: "\F3AE";
}

.mdi-numeric-4-box-outline:before {
  content: "\F3AF";
}

.mdi-numeric-5-box:before {
  content: "\F3B0";
}

.mdi-numeric-5-box-multiple-outline:before {
  content: "\F3B1";
}

.mdi-numeric-5-box-outline:before {
  content: "\F3B2";
}

.mdi-numeric-6-box:before {
  content: "\F3B3";
}

.mdi-numeric-6-box-multiple-outline:before {
  content: "\F3B4";
}

.mdi-numeric-6-box-outline:before {
  content: "\F3B5";
}

.mdi-numeric-7-box:before {
  content: "\F3B6";
}

.mdi-numeric-7-box-multiple-outline:before {
  content: "\F3B7";
}

.mdi-numeric-7-box-outline:before {
  content: "\F3B8";
}

.mdi-numeric-8-box:before {
  content: "\F3B9";
}

.mdi-numeric-8-box-multiple-outline:before {
  content: "\F3BA";
}

.mdi-numeric-8-box-outline:before {
  content: "\F3BB";
}

.mdi-numeric-9-box:before {
  content: "\F3BC";
}

.mdi-numeric-9-box-multiple-outline:before {
  content: "\F3BD";
}

.mdi-numeric-9-box-outline:before {
  content: "\F3BE";
}

.mdi-numeric-9-plus-box:before {
  content: "\F3BF";
}

.mdi-numeric-9-plus-box-multiple-outline:before {
  content: "\F3C0";
}

.mdi-numeric-9-plus-box-outline:before {
  content: "\F3C1";
}

.mdi-nutrition:before {
  content: "\F3C2";
}

.mdi-octagon:before {
  content: "\F3C3";
}

.mdi-octagon-outline:before {
  content: "\F3C4";
}

.mdi-odnoklassniki:before {
  content: "\F3C5";
}

.mdi-office:before {
  content: "\F3C6";
}

.mdi-oil:before {
  content: "\F3C7";
}

.mdi-oil-temperature:before {
  content: "\F3C8";
}

.mdi-omega:before {
  content: "\F3C9";
}

.mdi-onedrive:before {
  content: "\F3CA";
}

.mdi-opacity:before {
  content: "\F5CC";
}

.mdi-open-in-app:before {
  content: "\F3CB";
}

.mdi-open-in-new:before {
  content: "\F3CC";
}

.mdi-openid:before {
  content: "\F3CD";
}

.mdi-opera:before {
  content: "\F3CE";
}

.mdi-ornament:before {
  content: "\F3CF";
}

.mdi-ornament-variant:before {
  content: "\F3D0";
}

.mdi-outbox:before {
  content: "\F3D1";
}

.mdi-owl:before {
  content: "\F3D2";
}

.mdi-package:before {
  content: "\F3D3";
}

.mdi-package-down:before {
  content: "\F3D4";
}

.mdi-package-up:before {
  content: "\F3D5";
}

.mdi-package-variant:before {
  content: "\F3D6";
}

.mdi-package-variant-closed:before {
  content: "\F3D7";
}

.mdi-page-first:before {
  content: "\F600";
}

.mdi-page-last:before {
  content: "\F601";
}

.mdi-palette:before {
  content: "\F3D8";
}

.mdi-palette-advanced:before {
  content: "\F3D9";
}

.mdi-panda:before {
  content: "\F3DA";
}

.mdi-pandora:before {
  content: "\F3DB";
}

.mdi-panorama:before {
  content: "\F3DC";
}

.mdi-panorama-fisheye:before {
  content: "\F3DD";
}

.mdi-panorama-horizontal:before {
  content: "\F3DE";
}

.mdi-panorama-vertical:before {
  content: "\F3DF";
}

.mdi-panorama-wide-angle:before {
  content: "\F3E0";
}

.mdi-paper-cut-vertical:before {
  content: "\F3E1";
}

.mdi-paperclip:before {
  content: "\F3E2";
}

.mdi-parking:before {
  content: "\F3E3";
}

.mdi-pause:before {
  content: "\F3E4";
}

.mdi-pause-circle:before {
  content: "\F3E5";
}

.mdi-pause-circle-outline:before {
  content: "\F3E6";
}

.mdi-pause-octagon:before {
  content: "\F3E7";
}

.mdi-pause-octagon-outline:before {
  content: "\F3E8";
}

.mdi-paw:before {
  content: "\F3E9";
}

.mdi-paw-off:before {
  content: "\F657";
}

.mdi-pen:before {
  content: "\F3EA";
}

.mdi-pencil:before {
  content: "\F3EB";
}

.mdi-pencil-box:before {
  content: "\F3EC";
}

.mdi-pencil-box-outline:before {
  content: "\F3ED";
}

.mdi-pencil-lock:before {
  content: "\F3EE";
}

.mdi-pencil-off:before {
  content: "\F3EF";
}

.mdi-percent:before {
  content: "\F3F0";
}

.mdi-pharmacy:before {
  content: "\F3F1";
}

.mdi-phone:before {
  content: "\F3F2";
}

.mdi-phone-bluetooth:before {
  content: "\F3F3";
}

.mdi-phone-classic:before {
  content: "\F602";
}

.mdi-phone-forward:before {
  content: "\F3F4";
}

.mdi-phone-hangup:before {
  content: "\F3F5";
}

.mdi-phone-in-talk:before {
  content: "\F3F6";
}

.mdi-phone-incoming:before {
  content: "\F3F7";
}

.mdi-phone-locked:before {
  content: "\F3F8";
}

.mdi-phone-log:before {
  content: "\F3F9";
}

.mdi-phone-minus:before {
  content: "\F658";
}

.mdi-phone-missed:before {
  content: "\F3FA";
}

.mdi-phone-outgoing:before {
  content: "\F3FB";
}

.mdi-phone-paused:before {
  content: "\F3FC";
}

.mdi-phone-plus:before {
  content: "\F659";
}

.mdi-phone-settings:before {
  content: "\F3FD";
}

.mdi-phone-voip:before {
  content: "\F3FE";
}

.mdi-pi:before {
  content: "\F3FF";
}

.mdi-pi-box:before {
  content: "\F400";
}

.mdi-pig:before {
  content: "\F401";
}

.mdi-pill:before {
  content: "\F402";
}

.mdi-pin:before {
  content: "\F403";
}

.mdi-pin-off:before {
  content: "\F404";
}

.mdi-pine-tree:before {
  content: "\F405";
}

.mdi-pine-tree-box:before {
  content: "\F406";
}

.mdi-pinterest:before {
  content: "\F407";
}

.mdi-pinterest-box:before {
  content: "\F408";
}

.mdi-pizza:before {
  content: "\F409";
}

.mdi-play:before {
  content: "\F40A";
}

.mdi-play-box-outline:before {
  content: "\F40B";
}

.mdi-play-circle:before {
  content: "\F40C";
}

.mdi-play-circle-outline:before {
  content: "\F40D";
}

.mdi-play-pause:before {
  content: "\F40E";
}

.mdi-play-protected-content:before {
  content: "\F40F";
}

.mdi-playlist-check:before {
  content: "\F5C7";
}

.mdi-playlist-minus:before {
  content: "\F410";
}

.mdi-playlist-play:before {
  content: "\F411";
}

.mdi-playlist-plus:before {
  content: "\F412";
}

.mdi-playlist-remove:before {
  content: "\F413";
}

.mdi-playstation:before {
  content: "\F414";
}

.mdi-plus:before {
  content: "\F415";
}

.mdi-plus-box:before {
  content: "\F416";
}

.mdi-plus-circle:before {
  content: "\F417";
}

.mdi-plus-circle-multiple-outline:before {
  content: "\F418";
}

.mdi-plus-circle-outline:before {
  content: "\F419";
}

.mdi-plus-network:before {
  content: "\F41A";
}

.mdi-plus-one:before {
  content: "\F41B";
}

.mdi-pocket:before {
  content: "\F41C";
}

.mdi-pokeball:before {
  content: "\F41D";
}

.mdi-polaroid:before {
  content: "\F41E";
}

.mdi-poll:before {
  content: "\F41F";
}

.mdi-poll-box:before {
  content: "\F420";
}

.mdi-polymer:before {
  content: "\F421";
}

.mdi-pool:before {
  content: "\F606";
}

.mdi-popcorn:before {
  content: "\F422";
}

.mdi-pot:before {
  content: "\F65A";
}

.mdi-pot-mix:before {
  content: "\F65B";
}

.mdi-pound:before {
  content: "\F423";
}

.mdi-pound-box:before {
  content: "\F424";
}

.mdi-power:before {
  content: "\F425";
}

.mdi-power-settings:before {
  content: "\F426";
}

.mdi-power-socket:before {
  content: "\F427";
}

.mdi-presentation:before {
  content: "\F428";
}

.mdi-presentation-play:before {
  content: "\F429";
}

.mdi-printer:before {
  content: "\F42A";
}

.mdi-printer-3d:before {
  content: "\F42B";
}

.mdi-printer-alert:before {
  content: "\F42C";
}

.mdi-priority-high:before {
  content: "\F603";
}

.mdi-priority-low:before {
  content: "\F604";
}

.mdi-professional-hexagon:before {
  content: "\F42D";
}

.mdi-projector:before {
  content: "\F42E";
}

.mdi-projector-screen:before {
  content: "\F42F";
}

.mdi-pulse:before {
  content: "\F430";
}

.mdi-puzzle:before {
  content: "\F431";
}

.mdi-qqchat:before {
  content: "\F605";
}

.mdi-qrcode:before {
  content: "\F432";
}

.mdi-qrcode-scan:before {
  content: "\F433";
}

.mdi-quadcopter:before {
  content: "\F434";
}

.mdi-quality-high:before {
  content: "\F435";
}

.mdi-quicktime:before {
  content: "\F436";
}

.mdi-radar:before {
  content: "\F437";
}

.mdi-radiator:before {
  content: "\F438";
}

.mdi-radio:before {
  content: "\F439";
}

.mdi-radio-handheld:before {
  content: "\F43A";
}

.mdi-radio-tower:before {
  content: "\F43B";
}

.mdi-radioactive:before {
  content: "\F43C";
}

.mdi-radiobox-blank:before {
  content: "\F43D";
}

.mdi-radiobox-marked:before {
  content: "\F43E";
}

.mdi-raspberrypi:before {
  content: "\F43F";
}

.mdi-ray-end:before {
  content: "\F440";
}

.mdi-ray-end-arrow:before {
  content: "\F441";
}

.mdi-ray-start:before {
  content: "\F442";
}

.mdi-ray-start-arrow:before {
  content: "\F443";
}

.mdi-ray-start-end:before {
  content: "\F444";
}

.mdi-ray-vertex:before {
  content: "\F445";
}

.mdi-rdio:before {
  content: "\F446";
}

.mdi-read:before {
  content: "\F447";
}

.mdi-readability:before {
  content: "\F448";
}

.mdi-receipt:before {
  content: "\F449";
}

.mdi-record:before {
  content: "\F44A";
}

.mdi-record-rec:before {
  content: "\F44B";
}

.mdi-recycle:before {
  content: "\F44C";
}

.mdi-reddit:before {
  content: "\F44D";
}

.mdi-redo:before {
  content: "\F44E";
}

.mdi-redo-variant:before {
  content: "\F44F";
}

.mdi-refresh:before {
  content: "\F450";
}

.mdi-regex:before {
  content: "\F451";
}

.mdi-relative-scale:before {
  content: "\F452";
}

.mdi-reload:before {
  content: "\F453";
}

.mdi-remote:before {
  content: "\F454";
}

.mdi-rename-box:before {
  content: "\F455";
}

.mdi-repeat:before {
  content: "\F456";
}

.mdi-repeat-off:before {
  content: "\F457";
}

.mdi-repeat-once:before {
  content: "\F458";
}

.mdi-replay:before {
  content: "\F459";
}

.mdi-reply:before {
  content: "\F45A";
}

.mdi-reply-all:before {
  content: "\F45B";
}

.mdi-reproduction:before {
  content: "\F45C";
}

.mdi-resize-bottom-right:before {
  content: "\F45D";
}

.mdi-responsive:before {
  content: "\F45E";
}

.mdi-rewind:before {
  content: "\F45F";
}

.mdi-ribbon:before {
  content: "\F460";
}

.mdi-road:before {
  content: "\F461";
}

.mdi-road-variant:before {
  content: "\F462";
}

.mdi-rocket:before {
  content: "\F463";
}

.mdi-rotate-3d:before {
  content: "\F464";
}

.mdi-rotate-left:before {
  content: "\F465";
}

.mdi-rotate-left-variant:before {
  content: "\F466";
}

.mdi-rotate-right:before {
  content: "\F467";
}

.mdi-rotate-right-variant:before {
  content: "\F468";
}

.mdi-rounded-corner:before {
  content: "\F607";
}

.mdi-router-wireless:before {
  content: "\F469";
}

.mdi-routes:before {
  content: "\F46A";
}

.mdi-rowing:before {
  content: "\F608";
}

.mdi-rss:before {
  content: "\F46B";
}

.mdi-rss-box:before {
  content: "\F46C";
}

.mdi-ruler:before {
  content: "\F46D";
}

.mdi-run:before {
  content: "\F46E";
}

.mdi-sale:before {
  content: "\F46F";
}

.mdi-satellite:before {
  content: "\F470";
}

.mdi-satellite-variant:before {
  content: "\F471";
}

.mdi-saxophone:before {
  content: "\F609";
}

.mdi-scale:before {
  content: "\F472";
}

.mdi-scale-balance:before {
  content: "\F5D1";
}

.mdi-scale-bathroom:before {
  content: "\F473";
}

.mdi-school:before {
  content: "\F474";
}

.mdi-screen-rotation:before {
  content: "\F475";
}

.mdi-screen-rotation-lock:before {
  content: "\F476";
}

.mdi-screwdriver:before {
  content: "\F477";
}

.mdi-script:before {
  content: "\F478";
}

.mdi-sd:before {
  content: "\F479";
}

.mdi-seal:before {
  content: "\F47A";
}

.mdi-seat-flat:before {
  content: "\F47B";
}

.mdi-seat-flat-angled:before {
  content: "\F47C";
}

.mdi-seat-individual-suite:before {
  content: "\F47D";
}

.mdi-seat-legroom-extra:before {
  content: "\F47E";
}

.mdi-seat-legroom-normal:before {
  content: "\F47F";
}

.mdi-seat-legroom-reduced:before {
  content: "\F480";
}

.mdi-seat-recline-extra:before {
  content: "\F481";
}

.mdi-seat-recline-normal:before {
  content: "\F482";
}

.mdi-security:before {
  content: "\F483";
}

.mdi-security-network:before {
  content: "\F484";
}

.mdi-select:before {
  content: "\F485";
}

.mdi-select-all:before {
  content: "\F486";
}

.mdi-select-inverse:before {
  content: "\F487";
}

.mdi-select-off:before {
  content: "\F488";
}

.mdi-selection:before {
  content: "\F489";
}

.mdi-send:before {
  content: "\F48A";
}

.mdi-serial-port:before {
  content: "\F65C";
}

.mdi-server:before {
  content: "\F48B";
}

.mdi-server-minus:before {
  content: "\F48C";
}

.mdi-server-network:before {
  content: "\F48D";
}

.mdi-server-network-off:before {
  content: "\F48E";
}

.mdi-server-off:before {
  content: "\F48F";
}

.mdi-server-plus:before {
  content: "\F490";
}

.mdi-server-remove:before {
  content: "\F491";
}

.mdi-server-security:before {
  content: "\F492";
}

.mdi-settings:before {
  content: "\F493";
}

.mdi-settings-box:before {
  content: "\F494";
}

.mdi-shape-circle-plus:before {
  content: "\F65D";
}

.mdi-shape-plus:before {
  content: "\F495";
}

.mdi-shape-polygon-plus:before {
  content: "\F65E";
}

.mdi-shape-rectangle-plus:before {
  content: "\F65F";
}

.mdi-shape-square-plus:before {
  content: "\F660";
}

.mdi-share:before {
  content: "\F496";
}

.mdi-share-variant:before {
  content: "\F497";
}

.mdi-shield:before {
  content: "\F498";
}

.mdi-shield-outline:before {
  content: "\F499";
}

.mdi-shopping:before {
  content: "\F49A";
}

.mdi-shopping-music:before {
  content: "\F49B";
}

.mdi-shredder:before {
  content: "\F49C";
}

.mdi-shuffle:before {
  content: "\F49D";
}

.mdi-shuffle-disabled:before {
  content: "\F49E";
}

.mdi-shuffle-variant:before {
  content: "\F49F";
}

.mdi-sigma:before {
  content: "\F4A0";
}

.mdi-sigma-lower:before {
  content: "\F62B";
}

.mdi-sign-caution:before {
  content: "\F4A1";
}

.mdi-signal:before {
  content: "\F4A2";
}

.mdi-signal-variant:before {
  content: "\F60A";
}

.mdi-silverware:before {
  content: "\F4A3";
}

.mdi-silverware-fork:before {
  content: "\F4A4";
}

.mdi-silverware-spoon:before {
  content: "\F4A5";
}

.mdi-silverware-variant:before {
  content: "\F4A6";
}

.mdi-sim:before {
  content: "\F4A7";
}

.mdi-sim-alert:before {
  content: "\F4A8";
}

.mdi-sim-off:before {
  content: "\F4A9";
}

.mdi-sitemap:before {
  content: "\F4AA";
}

.mdi-skip-backward:before {
  content: "\F4AB";
}

.mdi-skip-forward:before {
  content: "\F4AC";
}

.mdi-skip-next:before {
  content: "\F4AD";
}

.mdi-skip-next-circle:before {
  content: "\F661";
}

.mdi-skip-next-circle-outline:before {
  content: "\F662";
}

.mdi-skip-previous:before {
  content: "\F4AE";
}

.mdi-skip-previous-circle:before {
  content: "\F663";
}

.mdi-skip-previous-circle-outline:before {
  content: "\F664";
}

.mdi-skype:before {
  content: "\F4AF";
}

.mdi-skype-business:before {
  content: "\F4B0";
}

.mdi-slack:before {
  content: "\F4B1";
}

.mdi-sleep:before {
  content: "\F4B2";
}

.mdi-sleep-off:before {
  content: "\F4B3";
}

.mdi-smoking:before {
  content: "\F4B4";
}

.mdi-smoking-off:before {
  content: "\F4B5";
}

.mdi-snapchat:before {
  content: "\F4B6";
}

.mdi-snowman:before {
  content: "\F4B7";
}

.mdi-soccer:before {
  content: "\F4B8";
}

.mdi-sofa:before {
  content: "\F4B9";
}

.mdi-sort:before {
  content: "\F4BA";
}

.mdi-sort-alphabetical:before {
  content: "\F4BB";
}

.mdi-sort-ascending:before {
  content: "\F4BC";
}

.mdi-sort-descending:before {
  content: "\F4BD";
}

.mdi-sort-numeric:before {
  content: "\F4BE";
}

.mdi-sort-variant:before {
  content: "\F4BF";
}

.mdi-soundcloud:before {
  content: "\F4C0";
}

.mdi-source-branch:before {
  content: "\F62C";
}

.mdi-source-fork:before {
  content: "\F4C1";
}

.mdi-source-merge:before {
  content: "\F62D";
}

.mdi-source-pull:before {
  content: "\F4C2";
}

.mdi-speaker:before {
  content: "\F4C3";
}

.mdi-speaker-off:before {
  content: "\F4C4";
}

.mdi-speedometer:before {
  content: "\F4C5";
}

.mdi-spellcheck:before {
  content: "\F4C6";
}

.mdi-spotify:before {
  content: "\F4C7";
}

.mdi-spotlight:before {
  content: "\F4C8";
}

.mdi-spotlight-beam:before {
  content: "\F4C9";
}

.mdi-spray:before {
  content: "\F665";
}

.mdi-square-inc:before {
  content: "\F4CA";
}

.mdi-square-inc-cash:before {
  content: "\F4CB";
}

.mdi-stackexchange:before {
  content: "\F60B";
}

.mdi-stackoverflow:before {
  content: "\F4CC";
}

.mdi-stairs:before {
  content: "\F4CD";
}

.mdi-star:before {
  content: "\F4CE";
}

.mdi-star-circle:before {
  content: "\F4CF";
}

.mdi-star-half:before {
  content: "\F4D0";
}

.mdi-star-off:before {
  content: "\F4D1";
}

.mdi-star-outline:before {
  content: "\F4D2";
}

.mdi-steam:before {
  content: "\F4D3";
}

.mdi-steering:before {
  content: "\F4D4";
}

.mdi-step-backward:before {
  content: "\F4D5";
}

.mdi-step-backward-2:before {
  content: "\F4D6";
}

.mdi-step-forward:before {
  content: "\F4D7";
}

.mdi-step-forward-2:before {
  content: "\F4D8";
}

.mdi-stethoscope:before {
  content: "\F4D9";
}

.mdi-sticker:before {
  content: "\F5D0";
}

.mdi-stocking:before {
  content: "\F4DA";
}

.mdi-stop:before {
  content: "\F4DB";
}

.mdi-stop-circle:before {
  content: "\F666";
}

.mdi-stop-circle-outline:before {
  content: "\F667";
}

.mdi-store:before {
  content: "\F4DC";
}

.mdi-store-24-hour:before {
  content: "\F4DD";
}

.mdi-stove:before {
  content: "\F4DE";
}

.mdi-subdirectory-arrow-left:before {
  content: "\F60C";
}

.mdi-subdirectory-arrow-right:before {
  content: "\F60D";
}

.mdi-subway:before {
  content: "\F4DF";
}

.mdi-sunglasses:before {
  content: "\F4E0";
}

.mdi-surround-sound:before {
  content: "\F5C5";
}

.mdi-swap-horizontal:before {
  content: "\F4E1";
}

.mdi-swap-vertical:before {
  content: "\F4E2";
}

.mdi-swim:before {
  content: "\F4E3";
}

.mdi-switch:before {
  content: "\F4E4";
}

.mdi-sword:before {
  content: "\F4E5";
}

.mdi-sync:before {
  content: "\F4E6";
}

.mdi-sync-alert:before {
  content: "\F4E7";
}

.mdi-sync-off:before {
  content: "\F4E8";
}

.mdi-tab:before {
  content: "\F4E9";
}

.mdi-tab-unselected:before {
  content: "\F4EA";
}

.mdi-table:before {
  content: "\F4EB";
}

.mdi-table-column-plus-after:before {
  content: "\F4EC";
}

.mdi-table-column-plus-before:before {
  content: "\F4ED";
}

.mdi-table-column-remove:before {
  content: "\F4EE";
}

.mdi-table-column-width:before {
  content: "\F4EF";
}

.mdi-table-edit:before {
  content: "\F4F0";
}

.mdi-table-large:before {
  content: "\F4F1";
}

.mdi-table-row-height:before {
  content: "\F4F2";
}

.mdi-table-row-plus-after:before {
  content: "\F4F3";
}

.mdi-table-row-plus-before:before {
  content: "\F4F4";
}

.mdi-table-row-remove:before {
  content: "\F4F5";
}

.mdi-tablet:before {
  content: "\F4F6";
}

.mdi-tablet-android:before {
  content: "\F4F7";
}

.mdi-tablet-ipad:before {
  content: "\F4F8";
}

.mdi-tag:before {
  content: "\F4F9";
}

.mdi-tag-faces:before {
  content: "\F4FA";
}

.mdi-tag-multiple:before {
  content: "\F4FB";
}

.mdi-tag-outline:before {
  content: "\F4FC";
}

.mdi-tag-text-outline:before {
  content: "\F4FD";
}

.mdi-target:before {
  content: "\F4FE";
}

.mdi-taxi:before {
  content: "\F4FF";
}

.mdi-teamviewer:before {
  content: "\F500";
}

.mdi-telegram:before {
  content: "\F501";
}

.mdi-television:before {
  content: "\F502";
}

.mdi-television-guide:before {
  content: "\F503";
}

.mdi-temperature-celsius:before {
  content: "\F504";
}

.mdi-temperature-fahrenheit:before {
  content: "\F505";
}

.mdi-temperature-kelvin:before {
  content: "\F506";
}

.mdi-tennis:before {
  content: "\F507";
}

.mdi-tent:before {
  content: "\F508";
}

.mdi-terrain:before {
  content: "\F509";
}

.mdi-test-tube:before {
  content: "\F668";
}

.mdi-text-shadow:before {
  content: "\F669";
}

.mdi-text-to-speech:before {
  content: "\F50A";
}

.mdi-text-to-speech-off:before {
  content: "\F50B";
}

.mdi-textbox:before {
  content: "\F60E";
}

.mdi-texture:before {
  content: "\F50C";
}

.mdi-theater:before {
  content: "\F50D";
}

.mdi-theme-light-dark:before {
  content: "\F50E";
}

.mdi-thermometer:before {
  content: "\F50F";
}

.mdi-thermometer-lines:before {
  content: "\F510";
}

.mdi-thumb-down:before {
  content: "\F511";
}

.mdi-thumb-down-outline:before {
  content: "\F512";
}

.mdi-thumb-up:before {
  content: "\F513";
}

.mdi-thumb-up-outline:before {
  content: "\F514";
}

.mdi-thumbs-up-down:before {
  content: "\F515";
}

.mdi-ticket:before {
  content: "\F516";
}

.mdi-ticket-account:before {
  content: "\F517";
}

.mdi-ticket-confirmation:before {
  content: "\F518";
}

.mdi-tie:before {
  content: "\F519";
}

.mdi-timelapse:before {
  content: "\F51A";
}

.mdi-timer:before {
  content: "\F51B";
}

.mdi-timer-10:before {
  content: "\F51C";
}

.mdi-timer-3:before {
  content: "\F51D";
}

.mdi-timer-off:before {
  content: "\F51E";
}

.mdi-timer-sand:before {
  content: "\F51F";
}

.mdi-timetable:before {
  content: "\F520";
}

.mdi-toggle-switch:before {
  content: "\F521";
}

.mdi-toggle-switch-off:before {
  content: "\F522";
}

.mdi-tooltip:before {
  content: "\F523";
}

.mdi-tooltip-edit:before {
  content: "\F524";
}

.mdi-tooltip-image:before {
  content: "\F525";
}

.mdi-tooltip-outline:before {
  content: "\F526";
}

.mdi-tooltip-outline-plus:before {
  content: "\F527";
}

.mdi-tooltip-text:before {
  content: "\F528";
}

.mdi-tooth:before {
  content: "\F529";
}

.mdi-tor:before {
  content: "\F52A";
}

.mdi-traffic-light:before {
  content: "\F52B";
}

.mdi-train:before {
  content: "\F52C";
}

.mdi-tram:before {
  content: "\F52D";
}

.mdi-transcribe:before {
  content: "\F52E";
}

.mdi-transcribe-close:before {
  content: "\F52F";
}

.mdi-transfer:before {
  content: "\F530";
}

.mdi-translate:before {
  content: "\F5CA";
}

.mdi-tree:before {
  content: "\F531";
}

.mdi-trello:before {
  content: "\F532";
}

.mdi-trending-down:before {
  content: "\F533";
}

.mdi-trending-neutral:before {
  content: "\F534";
}

.mdi-trending-up:before {
  content: "\F535";
}

.mdi-triangle:before {
  content: "\F536";
}

.mdi-triangle-outline:before {
  content: "\F537";
}

.mdi-trophy:before {
  content: "\F538";
}

.mdi-trophy-award:before {
  content: "\F539";
}

.mdi-trophy-outline:before {
  content: "\F53A";
}

.mdi-trophy-variant:before {
  content: "\F53B";
}

.mdi-trophy-variant-outline:before {
  content: "\F53C";
}

.mdi-truck:before {
  content: "\F53D";
}

.mdi-truck-delivery:before {
  content: "\F53E";
}

.mdi-tshirt-crew:before {
  content: "\F53F";
}

.mdi-tshirt-v:before {
  content: "\F540";
}

.mdi-tumblr:before {
  content: "\F541";
}

.mdi-tumblr-reblog:before {
  content: "\F542";
}

.mdi-tune:before {
  content: "\F62E";
}

.mdi-tune-vertical:before {
  content: "\F66A";
}

.mdi-twitch:before {
  content: "\F543";
}

.mdi-twitter:before {
  content: "\F544";
}

.mdi-twitter-box:before {
  content: "\F545";
}

.mdi-twitter-circle:before {
  content: "\F546";
}

.mdi-twitter-retweet:before {
  content: "\F547";
}

.mdi-ubuntu:before {
  content: "\F548";
}

.mdi-umbraco:before {
  content: "\F549";
}

.mdi-umbrella:before {
  content: "\F54A";
}

.mdi-umbrella-outline:before {
  content: "\F54B";
}

.mdi-undo:before {
  content: "\F54C";
}

.mdi-undo-variant:before {
  content: "\F54D";
}

.mdi-unfold-less:before {
  content: "\F54E";
}

.mdi-unfold-more:before {
  content: "\F54F";
}

.mdi-ungroup:before {
  content: "\F550";
}

.mdi-untappd:before {
  content: "\F551";
}

.mdi-upload:before {
  content: "\F552";
}

.mdi-usb:before {
  content: "\F553";
}

.mdi-vector-arrange-above:before {
  content: "\F554";
}

.mdi-vector-arrange-below:before {
  content: "\F555";
}

.mdi-vector-circle:before {
  content: "\F556";
}

.mdi-vector-circle-variant:before {
  content: "\F557";
}

.mdi-vector-combine:before {
  content: "\F558";
}

.mdi-vector-curve:before {
  content: "\F559";
}

.mdi-vector-difference:before {
  content: "\F55A";
}

.mdi-vector-difference-ab:before {
  content: "\F55B";
}

.mdi-vector-difference-ba:before {
  content: "\F55C";
}

.mdi-vector-intersection:before {
  content: "\F55D";
}

.mdi-vector-line:before {
  content: "\F55E";
}

.mdi-vector-point:before {
  content: "\F55F";
}

.mdi-vector-polygon:before {
  content: "\F560";
}

.mdi-vector-polyline:before {
  content: "\F561";
}

.mdi-vector-rectangle:before {
  content: "\F5C6";
}

.mdi-vector-selection:before {
  content: "\F562";
}

.mdi-vector-square:before {
  content: "\F001";
}

.mdi-vector-triangle:before {
  content: "\F563";
}

.mdi-vector-union:before {
  content: "\F564";
}

.mdi-verified:before {
  content: "\F565";
}

.mdi-vibrate:before {
  content: "\F566";
}

.mdi-video:before {
  content: "\F567";
}

.mdi-video-off:before {
  content: "\F568";
}

.mdi-video-switch:before {
  content: "\F569";
}

.mdi-view-agenda:before {
  content: "\F56A";
}

.mdi-view-array:before {
  content: "\F56B";
}

.mdi-view-carousel:before {
  content: "\F56C";
}

.mdi-view-column:before {
  content: "\F56D";
}

.mdi-view-dashboard:before {
  content: "\F56E";
}

.mdi-view-day:before {
  content: "\F56F";
}

.mdi-view-grid:before {
  content: "\F570";
}

.mdi-view-headline:before {
  content: "\F571";
}

.mdi-view-list:before {
  content: "\F572";
}

.mdi-view-module:before {
  content: "\F573";
}

.mdi-view-quilt:before {
  content: "\F574";
}

.mdi-view-stream:before {
  content: "\F575";
}

.mdi-view-week:before {
  content: "\F576";
}

.mdi-vimeo:before {
  content: "\F577";
}

.mdi-vine:before {
  content: "\F578";
}

.mdi-violin:before {
  content: "\F60F";
}

.mdi-visualstudio:before {
  content: "\F610";
}

.mdi-vk:before {
  content: "\F579";
}

.mdi-vk-box:before {
  content: "\F57A";
}

.mdi-vk-circle:before {
  content: "\F57B";
}

.mdi-vlc:before {
  content: "\F57C";
}

.mdi-voice:before {
  content: "\F5CB";
}

.mdi-voicemail:before {
  content: "\F57D";
}

.mdi-volume-high:before {
  content: "\F57E";
}

.mdi-volume-low:before {
  content: "\F57F";
}

.mdi-volume-medium:before {
  content: "\F580";
}

.mdi-volume-off:before {
  content: "\F581";
}

.mdi-vpn:before {
  content: "\F582";
}

.mdi-walk:before {
  content: "\F583";
}

.mdi-wallet:before {
  content: "\F584";
}

.mdi-wallet-giftcard:before {
  content: "\F585";
}

.mdi-wallet-membership:before {
  content: "\F586";
}

.mdi-wallet-travel:before {
  content: "\F587";
}

.mdi-wan:before {
  content: "\F588";
}

.mdi-watch:before {
  content: "\F589";
}

.mdi-watch-export:before {
  content: "\F58A";
}

.mdi-watch-import:before {
  content: "\F58B";
}

.mdi-water:before {
  content: "\F58C";
}

.mdi-water-off:before {
  content: "\F58D";
}

.mdi-water-percent:before {
  content: "\F58E";
}

.mdi-water-pump:before {
  content: "\F58F";
}

.mdi-watermark:before {
  content: "\F612";
}

.mdi-weather-cloudy:before {
  content: "\F590";
}

.mdi-weather-fog:before {
  content: "\F591";
}

.mdi-weather-hail:before {
  content: "\F592";
}

.mdi-weather-lightning:before {
  content: "\F593";
}

.mdi-weather-night:before {
  content: "\F594";
}

.mdi-weather-partlycloudy:before {
  content: "\F595";
}

.mdi-weather-pouring:before {
  content: "\F596";
}

.mdi-weather-rainy:before {
  content: "\F597";
}

.mdi-weather-snowy:before {
  content: "\F598";
}

.mdi-weather-sunny:before {
  content: "\F599";
}

.mdi-weather-sunset:before {
  content: "\F59A";
}

.mdi-weather-sunset-down:before {
  content: "\F59B";
}

.mdi-weather-sunset-up:before {
  content: "\F59C";
}

.mdi-weather-windy:before {
  content: "\F59D";
}

.mdi-weather-windy-variant:before {
  content: "\F59E";
}

.mdi-web:before {
  content: "\F59F";
}

.mdi-webcam:before {
  content: "\F5A0";
}

.mdi-webhook:before {
  content: "\F62F";
}

.mdi-wechat:before {
  content: "\F611";
}

.mdi-weight:before {
  content: "\F5A1";
}

.mdi-weight-kilogram:before {
  content: "\F5A2";
}

.mdi-whatsapp:before {
  content: "\F5A3";
}

.mdi-wheelchair-accessibility:before {
  content: "\F5A4";
}

.mdi-white-balance-auto:before {
  content: "\F5A5";
}

.mdi-white-balance-incandescent:before {
  content: "\F5A6";
}

.mdi-white-balance-iridescent:before {
  content: "\F5A7";
}

.mdi-white-balance-sunny:before {
  content: "\F5A8";
}

.mdi-wifi:before {
  content: "\F5A9";
}

.mdi-wifi-off:before {
  content: "\F5AA";
}

.mdi-wii:before {
  content: "\F5AB";
}

.mdi-wikipedia:before {
  content: "\F5AC";
}

.mdi-window-close:before {
  content: "\F5AD";
}

.mdi-window-closed:before {
  content: "\F5AE";
}

.mdi-window-maximize:before {
  content: "\F5AF";
}

.mdi-window-minimize:before {
  content: "\F5B0";
}

.mdi-window-open:before {
  content: "\F5B1";
}

.mdi-window-restore:before {
  content: "\F5B2";
}

.mdi-windows:before {
  content: "\F5B3";
}

.mdi-wordpress:before {
  content: "\F5B4";
}

.mdi-worker:before {
  content: "\F5B5";
}

.mdi-wrap:before {
  content: "\F5B6";
}

.mdi-wrench:before {
  content: "\F5B7";
}

.mdi-wunderlist:before {
  content: "\F5B8";
}

.mdi-xaml:before {
  content: "\F673";
}

.mdi-xbox:before {
  content: "\F5B9";
}

.mdi-xbox-controller:before {
  content: "\F5BA";
}

.mdi-xbox-controller-off:before {
  content: "\F5BB";
}

.mdi-xda:before {
  content: "\F5BC";
}

.mdi-xing:before {
  content: "\F5BD";
}

.mdi-xing-box:before {
  content: "\F5BE";
}

.mdi-xing-circle:before {
  content: "\F5BF";
}

.mdi-xml:before {
  content: "\F5C0";
}

.mdi-yeast:before {
  content: "\F5C1";
}

.mdi-yelp:before {
  content: "\F5C2";
}

.mdi-youtube-play:before {
  content: "\F5C3";
}

.mdi-zip-box:before {
  content: "\F5C4";
}

.mdi-18px {
  font-size: 18px;
}

.mdi-24px {
  font-size: 24px;
}

.mdi-36px {
  font-size: 36px;
}

.mdi-48px {
  font-size: 48px;
}

.mdi-dark {
  color: rgba(0, 0, 0, 0.54);
}

.mdi-dark.mdi-inactive {
  color: rgba(0, 0, 0, 0.26);
}

.mdi-light {
  color: white;
}

.mdi-light.mdi-inactive {
  color: rgba(255, 255, 255, 0.3);
}

.mdi-rotate-45 {
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform:  rotate(45deg); -moz-transform:  rotate(45deg); -o-transform:  rotate(45deg); -ms-transform:  rotate(45deg);transform: rotate(45deg);
}

.mdi-rotate-90 {
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform:  rotate(90deg); -moz-transform:  rotate(90deg); -o-transform:  rotate(90deg); -ms-transform:  rotate(90deg);transform: rotate(90deg);
}

.mdi-rotate-135 {
  -webkit-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform:  rotate(135deg); -moz-transform:  rotate(135deg); -o-transform:  rotate(135deg); -ms-transform:  rotate(135deg);transform: rotate(135deg);
}

.mdi-rotate-180 {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -webkit-transform:  rotate(180deg); -moz-transform:  rotate(180deg); -o-transform:  rotate(180deg); -ms-transform:  rotate(180deg);transform: rotate(180deg);
}

.mdi-rotate-225 {
  -webkit-transform: rotate(225deg);
  -ms-transform: rotate(225deg);
  -webkit-transform:  rotate(225deg); -moz-transform:  rotate(225deg); -o-transform:  rotate(225deg); -ms-transform:  rotate(225deg);transform: rotate(225deg);
}

.mdi-rotate-270 {
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform:  rotate(270deg); -moz-transform:  rotate(270deg); -o-transform:  rotate(270deg); -ms-transform:  rotate(270deg);transform: rotate(270deg);
}

.mdi-rotate-315 {
  -webkit-transform: rotate(315deg);
  -ms-transform: rotate(315deg);
  -webkit-transform:  rotate(315deg); -moz-transform:  rotate(315deg); -o-transform:  rotate(315deg); -ms-transform:  rotate(315deg);transform: rotate(315deg);
}

.mdi-flip-horizontal {
  -webkit-transform: scaleX(-1);
  -webkit-transform:  scaleX(-1); -moz-transform:  scaleX(-1); -o-transform:  scaleX(-1); -ms-transform:  scaleX(-1);transform: scaleX(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}

.mdi-flip-vertical {
  -webkit-transform: scaleY(-1);
  -webkit-transform:  scaleY(-1); -moz-transform:  scaleY(-1); -o-transform:  scaleY(-1); -ms-transform:  scaleY(-1);transform: scaleY(-1);
  filter: FlipV;
  -ms-filter: "FlipV";
}

/*# sourceMappingURL=materialdesignicons.css.map */


.sidebar .section .primaryContent h3:before, 
.sidebar .section .secondaryContent h3:before, 
.profilePage .mast .section.infoBlock .secondaryContent h3:before,
.resourceListSidebar .secondaryContent h3:before, 
.xengallerySideBar .section .secondaryContent h3:before,

.uix_icon,
.sidePanel__navTabs .navTab > .navLink:before,
.threadAlerts .lockedAlert .icon:before,
.threadAlerts .moderatedAlert .icon:before,
.discussionListItem .iconKey span:before,
.uix_socialMediaLinks .uix_socialLink .uix_icon,
.messageMeta .control.history:before,
.messageMeta .control.like:before,
.LikeText:before,
.breadcrumb .crust.placeholder .arrow:before,
.node .tinyIcon:before,
.Popup .PopupOpen .arrowWidget:before,
.navTabs .navTab.Popup.PopupOpen .SplitCtrl:before,
.Popup .arrowWidget:before,
.navTabs .SplitCtrl:before,
.messageMeta .control:before, 
.footer .choosers a:after,
.DismissParent .DismissCtrl:before {
	display: inline-block;
	font-family: "Material Design Icons";
	font-weight: normal;
	line-height: inherit;
	letter-spacing: normal;
	font-size: inherit;
	font-style: normal;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.messageMeta .control.like:before,
.LikeText:before							{content: "\F513";}

.messageMeta .uix_postbit_privateControlsMenu .uix_icon:before		{content: "\F0AD";}

.messageMeta .control.postComment:before				{content: "\F17A";}


.node .tinyIcon:before							{content: "\F46B";}

.DismissParent .DismissCtrl:before					{content: "\F156";}

.Popup .PopupOpen .arrowWidget:before					{content: "\F360";}
.navTabs .navTab.Popup.PopupOpen .SplitCtrl:before			{content: "\F360";}

.Popup .arrowWidget:before						{content: "\F35D";}
.navTabs .SplitCtrl:before						{content: "\F35D";}

.footer .choosers a:after						{content: "\F35D";}


.sidePanel__navTabs .navTab.home 	> .navLink:before  		{content: "\F2DC";}
.sidePanel__navTabs .navTab.articles 	> .navLink:before  		{content: "\F2DC";}
.sidePanel__navTabs .navTab.forums 	> .navLink:before		{content: "\F28C";}
.sidePanel__navTabs .navTab.xengallery 	> .navLink:before  		{content: "\F254";}
.sidePanel__navTabs .navTab.members 	> .navLink:before		{content: "\F00E";}
.sidePanel__navTabs .navTab.resources 	> .navLink:before 		{content: "\F1b8";}


.iconKey .starred:before						{content: "\F4cf";}
.iconKey .sticky:before							{content: "\F403";}
.iconKey .locked:before							{content: "\F33e";}
.iconKey .redirect:before						{content: "\F44E";}
.iconKey .watched:before						{content: "\F208";}
.iconKey .moderated:before,
.threadAlerts .moderatedAlert .icon:before				{content: "\F14C";}
.threadAlerts .lockedAlert .icon:before					{content: "\F33E";}


.messageMeta .control.edit:before					{content: "\F648";}
.messageMeta .control.delete:before,
.messageMeta .control.deleteSpam:before					{content: "\F1C0";}
.messageMeta .control.ip:before						{content: "\F5D2";}
.messageMeta .control.warn:before					{content: "\F026";}
.messageMeta .control.report:before					{content: "\F029";}
.messageMeta .control.unlike:before					{content: "\F511";}
.messageMeta .control.MultiQuoteControl:before				{content: "\F27E";}
.messageMeta .control.reply:before					{content: "\F45a";}
.messageMeta .shareButton .uix_icon:before				{content: "\F497";}
.messageMeta .control.history:before 					{content: "\F2DA";}




.uix_icon-facebook:before						{content: "\F20C";}
.uix_icon-twitter:before						{content: "\F544";}
.uix_icon-youtube:before						{content: "\F5C3";}
.uix_icon-vimeo:before 							{content: "\F577";}
.uix_icon-deviantArt:before 						{content: "\F1C7";}
.uix_icon-googlePlus:before 						{content: "\F2BD";}
.uix_icon-linkedIn:before						{content: "\F33B";}
.uix_icon-instagram:before						{content: "\F2FE";}
.uix_icon-pinterest:before						{content: "\F407";}
.uix_icon-steam:before							{content: "\F4D3";}
.uix_icon-twitch:before							{content: "\F543";}
.uix_icon-vine:before							{content: "\F578";}
.uix_icon-tumblr:before							{content: "\F541";}
.uix_icon-git:before							{content: "\F2A2";}
.uix_icon-reddit:before							{content: "\F44D";}

.uix_icon-dribbble:before		 {content: "D";}
.uix_icon-flickr:before	 		 {content: "F";}


.uix_icon-close:before		 	 {content: "\F156";}
.uix_icon-search:before		 	 {content: "\F349";}
.uix_icon-admin:before		 	 {content: "\F006";}
.uix_icon-cog:before			 {content: "\F493";}
.uix_icon-home:before		 	 {content: "\F2DC";}
.uix_icon-inbox:before		 	 {content: "\F1EE";}
.uix_icon-alerts:before		 	 {content: "\F23B";}
.uix_icon-menu:before			 {content: "\F35C";}
.uix_icon-navOverflow:before		 {content: "\F1D8";}
.uix_icon-sitemap:before		 {content: "\F4AA";}
.uix_icon-jumpToTop:before		 {content: "\F143";}
.uix_icon-jumpToBottom:before		 {content: "\F143";}
.uix_icon-signIn:before			 {content: "\f306";}
.uix_icon-register:before		 {content: "\f14e";}

.uix_icon-permissions:before		 {content: "\F39c";}
.uix_icon-user:before		 	 {content: "\F006";}
.uix_icon-users:before		 	 {content: "\F00e";}
.uix_icon-reports:before		 {content: "\F219";}
.uix_icon-moderator:before		 {content: "\F215";}

.uix_icon-email:before 			 {content: "\F1EE";}
.uix_icon-rss:before 			 {content: "\F46B";}
.uix_icon-comment:before 		 {content: "\F17A";}
.uix_icon-thumbsUp:before 		 {content: "\F513";}
.uix_icon-trophy:before 		 {content: "\F4ce";}

.uix_icon-statsDiscussions:before	 {content: "\F28C";}
.uix_icon-statsMessages:before		 {content: "\F367";}
.uix_icon-statsSubforumPopup:before	 {content: "\F24b";}

.uix_icon-collapse:before		 { content: "\F143"; }
.uix_icon-expand:before		 	 { content: "\F143"; }

.uix_icon-expandDropdown:before		 { content: "\F143"; }
.uix_icon-collapseDropdown:before	 { content: "\F143"; }

.uix_icon-expandWidth:before 		 { content: '\F616'; }
.uix_icon-compressWidth:before 	 	 { content: '\F615'; }

.uix_icon-collapseRightSidebar:before	 { content: '\F142'; }
.uix_icon-expandRightSidebar:before	 { content: '\F142'; }
.uix_icon-collapseLeftSidebar:before	 { content: '\F141'; }
.uix_icon-expandLeftSidebar:before	 { content: '\F141'; }




	.uix_icon-breadcrumbSeparator:before,
	.breadcrumb .crust.placeholder .arrow:before	 { content: "\F142"; }





	html .redactor_toolbar li a {font-size: 16px;}

	html .redactor_toolbar li a:before,
	html .redactor_dropdown a.icon:before
	{
		display: inline-block;
		font-family: "Material Design Icons";
		font-weight: normal;
		line-height: inherit;
		letter-spacing: normal;
		font-size: inherit;
		font-style: normal;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}

	html .redactor_toolbar li a.redactor_btn_bold:before
	{
		content: "\f264";
	}
	html .redactor_toolbar li a.redactor_btn_italic:before
	{
		content: "\f277";
	}
	html .redactor_toolbar li a.redactor_btn_underline:before
	{
		content: "\f287";
	}
	html .redactor_toolbar li a.redactor_btn_deleted:before
	{
		content: "\f1c0";
	}
	html .redactor_toolbar li a.redactor_btn_fontcolor:before
	{
		content: "\f266";
	}
	html .redactor_toolbar li a.redactor_btn_fontsize:before
	{
		content: "\f27f";
	}
	html .redactor_toolbar li a.redactor_btn_fontfamily:before
	{
		content: "\f284";
	}
	html .redactor_toolbar li a.redactor_btn_createlink:before
	{
		content: "\f337";
	}
	html .redactor_toolbar li a.redactor_btn_unlink:before
	{
		content: "\f338";
	}
	html .redactor_toolbar li a.redactor_btn_alignment:before
	{
		content: "\f261";
	}

	html .redactor_dropdown a.alignLeft:before
	{
		content: "\f262";
	}

	html .redactor_dropdown a.alignCenter:before
	{
		content: "\f260";
	}
	html .redactor_dropdown a.alignRight:before
	{
		content: "\f263";
	}

	html .redactor_toolbar li a.redactor_btn_unorderedlist:before
	{
		content: "\f279";
	}

	html .redactor_toolbar li a.redactor_btn_orderedlist:before
	{
		content: "\f27b";
	}

	html .redactor_toolbar li a.redactor_btn_outdent:before
	{
		content: "\f275";
	}

	html .redactor_toolbar li a.redactor_btn_indent:before
	{
		content: "\f276";
	}

	html .redactor_toolbar li a.redactor_btn_smilies:before
	{
		content: "\f1f2";
	}

	html .redactor_toolbar li a.redactor_btn_image:before
	{
		content: "\f2e9";
	}

	html .redactor_toolbar li a.redactor_btn_media:before
	{
		content: "\f22b";
	}

	html .redactor_toolbar li a.redactor_btn_insert:before
	{
		content: "\f527";
	}

	html .redactor_dropdown a.quote:before
	{
		content: "\f27e";
	}

	html .redactor_dropdown a.spoiler:before
	{
		content: "\f669";
	}

	html .redactor_dropdown a.code:before
	{
		content: "\f174";
	}

	html .redactor_dropdown a.strikethrough:before
	{
		content: "\f280";
	}

	html .redactor_toolbar li a.redactor_btn_draft:before
	{
		content: "\f670"
	}

	html .redactor_dropdown a.saveDraft:before
	{
		content: "\f193"
	}

	html .redactor_dropdown a.deleteDraft:before
	{
		content: "\f5e8";
	}

	html .redactor_toolbar li a.redactor_btn_undo:before
	{
		content: "\f54c";
	}

	html .redactor_toolbar li a.redactor_btn_redo:before
	{
		content: "\f44e";
	}

	html .redactor_toolbar li a.redactor_btn_removeformat:before
	{
		content: "\f265";
	}

	html .redactor_toolbar li a.redactor_btn_switchmode:before
	{
		content: "\f522";
	}

	html .redactor_toolbar li a.redactor_btn_custom_gallery:before {
		content: "\f254";
	}




@-webkit-keyframes rippleAnimation {
  to {
    -webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
    opacity: 0;
    -webkit-transform: scale(2.5);
            -webkit-transform:  scale(2.5); -moz-transform:  scale(2.5); -o-transform:  scale(2.5); -ms-transform:  scale(2.5);transform: scale(2.5);
  }
}
@keyframes rippleAnimation {
  to {
    -webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
    opacity: 0;
    -webkit-transform: scale(2.5);
            -webkit-transform:  scale(2.5); -moz-transform:  scale(2.5); -o-transform:  scale(2.5); -ms-transform:  scale(2.5);transform: scale(2.5);
  }
}
.rippleButton {  
position: relative;
}
.rippleButton .ripple-container {
  position: absolute;
  top: 0; 
  left: 0;
  pointer-events: none;
  width: 100%;
  height: 100%;
  -webkit-border-radius: inherit; -moz-border-radius: inherit; -khtml-border-radius: inherit; border-radius: inherit;
  -webkit-mask-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC');
}


.rippleButton .ripple {
  background-color: rgba(255,255,255,0.2);
  -webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
  -webkit-transform: scale(0);
          -webkit-transform:  scale(0); -moz-transform:  scale(0); -o-transform:  scale(0); -ms-transform:  scale(0);transform: scale(0);
  -webkit-transform-origin: center 50%;
          transform-origin: center 50%;
  display: block;
  position: absolute;
  -webkit-animation: rippleAnimation 650ms ease-out;
          animation: rippleAnimation 650ms ease-out;
-webkit-animation-play-state: running;
        animation-play-state: running;
}
.navLink .ripple {
  background-color: rgba(0,0,0,0.15);
  -webkit-animation: rippleAnimation 450ms ease-out;
}

input[type="radio"], input[type="checkbox"] {
    -webkit-appearance: none;
    vertical-align: sub;
    position: relative;
    padding: 0 !important;
}

input[type="radio"]:after, input[type="checkbox"]:after {
    border-color:  rgb(0, 0, 0); border-color:  rgba(0, 0, 0, 0.54); _border-color:  rgb(0, 0, 0);
}

input[type="radio"]:disabled:after, input[type="checkbox"]:disabled:after {
    border-color:  rgb(0, 0, 0); border-color:  rgba(0, 0, 0, 0.26); _border-color:  rgb(0, 0, 0);
}

input[type="radio"]:focus, input[type="checkbox"]:focus {
    outline: none;
}

/* checkbox */

input[type="checkbox"]:after {
    border: 2px solid;
    -webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
    content: '';
    display: block;
    height: 12px;
    transition: 240ms;
    width: 12px;
}

input[type="checkbox"]:checked:before {
    -webkit-transform: rotate(45deg);
    -webkit-transform:  rotate(45deg); -moz-transform:  rotate(45deg); -o-transform:  rotate(45deg); -ms-transform:  rotate(45deg);transform: rotate(45deg);
    position: absolute;
    left: 5px;
    top: 1px;
    display: table;
    width: 4px;
    height: 8px;
    border: 2px solid #fff;
    border-top: 0;
    border-left: 0;
    content: '';
}

input[type="checkbox"]:checked:after {
    background-color: #DB291C;
    border-color: #DB291C;
}

input[type="checkbox"]:disabled:checked:after {
    background-color: rgba(0, 0, 0, 0.26);
    border-color: transparent;
}

/* radio */

input[type="radio"]:before, input[type="radio"]:after {
    content: '';
    -webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
    display: block;
    height: 12px;
    width: 12px;
    transition: 240ms;
}

input[type="radio"]:after {
    border: 2px solid;
}

input[type="radio"]:checked:after {
    border-color: #DB291C;
}

input[type="radio"]:before {
    background-color: #DB291C;
    position: absolute;
    top: 2px;
    left: 2px;
    -webkit-transform:  scale(0); -moz-transform:  scale(0); -o-transform:  scale(0); -ms-transform:  scale(0);transform: scale(0);
}

input[type="radio"]:checked:before {
    -webkit-transform:  scale(0.55); -moz-transform:  scale(0.55); -o-transform:  scale(0.55); -ms-transform:  scale(0.55);transform: scale(0.55);
}

input[type="radio"]:disabled:checked:after {
    border-color:  rgb(0, 0, 0); border-color:  rgba(0, 0, 0, 0.26); _border-color:  rgb(0, 0, 0);
}

input[type="radio"]:disabled:checked:before {
    background-color: rgba(0, 0, 0, 0.26);
}

/*#######################################################
#							#
#			Utilities			#
#							#
#######################################################*/




@media (max-width: 480px) {
	.member_view .mainContainer_noSidebar .mainProfileColumn {
		margin-left: -10px; 
		margin-right: -10px; 
		display: block;
		margin-bottom: 20px;
	}
}


.flex__container {display: flex;}



/*#######################################################
#							#
#			Buttons				#
#							#
#######################################################*/


.button.disabled,
.button.disabled:hover,
.button.disabled:active,
.button.disabled:focus {
	color: rgba(0, 0, 0, .26);
	background: none;
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
}

.button.primary:focus {
	color: #DB291C;
}

.button.primary:hover,
.button.primary:active
.button.primary:active:focus {
	-webkit-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); -moz-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); -khtml-box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25); box-shadow: 0 6px 10px 0 rgba(0,0,0,.15),
	0 4px 10px 0 rgba(0,0,0,.25),
	0 2px 4px -1px rgba(0,0,0,.25);
	background-color: #DB291C;
	color: #FFF;
}

.callToAction:hover {text-decoration: none !important;}

.button.primary.disabled {
	background: url(rgba.php?r=0&g=0&b=0&a=30); background: rgba(0,0,0,.12); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1E000000,endColorstr=#1E000000);
}

.button.primary.disabled:hover {-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;}

.button.primary.disabled:hover {color: rgba(0, 0, 0, .26);}

.callToAction:focus span {
	background-color: rgb(230, 230, 230); 
	color: #DB291C;
}

.callToAction.floatingAction {
	height: 60px;
	line-height: 60px;
    	width: 60px;
    	-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
}

.callToAction.floatingAction span {
	-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
    	padding: 0;
    	min-width: 0;
    	font-size: 24px;
}


/*#######################################################
#							#
#			Content Wrapper			#
#							#
#######################################################*/




	#content[class^="find_new_"] .mainContainer .mainContent,
	#content[class^="find_new_"] .mainContainer_noSidebar,

	#content[class^="watch_"] .mainContainer .mainContent,
	#content[class^="watch_"] .mainContainer_noSidebar,

	#content[class^="account_"] .mainContainer .mainContent,
	#content[class^="account_"] .mainContainer_noSidebar,
	
	.member_notable .mainContainer .mainContent,
	.member_notable .mainContainer_noSidebar,
	
	.news_feed_page .mainContainer .mainContent,
	.news_feed_page .mainContainer_noSidebar,

	.conversation_list .mainContainer .mainContent,
	.conversation_list .mainContainer_noSidebar,

	.thread_view .mainContainer .mainContent,
	.thread_view .mainContainer_noSidebar,

	.forum_view .mainContainer .mainContent,
	.forum_view .mainContainer_noSidebar,
	
	.category_view .mainContainer .mainContent,
	.category_view .mainContainer_noSidebar,

	.member_view .mainContainer .mainContent,
	.member_view .mainContainer_noSidebar,
	
	.register_form .mainContainer .mainContent,
	.register_form .mainContainer_noSidebar,
	
	.EWRporta2_ArticleList .mainContainer .mainContent,
	.EWRporta2_ArticleList .mainContainer_noSidebar,
	.EWRporta2_ArticleView .mainContainer .mainContent,
	.EWRporta2_ArticleView .mainContainer_noSidebar,
	
	#content[class^="conversation_"] .mainContainer .mainContent,
	#content[class^="conversation_"] .mainContainer_noSidebar,
	
	#content[class^="resource_"] .mainContainer_noSidebar,
	
	#content[class^="help_"] .mainContainer .mainContent,
	#content[class^="help_"] .mainContainer_noSidebar,
	
	#content[class^="xengallery_"]:not([class^="xengallery_media_view"]) .mainContainer .mainContent,
	#content[class^="xengallery_"]:not([class^="xengallery_search"]) .mainContainer_noSidebar {
		padding: 0;
		border: none;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
		background: none;
	}
	



@media (max-width: 480px) {
	#content.forum_list .mainContainer {
		margin-left: -10px; 
		margin-right: -10px; 
	}
}
	
/*#######################################################
#							#
#			Welcome Block			#
#							#
#######################################################*/


#uix_welcomeBlock {padding-bottom: 10px;}

.hasWelcomeBlock #content {margin-top: -0;}



/*#######################################################
#							#
#			Canvas Menus			#
#							#
#######################################################*/

.sidePanel .section {
	margin: 15px auto;
}

.sidePanel__navTabs .navLink:before {
	margin-right: 20px;
	color: rgb(55, 55, 55);
	font-size: 18px !important;
	vertical-align: bottom;
}

.sidePanel__navTabs .navLink:hover:before,
.sidePanel__navTabs .navTab:hover .SplitCtrl {color: #337AB7;}

.sidePanel__navTabs .SplitCtrl {font-size: 18px;}

.sidePanel__navTabs .blockLinksList {margin-left: 38px;}

.sidePanel__tab > .uix_icon {font-size: 18px;}

.sidePanel .visitorPanel .avatar__headingBlock {
	display: none; 
	padding: 0; margin: 0;
}

.userInfoSection {
	background-color: #337AB7;
background-position: 50% 50%;
background-size: cover;

	background-color: #000;
}

.userInfoSection--content {padding: 20px 15px;}

.userInfoSection h2 {color: #fff;}


/*#######################################################
#							#
#		Header and Navigation			#
#							#
#######################################################*/


#navigation .navTabs .navTab.selected .navLink:before {
	height: 3px;
    	content: "";
    	background-color: #DB291C;
    	position: absolute;
    	bottom: 0;
    	left: 0;
    	right: 0;
}

.navTabs .visitorTabs .navLink, 
.navTabs .visitorTabs .SplitCtrl,
#QuickSearchPlaceholder {
	padding-left: 10px; padding-right: 10px;
}

@media (max-width: 800px) {
	.navTabs .navLink, .navTabs .SplitCtrl {padding: 0 10px;}
}

#navigation .navTabs .navLink .itemCount {
	margin-left: -4px;
	margin-top: -7px;
}

#QuickSearchPlaceholder {font-size: 24px;}

#searchBar:hover i {color: #151515;}

.uix_navigationLogoText {
	display: inline;
}


.activeSticky.lastSticky .pageContent {-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);}

.navTabs .navTab .navLink > .uix_icon {font-size: 18px;}


@media (max-width: 800px) {
	#logo_small {
		float: none;
	}
	.activeSmallLogo #logo_small {display: inline-block;}
	#logo_small a {padding: 0;}
	
}

@media (max-width: 610px) {
	.Responsive .navTabs .pageWidth {padding-left: 0; padding-right: 0;}
}

.breadBoxTop a.callToAction {
	height: 36px;
	line-height: 36px;
	vertical-align: middle;
}

.navTab.topLink {display: none !important;}

.activeSticky .navTab.topLink {display: inline-block !important;}

.topLink.navTab .navLink > .uix_icon {margin-right: 0;}

@media (max-width: 480px) {
	.navTab.register {display: none !important;}
}

.loginText,.registerText {font-size: 12px;}

/*#######################################################
#							#
#			Titlebar			#
#							#
#######################################################*/



.material__titleWrapper {
	background-color: #337AB7;
background-position: 50% 50%;
background-size: cover;

}


.materialBanner--overlay {
	background-color: rgba(51, 122, 183, .25);
}

.material__titleWrapper .titleBar {
	padding-top: 40px;
padding-bottom: 40px;
margin: 0;

}

.material__titleWrapper .titleBar #pageDescription a {color: #fff; text-decoration: underline;}

.pageTitle__icon {
	font-size: 18px;
color: #fff;
background: url(rgba.php?r=0&g=0&b=0&a=51); background: rgba(0,0,0,.2); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#33000000,endColorstr=#33000000);
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
background-image: none !important;

	width: 50px; 
	height: 50px;
	line-height: 50px;
	text-align: center;
	color: #fff;
	font-size: 24px;
	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
}

.pageTitle__icon {font-size: 18px;}

.titleBar h1 em {color: #fff; text-decoration: underline;}

h1 .prefix,
.discussionListItem .prefix, .searchResult .prefix {font-size: 1em;}


/*#######################################################
#							#
#			Sidebar				#
#							#
#######################################################*/


.sidebar .section > .secondaryContent {
	border: none;
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
}


.sidebar .visitorPanel .username {color: #fff;}

.visitorPanel .avatar__headingBlock {
 	padding: 15px;
 	margin: -15px -15px 15px;
 	background: #000;
}

.sidebar .visitorPanel .avatar {margin-right: 0;}

.sidebar .visitorPanel .stats dl .uix_icon {
	font-size: 18px; 
	color: rgb(114, 114, 114);
}


.sidebar .secondaryContent li:last-child,
.sidebar .secondaryContent dl:last-child {
	border-bottom: none;
}

.sidebar .visitorPanel .stats {margin: 0;}

.sidebar .visitorPanel .stats dl {
 	display: -webkit-box;
 	display: -ms-flexbox;
 	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
}

.toggleList_item .uix_icon {font-size: 18px; transition: transform 0.3s ease-in-out;}

.uix_icon-collapseRightSidebar {-webkit-transform:  rotate(-180deg); -moz-transform:  rotate(-180deg); -o-transform:  rotate(-180deg); -ms-transform:  rotate(-180deg);transform: rotate(-180deg);}

.sidebar .avatarList {
	margin-top: -15px;
	margin-bottom: -15px;
}


/*#######################################################
#							#
#			Node List			#
#							#
#######################################################*/


.forum_list .nodeList .nodeList, 
.forum_view .nodeList, 
.watch_forums .nodeList {margin-top: 0; border: none;}


	.nodeList .level_2:nth-child(even) .nodeInfo {background-color: #F8F8F8;}
	


.hasFlexbox .nodeText .media--left {margin: 0;}

.hasFlexbox .node.level_2 .nodeInfo {
	-webkit-flex-wrap: wrap;
	    -ms-flex-wrap: wrap;
	        flex-wrap: wrap;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-ms-flex-direction: column;
	flex-direction: column;
}



.hasFlexbox .node.level_2 .nodeInfo .nodeText {
	-webkit-box-flex: 1;
	-ms-flex-positive: 1;
	flex-grow: 1;
}

.node.audentio_grid_lg .nodeLastPost {margin: 0; padding: 15px;}

.audentio_grid .nodeLastPost.secondaryContent {
	min-height: 51px;
}


	.node.level_2:first-child .nodeInfo {border-top: none;}


.node .nodeLastPost .lastThreadTitle a {color: #DB291C;}

.node .nodeIcon i {vertical-align: text-bottom;}

.subForumIcon .uix_icon {vertical-align: text-bottom;}

.uix_icon-expand,
.uix_icon.uix_icon-jumpToBottom,
.uix_icon-expandDropdown,	
.node.collapsed .uix_collapseNodes .uix_icon,
.uix_icon-jumpToTop,
.uix_icon-collapseDropdown,
.uix_icon-collapse {				   
 	transition: transform 0.3s ease-in-out;
 }
 
.uix_icon-expand,
.uix_icon.uix_icon-jumpToBottom,
.uix_icon-expandDropdown	{-webkit-transform:  rotate(-180deg); -moz-transform:  rotate(-180deg); -o-transform:  rotate(-180deg); -ms-transform:  rotate(-180deg);transform: rotate(-180deg);}





/*#######################################################
#							#
#		Discussion List				#
#							#
#######################################################*/

@media (max-width: 480px) {
	.discussionList {
		margin-left: -10px; 
		margin-right: -10px; 
	}
}

.discussionListItem .title {font-weight: 500;}

.discussionList .discussionListItems .stats {
	background: #F8F8F8; 
	border-left: 1px solid rgb(187, 187, 187);
	border-right: 1px solid rgb(187, 187, 187);
}

.discussionList .discussionListItems .InlineModChecked .stats {background: transparent;}

.discussionListItem .stats dl,
.discussionListItem .stats dl {border: none;}

.discussionListItem .iconKey span,
.thread_view .threadAlerts .icon {
	background: none !important;
	font-size: 18px;
	padding: 0 2px;
	width: auto !important;
	height: auto !important;
}

.discussionListItem .iconKey .locked,
.thread_view .threadAlerts .lockedAlert .icon {color: #d28b00;}
.discussionListItem .iconKey .sticky {color: #ca0000;}
.discussionListItem .iconKey .watched {color: #910098;}
.discussionListItem .iconKey .moderated,
.thread_view .threadAlerts .moderatedAlert .icon {color: #00a500;}
.discussionListItem .iconKey .redirect {color: #0026bd;}


.discussionList .discussionListItem.deleted .deletionNote {color: #999;}

.SelectionCount.cloned.itemsChecked {color: #337AB7;}

.discussionListItem .lastPostInfo .avatar {display: none;}

.prefix {-webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;}


/*#######################################################
#							#
#			Message				#
#							#
#######################################################*/

.hasFlexbox .message .messageInfo {
	margin: 0;
	padding: 15px;
}

.messageDetails .authorEnd {display: none;}

.message .messageDetails {margin-left: -5px;}

.message .messageDetails .item,
.message .messageDetails .item a {color: rgb(114, 114, 114);}

.message .messageMeta a.control.item:before {
	font-size: 12px; 
	color: rgb(114, 114, 114);
	line-height: inherit;
}

.message .messageMeta a.control.item:hover:before {
	color: #337AB7;
text-decoration: none;

}

.message .publicControls .MultiQuoteControl.active {color: #337AB7; background-color: transparent;}

.LikeText:before {
	font-size: 16px;
	margin-right: 3px;
	vertical-align: middle;
}

.likesSummary .LikeText .username {
	color: #333; 
	font-weight: 400;
}

#QuickReply {padding: 15px;}

.quickReply .messageUserInfo {
	border: none; 
	background: none;
}

.message.deleted .messageMeta .control {line-height: 1;}

.deletedMessage {
	color: #ca0000;
	text-transform: uppercase;
	font-size: 14px;
	background: rgb(250, 233, 233);
	padding: 15px;
}

.errorPanel {background: rgb(250, 233, 233);}

.thread_view .threadAlerts {
	padding: 15px; 
	border: none;
}



.thread_view 	padding: 0; 
	-webkit-box-shadow: 0 2px 3px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 3px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 3px rgba(0,0,0,.25); box-shadow: 0 2px 3px rgba(0,0,0,.25);
	border: none;
}

.pollBlock .pollContent {max-width: 100%; padding: 0;}

.pollContent .question {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
}

.pollBlock .secondaryContent {border: none; padding: 20px;}

.pollContent .questionMark {display: none;}

.pollBlock .pollOptions, .pollBlock .pollResults {
	border: none;
	padding: 0;
	margin: 15px 0;
}

.pollOptions .pollOption {
	border-bottom: 1px solid rgb(187, 187, 187);
	padding: 10px 0;
}

.pollContent .buttons input:last-child {margin-left: 15px;}

.pollBlock .buttons .pollNotes {margin: 0; padding: 0;}

@media (max-width: 480px) {
	.pollBlock .secondaryContent {padding: 15px;}
	.pollBlock .buttons .pollNotes {text-align: center; float: none;}
	.pollBlock .buttons .button {width: 45%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;}
	.pollBlock .buttons .button:first-of-type {float: left;}
	.pollBlock .buttons .button:last-of-type {float: right; margin: 0;}
}




.messageUserBlock .arrow {display: none;}

.messageUserBlock .userBanner {margin-left: 0; margin-right: 0;}

.extraUserInfo i {font-size: 18px;}

.extraUserInfo .pairsJustified dd {
	float: none; 
	text-align: left;
}


@media (max-width: 610px) {
	.Responsive.hasFlexbox .messageUserBlock {border-bottom: 1px solid rgb(187, 187, 187);}
	.Responsive .messageUserBlock div.avatarHolder {
		padding: 0;
	}
	.Responsive.hasFlexbox .messageUserBlock h3.userText {
		border: none; 
		padding: 0;
		margin-left: 15px;
	}
	.messageUserBlock a.username {text-align: left;}
	.Responsive.hasFlexbox .messageUserBlock {
		-webkit-box-align: center;
		-ms-flex-align: center;
		-ms-grid-row-align: center;
		align-items: center;
		margin: 0;
		padding: 15px; 
	}
	.Responsive .messageUserInfo {border: none;}
}


	.messageUserBlock div.avatarHolder .onlineMarker {
		margin-top: 10px;
		margin-left: 10px;
		-webkit-box-shadow: 0 0 0 3px #FFF; -moz-box-shadow: 0 0 0 3px #FFF; -khtml-box-shadow: 0 0 0 3px #FFF; box-shadow: 0 0 0 3px #FFF;
	}


/*#######################################################
#							#
#		Profile Page				#
#							#
#######################################################*/

.profilePage .mainProfileColumn {
	background-color: #FFFFFF;
	margin-left: 300px;
	margin-right: 0;
	border: none;
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
}

.profilePage .mainText.secondaryContent {background-color: #F0F0F0;}
.profilePage .tabs.mainTabs {background-color: #F0F0F0;}

.profilePage .mast {
	width: 280px;
}

.profilePage .mast .tabs {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-top: 0;
}



.profilePage .mast {
	float: right;
	padding-left: 20px;
	padding-right: 0;
}

.profilePage .mainProfileColumn {
	margin-right: 300px;
	margin-left: 0px;
}



.profilePage .mast .tabs > li {
    -ms-flex: 1 0 auto;
    -webkit-flex: 1 0 auto;
    flex: 1 0 auto;
}

.profilePage .mast .tabs > li > a {display: block;}

.profilePage .mast .section:first-child {margin-top: 0;}

.profilePage .mast .sectionFooter {	
	margin: 15px -15px -15px;
	-webkit-border-radius: 0 0 2px 2px; -moz-border-radius: 0 0 2px 2px; -khtml-border-radius: 0 0 2px 2px; border-radius: 0 0 2px 2px;
}

.profilePage .mast .section--userStatus {border-left: 3px solid #DB291C;}
.profilePage .mast .section--userStatus .userStatus {
	font-size: 12px;
	line-height: 1;
	font-style: italic;
}


.profilePage .primaryUserBlock {margin-bottom: 0;}

.profilePage .primaryUserBlock .primaryContent, 
.profilePage .primaryUserBlock .secondaryContent {padding-left: 15px;}

.profilePage .primaryUserBlock .avatarScaler {float: left; margin-right: 15px;}


.profilePage .profileContent {
	margin: 0;
	padding: 0 15px;
}
.profilePage .profileContent span.JsOnly {display: block; padding: 15px;}

.profilePage .primaryUserBlock .lastActivity {border: none; -webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;}

.profilePage .tabs.mainTabs {
	padding: 0;
}

.profilePage .profilePoster {padding: 15px 0; margin: 0;}
.profilePage .profilePoster textarea {margin-top: 5px;}

.textWithCount .count {
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(233, 30, 99);
padding: 0 2px;
-webkit-border-radius: 100%; -moz-border-radius: 100%; -khtml-border-radius: 100%; border-radius: 100%;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 16px;
_width: 16px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 16px;

	position: static;
	float: none;
	display: inline-block;
}

.mainProfileColumn form.section {margin-top: 0;}

.messageSimple {
	margin: 0; 
	padding: 15px 0;
}

.messageSimple .comment, .messageSimple .secondaryContent {
	padding: 10px;
	background: #F0F0F0;
	border: 0;
	-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
}

.messageSimple.profilePoster {background: none;}

.messageSimple .messageContent {
	min-height: 16px;
	padding-top: 10px;
	padding-bottom: 10px;
}

.messageSimple .messageResponse {
	margin: 0;
	padding: @uix_guterWidthSmall 0;
	max-width: 100%;
}

.messageSimple .messageMeta {
	padding-top: 15px;
}

.messageSimple .likesSummary {background: none;}

.messageSimple .messageMeta .item {
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

.messageSimpleList .placeholder .placeholderContent {
	background: #F0F0F0;
	padding: 16px;
	border-left: 3px solid rgb(244, 67, 54);
}

.messageSimple .avatar img {width: 36px; height: 36px;}
.messageSimple .messageInfo {margin-left: 50px;}

.LikeText {color: #333;}

.profilePage .newsFeed {
	padding-top: 15px; 
	padding-bottom: 15px;
}

.profilePage .searchResult:first-child {margin-top: 0; padding-top: 0;}

.profilePage .searchResult {padding: 15px 0;}

.profilePage .searchResult .main {padding: 0;}

.profilePage #postings > div {padding: 15px 0;}

#NoProfilePosts {padding-top: 15px;}

.profilePage .primaryUserBlock .followBlock {
	float: none;
	overflow: hidden;
}

.profilePage .primaryUserBlock .followBlock .muted {clear: none;}


.profilePage .mast .infoBlock:first-child {margin-top: 0;}





/*#######################################################
#							#
#		User Control Panel			#
#							#
#######################################################*/

.navigationSideBar {width: 200px;}

.navigationSideBar > ul {
	background: none; 
	border: none;
}

.navigationSideBar .section {margin: 0;}

.mainContentBlock {-webkit-box-shadow: 0 2px 6px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 6px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 6px rgba(0,0,0,.25); box-shadow: 0 2px 6px rgba(0,0,0,.25);}

.navigationSideBar a {
	padding: 10px 15px; 
	color: rgb(22, 22, 22);
}

.navigationSideBar a:hover {
	color: #151515; 
	background: #F0F0F0;
}

.navigationSideBar .subHeading {
	margin: 0; 
	padding: 10px 15px;
	text-transform: uppercase;
	color: rgb(22, 22, 22);
	margin-top: 15px;
	font-size: 13px;
}

.navigationSideBar .secondaryContent {	
	font-weight: 400;
	color: #DB291C;
	border-bottom: 2px solid #DB291C;
}

/*#######################################################
#							#
#			Footer				#
#							#
#######################################################*/

.breadBoxBottom {
	border-top: 1px solid rgb(187, 187, 187); 
	border-bottom: none;
}

footer {margin-top: 30px;}

.bigFooterCol .footerMenu a {padding: 0;}

.bigFooterCol .footerMenu a:hover {color: #151515;}

.footer .pageContent {margin-top: 0;}

.footerLinks li a {
	height: 34px;
	line-height: 34px;
}

.chooser_widthToggle span {
	vertical-align: text-bottom;
}

.uix_socialLink .uix_icon {font-family: 'FontAwesome';}

#copyright {color: rgb(22, 22, 22);}
#copyright a {color: rgb(114, 114, 114);}


@media (max-width: 610px) {
	.footerLinks {
		margin-top: 10px;
	}
}

.bigFooterRow .uix_socialMediaLinks {
	float: none;
	margin: 0;
	text-align: center;
}



/*#######################################################
#							#
#			Extra pages			#
#							#
#######################################################*/

.member_notable .section {margin-top: 0;}

.memberList .username a {color: #151515;}

.memberList .username a:hover {color: #DB291C;}

.memberListItem .extra .bigNumber {font-size: 2em;}

.memberList {-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);}

.section.memberList {margin-top: 0;}

@media (max-width: 480px) {
	.memberList {
		margin-left: -10px; 
		margin-right: -10px; 
	}
}

.news_feed_page_global .newsFeed {
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
	background-color: #FFFFFF;
	padding: 0 15px;
}

.news_feed_page_global .newsFeed .extra {margin: 0; padding: 15px 0;}

.news_feed_page_global .newsFeed .NewsFeedEnd {margin-top: 15px;}

.find_new_profile_posts .messageSimpleList  {
	border: none; 
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
	padding: 0 15px;
	background-color: #FFFFFF;
}

.messageSimple .messageMeta .item a {color: inherit}

/*#######################################################
#							#
#			Register Page			#
#							#
#######################################################*/

.register_form form {
	max-width: 100%; 
	display: -webkit-box; 
	display: -ms-flexbox; 
	display: flex;
}

.register__signInInfo {
	width: 50%; 
	background: #FFFFFF;
	padding: 20px;
}

.register__additionalInfo {
	width: 50%; 
	background: #F0F0F0; 
	border-left: 1px solid rgb(187, 187, 187);
	padding: 20px;
}

.register_form .xenForm .ctrlUnit > dt,
.register_form .xenForm .ctrlUnit > dd {width: 100%; text-align: left;}

.register_form .xenForm .ctrlUnit > dt label {margin: 0;}

.register_form .xenForm h1 {margin-bottom: 15px;}


.Responsive .register_form .xenForm .ctrlUnit {padding: 0;}



@media screen and (max-width: 1024px) {
	.register_form form {
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
	}
	.register__signInInfo {width: 100%;} 
	.register__additionalInfo {
		width: 100%;
		border-left: none;
		border-top: 1px solid rgb(187, 187, 187);
	}
}

@media screen and (max-width: 480px) {
	.register__signInInfo,
	.register__additionalInfo {padding: 15px;}
}

.xenForm fieldset, 
.xenForm .formGroup, 
.dataTable tr.dataRow td {border: none;}



/*#######################################################
#							#
#			PageNav				#
#							#
#######################################################*/


.PageNav .pageNavHeader {
	background: #fff; 
	border: 1px solid rgb(187, 187, 187); 
	max-height: 36px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	color: rgb(22, 22, 22);
}

.PageNav .pageNavHeader {padding: 0 8px;}

a.PageNavNext,
a.PageNavPrev {
	color: rgb(114, 114, 114);
text-decoration: none;
background-color: #fff;
border: 1px solid rgb(187, 187, 187);
border-left-width: 0 !important;
text-align: center;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
line-height: 36px;

}

@media (max-width: 480px) {
	.PageNav nav a:first-child {border-left-width: 1px !important;}
}

.PageNav a.text {padding: 0 8px; color: rgb(22, 22, 22);}

/*#######################################################
#							#
#			Block Notices			#
#							#
#######################################################*/

.PanelScroller .navContainer {margin-top: 0 !important;}

.PanelScroller .navControls {float: none;}

.PanelScroller .navControls a .arrow {display: none !important;}

.Notices .panel .noticeContent {padding: 15px; line-height: 1.8;}
.Notices .panel.DismissParent .noticeContent {padding-right: 40px;}

.DismissParent .DismissCtrl {
	background: none;
	background-image: none !important;
	width: 18px;
	height: 15px;
	top: 18px;
	right: 15px;
}

.DismissParent .DismissCtrl:before {
	color: #151515;
	font-size: 18px;
	position: absolute;
	top: 0;
	right: 0;

}

.DismissParent .DismissCtrl:hover:before {color: #DB291C;}

.FloatingContainer .floatingItem .DismissCtrl {margin: 0;}
.DismissParent .DismissCtrl:before {position: static; text-indent: 0; display: block;}

@media (max-width: 480px) {
	.Notices {margin-left: 10px; margin-right: 10px;}
}


/*#######################################################
#							#
#			Overlays			#
#							#
#######################################################*/

.xenOverlay .section .subHeading {background: #FFFFFF;}

.xenOverlay .section, 
.xenOverlay .sectionMain {border: none;}




/*#######################################################
#							#
#			Popup Menus			#
#							#
#######################################################*/


.Menu .primaryContent {
	background-color: #F0F0F0;;
}


/*#######################################################
#							#
#		Styling For Popular Add-ons		#
#							#
#######################################################*/



.WidgetFramework_WidgetRenderer_ProfilePosts_ProfilePostList {
	margin-bottom: -15px;
	margin-top: -15px;
}


.widget .profilePostListItem {
	padding-top: 15px;
padding-bottom: 15px;
margin: 0;
border-top-width: 0;
border-bottom: 1px solid rgb(187, 187, 187);
overflow: hidden;
zoom: 1;

}



.widget .profilePostListItem:last-child {
	border-bottom: none;
}

.sidebar .widget-group-tab .secondaryContent {-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;}

.sidebar .statusPoster {
	padding-top: 15px;
	padding-bottom: 15px;
}

.sidebar .statusPoster .submitUnit {margin-top: 10px;}

.widget-group-tab {
	background-color: #fff;
	
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
}

.widget-group-tab .tabs {
	background-color: rgb(243, 243, 243);
}

.widget-container.widget-tabs .tabs {border-bottom: 2px solid rgb(187, 187, 187);}

.sidebar .pollBlock {-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;}

.widget-tabs .tabs li a {
	font-size: 11px;
	padding: 0 5px;
	font-weight: 400;
}



.xmgCarouselContainer .sectionMain {padding: 0; background: none;}

#ProfilePanes .xengalleryContainer {padding: 15px 0;}

.xengallerySideBarContainer .xengallerySideBar .section .secondaryContent {
	border: none;
	-webkit-box-shadow: 0px 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0px 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0px 2px 2px rgba(0,0,0,.25); box-shadow: 0px 2px 2px rgba(0,0,0,.25);
}

.xengalleryContainer .insideContainer {
	padding: 15px;
	background: #FFFFFF;
	-webkit-box-shadow: 0 2px 6px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 6px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 6px rgba(0,0,0,.25); box-shadow: 0 2px 6px rgba(0,0,0,.25);
}

@media (max-width: 800px) {
	.Responsive .xengallerySideBar > .section:last-child {margin-bottom: 0;}
}



#ProfilePanes #resources > .section {margin: 0;}



.resourceListMain {
	margin-left: 0;
	margin-right: 300px;
}

.resourceListSidebar {float: right;}



.resourceListMain {
	-webkit-box-shadow: 0 2px 6px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 6px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 6px rgba(0,0,0,.25); box-shadow: 0 2px 6px rgba(0,0,0,.25);
	padding: 0 15px;
}

.resourceListMain .section {
	margin: 0 auto; 
	padding: 15px 0;
}

.resourceListMain .textHeading {
	display: flex;
	flex-direction: row-reverse;
	justify-content: space-between;
	align-items: flex-end;
}

.resourceListItem .main .title {
	font-size: 14px; 
	font-weight: 400;
}

.resourceListItem .main .title a {color: #151515;}

.featuredResourceList .featuredResource {
	background: #F0F0F0; 
	border-color: rgb(187, 187, 187);
}

.resourceListSidebar .secondaryContent {
	border: none;
	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,.25); -moz-box-shadow: 0 2px 2px rgba(0,0,0,.25); -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.25); box-shadow: 0 2px 2px rgba(0,0,0,.25);
}

@media (max-width: 800px) {
	.Responsive .resourceListBlock .resourceListMain {
		display: block;
		margin-right: 0;
		margin-left: 0;
	}
	.resourceListSidebar .secondaryContent:first-child {margin-top: 20px;}
	.resourceListSidebar .secondaryContent:last-child {margin-bottom: 0;}
}

.resourceInfo h1 {color: #151515;}

.primaryContent.resourceUpdate {padding: 15px;}

.resourceHistory.dataTable .dataRow th,
.resourceHistory.dataTable .dataRow td {
	font-size: 12px;
color: rgb(114, 114, 114);
text-decoration: none;
background-color: #FFFFFF;
padding: 15px;
margin: 0 auto;
border-width: 0;
border-top-style: solid;
border-bottom: 1px solid rgb(187, 187, 187);

}

.resourceHistory.dataTable .dataRow td {color: #151515;}

.resourceInfo .primaryLinks {min-width: 0;}

.xenOverlay .resourceIconEditor .iconAction {background: none;}




.sidePanelWrapper > .visitorPanel .avatar__headingBlock .CoverImage--overlay {
	margin: -20px -15px;
	padding: 20px 15px;
}




.sidePanel .navTab .uix_icon {display: none;}

/*#######################################################
#							#
#			Misc				#
#							#
#######################################################*/

.pairs dt, 
.pairsInline dt, 
.pairsRows dt, 
.pairsColumns dt, 
.pairsJustified dt {color: rgb(114, 114, 114);}

.pairs dd, 
.pairsInline dd, 
.pairsRows dd, 
.pairsColumns dd, 
.pairsJustified dd,
.subForumsPopup {color: rgb(55, 55, 55);}

.pairsRows, 
.pairsColumns, 
.pairsJustified,
.sidebar .visitorPanel .stats .pairsJustified {line-height: 2;}





.media__container {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: start;
	-webkit-align-items: flex-start;
	-ms-flex-align: start;
	align-items: flex-start;
}

.media__body {
	-webkit-box-flex: 1;
	-webkit-flex: 1;
	-ms-flex: 1;
	flex: 1;
}

.media--left {margin-right: 15px;}

.media__container.centered {align-items: center;}




#XenForo a.twitterLogin, #XenForo a.fbLogin, #XenForo .googleLogin {-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;}






.persistentFooterButton__bar--spaceHolder {
	height: 90px;
	background-color: #FFFFFF;
}

.callToAction.floatingAction span,
 {-webkit-box-shadow: 0 6px 10px 0 rgba(0,0,0,0.3); -moz-box-shadow: 0 6px 10px 0 rgba(0,0,0,0.3); -khtml-box-shadow: 0 6px 10px 0 rgba(0,0,0,0.3); box-shadow: 0 6px 10px 0 rgba(0,0,0,0.3);} 

.persistentFooterButton__bar .callToAction {
	float: right;
    	margin: 15px;
    	margin-top: -75px;
}

@media (min-width: 610px) {
	.persistentFooterButton__bar .callToAction {
	    	margin: 20px;
	    	margin-top: -80px;
	}
	.persistentFooterButton__bar--spaceHolder {
		height: 100px;

	}
}

.persistentFooterButton__bar {
	position: fixed;
	bottom: 0;
	left: 0;
	right: 0;
	z-index: 99999;
	height: 0;
}

.persistentFooterButton__bar .pageWidth {padding: 0;}

.breadBoxTop .topCtrl {display: none !important;}



/* --- canadavisa.css --- */

.row {margin-left: -10px; margin-right: -10px;}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12,
.col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
	position: relative;
	min-height: 1px;
	padding-left: 10px;
	padding-right: 10px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
	float: left;
}
.col-xs-12 {
	width: 100%;
}
.col-xs-11 {
	width: 91.66666667%;
}
.col-xs-10 {
	width: 83.33333333%;
}
.col-xs-9 {
	width: 75%;
}
.col-xs-8 {
	width: 66.66666667%;
}
.col-xs-7 {
	width: 58.33333333%;
}
.col-xs-6 {
	width: 50%;
}
.col-xs-5 {
	width: 41.66666667%;
}
.col-xs-4 {
	width: 33.33333333%;
}
.col-xs-3 {
	width: 25%;
}
.col-xs-2 {
	width: 16.66666667%;
}
.col-xs-1 {
	width: 8.33333333%;
}
.col-xs-pull-12 {
	right: 100%;
}
.col-xs-pull-11 {
	right: 91.66666667%;
}
.col-xs-pull-10 {
	right: 83.33333333%;
}
.col-xs-pull-9 {
	right: 75%;
}
.col-xs-pull-8 {
	right: 66.66666667%;
}
.col-xs-pull-7 {
	right: 58.33333333%;
}
.col-xs-pull-6 {
	right: 50%;
}
.col-xs-pull-5 {
	right: 41.66666667%;
}
.col-xs-pull-4 {
	right: 33.33333333%;
}
.col-xs-pull-3 {
	right: 25%;
}
.col-xs-pull-2 {
	right: 16.66666667%;
}
.col-xs-pull-1 {
	right: 8.33333333%;
}
.col-xs-pull-0 {
	right: auto;
}
.col-xs-push-12 {
	left: 100%;
}
.col-xs-push-11 {
	left: 91.66666667%;
}
.col-xs-push-10 {
	left: 83.33333333%;
}
.col-xs-push-9 {
	left: 75%;
}
.col-xs-push-8 {
	left: 66.66666667%;
}
.col-xs-push-7 {
	left: 58.33333333%;
}
.col-xs-push-6 {
	left: 50%;
}
.col-xs-push-5 {
	left: 41.66666667%;
}
.col-xs-push-4 {
	left: 33.33333333%;
}
.col-xs-push-3 {
	left: 25%;
}
.col-xs-push-2 {
	left: 16.66666667%;
}
.col-xs-push-1 {
	left: 8.33333333%;
}
.col-xs-push-0 {
	left: auto;
}
.col-xs-offset-12 {
	margin-left: 100%;
}
.col-xs-offset-11 {
	margin-left: 91.66666667%;
}
.col-xs-offset-10 {
	margin-left: 83.33333333%;
}
.col-xs-offset-9 {
	margin-left: 75%;
}
.col-xs-offset-8 {
	margin-left: 66.66666667%;
}
.col-xs-offset-7 {
	margin-left: 58.33333333%;
}
.col-xs-offset-6 {
	margin-left: 50%;
}
.col-xs-offset-5 {
	margin-left: 41.66666667%;
}
.col-xs-offset-4 {
	margin-left: 33.33333333%;
}
.col-xs-offset-3 {
	margin-left: 25%;
}
.col-xs-offset-2 {
	margin-left: 16.66666667%;
}
.col-xs-offset-1 {
	margin-left: 8.33333333%;
}
.col-xs-offset-0 {
	margin-left: 0%;
}
@media (min-width: 481px) {
	.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
	float: left;
	}
	.col-sm-12 {
	width: 100%;
	}
	.col-sm-11 {
	width: 91.66666667%;
	}
	.col-sm-10 {
	width: 83.33333333%;
	}
	.col-sm-9 {
	width: 75%;
	}
	.col-sm-8 {
	width: 66.66666667%;
	}
	.col-sm-7 {
	width: 58.33333333%;
	}
	.col-sm-6 {
	width: 50%;
	}
	.col-sm-5 {
	width: 41.66666667%;
	}
	.col-sm-4 {
	width: 33.33333333%;
	}
	.col-sm-3 {
	width: 25%;
	}
	.col-sm-2 {
	width: 16.66666667%;
	}
	.col-sm-1 {
	width: 8.33333333%;
	}
	.col-sm-pull-12 {
	right: 100%;
	}
	.col-sm-pull-11 {
	right: 91.66666667%;
	}
	.col-sm-pull-10 {
	right: 83.33333333%;
	}
	.col-sm-pull-9 {
	right: 75%;
	}
	.col-sm-pull-8 {
	right: 66.66666667%;
	}
	.col-sm-pull-7 {
	right: 58.33333333%;
	}
	.col-sm-pull-6 {
	right: 50%;
	}
	.col-sm-pull-5 {
	right: 41.66666667%;
	}
	.col-sm-pull-4 {
	right: 33.33333333%;
	}
	.col-sm-pull-3 {
	right: 25%;
	}
	.col-sm-pull-2 {
	right: 16.66666667%;
	}
	.col-sm-pull-1 {
	right: 8.33333333%;
	}
	.col-sm-pull-0 {
	right: auto;
	}
	.col-sm-push-12 {
	left: 100%;
	}
	.col-sm-push-11 {
	left: 91.66666667%;
	}
	.col-sm-push-10 {
	left: 83.33333333%;
	}
	.col-sm-push-9 {
	left: 75%;
	}
	.col-sm-push-8 {
	left: 66.66666667%;
	}
	.col-sm-push-7 {
	left: 58.33333333%;
	}
	.col-sm-push-6 {
	left: 50%;
	}
	.col-sm-push-5 {
	left: 41.66666667%;
	}
	.col-sm-push-4 {
	left: 33.33333333%;
	}
	.col-sm-push-3 {
	left: 25%;
	}
	.col-sm-push-2 {
	left: 16.66666667%;
	}
	.col-sm-push-1 {
	left: 8.33333333%;
	}
	.col-sm-push-0 {
	left: auto;
	}
	.col-sm-offset-12 {
	margin-left: 100%;
	}
	.col-sm-offset-11 {
	margin-left: 91.66666667%;
	}
	.col-sm-offset-10 {
	margin-left: 83.33333333%;
	}
	.col-sm-offset-9 {
	margin-left: 75%;
	}
	.col-sm-offset-8 {
	margin-left: 66.66666667%;
	}
	.col-sm-offset-7 {
	margin-left: 58.33333333%;
	}
	.col-sm-offset-6 {
	margin-left: 50%;
	}
	.col-sm-offset-5 {
	margin-left: 41.66666667%;
	}
	.col-sm-offset-4 {
	margin-left: 33.33333333%;
	}
	.col-sm-offset-3 {
	margin-left: 25%;
	}
	.col-sm-offset-2 {
	margin-left: 16.66666667%;
	}
	.col-sm-offset-1 {
	margin-left: 8.33333333%;
	}
	.col-sm-offset-0 {
	margin-left: 0%;
	}
}
@media (min-width: 611px) {
	.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
	float: left;
	}
	.col-md-12 {
	width: 100%;
	}
	.col-md-11 {
	width: 91.66666667%;
	}
	.col-md-10 {
	width: 83.33333333%;
	}
	.col-md-9 {
	width: 75%;
	}
	.col-md-8 {
	width: 66.66666667%;
	}
	.col-md-7 {
	width: 58.33333333%;
	}
	.col-md-6 {
	width: 50%;
	}
	.col-md-5 {
	width: 41.66666667%;
	}
	.col-md-4 {
	width: 33.33333333%;
	}
	.col-md-3 {
	width: 25%;
	}
	.col-md-2 {
	width: 16.66666667%;
	}
	.col-md-1 {
	width: 8.33333333%;
	}
	.col-md-pull-12 {
	right: 100%;
	}
	.col-md-pull-11 {
	right: 91.66666667%;
	}
	.col-md-pull-10 {
	right: 83.33333333%;
	}
	.col-md-pull-9 {
	right: 75%;
	}
	.col-md-pull-8 {
	right: 66.66666667%;
	}
	.col-md-pull-7 {
	right: 58.33333333%;
	}
	.col-md-pull-6 {
	right: 50%;
	}
	.col-md-pull-5 {
	right: 41.66666667%;
	}
	.col-md-pull-4 {
	right: 33.33333333%;
	}
	.col-md-pull-3 {
	right: 25%;
	}
	.col-md-pull-2 {
	right: 16.66666667%;
	}
	.col-md-pull-1 {
	right: 8.33333333%;
	}
	.col-md-pull-0 {
	right: auto;
	}
	.col-md-push-12 {
	left: 100%;
	}
	.col-md-push-11 {
	left: 91.66666667%;
	}
	.col-md-push-10 {
	left: 83.33333333%;
	}
	.col-md-push-9 {
	left: 75%;
	}
	.col-md-push-8 {
	left: 66.66666667%;
	}
	.col-md-push-7 {
	left: 58.33333333%;
	}
	.col-md-push-6 {
	left: 50%;
	}
	.col-md-push-5 {
	left: 41.66666667%;
	}
	.col-md-push-4 {
	left: 33.33333333%;
	}
	.col-md-push-3 {
	left: 25%;
	}
	.col-md-push-2 {
	left: 16.66666667%;
	}
	.col-md-push-1 {
	left: 8.33333333%;
	}
	.col-md-push-0 {
	left: auto;
	}
	.col-md-offset-12 {
	margin-left: 100%;
	}
	.col-md-offset-11 {
	margin-left: 91.66666667%;
	}
	.col-md-offset-10 {
	margin-left: 83.33333333%;
	}
	.col-md-offset-9 {
	margin-left: 75%;
	}
	.col-md-offset-8 {
	margin-left: 66.66666667%;
	}
	.col-md-offset-7 {
	margin-left: 58.33333333%;
	}
	.col-md-offset-6 {
	margin-left: 50%;
	}
	.col-md-offset-5 {
	margin-left: 41.66666667%;
	}
	.col-md-offset-4 {
	margin-left: 33.33333333%;
	}
	.col-md-offset-3 {
	margin-left: 25%;
	}
	.col-md-offset-2 {
	margin-left: 16.66666667%;
	}
	.col-md-offset-1 {
	margin-left: 8.33333333%;
	}
	.col-md-offset-0 {
	margin-left: 0%;
	}
}
@media (min-width: 801px) {
	.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
	float: left;
	}
	.col-lg-12 {
	width: 100%;
	}
	.col-lg-11 {
	width: 91.66666667%;
	}
	.col-lg-10 {
	width: 83.33333333%;
	}
	.col-lg-9 {
	width: 75%;
	}
	.col-lg-8 {
	width: 66.66666667%;
	}
	.col-lg-7 {
	width: 58.33333333%;
	}
	.col-lg-6 {
	width: 50%;
	}
	.col-lg-5 {
	width: 41.66666667%;
	}
	.col-lg-4 {
	width: 33.33333333%;
	}
	.col-lg-3 {
	width: 25%;
	}
	.col-lg-2 {
	width: 16.66666667%;
	}
	.col-lg-1 {
	width: 8.33333333%;
	}
	.col-lg-pull-12 {
	right: 100%;
	}
	.col-lg-pull-11 {
	right: 91.66666667%;
	}
	.col-lg-pull-10 {
	right: 83.33333333%;
	}
	.col-lg-pull-9 {
	right: 75%;
	}
	.col-lg-pull-8 {
	right: 66.66666667%;
	}
	.col-lg-pull-7 {
	right: 58.33333333%;
	}
	.col-lg-pull-6 {
	right: 50%;
	}
	.col-lg-pull-5 {
	right: 41.66666667%;
	}
	.col-lg-pull-4 {
	right: 33.33333333%;
	}
	.col-lg-pull-3 {
	right: 25%;
	}
	.col-lg-pull-2 {
	right: 16.66666667%;
	}
	.col-lg-pull-1 {
	right: 8.33333333%;
	}
	.col-lg-pull-0 {
	right: auto;
	}
	.col-lg-push-12 {
	left: 100%;
	}
	.col-lg-push-11 {
	left: 91.66666667%;
	}
	.col-lg-push-10 {
	left: 83.33333333%;
	}
	.col-lg-push-9 {
	left: 75%;
	}
	.col-lg-push-8 {
	left: 66.66666667%;
	}
	.col-lg-push-7 {
	left: 58.33333333%;
	}
	.col-lg-push-6 {
	left: 50%;
	}
	.col-lg-push-5 {
	left: 41.66666667%;
	}
	.col-lg-push-4 {
	left: 33.33333333%;
	}
	.col-lg-push-3 {
	left: 25%;
	}
	.col-lg-push-2 {
	left: 16.66666667%;
	}
	.col-lg-push-1 {
	left: 8.33333333%;
	}
	.col-lg-push-0 {
	left: auto;
	}
	.col-lg-offset-12 {
	margin-left: 100%;
	}
	.col-lg-offset-11 {
	margin-left: 91.66666667%;
	}
	.col-lg-offset-10 {
	margin-left: 83.33333333%;
	}
	.col-lg-offset-9 {
	margin-left: 75%;
	}
	.col-lg-offset-8 {
	margin-left: 66.66666667%;
	}
	.col-lg-offset-7 {
	margin-left: 58.33333333%;
	}
	.col-lg-offset-6 {
	margin-left: 50%;
	}
	.col-lg-offset-5 {
	margin-left: 41.66666667%;
	}
	.col-lg-offset-4 {
	margin-left: 33.33333333%;
	}
	.col-lg-offset-3 {
	margin-left: 25%;
	}
	.col-lg-offset-2 {
	margin-left: 16.66666667%;
	}
	.col-lg-offset-1 {
	margin-left: 8.33333333%;
	}
	.col-lg-offset-0 {
	margin-left: 0%;
	}
}
@media (min-width: 1101px) {
	.col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12 {
	float: left;
	}
	.col-xl-12 {
	width: 100%;
	}
	.col-xl-11 {
	width: 91.66666667%;
	}
	.col-xl-10 {
	width: 83.33333333%;
	}
	.col-xl-9 {
	width: 75%;
	}
	.col-xl-8 {
	width: 66.66666667%;
	}
	.col-xl-7 {
	width: 58.33333333%;
	}
	.col-xl-6 {
	width: 50%;
	}
	.col-xl-5 {
	width: 41.66666667%;
	}
	.col-xl-4 {
	width: 33.33333333%;
	}
	.col-xl-3 {
	width: 25%;
	}
	.col-xl-2 {
	width: 16.66666667%;
	}
	.col-xl-1 {
	width: 8.33333333%;
	}
	.col-xl-pull-12 {
	right: 100%;
	}
	.col-xl-pull-11 {
	right: 91.66666667%;
	}
	.col-xl-pull-10 {
	right: 83.33333333%;
	}
	.col-xl-pull-9 {
	right: 75%;
	}
	.col-xl-pull-8 {
	right: 66.66666667%;
	}
	.col-xl-pull-7 {
	right: 58.33333333%;
	}
	.col-xl-pull-6 {
	right: 50%;
	}
	.col-xl-pull-5 {
	right: 41.66666667%;
	}
	.col-xl-pull-4 {
	right: 33.33333333%;
	}
	.col-xl-pull-3 {
	right: 25%;
	}
	.col-xl-pull-2 {
	right: 16.66666667%;
	}
	.col-xl-pull-1 {
	right: 8.33333333%;
	}
	.col-xl-pull-0 {
	right: auto;
	}
	.col-xl-push-12 {
	left: 100%;
	}
	.col-xl-push-11 {
	left: 91.66666667%;
	}
	.col-xl-push-10 {
	left: 83.33333333%;
	}
	.col-xl-push-9 {
	left: 75%;
	}
	.col-xl-push-8 {
	left: 66.66666667%;
	}
	.col-xl-push-7 {
	left: 58.33333333%;
	}
	.col-xl-push-6 {
	left: 50%;
	}
	.col-xl-push-5 {
	left: 41.66666667%;
	}
	.col-xl-push-4 {
	left: 33.33333333%;
	}
	.col-xl-push-3 {
	left: 25%;
	}
	.col-xl-push-2 {
	left: 16.66666667%;
	}
	.col-xl-push-1 {
	left: 8.33333333%;
	}
	.col-xl-push-0 {
	left: auto;
	}
	.col-xl-offset-12 {
	margin-left: 100%;
	}
	.col-xl-offset-11 {
	margin-left: 91.66666667%;
	}
	.col-xl-offset-10 {
	margin-left: 83.33333333%;
	}
	.col-xl-offset-9 {
	margin-left: 75%;
	}
	.col-xl-offset-8 {
	margin-left: 66.66666667%;
	}
	.col-xl-offset-7 {
	margin-left: 58.33333333%;
	}
	.col-xl-offset-6 {
	margin-left: 50%;
	}
	.col-xl-offset-5 {
	margin-left: 41.66666667%;
	}
	.col-xl-offset-4 {
	margin-left: 33.33333333%;
	}
	.col-xl-offset-3 {
	margin-left: 25%;
	}
	.col-xl-offset-2 {
	margin-left: 16.66666667%;
	}
	.col-xl-offset-1 {
	margin-left: 8.33333333%;
	}
	.col-xl-offset-0 {
	margin-left: 0%;
	}
}
.row:before,
.row:after {
	content: " ";
	display: table;
}
.row:after {
	clear: both;
}
.row {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}
*[class*="col-"] {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.row.no-gutters {
  margin-right: 0;
  margin-left: 0;
}
.row.no-gutters > [class^="col-"],
.row.no-gutters > [class*=" col-"] {
  padding-right: 0;
  padding-left: 0;
}

img {max-width: 100%;}

.cv-topbar {
	padding: 16px 0;
	background: #F8F8F8;
	color: rgb(55, 55, 55);
	line-height: 1.5;
	display: none;
}

.cv-topbar__main {
	overflow: hidden;
}

.cv-topbar__actions {
	float: right;
}

.cv-topbar__main a {text-decoration: underline;}

.cv-topbar__chooser a {color: inherit; font-weight: bold;}


.cv-topbar__chooser {
	display: inline-block;
}

.cv-topbar__chooser.cv-topbar__chooser--dropdown a:before {
	font-family: "Material Design Icons";
	content: "\f35d";
}

@media (min-width: 801px) {
	.cv-topbar {display: block;}
}


#logoBlock {display: none;}
@media (min-width: 801px) {
	#logoBlock {display: block;}
}

@media (max-width: 800px) {
	#logo_small {display: inline-block !important;}
	#logo_small a {padding-left: 20px; padding-right: 20px;}
}

.logo__campbell {
	vertical-align: middle;
	position: relative;
	display: inline-block;
	line-height: 1;
	margin-left: 15px;
}

.logo__campbell a {display: block;}

.logo__campbell img {width: 80px !important;}

.logo__campbell:before {
	content: '';
	position: absolute;
	width: 2px;
	background: #F0F0F0;
	height: 100%;
	left: 0;
	margin-left: -10px;
	-webkit-transform:  skew(18deg); -moz-transform:  skew(18deg); -o-transform:  skew(18deg); -ms-transform:  skew(18deg);transform: skew(18deg);
}





#SignupButton .inner i {
	opacity: .5;
}


#navigation .pageWidth {
	padding-left: 0;
	padding-right: 0;
	border-top: 1px solid #F0F0F0;
	overflow: hidden;
}

.navTabs .visitorTabs .navLink {
	padding-left: 4px;
	padding-right: 4px;
}

.navTabs .navTab.account .avatar img {width: 24px; height: 24px;}



#QuickSearchPlaceholder {
	background: #337AB7;
	color: #FFF;
	text-align: center;
	padding-left: 6px;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}
#QuickSearchPlaceholder:hover {color: #FFF; opacity: 0.85;}
#QuickSearchPlaceholder:before {color: #FFF;}


.navTab--navPanelTrigger .navLink {
	background: #337AB7;
	color: #FFF !important;
	width: 50px;
	text-align: center;
}

.navTab--navPanelTrigger .navLink > .uix_icon {
	font-size: 16px !important;
	float: none !important;
}






.nodeList .node.level_1 {
	margin-bottom: 20px;
	border-bottom: 1px solid rgb(187, 187, 187);
}

.node .nodeLastPost .lastThreadTitle a {color: #337AB7;}


.sidebar .section > .secondaryContent,
.sidebar .section > .primaryContent {
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	border-bottom: 1px solid rgb(187, 187, 187);
}
.sidebar .section.widget-tabs > *:first-child {border-bottom: 0;}

.sidebar .section .title a {color: #151515; font-weight: bold;}

.visitorPanel .avatar__headingBlock {
	background-color: #337AB7;
}

.sidebar .visitorPanel .avatar img {
	width: 64px;
	height: 64px;
}

.widget-tabs .tabs li a {font-weight: 700;}

.messageSimpleList {
	padding: 10px 0 20px;
}

#copyright, .debugInfo {float: none; text-align: center;}

#uix_jumpToFixed a {padding: 12px !important;}




.discussionList .posterAvatar {
	width: 52px;
}

.persistentFooterButton__bar--spaceHolder {height: auto;}

.hasWelcomeBlock #content {margin-top: 20px;}

#uix_welcomeBlock .backgroundImage--overlay {
	margin-bottom: -10px;

	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0c76ad+0,7db9e8+100&0.6+0,0.2+100 */
	background: -moz-linear-gradient(left,  rgba(12,118,173,0.7) 0%, rgba(125,185,232,0.2) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(left,  rgba(12,118,173,0.7) 0%,rgba(125,185,232,0.2) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to right,  rgba(12,118,173,0.7) 0%,rgba(125,185,232,0.2) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#990c76ad', endColorstr='#337db9e8',GradientType=1 ); /* IE6-9 */
}

.hasWelcomeBlock .material__titleWrapper,
.hasWelcomeBlock .materialBanner--overlay {background: none;}

.uix_welcomeBlock__content {padding: 40px;}

.uix_welcomeBlock__button {display: none; margin: 0; padding: 0;}

#uix_welcomeBlock .uix_welcomeBlock__message {
	margin-bottom: 0;
}

#uix_welcomeBlock .media__container {
	-webkit-flex-wrap: wrap;
	    -ms-flex-wrap: wrap;
	        flex-wrap: wrap;
}

@media (min-width: 611px) {
	#uix_welcomeBlock .media__object {margin-right: 20px;}
}

#uix_welcomeBlock .media__object img {max-width: 60px;}

@media (max-width: 800px) {
	#uix_welcomeBlock {font-size: 16px;}
}

@media (max-width: 610px) {
	#uix_welcomeBlock .media__object {
		width: 100%;
		text-align: center;
	}
	#uix_welcomeBlock .media__body {text-align: center;}
	#uix_welcomeBlock .uix_welcomeBlock__message {margin: 10px 0;}
} 

@media (max-width: 480px) {
	#uix_welcomeBlock {
		margin-left: -10px;
		margin-right: -10px;
	}
	.uix_welcomeBlock__content {padding: 40px 15px;}
	
	.node .nodeText {width:100%;}
}



.messageUserBlock .messageUserBlockToggle {
    float: none;
    margin-top: 20px;
}

.messageUserBlock .messageUserBlockToggle .uix_icon-expand:before,
.messageUserBlock .messageUserBlockToggle .uix_icon-collapse:before {display: none;}

.uix_signatureCover {background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #F0F0F0 100%);}

.userTitle__stars { color: #ffc300; }

.uix_icon-expand {
	-webkit-transform:  none; -moz-transform:  none; -o-transform:  none; -ms-transform:  none;transform: none;
}

.menuColumns .show-mobile {display: none;}
.sidePanelWrapper .sidePanel__blockLinksList .show-mobile {display: block;}

.sidePanel__blockLinksList .col1, .sidePanel__blockLinksList .col2 {display: none;}

.ctaBbcodeTableWrapper {
	max-width: 100%;
	overflow-x: scroll;
}

/****
 * Category Strips
 ***/
.nodeList .categoryStrip {
	background: #337AB7;
	
	border-bottom-color: #2b6597;
}
.nodeList .categoryStrip .nodeTitle a {
	color: #FFF;
}
.categoryStrip__collapseToggle {
	color: #FFF;
}
.node .unread .nodeIcon.hasGlyph {
	background: #337AB7;
}


.nodeList .node_9 .categoryStrip {
	background: #ec6b6b;
	
	border-bottom-color: #b4395c;
}
.nodeList .node_9 .node .unread .nodeIcon.hasGlyph {
	background: #ec6b6b;
}
.node9 .material__titleWrapper {
	background-color: #b4395c;
}
.node9 .materialBanner--overlay {
	background-color: rgba(236, 107, 107, 0.25);
}


.nodeList .node_57 .categoryStrip {
	background: #1ea1a5;
	
	border-bottom-color: #197376;
}
.nodeList .node_57 .node .unread .nodeIcon.hasGlyph {
	background: #1ea1a5;
}
.node57 .material__titleWrapper {
	background-color: #197376;
}
.node57 .materialBanner--overlay {
	background-color: rgba(30, 161, 165, 0.25);
}


.nodeList .node_26 .categoryStrip {
	background: #40afda;
	
	border-bottom-color: #22759a;
}
.nodeList .node_26 .node .unread .nodeIcon.hasGlyph {
	background: #40afda;
}
.node26 .material__titleWrapper {
	background-color: #22759a;
}
.node26 .materialBanner--overlay {
	background-color: rgba(64, 175, 218, 0.25);
}


.nodeList .node_30 .categoryStrip {
	background: #fab533;
	
	border-bottom-color: #f59f18;
}
.nodeList .node_30 .node .unread .nodeIcon.hasGlyph {
	background: #fab533;
}
.node30 .material__titleWrapper {
	background-color: #f59f18;
}
.node30 .materialBanner--overlay {
	background-color: rgba(250, 181, 51, 0.25);
}


.nodeList .node_29 .categoryStrip {
	background: #6c66ab;
	
	border-bottom-color: #3a4489;
}
.nodeList .node_29 .node .unread .nodeIcon.hasGlyph {
	background: #6c66ab;
}
.node29 .material__titleWrapper {
	background-color: #3a4489;
}
.node29 .materialBanner--overlay {
	background-color: rgba(108, 102, 171, 0.25) !important;
}


.nodeList .node_28 .categoryStrip {
	background: #ee8832;
	
	border-bottom-color: #dc7123;
}
.nodeList .node_28 .node .unread .nodeIcon.hasGlyph {
	background: #ee8832;
}
.node28 .material__titleWrapper {
	background-color: #dc7123;
}
.node28 .materialBanner--overlay {
	background-color: rgba(238, 136, 50, 0.25);
}


/* CSS returned from cache. */