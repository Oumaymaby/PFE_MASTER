<?php
/**
* OUMAIMA SABI
* DATE:16/02/2022
*/
require_once 'connect.php';
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// Selection de tout les projets
$req = $pdo->prepare('select * from prj_inv.projets_investissement') or die(print_r($pdo->errorInfo()));
$req->execute() or die(print_r($req->errorInfo()));
$donnees = $req->fetch();
echo $donnees[0];

// selection le nombre des dossier en etat
$req0 = $pdo->prepare("select count(etat.etatdossier) from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id ") or die(print_r($pdo->errorInfo()));
$req0->execute() or die(print_r($req0->errorInfo()));
$donnees0 = $req0->fetch();
echo $donnees0[0];

// selection le nombre des dossier en etat[traitement en cours]

$req1 = $pdo->prepare("select count(etat.etatdossier) from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='traitement en cours'") or die(print_r($pdo->errorInfo()));
$req1->execute() or die(print_r($req1->errorInfo()));
$donnees1 = $req1->fetch();
echo $donnees1[0];



// selection le nombre des dossier en etat[Nouveau dossier]

$req2= $pdo->prepare("select count(etat.etatdossier) from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Nouveau Dossier'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req2->execute() or die(print_r($req2->errorInfo()));
$donnees2 = $req2->fetch();
echo $donnees2[0];

// selection le nombre des dossier en etat[dossier cloturé]

$req3= $pdo->prepare("select count(etat.etatdossier) from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Dossier cloturer'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req3->execute() or die(print_r($req3->errorInfo()));
$donnees3 = $req3->fetch();
echo $donnees3[0];

// selection des dossiers qui ont un Etat[Nouveau Dossier]

$req4= $pdo->prepare("select * from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Nouveau Dossier'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req4->execute() or die(print_r($req4->errorInfo()));
$donnees4 = $req4->fetch();
echo $donnees4;

// selection des dossier qui ont un Etat[Traitement en cours]

$req5= $pdo->prepare(" select * from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Traitement en cours' ") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req5->execute() or die(print_r($req5->errorInfo()));
$donnees5 = $req5->fetch();
echo $donnees5;

// selection des dossier qui ont un Etat[dossier cloturé']

$req6= $pdo->prepare(" select * from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id and etat.etatdossier='Dossier Cloturé'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req6->execute() or die(print_r($req6->errorInfo()));
$donnees6 = $req6->fetch();
echo $donnees6;

// selection des dossier avec etat
$req12= $pdo->prepare("select etat.etatdossier,inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_etat_dossier etat where inv.etatdossier = etat.id") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req12->execute() or die(print_r($req12->errorInfo()));
$donnees12 = $req12->fetch();
echo $donnees12[0];

// selection des dossier avec un typedossier
$req13= $pdo->prepare("select dt.type_dossier , inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_prj_type_dossier dt where inv.type_dossier = dt.id") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req13->execute() or die(print_r($req13->errorInfo()));
$donnees13 = $req13->fetch();
echo $donnees13[0];

// selection de nombre de dossier de type de [Projet d'investissement]
// $req7= $pdo->prepare(" select count(dt.type_dossier) from prj_inv.projets_investissement inv , prj_inv.ls_prj_type_dossier dt where inv.type_dossier = dt.id and dt.type_dossier='Projet d'investissement'") or die(print_r($pdo->errorInfo()));
// $req7->execute() or die(print_r($req7->errorInfo()));
// $donnees7 = $req7->fetch();
// echo $donnees7[0];

// selection de nombre de dossier avec de type de [Equipement publique]
$req8= $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv , prj_inv.ls_prj_type_dossier dt where inv.type_dossier = dt.id and dt.type_dossier='Equipement publique'") or die(print_r($pdo->errorInfo()));
$req8->execute() or die(print_r($req8->errorInfo()));
$donnees8 = $req8->fetch();
echo $donnees8[0];

//selection des nombres de dossier avec leur categories
$req9= $pdo->prepare("select dc.categorie , inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id") or die(print_r($pdo->errorInfo()));
$req9->execute() or die(print_r($req9->errorInfo()));
$donnees9 = $req9->fetch();
echo $donnees9[0];

// selection des dossiers avec categorie[Rokhas]
$req7= $pdo->prepare("select dc.categorie , inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='Rokhas'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req7->execute() or die(print_r($req7->errorInfo()));
$donnees7 = $req7->fetch();
echo $donnees7[0];

// selection des dossiers avec categorie[CRUI]
$req14= $pdo->prepare("select dc.categorie , inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='CRUI'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req14->execute() or die(print_r($req14->errorInfo()));
$donnees14 = $req14->fetch();
echo $donnees14[0];

//selection des dossier avec categorie [Dossier physique]
$req10= $pdo->prepare("select dc.categorie , inv.numero_dossier from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='Dossier physique'") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req10->execute() or die(print_r($req10->errorInfo()));
$donnees10 = $req10->fetch();
echo $donnees10[0],$donnees10[1];

//selection le nombre de dossier avec une catégorie[Rokhas]
$req11= $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='Rokhas' ") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req11->execute() or die(print_r($req11->errorInfo()));
$donnees11 = $req11->fetch();
echo $donnees11[0];

//selection le nombre de dossier avec une catégorie[CRUI]
$req12= $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='CRUI' ") or die(print_r($pdo->errorInfo()));
// var_dump($req2);
$req12->execute() or die(print_r($req12->errorInfo()));
$donnees12 = $req12->fetch();
echo $donnees12[0];

//selection le nombre de dossier avec une catégorie[Dossier physique]
$req15= $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv , prj_inv.ls_prj_categorie dc where inv.categories = dc.id and dc.categorie='Dossier physique' ") or die(print_r($pdo->errorInfo()));
$req15->execute() or die(print_r($req15->errorInfo()));
$donnees15 = $req15->fetch();
echo $donnees15[0];

//selection des type de projet
$req16= $pdo->prepare("select inv.numero_dossier , dt.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type dt where inv.type_projet = dt.id ") or die(print_r($pdo->errorInfo()));
$req16->execute() or die(print_r($req16->errorInfo()));
$donnees16 = $req16->fetch();
echo $donnees16[0];

//selection des type de projet [grand projet]
$req17= $pdo->prepare("select inv.numero_dossier , dt.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type dt where inv.type_projet = dt.id and dt.type_projet='Grand projet'") or die(print_r($pdo->errorInfo()));
$req17->execute() or die(print_r($req17->errorInfo()));
$donnees17 = $req17->fetch();
echo $donnees17[0];

//selection des type de projets [petit projet] 
$req18= $pdo->prepare("select inv.numero_dossier , dt.type_projet from prj_inv.projets_investissement inv , prj_inv.ls_prj_type dt where inv.type_projet = dt.id and dt.type_projet='Petit projet'") or die(print_r($pdo->errorInfo()));
$req18->execute() or die(print_r($req18->errorInfo()));
$donnees18 = $req18->fetch();
echo $donnees18[0];

//selection des dossiers avec mode d'assainissement 
$req19 = $pdo->prepare("select da.mode_assainissement, inv.numero_dossier from prj_inv.ls_prj_mode_assainissement da , prj_inv.projets_investissement inv where inv.mode_assainissement=da.id ") or die(print_r($pdo->errorInfo()));
$req19->execute() or die(print_r($req19->errorInfo()));
$donnees19 = $req19->fetch();
// echo $donnees19[0]; because it returns bool value false 

//selection des dossiers avec mode d'assainissements [fausse septique]
$req20 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.ls_prj_mode_assainissement da , prj_inv.projets_investissement inv where inv.mode_assainissement=da.id and da.mode_assainissement='Fosse septique'") or die(print_r($pdo->errorInfo()));
$req20->execute() or die(print_r($req20->errorInfo()));
$donnees20 = $req20->fetch();
// echo $donnees20[0]; because it bool value false

//selection les dossier avec le type d'eau
$req21 = $pdo->prepare(" select inv.numero_dossier,ta.type_cours_eau from prj_inv.projets_investissement inv, prj_inv.ls_prj_type_cours_eau ta where inv.type_cours_eau=ta.id") or die(print_r($pdo->errorInfo()));
$req21->execute() or die(print_r($req21->errorInfo()));
$donnees21 = $req21->fetch();
echo $donnees21[0];

//selection des nombres de dossier avec un type d'eau [Saguia/Mesref ]
$req22 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_type_cours_eau ta where inv.type_cours_eau=ta.id and ta.type_cours_eau='Saguia/Mesref'") or die(print_r($pdo->errorInfo()));
$req22->execute() or die(print_r($req22->errorInfo()));
$donnees22 = $req22->fetch();
echo $donnees22[0];


//selection des nombres de dossier avec un type d'eau [Khettara ]
$req23 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_type_cours_eau ta where inv.type_cours_eau=ta.id and ta.type_cours_eau='Khettara'") or die(print_r($pdo->errorInfo()));
$req23->execute() or die(print_r($req23->errorInfo()));
$donnees23 = $req23->fetch();
echo $donnees23[0];

//selection des nombres de dossier avec un type d'eau [Oued/Chaabat]
$req24 = $pdo->prepare("select count(inv.numero_dossier) FROM prj_inv.projets_investissement inv, prj_inv.ls_prj_type_cours_eau ta where inv.type_cours_eau=ta.id and ta.type_cours_eau='Oued/Chaabat'") or die(print_r($pdo->errorInfo()));
$req24->execute() or die(print_r($req24->errorInfo()));
$donnees24 = $req24->fetch();
echo $donnees24[0];

//selection des dossiers avec nature de courbes d'eau 
$req25 = $pdo->prepare("select inv.numero_dossier,ce.avis from prj_inv.projets_investissement inv, prj_inv.ls_prj_nature_ceau ce where inv.nature_cours_eau=ce.id") or die(print_r($pdo->errorInfo()));
$req25->execute() or die(print_r($req25->errorInfo()));
$donnees25 = $req25->fetch();
echo $donnees25[0],$donnees25[1];

//selection de nombres des dossier avec la nature de courbures d'eau [DPH]
$req26 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_nature_ceau ce where inv.nature_cours_eau=ce.id and ce.avis='DPH'") or die(print_r($pdo->errorInfo()));
$req26->execute() or die(print_r($req26->errorInfo()));
$donnees26 = $req26->fetch();
echo $donnees26[0];

//selection de nombres des dossier avec la nature de courbures d'eau [Non DPH]
$req27 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_nature_ceau ce where inv.nature_cours_eau=ce.id and ce.avis='Non DPH'") or die(print_r($pdo->errorInfo()));
$req27->execute() or die(print_r($req27->errorInfo()));
$donnees27 = $req27->fetch();
echo $donnees27[0];

//selection de nombres des dossier avec la nature de courbures d'eau [ORMVA]
$req28 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_nature_ceau ce where inv.nature_cours_eau=ce.id and ce.avis='ORMVA'") or die(print_r($pdo->errorInfo()));
$req28->execute() or die(print_r($req28->errorInfo()));
$donnees28 = $req28->fetch();
echo $donnees28[0];

//selection de nombres des dossier avec la nature de courbures d'eau [Non ORMVA]
$req29 = $pdo->prepare("select count(inv.numero_dossier) from prj_inv.projets_investissement inv, prj_inv.ls_prj_nature_ceau ce where inv.nature_cours_eau=ce.id and ce.avis='Non ORMVA'") or die(print_r($pdo->errorInfo()));
$req29->execute() or die(print_r($req29->errorInfo()));
$donnees29 = $req29->fetch();
echo $donnees29[0];

//selection les dossiers dont le durée entre date d'arrivé au BET et ABHT <15 
$req30 = $pdo->prepare("select inv.numero_dossier , inv.date_arrivee_bet - inv.date_arrivee_abht from prj_inv.projets_investissement inv where inv.date_arrivee_bet - inv.date_arrivee_abht <15") or die(print_r($pdo->errorInfo()));
$req30->execute() or die(print_r($req30->errorInfo()));
$donnees30 = $req30->fetch();
echo $donnees30[0];

// selection les dossiers en avis 
// select inv.avis_sgdph , inv.avis_sqe, inv.avis_stah,inv.avis_sepre ,inv.avis_abht ,av.avis
// from prj_inv.projets_investissement inv , prj_inv.ls_prj_avis av
// where inv.avis_sgdph = av.id 
// and inv.avis_sqe= av.id 
// and inv.avis_stah= av.id 
// and inv.avis_sepre= av.id
// and inv.avis_abht = av.id









