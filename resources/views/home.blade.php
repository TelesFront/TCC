<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>PaperTown Art</title>
</head>
<body class="body-home">

<div id="preloader">
    <div class="inner">
       <div class="bolas">
           <img src="img/1491.gif" alt="">
       </div>
    </div>
</div>

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
         <div class="background">
        <img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">
    </div>

    <div class="container-home">



<div class="texto1">
<h1>PaperTown Art</h1>
<h2>LINDAS CANECAS PERSONALIZADAS<span class="titulo-span">!</span></h2>
<h3>Para você que ama deixar tudo com sua carinha, experimente nossas canecas personalizadas, altissima qualidade e amor ao trabalho para te entregar o melhor!
</h3>
</div>

<section class="slide">
    <img class="foto" src="img/caneca1.jpeg" alt="caneca1">
    <img class="foto" src="img/caneca2.jpeg" alt="caneca2">
    <img class="foto" src="img/caneca3.jpeg" alt="caneca3">
    <img class="foto" src="img/caneca4.jpeg" alt="caneca4">
</section>

</div>





<div class="galeria">
    <div class="texto-galeria">
        <h2>De uma olhada nas nossas canecas, qualquer estilo por apenas <span class="spanh2" >R$49,90!</span></h2>
        <a class="link-personalizar" href="/teste">Personalize a sua</a>
    </div>
   <div class="gallery">
  <div class="gallery__prev"></div>
  <div class="gallery__next"></div>
  <div class="gallery__stream">
    <div class="gallery__item bg-1"></div>
    <div class="gallery__item bg-2"></div>
    <div class="gallery__item bg-3"></div>
    <div class="gallery__item bg-4"></div>
    <div class="gallery__item bg-5"></div>
    <div class="gallery__item bg-6"></div>
    <div class="gallery__item bg-7"></div>
  </div>
</div>
 
</div>
 

