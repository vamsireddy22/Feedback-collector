<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
                background-image: url("main2.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
            h2
            {
                color:red;
            }
            table,th,td
            {
                border:1px solid black;
            }
            th
            {
                text-align: center;
            }

        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UPLOAD YOUR FOR STUDENT REFERENCES</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    </head>
    <body >
        <div class="container">
            <div class=""></div></p>
                    <form action="" method="POST">
                        <div class ="row">
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback Search</h2> 
                    <form action="searchconnect.php" method="POST">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <p>
                                     <label>UPLOAD YOUR RESUME :</label>
                                    <label class="radio-inline">
                                         <input type="file" class="form-control" id="search" name="file" required>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="vamsi" class="btn btn-lg btn-warning btn-block" >UPLOAD</button>
                            </div>
                        </div>
                    </form>
                    <table>
                        <tr>
                            <th>ROLL NUMBER:</th>
                            <th>BRANCH</th>
                            <th>RESUME FILE</th>
                        </tr>
                        <?php
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"tnpfeedback");
                        if(isset($_POST['vamsi']))
                        {
                            $comname=$_POST['search'];
                            $query="SELECT * FROM feedback where companyname='$comname'";
                            $quesry_run=mysqli_query($connection,$query);


                            while($row=mysqli_fetch_array($quesry_run))
                            {
                                ?>
                                <tr>
                                    <td> <?php echo $row['roll_number'];  ?></td>
                                    <td> <?php echo $row['branch']; ?></td>
                                    <td> <?php echo $row['resume_file']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
       <p>
                <form action="redirect1.php" method='POST'>
                             <CENTER><input type="submit" name="send" value="GO BACk" style="font-size:18px; " /></CENTER>
                         </form></p>
                         <p>
                <form action="redirect2.php" method='POST'> 
                             <CENTER><input type="submit" name="send" value="BACK TO MAIN" style="font-size:18px; " /></CENTER>
                         </form></p>

    </body>
</html>