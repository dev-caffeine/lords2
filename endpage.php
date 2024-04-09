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
        /* background-color: red; */
        background-color: #e4e4e4;
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
    .tick{
        width: 22%;
        margin: 90px 0px 0px 595px;
       
    }
    .greet{
        font-size: 50px;
        text-align: center;
        font-family: Verdana;
        font-weight: bold;
    }
    .line1{
        margin-top: -10px;
        text-align: center;
        font-family: Verdana;
        font-size: 33px;
    }
    .bttn{
      background-color: rgb(138, 17, 244);
        color: white;
        font-weight: bold;
        font-size: medium;
        margin: 10px 277px 0px 337px;
        border-radius: 6px;
        padding: 14px 14px;
        cursor: pointer;
    }
    .bttn:hover:nth-child(1){
            transform: scale(1.1);
        }
        .bttn:hover:nth-child(2){
            transform: scale(1.1);
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
</style>
<body>
<div>
    <nav class="navi">
        <div class="logo">
         <p>LORD'S</p>
         <p class="cap">CAPITAL AND FINANCE</p>
        </div>
       
        <ul class="navbar">
            <li class="h"><a href="homepage1.php">Home</a></li>
            <!-- <li><a href="webskills2.html">Skills</a></li>
            <li><a href="webabout4.html">About</a></li> -->
            <!-- <a href="index.php"><button class="button">Login</button></a> -->
            <!-- <a href="#"><button class="bttn">Log In</button></a> -->
            
         </ul>
         <div> <img class="log" src="logo.png" alt="logo"></div>
     </nav>
 </div>
 <div>
  
   </div>
   <hr>

   <div>
        <img class="tick" src="greentick.png" alt="greentick">
   </div>
   <div>
        <p class="greet">
            CONGRATULATIONS!
        </p>
        <p class="line1">YOUR APPLICATION HAS BEEN SUCCESSFULLY SUBMITTED</p>
   </div>
   <div>
            <a href="homepage1.php"><button class="bttn">Back to Home</button></a>
           <a href="whatsnext.php"> <button class="bttn">What's Next?</button></a>
   </div>

   <footer class="footer-distributed">

      <div class="footer-left">

        <h3>LORD'S<span> Captial & Finance</span></h3>

        <p class="footer-links">
          <a href="homepage1.html" class="link-1">Home</a>
          
          <a href="contactpage.html">Contact</a>
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
          <a href="https://x.com/_Pratap_7744?t=NrsdsdA4PejmZ-NP_921UQ&s=09"><img class="insta" src="twitter.png" alt=""></a>

        </div>

      </div>

    </footer>
   </body>
</html>
