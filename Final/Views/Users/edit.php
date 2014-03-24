<style type="text/css">
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align: right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}
	@media screen and (min-width: 768px) {
		.my-horizontal .form-control{
			width: 25%;
			margin-bottom: 5px;
		}
	}
</style>



<h2>Edit: <?=$model['FirstName']?> <?=$model['LastName']?></h2>
	
<form action="?action=save" method="post" class="my-horizontal">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<label for="FirstName">First Name:</label>
	<input class="form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
	<br />
	<label for="LastName">Last Name:</label>
	<input class="form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
	<br />
	<label for="Password">Password:</label>
	<input class="form-control" type="password" name="Password" id="Password" value="<?=$model['Password']?>" placeholder="Password" />
	<br />
	<label for="fbid">fbid:</label>
	<input class="form-control" type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" placeholder="fbid" />
	<br />
	<label for="UserType">User Type:</label>
	<input class="form-control" type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>" placeholder="User Type" />
	<br />
	<label></label>
	<input class="btn" type="submit" value="Save" />
</form>

