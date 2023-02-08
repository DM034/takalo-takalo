<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Inscription.css')?>">
    <title>Inscrivez-vous</title>
</head>

<body>

    <div class="login">
        <h1>Inscrivez-vous!</h1>
        <?php echo form_open('logController/sign','class="form"') ?>
            <input type="text" name="user" id="" placeholder="Entrez votre nom"><br>
            <input type="email" name="mail" id="" placeholder="Entrez votre mail"><br>
            <input type="password" name="pass" id="" placeholder="Tapez votre mot de passe"><br>
            <input type="password" name="passconf" id="" placeholder="Confirmez votre mot de passe"><br>
            <input type="submit" value="S'inscrire" class="Inscription">
        </form>
        <?php if(isset($_GET['error'])) { ?> 
                    <p><?php echo $error[$this->input->get('error')]; ?></p>
                    <?php } ?>
                        <?php if(validation_errors()!=" ") { ?>
             <p><?php echo validation_errors() ?></p>
            <?php } ?>
                    
    </div>


</body>
