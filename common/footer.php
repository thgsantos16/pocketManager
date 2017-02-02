<?php

?>


</main>

<div id="messages"></div>
<div id="addExpense"></div>
<div id="whiteShadow"></div>

<footer></footer>

<script type="text/javascript">var state = "root"; </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/ajax.js"></script>
<script type="text/javascript" src="assets/js/angular.js"></script>
<script type="text/javascript" src="assets/js/angular-animate.js"></script>

<script>

var pocketManager = angular.module('pocketManager', ['ngAnimate']);
pocketManager.controller('pocketManagerController', function($scope) {

	$scope.rootView = true;
	$scope.loginView = false;
	$scope.registerView = false;
	$scope.expenses = {};
	$scope.filter = "";
	$scope.greater = 0;
	$scope.lesser = "";

	$scope.greaterThan = function (item) {
	    return item.val >= $scope.greater;
	};

});

</script>

</body>
</html>