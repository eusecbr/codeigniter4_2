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
        <?php foreach($list as $row):?>
            <tr>
                <td><?php $row->DNI?></td>
                <td><?php $row->NomInvestigador;?></td>
                <td><?php $row->ApellInvestigador;?></td>
                <td><?php $row->IdFacultad;?></td>
            </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>