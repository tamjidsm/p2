<div class='text'>

<h2>XKCD Password generator</h2>
<h1></h1>
<div>
	<p>XKCD is known for its online web comic series. It had a strip titled <a href='http://xkcd.com/936/'>Password Strength</a>. 
	A strip was based on he difficulty of coming up a hard to guess password and how to memorize that.	
	</p>
	
	<p>This page will used xkcd method to generate password based on your input. 
	You can choose how many numbers to pick randomly, alone with if wanted to make words capitalized by first letter. ALso, if number and/or symbol
	will be added there or not to make the password strength.</p>
<div class='float'>
	<img src="images/password_strength.png" alt="xkcdstorycard" width: "300" height="300">
</div>
	</div>
<h2>Currently password</h2>
<p>Your current password is  : <?php echo ($password)?$password:$count;	?></p>
<form method="POST" action="">

<label name="count"> Words number</label>
<input type="text" name="count" value=""/><br /><br />

<label name="uppercase">First letter uppercase</label>
<input type="checkbox" name="uppercase" value="checkbox"
<?php echo ($uppercase) ? 'checked="checked"' : '' ; ?> /><br/>

<label name="count">Symbol only</label>
<input type="checkbox" name="symbol" value="symbol"/><br /><br />

<label name="count">Numbers?</label>
<input type="checkbox" name="number" value="number"/><br /><br />

<input type="submit" name="submit" value="submit">

</div>