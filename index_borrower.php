<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        /* background-color: #dbf1f0; */
    }
    .navi{
        /* border-radius: 40px; */
       background-color: #dbf1f0;
       display: block;
       width: 94%;
       height: 82px;
       margin: 0px -25px;
       padding: 0px 20px;
       position: fixed;
       width: 100%;
    top: 0;
    z-index: 1000;
    }
    nav ul{
        padding-top: 14px;
        float: right;
    }
    .navbar li{
        text-decoration-color: aqua;
        list-style: none;
        display: inline-block;
        padding: 0px 40px;
    }
    .navbar li a{
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-weight: bold;
        font-size: 22px;
        padding: 23px 20px;
    }
    .button{
      background-color: rgb(138, 17, 244);
        color: white;
        font-weight: bold;
        font-size: medium;
        margin: -40px 60px 0px 45px;
        border-radius: 6px;
        padding: 9px 25px;
        cursor: pointer;
    }
    .button:hover:nth-child(1){
            transform: scale(1.1);
        }
    .bttn{
      background-color: rgb(138, 17, 244);
        color: white;
        font-weight: bold;
        font-size: medium;
        margin: -40px 60px 0px 13px;
        border-radius: 6px;
        padding: 9px 25px;
        cursor: pointer;
    }
    .bttn:hover:nth-child(1){
            transform: scale(1.1);
        }
    .navbar li a:hover,
    .navbar li a:active{
        color: rgb(138, 17, 244);
        transition: all 0.4s ease 0s ;
        text-decoration: underline;
    }
    nav .logo{
      float: left;
      /* text-decoration: underline; */
      font-family: verdana;
      font-weight: bold;
      color: rgb(0, 0, 0);
      font-size: 25px;
      margin: -16px 0px 0px 0px;
      padding: 0px 145px;
    }
    nav .logo:hover,
    .nav li a:active{
        color: rgb(138, 17, 244);
    }
    hr{
    margin-top: 29px;
    }
    .cap{
        margin: -19px 10px 10px -40px;
        font-size: 15px;
    }
    .log{
        width: 50px;
    height: 50px;
    margin: 9px 0px 0px -415px;
    }

    .himg{
        margin-top: 47px;
        width: 34%;
    }
    .himages{
        text-align: center;
    }

    .himg3{
        margin-top: -500px;
        width: 32%;
    }
    .himages3{
        text-align: center;
    }

    .himg2{
       margin: -330px 0px 0px 698px;
        width: 7%;
        display: block;
    }
    .caption{
        font-family: verdana;
        text-align: center;
        color: #76755E;
    }
    .sub_cap{
        color:#FF8206;
    }
    .caption_down{
        font-size: 22px;
        text-align: center;
        font-family: cursive;
        margin-top: -1px;
    }





    .container {
      width: 82%;
      margin: 8% 10%;
      overflow: hidden;
    }
    .head{

        text-align: center;
        margin: 35px 0px;
        /* color:blueviolet; */
        text-decoration: underline;
animation: underline 2s infinite;
@keyframes underline {
  to {
    width: 100%;
  }
}
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    form {
        /* background-color: #dbf1f0; */
      /* background-color: #ffffff; */
      padding: 20px;
      margin-top: 10px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #e1481e;
    }
    form:hover{
        background-color: #dbf1f0;
    }

    label {
      display: block;
      margin: 8px 0;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 5px;
    }

    input[type="submit"] {
      width: 100%;
      background-color: blueviolet;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: black;
    }


    .footer-distributed{
  background: #666;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
  margin-top: 70px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: bold 36px verdana;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 35px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:700;
  text-decoration: none;
  font-size: 17px;
  color:  inherit;
  padding: 10px;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 20px;
}

/* .footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
} */

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}


.insta{
  width: 35%;
    float: right;
    margin: 34px 40px 0px 0px;
    background-color: rgb(24 203 180);
    border-radius: 60px;
    padding: 14px;
}
.footer-icons{
  display:flex;
}
#inf{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
#next{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
}
</style>
<body>
    <div>
        <nav class="navi">
            <div class="logo">
             <p>LORD'S</p>
             <p class="cap">CAPITAL AND FINANCE</p>
            </div>
           
            <ul class="navbar">
                <li class="h"><a href="webhome1.html">Home</a></li>
                <li><a href="webskills2.html">EMI Calculator</a></li>
               
                <!-- <li><a href="webabout4.html">About</a></li> -->
                <!-- <a href="mainpage.html"><button class="button">Sign In</button></a> -->
                <!-- <a href="#"><button class="bttn">Log In</button></a> -->
                
             </ul>
             <div> <img class="log" src="logo.png" alt="logo"></div>
         </nav>
     </div>
     <div>
      
     </div>
     <hr>
    <div class="himages">
        <img class="himg" src="himg.png" alt="img">
    </div>
    <div class="himages3">
        <img class="himg3" src="himg3.png" alt="himg3">
        <img class="himg2" src="himg2.gif" alt="himg2">
    </div>
    
    <div class="caption">
        <h1>||  LORD's ARE BEST <span class="sub_cap">MONEY</span> LENDERS  ||</h1>
    </div>
    <h6 class="caption_down">
        Because Your Financial Priorities Are Our Priorities
    </h6>



    <div class="container">
        <form action="connect.php" method="post">
            <h2 class="head">BORROWER INFORMATION</h2>
          <label for="name" id="inf">First Name:</label>
          <input type="text" id="firstname" name="firstname" required>

          <label for="name" id="inf">Last Name:</label>
          <input type="text" id="lastname" name="lastname" required>
      
          <label for="address" id="inf">Address:</label>
          <input type="text" id="address" name="address"  required>
      
          <label for="gender" id="inf">Gender:</label>
          <select id="gender" name="gender" required>
          <option value="Male"  name="gender">Male</option>
            <option value="Female"  name="gender">Female</option>
            <option value="Other" name="gender">Other</option>
          </select>
      
          <label for="email" id="inf">Email:</label>
          <input type="email" id="email" name="email" required>
      
          <input id="next" type="submit" value="NEXT &#8680;">
        </form>
      </div>




      <footer class="footer-distributed">

      <div class="footer-left">

        <h3>LORD'S<span> Captial & Finance</span></h3>

        <p class="footer-links">
          <a href="homepage1.php" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

      
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Mundhwa - Kharadi Rd,</span> Amanora Park Town, Hadapsar, Pune</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91-83083 26267</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:pratappawar8698567744@gmail.com">Lordscapital&finance@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          A new age lending company that strives to “make lending Money smarter
        </p>

        <div class="footer-icons">

          <a href="https://www.instagram.com/_pratap_2.0?igsh=OGQ5ZDc2ODk2ZA=="><img class="insta" src="insta.png" alt=""></a>
          <a href="https://www.facebook.com/pratap.pawar.712714"><img class="insta" src="facebook.png" alt=""></a>
          <a href="#"><img class="insta" src="linkedin.png" alt=""></a>
          <a href="#"><img class="insta" src="twitter.png" alt=""></a>

        </div>

      </div>

    </footer>
</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>