<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Sixpacks | Dashboard </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<br/><br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 tab-content">
                <div class="panel panel-default tab-pane fade in active">
                    <div class="panel-heading" style="border-radius:10px;">
                        <h3 class="panel-title text-center">
							
							<!-- Displaying username of the user -->
							<?php 
								session_start();
								print_r("Welcome '" . $_SESSION['name'] . "'");
						
							?>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	

</body>
</html>
