<?php
$matriculas=array();
$matriculas=["Radar1"=>10,"Radar2"=>20,"Radar3"=>15,"Radar4"=>67];
foreach($matriculas as $ind=>$valor)
{
    echo $ind." ".$valor." ";
}
include 'head.php';
echo'Analisis de las Multas por Radares <mark>(1.5 Puntos)<br><br>
<table>
  <thead>
    <tr>
      <th>Radar1</th>
      <th>Radar 2</th>
      <th>Radar 3</th>
      <th>Radar 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>'
      '<td>'.$indice.'</td>'
      '<td>'.$indice'</td>'
      '<td>':$indice.'</td>'
      '<td>'.$indice.'</td>'
    '</tr>
    
  </tfoot>
</table>

';
include 'pie.php';

