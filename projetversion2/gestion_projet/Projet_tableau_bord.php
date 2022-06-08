<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';
?>

        <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-xl-2">
                            <a class="block block-link-pop text-center" href="javascript:void(0)">
                                <div class="block-content">
                                    <p class="font-size-h1">
                                        <?php $b = new Projet_Service();
                                            $bb= $b->nombre();
                                            foreach($bb as $row){
                                                echo '<strong data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</strong>';
                                            }
                                        ?>
                                    </p>
                                    <p class="font-w600">
                                       Tolale des Projets
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-5">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title"><i class="si si-bar-chart fa-2x"></i>   Etat du dossier</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                                    </div>
                                </div>
                                <div class="block-content ">
                                    <div class="row justify-content-right">
                                        <div class="col-md-6">
                                                <canvas class="" id="pieChart" ></canvas>
                                        </div>
                                        <div class="col-md-2">
                                            <span class="badge badge-pill badge-primary" style="background-color:#5eb349 !important">Projets Cloturé</span>
                                            <span class="badge badge-pill badge-primary" style="background-color:#c92b28 !important">Projet en Cours</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Donut Chart -->
                        </div>
                        <div class="col-xl-5">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title"><i class="si si-bar-chart fa-2x"></i>  Delais du dossier</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close"><i class="si si-close"></i></button>
                                    </div>
                                </div>
                                <div class="block-content ">
                                    <div class="row justify-content-right">
                                        <div class="col-md-6">
                                            <canvas class="" id="piechart2" ><canvas>
                                        </div>
                                        <div class="col-md-2">
                                            <span class="badge badge-pill badge-primary" style="background-color:#5eb349 !important">Projet moins de 10jours</span>
                                            <span class="badge badge-pill badge-primary" style="background-color:#bda344 !important">Projet entre 10jours et 30jours</span>
                                            <span class="badge badge-pill badge-primary" style="background-color:#c92b28 !important">Projet plus 30jours</span> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Donut Chart -->
                        </div>
                       
                    </div>
                    
            <?php 
            
            // echo $_SESSION["service"];
            // echo $_SESSION["user_id"];
            // $cc=new User_Service;
            // $c=$cc->findById($_SESSION['user_id']);
            // $hydro="Hydroleader ";
            // $a=$c->getservice();
            // if($a==="hydroleader"){
            //     echo 'oooooooooooooooo';
            // }
            // echo var_dump($a);
            if ($_SESSION["service"] === "Hydroleader "){

                    echo '<div class="row invisible" data-toggle="appear"> 
                    <div class="col-lg-12">
                    <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Projet d\'investissement</h3>
                                <div class="block-options">
                                <a type="button" href="Projet_nouveau.php" class="btn btn-outline-primary mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                    </a>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                        <i class="si si-pin"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter" id="tab">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th>Action</th>
                                            <th>Affectation Sepre</th>
                                            <th>Affectation Sqe</th>
                                            <th>Affectation Sgdph</th>
                                            <th>Affectation Stah</th>
                                            <th width="5%">id_projet</th>
                                            <th width="15%">Etat du dossier </th>
                                            <th width="15%">Durée </th>
                                            <th width="15%">numéro de dossier</th>
                                            <th width="15%">intitule_projet</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>';
                }
            ?>

            <?php 
                
                if ($_SESSION["service"] === "SEPRE       "){
                    echo '<div class="row invisible" data-toggle="appear"> 
                    <div class="col-lg-12">
                    <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Projet d\'investissement à SEPRE</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                        <i class="si si-pin"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter" id="sepre">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th >Action</th>
                                            <th width="5%">Avis Sepre</th>
                                            <th width="5%">id_projet</th>
                                            <th width="15%">Etat du dossier </th>
                                            <th width="15%">Durée </th>
                                            <th width="15%">numéro de dossier</th>
                                            <th width="15%">intitule_projet</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>';
                }
            
            ?>
            
            <?php 
               
                if ($_SESSION["service"] === "STAH        " ){
                    echo '<div class="row invisible" data-toggle="appear"> 
                    <div class="col-lg-12">
                    <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Projet d\'investissement Affecté au STAH</h3>
                                <div class="block-options">
                                <a type="button" href="Projet_nouveau.php" class="btn btn-outline-primary mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                    </a>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                        <i class="si si-pin"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter" id="stah">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th >Action</th>
                                            <th >Avis Stah</th>
                                            <th width="5%">id_projet</th>
                                            <th width="15%">Etat du dossier </th>
                                            <th width="15%">Durée </th>
                                            <th width="15%">numéro de dossier</th>
                                            <th width="15%">intitule_projet</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>';
                }
            
            ?>
            
            <?php 

                if ($_SESSION["service"]=== "SQE         "){
                    echo '<div class="row invisible" data-toggle="appear"> 
                    <div class="col-lg-12">
                    <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Projet d\'investissement Affecté au SQE</h3>
                                <div class="block-options">
                                <a type="button" href="Projet_nouveau.php" class="btn btn-outline-primary mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                    </a>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                        <i class="si si-pin"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter" id="sqe">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th >Action</th>
                                            <th >Avis Sqe</th>
                                            <th width="5%">id_projet</th>
                                            <th width="15%">Etat du dossier </th>
                                            <th width="15%">Durée </th>
                                            <th width="15%">numéro de dossier</th>
                                            <th width="15%">intitule_projet</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>';
                }
            ?>
            
            <?php
                if ($_SESSION["service"]=== "SGDPH       " ){
                    echo '<div class="row invisible" data-toggle="appear"> 
                    <div class="col-lg-12">
                    <div class="block block-rounded block-bordered">
                            <div class="block-header block-header-default border-b">
                                <h3 class="block-title">Projet d\'investissement Affecté à SGDPH</h3>
                                <div class="block-options">
                                <a type="button" href="Projet_nouveau.php" class="btn btn-outline-primary mr-5 mb-5">
                                    <i class="fa fa-plus mr-5"></i>Ajouter Projet
                                    </a>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                        <i class="si si-pin"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <table class="table table-bordered table-striped table-vcenter" id="sgdph">
                                    <thead style="font-size: 10px; color:black">
                                        <tr>
                                            <th >Action</th>
                                            <th >Avis Sepre</th>
                                            <th width="5%">id_projet</th>
                                            <th width="15%">Etat du dossier </th>
                                            <th width="15%">Durée </th>
                                            <th width="15%">numéro de dossier</th>
                                            <th width="15%">intitule_projet</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>';
                }

               

            ?>
            
            
            <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Information générale</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <?php 
                                var_dump($id);
                                ?>
                                        <!-- <form  action="" method="GET">
                                            <input  type="text" class="form-control" id="id_prj" name="id_prj" value="" readonly>
                                        </form> -->
                                        <p id="id_prj"></p>
                                <table class="table table-striped table-borderless ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">La durée</span>&nbsp
                                                    <?php 
                                                        $b = new Projet_Service();
                                                        $e= new Etat_Service();
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getetat_dossier());
                                                        $bb1= $b->dureeprj($id);
                                                        foreach($bb1 as $row){
                                                            echo '<span class="badge badge-success">'.$row[1].' jours </span>';
                                                        }
                                                    ?> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Etat du Projet</span>&nbsp
                                                    <?php 
                                                        $b = new Projet_Service();
                                                        $e= new Etat_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getetat_dossier());
                                                        $bb1= $b->dureeprj($id);
                                                        echo '<span class="badge badge-warning">'.$ee->getetat_dossier().'</span>';
                                                    ?>
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Intitulé Projet</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getintitule_pr().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro du dossier</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getnum_oss().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d'archive</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getnum_archv().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d'arrivée à l'ABHT</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getdate_arr_abht().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d'arrivée au BET</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getdate_arr_bet().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Maitre d'Ouvrage</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getmaitre_ouv().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Architecte</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getarchitecte().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Titre foncier</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->gettitre_foncier().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Douar Localite</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getdouar_loc().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Fond du dossier</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getfond_doss().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Surface Batie</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getsurf_bat().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Commune</span>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Commune_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getcom());
                                                        echo '<div style="width:50%">'. $ee->getcommune().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Province</span>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Province_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getprovince());
                                                        echo '<div style="width:50%">'. $ee->getprovince_a().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Categorie</span>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Categorie_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getcatg());
                                                        echo '<div style="width:50%">'. $ee->getcategorie().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Type de projet</span>
                                                    
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_projet());
                                                        echo '<div style="width:50%">'. $ee->gettype_projet().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Type de dossier</span>
                                                    
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_Dossier_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_doss());
                                                        echo '<div style="width:50%">'. $ee->gettype_d().'</div>';
                                                    ?>
                                                </td>
                                            </tr>

                                            

                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date de commissions</span>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<div style="width:50%">'. $bb->getdate_comm().'</div>';
                                                    ?>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                                <i class="fa fa-check"></i> Perfect
                            </button>
                        </div>
                    </div>
                </div>                
            </div>
        </div>


    <?php 
    require_once 'Projet_footer.php';
    ?>
        <!-- <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script> -->
        <!-- <script src="assets/js/pages/be_comp_charts.js"></script>
        <script>
            jQuery(function () {
                // Init page helpers (Easy Pie Chart plugin)
                Codebase.helpers('easy-pie-chart');
            });
        </script> -->
        <script>
            function info(id){
                        $("#id_prj").html(id);
                        $('#modal-terms').modal('show');}
                        
            $(document).ready( function() {
                $('#info').click(function() {
                    var id = $(this).data('id');
                    $('#info').attr('href', 'http://localhost/projectpfe/projetversion2/gestion_projet/Projet_tableau_bord.php?id=' + id); 
                    $('#modal-terms').show(); 
                } );
                var ajax1={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet_dure_etat.php",type: 'POST',dataSrc: 'data'};
                var column5=[
                            {data:'id',
                            render: function (data) {
                                    return '<a class="btn btn-sm btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a><a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" id="info" onclick="info('+data+')" ><i class="fa fa-info"></i></a><a type="button" href="Projet_details1.php?id='+data+'" class="badge badge-pill badge-info">Service</a>';
                                },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.sepre == null || data.sepre == false ){
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.sqe == null || data.sqe == false){
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.sgdph == null || data.sgdph == false){
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.stah == null || data.stah == false){
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-check"></i></a>';
                                }
                            },
                            orderable: false},
                            { data:'id',className:"data1"},
                            {data:'etat_dossier',
                                render:function(data){
                                    if ( data === "Nouveau dossier" ) {
                                        return '<span class="badge badge-danger">'+ data+' </span>';
                                    }else if(data === "Dossier cloturer" )
                                    {
                                        return '<span class="badge badge-success">'+ data+' </span>';
                                    }
                                }
                            },
                            {data:'duree',
                                render: function (data) {
                                    if ( data <= 5 ) {
                                        return '<span class="badge badge-success">'+ data+' jours</span>';
                                    }else if(data > 5 && data <= 15 )
                                    {
                                        return '<span class="badge badge-warning">'+ data+' jours </span>';
                                    }
                                    else{
                                        return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                    }
                                },
                            },
                            { data: 'numero_dossier',className:"data2" },
                            {data:'intitule_projet',className:"data3"},
                            // {data:'duree',
                            // render: function (data) {
                            //     if ( data <= 10 ) {
                            //         return '<span class="badge badge-success">'+ data+' jours</span>';
                            //     }else if(data > 10 && data <= 30 )
                            //     {
                            //         return '<span class="badge badge-warning">'+ data+' jours </span>';
                            //     }
                            //     else{
                            //         return '<span class="badge badge-danger">'+ data+' jours </span>' 
                            //     }
                            // },
                            // orderable: false },
                            
                        ];

                        
                // $('#info').on('click', function(e) {
                //     var id = $(e.relatedTarget).data('id');
                //     $('#info').attr('href', 'http://localhost/projectpfe/projetversion2/gestion_projet/Projet_tableau_bord.php?id=' + id);
                // });

                
                    
                $('#tab').DataTable({
                            "paging"   : true,
                            "lengthChange": true,
                            "searching "  : true,
                            "ordering"    : true,
                            "info  "      : true,
                            "autoWidth"   : true,
                            "scrollX": true,
                            "sScrollX": '100%',
                            "pageLength": 5,
                            ajax: ajax1,
                            columns:column5,
                            columnDefs: [
                        { width: 200, targets: 0 }
                        ],
                        fixedColumns: true
                        });

                var sepreajax={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet.sepre.php",type: 'POST',dataSrc: 'data'};
                var seprecolumn=[
                            {data:'id',
                            render: function (data) {
                                    return '<a type="button" href="Projet_details1.php?id='+data+'" class="badge badge-pill badge-info">Service</a>';
                                },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.sepre == null || data.sepre == false ){
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }
                            },
                            orderable: false},
                            { data:'id',className:"data1"},
                            {data:'etat_dossier',
                                render:function(data){
                                    if ( data === "Nouveau dossier" ) {
                                        return '<span class="badge badge-danger">'+ data+' </span>';
                                    }else if(data === "Dossier cloturer" )
                                    {
                                        return '<span class="badge badge-success">'+ data+' </span>';
                                    }
                                }
                            },
                            {data:'duree',
                                render: function (data) {
                                    if ( data <= 5 ) {
                                        return '<span class="badge badge-success">'+ data+' jours</span>';
                                    }else if(data > 5 && data <= 15 )
                                    {
                                        return '<span class="badge badge-warning">'+ data+' jours </span>';
                                    }
                                    else{
                                        return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                    }
                                },
                            },
                            { data: 'numero_dossier',className:"data2" },
                            {data:'intitule_projet',className:"data3"},
                            
                        ];
                $('#sepre').DataTable({
                            "paging"   : true,
                            "lengthChange": true,
                            "searching "  : true,
                            "ordering"    : true,
                            "info  "      : true,
                            "autoWidth"   : true,
                            "scrollX": true,
                            "sScrollX": '100%',
                            "pageLength": 5,
                            ajax: sepreajax,
                            columns:seprecolumn,
                            columnDefs: [
                        { width: 200, targets: 0 }
                        ],
                        fixedColumns: true
                        });   
                        
                        
                        var sqeajax={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet.sqe.php",type: 'POST',dataSrc: 'data'};
                        var sqecolumn=[
                                    {data:'id',
                                    render: function (data) {
                                            return '<a type="button" href="Projet_details1.php?id='+data+'" class="badge badge-pill badge-info">Service</a>';
                                        },
                                    orderable: false},
                                    {data: function (data,type,row) {
                                        if (data.sqe == null || data.sqe == false ){
                                            return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                        }else{
                                            return '<a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+ data+'"><i class="fa fa-info"></i></a>';
                                        }
                                    },
                                    orderable: false},
                                    { data:'id',className:"data1"},
                                    {data:'etat_dossier',
                                        render:function(data){
                                            if ( data === "Nouveau dossier" ) {
                                                return '<span class="badge badge-danger">'+ data+' </span>';
                                            }else if(data === "Dossier cloturer" )
                                            {
                                                return '<span class="badge badge-success">'+ data+' </span>';
                                            }
                                        }
                                    },
                                    {data:'duree',
                                        render: function (data) {
                                            if ( data <= 5 ) {
                                                return '<span class="badge badge-success">'+ data+' jours</span>';
                                            }else if(data > 5 && data <= 15 )
                                            {
                                                return '<span class="badge badge-warning">'+ data+' jours </span>';
                                            }
                                            else{
                                                return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                            }
                                        },
                                    },
                                    { data: 'numero_dossier',className:"data2" },
                                    {data:'intitule_projet',className:"data3"},
                                    
                                ];
                        $('#sqe').DataTable({
                                    "paging"   : true,
                                    "lengthChange": true,
                                    "searching "  : true,
                                    "ordering"    : true,
                                    "info  "      : true,
                                    "autoWidth"   : true,
                                    "scrollX": true,
                                    "sScrollX": '100%',
                                    "pageLength": 5,
                                    ajax: sqeajax,
                                    columns:sqecolumn,
                                    columnDefs: [
                                { width: 200, targets: 0 }
                                ],
                                fixedColumns: true
                                }); 
                        
                    var stahajax={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet.stah.php",type: 'POST',dataSrc: 'data'};
                    var stahcolumn=[
                                {data:'id',
                                render: function (data) {
                                        return '<a type="button" href="Projet_details1.php?id='+data+'" class="badge badge-pill badge-info">Service</a>';
                                    },
                                orderable: false},
                                {data: function (data,type,row) {
                                    if (data.stah == null || data.stah == false ){
                                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                    }else{
                                        return '<a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+ data+'"><i class="fa fa-info"></i></a>';
                                    }
                                },
                                orderable: false},
                                { data:'id',className:"data1"},
                                {data:'etat_dossier',
                                    render:function(data){
                                        if ( data === "Nouveau dossier" ) {
                                            return '<span class="badge badge-danger">'+ data+' </span>';
                                        }else if(data === "Dossier cloturer" )
                                        {
                                            return '<span class="badge badge-success">'+ data+' </span>';
                                        }
                                    }
                                },
                                {data:'duree',
                                    render: function (data) {
                                        if ( data <= 5 ) {
                                            return '<span class="badge badge-success">'+ data+' jours</span>';
                                        }else if(data > 5 && data <= 15 )
                                        {
                                            return '<span class="badge badge-warning">'+ data+' jours </span>';
                                        }
                                        else{
                                            return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                        }
                                    },
                                },
                                { data: 'numero_dossier',className:"data2" },
                                {data:'intitule_projet',className:"data3"},
                                
                            ];
                    $('#stah').DataTable({
                                "paging"   : true,
                                "lengthChange": true,
                                "searching "  : true,
                                "ordering"    : true,
                                "info  "      : true,
                                "autoWidth"   : true,
                                "scrollX": true,
                                "sScrollX": '100%',
                                "pageLength": 5,
                                ajax: stahajax,
                                columns:stahcolumn,
                                columnDefs: [
                            { width: 200, targets: 0 }
                            ],
                            fixedColumns: true
                            }); 

                    var sgdphajax={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet.sgdph.php",type: 'POST',dataSrc: 'data'};
                    var sgdphcolumn=[
                                {data:'id',
                                render: function (data) {
                                        return '<a type="button" href="Projet_details1.php?id='+data+'" class="badge badge-pill badge-info">Service</a>';
                                    },
                                orderable: false},
                                {data: function (data,type,row) {
                                    if (data.sgdph == null || data.sgdph == false ){
                                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                    }else{
                                        return '<a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+ data+'"><i class="fa fa-info"></i></a>';
                                    }
                                },
                                orderable: false},
                                { data:'id',className:"data1"},
                                {data:'etat_dossier',
                                    render:function(data){
                                        if ( data === "Nouveau dossier" ) {
                                            return '<span class="badge badge-danger">'+ data+' </span>';
                                        }else if(data === "Dossier cloturer" )
                                        {
                                            return '<span class="badge badge-success">'+ data+' </span>';
                                        }
                                    }
                                },
                                {data:'duree',
                                    render: function (data) {
                                        if ( data <= 5 ) {
                                            return '<span class="badge badge-success">'+ data+' jours</span>';
                                        }else if(data > 5 && data <= 15 )
                                        {
                                            return '<span class="badge badge-warning">'+ data+' jours </span>';
                                        }
                                        else{
                                            return '<span class="badge badge-danger">'+ data+' jours </span>' 
                                        }
                                    },
                                },
                                { data: 'numero_dossier',className:"data2" },
                                {data:'intitule_projet',className:"data3"},
                                
                            ];
                    $('#sgdph').DataTable({
                                "paging"   : true,
                                "lengthChange": true,
                                "searching "  : true,
                                "ordering"    : true,
                                "info  "      : true,
                                "autoWidth"   : true,
                                "scrollX": true,
                                "sScrollX": '100%',
                                "pageLength": 5,
                                ajax: sgdphajax,
                                columns:sgdphcolumn,
                                columnDefs: [
                            { width: 200, targets: 0 }
                            ],
                            fixedColumns: true
                            }); 
            });
        </script>
    </body>
</html>