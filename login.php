<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Montserrat:900|Overpass&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="authentication.php" method="POST" id="form">
        <h1 id="login">LOGIN</h1>
        <p id="label">Username : </p>
        <input type="text" placeholder="Username" id="textbox" name="user">
        <p id="label">Password : </p>
        <input type="password" placeholder="Password" id="textbox1" name="pass"><input type="checkbox" onclick="myFunction()"><br/>
        <button id="btn" type="submit" name="submit">Login</button>
    </form>
</body>
</html>
<script>
function myFunction() {
var x = document.getElementById("textbox1");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}
</script>
<script language="javascript" type="text/javascript">
    window.onbeforeunload = function () {   
        // This function does nothing.  It won't spawn a confirmation dialog   
        // But it will ensure that the page is not cached by the browser.
    }  
</script>
