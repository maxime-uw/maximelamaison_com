var NBR_LIGNES 				= 5;
var NBR_BRIQUES_PAR_LIGNE 	= 8;
var BRIQUE_WIDTH 			= 48;
var BRIQUE_HEIGHT			= 15;
var ESPACE_BRIQUE 			= 2;
var BARRE_JEU_WIDTH 		= 80;
var BARRE_JEU_HEIGHT 		= 10;
var PXL_DEPLA 				= 16;
var ZONE_JEU_WIDTH 			= 400;
var ZONE_JEU_HEIGHT 		= 300;
var COULEURS_BRIQUES 		= ["#503A22", "#88502F", "#A17048", "#D9C38A", "#F7DDAC"];
var COULEUR_BALLE 			= "#15CFD6";
var DIMENSION_BALLE 		= 8;
var VITESSE_BALLE			= 2;


// Variables
var tabBriques; // Tableau virtuel contenant les briques
var context;
var barreX;
var barreY;
var balleX = 150;
var balleY = 250;
var dirBalleX = 1;
var dirBalleY = 1
var boucleJeu;
var limiteBriques = (ESPACE_BRIQUE+BRIQUE_HEIGHT)*NBR_LIGNES;
var aGagne;

window.addEventListener('load', function () {

	var elem = document.getElementById('canvasElem');
	
	if (!elem || !elem.getContext) {
		return;
	}
	
	// On récupère le contexte 2D
	context = elem.getContext('2d');
	
	if (!context) {
		return;
	}
	
	ZONE_JEU_WIDTH = elem.width;
	ZONE_JEU_HEIGHT = elem.height;
	barreX = (ZONE_JEU_WIDTH/2) - (BARRE_JEU_WIDTH/2);
	barreY = (ZONE_JEU_HEIGHT) - (BARRE_JEU_HEIGHT);
	
	// Le navigateur est compatible, on peut continuer: On initialise le jeu.
	creerBriques(context, NBR_LIGNES, NBR_BRIQUES_PAR_LIGNE, BRIQUE_WIDTH, BRIQUE_HEIGHT, ESPACE_BRIQUE);
	
	idInterv = setInterval(refreshGame, 10);
	
	window.document.onkeydown = checkDepla;
		
}, false);

 

// Fonction permettant de créer les briques du jeu

function creerBriques(ctx, nbrLignes, nbrParLigne, largeur, hauteur, espace) {

	// Tableau virtuel: On initialise les lignes de briques
	tabBriques = new Array(nbrLignes);

	for (var i=0; i < nbrLignes; i++) {

	// Tableau virtuel: On initialise les briques de la ligne
	
		tabBriques[i] = new Array(nbrParLigne);

		ctx.fillStyle = COULEURS_BRIQUES[i];
	
		for (var j=0; j < nbrParLigne; j++) {
			// Affichage: On affiche une nouvelle brique
			ctx.fillRect((j*(largeur+espace)),(i*(hauteur+espace)),largeur,hauteur);	
		// Tableau virtuel: On attribue à la case actuelle la valeur 1 = Une brique existe encore
			tabBriques[i][j] = 1;
		
		}

	}
// Nos briques sont initialisées.
return 1;

}
 
 
 
function refreshGame(){
	
	clearContext(context, 0 , ZONE_JEU_WIDTH, 0, ZONE_JEU_HEIGHT );
	
	aGagne = 1;
	
	for(var i=0; i< tabBriques.length;i++) {
	
		context.fillStyle = COULEURS_BRIQUES[i];
		
		for(var j=0; j < tabBriques[i].length;j++) {
			if (tabBriques[i][j] == 1){
				context.fillRect((j*(BRIQUE_WIDTH + ESPACE_BRIQUE)),(i*(BRIQUE_HEIGHT+ESPACE_BRIQUE)), BRIQUE_WIDTH, BRIQUE_HEIGHT);
				aGagne = 0;
			}
		}
	}	
	
	if (aGagne) gagne();
	
	context.fillStyle = '#333333';
	context.fillRect(barreX,barreY,BARRE_JEU_WIDTH,BARRE_JEU_HEIGHT);
	
	//direction de la balle
	if((balleX + dirBalleX * VITESSE_BALLE) >  ZONE_JEU_WIDTH) dirBalleX = -1;
	else if ( (balleX + dirBalleX * VITESSE_BALLE) <  0) dirBalleX = 1;
	if ( (balleY + dirBalleY * VITESSE_BALLE) >  ZONE_JEU_HEIGHT) perdu();
	else {
		if ( (balleY + dirBalleY * VITESSE_BALLE) <  0) dirBalleY = 1;
		else {
			if ( ((balleY + dirBalleY * VITESSE_BALLE) > (ZONE_JEU_HEIGHT - BARRE_JEU_HEIGHT)) && ((balleX + dirBalleX * VITESSE_BALLE) >= barreX) && ((balleX + dirBalleX * VITESSE_BALLE) <= (barreX+BARRE_JEU_WIDTH))) {
			dirBalleY = -1;
			dirBalleX = 2*(balleX-(barreX+BARRE_JEU_WIDTH/2))/BARRE_JEU_WIDTH;
			}
		}
	}
	
	// collision
	if ( balleY <= limiteBriques) {
		var ligneY = Math.floor(balleY/(BRIQUE_HEIGHT+ESPACE_BRIQUE));
		var ligneX = Math.floor(balleX/(BRIQUE_WIDTH+ESPACE_BRIQUE));
		if ( tabBriques[ligneY][ligneX] == 1 ) {
			tabBriques[ligneY][ligneX] = 0;
			dirBalleY = 1;
		}
	}
	
	balleX += dirBalleX * VITESSE_BALLE;
	balleY += dirBalleY * VITESSE_BALLE;
	
	//affiche la balle
	context.fillStyle = COULEUR_BALLE;
	context.beginPath();
	context.arc(balleX,balleY, DIMENSION_BALLE, 0, Math.PI*2, true);
	context.closePath();
	context.fill();
}


function clearContext(ctx, startwidth, ctxwidth, startheight, ctxheight) {
	ctx.clearRect(startwidth, startheight, ctxwidth, ctxheight);
}


function perdu() {
	clearInterval(boucleJeu);
	alert("Perdu !");
}


function gagne() {
	clearInterval(boucleJeu);
	alert("Bravo vous avez gagné !");
}

function checkDepla(e){
	
	if(e.keyCode == 39) {
		if( (barreX + PXL_DEPLA + BARRE_JEU_WIDTH) <= ZONE_JEU_WIDTH ) barreX += PXL_DEPLA;
	} 
	
	else if(e.keyCode == 37) {
		if( ((barreX-PXL_DEPLA)) >= 0) barreX -= PXL_DEPLA;
	} 

}