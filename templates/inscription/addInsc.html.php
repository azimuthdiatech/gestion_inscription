<div class="con">
    <form action="<?=$Constantes::WEB_ROOT.'classes'?>" method="POST">
        <div class="mb-md-5 mt-md-4 pb-5">
            <p class="text-white-50 mb-5">Ajouter une Inscription</p>
            <div class="form-outline form-white mb-4">
                <input type="text" name="libelle" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Matricule</label>
            </div>
            <div class="form-outline form-white mb-4">
                <input type="text" name="filiere" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Adresse</label>
            </div>
            <div class="form-outline form-white mb-4">
                <input type="text" name="niveau" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Sexe</label>
            </div>
            <button class="btn btn-outline-light btn-lg px-5" type="submit">Enregistrer</button>
        </div>
    </form>
</div>