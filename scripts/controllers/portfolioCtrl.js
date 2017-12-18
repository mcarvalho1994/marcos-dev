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
		{icon: "fa fa-desktop fa-2x", desc: "Configuração e formatação de computadores."},
		{icon: "fa fa-server fa-2x", desc: "Gerenciamento de servidores."},
		{icon: "fa fa-user  fa-2x", desc: "Suporte para usuários."},
		{icon: "fa fa-shield fa-2x", desc: "Instalação de configuração do firewall pfSense."},
		{icon: "fa fa-ticket fa-2x", desc: "Instalação de configuração do sistema de chamados GLPI."},
		{icon: "fa fa-globe fa-2x", desc: "Desenvolvimento web."},
		{icon: "fa fa-laptop fa-2x", desc: "Desenvolvimento de sistemas."},
	];	
});