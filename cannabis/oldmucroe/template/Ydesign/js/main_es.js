(function(){var c=document,d="length",e="split",h=" con el Traductor de Google?",i=".",j="Con la tecnolog\u00eda de ",k="Desactivar para: ",l="Desactivar traducci\u00f3n del ",m="Google ha traducido esta p\u00e1gina autom\u00e1ticamente al ",n="Traducido al: ",o="Traducir todo al ",p="Traductor de Google",q="Ver esta p\u00e1gina en: ",r="var ",s="\u00bfQuieres traducir esta p\u00e1gina al ",t=this;
function u(a,v){var f=a[e](i),b=t;!(f[0]in b)&&b.execScript&&b.execScript(r+f[0]);for(var g;f[d]&&(g=f.shift());)!f[d]&&v!==void 0?b[g]=v:b=b[g]?b[g]:b[g]={}}Math.floor(Math.random()*2147483648).toString(36);var w={0:p,1:"Cancelar",2:"Cerrar",3:function(a){return m+(a+i)},4:function(a){return n+a},5:"Error: el servidor no ha podido completar la solicitud. Vuelve a intentarlo m\u00e1s tarde.",6:"M\u00e1s informaci\u00f3n",7:function(a){return j+a},8:p,9:"Traducci\u00f3n en curso",10:function(a){return s+(a+h)},11:function(a){return q+a},12:"Mostrar texto original",13:"El contenido de este archivo local se enviar\u00e1 a Google para traducirlo con una conexi\u00f3n segura.",14:"El contenido de esta p\u00e1gina segura se enviar\u00e1 a Google para traducirlo con una conexi\u00f3n segura.",
15:"El contenido de esta p\u00e1gina de intranet se enviar\u00e1 a Google para traducirlo con una conexi\u00f3n segura.",16:"Seleccionar idioma",17:function(a){return l+a},18:function(a){return k+a},19:"Siempre oculto",20:"Texto original:",21:"Sugiere una traducci\u00f3n mejor",22:"Enviar",23:"Traducir todo",24:"Restaurar todo",25:"Cancelar todo",26:"Traducir secciones a mi idioma",27:function(a){return o+a},28:"Mostrar idiomas originales",29:"Opciones",30:"Desactivar la traducci\u00f3n en este sitio",
31:null,32:"Mostrar traducciones alternativas",33:"Haz clic en las palabras anteriores para obtener traducciones alternativas.",34:"Utilizar",35:"Pulsa May\u00fas y arrastra las palabras para cambiar el orden.",36:"Haz clic para obtener otras posibles traducciones.",37:"Mant\u00e9n pulsada la tecla May\u00fas y, a continuaci\u00f3n, haz clic en las palabras y arr\u00e1stralas para cambiar el orden.",38:"Gracias por proponer una traducci\u00f3n al Traductor de Google."};var x=window.google&&google.translate&&google.translate._const;
if(x){var y;a:{for(var z=[],A="5,0.99,20110914"[e](";"),B=0;B<A[d];++B){var C=A[B][e](","),D=C[0];if(D){var E=Number(C[1]);if(E&&!(E>0.1||E<0)){var F=Number(C[2]),G=new Date,H=G.getFullYear()*1E4+(G.getMonth()+1)*100+G.getDate();F&&!(F<H)&&z.push({version:D,a:E,b:F})}}}for(var I=0,J=window.location.href.match(/google\.translate\.element\.random=([\d\.]+)/),K=Number(J&&J[1])||Math.random(),B=0;B<z[d];++B){var L=z[B];I+=L.a;if(I>=1)break;if(K<I){y=L.version;break a}}y="4"}var M="/translate_static/js/element/%s/element_main.js".replace("%s",
y);if(y=="0"){var N="/translate_static/js/element/%s/element_main.js"[e]("/");N[N[d]-1]="main_es.js";M=N.join("/").replace("%s",y)}var O=(window.location.protocol=="https:"?"https://":"http://")+x._pah+M,P=c.createElement("script");P.type="text/javascript";P.charset="UTF-8";P.src=O;var Q=c.getElementsByTagName("head")[0];Q||(Q=c.body.parentNode.appendChild(c.createElement("head")));Q.appendChild(P);u("google.translate.m",w);u("google.translate.v",y)};})()