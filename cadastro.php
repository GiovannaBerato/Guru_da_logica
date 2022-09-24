<?php include 'conexao.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Iconscout CSS-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/stylelc.css">
    <title>Cadastro</title>
</head>
<body>
    
    <div class="container">
         <div class="forms">
             <div class="form login"> 
                 <span class="title">Cadastro</span>
                 
                 <form action="conexao.php" method="GET">
                    <div class="input-field">
                         <input type="text" name="nome" placeholder="Digite seu nome" required>
                         <i class="uil uil-user"></i> 
                    </div>
                   <div class="input-field">
                        <input type="phone" name="telefone" placeholder="Digite seu telefone" required> 
                   </div>
                   <div class="input-field">
                        <input type="date" name="data_nascimento" placeholder="Digite sua data de nascimento" required> 
                   </div>
                   <div class="input-field">
                        <input type="text" name="email" placeholder="Digite seu e-mail" required>
                        <i class="uil uil-envelope-alt icon"></i> 
                   </div>
                   <div class="input-field">
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                        <i class="uil uil-lock icon"></i>   
                   </div>
                   <div class="input-field">
                    <input type="password" placeholder="Digite sua senha" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw" id="eye-pass"></i> 
               </div>
                   <div class="checkbox-text">
                      <div class="checkbox-content">
                         <input type="checkbox" id="logCheck">
                         <label for="logCheck" class="text">Lembre de mim</label>
                      </div>
                       <a href="#" class="text">Esqueci a senha?</a>
                   </div>
                   <div class="input-field button">
                    <input type="submit" value="Cadastrar" >
               </div>
                </form>

                <div class="login-signup">
                     <span  class="text">Não é um menbro?</span>
                     <a href="#" class="text signup-text">Cadastra-se agora</a>
                </div>

            
             </div> 
         </div>
    </div>
</body>
</html>