<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">Liste des demandes</h4>
            <p class="card-text">
                <table class="table table-bordered table-hover table table-tripped">
                    <thead>
                        <tr>
                            <th>Motif</th>
                            <th>Etat</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mod as $mod):?>
                            <tr>
                                <td><?=$mod->motif;?></td>
                                <td><?=$mod->etat;?></td>
                                <td>
                                    <a href="#">
                                        <button type='button' class='btn btn-outline-primary'>Modifier</button>
                                    </a> 
                                    <button type='button' class='btn btn-large btn-block btn-outline-dark' onclick='return confirm("Etes-vous sur de vouloir supprimer?");'>Supprimer</button>
                                </td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
            </p>
    </div>
</div>