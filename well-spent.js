let answer = "";
function pressed(event){
    //document.getElementById("one").innerHTML = "inside pressed(key) function.";
     //event.which = event.which || event.keyCode;
    if(event.keyCode == 13){ // Enter key.
        //document.getElementById("hi").style.visibility = "hidden";
        //alert("w: " + event.keyCode);
        //document.getElementsByID("form-1").visible= false;
        answer= document.getElementById("well-spent").value;
        window.localStorage.setItem('response1',answer);
        //alert("Your response: " + answer);
        //window.location.href="toAtlas.php";
        //window.location.href="thanQ.php";
        //document.getElementById("response").innerHTML =window.localStorage.getItem('response1');
        //document.getElementById("response").innerHTML = answer;
    }
    // else{
    //     alert("pressed(e) was executed. event.keyCode: " + event.keyCode);
    // }
}
function store(){
    alert("Hi..");
    answer = document.getElementById("well-spent").value;
    alert("The answer is ");
    alert(answer);
    //window.localStorage.setItem('response1',answer);
    //alert(window.localStorage.getItem('response1'));
}
function hide(){
    document.getElementById("form1").style.visibility = "hidden";
}
//if(document.getElementById("answer").on
//document.getElementsByID("form-1").style.visibility = "hidden";
function submit(){
    //answer = document.getElementById("well-spent").innerHTML;
    //document.getElementById("response") = answer;
    window.location.href="toAtlas.php";
}
function redirectToThankYou(){
    window.location.href="toAtlas.php";
}
function redirectToWellSpent(){
    window.location.href="well-spent.php";
}
function keyDown(){
    alert("A key was pressed.");
}
function showResponse(){
    //alert("Hi..");
    document.getElementById("answer1").innerHTML='Your response: ' + window.localStorage.getItem('response1');
}
// function that3()
// {
// var input = document.getElementById("well-spent").value;
// alert(input);
// }
function showAllResponses(){
    
}