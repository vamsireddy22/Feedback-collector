<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body
  {
    background-image: url(main1.jpg);
    background-size: cover;
    text-align: center;
  }
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  object-position: center; 
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<h2>Thanks for submitting the feedback.</h2>
<form action="redirect.php" method="POST">
<a href=""><button class="button" name="send"><span>GO HOME</span></button></a>
</form>
</body>
</html>