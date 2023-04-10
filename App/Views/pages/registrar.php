<html>
    <head>
        <title>CopyGenerator - Registrar</title>
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
                           <h3>Crie sua Conta</h3>
                           <div class="form-box">
                                 <form method="post" enctype="multipart/form-data">
                                        <label>Seu Nome:</label>
                                        <input type="text" name="nome"/>
                                        </br>
                                        <label>Seu Login:</label>
                                        <input type="email" name="email"/>
                                        </br>
                                        <label>Sua Senha:</label>
                                        <input type="password" name="senha"/>  
                                        <input type="hidden" name="registrar"/>
                                        <input type="submit" name="acao" value="Criar"/>
                                        <a href="<?php echo INCLUDE_PATH?>">Logar com sua conta!</a>
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