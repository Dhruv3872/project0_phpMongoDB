<!DOCTYPE html>
<html>
    <head>
        <title>A DAY WELL-SPENT</title>
        <link rel="stylesheet" href="one-style.css">
    </head>
    <body>
        <p id="hi">Hi, There.</p>
        <form id="form1" method="POST">
            <label for="well-spent"> Mention one thing that can make your day well-spent for you:</label><br>
           <input type="text" name="input_value" id="well-spent" onkeypress="pressed(event)" size="80"><br>
        </form>
        <script  type="text/javascript" src="well-spent.js"></script>
    </body>
</html>
<?php
    if(isset($_POST['input_value'])){
        $a=$_POST['input_value'];
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
        'mongodb+srv://********:********@********.mongodb.net/test?retryWrites=true&w=majority');
        // Hid the connection username, password, cluster information for obvious reasons.
        $days = $client -> days ;
        $wellSpent = $days-> well_spent_days;
        $wellSpent->insertOne(["answer" => $a]);
        header('Location:thanQ.php');
    }
?>
