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


(lib.Tween10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-380,-177.6,0.8243,0.8242);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-380,-177.6,760,355.29999999999995);


(lib.Tween9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-380,-177.6,0.8243,0.8242);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-380,-177.6,760,355.29999999999995);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-419.5,-177,0.9099,0.91);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-419.5,-177,839,354);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-419.45,-177,0.9099,0.91);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-419.4,-177,838.9,354);


(lib.Symbol_2_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.text = new cjs.Text("VIAC\nINFO", "bold 19px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 27;
	this.text.lineWidth = 100;
	this.text.parent = this;
	this.text.setTransform(-0.5,-22.5);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",1,1,1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B9A525").s().p("AnuEiQhQAAAAhQIAAmjQAAhQBQAAIPdAAQBQAAAABQIAAGjQAABQhQAAg");

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.text}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol_2_Layer_1, null, null);


(lib.Scene_1_text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text2
	this.text = new cjs.Text("20% ROI IN 24 MONTHS", "bold 22px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.lineWidth = 130;
	this.text.parent = this;
	this.text.setTransform(-67.45,223.15);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(84).to({_off:false},0).to({x:81.55},16).to({_off:true},116).wait(107).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text1
	this.text = new cjs.Text("INVEST IN\nŠÍRAVA PARK ", "bold 22px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 31;
	this.text.parent = this;
	this.text.setTransform(-86.05,141.3);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(69).to({_off:false},0).to({x:80.05},15).to({_off:true},132).wait(107).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// logo
	this.instance = new lib.Logo_CEE_GoldWhite();
	this.instance.parent = this;
	this.instance.setTransform(23,32,0.3834,0.3832);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EgMkAu3MAAAhdtIZJAAMAAABdtg");
	this.shape.setTransform(80.025,300);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.shape}]},386).wait(2));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_from = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// from
	this.text = new cjs.Text("FROM", "bold 21px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 25;
	this.text.lineWidth = 100;
	this.text.parent = this;
	this.text.setTransform(220,302.15);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(100).to({_off:false},0).to({x:82},14).to({_off:true},102).wait(107).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_black = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// black
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EgMkAu3MAAAhdtIZJAAMAAABdtg");
	this.shape.setTransform(80.025,300);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(388));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1__000 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// _000
	this.text = new cjs.Text("5.000 €", "bold 35px 'Arial'", "#B9A525");
	this.text.textAlign = "center";
	this.text.lineHeight = 41;
	this.text.lineWidth = 139;
	this.text.parent = this;
	this.text.setTransform(232,346);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(115).to({_off:false},0).to({x:80.05},14).to({_off:true},87).wait(107).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1_obj_
	this.Layer_1 = new lib.Symbol_2_Layer_1();
	this.Layer_1.name = "Layer_1";
	this.Layer_1.parent = this;
	this.Layer_1.depth = 0;
	this.Layer_1.isAttachedToCamera = 0
	this.Layer_1.isAttachedToMask = 0
	this.Layer_1.layerDepth = 0
	this.Layer_1.layerIndex = 0
	this.Layer_1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.Layer_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(-58.5,-30,122,66), null);


