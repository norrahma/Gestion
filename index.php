<!DOCTYPE html>
<html>
<head>
      <title> Gestion de stock</title>
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
 <div>    
    <p><img class="imagflot" src="images/login_icon.png" alt="login"/> Authentification <p>

    <form action="confi.php" method="post">
  
    <label for="login">Login </label><br/>
    <input type="text" name="login" id="login" placeholder="Your login.." required="required"><br/>

    <label for="password"> Password </label><br/>
    <input type="password" name="password" id="password" placeholder="Your password..." required="required"><br/>
	
    <label for="categorie"> Catégorie</label><br/>
    <select id="categorie" name="categorie">
      <option value="Administrateur"> Administrateur </option>
      <option value="Employe"> Employé </option>
    </select>
  
    <input type="submit" value="Se connecter">
  </form>
</div>		
       
</body>
</html>


