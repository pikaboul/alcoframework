
var Pacman = function(radius, context, x, y, color) {
	this.x = x;
	this.y = y;

	this.radius = radius;
	this.context = context;

	this.direction = 1;

	this.open = -1;

	this.angle = 0.4;

	this.maxAngle = 0.4;

	this.color = color;
}

Pacman.prototype.render = function(){

	if(this.direction == 1) {
		this.startAngle = (0 + this.angle/2) * Math.PI;
		this.endAngle = (2 - this.angle/2) * Math.PI;
		xEye = this.x + (this.radius * 0.3);
	}
	else {
		this.startAngle = (- 1 + (0 + this.angle/2)) * Math.PI;
		this.endAngle = (1 -(0 + this.angle/2)) * Math.PI;
		xEye = this.x - (this.radius * 0.3);
	}

	this.context.beginPath();
	this.context.arc(this.x, this.y, this.radius, this.startAngle, this.endAngle);
	this.context.lineTo(this.x,this.y);
	this.context.lineWidth = 15;
	this.context.fillStyle = this.color;
	this.context.fill();
	this.context.closePath();

	// noeilnoeil
	this.context.beginPath();
	this.context.arc(xEye, this.y - (this.radius * 0.6), (this.radius * 0.1),0,2 * Math.PI);
	this.context.fillStyle = 'black';
	this.context.fill();
	this.context.closePath();
}

Pacman.prototype.update = function(){

	// Position
	if(this.x + this.radius >= canvas.width && this.direction)
	{
		this.direction = -1;
	}
	else if(this.x - this.radius <= 0 && this.direction == -1)
	{
		this.direction = 1;
	}

	// Bouche

	if(this.open == 1 && this.angle >= this.maxAngle) {
		this.open = -1;
	}
	else if(this.open == -1 && this.angle <= 0){
		this.open = 1;
	}


	this.angle += 0.02 * this.open;
	this.x += 5 * this.direction;
	this.render();
}

Pacman.prototype.move = function(){
	pacman = this;
	setInterval(function(){
		pacman.update();
	}, 10);
}

window.Pacman = Pacman;