<?php 
/**
* OUMAIMA SABI
* DATE:10/03/2022
*/


require_once '../couche_service/Classe.Service.projet.php';

$b = new Projet_Service();
$id=$_GET['id'];
$bb = $b->findById($id);


// echo $bb->getid_pr();
$features =[];

$feature1=[ 
    "gid"=>$bb->getid_pr(),
	"numero_dossier"=>$bb->getnum_oss(),
	"numero_archive"=>$bb->getnum_archv(),
	"date_arr_abht"=>$bb->getdate_arr_abht(),
	"date_arr_bet"=>$bb->getdate_arr_bet(),
	"commune"=>$bb->getcom(),
	"province"=>$bb->getprovince(),
	"douar_loc"=>$bb->getdouar_loc(),
	"maitre_ouv"=>$bb->getmaitre_ouv(),
	"intitule_pr"=>$bb->getintitule_pr(),
	"architecte"=>$bb->getarchitecte(),
	"titre_foncier"=>$bb->gettitre_foncier(),
	"superficie"=>$bb->getsupf(),
	"type_projet"=>$bb->gettype_projet(),
	"fond_doss"=>$bb->getfond_doss(),
	"date_com"=>$bb->getdate_comm(),
	"catg"=>$bb->getcatg(),
	"surf_bat"=>$bb->getsurf_bat(),
	"type_doss"=>$bb->gettype_doss(),
	"etat_dossier"=>$bb->getetat_dossier(),
	"sepre"=>$bb->getsepre(),
	"sqe"=>$bb->getsqe(),
	"stah"=>$bb->getstah(),
	"sgdph"=>$bb->getsgdph(),
	"payement"=>$bb->getpayement(),
	"date_payement"=>$bb->getdate_payement(),
	"montant_payer"=>$bb->getmontant_payer()


];
$geometry=json_decode($bb->getgeom());

$feature=["type"=>"Feature",
              "geometry"=>$geometry,
              "properties"=>$feature1
             ];

//     unset($bb['geom']);
//     

//     unset($bb['geojson']);
//     $feature=["type"=>"Feature",
//               "geometry"=>$geometry,
//               "properties"=>$bb
//              ];

array_push($features,$feature);

$featureCollection=[
    "type"=>"FeaturCollection",
    "features"=>$features
];

echo json_encode($featureCollection);