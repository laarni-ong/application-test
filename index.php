<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>

<!doctype html>
<html lang="en" ng-app="peopleApp">
  <head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
	<script>
		var peopleApp = angular.module('peopleApp', []);
		peopleApp.controller('PeopleController', function PeopleController($scope) {
			$scope.people = <?php echo json_encode($people) ?>;
			$scope.alertItem  = function(data) {
				alert(data.first_name + ' ' + data.last_name + ' - ' + data.email);
			}
		});
	</script>
  </head>
  <body ng-controller="PeopleController">

    <table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="ppl in people">
				<td>{{ppl.first_name}}</td>
				<td>{{ppl.last_name}}</td>
				<td>{{ppl.email}}</td>
				<td><input type="button" ng-click="alertItem(ppl)" value="click me!"/></td>
			</tr>
		</tbody>
	</table>

  </body>
</html>