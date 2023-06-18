<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservation</title>
    <link rel="stylesheet" href="reservasi.css" />
</head>
<body>
    <div class="container">
        <div class="Reservasi">
         <form action="reservasics.php" method="post">
         <img src="asset/logo.jpg" alt="" />
          <h1>New Reservation</h1>
          <hr />

          <input type="text" placeholder="ID Reservation" autocomplete="off" name="idreservasi" />
          <input
            type="text"
            placeholder="Name"
            autocomplete="off"
            name="name"
          />

          <input
            type="text"
            placeholder="Phone Number"
            autocomplete="off"
            name="phone_number"
          />

          <input
            type="date"
            placeholder="Date"
            autocomplete="off"
            name="date"
          />

          <!-- <label><br>Time Zone</label> -->
          <select name="time">
		    <option>08:00 - 12:00</option>
		    <option>13:00 - 17:00</option>
		    <option>18:00 - 22:00</option>
            </select>
        
            <!-- <label><br>Type</label> -->
          <select name="co_type">
		    <option>Coworking Space</option>
		    <option>Meeting Room</option>
		    <option>Function Room</option>
            </select>

            <input type="number" 
            min="1" 
            name="num_guests" 
            placeholder="Guests" 
            required="required">

            <label class="checkbox-inline">
            <input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
            </label>

          <button>Reservation</button>
         </form>
        </div>
    </div>
    
</body>
</html>