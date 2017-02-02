<div id="dashboard" ng-show="dashboardView">
	<input title="Search by Text" placeholder="Search by Text" id="textFilter" ng-model="filter" ng-show="dashboardView"><input title="Bigger than..." placeholder="Bigger than..." id="greaterThan" name="greaterThan" ng-model="greater" ng-show="dashboardView"><input title="Lesser than..." placeholder="Lesser than..." id="lesserThan" name="lesseerThan" ng-model="lesser" ng-show="dashboardView"><?=$html->link('addExpenseAppear()', 'button', array('id' => 'btnAddExpense'), 'Add Expense');?>
	<div  ng-animate="'animate'" class="rows" data-cod="{{x.id}}" ng-repeat="x in expenses | filter : filter | filter: greaterThan">
		<div class="col">{{x.description}}</div>
		<div class="col">{{x.dat}} {{x.hour}}</div>
		<div class="col">{{x.val | currency}}</div>
	</div>
</div>