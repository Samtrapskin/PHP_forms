<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>PHP Forms</title>
  <link rel="stylesheet" href="style.css">

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="js/submit.js"></script>
  <!-- bootstrap javascript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>



<body>


  <?php 
   
    $nameErr = $lnameErr = $addressErr = $cityErr = $statErr = $zipErr ="";
    $user_fname =  $user_lname = $address = $city= $state = $zip ="";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user_Name=filter_var($_POST['firstName'], FILTER_SANITIZE_NUMBER_INT);
        if (empty($_POST["fname"])) {
          
            $nameErr = "first name is required";
        } if (empty($_POST["lname"])) {

            $lnameErr = "*Last name is required";
        }  if (empty($_POST["city"])) {

            $cityErr = "*City is required";
        }else {
            return "";
        }
    }
   
     ?>

  <h1>Practice with PHP forms</h1>
  <div class="container" id="form-container">
    <form method="post" id="superForm">
      <div class="form-row">

        <div class="form-group col-md-6">
          <p> * Indicates required field</p>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First name</label>
          <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $_POST['fname']?>" />
          <span class="form-error"><?php echo $nameErr;?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last name</label>
          <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $_POST['lname']?>" />
          <span class="form-error"><?php echo $lnameErr;?></span>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St"
          value="<?php echo $_POST['address']?>" />
        <span class="form-error"><?php echo $addressErr;?></span>
      </div>
  </div>
      <div class="form-row">
        
        <div class="form-group col-md-4">
          <label for="inputState">State</label>

          <select id="inputState" name="state" class="form-control">
            <option selected>Choose...</option>
            <option>Minnesota</option>
            <option>Wisconson</option>
            <option>California</option>
            <option>Washington</option>
            <option>Texas</option>
          </select>
        </div>
        </div>
 

  <button name="data" type="submit" class="btn btn-primary" id="formSubmitBtn">Enter</button>
  </form>

  <div class="user-response">


    <p id="greeting">Confirm your info</p>
    <p class="conf-info"><?= ($_POST["fname"]) . ' ' .  ($_POST["lname"]);?></p>
    <p class="conf-info"><?= ($_POST['address']);?></p>
    <p class="conf-info"><?= ($_POST['city']);?></p>
    <p class="conf-info"><?= ($_POST['state']);?></p>
    <div class="response-buttons">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Submit info</button>

      <button type="button" class="btn btn-danger">Incorrect info</button>
    </div>
  </div>
  </div>


  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thank you <?= ($_POST["fname"]) . ' ' .  ($_POST["lname"]);?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Your information has been sucsessfullt entered!</p>
      </div>
      <div class="modal-footer">
        <button onClick="window.location.href=window.location.href" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>