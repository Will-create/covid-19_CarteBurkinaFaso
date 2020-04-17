<?php
class schema{
    private $bd;
    function __construct(){
        //connexion a la base de donne
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        try{
            $this->bd=new PDO('mysql:host=localhost;dbname=data','root','',$pdo_options);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    //selections des donnes de la base de donne
    function select(){
        $b=$this->bd;
        $tab=$b->query("SELECT geodata.id AS id,geodata.confirme AS confirme,geodata.gueri AS gueri,geodata.decede AS decede,coordonnes.longitude AS longitude,coordonnes.latitude AS latitude FROM geodata INNER JOIN coordonnes ON geodata.id=coordonnes.nom");
        return $tab->fetchAll();
    }
    //insertion des donner dans le db
    function inserer($dat=array()){
        $tab1=$this->bd->prepare("SELECT id FROM geodata WHERE id=:ide");
        $tab1->execute(["ide"=>$dat['id']]);
      $res=$tab1->fetchAll();
      //si la region existe la ligne est mise a jour
        if(count($res)!=0){
            $maj=$this->bd->prepare("UPDATE geodata SET id=:id,confirme=:casconfirme,gueri=:casgueri,decede=:casdecede WHERE id=:idactu");
            $maj->execute([
            "id"=>$dat['id'],
            "casconfirme"=>$dat['casconfirme'],
            "casgueri"=>$dat['casgueri'],
            "casdecede"=>$dat['casdecede'],
            "idactu"=>$res[0]["id"]
            ]);
        }
        //dans le cas contraire on l'insert
        else{
            //print_r($dat);
            $ins=$this->bd->prepare("INSERT INTO geodata(id,confirme,gueri,decede) VALUES(:id,:casconfirme,:casgueri,:casdecede)");
            $ins->execute($dat);
            print_r($ins);
        }
    }
}
?>