<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Taking Survey Page</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<style type="text/css">

  .survey .mainhead {

    width: 99%;
    position:fixed;
    margin:-15% 0;
    background-color:#0D7377;
    font-size:30px;
    text-align:center;
    color:black;

  }

  .survey form {

    margin:15% 0;

  }

  .survey .top-lable {
        font-size: 30px;
  }

  .survey .checkbox-inputs {
        font-size: 25px;
  }

  .survey .lables-inputs {
        font-size: 25px;
        margin:0 5%;
  }
  .survey .lables-inputs .surname {
    font-size: 20px;
    margin:0 14.6%;
  }
  .survey .lables-inputs .names {
    font-size: 20px;
    margin:0 11.8%;
  }
  .survey .lables-inputs .contact {
    font-size: 20px;
    margin:0 8%;
  }
  .survey .lables-inputs .date {
    font-size: 20px;
    margin:0 18.7%;
  }
  .survey .lables-inputs .age {
    font-size: 20px;
    margin:0 19.3%;
  }

  .survey .favaurite-food {

    margin:2% 0;

  }

  .survey .scale-table {
    margin:2% 0;
    font-size: 20px;
  }

  .survey .lables-inputs {
        font-size: 25px;
        margin:0 5%;
  }

  .survey .button-sub button{

    width:20%;
    margin:3% 40%;
	  font-size:35px;
    background-color:#E8E8E8;
	  color:black;

  }


</style>

<body>

    <div class="survey">
      
      <div class="mainhead">
    
        <h1>Take Our Survey</h1>
    
      </div>
       
	    <form method="post">
        
        <div class="personal-details">

          <div class="top-lable">
            <label><b>Personal Details:</b></label>
          </div>

          <div class="lables-inputs">

            <br><label><b>Surname</b></label>
	          <input class="surname" type="text" placeholder="Entrer Your Surname..." name="surname" required/>
        
            <br><label><b>First Names</b></label>
	          <input class="names" type="text" placeholder="Enter your First Names..." name="names" required/>
        
            <br><label><b>Contact Number</b></label>
	          <input class="contact" type="text" placeholder="Your Contact Number..." name="Contact" required/>
        
            <br><label><b>Date</b></label>
            <input class="date" type="date" name="date" required/>
	
	          <br><label><b>Age</b></label>
	          <input class="age" type="number" placeholder="Enter Your Age..." name="age" required/>

          </div>
	        
        </div>
        <br>
        <hr>

        <div class="favaurite-food">

          <div class="top-lable">
            <label><b>What is your favourite food? (You can choose more than 1 answer)</b></label>
          </div>

          <div class="checkbox-inputs">

            <label>
              <input type="checkbox"  name="pizza">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pizza</b>
            </label>
        
            <br>
            <label>
              <input type="checkbox"  name="pasta">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pasta</b>
            </label>
        
            <br>
            <label>
              <input type="checkbox"  name="pap-wors">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pap and Wors</b>
            </label>
	
	          <br>
            <label>
              <input type="checkbox"  name="chicken-stir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Chicken Stir Fry</b>
            </label>

            <br>
            <label>
              <input type="checkbox"  name="beef-stir">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Beef Stir Fry</b>
            </label>

            <br>
            <label>
              <input type="checkbox"  name="other">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Other</b>
            </label>

          </div>

        </div>
        <hr>


        <div class="scale-table">

          <div class="top-lable">
            <label><b>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</b></label>
          </div>

          <table style="border:2; width:100%">

            <tr>
              <th style="background:#cccccc"></th>
              <th style="background:#cccccc">Strongly Agree<br>(1)</th>
              <th style="background:#cccccc">Agree<br>(2)</th>
              <th style="background:#cccccc">Neutral<br>(3)</th>
              <th style="background:#cccccc">Disagree<br>(4)</th>
              <th style="background:#cccccc">Strongly Disagree<br>(5)</th>
            </tr>

            <tr>
              <th>I like to eat out</th>
              <th><input type="radio" name="eatout" value="1"/></th>
              <th><input type="radio" name="eatout" value="2"/></th>
              <th><input type="radio" name="eatout" value="3"/></th>
              <th><input type="radio" name="eatout" value="4"/></th>
              <th><input type="radio" name="eatout" value="5"/></th>
            </tr>

            <tr>
              <th>I like to watch movies</th>
              <th><input type="radio" name="watchmovie" value="1"/></th>
              <th><input type="radio" name="watchmovie" value="2"/></th>
              <th><input type="radio" name="watchmovie" value="3"/></th>
              <th><input type="radio" name="watchmovie" value="4"/></th>
              <th><input type="radio" name="watchmovie" value="5"/></th>
            </tr>

            <tr>
              <th>I like to watch TV</th>
              <th><input type="radio" name="watchtv" value="1" /></th>
              <th><input type="radio" name="watchtv" value="2" /></th>
              <th><input type="radio" name="watchtv" value="3" /></th>
              <th><input type="radio" name="watchtv" value="4" /></th>
              <th><input type="radio" name="watchtv" value="5" /></th>
            </tr>

            <tr>
              <th>I like to listen to the radio</th>
              <th><input type="radio" name="listenradio" value="1" /></th>
              <th><input type="radio" name="listenradio" value="2" /></th>
              <th><input type="radio" name="listenradio" value="3" /></th>
              <th><input type="radio" name="listenradio" value="4" /></th>
              <th><input type="radio" name="listenradio" value="5" /></th>
            </tr>
          </table>

        </div>
        <br>
        <hr>

        <div class="button-sub">
          <button type="Submit" name="submit">Submit</button>
        </div>
        <hr>

	    </form>

     </div>
     
