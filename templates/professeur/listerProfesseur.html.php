<div class="card ml-5">
    <div class="card-body">
        <h4 class="card-title">Liste des professeurs</h4>
            <table class="table table-bordered table-hover table table-tripped">
                <thead>
                    <tr>
                        <th>Nom Complet</th>
                        <th>Grade</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach ($mod as $mod) :?>
                        <tr>
                            <td><?=$mod->nom_complet?></td>
                            <td><?=$mod->grade?></td>
                            <td>
                            <a href=""><button type='button' class='btn btn-large btn-block btn-outline-primary'>Modifier</button></a> 
                                <button type='button' class='btn btn-large btn-block btn-outline-dark' onclick='return confirm("Etes-vous sur de vouloir supprimer?");'>Supprimer</button>
                            </td>    
                        </tr>
                    <?php endforeach?>
                </tbody>
        </table>
    </div>
</div>

<!-- <div class="container mt-3">
  <h2>List Group With Contextual Classes</h2>
  <?php foreach ($mod as $mod) :?>
<ul class="list-group">
    <li class="list-group-item list-group-item-secondary"><?=$mod->nom_complet?> <?=$mod->grade?>
    <a href=""><button type='button' class='btn btn-large btn-block btn-info'>Modifier</button></a> 
    <button type='button' class='btn btn-large btn-block btn-success'>Supprimer</button></li>
</ul>
<?php endforeach?>
    <li class="list-group-item list-group-item-warning">Warning item</li>
    <li class="list-group-item list-group-item-danger">Danger item</li>
    <li class="list-group-item list-group-item-primary">Primary item</li>
    <li class="list-group-item list-group-item-dark">Dark item</li>
    <li class="list-group-item list-group-item-light">Light item</li>
  
</div> -->