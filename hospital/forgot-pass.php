<!DOCTYPE html>
<html lang="en" style="background-image: url('assets/img/Blue.png');">
<head>
    <title>Godin Electronic Co..</title>

<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;
    }
    body{
/*        background-color: #D9DDDc;*/

    }
    #main{
        width: 40%;
        margin: 50px auto;

    }
    #tab-btn{
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        width: 100%;
        justify-content: center;
    }
    .login,.register{
        text-decoration: none;
        display: block;
        width: 100%;
        background-color: #eee;
        text-align: center;
        color: #000;
        font-size: 25px;
        padding: 10px;
    }
    .active{
        
        background-color: #eee;
        color: #000;
    }
    .content,.other{
        width: 100%; 
        background-color: #828282;
        padding: 20px 30px 30px 30px;
        box-shadow: 2px 2px 5px #333;

    }
    .other{
        display: none;
    }
    .inp,#don_gen{
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        font-size: 20px;
        border: 2px solid #888;
        border-bottom: 5px solid #888;
        background-color: #fff;
        color: #666;
    }
    .inp:focus{
        outline: none;
        border: 2px solid #555;
        border-bottom: 5px solid #555;

    }
    #sub-btn{
        width: 100%;
        padding: 12px;
        border:none;
        font-size: 20px;
        font-weight: bold;
        background-color: #eee;

        color: #000;
        cursor: pointer;
        border-bottom: 5px solid #444;
    }
    #sub-btn:focus{
        outline: none;
}
    #sub-btn:active{
        border: none;
        margin-top: 5px;
}
#forgot{
    font-size: 20px;
    color: #444;
    display: block;
}
h2{
    text-align: center;
    padding-bottom: 15px;
    color: #333;
    font-size: 20px;

}

</style>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
     $(".register").click(function(){
        $(".other").show();
        $(".content").hide();
        $(".register").addClass('active');
        $(".login").removeclass('active');

        });
     $(".login").click(function(){
        $(".content").show();
        $(".other").hide();
        $(".login").addClass('active');
        $(".register").removeclass('active');
    });
            });
  </script>
</head>
<body>
<div id="main">
 <div id="tab-btn">
    <!-- <a href="#" class="login active">login form</a> -->
    <!-- <a href="#" class="register active">Godin Electronic Co.</a> -->

 </div>
<!-- <div class="content">
   <h2>Get Started</h2>
    <form action="checkForgetPass.php" method="post" id="login-box ">
        
        <input type="text" name="username" placeholder="Username" class="inp" required autofocus><br>
        <input type="password" name="password" placeholder="Password" class="inp" required autofocus><br>
        <a href="resetpassword.php" id="forgot">Forgot Password</a><br>
        <input type="submit" name="btnLogin"  id="sub-btn">
        
    </form>

</div> -->
<div class="content">
    <h2>Forget password</h2>
    <form action="conection.php" method="post" id="reg-box">

        
        <input type="email" name="user_name" placeholder="Enter your email" class="inp" required autofocus><br>
        <br>
         <a href="loginform.php">Login?</a>
        <input type="submit" name="" id="sub-btn">

    </form>
</div>
</div>
</body>
</html>
