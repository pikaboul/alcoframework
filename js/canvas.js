(function(){
	var canvas = document.getElementById('canvas');

	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;

	w = canvas.width;
	h = canvas.height;

	var context = canvas.getContext('2d');
	x = 250;
	y = 500;

	var pacmen = [];

	document.querySelector('body').onclick = function(){
		ctx = canvas.getContext('2d');
		pacmen.push(new Pacman(getRandomInt(50,250), ctx, getRandomInt(250, canvas.width-250), getRandomInt(250, canvas.height-250), "rgb(" + getRandomInt(0,255) + "," + getRandomInt(0,255) + "," + getRandomInt(0,255) + ")"));
	}

	document.onkeypress = function(e) {
		console.log(e.which);
		if(e.which == 113) {
			pacmen.forEach(function(pacman){
				pacman.direction = -1;
				console.log('left');
			});
		}
		else if(e.which == 100) {
			pacmen.forEach(function(pacman){
				pacman.direction = 1;
				console.log('right');
			});
		}
	};

	setInterval(function(){

		context.clearRect(0,0,canvas.height,canvas.width);
		pacmen.forEach(function(pacman){
			pacman.update();
		});		
	}, 10)

})();

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}