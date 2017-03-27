<!DOCTYPE html>
<html>
    <style>
        	body {
	    background-color:#555657;
	    padding:0;
	    margin:0;
	    overflow:hidden;
	    font-family:sans-serif;
	    -webkit-user-select: none;
	    -khtml-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	}
	canvas {
	    border:1px solid #000;
	    float:left;
	    clear:both;
	}
	#download {
	    clear:both;
	    float:left;
	    cursor:pointer;
	    color:#ccc;
	    padding:3px;
	}
	#download:hover {
	    color:#fff;
	}
	/*
	div, input {
	    font-size:16px;
	    font-family:sans-serif;
	    border:1px solid #000;
	    border-radius: 5px;
	    float:left;
	    padding:5px;
	    width:50px;
	    margin:1px 1px;
	    background-color:#bbb;
	}
	input[type='text'] {
	    font-size:16px;
	    font-weight:bold;
	    width:70px;
	    text-align:center;
	    background-color:#fff;
	    padding-bottom:4px;
	}
	input[type='button'] {
	    font-size:16px;
	    font-weight:bold;
	    width:110px;
	    text-align:center;
	    background-color:#333;
	    color:#eee;
	    padding-bottom:4px;
	}
	input[type='button']:hover {
	    background-color:#fff463;
	    color:#000;
	}
	input[type='range'] {
	    width:100px;
	    margin:0 0 0 10px;
	}
*/
	
    </style>
    <body>
        <canvas width="500" height="210" id="canvas">Sorry, no canvas available</canvas>
<a id="download" download="CanvasDemo.png">Download as image</a>
    </body>
    
    <script>
        /**
 *    Ken Fyrstenberg
 */
var canvas = document.getElementById('canvas'),
    ctx = canvas.getContext('2d');

/**
 * Functions for demo
 */
function doCanvas() {

    //some background
    var s = canvas.width / 5;
    var i = 0;
    var r = Math.random;

    for (; i < 100; i++) {
        ctx.fillStyle = 'rgb(' + ((255 * r()) | 0) + ',' + ((255 * r()) | 0) + ',' + ((255 * r()) | 0) + ')';
        ctx.fillRect(s * i, 0, s, canvas.height);
    }

    var txt = 'Normal text';
    var itxt = 'Inversed text';

    ctx.fillStyle = '#fff';
    
    ctx.textBaseline = 'top';
    ctx.font = '80px impact'
    ctx.fillText(txt, 30, 20);

    ctx.fillInversedText(itxt, 30, 100);
    
    requestAnimationFrame(doCanvas);
}

/**
 * Canvas extension: fillInversedText
 * By Ken Fyrstenberg 2013. Beta 1.
*/
CanvasRenderingContext2D.prototype.fillInversedText = function (txt, x, y) {

    //measure
    var tw = this.measureText(txt).width;
    var th = parseInt(ctx.font, '10');
    th = (th === 0) ? 16 : th;

    //setupp off-screen canvas
    var co = document.createElement('canvas');
    co.width = tw;
    co.height = th;

    //fill text
    var octx = co.getContext('2d');
    octx.font = this.font;
    octx.textBaseline = 'top';
    octx.fillText(txt, 0, 0);

    //get pixel buffers
    var ddata = this.getImageData(x, y, tw, th);
    var sdata = octx.getImageData(0, 0, tw, th);

    var dd = ddata.data;
    var ds = sdata.data;
    var len = ds.length;
    
    //invert
    for (var i = 0; i < len; i += 4) {
        if (ds[i + 3] > 0) {
            dd[i] = (255 - dd[i]);
            dd[i + 1] = (255 - dd[i + 1]);
            dd[i + 2] = (255 - dd[i + 2]);
        }
    }

    //result at x/y
    this.putImageData(ddata, x, y);
}

/**
 * Init generals
 */
ctx.fillStyle = '#000';
ctx.fillRect(0, 0, canvas.width, canvas.height);

function download() {
    var dt = canvas.toDataURL();
    this.href = dt; //this may not work in the future..
}
document.getElementById('download').addEventListener('click', download, false);

/**
 * Monkey patches
 */
window.requestAnimationFrame = (function () {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

window.cancelAnimationFrame = (function () {
    return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function (timPtr) {
        window.clearTimeout(timPtr);
    };
})();

/**
 * START
 */
doCanvas();
    </script>
</html>