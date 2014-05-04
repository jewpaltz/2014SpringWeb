/**
 * @author Moshe
 */
var homepageApp = angular.module('homepageApp', []);

homepageApp.controller('ItemListCtrl', function($scope, $http){
	$http.get("?action=index&format=json")
	.success(function (results) {
		$scope.items = results.data;
	});		    	

});
