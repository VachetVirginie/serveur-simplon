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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://use.fontawesome.com/0df17449bf.js"></script>
 
    <title>Document</title>
</head>
<body>
    <header>
<img id="shark"  src="https://conference.awwwards.com/img/shared/shark.gif" />
    <objet id="termynal" data-termynal data-termynal data-ty-typeDelay="40" data-ty-lineDelay="700">
       
   <h1>Virginie Vachet</h1>
  
    
</objet>


</header>
<div data-scrollery id=demo>
<h2 style="color:white;"> Mes projets: </h2>
<main>
<article>

    <img src="image/projet.png" />
<figcaption style="color:white;">
				<p>Projet 1</p>
				<p>Refaire le site "http://paravelinc.com"</p>
				<a href="http://simplonlyon.fr/promo/virginie/projet-1-Repro-paravelelinc.com/">Take a look</a>
			</figcaption>


</article>
    <article>
    <img id="a" src="image/projet2.png" />
<figcaption style="color:white;">
				<p>Projet 1 bis</p>
				<p>Refaire le site "www.thesubways.net"</p>
				<a href="http://simplonlyon.fr/promo/virginie/thesubways/">Take a look</a>
			</figcaption>

    
</article>

<article>
    <img id="b" src="image/todo.png" />
   <figcaption style="color:white;">
				<p>Projet To Do List</p>
				<p>Creer une To Do List</p>
				<a href="http://simplonlyon.fr/promo/virginie/todolist-">Take a look</a>
			</figcaption>
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
<objet id="terminal" data-terminal data-terminal data-ty-typeDelay="40" >


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
</objet>
     <?php

$files = scandir(".");
echo '<ul>';
foreach($files as $dossier){
    if ($dossier!=(".") && $dossier!=(".."))
    if (is_dir($dossier)){
       echo '<li><a href="'.$dossier.'">'.$dossier. '</a></li>';
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
<objet>
<canvas></canvas>
</objet>
</objet>

<script>
let dpr = window.devicePixelRatio,
	c = document.querySelector( 'canvas' ),
	ctx = c.getContext( '2d' ),
	w = 220,
	h = 220,
	cx = w / 2,
	cy = h / 2,
	orbCount = 200,
	pathCount = 6,
	border = 50,
	orbs = [],
	tick = 0;

c.style.width = `${w}px`;
c.style.height = `${h}px`;
c.width = w * dpr;
c.height = h * dpr
ctx.scale( dpr, dpr );

function rand( min, max ) {
	return Math.random() * ( max - min ) + min;
};

function dist( x1, y1, x2, y2 ) {
	let dx = x1 - x2;
	let dy = y1 - y2;
	return Math.sqrt( dx * dx + dy * dy );
};

for( let i = 0; i < orbCount; i++ ) {
	orbs.push({
		x: cx,
		y: cy,
		vx: 0,
		vy: 0,
		a: 0.075,
		path: []
	});
}

function loop() {
	requestAnimationFrame( loop );
	ctx.clearRect( 0, 0, w, h );
	ctx.globalCompositeOperation = 'source-over';
	ctx.beginPath();
	ctx.arc( cx, cy, border * ( 1 + Math.sin( tick / 40 ) * 0.15 ), 0 , Math.PI * 2 );
	ctx.fillStyle = '#fff';
	ctx.fill();
	ctx.beginPath();
	ctx.arc( cx, cy, ( border / 2 ) * ( 1 + Math.cos( tick / 40 ) * 0.15 ), 0 , Math.PI * 2 );
	ctx.fillStyle = '#000';
	ctx.fill();	
	ctx.globalCompositeOperation = 'xor';
	ctx.beginPath();
	orbs.forEach( function( orb ) {
		orb.vx += rand( -orb.a, orb.a );
		orb.vy += rand( -orb.a, orb.a );
		if( Math.abs( orb.vx ) > 2 ) { orb.vx *= 0.99; }
		if( Math.abs( orb.vy ) > 2 ) { orb.vy *= 0.99; }
		orb.x += orb.vx;
		orb.y += orb.vy;
		if( dist( orb.x, orb.y, cx, cy ) >= border ) {
			orb.vx += ( cx - orb.x ) * 0.001;
			orb.vy += ( cy - orb.y ) * 0.001;	
		}
		orb.path.push( [ orb.x, orb.y ] );
		if( tick >= pathCount ) {
			orb.path.shift();	
		}	
		ctx.moveTo( orb.x, orb.y );
		ctx.lineTo( orb.path[ 0 ][ 0 ], orb.path[ 0 ][ 1 ] );
	});
	ctx.lineWidth = ( 1 + Math.sin( tick / 20 ) ) * 0.75;
	ctx.strokeStyle = '#000';
	ctx.stroke();
	tick++;
}

loop();
</script>
</main>
<footer>
  
</footer>
</body>
</html>