</body>

</html>

<?php

  

  if(isset($_POST['submit'])) { 

    //connection to database
    $conn=mysqli_connect("localhost","root","","survey");

    // create short variable names
    $surname= mysqli_real_escape_string($conn,$_POST['surname']);
    $names= mysqli_real_escape_string($conn,$_POST['names']);
    $contact= mysqli_real_escape_string($conn,$_POST['Contact']);
    $date= mysqli_real_escape_string($conn,$_POST['date']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);

    //set array
    $arraysc = array();
    $arrayho = array();
    $arrayfood = array();
    $clientfood = array();
    
    
    //run querys
    $querysc = "SELECT * FROM scale ORDER BY ScaleID ASC";
    $queryho = "SELECT * FROM hobby ORDER BY HobbyID ASC";
    $queryfood = "SELECT * FROM food ORDER BY FoodID ASC";
    
    

    $resultsc= mysqli_query($conn,$querysc);
    $resultho = mysqli_query($conn,$queryho);
    $resultfood = mysqli_query($conn,$queryfood);

    //look through query
    while($rowsc = mysqli_fetch_array($resultsc)) {

      //add each row returned into an array
      $arraysc[] = $rowsc;
    
      echo $rowsc['ScaleName']; 
    }

    while($rowho = mysqli_fetch_array($resultho)) {

      //add each row returned into an array
      $arrayho[] = $rowho;
      echo $rowho['HobbyName'];
    }
    
    while($rowfood = mysqli_fetch_array($resultfood)) {

      //add each row returned into an array
      $arrayfood[] = $rowfood;
      echo $rowfood['FoodName'];
    }
        
    //check box variable
    $chpizza = "";
    $chpasta = "";
    $chpap = "";
    $chchicken = "";
    $chbeef = "";
    $chother = "";

    //radio button variaable
    $reat = "";
    $rmovie = "";
    $rtv = "";
    $rradio = "";

    //count variables
    $foofcount=0;




    //checking if radio button are all checked
    if($_SERVER["REQUEST_METHOD"]=="POST") {

      if(empty($_POST["pizza"]) && empty($_POST["pasta"]) && empty($_POST["pap-wors"]) && empty($_POST["chicken-stir"]) 
      && empty($_POST["beef-stir"]) && empty($_POST["other"]) ) {

        $chother = "At least check other";
        
        echo '<script type="text/javaScript">alert("'.$chother.'");</script>';
        echo '<script type="text/JavaScript"> window.location= "take_survey.php" ; </script>';

      }else {
        
        //run insert
        $insertclient = "INSERT INTO client (Contact, Surname, Names, Age, TodayDate) VALUES ('$contact','$surname', '$names', '$age', '$date');";
        $intclient = mysqli_query($conn,$queryclient);

        //selecting from client table
        $queryclient = "SELECT * FROM client WHERE Contact='$contact'";

        $resultclient = mysqli_query($conn,$queryclient);

        $rowclient = mysqli_fetch_array($resultclient)

        $clienyid = $rowclient['ClientID'];

        $clienycontact = $rowclient['Contact'];

        
        if(isset($_POST['pizza'])) { 
          
          $chpizza = mysqli_real_escape_string($conn,$_POST['pizza']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chpizza'";
          
          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName']; 
          
          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);

        } elseif(isset($_POST['pasta'])) {

          $chpasta = mysqli_real_escape_string($conn,$_POST['pasta']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chpasta'";

          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName'];

          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);

        } elseif(isset($_POST['pap-wors'])) {

          $chpap = mysqli_real_escape_string($conn,$_POST['pap-wors']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chpap'";
          
          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName'];

          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);

        } elseif(isset($_POST['chicken-stir'])) {

          $chchicken = mysqli_real_escape_string($conn,$_POST['chicken-stir']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chchicken'";

          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName'];

          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);


        } elseif(isset($_POST['beef-stir'])) {

          $chbeef = mysqli_real_escape_string($conn,$_POST['beef-stir']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chbeef'";

          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName'];

          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);


        } else {

          $chother = mysqli_real_escape_string($conn,$_POST['other']);

          $queryfood = "SELECT * FROM food WHERE FoodID='$chother'";

          $resultfood = mysqli_query($conn,$queryfood);

          $rowfood = mysqli_fetch_array($resultfood)

          $chpizza = $rowfood['FoodID'];
          $chname =  $rowfood['FoodName'];

          $insertmeal = "INSERT INTO meal (ClientID, Contact, FoodID, FooDName) VALUES ('$clienyid','$clienycontact', '$chpizza', '$chname');";
          $inmeal = mysqli_query($conn,$insertmeal);

        }

           

        echo '<script type="text/JavaScript"> alert("You are leaving this page to the main page"); window.location= "index.php" ; </script>';
      }

      /*if(empty($_POST["eatout"]) || empty($_POST["watchmovie"]) || empty($_POST["watchtv"]) || empty($_POST["listenradio"])) {

        $reat = " Click at least one radio button in row 1 in the table' '";
        $rmovie = "Click at least one radio button in row 2 in the table' '";
        $rtv = "Click at least one radio button in row 3 in the ' ' ";
        $rradio = "Click at least one radio button in row 1 in the table' '";

        echo '<script type="text/javaScript">alert("'.$reat.$rmovie.$rtv.$rradio.'");</script>';
        echo '<script type="text/JavaScript"> window.location= "take_survey.php" ; </script>';

      }else {
        
        $reat = mysqli_real_escape_string($conn,$_POST['eatout']);
        $rmovie = mysqli_real_escape_string($conn,$_POST['watchmovie']);
        $rtv = mysqli_real_escape_string($conn,$_POST['watchtv']);
        $rradio = mysqli_real_escape_string($conn,$_POST['listenradio']);


        echo '<script type="text/JavaScript"> alert("You are leaving this page to the main page"); window.location= "index.php" ; </script>';
      }*/
      


    }

    

    //creat constant values
    define('FIRST', "Strongly Agree");
    define('SEC', "Agree");
    define('THERD', "Neutral");
    define('FOUTH', "Disagree");
    define('FIRTH', "Strongly disagree");

    //creat constant values
    define('EATOUT', "I like to eat out");
    define('WATCHMOVIE', "I like to watch movies");
    define('WATCHTV', "I like to watch TV");
    define('LISTENRADIO', "I like to listen to the radio");
    
   // if(isset)
   
   
  } 

?>