<html>

     <head>
        <title>Welcome </title>
        <style>
        h1{
          text-align: center;
          padding-top: 150px;
        }

          #button {
            background-color: green;
    line-height: 12px;

    font-size: 8pt;
    font-family: tahoma;

    position:absolute;
    top:0;
    right:0;
}
        }


        </style>
     </head>
     <body>
  <form id="login-form" method="post" action="logout.php" >
       <div id="button">
         <input type="submit" style="background:green;width:100px;
height:40px;" value="Submit"  > </div>
<h1>Welcome</h1>


 <script type="text/javascript">
             var IDLE_TIMEOUT = 120; //seconds
                var _idleSecondsCounter = 0;
                document.onclick = function() {
                _idleSecondsCounter = 0;
                };
                document.onmousemove = function() {
                _idleSecondsCounter = 0;
                };
                document.onkeypress = function() {
                _idleSecondsCounter = 0;
                };
                window.setInterval(CheckIdleTime, 1000);

                function CheckIdleTime() {
                _idleSecondsCounter++;
                var oPanel = document.getElementById("SecondsUntilExpire");
                if (oPanel)
                oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
                if (_idleSecondsCounter >= IDLE_TIMEOUT) {
                //alert("Time expired!");
                document.location.href = "logout.php";
                }
                }
        </script>


     </body>

  <?php



  ?>

</html>
