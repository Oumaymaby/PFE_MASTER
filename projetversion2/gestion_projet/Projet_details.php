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
                        <?php 
                            $a= new Projet_Service();
                            $aa= $a->findById($_GET['id']);
                            if($aa->getsepre()==true){
                            echo '<div class="col-6 col-xl-3">
                                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                        <div class="block-content block-content-full clearfix">
                                            <div class="float-right mt-15 d-none d-sm-block">
                                                <i class="si si-bag fa-2x text-primary-light"></i>
                                            </div>';
                                            

                                                $c= new SEPRE_Service();
                                                $cc=$c->nombre_prj($_GET['id']);
                                                foreach($cc as $row){
                                                    echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                                }
                                        
                                                
                                            echo '<div class="font-size-sm font-w600 text-uppercase text-muted">Service SEPRE</div>
                                        </div>
                                    </a>
                                </div>';
                            }

                            if($aa->getsqe()==true){
                                echo '<div class="col-6 col-xl-3">
                                <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full clearfix">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-wallet fa-2x text-earth-light"></i>
                                        </div>';

                                            $c= new SQE_Service();
                                            $cc=$c->nombre_prj($_GET['id']);
                                            foreach($cc as $row){
                                                echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                            }
                                        
                                        echo '<div class="font-size-sm font-w600 text-uppercase text-muted">Service SQE</div>
                                    </div>
                                </a>
                                </div>';
                            }
                            
                            if($aa->getstah()==true){
                                echo '<div class="col-6 col-xl-3">
                                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                        <div class="block-content block-content-full clearfix">
                                            <div class="float-right mt-15 d-none d-sm-block">
                                                <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                            </div>';

                                                $c= new STAH_Service();
                                                $cc=$c->nombre_prj($_GET['id']);
                                                foreach($cc as $row){
                                                    echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                                }
                                            echo '<div class="font-size-sm font-w600 text-uppercase text-muted">Service STAH</div>
                                        </div>
                                    </a>
                                </div>';
                            }

                            if($aa->getsgdph()==true){
                                echo '<div class="col-6 col-xl-3">
                                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>';

                                        $c= new SGDPH_Service();
                                        $cc=$c->nombre_prj($_GET['id']);
                                        foreach($cc as $row){
                                            echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    echo '<div class="font-size-sm font-w600 text-uppercase text-muted">Service SGDPH</div>
                                    </div>
                                    </a>
                                    </div>';
                            }

                            echo '<div class="col-6 col-xl-3">
                                    <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-elegance-light"></i>
                                    </div>';

                                        $c= new ABHT_Service();
                                        $cc=$c->nombre_prj($_GET['id']);
                                        foreach($cc as $row){
                                            echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    echo '<div class="font-size-sm font-w600 text-uppercase text-muted">Service ABHT</div>
                                    </div>
                                    </a>
                                    </div>';
                        ?>
                        <!-- <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-users fa-2x text-pulse"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                                </div>
                            </a>
                        </div> -->
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        
                    <div class="col-lg-8">
                        <?php 
                             $a= new Projet_Service();
                             $aa= $a->findById($_GET['id']);
                             if($aa->getsepre()==true){
                                echo '<div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Details des remarques du Service Sepre</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="Projet_sepre.php?id='.$_GET['id'].'" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>SEPRE
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
                                  <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                        
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 30%;">Information</th>
                                                <th class="d-none d-sm-table-cell">Time</th>
                                                <th class="d-none d-sm-table-cell">date</th>
                                            </tr>
                                        </thead>';
                                        
                                        $c= new SEPRE_Service();
                                        $cc=$c->findByIdprj($_GET['id']);
                                        $a = new Avis_Service();
                                        

                                        foreach($cc as $row) {
                                            $aa=$a->findById($row['avis_sepre']);
                                            if ($row['avis_sepre']===1){
                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-secondary">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La date
                                                    </td>
                                                </tr>
                                            </tbody>';
                                            }
                                            elseif($row['avis_sepre']===2){
                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-success">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La date
                                                    </td>
                                                </tr>
                                            </tbody>';
                                            }
                                            elseif($row['avis_sepre']===3){

                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-warning">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                       La date
                                                    </td>
                                                </tr>
                                                </tbody>';
                                            }
                                            elseif($row['avis_sepre']===4){

                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-danger">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La date
                                                    </td>
                                                </tr>
                                                </tbody>';
                                            }
                                            elseif($row['avis_sepre']===5){

                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-info">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée 
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La date
                                                    </td>
                                                </tr>
                                                </tbody>';
                                            }
                                            elseif($row['avis_sepre']===5){

                                                echo '<tbody class="js-table-sections-header table-active">
                                                <tr>
                                                    <td class="text-center">
                                                        <i class="fa fa-angle-right"></i>
                                                    </td>
                                                    <td class="font-w600">'.$row['id_sepre'].' - Service SEPRE</td>
                                                    <td>
                                                        <span class="badge badge-primary">'.$aa->getavis().'</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La durée 
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        La date
                                                    </td>
                                                </tr>
                                                </tbody>';
                                            }
                                            
                                            $orig = new OrigineAep_Service();
                                            $oo=$orig->findById($row['origine_aep']);
                                            echo '<tbody>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 ">Origine de l\'eau potable  </td>
                                                    <td class="font-size-sm">'.$oo->getorigineaep().'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="badge badge-warning"></span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 ">Autre origine</td>
                                                    <td class="font-size-sm">'.$row['origine_autre'].'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 ">Besoin en eau domestique</td>
                                                    <td class="font-size-sm">'.$row['besoin_eau_domestique'].'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600">Besoin en eau d\'irrigation</td>
                                                    <td class="font-size-sm">'.$row['besoin_eau_irrigation'].'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 ">Remarques de BET sur les besoins en eau</td>
                                                    <td class="font-size-sm">'.$row['remarque_bet_besoin_eau'].'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="badge badge-warning">'.$row['duree_avis_sepre'].' jours</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted">'.$row['date_avis_sepre'].'</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="font-w600 ">Remarques Supplémentaires du SEPRE</td>
                                                    <td class="font-size-sm">'.$row['remarques_sup_sepre'].'</td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="badge badge-warning">'.$row['duree_avis'].' jours </span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <span class="font-size-sm text-muted">'.$row['date_avis_sepre'].'</span>
                                                    </td>
                                                </tr> 
                                            </tbody>';
                                        }
                                       
                                    echo '</table>
                                </div>
                            </div>';
                        }
                    ?>
                            
                    <?php 
                        $a= new Projet_Service();
                        $aa= $a->findById($_GET['id']);
                        if($aa->getstah()==true){
                            echo '<div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Details des remarques du Service STAH</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="Projet_stah.php?id='.$_GET['id'].'" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>STAH
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
                                <!-- $row->id_stah, $row->superficie_bv, $row->amenagement_propose, $row->avis_abht_amenagement, $row->remarque_sup_stah, $row->avis_stah, $row->date_avis_stah, $row->date_avis_bet_stah, $row->valide_par_stah, $row->approuve_par_stah, $row->id_prj -->
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                        
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 30%;">Information</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">La durée</th>
                                            </tr>
                                        </thead>';
                                            $c= new STAH_Service();
                                            $cc=$c->findByIdprj($_GET['id']);
                                            foreach($cc as $row)
                                            {
                                            
                                                $a = new Avis_Service();
                                                $aa=$a->findById($row['avis_stah']);  
                                                $ab=$a->findById($row['avis_abht_amenagement']);
                                                if ($row['avis_stah']===1){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-angle-right"></i>
                                                            </td>
                                                            <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                            <td>
                                                                <span class="badge badge-secondary">'.$aa->getavis().'</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                            </td>
                                                        </tr>
                                                    </tbody>';
                                                }
                                                elseif ($row['avis_stah']===2){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                        <td>
                                                            <span class="badge badge-success">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }

                                                elseif ($row['avis_stah']===3){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                        <td>
                                                            <span class="badge badge-warning">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_stah']===4){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                        <td>
                                                            <span class="badge badge-danger">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_stah']===5){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                        <td>
                                                            <span class="badge badge-info">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_stah']===6){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_stah'].' - Service STAH</td>
                                                        <td>
                                                            <span class="badge badge-primary">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_stah'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }

                                                

                                                    echo '<tbody>
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Avis de l\'ABHT Amenagement</td>
                                                            <td class="font-size-sm"> <span class="badge badge-success">'.$ab->getavis().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Superficie Bv  </td>
                                                            <td class="font-size-sm">'.$row['superficie_bv'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Avis de l\'ABHT Amenagement</td>
                                                            <td class="font-size-sm"> <span class="badge badge-success">'.$ab->getavis().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Remarque Supplémentaire STAH</td>
                                                            <td class="font-size-sm">'.$row['remarque_sup_stah'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Amengaments Proposés</td>
                                                            <td class="font-size-sm">'.$row['amenagement_propose'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>';

                                                        $u = new User_Service();
                                                        $user=$u->findById($row['valide_par_stah']);
                                                        $user1=$u->findById($row['approuve_par_stah']);
                                                        echo '<tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Validé par</td>
                                                            <td class="font-size-sm">'.$user->getusn().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>';
                                                        
                                                        echo '<tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Approuvée par</td>
                                                            <td class="font-size-sm">'.$user1->getusn().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>';
                                            }
                                    echo '</table>
                                </div>
                            </div> ';
                        }
                    ?>

                    <?php 
                        $a= new Projet_Service();
                        $aa= $a->findById($_GET['id']);
                        if($aa->getsqe()==true){
                            echo '<div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Details des remarques du Service SQE</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="Projet_sqe.php?id='.$_GET['id'].'" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>SQE
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
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                        
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 30%;">Information</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">La durée</th>
                                            </tr>
                                        </thead>';


                                            $c= new SQE_Service();
                                            $cc=$c->findByIdprj($_GET['id']);
                                            foreach($cc as $row)
                                            {
                                            
                                                $a = new Avis_Service();
                                                $aa=$a->findById($row['avis_sqe']);  
                                                if ($row['avis_sqe']===1){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                                    <td>
                                                                        <span class="badge badge-secondary">'.$aa->getavis().'</span>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                }
                                                elseif($row['avis_sqe']===2){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                                    <td>
                                                                        <span class="badge badge-success">'.$aa->getavis().'</span>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                }
                                                elseif($row['avis_sqe']===3){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                                    <td>
                                                                        <span class="badge badge-warning">'.$aa->getavis().'</span>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                }
                                                elseif($row['avis_sqe']===4){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                                    <td>
                                                                        <span class="badge badge-danger">'.$aa->getavis().'</span>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                }
                                                elseif($row['avis_sqe']===5){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                        <td>
                                                            <span class="badge badge-info">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                        </td>
                                                    </tr>
                                                    </tbody>';
                                                }
                                                elseif($row['avis_sqe']===6){
                                                    echo    '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sqe'].' - Service SQE</td>
                                                        <td>
                                                            <span class="badge badge-primary">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sqe'].'</em>
                                                        </td>
                                                    </tr>
                                                    </tbody>';
                                                }


                                                    echo '<tbody>
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Volumes des eaux usées</td>
                                                                    <td class="font-size-sm">'.$row['volume_eau_usee'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>';
                                                    $mode = new ModeAssain_Service();
                                                    $m=$mode->findById($row['mode_assainissement']);              

                                                    echo '<tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Mode d\'assainissement</td>
                                                                    <td class="font-size-sm">'.$m->getmode_assn().'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Réutilisation QEU</td>
                                                                    <td class="font-size-sm">'.$row['reutilisation_qeu'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr> 
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Niveau de traitement</td>
                                                                    <td class="font-size-sm">'.$row['reutilisation_niveau_traitement'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Niveau Piézométrique</td>
                                                                    <td class="font-size-sm">'.$row['niveau_piezometrique'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Coordonnées X du périmètre</td>
                                                                    <td class="font-size-sm">'.$row['piezometre_x'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Coordonnées Y du périmètre</td>
                                                                    <td class="font-size-sm">'.$row['piezometre_y'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Traitement de la boue</td>
                                                                    <td class="font-size-sm">'.$row['traitement_boue'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Remarque du BET</td>
                                                                    <td class="font-size-sm">'.$row['remarque_bet_assainissement'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted">'.$row['date_avis_bet_sqe'].'</span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Remarque Supplémentaires du SQE</td>
                                                                    <td class="font-size-sm">'.$row['remarque_sup_sqe'].'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>';
                                                                $u = new User_Service();
                                                                $user=$u->findById($row['valide_sqe']);
                                                                $user1=$u->findById($row['approuvee_sqe']);
                                                                echo '<tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Validé par</td>
                                                                    <td class="font-size-sm">'.$user->getusn().'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center"></td>
                                                                    <td class="font-w600 ">Approuvé par</td>
                                                                    <td class="font-size-sm">'.$user1->getusn().'</td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <span class="font-size-sm text-muted"></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                            }
                                    echo '<table>
                                </div>
                            </div>';
                            }
                        ?>

                <?php 
                        $a= new Projet_Service();
                        $aa= $a->findById($_GET['id']);
                        if($aa->getsgdph()==true){
                            echo '<div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Details des remarques du Service SGDPH</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="Projet_sgdph.php?id='.$_GET['id'].'" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>SGDPH
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
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                        
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 30%;">Information</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">La durée</th>
                                            </tr>
                                        </thead>';
                                            $c= new SGDPH_Service();
                                            $cc=$c->findByIdprj($_GET['id']);
                                            foreach($cc as $row)
                                            {
                                                $a = new Avis_Service();
                                                $aa=$a->findById($row['avis_sgdph']);
                                                if ($row['avis_sgdph']===1){  
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </td>
                                                                    <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                                    <td>
                                                                        <span class="badge badge-secondary">'.$aa->getavis().'</span>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                                    </td>
                                                                </tr>
                                                            </tbody>';
                                                }
                                                elseif($row['avis_sgdph']===2){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                        <td>
                                                            <span class="badge badge-success">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif($row['avis_sgdph']===3){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                        <td>
                                                            <span class="badge badge-warning">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif($row['avis_sgdph']===4){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                        <td>
                                                            <span class="badge badge-danger">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif($row['avis_sgdph']===5){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                        <td>
                                                            <span class="badge badge-info">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif($row['avis_sgdph']===6){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_sgdph'].' - Service SGDPH</td>
                                                        <td>
                                                            <span class="badge badge-primary">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_sgdph'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                $type = new TypeCEau_Service();
                                                $t=$type->findById($row['type_cours_eau']);    
                                                echo '<tbody>
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Type de cours d\'eau</td>
                                                                <td class="font-size-sm">'.$t->gettypeceau().'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>';
                                                
                                                        
                                                echo '<tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Nom de cours d\'eau</td>
                                                                <td class="font-size-sm">'.$row['nom_cours_eau'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr> 
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Débit centennale (m3/s)</td>
                                                                <td class="font-size-sm">'.$row['crue_100'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr> ';

                                                            $nat = new NatureCeau_Service();
                                                            $n=$nat->findById($row['nature_cours_eau']);  
                                                echo '<tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Nature de cours d\'eau</td>
                                                                <td class="font-size-sm">'.$n->getnature().'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Servitude </td>
                                                                <td class="font-size-sm">'.$row['servitude'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600">Origine de l\'eau potable Puits X</td>
                                                                <td class="font-size-sm">'.$row['origine_aep_puits_x'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Origine de l\'eau potable Puits Y</td>
                                                                <td class="font-size-sm">'.$row['origine_aep_puits_y'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Autorisation de creusement</td>
                                                                <td class="font-size-sm">'.$row['autorisation_creusement_numero'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Autorisation de prelevement</td>
                                                                <td class="font-size-sm">'.$row['autorisation_prelevement_numero'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Autorisation de deversement</td>
                                                                <td class="font-size-sm">'.$row['autorisation_deversement_numero'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Autorisation de l\'occupation du dph</td>
                                                                <td class="font-size-sm">'.$row['autorisation_occupation_dph_numero'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Remarque Supplémentaires du SGDPH</td>
                                                                <td class="font-size-sm">'.$row['remarque_sup_sgdph'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Remarque BET su le DPH</td>
                                                                <td class="font-size-sm">'.$row['remarque_bet_protection_inondations'].'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>';

                                                            $u = new User_Service();
                                                                $user=$u->findById($row['valide_par_sgdph']);
                                                                $user1=$u->findById($row['approuve_par_sgdph']);
                                                            echo '<tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Validé par</td>
                                                                <td class="font-size-sm">'.$user->getusn().'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-center"></td>
                                                                <td class="font-w600 ">Approuvée par</td>
                                                                <td class="font-size-sm">'.$user1->getusn().'</td>
                                                                <td class="d-none d-sm-table-cell">
                                                                    <span class="font-size-sm text-muted"></span>
                                                                </td>
                                                            </tr>
                                                            
                                                        </tbody>';
                                    }
                                       
                                    echo '</table>
                                </div>
                            </div>';
                    }
                    ?>

                    <?php 
                        $a= new Projet_Service();
                        $aa= $a->findById($_GET['id']);
                            echo '<div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Details des remarques du Service ABHT</small> </h3>
                                    <div class="block-options">
                                        <a type="button" href="Projet_ABHT.php?id='.$_GET['id'].'" class="btn btn-outline-success mr-5 mb-5">
                                            <i class="fa fa-plus mr-5"></i>ABHT
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
                               
                                    <table class="js-table-sections table table-hover">
                                        <thead>
                                        
                                            <tr>
                                                <th style="width: 30px;"></th>
                                                <th>Service </th>
                                                <th style="width: 30%;">Information</th>
                                                <th class="d-none d-sm-table-cell" style="width: 20%;">La durée</th>
                                            </tr>
                                        </thead>';
                                            $c= new ABHT_Service();
                                            $cc=$c->findByIdprj($_GET['id']);
                                            foreach($cc as $row)
                                            {
                                            
                                                $a = new Avis_Service();
                                                $aa=$a->findById($row['avis_abht']); 
                                                if ($row['avis_abht']===1){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                        <tr>
                                                            <td class="text-center">
                                                                <i class="fa fa-angle-right"></i>
                                                            </td>
                                                            <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                            <td>
                                                                <span class="badge badge-secondary">'.$aa->getavis().'</span>
                                                            </td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                            </td>
                                                        </tr>
                                                    </tbody>';
                                                }
                                                elseif ($row['avis_abht']===2){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                        <td>
                                                            <span class="badge badge-success">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }

                                                elseif ($row['avis_abht']===3){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                        <td>
                                                            <span class="badge badge-warning">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_abht']===4){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                        <td>
                                                            <span class="badge badge-danger">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_abht']===5){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                        <td>
                                                            <span class="badge badge-info">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }
                                                elseif ($row['avis_abht']===6){
                                                    echo '<tbody class="js-table-sections-header table-active">
                                                    <tr>
                                                        <td class="text-center">
                                                            <i class="fa fa-angle-right"></i>
                                                        </td>
                                                        <td class="font-w600">'.$row['id_abht'].' - Service ABHT</td>
                                                        <td>
                                                            <span class="badge badge-primary">'.$aa->getavis().'</span>
                                                        </td>
                                                        <td class="d-none d-sm-table-cell">
                                                            <em class="text-muted">'.$row['date_avis_abht'].'</em>
                                                        </td>
                                                    </tr>
                                                </tbody>';
                                                }

                                                

                                                    echo '<tbody>
                                                        <tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Remarque du BET</td>
                                                            <td class="font-size-sm">'.$row['remarques_generales_bet'].'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>';

                                                        $u = new User_Service();
                                                        $user=$u->findById($row['etabli_par']);
                                                        $user1=$u->findById($row['valide_par']);
                                                        $user2=$u->findById($row['approuve_par']);
                                                        echo '<tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Etabli par</td>
                                                            <td class="font-size-sm">'.$user->getusn().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>';

                                                        echo '<tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Approuvé par</td>
                                                            <td class="font-size-sm">'.$user2->getusn().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>';
                                                        
                                                        echo '<tr>
                                                            <td class="text-center"></td>
                                                            <td class="font-w600 ">Validée par</td>
                                                            <td class="font-size-sm">'.$user1->getusn().'</td>
                                                            <td class="d-none d-sm-table-cell">
                                                                <span class="font-size-sm text-muted"></span>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>';
                                            }
                                    echo '</table>
                                </div>
                            </div> ';
                    ?>
                        
                    </div>
                    <div class="col-lg-4">
                            <div class="block block-rounded block-bordered">
                                <div class="block-header block-header-default border-b">
                                    <h3 class="block-title"><small>Information sur le Projet</small> </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                                            <i class="si si-pin"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                                            <i class="si si-close"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true">
                                    <table class="table table-striped table-borderless ">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="font-size-h9 font-w600" href="be_pages_forum_topics.html">La durée</span>&nbsp
                                                    <?php 
                                                        $b = new Projet_Service();
                                                        $e= new Etat_Service();
                                                        $id=$_GET['id'];
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
                </div>
        
            <?php 
                require_once 'Projet_footer.php';
            ?>
    </body>
</html>