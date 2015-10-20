<!DOCTYPE html>
<html>
	<head>
		<title>Musikality, bitch.</title>
	</head>
	<body>
		<canvas id="graph" width="2000" height="30000"></canvas>
		<input type="range" min="0" max="2" step="0.01" value="1" oninput="sourceNode.changeFrequency(this)" style="position:fixed; top:50px; right:50px">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/musikality.js"></script>
	</body>
</html>