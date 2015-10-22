(function(){
	var canvas = document.createElement("canvas");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;

	document.body.appendChild(canvas);

	var context = canvas.getContext('2d');
	context.translate((canvas.width/2) , canvas.height);

	function branch(length, angle) {
		context.strokeStyle = 'BurlyWood';
		context.lineWidth = length / 10;

		context.save();
		context.rotate(angle);

		context.beginPath();
		context.moveTo(0, 0);
		context.lineTo(0, -length);
		context.stroke();

		context.translate(0,-length);

		if(length > 10) {
			branch(length - getRandomInt(3,25), Math.PI / (getRandomInt(5,12)));
			branch(length - getRandomInt(3,25), -Math.PI / (getRandomInt(5,12)));
		}

		if(length < 80) {
			leaf();
		}
		context.closePath();
		context.restore();
	}

	function leaf() {
		context.fillStyle = 'green';

		context.save();
		context.rotate(Math.PI / 1.2);

		context.beginPath();
		context.moveTo(0, 0);
		context.arc(0,0,6,-Math.PI / 2, Math.PI / 2);
		context.lineTo(-12,0);
		context.lineTo(6,-6);
		context.fill();

		context.translate(0,-length);
		context.closePath();
		context.restore();
	}

	function thesun() {
		context.fillStyle = 'gold';
		context.beginPath();
		context.arc(canvas.width/2 - 50, - canvas.height +50, 70, 0, Math.PI * 2);
		context.closePath();
		context.fill();
	}

	thesun();
	branch(140,0);

})();



function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}