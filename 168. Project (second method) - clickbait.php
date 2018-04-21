<?php
    
    define( "TITLE", "Honest Click Bait Headlines" );

    include("functions.php");

    if (isset ( $_POST["fix_submit"])) {
        
        //call function
        checkForClickBait();
        
    }
        
?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    
    <body>
        
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program</p>
        
            <div class="row">
                
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline">
                    </textarea>
                    
                    <br>
                    
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                
                </form>
            
            </div>
            
            <?php
            
                if (isset($_POST["fix_submit"])) {
                   
                    //get first value in array returned by checkForClickBait() function
                    //store it in a variable
                    $clickBait = checkForClickBait()[0];
                    
                    //get second value in array returned by checkForClickBait() function
                    //store it in a variable
                    $honestHeadline = checkForClickBait()[1];
                    
                    //call function
                    //pass two arguments in the function
                    displayHonestHeadline($clickBait, $honestHeadline);
                }
                
            ?>

        </div>
        
        <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      
      <script src="bootstrap/js/bootstrap.min.js"></script>
        
    </body>
    
</html>
