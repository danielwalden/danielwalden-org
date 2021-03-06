<?php header( 'Content-Type: text/css' );

$textcolor = '#36c';

?>

body {
	margin:0;
	background:blue;
	color: #111;
	font-family: "Helvetica Neue", Helvetica, Arial;
	font-size:4vw
}
h1 {margin:1vw 2vw; font-size:10vw;}
h2 {font-size:6vw; text-align: right; margin:0 2vw 3vw 0;}
p {font-family: "Georgia"; font-size: 4vw; line-height:1.25; margin: 2vw 2vw;}
a img {border:0;}

.collection {width:98vw; margin:0 1vw;}
.collection .collection_item {float:left; width:25%; margin:1vw 0; text-align: right;}
.collection .collection_item img {width:92%; margin:0 4%; box-shadow: 0 1vw 1.5vw rgba(0, 0, 0, 0.6);}
.collection .collection_item p {font-family: "Helvetica Neue", Helvetica, Arial; font-size:2.5vw; font-weight: bold; text-transform: uppercase; letter-spacing: 0.2em; margin:0.5vw 1vw;}
.collection::after {content:''; display:block; clear:both;}

.tools {margin:2vw 0 0 2vw;}
.tools p {float:left; margin:0 2vw 0 0; width:47vw;}
.tools p img {float:left; width:8vw; box-shadow: none;}
.tools p span {float:left; font-family: "Helvetica Neue", Helvetica, Arial; font-size:2.5vw; font-weight: bold; text-transform: uppercase; letter-spacing: 0.2em; margin:2.5vw 0 0 1vw;}
.tools::after {content:''; display:block; clear:both;}

/* ---Section Specific--- */
header {
	text-align:right;
	background:linear-gradient(#cceddf 0%, #cce2ff 100%);
	color:#009c73;
	position: relative;
}
header p {font-family: "Helvetica Neue", Helvetica, Arial; font-weight: bold; text-transform: uppercase; letter-spacing: 0.2em; font-size: 3vw; margin:6vw 2vw 2vw 0;}
header a {color:#0085b6;}

header, #LE_newsletters, #APG_business_card, #BR_advertising, #SS_websites {
	padding:6vw 0;
}

#LE_newsletters {
	color: <?php echo $textcolor; ?>/*#ffe8b8*/;
	background:brown;
	position:relative;
	z-index: 1;
}

#APG_business_card {
	color: #3c5e2c;
	background:tan;
	z-index:1;
	position:relative;
}
#APG_business_card .collection_item {width:50%;}
#APG_business_card .collection_item p {text-decoration: none; color:#3c5e2c;}

#BR_advertising {
	background: #537ce5;
	color: rgb(140,25,30);
	z-index: 1;
	position: relative;
}
#BR_advertising .collection_item p { color:rgb(140,25,30); }
#BR_advertising .collection_item a {text-decoration: none;}

#SS_websites {
	background: #005872;
	color: #d1f1fb;
	z-index: 1;
	position: relative;
}
#SS_websites .collection_item {
	width:50%;
}
#SS_websites .collection_item img {box-shadow: none;}
#SS_websites .middle {
	width:100%;
	margin:0;
}
#SS_websites .middle .description {
	font-family: "Georgia"; font-size: 4vw; line-height:1.25; margin: 2vw 1vw; font-weight: normal; text-transform: none; letter-spacing: normal; text-align: left;
}
#SS_websites .tools {margin:0 0 0 1vw;}
#SS_websites .tools p {margin:1vw 0;}
#SS_websites .tools p img {width:8vw; box-shadow: none; margin:0;}