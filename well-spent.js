let answer = "";
function pressed(event){
    if(event.keyCode == 13){ // Enter key.
        answer= document.getElementById("well-spent").value;
        window.localStorage.setItem('response1',answer);
    }
}
function redirectToWellSpent(){
    window.location.href="well-spent.php";
}
function showResponse(){
    document.getElementById("answer1").innerHTML='Your response: ' +
    window.localStorage.getItem('response1');
}