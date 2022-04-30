<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';

        

?>
        <div class="content">
                    <!-- Material Design -->
                    <h2 class="content-heading">Modifier le Projet</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Static Labels -->
                            <div class="block">
                                <div class="block-header block-header-default bg-success ">
                                    <h3 class="block-title">Modification des information du projet</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="Projet_home.php" method="post" >
                                        <fieldset class="inputTextWrap">
                                            <legend>informations</legend>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-text" name="id_prj" value="<?php if(isset($id2)) { echo $id2; } ?>" >
                                                        <label for="material-text">Identifiant</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">    
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-password" name="num_doss" value="<?php if(isset($num_oss)) { echo $num_oss; } ?>" >
                                                        <label for="num_doss">Numéro du dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-password" name="num_archive" value="<?php if(isset($num_archv)) { echo $num_archv; } ?>">
                                                        <label for="num_archive">Numéro de l'archive</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="material-email" name="date_abht" value="<?php if(isset($date_arr_abht)) { echo $date_arr_abht; } ?>">
                                                        <label for="date_abht">Date d'arrivé à l'ABHT</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-danger">
                                                        <select class="form-control" id="material-select" name="categorie" value="<?php if(isset($cat)) { echo $cat; } ?>">
                                                       
                                                            <?php
                                                                $ss = new Categorie_Service();
                                                                $tc = $ss->findAll();
                                                                if($cat!==NULL){
                                                                    foreach($tc as $row) {
                                                                        if($cat== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="categorie">Catégorie</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="material-select" name="type_doss" value="<?php if(isset($type_doss)) { echo $type_doss; } ?>">
                                                            
                                                            <?php
                                                                $ss = new Type_Dossier_Service();
                                                                $tc = $ss->findAll();
                                                                if($type_doss!==NULL){
                                                                    foreach($tc as $row) {
                                                                        if($type_doss== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="type_doss">Type dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-primary">
                                                        <select class="form-control" id="material-select" name="type_projet" >
                                                            
                                                            <?php
                                                                $ss = new Type_projet_Service();
                                                                $tc = $ss->findAll();
                                                                if($type_projet!==NULL){
                                                                    foreach($tc as $row) {
                                                                        if($type_projet== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0].">".$row[1]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="type_projet">Type projet</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations</legend>
                                            <div class="form-group row">
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="material-textarea-small" name="intitule_projet" rows="1" ><?php if(isset($intitule_pr)) { echo $intitule_pr; } ?></textarea>
                                                        <label for="intitule_projet">Intitulé de projet</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="material-textarea-large" name="Maitre_ouvr" rows="1" ><?php if(isset($intitule_pr)) { echo $intitule_pr; } ?></textarea>
                                                        <label for="Maitre_ouvr">Maître d'ouvrage</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="material-textarea-large" name="douar_localite" rows="1" ><?php if(isset($type_projet)) { echo $type_projet; } ?></textarea>
                                                        <label for="douar">Douar localite</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="architecte" value="<?php if(isset($architect)) { echo $architect; } ?>">
                                                        <label for="architecte">Architecte</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="titre_foncier" value="<?php if(isset($titre_foncier)) { echo $titre_foncier; } ?>">
                                                        <label for="titre_foncier">Titre foncier </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="superficie" value="<?php if(isset($supf)) { echo $supf; } ?>">
                                                        <label for="superficie">Superficie</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>informations</legend>
                                            <div class="form-group row">
                                                <div class="col-6">
                                                    <div class="form-material">
                                                        <select class="form-control" id="material-select" name="commune">
                                                        
                                                            <?php
                                                                $ss = new Commune_Service();
                                                                $tc = $ss->findAll();
                                                                if($com!==NULL){
                                                                    foreach($tc as $row) {
                                                                        if($com== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[2]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0].">".$row[2]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[2]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                        <label for="commune">Commune</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-material">
                                                        <select class="form-control" id="material-select" name="province" >
                                                           
                                                            <?php
                                                                $ss = new Province_Service();
                                                                $tc = $ss->findAll();
                                                                if($province!==NULL){
                                                                    foreach($tc as $row) {
                                                                        if($province== $row[0]){
                                                                            echo "<option value=".$row[0]." selected>".$row[2]."</option>" ;
                                                                        }else{
                                                                            echo "<option value=".$row[0].">".$row[2]."</option>" ;
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo "<option></option>";
                                                                    foreach($tc as $row) {
                                                                        echo "<option value=".$row[0]." >".$row[2]."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>           
                                                        <label for="province">Province</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-success">
                                                        <input type="text" class="form-control" id="material-color-success" name="fond_dossier" value="<?php if(isset($fondoss)) { echo $fondoss; } ?>">
                                                        <label for="fond_dossier">Fond dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-warning">
                                                        <input type="date" class="form-control" id="material-color-warning" name="date_comm" value="<?php if(isset($date_com)) { echo $date_com; } ?>">
                                                        <label for="date_comm">Date_commissions</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-valid" name="surface_batie" value="<?php if(isset($surf_bat)) { echo $surf_bat; } ?>">
                                                        <label for="surface_batie">Surface batie</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-9">
                                                    <div class="form-material form-material-info">
                                                        <input type="text" class="form-control" id="material-color-info" name="geometrie" value="<?php if(isset($geom)) { echo $geom; } ?>">
                                                        <label for="geometrie">Géometrie</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>Affectations des dossiers</legend>
                                            <div class="form-group row">
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sepre" <?php if($sepre1===1){echo "checked"; } ?>>
                                                        <span class="css-control-indicator"></span> Service SEPRE 
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sqe" <?php if($sqe1===1){echo "checked"; }  ?>>
                                                        <span class="css-control-indicator"></span> Service SQE 
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sgdph" <?php  if($sgdph1===1){echo "checked"; }  ?>>
                                                        <span class="css-control-indicator"></span> Service SGDPH 
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="stah" <?php if($stah1===1){echo "checked"; }  ?>>
                                                        <span class="css-control-indicator"></span> Service STAH 
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" name="modifier" class="btn btn-alt-primary">Submit</button>
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