<?php

$files = scandir(".");
$files = array_filter($files,'is_dir');
$files= array_diff($files, [".", "..", ".git","image"]);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

<script src="https://use.fontawesome.com/0df17449bf.js"></script>

    <title>Document</title>
</head>
<body>
    <header>
<img id="shark"  src="https://conference.awwwards.com/img/shared/shark.gif" />
    <h1>Vachet Virginie</h1>

</header>
<div data-scrollery id=demo>
<h2 style="color:white;"> Mes projets: </h2>
<main>
<article>

    <img src="image/projet.png" />

</article>
    <article>
    <img id="a" src="image/projet2.png" />
    
</article>

<article>
    <img id="b" src="image/todo.png" />
   
</article>

<article>
    <img id="b" src="image/jeux.png" />
    
</article>

<article>
    
    <img id="b" src="image/jeu2.png" />
</article>

<article>
    
    <img id="b" src="image/jeu3.png" />
</article>
<article>
    
    <img id="b" src="image/jeu4.png" />
</article>
<article>
    
    <img id="b" src="image/jeu5.png" />
</article>

</div>
<objet>


<h3>Skills</h3>

 <br>
<h4>Front-end<br></h4>
<img id="aa" src="image/html.png" />HTML<br>
<img id="aa" src="image/css.png" />CSS<br>
<img id="aa" src="image/js.png" />Javascript<br>

<h4>Back-end<br></h4>
<img id="aa" src="image/php.png" />Php<br>
<h4>Version Control<br></h4> 
<img id="aa" src="image/git.png" />Git<br>
<h3> Mes projets:</h3>

     <?php

$files = scandir(".");
echo '<ul>';
foreach($files as $dossier){
    if ($dossier!=(".") && $dossier!=(".."))
    if (is_dir($dossier)){
        echo '<li><i class="fa fa-terminal" aria-hidden="true"></i>

<a class="cli href="'.$dossier.'">'.$dossier.'</a></li>';
    }
}
echo'</ul>';
?>    
    

<h3>Contact</h3>
<i class="fa fa-github" aria-hidden="true"></i>
github<br>
<i class="fa fa-envelope" aria-hidden="true"></i>
email<br>
<i class="fa fa-twitter" aria-hidden="true"></i>
twitter<br>

</objet>

</main>
<footer>
  
</footer>
</body>
</html>

