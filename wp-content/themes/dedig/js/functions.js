var w = window.innerWidth;

// ORANGE-SHOW

function showBlocks(el, display, color) {
	var blocks = document.querySelectorAll(el);
	for ( var i = 0; i < blocks.length; i++) {
		blocks[i].style.display = display;
		if (color != 'undefined')
			blocks[i].style.backgroundColor = color;
	}
}

// VERTICAL-FIX

var contentBlocks = document.querySelectorAll('.content-block');
var textBlocks = document.querySelectorAll('.text-block');
var imgBlocks = document.querySelectorAll('.img-block');

function verticalFix() {
	for (var i = 0; i < contentBlocks.length; i++) {
		if (w >= 768 ) {
			var compensacao = 60;
			var CBHeight = contentBlocks[i].clientHeight - compensacao;
			var TBHeight = textBlocks[i].clientHeight;
			textBlocks[i].style.paddingTop = String((CBHeight - TBHeight) / 2) + 'px';
		}
		else
			textBlocks[i].style.paddingTop = '0';
	}
	setTimeout(function(){
		showBlocks('.orange-block','block','#e07b4d');
		showBlocks('.blue-block','block','#266ab8');
		showBlocks('.onda-azul-top','block');
		showBlocks('.onda-laranja-top','block');
		showBlocks('.onda-azul-bottom','block');
		showBlocks('.onda-laranja-bottom','block');
	}, 10);
}

verticalFix();

// LIST BUTTON

var listBtn = document.getElementById('list');
var menu = document.getElementById('buttons');
var mainMenu = document.getElementById('main-menu');
var marginLimit = -(menu.clientHeight + mainMenu.clientHeight);
var marginTop = marginLimit;
var step = 60;
var delay = 30;

function downMenu() {
	marginTop += step;
	menu.style.top = String(marginTop) + 'px';

	if (marginTop < mainMenu.clientHeight) {
		setTimeout(function() {
			downMenu();
		}, delay);
	}

	if (marginTop >= mainMenu.clientHeight) {
		marginTop = mainMenu.clientHeight;
		menu.style.top = String(marginTop) + 'px';
		mainMenu.style.position = 'static';
		window.scrollTo(0,0);
	}
}

function upMenu() {
	marginTop -= step;
	menu.style.top = String(marginTop) + 'px';

	if (marginTop > marginLimit) {
		setTimeout(function() {
			upMenu();
		}, delay);
	}
}

// FLUID BLOCK

var fluidBoxes = document.querySelectorAll('.fluid');
var container = document.querySelectorAll('.container')[0];

function fluidBoxesFix() {
	var containerW = container.clientWidth - 30;
	var margin = (w - containerW) / 2;

	for (var i = 0; i < fluidBoxes.length; i++) {
		fluidBoxes[i].style.width = String(containerW + (2 * margin)) + 'px';
		fluidBoxes[i].style.marginLeft = '-' + String(margin) + 'px';
		fluidBoxes[i].style.marginRight = 'auto';
		fluidBoxes[i].style.paddingLeft = String(margin) + 'px';
		fluidBoxes[i].style.paddingRight = String(margin) + 'px';
	}
}

// FOOTER ADJUST

var wrapper = document.getElementById('wrapper');
var header = document.querySelector('header');
var content = document.getElementById('content');
var footer = document.querySelector('footer');

//

window.onload = function() {
	menu.style.top = String(marginTop) + 'px';
	verticalFix();
	fluidBoxesFix();
	try {
		var iframe = document.getElementById('yTubeIFrame');
		iframe.src = "https://www.youtube.com/embed/g4q8Jhn3YhQ";
		iframe.frameBorder = 5;
	}
	catch (err) {
		console.log("Don't have a video in this page.");
	}
};

window.onresize = function() {
	if (w != window.innerWidth) {
		marginLimit = -(menu.clientHeight + mainMenu.clientHeight);
		marginTop = marginLimit;
		menu.style.top = String(marginTop) + 'px';
		w = window.innerWidth;
		verticalFix();
		fluidBoxesFix();
	}
};

listBtn.onclick = function() {
	if (marginTop <= marginLimit) {
		downMenu();
	}
	else if (marginTop >= mainMenu.clientHeight) {
		upMenu();
	}
}