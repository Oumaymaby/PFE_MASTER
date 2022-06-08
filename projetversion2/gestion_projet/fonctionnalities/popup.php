                    
                    
<!------------------------- hydroleader ----------------------------------------------------------------------->
                    
                    <!-- -----------------------------------------------SEPRE ------------------------------------------------------>
                    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Information SEPRE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row" style="display:none">
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
                                                    <!-- <div class="col-6">
                                                        <div class="form-material">
                                                            <input  type="text" class="form-control" id="register2-username" name="id_sepre" >
                                                            <label for="register2-username">Identifiant du SEPRE</label>
                                                        </div>  
                                                    </div> -->
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
                                                            <textarea class="form-control" id="contact2-msg" name="speci_autre" rows="2"  ></textarea>
                                                            <label for="contact2-msg">Specifier si autre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="besoin_irr" rows="2"  ></textarea>
                                                            <label for="contact2-msg">Besoin en eau d'irrigation</label>
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
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="modal fade" id="rem_bet_sepre" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Remarques du BET du Service SEPRE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input  type="text" class="form-control" name="id_avis_sepre" id="id_avis_sepre" value="" readonly>
                                                            <label for="register2-username">Identifiant du l'avis SEPRE</label>
                                                        </div>  
                                                    </div>
                                                </div>
                                                <?php 
                                                    // $idsepre=$_POST['id_avis_sepre'];
                                                    // if(isset($idsepre)){
                                                    //     $ss = new SEPRE_Service();
                                                    //     $tc = $ss->findById($idsepre);
                                                    //     // Parcourir les lignes de résultat
                                                    //     if (is_null($tc)) {
                                                    //     $message="Le projet est introuvable";
                                                    //     header("Location:GestioN Stagiaire.php?message=$message");
                                                    //     }else{
                                                    //         foreach($tc as $row){
                                                    //             $id_info_sepre=$row['id_sepre'];
                                                    //             $id_prj=$row['id_prj'];
                                                    //             $remarque_bet=$row['remarque_bet_besoin_eau'];
                                                    //             var_dump($remarque_bet);
                                                    //         }
                                                            
                                                    //     }
                                                    // }
                                                ?>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sepre1" name="rem_bet_sepre1" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque du BET sur les besoins en Eau</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="rem_bet_sepre_submit">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="modal fade" id="avis_sepre" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SEPRE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    
                                                        <div class="form-material" style="display:none">
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
                                                    
                                                    <?php
                                                        $a= new SEPRE_S_INFO();
                                                        $aa= $a->findsepre($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sepre_info = $row['id_sepre_info'];
                                                                echo '
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_sepre_info" id="id_avis_sepre" value="'.$row['id_sepre_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SEPRE</label>
                                                                </div>  
                                                            ';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sepre1" name="rem_bet_sepre1" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque du BET sur les besoins en Eau</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sepre" size="1" disabled>
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sepre1" name="rem_sup_sepre" rows="4" readonly></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_avis_sepre">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <!-- -----------------------------------------------SQE ------------------------------------------------------>
                    <div class="modal fade" id="ajout_info_sqe" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Information SQE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                            <form action="Projet_details1.php" method="post" >
                                                
                                                        <div class="form-material" style="display:none">
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
                                                            <input type="text" class="form-control" id="register2-username" name="reutil">
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
                                                        <button type="submit" class="btn btn-alt-success" name="sqe">
                                                            <i class="fa fa-plus mr-5"></i> Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="modal fade" id="avis_sqe" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SQE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                        <div class="form-material" style="display:none">
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
                                                    <?php
                                                        $a= new SQE_S_INFO();
                                                        $aa= $a->findSQE($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sqe_info = $row['id_sqe_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_sqe_info" id="id_avis_sqe" value="'.$row['id_sqe_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SQE</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sqe1" name="rem_bet_sqe1" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque BET Assainissement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sqe" size="1" disabled>
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sqe" name="rem_sup_sqe" rows="4" readonly></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_avis_sqe">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="modal fade" id="rem_bet_sqe" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Modifier la Remarque</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
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
                                                    <?php
                                                        $a= new SQE_S_INFO();
                                                        $aa= $a->findSQE($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sqe_info = $row['id_sqe_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material">
                                                                    <input  type="text" class="form-control" name="id_avis_sqe_info" id="id_avis_sqe" value="'.$row['id_sqe_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SQE</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sqe1" name="rem_bet_sqe1" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque BET Assainissement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="modifier">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>


                    <!-------------------------------------------SGDPH----------------------------------------------------->
                    <div class="modal fade" id="ajout_info_sgdph" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true" >
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Information SGDPH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="500px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:20px !important;">       
                                        <form action="projet_details1.php" method="post">
                                            <fieldset class="inputTextWrap">
                                                <legend>informations</legend>
                                                            <?php 
                                                                if(isset($_GET['id']))
                                                                {
                                                                    $id = htmlspecialchars($_GET['id']);
                                                                        $ss = new Projet_Service();
                                                                        $tc = $ss->findById($id);
                                                                        $id1=$tc->getid_pr(); 
                                                                }
                                                            ?>
                                                            <input type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" style="display:none">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="type_cours" size="1">
                                                                <option></option>
                                                                    <?php
                                                                        $ss = new TypeCEau_Service();
                                                                        $tc = $ss->findAll();
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                        }
                                                                    ?>
                                                            </select>
                                                            <label for="register2-username">Type du cours d'eau</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="nom_cours" >
                                                            <label for="register2-username">Nom du cours d'eau</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="debit_cours" >
                                                            <label for="register2-username">Débit centennale (m3/s)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="nature_cours" size="1">
                                                                <option></option>
                                                                    <?php
                                                                        $ss = new NatureCeau_Service();
                                                                        $tc = $ss->findAll();
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                        }
                                                                    ?>
                                                            </select>
                                                            <label for="register2-username">Nature du cours d'eau</label>
                                                        </div>
                                                </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="servitude" >
                                                            <label for="register2-username">Servitude</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="inputTextWrap">
                                                <legend>informations de creusement</legend>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="origine_eaux" >
                                                            <label for="register2-username">Origine de l'eau potable Puits X</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="origine_eauy" >
                                                            <label for="register2-username">Origine de l'eau potable Puits Y</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="date_aut_creus" >
                                                            <label for="register2-username">Date d'autorisation de creusement </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="num_aut_creus" >
                                                            <label for="register2-username">Numéro d'autorisation de creusement  </label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <div class="col-6">
                                                        <label class="css-control css-control-success css-switch ">
                                                            <input type="checkbox" class="css-control-input" id="box" name="aut1" value=<?php echo true; ?>>
                                                            <span class="css-control-indicator"></span> Autorisation de creusement
                                                    </label>
                                                </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="inputTextWrap">
                                                <legend>informations de prelevelement</legend>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="date_aut_prelev" >
                                                            <label for="register2-username">Date d'autorisation de prelevelement  </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="num_aut_prelev" >
                                                            <label for="register2-username">Numéro d'autorisation de prelevelement </label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-group row">
                                                    <div class="col-6">
                                                        <label class="css-control css-control-success css-switch ">
                                                            <input type="checkbox" class="css-control-input" name="aut_prele" value=<?php echo true; ?>>
                                                            <span class="css-control-indicator"></span> Autorisation de prelevelement 
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="inputTextWrap">
                                                <legend>informations de deversement</legend>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="date_aut_dev" >
                                                            <label for="register2-username">Date d'autorisation de deversement </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="num_aut_dev" >
                                                            <label for="register2-username">Numéro d'autorisation de deversement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <label class="css-control css-control-success css-switch ">
                                                            <input type="checkbox" class="css-control-input" name="aut_dev" value=<?php echo true; ?>>
                                                            <span class="css-control-indicator"></span> Autorisation de deversement 
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="inputTextWrap">
                                                <legend>informations d'occupation de DPH</legend>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="date" class="form-control" id="register2-username" name="date_aut_occ"  >
                                                            <label for="register2-username">Date d'autorisation de l'occupation du dph </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" name="num_aut_occ" >
                                                            <label for="register2-username">Numéro d'autorisation de l'occupation du dph</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <label class="css-control css-control-success css-switch ">
                                                            <input type="checkbox" class="css-control-input" name="aut_occ" value=<?php echo true; ?>>
                                                            <span class="css-control-indicator"></span> Autorisation de l'occupation du dph
                                                        </label>
                                                    </div>
                                                </div>    
                                                
                                            </fieldset>
                                            <fieldset class="inputTextWrap">
                                                <legend>Autre</legend>
                                                <div class="col-6">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="autre_autorisation" >
                                                        <label for="register2-username">Autre autorisation</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-alt-success" name="sgdph">
                                                        <i class="fa fa-plus mr-5"></i> Ajouter Avis
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="avis_sgdph" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SGDPH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    <?php
                                                        $a= new SGDPH_S_INFO();
                                                        $aa= $a->findSGDPH($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sgdph_info = $row['id_sgdph_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_sgdph_info" id="id_avis_sgdph" value="'.$row['id_sgdph_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SGDPH</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sgdph1" name="rem_bet_sgdph1" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque BET protection d'innondation</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sgdph" size="1" disabled>
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SGDPH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sgdph" name="rem_sup_sgdph" rows="4" readonly></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SGDPH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_avis_sgdph">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <!------------------------------------------STAH ------------------------------------------------------->
                    <div class="modal fade" id="ajout_info_stah" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Information STAH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="200px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post" >
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material" style="display:none">
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

                                                <!-- <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="id_stah_info" >
                                                        <label for="register2-username">identifiante de STAH</label>
                                                    </div>
                                                </div> -->
                                                    
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="register2-username" name="super_bv" >
                                                        <label for="register2-username">Superficie Bv</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-alt-success" name="stah">
                                                        <i class="fa fa-plus mr-5"></i> Enregistrer
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                    <div class="modal fade" id="avis_stah" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis STAH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    <?php
                                                        $a= new STAH_S_INFO();
                                                        $aa= $a->findstah($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_stah_info = $row['id_stah_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_stah_info" id="id_avis_stah" value="'.$row['id_stah_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du STAH</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_amg_bet" name="rem_amg_bet" rows="4"></textarea>
                                                            <label for="contact2-msg">Amenagements proposés</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_stah" size="1" disabled>
                                                                <option></option>
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
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_amg" size="1" disabled>
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis de l'ABHT Aménagement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sup" name="rem_sup" rows="4" readonly></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_avis_stah">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>

                    <!-----------------------------------------ABHT------------------------------------------------------------>
                    <div class="modal fade" id="avis_abht" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis abht</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_amg_bet" name="rem_abht_bet" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque BET ABHT</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_abht" size="1" disabled>
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis ABHT</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_avis_abht">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                       
<!---------------------------------------------Session SEPRE------------------------------------------------------------------------------------>    
                    <div class="modal fade" id="avis_sepre_rem" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SEPRE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    <?php
                                                        $a= new SEPRE_S_INFO();
                                                        $aa= $a->findsepre($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sepre_info = $row['id_sepre_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_sepre_info" id="id_avis_sepre" value="'.$row['id_sepre_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SEPRE</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-material" style="display:none">
                                                    <input  type="text" class="form-control" name="id_avis_sepre" id="id_avis" value="" readonly>
                                                    <label for="register2-username">Identifiant avis sepre </label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" >
                                                            <select class="form-control" id="contact2-subject" name="avis_sepre" size="1" >
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_bet_sepre1" name="rem_sup_sepre" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SEPRE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="add_sepre">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>   
                    
<!---------------------------------------------Session STAH------------------------------------------------------------------------------------>    
                    <div class="modal fade" id="avis_stah_rem" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis STAH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                    
                                                    <div class="form-material" style="display:none">
                                                        <input  type="text" class="form-control"  name="id_avis_stah" id="stah2154" readonly>
                                                    </div>
                                                    <?php
                                                        $a= new STAH_S_INFO();
                                                        $aa= $a->findstah($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_stah_info = $row['id_stah_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_stah_info" id="id_avis_stah_info" value="'.$row['id_stah_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du STAH</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_amg_bet" name="rem_amg_bet" rows="4" readonly></textarea>
                                                            <label for="contact2-msg">Amenagements proposés</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_stah1" size="1" >
                                                                <option></option>
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
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_amg" size="1" >
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis de l'ABHT Aménagement</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sup" name="rem_sup" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du STAH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="avis_stah">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>

<!---------------------------------------------Session SGDPH------------------------------------------------------------------------------------->
                    <div class="modal fade" id="avis_sgdph_rem" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SGDPH</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                            <input  type="text" class="form-control" id="id_sgdph1" name="id_sgdph1" value="" >
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>  
                                                    </div>
                                                    <?php
                                                        $a= new SGDPH_S_INFO();
                                                        $aa= $a->findSGDPH($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sgdph_info = $row['id_sgdph_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">
                                                                    <input  type="text" class="form-control" name="id_avis_sgdph_info" id="id_avis_sgdph" value="'.$row['id_sgdph_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SGDPH</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sgdph" size="1" >
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SGDPH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sgdph" name="rem_sup_sgdph" rows="4"></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SGDPH</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="avis_sgdphldkf">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>

<!-----------------------------------------------Session SQE-------------------------------------------------------------------------------------->
                    <div class="modal fade" id="avis_sqe_rem" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                            <div class="modal-content">
                                <div class="block block-themed block-transparent mb-0">
                                    <div class="block-header bg-success">
                                        <h3 class="block-title">Ajouter un avis SQE</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                                        <form action="Projet_details1.php" method="post">
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material" style="display:none">
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
                                                            <input  type="text" class="form-control" name="id_avissqe" id="id_avissqe" value="" readonly>
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>  
                                                    </div>
                                                    <?php
                                                        $a= new SQE_S_INFO();
                                                        $aa= $a->findSQE($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                $id_sqe_info = $row['id_sqe_info'];
                                                                echo '<div class="col-6">
                                                                <div class="form-material" style="display:none">>
                                                                    <input  type="text" class="form-control" name="id_avis_sqe_info" id="id_avis_sqe" value="'.$row['id_sqe_info'].'" readonly>
                                                                    <label for="register2-username">Identifiant du SQE</label>
                                                                </div>  
                                                            </div>';
                                                            }
                                                        }
                                                    ?>  
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_sqe" size="1" >
                                                                <option></option>
                                                                <?php
                                                                    $ss = new Avis_Service();
                                                                    $tc = $ss->findAll();
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                    }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="rem_sqe" name="rem_sup_sqe" rows="4" ></textarea>
                                                            <label for="contact2-msg">Remarque Supplémentaire du SQE</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="avissqe">
                                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
                <script>
                    // $(document).ready(function() {

                    //     $('a[data-toggle="modal"]').click(function () {
                    //     var data_idsepre = '';
                    //     data_idsepre = $(this).data('id');
                    //     $('#id_avis_sepre').val(data_idsepre);
                    //     })
                    // });

                    function showModal(id){
                        $("#id_avis_sepre").val(id);
                        var rem=$('a').data('remarque');
                        $("#rem_bet_sepre1").val(rem);
                        $('#rem_bet_sepre').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why
                        
                    }

                    function showModal1(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sepre').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why
                        
                    }
                    function showModal2(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sqe').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why
                        
                    }

                    function showModal3(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#ajout_info_sgdph').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why
                        
                    }

                    function showModal4(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sgdph').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    
                    function showModal5(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#ajout_info_stah').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function showModal7(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_stah').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function showModal8(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_abht').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function showModall(id){
                        $("#id_avis_sqe").val(id);
                        var rem=$('').data('remarque');
                        console.log(rem);
                        $("#rem_bet_sqe1").val(rem);
                        $('#rem_bet_sqe').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why
                        
                    }

                    function avissepre(id){
                        $("#id_avis").val(id);
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        
                        $('#avis_sepre_rem').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function avissqe(id){
                        $("#id_avissqe").val(id);
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sqe_rem').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function avisstah(id){
                        $('#stah2154').val(id);
                        // console.log('fjjfdjskswdflkgdfhn!gkdfhgdkf');
                        // console.log($("#stah2154").val(id));

                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_stah_rem').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function avissgdph(id){
                        $("#id_sgdph1").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sgdph_rem').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }

                    function avisabht(){
                        // $("#id_avis_sepre").val(id);
                        // var rem=$('#oum').data('remarque');
                        // $("#rem_bet_sepre1").val(rem);
                        $('#avis_sepre_rem').modal('show');
                        // here is the id of that element where do you want to display / have the passed value
                        // in my case i am taking in a hidden input which id is = bookID , i am using a form in my modal that why  
                    }


                   
                    
                    
                </script>