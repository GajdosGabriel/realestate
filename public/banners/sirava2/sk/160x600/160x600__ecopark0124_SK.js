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
	this.instance.setTransform(-379,-177.15,0.8221,0.822);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-379,-177.1,758,354.29999999999995);


(lib.Tween8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._02();
	this.instance.parent = this;
	this.instance.setTransform(-379,-177.15,0.8221,0.822);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-379,-177.1,758,354.29999999999995);


(lib.Tween7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-423,-178.45,0.9176,0.9176);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-423,-178.4,846,356.9);


(lib.Tween6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib._03();
	this.instance.parent = this;
	this.instance.setTransform(-423,-178.45,0.9176,0.9176);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-423,-178.4,846,356.9);


(lib.Symbol_1_Layer_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.text = new cjs.Text("VIAC INFO", "bold 20px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 28;
	this.text.lineWidth = 56;
	this.text.parent = this;
	this.text.setTransform(1.5,-25.55);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",1,1,1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#B9A525").s().p("AnzFUQhQAAAAhQIAAoHQAAhQBQAAIPnAAQBQAAAABQIAAIHQAABQhQAAg");
	this.shape.setTransform(0,0.025);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.text}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol_1_Layer_1, null, null);


(lib.Scene_1_text2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text2
	this.text = new cjs.Text("20% NÁVRATNOSŤ ", "bold 20px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 28;
	this.text.lineWidth = 158;
	this.text.parent = this;
	this.text.setTransform(-73.25,223.15);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(84).to({_off:false},0).to({x:76.2,text:"20% NÁVRATNOSŤ",lineWidth:148},16).to({_off:true},116).wait(107).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_text1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// text1
	this.text = new cjs.Text("INVESTUJ DO\nŠÍRAVA PARKU ", "bold 20px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 28;
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

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.shape}]},387).wait(1));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_from = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// from
	this.text = new cjs.Text("ZA 24 MESIACOV", "bold 21px 'Arial'", "#FFFFFF");
	this.text.textAlign = "center";
	this.text.lineHeight = 25;
	this.text.lineWidth = 123;
	this.text.parent = this;
	this.text.setTransform(231.5,302.15);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);
	this.text._off = true;

	this.timeline.addTween(cjs.Tween.get(this.text).wait(100).to({_off:false},0).to({x:79.1},14).to({_off:true},102).wait(107).to({_off:false,x:76.2,y:223.15,text:"20% NÁVRATNOSŤ",font:"bold 20px 'Arial'",lineHeight:28.35,lineWidth:148},0).wait(65));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_euro = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// euro
	this.text = new cjs.Text("OD", "bold 20px 'Arial'", "#B9A525");
	this.text.textAlign = "center";
	this.text.lineHeight = 24;
	this.text.lineWidth = 31;
	this.text.parent = this;
	this.text.setTransform(22.3,390.35);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);

	this.text_1 = new cjs.Text("5.000 €", "bold 32px 'Arial'", "#B9A525");
	this.text_1.textAlign = "center";
	this.text_1.lineHeight = 38;
	this.text_1.lineWidth = 117;
	this.text_1.parent = this;
	this.text_1.setTransform(98.5,380);
	this.text_1.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1},{t:this.text}]},323).to({state:[{t:this.text_1},{t:this.text}]},64).wait(1));

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
	this.text = new cjs.Text("OD", "bold 20px 'Arial'", "#B9A525");
	this.text.textAlign = "center";
	this.text.lineHeight = 24;
	this.text.lineWidth = 36;
	this.text.parent = this;
	this.text.setTransform(180.5,390.75);
	this.text.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);

	this.text_1 = new cjs.Text("5.000 €", "bold 32px 'Arial'", "#B9A525");
	this.text_1.textAlign = "center";
	this.text_1.lineHeight = 38;
	this.text_1.lineWidth = 139;
	this.text_1.parent = this;
	this.text_1.setTransform(262,380);
	this.text_1.shadow = new cjs.Shadow("rgba(0,0,0,1)",3,3,4);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.text_1,p:{x:262,lineWidth:139}},{t:this.text,p:{x:180.5,y:390.75,lineWidth:36,text:"OD",font:"bold 20px 'Arial'",color:"#B9A525",lineHeight:24.35}}]},115).to({state:[{t:this.text_1,p:{x:98.5,lineWidth:117}},{t:this.text,p:{x:22.3,y:390.35,lineWidth:31,text:"OD",font:"bold 20px 'Arial'",color:"#B9A525",lineHeight:24.35}}]},14).to({state:[]},87).to({state:[{t:this.text,p:{x:79.1,y:302.15,lineWidth:123,text:"ZA 24 MESIACOV",font:"bold 21px 'Arial'",color:"#FFFFFF",lineHeight:25.45}}]},107).to({state:[{t:this.text,p:{x:79.1,y:302.15,lineWidth:123,text:"ZA 24 MESIACOV",font:"bold 21px 'Arial'",color:"#FFFFFF",lineHeight:25.45}}]},64).wait(1));

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

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(-59,-34.9,124,75), null);


