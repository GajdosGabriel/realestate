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
	this.instance.setTransform(-461,-215.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-461,-215.5,922,431);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-461,-215.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-461,-215.5,922,431);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-466,-196.6,1.0109,1.0109);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-466,-196.6,932,393.29999999999995);


(lib.Tween5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-466,-196.6,1.0109,1.0109);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-466,-196.6,932,393.29999999999995);


(lib.Symbol_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B9A251").s().p("ApcFKQhkAAAAhkIAAnLQAAhkBkAAIS5AAQBkAAAABkIAAHLQAABkhkAAg");
	this.shape.setTransform(0.025,0.025);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol_1_Layer_1, null, null);


(lib.Scene_1_text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text2
	this.text = new cjs.Text(" IN 24 MONTHS FROM", "bold 30px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 36;
	this.text.lineWidth = 381;
	this.text.parent = this;
	this.text.setTransform(430.55,275.85);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(101).to({_off:false},0).to({y:133.4},16).to({_off:true},87).wait(70).to({_off:false},0).wait(86));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text1
	this.text = new cjs.Text("INVEST IN ŠÍRAVA PARK, 20% ROI", "bold 30px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 36;
	this.text.lineWidth = 503;
	this.text.parent = this;
	this.text.setTransform(533.55,-44.6);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(83).to({_off:false},0).to({y:71.4},18).to({_off:true},103).wait(70).to({_off:false},0).wait(86));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// logo
	this.instance = new lib.Logo_CEE_GoldWhite();
	this.instance.parent = this;
	this.instance.setTransform(43,83,0.4999,0.4997);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(360));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_euro = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// euro
	this.text = new cjs.Text("5.000 €", "bold 50px 'Arial'", "#B9A251");
	this.text.textAlign = "center";
	this.text.lineHeight = 58;
	this.text.lineWidth = 183;
	this.text.parent = this;
	this.text.setTransform(688.7,122.85);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(121).to({_off:false},0).to({_off:true},83).wait(70).to({_off:false},0).wait(86));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_black_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// black
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EhLxATiMAAAgnDMCXjAAAMAAAAnDg");
	this.shape.setTransform(484.975,125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(360));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_black = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// black
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AyMTiMAAAgnDMAkZAAAMAAAAnDg");
	this.shape.setTransform(116.5,125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(360));

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

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(-70.5,-33,141.1,66.1), null);


(lib.Scene_1_pic2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic2
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(605,34.5);
	this.instance._off = true;

	this.instance_1 = new lib.Tween8("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(605,206.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},203).to({state:[{t:this.instance_1}]},80).wait(77));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(203).to({_off:false},0).to({_off:true,y:206.5},80).wait(77));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_pic = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic
	this.instance = new lib.Tween5("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(699,112.6);

	this.instance_1 = new lib.Tween6("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(504,112.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},202).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,x:504},202).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_button = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.text = new cjs.Text("MORE INFO", "bold 20px 'Arial'");
	this.text.textAlign = "center";
	this.text.lineHeight = 24;
	this.text.lineWidth = 108;
	this.text.parent = this;
	this.text.setTransform(879.7,85.5);

	this.movieClip_1 = new lib.Symbol1();
	this.movieClip_1.name = "movieClip_1";
	this.movieClip_1.parent = this;
	this.movieClip_1.setTransform(878.7,108.45);

	this.text_1 = new cjs.Text("MORE INFO", "bold 20px 'Arial'");
	this.text_1.textAlign = "center";
	this.text_1.lineHeight = 24;
	this.text_1.lineWidth = 121;
	this.text_1.parent = this;
	this.text_1.setTransform(878.7,95.85);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.movieClip_1},{t:this.text}]},274).wait(86));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib._970x250_ecopark0123_EN = function(mode,startPosition,loop) {
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
	this.frame_274 = function() {
		this.movieClip_1 = this.button.movieClip_1;
	}
	this.frame_282 = function() {
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
	this.frame_359 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(274).call(this.frame_274).wait(8).call(this.frame_282).wait(77).call(this.frame_359).wait(1));

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

	this.timeline.addTween(cjs.Tween.get(this.button).wait(360));

	// euro_obj_
	this.euro = new lib.Scene_1_euro();
	this.euro.name = "euro";
	this.euro.parent = this;
	this.euro.depth = 0;
	this.euro.isAttachedToCamera = 0
	this.euro.isAttachedToMask = 0
	this.euro.layerDepth = 0
	this.euro.layerIndex = 1
	this.euro.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.euro).wait(360));

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

	this.timeline.addTween(cjs.Tween.get(this.text2).wait(360));

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

	this.timeline.addTween(cjs.Tween.get(this.text1).wait(360));

	// logo_obj_
	this.logo = new lib.Scene_1_logo();
	this.logo.name = "logo";
	this.logo.parent = this;
	this.logo.setTransform(118,125,1,1,0,0,0,118,125);
	this.logo.depth = 0;
	this.logo.isAttachedToCamera = 0
	this.logo.isAttachedToMask = 0
	this.logo.layerDepth = 0
	this.logo.layerIndex = 4
	this.logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.logo).wait(360));

	// black_obj_
	this.black = new lib.Scene_1_black();
	this.black.name = "black";
	this.black.parent = this;
	this.black.setTransform(116.5,125,1,1,0,0,0,116.5,125);
	this.black.depth = 0;
	this.black.isAttachedToCamera = 0
	this.black.isAttachedToMask = 0
	this.black.layerDepth = 0
	this.black.layerIndex = 5
	this.black.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black).wait(360));

	// pic2_obj_
	this.pic2 = new lib.Scene_1_pic2();
	this.pic2.name = "pic2";
	this.pic2.parent = this;
	this.pic2.depth = 0;
	this.pic2.isAttachedToCamera = 0
	this.pic2.isAttachedToMask = 0
	this.pic2.layerDepth = 0
	this.pic2.layerIndex = 6
	this.pic2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic2).wait(360));

	// pic_obj_
	this.pic = new lib.Scene_1_pic();
	this.pic.name = "pic";
	this.pic.parent = this;
	this.pic.setTransform(699,112.6,1,1,0,0,0,699,112.6);
	this.pic.depth = 0;
	this.pic.isAttachedToCamera = 0
	this.pic.isAttachedToMask = 0
	this.pic.layerDepth = 0
	this.pic.layerIndex = 7
	this.pic.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic).wait(202).to({_off:true},1).wait(157));

	// black_obj_
	this.black_1 = new lib.Scene_1_black_1();
	this.black_1.name = "black_1";
	this.black_1.parent = this;
	this.black_1.setTransform(484.9,125,1,1,0,0,0,484.9,125);
	this.black_1.depth = 0;
	this.black_1.isAttachedToCamera = 0
	this.black_1.isAttachedToMask = 0
	this.black_1.layerDepth = 0
	this.black_1.layerIndex = 8
	this.black_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black_1).wait(360));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(485,-56,680,478);
// library properties:
lib.properties = {
	id: 'FE2A9966F2A0014B91F2B896E8040756',
	width: 970,
	height: 250,
	fps: 24,
	color: "#303030",
	opacity: 1.00,
	manifest: [
		{src:"_02.jpg?1548322157053", id:"_02"},
		{src:"_03.jpg?1548322157053", id:"_03"},
		{src:"Logo_CEE_GoldWhite.png?1548322157053", id:"Logo_CEE_GoldWhite"}
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
an.compositions['FE2A9966F2A0014B91F2B896E8040756'] = {
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