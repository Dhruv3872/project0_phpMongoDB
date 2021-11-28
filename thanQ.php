<!DOCTYPE html>
<html>
    <head>
        <title>Thank you</title>
    </head>
    <body onload="showResponse()">
        <p>Thank you for registering a response.</p>
        <p id="answer1"  onload="showResponse()"></p>
        <button type="aRButton0" onclick="redirectToWellSpent()">Add another Response</button>
        <form method = "POST">
            <input type="submit" name= "sARButton1" value="Show All Responses"/>
        </form>
        <script src="well-spent.js"></script> 
    </body>
</html>

<?php
    if(isset($_POST['sARButton1'])){
        showAllResponses();
    }
    function showAllResponses(){
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
        'mongodb+srv://********:********@********.mongodb.net/test?retryWrites=true&w=majority');
        // Hid the connection username, password, cluster information for obvious reasons.
        $days = $client -> days ;
        $wellSpent = $days-> well_spent_days;
        $criteria = array (
            '_id' => array('$exists' => true)
        );
        $allResponses = $wellSpent -> find($criteria, ['projection' => ['answer' => 1, '_id' => 0]]);
        $count = 0;
        foreach($allResponses as $document){
            $current = $document -> answer;
            if($current != null){
                echo $current;
                echo "</br> </br>";
            }
            $count++;
        }
        echo "TOTAL RESPONSES SO FAR: $count";
    }
