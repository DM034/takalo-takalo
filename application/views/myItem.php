<!-- <?php var_dump($item); ?> -->
<!-- <?php var_dump($sary); ?> -->
<br>
<br>
<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/Articles-Cards-images.css');?>">
<div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>ajouter des objets...</h2>
                <p class="w-lg-50">
                    <div class="add">
                        <a href="<?php echo base_url('/routesController/addItem'); ?>" title="Ajouter une image"><button class="Ajout">+</button></a>
                    </div>
                </p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <?php for($i = 0;$i < count($item);$i++) { ?>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo base_url('/assets/img/'.$sary[$i]['path']); ?>">
                    <div class="card-body p-4">
                        <!-- <p class="text-primary card-text mb-0">Article</p> -->
                        <span style="float:left;">
                        <h4 class="card-title"> <?php echo $item[$i]['nom']; ?></h4>
                        <p class="card-text"><?php echo $item[$i]['description']; ?></p>
                        <p class="card-text"><?php echo $item[$i]['prix']; ?> AR</p>
                        </span>
                        <span style="float:right;">
                        <p class="card-title"><a href="<?php echo base_url('/entanaControll/getEntanaBynb/'.$item[$i]['idEntana'].'/10'); ?>"> +/- 10% </a> </p>
                        <p class="card-title"><a href="<?php echo base_url('/entanaControll/getEntanaBynb/'.$item[$i]['idEntana'].'/20'); ?>"> +/- 20% </a> </p>
                        </span>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>