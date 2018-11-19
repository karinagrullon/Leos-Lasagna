<?php
/**
* @developer-Lead: David Hernandez
* @senior-developer: J. Sanchez @mozpit
* @team: Software Engineering Team 4 @ Lehman
* @members: Eddy Vittini, Jhon Sanchez, Vanessa Ortiz, Melida Grullon, Madelin Arias Bueno, Rafael Velazquez, Moumouni Sawadogo, Jordan Falcon, David Hernandez
* @description: Leo's Lasagna Project by Team 4 Fall 2018
* @software-license: MIT
*/

class validateInput{
    //PRIVATE VARIABLES
	public $string;
	public $integer;
	public $float;
	public $length;

	//CHECK FOR ILLEGAL CHARACTERS
	public function checkStringParams( $string ){
		if(  ( $length = @strlen( $string ) ) < 256  ){
				for($i=0; $i < $length; ){
					if ( @ord( $string[$i] ) >= 0x41 && @ord( $string[$i] ) <= 0x5a ||
					     @ord( $string[$i] ) >= 0x21 && @ord( $string[$i] ) <= 0x3a ||
				             @ord( $string[$i] ) >= 0x10 && @ord( $string[$i] ) <= 0x19 ) {
						 $i++;
					}else{
							return FALSE;
							break;
					}
				}
				return TRUE;
				break;
		}else{
				return FALSE;
				break;
		}
	}

    public function checkString( $string ){
			$NewString = trim(mysql_real_escape_string( $string ));
			$meta =   array ( '$' ,'{'  ,'}'  ,'^'    ,'['    ,']'    ,'`'    ,'#'    ,'&'    ,'!'    ,'@'    ,'%'    ,'-'    ,'?'    ,'"'    ,'*'    ,'.'     ,'('    ,')'    );
			$escaped = array ( '&#36','&#123','&#125','&#91','&#93','&#96','&#35','&#38','&#33','&#64','&#37','&#45','&#63','&#34','&#42','&#46','&#40','&#41');
			$escaped = array (' ');
			$NewString = @addslashes($string);
			$NewString = str_replace($meta, $escaped, $string);
			$NewString = mysql_real_escape_string(trim($string));
			$NewString = trim($NewString, "'`!@#$%^&*()_-+=[]{}\|;:/?.>,<");

			$newstr = str_replace($meta, $escaped, $string);

			return $NewString;
    }

		public function checkAlphaString( $string ){

	    $meta =   array ( '$'    ,'{'     ,'}'      ,'['    ,']'    ,'`'    ,'#'    ,'&'    ,'!'    ,'@'    ,'%'    ,'-'    ,'?'    ,'"'    ,'*'    ,'.'     ,'('    ,')'    );
			$escaped = array (" ");
	    $escaped = array ( '&#36','&#123','&#125','&#91','&#93','&#96','&#35','&#38','&#33','&#64','&#37','&#45','&#63','&#34','&#42','&#46','&#40','&#41');
	    $NewString = @addslashes($string);
	    $NewString = @str_replace( $meta, $escaped, $NewString);

			return $NewString;

    }

  //CHECK FOR VALID NUMERIC VALUES
	function goodInteger($integer){
		if(@is_int($integer)){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
?>
