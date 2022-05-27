<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">Liste des classes</h4>
        <p class="card-text">
            <table class="table table-bordered table-hover table table-tripped">
                <thead>
                    <tr>
                        <th>Libelle</th>
                        <th>Filière</th>
                        <th>Niveau</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($classes as $mod) :?>
                        <tr>
                            <td><?=$mod->libelle?></td>
                            <td><?=$mod->filiere?></td>
                            <td><?=$mod->niveau?></td>
                            <td>
                                <a href="<?=$Constantes::WEB_ROOT.'modify-classe/'.$mod->id?>">
                                    <button type='button' class='btn btn-outline-primary'>Modifier</button>
                                </a> 
                                <form action="/delete-classe" method="post">
                                <input type="hidden" name="id" value="<?=$mod->id?>">
                                <button type='submit' class='btn btn-large btn-block btn-outline-dark' onclick='return confirm("Etes-vous sur de vouloir supprimer?");'>Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </p>
    </div>
</div>