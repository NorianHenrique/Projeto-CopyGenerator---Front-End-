<?php
	if(isset($_COOKIE['ckeck'])){
		$loign = $_COOKIE['login'];
		$senha = $_COOKIE['senha'];
		$sql = App\MySql::connect()->prepare("SELECT * FROM `usuarios` WHERE login = ? AND senha = ?");
		$sql->execute(array($user,$senha));
		if($sql->rowCount() == 1){
				$info = $sql->fetch();
				$_SESSION['login'] = true;
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;	
				$_SESSION['nome'] = $info['nome']; 
				\App\Utilidades::redirect(INCLUDE_PATH);
			
		}
	}
?>

<html>
    <head>
        <title>CopyGenerator - Login</title>
        <script src="https://kit.fontawesome.com/5506a4acb1.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
	    <link href="<?php echo INCLUDE_PATH_STATIC ?>css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Norian Henrique - Danki Code">
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="<?php echo INCLUDE_PATH_STATIC ?>imagens/logo.png" />

    </head>
    <body>

        <div class="login-home">
               <div class="center-flex">
                    
                     <div class="login-form">
                           <h3>Realize seu Login</h3>
                           <div class="form-box">
                                 <form method="post">
                                        <label>Login</label>
                                        <input type="email" name="email"/>
                                        </br>
                                        <label>Senha</label>
                                        <input type="password" name="senha"/>
                                        <input type="checkbox" name="check"/> <span>Manter Conectado</span>
                                        <input type="hidden" name="login"/>
                                        <input type="submit" name="acao" value="Entrar"/>
                                        <a href="<?php echo INCLUDE_PATH?>registrar">Criar sua conta!</a>
                                 </form>
                                
                           </div><!--form-box-->
                         
                     </div><!--login-form-->

                     <div class="login-right">
                        <div class="login-img">
                            <img src="<?php echo INCLUDE_PATH_STATIC?>imagens/imagem_login.jpg"/>
                        </div><!--login-img-->
                     </div><!--login-right-->
               </div>
        </div><!--login-home-->

    </body>
</html>