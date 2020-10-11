<main>

<a href="<?= HOME_URI?>/aluno/add/" class="btn btn-primary">ADD</a>
<hr/>
<?php

echo "<table class='table' >
        <thead>
            <tr>
                <th>#</th><th>Nome</th><th>matrícula</th><th>Data de Nascimento</th><th></th>
            </tr>
        </thead>
        <tbody>";
if($alunos){
    foreach($alunos AS $aluno){
        echo "<tr>
        <td>".$aluno['id']."</td>
        <td>".$aluno['nome']."</td>
        <td>".$aluno['matricula']."</td>
        <td>".$aluno['data_nascimento']."</td>
        <td></td>
        </tr>";
    }
}

echo "</tbody>  
    </table>";
?>

</main>