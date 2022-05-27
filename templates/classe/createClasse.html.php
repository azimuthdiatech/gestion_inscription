
<div class="concla">
    <form action="<?=$action?>" method="POST">
        <div class="mb-md-5 mt-md-4 pb-5">
            <p class="text-white-50 mb-5">Ajouter une classe</p>
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Libelle</label>
                <input type="text" name="libelle" value="<?=isset($classe->libelle)?$classe->libelle:"" ?>" class="form-control form-control-lg" />
            </div>
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Filiere</label>
                <input type="text" name="filiere" value="<?=isset($classe->filiere)?$classe->filiere:"" ?>" class="form-control form-control-lg" />
            </div>
            <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Niveau</label>
                <input type="text" name="niveau" value="<?=isset($classe->niveau)?$classe->niveau:"" ?>" class="form-control form-control-lg" />
            </div>
            <button class="btn btn-outline-light btn-lg px-5" value="<?=isset($classe->id)?"Modifier":"Ajouter" ?>" type="submit">Enregistrer</button>
        </div>
    </form>
</div>