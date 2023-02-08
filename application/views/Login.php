<?php
    include("errors/errors.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshhet" href="<?php echo site_url('/assets/css/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/fontawesome-5/css/all.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/Login.css');?>">
   
    <title>Log in</title>
</head>
<body>

    
    <div class="log">
        <h1>Login</h1>
        <form action="<?php echo base_url('logController/Check');?>" method="post">
            <div class="inputo">
                <div id=one>
                    <i class="fas fa-user" style="color: grey"></i>
                    <input type="text" name="user" placeholder="Adresse Email" size="32"  value="<?php echo set_value('username'); ?>"></input>
                </div>

                <div id=two>
                    <i class="fas fa-lock" style="color: grey"></i>
                    <input type="password" name="pass" placeholder="Mot de passe" size="32" ></input>
                </div>
            </div>
            <div class="content_but">
                <div id=three>
                    <input type="submit" class="toi" value="Se connecter">
                    </form>
                </div>
                <div id=four>
                    <a href="<?php echo base_url('/welcome/signup'); ?>"><input class="to" value="S'inscrire"></a>
                </div>
                <?php if(isset($_GET['error'])) { ?> 
                    <p><?php echo $error[$this->input->get('error')]; ?></p>
                <?php } ?>
                <?php if(validation_errors()!=" ") { ?>
                    <p><?php echo validation_errors() ?></p>
                <?php } ?>
            </div>
        </form>
    </div>
</html>