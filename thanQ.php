<!DOCTYPE html>
<html>
    <head>
        <title>Thank you</title>
    </head>
    <!-- <body onload="showResponse()"> -->
    <body onload="showResponse()">
    <?php
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
            'mongodb+srv://m001-student:temporary2@cluster0.d1x63.mongodb.net/test?retryWrites=true&w=majority');
        /*$db = $client->test;
        //$collection1 = $db->emp1;   
        //$entry = $collection1->insertOne(["answer" => "When I can make someone laugh."]); */
    ?>
        <p>Thank you for registering a response.</p>
        <!-- <p>Your response:</p> -->
        <p id="answer1"  onload="showResponse()"></p>
        <button type="aRButton0" onclick="redirectToWellSpent()">Add another Response</button>
        <form method = "POST">
            <input type="submit" name= "sARButton1" value="Show All Responses"/>
        </form>
        <!-- <button type="sARButton1" >Show All Responses</button> -->
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
        'mongodb+srv://m001-student:temporary2@cluster0.d1x63.mongodb.net/test?retryWrites=true&w=majority');
        $days = $client -> days ;
        //$collections = $days -> listCollections();
        // foreach($collections as $collection){
        //     // var_dump($collection);
        // }
        //$documents = $days -> listDocuments();
        $wellSpent = $days-> well_spent_days;
        $criteria = array (
            '_id' => array('$exists' => true)
        );
        // $filter = ['projection' => ['answer' => 1]];
        $allResponses = $wellSpent -> find($criteria, ['projection' => ['answer' => 1, '_id' => 0]]);
        //var_dump($allResponses);
        /*$allResponses = $wellSpent -> find(
            ['answer'=>'oed']
        ); */
        $count = 0;
        foreach($allResponses as $document){
            $current = $document -> answer;
            if($current != null){
                echo $current;
                echo "</br> </br>";
            }
            $count++;
        }
        echo $count;
        //$oneResponse = $wellSpent -> findOne() -> answer;
        //echo $wellSpent -> findOne() -> answer;
        //$answerString = $oneResponse->answer; 
        //echo $answerString;
        // var_dump($answerString);
        // returnAnswer($answerString);
        // foreach($allResponses as $response){
        //     var_dump($response);
        // }
        // var_dump($allResponses);
        //print_r($collections);
        //print_r($documents);
        //var_dump($collections);
        // echo $collections;
    }
    /* function returnAnswer($answerWithQuotes){
            $first = stripos($answerWithQuotes, "f");
            echo $first;
    } */
