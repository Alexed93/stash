/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-csstransforms-csstransforms3d-flexbox-opacity-setclasses-shiv-cssclassprefix:test-- !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,s,a;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],t=C[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),y.push((o?"":"no-")+a.join("-"))}}function i(e){var t=S.className,n=Modernizr._config.classPrefix||"";if(E&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),E?S.className.baseVal=t:S.className=t)}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):E?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(e,t){return!!~(""+e).indexOf(t)}function l(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function c(e,t){return function(){return e.apply(t,arguments)}}function f(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?c(o,n||t):o);return!1}function u(){var e=t.body;return e||(e=s(E?"svg":"body"),e.fake=!0),e}function d(e,n,r,o){var i,a,l,c,f="modernizr",d=s("div"),p=u();if(parseInt(r,10))for(;r--;)l=s("div"),l.id=o?o[r]:f+(r+1),d.appendChild(l);return i=s("style"),i.type="text/css",i.id="s"+f,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",c=S.style.overflow,S.style.overflow="hidden",S.appendChild(p)),a=n(d,e),p.fake?(p.parentNode.removeChild(p),S.style.overflow=c,S.offsetHeight):d.parentNode.removeChild(d),!!a}function p(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(p(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+p(t[o])+":"+r+")");return i=i.join(" or "),d("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function h(e,t,o,i){function c(){u&&(delete P.style,delete P.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var f=m(e,o);if(!r(f,"undefined"))return f}for(var u,d,p,h,g,v=["modernizr","tspan"];!P.style;)u=!0,P.modElem=s(v.shift()),P.style=P.modElem.style;for(p=e.length,d=0;p>d;d++)if(h=e[d],g=P.style[h],a(h,"-")&&(h=l(h)),P.style[h]!==n){if(i||r(o,"undefined"))return c(),"pfx"==t?h:!0;try{P.style[h]=o}catch(y){}if(P.style[h]!=g)return c(),"pfx"==t?h:!0}return c(),!1}function g(e,t,n,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+_.join(s+" ")+s).split(" ");return r(t,"string")||r(t,"undefined")?h(a,t,o,i):(a=(e+" "+N.join(s+" ")+s).split(" "),f(a,t,n))}function v(e,t,r){return g(e,n,n,t,r)}var y=[],C=[],x={_version:"3.3.1",_config:{classPrefix:"test--",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){C.push({name:e,fn:t,options:n})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=x,Modernizr=new Modernizr;var S=t.documentElement,E="svg"===S.nodeName.toLowerCase();E||!function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=C.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=C.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),C.elements=n+" "+e,c(t)}function i(e){var t=y[e[g]];return t||(t={},v++,e[g]=v,y[v]=t),t}function s(e,n,r){if(n||(n=t),u)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():h.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||m.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function a(e,n){if(e||(e=t),u)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),s=0,a=r(),l=a.length;l>s;s++)o.createElement(a[s]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return C.shivMethods?s(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(C,t.frag)}function c(e){e||(e=t);var r=i(e);return!C.shivCSS||f||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),u||l(e,r),e}var f,u,d="3.7.3",p=e.html5||{},m=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,h=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g="_html5shiv",v=0,y={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",f="hidden"in e,u=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){f=!0,u=!0}}();var C={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:d,shivCSS:p.shivCSS!==!1,supportsUnknownElements:u,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:c,createElement:s,createDocumentFragment:a,addElements:o};e.html5=C,c(t),"object"==typeof module&&module.exports&&(module.exports=C)}("undefined"!=typeof e?e:this,t);var b=x._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];x._prefixes=b,Modernizr.addTest("opacity",function(){var e=s("a").style;return e.cssText=b.join("opacity:.55;"),/^0.55$/.test(e.opacity)});var w="Moz O ms Webkit",_=x._config.usePrefixes?w.split(" "):[];x._cssomPrefixes=_;var N=x._config.usePrefixes?w.toLowerCase().split(" "):[];x._domPrefixes=N;var T=x.testStyles=d,k="CSS"in e&&"supports"in e.CSS,z="supportsCSS"in e;Modernizr.addTest("supports",k||z);var j={elem:s("modernizr")};Modernizr._q.push(function(){delete j.elem});var P={style:j.elem.style};Modernizr._q.unshift(function(){delete P.style}),x.testAllProps=g,x.testAllProps=v,Modernizr.addTest("flexbox",v("flexBasis","1px",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&v("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!v("perspective","1px",!0),t=Modernizr._config.usePrefixes;if(e&&(!t||"webkitPerspective"in S.style)){var n,r="#modernizr{width:0;height:0}";Modernizr.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",T(r+n,function(t){e=7===t.offsetWidth&&18===t.offsetHeight})}return e}),o(),i(y),delete x.addTest,delete x.addAsyncTest;for(var F=0;F<Modernizr._q.length;F++)Modernizr._q[F]();e.Modernizr=Modernizr}(window,document);
