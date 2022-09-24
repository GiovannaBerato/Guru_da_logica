<?php
session_start();
$servidor = '127.0.0.1';
$usuario = 'cauane';
$senha = 'etec';
$banco = 'GuruDaLogica';
//print-
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if(isset($_GET['nome'])){
if ($conexao -> connect_error){
      echo "não possível conectar";
}else{
      //echo $_GET['data_nascimento'];
    //echo "conectado com sucesso!";
    $sqlGravar = "INSERT INTO Usuarios(nome,email,senha,telefone,data_nascimento,tipo_usuario)VALUES('$_GET[nome]', '$_GET[email]', '$_GET[senha]', '$_GET[telefone]', '$_GET[data_nascimento]',2)";
    $conexao->query($sqlGravar);
    $_SESSION['CADASTRO'] = 'CADASTRO REALIZADO, POR FAVOR REALIZAR  O LOGIN';
    header("Location: login.php");
    echo 'You\'ll be redirected in about 5 secs. If not, click <a href="wherever.php">here</a>.';

    //die();
   // $resultado = $conexao->query("SELECT * FROM Usuarios");
    //print_r($resultado->nun_rows);
    //while($row = $resultado->fetch_assoc()){
   //     printf("</br><tr><td>%s</td></tr>", $row ["nome"],"</table>");
   // }
   //foreach($resultado as $cadastro){
     //  echo "<br>" . $cadastro["nome"];
   //}
}
}else{
    $resultado = $conexao->query("SELECT * FROM Usuarios");
}
?>