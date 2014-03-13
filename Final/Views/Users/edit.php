

<form action="?action=save" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<label for="FirstName">First Name:</label>
	<input type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" />
	<br />
	<label for="LastName">Last Name:</label>
	<input type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" />
	<br />
	<label for="Password">Password:</label>
	<input type="password" name="Password" id="Password" value="<?=$model['Password']?>" />
	<br />
	<label for="fbid">fbid:</label>
	<input type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" />
	<br />
	<label for="UserType">User Type:</label>
	<input type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>" />
	<br />
	<input type="submit" value="Save" />
</form>

