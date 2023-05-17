<h1>LISTADO INVESTIGADORES</h1>

<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nome</th>
            <th>Apellidos</th>
            <th>Id Facultad</th>
        </tr>
    </thead>
    <tbody>
        <?php if(count($list) > 0): ?>
        <?php $i = 1; ?>
        <?php foreach($list as $rows):?>
            <tr>
                <td><?=$rows->DNI?></td>
                <td><?=$rows->NomInvestigador;?></td>
                <td><?=$rows->ApellInvestigador;?></td>
                <td><?=$rows->IdFacultad;?></td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>