
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/Projects-Grid-Horizontal-images.css');?>">



    <div class="container" style="margin-top: 150px; margin-left: 143px;">
        <h1 style="margin-bottom: 50px;">Vos Echanges !</h1>
    <?php for($i =0 ;$i<count($entana1);$i++) { ?>
        <div class="row">
            <div class="col-md-8 col-lg-7">
                <div class="row gy-4 row-cols-1 row-cols-md-2" style="width: 973px;">
                    <div class="col-lg-5">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;width: 179.578px;" src="<?php echo base_url('/assets/img/'.$sary1[$i]['path']); ?>" width="177" height="200"></div>
                            <div class="py-4 py-lg-0 px-lg-4" style="width: 386.75px;">
                                <h4><?php echo $entana1[$i]['nom']; ?></h4>
                                <p><?php echo $entana1[$i]['description']; ?></p>
                                <p> <?php echo $entana1[$i]['prix']; ?> AR</p>
                                <p>VOTRE ITEM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;width: 179.578px;" src="<?php echo base_url('/assets/img/'.$sary2[$i]['path']); ?>" width="177" height="200"></div>
                            <div class="py-4 py-lg-0 px-lg-4" style="width: 386.75px;">
                                <h4><?php echo $entana2[$i]['nom']; ?></h4>
                                <p><?php echo $entana2[$i]['description']; ?></p>
                                <p> <?php echo $entana2[$i]['prix']; ?> AR</p>
                                <p><?php echo $users[$i]['nom']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-top: 95px;padding-bottom: 0px;margin-right: 0px;">
                <p>
                    <a href="<?php echo base_url('/entanaControll/acceptChange/'.$id[$i]['idEchange']);?>">
                    <button class="btn btn-primary" type="button" style="margin-left: 172px;padding: 7px 12px;margin-bottom: 13px;background: var(--bs-green);">
                    Accepter
                    </button>
                    </a>
                </p>
                <p>
                    <a href="<?php echo base_url('/entanaControll/declineChange/'.$id[$i]['idEchange']);?>">
                    <button class="btn btn-primary" type="button" style="margin-left: 171px;background: var(--bs-red);width: 90.25px;">
                    Refuser
                    </button>
                    </a>
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
