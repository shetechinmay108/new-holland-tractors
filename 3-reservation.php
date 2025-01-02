<!DOCTYPE html>
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
      <input type="text" required name="name" autocomplete="off" class="form-control">

      <label>Email</label>
      <input type="email" required name="email" autocomplete="off" class="form-control" >

      <label>Mobile Number</label>
      <input type="text" required name="mobile" autocomplete="off" class="form-control" >

      <label>Vehicle RC</label>
      <input type="text" name="rc" autocomplete="off" class="form-control">

      <label>Problem</label>
      <input type="text" name="problem" autocomplete="off" class="form-control" >

      <?php
      // @TODO - MINIMUM DATE (TODAY)
      // $mindate = date("Y-m-d", strtotime("+2 days"));
      $mindate = date("Y-m-d");
      ?>
      <label>Service Reservation Date</label>
      <input type="date" required name="date" min="<?=$mindate?>">

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
</html>