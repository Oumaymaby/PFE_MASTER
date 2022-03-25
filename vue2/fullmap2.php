<?php
/**
* OUMAIMA SABI
* DATE:15/03/2022
*/
require_once '../Couche_Service/Service_Projet.php';
require_once '../Couche_Service/Service_province.php';
require_once '../Couche_Service/Service_type_projet.php';
if(isset($_POST['ajouter'])){
    
extract($_POST);
$id= htmlspecialchars($_POST["gid"]);
$numdoss = htmlspecialchars($_POST["numdoss"]);
$datebet = htmlspecialchars($_POST["datebet"]);
$dateabht = htmlspecialchars($_POST["dateabht"]);
$province = htmlspecialchars($_POST["province"]);
$commune = htmlspecialchars($_POST["commune"]);
$intprojet = htmlspecialchars($_POST["int_projet"]);
$maitreouvrage = htmlspecialchars($_POST["maitreouvrage"]);
$architecte = htmlspecialchars($_POST["architecte"]);
$tittrefoncier = htmlspecialchars($_POST["tittrefoncier"]);
$superficie = htmlspecialchars($_POST["superficie"]);
$type_projet = htmlspecialchars($_POST["type_projet"]);
$etat_projet = 1;
$geom=htmlspecialchars($_POST["geom"]);

// $pieces = explode(",L", $geom);
// $p1=array($pieces[0]);
// // echo $p1[0];
// $p=array_merge($pieces, $p1);
// $p2=implode(",", $p);
// // echo $p[4];
// // echo $p2;
// $str1=preg_replace('/[^A-Za-z0-9. -]/', '', $p2);
// // echo $str1;
// $str2=substr($str1, 6);
// // echo $str2;
// $str3=str_replace('atLng',',', $str2);
// // echo $str2;
// // echo $str3;
// $str4=str_replace('L','', $str3);
$str2=substr($geom, 79);
// echo $str2;
// $str3=preg_replace('/[^A-Za-z0-9. -]/','', $str2);
$r=substr($str2,39) ;
$r2=substr($r,18);
$r3=substr($r2,6);
$r4=substr($r3,8);
// echo $r3;
$str3=str_replace('],[', 'oum', $r4);
// // echo $str2;

$str4=str_replace(',', ' ', $str3);

$str5=str_replace('oum',', ', $str4);
// echo $str5;
$str6=str_replace(']]]}}','', $str5);
// echo $str6;
$str7=str_replace('[','', $str6);
// echo $str7;
$geom1="MULTIPOLYGON(((".$str7.")))";
// echo $geom1;


$projet = new ProjetInv($id,$numdoss,$datebet,$dateabht,$province,$commune,$intprojet,$maitreouvrage,$architecte,$tittrefoncier,$superficie,$type_projet,$etat_projet,$geom1);

$ss = new Projet_Service();
$s=$ss->add($projet);
// var_dump($s);
// $message= "Le projet a été ajouté  avec succès";
// echo $geom1;
// exit; 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    />
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
        <link href='assets/css/map/leaflet.fullscreen.css' rel='stylesheet' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css'>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/map/measure.css">
    
    <link rel="stylesheet" href="assets/css/map/stylemap.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notiflix@3.2.2/dist/notiflix-notify-aio-3.2.2.min.js"></script>
    <script type="text/javascript" src="assets/js/map/leaflet.ajax.js"></script>
    <script type="text/javascript" src="assets/js/map/measure.js"></script>
    <script src='assets/js/map/Leaflet.fullscreen.min.js'></script>
    <script src="https://unpkg.com/geojson-vt@3.2.0/geojson-vt.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js'></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script type="text/javascript" src="assets/js/map/leaflet.browser.print.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="icon-export" viewBox="0 0 24 24">
        <path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12S18.627 0 12 0 0 5.373 0 12zm17-1h-4v8h-2v-8H7l5-6 5 6z" />
    </symbol>
    <symbol id="icon-add" viewBox="0 0 24 24">
        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z" />
    </symbol>
    <symbol id="icon-remove" viewBox="0 0 24 24">
        <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6 13H6v-2h12v2z" />
    </symbol>
    <symbol id="icon-import" viewBox="0 0 24 24">
        <path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12zM7 13h4V5h2v8h4l-5 6-5-6z" />
    </symbol>
    <symbol id="icon-arrow-left" viewBox="0 0 24 24">
        <path d="M15.422 16.594 14.016 18l-6-6 6-6 1.406 1.406L10.828 12z" />
    </symbol>
    <symbol id="icon-arrow-left" viewBox="0 0 24 24">
        <path d="M15.422 16.594 14.016 18l-6-6 6-6 1.406 1.406L10.828 12z" />
    </symbol>
    <symbol id="icon-clear" viewBox="0 0 24 24">
        <path d="M18.984 6.422 13.406 12l5.578 5.578-1.406 1.406L12 13.406l-5.578 5.578-1.406-1.406L10.594 12 5.016 6.422l1.406-1.406L12 10.594l5.578-5.578z"/>
    </symbol>
    <symbol id="icon-email" viewBox="0 0 24 24">
        <path
          d="M20.016 8.016V6L12 11.016 3.984 6v2.016L12 12.985zm0-4.032q.797 0 1.383.609t.586 1.406v12q0 .797-.586 1.406t-1.383.609H3.985q-.797 0-1.383-.609t-.586-1.406v-12q0-.797.586-1.406t1.383-.609h16.031z"
        />
      </symbol>
      <symbol id="icon-menu" viewBox="0 0 24 24">
        <path
          d="M3 13h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2zm0-6h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2zm0 12h18a1 1 0 0 0 0-2H3a1 1 0 0 0 0 2z"
        />
      </symbol>
      <symbol id="icon-person" viewBox="0 0 24 24">
        <path
          d="M12 14.016q2.531 0 5.273 1.102t2.742 2.883v2.016H3.984v-2.016q0-1.781 2.742-2.883t5.273-1.102zM12 12q-1.641 0-2.813-1.172T8.015 8.015t1.172-2.836T12 3.984t2.813 1.195 1.172 2.836-1.172 2.813T12 12z"
        />
      </symbol>
      <symbol id="icon-settings" viewBox="0 0 24 24">
        <path
          d="M12 15.516q1.453 0 2.484-1.031t1.031-2.484-1.031-2.484T12 8.486 9.516 9.517t-1.031 2.484 1.031 2.484T12 15.516zm7.453-2.532 2.109 1.641q.328.234.094.656L19.64 18.75q-.188.328-.609.188l-2.484-.984q-.984.703-1.688.984l-.375 2.625q-.094.422-.469.422H9.984q-.375 0-.469-.422l-.375-2.625q-.891-.375-1.688-.984l-2.484.984q-.422.141-.609-.188l-2.016-3.469q-.234-.422.094-.656l2.109-1.641q-.047-.328-.047-.984t.047-.984L2.437 9.375q-.328-.234-.094-.656L4.359 5.25q.188-.328.609-.188l2.484.984q.984-.703 1.688-.984l.375-2.625q.094-.422.469-.422h4.031q.375 0 .469.422l.375 2.625q.891.375 1.688.984l2.484-.984q.422-.141.609.188l2.016 3.469q.234.422-.094.656l-2.109 1.641q.047.328.047.984t-.047.984z"
        />
      </symbol>
    </svg>
    <div class="sidebar">
      <button aria-label="close sidebar" type="button" class="close-button">
        <svg>
          <use xlink:href="#icon-clear" />
        </svg>
      </button>

      <ul class="sidebar-menu">
        <li class="menu-item" data-item="menu">
          <svg><use xlink:href="#icon-menu"></use></svg>
        </li>
        <li class="menu-item" data-item="person">
          <svg><use xlink:href="#icon-person"></use></svg>
        </li>
        <li class="menu-item" data-item="email">
          <svg><use xlink:href="#icon-email"></use></svg>
        </li>
        
        <li class="menu-item" data-item="settings">
          <svg><use xlink:href="#icon-settings"></use></svg>
        </li>
        <li style= "padding:7px;color:black" >
           <a  href="accueil.php" style="color:darkgreen"><i class="fa fa-home fa-2x"></i></a>
        </li>
      </ul>

      <div class="sidebar-content">
        <div class="item-content" id="menu">
            <h2>Person</h2>
            <div class="content">
                <div class="row gutters-tiny">
                          
                              <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                  <div class="block-content bg-black-op-75">
                                      <p class="font-w600 text-white">Avis BET</p>
                                  </div>
                                  <div class="block-content">
                                      <p class="mt-5">
                                          <i class="si si-speech fa-4x"></i>
                                      </p>
                                  </div>
                              </a>
                          
                              <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                  <div class="block-content bg-black-op-75">
                                      <p class="font-w600 text-white">Stati</p>
                                  </div>
                                  <div class="block-content">
                                      <p class="mt-5">
                                      <i class="si si-bar-chart fa-4x text-corporate"></i>
                                      </p>
                                  </div>
                              </a>
                              <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                  <div class="block-content bg-black-op-75">
                                      <p class="font-w600 text-white">Projets</p>
                                  </div>
                                  <div class="block-content">
                                      <p class="mt-5">
                                          <i class="si si-folder-alt fa-4x text-danger"></i>
                                      </p>
                                  </div>
                              </a>
                              <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                  <div class="block-content bg-black-op-75">
                                      <p class="font-w600 text-white">Durées</p>
                                  </div>
                                  <div class="block-content">
                                      <p class="mt-5">
                                          <i class="si si-clock fa-4x text-corporate"></i>
                                      </p>
                                  </div>
                              </a>
                              
                        
                </div>
                
            </div>
        </div>
        <div class="item-content" id="person">
          
          <h2>Ajouter un Projet d'investissement</h2>
            <div class="content">
                <div class="block-content">
                    <form action="fullmap2.php" method="post" id='form'>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridf" name="gid" placeholder="">
                                    <label for="material-gridf">Identifiant</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridl" name="numdoss" placeholder="">
                                    <label for="material-gridl">Numero du dossier</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="date" class="form-control" id="material-gridf" name="datebet" placeholder="">
                                    <label for="material-gridf">Date d'arrivée au BET</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="date" class="form-control" id="material-gridl" name="dateabht" placeholder="">
                                    <label for="material-gridl">Date d'arrivée à ABHT</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-material">
                                    <select class="form-control" id="material-select" name="commune">
                                        <option>...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <label for="material-select">Commune</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-material">
                                
                                    <select class="form-control" id="material-select" name="province">
                                        <option>...</option>
                                        <?php
                                            $ss = new Province_Service();
                                            $tc = $ss->findAll();
                                            foreach($tc as $row) {
                                                echo '<option value="'.$row[0].'">'.$row[2].'</option>';}
                                        ?>
                                    </select>
                                    <label for="material-select">Province</label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material">
                                    <textarea class="form-control" id="material-textarea-small" name="int_projet" rows="3" placeholder="Saisir dans cette case"></textarea>
                                    <label for="material-textarea-small">Intitulé de projet</label>
                                 </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridf" name="maitreouvrage" placeholder="">
                                    <label for="material-gridf">Maître d'ouvrage</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridl" name="architecte" placeholder="">
                                    <label for="material-gridl">Architecte</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridf" name="tittrefoncier" placeholder="">
                                    <label for="material-gridf">Titre foncier</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="material-gridl" name="superficie" placeholder="">
                                    <label for="material-gridl">Superficie</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-material">
                                    <select class="form-control" id="material-select" name="type_projet">
                                        <option>...</option>
                                        <?php
                                            $ss = new Type_projet_Service();
                                            $tc = $ss->findAll();
                                            foreach($tc as $row) {
                                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';}
                                        ?>
                                    </select>
                                    <label for="material-select">Type Projet</label>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-material">
                                    <select class="form-control" id="material-select" name="etat_projet">
                                        <option>...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <label for="material-select">Etat du projet</label>
                                </div>
                            </div> -->
                        </div>
                        <div class="form-group row">
                            <label for="geom" id='label'>Veuillez ajouter un polygone sur la Carte!</label>
                            <input type="text" class="form-control" id="geom" name="geom" placeholder="">
                        </div>   
                        
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-alt-primary" name="ajouter" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>                 
            </div>
        </div>
        <div class="item-content" id="email">
          <h2>Email</h2>
          <div class="content">
            email - Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Nobis nostrum incidunt, ab explicabo expedita aliquam officiis vitae
            laborum dicta consectetur, animi cum, culpa quaerat nam? Porro
            temporibus, itaque quibusdam vitae consequuntur est ab iure! Commodi
            est aspernatur animi quae! Ad fuga perferendis dignissimos
            consectetur. Ullam excepturi eligendi blanditiis ex eius eaque
            dignissimos officiis mollitia minus assumenda, necessitatibus,
            reprehenderit molestias qui doloribus quaerat consequuntur
            voluptatibus! Quos impedit a non eligendi, dolor animi sapiente
            deserunt. Sunt ad saepe, dolorem voluptas impedit quibusdam, error
            iure recusandae laboriosam id neque nam minus ducimus nemo nobis cum
            in expedita unde accusantium rem. Ad dignissimos, quaerat
            necessitatibus mollitia facere recusandae ipsum sint vel
            exercitationem nemo quibusdam inventore? Laborum assumenda tenetur
            cum quaerat tempore vero, ab optio magni quidem mollitia, ut, harum
            amet nobis natus. Suscipit eos alias temporibus, eligendi quia
            deserunt dignissimos dolor magnam et ratione praesentium, aspernatur
            officiis reiciendis aut consectetur impedit velit id totam unde in.
            Harum asperiores id veniam nam reprehenderit beatae, eaque qui odio
            velit, blanditiis voluptas ipsum nihil! Fugit excepturi quod quaerat
            magni quae delectus cum tempore culpa, saepe voluptatibus vitae
            voluptatum dolorem quo magnam? Ex adipisci harum nihil laudantium
            dolore minima quo amet deleniti eius vero, sunt sapiente dicta
            aperiam, ratione aliquid officia iste dolorum similique consectetur
            quaerat magni dolores iure odit? Id labore eveniet eligendi
            voluptatibus. Repellat, assumenda!!!
          </div>
        </div>
        <div class="item-content" id="settings">
          <h2>Settings</h2>
          <div class="content">settings</div>
        </div>
      </div>
    </div>
    <div id="map"></div>
    
    
     <!-- leaflet parametrage -->
    
     <script src="assets/js/map/script.js"></script>
     <script>

       if (document.getElementById('geom').value.length != 0)
      { 
        document.getElementById('label').innerHTML = "voilà";
      } 
     </script>
     
   
  </body>
  
     
   
    
</html>
