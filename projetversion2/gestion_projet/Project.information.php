<?php
    /**
    * OUMAIMA SABI
    * DATE:07/03/2022
    */
    require_once 'Projet_home.php';
?>

            <div class="content">
                <nav class="breadcrumb bg-white push">
                    <a class="breadcrumb-item" href="Projet_tableau_bord.php">Tableau de bord</a>
                    <span class="breadcrumb-item active">Information du Projet</span>
                </nav>
                
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Information générale sur le projet d'investissement</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <div class="col-lg-4">
                                <!-- Intro Category -->
                                    <table class="table table-striped table-borderless table-vcenter">
                                        
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->getnum_oss().'</span>';
                                                    ?>
                                                    <div class="">Numéro du dossier</div> 
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->getnum_archv().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Numéro d'archive</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->getmaitre_ouv().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Maitre d'Ouvrage</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->getarchitecte().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Architecte</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->gettitre_foncier().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Titre foncier</div>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php $b = new Projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $bb->getdouar_loc().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Douar Localite</div>
                                                
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                <!-- Intro Category -->
                                    <table class="table table-striped table-borderless table-vcenter">
                                        
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Numéro du dossier</a>
                                                    <div class="">Numéro du dossier</div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Announcements</a>
                                                    <div class="text-muted my-5">For all recent news</div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a class="font-size-h5 font-w600" href="be_pages_forum_topics.html">Terms &amp; Conditions</a>
                                                    <div class="text-muted my-5">Please read and comply with our forum’s rules</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                <!-- Intro Category -->
                                    <table class="table table-striped table-borderless table-vcenter">
                                        
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Categorie_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->getcatg());
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $ee->getcategorie().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Categorie</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_projet_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_projet());
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $ee->gettype_projet().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Type de projet</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                        $b = new Projet_Service();
                                                        $e=new Type_Dossier_Service();
                                                        $id=$_GET['id'];
                                                        $bb = $b->findById($id);
                                                        $ee=$e->findById($bb->gettype_doss());
                                                        echo '<span class="font-size-h5 font-w600" href="be_pages_forum_topics.html">'. $ee->gettype_d().'</span>';
                                                    ?>
                                                    <div class="text-muted my-5">Type de dossier</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php 
            require_once 'Projet_footer.php';
        ?>
    </body>
</html>