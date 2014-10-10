<?php

//$words =['words','word','words'];

if (isset ($_POST['count'])) {
	$count= $_POST['count'];
	
	//echo $_POST['count'];
	
	if ( ! is_number($count)){

	return 'We have to put number inside the values';
}
	} else {
	$count = 1;
	}
	
if (isset ($_POST['uppercase'])) {
	//echo $_POST['uppercase'];
	$uppercase= true;
	}
	else {
		$uppercase= false;

	}
if (isset($_POST['symbol'])) {
	//echo $_POST['symbol'];
		$symbol= false;
	}
	else {
		$symbol= false;
	}
	
if (isset ($_POST['number'])) {
	//echo $_POST['number'];
		$number= true;
	}
	else {
		$number= false;
	}

	
	
	// count
<--!if ($words= file('words.txt')){
echo ''count: ' .count($words);
echo $words(800)
}
-->
if ($words= file('words.txt')){
$selected_words=[]; 

$symbols =['!','@','#','^','&','*'];
$symbols =[0,1,2,,3,4,5,6,7,8,9];

for($i=0;$i=$count;$i++) {

// random number from dictionary

$max= count($words) -1;
$rand=rand(0, count($max));

	$word = $words[$rand];
	echo $word.'<br/>'
	array_push ($selected_words, $word);
	}

if ($uppercase){
// change the first letter upper case

foreach ($selected_words as $index => $word){

	$selected_words[$index] = ucfirst($word); 
	echo $selected_words.'<br/>'
	}

}

if ($symbol) {
// set the symbol

//>> string replace take index and value

}

if ($number) {


//$password = implode ("")

}