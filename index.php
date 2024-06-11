<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="Pagina de login do facebook">
    <meta name="keywords" content="pagina,login,facebook" />
    <meta name="author" content="Mikael Filipe V. Luz">
    <link rel="icon" href="assets/icone.png" type="image/x-icon">
    <title>Página de Login do Facebook</title>

    <!--Googgle Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!--Fim do Google Fonts-->

</head>

<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->
            
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email">
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password">
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="assets/img1.png">
            </div><!--img-pessoas-->

            <div class="open-account">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form class="create-account">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <= 31; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Janeiro</option>  
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                                for($i = 1950; $i <= 2024; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div><!--clear-->
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                             <input type="radio" name="sexo" value="masculino">
                             <h2>Masculino</h2>       
                        </div><!--input-radio-->
                        <div class="input-radio">
                             <input type="radio" name="sexo" value="feminino">
                             <h2>Feminino</h2>       
                        </div><!--input-radio-->
                        <div class="clear"></div><!--clear-->
                    </div><!--w100-->
                    
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastrar!">
                    </div><!--w100-->

                    <div class="clear"></div><!--clear-->
                </form><!--create-account-->

            </div><!--open-account-->

            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
              <a class="selected-lingua" href="#">Português (BR)</a>                      
              <a href="#">Português (BR)</a>                      
              <a href="#">Português (BR)</a>                      
              <a href="#">Português (BR)</a>
              <a href="#">Português (BR)</a>
              <a href="#">Português (BR)</a>
              <a href="#">Português (BR)</a>
              <a href="#">Português (BR)</a>                      
        </div><!--center--> 
        
        <div style="border: 0; margin-top: 10px" class="center">
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
              <a href="#">Lorem Ipsum</a>                      
              <a href="#">Lorem Ipsum</a>                     
        </div><!--center--> 
    </section><!--linguas-->

</body>

</html>