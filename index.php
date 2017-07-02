<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/0df17449bf.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vachet Virginie
    </title>
   <style>
a#cRetour{
  border-radius:3px;
  padding:10px;
  font-size:15px;
  text-align:center;
  color:#fff;
  background:rgba(0, 0, 0, 0.25);
  position:fixed;
  right:20px;
  opacity:1;
  z-index:99999;
  transition:all ease-in 0.2s;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  text-decoration: none;
}
a#cRetour:before{ content: "\25b2"; }
a#cRetour:hover{
  background:rgba(0, 0, 0, 1);
  transition:all ease-in 0.2s;
}
a#cRetour.cInvisible{
  bottom:-35px;
  opacity:0;
  transition:all ease-in 0.5s;
}

a#cRetour.cVisible{
  bottom:20px;
  opacity:1;
}
</style>
   
</head>

<body>
    <a name="haut" id="haut"></a>

    <div>
        <a id="cRetour" class="cInvisible" href="#haut"></a>
    </div>
<a name="haut" id="haut"></a>
 
<div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  window.onscroll = function(ev) {
    document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
  };
});
</script>
    
    <header>
    <objet id="head">  


 
      <objet class="header">
    <svg viewBox="0 0 560 259" class="header-lockup">
        <text transform="matrix(1 0 0 1 -0.00007 116.14385)"><tspan x="0" y="-12" font-family="'Montserrat'" font-size="80px">Welcome</tspan><tspan x="0" y="80" font-family="'Montserrat'" font-size="80px">Portfolio</tspan></text>
        <circle fill="yellow" cx="128.50781" cy="126.5" r="30.5"/>
        <text transform="matrix(1 0 0 1 114.62256 123)">
          <tspan x="0" y="0" font-family="'Montserrat'" font-size="19px">ON</tspan><tspan x="-4.28906" y="17" font-family="'Montserrat'" font-size="19px">MY</tspan>
        </text>
      </svg>
</objet>
</objet>
</header>
        <div class="port">

            <article id="articleun">
                <div class="titnum"> <img class="titnum" src="http://www.fransolo.com/imgs/01.svg" <br/>

                    <div class="lefta">
                        <h2 style="color:black;"> Mes projets: </h2>




                        <figcaption style="color:black;">
                            <p>Projet 1:</p>
                            <p>Refaire le site "http://paravelinc.com"</p>
                            <a style="color:black" href="http://simplonlyon.fr/promo/virginie/projet-1-Repro-paravelelinc.com/"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                        </figcaption>





                        <figcaption style="color:black;">
                            <p>Projet 1 bis</p>
                            <p>Refaire le site "www.thesubways.net"</p>
                            <a style="color:black" href="http://simplonlyon.fr/promo/virginie/thesubways/"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                        </figcaption>





                        <figcaption style="color:black;">
                            <p>Projet To Do List</p>
                            <p>Creer une To Do List</p>
                            <a style="color:black" href="http://simplonlyon.fr/promo/virginie/todolist-"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                        </figcaption>



                        <figcaption style="color:black;">
                            <p>Projet jeu </p>
                            <p>Creer un jeu en javascriptt</p>
                            <a href="http://simplonlyon.fr/promo/virginie/Projet3-jeu.js" target="_blank"> <input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>

                        </figcaption>
                    </div>
<h3> Index projets:</h3>

<br>
</objet>

    <?php
   $dossier = "./";
   $files = scandir($dossier);
   $files = array_diff($files, ['.', '..','images']);
   foreach($files as $file) {
       if(is_dir($file)){
       echo '<li><a href="'.$file.'">' .$file.'</a></li>';
     
   }}
   ?> 

                </div>
              
                <div class="workguide"></div>

                <br/>


                <div class="righta">
                    <img class="img" src="image/projet.png" />
                    <img class="img" src="image/projet2.png" />
                    <img class="img" src="image/todo.png" />
                    <img class="img" src="image/jeux.png" />



                    <img class="img" src="image/jeu2.png" />





                    <img class="img" src="image/jeu4.png" />





                </div>
        </div>

        </article>



        <article id="articledeux">
            <div id="skills_ap" class="full showed">
                <div class="centrado">
                    <div class="left">
                        <img class="titnum" src="http://www.fransolo.com/imgs/02.svg">


                        <br>
                        <h4>Front-end<br></h4>

                        <br>
                        <img class="imgs" src="image/html.png" />HTML<br>
                        <img class="imgs" src="image/css.png" />CSS<br>
                        <img class="imgs" src="image/js.png" />Javascript<br>
                        <br>
                    </div>
                    <div class="right">
                        <h4>Back-end<br></h4>

                        <br>
                        <img class="imgs" src="image/php.png" />Php<br>
                        <br>
                        <h4>Version Control<br></h4>

                        <br>
                        <img class="imgs" src="image/git.png" />Git
                        <br>
                    </div>
                </div>
        </article>

        <article id="articletrois">
            <div>
                <div class="workguide"></div>
                <img class="titnum" src="http://www.fransolo.com/imgs/03.svg">

                <br>
                <i class="fa fa-github" aria-hidden="true"></i> github
                <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> email
                <br>
                <i class="fa fa-twitter" aria-hidden="true"></i> twitter
                <br>
            </div>
            <div>
                <br/>
                <br/>
                <a class="twitter-timeline" data-lang="fr" data-width="240" data-height="220" data-link-color="#2B7BB9" href="https://twitter.com/GirlyDev">Tweets by GirlyDev</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </article>
    </main>
    <footer>
        <span id="fin"> Made with <i class="fa fa-heartbeat" aria-hidden="true" style="color:yellow;"></i> by Virginie</span>
        </footer>
</body>

</html>