(lib.Scene_1_pic2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic2
	this.instance = new lib.Tween8("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-219,296.15);
	this.instance._off = true;

	this.instance_1 = new lib.Tween9("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(323,296.15);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.instance}]},193).to({state:[{t:this.instance_1}]},137).wait(58));
	this.timeline.addTween(cjs.Tween.get(this.instance).wait(193).to({_off:false},0).to({_off:true,x:323},137).wait(58));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_pic1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// pic1
	this.instance = new lib.Tween6("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(423,296.45);

	this.instance_1 = new lib.Tween7("synched",0);
	this.instance_1.parent = this;
	this.instance_1.setTransform(-258,297.45);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},193).wait(195));
	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,x:-258,y:297.45},193).wait(195));

}).prototype = p = new cjs.MovieClip();


(lib.Scene_1_button = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// button
	this.movieClip_1 = new lib.Symbol1();
	this.movieClip_1.name = "movieClip_1";
	this.movieClip_1.parent = this;
	this.movieClip_1.setTransform(79,535.9);
	this.movieClip_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.movieClip_1).wait(323).to({_off:false},0).wait(65));

}).prototype = p = new cjs.MovieClip();


// stage content:
(lib._160x600__ecopark0124_SK = function(mode,startPosition,loop) {
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
	this.frame_387 = function() {
		this.___loopingOver___ = true;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(323).call(this.frame_323).wait(64).call(this.frame_387).wait(1));

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

	this.timeline.addTween(cjs.Tween.get(this.button).wait(388));

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

	this.timeline.addTween(cjs.Tween.get(this.euro).wait(388));

	// _000_obj_
	this._000 = new lib.Scene_1__000();
	this._000.name = "_000";
	this._000.parent = this;
	this._000.depth = 0;
	this._000.isAttachedToCamera = 0
	this._000.isAttachedToMask = 0
	this._000.layerDepth = 0
	this._000.layerIndex = 2
	this._000.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this._000).wait(388));

	// from_obj_
	this.from = new lib.Scene_1_from();
	this.from.name = "from";
	this.from.parent = this;
	this.from.depth = 0;
	this.from.isAttachedToCamera = 0
	this.from.isAttachedToMask = 0
	this.from.layerDepth = 0
	this.from.layerIndex = 3
	this.from.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.from).wait(388));

	// text2_obj_
	this.text2 = new lib.Scene_1_text2();
	this.text2.name = "text2";
	this.text2.parent = this;
	this.text2.depth = 0;
	this.text2.isAttachedToCamera = 0
	this.text2.isAttachedToMask = 0
	this.text2.layerDepth = 0
	this.text2.layerIndex = 4
	this.text2.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text2).wait(388));

	// text1_obj_
	this.text1 = new lib.Scene_1_text1();
	this.text1.name = "text1";
	this.text1.parent = this;
	this.text1.depth = 0;
	this.text1.isAttachedToCamera = 0
	this.text1.isAttachedToMask = 0
	this.text1.layerDepth = 0
	this.text1.layerIndex = 5
	this.text1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.text1).wait(388));

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

	this.timeline.addTween(cjs.Tween.get(this.pic2).wait(388));

	// pic1_obj_
	this.pic1 = new lib.Scene_1_pic1();
	this.pic1.name = "pic1";
	this.pic1.parent = this;
	this.pic1.setTransform(423,296.4,1,1,0,0,0,423,296.4);
	this.pic1.depth = 0;
	this.pic1.isAttachedToCamera = 0
	this.pic1.isAttachedToMask = 0
	this.pic1.layerDepth = 0
	this.pic1.layerIndex = 7
	this.pic1.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.pic1).wait(388));

	// logo_obj_
	this.logo = new lib.Scene_1_logo();
	this.logo.name = "logo";
	this.logo.parent = this;
	this.logo.setTransform(80.5,64.2,1,1,0,0,0,80.5,64.2);
	this.logo.depth = 0;
	this.logo.isAttachedToCamera = 0
	this.logo.isAttachedToMask = 0
	this.logo.layerDepth = 0
	this.logo.layerIndex = 8
	this.logo.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.logo).wait(388));

	// black_obj_
	this.black = new lib.Scene_1_black();
	this.black.name = "black";
	this.black.parent = this;
	this.black.setTransform(80,300,1,1,0,0,0,80,300);
	this.black.depth = 0;
	this.black.isAttachedToCamera = 0
	this.black.isAttachedToMask = 0
	this.black.layerDepth = 0
	this.black.layerIndex = 9
	this.black.maskLayerName = 0

	this.timeline.addTween(cjs.Tween.get(this.black).wait(388));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-601,300.1,1447,299.9);
// library properties:
lib.properties = {
	id: '7D7A3EE3F82F764696F94664F133FFA0',
	width: 160,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"_02.jpg?1548323400354", id:"_02"},
		{src:"_03.jpg?1548323400354", id:"_03"},
		{src:"Logo_CEE_GoldWhite.png?1548323400354", id:"Logo_CEE_GoldWhite"}
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