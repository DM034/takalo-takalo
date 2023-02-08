<!-- <?php var_dump($sary); ?>
<?php var_dump($item); ?>
<?php var_dump($users); ?> -->
   <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/Articles-Cards-images.css');?>">

    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Les listes des objets en echange</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
        <?php for($i = 0;$i < count($item);$i++) { ?>
            <div class="col">
                <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo base_url('/assets/img/'.$sary[$i]['path']); ?>">
                    <div class="card-body p-4">
                        <p class="text-primary card-text mb-0">Article</p>
                        <span style="float:left;">
                        <h4 class="card-title"> <?php echo $item[$i]['nom']; ?></h4>
                        <p class="card-text"><?php echo $item[$i]['description']; ?></p>
                        <p class="card-text"><?php echo $item[$i]['prix']; ?> AR</p>
                        <div class="d-flex">
                            <div>
                                <p class="fw-bold mb-0"><?php echo $users[$i]['nom']; ?></p>
                                <!-- <p class="text-muted mb-0">Erat netus</p> -->
                                <?php if(isset($percent)) { ?>
                                <p>    <a href="<?php echo base_url('/entanaControll/addChange/'.$item[$i]['idEntana'].'/'.$id.'/'.$users[$i]['idUser']);?>">  <button class="btn btn-primary" type="submit" >Echanger</button> </a> </p>
                                <?php } else{ ?>
                                 
                                <p> <a href="<?php echo base_url('/entanaControll/demande/'.$item[$i]['idEntana']); ?>"><button class="btn btn-primary" type="submit" >Echanger</button> </a> </p>
                                <?php } ?>
                            </div>
                        </div>
                        </span>
                        <span style="float:right;">
                        <?php if(isset($percent)) { ?>
                        <h5  class="card-title"> <?php echo $percent[$i] ?> %</h5>
                        <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
