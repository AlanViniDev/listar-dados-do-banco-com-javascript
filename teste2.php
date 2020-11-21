<?php
require_once("conexao.php");
if(!empty($_REQUEST['param'])){
    $param = $_POST['param'];
    $Conection = new Conection(); 
    $Conection->Conecta();
    $sql = $Conection->conexao->query("SELECT * FROM produtos");
    $dados = array($sql->fetch(\PDO::FETCH_ASSOC));
    $value = [];

    foreach($dados as $key => $value){
       $dados[$key] = $value['idprod'];
       $dados[$key] = $value['nome'];
       $dados[$key] = $value['cor'];
       $dados[$key] = $value['preco'];
    }
    echo json_encode($value);
}
?>