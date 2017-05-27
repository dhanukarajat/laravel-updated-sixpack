<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Sixpacks | Welcome</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<br/><br/><br/>
	
	<!-- Using Bootstrap for Input Form Validation -->
   <div class="container" ng-app="loginApp" ng-controller = "loginController">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 tab-content">
                <div class="panel panel-default tab-pane fade in active">
                    <div class="panel-heading" style="border-radius:10px;">
                        <h3 class="panel-title text-center">Please Enter your name</h3>
                    </div>
                    <div class="panel-body">
                    <form action="../public/welcome" method="GET" name="loginForm" id="loginForm">
							     <div class="form-group" ng-class="{'has-error':loginForm.username.$invalid && loginForm.username.$dirty}">
                                    <input class="form-control" placeholder="User Id" ng-model="username" name="name" type="text" autofocus required>
									<div class="help-block with-errors" ng-show="loginForm.username.$invalid && loginForm.username.$dirty">
										<span ng-show="loginForm.username.$error.required">Username is required.</span>
									</div>
                                </div>
                                <div>
                                	<button type="submit" ng-disabled="loginForm.$invalid" class="btn btn-primary pull-left">Submit</button>
                                </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Angular,Bootstrap and Jquery CDNs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	

	<script>
	// Angular App initialization
	var loginModule = angular.module("loginApp",[]);
	
	// Login Controller
	loginModule.controller("loginController",function($scope){
			//To get entered user name use $scope.username;
	});
 
 
	//AJAX call to submit form data to home page
	$("#loginForm").submit(function(event) {
		
		  event.preventDefault();

		  var $form = $( this ), url = window.location.href + $form.attr( 'action' ) + "?name="+$('input[name=name]').val();

		  var posting = $.get(url);

		  posting.done(function( response ) {
			  window.location.href = window.location.href + response;
		  });
	});
		
	</script>
</body>
</html>
