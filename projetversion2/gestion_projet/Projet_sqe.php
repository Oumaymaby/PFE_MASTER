<?php
    /**
    * OUMAIMA SABI
    * DATE:04/05/2022
    */
    require_once 'Projet_home.php';

    

?>
         <div class="content">
                    <!-- Material Design -->
                    <h2 class="content-heading">Service SQE </h2>
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
                                            <form action="Projet_avis.php" method="post" >
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
                                                            <input type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="volume_use" >
                                                            <label for="register2-username">Volumes des eaux usées</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="mode_assai" size="1">
                                                            <?php
                                                                $ss = new ModeAssain_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;    
                                                                }
                                                               
                                                            ?>
                                                            </select>
                                                            <label for="register2-username">Mode d'assainissement</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" >
                                                            <label for="register2-username">Réutilisation QEU</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="niv_trat" >
                                                            <label for="register2-username">Niveau de traitement</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="niveau_piezo" >
                                                            <label for="register2-username">Niveau Piézométrique</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="datenivea" >
                                                            <label for="register2-username">Date Niveau Piézométrique</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="coord_x" >
                                                            <label for="register2-username">Coordonnées X du périmètre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="coord_y" >
                                                            <label for="register2-username">Coordonnées Y du périmètre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="trat_boue" >
                                                            <label for="register2-username">Traitement de la boue</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque du BET</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_sqe" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaires du SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sqe" size="1">
                                                            <?php
                                                                $ss = new Avis_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                }
                                                                
                                                            ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SQE</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_sqe" size="1">
                                                            
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                        }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_sqe" size="1">
                                                                <?php
                                                                    $ss = new User_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                        }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvé par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="sqe">
                                                            <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                        </button>
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