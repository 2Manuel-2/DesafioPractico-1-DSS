<?php
$numeros =[5,2,48,121];
$numeros[90]=20;
var_dump($numeros);
$nombres = array("Juan","Marta","Maria");
var_dump($nombres);

$datos= [
    'nombre'=>'Guillermo',
    'apellido'=>'Calderon',
    'edad'=>20,
    'materias'=>['POO404','DSS404','SPL404']
];

var_dump($datos);
echo "<table>"; 
foreach($datos as $key => $value){
?>
    <tr>
    <td><?= $key ?></td>
    <td><?= is_array($value)?implode($value, ","):$value ?></td>
</tr>
<?php
};
?>
</table>