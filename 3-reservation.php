<!-- <!DOCTYPE html>
<html>

<head>
  <title>Service Booking Page</title>
  <meta charset="utf-8">
  <link href="3-theme.css" rel="stylesheet">
  </script>
</head>

<body>
  <?php


  ?>
  <setion class="my-5">
    <div class="py-5">

      <h2 class="text-center">Book Your Service</h2>
    </div>

  </setion>

  <form action="userinfodata.php" method="post" target="_self">
    <label>Name</label>
    
    <label>Email</label>
    <input type="text" required name="name" autocomplete="off" class="form-control">
    <input type="email" required name="email" autocomplete="off" class="form-control">

    <label>Mobile Number</label>
    
    <label>Vehicle RC</label>
    <input type="text" required name="mobile" autocomplete="off" class="form-control">
    <input type="text" name="rc" autocomplete="off" class="form-control">

    <label>Problem</label>
    <input type="text" name="problem" autocomplete="off" class="form-control">

    <?php

    $mindate = date("Y-m-d");
    ?>
    <label>Service Reservation Date</label>
    <input type="date" required name="date" min="<?= $mindate ?>">

    <label>Reservation Slot</label>
    <select name="slot">
      <option value="slot1">09 AM - 11 AM</option>
      <option value="slot2">11 AM - 01 PM</option>
      <option value="slot3">02 PM - 04 PM</option>
      <option value="slot4">04 PM - 06 PM</option>
    </select>

    <input type="submit" value="Submit">
  </form>
</body>

</html> -->






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Hotel Creation Form</title>
  <link rel="stylesheet" href="./3-theme.css">
</head>

<body>
<?php


?>
  <div class="main">
    <div class="page1">


      <div class="package">
        <div class="image-section">
          <img src="https://preview.thenewsmarket.com/Previews/CNHA/StillAssets/1920x1080/630551_v3.jpg" alt="">
        </div>
        <div class="form-section">
          <h2>Book Your Service</h2>
          <form action="userinfodata.php" method="post" target="_self">
            <div style="display: flex; gap: 1vw;">
              <input type="text" placeholder="Name" required name="name" autocomplete="off">
              <input type="email" placeholder="Email" required name="email" autocomplete="off">
            </div>
            <div style="display: flex; gap: 1vw;">
              <input type="text" placeholder="Mobile-no" required name="mobile" autocomplete="off" class="form-control">
              <input type="text" name="rc" placeholder="Vehical-Rc" autocomplete="off" class="form-control">
            </div>

            <?php

            $mindate = date("Y-m-d");
            ?>
            <div style="display: flex; gap: 1vw;">
              <input type="text" placeholder="problem" name="problem" autocomplete="off" class="form-control">
              <input type="date" required name="date" min="<?= $mindate ?>">
            </div>
            <select class="submitButton2" id="destination" name="destination" required>
              <option value="">Select your Choise</option>
              <option value="slot1">09 AM - 11 AM</option>
              <option value="slot2">11 AM - 01 PM</option>
              <option value="slot3">02 PM - 04 PM</option>
              <option value="slot4">04 PM - 06 PM</option>
            </select>
            <input class="submitButton" type="submit" value="Submit">
            
          </form>
        </div>
      </div>
    </div>
</body>

</html>