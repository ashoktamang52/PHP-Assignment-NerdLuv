<?php include("top.html"); ?>
<div>
	<form action="/matches-submit.php">
		<fieldset>
			<legend> Returning User: </legend>
			<strong> Name: </strong>
			<input type="text" name="name" maxlength="16" required><br>
			<input type="submit" value="View My Matches">
		</fieldset>
	</form>

</div>

<?php include("bottom.html"); ?>
