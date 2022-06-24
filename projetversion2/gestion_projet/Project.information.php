<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';
?>

            <div class="content">
                <nav class="breadcrumb bg-white push">
                    <a class="breadcrumb-item" href="Projet_tableau_bord.php">Tableau de bord</a>
                    <span class="breadcrumb-item active">Information du Projet</span>
                </nav>
                
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Information générale sur le projet d'investissement</h3>
                            <div class="block-options">
                                <?php
                                    $id=$_GET['id'];
                                    echo '<a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info"  href="Projet_modifier.php?id='.$id.'" >
                                    <i class="fa fa-pencil-square mr-5"></i>modifier</a>';
                                ?>
                                
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row invisible" data-toggle="appear">
                                <div class="col-4">
                                    <table class="table table-striped table-borderless table-vcenter ">
                                        <thead class="bg-earth-lighter ">
                                            <tr>
                                                <th colspan="2">Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600" href="be_pages_forum_topics.html">Numéro du dossier</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getnum_oss().'</div>';
                                                                ?> 
                                                            </td> 
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600" >Numéro d'archive</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getnum_archv().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600">Maitre d'Ouvrage</span>
                                                                <?php 
                                                                    $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getmaitre_ouv().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600">Architecte</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getarchitecte().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600">Titre foncier</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->gettitre_foncier().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600">Douar Localite</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getdouar_loc().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="font-w600">Superficie</span>
                                                                <?php $b = new Projet_Service();
                                                                    $id=$_GET['id'];
                                                                    $bb = $b->findById($id);
                                                                    echo '<div>'. $bb->getsupf().'</div>';
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        
                                                        
                                                    </tbody>
                                    </table>
                                </div>
                                <div class="col-4">
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <thead class="thead-default">
                                            <tr>
                                                <th colspan="2">Détails</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Commune</span>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Commune_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getcom());
                                                        echo '<div>'. $ee->getcommune().'</div>';
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Province</span>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Province_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getprovince());
                                                        echo '<div>'. $ee->getprovince_a().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Fond du dossier</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div>'. $bb->getfond_doss().'</div>';
                                                    ?>
                                                </td>   
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-w600">Superficie batie</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div>'. $bb->getsurf_bat().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                    <table class="table table-striped table-borderless table-vcenter">
                                        <thead class="thead-default">
                                            <tr>
                                                <th colspan="2">Intitulé du Projet</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-w600">'. $bb->getintitule_pr().'</span>';
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4 ml-auto">
                                    <div class="block block-rounded">
                                        <div class="block-header block-header-default bg-earth-lighter">
                                            <h3 class="block-title">Date et durée</h3>
                                        </div>
                                        <div class="block-content bg-gray-lighter">
                                            <ul class="list-group push">
                                                <li class="list-group-item">
                                                    <span class="js-task-badge badge badge-primary float-right animated bounceIn"></span>
                                                    <span class="font-w600" >Durée </span>
                                                    <?php 
                                                        $b = new Projet_Service();
                                                        $e= new Etat_Service();
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getetat_dossier());
                                                        $bb1= $b->dureeprj($id);
                                                        foreach($bb1 as $row){
                                                            echo '<span class="js-task-badge badge badge-primary float-right animated bounceIn">'.$row[1].' jours </span>';
                                                        }
                                                    ?>
                                                </li>
                                                <li class="list-group-item">
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="js-task-badge-starred badge badge-success float-right animated bounceIn">'. $bb->getdate_arr_abht().'</span>';
                                                    ?>
                                                    <span class="font-w600" >Date d'arrivée à l'abht </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="js-task-badge-starred badge badge-success float-right animated bounceIn">'. $bb->getdate_arr_bet().'</span>';
                                                    ?>
                                                    <span class="font-w600" >Date d'arrivée au Bet</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block block-rounded">
                                        <div class="block-header block-header-default bg-primary-lighter">
                                            <h3 class="block-title">Details</h3>
                                        </div>
                                        <div class="block-content bg-gray-lighter">
                                            <ul class="list-group push">
                                                <li class="list-group-item">
                                                    <span class="js-task-badge badge badge-primary float-right animated bounceIn"></span>
                                                    <span class="font-w600" >Catégorie</span>
                                                        <?php
                                                            $b = new Projet_Service();
                                                            $e=new Categorie_Service();
                                                            $id=$_GET['id'];
                                                            $bb = $b->findById($id);
                                                            $ee=$e->findById($bb->getcatg());
                                                            echo '<span class="js-task-badge badge badge-primary float-right animated bounceIn">'. $ee->getcategorie().'</span>';
                                                        ?>
                                                </li>
                                                <li class="list-group-item">
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_projet());
                                                        echo '<span class="js-task-badge-starred badge badge-success float-right animated bounceIn">'. $ee->gettype_projet().'</span>';
                                                    ?>
                                                    <span class="font-w600" >Type de projet</span>
                                                </li>
                                                <li class="list-group-item">
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_Dossier_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_doss());
                                                        echo '<span class="js-task-badge-starred badge badge-success float-right animated bounceIn">'. $ee->gettype_d().'</span>';
                                                    ?>
                                                    <span class="font-w600" >Type de dossier </span>
                                                </li>
                                                <li class="list-group-item">
                                                    <?php 
                                                        $b = new Projet_Service();
                                                        $e= new Etat_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getetat_dossier());
                                                        $bb1= $b->dureeprj($id);
                                                        echo '<span class="js-task-badge-starred badge badge-success float-right animated bounceIn">'.$ee->getetat_dossier().'</span>';
                                                    ?>
                                                    <span class="font-w600" >Etat du dossier</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                                
                                
        <?php 
            require_once 'Projet_footer.php';
        ?>
    </body>
</html>