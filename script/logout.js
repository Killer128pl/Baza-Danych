function logout(){
    document.getElementById("log").innerHTML = "Za chwilę wystąpi wylogowanie...";
    setTimeout(function(){ window.location.href= 'index.php';}, 3000);
}