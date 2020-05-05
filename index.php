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
    $hello_name= "hello ";
    $nameErr = $lnameErr = $addressErr = $cityErr = $statErr = $zipErr ="";
    $user_fname =  $user_lname = $address = $city= $state = $zip ="";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user_Name=filter_var($_POST['firstName'], FILTER_SANITIZE_NUMBER_INT);
        if (empty($_POST["fname"])) {
            $nameErr = "*First name is required";
        } if (empty($_POST["lname"])) {
            $lnameErr = "*Last name is required";
        } if (empty($_POST["address"])) {
            $addressErr = "*Address is required";
        } if (empty($_POST["city"])) {
            $cityErr = "*City is required";
        } if (empty($_POST["state"])) {
            $state = "*State is required";
        } if (empty($_POST["zip"])) {
            $zipErr = "*Zipcode is required";
        } else {
            return "";
        }
    }

     ?>
 
  <h1>Practice with PHP forms</h1>
  <div class="container" id="form-container">
    <form method="post" onsubmit="showHide(); return false;">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstName">First name</label>
          <input type="text" name="fname" class="form-control" id="firstName" value="<?php echo $_POST['fname']?>" />
          <span class="form-error"><?php echo $nameErr;?></span>
        </div>
        <div class="form-group col-md-6">
          <label for="lastName">Last name</label>
          <input type="text" name="lname" class="form-control" id="lastName" value="<?php echo $_POST['fname']?>" />
          <span class="form-error"><?php echo $lnameErr;?></span>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $_POST['address']?>" />
        <span class="form-error"><?php echo $addressErr;?></span>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control" id="inputCity" value="<?php echo $_POST['city'];?>" />
          <span class="form-error"><?php echo $cityErr;?></span>
        </div>
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
          <span class="error"><?php echo $stateErr;?></span>
        </div>
      </div>
  
      <button name="data" type="submit" class="btn btn-primary" id="formSubmitBtn">Submit information</button>
    </form>

<div class="user-response">
    
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Is your information correct?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
  </div> 
 

</body>

</html>