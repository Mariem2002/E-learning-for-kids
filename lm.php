<!DOCTYPE html>
<html>
    <head>
        <title>E-LEARNING FOR KIDS</title>
        <style> 
    body
{
   
background-image: url("Winnie-the-Pooh-Piglet-Elephant-Tigar-Cartoon-Kids-game-spraying-water-HD-Wallpaper-2560x1600-1920x1440.jpg");



}
.signup
{

width: 350px; 
font-size: 40px;
left: 50px;

}
p
{
color: #4b0f6e;
font-size: 40px;
}
h1
{
color: #da1fff;
font-size: 60px;
}
input
{

width: 250px; 
font-size: 30px;

}
fieldset{
margin-left
: 300px;
width: 500px;}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  
}


</style>
        <meta charset="utf-8" />


    </head>
    <body>
<form method="post" action="traitement.php">
<fieldset>
<legend><h1>                                      Sign up</h1></legend>
<p><label>                             Name</label> : <input type="text" name="pseudo" id="pseudo" required placeholder="Ex
: Mariem" size="30" maxlength="10" />
<br />
<br />
<label for="pass">                     Passwod :</label>
<input type="password" name="pass" id="pass" 
placeholder="Password" required />
<br />
<BR />
<label for="email">                     E-mail :</label>

<input type="email" name="email" id="email" placeholder="Name@domain" required />

<form method="post" action="traitement.php" required>
<p>
                                        Age :<br />
            <label
             for="3..7"><input type="checkbox" name="3..7" id="3..7"  />   3..7</label><br />
            <label
            for="8..12"><input type="checkbox" name="8..12" id="8..12"  />   8..12</label><br />
           <label for="older than 12"> <input type="checkbox" name="older than 12" id="older than 12"  />  
            older than 12</label>
            <br />
            <P><input type="submit" value="Sign up" class="signup" action="traitement.php" /></p>

</p>
</form>

</body>
</html>