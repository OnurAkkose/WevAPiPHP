<style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<div class="ickisim">
	<form action="index.php?SK=7" method="post">
  <div class="container">
    <h1>Giriş Yap</h1>
    <p>Email ve şifrenizi giriniz.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="" name="EmailAdresi" id="EmailAdresi" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="" name="Sifre" id="Sifre" required>

    

    
    <button type="submit" class="registerbtn">Giriş</button>
  </div>
<div class="container signin">
    <p>Şifremi  <a href="index.php?SK=8">Unuttum</a>.</p>
  </div>
  <div class="container signin">
    <p>Henüz üye olmadınız mı? <a href="index.php?SK=4">Kayıt Ol</a>.</p>
  </div>
</form>

</div>
