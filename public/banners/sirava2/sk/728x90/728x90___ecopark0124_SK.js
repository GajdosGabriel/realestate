(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


// symbols:



(lib._02 = function() {
	this.initialize(img._02);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,922,431);


(lib._03 = function() {
	this.initialize(img._03);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,922,389);


(lib.Logo_CEE_GoldWhite = function() {
	this.initialize(img.Logo_CEE_GoldWhite);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,168);// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-305,-142.55,0.6616,0.6616);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-305,-142.5,610,285.1);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-305,-142.6,0.6616,0.6616);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-305,-142.6,610,285.2);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-305,-128.65,0.6616,0.6615);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-305,-128.6,610,257.29999999999995);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-305,-128.65,0.6616,0.6615);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-305,-128.6,610,257.29999999999995);


(lib.Symbol_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.text = new cjs.Text("VIAC INFO", "bold 15px 'Arial'");
	this.text.textAlign = "center";
	this.text.lineHeight = 19;
	this.text.lineWidth = 60;
	this.text.parent = this;
	this.text.setTransform(0,-17.4);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B9A251").s().p("AmZD4QhaAAAAhaIAAk7QAAhaBaAAIMzAAQBaAAAABaIAAE7QAABahaAAg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.text}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol_1_Layer_1, null, null);


(lib.Scene_1_text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text2
	this.text = new cjs.Text("ZA 24 MESIACOV OD", "bold 19px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 23;
	this.text.lineWidth = 193;
	this.text.parent = this;
	this.text.setTransform(232.2,96.55);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",1,1,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(96).to({_off:false},0).to({y:54.05},24).to({_off:true},83).wait(111).to({_off:false},0).wait(96));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text1
	this.text = new cjs.Text("INVESTUJ DO ŠÍRAVA PARKU, 20% NÁVRATNOSŤ", "bold 18px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 22;
	this.text.lineWidth = 439;
	this.text.parent = this;
	this.text.setTransform(355.4,-35.65);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",1,1,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(72).to({_off:false},0).to({y:18.85},24).to({_off:true},107).wait(111).to({_off:false},0).wait(96));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// logo
	this.instance = new lib.Logo_CEE_GoldWhite();
	this.instance.parent = this;
	this.instance.setTransform(19,20,0.3,0.3);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(410));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_black = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// black
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Eg42AHCIAAuCMBxtAAAIAAOCg");
	this.shape.setTransform(364.05,45.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(410));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1__000 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// _000
	this.text = new cjs.Text("5.000 €", "bold 40px 'Arial'", "#B9A251");
	this.text.textAlign = "center";
	this.text.lineHeight = 47;
	this.text.lineWidth = 138;
	this.text.parent = this;
	this.text.setTransform(410.7,40.85);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",1,1,1);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(127).to({_off:false},0).to({_off:true},76).wait(111).to({_off:false},0).wait(96));

}).prototype = p = new cjs.MovieClip();


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.Symbol_1_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(-50,-24.7,100,49.5), null);


(lib.Scene_1_pic2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic2
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(430,-52.4);
	this.instance._off = true;

	this.instance_1 = new lib.Tween8("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(430,123.55);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},203).to({state:[{t:this.instance_1}]},111).wait(96));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(203).to({_off:false},0).to({_off:true,y:123.55},111).wait(96));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_pic1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic1
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(430,-38.35);

	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(430,127.65);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},203).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,y:127.65},203).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_button = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.movieClip_1 = new lib.Symbol1();
	this.movieClip_1.name = "movieClip_1";
	this.movieClip_1.parent = this;
	this.movieClip_1.setTransform(655.4,45.1);
	this.movieClip_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.movieClip_1).wait(314).to({_off:false},0).wait(96));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib._728x90___ecopark0124_SK = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	this.___GetDepth___ = function(obj) {
		var depth = obj.depth;
		var cameraObj = this.___camera___instance;
		if(cameraObj && cameraObj.depth && obj.isAttachedToCamera)
		{
			depth += depth + cameraObj.depth;
		}
		return depth;
		}
	this.___needSorting___ = function() {
		for (var i = 0; i < this.getNumChildren() - 1; i++)
		{
			var prevDepth = this.___GetDepth___(this.getChildAt(i));
			var nextDepth = this.___GetDepth___(this.getChildAt(i + 1));
			if (prevDepth < nextDepth)
				return true;
		}
		return false;
	}
	this.___sortFunction___ = function(obj1, obj2) {
		return (this.exportRoot.___GetDepth___(obj2) - this.exportRoot.___GetDepth___(obj1));
	}
	this.on('tick', function (event){
		var curTimeline = event.currentTarget;
		if (curTimeline.___needSorting___()){
			this.sortChildren(curTimeline.___sortFunction___);
		}
	});

	// timeline functions:
	this.frame_314 = function() {
		this.movieClip_1 = this.button.movieClip_1;
	}
	this.frame_316 = function() {
		/* Click to Go to Web Page
		Clicking on the specified symbol instance loads the URL in a new browser window.
		
		Instructions:
		1. Replace http://www.adobe.com with the desired URL address.
		   Keep the quotation marks ("").
		*/
		
		this.movieClip_1.addEventListener("click", fl_ClickToGoToWebPage);
		
		function fl_ClickToGoToWebPage() {
			window.open("http://www.cee-realestate.com", "_blank");
		}
	}
	this.frame_409 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(314).call(this.frame_314).wait(2).call(this.frame_316).wait(93).call(this.frame_409).wait(1));

	// button_obj_
	this.button = new lib.Scene_1_button();
	this.button.name = "button";
	this.button.parent = this;
	this.button.depth = 0;
	this.button.isAttachedToCamera = 0
	this.button.isAttachedToMask = 0
	this.button.layerDepth = 0
	this.button.layerIndex = 0
	this.button.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.button).wait(410));

	// _000_obj_
	this._000 = new lib.Scene_1__000();
	this._000.name = "_000";
	this._000.parent = this;
	this._000.depth = 0;
	this._000.isAttachedToCamera = 0
	this._000.isAttachedToMask = 0
	this._000.layerDepth = 0
	this._000.layerIndex = 1
	this._000.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this._000).wait(410));

	// text2_obj_
	this.text2 = new lib.Scene_1_text2();
	this.text2.name = "text2";
	this.text2.parent = this;
	this.text2.depth = 0;
	this.text2.isAttachedToCamera = 0
	this.text2.isAttachedToMask = 0
	this.text2.layerDepth = 0
	this.text2.layerIndex = 2
	this.text2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text2).wait(410));

	// text1_obj_
	this.text1 = new lib.Scene_1_text1();
	this.text1.name = "text1";
	this.text1.parent = this;
	this.text1.depth = 0;
	this.text1.isAttachedToCamera = 0
	this.text1.isAttachedToMask = 0
	this.text1.layerDepth = 0
	this.text1.layerIndex = 3
	this.text1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text1).wait(410));

	// pic2_obj_
	this.pic2 = new lib.Scene_1_pic2();
	this.pic2.name = "pic2";
	this.pic2.parent = this;
	this.pic2.depth = 0;
	this.pic2.isAttachedToCamera = 0
	this.pic2.isAttachedToMask = 0
	this.pic2.layerDepth = 0
	this.pic2.layerIndex = 4
	this.pic2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic2).wait(410));

	// pic1_obj_
	this.pic1 = new lib.Scene_1_pic1();
	this.pic1.name = "pic1";
	this.pic1.parent = this;
	this.pic1.setTransform(430,-38.4,1,1,0,0,0,430,-38.4);
	this.pic1.depth = 0;
	this.pic1.isAttachedToCamera = 0
	this.pic1.isAttachedToMask = 0
	this.pic1.layerDepth = 0
	this.pic1.layerIndex = 5
	this.pic1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic1).wait(203).to({_off:true},1).wait(206));

	// logo_obj_
	this.logo = new lib.Scene_1_logo();
	this.logo.name = "logo";
	this.logo.parent = this;
	this.logo.setTransform(64,45.2,1,1,0,0,0,64,45.2);
	this.logo.depth = 0;
	this.logo.isAttachedToCamera = 0
	this.logo.isAttachedToMask = 0
	this.logo.layerDepth = 0
	this.logo.layerIndex = 6
	this.logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.logo).wait(410));

	// black_obj_
	this.black = new lib.Scene_1_black();
	this.black.name = "black";
	this.black.parent = this;
	this.black.setTransform(364.1,45.1,1,1,0,0,0,364.1,45.1);
	this.black.depth = 0;
	this.black.isAttachedToCamera = 0
	this.black.isAttachedToMask = 0
	this.black.layerDepth = 0
	this.black.layerIndex = 7
	this.black.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black).wait(410));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(364.2,-150,370.8,416.2);
