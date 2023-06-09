<?php
    
include('../back/login.php');
if(isset($_SESSION['id'])){
    header("Location: ../front/logged.php");
}
?>
<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale-1.0>">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style2.css"><!--head padrao linkado ao css-->
</head>
<body>
    <header>
        <div class="full">
            <div class="logo"><a href="./index_homepage.php"><img src="../imgs/logo.png" id="logo"></a></div><!-- adicionando imagem-->
            <?php require_once('./navbar.php');?>
        </div><!--fecha center-->
    </header>
    <hr width="90%" size="3px" color="white">
    <br><br><br><br>
    <section>
    <div class="center"> 
        <form method="post" action="../back/cadastro.php" class="tamanho">
            <fieldset class="tamanho2">
                <legend>Create an account:</legend>
                <label for="fname">Name:</label>
                <input type="text" id="fname" name="fname" required><br>
                <label for="myemail">E-mail</label>
                <input type="email" name="myemail" maxlenght="200" autocomplete="off" required ><br>
                <label for="cellphone">Cellphone number:</label>
                <input type="number" name="cellphone" id="cellphone"><br>
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday"><br>
                <label for="senha">Password:</label>
                <input type="password" name="password"><br>
                <input type="submit" value="Finish">
            </fieldset>
        </form>
        <form method="post" action="" class="tamanho">
            <fieldset class="tamanho2">
                <legend>Enter account:</legend>
                <label for="myemail">E-mail</label><br><br>
                <input type="email" name="myemail" maxlenght="200" autocomplete="off" required ><br>
                <label for="senha">Password:</label><br><br>
                <input type="password" name="password"><br>
                <input type="submit" value="Finish">
            </fieldset>
        </form>
    </div><!-- fecha center-->
    </section>    <footer>
        <div class="footer_content">
            <div class="footer_contacts">
                <h1>Want some water?</h1>
                <div class="footer_social_media">
                    <a href="#" class="footer_link" id="intagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer_link" id="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="footer_link" id="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                </div><!--fecha footer_social_media-->
            </div><!--fecha footer_contacts-->
            <ul class="footer_list">
                <li>
                    <h3>Our team</h3>
                </li>
                <li>
                    <a href="#" class="footer_link">Anthoni Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Aline Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Daniel Vieira</a>
                </li>
            </ul>
            <ul class="footer_list">
                <li>
                    <h3>Who made this website</h3>
                </li>
                <li>
                    <a href="#" class="footer_link">Anthoni Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Ingridy Farias</a>
                </li>
            </ul>
        </div><!--fecha footer_content-->
        <div class="footer_copyr">
            &#169
            2023 All rights reserved
        </div>
    </footer>
</body>
</html>