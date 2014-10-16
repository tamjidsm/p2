<?php

if (isset($_POST['count'])){
		$count= $_POST['count'];
	if ( !is_numeric($count)){
		echo '<h2 style="color: red;">Keep numeric into "Words number" field, Alphabet or null might warn you	! </h2>';
	}		
}  else {
		unset($password);
		return '';
		}
//$count=1;
//}
	

if (isset($_POST['uppercase'])){

	$uppercase= true;
	}
	else {
		$uppercase= false;
		}

if (isset($_POST['symbol'])){
		$symbol= true;
	}
	else {
		$symbol= false;
	}


if (isset($_POST['number'])){
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

	for($i=0;$i<$count;$i++) {

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
		}
//creating array for symbol
$symbols =['!','@','$','^','#','*','&','(',')','-','_',';','`','~','=','<','{','}','<','>'];
//creating array for number
$numbers =[0,1,2,3,4,5,6,7,8,9];

$sysmb = '';
$num = '';
if  ($symbol) {
	$sysmb= $symbols[rand(0,count($symbols)-1)];
	}

if  ($number) {
$num= $numbers[rand(0,count($numbers)-1)];

//$num=rand (0,9);
	//echo '<br/>'.$num;
	}

$password1 =implode (" ", $selected_words);		
$password="$password1".$num."$sysmb";

//pull data from from
//run responses from logic
//update to send back variable
//using helper func perform cleanup
