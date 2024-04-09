
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #dbf1f0;
        
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


    .bgpic{
        width: 47%;
        margin: 135px 0px 0px 40px;
    }

    .quo1{
        font-size: 80px;
        font-weight: bold;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        text-transform: uppercase;
  text-rendering: optimizeLegibility;
        float: right;
        margin: -433px 100px 0px 0px;
        color: #131313;
    background-color: #e7e5e4;
    letter-spacing: .15em;
    text-shadow: 
      1px -1px 0 #767676, 
      -1px 2px 1px #737272, 
      -2px 4px 1px #767474, 
      -3px 6px 1px #787777, 
      -4px 8px 1px #7b7a7a, 
      -5px 10px 1px #7f7d7d, 
      -6px 12px 1px #828181, 
      -7px 14px 1px #868585, 
      -8px 16px 1px #8b8a89, 
      -9px 18px 1px #8f8e8d, 
      -10px 20px 1px #949392, 
      -11px 22px 1px #999897, 
      -12px 24px 1px #9e9c9c, 
      -13px 26px 1px #a3a1a1, 
      -14px 28px 1px #a8a6a6, 
      -15px 30px 1px #adabab, 
      -16px 32px 1px #b2b1b0, 
      -17px 34px 1px #b7b6b5, 
      -18px 36px 1px #bcbbba, 
      -19px 38px 1px #c1bfbf, 
      -20px 40px 1px #c6c4c4, 
      -21px 42px 1px #cbc9c8, 
      -22px 44px 1px #cfcdcd, 
      -23px 46px 1px #d4d2d1, 
      -24px 48px 1px #d8d6d5, 
      -25px 50px 1px #dbdad9, 
      -26px 52px 1px #dfdddc, 
      -27px 54px 1px #e2e0df, 
      -28px 56px 1px #e4e3e2;
    }
    .quo2{
        font-size: 60px;
        font-weight: bold;
        font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        text-transform: uppercase;
  text-rendering: optimizeLegibility;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        float: right;
        margin: -260px 100px 0px 0px;
        color: #131313;
    background-color: #e7e5e4;
    letter-spacing: .15em;
    text-shadow: 
      1px -1px 0 #767676, 
      -1px 2px 1px #737272, 
      -2px 4px 1px #767474, 
      -3px 6px 1px #787777, 
      -4px 8px 1px #7b7a7a, 
      -5px 10px 1px #7f7d7d, 
      -6px 12px 1px #828181, 
      -7px 14px 1px #868585, 
      -8px 16px 1px #8b8a89, 
      -9px 18px 1px #8f8e8d, 
      -10px 20px 1px #949392, 
      -11px 22px 1px #999897, 
      -12px 24px 1px #9e9c9c, 
      -13px 26px 1px #a3a1a1, 
      -14px 28px 1px #a8a6a6, 
      -15px 30px 1px #adabab, 
      -16px 32px 1px #b2b1b0, 
      -17px 34px 1px #b7b6b5, 
      -18px 36px 1px #bcbbba, 
      -19px 38px 1px #c1bfbf, 
      -20px 40px 1px #c6c4c4, 
      -21px 42px 1px #cbc9c8, 
      -22px 44px 1px #cfcdcd, 
      -23px 46px 1px #d4d2d1, 
      -24px 48px 1px #d8d6d5, 
      -25px 50px 1px #dbdad9, 
      -26px 52px 1px #dfdddc, 
      -27px 54px 1px #e2e0df, 
      -28px 56px 1px #e4e3e2;
    }
    .line{
        font-size: 20px;
        float: right;
        margin: -95px 135px 0px 0px;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-shadow: 0 0 10px rgb(39 102 237), 0 0 20px rgb(255 255 255), 0 0 30px rgb(253 255 252);
}
    

.container {
      width: 82%;
      margin: -1% 10%;
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
      margin-top: 200px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #e1481e;
    }
    form:hover{
        background-color: #d4e2f3;
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
    #inf{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
    #next{
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-weight: bold;
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
                <!-- <li><a href="webskills2.html">EMI Calculator</a></li> -->
               
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

        <div>
            <img class="bgpic" src="bgpic.png" alt="bgpic">
        </div>
        <div class="quo">
            <p class="quo1">Mann hai,</p>
            <p class="quo2">toh money hai</p>
        </div>

        <div class="line">
            --- Best Money Lending service Made Just For You ---
        </div>

        <div class="container">
        <form action="connect_lastsecond.php" method="post">
            <h2 class="head">BORROWER INFORMATION</h2>
          <label for="loanamount" id="inf">Loan Amount: </label>
          <input type="text" id="loanamount" name="loanamount" required>

          <label for="purpose" id="inf">Purpose of Loan: </label>
          <input type="text" id="purpose" name="purpose" required>

          <label for="duration" id="inf">Loan Duration (In Months):</label>
          <input type="text" id="duration" name="duration"  required>

          <label for="etype" id="inf">Employement Type: </label>
          <select id="etype" name="etype" required>
            <option value="Salaried"  name="etype">Salaried</option>
          <option value="Self Employed"  name="etype">Self Employed</option>
          </select>
      
      
          <label for="income" id="inf">Monthly Income:</label>
          <input type="text" id="income" name="income"  required>

          <label for="interest" id="inf">Interest Rate:</label>
          <select id="interest" name="interest" required>
          <option value="12%"  name="interest">12%</option></select>
          <p>Note: If any wrong information is found your application will be not approved for the loan</p>
          <p>Note: Read all terms and conditions carefully before submitting the application</p>
          
          <input id="next" type="submit" value="SUBMIT ">
        </form>
        </div>


        <footer class="footer-distributed">

<div class="footer-left">

  <h3>LORD'S<span> Captial & Finance</span></h3>

  <p class="footer-links">
    <a href="homepage1.php" class="link-1">Home</a>
    
    
    
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


