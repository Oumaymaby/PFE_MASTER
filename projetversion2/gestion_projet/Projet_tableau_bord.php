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
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <!-- <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-bag fa-2x text-primary-light"></i>
                                    </div> -->
                                    <?php $b = new Projet_Service();
                                        $bb= $b->nombre();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <!-- <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si fa-product-hunt fa-2x text-danger-light"></i>
                                    </div> -->
                                    <?php $b = new Etat_Service();
                                        $bb= $b->nbnew();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-danger"><span data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</span></div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet en cours</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <!-- <div class="float-right mt-15 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-2x text-success-light"></i>
                                    </div> -->
                                    <?php $b = new Etat_Service();
                                        $bb= $b->nbclose();
                                        foreach($bb as $row){
                                        echo '<div class="font-size-h3 font-w600 text-success" data-toggle="countTo" data-speed="1000" data-to="'.$row[0].'">0</div>';
                                        }
                                    ?>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Projet Cloturé</div>
                                </div>
                            </a>
                        </div>
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
                <div class="col-lg-12">
                <div class="block block-rounded block-bordered">
                        <div class="block-header block-header-default border-b">
                            <h3 class="block-title">Projet d'investissement</h3>
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
                                        <th >Action</th>
                                        <th >Avis Sepre</th>
                                        <th >Avis Sqe</th>
                                        <th >Avis Sgdph</th>
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
            </div>
            <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Terms &amp; Conditions</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                        
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

        <script>
            $(document).ready( function() {
                var ajax1={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet_dure_etat.php",type: 'POST',dataSrc: 'data'};
                var column5=[
                            {data:'id',
                            render: function (data) {
                                    return '<a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-info mr-5 mb-5" href="http://localhost/projectpfe/projetversion2/gestion_projet/Projet_details.php?id='+ data+'"><i class="fa fa-info"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-calendar-times-o"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a>';
                                },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.sepre == null || data.sepre == false ){
                                    return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.sqe == null || data.sqe == false){
                                    return '<a type="button" href="Projet_avis.php?id='+data.id+'#btabs-animated-slideup-SQE" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }
                            },
                            orderable: false}, 
                            {data:function (data,type,row) {
                                if (data.sgdph == null || data.sgdph == false){
                                    return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                                }
                            },
                            orderable: false},
                            {data: function (data,type,row) {
                                if (data.stah == null || data.stah == false){
                                    return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-plus"></i></a>';
                                }else{
                                    return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
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
            });
        </script>
    </body>
</html>