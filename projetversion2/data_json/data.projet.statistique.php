<?php 
/**
* OUMAIMA SABI
* DATE:21/06/2022
*/

require_once '../couche_service/Classe.Service.projet.php';
require_once '../couche_service/Classe.Service.t_avis_abht.php';
require_once '../couche_service/Classe.Service.t_avis_sepre.php';
require_once '../couche_service/Classe.Service.t_avis_sgdph.php';
require_once '../couche_service/Classe.Service.t_avis_sqe.php';
require_once '../couche_service/Classe.Service.t_avis_stah.php';
$id=$_GET['id'];
$b = new Projet_Service();
$abht = new ABHT_Service();
$sepre = new SEPRE_Service();
$stah = new STAH_Service();
$sgdph = new SGDPH_Service();
$sqe = new SQE_SERVICE();


$s1 = $sepre->sepre_maxdate($id);
$s2 = $sqe->sqe_maxdate($id);
$s3 = $stah->stah_maxdate($id);
$s4 = $sgdph->sgdph_maxdate($id);
$s5 = $abht->abht_maxdate($id);
$s6=$b->findById1($id);

$data1 = array();
$data2 = array();
$data3 = array();
$data4 = array();
$data5 = array();
$data6 = array();

foreach ($s6 as $row) {
    $data6 = array(
        "id"=>$row['gid'],
        "numero_dossier"=>$row['numero_dossier'],
        "numero_archive"=>$row['numero_archive'],
        "date_arrivee_abht"=>$row['date_arrivee_abht'],
        "date_bet"=>$row['date_arrivee_bet'],
        "commune"=>$row['commune'],
        "province"=>$row['province'],
        "douar_localite"=>$row['douar_localite'],
        "maitre_ouvrage"=>$row['maitre_ouvrage'],
        "architecte"=>$row['architecte'],
        "intitule_projet"=>$row['intitule_projet'],
        "titre_foncier"=>$row['titre_foncier'],
        "superficie"=>$row['superficie'], 
        "type_projet"=>$row['type_projet'], 
        "payement"=>$row['payement'], 
        "date_payement"=>$row['date_payement'], 
        "montant_payer"=>$row['montant_payer'], 
        "fond_dossier"=>$row['fond_dossier'], 
        "geom"=>$row['geom'], 
        "dates_commissions"=>$row['dates_commissions'], 
        "categories"=>$row['categories'], 
        "surface_batie"=>$row['surface_batie'], 
        "type_dossier"=>$row['type_dossier'],
        "etat_dossier"=>$row['etatdossier'],
        "sepre"=>$row['sepre'],
        "sqe"=>$row['sqe'],
        "stah"=>$row['stah'],
        "sgdph"=>$row['sgdph'],
    );
}


foreach ($s1 as $row) {
    $data1 = array(
        "id_sepre"=>$row['id_sepre'],
        "id_prj"=>$row['id_prj'],
        "remarque_bet_besoin_eau"=>$row['remarque_bet_besoin_eau'],
        "remarques_sup_sepre"=>$row['remarques_sup_sepre'],
        "avis_sepre"=>$row['avis_sepre'],
        "date_avis_sepre"=>$row['date_avis_sepre'],
        "date_avis_bet_sepre"=>$row['date_avis_bet_sepre'],
        "id_user"=>$row['id_user'],
        "id_sepre_info"=>$row['id_sepre_info'],

    );
}

foreach ($s2 as $row) {
    $data2 = array(
        "id_sqe"=>$row['id_sqe'],
        "id_prj"=>$row['id_prj'],
        "remarque_bet_assainissement"=>$row['remarque_bet_assainissement'],
        "remarque_sup_sqe"=>$row['remarque_sup_sqe'],
        "avis_sqe"=>$row['avis_sqe'],
        "date_avis_sqe"=>$row['date_avis_sqe'],
        "date_avis_bet_sqe"=>$row['date_avis_bet_sqe'],
        "valide_sqe"=>$row['valide_sqe'],
        "approuvee_sqe"=>$row['approuvee_sqe'],
        "id_sqe_info"=>$row['id_sqe_info'],
        "id_user"=>$row['id_user'],
    );
}

foreach ($s3 as $row) {
    $data3 = array(
        "id_stah"=>$row['id_stah'],
        "id_prj"=>$row['id_prj'],
        "amenagement_propose"=>$row['amenagement_propose'],
        "avis_abht_amenagement"=>$row['avis_abht_amenagement'],
        "remarque_sup_stah"=>$row['remarque_sup_stah'],
        "avis_stah"=>$row['avis_stah'],
        "date_avis_stah"=>$row['date_avis_stah'],
        "date_avis_bet_stah"=>$row['date_avis_bet_stah'],
        "valide_par_stah"=>$row['valide_par_stah'],
        "approuve_par_stah"=>$row['approuve_par_stah'],
        "id_stah_info"=>$row['id_stah_info'],
        "id_user"=>$row['id_user'],
    );
}


foreach ($s4 as $row) {
    $data4 = array(
        "id_sgdph"=>$row['id_sgdph'],
        "id_prj"=>$row['id_prj'],
        "remarque_bet_protection_inondations"=>$row['remarque_bet_protection_inondations'],
        "remarque_sup_sgdph"=>$row['remarque_sup_sgdph'],
        "avis_sgdph"=>$row['avis_sgdph'],
        "date_avis_sgdph"=>$row['date_avis_sgdph'],
        "date_avis_bet_sgdph"=>$row['date_avis_bet_sgdph'],
        "valide_par_sgdph"=>$row['valide_par_sgdph'],
        "approuve_par_sgdph"=>$row['approuve_par_sgdph'],
        "id_sgdph_info"=>$row['id_sgdph_info'],
        "id_user"=>$row['id_user'],
    );
}

foreach ($s5 as $row) {
    $data5 = array(
        "id_abht"=>$row['id_abht'],
        "id_prj"=>$row['id_prj'],
        "remarques_generales_bet"=>$row['remarques_generales_bet'],
        "avis_abht"=>$row['avis_abht'],
        "date_avis_abht"=>$row['date_avis_abht'],
        "date_avis_bet_abht"=>$row['date_avis_bet_abht'],
        "etabli_par"=>$row['etabli_par'],
        "valide_par"=>$row['valide_par'],
        "approuve_par"=>$row['approuve_par'],
        "id_user"=>$row['id_user'],
    );
}

$response=array_merge($data1,$data2,$data3,$data4,$data5,$data6);
$r=array(
       "data" => $response
    );

echo json_encode($r);