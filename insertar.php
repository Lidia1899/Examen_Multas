<?php
if(isset($_REQUEST['insertar'])) 
{
  $matricula=$_REQUEST['matricula'];
  $identificador=$_REQUEST['identificador'];
  $velocidad=$_REQUEST['velocidad'];
  $fecha_hora=$_REQUEST['fecha_hora']; 
$_SESSION['matriculas'][$matricula]=array($matricula,$identificador,$velocidad,$fecha_hora);
echo'<pre>';
var_dump($_SESSION['matriculas']);
}
include 'head.php';
print'Introduce los siguientes datos de la Multa<mark>(2 Puntos)<br><br>
                                     
              <div   class="postcontent">
              <form action="" method="post">
                    <table align="center" class="content-layout">
                    <tr>
                      <td align="right"><strong>Matricula:</strong></td>
                      <td>
                        <input type="text" name="matricula" size="10" required/>
                      </td>
                     </tr>
                    <tr>
                        <td align="right"><strong>Selecciona el Radar :</strong></td>
                        <td>
                          <div align="left">
                                <select name="identificador">
                                  <option value="">Radar 1</option>
                                  <option value="">Radar 2</option>
                                  <option value="">Radar 3</option>
                                  <option value="">Radar 4</option>
                                 
                                </select>
                           </div>
                          </td>
                    </tr>
                    
                     <tr>
                      <td align="right"><strong>Velocidad:</strong></td>
                      <td>
                        <input type="number" name="velocidad" size="5" required />
                      </td>
                     </tr>
                     
                     <tr>
                      <td align="right"><strong>Fecha y Hora :</strong></td>
                      <td>
                        <input  type="datetime-local" name="fecha_hora" size="20" />
                      </td>
                     </tr>
                     
                    
                    
                    
                    <tr>
                        <td colspan="2">
                          <div align="center"><strong>
                            <input name="insertar" type="submit" id="insertar" value="Insertar"/>
                            </strong>
                          </div>
                        </td>
                    </tr>
                    </table>
        </form>';
include 'pie.php';

