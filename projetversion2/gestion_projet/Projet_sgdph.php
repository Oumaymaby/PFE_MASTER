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
                                            <form action="Projet_avis.php" method="post">
                                                <fieldset class="inputTextWrap">
                                                    <legend>informations</legend>
                                                    <div class="form-group row">
                                                
                                                        <div class="col-4">
                                                            <div class="form-material ">
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="origine_eaux" >
                                                                <label for="register2-username">Origine de l'eau potable Puits X</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="origine_eauy" >
                                                                <label for="register2-username">Origine de l'eau potable Puits Y</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_creus" >
                                                                <label for="register2-username">Date d'autorisation de creusement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_creus" >
                                                                <label for="register2-username">Numéro d'autorisation de creusement  </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_prelev" >
                                                                <label for="register2-username">Date d'autorisation de prelevelement  </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_prelev" >
                                                                <label for="register2-username">Numéro d'autorisation de prelevelement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_dev" >
                                                                <label for="register2-username">Date d'autorisation de deversement </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_dev" >
                                                                <label for="register2-username">Numéro d'autorisation de deversement</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="date" class="form-control" id="register2-username" name="date_aut_occ"  >
                                                                <label for="register2-username">Date d'autorisation de l'occupation du dph </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="num_aut_occ" >
                                                                <label for="register2-username">Numéro d'autorisation de l'occupation du dph</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="css-control css-control-success css-switch ">
                                                                <input type="checkbox" class="css-control-input" name="aut_occ" value=<?php echo true; ?>>
                                                                <span class="css-control-indicator"></span> Autorisation de l'occupation du dph
                                                            </label>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <input type="text" class="form-control" id="register2-username" name="autre_autorisation" >
                                                                <label for="register2-username">Autre autorisation</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="inputTextWrap">
                                                    <legend>Avis et Remarques</legend>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <textarea class="form-control" id="contact2-msg" name="rem_sgdph" rows="4" ></textarea>
                                                                <label for="contact2-msg">Remarque Supplémentaires du SGDPH</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <textarea class="form-control" id="contact2-msg" name="rem_bet" rows="4" ></textarea>
                                                                <label for="contact2-msg">Remarque BET su le DPH</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="avis_sgdph" size="1">
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="valide_sgdph" size="1">
                                                                <option></option>
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
                                                        <div class="col-4">
                                                            <div class="form-material">
                                                                <select class="form-control" id="contact2-subject" name="approuvee_sgdph" size="1">
                                                                    <?php
                                                                        $ss = new User_Service();
                                                                        $tc = $ss->findAll();
                                                                        foreach($tc as $row) {
                                                                            echo "<option value=".$row[0]." >".$row[1]."</option>" ;
                                                                        }
                                                                    ?>
                                                                </select>
                                                                <label for="contact2-subject">Approuvée par</label>
                                                            </div>
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