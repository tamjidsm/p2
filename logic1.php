<?php

if (isset($_POST['count'])){
		//echo $_POST['count'];
		$count= $_POST['count'];
	
	if ( !is_numeric($count)){
return 'We have to put number inside the values';
	}		
} else {
	$count=1;
}

if (isset($_POST['uppercase'])){
		//echo $_POST['uppercase'];

	$uppercase= true;
	}
	else {
		$uppercase= false;
		}

if (isset($_POST['symbol'])){
		//echo $_POST['symbol'];
		$symbol= true;
	}
	else {
		$symbol= false;
	}


if (isset($_POST['number'])){
		//echo $_POST['number'];
		$number= true;
	}
	else {
		$number= false;
	}

	

	
if ($words = file('words.txt')){

	//echo 'Count: '.count($words).'<br />';
	//echo $words[155];
	// creating an array based on dictionary
	
$selected_words= [];
//creating array for symbol
$symbols =['!','@','$','^','#','*'];
//creating array for number
$number =[0,1,2,3,4,5,6,7,8,9];

	for($i=0;$i<$count;$i++) {

//random number from dictionary
# selected words
$max= count($words) -1;
$rand=rand(0, $max);
	$word = $words[$rand];
//echo $word."<br/>";
	array_push ($selected_words, $word);
	}
	
	if	($uppercase){

foreach ($selected_words as $index => $word){
	$selected_words[$index] = ucfirst($word); 
	//echo $selected_words[$index].'<br/>';
	}
}

if  ($symbol) {

//str_replace
}

if  ($number) {

}

$password =implode ("-",$selected_words);		
	
	}
	



//pull data from from
//run responses from logic
//update to send back variable
//using helper func perform cleanup
