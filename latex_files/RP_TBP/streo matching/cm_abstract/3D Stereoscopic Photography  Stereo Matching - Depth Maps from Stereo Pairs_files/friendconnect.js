window.google = window["google"] || {};google.friendconnect = google.friendconnect_ || {};if (!window['__ps_loaded__']) {/*http://www-a-fc-opensocial.googleusercontent.com/gadgets/js/rpc:core.util.js?c=1*/
window['___jsl'] = window['___jsl'] || {};(window['___jsl']['ci'] = (window['___jsl']['ci'] || [])).push({"rpc":{"commSwf":"//xpc.googleusercontent.com/gadgets/xpc.swf","passReferrer":"p2c:query","parentRelayUrl":"/rpc_relay.html"}});window['___jsl']=window['___jsl']||{};(window['___jsl']['ci'] = (window['___jsl']['ci'] || [])).push({"rpc":{"commSwf":"//xpc.googleusercontent.com/gadgets/xpc.swf","passReferrer":"p2c:query","parentRelayUrl":"/rpc_relay.html"}});
/* [start] feature=taming */
var safeJSON=window.safeJSON;
var tamings___=window.tamings___||[];
var bridge___;
var caja___=window.caja___;
var ___=window.___;;

/* [end] feature=taming */

/* [start] feature=gapi-globals */
var gapi=window.gapi||{};gapi.client=window.gapi&&window.gapi.client||{};
;
;

/* [end] feature=gapi-globals */

/* [start] feature=globals */
var gadgets=window.gadgets||{},shindig=window.shindig||{},osapi=window.osapi=window.osapi||{},google=window.google||{};
;
;

/* [end] feature=globals */

/* [start] feature=core.config.base */
window['___cfg'] = window['___cfg'] || window['___gcfg'];;
if(!window.gadgets["config"]){gadgets.config=function(){var f;
var h={};
var b={};
function c(j,l){for(var k in l){if(!l.hasOwnProperty(k)){continue
}if(typeof j[k]==="object"&&typeof l[k]==="object"){c(j[k],l[k])
}else{j[k]=l[k]
}}}function i(){var j=document.scripts||document.getElementsByTagName("script");
if(!j||j.length==0){return null
}var m;
if(f.u){for(var k=0;
!m&&k<j.length;
++k){var l=j[k];
if(l.src&&l.src.indexOf(f.u)==0){m=l
}}}if(!m){m=j[j.length-1]
}if(!m.src){return null
}return m
}function a(j){var k="";
if(j.nodeType==3||j.nodeType==4){k=j.nodeValue
}else{if(j.innerText){k=j.innerText
}else{if(j.innerHTML){k=j.innerHTML
}else{if(j.firstChild){var l=[];
for(var m=j.firstChild;
m;
m=m.nextSibling){l.push(a(m))
}k=l.join("")
}}}}return k
}function e(k){if(!k){return{}
}var j;
while(k.charCodeAt(k.length-1)==0){k=k.substring(0,k.length-1)
}try{j=(new Function("return ("+k+"\n)"))()
}catch(l){}if(typeof j==="object"){return j
}try{j=(new Function("return ({"+k+"\n})"))()
}catch(l){}return typeof j==="object"?j:{}
}function g(n){var p=window.___cfg;
if(p){c(n,p)
}var o=i();
if(!o){return
}var k=a(o);
var j=e(k);
if(f.f&&f.f.length==1){var m=f.f[0];
if(!j[m]){var l={};
l[f.f[0]]=j;
j=l
}}c(n,j)
}function d(o){for(var l in h){if(h.hasOwnProperty(l)){var n=h[l];
for(var m=0,k=n.length;
m<k;
++m){o(l,n[m])
}}}}return{register:function(l,k,j,m){var n=h[l];
if(!n){n=[];
h[l]=n
}n.push({validators:k||{},callback:j,callOnUpdate:m})
},get:function(j){if(j){return b[j]||{}
}return b
},init:function(k,j){f=window.___jsl||{};
c(b,k);
g(b);
var l=window.___config||{};
c(b,l);
d(function(q,p){var o=b[q];
if(o&&!j){var m=p.validators;
for(var n in m){if(m.hasOwnProperty(n)){if(!m[n](o[n])){throw new Error('Invalid config value "'+o[n]+'" for parameter "'+n+'" in component "'+q+'"')
}}}}if(p.callback){p.callback(b)
}})
},update:function(k,p){var o=(window.gapi&&window.gapi["config"]&&window.gapi["config"]["update"]);
if(!p&&o){o(k)
}var n=[];
d(function(q,j){if(k.hasOwnProperty(q)||(p&&b&&b[q])){if(j.callback&&j.callOnUpdate){n.push(j.callback)
}}});
b=p?{}:b||{};
c(b,k);
for(var m=0,l=n.length;
m<l;
++m){n[m](b)
}}}
}()
}else{gadgets.config=window.gadgets["config"];
gadgets.config.register=gadgets.config.register;
gadgets.config.get=gadgets.config.get;
gadgets.config.init=gadgets.config.init;
gadgets.config.update=gadgets.config.update
};;

/* [end] feature=core.config.base */

/* [start] feature=core.log */
gadgets.log=(function(){var e=1;
var a=2;
var f=3;
var c=4;
var d=function(i){b(e,i)
};
gadgets.warn=function(i){b(a,i)
};
gadgets.error=function(i){b(f,i)
};
gadgets.debug=function(i){};
gadgets.setLogLevel=function(i){h=i
};
function b(k,i){if(k<h||!g){return
}if(k===a&&g.warn){g.warn(i)
}else{if(k===f&&g.error){try{g.error(i)
}catch(j){}}else{if(g.log){g.log(i)
}}}}d.INFO=e;
d.WARNING=a;
d.NONE=c;
var h=e;
var g=window.console?window.console:window.opera?window.opera.postError:undefined;
return d
})();;
;

/* [end] feature=core.log */

/* [start] feature=gapi.util-globals */
gapi.util=window.gapi&&window.gapi.util||{};
;

/* [end] feature=gapi.util-globals */

/* [start] feature=core.config */
(function(){gadgets.config.EnumValidator=function(d){var c=[];
if(arguments.length>1){for(var b=0,a;
(a=arguments[b]);
++b){c.push(a)
}}else{c=d
}return function(f){for(var e=0,g;
(g=c[e]);
++e){if(f===c[e]){return true
}}return false
}
};
gadgets.config.RegExValidator=function(a){return function(b){return a.test(b)
}
};
gadgets.config.ExistsValidator=function(a){return typeof a!=="undefined"
};
gadgets.config.NonEmptyStringValidator=function(a){return typeof a==="string"&&a.length>0
};
gadgets.config.BooleanValidator=function(a){return typeof a==="boolean"
};
gadgets.config.LikeValidator=function(a){return function(c){for(var d in a){if(a.hasOwnProperty(d)){var b=a[d];
if(!b(c[d])){return false
}}}return true
}
}
})();;

/* [end] feature=core.config */

/* [start] feature=core.util.base */
gadgets.util=gadgets.util||{};
(function(){gadgets.util.makeClosure=function(d,f,e){var c=[];
for(var b=2,a=arguments.length;
b<a;
++b){c.push(arguments[b])
}return function(){var g=c.slice();
for(var k=0,h=arguments.length;
k<h;
++k){g.push(arguments[k])
}return f.apply(d,g)
}
};
gadgets.util.makeEnum=function(b){var c,a,d={};
for(c=0;
(a=b[c]);
++c){d[a]=a
}return d
}
})();;

/* [end] feature=core.util.base */

/* [start] feature=core.util.dom */
gadgets.util=gadgets.util||{};
(function(){var c="http://www.w3.org/1999/xhtml";
function b(f,e){var h=e||{};
for(var g in h){if(h.hasOwnProperty(g)){f[g]=h[g]
}}}function d(g,f){var e=["<",g];
var i=f||{};
for(var h in i){if(i.hasOwnProperty(h)){e.push(" ");
e.push(h);
e.push('="');
e.push(gadgets.util.escapeString(i[h]));
e.push('"')
}}e.push("></");
e.push(g);
e.push(">");
return e.join("")
}function a(f){var g="";
if(f.nodeType==3||f.nodeType==4){g=f.nodeValue
}else{if(f.innerText){g=f.innerText
}else{if(f.innerHTML){g=f.innerHTML
}else{if(f.firstChild){var e=[];
for(var h=f.firstChild;
h;
h=h.nextSibling){e.push(a(h))
}g=e.join("")
}}}}return g
}gadgets.util.createElement=function(f){var e;
if((!document.body)||document.body.namespaceURI){try{e=document.createElementNS(c,f)
}catch(g){}}return e||document.createElement(f)
};
gadgets.util.createIframeElement=function(g){var i=gadgets.util.createElement("iframe");
try{var e=d("iframe",g);
var f=gadgets.util.createElement(e);
if(f&&((!i)||((f.tagName==i.tagName)&&(f.namespaceURI==i.namespaceURI)))){i=f
}}catch(h){}b(i,g);
return i
};
gadgets.util.getBodyElement=function(){if(document.body){return document.body
}try{var f=document.getElementsByTagNameNS(c,"body");
if(f&&(f.length==1)){return f[0]
}}catch(e){}return document.documentElement||document
};
gadgets.util.getInnerText=function(e){return a(e)
}
})();;

/* [end] feature=core.util.dom */

/* [start] feature=core.util.event */
gadgets.util=gadgets.util||{};
(function(){gadgets.util.attachBrowserEvent=function(c,b,d,a){if(typeof c.addEventListener!="undefined"){c.addEventListener(b,d,a)
}else{if(typeof c.attachEvent!="undefined"){c.attachEvent("on"+b,d)
}else{gadgets.warn("cannot attachBrowserEvent: "+b)
}}};
gadgets.util.removeBrowserEvent=function(c,b,d,a){if(c.removeEventListener){c.removeEventListener(b,d,a)
}else{if(c.detachEvent){c.detachEvent("on"+b,d)
}else{gadgets.warn("cannot removeBrowserEvent: "+b)
}}}
})();;

/* [end] feature=core.util.event */

/* [start] feature=core.util.onload */
gadgets.util=gadgets.util||{};
(function(){var a=[];
gadgets.util.registerOnLoadHandler=function(b){a.push(b)
};
gadgets.util.runOnLoadHandlers=function(){for(var c=0,b=a.length;
c<b;
++c){a[c]()
}}
})();;

/* [end] feature=core.util.onload */

/* [start] feature=core.util.string */
gadgets.util=gadgets.util||{};
(function(){var a={0:false,10:true,13:true,34:true,39:true,60:true,62:true,92:true,8232:true,8233:true,65282:true,65287:true,65308:true,65310:true,65340:true};
function b(c,d){return String.fromCharCode(d)
}gadgets.util.escape=function(c,g){if(!c){return c
}else{if(typeof c==="string"){return gadgets.util.escapeString(c)
}else{if(typeof c==="Array"){for(var f=0,d=c.length;
f<d;
++f){c[f]=gadgets.util.escape(c[f])
}}else{if(typeof c==="object"&&g){var e={};
for(var h in c){if(c.hasOwnProperty(h)){e[gadgets.util.escapeString(h)]=gadgets.util.escape(c[h],true)
}}return e
}}}}return c
};
gadgets.util.escapeString=function(g){if(!g){return g
}var d=[],f,h;
for(var e=0,c=g.length;
e<c;
++e){f=g.charCodeAt(e);
h=a[f];
if(h===true){d.push("&#",f,";")
}else{if(h!==false){d.push(g.charAt(e))
}}}return d.join("")
};
gadgets.util.unescapeString=function(c){if(!c){return c
}return c.replace(/&#([0-9]+);/g,b)
}
})();;

/* [end] feature=core.util.string */

/* [start] feature=core.util.urlparams */
gadgets.util=gadgets.util||{};
(function(){var a=null;
function b(e){var f;
var c=e.indexOf("?");
var d=e.indexOf("#");
if(d===-1){f=e.substr(c+1)
}else{f=[e.substr(c+1,d-c-1),"&",e.substr(d+1)].join("")
}return f.split("&")
}gadgets.util.getUrlParameters=function(p){var d=typeof p==="undefined";
if(a!==null&&d){return a
}var l={};
var f=b(p||window.location.href);
var n=window.decodeURIComponent?decodeURIComponent:unescape;
for(var h=0,g=f.length;
h<g;
++h){var m=f[h].indexOf("=");
if(m===-1){continue
}var c=f[h].substring(0,m);
var o=f[h].substring(m+1);
o=o.replace(/\+/g," ");
try{l[c]=n(o)
}catch(k){}}if(d){a=l
}return l
};
gadgets.util.getUrlParameters()
})();;

/* [end] feature=core.util.urlparams */

/* [start] feature=gapi.util.getOrigin */
gapi.util.getOrigin=function(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a)throw Error("Invalid URI scheme in origin");var c="",d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1),b=b.substring(0,d);if("http"===
a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c};
;

/* [end] feature=gapi.util.getOrigin */

/* [start] feature=core.json */
if(window.JSON&&window.JSON.parse&&window.JSON.stringify){gadgets.json=(function(){var a=/___$/;
function b(d,e){var c=this[d];
return c
}return{parse:function(d){try{return window.JSON.parse(d)
}catch(c){return false
}},stringify:function(d){var h=window.JSON.stringify;
function f(e){return h.call(this,e,b)
}var g=(Array.prototype.toJSON&&h([{x:1}])==='"[{\\"x\\": 1}]"')?f:h;
try{return g(d,function(i,e){return !a.test(i)?e:void 0
})
}catch(c){return null
}}}
})()
};;
;
if(!(window.JSON&&window.JSON.parse&&window.JSON.stringify)){gadgets.json=function(){function f(n){return n<10?"0"+n:n
}Date.prototype.toJSON=function(){return[this.getUTCFullYear(),"-",f(this.getUTCMonth()+1),"-",f(this.getUTCDate()),"T",f(this.getUTCHours()),":",f(this.getUTCMinutes()),":",f(this.getUTCSeconds()),"Z"].join("")
};
var m={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};
function stringify(value){var a,i,k,l,r=/[\"\\\x00-\x1f\x7f-\x9f]/g,v;
switch(typeof value){case"string":return r.test(value)?'"'+value.replace(r,function(a){var c=m[a];
if(c){return c
}c=a.charCodeAt();
return"\\u00"+Math.floor(c/16).toString(16)+(c%16).toString(16)
})+'"':'"'+value+'"';
case"number":return isFinite(value)?String(value):"null";
case"boolean":case"null":return String(value);
case"object":if(!value){return"null"
}a=[];
if(typeof value.length==="number"&&!value.propertyIsEnumerable("length")){l=value.length;
for(i=0;
i<l;
i+=1){a.push(stringify(value[i])||"null")
}return"["+a.join(",")+"]"
}for(k in value){if(/___$/.test(k)){continue
}if(value.hasOwnProperty(k)){if(typeof k==="string"){v=stringify(value[k]);
if(v){a.push(stringify(k)+":"+v)
}}}}return"{"+a.join(",")+"}"
}return""
}return{stringify:stringify,parse:function(text){if(/^[\],:{}\s]*$/.test(text.replace(/\\["\\\/b-u]/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){return eval("("+text+")")
}return false
}}
}()
};;
gadgets.json.flatten=function(c){var d={};
if(c===null||c===undefined){return d
}for(var a in c){if(c.hasOwnProperty(a)){var b=c[a];
if(null===b||undefined===b){continue
}d[a]=(typeof b==="string")?b:gadgets.json.stringify(b)
}}return d
};;

/* [end] feature=core.json */

/* [start] feature=core.util */
gadgets.util=gadgets.util||{};
(function(){var b={};
var a={};
function c(d){b=d["core.util"]||{}
}if(gadgets.config){gadgets.config.register("core.util",null,c)
}gadgets.util.getFeatureParameters=function(d){return typeof b[d]==="undefined"?null:b[d]
};
gadgets.util.hasFeature=function(d){return typeof b[d]!=="undefined"
};
gadgets.util.getServices=function(){return a
}
})();;

/* [end] feature=core.util */

/* [start] feature=rpc */
gadgets.rpctx=gadgets.rpctx||{};
if(!gadgets.rpctx.wpm){gadgets.rpctx.wpm=function(){var e,d;
var c=true;
function b(h,j,g){if(typeof window.addEventListener!="undefined"){window.addEventListener(h,j,g)
}else{if(typeof window.attachEvent!="undefined"){window.attachEvent("on"+h,j)
}}if(h==="message"){window.___jsl=window.___jsl||{};
var i=window.___jsl;
i.RPMQ=i.RPMQ||[];
i.RPMQ.push(j)
}}function a(h,i,g){if(window.removeEventListener){window.removeEventListener(h,i,g)
}else{if(window.detachEvent){window.detachEvent("on"+h,i)
}}}function f(h){var i=gadgets.json.parse(h.data);
if(!i||!i.f){return
}gadgets.debug("gadgets.rpc.receive("+window.name+"): "+h.data);
var g=gadgets.rpc.getTargetOrigin(i.f);
if(c&&(typeof h.origin!=="undefined"?h.origin!==g:h.domain!==/^.+:\/\/([^:]+).*/.exec(g)[1])){gadgets.error("Invalid rpc message origin. "+g+" vs "+(h.origin||""));
return
}e(i,h.origin)
}return{getCode:function(){return"wpm"
},isParentVerifiable:function(){return true
},init:function(h,i){function g(k){var j=k&&k.rpc||{};
if(String(j.disableForceSecure)==="true"){c=false
}}gadgets.config.register("rpc",null,g);
e=h;
d=i;
b("message",f,false);
d("..",true);
return true
},setup:function(h,g){d(h,true);
return true
},call:function(h,k,j){var g=gadgets.rpc.getTargetOrigin(h);
var i=gadgets.rpc._getTargetWin(h);
if(g){window.setTimeout(function(){var l=gadgets.json.stringify(j);
gadgets.debug("gadgets.rpc.send("+window.name+"): "+l);
i.postMessage(l,g)
},0)
}else{if(h!=".."){gadgets.error("No relay set (used as window.postMessage targetOrigin), cannot send cross-domain message")
}}return true
}}
}()
};;

       gadgets.rpctx.ifpc = gadgets.rpctx.wpm;
    ;
if(!window.gadgets||!window.gadgets["rpc"]){gadgets.rpc=function(){var M="__cb";
var S="";
var T="__ack";
var f=500;
var G=10;
var b="|";
var u="callback";
var g="origin";
var r="referer";
var s="legacy__";
var q={};
var W={};
var D={};
var B={};
var z=0;
var l={};
var m={};
var d={};
var n={};
var E={};
var e=null;
var p=null;
var A=(window.top!==window.self);
var v=window.name;
var J=function(){};
var P=0;
var Y=1;
var a=2;
var x=window.console;
var V=x&&x.log&&function(ae){x.log(ae)
}||function(){};
var R=(function(){function ae(af){return function(){V(af+": call ignored")
}
}return{getCode:function(){return"noop"
},isParentVerifiable:function(){return true
},init:ae("init"),setup:ae("setup"),call:ae("call")}
})();
if(gadgets.util){d=gadgets.util.getUrlParameters()
}function K(){if(d.rpctx=="flash"){return gadgets.rpctx.flash
}if(d.rpctx=="rmr"){return gadgets.rpctx.rmr
}var ae=typeof window.postMessage==="function"?gadgets.rpctx.wpm:typeof window.postMessage==="object"?gadgets.rpctx.wpm:window.ActiveXObject?(gadgets.rpctx.flash?gadgets.rpctx.flash:(gadgets.rpctx.nix?gadgets.rpctx.nix:gadgets.rpctx.ifpc)):navigator.userAgent.indexOf("WebKit")>0?gadgets.rpctx.rmr:navigator.product==="Gecko"?gadgets.rpctx.frameElement:gadgets.rpctx.ifpc;
if(!ae){ae=R
}return ae
}function k(aj,ah){if(n[aj]){return
}var af=H;
if(!ah){af=R
}n[aj]=af;
var ae=E[aj]||[];
for(var ag=0;
ag<ae.length;
++ag){var ai=ae[ag];
ai.t=F(aj);
af.call(aj,ai.f,ai)
}E[aj]=[]
}var I=false,U=false;
function N(){if(U){return
}function ae(){I=true
}if(typeof window.addEventListener!="undefined"){window.addEventListener("unload",ae,false)
}else{if(typeof window.attachEvent!="undefined"){window.attachEvent("onunload",ae)
}}U=true
}function j(ae,ai,af,ah,ag){if(!B[ai]||B[ai]!==af){gadgets.error("Invalid gadgets.rpc token. "+B[ai]+" vs "+af);
J(ai,a)
}ag.onunload=function(){if(m[ai]&&!I){J(ai,Y);
gadgets.rpc.removeReceiver(ai)
}};
N();
ah=gadgets.json.parse(decodeURIComponent(ah))
}function Z(ak,af){if(ak&&typeof ak.s==="string"&&typeof ak.f==="string"&&ak.a instanceof Array){if(B[ak.f]){if(B[ak.f]!==ak.t){gadgets.error("Invalid gadgets.rpc token. "+B[ak.f]+" vs "+ak.t);
J(ak.f,a)
}}if(ak.s===T){window.setTimeout(function(){k(ak.f,true)
},0);
return
}if(ak.c){ak[u]=function(al){var am=ak.g?s:"";
gadgets.rpc.call(ak.f,am+M,null,ak.c,al)
}
}if(af){var ag=t(af);
ak[g]=af;
var ah=ak.r,aj;
try{aj=t(ah)
}catch(ai){}if(!ah||aj!=ag){ah=af
}ak[r]=ah
}var ae=(q[ak.s]||q[S]).apply(ak,ak.a);
if(ak.c&&typeof ae!=="undefined"){gadgets.rpc.call(ak.f,M,null,ak.c,ae)
}}}function t(ag){if(!ag){return""
}ag=((ag.split("#"))[0].split("?"))[0];
ag=ag.toLowerCase();
if(ag.indexOf("//")==0){ag=window.location.protocol+ag
}if(ag.indexOf("://")==-1){ag=window.location.protocol+"//"+ag
}var ah=ag.substring(ag.indexOf("://")+3);
var ae=ah.indexOf("/");
if(ae!=-1){ah=ah.substring(0,ae)
}var aj=ag.substring(0,ag.indexOf("://"));
if(aj!=="http"&&aj!=="https"&&aj!=="chrome-extension"&&aj!=="file"){throw Error("Invalid URI scheme in origin")
}var ai="";
var ak=ah.indexOf(":");
if(ak!=-1){var af=ah.substring(ak+1);
ah=ah.substring(0,ak);
if((aj==="http"&&af!=="80")||(aj==="https"&&af!=="443")){ai=":"+af
}}return aj+"://"+ah+ai
}function C(af,ae){return"/"+af+(ae?b+ae:"")
}function y(ah){if(ah.charAt(0)=="/"){var af=ah.indexOf(b);
var ag=af>0?ah.substring(1,af):ah.substring(1);
var ae=af>0?ah.substring(af+1):null;
return{id:ag,origin:ae}
}else{return null
}}function ad(ag){if(typeof ag==="undefined"||ag===".."){return window.parent
}var af=y(ag);
if(af){return window.top.frames[af.id]
}ag=String(ag);
var ae=window.frames[ag];
if(ae){return ae
}ae=document.getElementById(ag);
if(ae&&ae.contentWindow){return ae.contentWindow
}return null
}function L(ah){var ag=null;
var ae=O(ah);
if(ae){ag=ae
}else{var af=y(ah);
if(af){ag=af.origin
}else{if(ah==".."){ag=d.parent
}else{ag=document.getElementById(ah).src
}}}return t(ag)
}var H=K();
q[S]=function(){V("Unknown RPC service: "+this["s"])
};
q[M]=function(af,ae){var ag=l[af];
if(ag){delete l[af];
ag.call(this,ae)
}};
function X(ag,ae){if(m[ag]===true){return
}if(typeof m[ag]==="undefined"){m[ag]=0
}var af=ad(ag);
if(ag===".."||af!=null){if(H.setup(ag,ae)===true){m[ag]=true;
return
}}if(m[ag]!==true&&m[ag]++<G){window.setTimeout(function(){X(ag,ae)
},f)
}else{n[ag]=R;
m[ag]=true
}}function O(af){var ae=W[af];
if(ae&&ae.substring(0,1)==="/"){if(ae.substring(1,2)==="/"){ae=document.location.protocol+ae
}else{ae=document.location.protocol+"//"+document.location.host+ae
}}return ae
}function ac(af,ae,ag){if(ae&&!/http(s)?:\/\/.+/.test(ae)){if(ae.indexOf("//")==0){ae=window.location.protocol+ae
}else{if(ae.charAt(0)=="/"){ae=window.location.protocol+"//"+window.location.host+ae
}else{if(ae.indexOf("://")==-1){ae=window.location.protocol+"//"+ae
}}}}W[af]=ae;
if(typeof ag!=="undefined"){D[af]=!!ag
}}function F(ae){return B[ae]
}function c(ae,af){af=af||"";
B[ae]=String(af);
X(ae,af)
}function ab(af){var ae=af.passReferrer||"";
var ag=ae.split(":",2);
e=ag[0]||"none";
p=ag[1]||"origin"
}function aa(ae){if(Q(ae)){H=gadgets.rpctx.ifpc||R;
H.init(Z,k)
}}function Q(ae){return String(ae.useLegacyProtocol)==="true"
}function h(af,ae){function ag(aj){var ai=aj&&aj.rpc||{};
ab(ai);
var ah=ai.parentRelayUrl||"";
ah=t(d.parent||ae)+ah;
ac("..",ah,Q(ai));
aa(ai);
c("..",af)
}if(!d.parent&&ae){ag({});
return
}gadgets.config.register("rpc",null,ag)
}function o(af,aj,al){var ai=null;
if(af.charAt(0)!="/"){if(!gadgets.util){return
}ai=document.getElementById(af);
if(!ai){throw new Error("Cannot set up gadgets.rpc receiver with ID: "+af+", element not found.")
}}var ae=ai&&ai.src;
var ag=aj||gadgets.rpc.getOrigin(ae);
ac(af,ag);
var ak=gadgets.util.getUrlParameters(ae);
var ah=al||ak.rpctoken;
c(af,ah)
}function i(ae,ag,ah){if(ae===".."){var af=ah||d.rpctoken||d.ifpctok||"";
h(af,ag)
}else{o(ae,ag,ah)
}}function w(ag){if(e==="bidir"||(e==="c2p"&&ag==="..")||(e==="p2c"&&ag!=="..")){var af=window.location.href;
var ah="?";
if(p==="query"){ah="#"
}else{if(p==="hash"){return af
}}var ae=af.lastIndexOf(ah);
ae=ae===-1?af.length:ae;
return af.substring(0,ae)
}return null
}return{config:function(ae){if(typeof ae.securityCallback==="function"){J=ae.securityCallback
}},register:function(af,ae){if(af===M||af===T){throw new Error("Cannot overwrite callback/ack service")
}if(af===S){throw new Error("Cannot overwrite default service: use registerDefault")
}q[af]=ae
},unregister:function(ae){if(ae===M||ae===T){throw new Error("Cannot delete callback/ack service")
}if(ae===S){throw new Error("Cannot delete default service: use unregisterDefault")
}delete q[ae]
},registerDefault:function(ae){q[S]=ae
},unregisterDefault:function(){delete q[S]
},forceParentVerifiable:function(){if(!H.isParentVerifiable()){H=gadgets.rpctx.ifpc
}},call:function(ae,ag,al,aj){ae=ae||"..";
var ak="..";
if(ae===".."){ak=v
}else{if(ae.charAt(0)=="/"){ak=C(v,gadgets.rpc.getOrigin(window.location.href))
}}++z;
if(al){l[z]=al
}var ai={s:ag,f:ak,c:al?z:0,a:Array.prototype.slice.call(arguments,3),t:B[ae],l:!!D[ae]};
var af=w(ae);
if(af){ai.r=af
}if(ae!==".."&&y(ae)==null&&!document.getElementById(ae)){return
}var ah=n[ae];
if(!ah&&y(ae)!==null){ah=H
}if(ag.indexOf(s)===0){ah=H;
ai.s=ag.substring(s.length);
ai.c=ai.c?ai.c:z
}ai.g=true;
ai.r=ak;
if(!ah){if(!E[ae]){E[ae]=[ai]
}else{E[ae].push(ai)
}return
}if(D[ae]){ah=gadgets.rpctx.ifpc
}if(ah.call(ae,ak,ai)===false){n[ae]=R;
H.call(ae,ak,ai)
}},getRelayUrl:O,setRelayUrl:ac,setAuthToken:c,setupReceiver:i,getAuthToken:F,removeReceiver:function(ae){delete W[ae];
delete D[ae];
delete B[ae];
delete m[ae];
delete n[ae]
},getRelayChannel:function(){return H.getCode()
},receive:function(af,ae){if(af.length>4){H._receiveMessage(af,Z)
}else{j.apply(null,af.concat(ae))
}},receiveSameDomain:function(ae){ae.a=Array.prototype.slice.call(ae.a);
window.setTimeout(function(){Z(ae)
},0)
},getOrigin:t,getTargetOrigin:L,init:function(){if(H.init(Z,k)===false){H=R
}if(A){i("..")
}else{gadgets.config.register("rpc",null,function(af){var ae=af.rpc||{};
ab(ae);
aa(ae)
})
}},_getTargetWin:ad,_parseSiblingId:y,ACK:T,RPC_ID:v||"..",SEC_ERROR_LOAD_TIMEOUT:P,SEC_ERROR_FRAME_PHISH:Y,SEC_ERROR_FORGED_MSG:a}
}();
gadgets.rpc.init()
}else{if(typeof gadgets.rpc=="undefined"||!gadgets.rpc){gadgets.rpc=window.gadgets["rpc"];
gadgets.rpc.config=gadgets.rpc.config;
gadgets.rpc.register=gadgets.rpc.register;
gadgets.rpc.unregister=gadgets.rpc.unregister;
gadgets.rpc.registerDefault=gadgets.rpc.registerDefault;
gadgets.rpc.unregisterDefault=gadgets.rpc.unregisterDefault;
gadgets.rpc.forceParentVerifiable=gadgets.rpc.forceParentVerifiable;
gadgets.rpc.call=gadgets.rpc.call;
gadgets.rpc.getRelayUrl=gadgets.rpc.getRelayUrl;
gadgets.rpc.setRelayUrl=gadgets.rpc.setRelayUrl;
gadgets.rpc.setAuthToken=gadgets.rpc.setAuthToken;
gadgets.rpc.setupReceiver=gadgets.rpc.setupReceiver;
gadgets.rpc.getAuthToken=gadgets.rpc.getAuthToken;
gadgets.rpc.removeReceiver=gadgets.rpc.removeReceiver;
gadgets.rpc.getRelayChannel=gadgets.rpc.getRelayChannel;
gadgets.rpc.receive=gadgets.rpc.receive;
gadgets.rpc.receiveSameDomain=gadgets.rpc.receiveSameDomain;
gadgets.rpc.getOrigin=gadgets.rpc.getOrigin;
gadgets.rpc.getTargetOrigin=gadgets.rpc.getTargetOrigin;
gadgets.rpc._getTargetWin=gadgets.rpc._getTargetWin;
gadgets.rpc._parseSiblingId=gadgets.rpc._parseSiblingId
}};;

/* [end] feature=rpc */
gadgets.config.init({"rpc":{"commSwf":"//xpc.googleusercontent.com/gadgets/xpc.swf","passReferrer":"p2c:query","parentRelayUrl":"/rpc_relay.html"}});
(function(){var j=window['___jsl']=window['___jsl']||{};j['l']=(j['l']||[]).concat(['rpc','core.util']);})();(function(){var j=window['___jsl']=window['___jsl']||{};if(j['c']){j['c']();delete j['c'];}})();var friendconnect_serverBase = "https://www.google.com";var friendconnect_loginUrl = "https://www.google.com/accounts";var friendconnect_gadgetPrefix = "http://www-a-fc-opensocial.googleusercontent.com/gadgets";
var friendconnect_serverVersion = "0.1-3a2c59f7_c11f98cb_08da8f91_23b98c60_01dab854.7";
var friendconnect_imageUrl = "https://www.google.com/friendconnect/scs/images";
var friendconnect_lightbox = true;
var fca=gadgets,fcb=encodeURIComponent,fcc=window,fcaa=Object,fcd=friendconnect_serverBase,fcba=setTimeout,fce=document,fcf=Array,fcg=Math,fch=Error,fcca=parseInt,fci=String;function fcj(a,b){return a.width=b}function fck(a,b){return a.height=b}function fcl(a,b){return a.innerHTML=b}function fcda(a,b){return a.length=b}function fcea(a,b){return a.className=b}
var fcm="appendChild",fcfa="shift",fcga="exec",fcn="width",fco="replace",fcha="data",fcp="charAt",fcq="match",fcia="createElement",fcr="setAttribute",fcja="auth",fcka="getSecurityToken",fcla="bind",fcs="register",fcma="toString",fcna="propertyIsEnumerable",fct="split",fcu="location",fcoa="Dialog",fcv="style",fcw="options",fcpa="json",fcqa="href",fcx="util",fcra="maxHeight",fcy="apply",fcsa="reset",fcz="height",fcta="right",fcA="push",fcua="stringify",fcva="test",fcB="round",fcC="slice",fcD="getElementById",
fcE="indexOf",fcwa="left",fcxa="addEventListener",fcya="locale",fcza="type",fcF="name",fcG="length",fc="prototype",fcH="document",fcI="getUrlParameters",fcJ="body",fcK="call",fcAa="friendconnect_serverBase",fcBa="charCodeAt",fcCa="substring",fcDa="getContentElement",fcL="update",fcM="join",fcEa="toLowerCase",goog=goog||{},fcN=this,fcFa=function(a){return void 0!==a},fcGa=function(a,b,c){a=a[fct](".");c=c||fcN;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var d;a[fcG]&&(d=a[fcfa]());)!a[fcG]&&
fcFa(b)?c[d]=b:c=c[d]?c[d]:c[d]={}},fcHa=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof fcf)return"array";if(a instanceof fcaa)return b;var c=fcaa[fc][fcma][fcK](a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a[fcG]&&"undefined"!=typeof a.splice&&"undefined"!=typeof a[fcna]&&!a[fcna]("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a[fcK]&&"undefined"!=typeof a[fcna]&&!a[fcna]("call"))return"function"}else return"null";else if("function"==
b&&"undefined"==typeof a[fcK])return"object";return b},fcIa=function(a){var b=fcHa(a);return"array"==b||"object"==b&&"number"==typeof a[fcG]},fcO=function(a){return"string"==typeof a},fcJa=function(a){var b=typeof a;return"object"==b&&null!=a||"function"==b},fcP=function(a){var b=fcHa(a);if("object"==b||"array"==b){if(a.clone)return a.clone();var b="array"==b?[]:{},c;for(c in a)b[c]=fcP(a[c]);return b}return a},fcKa=function(a,b,c){return a[fcK][fcy](a[fcla],arguments)},fcLa=function(a,b,c){if(!a)throw fch();
if(2<arguments[fcG]){var d=fcf[fc][fcC][fcK](arguments,2);return function(){var c=fcf[fc][fcC][fcK](arguments);fcf[fc].unshift[fcy](c,d);return a[fcy](b,c)}}return function(){return a[fcy](b,arguments)}},fcQ=function(a,b,c){fcQ=Function[fc][fcla]&&-1!=Function[fc][fcla][fcma]()[fcE]("native code")?fcKa:fcLa;return fcQ[fcy](null,arguments)},fcMa=function(a,b){var c=fcf[fc][fcC][fcK](arguments,1);return function(){var b=c[fcC]();b[fcA][fcy](b,arguments);return a[fcy](this,b)}},fcNa=function(a,b){for(var c in b)a[c]=
b[c]},fcOa=Date.now||function(){return+new Date},fcR=function(a,b,c){fcGa(a,b,c)},fcS=function(a,b){function c(){}c.prototype=b[fc];a.Vc=b[fc];a.prototype=new c;a[fc].constructor=a;a.base=function(a,c,f){for(var k=fcf(arguments[fcG]-2),l=2;l<arguments[fcG];l++)k[l-2]=arguments[l];return b[fc][c][fcy](a,k)}};Function[fc].bind=Function[fc][fcla]||function(a,b){if(1<arguments[fcG]){var c=fcf[fc][fcC][fcK](arguments,1);c.unshift(this,a);return fcQ[fcy](null,c)}return fcQ(this,a)};var fcPa=function(a){if(fch.captureStackTrace)fch.captureStackTrace(this,fcPa);else{var b=fch().stack;b&&(this.stack=b)}a&&(this.message=fci(a));this.reportErrorToServer=!0};fcS(fcPa,fch);fcPa[fc].name="CustomError";var fcQa=function(a,b){for(var c=a[fct]("%s"),d="",e=fcf[fc][fcC][fcK](arguments,1);e[fcG]&&1<c[fcG];)d+=c[fcfa]()+e[fcfa]();return d+c[fcM]("%s")},fcRa=fci[fc].trim?function(a){return a.trim()}:function(a){return a[fco](/^[\s\xa0]+|[\s\xa0]+$/g,"")},fcSa=function(a,b){var c=fci(a)[fcEa](),d=fci(b)[fcEa]();return c<d?-1:c==d?0:1},fc_a=function(a,b){if(b)a=a[fco](fcTa,"&amp;")[fco](fcUa,"&lt;")[fco](fcVa,"&gt;")[fco](fcWa,"&quot;")[fco](fcXa,"&#39;")[fco](fcYa,"&#0;");else{if(!fcZa[fcva](a))return a;
-1!=a[fcE]("&")&&(a=a[fco](fcTa,"&amp;"));-1!=a[fcE]("<")&&(a=a[fco](fcUa,"&lt;"));-1!=a[fcE](">")&&(a=a[fco](fcVa,"&gt;"));-1!=a[fcE]('"')&&(a=a[fco](fcWa,"&quot;"));-1!=a[fcE]("'")&&(a=a[fco](fcXa,"&#39;"));-1!=a[fcE]("\x00")&&(a=a[fco](fcYa,"&#0;"))}return a},fcTa=/&/g,fcUa=/</g,fcVa=/>/g,fcWa=/"/g,fcXa=/'/g,fcYa=/\x00/g,fcZa=/[\x00&<>"']/,fc1a=function(a,b){for(var c=0,d=fcRa(fci(a))[fct]("."),e=fcRa(fci(b))[fct]("."),f=fcg.max(d[fcG],e[fcG]),k=0;0==c&&k<f;k++){var l=d[k]||"",m=e[k]||"",n=RegExp("(\\d*)(\\D*)",
"g"),g=RegExp("(\\d*)(\\D*)","g");do{var h=n[fcga](l)||["","",""],p=g[fcga](m)||["","",""];if(0==h[0][fcG]&&0==p[0][fcG])break;var c=0==h[1][fcG]?0:fcca(h[1],10),t=0==p[1][fcG]?0:fcca(p[1],10),c=fc0a(c,t)||fc0a(0==h[2][fcG],0==p[2][fcG])||fc0a(h[2],p[2])}while(0==c)}return c},fc0a=function(a,b){return a<b?-1:a>b?1:0},fc2a=function(a){return fci(a)[fco](/\-([a-z])/g,function(a,c){return c.toUpperCase()})},fc3a=function(a,b){var c=fcO(b)?fci(b)[fco](/([-()\[\]{}+?*.$\^|,:#<!\\])/g,"\\$1")[fco](/\x08/g,
"\\x08"):"\\s",c=c?"|["+c+"]+":"",c=new RegExp("(^"+c+")([a-z])","g");return a[fco](c,function(a,b,c){return b+c.toUpperCase()})};var fc4a=function(a,b){b.unshift(a);fcPa[fcK](this,fcQa[fcy](null,b));b[fcfa]();this.messagePattern=a};fcS(fc4a,fcPa);fc4a[fc].name="AssertionError";var fc5a=function(a){throw a;},fc6a=fc5a,fc7a=function(a,b,c,d){var e="Assertion failed";if(c)var e=e+(": "+c),f=d;else a&&(e+=": "+a,f=b);a=new fc4a(""+e,f||[]);fc6a(a)},fc8a=function(a,b,c){a||fc7a("",null,b,fcf[fc][fcC][fcK](arguments,2));return a},fc9a=function(a,b){fc6a(new fc4a("Failure"+(a?": "+a:""),fcf[fc][fcC][fcK](arguments,1)))};var fc$a=fcf[fc],fcab=fc$a[fcE]?function(a,b,c){fc8a(null!=a[fcG]);return fc$a[fcE][fcK](a,b,c)}:function(a,b,c){c=null==c?0:0>c?fcg.max(0,a[fcG]+c):c;if(fcO(a))return fcO(b)&&1==b[fcG]?a[fcE](b,c):-1;for(;c<a[fcG];c++)if(c in a&&a[c]===b)return c;return-1},fcbb=fc$a.forEach?function(a,b,c){fc8a(null!=a[fcG]);fc$a.forEach[fcK](a,b,c)}:function(a,b,c){for(var d=a[fcG],e=fcO(a)?a[fct](""):a,f=0;f<d;f++)f in e&&b[fcK](c,e[f],f,a)},fccb=function(a,b){return 0<=fcab(a,b)},fcdb=function(a){var b=a[fcG];
if(0<b){for(var c=fcf(b),d=0;d<b;d++)c[d]=a[d];return c}return[]},fceb=function(a,b,c){fc8a(null!=a[fcG]);return 2>=arguments[fcG]?fc$a[fcC][fcK](a,b):fc$a[fcC][fcK](a,b,c)};var fcfb=function(a,b,c){for(var d in a)b[fcK](c,a[d],d,a)},fcgb=function(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b},fchb=function(a){var b=[],c=0,d;for(d in a)b[c++]=d;return b},fcib="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "),fcjb=function(a,b){for(var c,d,e=1;e<arguments[fcG];e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<fcib[fcG];f++)c=fcib[f],fcaa[fc].hasOwnProperty[fcK](d,c)&&(a[c]=d[c])}};var fckb=function(){var a=fcN.navigator;return a&&(a=a.userAgent)?a:""},fclb=fckb(),fcT=function(a){var b=fclb;return-1!=b[fcE](a)},fcmb=function(a){var b=fclb;return-1!=b[fcEa]()[fcE](a[fcEa]())};var fcnb=function(){return fcT("Opera")||fcT("OPR")},fcob=function(){return fcT("Edge")||fcT("Trident")||fcT("MSIE")},fcpb=fcnb,fcqb=fcob;var fcU=function(){return fcT("Edge")};var fcrb=fcpb(),fcV=fcqb(),fcsb=fcT("Gecko")&&!(fcmb("WebKit")&&!fcU())&&!(fcT("Trident")||fcT("MSIE"))&&!fcU(),fctb=fcmb("WebKit")&&!fcU(),fcwb=function(){if(fcrb&&fcN.opera){var a=fcN.opera.version;return"function"==fcHa(a)?a():a}var a="",b=fcub();b&&(a=b?b[1]:"");return fcV&&!fcU()&&(b=fcvb(),b>parseFloat(a))?fci(b):a},fcub=function(){var a=fclb;if(fcsb)return/rv\:([^\);]+)(\)|;)/[fcga](a);if(fcV&&fcU())return/Edge\/([\d\.]+)/[fcga](a);if(fcV)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/[fcga](a);if(fctb)return/WebKit\/(\S+)/[fcga](a)},
fcvb=function(){var a=fcN[fcH];return a?a.documentMode:void 0},fcxb=fcwb(),fcyb={},fczb=function(a){return fcyb[a]||(fcyb[a]=0<=fc1a(fcxb,a))},fcAb=function(){var a=fcN[fcH],b=fcvb();return!a||!fcV||!b&&fcU()?void 0:b||("CSS1Compat"==a.compatMode?fcca(fcxb,10):5)}();var fcBb=function(a){for(var b=[],c=0,d=0;d<a[fcG];d++){for(var e=a[fcBa](d);255<e;)b[c++]=e&255,e>>=8;b[c++]=e}return b};var fcCb=null,fcDb=null,fcEb=null,fcFb=null,fcHb=function(a,b){if(!fcIa(a))throw fch("encodeByteArray takes an array as a parameter");fcGb();for(var c=b?fcEb:fcCb,d=[],e=0;e<a[fcG];e+=3){var f=a[e],k=e+1<a[fcG],l=k?a[e+1]:0,m=e+2<a[fcG],n=m?a[e+2]:0,g=f>>2,f=(f&3)<<4|l>>4,l=(l&15)<<2|n>>6,n=n&63;m||(n=64,k||(l=64));d[fcA](c[g],c[f],c[l],c[n])}return d[fcM]("")},fcIb=function(a,b){fcGb();for(var c=b?fcFb:fcDb,d=[],e=0;e<a[fcG];){var f=c[a[fcp](e++)],k=e<a[fcG],k=k?c[a[fcp](e)]:0;++e;var l=e<a[fcG],
l=l?c[a[fcp](e)]:64;++e;var m=e<a[fcG],m=m?c[a[fcp](e)]:64;++e;if(null==f||null==k||null==l||null==m)throw fch();f=f<<2|k>>4;d[fcA](f);64!=l&&(f=k<<4&240|l>>2,d[fcA](f),64!=m&&(f=l<<6&192|m,d[fcA](f)))}return d},fcGb=function(){if(!fcCb){fcCb={};fcDb={};fcEb={};fcFb={};for(var a=0;65>a;a++)fcCb[a]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[fcp](a),fcDb[fcCb[a]]=a,fcEb[a]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_."[fcp](a),fcFb[fcEb[a]]=a,62<=a&&(fcDb["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_."[fcp](a)]=
a,fcFb["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="[fcp](a)]=a)}};var fcJb=function(){this.blockSize=-1};var fcW=function(a,b,c){fcJb[fcK](this);this.i=a;this.blockSize=c||a.blockSize||16;this.$b=fcf(this.blockSize);this.Wa=fcf(this.blockSize);this.Wb(b)};fcS(fcW,fcJb);fcW[fc].Wb=function(a){a[fcG]>this.blockSize&&(this.i[fcL](a),a=this.i.digest(),this.i[fcsa]());for(var b,c=0;c<this.blockSize;c++)b=c<a[fcG]?a[c]:0,this.$b[c]=b^92,this.Wa[c]=b^54;this.i[fcL](this.Wa)};fcW[fc].reset=function(){this.i[fcsa]();this.i[fcL](this.Wa)};fcW[fc].update=function(a,b){this.i[fcL](a,b)};
fcW[fc].digest=function(){var a=this.i.digest();this.i[fcsa]();this.i[fcL](this.$b);this.i[fcL](a);return this.i.digest()};fcW[fc].Kb=function(a){this[fcsa]();this[fcL](a);return this.digest()};var fcX=function(){fcJb[fcK](this);this.blockSize=64;this.c=[];this.Da=[];this.Mc=[];this.sa=[];this.sa[0]=128;for(var a=1;a<this.blockSize;++a)this.sa[a]=0;this.za=this.G=0;this[fcsa]()};fcS(fcX,fcJb);fcX[fc].reset=function(){this.c[0]=1732584193;this.c[1]=4023233417;this.c[2]=2562383102;this.c[3]=271733878;this.c[4]=3285377520;this.za=this.G=0};
fcX[fc].L=function(a,b){b||(b=0);var c=this.Mc;if(fcO(a))for(var d=0;16>d;d++)c[d]=a[fcBa](b)<<24|a[fcBa](b+1)<<16|a[fcBa](b+2)<<8|a[fcBa](b+3),b+=4;else for(d=0;16>d;d++)c[d]=a[b]<<24|a[b+1]<<16|a[b+2]<<8|a[b+3],b+=4;for(d=16;80>d;d++){var e=c[d-3]^c[d-8]^c[d-14]^c[d-16];c[d]=(e<<1|e>>>31)&4294967295}for(var f=this.c[0],k=this.c[1],l=this.c[2],m=this.c[3],n=this.c[4],g,d=0;80>d;d++)40>d?20>d?(e=m^k&(l^m),g=1518500249):(e=k^l^m,g=1859775393):60>d?(e=k&l|m&(k|l),g=2400959708):(e=k^l^m,g=3395469782),
e=(f<<5|f>>>27)+e+n+g+c[d]&4294967295,n=m,m=l,l=(k<<30|k>>>2)&4294967295,k=f,f=e;this.c[0]=this.c[0]+f&4294967295;this.c[1]=this.c[1]+k&4294967295;this.c[2]=this.c[2]+l&4294967295;this.c[3]=this.c[3]+m&4294967295;this.c[4]=this.c[4]+n&4294967295};
fcX[fc].update=function(a,b){if(null!=a){fcFa(b)||(b=a[fcG]);for(var c=b-this.blockSize,d=0,e=this.Da,f=this.G;d<b;){if(0==f)for(;d<=c;)this.L(a,d),d+=this.blockSize;if(fcO(a))for(;d<b;){if(e[f]=a[fcBa](d),++f,++d,f==this.blockSize){this.L(e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){this.L(e);f=0;break}}this.G=f;this.za+=b}};
fcX[fc].digest=function(){var a=[],b=8*this.za;56>this.G?this[fcL](this.sa,56-this.G):this[fcL](this.sa,this.blockSize-(this.G-56));for(var c=this.blockSize-1;56<=c;c--)this.Da[c]=b&255,b/=256;this.L(this.Da);for(c=b=0;5>c;c++)for(var d=24;0<=d;d-=8)a[b]=this.c[c]>>d&255,++b;return a};var fcY=function(a){this.yb=a},fcKb=/\s*;\s*/;fcY[fc].isEnabled=function(){return navigator.cookieEnabled};fcY[fc].Yb=function(a){return!/[;=\s]/[fcva](a)};fcY[fc].Zb=function(a){return!/[;\r\n]/[fcva](a)};
fcY[fc].set=function(a,b,c,d,e,f){if(!this.Yb(a))throw fch('Invalid cookie name "'+a+'"');if(!this.Zb(b))throw fch('Invalid cookie value "'+b+'"');fcFa(c)||(c=-1);e=e?";domain="+e:"";d=d?";path="+d:"";f=f?";secure":"";0>c?c="":(c=0==c?new Date(1970,1,1):new Date(fcOa()+1E3*c),c=";expires="+c.toUTCString());this.zc(a+"="+b+e+d+c+f)};fcY[fc].get=function(a,b){for(var c=a+"=",d=this.ja(),e=0,f;f=d[e];e++){if(0==f.lastIndexOf(c,0))return f.substr(c[fcG]);if(f==a)return""}return b};
fcY[fc].remove=function(a,b,c){var d=this.M(a);this.set(a,"",0,b,c);return d};fcY[fc].r=function(){return this.ha().keys};fcY[fc].F=function(){return this.ha().values};fcY[fc].P=function(){var a=this.Oa();return a?this.ja()[fcG]:0};fcY[fc].M=function(a){return fcFa(this.get(a))};fcY[fc].clear=function(){for(var a=this.ha().keys,b=a[fcG]-1;0<=b;b--)this.remove(a[b])};fcY[fc].zc=function(a){this.yb.cookie=a};fcY[fc].Oa=function(){return this.yb.cookie};fcY[fc].ja=function(){return(this.Oa()||"")[fct](fcKb)};
fcY[fc].ha=function(){for(var a=this.ja(),b=[],c=[],d,e,f=0;e=a[f];f++)d=e[fcE]("="),-1==d?(b[fcA](""),c[fcA](e)):(b[fcA](e[fcCa](0,d)),c[fcA](e[fcCa](d+1)));return{keys:b,values:c}};var fcLb=new fcY(fce);fcLb.MAX_COOKIE_LENGTH=3950;var fcMb=function(a,b){fcea(a,b)},fcNb=function(a){a=a.className;return fcO(a)&&a[fcq](/\S+/g)||[]},fcPb=function(a,b){var c=fcNb(a),d=fceb(arguments,1),e=c[fcG]+d[fcG];fcOb(c,d);fcMb(a,c[fcM](" "));return c[fcG]==e},fcOb=function(a,b){for(var c=0;c<b[fcG];c++)fccb(a,b[c])||a[fcA](b[c])};var fcZ=function(){this.ta="";this.Lc=fcQb};fcZ[fc].Vb=!0;fcZ[fc].Qb=function(){return this.ta};fcZ[fc].toString=function(){return"SafeUrl{"+this.ta+"}"};
var fcRb=function(a){if(a instanceof fcZ&&a.constructor===fcZ&&a.Lc===fcQb)return a.ta;fc9a("expected object of type SafeUrl, got '"+a+"'");return"type_error:SafeUrl"},fcSb=/^(?:(?:https?|mailto|ftp):|[^&:/?#]*(?:[/?#]|$))/i,fcVb=function(a){if(a instanceof fcZ)return a;a=a.Vb?a.Qb():fci(a);a=fcSb[fcva](a)?fcTb(a):"about:invalid#zClosurez";return fcUb(a)},fcTb=function(a){try{var b=encodeURI(a)}catch(c){return"about:invalid#zClosurez"}return b[fco](fcWb,function(a){return fcXb[a]})},fcWb=/[()']|%5B|%5D|%25/g,
fcXb={"'":"%27","(":"%28",")":"%29","%5B":"[","%5D":"]","%25":"%"},fcQb={},fcUb=function(a){var b=new fcZ;b.ta=a;return b};var fc_=function(a,b){fcj(this,a);fck(this,b)};fc_[fc].clone=function(){return new fc_(this[fcn],this[fcz])};fc_[fc].toString=function(){return"("+this[fcn]+" x "+this[fcz]+")"};fc_[fc].ceil=function(){fcj(this,fcg.ceil(this[fcn]));fck(this,fcg.ceil(this[fcz]));return this};fc_[fc].floor=function(){fcj(this,fcg.floor(this[fcn]));fck(this,fcg.floor(this[fcz]));return this};fc_[fc].round=function(){fcj(this,fcg[fcB](this[fcn]));fck(this,fcg[fcB](this[fcz]));return this};
fc_[fc].scale=function(a,b){var c="number"==typeof b?b:a;fcj(this,this[fcn]*a);fck(this,this[fcz]*c);return this};var fcYb=!fcV||fcV&&(fcU()||9<=fcAb);!fcsb&&!fcV||fcV&&fcV&&(fcU()||9<=fcAb)||fcsb&&fczb("1.9.1");fcV&&fczb("9");var fcZb=function(a){return fcO(a)?fce[fcD](a):a},fc_b=fcZb,fc0b=function(a,b,c,d){a=d||a;b=b&&"*"!=b?b.toUpperCase():"";if(a.querySelectorAll&&a.querySelector&&(b||c))return c=b+(c?"."+c:""),a.querySelectorAll(c);if(c&&a.getElementsByClassName){a=a.getElementsByClassName(c);if(b){d={};for(var e=0,f=0,k;k=a[f];f++)b==k.nodeName&&(d[e++]=k);fcda(d,e);return d}return a}a=a.getElementsByTagName(b||"*");if(c){d={};for(f=e=0;k=a[f];f++)b=k.className,"function"==typeof b[fct]&&fccb(b[fct](/\s+/),c)&&(d[e++]=
k);fcda(d,e);return d}return a},fc2b=function(a,b){fcfb(b,function(b,d){"style"==d?a[fcv].cssText=b:"class"==d?fcea(a,b):"for"==d?a.htmlFor=b:d in fc1b?a[fcr](fc1b[d],b):0==d.lastIndexOf("aria-",0)||0==d.lastIndexOf("data-",0)?a[fcr](d,b):a[d]=b})},fc1b={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"},fc3b=function(a){a=a[fcH];
a="CSS1Compat"==a.compatMode?a.documentElement:a[fcJ];return new fc_(a.clientWidth,a.clientHeight)},fc0=function(a,b,c){return fc4b(fce,arguments)},fc4b=function(a,b){var c=b[0],d=b[1];if(!fcYb&&d&&(d[fcF]||d[fcza])){c=["<",c];d[fcF]&&c[fcA](' name="',fc_a(d[fcF]),'"');if(d[fcza]){c[fcA](' type="',fc_a(d[fcza]),'"');var e={};fcjb(e,d);delete e[fcza];d=e}c[fcA](">");c=c[fcM]("")}c=a[fcia](c);d&&(fcO(d)?fcea(c,d):"array"==fcHa(d)?fcea(c,d[fcM](" ")):fc2b(c,d));2<b[fcG]&&fc5b(a,c,b,2);return c},fc5b=
function(a,b,c,d){function e(c){c&&b[fcm](fcO(c)?a.createTextNode(c):c)}for(;d<c[fcG];d++){var f=c[d];!fcIa(f)||fcJa(f)&&0<f.nodeType?e(f):fcbb(fc6b(f)?fcdb(f):f,e)}},fc7b=function(a){fc8a(a,"Node cannot be null or undefined.");return 9==a.nodeType?a:a.ownerDocument||a[fcH]},fc6b=function(a){if(a&&"number"==typeof a[fcG]){if(fcJa(a))return"function"==typeof a.item||"string"==typeof a.item;if("function"==fcHa(a))return"function"==typeof a.item}return!1};var fc8b="StopIteration"in fcN?fcN.StopIteration:fch("StopIteration"),fc9b=function(){};fc9b[fc].next=function(){throw fc8b;};fc9b[fc].__iterator__=function(){return this};var fc1=function(a,b){this.j={};this.e=[];this.$=this.v=0;var c=arguments[fcG];if(1<c){if(c%2)throw fch("Uneven number of arguments");for(var d=0;d<c;d+=2)this.set(arguments[d],arguments[d+1])}else a&&this.pb(a)};fc1[fc].P=function(){return this.v};fc1[fc].F=function(){this.K();for(var a=[],b=0;b<this.e[fcG];b++){var c=this.e[b];a[fcA](this.j[c])}return a};fc1[fc].r=function(){this.K();return this.e.concat()};fc1[fc].M=function(a){return fc$b(this.j,a)};
fc1[fc].clear=function(){this.j={};fcda(this.e,0);this.$=this.v=0};fc1[fc].remove=function(a){return fc$b(this.j,a)?(delete this.j[a],this.v--,this.$++,this.e[fcG]>2*this.v&&this.K(),!0):!1};fc1[fc].K=function(){if(this.v!=this.e[fcG]){for(var a=0,b=0;a<this.e[fcG];){var c=this.e[a];fc$b(this.j,c)&&(this.e[b++]=c);a++}fcda(this.e,b)}if(this.v!=this.e[fcG]){for(var d={},b=a=0;a<this.e[fcG];)c=this.e[a],fc$b(d,c)||(this.e[b++]=c,d[c]=1),a++;fcda(this.e,b)}};
fc1[fc].get=function(a,b){return fc$b(this.j,a)?this.j[a]:b};fc1[fc].set=function(a,b){fc$b(this.j,a)||(this.v++,this.e[fcA](a),this.$++);this.j[a]=b};fc1[fc].pb=function(a){var b;a instanceof fc1?(b=a.r(),a=a.F()):(b=fchb(a),a=fcgb(a));for(var c=0;c<b[fcG];c++)this.set(b[c],a[c])};fc1[fc].forEach=function(a,b){for(var c=this.r(),d=0;d<c[fcG];d++){var e=c[d],f=this.get(e);a[fcK](b,f,e,this)}};fc1[fc].clone=function(){return new fc1(this)};
fc1[fc].__iterator__=function(a){this.K();var b=0,c=this.e,d=this.j,e=this.$,f=this,k=new fc9b;k.next=function(){for(;;){if(e!=f.$)throw fch("The map has changed since the iterator was created");if(b>=c[fcG])throw fc8b;var k=c[b++];return a?k:d[k]}};return k};var fc$b=function(a,b){return fcaa[fc].hasOwnProperty[fcK](a,b)};var fcbc=function(a,b,c){if(fcO(b))fcac(a,c,b);else for(var d in b)fcac(a,b[d],d)},fcac=function(a,b,c){(c=fccc(a,c))&&(a[fcv][c]=b)},fcdc={},fccc=function(a,b){var c=fcdc[b];if(!c){var d=fc2a(b),c=d;void 0===a[fcv][d]&&(d=(fctb?"Webkit":fcsb?"Moz":fcV?"ms":fcrb?"O":null)+fc3a(d),void 0!==a[fcv][d]&&(c=d));fcdc[b]=c}return c},fcec=function(a,b){var c=fc7b(a);return c.defaultView&&c.defaultView.getComputedStyle&&(c=c.defaultView.getComputedStyle(a,null))?c[b]||c.getPropertyValue(b)||"":""},fcfc=function(a,
b){return fcec(a,b)||(a.currentStyle?a.currentStyle[b]:null)||a[fcv]&&a[fcv][b]},fcgc=function(a){var b;try{b=a.getBoundingClientRect()}catch(c){return{left:0,top:0,right:0,bottom:0}}fcV&&a.ownerDocument[fcJ]&&(a=a.ownerDocument,b.left=b[fcwa]-(a.documentElement.clientLeft+a[fcJ].clientLeft),b.top-=a.documentElement.clientTop+a[fcJ].clientTop);return b},fcjc=function(a,b,c){if(b instanceof fc_)c=b[fcz],b=b[fcn];else if(void 0==c)throw fch("missing height argument");fchc(a,b);fcic(a,c)},fckc=function(a,
b){"number"==typeof a&&(a=(b?fcg[fcB](a):a)+"px");return a},fcic=function(a,b){fck(a[fcv],fckc(b,!0))},fchc=function(a,b){fcj(a[fcv],fckc(b,!0))},fclc=function(a,b){if("none"!=fcfc(b,"display"))return a(b);var c=b[fcv],d=c.display,e=c.visibility,f=c.position;c.visibility="hidden";c.position="absolute";c.display="inline";var k=a(b);c.display=d;c.position=f;c.visibility=e;return k},fcmc=function(a){var b=a.offsetWidth,c=a.offsetHeight,d=fctb&&!b&&!c;return fcFa(b)&&!d||!a.getBoundingClientRect?new fc_(b,
c):(a=fcgc(a),new fc_(a[fcta]-a[fcwa],a.bottom-a.top))},fcnc=function(a,b){a[fcv].display=b?"":"none"};var fcoc={},fcpc={};var fcqc=function(a,b,c,d){b=b||"800";c=c||"550";d=d||"friendconnect";a=fcc.open(a,d,"menubar=no,toolbar=no,dialog=yes,location=yes,alwaysRaised=yes,width="+b+",height="+c+",resizable=yes,scrollbars=1,status=1");fcc.focus&&a&&a.focus()},fcrc=function(a,b){var c=fca[fcx][fcI]().communityId;fca.rpc[fcK](null,"signin",null,c,a,b)};fcR("goog.peoplesense.util.openPopup",fcqc);fcR("goog.peoplesense.util.finishSignIn",fcrc);var fcuc=function(a,b){var c=fcsc()+"/friendconnect/invite/friends",d=fcb(shindig[fcja][fcka]());fctc(c,d,a,b)},fctc=function(a,b,c,d){a+="?st="+b;c&&(a+="&customMessage="+fcb(c));d&&(a+="&customInviteUrl="+fcb(d));b=760;fcV&&(b+=25);fcqc(a,fci(b),"515","friendconnect_invite")};fcR("goog.peoplesense.util.invite",fcuc);fcR("goog.peoplesense.util.inviteFriends",fctc);var fcvc=function(a){this.url=a};fcvc[fc].l=function(a,b){if(0<=this.url[fcE]("?"+a+"=")||0<=this.url[fcE]("&"+a+"="))throw fch("duplicate: "+a);if(null===b||void 0===b)return this;var c=0<=this.url[fcE]("?")?"&":"?";this.url+=c+a+"="+fcb(fci(b));return this};fcvc[fc].toString=function(){return this.url};var fcsc=function(){return fcc[fcAa]},fcwc=function(a,b,c,d,e,f,k){b=b||"800";c=c||"550";d=d||"friendconnect";f=f||!1;fca.rpc[fcK](null,"openLightboxIframe",k,a,shindig[fcja][fcka](),b,c,d,e,null,null,null,f)},fcxc=function(a,b){var c=fca[fcx][fcI]().psinvite||"",d=new fcvc(fcsc()+"/friendconnect/signin/home");d.l("st",fcc.shindig[fcja][fcka]());d.l("psinvite",c);d.l("iframeId",a);d.l("loginProvider",b);d.l("subscribeOnSignin","1");fcqc(d[fcma]());return!1},fcyc=function(){var a=fca[fcx][fcI]().communityId;
fca.rpc[fcK](null,"signout",null,a)},fcAc=function(a,b){var c=fcsc()+"/friendconnect/settings/edit?st="+fcb(shindig[fcja][fcka]())+(a?"&iframeId="+fcb(a):"");b&&(c=c+"&"+b);fczc(c)},fcBc=function(a){a=fcsc()+"/friendconnect/settings/siteProfile?st="+fcb(a);fczc(a)},fczc=function(a){var b=800;fcV&&(b+=25);fcqc(a,fci(b),"510")},fcCc=function(a,b,c,d){d=d||2;var e=null;if("text"==b)e=fc0("div",{"class":"gfc-button-text"},fc0("div",{"class":"gfc-icon"},fc0("a",{href:"javascript:void(0);"},c))),a[fcm](e);
else if("long"==b||"standard"==b)e=1==d?fc0("div",{"class":"gfc-inline-block gfc-primaryactionbutton gfc-button-base"},fc0("div",{"class":"gfc-inline-block gfc-button-base-outer-box"},fc0("div",{"class":"gfc-inline-block gfc-button-base-inner-box"},fc0("div",{"class":"gfc-button-base-pos"},fc0("div",{"class":"gfc-button-base-top-shadow",innerHTML:"&nbsp;"}),fc0("div",{"class":"gfc-button-base-content"},fc0("div",{"class":"gfc-icon"},c)))))):fc0("table",{"class":"gfc-button-base-v2 gfc-button",cellpadding:"0",
cellspacing:"0"},fc0("tbody",{"class":""},fc0("tr",{"class":""},fc0("td",{"class":"gfc-button-base-v2 gfc-button-1"}),fc0("td",{"class":"gfc-button-base-v2 gfc-button-2"},c),fc0("td",{"class":"gfc-button-base-v2 gfc-button-3"})))),a[fcm](e),"standard"==b&&(b=fc0("div",{"class":"gfc-footer-msg"},"with Google Friend Connect"),1==d&&a[fcm](fc0("br")),a[fcm](b));return e},fcDc=function(a,b){if(!a)throw"google.friendconnect.renderSignInButton: missing options";var c=a[fcv]||"standard",d=a.text,e=a.version;
if("standard"==c)d=a.text||"Sign in";else if("text"==c||"long"==c)d=a.text||"Sign in with Friend Connect";var f=a.element;if(!f){f=a.id;if(!f)throw"google.friendconnect.renderSignInButton: options[id] and options[element] == null";f=fc_b(f);if(!f)throw"google.friendconnect.renderSignInButton: element "+a.id+" not found";}fcl(f,"");c=fcCc(f,c,d,e);fcc[fcxa]?c[fcxa]("click",b,!1):c.attachEvent("onclick",b)},fcEc=function(a,b){b=b||fcQ(fcxc,null,null,null,null);fcDc(a,b)},fcFc=function(a,b){fca.rpc[fcK](null,
"putReloadViewParam",null,a,b);var c=fca.views.getParams();c[a]=b},fcGc=function(a,b){var c=new fcvc("/friendconnect/gadgetshare/friends");c.l("customMessage",a);c.l("customInviteUrl",b);c.l("container","glb");var d=310;fcV&&(d+=25);fcwc(c[fcma](),fci(d),"370")};fcR("goog.peoplesense.util.getBaseUrl",fcsc);fcR("goog.peoplesense.util.finishSignIn",fcrc);fcR("goog.peoplesense.util.signout",fcyc);fcR("goog.peoplesense.util.signin",fcxc);fcR("goog.peoplesense.util.editSettings",fcAc);
fcR("goog.peoplesense.util.editSSProfile",fcBc);fcR("goog.peoplesense.util.setStickyViewParamToken",fcFc);fcR("google.friendconnect.renderSignInButton",fcEc);fcR("goog.peoplesense.util.share",fcGc);fcR("goog.peoplesense.util.userAgent.IE",fcV);var fcHc={},fc2=function(a){this.h=new fc1;this.snippetId=a.id;this.site=a.site;a=a["view-params"];var b=a.skin;this.kc=(b?b.POSITION:"top")||"top";this.Nc={allowAnonymousPost:a.allowAnonymousPost||!1,scope:a.scope||"SITE",docId:a.docId||"",features:a.features||"video,comment",startMaximized:"true",disableMinMax:"true",skin:b};this.absoluteBottom=fcV&&!fczb("7");this.fixedIeSizes=fcV;fcc[fcxa]?fcc[fcxa]("resize",fcQ(this.fb,this),!1):fcc.attachEvent("onresize",fcQ(this.fb,this));this.ub()};
fc2[fc].ub=function(){if(!this.site)throw fch("Must supply site ID.");if(!this.snippetId)throw fch("Must supply a snippet ID.");};fc2[fc].b=10;fc2[fc].Ca=1;fc2[fc].q="fc-friendbar-";fc2[fc].t=fc2[fc].q+"outer";fc2[fc].ib=fc2[fc].t+"-shadow";fc2[fc].render=function(){fce.write(this.Cb());var a=fcZb(this.snippetId);fcl(a,this.O())};fc2[fc].Db=function(){var a=fcZb(this.t);return a=fclc(fcmc,a)[fcn]};fc2[fc].fb=function(){for(var a=this.h.r(),b=0;b<a[fcG];b++)this.wc(a[b]);goog&&fcoc&&fcpc&&fcIc&&fcJc("resize")};
fc2[fc].n=function(){return this.kc};fc2[fc].d=function(a){return this.q+"shadow-"+a};fc2[fc].ia=function(a){return this.q+"menus-"+a};fc2[fc].R=function(a){return this.q+a+"Target"};fc2[fc].fa=function(a){return this.q+a+"Drawer"};fc2[fc].Ta=function(){return this.R("")};fc2[fc].Ua=function(){return this.q+"wallpaper"};fc2[fc].Pa=function(){return this.fa("")};
fc2[fc].Cb=function(){var a=fcc.friendconnect_imageUrl+"/",b=a+"shadow_tc.png",c=a+"shadow_bc.png",d=a+"shadow_bl.png",e=a+"shadow_tl.png",f=a+"shadow_tr.png",k=a+"shadow_br.png",a=a+"shadow_cr.png",l=function(a,b){return fcV?'filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+a+'", sizingMethod="scale");':"background-image: url("+a+");background-repeat: "+b+"; "},m="position:absolute; top:";"top"!=this.n()&&(m="position:fixed; bottom:",this.absoluteBottom&&(m="position:absolute; bottom:"));
var n=c;"top"!=this.n()&&(n=b);var g=0,h=[];h[g++]='<style type="text/css">';"top"!=this.n()&&this.absoluteBottom&&(h[g++]="html, body {height: 100%; overflow: auto; };");h[g++]="#"+this.t+" {";h[g++]="background:#E0ECFF;";h[g++]="left:0;";h[g++]="height: "+(fcV?"35px;":"36px;");"top"!=this.n()&&this.absoluteBottom&&(h[g++]="margin-right: 20px;");h[g++]="padding:0;";h[g++]=m+" 0;";h[g++]="width:100%;";h[g++]="z-index:5000;";h[g++]="}";h[g++]="#"+this.ib+" {";h[g++]=l(n,"repeat-x");h[g++]="left:0;";
h[g++]="height:"+this.b+"px;";"top"!=this.n()&&this.absoluteBottom&&(h[g++]="margin-right: 20px;");h[g++]="padding:0;";h[g++]=m+(fcV?"35px;":"36px;");h[g++]="width:100%;";h[g++]="z-index:4998;";h[g++]="}";h[g++]="."+this.Pa()+" {";h[g++]="display: block;";h[g++]="padding:0;";h[g++]=m+(fcV?"34px;":"35px;");h[g++]="z-index:4999;";h[g++]="}";h[g++]="."+this.Ua()+" {";h[g++]="background: white;";h[g++]="height: 100%;";h[g++]="margin-right: "+this.b+"px;";h[g++]="}";h[g++]="."+this.Ta()+" {";h[g++]="border: "+
this.Ca+"px solid #ccc;";h[g++]="height: 100%;";h[g++]="left: 0;";h[g++]="background-image: url("+fcc.friendconnect_imageUrl+"/loading.gif);";h[g++]="background-position: center;";h[g++]="background-repeat: no-repeat;";h[g++]="}";h[g++]="."+this.d("cr")+" {";h[g++]=l(a,"repeat-y");h[g++]="height: 100%;";h[g++]="position:absolute;";h[g++]="right: 0;";h[g++]="top: 0;";h[g++]="width:"+this.b+"px;";h[g++]="}";h[g++]="."+this.d("bl")+" {";h[g++]=l(d,"no-repeat");h[g++]="height: "+this.b+"px;";h[g++]="position:absolute;";
h[g++]="width:"+this.b+"px;";h[g++]="}";h[g++]="."+this.d("tl")+" {";h[g++]=l(e,"no-repeat");h[g++]="height: "+this.b+"px;";h[g++]="position:absolute;";h[g++]="left:0px;";h[g++]="width:"+this.b+"px;";h[g++]="}";h[g++]="."+this.d("bc")+" {";h[g++]=l(c,"repeat-x");h[g++]="height: "+this.b+"px;";h[g++]="left: "+this.b+"px;";h[g++]="position:absolute;";h[g++]="right: "+this.b+"px;";h[g++]="}";h[g++]="."+this.d("tc")+" {";h[g++]=l(b,"repeat-x");h[g++]="height: "+this.b+"px;";h[g++]="left: "+this.b+"px;";
h[g++]="margin-left: "+this.b+"px;";h[g++]="margin-right: "+this.b+"px;";h[g++]="right: "+this.b+"px;";h[g++]="}";h[g++]="."+this.d("br")+" {";h[g++]=l(k,"no-repeat");h[g++]="height: "+this.b+"px;";h[g++]="position:absolute;";h[g++]="right: 0;";h[g++]="width: "+this.b+"px;";h[g++]="}";h[g++]="."+this.d("tr")+" {";h[g++]=l(f,"no-repeat");h[g++]="height: "+this.b+"px;";h[g++]="position:absolute;";h[g++]="right: 0;";h[g++]="top: 0;";h[g++]="width: "+this.b+"px;";h[g++]="}";h[g++]="</style>";return h[fcM]("")};
fc2[fc].O=function(){var a=['<div id="'+this.t+'"></div>','<div id="'+this.ib+'"></div>','<div id="'+this.ia(this.h.P())+'"></div>'];return a[fcM]("")};fc2[fc].wb=function(a,b,c,d){this.h.M(a)||(b=new fc3(this,a,b,c,d),c=this.h.P(),d=fcZb(this.ia(c)),fcl(d,b.O()+'<div id="'+this.ia(c+1)+'"></div>'),this.h.set(a,b))};fc2[fc].ma=function(a){(a=this.h.get(a))&&a.drawer&&fcnc(a.drawer,!1)};fc2[fc].mc=function(a){if(a=this.h.get(a))a.rendered=!1};
fc2[fc].refresh=function(){for(var a=this.h.r(),b=0;b<a[fcG];b++){var c=a[b];this.ma(c);this.mc(c)}};fc2[fc].gc=function(a){for(var b=this.h.F(),c=0;c<b[fcG];c++){var d=b[c];if(d.id==a){d.Jc();break}}};fc2[fc].fc=function(a){for(var b=this.h.F(),c=0;c<b[fcG];c++){var d=b[c];if(d.id==a){d.cc();break}}};fc2[fc].wc=function(a){(a=this.h.get(a))&&a.drawer&&a.oa()&&(a.da(),a.La(),a.Ba())};
fc2[fc].Ic=function(a,b){var c=this.h.get(a);if(c){c.drawer||(c.drawer=fcZb(this.fa(c[fcF])),c.target=fcZb(this.R(c[fcF])),c.sha_bc=fc0b(fce,"div","top"==this.n()?this.d("bc"):this.d("tc"),c.drawer)[0],c.sha_cr=fc0b(fce,"div",this.d("cr"),c.drawer)[0]);for(var d=this.h.r(),e=0;e<d[fcG];e++){var f=d[e];a!==f&&this.ma(f)}c.da(b);fcnc(c.drawer,!0);fcc.setTimeout(function(){c.Ba();c.La();c.render()},0)}};
var fc3=function(a,b,c,d,e){this.id=-1;this.bar=a;this.name=b;this.constraints=d;this.skin=e||{};fck(this,this.skin.HEIGHT||"0");this.url=fcc[fcAa]+c;this.sha_bc=this.target=this.drawer=null;this.loaded=this.rendered=!1;this.da()};
fc3[fc].da=function(a){fcjb(this.constraints,a||{});fcjb(this.skin,this.constraints);if(this.bar.fixedIeSizes&&this.constraints[fcwa]&&this.constraints[fcta]){a=this.bar.Db();var b=this.constraints[fcwa],c=this.constraints[fcta];a-=b+c;a%2&&(--a,this.skin.right=this.skin[fcta]+1);fcj(this.skin,a);delete this.skin[fcwa]}};
fc3[fc].Ba=function(){if(this.drawer){if(this.skin[fcn]){var a=this.bar.Ca,b=this.bar.b,c=fcV?2:0;fcjc(this.target,this.skin[fcn],"");fcjc(this.sha_bc,this.skin[fcn]-b+2*a-c,"");this.skin.rightShadow?fcjc(this.drawer,this.skin[fcn]+b+2*a-c,""):fcjc(this.drawer,this.skin[fcn]+2*a-c,"")}this.skin[fcta]&&(this.drawer[fcv].right=this.skin[fcta]+0+"px")}};
fc3[fc].La=function(){if(fcV&&this.drawer){var a=fclc(fcmc,this.target),b=a[fcn]-this.bar.b,a=a[fcz];0>b&&(b=0);this.sha_bc&&this.sha_bc[fcv]&&fcjc(this.sha_bc,b,"");this.sha_cr&&this.sha_cr[fcv]&&fcjc(this.sha_cr,"",a)}};
fc3[fc].O=function(){var a="display:none;",b="position: relative; ",c="",d="",e="",f="",k=!!this.skin.rightShadow;k||(c+="display: none; ",e+="display: none; ",d+="right: 0px; ",f+="margin-right: 0px; ");for(var l in this.skin){var m=Number(this.skin[l]);k&&0==fcSa(l,"width")&&(m+=this.bar.b);0==fcSa(l,"height")&&(b+=l+": "+m+"px; ");"rightShadow"!=l&&(0==fcSa(l,"height")&&(m+=this.bar.b),0==fcSa(l,"width")&&(m+=2),a+=l+": "+m+"px; ");fcV&&0==fcSa(l,"width")&&(m=k?m-2*this.bar.b:m-this.bar.b,d+=l+
": "+m+"px; ")}fcV&&0<(this[fcz]|0)&&(k=(this[fcz]|0)+2,c+="height: "+k+"px; ");k=0;l=[];l[k++]='<div id="'+this.bar.fa(this[fcF])+'"class="'+this.bar.Pa()+'"style="'+a+'"> ';"bottom"==this.bar.n()&&(l[k++]='<div class="'+this.bar.d("tl")+'"></div> <div class="'+this.bar.d("tc")+'"style="'+d+'"></div> <div class="'+this.bar.d("tr")+'"style="'+e+'"></div> ');l[k++]='<div style="'+b+'"> <div class="'+this.bar.Ua()+'"style="'+f+'"><div id="'+this.bar.R(this[fcF])+'"class="'+this.bar.Ta()+'"></div> <div class="'+
this.bar.d("cr")+'"style="'+c+'"></div> </div> </div> ';"top"==this.bar.n()&&(l[k++]='<div class="'+this.bar.d("bl")+'"></div> <div class="'+this.bar.d("bc")+'"style="'+d+'"></div> <div class="'+this.bar.d("br")+'"style="'+e+'"></div> ');l[k++]="</div> ";return l[fcM]("")};fc3[fc].Jc=function(){this.rendered=this.oa()};fc3[fc].cc=function(){this.loaded=this.oa()};fc3[fc].oa=function(){return!!this.drawer&&"none"!=this.drawer[fcv].display};
fc3[fc].render=function(){if(0==this.rendered){var a={};a.url=this.url;a.id=this.bar.R(this[fcF]);a.site=this.bar.site;a["view-params"]=fcP(this.bar.Nc);"profile"==this[fcF]&&(a["view-params"].profileId="VIEWER");this.skin&&fcjb(a["view-params"].skin,this.skin);a["view-params"].menuName=this[fcF];a["view-params"].opaque="true";a["view-params"].menuPosition=this.bar.kc;fck(a,"1px");fcc.google&&fcHc&&fc4&&(this.id=fc4.render(a))}};fcR("google.friendconnect.FriendBar",fc2);var fcLc=function(a){a=new fcKc(a);if(a.qa()%5)throw fch();for(var b=[],c=0;0<a.qa();c++)b[c]="0123456789abcdefghijklmnopqrstuv"[fcp](a.ic(5));return b[fcM]("")},fcKc=function(a){this.H=this.o=0;this.ca=a};fcKc[fc].qa=function(){return 8*(this.ca[fcG]-this.H)-this.o};
fcKc[fc].ic=function(a){var b=0;if(a>this.qa())throw fch();if(0<this.o){var b=255>>this.o&this.ca[this.H],c=8-this.o,d=fcg.min(a%8,c),c=c-d,b=b>>c;a-=d;this.o+=d;8==this.o&&(this.o=0,this.H++)}for(;8<=a;)b<<=8,b|=this.ca[this.H],this.H++,a-=8;0<a&&(b<<=a,b|=this.ca[this.H]>>8-a,this.o=a);return b};var fcMc=(new Date).getTime(),fc5=function(){},fcNc=function(){},fcOc=function(){},fcPc=function(){};fcS(fcPc,fcOc);var fcQc=function(a){if(a)for(var b in a)a.hasOwnProperty(b)&&(this[b]=a[b]);if(this.viewParams)for(var c in this.viewParams)/^FC_RELOAD_.*$/[fcva](c)&&(this.viewParams[c]=null)};fcQc[fc].render=function(a){var b=this;a&&(b.Kc(),this.Fb(function(c){fcbc(a,"visibility","hidden");fcl(a,c);b.refresh(a,c);c=function(a){fcbc(a,"visibility","visible")};c=fcMa(c,a);fcba(c,500);b.chrome=a}))};
fcQc[fc].Fb=function(a){return this.Lb(a)};var fc6=function(a){fcQc[fcK](this,a);this.V="../../";this.rpcToken=fci(fcg[fcB](2147483647*fcg.random()))};fcS(fc6,fcQc);fc6[fc].nb="gfc_iframe_";fc6[fc].ob="friendconnect";fc6[fc].Ma="";fc6[fc].xc="rpc_relay.html";fc6[fc].Y=function(a){this.V=a};fc6[fc].Kc=function(){return this.Ma=fci(fcg[fcB](2147483647*fcg.random()))};fc6[fc].ga=function(){return this.nb+this.Ma+"_"+this.id};
fc6[fc].refresh=function(a,b){var c=fc4.Qc,d,e={},f=fc4.Na(this.communityId),k=f[fct]("~"),l=fc4.xb;if(l&&1<k[fcG]){d=k[2];var k=k[1],m=[this.specUrl,this.communityId,k,l][fcM](":");e.sig=fc4.hash(d,m);e.userId=k;e.dateStamp=l}e.container=this.ob;e.mid=this.id;e.nocache=fc4.jc;e.view=this.aa;e.parent=fc4.T;this.debug&&(e.debug="1");this.specUrl&&(e.url=this.specUrl);this.communityId&&(l=fca[fcx][fcI]().profileId,e.communityId=this.communityId,(d=fca[fcx][fcI]().psinvite)&&(e.psinvite=d),l&&(e.profileId=
l));e.caller=fcRc();e.rpctoken=this.rpcToken;l=!1;d="";k=/Version\/3\..*Safari/;if((k=fctb&&fclb[fcq](k))||!fc4.S[this.specUrl]&&this.viewParams)e["view-params"]=fca[fcpa][fcua](this.viewParams),d="?viewParams="+fcb(e["view-params"]),l=!0;this.prefs&&(e.prefs=fca[fcpa][fcua](this.prefs));this.viewParams&&this.sendViewParamsToServer&&(e["view-params"]=fca[fcpa][fcua](this.viewParams));this[fcya]&&(e.locale=this[fcya]);this.secureToken&&(e.st=this.secureToken);k=fc4.Sa(this.specUrl);d=k+"ifr"+d+(this.hashData?
"&"+this.hashData:"");1!=fc4.Pc||l||f||this.secureToken?f&&!e.sig&&(e.fcauth=f):e.sig||(c="get");f=this.ga();fcSc(f,d,c,e,a,b,this.rpcToken)};var fc7=function(){this.k={};this.T="http://"+fce[fcu].host;this.aa="default";this.jc=1;this.Uc=0;this.Rc="US";this.Sc="en";this.Tc=2147483647};fcS(fc7,fcNc);fc7[fc].w=fcQc;fc7[fc].B=new fcPc;fc7[fc].hb=function(a){this.jc=a};fc7[fc].Ka=function(a){this.Pc=a};fc7[fc].Ra=function(a){return"gadget_"+a};fc7[fc].A=function(a){return this.k[this.Ra(a)]};
fc7[fc].N=function(a){return new this.w(a)};fc7[fc].qb=function(a){a.id=this.Mb();this.k[this.Ra(a.id)]=a};fc7[fc].hc=0;fc7[fc].Mb=function(){return this.hc++};var fcUc=function(){fc7[fcK](this);this.B=new fcTc};fcS(fcUc,fc7);fcUc[fc].w=fc6;fcUc[fc].X=function(a){a[fcq](/^http[s]?:\/\//)||(a=fce[fcu][fcqa][fcq](/^[^?#]+\//)[0]+a);this.T=a};fcUc[fc].J=function(a){var b=this.B.Qa(a);a.render(b)};var fcTc=function(){this.Bb={}};fcS(fcTc,fcOc);
fcTc[fc].rb=function(a,b){this.Bb[a]=b;var c=fce[fcD](b).className;c||0!=c[fcG]||fcea(fce[fcD](b),"gadgets-gadget-container")};fcTc[fc].Qa=function(a){return(a=this.Bb[a.id])?fce[fcD](a):null};var fc8=function(a){fc6[fcK](this,a);a=a||{};this.aa=a.view||"profile"};fcS(fc8,fc6);fc8[fc].tb="canvas.html";fc8[fc].zb="/friendconnect/embed/";
var fcRc=function(){var a="1"==fca[fcx][fcI]().canvas||"1"==fca[fcx][fcI]().embed,b=null;a&&(b=fca[fcx][fcI]().caller);b||(a=fce[fcu],b=a.search[fco](/([&?]?)psinvite=[^&]*(&?)/,function(a,b,e){return e?b:""}),b=a.protocol+"//"+a.hostname+(a.port?":"+a.port:"")+a.pathname+b);return b};fc8[fc].Gc=function(a){this.aa=a};fc8[fc].la=function(){return this.aa};fc8[fc].getBodyId=function(){return this.ga()+"_body"};
fc8[fc].Lb=function(a){var b=this.specUrl;void 0===b&&(b="");var b=(fc4.Sa(b)||this.V)+this.xc,c=this.ga();fca.rpc.setRelayUrl(c,b);b='<div id="'+this.getBodyId()+'"><iframe id="'+c+'" name="'+c;b=0==this[fcz]?b+'" style="width:1px; height:1px;':b+'" style="width:100%;';this.viewParams.opaque&&(b+="background-color:white;");b+='"';b+=' frameborder="0" scrolling="no"';this.viewParams.opaque||(b+=' allowtransparency="true"');b+=this[fcz]?' height="'+this[fcz]+'"':"";b+=this[fcn]?' width="'+this[fcn]+
'"':"";b+="></iframe>";this.showEmbedThis&&(b+='<a href="javascript:void(0);" onclick="google.friendconnect.container.showEmbedDialog(\''+this.divId+"'); return false;\">Embed this</a>");b+="</div>";a(b)};
fc8[fc].Eb=function(){var a=fcRc(),a="canvas=1&caller="+fcb(a),b=fca[fcx][fcI]().psinvite;b&&(a+="&psinvite="+fcb(b));a+="&site="+fcb(this.communityId);b=fcP(this.viewParams);if(null!=b.skin)for(var c="BG_IMAGE BG_COLOR FONT_COLOR BG_POSITION BG_REPEAT ANCHOR_COLOR FONT_FACE BORDER_COLOR CONTENT_BG_COLOR CONTENT_HEADLINE_COLOR CONTENT_LINK_COLOR CONTENT_SECONDARY_TEXT_COLOR CONTENT_SECONDARY_LINK_COLOR CONTENT_TEXT_COLOR ENDCAP_BG_COLOR ENDCAP_LINK_COLOR ENDCAP_TEXT_COLOR CONTENT_VISITED_LINK_COLOR ALTERNATE_BG_COLOR".split(" "),d=
0;d<c[fcG];d++)delete b.skin[c[d]];b=fcb(fca[fcpa][fcua](b));b=b[fco]("\\","%5C");return fc4.T+this.tb+"?url="+fcb(this.specUrl)+(a?"&"+a:"")+"&view-params="+b};fc8[fc].D=function(a){a=a||fcd+this.zb+this.communityId;return this.Gb(a,"embed=1")};fc8[fc].C=function(a){return'<iframe src="'+this.D(a)+'" style="height:500px" scrolling="no" allowtransparency="true" border="0" frameborder="0" ></iframe>'};
fc8[fc].Gb=function(a,b){var c=fcb(fca[fcpa][fcua](this.viewParams)),c=c[fco]("\\","%5C");return a+"?url="+fcb(this.specUrl)+(b?"&"+b:"")+"&view-params="+c};fc8[fc].Pb=function(){var a="1"==fca[fcx][fcI]().canvas||"1"==fca[fcx][fcI]().embed,b=null;a&&((b=fca[fcx][fcI]().caller)||(b="javascript:history.go(-1)"));return b};fc8[fc].Rb=function(a){var b=null;if("canvas"==a)b=this.Eb();else if("profile"==a)b=this.Pb();else return null;return fcRb(fcVb(b))};
var fc9=function(){fcUc[fcK](this);fca.rpc[fcs]("signin",fc5[fc].signin);fca.rpc[fcs]("signout",fc5[fc].signout);fca.rpc[fcs]("resize_iframe",fc5[fc].gb);fca.rpc[fcs]("set_title",fc5[fc].setTitle);fca.rpc[fcs]("requestNavigateTo",fc5[fc].eb);fca.rpc[fcs]("api_loaded",fc5[fc].Aa);fca.rpc[fcs]("createFriendBarMenu",fc5[fc].Ga);fca.rpc[fcs]("showFriendBarMenu",fc5[fc].jb);fca.rpc[fcs]("hideFriendBarMenu",fc5[fc].Va);fca.rpc[fcs]("putReloadViewParam",fc5[fc].$a);fca.rpc[fcs]("getViewParams",fc5[fc].Ja);
fca.rpc[fcs]("getContainerBaseTime",fc5[fc].Ia);fca.rpc[fcs]("openLightboxIframe",fc5[fc].Za);fca.rpc[fcs]("showMemberProfile",fc5[fc].lb);fca.rpc[fcs]("closeLightboxIframe",fcQ(this.u,this));fca.rpc[fcs]("setLightboxIframeTitle",fcQ(this.Cc,this));fca.rpc[fcs]("refreshAndCloseIframeLightbox",fcQ(this.lc,this));var a=fcVc;a[fcs]();a.mb(this,"load",this.Tb);a.mb(this,"start",this.Ub);this.V="../../";this.X("");this.hb(0);this.Ka(1);this.pa=null;this.apiVersion="0.8";this.openSocialSecurityToken=null;
this.W="";this.Ha={};this.bc=null;this.ac=!1;this.xb=this.ec=this.lastIframeLightboxOpenArguments=this.lastLightboxCallback=this.lastLightboxDialog=null;this.Qc="post"};fcS(fc9,fcUc);fc9[fc].Ac=function(a){this.xb=a};fc9[fc].w=fc8;fc9[fc].S={};fc9[fc].Ec=function(a){this.pa=a};fc9[fc].Sa=function(a){var b=fc9[fc].S[a];if(!b)if(0!==this.pa[fcE]("https://")){var b=this.vb(a),c="//";0==a[fcE]("https://")?c="https://":0==a[fcE]("http://")&&(c="http://");b=[c,b,this.pa][fcM]("")}else b=this.pa;return b};
fc9[fc].vb=function(a){var b=new fcX;a=fcBb(a);b[fcL](a);b=b.digest();return b=fcLc(b)};
var fcWc=function(a,b){var c=b?b:fcc.top,d=c.frames;try{if(c.frameElement.id==a)return c}catch(e){}for(c=0;c<d[fcG];++c){var f=fcWc(a,d[c]);if(f)return f}return null},fcSc=function(a,b,c,d,e,f,k){var l="gfc_load_"+a;b='<html><head><style type="text/css">body {background:transparent;}</style>'+(fcV?'<script type="text/javascript">window.goback=function(){history.go(-1);};setTimeout("goback();", 0);\x3c/script>':"")+"</head><body><form onsubmit='window.goback=function(){};return false;' style='margin:0;padding:0;' id='"+
l+"' method='"+c+"' ' action='"+fca[fcx].escapeString(b)+"'>";for(var m in d)b+="<input type='hidden' name='"+fca[fcx].escapeString(m)+"' value='' >";b+="</form></body></html>";c=fcWc(a);var n;try{n=c[fcH]||c.contentWindow[fcH]}catch(g){e&&f&&(fcl(e,""),fcl(e,f),c=fcWc(a),n=c[fcH]||c.contentWindow[fcH])}k&&fca.rpc.setAuthToken(a,k);n.open();n.write(b);n.close();a=n[fcD](l);for(m in d)a[m].value=d[m];if(fcV)a.onsubmit();a.submit()};
fc9[fc].Ab=function(){var a=fca[fcx][fcI]().fcsite,b=fca[fcx][fcI]().fcprofile;a&&b&&fc4.ya(b,a)};fc9[fc].Bc=function(a,b){this.S[a]=b};fc9[fc].U=function(){var a=/Version\/3\..*Safari/;if(a=fctb&&fclb[fcq](a))fce[fcu].reload();else{null!=fc4.g&&fc4.g.refresh();for(var b in fc4.k)a=fc4.k[b],this.J(a);null!=this.lastIframeLightboxOpenArguments&&(b=this.lastIframeLightboxOpenArguments,this.u(),this.ra[fcy](this,b))}};
fc9[fc].X=function(a){a[fcq](/^http[s]?:\/\//)||(a=a&&0<a[fcG]&&"/"==a[fcCa](0,1)?fce[fcu][fcqa][fcq](/^http[s]?:\/\/[^\/]+\//)[0]+a[fcCa](1):fce[fcu][fcqa][fcq](/^[^?#]+\//)[0]+a);this.T=a};fc9[fc].ea=function(a){return"fcauth"+a};fc9[fc].ka=function(a){return"fcauth"+a+"-s"};fc9[fc].hash=function(a,b){var c=new fcX,d=fcIb(a,!0),c=new fcW(c,d,64),d=fcBb(b),c=c.Kb(d);return fcHb(c,!0)};fc9[fc].Na=function(a){return a=fcLb.get(this.ea(a))||fcLb.get(this.ka(a))||this.Ha[a]||""};
fc9[fc].Y=function(a){this.V=a};fc9[fc].Fc=function(a){this.W=a};fc9[fc].N=function(a){a=new this.w(a);a.Y(this.V);return a};fc9[fc].la=function(){return this.aa};fc9[fc].Dc=function(a){this.ec=a};var fc$=function(a){return(a=a[fcq](/_([0-9]+)$/))?fcca(a[1],10):null};
fc9[fc].Z=function(a,b,c,d,e,f){this.Oc||(this.ba(fcc[fcAa]+"/friendconnect/styles/container.css?d="+this.W),this.Oc=!0);var k=fcXc(d);this.bc!=(k?"rtl":"ltr")&&(this.ba(fcc[fcAa]+"/friendconnect/styles/lightbox"+(k?"-rtl":"")+".css?d="+this.W),this.bc=k?"rtl":"ltr");this.ac||(this.sb(fcc[fcAa]+"/friendconnect/script/lightbox.js?d="+this.W),this.ac=!0);b=b||0;if(goog.ui&&goog.ui[fcoa]){this.u();b=new goog.ui[fcoa]("lightbox-dialog",!0);var l=this;goog.events.listen(b,goog.ui[fcoa].EventType.AFTER_HIDE,
function(){l.lastLightboxCallback&&l.lastLightboxCallback();l.Fa()});b.setDraggable(!0);b.setDisposeOnHide(!0);b.setBackgroundElementOpacity(.5);b.setButtonSet(new goog.ui[fcoa].ButtonSet);this.lastLightboxDialog=b;this.lastLightboxCallback=c||null;c=b.getDialogElement();e=e||702;fcbc(c,"width",fci(e)+"px");f&&fcbc(c,"height",fci(f)+"px");a(b);b.getDialogElement()[fcv].direction=k?"rtl":"ltr"}else if(5>b)b++,a=fcQ(this.Z,this,a,b,c,d,e,f),fcba(a,1E3);else throw this.Fa(),fch("lightbox.js failed to load");
};fc9[fc].u=function(a){var b=this.lastLightboxDialog,c=this.lastLightboxCallback;this.lastLightboxCallback=null;null!=b&&(this.lastLightboxDialog.dispatchEvent(goog.ui[fcoa].EventType.AFTER_HIDE),b.dispose(),null!=c&&c(a))};fc9[fc].Fa=function(){this.lastIframeLightboxOpenArguments=this.lastLightboxCallback=this.lastLightboxDialog=null};fc9[fc].Cc=function(a){this.lastLightboxDialog&&this.lastLightboxDialog.setTitle(a)};fc9[fc].lc=function(){this.u();this.U()};
fc5[fc].eb=function(a,b){var c=fc$(this.f),c=fc4.A(c),d=fcP(c.originalParams);b&&(d["view-params"]=d["view-params"]||{},d["view-params"]=b);d.locale=c[fcya];if(c.useLightBoxForCanvas)d.presentation=a,null!=fc4.lastLightboxDialog?fc4.u():fc4.kb(d);else if((c=c.Rb(a))&&fce[fcu][fcqa]!=c)if("1"==fca[fcx][fcI]().embed)try{fcc.parent.location=c}catch(e){fcc.top.location=c}else fce[fcu].href=c};
fc9[fc].kb=function(a,b){a=a||{};var c=a[fcya],d=fcXc(c),e=this;this.u();this.Z(function(b){var c=fc0("div",{},fc0("div",{id:"gadget-signin",style:"background-color:#ffffff;height:32px;"}),fc0("div",{id:"gadget-lb-canvas",style:"background-color:#ffffff;"}));b.getTitleTextElement()[fcm](fc0("div",{id:"gfc-canvas-title",style:"color:#000000;"}));b[fcDa]()[fcm](c);b.setVisible(!0);var c=fcP(a),l=fc3b(fcc),m=fcg[fcB](.7*l[fcz]),l={BORDER_COLOR:"#cccccc",ENDCAP_BG_COLOR:"#e0ecff",ENDCAP_TEXT_COLOR:"#333333",
ENDCAP_LINK_COLOR:"#0000cc",ALTERNATE_BG_COLOR:"#ffffff",CONTENT_BG_COLOR:"#ffffff",CONTENT_LINK_COLOR:"#0000cc",CONTENT_TEXT_COLOR:"#333333",CONTENT_SECONDARY_LINK_COLOR:"#7777cc",CONTENT_SECONDARY_TEXT_COLOR:"#666666",CONTENT_HEADLINE_COLOR:"#333333"};c.id="gadget-lb-canvas";fck(c,fcg.min(498,m)+"px");c.maxHeight=m;c.keepMax&&(fck(c,m),fcbc(b[fcDa](),"height",m+35+"px"));c["view-params"]=c["view-params"]||{};c["view-params"].opaque=!0;c["view-params"].skin=c["view-params"].skin||{};fcNa(c["view-params"].skin,
l);e.render(c);m={id:"gadget-signin",presentation:"canvas"};m.site=c.site;m.titleDivId="gfc-canvas-title";m["view-params"]={};m["view-params"].opaque=!0;m.keepMax=c.keepMax;c.securityToken&&(m.securityToken=c.securityToken);c=fcP(l);c.ALIGNMENT=d?"left":"right";e.bb(m,c);b.reposition()},void 0,b,c)};fc5[fc].jb=function(a,b){null!=fc4.g&&fc4.g.Ic(a,b)};fc5[fc].Va=function(a){null!=fc4.g&&fc4.g.ma(a)};
fc5[fc].Za=function(a,b,c,d,e,f,k,l,m,n){var g=this.f;a=a+(0<=a[fcE]("?")?"&":"?")+"iframeId="+g;fc4.ra(a,b,c,d,e,f,k,l,m,n,this.callback)};
fc9[fc].ra=function(a,b,c,d,e,f,k,l,m,n,g){var h=fc3b(fcc);null==d&&(d=fcg[fcB](.7*h[fcz]));null==c&&(c=fcg[fcB](.7*h[fcn]));for(var p=[],h=0;h<arguments[fcG]&&10>h;h++)p[fcA](arguments[h]);if("/"==!a[0])throw fch("lightbox iframes must be relative to fc server");var t=this,q=f?fcP(f):{},u=fci(fcg[fcB](2147483647*fcg.random())),r="gfc_lbox_iframe_"+u;fca.rpc.setAuthToken(r,u);b||(b=fc4.openSocialSecurityToken);var v=fc4.openSocialSiteId;fc4.Z(function(c){t.lastIframeLightboxOpenArguments=p;var f=
"st="+fcb(b)+"&parent="+fcb(fc4.T)+"&rpctoken="+fcb(u);l||(q.iframeId=r,q.iurl=a,a=fcd+"/friendconnect/lightbox");var g=d-54;fck(q,g);var h='<iframe id="'+r,h=h+('" width="100%" height="'+g+'" frameborder="0" scrolling="auto"></iframe>');c.setContent(h);e&&(c.setTitle(e),n&&(g=c.getTitleTextElement(),fcPb(g,"lightbox-dialog-title-small-text")));c.setVisible(!0);m||(q.fcauth=fc4.Na(v));a+=(0<=a[fcE]("?")?"&":"?")+f+"&communityId="+v;fcSc(r,a,"POST",q,null,null,null)},void 0,g,void 0,c,d)};
fc5[fc].Ja=function(){var a=fc$(this.f),a=fc4.A(a);return a.viewParams};fc5[fc].Ia=function(){return fcMc};fc5[fc].$a=function(a,b){var c=fc$(this.f),c=fc4.A(c);c.viewParams[a]=b};fc9[fc].Tb=function(a,b){null!=fc4.g&&fc4.g.fc(b)};fc9[fc].Ub=function(a,b){null!=fc4.g&&fc4.g.gc(b)};fc5[fc].Ga=function(a,b,c,d){null!=fc4.g&&fc4.g.wb(a,b,c,d)};fc9[fc].J=function(a){var b=this.B.Qa(a);a.render(b);this.B.postProcessGadget&&this.B.postProcessGadget(a)};
fc5[fc].signout=function(a){fc4.ab(fc4.ea(a));fc4.ab(fc4.ka(a));fc4.Ha={};fc4.U();return!1};fc9[fc].ab=function(a){for(var b=fce[fcu].pathname,b=b[fct]("/"),c=0;c<b[fcG];c++){for(var d=fcf(c+1),e=0;e<c+1;e++)d[e]=b[e];fcLb.remove(a,d[fcM]("/")+"/")}};
fc5[fc].gb=function(a){var b=fce[fcD](this.f);b&&0<a&&fck(b[fcv],a+"px");(b=fce[fcD](this.f+"_body"))&&0<a&&fck(b[fcv],a+"px");if(b=fc$(this.f)){var c=fc4.A(b);c&&((b=fce[fcD](c.divId))&&0<a&&(c&&c[fcra]&&c[fcra]<a&&(a=c[fcra],b[fcv].overflowY="auto"),fck(b[fcv],a+"px")),!c.keepMax&&"canvas"==c.la()&&fc4.lastLightboxDialog&&fc4.lastLightboxDialog.reposition(),fcbc(c.chrome,"visibility","visible"))}};fc5[fc].setTitle=function(a){var b=fc$(this.f),b=fc4.A(b);(b=b.titleDivId)&&fcl(fce[fcD](b),fca[fcx].escapeString(a))};
fc5[fc].signin=function(a,b,c){fcLb.set(fc4.ea(a),b,31104E3,c);fcLb.set(fc4.ka(a),b,-1,c);fc4.Ha[a]=b;fc4.U()};var fcZc=function(a){fcEc(a,fcYc)};fc9[fc].rc=function(a,b){b&&this.m(b,a);var c={};c.url=fcd+"/friendconnect/gadgets/members.xml";this.render(this.s(a,c))};fc9[fc].tc=function(a,b){b&&this.m(b,a);var c={};c.url=fcd+"/friendconnect/gadgets/review.xml";c["view-params"]={startMaximized:"true",disableMinMax:"true",features:"review"};this.render(this.s(a,c))};
fc9[fc].ua=function(a,b){b&&this.m(b,a);var c={};c.url=fcd+"/friendconnect/gadgets/wall.xml";c["view-params"]={startMaximized:"true",disableMinMax:"true",features:"comment"};this.render(this.s(a,c))};fc9[fc].bb=function(a,b){b&&this.m(b,a);var c={};c.url=fcd+"/friendconnect/gadgets/signin.xml";fck(c,32);this.render(this.s(a,c))};
fc9[fc].oc=function(a,b){b&&this.m(b,a);a.prefs=a.prefs||{};a.sendViewParamsToServer=!0;a.prefs.hints=fcc.google_hints;var c={};c.url=fcd+"/friendconnect/gadgets/ads.xml";fck(c,90);this.render(this.s(a,c))};fc9[fc].xa=function(a,b){if(a.id){b&&this.m(b,a);a["view-params"]=a["view-params"]||{};a["view-params"].opaque="true";this.g=new fc2(a);this.g.render();var c={};c.url=fcd+"/friendconnect/gadgets/friendbar.xml";a.id=this.g.t;fck(a,"1");this.render(this.s(a,c))}};fc9[fc].qc=fc9[fc].xa;
fc9[fc].wa=function(a,b){a=a||{};a.url=fcd+"/friendconnect/gadgets/signin.xml";a.site=a.site||fca[fcx][fcI]().site;fck(a,32);this.va(a,b)};fc9[fc].pc=fc9[fc].wa;fc9[fc].vc=fc9[fc].ua;fc9[fc].m=function(a,b){var c=b["view-params"];c||(c={},b["view-params"]=c);c.skin=a};fc9[fc].s=function(a,b){var c=this.Ya(b,a);if(b["view-params"]){var d=b["view-params"];a["view-params"]&&(d=this.Ya(d,a["view-params"]));c["view-params"]=d}return c};fc9[fc].sc=function(a,b){b&&this.m(b,a);this.render(a)};
fc9[fc].Ya=function(a,b){var c={},d;for(d in b)c[d]=b[d];for(d in a)"undefined"==typeof c[d]&&(c[d]=a[d]);return c};
fc9[fc].render=function(a){this.openSocialSiteId=a.site;a["view-params"]=a["view-params"]||{};var b=this.N({divId:a.id,specUrl:a.url,communityId:a.site,height:a[fcz],locale:a[fcya]||this.ec,secureToken:a.securityToken,titleDivId:a.titleDivId,showEmbedThis:a.showEmbedThis,useLightBoxForCanvas:a.useLightBoxForCanvas||"undefined"==typeof a.useLightBoxForCanvas&&fcc.friendconnect_lightbox,viewParams:a["view-params"],prefs:a.prefs,originalParams:a,debug:a.debug,maxHeight:a[fcra],sendViewParamsToServer:a.sendViewParamsToServer,
keepMax:a.keepMax});a.presentation&&b.Gc(a.presentation);this.qb(b);this.B.rb(b.id,a.id);fcba(function(){fc4.J(b)},0);return b.id};fc9[fc].uc=function(a,b){a=a||{};a.presentation="canvas";this.cb(a,b)};
fc9[fc].cb=function(a,b,c){a=a||{};a.url=fca[fcx][fcI]().url;a.site=fca[fcx][fcI]().site||a.site;var d=fca[fcx][fcI]()["view-params"];d&&(a["view-params"]=fca[fcpa].parse(decodeURIComponent(d)));c&&(a["view-params"]=a["view-params"]||{},a["view-params"].useFixedHeight=!0,fck(a["view-params"],c),b=b||{},b.HEIGHT=fci(c));this.va(a,b)};fc9[fc].va=function(a,b){a=a||{};b&&this.m(b,a);"1"==fca[fcx][fcI]().canvas?a.presentation="canvas":"1"==fca[fcx][fcI]().embed&&(a.presentation="embed");fc4.render(a)};
fc9[fc].Sb=function(){var a=fca[fcx][fcI]().caller;a&&fce[fcu][fcqa]!=a&&8<a[fcG]&&("http://"==a.substr(0,7)[fcEa]()||"https://"==a.substr(0,8)[fcEa]())?fce[fcu].href=a:(a=fca[fcx][fcI]().site)?fce[fcu].href=fcd+"/friendconnect/directory/site?id="+a:fcc.history.go(-1)};fc9[fc].I="";fc9[fc].Nb=function(){return this.I};fc9[fc].yc=function(a){this.apiVersion=a};fc9[fc].ba=function(a){var b=fce[fcia]("link");b[fcr]("rel","stylesheet");b[fcr]("type","text/css");b[fcr]("href",a);fce.getElementsByTagName("head")[0][fcm](b)};
fc9[fc].sb=function(a){var b=fce[fcia]("script");b[fcr]("src",a);b[fcr]("type","text/javascript");fce.getElementsByTagName("head")[0][fcm](b)};fc9[fc].Ea=function(a){fce[fcJ]?a():fcc[fcxa]?fcc[fcxa]("load",a,!1):fcc.attachEvent("onload",a)};fc9[fc].na=function(a){if(!a.site)throw"API not loaded, please pass in a 'site'";this.ba(fcc[fcAa]+"/friendconnect/styles/container.css?d="+this.W);this.openSocialSiteId=a.site;this.apiLoadedCallback=a.onload;this.Ea(fcQ(this.Xa,this,a,"fc-opensocial-api"))};
fc9[fc].dc=fc9[fc].na;fc9[fc].Xb=function(a){var b={};b.site=this.openSocialSiteId;b["view-params"]={txnId:a};this.Xa(b,"gfc-"+a)};fc9[fc].nc=function(a){var b={},c;for(c in this.k){var d=this.k[c];if(d.viewParams&&d.viewParams.txnId==a)break;else b[c]=d}this.k=b;(a=fce[fcD]("gfc-"+a))&&a.parentNode&&a.parentNode.removeChild&&a.parentNode.removeChild(a)};fc9[fc].Hb=function(){return"<Templates xmlns:fc='http://www.google.com/friendconnect/makeThisReal'>  <Namespace prefix='fc' url='http://www.google.com/friendconnect/makeThisReal'/>  <Template tag='fc:signIn'>    <div onAttach='google.friendconnect.renderSignInButton({element: this})'></div>  </Template></Templates>"};
fc9[fc].Ob=function(){return"<Templates xmlns:os='http://ns.opensocial.org/2008/markup'><Namespace prefix='os' url='http://ns.opensocial.org/2008/markup'/><Template tag='os:Name'>  <span if='${!My.person.profileUrl}'>${My.person.displayName}</span>  <a if='${My.person.profileUrl}' href='${My.person.profileUrl}'>      ${My.person.displayName}</a></Template><Template tag='os:Badge'>  <div><img if='${My.person.thumbnailUrl}' src='${My.person.thumbnailUrl}'/>   <os:Name person='${My.person}'/></div></Template><Template tag='os:PeopleSelector'>  <select onchange='google.friendconnect.PeopleSelectorOnChange(this)' name='${My.inputName}'          multiple='${My.multiple}' x-var='${My.var}' x-max='${My.max}'          x-onselect='${My.onselect}'>    <option repeat='${My.group}' value='${Cur.id}' selected='${Cur.id == My.selected}'>        ${Cur.displayName}    </option>  </select></Template></Templates>"};
var fc_c=function(a){var b;if(a.multiple){b=[];for(var c=0;c<a[fcw][fcG];c++)a[fcw][c].selected&&b[fcA](a[fcw][c].value);c=a.getAttribute("x-max");try{c*=1}catch(d){c=0}if(c&&b[fcG]>c&&a["x-selected"])for(b=a["x-selected"],c=0;c<a[fcw][fcG];c++){a[fcw][c].selected=!1;for(var e=0;e<b[fcG];e++)if(a[fcw][c].value==b[e]){a[fcw][c].selected=!0;break}}}else b=a[fcw][a.selectedIndex].value;a["x-selected"]=b;(c=a.getAttribute("x-var"))&&fcc.opensocial[fcha]&&fcc.opensocial[fcha].getDataContext().putDataSet(c,
b);if(c=a.getAttribute("x-onselect"))if(fcc[c]&&"function"==typeof fcc[c])fcc[c](b);else a["x-onselect-fn"]?a["x-onselect-fn"][fcy](a):a["x-onselect-fn"]=new Function(c)};
fc9[fc].Xa=function(a,b){fcc.opensocial.template.Loader.loadContent(this.Ob());fcc.opensocial.template.Loader.loadContent(this.Hb());fcc.opensocial[fcha].processDocumentMarkup();var c=fce[fcia]("div");c.id=b;fck(c[fcv],"0px");fcj(c[fcv],"0px");c[fcv].position="absolute";c[fcv].visibility="hidden";fce[fcJ][fcm](c);var d={};d.url=fcd+"/friendconnect/gadgets/osapi-"+this.apiVersion+".xml";fck(d,0);d.id=c.id;d.site=a.site;d["view-params"]=a["view-params"];this.render(d)};
fc5[fc].Aa=function(){fc4.I=this.f;fc4.openSocialSecurityToken=this.a[0];var a=fc4.openSocialSecurityToken;fcc.opensocial[fcha].executeRequests();fcc.opensocial.template.process();fc4.apiLoadedCallback&&(a=fcMa(fc4.apiLoadedCallback,a),fcba(a,0))};fc9[fc].Q=function(a){var b=null,c;for(c in this.k)if(this.k[c].divId==a){b=this.k[c];break}return b};fc9[fc].D=function(a,b){var c=this.Q(a),d=null;c&&(d=c.D(b));return d};fc9[fc].C=function(a,b){var c=this.Q(a),d=null;c&&(d=c.C(b));return d};
fc9[fc].Hc=function(a,b){this.Z(function(c){var d=fce.createTextNode("Copy & paste this code into your site.");c[fcDa]()[fcm](d);c[fcDa]()[fcm](fce[fcia]("br"));var d=fc4.C(a,b),e=fce[fcia]("textarea");fcl(e,d);e[fcr]("style","width:500px;");c[fcDa]()[fcm](e);c.setVisible(!0)})};var fc0c="ar dv fa iw he ku pa sd tk ug ur yi".split(" "),fcXc=function(a){var b=!1;a?(a=a[fct]("_")[0],b=fccb(fc0c,a)):b=(a=fcec(fce[fcJ],"direction"))&&"rtl"==a;return b};
fc5[fc].lb=function(a,b){var c=0,d=null;try{var e=fc$(this.f),f=fc4.A(e),d=f.secureToken,c=f.communityId}catch(k){}b&&(c=b);fc4.ya(a,c,this.callback,d)};fc9[fc].ya=function(a,b,c,d){b=b||this.openSocialSiteId;a={keepMax:!0,presentation:"canvas",url:fcd+"/friendconnect/gadgets/members.xml",site:b,"view-params":{profileId:a}};d&&(a.securityToken=d);this.kb(a,c)};fc9[fc].Jb=function(a){var b=null;(a=this.Q(a))&&a.secureToken&&(b=a.secureToken);return b};
fc9[fc].Ib=function(a){var b=null;(a=this.Q(a))&&a.communityId&&(b=a.communityId);return b};var fcYc=function(a){fc4.I&&fcxc(fc4.I,a)},fc1c=function(){fc5[fc].signout(fc4.openSocialSiteId)},fc2c=function(){fcAc(fc4.I)},fc3c=function(a,b){fcuc(a,b)},fcIc=function(){this.p={}};fcIc[fc].register=function(){fca.rpc[fcs]("subscribeEventType",fc5[fc].subscribe);fca.rpc[fcs]("publishEvent",fc5[fc].publish)};fc5[fc].subscribe=function(a){var b=fcVc;b.p[a]=b.p[a]||[];a=b.p[a];a[a[fcG]]={frameId:this}};
fcIc[fc].mb=function(a,b,c){var d=this;d.p[b]=d.p[b]||[];b=d.p[b];b[b[fcG]]={container:a,callback:c}};fc5[fc].publish=function(a){var b=fcVc,c=0;this.f&&(c=fc$(this.f));b.p[a]=b.p[a]||[];for(var b=b.p[a],d=0;d<b[fcG];d++)b[d].container?b[d].callback[fcK](b[d].container,a,c):fca.rpc[fcK](b[d].frameId,a,null,a,c)};var fcJc=fcQ(fc5[fc].publish,new fc5),fcVc=new fcIc,fc4=new fc9;fc4.Ea(fc4.Ab);fcR("google.friendconnect.container",fc4);fcR("google.friendconnect.container.refreshGadgets",fc4.U);
fcR("google.friendconnect.container.setParentUrl",fc4.X);fcR("google.friendconnect.container.setServerBase",fc4.Y);fcR("google.friendconnect.container.setServerVersion",fc4.Fc);fcR("google.friendconnect.container.createGadget",fc4.N);fcR("google.friendconnect.container.openLightboxIframe",fc4.ra);fcR("google.friendconnect.container.renderGadget",fc4.J);fcR("google.friendconnect.container.render",fc4.render);fcR("google.friendconnect.container.goBackToSite",fc4.Sb);
fcR("google.friendconnect.container.renderMembersGadget",fc4.rc);fcR("google.friendconnect.container.renderReviewGadget",fc4.tc);fcR("google.friendconnect.container.renderCommentsGadget",fc4.ua);fcR("google.friendconnect.container.renderSignInGadget",fc4.bb);fcR("google.friendconnect.container.renderFriendBar",fc4.qc);fcR("google.friendconnect.container.renderSocialBar",fc4.xa);fcR("google.friendconnect.container.renderCanvasSignInGadget",fc4.pc);
fcR("google.friendconnect.container.renderUrlCanvasGadget",fc4.uc);fcR("google.friendconnect.container.renderEmbedSignInGadget",fc4.wa);fcR("google.friendconnect.container.renderUrlEmbedGadget",fc4.cb);fcR("google.friendconnect.container.renderEmbedGadget",fc4.va);fcR("google.friendconnect.container.renderWallGadget",fc4.vc);fcR("google.friendconnect.container.renderAdsGadget",fc4.oc);fcR("google.friendconnect.container.renderOpenSocialGadget",fc4.sc);
fcR("google.friendconnect.container.setNoCache",fc4.hb);fcR("google.friendconnect.container.enableProxy",fc4.Ka);fcR("google.friendconnect.container.setDomain",fc4.Bc);fcR("google.friendconnect.container.setLockedDomainSuffix",fc4.Ec);fcR("google.friendconnect.container.setLocale",fc4.Dc);fcR("google.friendconnect.container.loadOpenSocialApi",fc4.dc);fcR("google.friendconnect.container.initOpenSocialApi",fc4.na);fcR("google.friendconnect.container.getOpenSocialApiIframeId",fc4.Nb);
fcR("google.friendconnect.container.setApiVersion",fc4.yc);fcR("google.friendconnect.container.getEmbedUrl",fc4.D);fcR("google.friendconnect.container.getEmbedHtml",fc4.C);fcR("google.friendconnect.container.getGadgetSecurityToken",fc4.Jb);fcR("google.friendconnect.container.getGadgetCommunityId",fc4.Ib);fcR("google.friendconnect.container.showEmbedDialog",fc4.Hc);fcR("google.friendconnect.container.showMemberProfile",fc4.ya);fcR("google.friendconnect.requestSignIn",fcYc);
fcR("google.friendconnect.requestSignOut",fc1c);fcR("google.friendconnect.requestSettings",fc2c);fcR("google.friendconnect.requestInvite",fc3c);fcR("google.friendconnect.renderSignInButton",fcZc);fcR("google.friendconnect.container.invokeOpenSocialApiViaIframe",fc4.Xb);fcR("google.friendconnect.container.removeOpenSocialApiViaIframe",fc4.nc);fcR("google.friendconnect.userAgent.WEBKIT",fctb);fcR("google.friendconnect.userAgent.IE",fcV);fcR("google.friendconnect.PeopleSelectorOnChange",fc_c);
fcR("google.friendconnect.container.setDateStamp_",fc4.Ac);
google.friendconnect.container.setServerBase('http://www-a-fc-opensocial.googleusercontent.com/ps/');google.friendconnect.container.setServerVersion('0.1-3a2c59f7_c11f98cb_08da8f91_23b98c60_01dab854.7');google.friendconnect.container.setApiVersion('0.8');
google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/activities.xml', 'https://umvqpbsra7b9da3v73i9b1f1h35v9875-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/ask.xml', 'https://c5n5mdkbldclvs9c4cmka1i473qj7347-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/friendbar.xml', 'https://tc1gsfg1bpg3dh74e58frg31jhrlijmb-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/content_reveal.xml', 'https://vpkdf3e9ad3mo1u6rf6q8mkvlfh4nhb8-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/chat.xml', 'https://ensh8e52b69562jd5dd9d9fej214p35j-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/donate.xml', 'https://gdp3j78c303214vet22si9nv69isi5so-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/lamegame.xml', 'https://6odruuecb3fkc62vkrn46k05ar324r65-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/map.xml', 'https://42v8m9qahgskau24qus2aa8llgtoj86r-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/members.xml', 'https://4t4qjto8n6vcba9cabf6v2lrng9ast6r-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/newsletterSubscribe.xml', 'https://grcrlo3milo17raaukkj6qnod5edu0v0-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/poll.xml', 'https://0a3ga3vn4gfsdhlqn7pruh1qtq66jpl4-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/recommended_pages.xml', 'https://9pn9h0ef3oqan95jq679oms4lbrhvqkf-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/review.xml', 'https://bvb14dk05gfgdvof7iqdkoufuclkqhg6-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/sample.xml', 'https://kl1m4ltugaae61po1k12eouge39oohh6-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/signin.xml', 'https://9fruo8jik01ke9p21si44s2pu0vt6kk4-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/wall.xml', 'https://fp8527dih8ahqgno54vjfjeju73lvgf4-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setDomain('https://www.google.com/friendconnect/gadgets/osapi-0.8.xml', 'https://3lijfq2nn4jrph2q8dn9vdup48cr0vv5-a-fc-opensocial.googleusercontent.com/ps/');

google.friendconnect.container.setLockedDomainSuffix('-a-fc-opensocial.googleusercontent.com/ps/');
window['__ps_loaded__'] = true; 
 }google.friendconnect_ = google.friendconnect;
google.friendconnect.container.setDateStamp_('14c3be5b1ba');