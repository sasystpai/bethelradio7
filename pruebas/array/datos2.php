<?php

$arreglo=array(
    "uno"=>array(
            "unoA"=>"1a",
            "unoB"=>"1b",
            "unoC"=>array(
                "unoC1"=>"1c1",
                "unoC2"=>"1c2",
                        ),
                ),
    "dos"=>"2",
    "tres"=>array(
        "tresA"=>"3a",
                ),
);

function recorrer($array)
{

foreach($array as $variable)
{
    if(is_array($variable))
    {
        recorrer($variable);
    }else{
        echo $variable;
        echo "<br />";
    }
    
}

}

recorrer($arreglo);

?>