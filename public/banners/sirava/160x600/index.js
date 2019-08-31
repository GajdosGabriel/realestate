(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:



(lib.pic1 = function() {
	this.initialize(img.pic1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,600,600);


(lib.pic2 = function() {
	this.initialize(img.pic2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,640,600);// helper functions:

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


(lib.Tween4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.pic2();
	this.instance.parent = this;
	this.instance.setTransform(-286,-308);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-286,-308,640,600);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.pic1();
	this.instance.parent = this;
	this.instance.setTransform(-1030,-304,1.003,1.003);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1030,-304,601.9,601.9);


(lib.Symbol14 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#292929").s().p("EgYwBaSMAAAi42MAxhAAAMAAAC9Ig");
	this.shape.setTransform(158.5,-79.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol14, new cjs.Rectangle(0,-684.5,317,1210.5), null);


(lib.Symbol13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#292929").s().p("A4wPeMAAAgjOMAxhAAAMAAAAnhg");
	this.shape.setTransform(158.5,126.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol13, new cjs.Rectangle(0,0,317,253), null);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 copy
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AA8B/QgPgDgLgGIAOgkQASAJAXAAIAMgCQAGgBAFgDQAFgDACgGQADgFAAgIIAAgFIAAgFIAAAAQgHAIgIADQgJAEgMAAQgIAAgIgBIgNgFQgMgGgIgKQgIgKgEgOQgEgMAAgNQAAgPAEgMQAEgNAIgKQAIgKAMgFIANgFIAPgBQAbAAAMAOIABAAIAAgEIAAgHIAtAAIAACCQAAAKgBAIQgCAJgEAGQgDAHgFAGIgLAKQgLAIgPAEQgNAEgQAAQgOAAgPgEgABUggQgFACgDAEQgHAIAAANQAAAGACAGQACAGADAFQAEAEAFADQAFADAHAAQALAAAHgHQAEgDACgGQACgHAAgIQAAgJgCgGQgCgGgEgEQgHgGgNAAQgGAAgFACgALKBJQgKgCgKgEQgJgDgIgGQgJgGgHgHQgHgHgFgIQgGgIgEgKQgDgJgCgKQgCgKAAgLQAAgLACgKQACgKADgJQAEgJAGgJQAFgIAHgHQAHgHAJgFQAIgGAJgDQAKgEAKgCQALgCALAAQAMAAAKACQALACAJAEQAKADAIAGQAIAFAHAHQAHAHAGAIQAFAJAEAJQAEAJACAKQACAKAAALQAAALgCAKQgCAKgEAJQgEAKgFAIQgGAIgHAHQgHAHgIAGQgIAGgKADQgJAEgLACQgKADgMAAQgLAAgLgDgALLhRQgKAEgHAIQgHAIgFAKQgEALAAAMQAAANAEALQAFAJAHAJQAHAIAKAEQAKAFALAAQALAAAKgFQAKgEAHgIQAIgJAEgJQAEgLAAgNQAAgMgEgLQgEgKgIgIQgHgIgKgEQgKgEgLAAQgLAAgKAEgAosBAQgMgGgGgKQgEgGgCgHQgCgHAAgJIAAgyIgSAAIAAglIAUAAIAAgqIAvAAIAAAqIAeAAIAAAlIgeAAIAAAsQAAAFADAEQACAEAEACQAHADAKAAIAGAAIAAAqIgNABQgcgCgOgIgANqBIIAAjHIAxAAIAADHgAIxBIIgjhDIgXAAIAABDIgxAAIAAjHIBdABQAJABAGADQAJADAHAFQAHAGAEAHQAFAIADAJQACAJAAALQAAAIgCAIQgBAIgEAIQgEAHgGAGQgFAGgIAEIAAAAIAIALIAnBGgAH3gkIAVAAQAMAAAHgHQAGgGAAgMQAAgMgFgGQgEgDgGgBQgGgCgJAAIgQAAgAEuBIIAAhTQAAgKgEgFQgEgEgIAAQgLAAgHAGQgIAFgDAKQgCAHAAAKIAABAIgxAAIAAjHIAxAAIAAA/IgBANIABAAQAGgLALgGQAMgGAPAAQALAAAJACQAKADAGAGQAIAHADAKQAEALAAAPIAABcgAg1BIIAAiPIAxAAIAACPgAiHBIIAAhTQAAgKgEgFQgEgEgIAAQgLAAgHAGQgIAFgDAKQgCAHAAAKIAABAIgxAAIAAjHIAxAAIAAA/IgBANIABAAQAGgLALgGQAMgGAPAAQALAAAJACQAKADAGAGQAIAHADAKQAEALAAAPIAABcgAl5BIIAAhTQAAgKgEgFQgEgEgIAAQgLAAgHAGQgIAFgDAKQgCAHAAAKIAABAIgxAAIAAjHIAxAAIAAA/IgBANIABAAQAGgLALgGQAMgGAPAAQALAAAJACQAKADAGAGQAIAHADAKQAEALAAAPIAABcgAqhBIIAAiPIAxAAIAACPgAsUBIIgRhCIgDgPIAAAAIgDAPIgQBCIg3AAIgoiPIAzAAIASBUIABAPIABAAIACgPIAUhUIAqAAIAUBUIACAPIABAAIABgPIAShUIAzAAIgoCPgAg0hZIAAgmIAvAAIAAAmgAqghZIAAgmIAvAAIAAAmg");
	this.shape.setTransform(180.7,166.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol5, new cjs.Rectangle(88.4,153.1,184.7,26.3), null);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 copy
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AhZKWIAAjIIArAAIAAAIIAAAJIAAAAQAOgUAeAAQAOAAALAFQANAGAIAKQAIAKAFAOQAFAOAAAQQgBARgFAPQgFANgIAKQgJALgNAFQgMAFgOAAQgXAAgNgOIgBAAIABAMIAAA2gAgZH2QgFACgEAEQgEAFgCAGQgCAIAAAIQAAAHABAGQACAHAEAEQADAFAGADQAFADAGAAQAHAAAEgCQAFgDADgEQAFgFABgGQADgGAAgJQAAgHgCgHQgCgHgEgFQgEgEgEgCQgFgDgHAAQgFAAgFACgAGLJgQgIgBgIgDQgHgDgHgFIgLgJQgKgLgFgOQgFgNAAgPQAAgPAFgOQAFgOAKgLQAKgKAOgGIAOgDIARgCQAQAAAMAFQAMAFAKAKQAIAJAEANQAFAMAAAPIgBAPIhcAAQACAHAEAFQACAFAFADQAJAHAMgBQAVAAATgOIASAiQgYAVglAAQgKAAgJgCgAGrIEQAAgIgFgHQgGgFgIAAQgKAAgGAGQgFAFgCAJIAqAAIAAAAgAjlJdQgPgGgLgKIgKgLIgHgMQgDgIgCgHQgBgIAAgIQAAgIABgJQACgHADgHQAEgJANgPQALgKAPgGQAKgDAWgCQAMAAAUAFQAQAGAKAKQANAPAFAJQADAHACAHQABAJAAAIQAAAIgBAIQgCAHgDAIIgIAMIgKALQgKAKgQAGQgPAFgQAAQgRAAgQgFgAjRH2QgGACgFAFQgEAFgCAGQgDAHAAAIQAAAHADAIQACAGAEAEQAFAFAGACQAGACAHAAQAGAAAGgCQAGgCAEgFQAFgEACgGQADgIABgHQgBgIgDgHQgCgGgFgFQgEgFgGgCQgGgCgGgBQgHABgGACgAnRJgQgIgBgIgDQgGgDgHgFIgLgJQgKgLgFgOQgFgNgBgPQABgPAFgOQAFgOAKgLQAJgKAOgGIAPgDIARgCQAPAAANAFQAMAFAJAKQAIAJAFANQAEAMAAAPIgBAPIhbAAQABAHAEAFQADAFAEADQAKAHAMgBQAVAAATgOIARAiQgXAVgmAAQgJAAgKgCgAmwIEQgBgIgFgHQgFgFgIAAQgKAAgGAGQgFAFgDAJIArAAIAAAAgAsLJgQgJgBgHgDQgHgDgGgFIgLgJQgKgLgGgOQgFgNAAgPQAAgPAFgOQAFgOAKgLQAKgKAOgGIAPgDIAQgCQAQAAANAFQAMAFAIAKQAJAJAFANQAEAMAAAPIgCAPIhaAAQABAHADAFQADAFAFADQAJAHANgBQAUAAATgOIASAiQgXAVgnAAQgJAAgJgCgArrIEQAAgIgFgHQgGgFgIAAQgKAAgGAGQgFAFgDAJIArAAIAAAAgAvTJdQgMgGgIgKQgJgLgFgNQgFgOABgRQAAgQAEgOQAGgOAIgLQAJgJAMgGQAMgFAPAAQAcAAAJALIAAAAIAAgGIAAg5IAxAAIAADHIgtAAIAAgJIAAgIIAAAAQgMAVgeAAQgPAAgMgFgAu3H2QgGACgDAEQgEAGgDAFQgCAHAAAIQAAAIACAHQACAHAEAEQAEAFAFADQAGACAFAAQAHAAAEgCQAFgDAEgEQAEgEACgGQADgIAAgJQAAgGgCgGQgCgHgDgFQgEgEgFgDQgFgDgIAAQgFAAgFACgALIJWQgLgFgGgLQgEgFgCgIQgCgHAAgJIAAgyIgTAAIAAgmIAUAAIAAgpIAwAAIAAApIAeAAIAAAmIgeAAIAAAsQAAAFADAFQACADAEACQAHAEAJAAIAHgBIAAAqIgNABQgcgBgPgJgAlFJeQgLgCgGgGQgJgFgEgLQgFgLABgSIAAiSIAwAAIAACMQAAAKACAEQAEAFAIAAIAFgBIAAAqIgOABQgMAAgHgCgAJVJeIAAhUQAAgKgDgFQgEgEgIAAQgLAAgIAFQgGAGgEAKQgCAHgBAMIAAA/IgwAAIAAiQIAvAAIAAANIgBAJIABAAQAFgKALgHQAFgDAHgDQAIgCAKAAQAKAAAJACQALAEAGAFQAHAIAEAKQAEAKAAAPIAABdgAEGJeIAAhVQAAgJgCgEQgCgFgHAAQgLAAgHAHQgGAIgCAMQgCAFAAAMIAAA7IgwAAIAAhVQAAgJgDgEQgCgFgGAAQgLAAgHAHQgGAGgDANQgBAGAAAMIAAA7IgwAAIAAiQIAuAAIAAANIAAAJIAAAAQAHgLAIgFQAGgFAHgCQAHgCAHAAQAOAAALAGQAFADAEAEQAEAGADAFIAAAAQAHgJALgHQAGgEAHgCQAIgCAIAAQAKAAAIADQAJADAGAGQAHAHADAKQAEAKgBAPIAABdgAqBJeIgxiQIAzAAIAVBNQADAKADAPIABAAQACgPADgKIAWhNIA0AAIgyCQgANnErIAOgkQAIAGAIAAQAHAAAFgDQAHgDADgJIAEgGIg+iNIA3AAIAVBCIAFAWIABAAIAFgVIAShDIA1AAIg7CfQgEAMgHAJQgHAIgIAEQgHAFgKADQgIADgJgBQgTAAgOgKgAE9EzIAAjIIArAAIAAAGIAAAKIAAAAQANgUAfAAQAOAAANAGQAMAFAIAKQAJAKAEAOQAEAOABARQAAARgGANQgFAOgIALQgKAJgMAFQgMAGgPAAQgXAAgNgOIgBAAIABANIAAA2gAF9CSQgFACgEAEQgEAFgCAHQgCAGgBAKQABAGABAGQACAGADAFQAEAFAFADQAGADAGAAQAGAAAGgDQAEgCAFgEQAEgFABgGQADgHAAgHQAAgJgCgGQgCgHgEgEQgDgFgGgDQgFgCgHAAQgFAAgFACgAifEzIAAjIIAsAAIAAAGIAAAKIAAAAQANgUAfAAQAOAAANAGQAMAFAIAKQAIAKAFAOQAEAOAAARQABARgGANQgEAOgJALQgKAJgMAFQgMAGgOAAQgYAAgNgOIgBAAIABANIAAA2gAheCSQgFACgEAEQgEAFgCAHQgDAGAAAKQAAAGACAGQACAGADAFQAEAFAFADQAGADAGAAQAGAAAGgDQAEgCAFgEQADgFACgGQADgHAAgHQAAgJgCgGQgCgHgEgEQgDgFgGgDQgFgCgHAAQgFAAgFACgAIhD8QgIgCgIgDQgHgDgHgEIgKgKQgLgKgFgOQgFgNAAgOQAAgRAFgOQAGgNAJgKQAKgLAOgFIAOgFIARgBQAQAAAMAFQANAFAIAKQAJAJAFANQAEANAAAPIgCAPIhbAAQACAGAEAFQADAFAEAEQAJAFANAAQAUAAATgOIASAiQgYAVgmAAQgJAAgJgCgAJBCgQAAgJgFgFQgGgHgIAAQgJABgHAGQgFAFgDAJIArAAIAAAAgACyD4QgQgFgKgJIgKgMIgIgNQgDgHgCgHQgCgIAAgIQAAgJACgHQACgIADgHQAFgKANgOQAKgKAQgFQAJgEAWgCQALAAAWAGQAPAFALAKQANAOAEAKQADAHABAIQACAHAAAJQAAAIgCAIQgBAHgDAHIgHANIgKAMQgLAJgPAFQgPAGgSAAQgQAAgPgGgADFCSQgGACgEAFQgFAFgCAGQgDAHAAAIQAAAIADAGQACAHAFAEQAEAFAGACQAGACAGAAQAHAAAGgCQAGgCAFgFQAEgEACgHQAEgGAAgIQAAgIgEgHQgCgGgEgFQgFgFgGgCQgGgCgHAAQgGAAgGACgAnBD8QgJgCgHgDQgIgDgGgEIgLgKQgKgKgFgOQgGgNABgOQgBgRAGgOQAFgNAJgKQALgLAOgFIAOgFIAQgBQARAAAMAFQAMAFAJAKQAIAJAFANQAEANABAPIgCAPIhbAAQABAGAEAFQADAFAFAEQAJAFAMAAQAUAAAUgOIASAiQgYAVgmAAQgKAAgIgCgAmiCgQAAgJgEgFQgGgHgJAAQgJABgHAGQgFAFgCAJIAqAAIAAAAgAryD7QgJgEgGgFQgHgHgEgIQgDgJAAgKQAAgIACgHQADgGAFgEQAGgHARgIQASgGAggBIACAAIAAgDQAAgJgGgDQgFgEgKAAQgSAAgVAOIgRgjQAZgSAjAAQAQAAAMAEQAMAEAJAIQAIAHAEALQAFALAAAOIAABZIgsAAIAAgJIAAgJIAAAAQgLAVgfAAQgJAAgKgDgArUDAQgFACgDADQgCADgBAFQAAAFADADQAEAEAHAAQAJAAAHgIQAIgJgBgJIAAgCIgEAAQgNgBgJAEgAMkDzQgLgHgHgJQgDgHgCgHQgCgHAAgIIAAg0IgTAAIAAglIAVAAIAAgqIAvAAIAAAqIAeAAIAAAlIgeAAIAAAtQAAAGACADQADAEAEACQAHADAKAAIAGAAIAAAqIgNABQgdgCgOgHgApHDzQgMgHgGgJQgEgHgCgHQgCgHAAgIIAAg0IgSAAIAAglIATAAIAAgqIAvAAIAAAqIAfAAIAAAlIgfAAIAAAtQABAGADADQACAEAEACQAHADAJAAIAHAAIAAAqIgNABQgdgCgNgHgAKMD7IAAiQIAuAAIAAAXIAAAJIAAAAQADgHAEgGQAFgGAFgGQAHgEAHgDQAIgDAIAAIAFAAIAAAwIgKgBQgLAAgJAEQgGAEgEAFQgEAFgDAHQgCAJAAALIAAA3gAATD7IAAiQIAuAAIAAAXIgBAJIABAAQACgHAFgGQAEgGAGgGQAHgEAGgDQAIgDAIAAIAGAAIAAAwIgKgBQgMAAgJAEQgFAEgFAFQgEAFgCAHQgDAJAAALIAAA3gAlWD7IAAiQIAuAAIAAAXIAAAJIAAAAQACgHAFgGQAEgGAGgGQAHgEAGgDQAIgDAIAAIAGAAIAAAwIgLgBQgLAAgJAEQgGAEgEAFQgEAFgDAHQgCAJAAALIAAA3gAt4D7IgRhDIgCgQIgBAAIgCAQIgRBDIg2AAIgpiQIAzAAIASBUIACAQIAAAAIACgQIAVhUIApAAIAUBUIADAQIAAAAIACgQIAShUIAyAAIgoCQgACdhnQgIgBgHgDQgIgEgGgEIgLgJQgKgLgGgOQgEgNAAgPQAAgPAEgOQAGgOAKgKQAKgKANgHIAPgDIARgCQAQAAAMAFQAMAFAJAKQAJAJAEANQAFANgBAOIgBAPIhbAAQACAHADAFQADAFAEADQAJAHANAAQAVAAASgPIASAiQgXAVgmAAQgKAAgJgCgAC+jDQAAgIgGgHQgFgFgIAAQgKgBgHAHQgEAFgDAJIArAAIAAAAgArlhqQgPgGgLgKIgKgKIgHgOQgEgGgBgIQgCgIAAgIQAAgIACgJQABgHAEgHQAEgJANgPQALgKAPgGQAKgDAWgCQALAAAVAFQAPAGALAKQANAPAEAJQAEAHABAHQACAJAAAIQAAAIgCAIQgBAIgEAGIgHAOIgKAKQgLAKgPAGQgPAFgRAAQgRAAgPgFgArRjRQgHACgEAFQgEAEgDAHQgDAHAAAIQAAAHADAIQADAGAEAFQAEAEAHACQAGACAGABQAHgBAFgCQAHgCAEgEQAEgFADgGQADgIAAgHQAAgIgDgHQgDgHgEgEQgEgFgHgCQgFgCgHgBQgGABgGACgAjUhpQgKgCgHgGQgIgFgEgLQgFgMAAgRIAAiSIAxAAIAACMQgBALADADQADAFAIgBIAGAAIAAAqIgPABQgLAAgIgCgAmIhxQgLgFgHgLQgDgGgCgGQgCgIAAgJIAAgzIgTAAIAAglIAVAAIAAgpIAvAAIAAApIAeAAIAAAlIgeAAIAAAtQAAAFACAEQADAEAEACQAHADAKAAIAGAAIAAAqIgNABQgdgBgOgJgAAZhpIAAhUQgBgKgEgFQgDgEgIAAQgKAAgHAFQgIAGgDAKQgDAHAAAMIAAA/IgwAAIAAiQIAuAAIAAANIAAAJIAAAAQAHgLAKgGQAFgDAGgCQAIgDAJAAQAMAAAIADQAKACAHAHQAHAGAEALQAEAKAAAPIAABdgAiahpIAAiQIAxAAIAACQgAn7hpIAAhUQAAgKgDgFQgEgEgIAAQgLAAgHAFQgIAGgDAKQgCAHgBAMIAAA/IgwAAIAAiQIAvAAIAAANIgBAJIABAAQAFgLALgGQAGgDAGgCQAIgDAJAAQAMAAAIADQAKACAHAHQAHAGAEALQAEAKAAAPIAABdgAuEhpIAAiQIAvAAIAAAZIgBAJIABAAQACgIAEgGQAEgHAHgEQAGgFAHgEQAHgCAIAAIAGABIAAAvIgKgBQgMAAgIAEQgGAEgEAEQgFAGgCAIQgCAIgBALIAAA2gAvmhpIAAhoIgSAAIAAglIASAAIAAgGQgBgJACgHQACgGAEgHQAFgJAMgGQANgIAcgBIAPAAIAAApIgIgBQgJAAgHACQgIAEAAAJIAAAEIAaAAIAAAlIgaAAIAABogAiZkLIAAglIAvAAIAAAlgAgGmUIAAg5IABgNIgBAAQgMARgaAAQgPAAgMgGQgMgFgIgKQgJgLgFgNQgFgOABgRQAAgRAEgOQAFgNAJgLQAJgJAMgFQAMgGAPAAQAdAAALAQIABAAIgBgIIAAgFIAtAAIAADJgAgro1QgFADgEAEQgEAEgDAHQgCAGABAIQgBAIACAHQACAGAEAFQAEAFAFACQAGADAFAAQAGAAAFgCQAGgDADgEQAEgEACgHQADgGAAgKQAAgHgCgGQgCgFgDgFQgEgGgFgCQgFgDgIAAQgFAAgFACgAExnLQgJgCgHgDQgIgDgGgEIgLgKQgKgKgGgOQgEgNAAgPQAAgQAEgOQAGgNAJgLQALgJAOgGIAOgFIAQgBQAQAAANAFQAMAFAJAKQAIAJAFANQAFANAAAPIgCAOIhbAAQABAHAEAFQADAFAFAEQAIAFANAAQAUAAAUgOIASAiQgYAVgmAAQgJAAgJgCgAFQonQAAgJgEgFQgGgHgJAAQgJABgHAGQgFAFgCAJIAqAAIAAAAgABrnMQgKgDgGgGQgIgHgDgJQgFgMAAgOIAAheIAxAAIAABVQAAAKAEAEQAEAFAHAAQAIAAAGgDQAGgDAEgGQADgFACgIQACgGAAgJIAAhAIAwAAIAACQIguAAIAAgMIAAgJIAAAAQgDAGgFAEQgFAFgFADQgHAEgGABQgHACgHAAQgLAAgJgDgAn9nMQgKgDgGgGQgIgHgDgJQgEgMAAgOIAAheIAwAAIAABVQAAAKAFAEQADAFAIAAQAHAAAGgDQAGgDAEgGQADgFADgIQABgGAAgJIAAhAIAxAAIAACQIgvAAIAAgMIABgJIgBAAQgCAGgFAEQgFAFgGADQgGAEgHABQgHACgHAAQgLAAgJgDgAtdnPQgPgFgLgJIgKgMIgIgMQgDgIgBgHQgCgIAAgIQAAgJACgHQABgIADgHQAFgKANgOQALgKAPgFQAJgEAXgCQALAAAVAGQAPAFALAKQANAOAEAKQADAHACAIQACAHAAAJQAAAIgCAIQgCAHgDAIIgHAMIgKAMQgLAJgPAFQgPAGgRAAQgRAAgPgGgAtKo1QgFACgFAFQgFAEgCAHQgCAHAAAIQAAAIACAGQACAHAFAEQAFAFAFACQAHACAGAAQAHAAAGgCQAFgCAFgFQAEgEADgHQADgGAAgIQAAgIgDgHQgDgHgEgEQgFgFgFgCQgGgCgHAAQgGAAgHACgAi4nNIAAiQIAxAAIAACQgAkKnNIAAhUQAAgKgEgFQgDgEgJAAQgKAAgIAGQgHAFgEAJQgCAJAAAKIAABAIgwAAIAAiQIAuAAIAAANIAAAJIAAAAQAGgKAKgHQAGgEAHgCQAIgCAJAAQALAAAJACQAKAEAHAFQAHAHADAKQAEALABAPIAABdgArSnNIAAiQIAvAAIAAAYIgBAJIABAAQACgHAEgGQAEgGAHgGQAGgEAHgEQAHgCAJAAIAFAAIAAAwIgKgBQgMAAgIAFQgGACgEAGQgEAFgDAHQgDAJABALIAAA2gAvmnNIAAhnIgSAAIAAgmIASAAIAAgGQgBgJACgHQACgHAEgFQAFgKAMgHQANgHAcgCIAPABIAAApIgIAAQgJAAgHACQgIADAAAIIAAAFIAaAAIAAAmIgaAAIAABngAi3pvIAAgmIAwAAIAAAmg");
	this.shape.setTransform(190.7,109.6);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(88.4,43.3,204.6,132.5), null);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 copy
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("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");
	this.shape.setTransform(151.1,36.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol3, new cjs.Rectangle(88.4,8.3,125.4,56), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1 copy
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("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");
	this.shape.setTransform(117.9,118.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#B29F5E").s().p("AA/G7IAAhlIC2AAIAAiGIBkAAIAADrgAlUG7IAAjwIBlAAIAACLIC2AAIAABlgADwBTIAAiMIjyjzIjyDzIAACMIhkAAIAAi3IAKAAIgFgFIFRlRIFQFRIgEAFIAKAAIAAC3g");
	this.shape_1.setTransform(34.5,44.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AjCEpIAApRIGFAAIAABeIkjAAIAACeID2AAIAABdIj2AAIAACdIEjAAIAABbg");
	this.shape_2.setTransform(165.5,61);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AjCEpIAApRIGFAAIAABeIkkAAIAACeID3AAIAABdIj3AAIAACdIEkAAIAABbg");
	this.shape_3.setTransform(215.5,61);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AhvEUQgugagagyQgagyAAhEIAAiiQAAhEAagzQAZgyAvgaQAwgbBAAAQA2AAArAXQAsAYAcAqQAdAsALA6IhlAAQgHgdgQgWQgQgVgWgLQgWgMgZAAQgzAAgdAiQgdAjAAA5IAACiQAAA5AdAiQAdAhAzAAQAlAAAfgWQAegWAKgpIBlAAQgLA3gdAqQgdApgrAWQgrAWg2AAQhAAAgwgbg");
	this.shape_4.setTransform(114,61);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer 1
	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("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");
	this.shape_5.setTransform(119.2,119.6);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#000000").s().p("AA/G7IAAhlIC2AAIAAiGIBkAAIAADrgAlUG7IAAjwIBlAAIAACLIC2AAIAABlgADwBTIAAiMIjyjzIjyDzIAACMIhkAAIAAi3IAKAAIgFgFIFRlRIFQFRIgEAFIAKAAIAAC3g");
	this.shape_6.setTransform(35.8,45.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#000000").s().p("AjCEpIAApRIGFAAIAABeIkjAAIAACeID2AAIAABdIj2AAIAACdIEjAAIAABbg");
	this.shape_7.setTransform(166.8,62.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#000000").s().p("AjCEpIAApRIGFAAIAABeIkkAAIAACeID3AAIAABdIj3AAIAACdIEkAAIAABbg");
	this.shape_8.setTransform(216.8,62.3);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#000000").s().p("AhvEUQgugagagyQgagyAAhEIAAiiQAAhEAagzQAZgyAvgaQAwgbBAAAQA2AAArAXQAsAYAcAqQAdAsALA6IhlAAQgHgdgQgWQgQgVgWgLQgWgMgZAAQgzAAgdAiQgdAjAAA5IAACiQAAA5AdAiQAdAhAzAAQAlAAAfgWQAegWAKgpIBlAAQgLA3gdAqQgdApgrAWQgrAWg2AAQhAAAgwgbg");
	this.shape_9.setTransform(115.3,62.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,236.3,132.8), null);


(lib.stvorec = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_599 = function() {
		if (!this.looped) this.looped = 1;
		if (this.looped++ == 2) this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(599).call(this.frame_599).wait(1));

	// Layer 11
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#B59F53").ss(3,1,1).p("AAKgJIgTAT");
	this.shape.setTransform(86.2,207.3);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f().s("#B59F53").ss(3,1,1).p("AgpApIBShR");
	this.shape_1.setTransform(83.1,210.4);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#B59F53").ss(3,1,1).p("AhIBIICRiP");
	this.shape_2.setTransform(79.9,213.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f().s("#B59F53").ss(3,1,1).p("AhoBnIDRjN");
	this.shape_3.setTransform(76.8,216.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f().s("#B59F53").ss(3,1,1).p("AiHCGIEPkL");
	this.shape_4.setTransform(73.6,219.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f().s("#B59F53").ss(3,1,1).p("AinClIFPlJ");
	this.shape_5.setTransform(70.5,222.8);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#B59F53").ss(3,1,1).p("AjGDEIGNmH");
	this.shape_6.setTransform(67.3,225.9);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f().s("#B59F53").ss(3,1,1).p("AjmDjIHMnF");
	this.shape_7.setTransform(64.2,229);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f().s("#B59F53").ss(3,1,1).p("AkFECIILoD");
	this.shape_8.setTransform(61,232.1);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f().s("#B59F53").ss(3,1,1).p("AkkEhIJKpB");
	this.shape_9.setTransform(57.9,235.2);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f().s("#B59F53").ss(3,1,1).p("AFFk/IqJJ/");
	this.shape_10.setTransform(54.7,238.3);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("rgba(181,159,83,0.929)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_11.setTransform(54.7,238.3);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f().s("rgba(181,159,83,0.859)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_12.setTransform(54.7,238.3);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f().s("rgba(181,159,83,0.788)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_13.setTransform(54.7,238.3);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f().s("rgba(181,159,83,0.718)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_14.setTransform(54.7,238.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f().s("rgba(181,159,83,0.647)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_15.setTransform(54.7,238.3);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f().s("rgba(181,159,83,0.576)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_16.setTransform(54.7,238.3);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f().s("rgba(181,159,83,0.506)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_17.setTransform(54.7,238.3);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f().s("rgba(181,159,83,0.431)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_18.setTransform(54.7,238.3);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f().s("rgba(181,159,83,0.361)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_19.setTransform(54.7,238.3);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f().s("rgba(181,159,83,0.29)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_20.setTransform(54.7,238.3);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f().s("rgba(181,159,83,0.22)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_21.setTransform(54.7,238.3);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f().s("rgba(181,159,83,0.149)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_22.setTransform(54.7,238.3);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f().s("rgba(181,159,83,0.078)").ss(3,1,1).p("AlEFAIKJp/");
	this.shape_23.setTransform(54.7,238.3);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f().s("rgba(181,159,83,0.008)").ss(3,1,1).p("AFFk/IqJJ/");
	this.shape_24.setTransform(54.7,238.3);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape}]},359).to({state:[{t:this.shape_1}]},1).to({state:[{t:this.shape_2}]},1).to({state:[{t:this.shape_3}]},1).to({state:[{t:this.shape_4}]},1).to({state:[{t:this.shape_5}]},1).to({state:[{t:this.shape_6}]},1).to({state:[{t:this.shape_7}]},1).to({state:[{t:this.shape_8}]},1).to({state:[{t:this.shape_9}]},1).to({state:[{t:this.shape_10}]},1).to({state:[{t:this.shape_10}]},79).to({state:[{t:this.shape_11}]},1).to({state:[{t:this.shape_12}]},1).to({state:[{t:this.shape_13}]},1).to({state:[{t:this.shape_14}]},1).to({state:[{t:this.shape_15}]},1).to({state:[{t:this.shape_16}]},1).to({state:[{t:this.shape_17}]},1).to({state:[{t:this.shape_18}]},1).to({state:[{t:this.shape_19}]},1).to({state:[{t:this.shape_20}]},1).to({state:[{t:this.shape_21}]},1).to({state:[{t:this.shape_22}]},1).to({state:[{t:this.shape_23}]},1).to({state:[{t:this.shape_24}]},1).wait(138));

	// Layer 10
	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f().s("#B59F53").ss(3,1,1).p("AANACIgZgD");
	this.shape_25.setTransform(272.2,218);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f().s("#B59F53").ss(3,1,1).p("AhygHIDlAP");
	this.shape_26.setTransform(262,217.4);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f().s("#B59F53").ss(3,1,1).p("AjYgNIGxAb");
	this.shape_27.setTransform(251.8,216.7);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f().s("#B59F53").ss(3,1,1).p("Ak+gUIJ9Ap");
	this.shape_28.setTransform(241.6,216.1);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f().s("#B59F53").ss(3,1,1).p("AmkgaINJA1");
	this.shape_29.setTransform(231.4,215.4);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f().s("#B59F53").ss(3,1,1).p("AoKghIQVBC");
	this.shape_30.setTransform(221.1,214.8);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f().s("#B59F53").ss(3,1,1).p("ApwgnIThBP");
	this.shape_31.setTransform(210.9,214.2);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f().s("#B59F53").ss(3,1,1).p("ArWguIWtBd");
	this.shape_32.setTransform(200.7,213.5);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f().s("#B59F53").ss(3,1,1).p("As8g0IZ5Bp");
	this.shape_33.setTransform(190.5,212.9);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f().s("#B59F53").ss(3,1,1).p("AOjA7I9Fh1");
	this.shape_34.setTransform(180.3,212.2);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f().s("rgba(181,159,83,0.929)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_35.setTransform(180.3,212.2);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f().s("rgba(181,159,83,0.859)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_36.setTransform(180.3,212.2);

	this.shape_37 = new cjs.Shape();
	this.shape_37.graphics.f().s("rgba(181,159,83,0.788)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_37.setTransform(180.3,212.2);

	this.shape_38 = new cjs.Shape();
	this.shape_38.graphics.f().s("rgba(181,159,83,0.718)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_38.setTransform(180.3,212.2);

	this.shape_39 = new cjs.Shape();
	this.shape_39.graphics.f().s("rgba(181,159,83,0.647)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_39.setTransform(180.3,212.2);

	this.shape_40 = new cjs.Shape();
	this.shape_40.graphics.f().s("rgba(181,159,83,0.576)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_40.setTransform(180.3,212.2);

	this.shape_41 = new cjs.Shape();
	this.shape_41.graphics.f().s("rgba(181,159,83,0.506)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_41.setTransform(180.3,212.2);

	this.shape_42 = new cjs.Shape();
	this.shape_42.graphics.f().s("rgba(181,159,83,0.431)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_42.setTransform(180.3,212.2);

	this.shape_43 = new cjs.Shape();
	this.shape_43.graphics.f().s("rgba(181,159,83,0.361)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_43.setTransform(180.3,212.2);

	this.shape_44 = new cjs.Shape();
	this.shape_44.graphics.f().s("rgba(181,159,83,0.29)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_44.setTransform(180.3,212.2);

	this.shape_45 = new cjs.Shape();
	this.shape_45.graphics.f().s("rgba(181,159,83,0.22)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_45.setTransform(180.3,212.2);

	this.shape_46 = new cjs.Shape();
	this.shape_46.graphics.f().s("rgba(181,159,83,0.149)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_46.setTransform(180.3,212.2);

	this.shape_47 = new cjs.Shape();
	this.shape_47.graphics.f().s("rgba(181,159,83,0.078)").ss(3,1,1).p("Auig6IdFB1");
	this.shape_47.setTransform(180.3,212.2);

	this.shape_48 = new cjs.Shape();
	this.shape_48.graphics.f().s("rgba(181,159,83,0.008)").ss(3,1,1).p("AlpgWIo5gkAOjA7I0MhR");
	this.shape_48.setTransform(180.3,212.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_25}]},350).to({state:[{t:this.shape_26}]},1).to({state:[{t:this.shape_27}]},1).to({state:[{t:this.shape_28}]},1).to({state:[{t:this.shape_29}]},1).to({state:[{t:this.shape_30}]},1).to({state:[{t:this.shape_31}]},1).to({state:[{t:this.shape_32}]},1).to({state:[{t:this.shape_33}]},1).to({state:[{t:this.shape_34}]},1).to({state:[{t:this.shape_34}]},89).to({state:[{t:this.shape_35}]},1).to({state:[{t:this.shape_36}]},1).to({state:[{t:this.shape_37}]},1).to({state:[{t:this.shape_38}]},1).to({state:[{t:this.shape_39}]},1).to({state:[{t:this.shape_40}]},1).to({state:[{t:this.shape_41}]},1).to({state:[{t:this.shape_42}]},1).to({state:[{t:this.shape_43}]},1).to({state:[{t:this.shape_44}]},1).to({state:[{t:this.shape_45}]},1).to({state:[{t:this.shape_46}]},1).to({state:[{t:this.shape_47}]},1).to({state:[{t:this.shape_48}]},1).wait(138));

	// Layer 9
	this.shape_49 = new cjs.Shape();
	this.shape_49.graphics.f().s("#B59F53").ss(3,1,1).p("AgDANIAIgZ");
	this.shape_49.setTransform(243.5,298.5);

	this.shape_50 = new cjs.Shape();
	this.shape_50.graphics.f().s("#B59F53").ss(3,1,1).p("AgUA5IAphw");
	this.shape_50.setTransform(245.1,294.1);

	this.shape_51 = new cjs.Shape();
	this.shape_51.graphics.f().s("#B59F53").ss(3,1,1).p("AgkBkIBJjH");
	this.shape_51.setTransform(246.7,289.7);

	this.shape_52 = new cjs.Shape();
	this.shape_52.graphics.f().s("#B59F53").ss(3,1,1).p("Ag1CQIBrkf");
	this.shape_52.setTransform(248.4,285.3);

	this.shape_53 = new cjs.Shape();
	this.shape_53.graphics.f().s("#B59F53").ss(3,1,1).p("AhFC8ICLl3");
	this.shape_53.setTransform(250,280.9);

	this.shape_54 = new cjs.Shape();
	this.shape_54.graphics.f().s("#B59F53").ss(3,1,1).p("AhWDoICsnP");
	this.shape_54.setTransform(251.7,276.5);

	this.shape_55 = new cjs.Shape();
	this.shape_55.graphics.f().s("#B59F53").ss(3,1,1).p("AhmEUIDNon");
	this.shape_55.setTransform(253.3,272.1);

	this.shape_56 = new cjs.Shape();
	this.shape_56.graphics.f().s("#B59F53").ss(3,1,1).p("Ah2FAIDtp/");
	this.shape_56.setTransform(255,267.7);

	this.shape_57 = new cjs.Shape();
	this.shape_57.graphics.f().s("#B59F53").ss(3,1,1).p("AiHFsIEPrX");
	this.shape_57.setTransform(256.6,263.3);

	this.shape_58 = new cjs.Shape();
	this.shape_58.graphics.f().s("#B59F53").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_58.setTransform(258.2,258.9);

	this.shape_59 = new cjs.Shape();
	this.shape_59.graphics.f().s("rgba(181,159,83,0.929)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_59.setTransform(258.2,258.9);

	this.shape_60 = new cjs.Shape();
	this.shape_60.graphics.f().s("rgba(181,159,83,0.859)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_60.setTransform(258.2,258.9);

	this.shape_61 = new cjs.Shape();
	this.shape_61.graphics.f().s("rgba(181,159,83,0.788)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_61.setTransform(258.2,258.9);

	this.shape_62 = new cjs.Shape();
	this.shape_62.graphics.f().s("rgba(181,159,83,0.718)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_62.setTransform(258.2,258.9);

	this.shape_63 = new cjs.Shape();
	this.shape_63.graphics.f().s("rgba(181,159,83,0.647)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_63.setTransform(258.2,258.9);

	this.shape_64 = new cjs.Shape();
	this.shape_64.graphics.f().s("rgba(181,159,83,0.576)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_64.setTransform(258.2,258.9);

	this.shape_65 = new cjs.Shape();
	this.shape_65.graphics.f().s("rgba(181,159,83,0.506)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_65.setTransform(258.2,258.9);

	this.shape_66 = new cjs.Shape();
	this.shape_66.graphics.f().s("rgba(181,159,83,0.431)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_66.setTransform(258.2,258.9);

	this.shape_67 = new cjs.Shape();
	this.shape_67.graphics.f().s("rgba(181,159,83,0.361)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_67.setTransform(258.2,258.9);

	this.shape_68 = new cjs.Shape();
	this.shape_68.graphics.f().s("rgba(181,159,83,0.29)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_68.setTransform(258.2,258.9);

	this.shape_69 = new cjs.Shape();
	this.shape_69.graphics.f().s("rgba(181,159,83,0.22)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_69.setTransform(258.2,258.9);

	this.shape_70 = new cjs.Shape();
	this.shape_70.graphics.f().s("rgba(181,159,83,0.149)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_70.setTransform(258.2,258.9);

	this.shape_71 = new cjs.Shape();
	this.shape_71.graphics.f().s("rgba(181,159,83,0.078)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_71.setTransform(258.2,258.9);

	this.shape_72 = new cjs.Shape();
	this.shape_72.graphics.f().s("rgba(181,159,83,0.008)").ss(3,1,1).p("AiXGYIEvsv");
	this.shape_72.setTransform(258.2,258.9);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_49}]},341).to({state:[{t:this.shape_50}]},1).to({state:[{t:this.shape_51}]},1).to({state:[{t:this.shape_52}]},1).to({state:[{t:this.shape_53}]},1).to({state:[{t:this.shape_54}]},1).to({state:[{t:this.shape_55}]},1).to({state:[{t:this.shape_56}]},1).to({state:[{t:this.shape_57}]},1).to({state:[{t:this.shape_58}]},1).to({state:[{t:this.shape_58}]},98).to({state:[{t:this.shape_59}]},1).to({state:[{t:this.shape_60}]},1).to({state:[{t:this.shape_61}]},1).to({state:[{t:this.shape_62}]},1).to({state:[{t:this.shape_63}]},1).to({state:[{t:this.shape_64}]},1).to({state:[{t:this.shape_65}]},1).to({state:[{t:this.shape_66}]},1).to({state:[{t:this.shape_67}]},1).to({state:[{t:this.shape_68}]},1).to({state:[{t:this.shape_69}]},1).to({state:[{t:this.shape_70}]},1).to({state:[{t:this.shape_71}]},1).to({state:[{t:this.shape_72}]},1).wait(138));

	// Layer 8
	this.shape_73 = new cjs.Shape();
	this.shape_73.graphics.f().s("#B59F53").ss(3,1,1).p("AgLgBIAXAD");
	this.shape_73.setTransform(23.4,270.5);

	this.shape_74 = new cjs.Shape();
	this.shape_74.graphics.f().s("#B59F53").ss(3,1,1).p("AhvgPIDeAe");
	this.shape_74.setTransform(33.4,271.9);

	this.shape_75 = new cjs.Shape();
	this.shape_75.graphics.f().s("#B59F53").ss(3,1,1).p("AjSgbIGlA4");
	this.shape_75.setTransform(43.3,273.2);

	this.shape_76 = new cjs.Shape();
	this.shape_76.graphics.f().s("#B59F53").ss(3,1,1).p("Ak1gpIJrBT");
	this.shape_76.setTransform(53.2,274.5);

	this.shape_77 = new cjs.Shape();
	this.shape_77.graphics.f().s("#B59F53").ss(3,1,1).p("AmYg2IMxBt");
	this.shape_77.setTransform(63.1,275.8);

	this.shape_78 = new cjs.Shape();
	this.shape_78.graphics.f().s("#B59F53").ss(3,1,1).p("An7hDIP4CH");
	this.shape_78.setTransform(73.1,277.1);

	this.shape_79 = new cjs.Shape();
	this.shape_79.graphics.f().s("#B59F53").ss(3,1,1).p("ApfhQIS/Ch");
	this.shape_79.setTransform(83,278.4);

	this.shape_80 = new cjs.Shape();
	this.shape_80.graphics.f().s("#B59F53").ss(3,1,1).p("ArChdIWFC7");
	this.shape_80.setTransform(92.9,279.7);

	this.shape_81 = new cjs.Shape();
	this.shape_81.graphics.f().s("#B59F53").ss(3,1,1).p("AslhrIZLDX");
	this.shape_81.setTransform(102.8,281.1);

	this.shape_82 = new cjs.Shape();
	this.shape_82.graphics.f().s("#B59F53").ss(3,1,1).p("AuJh4IcTDx");
	this.shape_82.setTransform(112.8,282.4);

	this.shape_83 = new cjs.Shape();
	this.shape_83.graphics.f().s("#B59F53").ss(3,1,1).p("AvsiFIfZEL");
	this.shape_83.setTransform(122.7,283.7);

	this.shape_84 = new cjs.Shape();
	this.shape_84.graphics.f().s("#B59F53").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_84.setTransform(132.6,285);

	this.shape_85 = new cjs.Shape();
	this.shape_85.graphics.f().s("rgba(181,159,83,0.929)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_85.setTransform(132.6,285);

	this.shape_86 = new cjs.Shape();
	this.shape_86.graphics.f().s("rgba(181,159,83,0.859)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_86.setTransform(132.6,285);

	this.shape_87 = new cjs.Shape();
	this.shape_87.graphics.f().s("rgba(181,159,83,0.788)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_87.setTransform(132.6,285);

	this.shape_88 = new cjs.Shape();
	this.shape_88.graphics.f().s("rgba(181,159,83,0.718)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_88.setTransform(132.6,285);

	this.shape_89 = new cjs.Shape();
	this.shape_89.graphics.f().s("rgba(181,159,83,0.647)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_89.setTransform(132.6,285);

	this.shape_90 = new cjs.Shape();
	this.shape_90.graphics.f().s("rgba(181,159,83,0.576)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_90.setTransform(132.6,285);

	this.shape_91 = new cjs.Shape();
	this.shape_91.graphics.f().s("rgba(181,159,83,0.506)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_91.setTransform(132.6,285);

	this.shape_92 = new cjs.Shape();
	this.shape_92.graphics.f().s("rgba(181,159,83,0.431)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_92.setTransform(132.6,285);

	this.shape_93 = new cjs.Shape();
	this.shape_93.graphics.f().s("rgba(181,159,83,0.361)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_93.setTransform(132.6,285);

	this.shape_94 = new cjs.Shape();
	this.shape_94.graphics.f().s("rgba(181,159,83,0.29)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_94.setTransform(132.6,285);

	this.shape_95 = new cjs.Shape();
	this.shape_95.graphics.f().s("rgba(181,159,83,0.22)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_95.setTransform(132.6,285);

	this.shape_96 = new cjs.Shape();
	this.shape_96.graphics.f().s("rgba(181,159,83,0.149)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_96.setTransform(132.6,285);

	this.shape_97 = new cjs.Shape();
	this.shape_97.graphics.f().s("rgba(181,159,83,0.078)").ss(3,1,1).p("AxPiSMAifAEl");
	this.shape_97.setTransform(132.6,285);

	this.shape_98 = new cjs.Shape();
	this.shape_98.graphics.f().s("rgba(181,159,83,0.008)").ss(3,1,1).p("AxPiSITCChIPdCE");
	this.shape_98.setTransform(132.6,285);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[]}).to({state:[{t:this.shape_73}]},330).to({state:[{t:this.shape_74}]},1).to({state:[{t:this.shape_75}]},1).to({state:[{t:this.shape_76}]},1).to({state:[{t:this.shape_77}]},1).to({state:[{t:this.shape_78}]},1).to({state:[{t:this.shape_79}]},1).to({state:[{t:this.shape_80}]},1).to({state:[{t:this.shape_81}]},1).to({state:[{t:this.shape_82}]},1).to({state:[{t:this.shape_83}]},1).to({state:[{t:this.shape_84}]},1).to({state:[{t:this.shape_84}]},107).to({state:[{t:this.shape_85}]},1).to({state:[{t:this.shape_86}]},1).to({state:[{t:this.shape_87}]},1).to({state:[{t:this.shape_88}]},1).to({state:[{t:this.shape_89}]},1).to({state:[{t:this.shape_90}]},1).to({state:[{t:this.shape_91}]},1).to({state:[{t:this.shape_92}]},1).to({state:[{t:this.shape_93}]},1).to({state:[{t:this.shape_94}]},1).to({state:[{t:this.shape_95}]},1).to({state:[{t:this.shape_96}]},1).to({state:[{t:this.shape_97}]},1).to({state:[{t:this.shape_98}]},1).wait(138));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.btn = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("ACRCoIgOgEIgNgGIgKgJIgIgLIgHgNQgDgGgBgHIgBgPIABgPQABgGADgHIAHgMQADgFAFgFIAKgJIANgGQAGgDAIgBQAHgBAHgBQAIABAGABQAIABAGADIAMAGIAKAJIAJAKIAHAMQADAHABAGIACAPQAAAHgCAIQgBAHgDAGIgHANIgJALIgKAJIgMAGIgOAEQgGABgIABQgHgBgHgBgACOA1QgJADgHAHQgFAHgEAIQgDAJAAAKQAAAKADAJQAEAJAFAIQAHAGAJAEQAHADAKAAQAJAAAJgDQAIgEAGgGQAHgIACgJQAFgJAAgKQAAgKgFgJQgCgIgHgHQgGgHgIgDQgJgEgJABQgKgBgHAEgAgKCnIAAiLIBOAAIAAAWIg2AAIAAAnIAuAAIAAAXIguAAIAAA3gAhMCnIgzhPIgMgWIgBAAIACAWIAABPIgZAAIAAiLIAZAAIA0BQIAMAWIgCgWIAAhQIAZAAIAACLgAjlCnIAAiLIAZAAIAACLgAg1gbIgNgEIgNgGIgKgJIgJgLIgGgNIgEgNQgBgIAAgIIABgNIAEgOIAGgMIAJgKIAKgJIANgGQAGgDAHgBQAIgCAIAAQAHAAAHACQAHABAHADIAKAGIALAJIAJAKIAGAMQADAGABAIQACAHAAAGQAAAIgCAIQgBAHgDAGIgGANIgJALIgLAJIgKAGIgOAEQgHACgHgBQgIABgIgCgAg4iOQgIADgHAHQgFAGgEAJQgDAJAAAJQAAAMADAIQAEAKAFAGQAHAHAIAEQAJAEAKAAQAIAAAJgEQAIgEAGgHQAGgGADgKQAEgIAAgMQAAgJgEgJQgDgJgGgGQgGgHgIgDQgJgDgIAAQgKAAgJADgADEgcIAAiKIBTAAIAAAVIg5AAIAAAkIAuAAIAAAWIguAAIAAAmIA8AAIAAAVgACLgcIgbg0IgXAAIAAA0IgaAAIAAiKIAtAAIARABQAGAAAEADQAGACAEAEIAIAIQACAEABAHQACAGAAAGQAAAGgCAHIgDALIgIAIQgEAEgGACIAAAAIAEAHIAdA0gABZhlIAWAAIAIgBQAFgCACgDIAFgHQACgEAAgGQAAgFgBgDIgFgHQgCgDgGgCQgFgBgGAAIgTAAgAihgcIgGhOIAAgVIgIAVIgWA2IgXAAIgVg2IgIgVIAAAVIgHBOIgZAAIAMiKIAbAAIAbBEIAHAUIABAAIAGgUIAahEIAcAAIALCKg");
	this.shape.setTransform(76.5,28.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	// Layer 3
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#C3B47E").s().p("AooFCQhQAAAAhQIAAnkQAAhPBQAAIRRAAQBQAAAABPIAAHkQAABQhQAAg");
	this.shape_1.setTransform(76.8,28.3);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1));

}).prototype = getMCSymbolPrototype(lib.btn, new cjs.Rectangle(13.5,-4,126.6,64.5), null);


(lib.Symbol15 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol13();
	this.instance.parent = this;
	this.instance.setTransform(158.5,126.5,1,1,0,0,0,158.5,126.5);
	this.instance.alpha = 0.281;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol15, new cjs.Rectangle(0,0,317,253), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_599 = function() {
		if (!this.looped) this.looped = 1;
		if (this.looped++ == 2) this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(599).call(this.frame_599).wait(1));

	// Layer 1 copy 2
	this.instance = new lib.Symbol5();
	this.instance.parent = this;
	this.instance.setTransform(131,90.1,1,1,0,0,0,193,18.8);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(107).to({_off:false},0).to({x:193,alpha:1},20,cjs.Ease.get(1)).wait(473));

	// Layer 1 copy
	this.instance_1 = new lib.Symbol4();
	this.instance_1.parent = this;
	this.instance_1.setTransform(193,54.5,1,1,0,0,0,193,18.8);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(66).to({_off:false},0).to({alpha:1},20,cjs.Ease.get(1)).wait(514));

	// Layer 1
	this.instance_2 = new lib.Symbol3();
	this.instance_2.parent = this;
	this.instance_2.setTransform(255,18.8,1,1,0,0,0,193,18.8);
	this.instance_2.alpha = 0;
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(25).to({_off:false},0).to({x:193,alpha:1},20,cjs.Ease.get(1)).wait(555));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.btmmc = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_599 = function() {
		if (!this.looped) this.looped = 1;
		if (this.looped++ == 2) this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(599).call(this.frame_599).wait(1));

	// btn
	this.instance = new lib.btn();
	this.instance.parent = this;
	this.instance.setTransform(79.2,560.6,0.48,0.48,0,0,0,77.1,28.4);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(369).to({_off:false},0).to({alpha:1},26).wait(109).to({regX:77.2,scaleX:0.53,scaleY:0.53,x:79.3},15,cjs.Ease.get(1)).to({regX:77.1,scaleX:0.48,scaleY:0.48,x:79.2},11,cjs.Ease.get(-1)).to({regX:77.2,scaleX:0.53,scaleY:0.53,x:79.3},16,cjs.Ease.get(1)).to({regX:77.1,scaleX:0.48,scaleY:0.48,x:79.2},11,cjs.Ease.get(-1)).wait(43));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.Symbol16 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol14();
	this.instance.parent = this;
	this.instance.setTransform(158.5,263,1,1,0,0,0,158.5,263);

	this.instance_1 = new lib.Symbol15();
	this.instance_1.parent = this;
	this.instance_1.setTransform(158.5,403.5,1,1,0,0,0,158.5,126.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_1},{t:this.instance}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol16, new cjs.Rectangle(0,-684.5,317,1214.5), null);


// stage content:
(lib._160x600 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_599 = function() {
		if (!this.looped) this.looped = 1;
		if (this.looped++ == 2) this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(599).call(this.frame_599).wait(1));

	// logo
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(56.3,44.6,0.323,0.323,0,0,0,117.9,66.5);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(600));

	// btm mc
	this.instance_1 = new lib.btmmc();
	this.instance_1.parent = this;
	this.instance_1.setTransform(79.8,539.2,1.644,1.644,0,0,0,78.9,560.3);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(600));

	// Layer 12
	this.instance_2 = new lib.stvorec();
	this.instance_2.parent = this;
	this.instance_2.setTransform(78.1,411.4,0.522,0.522,0,0,0,147.9,252.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(600));

	// txt
	this.instance_3 = new lib.Symbol2();
	this.instance_3.parent = this;
	this.instance_3.setTransform(15.6,91.9,0.628,0.628,0,0,0,85.9,0.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(600));

	// Layer 1
	this.instance_4 = new lib.Symbol16();
	this.instance_4.parent = this;
	this.instance_4.setTransform(80.3,482,0.533,0.533,0,0,0,158.5,264.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({y:159.5},24,cjs.Ease.get(1)).wait(576));

	// pic2
	this.instance_5 = new lib.Tween4("synched",0);
	this.instance_5.parent = this;
	this.instance_5.setTransform(-27.9,444.1,0.533,0.533,0,0,0,0.1,0);
	this.instance_5.alpha = 0.281;
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(150).to({_off:false},0).to({regX:0,regY:0.1,x:-23.6,y:444.2,alpha:1},24).to({regX:0.1,regY:0,x:0.1,y:444.1},131).wait(1).to({regX:34,regY:-8,x:18.4,y:439.9},0).wait(1).to({x:19.3},0).wait(1).to({x:20.9},0).wait(1).to({x:23.2},0).wait(1).to({x:26.5},0).wait(1).to({x:30.8},0).wait(1).to({x:36.3},0).wait(1).to({x:43.2},0).wait(1).to({x:51.5},0).wait(1).to({x:61.3},0).wait(1).to({x:72.3},0).wait(1).to({x:84.1},0).wait(1).to({x:95.9},0).wait(1).to({x:107.1},0).wait(1).to({x:117.1},0).wait(1).to({x:125.8},0).wait(1).to({x:133},0).wait(1).to({x:139},0).wait(1).to({x:143.8},0).wait(1).to({x:147.5},0).wait(1).to({x:150.4},0).wait(1).to({x:152.4},0).wait(1).to({x:153.8},0).wait(1).to({x:154.6},0).wait(1).to({regX:0.1,regY:0,x:136.7,y:444.1},0).wait(118).to({startPosition:0},0).to({alpha:0},30).wait(122));

	// pic1
	this.instance_6 = new lib.Tween1("synched",0);
	this.instance_6.parent = this;
	this.instance_6.setTransform(513.1,442,0.533,0.533);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).to({x:434.7},349).wait(1).to({regX:0.1,x:432.3},0).wait(250));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(43.8,275.7,321,647.7);
// library properties:
lib.properties = {
	id: '35BD4958ECE14199824D002FACFD9B28',
	width: 160,
	height: 600,
	fps: 50,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [
		{src:"images/pic1.jpg", id:"pic1"},
		{src:"images/pic2.jpg", id:"pic2"}
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
an.compositions['35BD4958ECE14199824D002FACFD9B28'] = {
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



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;