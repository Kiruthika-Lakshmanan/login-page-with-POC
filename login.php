<!DOCTYPE html >
<html>
<head>
<title> LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <p>Login</p>
  <div style="margin:0 auto" align=center>



<hr>
    <form id="login-form" method="post" action="login.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">Username</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
             
             
             
             <td><input type="password" id="passwd" onkeyup="mask(this.value)"   name="user_pass" id="user_pass" onkeydown='allowBackSpace(event,this)' ></td>
    <!--<div>
        <span class="ke">ysp.realText : </span><span class="va"></span>
    </div>-->
	<script src="./hide.js"></script>
    <script >

    var hide = new hidejs(" ", 1000);
    hide.fixIE9();

    document.querySelector("#passwd").addEventListener('input', hide.keyboardInputHandle.bind(ysp));
    document.querySelector("#passwd").addEventListener('input', function() {
        document.querySelector(".va").innerHTML = hide.realText;
    });
    </script>
             
             
             
             
             </tr>


        </table>
        <div id="button">
          <input type="submit" style=" background:green;width:100px;
height:40px; " value="Submit"> </div>
    </form>
		</div>
    <?php

     require('db_connect.php');

    if (isset($_POST['user_id']) and isset($_POST['user_pass'])){

    // Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1){
      header("Location: ./welcome.php"); /* Redirect browser */
      exit();


}else{
 header("Location: ./login.php"); /* Redirect browser */
 exit();
}
}

?>

    <script>
    function allowBackSpace(e,obj)
    {
        var evt=e||window.event;
        if(evt.keyCode==8||evt.keyCode==46)
        {
            obj.value='';
        }
    }
    </script>


</body>
</html>
