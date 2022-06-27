<?php
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/

// ----------------------------------------------------sepre-------------------------------------------------------------------------
//----------------------------session Hydroleader----------------------------------------------
if (isset($_SESSION['user_name'])){
    // var_dump($_SESSION['user_id']);
    if(isset($_POST['sepre'])){
        $orig_aep = htmlspecialchars($_POST["orig_aep"]);
        $speci_autre = htmlspecialchars($_POST["speci_autre"]);
        $besoin_domes = htmlspecialchars($_POST["besoin_domes"]);
        $besoin_irr = htmlspecialchars($_POST["besoin_irr"]);
        $date_info=date("Y-m-d");
        $id_user=$_SESSION['user_id'];
        // $id_sepre_info=htmlspecialchars($_POST["id_sepre"]);
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $sepre = new SEPRE_INFO($orig_aep,$speci_autre,$besoin_domes,$besoin_irr,$date_info,$id_user,$id_prj);
        
        // var_dump($sepre);
        // var_dump($avis);
        $p=new Projet_Service();
        $avis_ser_sepre=new SEPRE_S_INFO();
        if($avis_ser_sepre->add($sepre)){
            $p->updatesepre($id_prj);
            header("Location:Projet_details1.php?id=".$id_prj); 
        }   
    }
    
    if(isset($_POST['rem_bet_sepre_submit'])){
        $id_sepre = htmlspecialchars($_POST["id_avis_sepre"]);
        $id_proj = htmlspecialchars($_POST["id_prj"]);
        $rem_sepre_bet = htmlspecialchars($_POST["rem_bet_sepre1"]); 
        $dat_bet=date("Y-m-d");
        $update= new SEPRE_Service();
        $update->update_rem_bet($rem_sepre_bet,$id_sepre,$id_proj,$dat_bet);
        // var_dump($update->update_rem_bet($rem_sepre_bet,$id_proj,$id_sepre));
        header("Location:Projet_details1.php?id=".$id_proj);
    }

    if(isset($_POST['add_avis_sepre'])){
        $id_avis_sepre_info=htmlspecialchars($_POST["id_avis_sepre_info"]);
        $id_proj = htmlspecialchars($_POST["id_prj"]);
        $rem_sepre_bet = htmlspecialchars($_POST["rem_bet_sepre1"]);
        $avis=1;
        $date_avis_bet_sepre=date("Y-m-d");
        $id_prj=$_GET['id'];
        $user=$_SESSION['user_id'];
        $avis= new SEPRE_AVIS($avis,$rem_sepre_bet,NULL,NULL,$date_avis_bet_sepre,$user,$id_avis_sepre_info,$id_proj);
        $add= new SEPRE_Service();
        $add->add($avis);
        header("Location:Projet_details1.php?id=".$id_proj);
    }

//----------------------------session sepre----------------------------------------------

    if(isset($_POST['add_sepre'])){
        $id_avis_sepre=htmlspecialchars($_POST["id_avis_sepre"]);
        $id_avis_sepre_info=htmlspecialchars($_POST["id_avis_sepre_info"]);
        $id_proj = htmlspecialchars($_POST["id_prj"]);
        $avis_sepre=htmlspecialchars($_POST["avis_sepre"]);
        $rem_sup_sepre = htmlspecialchars($_POST["rem_sup_sepre"]);
        $date_avis_sepre=date("Y-m-d");
        $update= new SEPRE_Service();
        $update->update_avis_sepre($rem_sup_sepre,$avis_sepre,$date_avis_sepre,$id_avis_sepre);
        header("Location:Projet_details1.php?id=".$id_proj);
    }



// ------------------------------------------------------------SQE-------------------------------------------
    
    if(isset($_POST['sqe'])){
        $volum= htmlspecialchars($_POST["volume_use"]);
        $mode_assai= htmlspecialchars($_POST["mode_assai"]);
        $reutil= htmlspecialchars($_POST["reutil"]);
        $niv_trat= htmlspecialchars($_POST["niv_trat"]);
        $niveau_piezo= htmlspecialchars($_POST["niveau_piezo"]);
        $datenivea= htmlspecialchars($_POST["datenivea"]);
        $coord_x= htmlspecialchars($_POST["coord_x"]);
        $coord_y= htmlspecialchars($_POST["coord_y"]);
        $trat_boue= htmlspecialchars($_POST["trat_boue"]);
        $date_info=date("Y-m-d");
        $id_user=$_SESSION['user_id'];
        // $id_sqe_info=htmlspecialchars($_POST["id_sqe"]);
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $sqe = new SQE_INFO($volum,$mode_assai,$reutil,$niv_trat,$niveau_piezo,$datenivea,$coord_x,$coord_y,$trat_boue,$date_info,$id_user,$id_prj);
        $info_sqe= new SQE_S_INFO();
        $p=new Projet_Service();
        if($info_sqe->add($sqe)){
            $p->updatesqe($id_prj);
            header("Location:Projet_details1.php?id=".$id_prj); }   
    }
    if(isset($_POST['add_avis_sqe'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_avis_sqe_info=htmlspecialchars($_POST["id_avis_sqe_info"]);
        $rem_bet_sqe1=htmlspecialchars($_POST["rem_bet_sqe1"]);
        // $avis_sqe=htmlspecialchars($_POST["avis_sqe"]);
        $rem_sup_sqe=htmlspecialchars($_POST["rem_sup_sqe"]);
        $avis=1;
        $date_avis_bet_sqe=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $avis= new SQE_AVIS($avis,NULL,19,19,NULL,$rem_bet_sqe1,$date_avis_bet_sqe,$id_avis_sqe_info,$id_prj,$user);
        $add= new SQE_Service();
        $add->add($avis);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    

    if(isset($_POST['avissqe'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_avissqe=htmlspecialchars($_POST["id_avissqe"]);
        $rem_sup_sqe=htmlspecialchars($_POST["rem_sup_sqe"]);
        $avis_sqe=htmlspecialchars($_POST["avis_sqe"]);
        $date_avis_sqe=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $update= new SQE_SERVICE();
        $update->update_avis_sqe($rem_sup_sqe,$avis_sqe,$date_avis_sqe,$user,19,$id_avissqe);
        header("Location:Projet_details1.php?id=".$id_prj);
    }



//------------------------------------------SGDPH----------------------------------------------------------------------------

    if(isset($_POST['sgdph'])){
        //filtre et validation du formulaireif
        // $id_sgdph = htmlspecialchars($_POST["id_sgdph"]);
        $type_cours = htmlspecialchars($_POST["type_cours"]);
        $nom_cours = htmlspecialchars($_POST["nom_cours"]);
        $debit_cours = htmlspecialchars($_POST["debit_cours"]);
        $nature_cours = htmlspecialchars($_POST["nature_cours"]);
        $servitude = htmlspecialchars($_POST["servitude"]);
        $origine_eaux = htmlspecialchars($_POST["origine_eaux"]);
        $origine_eauy = htmlspecialchars($_POST["origine_eauy"]);
    
        if(isset($_POST["aut1"])){
            
        }else{
            $_POST["aut1"]="0";
        }
        if(isset($_POST["aut_dev"])){
        }else{
            $_POST["aut_dev"]="0";
        }
        if(isset($_POST["aut_occ"])){
        }else{
            $_POST["aut_occ"]="0";
        }
        if(isset($_POST["aut_prele"])){
    
        }else{
            $_POST["aut_prele"]="0";
        }   
        $date_aut_creus = htmlspecialchars($_POST["date_aut_creus"]);
        $date_aut_prelev = htmlspecialchars($_POST["date_aut_prelev"]);
        $date_aut_dev = htmlspecialchars($_POST["date_aut_dev"]);
        $date_aut_occ = htmlspecialchars($_POST["date_aut_occ"]);
        $num_aut_creus = htmlspecialchars($_POST["num_aut_creus"]);
        $num_aut_prelev = htmlspecialchars($_POST["num_aut_prelev"]);
        $num_aut_dev = htmlspecialchars($_POST["num_aut_dev"]);
        $num_aut_occ = htmlspecialchars($_POST["num_aut_occ"]);
        $autre_autorisation = htmlspecialchars($_POST["autre_autorisation"]);
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $date_info=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $p=new Projet_Service();
        $sgdph = new SGDPH_INFO($type_cours,$nom_cours,$debit_cours,$nature_cours,$servitude,$origine_eaux,$origine_eauy,$_POST["aut1"],$_POST["aut_prele"],$_POST["aut_dev"],$_POST["aut_occ"],$date_aut_creus,$date_aut_prelev ,$date_aut_dev ,$date_aut_occ,$num_aut_creus,$num_aut_prelev,$num_aut_dev,$num_aut_occ,$autre_autorisation,$date_info,$user,$id_prj);
        $info_sgdph= new SGDPH_S_INFO();
        if($info_sgdph->add($sgdph)){
            $p->updatesgdph($id_prj);
            header("Location:Projet_details1.php?id=".$id_prj); } 
    }


    if(isset($_POST['add_avis_sgdph'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_avis_sgdph_info=htmlspecialchars($_POST["id_avis_sgdph_info"]);
        $rem_bet_sgdph1=htmlspecialchars($_POST["rem_bet_sgdph1"]);
        $rem_sup_sgdph=htmlspecialchars($_POST["rem_sup_sgdph"]);
        $avis=1;
        $date_avis_bet_sgdph=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $avis= new SGDPH_AVIS(NULL,$rem_bet_sgdph1,$avis,NULL,19,19,$date_avis_bet_sgdph,$id_avis_sgdph_info,$id_prj,$user);
        $add= new SGDPH_Service();
        $add->add($avis);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    if(isset($_POST['avis_sgdphldkf'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_sgdph1=htmlspecialchars($_POST["id_sgdph1"]);
        $avis_sgdph=htmlspecialchars($_POST["avis_sgdph"]);
        $rem_sup_sgdph=htmlspecialchars($_POST["rem_sup_sgdph"]);
        $avis_sgdph=htmlspecialchars($_POST["avis_sgdph"]);
        $date_avis_sgdph=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $update= new SGDPH_Service();
        $update->update_avis_sgdph($rem_sup_sgdph,$avis_sgdph,$date_avis_sgdph,$user,19,$id_sgdph1);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    //-----------------------------------------STAH---------------------------------------------
    // ---------------------------------------Hydroleader--------------------------------------
    if(isset($_POST['stah'])){
        // $id_stah_info= htmlspecialchars($_POST["id_stah_info"]);
        $superficie= htmlspecialchars($_POST["super_bv"]);
        $date_info=date("Y-m-d");
        $id_user=$_SESSION['user_id'];
        $avis=1;
        $avis_amg=1;
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $stah = new STAH_INFO($superficie,$date_info,$id_user,$id_prj);
        $info_stah= new STAH_S_INFO();
        $info_stah->add($stah);
        $p=new Projet_Service();
        $p->updatestah($id_prj);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    if(isset($_POST['add_avis_stah'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_avis_stah_info=htmlspecialchars($_POST["id_avis_stah_info"]);
        $rem_amg_bet=htmlspecialchars($_POST["rem_amg_bet"]);
        $rem_sup=htmlspecialchars($_POST["rem_sup"]);
        $avis=1;
        $avis_amg=1;
        $date_avis_bet_stah=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $avisstah= new STAH_AVIS($avis,$avis_amg,NULL,19,19,NULL,$rem_amg_bet,$date_avis_bet_stah,$id_avis_stah_info,$id_prj,19);
        $add= new STAH_Service();
        $add->add($avisstah);
        header("Location:Projet_details1.php?id=".$id_prj);
    }
    //-------------------session stah---------------------------------------------------------

    if(isset($_POST['avis_stah'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $id_avis_stah_info=htmlspecialchars($_POST["id_avis_stah_info"]);
        $id_avis_stah=htmlspecialchars($_POST["id_avis_stah"]);
        $rem_sup=htmlspecialchars($_POST["rem_sup"]);
        $avis_stah1=htmlspecialchars($_POST["avis_stah1"]);
        $avis_amg=htmlspecialchars($_POST["avis_amg"]);
        $date_avis_stah=date("Y-m-d");
        $user=$_SESSION['user_id'];
        // var_dump($avis_stah1);
        $update= new STAH_Service();
        $update->update_avis_stah($rem_sup,$avis_stah1,$date_avis_stah,$avis_amg,$user,19,$id_avis_stah);
        header("Location:Projet_details1.php?id=".$id_prj);
    }
    
    //------------------------------ABHT---------------------
    if(isset($_POST['add_avis_abht'])){
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $rem_abht_bet=htmlspecialchars($_POST["rem_abht_bet"]);
        $avis_abht=1;
        $date_avis_bet_abht=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $avisabht= new ABHT(1,$date_avis_bet_abht,NULL,19,19,19,$rem_abht_bet,$id_prj,$user);
        $add= new ABHT_Service();
        $add->add($avisabht);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    if(isset($_POST['add_avis_abht_sepre'])){
        $id_abht=htmlspecialchars($_POST["id_abht_sepre"]);
        $id_prj=htmlspecialchars($_POST["id_prj"]);
        $avis_abht=htmlspecialchars($_POST["avis_abht"]);
        $date_avis_abht=date("Y-m-d");
        $user=$_SESSION['user_id'];
        $add= new ABHT_Service();
        $add->update_abht($avis_abht,$date_avis_abht,$user,$id_abht);
        header("Location:Projet_details1.php?id=".$id_prj);
    }

    

}else{
    header('location:authen.php');
}





?>