// library properties:
lib.properties = {
	id: '49B3F3DE868DC54CAF591AF064FEC664',
	width: 728,
	height: 90,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"_02.jpg?1548332374405", id:"_02"},
		{src:"_03.jpg?1548332374405", id:"_03"},
		{src:"Logo_CEE_GoldWhite.png?1548332374405", id:"Logo_CEE_GoldWhite"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['49B3F3DE868DC54CAF591AF064FEC664'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


// Layer depth API : 

AdobeAn.Layer = new function() {
	this.getLayerZDepth = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth; else 0;";
		return eval(script);
	}
	this.setLayerZDepth = function(timeline, layerName, zDepth)
	{
		const MAX_zDepth = 10000;
		const MIN_zDepth = -5000;
		if(zDepth > MAX_zDepth)
			zDepth = MAX_zDepth;
		else if(zDepth < MIN_zDepth)
			zDepth = MIN_zDepth;
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline." + layerName + ".depth = " + zDepth + ";";
		eval(script);
	}
	this.removeLayer = function(timeline, layerName)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		var script = "if(timeline." + layerName + ") timeline.removeChild(timeline." + layerName + ");";
		eval(script);
	}
	this.addNewLayer = function(timeline, layerName, zDepth)
	{
		if(layerName === "Camera")
		layerName = "___camera___instance";
		zDepth = typeof zDepth !== 'undefined' ? zDepth : 0;
		var layer = new createjs.MovieClip();
		layer.name = layerName;
		layer.depth = zDepth;
		layer.layerIndex = 0;
		timeline.addChild(layer);
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;