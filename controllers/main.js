// JavaScript Document
myApp = angular.module("myApp", ['ngRoute'])
.config(function($routeProvider){
	$routeProvider.
	when('/', {templateUrl: 'partials/login.html', controller: "loginCtrl"}).
	when('/pgstudents/:studentNumber', {templateUrl: 'partials/studentDashboard.html', controller: "studentCtrl"}).
	when('/printout/:studentNumber', {templateUrl: 'partials/printout.html', controller: "printoutCtrl"}).
	when('/admin', {templateUrl: 'partials/adminDashboard.html', controller: "adminCtrl"}).
	otherwise({redirectTo: '/error', templateUrl: 'partials/error.html'})
	
	
	});
