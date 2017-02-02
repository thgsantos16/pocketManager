<div id="register" ng-show="registerView">
	<label for="nameRegister">Name</label>
	<input id="nameRegister" name="nameRegister">

	<label for="userRegister">User</label>
	<input id="userRegister" name="userRegister">
	
	<label for="passRegister">Password</label>
	<input type="password" id="passRegister" name="passRegister">
	
	<label for="rePassRegister">Repeat Password</label>
	<input type="password" id="rePassRegister" name="rePassRegister">
	<?=$html->link('register()', 'button', array('id' => 'btnRegister'), 'Register');?>
</div>