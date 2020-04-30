<!DOCTYPE html>
<html>
<head>
	<style>
		body 
		{
  			background: #ffffff url("bg.jpg") no-repeat center;
  			background-size: cover;
  			background-position: center;
  		}
		h1.a
		{
			font-size: 60px;
			color: Crimson;
			text-align: center;
		}
		h1.b
		{
			font-size: 45px;
			color: SlateBlue;
			text-align: center;
		}
		h1.c
		{
			font-size: 40px;
			color:Sienna ;
			text-align: center;
		}

        #f1
        {
           	font-size: 25px;
            border-width: 1px;
            padding: 50px 1px 20px 10px;
        }
        .f1_label 
        {
            white-space: nowrap;
        }


	</style>
	<title>ADMIN LOGIN</title>
</head>
<body background="bg.jpeg">
	<h1 class='a'>GPREC</h1>
	<h1 class='b'>TRAINING & PLACEMENT CLUB</h1>
	<h1 class='c'>ADMIN LOGIN</h1>
	<center> <div>  
            <form name="f1" method="post" action="loginlast.php" id="f1">
                <table>
                    <tr>
                        <td class="f1_label">USER NAME :</td> 
                        <td><input type="text" name="user" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td class="f1_label">PASSWORD :</td>
                        <td><input type="password" name="pass" value=""  />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <CENTER><input type="submit" name="ADD" value="LOGIN" style="font-size:18px; " /></CENTER>
                        </td>
                    </tr>
                </table>
            </form> 
            <p>
                <form action="redirect2.php" method='POST'>
                             <CENTER><input type="submit" name="send" value="BACK TO MAIN" style="font-size:18px; " /></CENTER>
                         </form></p>
        </div></center>
</body>
</html>