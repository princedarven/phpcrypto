<?php include "cipher.php"?>

<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cipher - Methods </title>
</head>
<body>
    <h4> OBS: For pure-hex the password is not considered </h4>
   <div id="general_div">
        <form action="method.php" method = "POST">
            <label for="text">Input Text:</label><br>
            <input type="text" id="input_text" name="input_text" value=""><br>
            <label for="text">Password:</label><br>
            <input type="text" id="input_password" name="input_password" value=""><br>
    
           
            <label for="text">Cipher type:</label><br>
            <select name= "method" id="method">
     
            <?php
            for ($i = 0 ; $i < 142 ; $i ++)
            {
            ?>
            <option value= "<?php print_r(CipherMethods::getMethod($i))?>" > <?php print_r(CipherMethods::getMethod($i))?></option>
            <?php
            }
            ?>
                <option value= "simple"> pure-hex </option>
            </select>
            <input type="radio" id="encrpyt" name="option" value="encrypt">
            <label for="encrypt">Encrypt</label><br>
            <input type="radio" id="decrypt" name="option" value="decrypt">
            <label for="decrypt">Decrypt</label><br>
            <br> <input id="submit1" type="submit" value="Enviar"><br>
        </form>
   </div>
      
    
</body>
</html>
<?php?>