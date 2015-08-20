<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Get Password - www.buznik.net</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Description" content="Password generator in JavaScript." />
<meta name="verify-reformal" content="04aaf6bb57192f12fc4b7f21" />
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
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

&nbsp;&nbsp;<a href="http://www.buznik.com/" title="Author">Buznik.com</a>
</div>

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

</body>
</html>