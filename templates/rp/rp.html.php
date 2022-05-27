<table class="table table-tripped">
    <thead>
        <tr>
            <th>Nom Complet</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody >
        <?php foreach ($mod as $mod) {?>
                <tr>
                <td><?=$mod->nom_complet?></td>
                <td><?=$mod->role?></td>
        
        <?php } ?>
    </tbody>
</table>