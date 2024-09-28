Breset = new Image(31,31);
Breset.src = "images/reset.gif";
Breset0 = new Image(31,31);
Breset0.src = "images/reset0.gif";

Bstop = new Image(31,31);
Bstop.src = "images/stop.gif";
Bstop0 = new Image(31,31);
Bstop0.src = "images/stop0.gif";

Bnext = new Image(31,31);
Bnext.src = "images/next.gif";
Bnext0 = new Image(31,31);
Bnext0.src = "images/next0.gif";

Bplay = new Image(31,31);
Bplay.src = "images/play.gif";
Bplay0 = new Image(31,31);
Bplay0.src = "images/play0.gif";

var maxi = 8;
var vue = new Array(maxi);
var compteur = 1;
var auto = false;
var timerID;

for (i=1;i<=maxi;i++) {
	vue[i] = new Image(120,80);
	vue[i].src = "images/v" + i + ".gif";
	}

function play() {
	auto = true;
	timerID = setInterval("next()", 200);
	}

function next() {
	if (compteur == maxi) {
		compteur = 1;
		}
	else {
		compteur++;
		}
	document.Film.src = vue[compteur].src;
	}

function clicStop() {
	if (auto == true) {
		auto = false;
		document.BoutonStop.src = Bstop0.src;
		document.BoutonNext.src = Bnext.src;
		document.BoutonPlay.src = Bplay.src;
		document.BoutonReset.src = Breset.src;
		clearInterval(timerID);
		if (compteur == 1) {
			document.BoutonReset.src = Breset0.src;
			}
		else {
			document.BoutonReset.src = Breset.src;
			}
		}
	}

function clicReset() {
	if (compteur != 1) {
		compteur = 1;
		document.Film.src = vue[compteur].src;
		}
	}

function clicNext() {
		if (auto == false) {
		next();
		if (compteur == 1) {
			document.BoutonReset.src = Breset0.src;
			}
		else {
			document.BoutonReset.src = Breset.src;
			}
		}
	}

function clicPlay() {
		if (auto == false) {
		document.BoutonStop.src = Bstop.src;
		document.BoutonNext.src = Bnext0.src;
		document.BoutonPlay.src = Bplay0.src;
		document.BoutonReset.src = Breset0.src;
		play();
		}
	}