<div id="sobrenos">
    
        <input type="radio" class="slide-controller one" name="slide" checked />
        <input type="radio" class="slide-controller two" name="slide" />

    <div class="sobrenos-container slide-show" >

        <ul class="slides-list">

        <li class="papertown-sobrenos slides">
        
            <div class="titulo-sobrenos">
                    <h2 class="logo-titulo-sobrenos">PaperTown Art <img src="img/logo.png" alt=""></h2>
                    <h3>Sobre a empresa</h3>

                    <p>A Paper Town Art é uma loja de canecas personalizadas e relacionada ao mundo geek.
                    Acreditamos na magia dos presentes personalizamos que com um toque de carinho e cuidado se tornam únicos e ainda mais especiais, assim como nossos clientes. </p>
            </div>

            <div class="cards">

                <div class="missao card-sobrenos">
                    <h2>Missão</h2>
                        <p> A Paper Town Art tem como missão estar presente nos momentos especiais dos nossos clientes, marcar suas vidas de forma criativa, positiva e única. 
                             </p>
                </div>

                <div class="visao card-sobrenos">

                        <h2>Visão</h2>
                        <p> Ser uma loja referência para o público geek e ter loja física. 

                             </p>
                </div>
                
                <div class="valores card-sobrenos">
                        <h2>Valores</h2>
                         <p>Amor, Cuidado, Atenção. Respeito e Inclusão. 
                                 </p>

                </div>
            </div>

            <div class="sobre-voce">

                <div class="imagem-artista"> <img src="img/brennda.jpeg" alt="Foto da Artista">
                <h2>Sobre a Artista</h2>
                <h3>Oi, eu sou a Brennda, tenho 23 anos e sempre fui apaixonada por arte, desenhos, pinturas e principalmente pelo mundo geek.<br>
                Sou uma pessoa que ama trabalhos manuais e confeccionar presentes para aqueles que eu amo, pois acredito que eles são muito mais valiosos e especiais por carregarem tanto carinho e significado no processo de criação. <br>
                Criei a Paper Town justamente para que assim como eu, pessoas que acreditam na magia e significado dos presente personalizados, também possam presentear e surpreender aqueles que amam.<br>
                E também, para aqueles que assim como eu, são fãs de carteirinha e querem demonstrar sua afeição pelos seus personagens favoritos!</h3>  
            </div>
            <a href="https://m.facebook.com/brennda.sevenfold" target=”_blank”> <img src="img/facebook.svg" alt="Facebook"></a>
            <a href="https://www.instagram.com/brenndss_/" target=”_blank”> <img src="img/instagram.svg" alt="Instagram"></a>


        </li>


        <div>

        <li class="teles-da-sobrenos slides">

            <div class="titulo-sobrenos">
            <h2 class="logo-titulo-sobrenos">Teles D.A - Drebown <img src="img/logo.png" alt=""></h2>

                <h3>Sobre a empresa</h3>

                    <p>A Teles D.A  trata-se de uma empresa de desenvolvimento e gerenciamento de Websites em geral, que tem  por missão facilitar a entrada e a vida de pessoas como você no mundo digital. Sendo assim enquanto cliente você pode ficar tranquilo(a) pois os nossos valores são Confiança e Excelência, para sempre prestarmos o melhor serviço possível. </p>
            </div>


            <h2>Desenvolvimento</h2>
        <div class="desenvolvedores">
                <div class="desenvolvedores-card luis">

                <img src="img/Luis.jpeg" alt="Luis Inacio">
                <h3>Luis Inacio</h3>
                <p>Desenvolvedor Back-End Junior</p>
                <p>Logica e preparação da estrutura cadastral do site</p>
                
                    <div class="redes-desenvolvedore">
                    <a href=""> <img src="img/instagram.svg" alt="Luis Inacio - Instagram"></a>
                    <a href=""><img  src="img/github.svg" alt="Luis Inacio - GitHub"></a>
                    <a href=""> <img src="img/linkedin.svg" alt="Luis Inacio - Linkedin"></a>

                    </div>

                </div>

                <div class="desenvolvedores-card tami">

                <img src="img/tamiris.jpeg" alt="Tamiris Alencar">
                <h3>Tamires Alencar</h3>
                <p>Desenvolvedor(a) Front-End Técnico</p>
                <p>Estilização, conteudo e organização do site</p>


                <div class="redes-desenvolvedore">
                    <a href=""> <img src="img/instagram.svg" alt="Tamires Alencar- Instagram"></a>
                    <a href=""><img  src="img/github.svg" alt="Tamires Alencar- GitHub"></a>
                    <a href=""> <img src="img/linkedin.svg" alt="Tamires Alencar - Linkedin"></a>
                 </div>

                </div>

                <div class="desenvolvedores-card rich">

                <img src="img/Richard.jpeg" alt="Richard Inada">
                <h3>Richard Inada</h3>
                <p>Desenvolvedor Back-End Técnico</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="redes-desenvolvedore">
                    <a href=""> <img src="img/instagram.svg" alt="Richard Inada - Instagram"></a>
                    <a href=""><img  src="img/github.svg" alt="Richard Inada - GitHub"></a>
                    <a href=""> <img src="img/linkedin.svg" alt="Richard Inada - Linkedin"></a>
                 </div>

                </div>
            </div>

           <h2>Documentação</h2>
           <div class="documentação-card">
                <div class="desenvolvedores-card rafa">

                <img src="img/rafael.jpeg" alt="Tamiris Alencar">
                <h3>Rafael Oliveira</h3>
                <p>Desenvolvedor Back-End Técnico</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="redes-desenvolvedore">
                    <a href=""> <img  src="img/instagram.svg" alt="Rafael Oliveira - Instagram"></a>
                    <a href=""><img  src="img/github.svg" alt="Rafael Oliveira - GitHub"></a>
                    <a href=""> <img src="img/linkedin.svg" alt="Rafael Oliveira - Linkedin"></a>
                 </div>

                </div>

                <div class="desenvolvedores-card victor">

                <img src="img/Teles.jpeg" alt="Victor Teles">
                <h3>Victor Teles</h3>
                <p>Desenvolvedor Full-Stack Técnico</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <div class="redes-desenvolvedore">
                    <a href=""> <img  src="img/instagram.svg" alt="Victor Teles - Instagram"></a>
                    <a href=""><img  src="img/github.svg" alt="Victor Teles - GitHub"></a>
                    <a href=""> <img src="img/linkedin.svg" alt="Victor Teles - Linkedin"></a>
                 </div>

                </div>
           </div>

