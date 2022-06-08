<?php 
/**
* OUMAIMA SABI
* DATE:04/05/2022
*/

require_once '../couche_service/Classe.Service.projet.php';

$b = new Projet_Service();
$bb = $b->geoprojet();

$features =[];

foreach ($bb as $row) {
    unset($row['geom']);
    $geometry=$row['geojson']=json_decode($row['geojson']);

    unset($row['geojson']);
    $feature=["type"=>"Feature",
              "geometry"=>$geometry,
              "properties"=>$row
             ];
    array_push($features,$feature);
}

$featureCollection=[
    "type"=>"FeaturCollection",
    "features"=>$features
];

echo json_encode($featureCollection);

// SELECT prj.gid, prj.numero_dossier, prj.numero_archive, prj.date_arrivee_abht, prj.date_arrivee_bet, prj.commune, prj.province, prj.douar_localite, prj.maitre_ouvrage, prj.intitule_projet, prj.architecte, prj.titre_foncier, prj.superficie, typeprj.type_projet, prj.payement, prj.date_payement, prj.montant_payer, prj.fond_dossier, prj.geom, prj.dates_commissions, cat.categorie, prj.surface_batie, typedoss.type_dossier, etat.etatdossier, prj.sepre, prj.stah, prj.sqe, prj.sgdph
// 	FROM prj_inv.prj_invest prj
// 	    inner join prj_inv.ls_etat_dossier etat on etat.id=prj.etatdossier
// 		inner join prj_inv.ls_prj_categorie cat on cat.id=prj.categories
// 		inner join prj_inv.ls_prj_type typeprj on typeprj.id=prj.type_projet
// 		inner join prj_inv.ls_prj_type_dossier typedoss on typedoss.id=prj.type_dossier