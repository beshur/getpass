function passGen(symbols_array) {
    var pass = '';
    var symbols = ["a","b","c","d","e","f","g","h","i","u","q","j","k","l","m","n","o","p","r","s","t","w","v","x","y","z","A","B","C","D","E","F","G","H","I","U","J","K","L","M","N","O","P","R","S","T","Q","W","V","X","Y","Z",1,2,3,4,5,6,7,8,9,0,"-","_","!","%"];

    function array_rand ( input, num_req ) {

        var Indexes = [];
        var Ticks = num_req || 1;
        var Check = {
            Duplicate: function ( input, value ) {
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

    for (var i = 0; i < 8; i++) {
        var val = array_rand(symbols,1);
        pass = pass + symbols[val];
    }
    return pass;
}