<?php
    include('Search_XuLy.php');
?>
<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
    <title>What are you searching for ?</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link href="CSS/Style_Search.css" rel="stylesheet">
	<script src="javascript.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-6"> 
                <div class="search-box"> 
                    <form class="search-form" action = "Search_XuLy.php" method = "GET"> 
                        <input class="form-control" placeholder="We got anything you need" type="text" name="want"> 
                        <button class="btn btn-link search-btn" name="search"> 
                            <i class="glyphicon glyphicon-search"></i> 
                        </button> 
                    </form> 
                </div> 
            </div> 
        </div>
    </div> 
</body>

</html>