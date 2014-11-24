<?php
/*
// Polybios-Chiffre
// Polybius square

X	1	2	3	4	5
1	A	B	C	D	E
2	F	G	H	I	J
3	K	L	M	N	O
4	P	Q	R	S	T
5	U	V	W	Y	Z
6 Ä Ü Ö ß
*/

function polybios($string) {
	
	$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','ä','ö','ü','ß');
	$polybios  = array('11','12','13','14','15','21','22','23','24','25','31','32','33','34','35','41','42','43','44','45','51','52','53','00','54','55','61','63','62','64');
	$output  = str_ireplace($alphabet, $polybios, $string);
	
	return($output);
}
?>
