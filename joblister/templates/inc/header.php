<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobLister</title>
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.cs">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <div class="container">
            <div class="header clearfix">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php"><h3><?= SITE_TITLE; ?></h3></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item active p-1 ">
                                <a class="nav-link" href="index.php" >Home <span class="sr-only">(current)</span></a>
                            
                            </li> 
                            <li class="nav-item  p-1">
                            
                            <a class="nav-link" href="create.php"> Create Listing</a>
                              
                            </li>  
                        </ul>

                    </div>
                    </nav>
            </div>
          
<?php displayMessage(); ?>