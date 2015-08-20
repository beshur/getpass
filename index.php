<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Get Password - www.buznik.net</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Description" content="Password generator in JavaScript." />
<meta name="verify-reformal" content="04aaf6bb57192f12fc4b7f21" />
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<style type="text/css">
body {
	font-family: Trebuchet MS;
	background: #999 url("images/bg_crypt.gif") top left repeat;

}
#container {
	padding: 5px;
}

#pass {
/*	font-family: Courier;
*/	border: 3px dashed #000;
    background: #FFF;
	margin: 25px;
	padding: 5px;
}
#indent {
	text-indent: -5000;
	color: white;
}
.float {
	float:right;
	margin: 0px;
	padding: 0px;
}
.tbl_pass {
	padding: 0px;
	border: 1px solid #ccc;
}
.tbl_pass td {
	padding: 6px;
	border: 0px solid #ccc;
}

h1 {
	background: #FFF;
	padding: 5px;
	border-bottom: 3px dashed #333;
}
a, a:visited, a:active {
	color: #666;
	padding: 3px;
	background: white;
}
a:hover {
	color: #CC6633;
	background: white;
	text-decoration: none;
	padding: 3px;
}
h1 blink {
	font-weight:normal;
	
}
#pass_block input {
	border: 0;
	height: 36px;
	font-size: 24px;
	padding: 0 0 0 30px;
}
#pass input.button {
	border: 0;
	height: 36px;
	font-size: 30px;
	background: #fcdd76;
}
#show {display:none;}

</style>
<script type="text/javascript">
var symbols = new Array ("a","b","c","d","e","f","g","h","i","u","q","j","k","l","m","n","o","p","r","s","t","w","v","x","y","z","A","B","C","D","E","F","G","H","I","U","J","K","L","M","N","O","P","R","S","T","Q","W","V","X","Y","Z",1,2,3,4,5,6,7,8,9,0,"-","_","!","%");

// Additional Functions
function array_rand ( input, num_req ) {    // Pick one or more random entries out of an array   source: http://javascript.ru/php/array_rand
    // 
    // +   original by: _argos
 
    var Indexes = [];
    var Ticks = num_req || 1;
    var Check = {
        Duplicate    : function ( input, value ) {
            var Exist = false, Index = 0;
            while ( Index < input.length ) {
                if ( input [ Index ] === value ) {
                    Exist = true;
                    break;
                }
                Index++;
            }
            return Exist;
        }
    };
 
    if ( input instanceof Array && Ticks <= input.length ) {
        while ( true ) {
            var Rand = Math.floor ( ( Math.random ( ) * input.length ) );
            if ( Indexes.length === Ticks ) { break; }
            if ( !Check.Duplicate ( Indexes, Rand ) ) { Indexes.push ( Rand ); }
        }
    } else {
        Indexes = null;
    }
 
    return ( ( Ticks == 1 ) ? Indexes.join ( ) : Indexes );
}


function passGen(symbols_array) {
var pass = '';

for (var i = 0; i < 8; i++) {
	var val = array_rand(symbols,1);
	//alert(pass1);
	pass = pass + symbols[val];
}
return(pass);
}

function genfivepass(symbols_array) {
	var pass_arr = new Array();
	for (i = 0; i < 5; i++) {
		pass_arr[i] = passGen(symbols_array);
	}
	
	return pass_arr;
}

function printpass(symbols_array) {
	var pass_arr = genfivepass(symbols_array);
	//alert(pass_arr[3]);
	for (var i=0; i<5; i++) {
		form_id='pass_place' + i;
		document.getElementById(form_id).value=pass_arr[i];
	}
	
}

function hide() {
	for (var i=0; i<5; i++) {
		form_id='pass_place' + i;
		document.getElementById(form_id).type='password';
	}
}
function show() {
	for (var i=0; i<5; i++) {
		form_id='pass_place' + i;
		document.getElementById(form_id).type='text';
	}
}



function start() {
	printpass(symbols);
}
window.onload=start;

</script>
<script type="text/javascript" language="JavaScript" src="http://reformal.ru/tab.js?title=Feedback&domain=getpass&color=fcdd76&align=right&ltitle=&lfont=&lsize=&waction=1&regime=0"></script>
</head>

<body>
<!-- Alex Buznik design         http://buznik.net   -->
<div id="container">
<h1>GetPass <blink>2</blink></h1>

<div id="pass">
Click to generate your 8-digit password:


<input class="button" type="button" onclick="printpass(symbols)"  value="Refresh" /> <input class="button" type="button" onclick="hide(); getElementById('show').style.display='block'"  value="!" />
<br/>

<div id="pass_block">
<input type="text" id="pass_place0" value="" onclick="this.focus();this.select();" /><br/>
<input type="text" id="pass_place1" value="" onclick="this.focus();this.select();" /><br/>
<input type="text" id="pass_place2" value="" onclick="this.focus();this.select();" /><br/>
<input type="text" id="pass_place3" value="" onclick="this.focus();this.select();" /><br/>
<input type="text" id="pass_place4" value="" onclick="this.focus();this.select();" />
</div>
<div id="show">
<small onclick="show()"><a href="#">&bull; &rarr; a</a></small> <a href="passgen_js.rar" title="Download JS-file">Download JS-file (850 bytes)</a></div>
</div>


<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='http://counter.yadro.ru/hit?t41.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
<!-- Yandex.Metrika -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<script type="text/javascript">
try { var yaCounter465109 = new Ya.Metrika(465109); } catch(e){}
</script>
<noscript><div style="position: absolute;"><img src="//mc.yandex.ru/watch/465109" alt="" /></div></noscript>
<!-- /Yandex.Metrika -->

&nbsp;&nbsp;<a href="http://www.buznik.com/" title="Author">Buznik.com</a>
</div>
</body>
</html>