<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CheckOut Page</title>
  <link rel="stylesheet" href="stylecheckout.css">

</head>
<body>

<div class="mainscreen">
   
      <div class="card">
        <div class="leftside">
          <img
            src="https://i.pinimg.com/originals/18/9d/dc/189ddc1221d9c1c779dda4ad37a35fa1.png"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
          <form action="">
           
            <p>Full Name</p>
            <input type="text" class="inputbox"  />
            <p>Contact No.</p>
            <input type="text" class="inputbox"  />
            <p>Card Number</p>
            <input type="number" class="inputbox" name="card_number"  />

            <p>Card Type</p>
            <select class="inputbox" name="card_type" >
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa Card</option>
              <option value="RuPay">Metrobank</option>
              <option value="MasterCard">Gcash MasterCard</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date"  />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv"  />
        </div>
            <p></p>
            <button type="submit" class="button">CheckOut</button>
            <button type="submit" class="button" href="home.php">CheckOut</button>
          </form>
        </div>
      </div>
    </div>

  
</body>
</html>
