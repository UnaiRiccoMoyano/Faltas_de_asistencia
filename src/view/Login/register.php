<?php 
include "../../../vendor/autoload.php";
?>
<!DOCTYPE HTML>
<html>

<head>

    <link rel="stylesheet" href="register.css">

</head>

<body>
        <header>
                <img src="img/logoF5.png" alt="FactoriaF5">
        </header>
<main>

    <p><span class="error">* required field</span></p>
    <form name="form1" method="post" action="../../model/Register_user.php">
        <div id="contenedor">
                <div id="palabra1"><h3>Nombre:</h3></div> <div id="input1"><input type="text" name="name" required>
                <span class="error">* <?php echo $nameErr;?></span></div> 
                
                <div id="palabra2"><h3> Apellido:</h3></div> <div id="input2"><input type="text" name="surname" required>
                <span class="error">* <?php echo $apellidoErr;?></span></div> 
                
                <div id="palabra3"><h3>DNI:</h3></div> <div id="input3"><input type="text" name="dni" required>
                <span class="error">*<?php echo $dniErr;?></span></div> 
                
                <div id="palabra4"><h3>E-mail:</h3></div> <div id="input4"><input type="email" name="email" required>
                <span class="error">* <?php echo $emailErr;?></span></div> 

                <div id="palabra8"><h3>Password:</h3></div> <div id="input8"><input type="password" name="password" required>
                <span class="error">* <?php echo $passwordErr;?></span></div>
                    <div id="input9"><input type="submit" name="submit" value="Submit"></div>

        </div>
       
    </form>
</main>
</body>

</html>