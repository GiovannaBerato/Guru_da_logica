<?php
session_start();
$servidor = '127.0.0.1';
$usuario = 'cauane';
$senha = 'etec';
$banco = 'GuruDaLogica';
//print-
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if(isset($_GET['email'])){
if ($conexao -> connect_error){
      echo "não possível conectar";
}else{
    $resultado = $conexao->query("SELECT * FROM Usuarios WHERE email = '$_GET[email]' AND senha = '$_GET[senha]'");
    

    if ($resultado->num_rows>0){
      header("Location: index.html");
    }else{
      $_SESSION['CADASTRO'] = 'Usuario ou senha invalido!';
      header("Location: login.php");
    }
  
   

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