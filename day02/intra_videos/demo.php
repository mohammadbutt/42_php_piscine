#!/usr/bin/php
<?php

/*
    References:
    https://www.php.net/manual/en/function.preg-match.php
*/


// We search the word "toto" in the string.
// We will '/' forward skashes around "toto" '/'. As show in the code.
// If found returns 1, otherwise 0  
$nb_to1 = preg_match("/toto/", "shjfksjhshftotolsdnflsjd"); 
echo("toto1:".$nb_to1)."\n";

// We put '^' before the word we are searching for, what this means is, we are expecting
// this search word to be the first word in the string
// If toto is found at the beginning of the string, we return 1.
// If toto is not found at the beginning, we return 0.
$nb_to2 = preg_match("/^toto/", "totothisisalonglongstring");
echo("toto2:".$nb_to2)."\n";

// We put a '^' around "toto" '$', what this means is that we are looking for toto to be
// at the beginning and end of the string.
// If toto is found at the beginning and end of the string, we return 1.
// If toto is not found at the beginning or end of the string, we return 0.
$nb_to3 = preg_match("/^toto$/", "toto"); 
echo("toto3:".$nb_to3)."\n";


// We put t first and then oi inside brackets []. This mean we are looking for words, "to" and "ti"
// When we do "/t[oi]t[oi]/", we are looking for words that match "toto", "titi", "tito", "toti"
$nb_toto = preg_match("/t[oi]t[oi]/", "asdasdasdtoto");
$nb_titi = preg_match("/t[oi]t[oi]/", "asdasdasdtiti");
$nb_toti = preg_match("/t[oi]t[oi]/", "asdasdasdtoti");
$nb_tito = preg_match("/t[oi]t[oi]/", "asdasdasdtoti"); // First word can be "to" or "ti". Second word can be "to" or "ti"
echo("toto:".$nb_toto)."\n";
echo("titi:".$nb_titi)."\n";
echo("toti:".$nb_toti)."\n";
echo("tito:".$nb_tito)."\n";

// We can also put a range of characters we are searching for, by doing [0-9] or [a-m]
// By doing the above we are searching for numbers between 0 and 9. And a to m.
// In the below exmaple we are searching for t0ta, t0tb, t0tc so on and t1ta, t1tb, and t1tc and so

$nb_num1a = preg_match("/t[0-9]t[a-m]/", "abcdefght1ta");
$nb_num8m = preg_match("/t[0-9]t[a-m]/", "abcdefght8tm");
$nb_num8n = preg_match("/t[0-9]t[a-m]/", "abcdefght8tn");
echo("nb_num1a:".$nb_num1a)."\n";
echo("nb_num8m:".$nb_num8m)."\n";
echo("nb_num8n:".$nb_num8n)." should return 0 because 'n' is not within 'a' and 'm'"."\n";

// + after a character means we can 1 or more of those characters in the string.
// We can have multiple 't'.
// We can have  multiple numbers between '0' and '9'.
// We can have multiple alphabets between 'a' and 'm'
$nb_num1a_plus = preg_match("/t+[0-9]t[a-m]/", "abcdefghttttt1ta");
$nb_num8m_plus = preg_match("/t[0-9]+t[a-m]/", "abcdefght8888888tm");
$nb_num8m_all_plus = preg_match("/t+[0-9]+t+[a-m]+/", "abcdefghtttttt812345tttttttm");
echo("nb_num1a_plus:".$nb_num1a_plus)."\n";
echo("nb_num8m_plus:".$nb_num8m_plus)."\n";
echo("nb_num8m_all_plus:".$nb_num8m_all_plus)."\n";

// * asterik afte the character means we have it 0 or more times in the string.
$nb_num1a_asterik = preg_match("/t[0-9]*t[a-m]/", "tta");
echo("nb_num1a_asterik:".$nb_num1a_asterik)." string has 'tta' does not have a number,
                   but it is still a match because we have * after [0-9].
                   * means we can have 0 or more occurances of a number or numbers.\n";

// + (plus) and * (asterik) are called modifiers

// A number between {} curly brackets means, we want to have that character as many times
// In the below example we are looking for 4 numbers, because we do [0-9]{4} 
$nb_curly4 = preg_match("/t[0-9]{4}t[a-m]/", "abcdeft0123tm");
echo("nb_curly4:".$nb_curly4)."\n";

$nb_curly5 = preg_match("/t[0-9]{5}t[a-m]/", "abcdeft0123tm");
echo("nb_curly5:".$nb_curly5)." should return 0. because we have 5 in curly brackets {5},
            but the string only has '0123'. These are only 4 numbers";



//echo($nb)."\n";

?>