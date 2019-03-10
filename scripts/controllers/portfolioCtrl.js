angular.module("portfolio").controller("portfolioCtrl", function($scope, $http) {
	$scope.app = "Portfolio";

	$scope.menus =
	[
		{item: "Home", url: "#home"},
		{item: "About me", url: "#about-me"},
		{item: "Skills", url: "#skills"},
		{item: "Services", url: "#services"},
		{item: "Contact", url: "#contact"},
	];

	$scope.sItens =
	[
		{icon: "fa fa-desktop fa-2x", desc: "Implantação de sistemas"},
		{icon: "fa fa-server fa-2x", desc: "Gerenciamento de servidores."},
		{icon: "fa fa-user  fa-2x", desc: "Suporte para usuários."},
		{icon: "fa fa-globe fa-2x", desc: "Desenvolvimento web."},
		{icon: "fa fa-laptop fa-2x", desc: "Desenvolvimento de aplicativos e sistemas."},
	];	
});