<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';
?>
                <div class="content">

                    <!-- Validation Wizards -->
                    <h2 class="content-heading">Sections des remarques </h2>
                    <div class="row justify-content-center py-20">
                       
                        <div class="col-lg-12">
                            <!-- Block Tabs Animated Slide Up -->
                            <div class="block">
                                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-animated-slideup-ABHT">ABHT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SEPRE">SEPRE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-STAH">STAH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SQE">SQE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-SGDPH">SGDPH</a>
                                    </li>
                                    <li class="nav-item ml-auto">
                                        <a class="nav-link" href="#btabs-animated-slideup-settings"><i class="si si-settings"></i></a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content overflow-hidden">
                                    <div class="tab-pane show active" id="btabs-animated-slideup-ABHT"  role="tabpanel">
                                        <div class="block-content">
                                            <form action="Prj_ajouter.php" method="post" >
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" >
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_gen" rows="1" ></textarea>
                                                            <label for="contact2-msg">Remarque</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_abht" size="1">
                                                                
                                                                <?php
                                                                    // $ss = new Avis_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($avis_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis ABHT</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="etabli_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($etabli_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">établi par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($valide_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($approuve_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvée par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-alt-success" name="abht">
                                                            <i class="fa fa-plus mr-5"></i> Enregister
                                                        </button>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <a class="btn btn-alt-success" onclick="myFunction()" >
                                                            <i class="fa fa-plus mr-5"></i>autre Avis
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <form action="Prj_ajouter.php" method="post" id="form_abht" style="display:none">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="form-material">
                                                            <input type="text" class="form-control" id="register2-username" >
                                                            <label for="register2-username">Identifiant du projet</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <textarea class="form-control" id="contact2-msg" name="rem_gen" rows="1" ></textarea>
                                                            <label for="contact2-msg">Remarque</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="avis_abht" size="1">
                                                                
                                                                <?php
                                                                    // $ss = new Avis_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($avis_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Avis ABHT</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="etabli_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($etabli_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">établi par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="valide_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($valide_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Validé par</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-material">
                                                            <select class="form-control" id="contact2-subject" name="approuve_abht" size="1">
                                                                <?php
                                                                    // $ss = new User_Service();
                                                                    // $tc = $ss->findAll();
                                                                    // if($avis_abht1!=="0"){
                                                                    //     foreach($tc as $row) {
                                                                    //         if($approuve_abht1== $row[0]){
                                                                    //             echo "<option value=".$row[0]." selected>".$row[1]."</option>" ;
                                                                    //         }else{
                                                                    //             echo "<option value=".$row[0]." hidden>".$row[1]."</option>" ;
                                                                    //         }
                                                                    //     }
                                                                    // }else{
                                                                    //     echo "<option></option>";
                                                                    //     foreach($tc as $row) {
                                                                    //         echo "<option value=".$row[0]." >".$row[1]."</option>";
                                                                    //     }
                                                                    // }
                                                                ?>
                                                            </select>
                                                            <label for="contact2-subject">Approuvée par</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-alt-success" name="abht">
                                                            <i class="fa fa-plus mr-5"></i> Enregister
                                                        </button>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="btabs-animated-slideup-SEPRE" href="#btabs-animated-slideup-SEPRE" role="tabpanel">
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
                                    <div class="tab-pane" id="btabs-animated-slideup-STAH" role="tabpanel">
                                        <div class="block-content">
                                            <form action="Projet_avis.php" method="post" >
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
                                    <div class="tab-pane" id="btabs-animated-slideup-SQE" role="tabpanel">
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
                                    <div class="tab-pane" id="btabs-animated-slideup-SGDPH" role="tabpanel">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function myFunction() {
                        var x = document.getElementById("form_abht");
                        if (x.style.display === "none") {
                            x.style.display = "block";
                        }
                    }
                </script>
            <?php 
                require_once 'Projet_footer.php';
            ?>
    </body>
</html>