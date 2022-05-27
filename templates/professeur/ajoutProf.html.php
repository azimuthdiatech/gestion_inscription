<?php
    use App\Core\Controller;
    use App\Model\Module;
    use App\Model\Classe;
?>

<div class="main">
    <div class="conaj">
        <form action="<?=$Constantes::WEB_ROOT.'lister-professeur'?>" method="POST">
            <div class="mb-md-5 mt-md-4 pb-5">
                <p class="text-white-50 mb-5">Ajouter un professeur</p>
                <div class="check">
                    <p class="card-title">Affecter des classes et modules</p>
                    <div class="clas">
                    <h6 class="card-title">Classes</h6>
                        <?php 
                            $mod=Classe::findAll();
                            foreach ($mod as $mod) :?>   
                            <li><input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">&nbsp;<?=$mod->libelle;?>  </li> 
                        <?php endforeach?>
                        <hr>
                        <h6 class="card-title">Modules</h6>
                        <?php 
                            $mod=Module::findAll();
                            foreach ($mod as $mod) :?>
                            <li><input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">&nbsp;<?=$mod->libelle;?> </li> 
                        <?php endforeach ?>
                    </div> 
                </div>
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Nom Complet</label>
                    <input type="text" name="libelle" id="typeEmailX" class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Grade</label>
                    <input type="text" name="filiere" id="typePasswordX" class="form-control form-control-lg" />
                </div>
                
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
