<?php
    /**
    * OUMAIMA SABI
    * DATE:04/05/2022
    */
    require_once 'Projet_home.php';

    

?>
        <div class="content">
                    <!-- Material Design -->
                    <h2 class="content-heading">Service STAH</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Static Labels -->
                            <div class="block">
                                <div class="block-header block-header-default bg-success ">
                                    <h3 class="block-title">Saisir votre avis </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="" method="post" >
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <?php 
                                                                if(isset($_GET['id']))
                                                                    {
                                                                        $id = htmlspecialchars($_GET['id']);
                                                                        $ss = new Projet_Service();
                                                                        $tc = $ss->findById($id);
                                                                        $id1=$tc->getid_pr(); 
                                                                    }
                                                            ?>
                                                            <input type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="super_bv" >
                                                            <label for="register2-username">Superficie Bv</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_amng" size="1">
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                        }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis de l'ABHT Amenagement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rema_bet" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire STAH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rema_stah" rows="4" ></textarea>
                                                            <label for="contact2-msg">Amengaments Proposés</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_stah" size="1">
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                    
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis STAH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_stah" size="1">
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_stah" size="1">>
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ; ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvée par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="stah">
                                                            <i class="fa fa-plus mr-5"></i> Enregistrer
                                                        </button>
                                                        <?php 
                                                            // if(isset($avis_abht1)){ 
                                                            //     echo '<button class="btn btn-alt-success" name="stah">
                                                            //         <i class="fa fa-check mr-5"></i>Avis déjà Ajouté
                                                            //     </button>';
                                                            // }else{
                                                            //     echo '<button type="submit" class="btn btn-alt-success" name="stah">
                                                            //     <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                            // </button>'; 
                                                            // }

                                                        ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                            </div>
                            <!-- END Static Labels -->
                        </div>
                    </div>
                    <!-- END Material Design -->
                </div>

<?php 
    require_once 'Projet_footer.php';
?>
    </body>
</html>