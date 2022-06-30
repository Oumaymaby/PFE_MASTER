
    <div class="modal fade" id="rem_sepre" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-success">
                        <h3 class="block-title">Modifier la remarque du BET à propos du SEPRE</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                        <form action="Projet_details1.php" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material">
                                        <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $id = htmlspecialchars($_GET['id']);
                                                $ss = new Projet_Service();
                                                $tc = $ss->findById($id);
                                                $id1=$tc->getid_pr(); 
                                            }
                                        ?>
                                        <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                        <label for="register2-username">Identifiant du projet</label>
                                    </div>  
                                </div>
                                <div class="col-6">
                                    <div class="form-material">
                                        <input  type="text" class="form-control" name="avissepre" id="id_avissepre">
                                        <label for="register2-username">Identifiant du l'avis SEPRE</label>
                                    </div>  
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <textarea class="form-control"  name="rembetsepre" id="remsepre" rows="4"></textarea>
                                            <label for="contact2-msg">Remarque du BET sur les besoins en Eau</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="rem">
                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                
    </div>
    
    <div class="modal fade" id="rem1" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-success">
                        <h3 class="block-title">Modifier la remarque du BET à propos du SQE</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                        <form action="Projet_details1.php" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material">
                                        <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $id = htmlspecialchars($_GET['id']);
                                                $ss = new Projet_Service();
                                                $tc = $ss->findById($id);
                                                $id1=$tc->getid_pr(); 
                                            }
                                        ?>
                                        <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                        <label for="register2-username">Identifiant du projet</label>
                                    </div>  
                                </div>
                                <div class="col-6">
                                    <div class="form-material">
                                        <input  type="text" class="form-control" name="sqeid1" id="sqeid">
                                        <label for="register2-username">Identifiant du l'avis SQE</label>
                                    </div>  
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <textarea class="form-control"  name="rembetsqe" id="remsqe" rows="4"></textarea>
                                            <label for="contact2-msg">Remarque du BET Assainissement</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="sqemodify">
                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                
    </div> 
    
    <div class="modal fade" id="rem2" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-success">
                        <h3 class="block-title">Modifier la remarque du BET à propos du SGDPH</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                        <form action="Projet_details1.php" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material">
                                        <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $id = htmlspecialchars($_GET['id']);
                                                $ss = new Projet_Service();
                                                $tc = $ss->findById($id);
                                                $id1=$tc->getid_pr(); 
                                            }
                                        ?>
                                        <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                        <label for="register2-username">Identifiant du projet</label>
                                    </div>  
                                </div>
                                <div class="col-6">
                                    <div class="form-material">
                                        <input  type="text" class="form-control" name="sgdphid" id="sgdphid1">
                                        <label for="register2-username">Identifiant du l'avis SGDPH</label>
                                    </div>  
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <textarea class="form-control"  name="rembetsgdph" id="remsgdph" rows="4"></textarea>
                                            <label for="contact2-msg">Remarque BET protection des inondations</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="remsgdphmodify">
                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                
    </div>  

    <div class="modal fade" id="rem3" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-success">
                        <h3 class="block-title">Modifier la remarque du BET à propos du STAH</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                        <form action="Projet_details1.php" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material">
                                        <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $id = htmlspecialchars($_GET['id']);
                                                $ss = new Projet_Service();
                                                $tc = $ss->findById($id);
                                                $id1=$tc->getid_pr(); 
                                            }
                                        ?>
                                        <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                        <label for="register2-username">Identifiant du projet</label>
                                    </div>  
                                </div>
                                <div class="col-6">
                                    <div class="form-material">
                                        <input  type="text" class="form-control" name="stahid1" id="stahid1">
                                        <label for="register2-username">Identifiant du l'avis STAH</label>
                                    </div>  
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <textarea class="form-control"  name="remstahrem" id="remstahrem" rows="4"></textarea>
                                            <label for="contact2-msg">Amenagement proposé</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="remstah">
                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                
    </div>  

    <div class="modal fade" id="rem4" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-success">
                        <h3 class="block-title">Modifier la remarque du BET à propos du ABHT</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" data-toggle="slimscroll" data-height="440px" data-color="#9ccc65" data-opacity="1" data-always-visible="true" style="padding:50px !important;">
                        <form action="Projet_details1.php" method="post">
                            <div class="form-group row">
                                <div class="col-6">
                                    <div class="form-material">
                                        <?php 
                                            if(isset($_GET['id']))
                                            {
                                                $id = htmlspecialchars($_GET['id']);
                                                $ss = new Projet_Service();
                                                $tc = $ss->findById($id);
                                                $id1=$tc->getid_pr(); 
                                            }
                                        ?>
                                        <input  type="text" class="form-control" id="register2-username" name="id_prj" value="<?php if(isset($id1)) {echo $id1;} ?>" readonly>
                                        <label for="register2-username">Identifiant du projet</label>
                                    </div>  
                                </div>
                                <div class="col-6">
                                    <div class="form-material">
                                        <input  type="text" class="form-control" name="abhtid1" id="abhtid1">
                                        <label for="register2-username">Identifiant du l'avis ABHT</label>
                                    </div>  
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material">
                                            <textarea class="form-control"  name="remabhtrem" id="remabhtrem" rows="4"></textarea>
                                            <label for="contact2-msg">Remarque Générale BET</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-success" name="remabht">
                                            <i class="fa fa-plus mr-5"></i>Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>                
    </div>
    
    <script>
        function remarquesepre(id)
        {
            var rem=$('#'+id+'').data('rem');
            var idsepre=$('#'+id+'').data('idsepre');
            $("#remsepre").val(rem);
            $("#id_avissepre").val(idsepre);
            $('#rem_sepre').modal('show');           
        }
        function remarquesqe(id)
        {
            var rem=$('#'+id+'').data('remsqe');
            var idsqe=$('#'+id+'').data('idsqe');
            $("#remsqe").val(rem);
            $("#sqeid").val(id);
            $('#rem1').modal('show');           
        }
        function remarquestah(id)
        {
            var rem=$('#'+id+'').data('remstah');
            var idstah=$('#'+id+'').data('idstah');
            $("#remstahrem").val(rem);
            $("#stahid1").val(idstah);
            $('#rem3').modal('show');           
        }
        function remarquesgdph(id)
        {
            var rem=$('#'+id+'').data('remsgdph');
            var idsgdph=$('#'+id+'').data('idsgdph');
            $("#remsgdph").val(rem);
            $("#sgdphid1").val(idsgdph);
            $('#rem2').modal('show');           
        }
        function remarqueabht(id)
        {
            var rem=$('#'+id+'').data('remabht');
            var idabht=$('#'+id+'').data('idabht');
            $("#remabhtrem").val(rem);
            $("#abhtid1").val(idabht);
            $('#rem4').modal('show');           
        }
    </script>



