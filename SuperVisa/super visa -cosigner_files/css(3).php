@charset "UTF-8";

/* --- EXTRA.css --- */

@media(max-width: 420px) {
	#uix_welcomeBlock { display: none; }
	.titleBar #pageDescription { display: none; }
	.PageNav a.text { padding: 0 5px; }
	#logo_small a { padding: 0 10px; }
}

.bbCodeQuote .quoteContainer .quoteExpand.quoteCut {
	top: auto;
	bottom: 0;
	background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 93%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 93%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 93%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}

.bbCodeQuote {
	background: rgb(226, 236, 241);
	position: relative;
}

.bbCodeQuote .attribution,
.bbCodeQuote .type {
	background-color: transparent;
}

.bbCodeQuote .quoteContainer {
	position: static;
}
.funzone .funzone_above_content {
	height: 65px;
}

.xenForm .ctrlUnit > dd .textCtrl.number {width: 100px;}

@media (max-width: 610px) {
	.Responsive .pageNavLinkGroup .PageNav, .Responsive .pageNavLinkGroup .linkGroup {margin-top: 0;}
	
	.pageNavLinkGroup {padding: 0; line-height: 20px;}
}

.button.button--register {
	display: block;
	background-color: #337AB7;
}

#content.login .button--register {display: none;}

/* CSS returned from cache. */