</div>

</li>
        </div>
        </ul>

        
    </div>
    
</div>

    <div>
        <section>
                <h2 class="title">Perguntas Frequentes</h2>
                <div class="faq" id="faq1" onclick="faq1()">
                    <div class="question">
                        <h3>Quais os metodos de entregas que vocês realizam?</h3>


                        <img src="img/seta-dropdown.svg" alt="seta">

                    </div>
                    <div class="answer">
                        <p>Os meios de entrega podem variar de acordo com a necessidade do comprador e a disponibilidade do vendedor, tais como correios ou meios de entregas por vias públicas.</p>
                    </div>
                </div>
                <div class="faq" id="faq2" onclick="faq2()" >
                    <div class="question">
                        <h3>Como posso fazer mais de 1 pedido com fotos diferentes?</h3>


                        <img src="img/seta-dropdown.svg" alt="seta">

                    </div>
                    <div class="answer">
                        <p> É bem simples! basta você selecionar suas fotos ao pedido final, ir para a pagina de pagamento e selecionar quantas canecas você gostaria de comprar. </p>
                    </div>
                </div>
                <div class="faq" id="faq3" onclick="faq3()" >
                    <div class="question">
                        <h3>Ao sair da pagina de pagamento sem finalizar, devo fazer o pedido novamente?</h3>


                        <img src="img/seta-dropdown.svg" alt="seta">

                    </div>
                    <div class="answer">
                        <p>Não, não ha necessidade de realizar outro pedido, basta entrar em contato com a atendende para te ajudar na verificação, ou aguardar o email do PagSeguro.</p>
                    </div>
                </div>
            </section>
         </div>
    

         <div id="contato">

                <div class="redes-sociais">
                    <a href="https://www.instagram.com/papertown_art/" target=”_blank”> <img src="img/instagram.svg" alt="Instagram"></a>
                    
        </div>
    


   <script type="text/javascript" src="https://form.jotform.com/jsform/221526014436649"></script>

    

</div>

<footer class="footer-login">
    <div class="footer-login-container">

                <p>Teles D.A</p>
            <div class="teles-da">      
                <a href="https://www.instagram.com/teles_d.a/?igshid=YmMyMTA2M2Y%3D "  target=”_blank” >
                <img src="img/instagram.svg"  alt="Instagram">
                </a>
                <a href=" https://telesda.com" target=”_blank”>
                <img src="img/web.svg" alt="Web">
                </a>
                <a href="mailto:victor00007567@gmail.com sub?subject=Interesse em contato" target=”_blank”>
                <img src="img/email.svg" alt="Email">
                </a>
            </div>
            


        <div class="icones-apresentacao">
    <a href="https://www.flaticon.com/br/icones-gratis/instagram" target="_blank" title="instagram ícones">Instagram ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/whatsapp" target="_blank" title="whatsapp ícones">Whatsapp ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/facebook" target="_blank" title="facebook ícones">Facebook ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/tiktok" target="_blank" title="tiktok ícones">Tiktok ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/o-email" target="_blank" title="o email ícones">O email ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/pagina-da-web" title="página da web ícones">Página da web ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/github" title="github ícones">Github ícones criados por IconsBox - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/linkedin" title="linkedin ícones">Linkedin ícones criados por Freepik - Flaticon</a>
</div>
    </div>
</footer>


<script src="//code.jivosite.com/widget/zQUHoE4g54" async></script>
@endsection
<script src="js/perguntas.js"></script>
<script src="js/preloader.js"></script>
<script src="js/app.js"></script>
</body> 
</html>
