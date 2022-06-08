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
                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                    }else{
                        return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-check"></i></a>';
                    }
                },
                orderable: false}, 
                {data:function (data,type,row) {
                    if (data.sqe == null || data.sqe == false){
                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                    }else{
                        return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-check"></i></a>';
                    }
                },
                orderable: false}, 
                {data:function (data,type,row) {
                    if (data.sgdph == null || data.sgdph == false){
                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                    }else{
                        return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-check"></i></a>';
                    }
                },
                orderable: false},
                {data: function (data,type,row) {
                    if (data.stah == null || data.stah == false){
                        return '<a type="button" class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5" disabled><i class="fa fa-times"></i></a>';
                    }else{
                        return '<a type="button" href="Projet_avis.php?id='+data.id+'" class="btn btn-sm btn-circle btn-alt-success mr-5 mb-5"><i class="fa fa-check"></i></a>';
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

    var sepreajax={url:"http://localhost/projectpfe/projetversion2/data_json/data.projet.sepre.php",type: 'POST',dataSrc: 'data'};
    var seprecolumn=[
                {data:'id',
                render: function (data) {
                        return '<a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-calendar-times-o"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a>';
                    },
                orderable: false},
                {data: function (data,type,row) {
                    if (data.sepre == null || data.sepre == false ){
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
                                return '<a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-calendar-times-o"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a>';
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
                            return '<a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-calendar-times-o"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a>';
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
                            return '<a id="edit" href="Projet_modifier.php?id='+data+'" type="button" class="btn btn-sm btn-circle btn-alt-warning mr-5 mb-5"><i class="fa fa-pencil"></i></a><a href="Projet_supprimer.php?id='+data+'" onclick = "fun()" type="button" class="btn btn-sm btn-circle btn-alt-danger mr-5 mb-5"><i class="fa fa-times"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-calendar-times-o"></i></a><a class="btn btn-sm btn-circle btn-alt-primary mr-5 mb-5" href="" data-toggle="modal" data-target="#modal-terms" ><i class="fa fa-map-marker"></i></a>';
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