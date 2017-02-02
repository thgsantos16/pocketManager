<div id="login" ng-show="loginView">
	<label for="userLogin">User</label>
	<input autocomplete="off" id="userLogin" name="userLogin">
	<label for="passLogin">Password</label>
	<input autocomplete="off" type="password" id="passLogin" name="passLogin">
	<?=$html->link('login()', 'button', array('id' => 'btnLogin'), 'Log in');?>
</div>