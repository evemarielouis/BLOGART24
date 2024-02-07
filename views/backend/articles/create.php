

<?php
include '../../../footer.php';
?>

<?php
include '../../../header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau Article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Titre</label>
                    <input id="titre" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Date création</label>
                    <input id="Datecreation" name="dtCreaArt" class="form-control" type="datetime-local" autofocus="autofocus" placeholder="jj/mm/aaaa">
                    <br>
                    <label for="libStat">Chapeau</label>
                    <textarea id="Chapeau" name="libChapoArt" class="form-control" placeholder="Décrivez le chapeau. Sur 500 caractères." maxlength="500" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Accroche paragraphe 1</label>
                    <input id="Accroche1" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="">
                    <br>sur 100 car.
                    <label for="libStat">Paragraphe 1</label>
                    <textarea id="Paragraphe1" name="parag1Art" class="form-control" placeholder="Décrivez le premier paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 1</label>
                    <input id="Soustitre1" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 2</label>
                    <textarea id="Paragraphe2" name="parag2Art" class="form-control" placeholder="Décrivez le deuxième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Sous-titre 2</label>
                    <input id="Soustitre2" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" maxlength="100" placeholder="Sur 100 car.">
                    <br>
                    <label for="libStat">Paragraphe 3</label>
                    <textarea id="Paragraphe3" name="parag3Art" class="form-control" placeholder="Décrivez le troisième paragraphe. Sur 1200 car." maxlength="1200" style="height: 200px;"></textarea>
                    <br>
                    <label for="libStat">Conclusion</label>
                    <textarea id="Conclusion" name="libConclArt" class="form-control" placeholder="Décrivez la conclusion. Sur 800 car." maxlength="500" style="height: 200px;"></textarea>
                    <br>
                   

                    <!-- image !-->
                    <label for="imageInput">Choisir une image :</label>
                    <input type="file" id="imageInput" name="urlPhotArt" accept=".jpg, .jpeg, .png, .gif" maxlength="80000" width="80000" height="80000" size="200000000000">
                    
                    <p>>> Extension des images acceptées : .jpg, .gif, .png, .jpeg (lageur, hauteur, taille max : 80000px, 80000px, 200 000 Go)</p>
                    <!-- choix de la thématique !-->
                    <p><br></p>
                    <label for="libThem">Thématique :<br></label>
                    <select name="thematique" id="libThem">
                    <option value="">Cliquez et selectionnez une thématique</option>
                    <?php 
                            $result = sql_select('thematique');
                            foreach($result as $req){
                                echo '<option value="' . $req['numThem'] . '">' . $req['libThem'] . '</option>';
                            }
                        ?>
                    </select>
                   


                </div>
                <br>
                <div class="form-group mt-2">

                    <button type="submit" class="btn btn-primary">Confirmer create ?</button>
                </div>
                <?php 
                    $requiredFields = ['libTitrArt', 'dtCreaArt', 'libChapoArt', 'libAccrochArt', 'parag1Art', 'libSsTitr1Art', 'parag2Art', 'libSsTitr2Art', 'parag3Art', 'libConclArt',];

                    foreach ($requiredFields as $field) {
                        if (empty($_POST[$field])) {
                            echo "Veuillez remplir tous les champs du formulaire.";
                            exit();
                        }
                    }
                    ?>
                
                


            </form>
        </div>
    </div>
</div>




<?php
include '../../../header.php';


?>
