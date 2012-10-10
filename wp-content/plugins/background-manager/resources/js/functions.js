/*!
 * Copyright (c) 2011-2012 Mike Green <myatus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Portions Copyright (c) 2010 Paul Irish & Andreé Hansson (imgLoaded jQuery extension, released under MIT license)
 */
var mainWin=window.dialogArguments||opener||parent||top;if(typeof myatu_bgm==="undefined"){var myatu_bgm={}}(function(b){b.fn.extend({scrollTo:function(a){b(this).clearQueue().animate({scrollTop:b(a).offset().top},"fast");return b(this)},imgLoaded:function(d){var a=this.filter("img");a.each(function(){if((typeof this.complete!=="undefined"&&this.complete)||(typeof this.readyState!=="undefined"&&this.readyState===4)||b(this).width()>0){d.call(this)}else{b(this).one("load",function(c){d.call(this)})}})}});b.extend(myatu_bgm,{base_prefix:"myatu_bgm_",Modernizr:function(x,y,z){function t(E){a.cssText=E}function u(E,F){return t(prefixes.join(E+";")+(F||""))}function v(E,F){return typeof E===F}function w(E,F){return !!~(""+E).indexOf(F)}function i(F,G){for(var E in F){if(a[F[E]]!==z){return G=="pfx"?F[E]:!0}}return !1}function k(H,I,E){for(var F in H){var G=I[H[F]];if(G!==z){return E===!1?H[F]:v(G,"function")?G.bind(E||I):G}}return !1}function m(H,I,E){var F=H.charAt(0).toUpperCase()+H.substr(1),G=(H+" "+f.join(F+" ")+F).split(" ");return v(I,"string")||v(I,"undefined")?i(G,I):(G=(H+" "+g.join(F+" ")+F).split(" "),k(G,I,E))}var A="2.5.3",B={},C=y.documentElement,D="modernizr",ab=y.createElement(D),a=ab.style,c,d={}.toString,e="Webkit Moz O ms",f=e.split(" "),g=e.toLowerCase().split(" "),h={},j={},l={},n=[],o=n.slice,q,r={}.hasOwnProperty,s;!v(r,"undefined")&&!v(r.call,"undefined")?s=function(E,F){return r.call(E,F)}:s=function(E,F){return F in E&&v(E.constructor.prototype[F],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(H){var E=this;if(typeof E!="function"){throw new TypeError}var F=o.call(arguments,1),G=function(){if(this instanceof G){var I=function(){};I.prototype=E.prototype;var J=new I,K=E.apply(J,F.concat(o.call(arguments)));return Object(K)===K?K:J}return E.apply(H,F.concat(o.call(arguments)))};return G}),h.backgroundsize=function(){return m("backgroundSize")};for(var p in h){s(h,p)&&(q=p.toLowerCase(),B[q]=h[p](),n.push((B[q]?"":"no-")+q))}return t(""),ab=c=null,B._version=A,B._domPrefixes=g,B._cssomPrefixes=f,B.testProp=function(E){return i([E])},B.testAllProps=m,B}(this,this.document),GetAjaxData:function(g,a,h){var i=(typeof h==="function"),j=false;b.ajax({type:"POST",dataType:"json",url:background_manager_ajax.url,timeout:5000,async:i,data:{action:background_manager_ajax.action,func:g,data:a,_ajax_nonce:background_manager_ajax.nonce},success:function(c){if(c.nonce===background_manager_ajax.nonceresponse&&c.stat==="ok"){j=c.data;if(i){h(j)}}}});return j},showHide:function(e,a,f){f=f||"slow";if(a){b(e).show(f)}else{if(!b(e).is(":visible")){b(e).css("display","none")}else{b(e).hide(f)}}},isVersion:function(s,r,a){r=r||"==";a=a||b().jquery;var q=/pre/i,t=/[^\d]+/g,p=s.replace(t,""),v=a.replace(t,""),o=p.length,l=v.length,u=q.test(s),n=q.test(a);p=(l>o?Number(p)*Math.pow(10,(l-o)):Number(p));v=(o>l?Number(v)*Math.pow(10,(o-l)):Number(v));switch(r){case"==":return(true===(p===v&&(u===n)));case">=":return(true===(p>=v&&(!u||u===n)));case"<=":return(true===(p<=v&&(!n||n===u)));case">":return(true===(p>v||(p===v&&n)));case"<":return(true===(p<v||(p===v&&u)))}return false}})}(jQuery));