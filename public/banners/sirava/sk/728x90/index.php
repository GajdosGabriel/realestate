<!DOCTYPE html>
<!--
	NOTES:
	1. All tokens are represented by '$' sign in the template.
	2. You can write your code only wherever mentioned.
	3. All occurrences of existing tokens will be replaced by their appropriate values.
	4. Blank lines will be removed automatically.
	5. Remove unnecessary comments before creating your template.
-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="authoring-tool" content="Adobe_Animate_CC">
    <title>728x90</title>
    <!-- write your code here -->
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="728x90.js"></script>
    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
        function init() {
            canvas = document.getElementById("canvas");
            anim_container = document.getElementById("animation_container");
            dom_overlay_container = document.getElementById("dom_overlay_container");
            var comp=AdobeAn.getComposition("F27CC878E0A95A4F8A2E746D03281A36");
            var lib=comp.getLibrary();
            var loader = new createjs.LoadQueue(false);
            loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
            loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
            var lib=comp.getLibrary();
            loader.loadManifest(lib.properties.manifest);
        }
        function handleFileLoad(evt, comp) {
            var images=comp.getImages();
            if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
        }
        function handleComplete(evt,comp) {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            var lib=comp.getLibrary();
            var ss=comp.getSpriteSheet();
            var queue = evt.target;
            var ssMetadata = lib.ssMetadata;
            for(i=0; i<ssMetadata.length; i++) {
                ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
            }
            exportRoot = new lib._728x90();
            stage = new lib.Stage(canvas);
            //Registers the "tick" event listener.
            fnStartAnimation = function() {
                stage.addChild(exportRoot);
                createjs.Ticker.setFPS(lib.properties.fps);
                createjs.Ticker.addEventListener("tick", stage);
            }
            //Code to support hidpi screens and responsive scaling.
            function makeResponsive(isResp, respDim, isScale, scaleType) {
                var lastW, lastH, lastS=1;
                window.addEventListener('resize', resizeCanvas);
                resizeCanvas();
                function resizeCanvas() {
                    var w = lib.properties.width, h = lib.properties.height;
                    var iw = window.innerWidth, ih=window.innerHeight;
                    var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                    if(isResp) {
                        if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                            sRatio = lastS;
                        }
                        else if(!isScale) {
                            if(iw<w || ih<h)
                                sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==1) {
                            sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==2) {
                            sRatio = Math.max(xRatio, yRatio);
                        }
                    }
                    canvas.width = w*pRatio*sRatio;
                    canvas.height = h*pRatio*sRatio;
                    canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
                    canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
                    stage.scaleX = pRatio*sRatio;
                    stage.scaleY = pRatio*sRatio;
                    lastW = iw; lastH = ih; lastS = sRatio;
                    stage.tickOnUpdate = false;
                    stage.update();
                    stage.tickOnUpdate = true;
                }
            }
            makeResponsive(false,'both',false,1);
            AdobeAn.compositionLoaded(lib.properties.id);
            fnStartAnimation();
        }
    </script>
    <!-- write your code here -->
</head>
<body onload="init();" style="margin:0px;">
<a href="https://www.cee-realestate.com/?ref=<?php echo $_GET['ref'] ?>" target="_blank">
<div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:728px; height:90px">
    <canvas id="canvas" width="728" height="90" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
    <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:728px; height:90px; position: absolute; left: 0px; top: 0px; display: block;">
    </div>
</div>
</a>
</body>
</html>