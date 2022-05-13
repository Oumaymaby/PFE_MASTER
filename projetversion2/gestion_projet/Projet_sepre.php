<?php
    /**
    * OUMAIMA SABI
    * DATE:04/05/2022
    */
    require_once 'Projet_home.php';

    

?>
        <div class="content">
                    <!-- Material Design -->
                    <h2 class="content-heading">Service SEPRE </h2>
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
                                            <form action="projet_avis.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
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
                                                            <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="orig_aep" size="1">
                                                                <option>...</option>
                                                                <?php
                                                                    $ss = new OrigineAep_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="register2-username">Origine de l'eau potable </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="besoin_domes" >
                                                            <label for="register2-username">Besoin en eau domestique</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="speci_autre" rows="4"  ></textarea>
                                                            <label for="contact2-msg">Specifier si autre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="besoin_irr" rows="4"  ></textarea>
                                                            <label for="contact2-msg">Besoin en eau d'irrigation</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" > </textarea>
                                                            <label for="contact2-msg">Remarques de BET sur les besoins en eau</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_sepre" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarques Supplémentaires du SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sepre" size="1">
                                                                <option>...</option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0].">".$row[1]."</option>" ;  
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="sepre">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                        <?php 
                                                            // if($avis_sepre1!=="0"){ 
                                                            //     echo '<button class="btn btn-alt-success" name="sepre">
                                                            //         <i class="fa fa-check mr-5"></i>Avis déjà Ajouté
                                                            //     </button>';
                                                            // }else{
                                                            //     echo '<button type="submit" class="btn btn-alt-success" name="sepre">
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