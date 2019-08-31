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


(lib.Tween9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-416,-194.45,0.9024,0.9023);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-416,-194.4,832,388.9);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-416,-194.45,0.9024,0.9023);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-416,-194.4,832,388.9);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-445.5,-187.95,0.9664,0.9663);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-445.5,-187.9,891,375.9);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-445.5,-187.95,0.9664,0.9663);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-445.5,-187.9,891,375.9);


(lib.Symbol_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.text = new cjs.Text("VIAC INFO", "bold 23px 'Arial'");
	this.text.textAlign = "center";
	this.text.lineHeight = 32;
	this.text.lineWidth = 138;
	this.text.parent = this;
	this.text.setTransform(0,-12.8);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B9A251").s().p("AuDEEQhQAAAAhQIAAlnQAAhQBQAAIcHAAQBQAAAABQIAAFnQAABQhQAAg");
	this.shape.setTransform(0.025,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.text}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol_1_Layer_1, null, null);


(lib.Scene_1_text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text2
	this.text = new cjs.Text("20% NÁVRATNOSŤ\nZA 24 MESIACOV", "bold 23px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 32;
	this.text.lineWidth = 214;
	this.text.parent = this;
	this.text.setTransform(425.1,242);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(102).to({_off:false},0).to({x:150,lineWidth:262},21).to({_off:true},117).wait(76).to({_off:false},0).wait(69));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text1
	this.text = new cjs.Text("INVESTUJ DO\nŠÍRAVA PARKU", "bold 23px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 32;
	this.text.lineWidth = 182;
	this.text.parent = this;
	this.text.setTransform(408.15,155.85);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(81).to({_off:false},0).to({x:150,lineWidth:175},21).to({_off:true},138).wait(76).to({_off:false},0).wait(69));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_logo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// logo
	this.instance = new lib.Logo_CEE_GoldWhite();
	this.instance.parent = this;
	this.instance.setTransform(90,20,0.4,0.4003);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(385));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_from = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// from
	this.text = new cjs.Text("OD", "bold 23px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 32;
	this.text.lineWidth = 76;
	this.text.parent = this;
	this.text.setTransform(-51,337);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(123).to({_off:false},0).to({x:75.55,lineWidth:43},11).to({_off:true},106).wait(76).to({_off:false},0).wait(69));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_black = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// black
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("EgXbAu5MAAAhdxMAu3AAAMAAABdxg");
	this.shape.setTransform(150,300.075);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(385));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1__000 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// _000
	this.text = new cjs.Text("5.000 €", "bold 42px 'Arial'", "#B9A251");
	this.text.textAlign = "center";
	this.text.lineHeight = 53;
	this.text.lineWidth = 162;
	this.text.parent = this;
	this.text.setTransform(177,324.25);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(137).to({_off:false},0).to({_off:true},103).wait(76).to({_off:false},0).wait(69));

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

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(-98,-26,196.1,52), null);


(lib.Scene_1_pic2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic2
	this.instance = new lib.Tween8("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-116,309.45);
	this.instance._off = true;

	this.instance_1 = new lib.Tween9("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(416,309.45);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},192).to({state:[{t:this.instance_1}]},192).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(192).to({_off:false},0).to({_off:true,x:416},192).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_pic = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(445.5,302.95);

	this.instance_1 = new lib.Tween7("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-145.5,302.95);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},192).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,x:-145.5},192).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_button = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.movieClip_1 = new lib.Symbol1();
	this.movieClip_1.name = "movieClip_1";
	this.movieClip_1.parent = this;
	this.movieClip_1.setTransform(150,544.15);
	this.movieClip_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.movieClip_1).wait(316).to({_off:false},0).wait(69));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib._300x600__ecopark0124_SK = function(mode,startPosition,loop) {
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
	this.frame_316 = function() {
		this.movieClip_1 = this.button.movieClip_1;
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
	this.frame_384 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(316).call(this.frame_316).wait(68).call(this.frame_384).wait(1));

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

	this.timeline.addTween(cjs.Tween.get(this.button).wait(385));

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

	this.timeline.addTween(cjs.Tween.get(this._000).wait(385));

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

	this.timeline.addTween(cjs.Tween.get(this.from).wait(385));

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

	this.timeline.addTween(cjs.Tween.get(this.text2).wait(385));

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

	this.timeline.addTween(cjs.Tween.get(this.text1).wait(385));

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

	this.timeline.addTween(cjs.Tween.get(this.pic2).wait(385));

	// pic_obj_
	this.pic = new lib.Scene_1_pic();
	this.pic.name = "pic";
	this.pic.parent = this;
	this.pic.setTransform(445.5,302.9,1,1,0,0,0,445.5,302.9);
	this.pic.depth = 0;
	this.pic.isAttachedToCamera = 0
	this.pic.isAttachedToMask = 0
	this.pic.layerDepth = 0
	this.pic.layerIndex = 6
	this.pic.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic).wait(192).to({_off:true},1).wait(192));

	// logo_obj_
	this.logo = new lib.Scene_1_logo();
	this.logo.name = "logo";
	this.logo.parent = this;
	this.logo.setTransform(150,53.6,1,1,0,0,0,150,53.6);
	this.logo.depth = 0;
	this.logo.isAttachedToCamera = 0
	this.logo.isAttachedToMask = 0
	this.logo.layerDepth = 0
	this.logo.layerIndex = 7
	this.logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.logo).wait(385));

	// black_obj_
	this.black = new lib.Scene_1_black();
	this.black.name = "black";
	this.black.parent = this;
	this.black.setTransform(150,300.1,1,1,0,0,0,150,300.1);
	this.black.depth = 0;
	this.black.isAttachedToCamera = 0
	this.black.isAttachedToMask = 0
	this.black.layerDepth = 0
	this.black.layerIndex = 8
	this.black.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black).wait(385));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-441,300,1332,300.20000000000005);
// library properties:
lib.properties = {
	id: '65730B2FB53B0D4BAB7BD65736665C12',
	width: 300,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"_02.jpg?1548331667797", id:"_02"},
		{src:"_03.jpg?1548331667797", id:"_03"},
		{src:"Logo_CEE_GoldWhite.png?1548331667797", id:"Logo_CEE_GoldWhite"}
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
an.compositions['65730B2FB53B0D4BAB7BD65736665C12'] = {
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