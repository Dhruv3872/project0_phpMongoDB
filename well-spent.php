<!DOCTYPE html>
<html>
    <head>
        <title>A DAY WELL-SPENT</title>
        <link rel="stylesheet" href="one-style.css">
    </head>
    <body>
    <!-- onload="alert('Hi..')" -->
        <p id="hi">Hi, There.</p>
        <!-- <button type="button" onclick="redirect()">redirect to thank-you.html</button> -->
        <!-- <p>Mention one thing that can make your day well-spent for you:</p> -->
        <!-- <input type="text" id="day" size="40" onkeypress="pressed(event)"> -->
        <!-- onkeydown="keyDown()" -->
        <!-- <form id="form1" method="POST" onsubmit="return false;"> -->
        <form id="form1" method="POST">
        <!-- onsubmit="store()" -->
        <!-- action="thanQ.php" -->
            <label for="well-spent"> Mention one thing that can make your day well-spent for you:</label><br>
           <!-- <input type="text" name = "input_value" id="well-spent" onkeypress="pressed(event)"><br> -->
           <input type="text" name="input_value" id="well-spent" onkeypress="pressed(event)"><br>
           <!-- <input type="submit" name = "submit"><br> -->
           <!-- <input   style=position:absolute;top:50%;left:5%;width:40%; type="submit" onclick="that3()"> -->
        </form>
        <!-- <p>
             <?php
                $phpVariable = 5; 
                echo $phpVariable;
             ?>
        </p> -->
        <!-- <p id="one">This will change when "d" is pressed inside the input.</p> -->
        <script  type="text/javascript" src="well-spent.js"></script>
        <!-- <script>
            function that(){
                alert("A key was pressed.");
            }
            function that2(){
                alert("A key was down.");
            }
        </script> -->
        <!-- <script>
        function pressed(event){
            var x = event.which;
            //document.getElementById("form1").style.visibility = "hidden";
            alert("pressed(e) was executed. e.which: " + event.which);
        }
        </script> -->
    </body>
</html>
<?php
    //echo 'input_value';
    //echo $_POST['input_value'];
    if(isset($_POST['input_value'])){
        $a=$_POST['input_value'];
        // echo "--->";
        // echo $a ;
        //echo "\n\n\n\n\n\n\n\n\n\n";
        require 'vendor/autoload.php';
        $client = new MongoDB\Client(
        'mongodb+srv://*****:******@*****.mongodb.net/test?retryWrites=true&w=majority');
        // * the connection username, password, cluster information for obvious reasons.
        $days = $client -> days ;
        $wellSpent = $days-> well_spent_days;
        $wellSpent->insertOne(["answer" => $a]);
        header('Location:thanQ.php');
    }
?>