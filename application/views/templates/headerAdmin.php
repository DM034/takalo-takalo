<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>">
    <link rel="styleshhet" href="<?php echo base_url('assets/css/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-5/css/all.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">

    <title>document</title>
</head>
<body>
    <header>
        <div id=tout>
            <div class="enveloppe">

                <div class=bar-menu>                    
                    <ul>
                        
                    
                        <li><a href="<?php echo base_url('/routesController/gestionCat');?>"><i style="margin-right:5px" class="fas fa-list-alt"  style="color: white"></i>Gerer categorie</a>
                        </li>

                        <li><a href="<?php echo base_url('/routesController/indexAdmin');?>"><i style="margin-right:5px" class="fas fa-database"  style="color: white"></i>Voir Statistiques</a>
                        </li>

                        <li class=active><a href="<?php echo base_url('/logController/logout');?>"><i style="margin-right: 3px;" class="fas fa-sign-out-alt"  style="color: white"></i>Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
