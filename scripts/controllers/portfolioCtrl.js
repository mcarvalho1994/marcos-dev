angular.module("portfolio").controller("portfolioCtrl", function($scope, $http) {
	$scope.app = "Portfolio";

	$scope.menus =
	[
		{item: "Home", url: "#home"},
		{item: "About me", url: "#about-me"},
		{item: "Skills", url: "#skills"},
		{item: "Contact", url: "#contact"},
	];
});