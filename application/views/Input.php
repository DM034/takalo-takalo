   <?php include('/errors/errors.php'); ?>
   <br>
   <br>
   <br>
   <div class="Search">
        <!-- <?php echo form_open('entanaControll/addEntana','class="form",method="get')  ?> -->
            <form action="<?php echo base_url('entanaControll/addEntana');?>" method="post" enctype="multipart/form-data">
           <p> <input type="file" name="img" id="image"> </p>
           <p> <input type="text" name="nom" id="" placeholder="Nom"></br> </p>
           <p> <input type="textarea" name="desc" id="" placeholder="Description"></br>  </p>
           <p> <input type="number" name="prix" id="number1" placeholder="Prix"> </p>
           <p> <input type="submit" value="Ajouter" class="bouton">     </p>
        </form>
        <?php if(isset($_GET['error'])) { ?> 
                    <p><?php echo $error[$this->input->get('error')]; ?></p>
                    <?php } ?>
                        <?php if(validation_errors()!=" ") { ?>
             <p><?php echo validation_errors() ?></p>
            <?php } ?>
                    
    </div>
