<?php
/**
* OUMAIMA SABI
* DATE:05/05/2022
*/

require_once 'Classe.Service.connexion.php';

class Layer_Service{

	function __construct()
 	{
 		$c = new Connexion();
 		$this->db = $c->getdb();
 	}
    
    function findall_com()
 	{
	 	$st =	$this->db->prepare('SELECT id, ST_AsGeoJSON(geom) as geojson, "Commune", "CodeCommune", "Commune_ar", "CodeProvince", "ZoneL" from gen.ls_commune');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}

    function findall_province()
 	{
	 	$st =	$this->db->prepare('SELECT id, ST_AsGeoJSON(geom) as geojson, province, province_ar, province_a, codeprovince, coderegion FROM gen.ls_province');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	} 

    function findall_hydr()
 	{
	 	$st =	$this->db->prepare('SELECT ogc_fid, ST_AsGeoJSON(wkb_geometry) as geojson, name, gm_layer, layer, gm_type, map_name, objectid, id, nom, shape_leng, line_style, line_color, line_width, stream_id, in_flow, out_flow, drain_area, length, length_3d, bearing, font_size, font_color, font_chars, font_weigh FROM gen.reseau_hydrographique');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}

    function findall_source()
 	{
	 	$st =	$this->db->prepare('SELECT gid, nom, "Commune", remarques, ST_AsGeoJSON(geom) as geojson, oued, nature, ire, natur, "Province" FROM gen.sources');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
 	}

    function findall_plan_amena(){
        $st =	$this->db->prepare('SELECT gid, nom, "Commune", remarques, ST_AsGeoJSON(geom) as geojson, url, "Province" FROM gen.plan_amenagement');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

    function findall_nappe(){
        $st =	$this->db->prepare('SELECT gid, id, nom, "Province", "Commune", profondeur, surface, remarques, ST_AsGeoJSON(geom) as geojson, url, nom_ar FROM gen.nappes;');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

    function findall_khettaras(){
        $st =	$this->db->prepare('SELECT gid, nom, origine, "Commune", debit, etat, ayantdroit, remarques, ST_AsGeoJSON(geom) as geojson, url, "Province" FROM gen.khettaras');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

    function findall_dayas(){
        $st =	$this->db->prepare('SELECT gid, id, nom, bassin, "Commune", phe, remarques, ST_AsGeoJSON(geom) as geojson, p_retour, url, "Province" FROM gen.dayas');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

    function findall_saguia(){
        $st =	$this->db->prepare('SELECT gid, nom, origine, "Commune", debit, ayantdroit, remarques, ST_AsGeoJSON(geom) as geojson, url, "Province" FROM gen.saguia');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

	function findall_zonehynondable(){
        $st =	$this->db->prepare('SELECT gid, id, riviere, troncon, "Commune", debit, p_retour, bet_entrep, num_marche, datefin, remarques, ST_AsGeoJSON(geom) as geojson, nom, url, "Province" FROM gen.q10');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

	function findall_zones_prot(){
        $st =	$this->db->prepare('SELECT gid, nom, "Commune", "Province", remarques, ST_AsGeoJSON(geom) as geojson FROM gen.zones_protection');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

	function findall_zone_ormvah(){
        $st =	$this->db->prepare('SELECT gid, ST_AsGeoJSON(geom) as geojson, nom FROM gen.zone_ormvah ');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }

	function findall_zone_non_aedificandi(){
        $st =	$this->db->prepare('SELECT gid, id_plan_amenagement, remarques, ST_AsGeoJSON(geom) as geojson, "Commune", nom, url, "Province" FROM gen.zone_non_aedificandi');
	 	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
    }


	//selection nombre de projet dans chaque commune 
	function nombre_commune(){
		$st =	$this->db->prepare('SELECT  count(prj.gid),pro."Commune",pro.geom FROM  gen.ls_commune pro inner join prj_inv.prj_invest prj on pro.id=prj.commune group by pro."Commune",pro.geom');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet dans chaque province
	function nombre_province(){
		$st =	$this->db->prepare('SELECT  count(prj.gid),pro.province,pro.geom FROM  gen.ls_Province pro inner join prj_inv.prj_invest prj on pro.id=prj.province group by pro.province, pro.geom');
	 	if ($st->execute()) {
	 	 		return $st->fetchAll();
	 		}
	 	 	else{
	 	 		return null;
	 	 	}
	}

	//selection nombre de projet qui loin du réseau hydro de [$id] m par exemple 
	function nombre_reseau($id){
		$st =	$this->db->prepare('select count(prj.gid),res.wkb_geometry from gen.reseau_hydrographique res inner join prj_inv.prj_invest prj  on ST_Distance(res.wkb_geometry,prj.geom)<? group by res.wkb_geometry');
		if ($st->execute(array($id))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection des projets dans chaque commune
	function commune_par_prj($commune){
		$st =	$this->db->prepare('SELECT  prj.*,pro."Commune",pro.geom FROM  gen.ls_commune pro inner join prj_inv.prj_invest prj on pro.id=prj.commune where pro."Commune"=?');
		if ($st->execute(array($commune))) {
			$row = $st->fetchAll();
			return $row ;
		}
			else{
				return null;
			}
	}

	//selection les projets dans chaque province
	function province_par_prj($province){
		$st =	$this->db->prepare('SELECT prj.*,pro.province,pro.geom FROM  gen.ls_Province pro inner join prj_inv.prj_invest prj on pro.id=prj.province where pro.province=?');
		if ($st->execute(array($province))) {
			$row = $st->fetchAll();
			return $row ;
		}
		else{
				return null;
		}
	}

	//selection les reseau qui sont loin des projets de [? m] par exemple 

	function reseau($dist){

		$st =	$this->db->prepare('select res.wkb_geometry,res.name ,prj.* from gen.reseau_hydrographique res inner join prj_inv.prj_invest prj on ST_Distance(res.wkb_geometry,prj.geom)<?');
		if ($st->execute(array($dist))) {
			$row = $st->fetchAll();
			return $row ;
		}
		else{
			return null;
		}

	}




    

}