<div class='text'>

<h2>XKCD Password generator</h2>
<h2>Currently password</h2>
<p>Your current password is  : <?php echo ($password)?$password:'';	?></p>
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