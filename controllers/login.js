// JavaScript Document
myApp.controller("loginCtrl", function($scope, $http, $location, $timeout){
	$scope.user = {"username":"","password":""};
	
	//alert();
$scope.feedbackmessage =false;
$scope.login = function()
{
	//user = {"username":$scope.username, "thePassword":$scope.thePassword};
			$http.post("backend/sqlprocessor.php?authentication=yes", $scope.user)
			.success(function(response){
				
				if(response.status=='ok')
				{
					$scope.data = response.data;
					//alert();
					studentMatricNo =response.data.matricNumber;
					
					//alert(studentMatricNo);
					$location.path("/pgstudents/"+studentMatricNo);
				}else if(response.status=='not ok')
				{
					$scope.feedbackmessage =true;
					$scope.message = "Invalid Credentials"
					
					$timeout(function(){
						$scope.feedbackmessage =false;
						$scope.message = ""
						
						},2000);
					

				}
					
				})
			.error(function(){
				
				
				
				});
	
	
}
	});