<?php
  //require("./config/server.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Stripe link -->
    <script src="https://js.stripe.com/v3/"></script>

    <title>Document</title>
</head>

<body>
  <div class="container d-flex justify-content-center mt-5 mb-5">
    <form action="insert.php" method="POST" id="form">
      <div class="row g-3">
        <div class="col-md-6">  
          <span>Payment Method</span>
          <div class="card">
            <div class="accordion" id="accordionExample">
              
              <!-- Paypal or Credit Card -->
                <div class="card">
                  <div class="card-header p-0" id="headingTwo">
                    <h2 class="mb-0"></h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <input type="text" class="form-control" placeholder="Paypal email">
                    </div>
                  </div>
                </div>

                <!-- Cards Images -->
                <div class="card">
                  <div class="card-header p-0">
                    <h2 class="mb-0">
                      <button class="btn btn-light btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex align-items-center justify-content-between">

                          <span>Credit card</span>
                          <div class="icons">
                            <img src="https://i.imgur.com/2ISgYja.png" width="30">
                            <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                            <img src="https://i.imgur.com/35tC99g.png" width="30">
                            <img src="https://i.imgur.com/2ISgYja.png" width="30">
                          </div>
                          
                        </div>
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body payment-card-body">
                      
                      <!-- Card Number -->
                      <span class="font-weight-normal card-text">Card Number</span>
                      <div class="input">

                        <i class="fa fa-credit-card"></i>
                        <input type="text" class="form-control" class="card_number" id="card_number" name="card_number" placeholder="0000 0000 0000 0000">
                        
                      </div> 

                      <div class="row mt-3 mb-3">

                        <div class="col-md-6">
                          <!-- Exp Date -->
                          <span class="font-weight-normal card-text">Expiry Date</span>
                          <div class="input">

                            <i class="fa fa-calendar"></i>
                            <input type="text" class="form-control" class="exp_date" id="exp_date" name="exp_date" placeholder="MM/YY">
                            
                          </div> 
                          
                        </div>


                        <div class="col-md-6">
                          <!-- CVV -->
                          <span class="font-weight-normal card-text">CVV</span>
                          <div class="input">

                            <i class="fa fa-lock"></i>
                            <input type="text" class="form-control" class="cvv"  id="cvv" name="card_cvv" placeholder="000">
                            
                          </div> 
                          
                        </div>
                        

                      </div>

                      <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                      
                  
                    </div>
                  </div>
                </div>
              
            </div>
            
          </div>

        </div>

        <div class="col-md-6">
            <span>Summary</span>

            <div class="card">

              <div class="d-flex justify-content-between p-3">

                <div class="d-flex flex-column">

                  <span>Bill <i class="fa fa-caret-down"></i></span>
                  <div class="d-flex justify-content-between">
                    
                  </div>
                </div>

                <div class="mt-1">
                  <sup class="super-price">R49.99</sup>
                  <span class="super-month">/Post</span>
                </div>
                
              </div>

              <hr class="mt-0 line">

              <div class="p-3">
                <div class="d-flex justify-content-between">

                  <span>Vat <i class="fa fa-clock-o"></i></span>
                  <span>-15%</span>
                  
                  
                </div>
              </div>

             

              <hr class="mt-0 line">


              <div class="p-3 d-flex justify-content-between">

                <div class="d-flex flex-column">

                  <span>Today you pay(South African ZAR)</span>
                  
                  
                </div>
                <span>R49.99</span>

              </div>

              
              
              
            </div>
        </div>
        
      </div>
    </form>
  </div>
  <form action="./stripe.php" method="POST">
    <button type="submit" class="btn btn-primary btn-block free-button" id="checkout-button">Checkout</button>
  </form>
  <script src="./valid.js"></script>
</body>
</html>