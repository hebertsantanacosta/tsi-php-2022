<?php

//vetores

$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 => 'quinta', 5 => 'sexta', 6 => 'sabado'];

$hoje = date('w');

echo"hoje é {$diaSemana [$hoje]}<br>";

$aluno = [ 0=> [  'matricula' => 634545, 
                  'nome' => 'joão',
                  'semestre' => 2],
            1 => [ 'matricula' => 8548,
                   'nome' => 'Paulo',
                   'semestre' => 3],
            2 => [ 'matricula' => 65422,
                   'nome' => 'Maria',
                   'semestre' => 1]];

                   echo '<table border = "1">
                            <tr>
                                <td>Matricula</td>
                                <td>Nome</td>
                                <td>Semestre</td>
                            <tr>';
                                
                                
for ($i = 0 ; $i < count($aluno); $i++ ){
    echo "  <tr>
                <td>{$aluno[$i]['matricula']}</td>
                <td>{$aluno[$i]['nome']}</td>
                <td>{$aluno[$i]['semestre']}</td>
            </tr>";
}                               
echo '</table>';                                