<!DOCTYPE html>
<html>
    <head>
        <title>Your response</title>
    </head>
    <body onload="showResponse()">
        <p>Thank you for registering a response.</p>
        <span>Your response:</span>
        <span id="answer1"></span>
        <p>
            <button type="aRButton0" onclick="redirectToWellSpent()">Add another Response</button>
        </p>
        <script src="well-spent.js"></script> 
    </body>
    <?php
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
    'mongodb+srv://m001-student:temporary2@cluster0.d1x63.mongodb.net/test?retryWrites=true&w=majority');
    //echo $client>test;
    $days = $client -> days ;
    //$wellSpent = $days-> createCollection('well_spent_days');
    $wellSpent = $days-> well_spent_days;
    //var_dump($wellSpent);
    //$response = $wellSpent->insertOne(["answer" => document.getElementById("answer1").innerHTML]);
    //$response = window.localstorage.getItem("response1");
    $response = "window.localstorage.getItem('response1')";
    //$response = document.getElementById('answer1').innerHTML    ;
    echo $response; 
    //$wellSpent->insertOne(["answer" => window.localstorage.getItem("response1")]);

//var_dump($result1);

// $client = new MongoDB\Client(
    //     'mongodb+srv://<username>:<password>@<cluster-address>/test?retryWrites=true&w=majority'
    // );

    // $db = $client->test;

//var_dump($result1);


// $client = new MongoDB\Client(
//     'mongodb+srv://<username>:<password>@<cluster-address>/test?retryWrites=true&w=majority'
// );

// $db = $client->test;
?>
</html>
