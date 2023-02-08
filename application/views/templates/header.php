<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo  base_url('/assets/css/fontawesome-5/css/all.css');?>">
    <link rel="stylesheet" href="<?php echo  base_url('/assets/css/fontawesome-5/css/all.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url('/assets/css/header.css');?>">
 
    <title>document</title>
</head>
<body>
    <header>
        <div id=tout>
            <div class="enveloppe">

                <div class=bar-menu>                    
                    <ul>
                         <!-- <li> <a href="">   <i class="fas fa-exchange-alt"style="color: white"> </a> </li> -->
                    
                        <!-- <li><i class="fas fa-exchange-alt"style="color: white"   ></i>    </li> -->
                     
                        <li><a href="<?php echo base_url('/entanaControll/getEntana') ?>"><i style="margin-right:5px"class="fas fa-home"style="color: white"   ></i>Mes objets</a> 
                        </li>

                        <li><a href="<?php echo base_url('/routesController/index') ?>"><i style="margin-right:5px" style="color: white" class="far fa-list-alt" ></i>Voir objets</a>
                        </li>
                        
                        <li><a href="<?php echo base_url('/entanaControll/exange') ?>"><i style="margin-right:5px" class="fas fa-list-alt"  style="color: white"></i>Gerer échange</a>
                        </li>
                        
                        <li><a href="<?php echo base_url('/entanaControll/exange') ?>"><i style="margin-right:5px" class="fas fa-search"  style="color: white"></i>Rechercher</a>
                        </li>

                        <li class=active><a href="<?php echo base_url('/logController/logout');?>"><i style="margin-right: 3px;" class="fas fa-sign-out-alt"  style="color: white"></i>Deconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

