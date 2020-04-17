<?php

class  zonetouche
{


function __construct(){
}
//on prend les donne et ont les transforme en tableau json aproprier,c'est le modele(mvc)
public function getAll($donne)
{
    $data=[];
    foreach ($donne as $key => $value) {
        $tab=$donne[$key];
            array_push($data,["title"=>$tab['id'],"latitude"=>doubleval($tab['latitude']),"longitude"=>doubleval($tab['longitude'])]);
    }
    return json_encode($data); 
}

}

?>