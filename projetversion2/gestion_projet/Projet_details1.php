<?php
    /**
    * OUMAIMA SABI
    * DATE:20/05/2022
    */
    require_once 'fonctionnalities/Session.php';
    require_once 'fonctionnalities/Service_ajout.php';
    require_once 'fonctionnalities/Home.php';

?>
        <div class="content">
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-3 col-xl-3">
                    <a class="block block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full text-right">
                        <?php 
                            $a= new Projet_Service();
                            $aa= $a->findById($_GET['id']);
                            echo '<div class="font-size-h2 font-w700">'.$aa->getnum_oss().'</div>';
                        ?>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Numéro du dossier</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row invisible" data-toggle="appear">
                <?php 
                if ($_SESSION["service"] === "Hydroleader "){
                echo'<div class="col-lg-12">
                        <div class="block" style="box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.1) !important">
                            <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist" style="background-color:#e6eef7 !important">
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link active" href="#sepre">Service SEPRE</a>
                                </li>
                                <li class="nav-item" style="background-color:#e6eef7!important">
                                    <a class="nav-link" href="#sqe">Service SQE</a>
                                </li>
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link" href="#sgdph">Service SGDPH</a>
                                </li>
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link" href="#stah">Service STAH</a>
                                </li>
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link" href="#abht">Service ABHT</a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <div class="block-options mr-15">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <div class="block-content tab-content" style="background-color:#f9f9f9 !important">
                                <div class="tab-pane active" id="sepre" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless" >
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis du SEPRE</h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum1" onclick="showModal1()" >
                                                                <i class="fa fa-plus mr-5"></i>Avis
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm ">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10%;"></th>
                                                                <th style="width: 50%;">Avis</th>
                                                                <th style="width: 20%;">Information</th>
                                                                <th class="d-none d-sm-table-cell"></th>
                                                            </tr>
                                                        </thead>';
                                                        $a= new SEPRE_S_INFO();
                                                        $aa= $a->find_prj_sepre($_GET['id']);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){
                                                            echo    '<tbody class="js-table-sections-header bg-gray-lighter">
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-plus-circle" style="color:red"></i>
                                                                            </td>';
                                                                            if($row['avis']==='Favorable'){
                                                                                echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Favorable avec réserve'){
                                                                                echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Défavorable'){
                                                                                echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Archiver'){
                                                                                echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Ajourné'){
                                                                                echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Aucun Avis'){
                                                                                echo '<td>'.$row['avis'].'</td>';
                                                                            }
                                                                            echo '<td class="font-w600"></td>
                                                                           
                                                                            <td class="font-w600">
                                                                            </td>
                                                                            <td class="font-w600">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Remarque Besoin de l\'eau</td>
                                                                        <td class="font-size-sm">'.$row['remarque_bet_besoin_eau'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600">Avis du service</td>
                                                                        <td class="font-size-sm">'.$row['avis'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Remarque Supplémentaire</td>
                                                                        <td class="font-size-sm">'.$row['remarques_sup_sepre'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du BET</td>';

                                                                        if( $row['duree_avis_sepre'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 10 && $row['duree_avis_sepre'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }
                                                                       
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du SEPRE</td>';
                                                                        if( $row['duree_avis_sepre'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 10 && $row['duree_avis_sepre'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                        }
                                                                        
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Date d\'avis SEPRE</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_sepre'].'</td>
                                                                        <td class="font-size-sm">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Date de remarque BET</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_bet_sepre'].'</td>
                                                                        <td class="font-size-sm">
                                                                        </td>
                                                                    </tr>
                                                                </tbody> ';
                                                            }}
                                                    
                                              echo '</table>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                                            
                                        $a= new SEPRE_S_INFO();
                                        $aa= $a->findsepre($_GET['id']);
                                        if($aa){
                                            echo '<div class="col-lg-4 ml-auto">
                                            <div class="block block-borderless ">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Information </h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                    <table class="table table-borderless table-sm table-striped ">';
                                                        foreach($aa as $row){
                                                        echo'
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SEPRE</span><br>'.$row['id_sepre_info'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine AEP</span><br>'.$row['origine_aep'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autre Origine</span><br>'.$row['origine_autre'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Besoin de l\'eau domestique</span><br>'.$row['besoin_eau_domestique'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Besoin de l\'eau d\'irrigation</span><br>'.$row['besoin_eau_irrigation'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'info</span><br>'.$row['origine_autre'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    ';}
                                                echo '</table>
                                                </div>
                                            </div>
                                        </div>';}else{
                                        echo '<div class="col-lg-4 ml-auto">
                                                <div class="block block-borderless ">
                                                    <div class="block-header block-header-default">
                                                        <h3 class="block-title">Information </h3>
                                                        <div class="block-options">
                                                            <div class="block-options-item">
                                                                <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" href="javascript:void(0)" data-toggle="modal" data-target="#modal-terms" >
                                                                    <i class="fa fa-plus mr-5"></i>info
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                    </div>
                                                </div>
                                            </div>';
                                        }
                                    echo '</div>
                                </div>
                                <div class="tab-pane" id="sqe" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis du SQE</h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum2" onclick="showModal2()" >
                                                                <i class="fa fa-plus mr-5"></i>Avis
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Avis</th>
                                                                <th>Information</th>
                                                                <th class="d-none d-sm-table-cell" ></th>
                                                                
                                                            </tr>
                                                        </thead>';
                                                            $a= new SQE_S_INFO();
                                                            $aa= $a->find_prj_sqe($_GET['id']);
                                                            $oum="kjsdfh";
                                                            if($aa){
                                                                foreach($aa as $row){
                                                        echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-plus-circle" style="color:red"></i>
                                                                        </td>';
                                                                        if($row['avis']==='Favorable'){
                                                                            echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                        }elseif($row['avis']==='Favorable avec réserve'){
                                                                            echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                        }elseif($row['avis']==='Défavorable'){
                                                                            echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                        }elseif($row['avis']==='Archiver'){
                                                                            echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                        }elseif($row['avis']==='Ajourné'){
                                                                            echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                        }elseif($row['avis']==='Aucun Avis'){
                                                                            echo '<td>'.$row['avis'].'</td>';
                                                                        }
                                                                        echo '<td class="font-w600"></td>
                                                                        <td class="d-none d-sm-table-cell"></td>
                                                                    </tr>
                                                                </tbody>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Remarque d\'assainissement</td>
                                                                        <td class="font-size-sm">'.$row['remarque_bet_assainissement'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600">Remarque Supplémentaire</td>
                                                                        <td class="font-size-sm">'.$row['remarque_sup_sqe'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Avis</td>
                                                                        <td class="font-size-sm">'.$row['avis'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">La date de la remarque du SEPRE</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_sqe'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">La date de la remarque du BET</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_bet_sqe'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                        if( $row['duree_avis'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                        }
                                                                        echo '<td class="d-none d-sm-table-cell"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du SQE</td>';
                                                                        if( $row['duree_avis_sqe'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sqe'] > 10 && $row['duree_avis_sqe'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sqe'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Approuvée par</td>
                                                                        <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                            <span class="font-size-sm text-muted"></span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>';
                                                            }}
                                                    echo'</table>
                                                </div>
                                            </div>
                                        </div>';
                                        
                                                    $a= new SQE_S_INFO();
                                                    $aa= $a->findsqe($_GET['id']);
                                                    if($aa){
                                        echo'<div class="col-lg-4 ml-auto">
                                            <div class="block block-borderless ">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Information </h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                <table class="table table-borderless table-sm table-striped ">';
                                                        foreach($aa as $row){
                                                      echo '
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SQE</span><br>'.$row['id_sqe_info'].'</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Volume eau usée</span><br>'.$row['volume_eau_usee'].'</p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Mode d\'assainissement</span><br>'.$row['mode_assainissement'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Reutilisation QEU</span><br>'.$row['reutilisation_qeu'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Reutilisation de niveau de traitement</span><br>'.$row['reutilisation_niveau_traitement'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Niveau piézométrique</span><br>'.$row['niveau_piezometrique'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">date de niveau piézométrique</span><br>'.$row['date_niveau_piezometrique'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">piezometre X</span><br>'.$row['piezometre_x'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">piezometre y</span><br>'.$row['piezometre_y'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date info</span><br>'.$row['date_info'].'
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                        </td>
                                                                    </tr>
                                                                </tbody>';
                                                            }
                                                                
                                                      echo '</table>
                                                </div>
                                            </div>
                                        </div>';}else{
                                            echo '
                                        <div class="col-lg-4 ml-auto">
                                            <div class="block block-borderless ">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Information </h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" href="javascript:void(0)" data-toggle="modal" data-target="#ajout_info_sqe">
                                                                <i class="fa fa-plus mr-5"></i>info
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    echo '</div>
                                </div>
                                <div class="tab-pane" id="sgdph" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis SGDPH</h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum4" onclick="showModal4()" >
                                                                <i class="fa fa-plus mr-5"></i>Avis
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm ">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10%;"></th>
                                                                <th style="width: 30%;">Avis</th>
                                                                <th style="width: 50%;">Information</th>
                                                                <th class="d-none d-sm-table-cell" style="width: 20%;">Delais</th>
                                                            </tr>
                                                        </thead>';
                                                            $a= new SGDPH_S_INFO();
                                                            $aa= $a->find_prj_sgdph($_GET['id']);
                                                            $oum="kjsdfh";
                                                            if($aa){
                                                            foreach($aa as $row){
                                                         echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-plus-circle" style="color:red"></i>
                                                                </td>';

                                                                if($row['avis']==='Favorable'){
                                                                    echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Favorable avec réserve'){
                                                                    echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Défavorable'){
                                                                    echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Archiver'){
                                                                    echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Ajourné'){
                                                                    echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Aucun Avis'){
                                                                    echo '<td>'.$row['avis'].'</td>';
                                                                }
                                                                echo '<td class="font-w600"></td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Remarque BET protection d\'inondation</td>
                                                                <td class="font-size-sm">'.$row['remarque_bet_protection_inondations'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Remarque Supplémentaire</td>
                                                                <td class="font-size-sm">'.$row['remarque_sup_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600">Avis du service</td>
                                                                <td class="font-size-sm">'.$row['avis'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                if( $row['duree_avis_sgdph'] < 11 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }elseif($row['duree_avis_sgdph'] > 10 && $row['duree_avis_sgdph'] < 30 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }elseif($row['duree_avis_sgdph'] > 29){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }

                                                                echo '<td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Durée de la remarque du SGDPH</td>';
                                                                if( $row['duree_avis'] < 11 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                }elseif($row['duree_avis'] > 29){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                }
                                                                echo '<td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Date de la remarque du BET</td>
                                                                <td class="font-size-sm">'.$row['date_avis_bet_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">La date de la remarque du SGDPH</td>
                                                                <td class="font-size-sm">'.$row['date_avis_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Valide par</td>
                                                                <td class="font-size-sm">'.$row['validee'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                   
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Approuvée par</td>
                                                                <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Utilisateur BET</td>
                                                                <td class="font-size-sm">'.$row['user_name'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>   ';
                                                    }}    
                                              echo '</table>
                                                </div>
                                            </div>
                                        </div>';
                                       
                                                    $a= new SGDPH_S_INFO();
                                                    $aa= $a->findsgdph($_GET['id']);
                                                    if($aa){
                                                        echo ' <div class="col-lg-4 ml-auto">
                                                        <div class="block block-borderless ">
                                                            <div class="block-header block-header-default">
                                                                <h3 class="block-title">Information </h3>
                                                                <div class="block-options">
                                                                </div>
                                                            </div>
                                                            <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                                <table class="table table-borderless table-sm table-striped ">';
                                                        foreach($aa as $row){
                                                        echo ' 
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SGDPH</span><br>'.$row['id_sgdph_info'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Type cours d\'eau</span><br>'.$row['type_cours_eau'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Crue 100</span><br>'.$row['crue_100'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Servitude</span><br>'.$row['servitude'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Nature cours d\'eau </span><br>'.$row['nature'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine aep puits X</span><br>'.$row['origine_aep_puits_x'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine aep puits Y</span><br>'.$row['origine_aep_puits_y'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Pf Creusement</span><br>'.$row['autorisation_pf_creusement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Pf Creusement</span><br>
                                                                                '.$row['autorisation_creusement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Pf Creusement</span>'.$row['autorisation_creusement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Pf Prelevement</span><br>'.$row['autorisation_pf_prelevement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Pf Prelevement</span>'.$row['autorisation_prelevement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Pf Prelevement</span>'.$row['autorisation_prelevement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Deversement</span><br>'.$row['autorisation_deversement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Deversement</span><br>'.$row['autorisation_deversement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Deversement</span><br>'.$row['autorisation_deversement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Occupation DPH</span>'.$row['autorisation_occupation_dph'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Occupation DPH</span>'.$row['autorisation_occupation_dph_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Occupation DPH</span><br>'.$row['autorisation_occupation_dph_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autre autorisation</span><br>'.$row['autre_autorisation'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'info</span><br>'.$row['date_info'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>';
                                                                }
                                                                echo '</table>
                                                                </div>
                                                            </div>
                                                        </div>';}else{
                                                                    echo '
                                                                <div class="col-lg-4 ml-auto">
                                                                    <div class="block block-borderless ">
                                                                        <div class="block-header block-header-default">
                                                                            <h3 class="block-title">Information </h3>
                                                                            <div class="block-options">
                                                                                <div class="block-options-item">
                                                                                    <a type="button" class="btn btn-rounded btn-alt-info"  id="oum3" onclick="showModal3()" >
                                                                                        <i class="fa fa-plus mr-5"></i>Ajouter
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                                }
                                                                echo '</div></div>';

                                echo '
                                <div class="tab-pane" id="stah" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis STAH</h3>
                                                    <div class="block-options-item">
                                                        <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum7" onclick="showModal7()" >
                                                            <i class="fa fa-plus mr-5"></i>Avis
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Avis</th>
                                                                <th>Information</th>
                                                                <th class="d-none d-sm-table-cell" ></th>
                                                            </tr>
                                                        </thead>';
                                                        $a= new STAH_S_INFO();
                                                        $aa= $a->find_prj_stah($_GET['id']);
                                                        // var_dump($aa);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){
                                                        echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-plus-circle" style="color:red"></i>
                                                                    </td>';
                                                                    if($row['avis_stah']==='Favorable'){
                                                                        echo '<td><span class="badge badge-pill badge-success">'.$row['avis_stah'].'</span></td>';
                                                                    }elseif($row['avis_stah']==='Favorable avec réserve'){
                                                                        echo '<td><span class="badge badge-pill badge-warning">'.$row['avis_stah'].'</span></td>';
                                                                    }elseif($row['avis_stah']==='Défavorable'){
                                                                        echo '<td><span class="badge badge-pill badge-danger">'.$row['avis_stah'].'</span></td>';
                                                                    }elseif($row['avis_stah']==='Archiver'){
                                                                        echo '<td><span class="badge badge-pill badge-info">'.$row['avis_stah'].'</span></td>';
                                                                    }elseif($row['avis_stah']==='Ajourné'){
                                                                        echo '<td><span class="badge badge-pill badge-primary">'.$row['avis_stah'].'</span></td>';
                                                                    }elseif($row['avis_stah']==='Aucun Avis'){
                                                                        echo '<td>'.$row['avis_stah'].'</td>';
                                                                    }
                                                                    echo '<td class="font-w600"></td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Aménagement proposé</td>
                                                                    <td class="font-size-sm">'.$row['amenagement_propose'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Avis stah</td>
                                                                    <td class="font-size-sm">'.$row['avis_stah'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">Avis abht aménagement</td>
                                                                    <td class="font-size-sm">'.$row['avis_amg'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">La date de la remarque du SEPRE</td>
                                                                    <td class="font-size-sm">'.$row['date_avis_stah'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">La date de la remarque du BET</td>
                                                                    <td class="font-size-sm">'.$row['date_avis_bet_stah'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                          
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                    if( $row['duree_avis'] < 11 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                    }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                    }elseif($row['duree_avis'] > 29){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                    }
                                                                    
                                                                    echo '<td class="d-none d-sm-table-cell"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Durée de la remarque du SEPRE</td>';
                                                                    if( $row['duree_avis_stah'] < 11 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_stah'].' jours</span></td>';
                                                                    }elseif($row['duree_avis_stah'] > 10 && $row['duree_avis_stah'] < 30 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_stah'].' jours</span></td>';
                                                                    }elseif($row['duree_avis_stah'] > 29){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_stah'].' jours</span></td>';
                                                                    }
                                                                    echo '<td class="d-none d-sm-table-cell">
                                                                          
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Valide par</td>
                                                                    <td class="font-size-sm">'.$row['validee'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Approuvé par</td>
                                                                    <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                            
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Utilisateur BET</td>
                                                                    <td class="font-size-sm">'.$row['user_name'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                            
                                                                    </td>
                                                                </tr>';
                                                            }}
                                                    echo ' </tbody>   
                                                    </table>
                                                </div>
                                            </div>
                                        </div>';
                                                        $a= new STAH_S_INFO();
                                                        $aa= $a->findstah($_GET['id']);
                                                        // var_dump($aa);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            echo '<div class="col-lg-4 ml-auto">
                                                            <div class="block block-borderless ">
                                                                <div class="block-header block-header-default">
                                                                    <h3 class="block-title">Information </h3>
                                                                    <div class="block-options">
                                                                    </div>
                                                                </div>
                                                                <div class="block-content" data-toggle="slimscroll" data-height="250px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                                    <table class="table table-borderless table-sm table-striped ">';
                                                            foreach($aa as $row){
                                                        echo '<tbody>
                                                                <tr>
                                                                    <td>
                                                                        <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du STAH</span><br>'.$row['id_stah_info'].'</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Superficie BV</span><br>'.$row['superficie_bv'].'</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">date info</span><br>'.$row['date_info'].'
                                                                        <span class="badge badge-success"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['usename'].'
                                                                        <span class="badge badge-success"></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                        }
                                                        echo '</table>
                                                        </div>
                                                    </div>
                                                </div>';}else{
                                                    echo '
                                                        <div class="col-lg-4 ml-auto">
                                                            <div class="block block-borderless ">
                                                                <div class="block-header block-header-default">
                                                                    <h3 class="block-title">Information </h3>
                                                                    <div class="block-options">
                                                                        <div class="block-options-item">
                                                                            <a type="button" class="btn btn-rounded btn-alt-info" href="javascript:void(0)" data-toggle="modal" data-target="#ajout_info_stah">
                                                                                <i class="fa fa-plus mr-5"></i>Ajouter
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="block-content" data-toggle="slimscroll" data-height="250px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                                </div>
                                                            </div>
                                                        </div>';
                                                }
                                              echo '</div>
                                </div>
                                <div class="tab-pane" id="abht" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis ABHT</h3>
                                                    <div class="block-options-item">
                                                        <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info"  id="oum8" onclick="showModal8()">
                                                            <i class="fa fa-plus mr-5"></i>Avis
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Avis</th>
                                                                <th>Information</th>
                                                                <th class="d-none d-sm-table-cell" ></th>
                                                            </tr>
                                                        </thead>';
                                                        $a= new ABHT_Service();
                                                        $aa= $a->find_prj_abht($_GET['id']);
                                                        // var_dump($aa);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){ 
                                                      echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-plus-circle" style="color:red"></i>
                                                                </td>';
                                                                if($row['avis_abht']==='Favorable'){
                                                                    echo '<td><span class="badge badge-pill badge-success">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Favorable avec réserve'){
                                                                    echo '<td><span class="badge badge-pill badge-warning">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Défavorable'){
                                                                    echo '<td><span class="badge badge-pill badge-danger">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Archiver'){
                                                                    echo '<td><span class="badge badge-pill badge-info">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Ajourné'){
                                                                    echo '<td><span class="badge badge-pill badge-primary">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Aucun Avis'){
                                                                    echo '<td>'.$row['avis_abht'].'</td>';
                                                                }
                                                                echo '<td class="font-w600"></td>
                                                                <td class="d-none d-sm-table-cell"></td>
                                                                <td class="d-none d-sm-table-cell"></td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center"> <i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Remarque Générale du BET</td>
                                                                <td class="font-size-sm ">'.$row['remarques_generales_bet'].'</td>
                                                                <td class="font-size-sm"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"> <i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Date de remarque</td>
                                                                <td class="font-w600 ">'.$row['date_avis_bet_abht'].'</td>
                                                                <td class="font-size-sm"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Avis ABHT</td>
                                                                <td class="font-size-sm">'.$row['avis_abht'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"> <i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600">Etabli par</td>
                                                                <td class="font-size-sm">'.$row['etabli'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"> <i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Valide par</td>
                                                                <td class="font-size-sm">'.$row['validee'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                    <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                    <td class="font-w600 ">Approuvé par</td>
                                                                    <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"> <i class="fa fa-caret-right"></i></td>
                                                                    <td class="font-w600 ">Utilisateur BET</td>
                                                                    <td class="font-size-sm">'.$row['user_name'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                        </tbody>';
                                                    }}                            
                                                echo'</table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                        
                    </div>';
                }
                ?>
                <?php 
                if ($_SESSION["service"] === "SEPRE       "){
                echo'<div class="col-lg-12">
                        <div class="block" style="box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.1) !important">
                            <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist" style="background-color:#e6eef7 !important">
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link active" href="#sepre">Service SEPRE</a>
                                </li>
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link" href="#abht">Service ABHT</a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <div class="block-options mr-15">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <div class="block-content tab-content" style="background-color:#f9f9f9 !important">
                                <div class="tab-pane active" id="sepre" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless" >
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis du SEPRE</h3>
                                                    <div class="block-options">
                                                        
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm ">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10%;"></th>
                                                                <th style="width: 50%;">Avis</th>
                                                                <th style="width: 20%;">Information</th>
                                                                <th class="d-none d-sm-table-cell" style="width: 30%;"></th>
                                                            </tr>
                                                        </thead>';
                                                        $a= new SEPRE_S_INFO();
                                                        $aa= $a->find_prj_sepre($_GET['id']);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){
                                                            echo    '<tbody class="js-table-sections-header bg-gray-lighter">
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-plus-circle" style="color:red"></i>
                                                                            </td>';
                                                                            if($row['avis']==='Favorable'){
                                                                                echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Favorable avec réserve'){
                                                                                echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Défavorable'){
                                                                                echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Archiver'){
                                                                                echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Ajourné'){
                                                                                echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Aucun Avis'){
                                                                                echo '<td>'.$row['avis'].'</td>';
                                                                            }
                                                                            echo '<td class="font-w600"></td>
                                                                            ';
                                                                            if (isset($row['date_avis_sepre'])){
                                                                                echo '<td class="d-none d-sm-table-cell"></td>';
                                                                            }else{
                                                                                echo    '<td class="d-none d-sm-table-cell">
                                                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum1" data-remarque="'.$row['remarque_bet_besoin_eau'].'" onclick="avissepre('.$row['id_sepre'].')" >
                                                                                                <i class="fa fa-plus mr-5"></i>Avis 
                                                                                            </a>
                                                                                        </td>';
                                                                            }
                                                                            echo'</tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Remarque Besoin de l\'eau</td>
                                                                        <td class="font-size-sm">'.$row['remarque_bet_besoin_eau'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600">Avis du service</td>
                                                                        <td class="font-size-sm">'.$row['avis'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Remarque Supplémentaire</td>
                                                                        <td class="font-size-sm" style="word-wrap: break-word;">'.$row['remarques_sup_sepre'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du BET</td>';

                                                                        if( $row['duree_avis_sepre'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 10 && $row['duree_avis_sepre'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sepre'].' jours</span></td>';
                                                                        }
                                                                       
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du SEPRE</td>';
                                                                        if( $row['duree_avis_sepre'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 10 && $row['duree_avis_sepre'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sepre'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                        }
                                                                        
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Date d\'avis SEPRE</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_sepre'].'</td>
                                                                        <td class="font-size-sm">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Date de remarque BET</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_bet_sepre'].'</td>
                                                                        <td class="font-size-sm">
                                                                        </td>
                                                                    </tr>
                                                                </tbody> ';
                                                            }}
                                                    
                                              echo '</table>
                                                </div>
                                            </div>
                                        </div>';
                                                            
                                        $a= new SEPRE_S_INFO();
                                        $aa= $a->findsepre($_GET['id']);
                                        if($aa){
                                        foreach($aa as $row){
                                        echo'<div class="col-lg-4 ml-auto">
                                            <div class="block block-borderless ">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Information </h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                                    <table class="table table-borderless table-sm table-striped ">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SEPRE</span><br>'.$row['id_sepre_info'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine AEP</span><br>'.$row['origine_aep'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autre Origine</span><br>'.$row['origine_autre'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Besoin de l\'eau domestique</span><br>'.$row['besoin_eau_domestique'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Besoin de l\'eau d\'irrigation</span><br>'.$row['besoin_eau_irrigation'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'info</span><br>'.$row['origine_autre'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>';
                                        }}
                                           
                               echo '</div>
                                </div>
                                <div class="tab-pane" id="abht" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis ABHT</h3>
                                                    <div class="block-options-item">';
                                                    $a= new ABHT_Service();
                                                        $aa= $a->find_prj_abht($_GET['id']);
                                                        // var_dump($aa);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){
                                                                if (isset($row['date_avis_abht'])){
                                                                    if(($_SESSION['id_profession']===3)){
                                                                        echo'<a type="submit" href="projet_cloturer.php?id='.$row['id_prj'].'" style="color:white !important" class="btn btn-sm btn-rounded btn-danger">
                                                                        <i class="fa fa-lock mr-5"></i>Cloturer le dossier
                                                                        </a>';
                                                                    }else{
                                                                        echo '';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        
                                                    echo'</div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 10%;"></th>
                                                                <th style="width: 50%;">Avis</th>
                                                                <th style="width: 20%;">Information</th>
                                                                <th class="d-none d-sm-table-cell" style="width: 30%;"></th>
                                                            </tr>
                                                        </thead>';
                                                        $a= new ABHT_Service();
                                                        $aa= $a->find_prj_abht($_GET['id']);
                                                        // var_dump($aa);
                                                        $oum="kjsdfh";
                                                        if($aa){
                                                            foreach($aa as $row){ 
                                                      echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-plus-circle" style="color:red"></i>
                                                                </td>';
                                                                if($row['avis_abht']==='Favorable'){
                                                                    echo '<td><span class="badge badge-pill badge-success">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Favorable avec réserve'){
                                                                    echo '<td><span class="badge badge-pill badge-warning">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Défavorable'){
                                                                    echo '<td><span class="badge badge-pill badge-danger">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Archiver'){
                                                                    echo '<td><span class="badge badge-pill badge-info">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Ajourné'){
                                                                    echo '<td><span class="badge badge-pill badge-primary">'.$row['avis_abht'].'</span></td>';
                                                                }elseif($row['avis_abht']==='Aucun Avis'){
                                                                    echo '<td>'.$row['avis'].'</td>';
                                                                }
                                                                echo '<td class="font-w600"></td>';
                                                                if (isset($row['date_avis_abht'])){
                                                                    if(($_SESSION['id_profession']===3) && ($row['approuve_par']===19) ){
                                                                        echo'<td>
                                                                            <a type="submit" href="projet_approuve_abht.php?id='.$row['id_abht'].'" style="color:white !important" class="btn btn-sm btn-rounded btn-success">
                                                                                <i class="fa fa-check mr-5"></i>Approuver
                                                                            </a> 
                                                                        </td>';
                                                                    }else{
                                                                        echo '<td></td>';
                                                                    }
                                                                }else{
                                                                    echo'<td class="d-none d-sm-table-cell"></td><td class="d-none d-sm-table-cell">
                                                                                <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum1" onclick="avisabht_sepre('.$row['id_abht'].')"  >
                                                                                    <i class="fa fa-plus mr-5"></i>Avis 
                                                                                </a>
                                                                     </td>';
                                                                }
                                                                echo'
                                                            </tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                <td class="font-size-sm">Remarque Générale du BET</td>
                                                                <td class="font-w600 ">'.$row['remarques_generales_bet'].'</td>
                                                                <td class="font-size-sm"></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Avis ABHT</td>
                                                                <td class="font-size-sm">'.$row['avis_abht'].'</td>
                                                                <td class="font-size-sm"></td>
                                                               
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600">Etabli par</td>
                                                                <td class="font-size-sm">'.$row['etabli'].'</td>
                                                                <td class="font-size-sm"></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                <td class="font-w600 ">Valide par</td>
                                                                <td class="font-size-sm">'.$row['validee'].'</td>
                                                                <td class="font-size-sm"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                    <td class="font-w600 ">Approuvé par</td>
                                                                    <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                    <td class="font-size-sm"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"><i class="fa fa-caret-right"></i></td>
                                                                    <td class="font-w600 ">Utilisateur BET</td>
                                                                    <td class="font-size-sm">'.$row['user_name'].'</td>
                                                                    <td class="font-size-sm"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Durée de la remarque du ABHT</td>';
                                                                        if( $row['duree_avis_abht'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_abht'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_abht'] > 10 && $row['duree_avis_abht'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_abht'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_abht'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_abht'].' jours</span></td>';
                                                                        }
                                                                    echo '<td class="d-none d-sm-table-cell"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                    if( $row['duree_avis'] < 11 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                    }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                    }elseif($row['duree_avis'] > 29){
                                                                        echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                    }
                                                                    echo '<td class="d-none d-sm-table-cell">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Date d\'avis ABHT</td>
                                                                    <td class="font-size-sm">'.$row['date_avis_abht'].'</td>
                                                                    <td class="font-size-sm"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-caret-right"></i>
                                                                    </td>
                                                                    <td class="font-w600 ">Date de remarque BET</td>
                                                                    <td class="font-size-sm">'.$row['date_avis_bet_abht'].'</td>
                                                                    <td class="font-size-sm"></td> 
                                                                </tr>
                                                        </tbody>';
                                                    }}                            
                                                echo'</table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
                <?php 
                if ($_SESSION["service"] === "STAH        " ){

                    echo '<div class="col-lg-12">
                    <div class="block" style="box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.1) !important">
                    <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist" style="background-color:#e6eef7 !important">
                        <li class="nav-item" style="background-color:#e6eef7 !important">
                            <a class="nav-link active" href="#stah">Service STAH</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="block-options mr-15">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                    <div class="block-content tab-content" style="background-color:#f9f9f9 !important">
                        <div class="tab-pane active" id="stah" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="block block-borderless">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Liste des avis STAH</h3>
                                            <div class="block-options-item">
                                                
                                            </div>
                                        </div>
                                        <div class="block-content ">
                                            <table class="js-table-sections table table-sm"> 
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Avis</th>
                                                        <th>Information</th>
                                                        <th class="d-none d-sm-table-cell" ></th>
                                                    </tr>
                                                </thead>';
                                                    $a= new STAH_S_INFO();
                                                    $aa= $a->find_prj_stah($_GET['id']);
                                                    // var_dump($aa);
                                                    $oum="kjsdfh";
                                                    if($aa){
                                                        foreach($aa as $row){
                                                echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-plus-circle" style="color:red"></i>
                                                            </td>';
                                                            if($row['avis_stah']==='Favorable'){
                                                                echo '<td><span class="badge badge-pill badge-success">'.$row['avis_stah'].'</span></td>';
                                                            }elseif($row['avis_stah']==='Favorable avec réserve'){
                                                                echo '<td><span class="badge badge-pill badge-warning">'.$row['avis_stah'].'</span></td>';
                                                            }elseif($row['avis_stah']==='Défavorable'){
                                                                echo '<td><span class="badge badge-pill badge-danger">'.$row['avis_stah'].'</span></td>';
                                                            }elseif($row['avis_stah']==='Archiver'){
                                                                echo '<td><span class="badge badge-pill badge-info">'.$row['avis_stah'].'</span></td>';
                                                            }elseif($row['avis_stah']==='Ajourné'){
                                                                echo '<td><span class="badge badge-pill badge-primary">'.$row['avis_stah'].'</span></td>';
                                                            }elseif($row['avis_stah']==='Aucun Avis'){
                                                                echo '<td>'.$row['avis_stah'].'</td>';
                                                            }
                                                            echo '<td class="font-w600"></td>';
                                                            if(isset($row['date_avis_stah'])){
                                                                if(($_SESSION['id_profession']===3) && ($row['approuve_par_stah']===19) ){
                                                                    echo'<td>
                                                                        <a type="submit" href="projet_approuve_stah.php?id='.$row['id_stah'].'" style="color:white !important" class="btn btn-sm btn-rounded btn-success">
                                                                            <i class="fa fa-check mr-5"></i>Approuver
                                                                        </a> 
                                                                    </td>';
                                                                }else{
                                                                    echo '<td></td>';
                                                                }
                                                            }else{
                                                                echo'<td class="d-none d-sm-table-cell">
                                                                        <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info"  onclick="avisstah('.$row['id_stah'].')" >
                                                                            <i class="fa fa-plus mr-5"></i>Avis 
                                                                        </a>
                                                                    </td>';
                                                            }
                                                                echo '</tr>
                                                        </tbody>
                                                <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Aménagement proposé</td>
                                                            <td class="font-size-sm">'.$row['amenagement_propose'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Avis stah</td>
                                                            <td class="font-size-sm">'.$row['avis_stah'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600">Avis abht aménagement</td>
                                                            <td class="font-size-sm">'.$row['avis_amg'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">La date de la remarque du SEPRE</td>
                                                            <td class="font-size-sm">'.$row['date_avis_stah'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">La date de la remarque du BET</td>
                                                            <td class="font-size-sm">'.$row['date_avis_bet_stah'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                            if( $row['duree_avis'] < 11 ){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                            }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                            }elseif($row['duree_avis'] > 29){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                            }
                                                            
                                                            echo '<td class="d-none d-sm-table-cell"></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Durée de la remarque du SEPRE</td>';
                                                            if( $row['duree_avis_stah'] < 11 ){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_stah'].' jours</span></td>';
                                                            }elseif($row['duree_avis_stah'] > 10 && $row['duree_avis_stah'] < 30 ){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_stah'].' jours</span></td>';
                                                            }elseif($row['duree_avis_stah'] > 29){
                                                                echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_stah'].' jours</span></td>';
                                                            }
                                                            echo '<td class="d-none d-sm-table-cell">
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Valide par</td>
                                                            <td class="font-size-sm">'.$row['validee'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Approuvé par</td>
                                                            <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                    
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-caret-right"></i>
                                                            </td>
                                                            <td class="font-w600 ">Utilisateur BET</td>
                                                            <td class="font-size-sm">'.$row['user_name'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                    
                                                            </td>
                                                        </tr>';
                                                    }}
                                                    echo ' </tbody>   
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ml-auto">
                                    <div class="block block-borderless ">
                                        <div class="block-header block-header-default">
                                            <h3 class="block-title">Information </h3>
                                            <div class="block-options">
                                            </div>
                                        </div>
                                        <div class="block-content" data-toggle="slimscroll" data-height="250px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                            <table class="table table-borderless table-sm table-striped ">';
                                                $a= new STAH_S_INFO();
                                                $aa= $a->findstah($_GET['id']);
                                                // var_dump($aa);
                                                $oum="kjsdfh";
                                                if($aa){
                                                    foreach($aa as $row){
                                                    echo '<tbody>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du STAH</span><br>'.$row['id_stah_info'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Superficie BV</span><br>'.$row['superficie_bv'].'</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">date info</span><br>'.$row['date_info'].'
                                                                    <span class="badge badge-success"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['usename'].'
                                                                    <span class="badge badge-success"></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>';
                                                    }}
                                            echo '</table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

                }
               ?>
               <?php 
               if ($_SESSION["service"]=== "SQE         "){

                echo   '<div class="col-lg-12">
                            <div class="block" style="box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.1) !important">
                                <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist" style="background-color:#e6eef7 !important">
                                    
                                    <li class="nav-item" style="background-color:#e6eef7!important">
                                        <a class="nav-link active" href="#sqe">Service SQE</a>
                                    </li>
                                    <li class="nav-item ml-auto">
                                        <div class="block-options mr-15">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                                <i class="si si-close"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                                <div class="block-content tab-content" style="background-color:#f9f9f9 !important">
                                    <div class="tab-pane active" id="sqe" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="block block-borderless">
                                                    <div class="block-header block-header-default">
                                                        <h3 class="block-title">Liste des avis du SQE</h3>
                                                        <div class="block-options">
                                                            <div class="block-options-item">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content ">
                                                        <table class="js-table-sections table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 10%;"></th>
                                                                    <th style="width: 30%;">Avis</th>
                                                                    <th style="width: 50%;">Information</th>
                                                                    <th class="d-none d-sm-table-cell"></th>
                                                                </tr>
                                                            </thead>';
                                                                $a= new SQE_S_INFO();
                                                                $aa= $a->find_prj_sqe($_GET['id']);
                                                                $oum="kjsdfh";
                                                                if($aa){
                                                                    foreach($aa as $row){
                                                            echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-plus-circle" style="color:red"></i>
                                                                            </td>';
                                                                            if($row['avis']==='Favorable'){
                                                                                echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Favorable avec réserve'){
                                                                                echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Défavorable'){
                                                                                echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Archiver'){
                                                                                echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Ajourné'){
                                                                                echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                            }elseif($row['avis']==='Aucun Avis'){
                                                                                echo '<td>'.$row['avis'].'</td>';
                                                                            }
                                                                            echo '<td class="font-w600"></td>';
                                                                            if(isset($row['date_avis_sqe'])){
                                                                                if(($_SESSION['id_profession']===3) && ($row['approuvee_sqe']===19) ){
                                                                                    echo'<td>
                                                                                        <a type="submit" href="Projet_approuve_sqe.php?id='.$row['id_sqe'].'" style="color:white !important" class="btn btn-sm btn-rounded btn-success">
                                                                                            <i class="fa fa-check mr-5"></i>Approuver
                                                                                        </a> 
                                                                                    </td>';
                                                                                }else{
                                                                                    echo '<td></td>';
                                                                                }
                                                                            }else{
                                                                                echo'<td class="d-none d-sm-table-cell">
                                                                                <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum2" onclick="avissqe('.$row['id_sqe'].')" >
                                                                                    <i class="fa fa-plus mr-5"></i>Avis
                                                                                </a>
                                                                                </td>';
                                                                            }
                                                                            
                                                                        echo'</tr>
                                                                    </tbody>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-caret-right"></i>
                                                                            </td>
                                                                            <td class="font-w600 ">Remarque d\'assainissement</td>
                                                                            <td class="font-size-sm">'.$row['remarque_bet_assainissement'].'</td>
                                                                            <td class="d-none d-sm-table-cell"> 
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-caret-right"></i>
                                                                            </td>
                                                                            <td class="font-w600">Remarque Supplémentaire</td>
                                                                            <td class="font-size-sm">'.$row['remarque_sup_sqe'].'</td>
                                                                            <td class="d-none d-sm-table-cell">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-caret-right"></i>
                                                                            </td>
                                                                            <td class="font-w600 ">Avis</td>
                                                                            <td class="font-size-sm">'.$row['avis'].'</td>
                                                                            <td class="d-none d-sm-table-cell">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">La date de la remarque du SQE</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_sqe'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">La date de la remarque du BET</td>
                                                                        <td class="font-size-sm">'.$row['date_avis_bet_sqe'].'</td>
                                                                        <td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                        if( $row['duree_avis'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                        }elseif($row['duree_avis'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                        }
                                                                        echo '<td class="d-none d-sm-table-cell"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <i class="fa fa-caret-right"></i>
                                                                        </td>
                                                                        <td class="font-w600 ">Durée de la remarque du SQE</td>';
                                                                        if( $row['duree_avis_sqe'] < 11 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sqe'] > 10 && $row['duree_avis_sqe'] < 30 ){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }elseif($row['duree_avis_sqe'] > 29){
                                                                            echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sqe'].' jours</span></td>';
                                                                        }
                                                                        echo '<td class="d-none d-sm-table-cell">
                                                                          
                                                                        </td>
                                                                    </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-caret-right"></i>
                                                                            </td>
                                                                            <td class="font-w600 ">Valide par</td>
                                                                            <td class="">
                                                                                <span class="font-size-sm text-muted">'.$row['validee'].'</span>
                                                                            </td>
                                                                            <td class="d-none d-sm-table-cell">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                <i class="fa fa-caret-right"></i>
                                                                            </td>
                                                                            <td class="font-w600 ">Approuvée par</td>
                                                                            <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                            <td class="d-none d-sm-table-cell">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>';
                                                                }}
                                                        echo'</table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 ml-auto">
                                                <div class="block block-borderless ">
                                                    <div class="block-header block-header-default">
                                                        <h3 class="block-title">Information </h3>
                                                        <div class="block-options">
                                                            <div class="block-options-item">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">';
                                                        $a= new SQE_S_INFO();
                                                        $aa= $a->findsqe($_GET['id']);
                                                        if($aa){
                                                            foreach($aa as $row){
                                                        echo '<table class="table table-borderless table-sm table-striped ">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SQE</span><br>'.$row['id_sqe_info'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Volume eau usée</span><br>'.$row['volume_eau_usee'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Mode d\'assainissement</span><br>'.$row['mode_assainissement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Reutilisation QEU</span><br>'.$row['reutilisation_qeu'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Reutilisation de niveau de traitement</span><br>'.$row['reutilisation_niveau_traitement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Niveau piézométrique</span><br>'.$row['niveau_piezometrique'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">date de niveau piézométrique</span><br>'.$row['date_niveau_piezometrique'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">piezometre X</span><br>'.$row['piezometre_x'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">piezometre y</span><br>'.$row['piezometre_y'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date info</span><br>'.$row['date_info'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>';
                                                                }}
                                                                    
                                                        echo '</table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

               }
               ?>

                <?php
                if ($_SESSION["service"]=== "SGDPH       " ){
                   echo '<div class="col-lg-12">
                        <div class="block" style="box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.1) !important">
                            <ul class="nav nav-tabs nav-tabs-block align-items-center" data-toggle="tabs" role="tablist" style="background-color:#e6eef7 !important">
                                <li class="nav-item" style="background-color:#e6eef7 !important">
                                    <a class="nav-link active" href="#sgdph">Service SGDPH</a>
                                </li>
                                <li class="nav-item ml-auto">
                                    <div class="block-options mr-15">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <div class="tab-pane active" id="sgdph" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="block block-borderless">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Liste des avis SGDPH</h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content ">
                                                    <table class="js-table-sections table table-sm ">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>Avis</th>
                                                                <th>Information</th>
                                                                <th class="d-none d-sm-table-cell"></th>
                                                            </tr>
                                                        </thead>';
                                                            $a= new SGDPH_S_INFO();
                                                            $aa= $a->find_prj_sgdph($_GET['id']);
                                                            $oum="kjsdfh";
                                                            if($aa){
                                                            foreach($aa as $row){
                                                         echo '<tbody class="js-table-sections-header bg-gray-lighter">
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-plus-circle" style="color:red"></i>
                                                                </td>';

                                                                if($row['avis']==='Favorable'){
                                                                    echo '<td><span class="badge badge-pill badge-success">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Favorable avec réserve'){
                                                                    echo '<td><span class="badge badge-pill badge-warning">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Défavorable'){
                                                                    echo '<td><span class="badge badge-pill badge-danger">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Archiver'){
                                                                    echo '<td><span class="badge badge-pill badge-info">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Ajourné'){
                                                                    echo '<td><span class="badge badge-pill badge-primary">'.$row['avis'].'</span></td>';
                                                                }elseif($row['avis']==='Aucun Avis'){
                                                                    echo '<td>'.$row['avis'].'</td>';
                                                                }
                                                                echo '<td class="font-w600"></td>';
                                                                if(isset($row['date_avis_sgdph'])){
                                                                    if(($_SESSION['id_profession']===3) && ($row['approuve_par_sgdph']===19) ){
                                                                        echo'<td>
                                                                            <a type="submit" href="projet_approuve_sgdph.php?id='.$row['id_sgdph'].'" style="color:white !important" class="btn btn-sm btn-rounded btn-success">
                                                                                <i class="fa fa-check mr-5"></i>Approuver
                                                                            </a> 
                                                                        </td>';
                                                                    }else{
                                                                        echo '<td></td>';
                                                                    }
                                                                    
                                                                }else{
                                                                    echo '<td>
                                                                            <a type="button" style="color:white !important" class="btn btn-sm btn-rounded btn-info" id="oum4" onclick="avissgdph('.$row['id_sgdph'].')" >
                                                                                <i class="fa fa-plus mr-5"></i>Avis
                                                                            </a>
                                                                        </td>';
                                                                }
                                                            echo '</tr>
                                                        </tbody>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Remarque BET protection d\'inondation</td>
                                                                <td class="font-size-sm">'.$row['remarque_bet_protection_inondations'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Remarque Supplémentaire</td>
                                                                <td class="font-size-sm">'.$row['remarque_sup_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600">Avis du service</td>
                                                                <td class="font-size-sm">'.$row['avis'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Durée de la remarque du BET</td>';
                                                                if( $row['duree_avis_sgdph'] < 11 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }elseif($row['duree_avis_sgdph'] > 10 && $row['duree_avis_sgdph'] < 30 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }elseif($row['duree_avis_sgdph'] > 29){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis_sgdph'].' jours</span></td>';
                                                                }

                                                                echo '<td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Durée de la remarque du SGDPH</td>';
                                                                if( $row['duree_avis'] < 11 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-success">'.$row['duree_avis'].' jours</span></td>';
                                                                }elseif($row['duree_avis'] > 10 && $row['duree_avis'] < 30 ){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-warning">'.$row['duree_avis'].' jours</span></td>';
                                                                }elseif($row['duree_avis'] > 29){
                                                                    echo ' <td class="font-size-sm"><span class="badge badge-pill badge-danger">'.$row['duree_avis'].' jours</span></td>';
                                                                }
                                                                echo '<td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Date de la remarque du BET</td>
                                                                <td class="font-size-sm">'.$row['date_avis_bet_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">La date de la remarque du SGDPH</td>
                                                                <td class="font-size-sm">'.$row['date_avis_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Valide par</td>
                                                                <td class="font-size-sm">'.$row['validee'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                   
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Approuvée par</td>
                                                                <td class="font-size-sm">'.$row['approuvee'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <i class="fa fa-caret-right"></i>
                                                                </td>
                                                                <td class="font-w600 ">Utilisateur BET</td>
                                                                <td class="font-size-sm">'.$row['user_name'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                 
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>';
                                                    }}    
                                              echo '</table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 ml-auto">
                                            <div class="block block-borderless ">
                                                <div class="block-header block-header-default">
                                                    <h3 class="block-title">Information </h3>
                                                    <div class="block-options">
                                                        <div class="block-options-item">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-content" data-toggle="slimscroll" data-height="400px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">';
                                                    $a= new SGDPH_S_INFO();
                                                    $aa= $a->findsgdph($_GET['id']);
                                                    if($aa){
                                                        foreach($aa as $row){
                                                        echo ' <table class="table table-borderless table-sm table-striped ">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">L\'identifiant du SGDPH</span><br>'.$row['id_sgdph_info'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <p><span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Type cours d\'eau</span><br>'.$row['type_cours_eau'].'</p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Crue 100</span><br>'.$row['crue_100'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Servitude</span><br>'.$row['servitude'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Nature cours d\'eau </span><br>'.$row['nature'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine aep puits X</span><br>'.$row['origine_aep_puits_x'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Origine aep puits Y</span><br>'.$row['origine_aep_puits_y'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Pf Creusement</span><br>'.$row['autorisation_pf_creusement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Pf Creusement</span><br>
                                                                                '.$row['autorisation_creusement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Pf Creusement</span>'.$row['autorisation_creusement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Pf Prelevement</span><br>'.$row['autorisation_pf_prelevement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Pf Prelevement</span>'.$row['autorisation_prelevement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Pf Prelevement</span>'.$row['autorisation_prelevement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Deversement</span><br>'.$row['autorisation_deversement'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Deversement</span><br>'.$row['autorisation_deversement_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Deversement</span><br>'.$row['autorisation_deversement_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autorisation Occupation DPH</span>'.$row['autorisation_occupation_dph'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'autorisation Occupation DPH</span>'.$row['autorisation_occupation_dph_date'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Numéro d\'autorisation Occupation DPH</span><br>'.$row['autorisation_occupation_dph_numero'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Autre autorisation</span><br>'.$row['autre_autorisation'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Date d\'info</span><br>'.$row['date_info'].'
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">Utilisateur</span><br>'.$row['user_name'].'
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>';
                                                            }}
                                           echo '</div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
        <?php require_once 'fonctionnalities/popup.php';
              require_once 'Projet_footer.php';
        ?>
    </body>
</html>