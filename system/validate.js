// check if user is logged in to use clients :)
// if not, redirect to login page
// sorry skids
// you cant copy the client code rip


if( document.cookie.indexOf("verified=") < 0) {
    alert("NOT LOGGED IN, ERROR 401");
    location.href = "https://www.paragram.repl.co/account.php";
}