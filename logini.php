<?php include 'components/header.php' ?>   

	<div class="main-login">
      <div class="containeri">

        <div class="link-container">
          <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
          <a id="b" href="#" onclick="changeForm(1)">Register</a>
        </div>
        
        
        <form method="POST" action="logic/auth.php" id="mainForm">
         <div class="login forms form-style">
           <h1>-Kycuni ne logarin tuaj-</h1>
          
            <h3>Username</h3>
            <input type="text" id="username" name="username" class="input" placeholder="Username..." />
          
            <h3>Password</h3>
            <input type="password" id="password" name="password" class="input" placeholder="Password..." />
          
            <input id="submit" name="login-btn" type="submit" class="input submit" value="Kycuni" onclick="validate(0)" />
          </div>
          
          <div class="register forms hidden" id="form2">
            <h2>-Regjistrohuni tani!-</h2>
          
            <h3>Emri</h3>
            <input type="text" class="input" name="register-emri" placeholder="Emri..." />
          
            <h3>Mbiemri</h3>
            <input type="text" class="input" name="register-mbiemri" placeholder="Mbiemri..." />
          
            <h3>Username</h3>
            <input type="text" class="input" name="register-username" placeholder="Username..."/>
          
            <h3>Password</h3>
            <input type="password" class="input" name="register-passwordi" placeholder="Password..."/>
          
            <input id="submit" name="register-btn" type="submit" class="input submit" value="Register" onclick="validate(1)" />
          </div>
        </form>
      </div>
     
    </div>
      
<?php include 'components/footer.php' ?>   