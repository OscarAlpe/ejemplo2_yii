<?php

use yii\helpers\Html;

echo "<div>";
echo Html::img("@web/imgs/fort_awesome.jpg",[
    "class"=>"mifoto"
]);
echo "</div>";

echo "<div>";
echo $registro["id"];
echo "</div>";
echo "<div>";
echo $registro["nombre"];
echo "</div>";
echo "<div>";
echo $registro["descripcion"];
echo "</div>";