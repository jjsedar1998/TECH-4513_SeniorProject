

  <div class="mobile-bottom-navigation">

    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <button class="action-btn">
      <ion-icon name="bag-handle-outline"></ion-icon>

      <span class="count">0</span>
    </button>

    <button class="action-btn">
      <ion-icon name="home-outline"></ion-icon>
    </button>

    <button class="action-btn">
      <ion-icon name="heart-outline"></ion-icon>

      <span class="count">0</span>
    </button>

    <button class="action-btn" data-mobile-menu-open-btn>
      <ion-icon name="grid-outline"></ion-icon>
    </button>

  </div>



<div>
  <form method = "POST" action = "http://eve.kean.edu/~kirkpatc/receiver2.php">

    <input type = "hidden" name = "recipient" value = "Candy Paradise">
    <input type = "hidden" name = "subject"  value = "Feedback Form">

<form name="myform" action="" method="POST" onsubmit="return validForm()"> 
    <div class="contactform">
      <div style="text-align:center">
        <h1>Contact Us</h1>
        <p>Give us a complient or some feedback! </p>
      </div>
      <div class="row">
        <div class="column">
          <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
    
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."> 
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email..">
              
    
            <label for="subject">Subject</label>
            <textarea id="comments" name="comments" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
            </form>  
        </div>
<style>
input[type=text], [type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: mediumpurple;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: deeppink;
}


.contactform {
  position: relative;    
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 5px;
  z-index:2;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom:auto;
  margin-top:3%;    
  width: 50%;
  animation-name: gradient;
  animation-duration: 3s;
  animation-iteration-count: infinite;  
    
}
    
.contactform:hover { 
 animation-name: gradient;
 animation-duration: 15s;
 animation-iteration-count: infinite;    
    
   
}


.column {
  float: center;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
    
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: auto;
    margin-top:0;
  }
}


@keyframes gradient {
  0%   {background-color: #D78DDB;}
  20%   {background-color: #7AF2C3;}
  40%  {background-color: #759CEC;}
  60%   {background-color: #23F2EB;}
  80%  {background-color: #F27723;}       
  100% {background-color: #AD3BD7;}
}


  body {
  background-image: url('./assets/candy2.png');

  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
  </style>

  </html>