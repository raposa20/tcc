<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PoluicaoZero</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <link rel="stylesheet" href="css/style1.css" />
</head>
<body>
    <?php
        include_once("validarusuario.php");
    ?>
      
<header class="header">
    <a href="#" class="logo"> <i class="fab fa-pagelines"></i>Poluição zero</a>
    </a> 

    <div class="icons">
        <div id="login-btn" class="fas fa-truck"></div>
        <div id="bt-logout" class="fas fa-door-open"></div>
       

    </div>

    <form method="get" action="agendar.php" class="login-form">
        <h3>Agendamento</h3>
        <input type="address" placeholder="Seu Endereço" class="box" name="endereco">
        <input type="address" placeholder="Material Reciclado" class="box" name="material">
        <input type="date" placeholder="Enter your date" class="box" name="data">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" class="btn">
    </form>
    
</header>

<section class="home" id="home">
    <div class="content">
        <h3>Não existem problemas ambientais, <br>
            existem apenas sintomas ambientais<br>
             de problemas humanos</h3>
    </div>

    
</section>
 
     <section class="about" id="about">
        <h2 class="deco-title">Sobre nós</h2>
        
        <div class="box-container">

        <div class="image">
            <img src="../IMG/Abo.png" alt="">

        </div>

        <div class="content">
            <h3 class="title">Reciclar é importante</h3>
            <p>Quando abraçamos a prática de reciclar, estamos muito mais do que apenas 
            descartando resíduos de forma responsável e correta; 
            estamos salvando de alguma forma, o meio ambiente e a saúde humana. 
            É essencial que todos nós façamos a nossa parte. </p>
        </div>

        </div>
     </section>

     <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fab fa-pagelines"></i>Poluição Zero</h3>
                <p>Criadoras do sistema: Isabella Britto, Maria Alice, Rhafaela Galvão e Victoria Soleder</p>
                <p class="links"><i class="fas fa-clock"></i>segunda a sábado</p>
                <p class="days">07:00hrs - 13:00hrs</p>
            </div>

            <div class="box">
                <h3>Agradecimentos</h3>
                <a href="#" class="title"></a>
                <p>Nós da equipe Poluição Zero, agradecemos vocês
                 por estar participando do nosso site, 
                 ajudando assim o meio ambiente e reciclando de 
                 uma maneira mais organizada, pois temos que 
                 cuidar do que é nosso.</p>
            </div>

        </div>

        <div class="credit">&copy; Poluição Zero 2023</div>

     </section>

     


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>
</html>