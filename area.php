<?php

$side = $_POST['a'];

function areaOctagon( $side)
{
    return (2 * (1 + sqrt(2)) *
            $side * $side);
}
 
echo("Area del octagono regular: ");
echo(areaOctagon($side));
 
?>