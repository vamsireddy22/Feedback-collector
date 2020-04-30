<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css">
    </head>
    <body >
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback Form</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form" action="feedbackconnect.php">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <p>
                                    <label>Company Name :</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <p>
                                    <label>Total no.of Rounds :</label>
                                    <input type="text" class="form-control" id="name" name="rounds" required>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Type of Company :</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="Service" >
                                        Service Based
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="Product" >
                                        Product Based
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Share your interview experience and suggestions to juniors:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >SUBMIT FEEDBACK</button>
                            </div>
                        </div>
                    </form>
                    <form action="redirect.php" method='POST'> 
                             <CENTER><input type="submit" name="send" value="BACK TO MAIN" style="font-size:18px; " /></CENTER>
                         </form></p>

                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
</html>