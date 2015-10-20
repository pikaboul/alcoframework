
    if (! window.AudioContext) {
        if (! window.webkitAudioContext) {
            alert('no audiocontext found');
        }
        window.AudioContext = window.webkitAudioContext;
    }
    var context = new AudioContext();

    var sourceNode;
    var analyser;
    var javascriptNode;
    var filter = context.createBiquadFilter();

    var ctx = $("#graph").get()[0].getContext("2d");
        ctx.moveTo(500,0);
        ctx.lineWidth = 4;
        ctx.lineCap="round";
        ctx.lineJoin="round";
        ctx.imageSmoothingEnabled = true;
        ctx.beginPath();


    setupAudioNodes();
    loadSound("../sound/alright.m4a.mp4");


    function setupAudioNodes() {

        javascriptNode = context.createScriptProcessor(2048, 1, 1);

        javascriptNode.connect(context.destination);

        analyser = context.createAnalyser();
        analyser.fftSize = 512;
        analyser.smoothingTimeConstant = 0.90;

        sourceNode = context.createBufferSource();
        sourceNode.connect(analyser);
        analyser.connect(javascriptNode);

        sourceNode.connect(filter);
        filter.connect(analyser);
       
       filter.connect(context.destination);
       filter.type = "lowpass";
       filter.frequency.value = 20000;
       filter.Q.value = 15;

        sourceNode.connect(context.destination);
    }


    function loadSound(url) {
        var request = new XMLHttpRequest();
        request.open('GET', url, true);
        request.responseType = 'arraybuffer';

        request.onload = function() {

            context.decodeAudioData(request.response, function(buffer) {

                playSound(buffer);
            }, onError);
        }
        request.send();
    }


    function playSound(buffer) {
        sourceNode.buffer = buffer;
        sourceNode.start(0);
    }

    function onError(e) {
        console.log(e);
    }

    javascriptNode.onaudioprocess = function() {
        var array =  new Uint8Array(analyser.frequencyBinCount);

        analyser.getByteFrequencyData(array);

        drawSpectrum(average(array));

    }


    function drawSpectrum(value) {
        ctx.lineTo(500 + (value - 75) * 7 , context.currentTime * 400);

        ctx.strokeStyle = "#cc00bb";
        ctx.stroke(); 
    };

    function average(array) {
        var sum = 0;
        for( var i = 0; i < array.length; i++ ){
            sum += parseInt( array[i], 10 );
        }

        return parseInt(sum/array.length);
    }


    sourceNode.changeFrequency = function(input) {

        var minValue = 440;
        var maxValue = context.sampleRate / 2;

        var numberOfOctaves = Math.log(maxValue / minValue) / Math.LN2;

        var multiplier = Math.pow(2, numberOfOctaves * (input.value - 1.0));

        filter.frequency.value = maxValue * multiplier;

    };
}
