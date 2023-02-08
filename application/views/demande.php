
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/Articles-Cards-images.css');?>">

<!-- <?php var_dump($entana1); ?>
<?php var_dump($entana2); ?> -->

<div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="<?php  echo base_url('/assets/img/'.$sary1['path']); ?>"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold"><?php echo $entana1['nom']; ?></h2>
                    <p class="my-3"><?php echo $entana1['description']; ?></p>
                    <p class="my-3"><?php echo $entana1['prix']; ?> AR </p>
                    <p class="my-3 text-primary card-text mb-0"><?php echo $user['nom']; ?>  </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2">
           <?php for($i = 0 ; $i<count($entana2);$i++) { ?> 
          
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-50"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="<?php  echo base_url('/assets/img/'.$sary[$i]['path']); ?>"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4><?php echo $entana2[$i]['nom']; ?></h4>
                        <p><?php  echo $entana2[$i]['description'];?></p>
                        <p><?php  echo $entana2[$i]['prix'];?> AR</p>
                      
                        <a href="<?php echo base_url('/entanaControll/addChange/'.$entana1['idEntana'].'/'.$entana2[$i]['idEntana'].'/'.$entana1['idUser']);?>"> <button class="btn btn-primary" type="submit" >Echanger</button> </a>
                    </div>
                </div>
            </div>
        
            <?php } ?>
        </div>
    </div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</div>

