<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';

    if(isset($_POST['ajouter'])){
    
        extract($_POST);
        $id= htmlspecialchars($_POST["id_prj"]);
        $numero_dossier = htmlspecialchars($_POST["num_doss"]);
        $numero_archive = htmlspecialchars($_POST["num_archive"]);
        $date_arrivee_abht=htmlspecialchars($_POST["date_abht"]);
        $date_arrivee_bet= date('d-m-y');
        $commune = htmlspecialchars($_POST["commune"]);
        $province = htmlspecialchars($_POST["province"]);
        $douar_localite = htmlspecialchars($_POST["douar_localite"]);
        $maitre_ouv = htmlspecialchars($_POST["Maitre_ouvr"]);
        $intitule_projet = htmlspecialchars($_POST["intitule_projet"]);
        $architecte= htmlspecialchars($_POST["architecte"]);
        $titre_foncier = htmlspecialchars($_POST["titre_foncier"]);
        $superficie = htmlspecialchars($_POST["superficie"]);
        $type_prj = htmlspecialchars($_POST["type_projet"]);
        $fond_dossier= htmlspecialchars($_POST["fond_dossier"]);
        $geom = htmlspecialchars($_POST["geometrie"]);
        $dates_commissions=htmlspecialchars($_POST["date_comm"]);
        $categ = htmlspecialchars($_POST["categorie"]);
        $surface_batie=htmlspecialchars($_POST["surface_batie"]);
        $type_doss = htmlspecialchars($_POST["type_doss"]);
        $etatdossier = 1;
        if(isset($_POST["sepre"])){
            var_dump($_POST["sepre"]);
        }else{
            $_POST["sepre"]="0";
            var_dump($_POST["sepre"]);
        }
    
        if(isset($_POST["sqe"])){
            var_dump($_POST["sqe"]);
        }else{
            $_POST["sqe"]="0";
            var_dump($_POST["sqe"]);
        }
        if(isset($_POST["stah"])){
            var_dump($_POST["stah"]);
        }else{
            $_POST["stah"]="0";
            var_dump($_POST["stah"]);
        }
        if(isset($_POST["sgdph"])){
            var_dump($_POST["sgdph"]);
        }else{
            $_POST["sgdph"]="0";
            var_dump($_POST["sgdph"]);
        }
        $geom1="MULTIPOLYGON(((".$geom.")))";
        $projet = new ProjetInv($id,$numero_dossier,$numero_archive,$date_arrivee_abht,$date_arrivee_bet,$commune,$province,$douar_localite,$maitre_ouv,$intitule_projet,$architecte,$titre_foncier,$superficie,$type_prj,$fond_dossier,$geom1,$dates_commissions,$categ,$surface_batie,$type_doss,$etatdossier,$_POST["sepre"],$_POST["sqe"],$_POST["stah"],$_POST["sgdph"],NULL,NULL,NULL);
        // var_dump($projet );
        $ss = new Projet_Service();
        $s=$ss->add($projet);
    }

?>
        <div class="content">
                    <!-- Material Design -->
                    <h2 class="content-heading">Nouveau Projet d'investissement</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Static Labels -->
                            <div class="block">
                                <div class="block-header block-header-default bg-success ">
                                    <h3 class="block-title">Ajouter un Projet</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="Projet_nouveau.php" method="post" >
                                        <fieldset class="inputTextWrap">
                                            <legend>informations</legend>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-text" name="id_prj" placeholder="Saisir l'identifiant du projet">
                                                        <label for="material-text">Identifiant</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">    
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-password" name="num_doss" placeholder="Saisir le numéro du dossier">
                                                        <label for="num_doss">Numéro du dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-password" name="num_archive" placeholder="Saisir le numéro de l'archive">
                                                        <label for="num_archive">Numéro de l'archive</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <input type="date" class="form-control" id="material-email" name="date_abht" >
                                                        <label for="date_abht">Date d'arrivé à l'ABHT</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-danger">
                                                        <select class="form-control" id="material-select" name="categorie">
                                                        <option>...</option>
                                                            <?php
                                                                $ss = new Categorie_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';}
                                                            ?>
                                                        </select>
                                                        <label for="categorie">Catégorie</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <select class="form-control" id="material-select" name="type_doss">
                                                            <option>...</option>
                                                            <?php
                                                                $ss = new Type_Dossier_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';}
                                                            ?>
                                                        </select>
                                                        <label for="type_doss">Type dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-primary">
                                                        <select class="form-control" id="material-select" name="type_projet">
                                                            <option>...</option>
                                                            <?php
                                                                $ss = new Type_projet_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo '<option value="'.$row[0].'">'.$row[1].'</option>';}
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
                                                        <textarea class="form-control" id="material-textarea-small" name="intitule_projet" rows="1" placeholder="Saisir l'intitulé du projet"></textarea>
                                                        <label for="intitule_projet">Intitulé de projet</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="material-textarea-large" name="Maitre_ouvr" rows="1" placeholder="Saisir le maitre d'ouvrage"></textarea>
                                                        <label for="Maitre_ouvr">Maître d'ouvrage</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-material">
                                                        <textarea class="form-control" id="material-textarea-large" name="douar_localite" rows="1" placeholder="Saisir Douar localite"></textarea>
                                                        <label for="douar">Douar localite</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="architecte" placeholder="Saisir l'architecte">
                                                        <label for="architecte">Architecte</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="titre_foncier" placeholder="Saisir le titre foncier">
                                                        <label for="titre_foncier">Titre foncier </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control form-control-sm" id="material-input-size-sm" name="superficie" placeholder="Saisir la superficie">
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
                                                            <option>...</option>
                                                            <?php
                                                                $ss = new Commune_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo '<option value="'.$row[0].'">'.$row[2].'</option>';}
                                                            ?>
                                                        </select>
                                                        <label for="commune">Commune</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-material">
                                                        <select class="form-control" id="material-select" name="province">
                                                            <option>...</option>
                                                            <?php
                                                                $ss = new Province_Service();
                                                                $tc = $ss->findAll();
                                                                foreach($tc as $row) {
                                                                    echo '<option value="'.$row[0].'">'.$row[2].'</option>';}
                                                            ?>
                                                        </select>           
                                                        <label for="province">Province</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-success">
                                                        <input type="text" class="form-control" id="material-color-success" name="fond_dossier" placeholder="Saisir le fond dossier">
                                                        <label for="fond_dossier">Fond dossier</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material form-material-warning">
                                                        <input type="date" class="form-control" id="material-color-warning" name="date_comm">
                                                        <label for="date_comm">Date_commissions</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-material">
                                                        <input type="text" class="form-control" id="material-valid" name="surface_batie" placeholder="Saisir la surface Batie">
                                                        <label for="surface_batie">Surface batie</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-9">
                                                    <div class="form-material form-material-info">
                                                        <input type="text" class="form-control" id="material-color-info" name="geometrie" placeholder="Saisir la géometrie">
                                                        <label for="geometrie">Géometrie</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="inputTextWrap">
                                            <legend>Validations des dossiers</legend>
                                            <div class="form-group row">
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sepre" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Service SEPRE
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sqe" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Service SQE
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="sgdph" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Service SGDPH
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label class="css-control css-control-success css-checkbox">
                                                        <input type="checkbox" class="css-control-input" name="stah" value=<?php echo true; ?>>
                                                        <span class="css-control-indicator"></span> Service STAH
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <button type="submit" name="ajouter" class="btn btn-alt-primary">Submit</button>
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