(lib.Scene_1_pic2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic2
	this.instance = new lib.Tween9("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-220,296.6);
	this.instance._off = true;

	this.instance_1 = new lib.Tween10("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(365,296.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},193).to({state:[{t:this.instance_1}]},138).to({state:[{t:this.instance_1}]},56).to({state:[]},1).wait(2));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(193).to({_off:false},0).to({_off:true,x:365},138).wait(59));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_pic1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic1
	this.instance = new lib.Tween7("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(419.45,296);

	this.instance_1 = new lib.Tween8("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-258.5,296);

	this.instance_2 = new lib.Logo_CEE_GoldWhite();
	this.instance_2.parent = this;
	this.instance_2.setTransform(23,32,0.3834,0.3832);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},192).to({state:[{t:this.instance_2}]},194).to({state:[]},2).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,x:-258.5},192).wait(197));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_button = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.movieClip_1 = new lib.Symbol2();
	this.movieClip_1.name = "movieClip_1";
	this.movieClip_1.parent = this;
	this.movieClip_1.setTransform(80.5,531.9);
	this.movieClip_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.movieClip_1).wait(323).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib._160x600_ecopark0123 = function(mode,startPosition,loop) {
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
	this.frame_323 = function() {
		this.movieClip_1 = this.button.movieClip_1;
	}
	this.frame_330 = function() {
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
	this.frame_389 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(323).call(this.frame_323).wait(7).call(this.frame_330).wait(59).call(this.frame_389).wait(1));

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

	this.timeline.addTween(cjs.Tween.get(this.button).wait(323).to({_off:true},65).wait(2));

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

	this.timeline.addTween(cjs.Tween.get(this._000).wait(386).to({_off:true},2).wait(2));

	// from_obj_
	this.from = new lib.Scene_1_from();
	this.from.name = "from";
	this.from.parent = this;
	this.from.depth = 0;
	this.from.isAttachedToCamera = 0
	this.from.isAttachedToMask = 0
	this.from.layerDepth = 0
	this.from.layerIndex = 2
	this.from.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.from).wait(386).to({_off:true},2).wait(2));

	// text2_obj_
	this.text2 = new lib.Scene_1_text2();
	this.text2.name = "text2";
	this.text2.parent = this;
	this.text2.depth = 0;
	this.text2.isAttachedToCamera = 0
	this.text2.isAttachedToMask = 0
	this.text2.layerDepth = 0
	this.text2.layerIndex = 3
	this.text2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text2).wait(386).to({_off:true},2).wait(2));

	// text1_obj_
	this.text1 = new lib.Scene_1_text1();
	this.text1.name = "text1";
	this.text1.parent = this;
	this.text1.depth = 0;
	this.text1.isAttachedToCamera = 0
	this.text1.isAttachedToMask = 0
	this.text1.layerDepth = 0
	this.text1.layerIndex = 4
	this.text1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text1).wait(386).to({_off:true},2).wait(2));

	// pic2_obj_
	this.pic2 = new lib.Scene_1_pic2();
	this.pic2.name = "pic2";
	this.pic2.parent = this;
	this.pic2.depth = 0;
	this.pic2.isAttachedToCamera = 0
	this.pic2.isAttachedToMask = 0
	this.pic2.layerDepth = 0
	this.pic2.layerIndex = 5
	this.pic2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic2).wait(390));

	// pic1_obj_
	this.pic1 = new lib.Scene_1_pic1();
	this.pic1.name = "pic1";
	this.pic1.parent = this;
	this.pic1.setTransform(419.4,296,1,1,0,0,0,419.4,296);
	this.pic1.depth = 0;
	this.pic1.isAttachedToCamera = 0
	this.pic1.isAttachedToMask = 0
	this.pic1.layerDepth = 0
	this.pic1.layerIndex = 6
	this.pic1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic1).wait(388).to({_off:true},1).wait(1));

	// logo_obj_
	this.logo = new lib.Scene_1_logo();
	this.logo.name = "logo";
	this.logo.parent = this;
	this.logo.setTransform(80.5,64.2,1,1,0,0,0,80.5,64.2);
	this.logo.depth = 0;
	this.logo.isAttachedToCamera = 0
	this.logo.isAttachedToMask = 0
	this.logo.layerDepth = 0
	this.logo.layerIndex = 7
	this.logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.logo).wait(386).to({_off:true},2).wait(2));

	// black_obj_
	this.black = new lib.Scene_1_black();
	this.black.name = "black";
	this.black.parent = this;
	this.black.setTransform(80,300,1,1,0,0,0,80,300);
	this.black.depth = 0;
	this.black.isAttachedToCamera = 0
	this.black.isAttachedToMask = 0
	this.black.layerDepth = 0
	this.black.layerIndex = 8
	this.black.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black).wait(386).to({_off:true},2).wait(2));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-598,0,1437,600);
// library properties:
lib.properties = {
	id: '7D7A3EE3F82F764696F94664F133FFA0',
	width: 160,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"_02.jpg", id:"_02"},
		{src:"_03.jpg", id:"_03"},
		{src:"Logo_CEE_GoldWhite.png", id:"Logo_CEE_GoldWhite"}
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
an.compositions['7D7A3EE3F82F764696F94664F133FFA0'] = {
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