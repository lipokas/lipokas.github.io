// $Id: jquery.js,v 1.12.2.3 2008/06/25 09:38:39 goba Exp $ 

/*
 * jQuery 1.2.6 - New Wave Javascript
 *
 * Copyright (c) 2008 John Resig (jquery.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * Date: 2008-05-24 14:22:17 -0400 (Sat, 24 May 2008)
 * Rev: 5685
 */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(H(){J w=1b.4M,3m$=1b.$;J D=1b.4M=1b.$=H(a,b){I 2B D.17.5j(a,b)};J u=/^[^<]*(<(.|\\s)+>)[^>]*$|^#(\\w+)$/,62=/^.[^:#\\[\\.]*$/,12;D.17=D.44={5j:H(d,b){d=d||S;G(d.16){7[0]=d;7.K=1;I 7}G(1j d=="23"){J c=u.2D(d);G(c&&(c[1]||!b)){G(c[1])d=D.4h([c[1]],b);N{J a=S.61(c[3]);G(a){G(a.2v!=c[3])I D().2q(d);I D(a)}d=[]}}N I D(b).2q(d)}N G(D.1D(d))I D(S)[D.17.27?"27":"43"](d);I 7.6Y(D.2d(d))},5w:"1.2.6",8G:H(){I 7.K},K:0,3p:H(a){I a==12?D.2d(7):7[a]},2I:H(b){J a=D(b);a.5n=7;I a},6Y:H(a){7.K=0;2p.44.1p.1w(7,a);I 7},P:H(a,b){I D.P(7,a,b)},5i:H(b){J a=-1;I D.2L(b&&b.5w?b[0]:b,7)},1K:H(c,a,b){J d=c;G(c.1q==56)G(a===12)I 7[0]&&D[b||"1K"](7[0],c);N{d={};d[c]=a}I 7.P(H(i){R(c 1n d)D.1K(b?7.V:7,c,D.1i(7,d[c],b,i,c))})},1g:H(b,a){G((b==\'2h\'||b==\'1Z\')&&3d(a)<0)a=12;I 7.1K(b,a,"2a")},1r:H(b){G(1j b!="49"&&b!=U)I 7.4E().3v((7[0]&&7[0].2z||S).5F(b));J a="";D.P(b||7,H(){D.P(7.3t,H(){G(7.16!=8)a+=7.16!=1?7.76:D.17.1r([7])})});I a},5z:H(b){G(7[0])D(b,7[0].2z).5y().39(7[0]).2l(H(){J a=7;1B(a.1x)a=a.1x;I a}).3v(7);I 7},8Y:H(a){I 7.P(H(){D(7).6Q().5z(a)})},8R:H(a){I 7.P(H(){D(7).5z(a)})},3v:H(){I 7.3W(19,M,Q,H(a){G(7.16==1)7.3U(a)})},6F:H(){I 7.3W(19,M,M,H(a){G(7.16==1)7.39(a,7.1x)})},6E:H(){I 7.3W(19,Q,Q,H(a){7.1d.39(a,7)})},5q:H(){I 7.3W(19,Q,M,H(a){7.1d.39(a,7.2H)})},3l:H(){I 7.5n||D([])},2q:H(b){J c=D.2l(7,H(a){I D.2q(b,a)});I 7.2I(/[^+>] [^+>]/.11(b)||b.1h("..")>-1?D.4r(c):c)},5y:H(e){J f=7.2l(H(){G(D.14.1f&&!D.4n(7)){J a=7.6o(M),5h=S.3h("1v");5h.3U(a);I D.4h([5h.4H])[0]}N I 7.6o(M)});J d=f.2q("*").5c().P(H(){G(7[E]!=12)7[E]=U});G(e===M)7.2q("*").5c().P(H(i){G(7.16==3)I;J c=D.L(7,"3w");R(J a 1n c)R(J b 1n c[a])D.W.1e(d[i],a,c[a][b],c[a][b].L)});I f},1E:H(b){I 7.2I(D.1D(b)&&D.3C(7,H(a,i){I b.1k(a,i)})||D.3g(b,7))},4Y:H(b){G(b.1q==56)G(62.11(b))I 7.2I(D.3g(b,7,M));N b=D.3g(b,7);J a=b.K&&b[b.K-1]!==12&&!b.16;I 7.1E(H(){I a?D.2L(7,b)<0:7!=b})},1e:H(a){I 7.2I(D.4r(D.2R(7.3p(),1j a==\'23\'?D(a):D.2d(a))))},3F:H(a){I!!a&&D.3g(a,7).K>0},7T:H(a){I 7.3F("."+a)},6e:H(b){G(b==12){G(7.K){J c=7[0];G(D.Y(c,"2A")){J e=c.64,63=[],15=c.15,2V=c.O=="2A-2V";G(e<0)I U;R(J i=2V?e:0,2f=2V?e+1:15.K;i<2f;i++){J d=15[i];G(d.2W){b=D.14.1f&&!d.at.2x.an?d.1r:d.2x;G(2V)I b;63.1p(b)}}I 63}N I(7[0].2x||"").1o(/\\r/g,"")}I 12}G(b.1q==4L)b+=\'\';I 7.P(H(){G(7.16!=1)I;G(b.1q==2p&&/5O|5L/.11(7.O))7.4J=(D.2L(7.2x,b)>=0||D.2L(7.34,b)>=0);N G(D.Y(7,"2A")){J a=D.2d(b);D("9R",7).P(H(){7.2W=(D.2L(7.2x,a)>=0||D.2L(7.1r,a)>=0)});G(!a.K)7.64=-1}N 7.2x=b})},2K:H(a){I a==12?(7[0]?7[0].4H:U):7.4E().3v(a)},7b:H(a){I 7.5q(a).21()},79:H(i){I 7.3s(i,i+1)},3s:H(){I 7.2I(2p.44.3s.1w(7,19))},2l:H(b){I 7.2I(D.2l(7,H(a,i){I b.1k(a,i,a)}))},5c:H(){I 7.1e(7.5n)},L:H(d,b){J a=d.1R(".");a[1]=a[1]?"."+a[1]:"";G(b===12){J c=7.5C("9z"+a[1]+"!",[a[0]]);G(c===12&&7.K)c=D.L(7[0],d);I c===12&&a[1]?7.L(a[0]):c}N I 7.1P("9u"+a[1]+"!",[a[0],b]).P(H(){D.L(7,d,b)})},3b:H(a){I 7.P(H(){D.3b(7,a)})},3W:H(g,f,h,d){J e=7.K>1,3x;I 7.P(H(){G(!3x){3x=D.4h(g,7.2z);G(h)3x.9o()}J b=7;G(f&&D.Y(7,"1T")&&D.Y(3x[0],"4F"))b=7.3H("22")[0]||7.3U(7.2z.3h("22"));J c=D([]);D.P(3x,H(){J a=e?D(7).5y(M)[0]:7;G(D.Y(a,"1m"))c=c.1e(a);N{G(a.16==1)c=c.1e(D("1m",a).21());d.1k(b,a)}});c.P(6T)})}};D.17.5j.44=D.17;H 6T(i,a){G(a.4d)D.3Y({1a:a.4d,31:Q,1O:"1m"});N D.5u(a.1r||a.6O||a.4H||"");G(a.1d)a.1d.37(a)}H 1z(){I+2B 8J}D.1l=D.17.1l=H(){J b=19[0]||{},i=1,K=19.K,4x=Q,15;G(b.1q==8I){4x=b;b=19[1]||{};i=2}G(1j b!="49"&&1j b!="H")b={};G(K==i){b=7;--i}R(;i<K;i++)G((15=19[i])!=U)R(J c 1n 15){J a=b[c],2w=15[c];G(b===2w)6M;G(4x&&2w&&1j 2w=="49"&&!2w.16)b[c]=D.1l(4x,a||(2w.K!=U?[]:{}),2w);N G(2w!==12)b[c]=2w}I b};J E="4M"+1z(),6K=0,5r={},6G=/z-?5i|8B-?8A|1y|6B|8v-?1Z/i,3P=S.3P||{};D.1l({8u:H(a){1b.$=3m$;G(a)1b.4M=w;I D},1D:H(a){I!!a&&1j a!="23"&&!a.Y&&a.1q!=2p&&/^[\\s[]?H/.11(a+"")},4n:H(a){I a.1C&&!a.1c||a.2j&&a.2z&&!a.2z.1c},5u:H(a){a=D.3k(a);G(a){J b=S.3H("6w")[0]||S.1C,1m=S.3h("1m");1m.O="1r/4t";G(D.14.1f)1m.1r=a;N 1m.3U(S.5F(a));b.39(1m,b.1x);b.37(1m)}},Y:H(b,a){I b.Y&&b.Y.2r()==a.2r()},1Y:{},L:H(c,d,b){c=c==1b?5r:c;J a=c[E];G(!a)a=c[E]=++6K;G(d&&!D.1Y[a])D.1Y[a]={};G(b!==12)D.1Y[a][d]=b;I d?D.1Y[a][d]:a},3b:H(c,b){c=c==1b?5r:c;J a=c[E];G(b){G(D.1Y[a]){2U D.1Y[a][b];b="";R(b 1n D.1Y[a])1X;G(!b)D.3b(c)}}N{1U{2U c[E]}1V(e){G(c.5l)c.5l(E)}2U D.1Y[a]}},P:H(d,a,c){J e,i=0,K=d.K;G(c){G(K==12){R(e 1n d)G(a.1w(d[e],c)===Q)1X}N R(;i<K;)G(a.1w(d[i++],c)===Q)1X}N{G(K==12){R(e 1n d)G(a.1k(d[e],e,d[e])===Q)1X}N R(J b=d[0];i<K&&a.1k(b,i,b)!==Q;b=d[++i]){}}I d},1i:H(b,a,c,i,d){G(D.1D(a))a=a.1k(b,i);I a&&a.1q==4L&&c=="2a"&&!6G.11(d)?a+"2X":a},1F:{1e:H(c,b){D.P((b||"").1R(/\\s+/),H(i,a){G(c.16==1&&!D.1F.3T(c.1F,a))c.1F+=(c.1F?" ":"")+a})},21:H(c,b){G(c.16==1)c.1F=b!=12?D.3C(c.1F.1R(/\\s+/),H(a){I!D.1F.3T(b,a)}).6s(" "):""},3T:H(b,a){I D.2L(a,(b.1F||b).6r().1R(/\\s+/))>-1}},6q:H(b,c,a){J e={};R(J d 1n c){e[d]=b.V[d];b.V[d]=c[d]}a.1k(b);R(J d 1n c)b.V[d]=e[d]},1g:H(d,e,c){G(e=="2h"||e=="1Z"){J b,3X={30:"5x",5g:"1G",18:"3I"},35=e=="2h"?["5e","6k"]:["5G","6i"];H 5b(){b=e=="2h"?d.8f:d.8c;J a=0,2C=0;D.P(35,H(){a+=3d(D.2a(d,"57"+7,M))||0;2C+=3d(D.2a(d,"2C"+7+"4b",M))||0});b-=29.83(a+2C)}G(D(d).3F(":4j"))5b();N D.6q(d,3X,5b);I 29.2f(0,b)}I D.2a(d,e,c)},2a:H(f,l,k){J e,V=f.V;H 3E(b){G(!D.14.2k)I Q;J a=3P.54(b,U);I!a||a.52("3E")==""}G(l=="1y"&&D.14.1f){e=D.1K(V,"1y");I e==""?"1":e}G(D.14.2G&&l=="18"){J d=V.50;V.50="0 7Y 7W";V.50=d}G(l.1I(/4i/i))l=y;G(!k&&V&&V[l])e=V[l];N G(3P.54){G(l.1I(/4i/i))l="4i";l=l.1o(/([A-Z])/g,"-$1").3y();J c=3P.54(f,U);G(c&&!3E(f))e=c.52(l);N{J g=[],2E=[],a=f,i=0;R(;a&&3E(a);a=a.1d)2E.6h(a);R(;i<2E.K;i++)G(3E(2E[i])){g[i]=2E[i].V.18;2E[i].V.18="3I"}e=l=="18"&&g[2E.K-1]!=U?"2F":(c&&c.52(l))||"";R(i=0;i<g.K;i++)G(g[i]!=U)2E[i].V.18=g[i]}G(l=="1y"&&e=="")e="1"}N G(f.4g){J h=l.1o(/\\-(\\w)/g,H(a,b){I b.2r()});e=f.4g[l]||f.4g[h];G(!/^\\d+(2X)?$/i.11(e)&&/^\\d/.11(e)){J j=V.1A,66=f.65.1A;f.65.1A=f.4g.1A;V.1A=e||0;e=V.aM+"2X";V.1A=j;f.65.1A=66}}I e},4h:H(l,h){J k=[];h=h||S;G(1j h.3h==\'12\')h=h.2z||h[0]&&h[0].2z||S;D.P(l,H(i,d){G(!d)I;G(d.1q==4L)d+=\'\';G(1j d=="23"){d=d.1o(/(<(\\w+)[^>]*?)\\/>/g,H(b,a,c){I c.1I(/^(aK|4f|7E|aG|4T|7A|aB|3n|az|ay|av)$/i)?b:a+"></"+c+">"});J f=D.3k(d).3y(),1v=h.3h("1v");J e=!f.1h("<au")&&[1,"<2A 7w=\'7w\'>","</2A>"]||!f.1h("<ar")&&[1,"<7v>","</7v>"]||f.1I(/^<(aq|22|am|ak|ai)/)&&[1,"<1T>","</1T>"]||!f.1h("<4F")&&[2,"<1T><22>","</22></1T>"]||(!f.1h("<af")||!f.1h("<ad"))&&[3,"<1T><22><4F>","</4F></22></1T>"]||!f.1h("<7E")&&[2,"<1T><22></22><7q>","</7q></1T>"]||D.14.1f&&[1,"1v<1v>","</1v>"]||[0,"",""];1v.4H=e[1]+d+e[2];1B(e[0]--)1v=1v.5T;G(D.14.1f){J g=!f.1h("<1T")&&f.1h("<22")<0?1v.1x&&1v.1x.3t:e[1]=="<1T>"&&f.1h("<22")<0?1v.3t:[];R(J j=g.K-1;j>=0;--j)G(D.Y(g[j],"22")&&!g[j].3t.K)g[j].1d.37(g[j]);G(/^\\s/.11(d))1v.39(h.5F(d.1I(/^\\s*/)[0]),1v.1x)}d=D.2d(1v.3t)}G(d.K===0&&(!D.Y(d,"3V")&&!D.Y(d,"2A")))I;G(d[0]==12||D.Y(d,"3V")||d.15)k.1p(d);N k=D.2R(k,d)});I k},1K:H(d,f,c){G(!d||d.16==3||d.16==8)I 12;J e=!D.4n(d),40=c!==12,1f=D.14.1f;f=e&&D.3X[f]||f;G(d.2j){J g=/5Q|4d|V/.11(f);G(f=="2W"&&D.14.2k)d.1d.64;G(f 1n d&&e&&!g){G(40){G(f=="O"&&D.Y(d,"4T")&&d.1d)7p"O a3 a1\'t 9V 9U";d[f]=c}G(D.Y(d,"3V")&&d.7i(f))I d.7i(f).76;I d[f]}G(1f&&e&&f=="V")I D.1K(d.V,"9T",c);G(40)d.9Q(f,""+c);J h=1f&&e&&g?d.4G(f,2):d.4G(f);I h===U?12:h}G(1f&&f=="1y"){G(40){d.6B=1;d.1E=(d.1E||"").1o(/7f\\([^)]*\\)/,"")+(3r(c)+\'\'=="9L"?"":"7f(1y="+c*7a+")")}I d.1E&&d.1E.1h("1y=")>=0?(3d(d.1E.1I(/1y=([^)]*)/)[1])/7a)+\'\':""}f=f.1o(/-([a-z])/9H,H(a,b){I b.2r()});G(40)d[f]=c;I d[f]},3k:H(a){I(a||"").1o(/^\\s+|\\s+$/g,"")},2d:H(b){J a=[];G(b!=U){J i=b.K;G(i==U||b.1R||b.4I||b.1k)a[0]=b;N 1B(i)a[--i]=b[i]}I a},2L:H(b,a){R(J i=0,K=a.K;i<K;i++)G(a[i]===b)I i;I-1},2R:H(a,b){J i=0,T,2S=a.K;G(D.14.1f){1B(T=b[i++])G(T.16!=8)a[2S++]=T}N 1B(T=b[i++])a[2S++]=T;I a},4r:H(a){J c=[],2o={};1U{R(J i=0,K=a.K;i<K;i++){J b=D.L(a[i]);G(!2o[b]){2o[b]=M;c.1p(a[i])}}}1V(e){c=a}I c},3C:H(c,a,d){J b=[];R(J i=0,K=c.K;i<K;i++)G(!d!=!a(c[i],i))b.1p(c[i]);I b},2l:H(d,a){J c=[];R(J i=0,K=d.K;i<K;i++){J b=a(d[i],i);G(b!=U)c[c.K]=b}I c.7d.1w([],c)}});J v=9B.9A.3y();D.14={5B:(v.1I(/.+(?:9y|9x|9w|9v)[\\/: ]([\\d.]+)/)||[])[1],2k:/75/.11(v),2G:/2G/.11(v),1f:/1f/.11(v)&&!/2G/.11(v),42:/42/.11(v)&&!/(9s|75)/.11(v)};J y=D.14.1f?"7o":"72";D.1l({71:!D.14.1f||S.70=="6Z",3X:{"R":"9n","9k":"1F","4i":y,72:y,7o:y,9h:"9f",9e:"9d",9b:"99"}});D.P({6W:H(a){I a.1d},97:H(a){I D.4S(a,"1d")},95:H(a){I D.3a(a,2,"2H")},91:H(a){I D.3a(a,2,"4l")},8Z:H(a){I D.4S(a,"2H")},8X:H(a){I D.4S(a,"4l")},8W:H(a){I D.5v(a.1d.1x,a)},8V:H(a){I D.5v(a.1x)},6Q:H(a){I D.Y(a,"8U")?a.8T||a.8S.S:D.2d(a.3t)}},H(c,d){D.17[c]=H(b){J a=D.2l(7,d);G(b&&1j b=="23")a=D.3g(b,a);I 7.2I(D.4r(a))}});D.P({6P:"3v",8Q:"6F",39:"6E",8P:"5q",8O:"7b"},H(c,b){D.17[c]=H(){J a=19;I 7.P(H(){R(J i=0,K=a.K;i<K;i++)D(a[i])[b](7)})}});D.P({8N:H(a){D.1K(7,a,"");G(7.16==1)7.5l(a)},8M:H(a){D.1F.1e(7,a)},8L:H(a){D.1F.21(7,a)},8K:H(a){D.1F[D.1F.3T(7,a)?"21":"1e"](7,a)},21:H(a){G(!a||D.1E(a,[7]).r.K){D("*",7).1e(7).P(H(){D.W.21(7);D.3b(7)});G(7.1d)7.1d.37(7)}},4E:H(){D(">*",7).21();1B(7.1x)7.37(7.1x)}},H(a,b){D.17[a]=H(){I 7.P(b,19)}});D.P(["6N","4b"],H(i,c){J b=c.3y();D.17[b]=H(a){I 7[0]==1b?D.14.2G&&S.1c["5t"+c]||D.14.2k&&1b["5s"+c]||S.70=="6Z"&&S.1C["5t"+c]||S.1c["5t"+c]:7[0]==S?29.2f(29.2f(S.1c["4y"+c],S.1C["4y"+c]),29.2f(S.1c["2i"+c],S.1C["2i"+c])):a==12?(7.K?D.1g(7[0],b):U):7.1g(b,a.1q==56?a:a+"2X")}});H 25(a,b){I a[0]&&3r(D.2a(a[0],b,M),10)||0}J C=D.14.2k&&3r(D.14.5B)<8H?"(?:[\\\\w*3m-]|\\\\\\\\.)":"(?:[\\\\w\\8F-\\8E*3m-]|\\\\\\\\.)",6L=2B 4v("^>\\\\s*("+C+"+)"),6J=2B 4v("^("+C+"+)(#)("+C+"+)"),6I=2B 4v("^([#.]?)("+C+"*)");D.1l({6H:{"":H(a,i,m){I m[2]=="*"||D.Y(a,m[2])},"#":H(a,i,m){I a.4G("2v")==m[2]},":":{8D:H(a,i,m){I i<m[3]-0},8C:H(a,i,m){I i>m[3]-0},3a:H(a,i,m){I m[3]-0==i},79:H(a,i,m){I m[3]-0==i},3o:H(a,i){I i==0},3S:H(a,i,m,r){I i==r.K-1},6D:H(a,i){I i%2==0},6C:H(a,i){I i%2},"3o-4u":H(a){I a.1d.3H("*")[0]==a},"3S-4u":H(a){I D.3a(a.1d.5T,1,"4l")==a},"8z-4u":H(a){I!D.3a(a.1d.5T,2,"4l")},6W:H(a){I a.1x},4E:H(a){I!a.1x},8y:H(a,i,m){I(a.6O||a.8x||D(a).1r()||"").1h(m[3])>=0},4j:H(a){I"1G"!=a.O&&D.1g(a,"18")!="2F"&&D.1g(a,"5g")!="1G"},1G:H(a){I"1G"==a.O||D.1g(a,"18")=="2F"||D.1g(a,"5g")=="1G"},8w:H(a){I!a.3R},3R:H(a){I a.3R},4J:H(a){I a.4J},2W:H(a){I a.2W||D.1K(a,"2W")},1r:H(a){I"1r"==a.O},5O:H(a){I"5O"==a.O},5L:H(a){I"5L"==a.O},5p:H(a){I"5p"==a.O},3Q:H(a){I"3Q"==a.O},5o:H(a){I"5o"==a.O},6A:H(a){I"6A"==a.O},6z:H(a){I"6z"==a.O},2s:H(a){I"2s"==a.O||D.Y(a,"2s")},4T:H(a){I/4T|2A|6y|2s/i.11(a.Y)},3T:H(a,i,m){I D.2q(m[3],a).K},8t:H(a){I/h\\d/i.11(a.Y)},8s:H(a){I D.3C(D.3O,H(b){I a==b.T}).K}}},6x:[/^(\\[) *@?([\\w-]+) *([!*$^~=]*) *(\'?"?)(.*?)\\4 *\\]/,/^(:)([\\w-]+)\\("?\'?(.*?(\\(.*?\\))?[^(]*?)"?\'?\\)/,2B 4v("^([:.#]*)("+C+"+)")],3g:H(a,c,b){J d,1t=[];1B(a&&a!=d){d=a;J f=D.1E(a,c,b);a=f.t.1o(/^\\s*,\\s*/,"");1t=b?c=f.r:D.2R(1t,f.r)}I 1t},2q:H(t,o){G(1j t!="23")I[t];G(o&&o.16!=1&&o.16!=9)I[];o=o||S;J d=[o],2o=[],3S,Y;1B(t&&3S!=t){J r=[];3S=t;t=D.3k(t);J l=Q,3j=6L,m=3j.2D(t);G(m){Y=m[1].2r();R(J i=0;d[i];i++)R(J c=d[i].1x;c;c=c.2H)G(c.16==1&&(Y=="*"||c.Y.2r()==Y))r.1p(c);d=r;t=t.1o(3j,"");G(t.1h(" ")==0)6M;l=M}N{3j=/^([>+~])\\s*(\\w*)/i;G((m=3j.2D(t))!=U){r=[];J k={};Y=m[2].2r();m=m[1];R(J j=0,3i=d.K;j<3i;j++){J n=m=="~"||m=="+"?d[j].2H:d[j].1x;R(;n;n=n.2H)G(n.16==1){J g=D.L(n);G(m=="~"&&k[g])1X;G(!Y||n.Y.2r()==Y){G(m=="~")k[g]=M;r.1p(n)}G(m=="+")1X}}d=r;t=D.3k(t.1o(3j,""));l=M}}G(t&&!l){G(!t.1h(",")){G(o==d[0])d.4s();2o=D.2R(2o,d);r=d=[o];t=" "+t.6v(1,t.K)}N{J h=6J;J m=h.2D(t);G(m){m=[0,m[2],m[3],m[1]]}N{h=6I;m=h.2D(t)}m[2]=m[2].1o(/\\\\/g,"");J f=d[d.K-1];G(m[1]=="#"&&f&&f.61&&!D.4n(f)){J p=f.61(m[2]);G((D.14.1f||D.14.2G)&&p&&1j p.2v=="23"&&p.2v!=m[2])p=D(\'[@2v="\'+m[2]+\'"]\',f)[0];d=r=p&&(!m[3]||D.Y(p,m[3]))?[p]:[]}N{R(J i=0;d[i];i++){J a=m[1]=="#"&&m[3]?m[3]:m[1]!=""||m[0]==""?"*":m[2];G(a=="*"&&d[i].Y.3y()=="49")a="3n";r=D.2R(r,d[i].3H(a))}G(m[1]==".")r=D.5m(r,m[2]);G(m[1]=="#"){J e=[];R(J i=0;r[i];i++)G(r[i].4G("2v")==m[2]){e=[r[i]];1X}r=e}d=r}t=t.1o(h,"")}}G(t){J b=D.1E(t,r);d=r=b.r;t=D.3k(b.t)}}G(t)d=[];G(d&&o==d[0])d.4s();2o=D.2R(2o,d);I 2o},5m:H(r,m,a){m=" "+m+" ";J c=[];R(J i=0;r[i];i++){J b=(" "+r[i].1F+" ").1h(m)>=0;G(!a&&b||a&&!b)c.1p(r[i])}I c},1E:H(t,r,h){J d;1B(t&&t!=d){d=t;J p=D.6x,m;R(J i=0;p[i];i++){m=p[i].2D(t);G(m){t=t.8r(m[0].K);m[2]=m[2].1o(/\\\\/g,"");1X}}G(!m)1X;G(m[1]==":"&&m[2]=="4Y")r=62.11(m[3])?D.1E(m[3],r,M).r:D(r).4Y(m[3]);N G(m[1]==".")r=D.5m(r,m[2],h);N G(m[1]=="["){J g=[],O=m[3];R(J i=0,3i=r.K;i<3i;i++){J a=r[i],z=a[D.3X[m[2]]||m[2]];G(z==U||/5Q|4d|2W/.11(m[2]))z=D.1K(a,m[2])||\'\';G((O==""&&!!z||O=="="&&z==m[5]||O=="!="&&z!=m[5]||O=="^="&&z&&!z.1h(m[5])||O=="$="&&z.6v(z.K-m[5].K)==m[5]||(O=="*="||O=="~=")&&z.1h(m[5])>=0)^h)g.1p(a)}r=g}N G(m[1]==":"&&m[2]=="3a-4u"){J e={},g=[],11=/(-?)(\\d*)n((?:\\+|-)?\\d*)/.2D(m[3]=="6D"&&"2n"||m[3]=="6C"&&"2n+1"||!/\\D/.11(m[3])&&"8q+"+m[3]||m[3]),3o=(11[1]+(11[2]||1))-0,d=11[3]-0;R(J i=0,3i=r.K;i<3i;i++){J j=r[i],1d=j.1d,2v=D.L(1d);G(!e[2v]){J c=1;R(J n=1d.1x;n;n=n.2H)G(n.16==1)n.4q=c++;e[2v]=M}J b=Q;G(3o==0){G(j.4q==d)b=M}N G((j.4q-d)%3o==0&&(j.4q-d)/3o>=0)b=M;G(b^h)g.1p(j)}r=g}N{J f=D.6H[m[1]];G(1j f=="49")f=f[m[2]];G(1j f=="23")f=6u("Q||H(a,i){I "+f+";}");r=D.3C(r,H(a,i){I f(a,i,m,r)},h)}}I{r:r,t:t}},4S:H(b,c){J a=[],1t=b[c];1B(1t&&1t!=S){G(1t.16==1)a.1p(1t);1t=1t[c]}I a},3a:H(a,e,c,b){e=e||1;J d=0;R(;a;a=a[c])G(a.16==1&&++d==e)1X;I a},5v:H(n,a){J r=[];R(;n;n=n.2H){G(n.16==1&&n!=a)r.1p(n)}I r}});D.W={1e:H(f,i,g,e){G(f.16==3||f.16==8)I;G(D.14.1f&&f.4I)f=1b;G(!g.24)g.24=7.24++;G(e!=12){J h=g;g=7.3M(h,H(){I h.1w(7,19)});g.L=e}J j=D.L(f,"3w")||D.L(f,"3w",{}),1H=D.L(f,"1H")||D.L(f,"1H",H(){G(1j D!="12"&&!D.W.5k)I D.W.1H.1w(19.3L.T,19)});1H.T=f;D.P(i.1R(/\\s+/),H(c,b){J a=b.1R(".");b=a[0];g.O=a[1];J d=j[b];G(!d){d=j[b]={};G(!D.W.2t[b]||D.W.2t[b].4p.1k(f)===Q){G(f.3K)f.3K(b,1H,Q);N G(f.6t)f.6t("4o"+b,1H)}}d[g.24]=g;D.W.26[b]=M});f=U},24:1,26:{},21:H(e,h,f){G(e.16==3||e.16==8)I;J i=D.L(e,"3w"),1L,5i;G(i){G(h==12||(1j h=="23"&&h.8p(0)=="."))R(J g 1n i)7.21(e,g+(h||""));N{G(h.O){f=h.2y;h=h.O}D.P(h.1R(/\\s+/),H(b,a){J c=a.1R(".");a=c[0];G(i[a]){G(f)2U i[a][f.24];N R(f 1n i[a])G(!c[1]||i[a][f].O==c[1])2U i[a][f];R(1L 1n i[a])1X;G(!1L){G(!D.W.2t[a]||D.W.2t[a].4A.1k(e)===Q){G(e.6p)e.6p(a,D.L(e,"1H"),Q);N G(e.6n)e.6n("4o"+a,D.L(e,"1H"))}1L=U;2U i[a]}}})}R(1L 1n i)1X;G(!1L){J d=D.L(e,"1H");G(d)d.T=U;D.3b(e,"3w");D.3b(e,"1H")}}},1P:H(h,c,f,g,i){c=D.2d(c);G(h.1h("!")>=0){h=h.3s(0,-1);J a=M}G(!f){G(7.26[h])D("*").1e([1b,S]).1P(h,c)}N{G(f.16==3||f.16==8)I 12;J b,1L,17=D.1D(f[h]||U),W=!c[0]||!c[0].32;G(W){c.6h({O:h,2J:f,32:H(){},3J:H(){},4C:1z()});c[0][E]=M}c[0].O=h;G(a)c[0].6m=M;J d=D.L(f,"1H");G(d)b=d.1w(f,c);G((!17||(D.Y(f,\'a\')&&h=="4V"))&&f["4o"+h]&&f["4o"+h].1w(f,c)===Q)b=Q;G(W)c.4s();G(i&&D.1D(i)){1L=i.1w(f,b==U?c:c.7d(b));G(1L!==12)b=1L}G(17&&g!==Q&&b!==Q&&!(D.Y(f,\'a\')&&h=="4V")){7.5k=M;1U{f[h]()}1V(e){}}7.5k=Q}I b},1H:H(b){J a,1L,38,5f,4m;b=19[0]=D.W.6l(b||1b.W);38=b.O.1R(".");b.O=38[0];38=38[1];5f=!38&&!b.6m;4m=(D.L(7,"3w")||{})[b.O];R(J j 1n 4m){J c=4m[j];G(5f||c.O==38){b.2y=c;b.L=c.L;1L=c.1w(7,19);G(a!==Q)a=1L;G(1L===Q){b.32();b.3J()}}}I a},6l:H(b){G(b[E]==M)I b;J d=b;b={8o:d};J c="8n 8m 8l 8k 2s 8j 47 5d 6j 5E 8i L 8h 8g 4K 2y 5a 59 8e 8b 58 6f 8a 88 4k 87 86 84 6d 2J 4C 6c O 82 81 35".1R(" ");R(J i=c.K;i;i--)b[c[i]]=d[c[i]];b[E]=M;b.32=H(){G(d.32)d.32();d.80=Q};b.3J=H(){G(d.3J)d.3J();d.7Z=M};b.4C=b.4C||1z();G(!b.2J)b.2J=b.6d||S;G(b.2J.16==3)b.2J=b.2J.1d;G(!b.4k&&b.4K)b.4k=b.4K==b.2J?b.6c:b.4K;G(b.58==U&&b.5d!=U){J a=S.1C,1c=S.1c;b.58=b.5d+(a&&a.2e||1c&&1c.2e||0)-(a.6b||0);b.6f=b.6j+(a&&a.2c||1c&&1c.2c||0)-(a.6a||0)}G(!b.35&&((b.47||b.47===0)?b.47:b.5a))b.35=b.47||b.5a;G(!b.59&&b.5E)b.59=b.5E;G(!b.35&&b.2s)b.35=(b.2s&1?1:(b.2s&2?3:(b.2s&4?2:0)));I b},3M:H(a,b){b.24=a.24=a.24||b.24||7.24++;I b},2t:{27:{4p:H(){55();I},4A:H(){I}},3D:{4p:H(){G(D.14.1f)I Q;D(7).2O("53",D.W.2t.3D.2y);I M},4A:H(){G(D.14.1f)I Q;D(7).4e("53",D.W.2t.3D.2y);I M},2y:H(a){G(F(a,7))I M;a.O="3D";I D.W.1H.1w(7,19)}},3N:{4p:H(){G(D.14.1f)I Q;D(7).2O("51",D.W.2t.3N.2y);I M},4A:H(){G(D.14.1f)I Q;D(7).4e("51",D.W.2t.3N.2y);I M},2y:H(a){G(F(a,7))I M;a.O="3N";I D.W.1H.1w(7,19)}}}};D.17.1l({2O:H(c,a,b){I c=="4X"?7.2V(c,a,b):7.P(H(){D.W.1e(7,c,b||a,b&&a)})},2V:H(d,b,c){J e=D.W.3M(c||b,H(a){D(7).4e(a,e);I(c||b).1w(7,19)});I 7.P(H(){D.W.1e(7,d,e,c&&b)})},4e:H(a,b){I 7.P(H(){D.W.21(7,a,b)})},1P:H(c,a,b){I 7.P(H(){D.W.1P(c,a,7,M,b)})},5C:H(c,a,b){I 7[0]&&D.W.1P(c,a,7[0],Q,b)},2m:H(b){J c=19,i=1;1B(i<c.K)D.W.3M(b,c[i++]);I 7.4V(D.W.3M(b,H(a){7.4Z=(7.4Z||0)%i;a.32();I c[7.4Z++].1w(7,19)||Q}))},7X:H(a,b){I 7.2O(\'3D\',a).2O(\'3N\',b)},27:H(a){55();G(D.2Q)a.1k(S,D);N D.3A.1p(H(){I a.1k(7,D)});I 7}});D.1l({2Q:Q,3A:[],27:H(){G(!D.2Q){D.2Q=M;G(D.3A){D.P(D.3A,H(){7.1k(S)});D.3A=U}D(S).5C("27")}}});J x=Q;H 55(){G(x)I;x=M;G(S.3K&&!D.14.2G)S.3K("69",D.27,Q);G(D.14.1f&&1b==1S)(H(){G(D.2Q)I;1U{S.1C.7V("1A")}1V(3e){3B(19.3L,0);I}D.27()})();G(D.14.2G)S.3K("69",H(){G(D.2Q)I;R(J i=0;i<S.4W.K;i++)G(S.4W[i].3R){3B(19.3L,0);I}D.27()},Q);G(D.14.2k){J a;(H(){G(D.2Q)I;G(S.3f!="68"&&S.3f!="1J"){3B(19.3L,0);I}G(a===12)a=D("V, 7A[7U=7S]").K;G(S.4W.K!=a){3B(19.3L,0);I}D.27()})()}D.W.1e(1b,"43",D.27)}D.P(("7R,7Q,43,85,4y,4X,4V,7P,"+"7O,7N,89,53,51,7M,2A,"+"5o,7L,7K,8d,3e").1R(","),H(i,b){D.17[b]=H(a){I a?7.2O(b,a):7.1P(b)}});J F=H(a,c){J b=a.4k;1B(b&&b!=c)1U{b=b.1d}1V(3e){b=c}I b==c};D(1b).2O("4X",H(){D("*").1e(S).4e()});D.17.1l({67:D.17.43,43:H(g,d,c){G(1j g!=\'23\')I 7.67(g);J e=g.1h(" ");G(e>=0){J i=g.3s(e,g.K);g=g.3s(0,e)}c=c||H(){};J f="2P";G(d)G(D.1D(d)){c=d;d=U}N{d=D.3n(d);f="6g"}J h=7;D.3Y({1a:g,O:f,1O:"2K",L:d,1J:H(a,b){G(b=="1W"||b=="7J")h.2K(i?D("<1v/>").3v(a.4U.1o(/<1m(.|\\s)*?\\/1m>/g,"")).2q(i):a.4U);h.P(c,[a.4U,b,a])}});I 7},aL:H(){I D.3n(7.7I())},7I:H(){I 7.2l(H(){I D.Y(7,"3V")?D.2d(7.aH):7}).1E(H(){I 7.34&&!7.3R&&(7.4J||/2A|6y/i.11(7.Y)||/1r|1G|3Q/i.11(7.O))}).2l(H(i,c){J b=D(7).6e();I b==U?U:b.1q==2p?D.2l(b,H(a,i){I{34:c.34,2x:a}}):{34:c.34,2x:b}}).3p()}});D.P("7H,7G,7F,7D,7C,7B".1R(","),H(i,o){D.17[o]=H(f){I 7.2O(o,f)}});J B=1z();D.1l({3p:H(d,b,a,c){G(D.1D(b)){a=b;b=U}I D.3Y({O:"2P",1a:d,L:b,1W:a,1O:c})},aE:H(b,a){I D.3p(b,U,a,"1m")},aD:H(c,b,a){I D.3p(c,b,a,"3z")},aC:H(d,b,a,c){G(D.1D(b)){a=b;b={}}I D.3Y({O:"6g",1a:d,L:b,1W:a,1O:c})},aA:H(a){D.1l(D.60,a)},60:{1a:5Z.5Q,26:M,O:"2P",2T:0,7z:"4R/x-ax-3V-aw",7x:M,31:M,L:U,5Y:U,3Q:U,4Q:{2N:"4R/2N, 1r/2N",2K:"1r/2K",1m:"1r/4t, 4R/4t",3z:"4R/3z, 1r/4t",1r:"1r/as",4w:"*/*"}},4z:{},3Y:H(s){s=D.1l(M,s,D.1l(M,{},D.60,s));J g,2Z=/=\\?(&|$)/g,1u,L,O=s.O.2r();G(s.L&&s.7x&&1j s.L!="23")s.L=D.3n(s.L);G(s.1O=="4P"){G(O=="2P"){G(!s.1a.1I(2Z))s.1a+=(s.1a.1I(/\\?/)?"&":"?")+(s.4P||"7u")+"=?"}N G(!s.L||!s.L.1I(2Z))s.L=(s.L?s.L+"&":"")+(s.4P||"7u")+"=?";s.1O="3z"}G(s.1O=="3z"&&(s.L&&s.L.1I(2Z)||s.1a.1I(2Z))){g="4P"+B++;G(s.L)s.L=(s.L+"").1o(2Z,"="+g+"$1");s.1a=s.1a.1o(2Z,"="+g+"$1");s.1O="1m";1b[g]=H(a){L=a;1W();1J();1b[g]=12;1U{2U 1b[g]}1V(e){}G(i)i.37(h)}}G(s.1O=="1m"&&s.1Y==U)s.1Y=Q;G(s.1Y===Q&&O=="2P"){J j=1z();J k=s.1a.1o(/(\\?|&)3m=.*?(&|$)/,"$ap="+j+"$2");s.1a=k+((k==s.1a)?(s.1a.1I(/\\?/)?"&":"?")+"3m="+j:"")}G(s.L&&O=="2P"){s.1a+=(s.1a.1I(/\\?/)?"&":"?")+s.L;s.L=U}G(s.26&&!D.4O++)D.W.1P("7H");J n=/^(?:\\w+:)?\\/\\/([^\\/?#]+)/;G(s.1O=="1m"&&O=="2P"&&n.11(s.1a)&&n.2D(s.1a)[1]!=5Z.al){J i=S.3H("6w")[0];J h=S.3h("1m");h.4d=s.1a;G(s.7t)h.aj=s.7t;G(!g){J l=Q;h.ah=h.ag=H(){G(!l&&(!7.3f||7.3f=="68"||7.3f=="1J")){l=M;1W();1J();i.37(h)}}}i.3U(h);I 12}J m=Q;J c=1b.7s?2B 7s("ae.ac"):2B 7r();G(s.5Y)c.6R(O,s.1a,s.31,s.5Y,s.3Q);N c.6R(O,s.1a,s.31);1U{G(s.L)c.4B("ab-aa",s.7z);G(s.5S)c.4B("a9-5R-a8",D.4z[s.1a]||"a7, a6 a5 a4 5N:5N:5N a2");c.4B("X-9Z-9Y","7r");c.4B("9W",s.1O&&s.4Q[s.1O]?s.4Q[s.1O]+", */*":s.4Q.4w)}1V(e){}G(s.7m&&s.7m(c,s)===Q){s.26&&D.4O--;c.7l();I Q}G(s.26)D.W.1P("7B",[c,s]);J d=H(a){G(!m&&c&&(c.3f==4||a=="2T")){m=M;G(f){7k(f);f=U}1u=a=="2T"&&"2T"||!D.7j(c)&&"3e"||s.5S&&D.7h(c,s.1a)&&"7J"||"1W";G(1u=="1W"){1U{L=D.6X(c,s.1O,s.9S)}1V(e){1u="5J"}}G(1u=="1W"){J b;1U{b=c.5I("7g-5R")}1V(e){}G(s.5S&&b)D.4z[s.1a]=b;G(!g)1W()}N D.5H(s,c,1u);1J();G(s.31)c=U}};G(s.31){J f=4I(d,13);G(s.2T>0)3B(H(){G(c){c.7l();G(!m)d("2T")}},s.2T)}1U{c.9P(s.L)}1V(e){D.5H(s,c,U,e)}G(!s.31)d();H 1W(){G(s.1W)s.1W(L,1u);G(s.26)D.W.1P("7C",[c,s])}H 1J(){G(s.1J)s.1J(c,1u);G(s.26)D.W.1P("7F",[c,s]);G(s.26&&!--D.4O)D.W.1P("7G")}I c},5H:H(s,a,b,e){G(s.3e)s.3e(a,b,e);G(s.26)D.W.1P("7D",[a,s,e])},4O:0,7j:H(a){1U{I!a.1u&&5Z.9O=="5p:"||(a.1u>=7e&&a.1u<9N)||a.1u==7c||a.1u==9K||D.14.2k&&a.1u==12}1V(e){}I Q},7h:H(a,c){1U{J b=a.5I("7g-5R");I a.1u==7c||b==D.4z[c]||D.14.2k&&a.1u==12}1V(e){}I Q},6X:H(a,c,b){J d=a.5I("9J-O"),2N=c=="2N"||!c&&d&&d.1h("2N")>=0,L=2N?a.9I:a.4U;G(2N&&L.1C.2j=="5J")7p"5J";G(b)L=b(L,c);G(c=="1m")D.5u(L);G(c=="3z")L=6u("("+L+")");I L},3n:H(a){J s=[];G(a.1q==2p||a.5w)D.P(a,H(){s.1p(3u(7.34)+"="+3u(7.2x))});N R(J j 1n a)G(a[j]&&a[j].1q==2p)D.P(a[j],H(){s.1p(3u(j)+"="+3u(7))});N s.1p(3u(j)+"="+3u(D.1D(a[j])?a[j]():a[j]));I s.6s("&").1o(/%20/g,"+")}});D.17.1l({1N:H(c,b){I c?7.2g({1Z:"1N",2h:"1N",1y:"1N"},c,b):7.1E(":1G").P(H(){7.V.18=7.5D||"";G(D.1g(7,"18")=="2F"){J a=D("<"+7.2j+" />").6P("1c");7.V.18=a.1g("18");G(7.V.18=="2F")7.V.18="3I";a.21()}}).3l()},1M:H(b,a){I b?7.2g({1Z:"1M",2h:"1M",1y:"1M"},b,a):7.1E(":4j").P(H(){7.5D=7.5D||D.1g(7,"18");7.V.18="2F"}).3l()},78:D.17.2m,2m:H(a,b){I D.1D(a)&&D.1D(b)?7.78.1w(7,19):a?7.2g({1Z:"2m",2h:"2m",1y:"2m"},a,b):7.P(H(){D(7)[D(7).3F(":1G")?"1N":"1M"]()})},9G:H(b,a){I 7.2g({1Z:"1N"},b,a)},9F:H(b,a){I 7.2g({1Z:"1M"},b,a)},9E:H(b,a){I 7.2g({1Z:"2m"},b,a)},9D:H(b,a){I 7.2g({1y:"1N"},b,a)},9M:H(b,a){I 7.2g({1y:"1M"},b,a)},9C:H(c,a,b){I 7.2g({1y:a},c,b)},2g:H(k,j,i,g){J h=D.77(j,i,g);I 7[h.36===Q?"P":"36"](H(){G(7.16!=1)I Q;J f=D.1l({},h),p,1G=D(7).3F(":1G"),46=7;R(p 1n k){G(k[p]=="1M"&&1G||k[p]=="1N"&&!1G)I f.1J.1k(7);G(p=="1Z"||p=="2h"){f.18=D.1g(7,"18");f.33=7.V.33}}G(f.33!=U)7.V.33="1G";f.45=D.1l({},k);D.P(k,H(c,a){J e=2B D.28(46,f,c);G(/2m|1N|1M/.11(a))e[a=="2m"?1G?"1N":"1M":a](k);N{J b=a.6r().1I(/^([+-]=)?([\\d+-.]+)(.*)$/),2b=e.1t(M)||0;G(b){J d=3d(b[2]),2M=b[3]||"2X";G(2M!="2X"){46.V[c]=(d||1)+2M;2b=((d||1)/e.1t(M))*2b;46.V[c]=2b+2M}G(b[1])d=((b[1]=="-="?-1:1)*d)+2b;e.3G(2b,d,2M)}N e.3G(2b,a,"")}});I M})},36:H(a,b){G(D.1D(a)||(a&&a.1q==2p)){b=a;a="28"}G(!a||(1j a=="23"&&!b))I A(7[0],a);I 7.P(H(){G(b.1q==2p)A(7,a,b);N{A(7,a).1p(b);G(A(7,a).K==1)b.1k(7)}})},9X:H(b,c){J a=D.3O;G(b)7.36([]);7.P(H(){R(J i=a.K-1;i>=0;i--)G(a[i].T==7){G(c)a[i](M);a.7n(i,1)}});G(!c)7.5A();I 7}});J A=H(b,c,a){G(b){c=c||"28";J q=D.L(b,c+"36");G(!q||a)q=D.L(b,c+"36",D.2d(a))}I q};D.17.5A=H(a){a=a||"28";I 7.P(H(){J q=A(7,a);q.4s();G(q.K)q[0].1k(7)})};D.1l({77:H(b,a,c){J d=b&&b.1q==a0?b:{1J:c||!c&&a||D.1D(b)&&b,2u:b,41:c&&a||a&&a.1q!=9t&&a};d.2u=(d.2u&&d.2u.1q==4L?d.2u:D.28.5K[d.2u])||D.28.5K.74;d.5M=d.1J;d.1J=H(){G(d.36!==Q)D(7).5A();G(D.1D(d.5M))d.5M.1k(7)};I d},41:{73:H(p,n,b,a){I b+a*p},5P:H(p,n,b,a){I((-29.9r(p*29.9q)/2)+0.5)*a+b}},3O:[],48:U,28:H(b,c,a){7.15=c;7.T=b;7.1i=a;G(!c.3Z)c.3Z={}}});D.28.44={4D:H(){G(7.15.2Y)7.15.2Y.1k(7.T,7.1z,7);(D.28.2Y[7.1i]||D.28.2Y.4w)(7);G(7.1i=="1Z"||7.1i=="2h")7.T.V.18="3I"},1t:H(a){G(7.T[7.1i]!=U&&7.T.V[7.1i]==U)I 7.T[7.1i];J r=3d(D.1g(7.T,7.1i,a));I r&&r>-9p?r:3d(D.2a(7.T,7.1i))||0},3G:H(c,b,d){7.5V=1z();7.2b=c;7.3l=b;7.2M=d||7.2M||"2X";7.1z=7.2b;7.2S=7.4N=0;7.4D();J e=7;H t(a){I e.2Y(a)}t.T=7.T;D.3O.1p(t);G(D.48==U){D.48=4I(H(){J a=D.3O;R(J i=0;i<a.K;i++)G(!a[i]())a.7n(i--,1);G(!a.K){7k(D.48);D.48=U}},13)}},1N:H(){7.15.3Z[7.1i]=D.1K(7.T.V,7.1i);7.15.1N=M;7.3G(0,7.1t());G(7.1i=="2h"||7.1i=="1Z")7.T.V[7.1i]="9m";D(7.T).1N()},1M:H(){7.15.3Z[7.1i]=D.1K(7.T.V,7.1i);7.15.1M=M;7.3G(7.1t(),0)},2Y:H(a){J t=1z();G(a||t>7.15.2u+7.5V){7.1z=7.3l;7.2S=7.4N=1;7.4D();7.15.45[7.1i]=M;J b=M;R(J i 1n 7.15.45)G(7.15.45[i]!==M)b=Q;G(b){G(7.15.18!=U){7.T.V.33=7.15.33;7.T.V.18=7.15.18;G(D.1g(7.T,"18")=="2F")7.T.V.18="3I"}G(7.15.1M)7.T.V.18="2F";G(7.15.1M||7.15.1N)R(J p 1n 7.15.45)D.1K(7.T.V,p,7.15.3Z[p])}G(b)7.15.1J.1k(7.T);I Q}N{J n=t-7.5V;7.4N=n/7.15.2u;7.2S=D.41[7.15.41||(D.41.5P?"5P":"73")](7.4N,n,0,1,7.15.2u);7.1z=7.2b+((7.3l-7.2b)*7.2S);7.4D()}I M}};D.1l(D.28,{5K:{9l:9j,9i:7e,74:9g},2Y:{2e:H(a){a.T.2e=a.1z},2c:H(a){a.T.2c=a.1z},1y:H(a){D.1K(a.T.V,"1y",a.1z)},4w:H(a){a.T.V[a.1i]=a.1z+a.2M}}});D.17.2i=H(){J b=0,1S=0,T=7[0],3q;G(T)ao(D.14){J d=T.1d,4a=T,1s=T.1s,1Q=T.2z,5U=2k&&3r(5B)<9c&&!/9a/i.11(v),1g=D.2a,3c=1g(T,"30")=="3c";G(T.7y){J c=T.7y();1e(c.1A+29.2f(1Q.1C.2e,1Q.1c.2e),c.1S+29.2f(1Q.1C.2c,1Q.1c.2c));1e(-1Q.1C.6b,-1Q.1C.6a)}N{1e(T.5X,T.5W);1B(1s){1e(1s.5X,1s.5W);G(42&&!/^t(98|d|h)$/i.11(1s.2j)||2k&&!5U)2C(1s);G(!3c&&1g(1s,"30")=="3c")3c=M;4a=/^1c$/i.11(1s.2j)?4a:1s;1s=1s.1s}1B(d&&d.2j&&!/^1c|2K$/i.11(d.2j)){G(!/^96|1T.*$/i.11(1g(d,"18")))1e(-d.2e,-d.2c);G(42&&1g(d,"33")!="4j")2C(d);d=d.1d}G((5U&&(3c||1g(4a,"30")=="5x"))||(42&&1g(4a,"30")!="5x"))1e(-1Q.1c.5X,-1Q.1c.5W);G(3c)1e(29.2f(1Q.1C.2e,1Q.1c.2e),29.2f(1Q.1C.2c,1Q.1c.2c))}3q={1S:1S,1A:b}}H 2C(a){1e(D.2a(a,"6V",M),D.2a(a,"6U",M))}H 1e(l,t){b+=3r(l,10)||0;1S+=3r(t,10)||0}I 3q};D.17.1l({30:H(){J a=0,1S=0,3q;G(7[0]){J b=7.1s(),2i=7.2i(),4c=/^1c|2K$/i.11(b[0].2j)?{1S:0,1A:0}:b.2i();2i.1S-=25(7,\'94\');2i.1A-=25(7,\'aF\');4c.1S+=25(b,\'6U\');4c.1A+=25(b,\'6V\');3q={1S:2i.1S-4c.1S,1A:2i.1A-4c.1A}}I 3q},1s:H(){J a=7[0].1s;1B(a&&(!/^1c|2K$/i.11(a.2j)&&D.1g(a,\'30\')==\'93\'))a=a.1s;I D(a)}});D.P([\'5e\',\'5G\'],H(i,b){J c=\'4y\'+b;D.17[c]=H(a){G(!7[0])I;I a!=12?7.P(H(){7==1b||7==S?1b.92(!i?a:D(1b).2e(),i?a:D(1b).2c()):7[c]=a}):7[0]==1b||7[0]==S?46[i?\'aI\':\'aJ\']||D.71&&S.1C[c]||S.1c[c]:7[0][c]}});D.P(["6N","4b"],H(i,b){J c=i?"5e":"5G",4f=i?"6k":"6i";D.17["5s"+b]=H(){I 7[b.3y()]()+25(7,"57"+c)+25(7,"57"+4f)};D.17["90"+b]=H(a){I 7["5s"+b]()+25(7,"2C"+c+"4b")+25(7,"2C"+4f+"4b")+(a?25(7,"6S"+c)+25(7,"6S"+4f):0)}})})();',62,669,'|||||||this|||||||||||||||||||||||||||||||||||if|function|return|var|length|data|true|else|type|each|false|for|document|elem|null|style|event||nodeName|||test|undefined||browser|options|nodeType|fn|display|arguments|url|window|body|parentNode|add|msie|css|indexOf|prop|typeof|call|extend|script|in|replace|push|constructor|text|offsetParent|cur|status|div|apply|firstChild|opacity|now|left|while|documentElement|isFunction|filter|className|hidden|handle|match|complete|attr|ret|hide|show|dataType|trigger|doc|split|top|table|try|catch|success|break|cache|height||remove|tbody|string|guid|num|global|ready|fx|Math|curCSS|start|scrollTop|makeArray|scrollLeft|max|animate|width|offset|tagName|safari|map|toggle||done|Array|find|toUpperCase|button|special|duration|id|copy|value|handler|ownerDocument|select|new|border|exec|stack|none|opera|nextSibling|pushStack|target|html|inArray|unit|xml|bind|GET|isReady|merge|pos|timeout|delete|one|selected|px|step|jsre|position|async|preventDefault|overflow|name|which|queue|removeChild|namespace|insertBefore|nth|removeData|fixed|parseFloat|error|readyState|multiFilter|createElement|rl|re|trim|end|_|param|first|get|results|parseInt|slice|childNodes|encodeURIComponent|append|events|elems|toLowerCase|json|readyList|setTimeout|grep|mouseenter|color|is|custom|getElementsByTagName|block|stopPropagation|addEventListener|callee|proxy|mouseleave|timers|defaultView|password|disabled|last|has|appendChild|form|domManip|props|ajax|orig|set|easing|mozilla|load|prototype|curAnim|self|charCode|timerId|object|offsetChild|Width|parentOffset|src|unbind|br|currentStyle|clean|float|visible|relatedTarget|previousSibling|handlers|isXMLDoc|on|setup|nodeIndex|unique|shift|javascript|child|RegExp|_default|deep|scroll|lastModified|teardown|setRequestHeader|timeStamp|update|empty|tr|getAttribute|innerHTML|setInterval|checked|fromElement|Number|jQuery|state|active|jsonp|accepts|application|dir|input|responseText|click|styleSheets|unload|not|lastToggle|outline|mouseout|getPropertyValue|mouseover|getComputedStyle|bindReady|String|padding|pageX|metaKey|keyCode|getWH|andSelf|clientX|Left|all|visibility|container|index|init|triggered|removeAttribute|classFilter|prevObject|submit|file|after|windowData|inner|client|globalEval|sibling|jquery|absolute|clone|wrapAll|dequeue|version|triggerHandler|oldblock|ctrlKey|createTextNode|Top|handleError|getResponseHeader|parsererror|speeds|checkbox|old|00|radio|swing|href|Modified|ifModified|lastChild|safari2|startTime|offsetTop|offsetLeft|username|location|ajaxSettings|getElementById|isSimple|values|selectedIndex|runtimeStyle|rsLeft|_load|loaded|DOMContentLoaded|clientTop|clientLeft|toElement|srcElement|val|pageY|POST|unshift|Bottom|clientY|Right|fix|exclusive|detachEvent|cloneNode|removeEventListener|swap|toString|join|attachEvent|eval|substr|head|parse|textarea|reset|image|zoom|odd|even|before|prepend|exclude|expr|quickClass|quickID|uuid|quickChild|continue|Height|textContent|appendTo|contents|open|margin|evalScript|borderTopWidth|borderLeftWidth|parent|httpData|setArray|CSS1Compat|compatMode|boxModel|cssFloat|linear|def|webkit|nodeValue|speed|_toggle|eq|100|replaceWith|304|concat|200|alpha|Last|httpNotModified|getAttributeNode|httpSuccess|clearInterval|abort|beforeSend|splice|styleFloat|throw|colgroup|XMLHttpRequest|ActiveXObject|scriptCharset|callback|fieldset|multiple|processData|getBoundingClientRect|contentType|link|ajaxSend|ajaxSuccess|ajaxError|col|ajaxComplete|ajaxStop|ajaxStart|serializeArray|notmodified|keypress|keydown|change|mouseup|mousedown|dblclick|focus|blur|stylesheet|hasClass|rel|doScroll|black|hover|solid|cancelBubble|returnValue|wheelDelta|view|round|shiftKey|resize|screenY|screenX|relatedNode|mousemove|prevValue|originalTarget|offsetHeight|keyup|newValue|offsetWidth|eventPhase|detail|currentTarget|cancelable|bubbles|attrName|attrChange|altKey|originalEvent|charAt|0n|substring|animated|header|noConflict|line|enabled|innerText|contains|only|weight|font|gt|lt|uFFFF|u0128|size|417|Boolean|Date|toggleClass|removeClass|addClass|removeAttr|replaceAll|insertAfter|prependTo|wrap|contentWindow|contentDocument|iframe|children|siblings|prevAll|wrapInner|nextAll|outer|prev|scrollTo|static|marginTop|next|inline|parents|able|cellSpacing|adobeair|cellspacing|522|maxLength|maxlength|readOnly|400|readonly|fast|600|class|slow|1px|htmlFor|reverse|10000|PI|cos|compatible|Function|setData|ie|ra|it|rv|getData|userAgent|navigator|fadeTo|fadeIn|slideToggle|slideUp|slideDown|ig|responseXML|content|1223|NaN|fadeOut|300|protocol|send|setAttribute|option|dataFilter|cssText|changed|be|Accept|stop|With|Requested|Object|can|GMT|property|1970|Jan|01|Thu|Since|If|Type|Content|XMLHTTP|th|Microsoft|td|onreadystatechange|onload|cap|charset|colg|host|tfoot|specified|with|1_|thead|leg|plain|attributes|opt|embed|urlencoded|www|area|hr|ajaxSetup|meta|post|getJSON|getScript|marginLeft|img|elements|pageYOffset|pageXOffset|abbr|serialize|pixelLeft'.split('|'),0,{}));
// $Id: drupal.js,v 1.41.2.4 2009/07/21 08:59:10 goba Exp $

var Drupal = Drupal || { 'settings': {}, 'behaviors': {}, 'themes': {}, 'locale': {} };

/**
 * Set the variable that indicates if JavaScript behaviors should be applied
 */
Drupal.jsEnabled = true;

/**
 * Attach all registered behaviors to a page element.
 *
 * Behaviors are event-triggered actions that attach to page elements, enhancing
 * default non-Javascript UIs. Behaviors are registered in the Drupal.behaviors
 * object as follows:
 * @code
 *    Drupal.behaviors.behaviorName = function () {
 *      ...
 *    };
 * @endcode
 *
 * Drupal.attachBehaviors is added below to the jQuery ready event and so
 * runs on initial page load. Developers implementing AHAH/AJAX in their
 * solutions should also call this function after new page content has been
 * loaded, feeding in an element to be processed, in order to attach all
 * behaviors to the new content.
 *
 * Behaviors should use a class in the form behaviorName-processed to ensure
 * the behavior is attached only once to a given element. (Doing so enables
 * the reprocessing of given elements, which may be needed on occasion despite
 * the ability to limit behavior attachment to a particular element.)
 *
 * @param context
 *   An element to attach behaviors to. If none is given, the document element
 *   is used.
 */
Drupal.attachBehaviors = function(context) {
  context = context || document;
  // Execute all of them.
  jQuery.each(Drupal.behaviors, function() {
    this(context);
  });
};

/**
 * Encode special characters in a plain-text string for display as HTML.
 */
Drupal.checkPlain = function(str) {
  str = String(str);
  var replace = { '&': '&amp;', '"': '&quot;', '<': '&lt;', '>': '&gt;' };
  for (var character in replace) {
    var regex = new RegExp(character, 'g');
    str = str.replace(regex, replace[character]);
  }
  return str;
};

/**
 * Translate strings to the page language or a given language.
 *
 * See the documentation of the server-side t() function for further details.
 *
 * @param str
 *   A string containing the English string to translate.
 * @param args
 *   An object of replacements pairs to make after translation. Incidences
 *   of any key in this array are replaced with the corresponding value.
 *   Based on the first character of the key, the value is escaped and/or themed:
 *    - !variable: inserted as is
 *    - @variable: escape plain text to HTML (Drupal.checkPlain)
 *    - %variable: escape text and theme as a placeholder for user-submitted
 *      content (checkPlain + Drupal.theme('placeholder'))
 * @return
 *   The translated string.
 */
Drupal.t = function(str, args) {
  // Fetch the localized version of the string.
  if (Drupal.locale.strings && Drupal.locale.strings[str]) {
    str = Drupal.locale.strings[str];
  }

  if (args) {
    // Transform arguments before inserting them
    for (var key in args) {
      switch (key.charAt(0)) {
        // Escaped only
        case '@':
          args[key] = Drupal.checkPlain(args[key]);
        break;
        // Pass-through
        case '!':
          break;
        // Escaped and placeholder
        case '%':
        default:
          args[key] = Drupal.theme('placeholder', args[key]);
          break;
      }
      str = str.replace(key, args[key]);
    }
  }
  return str;
};

/**
 * Format a string containing a count of items.
 *
 * This function ensures that the string is pluralized correctly. Since Drupal.t() is
 * called by this function, make sure not to pass already-localized strings to it.
 *
 * See the documentation of the server-side format_plural() function for further details.
 *
 * @param count
 *   The item count to display.
 * @param singular
 *   The string for the singular case. Please make sure it is clear this is
 *   singular, to ease translation (e.g. use "1 new comment" instead of "1 new").
 *   Do not use @count in the singular string.
 * @param plural
 *   The string for the plural case. Please make sure it is clear this is plural,
 *   to ease translation. Use @count in place of the item count, as in "@count
 *   new comments".
 * @param args
 *   An object of replacements pairs to make after translation. Incidences
 *   of any key in this array are replaced with the corresponding value.
 *   Based on the first character of the key, the value is escaped and/or themed:
 *    - !variable: inserted as is
 *    - @variable: escape plain text to HTML (Drupal.checkPlain)
 *    - %variable: escape text and theme as a placeholder for user-submitted
 *      content (checkPlain + Drupal.theme('placeholder'))
 *   Note that you do not need to include @count in this array.
 *   This replacement is done automatically for the plural case.
 * @return
 *   A translated string.
 */
Drupal.formatPlural = function(count, singular, plural, args) {
  var args = args || {};
  args['@count'] = count;
  // Determine the index of the plural form.
  var index = Drupal.locale.pluralFormula ? Drupal.locale.pluralFormula(args['@count']) : ((args['@count'] == 1) ? 0 : 1);

  if (index == 0) {
    return Drupal.t(singular, args);
  }
  else if (index == 1) {
    return Drupal.t(plural, args);
  }
  else {
    args['@count['+ index +']'] = args['@count'];
    delete args['@count'];
    return Drupal.t(plural.replace('@count', '@count['+ index +']'));
  }
};

/**
 * Generate the themed representation of a Drupal object.
 *
 * All requests for themed output must go through this function. It examines
 * the request and routes it to the appropriate theme function. If the current
 * theme does not provide an override function, the generic theme function is
 * called.
 *
 * For example, to retrieve the HTML that is output by theme_placeholder(text),
 * call Drupal.theme('placeholder', text).
 *
 * @param func
 *   The name of the theme function to call.
 * @param ...
 *   Additional arguments to pass along to the theme function.
 * @return
 *   Any data the theme function returns. This could be a plain HTML string,
 *   but also a complex object.
 */
Drupal.theme = function(func) {
  for (var i = 1, args = []; i < arguments.length; i++) {
    args.push(arguments[i]);
  }

  return (Drupal.theme[func] || Drupal.theme.prototype[func]).apply(this, args);
};

/**
 * Parse a JSON response.
 *
 * The result is either the JSON object, or an object with 'status' 0 and 'data' an error message.
 */
Drupal.parseJson = function (data) {
  if ((data.substring(0, 1) != '{') && (data.substring(0, 1) != '[')) {
    return { status: 0, data: data.length ? data : Drupal.t('Unspecified error') };
  }
  return eval('(' + data + ');');
};

/**
 * Freeze the current body height (as minimum height). Used to prevent
 * unnecessary upwards scrolling when doing DOM manipulations.
 */
Drupal.freezeHeight = function () {
  Drupal.unfreezeHeight();
  var div = document.createElement('div');
  $(div).css({
    position: 'absolute',
    top: '0px',
    left: '0px',
    width: '1px',
    height: $('body').css('height')
  }).attr('id', 'freeze-height');
  $('body').append(div);
};

/**
 * Unfreeze the body height
 */
Drupal.unfreezeHeight = function () {
  $('#freeze-height').remove();
};

/**
 * Wrapper around encodeURIComponent() which avoids Apache quirks (equivalent of
 * drupal_urlencode() in PHP). This function should only be used on paths, not
 * on query string arguments.
 */
Drupal.encodeURIComponent = function (item, uri) {
  uri = uri || location.href;
  item = encodeURIComponent(item).replace(/%2F/g, '/');
  return (uri.indexOf('?q=') != -1) ? item : item.replace(/%26/g, '%2526').replace(/%23/g, '%2523').replace(/\/\//g, '/%252F');
};

/**
 * Get the text selection in a textarea.
 */
Drupal.getSelection = function (element) {
  if (typeof(element.selectionStart) != 'number' && document.selection) {
    // The current selection
    var range1 = document.selection.createRange();
    var range2 = range1.duplicate();
    // Select all text.
    range2.moveToElementText(element);
    // Now move 'dummy' end point to end point of original range.
    range2.setEndPoint('EndToEnd', range1);
    // Now we can calculate start and end points.
    var start = range2.text.length - range1.text.length;
    var end = start + range1.text.length;
    return { 'start': start, 'end': end };
  }
  return { 'start': element.selectionStart, 'end': element.selectionEnd };
};

/**
 * Build an error message from ahah response.
 */
Drupal.ahahError = function(xmlhttp, uri) {
  if (xmlhttp.status == 200) {
    if (jQuery.trim(xmlhttp.responseText)) {
      var message = Drupal.t("An error occurred. \n@uri\n@text", {'@uri': uri, '@text': xmlhttp.responseText });
    }
    else {
      var message = Drupal.t("An error occurred. \n@uri\n(no information available).", {'@uri': uri });
    }
  }
  else {
    var message = Drupal.t("An HTTP error @status occurred. \n@uri", {'@uri': uri, '@status': xmlhttp.status });
  }
  return message.replace(/\n/g, '<br />');
}

// Global Killswitch on the <html> element
$(document.documentElement).addClass('js');
// Attach all behaviors.
$(document).ready(function() {
  Drupal.attachBehaviors(this);
});

/**
 * The default themes.
 */
Drupal.theme.prototype = {

  /**
   * Formats text for emphasized display in a placeholder inside a sentence.
   *
   * @param str
   *   The text to format (plain-text).
   * @return
   *   The formatted text (html).
   */
  placeholder: function(str) {
    return '<em>' + Drupal.checkPlain(str) + '</em>';
  }
};
;
Drupal.locale = { 'pluralFormula': function($n) { return Number(($n>1)); }, 'strings': {"Already Used":"Ya est\u00e1 en uso"} };;
/*!
 * jQuery JavaScript Library v1.4.2
 * http://jquery.com/
 *
 * Copyright 2010, John Resig
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://jquery.org/license
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 * Copyright 2010, The Dojo Foundation
 * Released under the MIT, BSD, and GPL Licenses.
 *
 * Date: Sat Feb 13 22:33:48  2010 -0500
 */
(function(A,w){function ma(){if(!c.isReady){try{s.documentElement.doScroll("left")}catch(a){setTimeout(ma,1);return}c.ready()}}function Qa(a,b){b.src?c.ajax({url:b.src,async:false,dataType:"script"}):c.globalEval(b.text||b.textContent||b.innerHTML||"");b.parentNode&&b.parentNode.removeChild(b)}function X(a,b,d,f,e,j){var i=a.length;if(typeof b==="object"){for(var o in b)X(a,o,b[o],f,e,d);return a}if(d!==w){f=!j&&f&&c.isFunction(d);for(o=0;o<i;o++)e(a[o],b,f?d.call(a[o],o,e(a[o],b)):d,j);return a}return i?
e(a[0],b):w}function J(){return(new Date).getTime()}function Y(){return false}function Z(){return true}function na(a,b,d){d[0].type=a;return c.event.handle.apply(b,d)}function oa(a){var b,d=[],f=[],e=arguments,j,i,o,k,n,r;i=c.data(this,"events");if(!(a.liveFired===this||!i||!i.live||a.button&&a.type==="click")){a.liveFired=this;var u=i.live.slice(0);for(k=0;k<u.length;k++){i=u[k];i.origType.replace(O,"")===a.type?f.push(i.selector):u.splice(k--,1)}j=c(a.target).closest(f,a.currentTarget);n=0;for(r=
j.length;n<r;n++)for(k=0;k<u.length;k++){i=u[k];if(j[n].selector===i.selector){o=j[n].elem;f=null;if(i.preType==="mouseenter"||i.preType==="mouseleave")f=c(a.relatedTarget).closest(i.selector)[0];if(!f||f!==o)d.push({elem:o,handleObj:i})}}n=0;for(r=d.length;n<r;n++){j=d[n];a.currentTarget=j.elem;a.data=j.handleObj.data;a.handleObj=j.handleObj;if(j.handleObj.origHandler.apply(j.elem,e)===false){b=false;break}}return b}}function pa(a,b){return"live."+(a&&a!=="*"?a+".":"")+b.replace(/\./g,"`").replace(/ /g,
"&")}function qa(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function ra(a,b){var d=0;b.each(function(){if(this.nodeName===(a[d]&&a[d].nodeName)){var f=c.data(a[d++]),e=c.data(this,f);if(f=f&&f.events){delete e.handle;e.events={};for(var j in f)for(var i in f[j])c.event.add(this,j,f[j][i],f[j][i].data)}}})}function sa(a,b,d){var f,e,j;b=b&&b[0]?b[0].ownerDocument||b[0]:s;if(a.length===1&&typeof a[0]==="string"&&a[0].length<512&&b===s&&!ta.test(a[0])&&(c.support.checkClone||!ua.test(a[0]))){e=
true;if(j=c.fragments[a[0]])if(j!==1)f=j}if(!f){f=b.createDocumentFragment();c.clean(a,b,f,d)}if(e)c.fragments[a[0]]=j?f:1;return{fragment:f,cacheable:e}}function K(a,b){var d={};c.each(va.concat.apply([],va.slice(0,b)),function(){d[this]=a});return d}function wa(a){return"scrollTo"in a&&a.document?a:a.nodeType===9?a.defaultView||a.parentWindow:false}var c=function(a,b){return new c.fn.init(a,b)},Ra=A.jQuery,Sa=A.$,s=A.document,T,Ta=/^[^<]*(<[\w\W]+>)[^>]*$|^#([\w-]+)$/,Ua=/^.[^:#\[\.,]*$/,Va=/\S/,
Wa=/^(\s|\u00A0)+|(\s|\u00A0)+$/g,Xa=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,P=navigator.userAgent,xa=false,Q=[],L,$=Object.prototype.toString,aa=Object.prototype.hasOwnProperty,ba=Array.prototype.push,R=Array.prototype.slice,ya=Array.prototype.indexOf;c.fn=c.prototype={init:function(a,b){var d,f;if(!a)return this;if(a.nodeType){this.context=this[0]=a;this.length=1;return this}if(a==="body"&&!b){this.context=s;this[0]=s.body;this.selector="body";this.length=1;return this}if(typeof a==="string")if((d=Ta.exec(a))&&
(d[1]||!b))if(d[1]){f=b?b.ownerDocument||b:s;if(a=Xa.exec(a))if(c.isPlainObject(b)){a=[s.createElement(a[1])];c.fn.attr.call(a,b,true)}else a=[f.createElement(a[1])];else{a=sa([d[1]],[f]);a=(a.cacheable?a.fragment.cloneNode(true):a.fragment).childNodes}return c.merge(this,a)}else{if(b=s.getElementById(d[2])){if(b.id!==d[2])return T.find(a);this.length=1;this[0]=b}this.context=s;this.selector=a;return this}else if(!b&&/^\w+$/.test(a)){this.selector=a;this.context=s;a=s.getElementsByTagName(a);return c.merge(this,
a)}else return!b||b.jquery?(b||T).find(a):c(b).find(a);else if(c.isFunction(a))return T.ready(a);if(a.selector!==w){this.selector=a.selector;this.context=a.context}return c.makeArray(a,this)},selector:"",jquery:"1.4.2",length:0,size:function(){return this.length},toArray:function(){return R.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this.slice(a)[0]:this[a]},pushStack:function(a,b,d){var f=c();c.isArray(a)?ba.apply(f,a):c.merge(f,a);f.prevObject=this;f.context=this.context;if(b===
"find")f.selector=this.selector+(this.selector?" ":"")+d;else if(b)f.selector=this.selector+"."+b+"("+d+")";return f},each:function(a,b){return c.each(this,a,b)},ready:function(a){c.bindReady();if(c.isReady)a.call(s,c);else Q&&Q.push(a);return this},eq:function(a){return a===-1?this.slice(a):this.slice(a,+a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(R.apply(this,arguments),"slice",R.call(arguments).join(","))},map:function(a){return this.pushStack(c.map(this,
function(b,d){return a.call(b,d,b)}))},end:function(){return this.prevObject||c(null)},push:ba,sort:[].sort,splice:[].splice};c.fn.init.prototype=c.fn;c.extend=c.fn.extend=function(){var a=arguments[0]||{},b=1,d=arguments.length,f=false,e,j,i,o;if(typeof a==="boolean"){f=a;a=arguments[1]||{};b=2}if(typeof a!=="object"&&!c.isFunction(a))a={};if(d===b){a=this;--b}for(;b<d;b++)if((e=arguments[b])!=null)for(j in e){i=a[j];o=e[j];if(a!==o)if(f&&o&&(c.isPlainObject(o)||c.isArray(o))){i=i&&(c.isPlainObject(i)||
c.isArray(i))?i:c.isArray(o)?[]:{};a[j]=c.extend(f,i,o)}else if(o!==w)a[j]=o}return a};c.extend({noConflict:function(a){A.$=Sa;if(a)A.jQuery=Ra;return c},isReady:false,ready:function(){if(!c.isReady){if(!s.body)return setTimeout(c.ready,13);c.isReady=true;if(Q){for(var a,b=0;a=Q[b++];)a.call(s,c);Q=null}c.fn.triggerHandler&&c(s).triggerHandler("ready")}},bindReady:function(){if(!xa){xa=true;if(s.readyState==="complete")return c.ready();if(s.addEventListener){s.addEventListener("DOMContentLoaded",
L,false);A.addEventListener("load",c.ready,false)}else if(s.attachEvent){s.attachEvent("onreadystatechange",L);A.attachEvent("onload",c.ready);var a=false;try{a=A.frameElement==null}catch(b){}s.documentElement.doScroll&&a&&ma()}}},isFunction:function(a){return $.call(a)==="[object Function]"},isArray:function(a){return $.call(a)==="[object Array]"},isPlainObject:function(a){if(!a||$.call(a)!=="[object Object]"||a.nodeType||a.setInterval)return false;if(a.constructor&&!aa.call(a,"constructor")&&!aa.call(a.constructor.prototype,
"isPrototypeOf"))return false;var b;for(b in a);return b===w||aa.call(a,b)},isEmptyObject:function(a){for(var b in a)return false;return true},error:function(a){throw a;},parseJSON:function(a){if(typeof a!=="string"||!a)return null;a=c.trim(a);if(/^[\],:{}\s]*$/.test(a.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return A.JSON&&A.JSON.parse?A.JSON.parse(a):(new Function("return "+
a))();else c.error("Invalid JSON: "+a)},noop:function(){},globalEval:function(a){if(a&&Va.test(a)){var b=s.getElementsByTagName("head")[0]||s.documentElement,d=s.createElement("script");d.type="text/javascript";if(c.support.scriptEval)d.appendChild(s.createTextNode(a));else d.text=a;b.insertBefore(d,b.firstChild);b.removeChild(d)}},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,b,d){var f,e=0,j=a.length,i=j===w||c.isFunction(a);if(d)if(i)for(f in a){if(b.apply(a[f],
d)===false)break}else for(;e<j;){if(b.apply(a[e++],d)===false)break}else if(i)for(f in a){if(b.call(a[f],f,a[f])===false)break}else for(d=a[0];e<j&&b.call(d,e,d)!==false;d=a[++e]);return a},trim:function(a){return(a||"").replace(Wa,"")},makeArray:function(a,b){b=b||[];if(a!=null)a.length==null||typeof a==="string"||c.isFunction(a)||typeof a!=="function"&&a.setInterval?ba.call(b,a):c.merge(b,a);return b},inArray:function(a,b){if(b.indexOf)return b.indexOf(a);for(var d=0,f=b.length;d<f;d++)if(b[d]===
a)return d;return-1},merge:function(a,b){var d=a.length,f=0;if(typeof b.length==="number")for(var e=b.length;f<e;f++)a[d++]=b[f];else for(;b[f]!==w;)a[d++]=b[f++];a.length=d;return a},grep:function(a,b,d){for(var f=[],e=0,j=a.length;e<j;e++)!d!==!b(a[e],e)&&f.push(a[e]);return f},map:function(a,b,d){for(var f=[],e,j=0,i=a.length;j<i;j++){e=b(a[j],j,d);if(e!=null)f[f.length]=e}return f.concat.apply([],f)},guid:1,proxy:function(a,b,d){if(arguments.length===2)if(typeof b==="string"){d=a;a=d[b];b=w}else if(b&&
!c.isFunction(b)){d=b;b=w}if(!b&&a)b=function(){return a.apply(d||this,arguments)};if(a)b.guid=a.guid=a.guid||b.guid||c.guid++;return b},uaMatch:function(a){a=a.toLowerCase();a=/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version)?[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||!/compatible/.test(a)&&/(mozilla)(?:.*? rv:([\w.]+))?/.exec(a)||[];return{browser:a[1]||"",version:a[2]||"0"}},browser:{}});P=c.uaMatch(P);if(P.browser){c.browser[P.browser]=true;c.browser.version=P.version}if(c.browser.webkit)c.browser.safari=
true;if(ya)c.inArray=function(a,b){return ya.call(b,a)};T=c(s);if(s.addEventListener)L=function(){s.removeEventListener("DOMContentLoaded",L,false);c.ready()};else if(s.attachEvent)L=function(){if(s.readyState==="complete"){s.detachEvent("onreadystatechange",L);c.ready()}};(function(){c.support={};var a=s.documentElement,b=s.createElement("script"),d=s.createElement("div"),f="script"+J();d.style.display="none";d.innerHTML="   <link/><table></table><a href='/a' style='color:red;float:left;opacity:.55;'>a</a><input type='checkbox'/>";
var e=d.getElementsByTagName("*"),j=d.getElementsByTagName("a")[0];if(!(!e||!e.length||!j)){c.support={leadingWhitespace:d.firstChild.nodeType===3,tbody:!d.getElementsByTagName("tbody").length,htmlSerialize:!!d.getElementsByTagName("link").length,style:/red/.test(j.getAttribute("style")),hrefNormalized:j.getAttribute("href")==="/a",opacity:/^0.55$/.test(j.style.opacity),cssFloat:!!j.style.cssFloat,checkOn:d.getElementsByTagName("input")[0].value==="on",optSelected:s.createElement("select").appendChild(s.createElement("option")).selected,
parentNode:d.removeChild(d.appendChild(s.createElement("div"))).parentNode===null,deleteExpando:true,checkClone:false,scriptEval:false,noCloneEvent:true,boxModel:null};b.type="text/javascript";try{b.appendChild(s.createTextNode("window."+f+"=1;"))}catch(i){}a.insertBefore(b,a.firstChild);if(A[f]){c.support.scriptEval=true;delete A[f]}try{delete b.test}catch(o){c.support.deleteExpando=false}a.removeChild(b);if(d.attachEvent&&d.fireEvent){d.attachEvent("onclick",function k(){c.support.noCloneEvent=
false;d.detachEvent("onclick",k)});d.cloneNode(true).fireEvent("onclick")}d=s.createElement("div");d.innerHTML="<input type='radio' name='radiotest' checked='checked'/>";a=s.createDocumentFragment();a.appendChild(d.firstChild);c.support.checkClone=a.cloneNode(true).cloneNode(true).lastChild.checked;c(function(){var k=s.createElement("div");k.style.width=k.style.paddingLeft="1px";s.body.appendChild(k);c.boxModel=c.support.boxModel=k.offsetWidth===2;s.body.removeChild(k).style.display="none"});a=function(k){var n=
s.createElement("div");k="on"+k;var r=k in n;if(!r){n.setAttribute(k,"return;");r=typeof n[k]==="function"}return r};c.support.submitBubbles=a("submit");c.support.changeBubbles=a("change");a=b=d=e=j=null}})();c.props={"for":"htmlFor","class":"className",readonly:"readOnly",maxlength:"maxLength",cellspacing:"cellSpacing",rowspan:"rowSpan",colspan:"colSpan",tabindex:"tabIndex",usemap:"useMap",frameborder:"frameBorder"};var G="jQuery"+J(),Ya=0,za={};c.extend({cache:{},expando:G,noData:{embed:true,object:true,
applet:true},data:function(a,b,d){if(!(a.nodeName&&c.noData[a.nodeName.toLowerCase()])){a=a==A?za:a;var f=a[G],e=c.cache;if(!f&&typeof b==="string"&&d===w)return null;f||(f=++Ya);if(typeof b==="object"){a[G]=f;e[f]=c.extend(true,{},b)}else if(!e[f]){a[G]=f;e[f]={}}a=e[f];if(d!==w)a[b]=d;return typeof b==="string"?a[b]:a}},removeData:function(a,b){if(!(a.nodeName&&c.noData[a.nodeName.toLowerCase()])){a=a==A?za:a;var d=a[G],f=c.cache,e=f[d];if(b){if(e){delete e[b];c.isEmptyObject(e)&&c.removeData(a)}}else{if(c.support.deleteExpando)delete a[c.expando];
else a.removeAttribute&&a.removeAttribute(c.expando);delete f[d]}}}});c.fn.extend({data:function(a,b){if(typeof a==="undefined"&&this.length)return c.data(this[0]);else if(typeof a==="object")return this.each(function(){c.data(this,a)});var d=a.split(".");d[1]=d[1]?"."+d[1]:"";if(b===w){var f=this.triggerHandler("getData"+d[1]+"!",[d[0]]);if(f===w&&this.length)f=c.data(this[0],a);return f===w&&d[1]?this.data(d[0]):f}else return this.trigger("setData"+d[1]+"!",[d[0],b]).each(function(){c.data(this,
a,b)})},removeData:function(a){return this.each(function(){c.removeData(this,a)})}});c.extend({queue:function(a,b,d){if(a){b=(b||"fx")+"queue";var f=c.data(a,b);if(!d)return f||[];if(!f||c.isArray(d))f=c.data(a,b,c.makeArray(d));else f.push(d);return f}},dequeue:function(a,b){b=b||"fx";var d=c.queue(a,b),f=d.shift();if(f==="inprogress")f=d.shift();if(f){b==="fx"&&d.unshift("inprogress");f.call(a,function(){c.dequeue(a,b)})}}});c.fn.extend({queue:function(a,b){if(typeof a!=="string"){b=a;a="fx"}if(b===
w)return c.queue(this[0],a);return this.each(function(){var d=c.queue(this,a,b);a==="fx"&&d[0]!=="inprogress"&&c.dequeue(this,a)})},dequeue:function(a){return this.each(function(){c.dequeue(this,a)})},delay:function(a,b){a=c.fx?c.fx.speeds[a]||a:a;b=b||"fx";return this.queue(b,function(){var d=this;setTimeout(function(){c.dequeue(d,b)},a)})},clearQueue:function(a){return this.queue(a||"fx",[])}});var Aa=/[\n\t]/g,ca=/\s+/,Za=/\r/g,$a=/href|src|style/,ab=/(button|input)/i,bb=/(button|input|object|select|textarea)/i,
cb=/^(a|area)$/i,Ba=/radio|checkbox/;c.fn.extend({attr:function(a,b){return X(this,a,b,true,c.attr)},removeAttr:function(a){return this.each(function(){c.attr(this,a,"");this.nodeType===1&&this.removeAttribute(a)})},addClass:function(a){if(c.isFunction(a))return this.each(function(n){var r=c(this);r.addClass(a.call(this,n,r.attr("class")))});if(a&&typeof a==="string")for(var b=(a||"").split(ca),d=0,f=this.length;d<f;d++){var e=this[d];if(e.nodeType===1)if(e.className){for(var j=" "+e.className+" ",
i=e.className,o=0,k=b.length;o<k;o++)if(j.indexOf(" "+b[o]+" ")<0)i+=" "+b[o];e.className=c.trim(i)}else e.className=a}return this},removeClass:function(a){if(c.isFunction(a))return this.each(function(k){var n=c(this);n.removeClass(a.call(this,k,n.attr("class")))});if(a&&typeof a==="string"||a===w)for(var b=(a||"").split(ca),d=0,f=this.length;d<f;d++){var e=this[d];if(e.nodeType===1&&e.className)if(a){for(var j=(" "+e.className+" ").replace(Aa," "),i=0,o=b.length;i<o;i++)j=j.replace(" "+b[i]+" ",
" ");e.className=c.trim(j)}else e.className=""}return this},toggleClass:function(a,b){var d=typeof a,f=typeof b==="boolean";if(c.isFunction(a))return this.each(function(e){var j=c(this);j.toggleClass(a.call(this,e,j.attr("class"),b),b)});return this.each(function(){if(d==="string")for(var e,j=0,i=c(this),o=b,k=a.split(ca);e=k[j++];){o=f?o:!i.hasClass(e);i[o?"addClass":"removeClass"](e)}else if(d==="undefined"||d==="boolean"){this.className&&c.data(this,"__className__",this.className);this.className=
this.className||a===false?"":c.data(this,"__className__")||""}})},hasClass:function(a){a=" "+a+" ";for(var b=0,d=this.length;b<d;b++)if((" "+this[b].className+" ").replace(Aa," ").indexOf(a)>-1)return true;return false},val:function(a){if(a===w){var b=this[0];if(b){if(c.nodeName(b,"option"))return(b.attributes.value||{}).specified?b.value:b.text;if(c.nodeName(b,"select")){var d=b.selectedIndex,f=[],e=b.options;b=b.type==="select-one";if(d<0)return null;var j=b?d:0;for(d=b?d+1:e.length;j<d;j++){var i=
e[j];if(i.selected){a=c(i).val();if(b)return a;f.push(a)}}return f}if(Ba.test(b.type)&&!c.support.checkOn)return b.getAttribute("value")===null?"on":b.value;return(b.value||"").replace(Za,"")}return w}var o=c.isFunction(a);return this.each(function(k){var n=c(this),r=a;if(this.nodeType===1){if(o)r=a.call(this,k,n.val());if(typeof r==="number")r+="";if(c.isArray(r)&&Ba.test(this.type))this.checked=c.inArray(n.val(),r)>=0;else if(c.nodeName(this,"select")){var u=c.makeArray(r);c("option",this).each(function(){this.selected=
c.inArray(c(this).val(),u)>=0});if(!u.length)this.selectedIndex=-1}else this.value=r}})}});c.extend({attrFn:{val:true,css:true,html:true,text:true,data:true,width:true,height:true,offset:true},attr:function(a,b,d,f){if(!a||a.nodeType===3||a.nodeType===8)return w;if(f&&b in c.attrFn)return c(a)[b](d);f=a.nodeType!==1||!c.isXMLDoc(a);var e=d!==w;b=f&&c.props[b]||b;if(a.nodeType===1){var j=$a.test(b);if(b in a&&f&&!j){if(e){b==="type"&&ab.test(a.nodeName)&&a.parentNode&&c.error("type property can't be changed");
a[b]=d}if(c.nodeName(a,"form")&&a.getAttributeNode(b))return a.getAttributeNode(b).nodeValue;if(b==="tabIndex")return(b=a.getAttributeNode("tabIndex"))&&b.specified?b.value:bb.test(a.nodeName)||cb.test(a.nodeName)&&a.href?0:w;return a[b]}if(!c.support.style&&f&&b==="style"){if(e)a.style.cssText=""+d;return a.style.cssText}e&&a.setAttribute(b,""+d);a=!c.support.hrefNormalized&&f&&j?a.getAttribute(b,2):a.getAttribute(b);return a===null?w:a}return c.style(a,b,d)}});var O=/\.(.*)$/,db=function(a){return a.replace(/[^\w\s\.\|`]/g,
function(b){return"\\"+b})};c.event={add:function(a,b,d,f){if(!(a.nodeType===3||a.nodeType===8)){if(a.setInterval&&a!==A&&!a.frameElement)a=A;var e,j;if(d.handler){e=d;d=e.handler}if(!d.guid)d.guid=c.guid++;if(j=c.data(a)){var i=j.events=j.events||{},o=j.handle;if(!o)j.handle=o=function(){return typeof c!=="undefined"&&!c.event.triggered?c.event.handle.apply(o.elem,arguments):w};o.elem=a;b=b.split(" ");for(var k,n=0,r;k=b[n++];){j=e?c.extend({},e):{handler:d,data:f};if(k.indexOf(".")>-1){r=k.split(".");
k=r.shift();j.namespace=r.slice(0).sort().join(".")}else{r=[];j.namespace=""}j.type=k;j.guid=d.guid;var u=i[k],z=c.event.special[k]||{};if(!u){u=i[k]=[];if(!z.setup||z.setup.call(a,f,r,o)===false)if(a.addEventListener)a.addEventListener(k,o,false);else a.attachEvent&&a.attachEvent("on"+k,o)}if(z.add){z.add.call(a,j);if(!j.handler.guid)j.handler.guid=d.guid}u.push(j);c.event.global[k]=true}a=null}}},global:{},remove:function(a,b,d,f){if(!(a.nodeType===3||a.nodeType===8)){var e,j=0,i,o,k,n,r,u,z=c.data(a),
C=z&&z.events;if(z&&C){if(b&&b.type){d=b.handler;b=b.type}if(!b||typeof b==="string"&&b.charAt(0)==="."){b=b||"";for(e in C)c.event.remove(a,e+b)}else{for(b=b.split(" ");e=b[j++];){n=e;i=e.indexOf(".")<0;o=[];if(!i){o=e.split(".");e=o.shift();k=new RegExp("(^|\\.)"+c.map(o.slice(0).sort(),db).join("\\.(?:.*\\.)?")+"(\\.|$)")}if(r=C[e])if(d){n=c.event.special[e]||{};for(B=f||0;B<r.length;B++){u=r[B];if(d.guid===u.guid){if(i||k.test(u.namespace)){f==null&&r.splice(B--,1);n.remove&&n.remove.call(a,u)}if(f!=
null)break}}if(r.length===0||f!=null&&r.length===1){if(!n.teardown||n.teardown.call(a,o)===false)Ca(a,e,z.handle);delete C[e]}}else for(var B=0;B<r.length;B++){u=r[B];if(i||k.test(u.namespace)){c.event.remove(a,n,u.handler,B);r.splice(B--,1)}}}if(c.isEmptyObject(C)){if(b=z.handle)b.elem=null;delete z.events;delete z.handle;c.isEmptyObject(z)&&c.removeData(a)}}}}},trigger:function(a,b,d,f){var e=a.type||a;if(!f){a=typeof a==="object"?a[G]?a:c.extend(c.Event(e),a):c.Event(e);if(e.indexOf("!")>=0){a.type=
e=e.slice(0,-1);a.exclusive=true}if(!d){a.stopPropagation();c.event.global[e]&&c.each(c.cache,function(){this.events&&this.events[e]&&c.event.trigger(a,b,this.handle.elem)})}if(!d||d.nodeType===3||d.nodeType===8)return w;a.result=w;a.target=d;b=c.makeArray(b);b.unshift(a)}a.currentTarget=d;(f=c.data(d,"handle"))&&f.apply(d,b);f=d.parentNode||d.ownerDocument;try{if(!(d&&d.nodeName&&c.noData[d.nodeName.toLowerCase()]))if(d["on"+e]&&d["on"+e].apply(d,b)===false)a.result=false}catch(j){}if(!a.isPropagationStopped()&&
f)c.event.trigger(a,b,f,true);else if(!a.isDefaultPrevented()){f=a.target;var i,o=c.nodeName(f,"a")&&e==="click",k=c.event.special[e]||{};if((!k._default||k._default.call(d,a)===false)&&!o&&!(f&&f.nodeName&&c.noData[f.nodeName.toLowerCase()])){try{if(f[e]){if(i=f["on"+e])f["on"+e]=null;c.event.triggered=true;f[e]()}}catch(n){}if(i)f["on"+e]=i;c.event.triggered=false}}},handle:function(a){var b,d,f,e;a=arguments[0]=c.event.fix(a||A.event);a.currentTarget=this;b=a.type.indexOf(".")<0&&!a.exclusive;
if(!b){d=a.type.split(".");a.type=d.shift();f=new RegExp("(^|\\.)"+d.slice(0).sort().join("\\.(?:.*\\.)?")+"(\\.|$)")}e=c.data(this,"events");d=e[a.type];if(e&&d){d=d.slice(0);e=0;for(var j=d.length;e<j;e++){var i=d[e];if(b||f.test(i.namespace)){a.handler=i.handler;a.data=i.data;a.handleObj=i;i=i.handler.apply(this,arguments);if(i!==w){a.result=i;if(i===false){a.preventDefault();a.stopPropagation()}}if(a.isImmediatePropagationStopped())break}}}return a.result},props:"altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY originalTarget pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "),
fix:function(a){if(a[G])return a;var b=a;a=c.Event(b);for(var d=this.props.length,f;d;){f=this.props[--d];a[f]=b[f]}if(!a.target)a.target=a.srcElement||s;if(a.target.nodeType===3)a.target=a.target.parentNode;if(!a.relatedTarget&&a.fromElement)a.relatedTarget=a.fromElement===a.target?a.toElement:a.fromElement;if(a.pageX==null&&a.clientX!=null){b=s.documentElement;d=s.body;a.pageX=a.clientX+(b&&b.scrollLeft||d&&d.scrollLeft||0)-(b&&b.clientLeft||d&&d.clientLeft||0);a.pageY=a.clientY+(b&&b.scrollTop||
d&&d.scrollTop||0)-(b&&b.clientTop||d&&d.clientTop||0)}if(!a.which&&(a.charCode||a.charCode===0?a.charCode:a.keyCode))a.which=a.charCode||a.keyCode;if(!a.metaKey&&a.ctrlKey)a.metaKey=a.ctrlKey;if(!a.which&&a.button!==w)a.which=a.button&1?1:a.button&2?3:a.button&4?2:0;return a},guid:1E8,proxy:c.proxy,special:{ready:{setup:c.bindReady,teardown:c.noop},live:{add:function(a){c.event.add(this,a.origType,c.extend({},a,{handler:oa}))},remove:function(a){var b=true,d=a.origType.replace(O,"");c.each(c.data(this,
"events").live||[],function(){if(d===this.origType.replace(O,""))return b=false});b&&c.event.remove(this,a.origType,oa)}},beforeunload:{setup:function(a,b,d){if(this.setInterval)this.onbeforeunload=d;return false},teardown:function(a,b){if(this.onbeforeunload===b)this.onbeforeunload=null}}}};var Ca=s.removeEventListener?function(a,b,d){a.removeEventListener(b,d,false)}:function(a,b,d){a.detachEvent("on"+b,d)};c.Event=function(a){if(!this.preventDefault)return new c.Event(a);if(a&&a.type){this.originalEvent=
a;this.type=a.type}else this.type=a;this.timeStamp=J();this[G]=true};c.Event.prototype={preventDefault:function(){this.isDefaultPrevented=Z;var a=this.originalEvent;if(a){a.preventDefault&&a.preventDefault();a.returnValue=false}},stopPropagation:function(){this.isPropagationStopped=Z;var a=this.originalEvent;if(a){a.stopPropagation&&a.stopPropagation();a.cancelBubble=true}},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=Z;this.stopPropagation()},isDefaultPrevented:Y,isPropagationStopped:Y,
isImmediatePropagationStopped:Y};var Da=function(a){var b=a.relatedTarget;try{for(;b&&b!==this;)b=b.parentNode;if(b!==this){a.type=a.data;c.event.handle.apply(this,arguments)}}catch(d){}},Ea=function(a){a.type=a.data;c.event.handle.apply(this,arguments)};c.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){c.event.special[a]={setup:function(d){c.event.add(this,b,d&&d.selector?Ea:Da,a)},teardown:function(d){c.event.remove(this,b,d&&d.selector?Ea:Da)}}});if(!c.support.submitBubbles)c.event.special.submit=
{setup:function(){if(this.nodeName.toLowerCase()!=="form"){c.event.add(this,"click.specialSubmit",function(a){var b=a.target,d=b.type;if((d==="submit"||d==="image")&&c(b).closest("form").length)return na("submit",this,arguments)});c.event.add(this,"keypress.specialSubmit",function(a){var b=a.target,d=b.type;if((d==="text"||d==="password")&&c(b).closest("form").length&&a.keyCode===13)return na("submit",this,arguments)})}else return false},teardown:function(){c.event.remove(this,".specialSubmit")}};
if(!c.support.changeBubbles){var da=/textarea|input|select/i,ea,Fa=function(a){var b=a.type,d=a.value;if(b==="radio"||b==="checkbox")d=a.checked;else if(b==="select-multiple")d=a.selectedIndex>-1?c.map(a.options,function(f){return f.selected}).join("-"):"";else if(a.nodeName.toLowerCase()==="select")d=a.selectedIndex;return d},fa=function(a,b){var d=a.target,f,e;if(!(!da.test(d.nodeName)||d.readOnly)){f=c.data(d,"_change_data");e=Fa(d);if(a.type!=="focusout"||d.type!=="radio")c.data(d,"_change_data",
e);if(!(f===w||e===f))if(f!=null||e){a.type="change";return c.event.trigger(a,b,d)}}};c.event.special.change={filters:{focusout:fa,click:function(a){var b=a.target,d=b.type;if(d==="radio"||d==="checkbox"||b.nodeName.toLowerCase()==="select")return fa.call(this,a)},keydown:function(a){var b=a.target,d=b.type;if(a.keyCode===13&&b.nodeName.toLowerCase()!=="textarea"||a.keyCode===32&&(d==="checkbox"||d==="radio")||d==="select-multiple")return fa.call(this,a)},beforeactivate:function(a){a=a.target;c.data(a,
"_change_data",Fa(a))}},setup:function(){if(this.type==="file")return false;for(var a in ea)c.event.add(this,a+".specialChange",ea[a]);return da.test(this.nodeName)},teardown:function(){c.event.remove(this,".specialChange");return da.test(this.nodeName)}};ea=c.event.special.change.filters}s.addEventListener&&c.each({focus:"focusin",blur:"focusout"},function(a,b){function d(f){f=c.event.fix(f);f.type=b;return c.event.handle.call(this,f)}c.event.special[b]={setup:function(){this.addEventListener(a,
d,true)},teardown:function(){this.removeEventListener(a,d,true)}}});c.each(["bind","one"],function(a,b){c.fn[b]=function(d,f,e){if(typeof d==="object"){for(var j in d)this[b](j,f,d[j],e);return this}if(c.isFunction(f)){e=f;f=w}var i=b==="one"?c.proxy(e,function(k){c(this).unbind(k,i);return e.apply(this,arguments)}):e;if(d==="unload"&&b!=="one")this.one(d,f,e);else{j=0;for(var o=this.length;j<o;j++)c.event.add(this[j],d,i,f)}return this}});c.fn.extend({unbind:function(a,b){if(typeof a==="object"&&
!a.preventDefault)for(var d in a)this.unbind(d,a[d]);else{d=0;for(var f=this.length;d<f;d++)c.event.remove(this[d],a,b)}return this},delegate:function(a,b,d,f){return this.live(b,d,f,a)},undelegate:function(a,b,d){return arguments.length===0?this.unbind("live"):this.die(b,null,d,a)},trigger:function(a,b){return this.each(function(){c.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0]){a=c.Event(a);a.preventDefault();a.stopPropagation();c.event.trigger(a,b,this[0]);return a.result}},
toggle:function(a){for(var b=arguments,d=1;d<b.length;)c.proxy(a,b[d++]);return this.click(c.proxy(a,function(f){var e=(c.data(this,"lastToggle"+a.guid)||0)%d;c.data(this,"lastToggle"+a.guid,e+1);f.preventDefault();return b[e].apply(this,arguments)||false}))},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var Ga={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout"};c.each(["live","die"],function(a,b){c.fn[b]=function(d,f,e,j){var i,o=0,k,n,r=j||this.selector,
u=j?this:c(this.context);if(c.isFunction(f)){e=f;f=w}for(d=(d||"").split(" ");(i=d[o++])!=null;){j=O.exec(i);k="";if(j){k=j[0];i=i.replace(O,"")}if(i==="hover")d.push("mouseenter"+k,"mouseleave"+k);else{n=i;if(i==="focus"||i==="blur"){d.push(Ga[i]+k);i+=k}else i=(Ga[i]||i)+k;b==="live"?u.each(function(){c.event.add(this,pa(i,r),{data:f,selector:r,handler:e,origType:i,origHandler:e,preType:n})}):u.unbind(pa(i,r),e)}}return this}});c.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "),
function(a,b){c.fn[b]=function(d){return d?this.bind(b,d):this.trigger(b)};if(c.attrFn)c.attrFn[b]=true});A.attachEvent&&!A.addEventListener&&A.attachEvent("onunload",function(){for(var a in c.cache)if(c.cache[a].handle)try{c.event.remove(c.cache[a].handle.elem)}catch(b){}});(function(){function a(g){for(var h="",l,m=0;g[m];m++){l=g[m];if(l.nodeType===3||l.nodeType===4)h+=l.nodeValue;else if(l.nodeType!==8)h+=a(l.childNodes)}return h}function b(g,h,l,m,q,p){q=0;for(var v=m.length;q<v;q++){var t=m[q];
if(t){t=t[g];for(var y=false;t;){if(t.sizcache===l){y=m[t.sizset];break}if(t.nodeType===1&&!p){t.sizcache=l;t.sizset=q}if(t.nodeName.toLowerCase()===h){y=t;break}t=t[g]}m[q]=y}}}function d(g,h,l,m,q,p){q=0;for(var v=m.length;q<v;q++){var t=m[q];if(t){t=t[g];for(var y=false;t;){if(t.sizcache===l){y=m[t.sizset];break}if(t.nodeType===1){if(!p){t.sizcache=l;t.sizset=q}if(typeof h!=="string"){if(t===h){y=true;break}}else if(k.filter(h,[t]).length>0){y=t;break}}t=t[g]}m[q]=y}}}var f=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^[\]]*\]|['"][^'"]*['"]|[^[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
e=0,j=Object.prototype.toString,i=false,o=true;[0,0].sort(function(){o=false;return 0});var k=function(g,h,l,m){l=l||[];var q=h=h||s;if(h.nodeType!==1&&h.nodeType!==9)return[];if(!g||typeof g!=="string")return l;for(var p=[],v,t,y,S,H=true,M=x(h),I=g;(f.exec(""),v=f.exec(I))!==null;){I=v[3];p.push(v[1]);if(v[2]){S=v[3];break}}if(p.length>1&&r.exec(g))if(p.length===2&&n.relative[p[0]])t=ga(p[0]+p[1],h);else for(t=n.relative[p[0]]?[h]:k(p.shift(),h);p.length;){g=p.shift();if(n.relative[g])g+=p.shift();
t=ga(g,t)}else{if(!m&&p.length>1&&h.nodeType===9&&!M&&n.match.ID.test(p[0])&&!n.match.ID.test(p[p.length-1])){v=k.find(p.shift(),h,M);h=v.expr?k.filter(v.expr,v.set)[0]:v.set[0]}if(h){v=m?{expr:p.pop(),set:z(m)}:k.find(p.pop(),p.length===1&&(p[0]==="~"||p[0]==="+")&&h.parentNode?h.parentNode:h,M);t=v.expr?k.filter(v.expr,v.set):v.set;if(p.length>0)y=z(t);else H=false;for(;p.length;){var D=p.pop();v=D;if(n.relative[D])v=p.pop();else D="";if(v==null)v=h;n.relative[D](y,v,M)}}else y=[]}y||(y=t);y||k.error(D||
g);if(j.call(y)==="[object Array]")if(H)if(h&&h.nodeType===1)for(g=0;y[g]!=null;g++){if(y[g]&&(y[g]===true||y[g].nodeType===1&&E(h,y[g])))l.push(t[g])}else for(g=0;y[g]!=null;g++)y[g]&&y[g].nodeType===1&&l.push(t[g]);else l.push.apply(l,y);else z(y,l);if(S){k(S,q,l,m);k.uniqueSort(l)}return l};k.uniqueSort=function(g){if(B){i=o;g.sort(B);if(i)for(var h=1;h<g.length;h++)g[h]===g[h-1]&&g.splice(h--,1)}return g};k.matches=function(g,h){return k(g,null,null,h)};k.find=function(g,h,l){var m,q;if(!g)return[];
for(var p=0,v=n.order.length;p<v;p++){var t=n.order[p];if(q=n.leftMatch[t].exec(g)){var y=q[1];q.splice(1,1);if(y.substr(y.length-1)!=="\\"){q[1]=(q[1]||"").replace(/\\/g,"");m=n.find[t](q,h,l);if(m!=null){g=g.replace(n.match[t],"");break}}}}m||(m=h.getElementsByTagName("*"));return{set:m,expr:g}};k.filter=function(g,h,l,m){for(var q=g,p=[],v=h,t,y,S=h&&h[0]&&x(h[0]);g&&h.length;){for(var H in n.filter)if((t=n.leftMatch[H].exec(g))!=null&&t[2]){var M=n.filter[H],I,D;D=t[1];y=false;t.splice(1,1);if(D.substr(D.length-
1)!=="\\"){if(v===p)p=[];if(n.preFilter[H])if(t=n.preFilter[H](t,v,l,p,m,S)){if(t===true)continue}else y=I=true;if(t)for(var U=0;(D=v[U])!=null;U++)if(D){I=M(D,t,U,v);var Ha=m^!!I;if(l&&I!=null)if(Ha)y=true;else v[U]=false;else if(Ha){p.push(D);y=true}}if(I!==w){l||(v=p);g=g.replace(n.match[H],"");if(!y)return[];break}}}if(g===q)if(y==null)k.error(g);else break;q=g}return v};k.error=function(g){throw"Syntax error, unrecognized expression: "+g;};var n=k.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF-]|\\.)+)/,
CLASS:/\.((?:[\w\u00c0-\uFFFF-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF-]|\\.)+)\s*(?:(\S?=)\s*(['"]*)(.*?)\3|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\((even|odd|[\dn+-]*)\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(g){return g.getAttribute("href")}},
relative:{"+":function(g,h){var l=typeof h==="string",m=l&&!/\W/.test(h);l=l&&!m;if(m)h=h.toLowerCase();m=0;for(var q=g.length,p;m<q;m++)if(p=g[m]){for(;(p=p.previousSibling)&&p.nodeType!==1;);g[m]=l||p&&p.nodeName.toLowerCase()===h?p||false:p===h}l&&k.filter(h,g,true)},">":function(g,h){var l=typeof h==="string";if(l&&!/\W/.test(h)){h=h.toLowerCase();for(var m=0,q=g.length;m<q;m++){var p=g[m];if(p){l=p.parentNode;g[m]=l.nodeName.toLowerCase()===h?l:false}}}else{m=0;for(q=g.length;m<q;m++)if(p=g[m])g[m]=
l?p.parentNode:p.parentNode===h;l&&k.filter(h,g,true)}},"":function(g,h,l){var m=e++,q=d;if(typeof h==="string"&&!/\W/.test(h)){var p=h=h.toLowerCase();q=b}q("parentNode",h,m,g,p,l)},"~":function(g,h,l){var m=e++,q=d;if(typeof h==="string"&&!/\W/.test(h)){var p=h=h.toLowerCase();q=b}q("previousSibling",h,m,g,p,l)}},find:{ID:function(g,h,l){if(typeof h.getElementById!=="undefined"&&!l)return(g=h.getElementById(g[1]))?[g]:[]},NAME:function(g,h){if(typeof h.getElementsByName!=="undefined"){var l=[];
h=h.getElementsByName(g[1]);for(var m=0,q=h.length;m<q;m++)h[m].getAttribute("name")===g[1]&&l.push(h[m]);return l.length===0?null:l}},TAG:function(g,h){return h.getElementsByTagName(g[1])}},preFilter:{CLASS:function(g,h,l,m,q,p){g=" "+g[1].replace(/\\/g,"")+" ";if(p)return g;p=0;for(var v;(v=h[p])!=null;p++)if(v)if(q^(v.className&&(" "+v.className+" ").replace(/[\t\n]/g," ").indexOf(g)>=0))l||m.push(v);else if(l)h[p]=false;return false},ID:function(g){return g[1].replace(/\\/g,"")},TAG:function(g){return g[1].toLowerCase()},
CHILD:function(g){if(g[1]==="nth"){var h=/(-?)(\d*)n((?:\+|-)?\d*)/.exec(g[2]==="even"&&"2n"||g[2]==="odd"&&"2n+1"||!/\D/.test(g[2])&&"0n+"+g[2]||g[2]);g[2]=h[1]+(h[2]||1)-0;g[3]=h[3]-0}g[0]=e++;return g},ATTR:function(g,h,l,m,q,p){h=g[1].replace(/\\/g,"");if(!p&&n.attrMap[h])g[1]=n.attrMap[h];if(g[2]==="~=")g[4]=" "+g[4]+" ";return g},PSEUDO:function(g,h,l,m,q){if(g[1]==="not")if((f.exec(g[3])||"").length>1||/^\w/.test(g[3]))g[3]=k(g[3],null,null,h);else{g=k.filter(g[3],h,l,true^q);l||m.push.apply(m,
g);return false}else if(n.match.POS.test(g[0])||n.match.CHILD.test(g[0]))return true;return g},POS:function(g){g.unshift(true);return g}},filters:{enabled:function(g){return g.disabled===false&&g.type!=="hidden"},disabled:function(g){return g.disabled===true},checked:function(g){return g.checked===true},selected:function(g){return g.selected===true},parent:function(g){return!!g.firstChild},empty:function(g){return!g.firstChild},has:function(g,h,l){return!!k(l[3],g).length},header:function(g){return/h\d/i.test(g.nodeName)},
text:function(g){return"text"===g.type},radio:function(g){return"radio"===g.type},checkbox:function(g){return"checkbox"===g.type},file:function(g){return"file"===g.type},password:function(g){return"password"===g.type},submit:function(g){return"submit"===g.type},image:function(g){return"image"===g.type},reset:function(g){return"reset"===g.type},button:function(g){return"button"===g.type||g.nodeName.toLowerCase()==="button"},input:function(g){return/input|select|textarea|button/i.test(g.nodeName)}},
setFilters:{first:function(g,h){return h===0},last:function(g,h,l,m){return h===m.length-1},even:function(g,h){return h%2===0},odd:function(g,h){return h%2===1},lt:function(g,h,l){return h<l[3]-0},gt:function(g,h,l){return h>l[3]-0},nth:function(g,h,l){return l[3]-0===h},eq:function(g,h,l){return l[3]-0===h}},filter:{PSEUDO:function(g,h,l,m){var q=h[1],p=n.filters[q];if(p)return p(g,l,h,m);else if(q==="contains")return(g.textContent||g.innerText||a([g])||"").indexOf(h[3])>=0;else if(q==="not"){h=
h[3];l=0;for(m=h.length;l<m;l++)if(h[l]===g)return false;return true}else k.error("Syntax error, unrecognized expression: "+q)},CHILD:function(g,h){var l=h[1],m=g;switch(l){case "only":case "first":for(;m=m.previousSibling;)if(m.nodeType===1)return false;if(l==="first")return true;m=g;case "last":for(;m=m.nextSibling;)if(m.nodeType===1)return false;return true;case "nth":l=h[2];var q=h[3];if(l===1&&q===0)return true;h=h[0];var p=g.parentNode;if(p&&(p.sizcache!==h||!g.nodeIndex)){var v=0;for(m=p.firstChild;m;m=
m.nextSibling)if(m.nodeType===1)m.nodeIndex=++v;p.sizcache=h}g=g.nodeIndex-q;return l===0?g===0:g%l===0&&g/l>=0}},ID:function(g,h){return g.nodeType===1&&g.getAttribute("id")===h},TAG:function(g,h){return h==="*"&&g.nodeType===1||g.nodeName.toLowerCase()===h},CLASS:function(g,h){return(" "+(g.className||g.getAttribute("class"))+" ").indexOf(h)>-1},ATTR:function(g,h){var l=h[1];g=n.attrHandle[l]?n.attrHandle[l](g):g[l]!=null?g[l]:g.getAttribute(l);l=g+"";var m=h[2];h=h[4];return g==null?m==="!=":m===
"="?l===h:m==="*="?l.indexOf(h)>=0:m==="~="?(" "+l+" ").indexOf(h)>=0:!h?l&&g!==false:m==="!="?l!==h:m==="^="?l.indexOf(h)===0:m==="$="?l.substr(l.length-h.length)===h:m==="|="?l===h||l.substr(0,h.length+1)===h+"-":false},POS:function(g,h,l,m){var q=n.setFilters[h[2]];if(q)return q(g,l,h,m)}}},r=n.match.POS;for(var u in n.match){n.match[u]=new RegExp(n.match[u].source+/(?![^\[]*\])(?![^\(]*\))/.source);n.leftMatch[u]=new RegExp(/(^(?:.|\r|\n)*?)/.source+n.match[u].source.replace(/\\(\d+)/g,function(g,
h){return"\\"+(h-0+1)}))}var z=function(g,h){g=Array.prototype.slice.call(g,0);if(h){h.push.apply(h,g);return h}return g};try{Array.prototype.slice.call(s.documentElement.childNodes,0)}catch(C){z=function(g,h){h=h||[];if(j.call(g)==="[object Array]")Array.prototype.push.apply(h,g);else if(typeof g.length==="number")for(var l=0,m=g.length;l<m;l++)h.push(g[l]);else for(l=0;g[l];l++)h.push(g[l]);return h}}var B;if(s.documentElement.compareDocumentPosition)B=function(g,h){if(!g.compareDocumentPosition||
!h.compareDocumentPosition){if(g==h)i=true;return g.compareDocumentPosition?-1:1}g=g.compareDocumentPosition(h)&4?-1:g===h?0:1;if(g===0)i=true;return g};else if("sourceIndex"in s.documentElement)B=function(g,h){if(!g.sourceIndex||!h.sourceIndex){if(g==h)i=true;return g.sourceIndex?-1:1}g=g.sourceIndex-h.sourceIndex;if(g===0)i=true;return g};else if(s.createRange)B=function(g,h){if(!g.ownerDocument||!h.ownerDocument){if(g==h)i=true;return g.ownerDocument?-1:1}var l=g.ownerDocument.createRange(),m=
h.ownerDocument.createRange();l.setStart(g,0);l.setEnd(g,0);m.setStart(h,0);m.setEnd(h,0);g=l.compareBoundaryPoints(Range.START_TO_END,m);if(g===0)i=true;return g};(function(){var g=s.createElement("div"),h="script"+(new Date).getTime();g.innerHTML="<a name='"+h+"'/>";var l=s.documentElement;l.insertBefore(g,l.firstChild);if(s.getElementById(h)){n.find.ID=function(m,q,p){if(typeof q.getElementById!=="undefined"&&!p)return(q=q.getElementById(m[1]))?q.id===m[1]||typeof q.getAttributeNode!=="undefined"&&
q.getAttributeNode("id").nodeValue===m[1]?[q]:w:[]};n.filter.ID=function(m,q){var p=typeof m.getAttributeNode!=="undefined"&&m.getAttributeNode("id");return m.nodeType===1&&p&&p.nodeValue===q}}l.removeChild(g);l=g=null})();(function(){var g=s.createElement("div");g.appendChild(s.createComment(""));if(g.getElementsByTagName("*").length>0)n.find.TAG=function(h,l){l=l.getElementsByTagName(h[1]);if(h[1]==="*"){h=[];for(var m=0;l[m];m++)l[m].nodeType===1&&h.push(l[m]);l=h}return l};g.innerHTML="<a href='#'></a>";
if(g.firstChild&&typeof g.firstChild.getAttribute!=="undefined"&&g.firstChild.getAttribute("href")!=="#")n.attrHandle.href=function(h){return h.getAttribute("href",2)};g=null})();s.querySelectorAll&&function(){var g=k,h=s.createElement("div");h.innerHTML="<p class='TEST'></p>";if(!(h.querySelectorAll&&h.querySelectorAll(".TEST").length===0)){k=function(m,q,p,v){q=q||s;if(!v&&q.nodeType===9&&!x(q))try{return z(q.querySelectorAll(m),p)}catch(t){}return g(m,q,p,v)};for(var l in g)k[l]=g[l];h=null}}();
(function(){var g=s.createElement("div");g.innerHTML="<div class='test e'></div><div class='test'></div>";if(!(!g.getElementsByClassName||g.getElementsByClassName("e").length===0)){g.lastChild.className="e";if(g.getElementsByClassName("e").length!==1){n.order.splice(1,0,"CLASS");n.find.CLASS=function(h,l,m){if(typeof l.getElementsByClassName!=="undefined"&&!m)return l.getElementsByClassName(h[1])};g=null}}})();var E=s.compareDocumentPosition?function(g,h){return!!(g.compareDocumentPosition(h)&16)}:
function(g,h){return g!==h&&(g.contains?g.contains(h):true)},x=function(g){return(g=(g?g.ownerDocument||g:0).documentElement)?g.nodeName!=="HTML":false},ga=function(g,h){var l=[],m="",q;for(h=h.nodeType?[h]:h;q=n.match.PSEUDO.exec(g);){m+=q[0];g=g.replace(n.match.PSEUDO,"")}g=n.relative[g]?g+"*":g;q=0;for(var p=h.length;q<p;q++)k(g,h[q],l);return k.filter(m,l)};c.find=k;c.expr=k.selectors;c.expr[":"]=c.expr.filters;c.unique=k.uniqueSort;c.text=a;c.isXMLDoc=x;c.contains=E})();var eb=/Until$/,fb=/^(?:parents|prevUntil|prevAll)/,
gb=/,/;R=Array.prototype.slice;var Ia=function(a,b,d){if(c.isFunction(b))return c.grep(a,function(e,j){return!!b.call(e,j,e)===d});else if(b.nodeType)return c.grep(a,function(e){return e===b===d});else if(typeof b==="string"){var f=c.grep(a,function(e){return e.nodeType===1});if(Ua.test(b))return c.filter(b,f,!d);else b=c.filter(b,f)}return c.grep(a,function(e){return c.inArray(e,b)>=0===d})};c.fn.extend({find:function(a){for(var b=this.pushStack("","find",a),d=0,f=0,e=this.length;f<e;f++){d=b.length;
c.find(a,this[f],b);if(f>0)for(var j=d;j<b.length;j++)for(var i=0;i<d;i++)if(b[i]===b[j]){b.splice(j--,1);break}}return b},has:function(a){var b=c(a);return this.filter(function(){for(var d=0,f=b.length;d<f;d++)if(c.contains(this,b[d]))return true})},not:function(a){return this.pushStack(Ia(this,a,false),"not",a)},filter:function(a){return this.pushStack(Ia(this,a,true),"filter",a)},is:function(a){return!!a&&c.filter(a,this).length>0},closest:function(a,b){if(c.isArray(a)){var d=[],f=this[0],e,j=
{},i;if(f&&a.length){e=0;for(var o=a.length;e<o;e++){i=a[e];j[i]||(j[i]=c.expr.match.POS.test(i)?c(i,b||this.context):i)}for(;f&&f.ownerDocument&&f!==b;){for(i in j){e=j[i];if(e.jquery?e.index(f)>-1:c(f).is(e)){d.push({selector:i,elem:f});delete j[i]}}f=f.parentNode}}return d}var k=c.expr.match.POS.test(a)?c(a,b||this.context):null;return this.map(function(n,r){for(;r&&r.ownerDocument&&r!==b;){if(k?k.index(r)>-1:c(r).is(a))return r;r=r.parentNode}return null})},index:function(a){if(!a||typeof a===
"string")return c.inArray(this[0],a?c(a):this.parent().children());return c.inArray(a.jquery?a[0]:a,this)},add:function(a,b){a=typeof a==="string"?c(a,b||this.context):c.makeArray(a);b=c.merge(this.get(),a);return this.pushStack(qa(a[0])||qa(b[0])?b:c.unique(b))},andSelf:function(){return this.add(this.prevObject)}});c.each({parent:function(a){return(a=a.parentNode)&&a.nodeType!==11?a:null},parents:function(a){return c.dir(a,"parentNode")},parentsUntil:function(a,b,d){return c.dir(a,"parentNode",
d)},next:function(a){return c.nth(a,2,"nextSibling")},prev:function(a){return c.nth(a,2,"previousSibling")},nextAll:function(a){return c.dir(a,"nextSibling")},prevAll:function(a){return c.dir(a,"previousSibling")},nextUntil:function(a,b,d){return c.dir(a,"nextSibling",d)},prevUntil:function(a,b,d){return c.dir(a,"previousSibling",d)},siblings:function(a){return c.sibling(a.parentNode.firstChild,a)},children:function(a){return c.sibling(a.firstChild)},contents:function(a){return c.nodeName(a,"iframe")?
a.contentDocument||a.contentWindow.document:c.makeArray(a.childNodes)}},function(a,b){c.fn[a]=function(d,f){var e=c.map(this,b,d);eb.test(a)||(f=d);if(f&&typeof f==="string")e=c.filter(f,e);e=this.length>1?c.unique(e):e;if((this.length>1||gb.test(f))&&fb.test(a))e=e.reverse();return this.pushStack(e,a,R.call(arguments).join(","))}});c.extend({filter:function(a,b,d){if(d)a=":not("+a+")";return c.find.matches(a,b)},dir:function(a,b,d){var f=[];for(a=a[b];a&&a.nodeType!==9&&(d===w||a.nodeType!==1||!c(a).is(d));){a.nodeType===
1&&f.push(a);a=a[b]}return f},nth:function(a,b,d){b=b||1;for(var f=0;a;a=a[d])if(a.nodeType===1&&++f===b)break;return a},sibling:function(a,b){for(var d=[];a;a=a.nextSibling)a.nodeType===1&&a!==b&&d.push(a);return d}});var Ja=/ jQuery\d+="(?:\d+|null)"/g,V=/^\s+/,Ka=/(<([\w:]+)[^>]*?)\/>/g,hb=/^(?:area|br|col|embed|hr|img|input|link|meta|param)$/i,La=/<([\w:]+)/,ib=/<tbody/i,jb=/<|&#?\w+;/,ta=/<script|<object|<embed|<option|<style/i,ua=/checked\s*(?:[^=]|=\s*.checked.)/i,Ma=function(a,b,d){return hb.test(d)?
a:b+"></"+d+">"},F={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]};F.optgroup=F.option;F.tbody=F.tfoot=F.colgroup=F.caption=F.thead;F.th=F.td;if(!c.support.htmlSerialize)F._default=[1,"div<div>","</div>"];c.fn.extend({text:function(a){if(c.isFunction(a))return this.each(function(b){var d=
c(this);d.text(a.call(this,b,d.text()))});if(typeof a!=="object"&&a!==w)return this.empty().append((this[0]&&this[0].ownerDocument||s).createTextNode(a));return c.text(this)},wrapAll:function(a){if(c.isFunction(a))return this.each(function(d){c(this).wrapAll(a.call(this,d))});if(this[0]){var b=c(a,this[0].ownerDocument).eq(0).clone(true);this[0].parentNode&&b.insertBefore(this[0]);b.map(function(){for(var d=this;d.firstChild&&d.firstChild.nodeType===1;)d=d.firstChild;return d}).append(this)}return this},
wrapInner:function(a){if(c.isFunction(a))return this.each(function(b){c(this).wrapInner(a.call(this,b))});return this.each(function(){var b=c(this),d=b.contents();d.length?d.wrapAll(a):b.append(a)})},wrap:function(a){return this.each(function(){c(this).wrapAll(a)})},unwrap:function(){return this.parent().each(function(){c.nodeName(this,"body")||c(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,true,function(a){this.nodeType===1&&this.appendChild(a)})},
prepend:function(){return this.domManip(arguments,true,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,false,function(b){this.parentNode.insertBefore(b,this)});else if(arguments.length){var a=c(arguments[0]);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,false,function(b){this.parentNode.insertBefore(b,
this.nextSibling)});else if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,c(arguments[0]).toArray());return a}},remove:function(a,b){for(var d=0,f;(f=this[d])!=null;d++)if(!a||c.filter(a,[f]).length){if(!b&&f.nodeType===1){c.cleanData(f.getElementsByTagName("*"));c.cleanData([f])}f.parentNode&&f.parentNode.removeChild(f)}return this},empty:function(){for(var a=0,b;(b=this[a])!=null;a++)for(b.nodeType===1&&c.cleanData(b.getElementsByTagName("*"));b.firstChild;)b.removeChild(b.firstChild);
return this},clone:function(a){var b=this.map(function(){if(!c.support.noCloneEvent&&!c.isXMLDoc(this)){var d=this.outerHTML,f=this.ownerDocument;if(!d){d=f.createElement("div");d.appendChild(this.cloneNode(true));d=d.innerHTML}return c.clean([d.replace(Ja,"").replace(/=([^="'>\s]+\/)>/g,'="$1">').replace(V,"")],f)[0]}else return this.cloneNode(true)});if(a===true){ra(this,b);ra(this.find("*"),b.find("*"))}return b},html:function(a){if(a===w)return this[0]&&this[0].nodeType===1?this[0].innerHTML.replace(Ja,
""):null;else if(typeof a==="string"&&!ta.test(a)&&(c.support.leadingWhitespace||!V.test(a))&&!F[(La.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Ka,Ma);try{for(var b=0,d=this.length;b<d;b++)if(this[b].nodeType===1){c.cleanData(this[b].getElementsByTagName("*"));this[b].innerHTML=a}}catch(f){this.empty().append(a)}}else c.isFunction(a)?this.each(function(e){var j=c(this),i=j.html();j.empty().append(function(){return a.call(this,e,i)})}):this.empty().append(a);return this},replaceWith:function(a){if(this[0]&&
this[0].parentNode){if(c.isFunction(a))return this.each(function(b){var d=c(this),f=d.html();d.replaceWith(a.call(this,b,f))});if(typeof a!=="string")a=c(a).detach();return this.each(function(){var b=this.nextSibling,d=this.parentNode;c(this).remove();b?c(b).before(a):c(d).append(a)})}else return this.pushStack(c(c.isFunction(a)?a():a),"replaceWith",a)},detach:function(a){return this.remove(a,true)},domManip:function(a,b,d){function f(u){return c.nodeName(u,"table")?u.getElementsByTagName("tbody")[0]||
u.appendChild(u.ownerDocument.createElement("tbody")):u}var e,j,i=a[0],o=[],k;if(!c.support.checkClone&&arguments.length===3&&typeof i==="string"&&ua.test(i))return this.each(function(){c(this).domManip(a,b,d,true)});if(c.isFunction(i))return this.each(function(u){var z=c(this);a[0]=i.call(this,u,b?z.html():w);z.domManip(a,b,d)});if(this[0]){e=i&&i.parentNode;e=c.support.parentNode&&e&&e.nodeType===11&&e.childNodes.length===this.length?{fragment:e}:sa(a,this,o);k=e.fragment;if(j=k.childNodes.length===
1?(k=k.firstChild):k.firstChild){b=b&&c.nodeName(j,"tr");for(var n=0,r=this.length;n<r;n++)d.call(b?f(this[n],j):this[n],n>0||e.cacheable||this.length>1?k.cloneNode(true):k)}o.length&&c.each(o,Qa)}return this}});c.fragments={};c.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){c.fn[a]=function(d){var f=[];d=c(d);var e=this.length===1&&this[0].parentNode;if(e&&e.nodeType===11&&e.childNodes.length===1&&d.length===1){d[b](this[0]);
return this}else{e=0;for(var j=d.length;e<j;e++){var i=(e>0?this.clone(true):this).get();c.fn[b].apply(c(d[e]),i);f=f.concat(i)}return this.pushStack(f,a,d.selector)}}});c.extend({clean:function(a,b,d,f){b=b||s;if(typeof b.createElement==="undefined")b=b.ownerDocument||b[0]&&b[0].ownerDocument||s;for(var e=[],j=0,i;(i=a[j])!=null;j++){if(typeof i==="number")i+="";if(i){if(typeof i==="string"&&!jb.test(i))i=b.createTextNode(i);else if(typeof i==="string"){i=i.replace(Ka,Ma);var o=(La.exec(i)||["",
""])[1].toLowerCase(),k=F[o]||F._default,n=k[0],r=b.createElement("div");for(r.innerHTML=k[1]+i+k[2];n--;)r=r.lastChild;if(!c.support.tbody){n=ib.test(i);o=o==="table"&&!n?r.firstChild&&r.firstChild.childNodes:k[1]==="<table>"&&!n?r.childNodes:[];for(k=o.length-1;k>=0;--k)c.nodeName(o[k],"tbody")&&!o[k].childNodes.length&&o[k].parentNode.removeChild(o[k])}!c.support.leadingWhitespace&&V.test(i)&&r.insertBefore(b.createTextNode(V.exec(i)[0]),r.firstChild);i=r.childNodes}if(i.nodeType)e.push(i);else e=
c.merge(e,i)}}if(d)for(j=0;e[j];j++)if(f&&c.nodeName(e[j],"script")&&(!e[j].type||e[j].type.toLowerCase()==="text/javascript"))f.push(e[j].parentNode?e[j].parentNode.removeChild(e[j]):e[j]);else{e[j].nodeType===1&&e.splice.apply(e,[j+1,0].concat(c.makeArray(e[j].getElementsByTagName("script"))));d.appendChild(e[j])}return e},cleanData:function(a){for(var b,d,f=c.cache,e=c.event.special,j=c.support.deleteExpando,i=0,o;(o=a[i])!=null;i++)if(d=o[c.expando]){b=f[d];if(b.events)for(var k in b.events)e[k]?
c.event.remove(o,k):Ca(o,k,b.handle);if(j)delete o[c.expando];else o.removeAttribute&&o.removeAttribute(c.expando);delete f[d]}}});var kb=/z-?index|font-?weight|opacity|zoom|line-?height/i,Na=/alpha\([^)]*\)/,Oa=/opacity=([^)]*)/,ha=/float/i,ia=/-([a-z])/ig,lb=/([A-Z])/g,mb=/^-?\d+(?:px)?$/i,nb=/^-?\d/,ob={position:"absolute",visibility:"hidden",display:"block"},pb=["Left","Right"],qb=["Top","Bottom"],rb=s.defaultView&&s.defaultView.getComputedStyle,Pa=c.support.cssFloat?"cssFloat":"styleFloat",ja=
function(a,b){return b.toUpperCase()};c.fn.css=function(a,b){return X(this,a,b,true,function(d,f,e){if(e===w)return c.curCSS(d,f);if(typeof e==="number"&&!kb.test(f))e+="px";c.style(d,f,e)})};c.extend({style:function(a,b,d){if(!a||a.nodeType===3||a.nodeType===8)return w;if((b==="width"||b==="height")&&parseFloat(d)<0)d=w;var f=a.style||a,e=d!==w;if(!c.support.opacity&&b==="opacity"){if(e){f.zoom=1;b=parseInt(d,10)+""==="NaN"?"":"alpha(opacity="+d*100+")";a=f.filter||c.curCSS(a,"filter")||"";f.filter=
Na.test(a)?a.replace(Na,b):b}return f.filter&&f.filter.indexOf("opacity=")>=0?parseFloat(Oa.exec(f.filter)[1])/100+"":""}if(ha.test(b))b=Pa;b=b.replace(ia,ja);if(e)f[b]=d;return f[b]},css:function(a,b,d,f){if(b==="width"||b==="height"){var e,j=b==="width"?pb:qb;function i(){e=b==="width"?a.offsetWidth:a.offsetHeight;f!=="border"&&c.each(j,function(){f||(e-=parseFloat(c.curCSS(a,"padding"+this,true))||0);if(f==="margin")e+=parseFloat(c.curCSS(a,"margin"+this,true))||0;else e-=parseFloat(c.curCSS(a,
"border"+this+"Width",true))||0})}a.offsetWidth!==0?i():c.swap(a,ob,i);return Math.max(0,Math.round(e))}return c.curCSS(a,b,d)},curCSS:function(a,b,d){var f,e=a.style;if(!c.support.opacity&&b==="opacity"&&a.currentStyle){f=Oa.test(a.currentStyle.filter||"")?parseFloat(RegExp.$1)/100+"":"";return f===""?"1":f}if(ha.test(b))b=Pa;if(!d&&e&&e[b])f=e[b];else if(rb){if(ha.test(b))b="float";b=b.replace(lb,"-$1").toLowerCase();e=a.ownerDocument.defaultView;if(!e)return null;if(a=e.getComputedStyle(a,null))f=
a.getPropertyValue(b);if(b==="opacity"&&f==="")f="1"}else if(a.currentStyle){d=b.replace(ia,ja);f=a.currentStyle[b]||a.currentStyle[d];if(!mb.test(f)&&nb.test(f)){b=e.left;var j=a.runtimeStyle.left;a.runtimeStyle.left=a.currentStyle.left;e.left=d==="fontSize"?"1em":f||0;f=e.pixelLeft+"px";e.left=b;a.runtimeStyle.left=j}}return f},swap:function(a,b,d){var f={};for(var e in b){f[e]=a.style[e];a.style[e]=b[e]}d.call(a);for(e in b)a.style[e]=f[e]}});if(c.expr&&c.expr.filters){c.expr.filters.hidden=function(a){var b=
a.offsetWidth,d=a.offsetHeight,f=a.nodeName.toLowerCase()==="tr";return b===0&&d===0&&!f?true:b>0&&d>0&&!f?false:c.curCSS(a,"display")==="none"};c.expr.filters.visible=function(a){return!c.expr.filters.hidden(a)}}var sb=J(),tb=/<script(.|\s)*?\/script>/gi,ub=/select|textarea/i,vb=/color|date|datetime|email|hidden|month|number|password|range|search|tel|text|time|url|week/i,N=/=\?(&|$)/,ka=/\?/,wb=/(\?|&)_=.*?(&|$)/,xb=/^(\w+:)?\/\/([^\/?#]+)/,yb=/%20/g,zb=c.fn.load;c.fn.extend({load:function(a,b,d){if(typeof a!==
"string")return zb.call(this,a);else if(!this.length)return this;var f=a.indexOf(" ");if(f>=0){var e=a.slice(f,a.length);a=a.slice(0,f)}f="GET";if(b)if(c.isFunction(b)){d=b;b=null}else if(typeof b==="object"){b=c.param(b,c.ajaxSettings.traditional);f="POST"}var j=this;c.ajax({url:a,type:f,dataType:"html",data:b,complete:function(i,o){if(o==="success"||o==="notmodified")j.html(e?c("<div />").append(i.responseText.replace(tb,"")).find(e):i.responseText);d&&j.each(d,[i.responseText,o,i])}});return this},
serialize:function(){return c.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?c.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||ub.test(this.nodeName)||vb.test(this.type))}).map(function(a,b){a=c(this).val();return a==null?null:c.isArray(a)?c.map(a,function(d){return{name:b.name,value:d}}):{name:b.name,value:a}}).get()}});c.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),
function(a,b){c.fn[b]=function(d){return this.bind(b,d)}});c.extend({get:function(a,b,d,f){if(c.isFunction(b)){f=f||d;d=b;b=null}return c.ajax({type:"GET",url:a,data:b,success:d,dataType:f})},getScript:function(a,b){return c.get(a,null,b,"script")},getJSON:function(a,b,d){return c.get(a,b,d,"json")},post:function(a,b,d,f){if(c.isFunction(b)){f=f||d;d=b;b={}}return c.ajax({type:"POST",url:a,data:b,success:d,dataType:f})},ajaxSetup:function(a){c.extend(c.ajaxSettings,a)},ajaxSettings:{url:location.href,
global:true,type:"GET",contentType:"application/x-www-form-urlencoded",processData:true,async:true,xhr:A.XMLHttpRequest&&(A.location.protocol!=="file:"||!A.ActiveXObject)?function(){return new A.XMLHttpRequest}:function(){try{return new A.ActiveXObject("Microsoft.XMLHTTP")}catch(a){}},accepts:{xml:"application/xml, text/xml",html:"text/html",script:"text/javascript, application/javascript",json:"application/json, text/javascript",text:"text/plain",_default:"*/*"}},lastModified:{},etag:{},ajax:function(a){function b(){e.success&&
e.success.call(k,o,i,x);e.global&&f("ajaxSuccess",[x,e])}function d(){e.complete&&e.complete.call(k,x,i);e.global&&f("ajaxComplete",[x,e]);e.global&&!--c.active&&c.event.trigger("ajaxStop")}function f(q,p){(e.context?c(e.context):c.event).trigger(q,p)}var e=c.extend(true,{},c.ajaxSettings,a),j,i,o,k=a&&a.context||e,n=e.type.toUpperCase();if(e.data&&e.processData&&typeof e.data!=="string")e.data=c.param(e.data,e.traditional);if(e.dataType==="jsonp"){if(n==="GET")N.test(e.url)||(e.url+=(ka.test(e.url)?
"&":"?")+(e.jsonp||"callback")+"=?");else if(!e.data||!N.test(e.data))e.data=(e.data?e.data+"&":"")+(e.jsonp||"callback")+"=?";e.dataType="json"}if(e.dataType==="json"&&(e.data&&N.test(e.data)||N.test(e.url))){j=e.jsonpCallback||"jsonp"+sb++;if(e.data)e.data=(e.data+"").replace(N,"="+j+"$1");e.url=e.url.replace(N,"="+j+"$1");e.dataType="script";A[j]=A[j]||function(q){o=q;b();d();A[j]=w;try{delete A[j]}catch(p){}z&&z.removeChild(C)}}if(e.dataType==="script"&&e.cache===null)e.cache=false;if(e.cache===
false&&n==="GET"){var r=J(),u=e.url.replace(wb,"$1_="+r+"$2");e.url=u+(u===e.url?(ka.test(e.url)?"&":"?")+"_="+r:"")}if(e.data&&n==="GET")e.url+=(ka.test(e.url)?"&":"?")+e.data;e.global&&!c.active++&&c.event.trigger("ajaxStart");r=(r=xb.exec(e.url))&&(r[1]&&r[1]!==location.protocol||r[2]!==location.host);if(e.dataType==="script"&&n==="GET"&&r){var z=s.getElementsByTagName("head")[0]||s.documentElement,C=s.createElement("script");C.src=e.url;if(e.scriptCharset)C.charset=e.scriptCharset;if(!j){var B=
false;C.onload=C.onreadystatechange=function(){if(!B&&(!this.readyState||this.readyState==="loaded"||this.readyState==="complete")){B=true;b();d();C.onload=C.onreadystatechange=null;z&&C.parentNode&&z.removeChild(C)}}}z.insertBefore(C,z.firstChild);return w}var E=false,x=e.xhr();if(x){e.username?x.open(n,e.url,e.async,e.username,e.password):x.open(n,e.url,e.async);try{if(e.data||a&&a.contentType)x.setRequestHeader("Content-Type",e.contentType);if(e.ifModified){c.lastModified[e.url]&&x.setRequestHeader("If-Modified-Since",
c.lastModified[e.url]);c.etag[e.url]&&x.setRequestHeader("If-None-Match",c.etag[e.url])}r||x.setRequestHeader("X-Requested-With","XMLHttpRequest");x.setRequestHeader("Accept",e.dataType&&e.accepts[e.dataType]?e.accepts[e.dataType]+", */*":e.accepts._default)}catch(ga){}if(e.beforeSend&&e.beforeSend.call(k,x,e)===false){e.global&&!--c.active&&c.event.trigger("ajaxStop");x.abort();return false}e.global&&f("ajaxSend",[x,e]);var g=x.onreadystatechange=function(q){if(!x||x.readyState===0||q==="abort"){E||
d();E=true;if(x)x.onreadystatechange=c.noop}else if(!E&&x&&(x.readyState===4||q==="timeout")){E=true;x.onreadystatechange=c.noop;i=q==="timeout"?"timeout":!c.httpSuccess(x)?"error":e.ifModified&&c.httpNotModified(x,e.url)?"notmodified":"success";var p;if(i==="success")try{o=c.httpData(x,e.dataType,e)}catch(v){i="parsererror";p=v}if(i==="success"||i==="notmodified")j||b();else c.handleError(e,x,i,p);d();q==="timeout"&&x.abort();if(e.async)x=null}};try{var h=x.abort;x.abort=function(){x&&h.call(x);
g("abort")}}catch(l){}e.async&&e.timeout>0&&setTimeout(function(){x&&!E&&g("timeout")},e.timeout);try{x.send(n==="POST"||n==="PUT"||n==="DELETE"?e.data:null)}catch(m){c.handleError(e,x,null,m);d()}e.async||g();return x}},handleError:function(a,b,d,f){if(a.error)a.error.call(a.context||a,b,d,f);if(a.global)(a.context?c(a.context):c.event).trigger("ajaxError",[b,a,f])},active:0,httpSuccess:function(a){try{return!a.status&&location.protocol==="file:"||a.status>=200&&a.status<300||a.status===304||a.status===
1223||a.status===0}catch(b){}return false},httpNotModified:function(a,b){var d=a.getResponseHeader("Last-Modified"),f=a.getResponseHeader("Etag");if(d)c.lastModified[b]=d;if(f)c.etag[b]=f;return a.status===304||a.status===0},httpData:function(a,b,d){var f=a.getResponseHeader("content-type")||"",e=b==="xml"||!b&&f.indexOf("xml")>=0;a=e?a.responseXML:a.responseText;e&&a.documentElement.nodeName==="parsererror"&&c.error("parsererror");if(d&&d.dataFilter)a=d.dataFilter(a,b);if(typeof a==="string")if(b===
"json"||!b&&f.indexOf("json")>=0)a=c.parseJSON(a);else if(b==="script"||!b&&f.indexOf("javascript")>=0)c.globalEval(a);return a},param:function(a,b){function d(i,o){if(c.isArray(o))c.each(o,function(k,n){b||/\[\]$/.test(i)?f(i,n):d(i+"["+(typeof n==="object"||c.isArray(n)?k:"")+"]",n)});else!b&&o!=null&&typeof o==="object"?c.each(o,function(k,n){d(i+"["+k+"]",n)}):f(i,o)}function f(i,o){o=c.isFunction(o)?o():o;e[e.length]=encodeURIComponent(i)+"="+encodeURIComponent(o)}var e=[];if(b===w)b=c.ajaxSettings.traditional;
if(c.isArray(a)||a.jquery)c.each(a,function(){f(this.name,this.value)});else for(var j in a)d(j,a[j]);return e.join("&").replace(yb,"+")}});var la={},Ab=/toggle|show|hide/,Bb=/^([+-]=)?([\d+-.]+)(.*)$/,W,va=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]];c.fn.extend({show:function(a,b){if(a||a===0)return this.animate(K("show",3),a,b);else{a=0;for(b=this.length;a<b;a++){var d=c.data(this[a],"olddisplay");
this[a].style.display=d||"";if(c.css(this[a],"display")==="none"){d=this[a].nodeName;var f;if(la[d])f=la[d];else{var e=c("<"+d+" />").appendTo("body");f=e.css("display");if(f==="none")f="block";e.remove();la[d]=f}c.data(this[a],"olddisplay",f)}}a=0;for(b=this.length;a<b;a++)this[a].style.display=c.data(this[a],"olddisplay")||"";return this}},hide:function(a,b){if(a||a===0)return this.animate(K("hide",3),a,b);else{a=0;for(b=this.length;a<b;a++){var d=c.data(this[a],"olddisplay");!d&&d!=="none"&&c.data(this[a],
"olddisplay",c.css(this[a],"display"))}a=0;for(b=this.length;a<b;a++)this[a].style.display="none";return this}},_toggle:c.fn.toggle,toggle:function(a,b){var d=typeof a==="boolean";if(c.isFunction(a)&&c.isFunction(b))this._toggle.apply(this,arguments);else a==null||d?this.each(function(){var f=d?a:c(this).is(":hidden");c(this)[f?"show":"hide"]()}):this.animate(K("toggle",3),a,b);return this},fadeTo:function(a,b,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,d)},
animate:function(a,b,d,f){var e=c.speed(b,d,f);if(c.isEmptyObject(a))return this.each(e.complete);return this[e.queue===false?"each":"queue"](function(){var j=c.extend({},e),i,o=this.nodeType===1&&c(this).is(":hidden"),k=this;for(i in a){var n=i.replace(ia,ja);if(i!==n){a[n]=a[i];delete a[i];i=n}if(a[i]==="hide"&&o||a[i]==="show"&&!o)return j.complete.call(this);if((i==="height"||i==="width")&&this.style){j.display=c.css(this,"display");j.overflow=this.style.overflow}if(c.isArray(a[i])){(j.specialEasing=
j.specialEasing||{})[i]=a[i][1];a[i]=a[i][0]}}if(j.overflow!=null)this.style.overflow="hidden";j.curAnim=c.extend({},a);c.each(a,function(r,u){var z=new c.fx(k,j,r);if(Ab.test(u))z[u==="toggle"?o?"show":"hide":u](a);else{var C=Bb.exec(u),B=z.cur(true)||0;if(C){u=parseFloat(C[2]);var E=C[3]||"px";if(E!=="px"){k.style[r]=(u||1)+E;B=(u||1)/z.cur(true)*B;k.style[r]=B+E}if(C[1])u=(C[1]==="-="?-1:1)*u+B;z.custom(B,u,E)}else z.custom(B,u,"")}});return true})},stop:function(a,b){var d=c.timers;a&&this.queue([]);
this.each(function(){for(var f=d.length-1;f>=0;f--)if(d[f].elem===this){b&&d[f](true);d.splice(f,1)}});b||this.dequeue();return this}});c.each({slideDown:K("show",1),slideUp:K("hide",1),slideToggle:K("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"}},function(a,b){c.fn[a]=function(d,f){return this.animate(b,d,f)}});c.extend({speed:function(a,b,d){var f=a&&typeof a==="object"?a:{complete:d||!d&&b||c.isFunction(a)&&a,duration:a,easing:d&&b||b&&!c.isFunction(b)&&b};f.duration=c.fx.off?0:typeof f.duration===
"number"?f.duration:c.fx.speeds[f.duration]||c.fx.speeds._default;f.old=f.complete;f.complete=function(){f.queue!==false&&c(this).dequeue();c.isFunction(f.old)&&f.old.call(this)};return f},easing:{linear:function(a,b,d,f){return d+f*a},swing:function(a,b,d,f){return(-Math.cos(a*Math.PI)/2+0.5)*f+d}},timers:[],fx:function(a,b,d){this.options=b;this.elem=a;this.prop=d;if(!b.orig)b.orig={}}});c.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this);(c.fx.step[this.prop]||
c.fx.step._default)(this);if((this.prop==="height"||this.prop==="width")&&this.elem.style)this.elem.style.display="block"},cur:function(a){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null))return this.elem[this.prop];return(a=parseFloat(c.css(this.elem,this.prop,a)))&&a>-10000?a:parseFloat(c.curCSS(this.elem,this.prop))||0},custom:function(a,b,d){function f(j){return e.step(j)}this.startTime=J();this.start=a;this.end=b;this.unit=d||this.unit||"px";this.now=this.start;
this.pos=this.state=0;var e=this;f.elem=this.elem;if(f()&&c.timers.push(f)&&!W)W=setInterval(c.fx.tick,13)},show:function(){this.options.orig[this.prop]=c.style(this.elem,this.prop);this.options.show=true;this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur());c(this.elem).show()},hide:function(){this.options.orig[this.prop]=c.style(this.elem,this.prop);this.options.hide=true;this.custom(this.cur(),0)},step:function(a){var b=J(),d=true;if(a||b>=this.options.duration+this.startTime){this.now=
this.end;this.pos=this.state=1;this.update();this.options.curAnim[this.prop]=true;for(var f in this.options.curAnim)if(this.options.curAnim[f]!==true)d=false;if(d){if(this.options.display!=null){this.elem.style.overflow=this.options.overflow;a=c.data(this.elem,"olddisplay");this.elem.style.display=a?a:this.options.display;if(c.css(this.elem,"display")==="none")this.elem.style.display="block"}this.options.hide&&c(this.elem).hide();if(this.options.hide||this.options.show)for(var e in this.options.curAnim)c.style(this.elem,
e,this.options.orig[e]);this.options.complete.call(this.elem)}return false}else{e=b-this.startTime;this.state=e/this.options.duration;a=this.options.easing||(c.easing.swing?"swing":"linear");this.pos=c.easing[this.options.specialEasing&&this.options.specialEasing[this.prop]||a](this.state,e,0,1,this.options.duration);this.now=this.start+(this.end-this.start)*this.pos;this.update()}return true}};c.extend(c.fx,{tick:function(){for(var a=c.timers,b=0;b<a.length;b++)a[b]()||a.splice(b--,1);a.length||
c.fx.stop()},stop:function(){clearInterval(W);W=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){c.style(a.elem,"opacity",a.now)},_default:function(a){if(a.elem.style&&a.elem.style[a.prop]!=null)a.elem.style[a.prop]=(a.prop==="width"||a.prop==="height"?Math.max(0,a.now):a.now)+a.unit;else a.elem[a.prop]=a.now}}});if(c.expr&&c.expr.filters)c.expr.filters.animated=function(a){return c.grep(c.timers,function(b){return a===b.elem}).length};c.fn.offset="getBoundingClientRect"in s.documentElement?
function(a){var b=this[0];if(a)return this.each(function(e){c.offset.setOffset(this,a,e)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return c.offset.bodyOffset(b);var d=b.getBoundingClientRect(),f=b.ownerDocument;b=f.body;f=f.documentElement;return{top:d.top+(self.pageYOffset||c.support.boxModel&&f.scrollTop||b.scrollTop)-(f.clientTop||b.clientTop||0),left:d.left+(self.pageXOffset||c.support.boxModel&&f.scrollLeft||b.scrollLeft)-(f.clientLeft||b.clientLeft||0)}}:function(a){var b=
this[0];if(a)return this.each(function(r){c.offset.setOffset(this,a,r)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return c.offset.bodyOffset(b);c.offset.initialize();var d=b.offsetParent,f=b,e=b.ownerDocument,j,i=e.documentElement,o=e.body;f=(e=e.defaultView)?e.getComputedStyle(b,null):b.currentStyle;for(var k=b.offsetTop,n=b.offsetLeft;(b=b.parentNode)&&b!==o&&b!==i;){if(c.offset.supportsFixedPosition&&f.position==="fixed")break;j=e?e.getComputedStyle(b,null):b.currentStyle;
k-=b.scrollTop;n-=b.scrollLeft;if(b===d){k+=b.offsetTop;n+=b.offsetLeft;if(c.offset.doesNotAddBorder&&!(c.offset.doesAddBorderForTableAndCells&&/^t(able|d|h)$/i.test(b.nodeName))){k+=parseFloat(j.borderTopWidth)||0;n+=parseFloat(j.borderLeftWidth)||0}f=d;d=b.offsetParent}if(c.offset.subtractsBorderForOverflowNotVisible&&j.overflow!=="visible"){k+=parseFloat(j.borderTopWidth)||0;n+=parseFloat(j.borderLeftWidth)||0}f=j}if(f.position==="relative"||f.position==="static"){k+=o.offsetTop;n+=o.offsetLeft}if(c.offset.supportsFixedPosition&&
f.position==="fixed"){k+=Math.max(i.scrollTop,o.scrollTop);n+=Math.max(i.scrollLeft,o.scrollLeft)}return{top:k,left:n}};c.offset={initialize:function(){var a=s.body,b=s.createElement("div"),d,f,e,j=parseFloat(c.curCSS(a,"marginTop",true))||0;c.extend(b.style,{position:"absolute",top:0,left:0,margin:0,border:0,width:"1px",height:"1px",visibility:"hidden"});b.innerHTML="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";
a.insertBefore(b,a.firstChild);d=b.firstChild;f=d.firstChild;e=d.nextSibling.firstChild.firstChild;this.doesNotAddBorder=f.offsetTop!==5;this.doesAddBorderForTableAndCells=e.offsetTop===5;f.style.position="fixed";f.style.top="20px";this.supportsFixedPosition=f.offsetTop===20||f.offsetTop===15;f.style.position=f.style.top="";d.style.overflow="hidden";d.style.position="relative";this.subtractsBorderForOverflowNotVisible=f.offsetTop===-5;this.doesNotIncludeMarginInBodyOffset=a.offsetTop!==j;a.removeChild(b);
c.offset.initialize=c.noop},bodyOffset:function(a){var b=a.offsetTop,d=a.offsetLeft;c.offset.initialize();if(c.offset.doesNotIncludeMarginInBodyOffset){b+=parseFloat(c.curCSS(a,"marginTop",true))||0;d+=parseFloat(c.curCSS(a,"marginLeft",true))||0}return{top:b,left:d}},setOffset:function(a,b,d){if(/static/.test(c.curCSS(a,"position")))a.style.position="relative";var f=c(a),e=f.offset(),j=parseInt(c.curCSS(a,"top",true),10)||0,i=parseInt(c.curCSS(a,"left",true),10)||0;if(c.isFunction(b))b=b.call(a,
d,e);d={top:b.top-e.top+j,left:b.left-e.left+i};"using"in b?b.using.call(a,d):f.css(d)}};c.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),d=this.offset(),f=/^body|html$/i.test(b[0].nodeName)?{top:0,left:0}:b.offset();d.top-=parseFloat(c.curCSS(a,"marginTop",true))||0;d.left-=parseFloat(c.curCSS(a,"marginLeft",true))||0;f.top+=parseFloat(c.curCSS(b[0],"borderTopWidth",true))||0;f.left+=parseFloat(c.curCSS(b[0],"borderLeftWidth",true))||0;return{top:d.top-
f.top,left:d.left-f.left}},offsetParent:function(){return this.map(function(){for(var a=this.offsetParent||s.body;a&&!/^body|html$/i.test(a.nodeName)&&c.css(a,"position")==="static";)a=a.offsetParent;return a})}});c.each(["Left","Top"],function(a,b){var d="scroll"+b;c.fn[d]=function(f){var e=this[0],j;if(!e)return null;if(f!==w)return this.each(function(){if(j=wa(this))j.scrollTo(!a?f:c(j).scrollLeft(),a?f:c(j).scrollTop());else this[d]=f});else return(j=wa(e))?"pageXOffset"in j?j[a?"pageYOffset":
"pageXOffset"]:c.support.boxModel&&j.document.documentElement[d]||j.document.body[d]:e[d]}});c.each(["Height","Width"],function(a,b){var d=b.toLowerCase();c.fn["inner"+b]=function(){return this[0]?c.css(this[0],d,false,"padding"):null};c.fn["outer"+b]=function(f){return this[0]?c.css(this[0],d,false,f?"margin":"border"):null};c.fn[d]=function(f){var e=this[0];if(!e)return f==null?null:this;if(c.isFunction(f))return this.each(function(j){var i=c(this);i[d](f.call(this,j,i[d]()))});return"scrollTo"in
e&&e.document?e.document.compatMode==="CSS1Compat"&&e.document.documentElement["client"+b]||e.document.body["client"+b]:e.nodeType===9?Math.max(e.documentElement["client"+b],e.body["scroll"+b],e.documentElement["scroll"+b],e.body["offset"+b],e.documentElement["offset"+b]):f===w?c.css(e,d):this.css(d,typeof f==="string"?f:f+"px")}});A.jQuery=A.$=c})(window);
;
;(function($){var iesix=$.browser.msie&&parseInt($.browser.version)===6&&typeof window['XMLHttpRequest']!=='object',msieFix=null,w=[];$.lbox=function(data,options){return $.lbox.impl.init(data,options);};$.lbox.close=function(){$.lbox.impl.close();};$.lbox.focus=function(pos){$.lbox.impl.focus(pos);};$.lbox.setBoxSize=function(){$.lbox.impl.setBoxSize();};$.lbox.setLocation=function(){$.lbox.impl.setLocation();};$.lbox.update=function(height,width){$.lbox.impl.update(height,width);};$.fn.lbox=function(options){return $.lbox.impl.init(this,options);};$.lbox.defaults={appendTo:'body',focus:true,opacity:50,overlayId:'box-overlay',overlayCss:{},containerId:'box-object',containerCss:{},dataId:'box-data',dataCss:{},minHeight:null,minWidth:null,maxHeight:null,maxWidth:null,autoResize:false,autoPosition:true,zIndex:1000,close:true,closeHTML:'<a class="closeImg" title="Close"></a>',closeClass:'box-close',escClose:true,overlayClose:false,position:null,persist:false,lbox:true,onOpen:null,onShow:null,onClose:null};$.lbox.impl={e:{},init:function(data,options){var x=this;if(x.e.data){return false;}
msieFix=$.browser.msie&&!$.boxModel;x.o=$.extend({},$.lbox.defaults,options);x.zIndex=x.o.zIndex;x.occb=false;if(typeof data==='object'){data=data instanceof jQuery?data:$(data);x.e.pholder=false;if(data.parent().parent().size()>0){data.before($('<span></span>').attr('id','box-pholder').css({display:'none'}));x.e.pholder=true;x.display=data.css('display');if(!x.o.persist){x.e.orig=data.clone(true);}}}
else if(typeof data==='string'||typeof data==='number'){data=$('<div></div>').html(data);}
else{alert('box error: unsupported data type: '+typeof data);return x;}
x.create(data);data=null;x.open();if($.isFunction(x.o.onShow)){x.o.onShow.apply(x,[x.e]);}
return x;},create:function(data){var x=this;w=x.getDimensions();if(x.o.lbox&&iesix){x.e.iframe=$('<iframe src="javascript:false;"></iframe>').css($.extend(x.o.iframeCss,{display:'none',opacity:0,position:'fixed',height:w[0],width:w[1],zIndex:x.o.zIndex,top:0,left:0})).appendTo(x.o.appendTo);}
x.e.overlay=$('<div></div>').attr('id',x.o.overlayId).addClass('box-overlay').css($.extend(x.o.overlayCss,{display:'none',opacity:x.o.opacity/100,height:x.o.lbox?w[0]:0,width:x.o.lbox?w[1]:0,position:'fixed',left:0,top:0,zIndex:x.o.zIndex+1})).appendTo(x.o.appendTo);x.e.object=$('<div></div>').attr('id',x.o.containerId).addClass('box-object').css($.extend(x.o.containerCss,{display:'none',position:'fixed',zIndex:x.o.zIndex+2})).append(x.o.close&&x.o.closeHTML?$(x.o.closeHTML).addClass(x.o.closeClass):'').appendTo(x.o.appendTo);x.e.wrap=$('<div></div>').attr('tabIndex',-1).addClass('box-wrap').css({height:'100%',outline:0,width:'100%'}).appendTo(x.e.object);x.e.data=data.attr('id',data.attr('id')||x.o.dataId).addClass('box-data').css($.extend(x.o.dataCss,{display:'none'})).appendTo('body');data=null;x.setBoxSize();x.e.data.appendTo(x.e.wrap);if(iesix||msieFix){x.fixIE();}},bindEvents:function(){var x=this;$('.'+x.o.closeClass).bind('click.box',function(e){e.preventDefault();x.close();});if(x.o.lbox&&x.o.close&&x.o.overlayClose){x.e.overlay.bind('click.box',function(e){e.preventDefault();x.close();});}
$(document).bind('keydown.box',function(e){if(x.o.lbox&&e.keyCode===9){x.watchTab(e);}
else if((x.o.close&&x.o.escClose)&&e.keyCode===27){e.preventDefault();x.close();}});$(window).bind('resize.box',function(){w=x.getDimensions();x.o.autoResize?x.setBoxSize():x.o.autoPosition&&x.setLocation();if(iesix||msieFix){x.fixIE();}
else if(x.o.lbox){x.e.iframe&&x.e.iframe.css({height:w[0],width:w[1]});x.e.overlay.css({height:w[0],width:w[1]});}});},unbindEvents:function(){$('.'+this.o.closeClass).unbind('click.box');$(document).unbind('keydown.box');$(window).unbind('resize.box');this.e.overlay.unbind('click.box');},fixIE:function(){var x=this,p=x.o.position;$.each([x.e.iframe||null,!x.o.lbox?null:x.e.overlay,x.e.object],function(i,el){if(el){var dbch='document.body.clientHeight',dbcw='document.body.clientWidth',dbsh='document.body.scrollHeight',dbsl='document.body.scrollLeft',dbst='document.body.scrollTop',dbsw='document.body.scrollWidth',ddech='document.documentElement.clientHeight',ddecw='document.documentElement.clientWidth',ddesl='document.documentElement.scrollLeft',ddest='document.documentElement.scrollTop',x=el[0].style;x.position='absolute';if(i<2){x.removeExpression('height');x.removeExpression('width');x.setExpression('height',''+dbsh+' > '+dbch+' ? '+dbsh+' : '+dbch+' + "px"');x.setExpression('width',''+dbsw+' > '+dbcw+' ? '+dbsw+' : '+dbcw+' + "px"');}
else{var gd,od;if(p&&p.constructor===Array){var top=p[0]?typeof p[0]==='number'?p[0].toString():p[0].replace(/px/,''):el.css('top').replace(/px/,'');gd=top.indexOf('%')===-1?top+' + (t = '+ddest+' ? '+ddest+' : '+dbst+') + "px"':parseInt(top.replace(/%/,''))+' * (('+ddech+' || '+dbch+') / 100) + (t = '+ddest+' ? '+ddest+' : '+dbst+') + "px"';if(p[1]){var left=typeof p[1]==='number'?p[1].toString():p[1].replace(/px/,'');od=left.indexOf('%')===-1?left+' + (t = '+ddesl+' ? '+ddesl+' : '+dbsl+') + "px"':parseInt(left.replace(/%/,''))+' * (('+ddecw+' || '+dbcw+') / 100) + (t = '+ddesl+' ? '+ddesl+' : '+dbsl+') + "px"';}}
else{gd='('+ddech+' || '+dbch+') / 2 - (this.offsetHeight / 2) + (t = '+ddest+' ? '+ddest+' : '+dbst+') + "px"';od='('+ddecw+' || '+dbcw+') / 2 - (this.offsetWidth / 2) + (t = '+ddesl+' ? '+ddesl+' : '+dbsl+') + "px"';}
x.removeExpression('top');x.removeExpression('left');x.setExpression('top',gd);x.setExpression('left',od);}}});},focus:function(pos){var x=this,p=pos&&$.inArray(pos,['first','last'])!==-1?pos:'first';var input=$(':input:enabled:visible:'+p,x.e.wrap);setTimeout(function(){input.length>0?input.focus():x.e.wrap.focus();},10);},getDimensions:function(){var el=$(window);var h=$.browser.opera&&$.browser.version>'9.5'&&$.fn.jquery<'1.3'||$.browser.opera&&$.browser.version<'9.5'&&$.fn.jquery>'1.2.6'?el[0].innerHeight:el.height();return[h,el.width()];},getVal:function(v,e){return v?(typeof v==='number'?v:v==='auto'?0:v.indexOf('%')>0?((parseInt(v.replace(/%/,''))/100)*(e==='h'?w[0]:w[1])):parseInt(v.replace(/px/,''))):null;},update:function(height,width){var x=this;if(!x.e.data){return false;}
x.e.origHeight=x.getVal(height,'h');x.e.origWidth=x.getVal(width,'w');x.e.data.hide();height&&x.e.object.css('height',height);width&&x.e.object.css('width',width);x.setBoxSize();x.e.data.show();x.o.focus&&x.focus();x.unbindEvents();x.bindEvents();},setBoxSize:function(){var x=this;var ddech=x.e.origHeight?x.e.origHeight:$.browser.opera?x.e.object.height():x.getVal(x.e.object.css('height'),'h'),ddecw=x.e.origWidth?x.e.origWidth:$.browser.opera?x.e.object.width():x.getVal(x.e.object.css('width'),'w'),dddh=x.e.data.outerHeight(true),dw=x.e.data.outerWidth(true);x.e.origHeight=x.e.origHeight||ddech;x.e.origWidth=x.e.origWidth||ddecw;var mxoh=x.o.maxHeight?x.getVal(x.o.maxHeight,'h'):null,mxow=x.o.maxWidth?x.getVal(x.o.maxWidth,'w'):null,mh=mxoh&&mxoh<w[0]?mxoh:w[0],mw=mxow&&mxow<w[1]?mxow:w[1];var moh=x.o.minHeight?x.getVal(x.o.minHeight,'h'):'auto';if(!ddech){if(!dddh){ddech=moh;}
else{if(dddh>mh){ddech=mh;}
else if(x.o.minHeight&&moh!=='auto'&&dddh<moh){ddech=moh;}
else{ddech=dddh;}}}
else{ddech=x.o.autoResize&&ddech>mh?mh:ddech;}
var mow=x.o.minWidth?x.getVal(x.o.minWidth,'w'):'auto';if(!ddecw){if(!dw){ddecw=mow;}
else{if(dw>mw){ddecw=mw;}
else if(x.o.minWidth&&mow!=='auto'&&dw<mow){ddecw=mow;}
else{ddecw=dw;}}}
else{ddecw=x.o.autoResize&&ddecw>mw?mw:ddecw;}
x.e.object.css({height:ddech,width:ddecw});x.e.wrap.css({overflow:(dddh>ddech||dw>ddecw)?'auto':'visible'});x.o.autoPosition&&x.setLocation();},setLocation:function(){var x=this,top,left,hcvc=(w[0]/2)-(x.e.object.outerHeight(true)/2),vchc=(w[1]/2)-(x.e.object.outerWidth(true)/2);if(x.o.position&&Object.prototype.toString.call(x.o.position)==='[object Array]'){top=x.o.position[0]||hcvc;left=x.o.position[1]||vchc;}else{top=hcvc;left=vchc;}
x.e.object.css({left:left,top:top});},watchTab:function(e){var x=this;if($(e.target).parents('.box-object').length>0){x.inputs=$(':input:enabled:visible:first, :input:enabled:visible:last',x.e.data[0]);if((!e.shiftKey&&e.target===x.inputs[x.inputs.length-1])||(e.shiftKey&&e.target===x.inputs[0])||x.inputs.length===0){e.preventDefault();var pos=e.shiftKey?'last':'first';x.focus(pos);}}
else{e.preventDefault();x.focus();}},open:function(){var x=this;x.e.iframe&&x.e.iframe.show();if($.isFunction(x.o.onOpen)){x.o.onOpen.apply(x,[x.e]);}
else{x.e.overlay.show();x.e.object.show();x.e.data.show();}
x.o.focus&&x.focus();x.bindEvents();},close:function(){var x=this;if(!x.e.data){return false;}
x.unbindEvents();if($.isFunction(x.o.onClose)&&!x.occb){x.occb=true;x.o.onClose.apply(x,[x.e]);}
else{if(x.e.pholder){var ph=$('#box-pholder');if(x.o.persist){ph.replaceWith(x.e.data.removeClass('box-data').css('display',x.display));}
else{x.e.data.hide().remove();ph.replaceWith(x.e.orig);}}
else{x.e.data.hide().remove();}
x.e.object.hide().remove();x.e.overlay.hide();x.e.iframe&&x.e.iframe.hide().remove();setTimeout(function(){x.e.overlay.remove();x.e={};},10);}}};})(jQuery);
 /* Dual licensed under the MIT and GPL licenses
 *  jqbox - JQuery/Drupal Lightbox Plugin
 *  Copyright (c) 2010 Jonathan Ordonez
 *  Copyright (c) 2010 Eric Martin 
 */;
(function ($, window, undefined) {
    // Needed for IE Compatibility (Closing menus must be done backwards in IE)
    // Ensure that no complications arise from other libraries modifying the 
    // array functionality (and hope that they store the old reverse function into _reverse)
    var el, a = Array.prototype, Reverse = a._reverse || a.reverse;

    // bgiframe is needed to fix z-index problem for IE6 users.
    // For applications that don't have bgiframe plugin installed, create a useless 
    // function that doesn't break the chain
    function emptyfn() {
        return this;
    }

    // Cache common event functions so they aren't instantiated with each event
    function clearSiblings() {
        $(el = this).children('a').removeClass($.data(el.parentNode, 'multi-ddm-classname'));
    }
    function oldMenus() {
        $(el = this).hide(100).siblings('a').removeClass($.data(el.parentNode.parentNode, 'multi-ddm-classname'));   
    }

    // Expose the drop down menu
    $.fn.dropDownMenu = function (options) {
        return this.each(function () {
            // Defaults with metadata support
            var $main = $(this), i = 0, $menu, timeout,
				settings = $.extend({
				    timer: 500,
				    parentMO: undefined,
				    childMO: undefined,
				    bgiframe: undefined,
				    levels: []
				}, options || {}, $.metadata ? $main.metadata() : {}),

            // Check on every initiation, so bgiframe can be loaded after this plugin
				bgiframe = $.fn.bgiframe || $.fn.bgIframe || emptyfn;

            // Loop through each level, attach the bgiframe and store it's classname
            $menu = $main.data('multi-ddm-classname', settings.levels[0] || settings.parentMO || settings.childMO || '');
            while ($menu.length > 0) {
                $menu = bgiframe.call(
					$menu.find('> li > ul').data('multi-ddm-classname', settings.levels[++i] || settings.childMO || ''),
					settings.bgiframe
				);
            }

            // Use event delegation to track mouse movement across the menu
            $main.delegate('li', 'mouseenter.multi-ddm', function () {
                var self = $(el = this);

                if (timeout) {
                    clearTimeout(timeout);
                }

                // Close old menus and remove hover of non-menus
                Reverse.call(self.siblings('li').find('ul:visible')).each(oldMenus).end().each(clearSiblings);

                // Open new menu and remove any lingering hover elements
                self.children('a').addClass($.data(el.parentNode, 'multi-ddm-classname')).siblings('ul').fadeIn(250)
					.children('li').each(clearSiblings);
            })
			.bind('mouseleave.multi-ddm', function () {
			    timeout = setTimeout(closemenu, settings.timer);
			});

            // Closes all open menus
            function closemenu() {
                // Clear mouseovers
                $main.find('li').each(clearSiblings);

                // Close Menus backwards for IE Compatibility
                Reverse.call($main.find('ul:visible')).fadeOut(250);

                if (timeout) {
                    clearTimeout(timeout);
                }
            }

            // Allows user option to close menus by clicking outside the menu on the body
            $(window.document).bind('click.multi-ddm', closemenu);
        });
    };
})(jQuery, window || this);




        //Distributed under the MIT License

        //Copyright (c) 2010 Riot Games, expanded library
        //Copyright (c) 2010 Corey Hart, base library

        //Permission is hereby granted, free of charge, to any person
        //obtaining a copy of this software and associated documentation
        //files (the "Software"), to deal in the Software without
        //restriction, including without limitation the rights to use,
        //copy, modify, merge, publish, distribute, sublicense, and/or sell
        //copies of the Software, and to permit persons to whom the
        //Software is furnished to do so, subject to the following
        //conditions:

        //The above copyright notice and this permission notice shall be
        //included in all copies or substantial portions of the Software.

        //THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
        //EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
        //OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
        //NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
        //HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
        //WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
        //FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
        //OTHER DEALINGS IN THE SOFTWARE.
;
$(function () { $('#region_sidebar li > ul').each(function (i) {var parent_li = $(this).parent('li').parent('ul');parent_li.addClass('streemenu'); }); $('#block-menu-primary-links ul.menu').dropDownMenu({timer: 300}); });;
jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};

	/*
	 * Jquery Cookie Plugin
	 * licensed under the MIT and license:
	 * Copyright (c) 2006 Klaus Hartl, original code 
	 * Copyright (c) 2010 Riot Games, modified branch
	*/;
var streeMenuSpeed = 150;

$(document).ready(function(){
	$.cookie('testcookie' , 'expanded')
	var streemenucount = 0;
	$('.streemenu').each(function(){
		var streemenuitemcount = 0;
		$(this).children('li').children('ul').each(function(){
															
			if($.cookie('arMenu_' + streemenucount + '_arItem_' + streemenuitemcount) == 1){
				$(this).parent('li').removeClass('closed');
				$(this).parent('li').addClass('open');
				$(this).siblings('a').attr('onClick' , 'streeMenuItem(\'' + streemenucount + '\' , \'' + streemenuitemcount + '\' , \'0\'); return false;');
				$(this).slideDown(streeMenuSpeed).animate({opacity:1}, 300);
				$(this).parent().children('.closed').css("display","inline");
				$(this).parent().children('.open').css("display","none");
				
			} else {
				$(this).parent('li').removeClass('open');
				$(this).parent('li').addClass('closed');
				$(this).animate({opacity:0}, 150).slideUp(streeMenuSpeed);
				$(this).css("display","none");
				$(this).siblings('a').attr('onClick' , 'streeMenuItem(\'' + streemenucount + '\' , \'' + streemenuitemcount + '\' , \'1\'); return false;');
				$(this).parent().children('.closed').css("display","none");
				$(this).parent().children('.open').css("display","inline");
			}
			streemenuitemcount ++;
		});
		streemenucount ++;
	});
});
function streeMenuItem(menu , item , show){
    $.cookie('arMenu_' + menu + '_arItem_' + item , show);
	var streemenucount = 0;
	$('.streemenu').each(function(){
		if(menu == streemenucount){	
			var streemenuitemcount = 0;
			$(this).children('li').children('ul').each(function(){
				if(item == streemenuitemcount){
					if(show == 1){
						$(this).parent('li').removeClass('closed');
						$(this).parent('li').addClass('open');
						$(this).slideDown(streeMenuSpeed).animate({opacity:1}, 300);
						$(this).siblings('a').attr('onClick' , 'streeMenuItem(\'' + menu + '\' , \'' + item + '\' , \'0\'); return false;');
						$(this).parent().children('.closed').css("display","inline");
						$(this).parent().children('.open').css("display","none");
					} else {
						$(this).parent('li').removeClass('open');
						$(this).parent('li').addClass('closed');
						$(this).animate({opacity:0}, 150).slideUp(streeMenuSpeed);
						$(this).siblings('a').attr('onClick' , 'streeMenuItem(\'' + menu + '\' , \'' + item + '\' , \'1\'); return false;');
						$(this).parent().children('.closed').css("display","none");
						$(this).parent().children('.open').css("display","inline");
					}
				}
				streemenuitemcount ++;
			});
		}
		streemenucount ++;
	});
};
/**
 * @file
 *  Client side code for LoL PvP.net bar.
 */

jQuery(document).ready(function () {
	// toggle the visibility of the pvpnet region and language selector when the user clicks the activator.
	$('#lol-pvpnet-bar-activator').click(function () {
		dropdown = $('#lol-pvpnet-dropdown');
		if(dropdown.is(':visible')) {
	    	//	dropdown.slideUp().delay(500).fadeOut(2000);
			$('#lol-pvpnet').removeClass('pvpnet-open');
	    	dropdown.fadeTo(200,0.85).slideUp(500).fadeTo(0,0.0);
		}
		else {
			$('#lol-pvpnet').addClass('pvpnet-open');
	    	dropdown.fadeTo(0,0.65).slideDown(400).fadeTo(300,1.0);
		}
    	return false;
	});

	// add the pvpnetbar body class to the body tag on the page so that the page can bump down when the module is enabled.
	$('body').addClass('pvpnetbar');
});;
var slideList = null
var curSlideIndex = 0;
var curCtrlPage = 0;
var totalCtrlPages = 0;
var pageHeight = 0
var ctrlList = null
var slideTimer = null;

function resetSlideTimer() {
	if (slideTimer != null) {
		clearTimeout(slideTimer);
	}

	slideTimer = setTimeout(function() { gotoSlide((curSlideIndex + 1) % slideList.length); }, 8000);
}

function gotoSlidePage(n) {
	if (n < 0 || n >= totalCtrlPages || n == curCtrlPage || ctrlList.is(':animated')) {
		return;
	}

	ctrlList.animate({top: -1 * pageHeight * n}, 'fast', function() { curCtrlPage = n; });
}

function gotoSlide(n) {
	// Don't attempt to switch slides if n is not a valid slide index.
	if (n == curSlideIndex || n < 0 || n >= slideList.length) {
		return;
	}

	// Setup our slides to move around
	var newSlide = $(slideList[n]);
	var curSlide = $(slideList[curSlideIndex]);

	// Don't switch slides mid animation
	if (newSlide.is(':animated') || curSlide.is(':animated')) {
		return;
	}

	// Move the new slide behind the old slide, and show it
	newSlide.prependTo('#block-views-front_promos-block_1 .view-content').show();

	// Make sure that the slide control is showing the current slide
	if (n < curCtrlPage * 4 || n >= (curCtrlPage + 1) * 4) {
		gotoSlidePage(Math.floor(n / 4));
	}

	// Reveal the new slide by fading out the old slide, when completed
	// assign the new slide to the old slide's pointer.
	curSlide.fadeOut('slow', function() {
		curSlideIndex = n;

		// Update controls with active slide
		$('#block-views-front_promos-block_1 .promo_slide_previews a.active').removeClass('active');
		$('#block-views-front_promos-block_1 .promo_slide_previews a:eq(' + n + ')').addClass('active');

		// Reset the timer so the new slide shows for the full duration
		resetSlideTimer();
	});
}

$(function () {
	$('#block-views-front_promos-block_1').append('<div class="promo_controls"><a href="#" class="prev_button"></a><div class="promo_slide_previews"><ul></ul></div><a href="#" class="next_button"></a></div>');
	
	$('#block-views-front_promos-block_1 img.imagecache-promo_thumb').each(function () {
		$(this).appendTo('#block-views-front_promos-block_1 .promo_controls ul').wrap('<li>').wrap('<a>');
	});
	
	$('#block-views-front_promos-block_1 .promo_controls li:first-child a').addClass('active');
	
	slideList = $('#block-views-front_promos-block_1 .views-row');
	totalCtrlPages = Math.ceil(slideList.length / 4);
	pageHeight = $('#block-views-front_promos-block_1 .promo_slide_previews').height();
	ctrlList = $('#block-views-front_promos-block_1 .promo_slide_previews ul');
	
	$('#block-views-front_promos-block_1 .next_button').click(function() {
		gotoSlidePage(curCtrlPage + 1);
		return false;
	});

	$('#block-views-front_promos-block_1 .prev_button').click(function() {
		gotoSlidePage(curCtrlPage - 1);
		return false;
	});

	$('#block-views-front_promos-block_1 .promo_slide_previews a').each(function (i,e) {
		$(this).attr('rel', i);
	});

	$('#block-views-front_promos-block_1 .promo_slide_previews a').click(function () {
		gotoSlide(parseInt($(this).attr('rel')));
		return false;
	});

	resetSlideTimer();
	
	
	
	// $('#block-views-news-block_1 .article').click(function () {
	// 	$('#block-views-news-block_1 .article').not('.body_hidden').addClass('body_hidden');
	// 	$(this).removeClass('body_hidden');
	// });
});;

$(function () {
	// Configure News
	$('.views-row').not(':first-child').each(function () {
		$(this).find('.article').addClass('body_hidden');
		var x = 1;
	});
	
	$('.views-row .article.body_hidden').live('click', function () {
		var article = $(this);
		
		if (article.hasClass('body_hidden')) {
			$('.views-row .article').not('.body_hidden').addClass('body_hidden');
			article.removeClass('body_hidden');
			return false;
		}
	});
	
	// $('#block-views-news-block_1 .article').click(function () {
	// 	$('#block-views-news-block_1 .article').not('.body_hidden').addClass('body_hidden');
	// 	$(this).removeClass('body_hidden');
	// });
	

});;
/*
 * Shadowbox.js, version 3.0.3
 * http://shadowbox-js.com/
 *
 * Copyright 2007-2010, Michael J. I. Jackson
 * Date: 2010-04-06 06:18:21 +0000
 */
(function (window, undefined) {
    var S = {
        version: "3.0.3"
    };
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("windows") > -1 || ua.indexOf("win32") > -1) {
        S.isWindows = true
    } else {
        if (ua.indexOf("macintosh") > -1 || ua.indexOf("mac os x") > -1) {
            S.isMac = true
        } else {
            if (ua.indexOf("linux") > -1) {
                S.isLinux = true
            }
        }
    }
    S.isIE = ua.indexOf("msie") > -1;
    S.isIE6 = ua.indexOf("msie 6") > -1;
    S.isIE7 = ua.indexOf("msie 7") > -1;
    S.isGecko = ua.indexOf("gecko") > -1 && ua.indexOf("safari") == -1;
    S.isWebKit = ua.indexOf("applewebkit/") > -1;
    var inlineId = /#(.+)$/,
        galleryName = /^(light|shadow)box\[(.*?)\]/i,
        inlineParam = /\s*([a-z_]*?)\s*=\s*(.+)\s*/,
        fileExtension = /[0-9a-z]+$/i,
        scriptPath = /(.+\/)shadowbox\.js/i;
    var open = false,
        initialized = false,
        lastOptions = {},
        slideDelay = 0,
        slideStart, slideTimer;
    S.current = -1;
    S.dimensions = null;
    S.ease = function (state) {
        return 1 + Math.pow(state - 1, 3)
    };
    S.errorInfo = {
        fla: {
            name: "Flash",
            url: "http://www.adobe.com/products/flashplayer/"
        }, qt: {
            name: "QuickTime",
            url: "http://www.apple.com/quicktime/download/"
        }, wmp: {
            name: "Windows Media Player",
            url: "http://www.microsoft.com/windows/windowsmedia/"
        }, f4m: {
            name: "Flip4Mac",
            url: "http://www.flip4mac.com/wmv_download.htm"
        }
    };
    S.gallery = [];
    S.onReady = noop;
    S.path = null;
    S.player = null;
    S.playerId = "sb-player";
    S.options = {
        animate: true,
        animateFade: true,
        autoplayMovies: true,
        continuous: false,
        enableKeys: true,
        flashParams: {
            bgcolor: "#000000",
            allowfullscreen: true
        }, flashVars: {}, flashVersion: "9.0.115",
        handleOversize: "resize",
        handleUnsupported: "link",
        onChange: noop,
        onClose: noop,
        onFinish: noop,
        onOpen: noop,
        showMovieControls: true,
        skipSetup: false,
        slideshowDelay: 0,
        viewportPadding: 20
    };
    S.getCurrent = function () {
        return S.current > -1 ? S.gallery[S.current] : null
    };
    S.hasNext = function () {
        return S.gallery.length > 1 && (S.current != S.gallery.length - 1 || S.options.continuous)
    };
    S.isOpen = function () {
        return open
    };
    S.isPaused = function () {
        return slideTimer == "pause"
    };
    S.applyOptions = function (options) {
        lastOptions = apply({}, S.options);
        apply(S.options, options)
    };
    S.revertOptions = function () {
        apply(S.options, lastOptions)
    };
    S.init = function (options, callback) {
        if (initialized) {
            return
        }
        initialized = true;
        if (S.skin.options) {
            apply(S.options, S.skin.options)
        }
        if (options) {
            apply(S.options, options)
        }
        if (!S.path) {
            var path, scripts = document.getElementsByTagName("script");
            for (var i = 0, len = scripts.length; i < len; ++i) {
                path = scriptPath.exec(scripts[i].src);
                if (path) {
                    S.path = path[1];
                    break
                }
            }
        }
        if (callback) {
            S.onReady = callback
        }
        bindLoad()
    };
    S.open = function (obj) {
        if (open) {
            return
        }
        var gc = S.makeGallery(obj);
        S.gallery = gc[0];
        S.current = gc[1];
        obj = S.getCurrent();
        if (obj == null) {
            return
        }
        S.applyOptions(obj.options || {});
        filterGallery();
        if (S.gallery.length) {
            obj = S.getCurrent();
            if (S.options.onOpen(obj) === false) {
                return
            };
            open = true;
            S.skin.onOpen(obj, load)
        }
    };
    S.close = function () {
        if (!open) {
            return
        }
        open = false;
        if (S.player) {
            S.player.remove();
            S.player = null
        }
        if (typeof slideTimer == "number") {
            clearTimeout(slideTimer);
            slideTimer = null
        }
        slideDelay = 0;
        listenKeys(false);
        S.options.onClose(S.getCurrent());
        S.skin.onClose();
        S.revertOptions()
    };
    S.play = function () {
        if (!S.hasNext()) {
            return
        }
        if (!slideDelay) {
            slideDelay = S.options.slideshowDelay * 1000
        }
        if (slideDelay) {
            slideStart = now();
            slideTimer = setTimeout(function () {
                slideDelay = slideStart = 0;
                S.next()
            }, slideDelay);
            if (S.skin.onPlay) {
                S.skin.onPlay()
            }
        }
    };
    S.pause = function () {
        if (typeof slideTimer != "number") {
            return
        }
        slideDelay = Math.max(0, slideDelay - (now() - slideStart));
        if (slideDelay) {
            clearTimeout(slideTimer);
            slideTimer = "pause";
            if (S.skin.onPause) {
                S.skin.onPause()
            }
        }
    };
    S.change = function (index) {
        if (!(index in S.gallery)) {
            if (S.options.continuous) {
                index = (index < 0 ? S.gallery.length + index : 0);
                if (!(index in S.gallery)) {
                    return
                }
            } else {
                return
            }
        }
        S.current = index;
        if (typeof slideTimer == "number") {
            clearTimeout(slideTimer);
            slideTimer = null;
            slideDelay = slideStart = 0
        }
        S.options.onChange(S.getCurrent());
        load(true)
    };
    S.next = function () {
        S.change(S.current + 1)
    };
    S.previous = function () {
        S.change(S.current - 1)
    };
    S.setDimensions = function (height, width, maxHeight, maxWidth, topBottom, leftRight, padding, preserveAspect) {
        var originalHeight = height,
            originalWidth = width;
        var extraHeight = 2 * padding + topBottom;
        if (height + extraHeight > maxHeight) {
            height = maxHeight - extraHeight
        }
        var extraWidth = 2 * padding + leftRight;
        if (width + extraWidth > maxWidth) {
            width = maxWidth - extraWidth
        }
        var changeHeight = (originalHeight - height) / originalHeight,
            changeWidth = (originalWidth - width) / originalWidth,
            oversized = (changeHeight > 0 || changeWidth > 0);
        if (preserveAspect && oversized) {
            if (changeHeight > changeWidth) {
                width = Math.round((originalWidth / originalHeight) * height)
            } else {
                if (changeWidth > changeHeight) {
                    height = Math.round((originalHeight / originalWidth) * width)
                }
            }
        }
        S.dimensions = {
            height: height + topBottom,
            width: width + leftRight,
            innerHeight: height,
            innerWidth: width,
            top: Math.floor((maxHeight - (height + extraHeight)) / 2 + padding),
            left: Math.floor((maxWidth - (width + extraWidth)) / 2 + padding),
            oversized: oversized
        };
        return S.dimensions
    };
    S.makeGallery = function (obj) {
        var gallery = [],
            current = -1;
        if (typeof obj == "string") {
            obj = [obj]
        }
        if (typeof obj.length == "number") {
            each(obj, function (i, o) {
                if (o.content) {
                    gallery[i] = o
                } else {
                    gallery[i] = {
                        content: o
                    }
                }
            });
            current = 0
        } else {
            if (obj.tagName) {
                var cacheObj = S.getCache(obj);
                obj = cacheObj ? cacheObj : S.makeObject(obj)
            }
            if (obj.gallery) {
                gallery = [];
                var o;
                for (var key in S.cache) {
                    o = S.cache[key];
                    if (o.gallery && o.gallery == obj.gallery) {
                        if (current == -1 && o.content == obj.content) {
                            current = gallery.length
                        }
                        gallery.push(o)
                    }
                }
                if (current == -1) {
                    gallery.unshift(obj);
                    current = 0
                }
            } else {
                gallery = [obj];
                current = 0
            }
        }
        each(gallery, function (i, o) {
            gallery[i] = apply({}, o)
        });
        return [gallery, current]
    };
    S.makeObject = function (link, options) {
        var obj = {
            content: link.href,
            title: link.getAttribute("title") || "",
            link: link
        };
        if (options) {
            options = apply({}, options);
            each(["player", "title", "height", "width", "gallery"], function (i, o) {
                if (typeof options[o] != "undefined") {
                    obj[o] = options[o];
                    delete options[o]
                }
            });
            obj.options = options
        } else {
            obj.options = {}
        }
        if (!obj.player) {
            obj.player = S.getPlayer(obj.content)
        }
        var rel = link.getAttribute("rel");
        if (rel) {
            var match = rel.match(galleryName);
            if (match) {
                obj.gallery = escape(match[2])
            }
            each(rel.split(";"), function (i, p) {
                match = p.match(inlineParam);
                if (match) {
                    obj[match[1]] = match[2]
                }
            })
        }
        return obj
    };
    S.getPlayer = function (content) {
        if (content.indexOf("#") > -1 && content.indexOf(document.location.href) == 0) {
            return "inline"
        }
        var q = content.indexOf("?");
        if (q > -1) {
            content = content.substring(0, q)
        }
        var ext, m = content.match(fileExtension);
        if (m) {
            ext = m[0].toLowerCase()
        }
        if (ext) {
            if (S.img && S.img.ext.indexOf(ext) > -1) {
                return "img"
            }
            if (S.swf && S.swf.ext.indexOf(ext) > -1) {
                return "swf"
            }
            if (S.flv && S.flv.ext.indexOf(ext) > -1) {
                return "flv"
            }
            if (S.qt && S.qt.ext.indexOf(ext) > -1) {
                if (S.wmp && S.wmp.ext.indexOf(ext) > -1) {
                    return "qtwmp"
                } else {
                    return "qt"
                }
            }
            if (S.wmp && S.wmp.ext.indexOf(ext) > -1) {
                return "wmp"
            }
        }
        return "iframe"
    };

    function filterGallery() {
        var err = S.errorInfo,
            plugins = S.plugins,
            obj, remove, needed, m, format, replace, inlineEl, flashVersion;
        for (var i = 0; i < S.gallery.length; ++i) {
            obj = S.gallery[i];
            remove = false;
            needed = null;
            switch (obj.player) {
            case "flv":
            case "swf":
                if (!plugins.fla) {
                    needed = "fla"
                }
                break;
            case "qt":
                if (!plugins.qt) {
                    needed = "qt"
                }
                break;
            case "wmp":
                if (S.isMac) {
                    if (plugins.qt && plugins.f4m) {
                        obj.player = "qt"
                    } else {
                        needed = "qtf4m"
                    }
                } else {
                    if (!plugins.wmp) {
                        needed = "wmp"
                    }
                }
                break;
            case "qtwmp":
                if (plugins.qt) {
                    obj.player = "qt"
                } else {
                    if (plugins.wmp) {
                        obj.player = "wmp"
                    } else {
                        needed = "qtwmp"
                    }
                }
                break
            }
            if (needed) {
                if (S.options.handleUnsupported == "link") {
                    switch (needed) {
                    case "qtf4m":
                        format = "shared";
                        replace = [err.qt.url, err.qt.name, err.f4m.url, err.f4m.name];
                        break;
                    case "qtwmp":
                        format = "either";
                        replace = [err.qt.url, err.qt.name, err.wmp.url, err.wmp.name];
                        break;
                    default:
                        format = "single";
                        replace = [err[needed].url, err[needed].name]
                    }
                    obj.player = "html";
                    obj.content = '<div class="sb-message">' + sprintf(S.lang.errors[format], replace) + "</div>"
                } else {
                    remove = true
                }
            } else {
                if (obj.player == "inline") {
                    m = inlineId.exec(obj.content);
                    if (m) {
                        inlineEl = get(m[1]);
                        if (inlineEl) {
                            obj.content = inlineEl.innerHTML
                        } else {
                            remove = true
                        }
                    } else {
                        remove = true
                    }
                } else {
                    if (obj.player == "swf" || obj.player == "flv") {
                        flashVersion = (obj.options && obj.options.flashVersion) || S.options.flashVersion;
                        if (S.flash && !S.flash.hasFlashPlayerVersion(flashVersion)) {
                            obj.width = 310;
                            obj.height = 177
                        }
                    }
                }
            }
            if (remove) {
                S.gallery.splice(i, 1);
                if (i < S.current) {
                    --S.current
                } else {
                    if (i == S.current) {
                        S.current = i > 0 ? i - 1 : i
                    }
                }--i
            }
        }
    }
    function listenKeys(on) {
        if (!S.options.enableKeys) {
            return
        }(on ? addEvent : removeEvent)(document, "keydown", handleKey)
    }
    function handleKey(e) {
        if (e.metaKey || e.shiftKey || e.altKey || e.ctrlKey) {
            return
        }
        var code = keyCode(e),
            handler;
        switch (code) {
        case 81:
        case 88:
        case 27:
            handler = S.close;
            break;
        case 37:
            handler = S.previous;
            break;
        case 39:
            handler = S.next;
            break;
        case 32:
            handler = typeof slideTimer == "number" ? S.pause : S.play;
            break
        }
        if (handler) {
            preventDefault(e);
            handler()
        }
    }
    function load(changing) {
        listenKeys(false);
        var obj = S.getCurrent();
        var player = (obj.player == "inline" ? "html" : obj.player);
        if (typeof S[player] != "function") {
            throw "unknown player " + player
        }
        if (changing) {
            S.player.remove();
            S.revertOptions();
            S.applyOptions(obj.options || {})
        }
        S.player = new S[player](obj, S.playerId);
        if (S.gallery.length > 1) {
            var next = S.gallery[S.current + 1] || S.gallery[0];
            if (next.player == "img") {
                var a = new Image();
                a.src = next.content
            }
            var prev = S.gallery[S.current - 1] || S.gallery[S.gallery.length - 1];
            if (prev.player == "img") {
                var b = new Image();
                b.src = prev.content
            }
        }
        S.skin.onLoad(changing, waitReady)
    }
    function waitReady() {
        if (!open) {
            return
        }
        if (typeof S.player.ready != "undefined") {
            var timer = setInterval(function () {
                if (open) {
                    if (S.player.ready) {
                        clearInterval(timer);
                        timer = null;
                        S.skin.onReady(show)
                    }
                } else {
                    clearInterval(timer);
                    timer = null
                }
            }, 10)
        } else {
            S.skin.onReady(show)
        }
    }
    function show() {
        if (!open) {
            return
        }
        S.player.append(S.skin.body, S.dimensions);
        S.skin.onShow(finish)
    }
    function finish() {
        if (!open) {
            return
        }
        if (S.player.onLoad) {
            S.player.onLoad()
        }
        S.options.onFinish(S.getCurrent());
        if (!S.isPaused()) {
            S.play()
        }
        listenKeys(true)
    }
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function (obj, from) {
            var len = this.length >>> 0;
            from = from || 0;
            if (from < 0) {
                from += len
            }
            for (; from < len; ++from) {
                if (from in this && this[from] === obj) {
                    return from
                }
            }
            return -1
        }
    }
    function now() {
        return (new Date).getTime()
    }
    function apply(original, extension) {
        for (var property in extension) {
            original[property] = extension[property]
        }
        return original
    }
    function each(obj, callback) {
        var i = 0,
            len = obj.length;
        for (var value = obj[0]; i < len && callback.call(value, i, value) !== false; value = obj[++i]) {}
    }
    function sprintf(str, replace) {
        return str.replace(/\{(\w+?)\}/g, function (match, i) {
            return replace[i]
        })
    }
    function noop() {}
    function get(id) {
        return document.getElementById(id)
    }
    function remove(el) {
        el.parentNode.removeChild(el)
    }
    var supportsOpacity = true,
        supportsFixed = true;

    function checkSupport() {
        var body = document.body,
            div = document.createElement("div");
        supportsOpacity = typeof div.style.opacity === "string";
        div.style.position = "fixed";
        div.style.margin = 0;
        div.style.top = "20px";
        body.appendChild(div, body.firstChild);
        supportsFixed = div.offsetTop == 20;
        body.removeChild(div)
    }
    S.getStyle = (function () {
        var opacity = /opacity=([^)]*)/,
            getComputedStyle = document.defaultView && document.defaultView.getComputedStyle;
        return function (el, style) {
            var ret;
            if (!supportsOpacity && style == "opacity" && el.currentStyle) {
                ret = opacity.test(el.currentStyle.filter || "") ? (parseFloat(RegExp.$1) / 100) + "" : "";
                return ret === "" ? "1" : ret
            }
            if (getComputedStyle) {
                var computedStyle = getComputedStyle(el, null);
                if (computedStyle) {
                    ret = computedStyle[style]
                }
                if (style == "opacity" && ret == "") {
                    ret = "1"
                }
            } else {
                ret = el.currentStyle[style]
            }
            return ret
        }
    })();
    S.appendHTML = function (el, html) {
        if (el.insertAdjacentHTML) {
            el.insertAdjacentHTML("BeforeEnd", html)
        } else {
            if (el.lastChild) {
                var range = el.ownerDocument.createRange();
                range.setStartAfter(el.lastChild);
                var frag = range.createContextualFragment(html);
                el.appendChild(frag)
            } else {
                el.innerHTML = html
            }
        }
    };
    S.getWindowSize = function (dimension) {
        if (document.compatMode === "CSS1Compat") {
            return document.documentElement["client" + dimension]
        }
        return document.body["client" + dimension]
    };
    S.setOpacity = function (el, opacity) {
        var style = el.style;
        if (supportsOpacity) {
            style.opacity = (opacity == 1 ? "" : opacity)
        } else {
            style.zoom = 1;
            if (opacity == 1) {
                if (typeof style.filter == "string" && (/alpha/i).test(style.filter)) {
                    style.filter = style.filter.replace(/\s*[\w\.]*alpha\([^\)]*\);?/gi, "")
                }
            } else {
                style.filter = (style.filter || "").replace(/\s*[\w\.]*alpha\([^\)]*\)/gi, "") + " alpha(opacity=" + (opacity * 100) + ")"
            }
        }
    };
    S.clearOpacity = function (el) {
        S.setOpacity(el, 1)
    };

    function getTarget(e) {
        return e.target
    }
    function getPageXY(e) {
        return [e.pageX, e.pageY]
    }
    function preventDefault(e) {
        e.preventDefault()
    }
    function keyCode(e) {
        return e.keyCode
    }
    function addEvent(el, type, handler) {
        jQuery(el).bind(type, handler)
    }
    function removeEvent(el, type, handler) {
        jQuery(el).unbind(type, handler)
    }
    jQuery.fn.shadowbox = function (options) {
        return this.each(function () {
            var el = jQuery(this);
            var opts = jQuery.extend({}, options || {}, jQuery.metadata ? el.metadata() : jQuery.meta ? el.data() : {});
            var cls = this.className || "";
            opts.width = parseInt((cls.match(/w:(\d+)/) || [])[1]) || opts.width;
            opts.height = parseInt((cls.match(/h:(\d+)/) || [])[1]) || opts.height;
            Shadowbox.setup(el, opts)
        })
    };
    var loaded = false,
        DOMContentLoaded;
    if (document.addEventListener) {
        DOMContentLoaded = function () {
            document.removeEventListener("DOMContentLoaded", DOMContentLoaded, false);
            S.load()
        }
    } else {
        if (document.attachEvent) {
            DOMContentLoaded = function () {
                if (document.readyState === "complete") {
                    document.detachEvent("onreadystatechange", DOMContentLoaded);
                    S.load()
                }
            }
        }
    }
    function doScrollCheck() {
        if (loaded) {
            return
        }
        try {
            document.documentElement.doScroll("left")
        } catch (e) {
            setTimeout(doScrollCheck, 1);
            return
        }
        S.load()
    }
    function bindLoad() {
        if (document.readyState === "complete") {
            return S.load()
        }
        if (document.addEventListener) {
            document.addEventListener("DOMContentLoaded", DOMContentLoaded, false);
            window.addEventListener("load", S.load, false)
        } else {
            if (document.attachEvent) {
                document.attachEvent("onreadystatechange", DOMContentLoaded);
                window.attachEvent("onload", S.load);
                var topLevel = false;
                try {
                    topLevel = window.frameElement === null
                } catch (e) {}
                if (document.documentElement.doScroll && topLevel) {
                    doScrollCheck()
                }
            }
        }
    }
    S.load = function () {
        if (loaded) {
            return
        }
        if (!document.body) {
            return setTimeout(S.load, 13)
        }
        loaded = true;
        checkSupport();
        S.onReady();
        if (!S.options.skipSetup) {
            S.setup()
        }
        S.skin.init()
    };
    S.plugins = {};
    if (navigator.plugins && navigator.plugins.length) {
        var names = [];
        each(navigator.plugins, function (i, p) {
            names.push(p.name)
        });
        names = names.join(",");
        var f4m = names.indexOf("Flip4Mac") > -1;
        S.plugins = {
            fla: names.indexOf("Shockwave Flash") > -1,
            qt: names.indexOf("QuickTime") > -1,
            wmp: !f4m && names.indexOf("Windows Media") > -1,
            f4m: f4m
        }
    } else {
        var detectPlugin = function (name) {
            var axo;
            try {
                axo = new ActiveXObject(name)
            } catch (e) {}
            return !!axo
        };
        S.plugins = {
            fla: detectPlugin("ShockwaveFlash.ShockwaveFlash"),
            qt: detectPlugin("QuickTime.QuickTime"),
            wmp: detectPlugin("wmplayer.ocx"),
            f4m: false
        }
    }
    var relAttr = /^(light|shadow)box/i,
        expando = "shadowboxCacheKey",
        cacheKey = 1;
    S.cache = {};
    S.select = function (selector) {
        var links = [];
        if (!selector) {
            var rel;
            each(document.getElementsByTagName("a"), function (i, el) {
                rel = el.getAttribute("rel");
                if (rel && relAttr.test(rel)) {
                    links.push(el)
                }
            })
        } else {
            var length = selector.length;
            if (length) {
                if (typeof selector == "string") {
                    if (S.find) {
                        links = S.find(selector)
                    }
                } else {
                    if (length == 2 && typeof selector[0] == "string" && selector[1].nodeType) {
                        if (S.find) {
                            links = S.find(selector[0], selector[1])
                        }
                    } else {
                        for (var i = 0; i < length; ++i) {
                            links[i] = selector[i]
                        }
                    }
                }
            } else {
                links.push(selector)
            }
        }
        return links
    };
    S.setup = function (selector, options) {
        each(S.select(selector), function (i, link) {
            S.addCache(link, options)
        })
    };
    S.teardown = function (selector) {
        each(S.select(selector), function (i, link) {
            S.removeCache(link)
        })
    };
    S.addCache = function (link, options) {
        var key = link[expando];
        if (key == undefined) {
            key = cacheKey++;
            link[expando] = key;
            addEvent(link, "click", handleClick)
        }
        S.cache[key] = S.makeObject(link, options)
    };
    S.removeCache = function (link) {
        removeEvent(link, "click", handleClick);
        delete S.cache[link[expando]];
        link[expando] = null
    };
    S.getCache = function (link) {
        var key = link[expando];
        return (key in S.cache && S.cache[key])
    };
    S.clearCache = function () {
        for (var key in S.cache) {
            S.removeCache(S.cache[key].link)
        }
        S.cache = {}
    };

    function handleClick(e) {
        S.open(this);
        if (S.gallery.length) {
            preventDefault(e)
        }
    }
/*
 * Sizzle CSS Selector Engine - v1.0
 *  Copyright 2009, The Dojo Foundation
 *  Released under the MIT, BSD, and GPL Licenses.
 *  More information: http://sizzlejs.com/
 *
 * Modified for inclusion in Shadowbox.js
 */
    S.find = (function () {
        var chunker = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^[\]]*\]|['"][^'"]*['"]|[^[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
            done = 0,
            toString = Object.prototype.toString,
            hasDuplicate = false,
            baseHasDuplicate = true;
        [0, 0].sort(function () {
            baseHasDuplicate = false;
            return 0
        });
        var Sizzle = function (selector, context, results, seed) {
            results = results || [];
            var origContext = context = context || document;
            if (context.nodeType !== 1 && context.nodeType !== 9) {
                return []
            }
            if (!selector || typeof selector !== "string") {
                return results
            }
            var parts = [],
                m, set, checkSet, extra, prune = true,
                contextXML = isXML(context),
                soFar = selector;
            while ((chunker.exec(""), m = chunker.exec(soFar)) !== null) {
                soFar = m[3];
                parts.push(m[1]);
                if (m[2]) {
                    extra = m[3];
                    break
                }
            }
            if (parts.length > 1 && origPOS.exec(selector)) {
                if (parts.length === 2 && Expr.relative[parts[0]]) {
                    set = posProcess(parts[0] + parts[1], context)
                } else {
                    set = Expr.relative[parts[0]] ? [context] : Sizzle(parts.shift(), context);
                    while (parts.length) {
                        selector = parts.shift();
                        if (Expr.relative[selector]) {
                            selector += parts.shift()
                        }
                        set = posProcess(selector, set)
                    }
                }
            } else {
                if (!seed && parts.length > 1 && context.nodeType === 9 && !contextXML && Expr.match.ID.test(parts[0]) && !Expr.match.ID.test(parts[parts.length - 1])) {
                    var ret = Sizzle.find(parts.shift(), context, contextXML);
                    context = ret.expr ? Sizzle.filter(ret.expr, ret.set)[0] : ret.set[0]
                }
                if (context) {
                    var ret = seed ? {
                        expr: parts.pop(),
                        set: makeArray(seed)
                    } : Sizzle.find(parts.pop(), parts.length === 1 && (parts[0] === "~" || parts[0] === "+") && context.parentNode ? context.parentNode : context, contextXML);
                    set = ret.expr ? Sizzle.filter(ret.expr, ret.set) : ret.set;
                    if (parts.length > 0) {
                        checkSet = makeArray(set)
                    } else {
                        prune = false
                    }
                    while (parts.length) {
                        var cur = parts.pop(),
                            pop = cur;
                        if (!Expr.relative[cur]) {
                            cur = ""
                        } else {
                            pop = parts.pop()
                        }
                        if (pop == null) {
                            pop = context
                        }
                        Expr.relative[cur](checkSet, pop, contextXML)
                    }
                } else {
                    checkSet = parts = []
                }
            }
            if (!checkSet) {
                checkSet = set
            }
            if (!checkSet) {
                throw "Syntax error, unrecognized expression: " + (cur || selector)
            }
            if (toString.call(checkSet) === "[object Array]") {
                if (!prune) {
                    results.push.apply(results, checkSet)
                } else {
                    if (context && context.nodeType === 1) {
                        for (var i = 0; checkSet[i] != null; i++) {
                            if (checkSet[i] && (checkSet[i] === true || checkSet[i].nodeType === 1 && contains(context, checkSet[i]))) {
                                results.push(set[i])
                            }
                        }
                    } else {
                        for (var i = 0; checkSet[i] != null; i++) {
                            if (checkSet[i] && checkSet[i].nodeType === 1) {
                                results.push(set[i])
                            }
                        }
                    }
                }
            } else {
                makeArray(checkSet, results)
            }
            if (extra) {
                Sizzle(extra, origContext, results, seed);
                Sizzle.uniqueSort(results)
            }
            return results
        };
        Sizzle.uniqueSort = function (results) {
            if (sortOrder) {
                hasDuplicate = baseHasDuplicate;
                results.sort(sortOrder);
                if (hasDuplicate) {
                    for (var i = 1; i < results.length; i++) {
                        if (results[i] === results[i - 1]) {
                            results.splice(i--, 1)
                        }
                    }
                }
            }
            return results
        };
        Sizzle.matches = function (expr, set) {
            return Sizzle(expr, null, null, set)
        };
        Sizzle.find = function (expr, context, isXML) {
            var set, match;
            if (!expr) {
                return []
            }
            for (var i = 0, l = Expr.order.length; i < l; i++) {
                var type = Expr.order[i],
                    match;
                if ((match = Expr.leftMatch[type].exec(expr))) {
                    var left = match[1];
                    match.splice(1, 1);
                    if (left.substr(left.length - 1) !== "\\") {
                        match[1] = (match[1] || "").replace(/\\/g, "");
                        set = Expr.find[type](match, context, isXML);
                        if (set != null) {
                            expr = expr.replace(Expr.match[type], "");
                            break
                        }
                    }
                }
            }
            if (!set) {
                set = context.getElementsByTagName("*")
            }
            return {
                set: set,
                expr: expr
            }
        };
        Sizzle.filter = function (expr, set, inplace, not) {
            var old = expr,
                result = [],
                curLoop = set,
                match, anyFound, isXMLFilter = set && set[0] && isXML(set[0]);
            while (expr && set.length) {
                for (var type in Expr.filter) {
                    if ((match = Expr.match[type].exec(expr)) != null) {
                        var filter = Expr.filter[type],
                            found, item;
                        anyFound = false;
                        if (curLoop === result) {
                            result = []
                        }
                        if (Expr.preFilter[type]) {
                            match = Expr.preFilter[type](match, curLoop, inplace, result, not, isXMLFilter);
                            if (!match) {
                                anyFound = found = true
                            } else {
                                if (match === true) {
                                    continue
                                }
                            }
                        }
                        if (match) {
                            for (var i = 0;
                            (item = curLoop[i]) != null; i++) {
                                if (item) {
                                    found = filter(item, match, i, curLoop);
                                    var pass = not ^ !! found;
                                    if (inplace && found != null) {
                                        if (pass) {
                                            anyFound = true
                                        } else {
                                            curLoop[i] = false
                                        }
                                    } else {
                                        if (pass) {
                                            result.push(item);
                                            anyFound = true
                                        }
                                    }
                                }
                            }
                        }
                        if (found !== undefined) {
                            if (!inplace) {
                                curLoop = result
                            }
                            expr = expr.replace(Expr.match[type], "");
                            if (!anyFound) {
                                return []
                            }
                            break
                        }
                    }
                }
                if (expr === old) {
                    if (anyFound == null) {
                        throw "Syntax error, unrecognized expression: " + expr
                    } else {
                        break
                    }
                }
                old = expr
            }
            return curLoop
        };
        var Expr = Sizzle.selectors = {
            order: ["ID", "NAME", "TAG"],
            match: {
                ID: /#((?:[\w\u00c0-\uFFFF-]|\\.)+)/,
                CLASS: /\.((?:[\w\u00c0-\uFFFF-]|\\.)+)/,
                NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF-]|\\.)+)['"]*\]/,
                ATTR: /\[\s*((?:[\w\u00c0-\uFFFF-]|\\.)+)\s*(?:(\S?=)\s*(['"]*)(.*?)\3|)\s*\]/,
                TAG: /^((?:[\w\u00c0-\uFFFF\*-]|\\.)+)/,
                CHILD: /:(only|nth|last|first)-child(?:\((even|odd|[\dn+-]*)\))?/,
                POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^-]|$)/,
                PSEUDO: /:((?:[\w\u00c0-\uFFFF-]|\\.)+)(?:\((['"]*)((?:\([^\)]+\)|[^\2\(\)]*)+)\2\))?/
            }, leftMatch: {}, attrMap: {
                "class": "className",
                "for": "htmlFor"
            }, attrHandle: {
                href: function (elem) {
                    return elem.getAttribute("href")
                }
            }, relative: {
                "+": function (checkSet, part) {
                    var isPartStr = typeof part === "string",
                        isTag = isPartStr && !/\W/.test(part),
                        isPartStrNotTag = isPartStr && !isTag;
                    if (isTag) {
                        part = part.toLowerCase()
                    }
                    for (var i = 0, l = checkSet.length, elem; i < l; i++) {
                        if ((elem = checkSet[i])) {
                            while ((elem = elem.previousSibling) && elem.nodeType !== 1) {}
                            checkSet[i] = isPartStrNotTag || elem && elem.nodeName.toLowerCase() === part ? elem || false : elem === part
                        }
                    }
                    if (isPartStrNotTag) {
                        Sizzle.filter(part, checkSet, true)
                    }
                }, ">": function (checkSet, part) {
                    var isPartStr = typeof part === "string";
                    if (isPartStr && !/\W/.test(part)) {
                        part = part.toLowerCase();
                        for (var i = 0, l = checkSet.length; i < l; i++) {
                            var elem = checkSet[i];
                            if (elem) {
                                var parent = elem.parentNode;
                                checkSet[i] = parent.nodeName.toLowerCase() === part ? parent : false
                            }
                        }
                    } else {
                        for (var i = 0, l = checkSet.length; i < l; i++) {
                            var elem = checkSet[i];
                            if (elem) {
                                checkSet[i] = isPartStr ? elem.parentNode : elem.parentNode === part
                            }
                        }
                        if (isPartStr) {
                            Sizzle.filter(part, checkSet, true)
                        }
                    }
                }, "": function (checkSet, part, isXML) {
                    var doneName = done++,
                        checkFn = dirCheck;
                    if (typeof part === "string" && !/\W/.test(part)) {
                        var nodeCheck = part = part.toLowerCase();
                        checkFn = dirNodeCheck
                    }
                    checkFn("parentNode", part, doneName, checkSet, nodeCheck, isXML)
                }, "~": function (checkSet, part, isXML) {
                    var doneName = done++,
                        checkFn = dirCheck;
                    if (typeof part === "string" && !/\W/.test(part)) {
                        var nodeCheck = part = part.toLowerCase();
                        checkFn = dirNodeCheck
                    }
                    checkFn("previousSibling", part, doneName, checkSet, nodeCheck, isXML)
                }
            }, find: {
                ID: function (match, context, isXML) {
                    if (typeof context.getElementById !== "undefined" && !isXML) {
                        var m = context.getElementById(match[1]);
                        return m ? [m] : []
                    }
                }, NAME: function (match, context) {
                    if (typeof context.getElementsByName !== "undefined") {
                        var ret = [],
                            results = context.getElementsByName(match[1]);
                        for (var i = 0, l = results.length; i < l; i++) {
                            if (results[i].getAttribute("name") === match[1]) {
                                ret.push(results[i])
                            }
                        }
                        return ret.length === 0 ? null : ret
                    }
                }, TAG: function (match, context) {
                    return context.getElementsByTagName(match[1])
                }
            }, preFilter: {
                CLASS: function (match, curLoop, inplace, result, not, isXML) {
                    match = " " + match[1].replace(/\\/g, "") + " ";
                    if (isXML) {
                        return match
                    }
                    for (var i = 0, elem;
                    (elem = curLoop[i]) != null; i++) {
                        if (elem) {
                            if (not ^ (elem.className && (" " + elem.className + " ").replace(/[\t\n]/g, " ").indexOf(match) >= 0)) {
                                if (!inplace) {
                                    result.push(elem)
                                }
                            } else {
                                if (inplace) {
                                    curLoop[i] = false
                                }
                            }
                        }
                    }
                    return false
                }, ID: function (match) {
                    return match[1].replace(/\\/g, "")
                }, TAG: function (match, curLoop) {
                    return match[1].toLowerCase()
                }, CHILD: function (match) {
                    if (match[1] === "nth") {
                        var test = /(-?)(\d*)n((?:\+|-)?\d*)/.exec(match[2] === "even" && "2n" || match[2] === "odd" && "2n+1" || !/\D/.test(match[2]) && "0n+" + match[2] || match[2]);
                        match[2] = (test[1] + (test[2] || 1)) - 0;
                        match[3] = test[3] - 0
                    }
                    match[0] = done++;
                    return match
                }, ATTR: function (match, curLoop, inplace, result, not, isXML) {
                    var name = match[1].replace(/\\/g, "");
                    if (!isXML && Expr.attrMap[name]) {
                        match[1] = Expr.attrMap[name]
                    }
                    if (match[2] === "~=") {
                        match[4] = " " + match[4] + " "
                    }
                    return match
                }, PSEUDO: function (match, curLoop, inplace, result, not) {
                    if (match[1] === "not") {
                        if ((chunker.exec(match[3]) || "").length > 1 || /^\w/.test(match[3])) {
                            match[3] = Sizzle(match[3], null, null, curLoop)
                        } else {
                            var ret = Sizzle.filter(match[3], curLoop, inplace, true ^ not);
                            if (!inplace) {
                                result.push.apply(result, ret)
                            }
                            return false
                        }
                    } else {
                        if (Expr.match.POS.test(match[0]) || Expr.match.CHILD.test(match[0])) {
                            return true
                        }
                    }
                    return match
                }, POS: function (match) {
                    match.unshift(true);
                    return match
                }
            }, filters: {
                enabled: function (elem) {
                    return elem.disabled === false && elem.type !== "hidden"
                }, disabled: function (elem) {
                    return elem.disabled === true
                }, checked: function (elem) {
                    return elem.checked === true
                }, selected: function (elem) {
                    elem.parentNode.selectedIndex;
                    return elem.selected === true
                }, parent: function (elem) {
                    return !!elem.firstChild
                }, empty: function (elem) {
                    return !elem.firstChild
                }, has: function (elem, i, match) {
                    return !!Sizzle(match[3], elem).length
                }, header: function (elem) {
                    return /h\d/i.test(elem.nodeName)
                }, text: function (elem) {
                    return "text" === elem.type
                }, radio: function (elem) {
                    return "radio" === elem.type
                }, checkbox: function (elem) {
                    return "checkbox" === elem.type
                }, file: function (elem) {
                    return "file" === elem.type
                }, password: function (elem) {
                    return "password" === elem.type
                }, submit: function (elem) {
                    return "submit" === elem.type
                }, image: function (elem) {
                    return "image" === elem.type
                }, reset: function (elem) {
                    return "reset" === elem.type
                }, button: function (elem) {
                    return "button" === elem.type || elem.nodeName.toLowerCase() === "button"
                }, input: function (elem) {
                    return /input|select|textarea|button/i.test(elem.nodeName)
                }
            }, setFilters: {
                first: function (elem, i) {
                    return i === 0
                }, last: function (elem, i, match, array) {
                    return i === array.length - 1
                }, even: function (elem, i) {
                    return i % 2 === 0
                }, odd: function (elem, i) {
                    return i % 2 === 1
                }, lt: function (elem, i, match) {
                    return i < match[3] - 0
                }, gt: function (elem, i, match) {
                    return i > match[3] - 0
                }, nth: function (elem, i, match) {
                    return match[3] - 0 === i
                }, eq: function (elem, i, match) {
                    return match[3] - 0 === i
                }
            }, filter: {
                PSEUDO: function (elem, match, i, array) {
                    var name = match[1],
                        filter = Expr.filters[name];
                    if (filter) {
                        return filter(elem, i, match, array)
                    } else {
                        if (name === "contains") {
                            return (elem.textContent || elem.innerText || getText([elem]) || "").indexOf(match[3]) >= 0
                        } else {
                            if (name === "not") {
                                var not = match[3];
                                for (var i = 0, l = not.length; i < l; i++) {
                                    if (not[i] === elem) {
                                        return false
                                    }
                                }
                                return true
                            } else {
                                throw "Syntax error, unrecognized expression: " + name
                            }
                        }
                    }
                }, CHILD: function (elem, match) {
                    var type = match[1],
                        node = elem;
                    switch (type) {
                    case "only":
                    case "first":
                        while ((node = node.previousSibling)) {
                            if (node.nodeType === 1) {
                                return false
                            }
                        }
                        if (type === "first") {
                            return true
                        }
                        node = elem;
                    case "last":
                        while ((node = node.nextSibling)) {
                            if (node.nodeType === 1) {
                                return false
                            }
                        }
                        return true;
                    case "nth":
                        var first = match[2],
                            last = match[3];
                        if (first === 1 && last === 0) {
                            return true
                        }
                        var doneName = match[0],
                            parent = elem.parentNode;
                        if (parent && (parent.sizcache !== doneName || !elem.nodeIndex)) {
                            var count = 0;
                            for (node = parent.firstChild; node; node = node.nextSibling) {
                                if (node.nodeType === 1) {
                                    node.nodeIndex = ++count
                                }
                            }
                            parent.sizcache = doneName
                        }
                        var diff = elem.nodeIndex - last;
                        if (first === 0) {
                            return diff === 0
                        } else {
                            return (diff % first === 0 && diff / first >= 0)
                        }
                    }
                }, ID: function (elem, match) {
                    return elem.nodeType === 1 && elem.getAttribute("id") === match
                }, TAG: function (elem, match) {
                    return (match === "*" && elem.nodeType === 1) || elem.nodeName.toLowerCase() === match
                }, CLASS: function (elem, match) {
                    return (" " + (elem.className || elem.getAttribute("class")) + " ").indexOf(match) > -1
                }, ATTR: function (elem, match) {
                    var name = match[1],
                        result = Expr.attrHandle[name] ? Expr.attrHandle[name](elem) : elem[name] != null ? elem[name] : elem.getAttribute(name),
                        value = result + "",
                        type = match[2],
                        check = match[4];
                    return result == null ? type === "!=" : type === "=" ? value === check : type === "*=" ? value.indexOf(check) >= 0 : type === "~=" ? (" " + value + " ").indexOf(check) >= 0 : !check ? value && result !== false : type === "!=" ? value !== check : type === "^=" ? value.indexOf(check) === 0 : type === "$=" ? value.substr(value.length - check.length) === check : type === "|=" ? value === check || value.substr(0, check.length + 1) === check + "-" : false
                }, POS: function (elem, match, i, array) {
                    var name = match[2],
                        filter = Expr.setFilters[name];
                    if (filter) {
                        return filter(elem, i, match, array)
                    }
                }
            }
        };
        var origPOS = Expr.match.POS;
        for (var type in Expr.match) {
            Expr.match[type] = new RegExp(Expr.match[type].source + /(?![^\[]*\])(?![^\(]*\))/.source);
            Expr.leftMatch[type] = new RegExp(/(^(?:.|\r|\n)*?)/.source + Expr.match[type].source)
        }
        var makeArray = function (array, results) {
            array = Array.prototype.slice.call(array, 0);
            if (results) {
                results.push.apply(results, array);
                return results
            }
            return array
        };
        try {
            Array.prototype.slice.call(document.documentElement.childNodes, 0)
        } catch (e) {
            makeArray = function (array, results) {
                var ret = results || [];
                if (toString.call(array) === "[object Array]") {
                    Array.prototype.push.apply(ret, array)
                } else {
                    if (typeof array.length === "number") {
                        for (var i = 0, l = array.length; i < l; i++) {
                            ret.push(array[i])
                        }
                    } else {
                        for (var i = 0; array[i]; i++) {
                            ret.push(array[i])
                        }
                    }
                }
                return ret
            }
        }
        var sortOrder;
        if (document.documentElement.compareDocumentPosition) {
            sortOrder = function (a, b) {
                if (!a.compareDocumentPosition || !b.compareDocumentPosition) {
                    if (a == b) {
                        hasDuplicate = true
                    }
                    return a.compareDocumentPosition ? -1 : 1
                }
                var ret = a.compareDocumentPosition(b) & 4 ? -1 : a === b ? 0 : 1;
                if (ret === 0) {
                    hasDuplicate = true
                }
                return ret
            }
        } else {
            if ("sourceIndex" in document.documentElement) {
                sortOrder = function (a, b) {
                    if (!a.sourceIndex || !b.sourceIndex) {
                        if (a == b) {
                            hasDuplicate = true
                        }
                        return a.sourceIndex ? -1 : 1
                    }
                    var ret = a.sourceIndex - b.sourceIndex;
                    if (ret === 0) {
                        hasDuplicate = true
                    }
                    return ret
                }
            } else {
                if (document.createRange) {
                    sortOrder = function (a, b) {
                        if (!a.ownerDocument || !b.ownerDocument) {
                            if (a == b) {
                                hasDuplicate = true
                            }
                            return a.ownerDocument ? -1 : 1
                        }
                        var aRange = a.ownerDocument.createRange(),
                            bRange = b.ownerDocument.createRange();
                        aRange.setStart(a, 0);
                        aRange.setEnd(a, 0);
                        bRange.setStart(b, 0);
                        bRange.setEnd(b, 0);
                        var ret = aRange.compareBoundaryPoints(Range.START_TO_END, bRange);
                        if (ret === 0) {
                            hasDuplicate = true
                        }
                        return ret
                    }
                }
            }
        }
        function getText(elems) {
            var ret = "",
                elem;
            for (var i = 0; elems[i]; i++) {
                elem = elems[i];
                if (elem.nodeType === 3 || elem.nodeType === 4) {
                    ret += elem.nodeValue
                } else {
                    if (elem.nodeType !== 8) {
                        ret += getText(elem.childNodes)
                    }
                }
            }
            return ret
        }(function () {
            var form = document.createElement("div"),
                id = "script" + (new Date).getTime();
            form.innerHTML = "<a name='" + id + "'/>";
            var root = document.documentElement;
            root.insertBefore(form, root.firstChild);
            if (document.getElementById(id)) {
                Expr.find.ID = function (match, context, isXML) {
                    if (typeof context.getElementById !== "undefined" && !isXML) {
                        var m = context.getElementById(match[1]);
                        return m ? m.id === match[1] || typeof m.getAttributeNode !== "undefined" && m.getAttributeNode("id").nodeValue === match[1] ? [m] : undefined : []
                    }
                };
                Expr.filter.ID = function (elem, match) {
                    var node = typeof elem.getAttributeNode !== "undefined" && elem.getAttributeNode("id");
                    return elem.nodeType === 1 && node && node.nodeValue === match
                }
            }
            root.removeChild(form);
            root = form = null
        })();
        (function () {
            var div = document.createElement("div");
            div.appendChild(document.createComment(""));
            if (div.getElementsByTagName("*").length > 0) {
                Expr.find.TAG = function (match, context) {
                    var results = context.getElementsByTagName(match[1]);
                    if (match[1] === "*") {
                        var tmp = [];
                        for (var i = 0; results[i]; i++) {
                            if (results[i].nodeType === 1) {
                                tmp.push(results[i])
                            }
                        }
                        results = tmp
                    }
                    return results
                }
            }
            div.innerHTML = "<a href='#'></a>";
            if (div.firstChild && typeof div.firstChild.getAttribute !== "undefined" && div.firstChild.getAttribute("href") !== "#") {
                Expr.attrHandle.href = function (elem) {
                    return elem.getAttribute("href", 2)
                }
            }
            div = null
        })();
        if (document.querySelectorAll) {
            (function () {
                var oldSizzle = Sizzle,
                    div = document.createElement("div");
                div.innerHTML = "<p class='TEST'></p>";
                if (div.querySelectorAll && div.querySelectorAll(".TEST").length === 0) {
                    return
                }
                Sizzle = function (query, context, extra, seed) {
                    context = context || document;
                    if (!seed && context.nodeType === 9 && !isXML(context)) {
                        try {
                            return makeArray(context.querySelectorAll(query), extra)
                        } catch (e) {}
                    }
                    return oldSizzle(query, context, extra, seed)
                };
                for (var prop in oldSizzle) {
                    Sizzle[prop] = oldSizzle[prop]
                }
                div = null
            })()
        }(function () {
            var div = document.createElement("div");
            div.innerHTML = "<div class='test e'></div><div class='test'></div>";
            if (!div.getElementsByClassName || div.getElementsByClassName("e").length === 0) {
                return
            }
            div.lastChild.className = "e";
            if (div.getElementsByClassName("e").length === 1) {
                return
            }
            Expr.order.splice(1, 0, "CLASS");
            Expr.find.CLASS = function (match, context, isXML) {
                if (typeof context.getElementsByClassName !== "undefined" && !isXML) {
                    return context.getElementsByClassName(match[1])
                }
            };
            div = null
        })();

        function dirNodeCheck(dir, cur, doneName, checkSet, nodeCheck, isXML) {
            for (var i = 0, l = checkSet.length; i < l; i++) {
                var elem = checkSet[i];
                if (elem) {
                    elem = elem[dir];
                    var match = false;
                    while (elem) {
                        if (elem.sizcache === doneName) {
                            match = checkSet[elem.sizset];
                            break
                        }
                        if (elem.nodeType === 1 && !isXML) {
                            elem.sizcache = doneName;
                            elem.sizset = i
                        }
                        if (elem.nodeName.toLowerCase() === cur) {
                            match = elem;
                            break
                        }
                        elem = elem[dir]
                    }
                    checkSet[i] = match
                }
            }
        }
        function dirCheck(dir, cur, doneName, checkSet, nodeCheck, isXML) {
            for (var i = 0, l = checkSet.length; i < l; i++) {
                var elem = checkSet[i];
                if (elem) {
                    elem = elem[dir];
                    var match = false;
                    while (elem) {
                        if (elem.sizcache === doneName) {
                            match = checkSet[elem.sizset];
                            break
                        }
                        if (elem.nodeType === 1) {
                            if (!isXML) {
                                elem.sizcache = doneName;
                                elem.sizset = i
                            }
                            if (typeof cur !== "string") {
                                if (elem === cur) {
                                    match = true;
                                    break
                                }
                            } else {
                                if (Sizzle.filter(cur, [elem]).length > 0) {
                                    match = elem;
                                    break
                                }
                            }
                        }
                        elem = elem[dir]
                    }
                    checkSet[i] = match
                }
            }
        }
        var contains = document.compareDocumentPosition ?
        function (a, b) {
            return a.compareDocumentPosition(b) & 16
        } : function (a, b) {
            return a !== b && (a.contains ? a.contains(b) : true)
        };
        var isXML = function (elem) {
            var documentElement = (elem ? elem.ownerDocument || elem : 0).documentElement;
            return documentElement ? documentElement.nodeName !== "HTML" : false
        };
        var posProcess = function (selector, context) {
            var tmpSet = [],
                later = "",
                match, root = context.nodeType ? [context] : context;
            while ((match = Expr.match.PSEUDO.exec(selector))) {
                later += match[0];
                selector = selector.replace(Expr.match.PSEUDO, "")
            }
            selector = Expr.relative[selector] ? selector + "*" : selector;
            for (var i = 0, l = root.length; i < l; i++) {
                Sizzle(selector, root[i], tmpSet)
            }
            return Sizzle.filter(later, tmpSet)
        };
        return Sizzle
    })();
/*
 * SWFObject v2.1 <http://code.google.com/p/swfobject/>
 * Copyright (c) 2007-2008 Geoff Stearns, Michael Williams, and Bobby van der Sluis
 * This software is released under the MIT License <http://www.opensource.org/licenses/mit-license.php>
 *
 * Modified for inclusion in Shadowbox.js
 */
    S.flash = (function () {
        var swfobject = function () {
            var UNDEF = "undefined",
                OBJECT = "object",
                SHOCKWAVE_FLASH = "Shockwave Flash",
                SHOCKWAVE_FLASH_AX = "ShockwaveFlash.ShockwaveFlash",
                FLASH_MIME_TYPE = "application/x-shockwave-flash",
                EXPRESS_INSTALL_ID = "SWFObjectExprInst",
                win = window,
                doc = document,
                nav = navigator,
                domLoadFnArr = [],
                regObjArr = [],
                objIdArr = [],
                listenersArr = [],
                script, timer = null,
                storedAltContent = null,
                storedAltContentId = null,
                isDomLoaded = false,
                isExpressInstallActive = false;
            var ua = function () {
                var w3cdom = typeof doc.getElementById != UNDEF && typeof doc.getElementsByTagName != UNDEF && typeof doc.createElement != UNDEF,
                    playerVersion = [0, 0, 0],
                    d = null;
                if (typeof nav.plugins != UNDEF && typeof nav.plugins[SHOCKWAVE_FLASH] == OBJECT) {
                    d = nav.plugins[SHOCKWAVE_FLASH].description;
                    if (d && !(typeof nav.mimeTypes != UNDEF && nav.mimeTypes[FLASH_MIME_TYPE] && !nav.mimeTypes[FLASH_MIME_TYPE].enabledPlugin)) {
                        d = d.replace(/^.*\s+(\S+\s+\S+$)/, "$1");
                        playerVersion[0] = parseInt(d.replace(/^(.*)\..*$/, "$1"), 10);
                        playerVersion[1] = parseInt(d.replace(/^.*\.(.*)\s.*$/, "$1"), 10);
                        playerVersion[2] = /r/.test(d) ? parseInt(d.replace(/^.*r(.*)$/, "$1"), 10) : 0
                    }
                } else {
                    if (typeof win.ActiveXObject != UNDEF) {
                        var a = null,
                            fp6Crash = false;
                        try {
                            a = new ActiveXObject(SHOCKWAVE_FLASH_AX + ".7")
                        } catch (e) {
                            try {
                                a = new ActiveXObject(SHOCKWAVE_FLASH_AX + ".6");
                                playerVersion = [6, 0, 21];
                                a.AllowScriptAccess = "always"
                            } catch (e) {
                                if (playerVersion[0] == 6) {
                                    fp6Crash = true
                                }
                            }
                            if (!fp6Crash) {
                                try {
                                    a = new ActiveXObject(SHOCKWAVE_FLASH_AX)
                                } catch (e) {}
                            }
                        }
                        if (!fp6Crash && a) {
                            try {
                                d = a.GetVariable("$version");
                                if (d) {
                                    d = d.split(" ")[1].split(",");
                                    playerVersion = [parseInt(d[0], 10), parseInt(d[1], 10), parseInt(d[2], 10)]
                                }
                            } catch (e) {}
                        }
                    }
                }
                var u = nav.userAgent.toLowerCase(),
                    p = nav.platform.toLowerCase(),
                    webkit = /webkit/.test(u) ? parseFloat(u.replace(/^.*webkit\/(\d+(\.\d+)?).*$/, "$1")) : false,
                    ie = false,
                    windows = p ? /win/.test(p) : /win/.test(u),
                    mac = p ? /mac/.test(p) : /mac/.test(u);
/*@cc_on
			ie = true;
			@if (@_win32)
				windows = true;
			@elif (@_mac)
				mac = true;
			@end
		@*/
                return {
                    w3cdom: w3cdom,
                    pv: playerVersion,
                    webkit: webkit,
                    ie: ie,
                    win: windows,
                    mac: mac
                }
            }();
            var onDomLoad = function () {
                if (!ua.w3cdom) {
                    return
                }
                addDomLoadEvent(main);
                if (ua.ie && ua.win) {
                    try {
                        doc.write("<script id=__ie_ondomload defer=true src=//:><\/script>");
                        script = getElementById("__ie_ondomload");
                        if (script) {
                            addListener(script, "onreadystatechange", checkReadyState)
                        }
                    } catch (e) {}
                }
                if (ua.webkit && typeof doc.readyState != UNDEF) {
                    timer = setInterval(function () {
                        if (/loaded|complete/.test(doc.readyState)) {
                            callDomLoadFunctions()
                        }
                    }, 10)
                }
                if (typeof doc.addEventListener != UNDEF) {
                    doc.addEventListener("DOMContentLoaded", callDomLoadFunctions, null)
                }
                addLoadEvent(callDomLoadFunctions)
            }();

            function checkReadyState() {
                if (script.readyState == "complete") {
                    script.parentNode.removeChild(script);
                    callDomLoadFunctions()
                }
            }
            function callDomLoadFunctions() {
                if (isDomLoaded) {
                    return
                }
                if (ua.ie && ua.win) {
                    var s = createElement("span");
                    try {
                        var t = doc.getElementsByTagName("body")[0].appendChild(s);
                        t.parentNode.removeChild(t)
                    } catch (e) {
                        return
                    }
                }
                isDomLoaded = true;
                if (timer) {
                    clearInterval(timer);
                    timer = null
                }
                var dl = domLoadFnArr.length;
                for (var i = 0; i < dl; i++) {
                    domLoadFnArr[i]()
                }
            }
            function addDomLoadEvent(fn) {
                if (isDomLoaded) {
                    fn()
                } else {
                    domLoadFnArr[domLoadFnArr.length] = fn
                }
            }
            function addLoadEvent(fn) {
                if (typeof win.addEventListener != UNDEF) {
                    win.addEventListener("load", fn, false)
                } else {
                    if (typeof doc.addEventListener != UNDEF) {
                        doc.addEventListener("load", fn, false)
                    } else {
                        if (typeof win.attachEvent != UNDEF) {
                            addListener(win, "onload", fn)
                        } else {
                            if (typeof win.onload == "function") {
                                var fnOld = win.onload;
                                win.onload = function () {
                                    fnOld();
                                    fn()
                                }
                            } else {
                                win.onload = fn
                            }
                        }
                    }
                }
            }
            function main() {
                var rl = regObjArr.length;
                for (var i = 0; i < rl; i++) {
                    var id = regObjArr[i].id;
                    if (ua.pv[0] > 0) {
                        var obj = getElementById(id);
                        if (obj) {
                            regObjArr[i].width = obj.getAttribute("width") ? obj.getAttribute("width") : "0";
                            regObjArr[i].height = obj.getAttribute("height") ? obj.getAttribute("height") : "0";
                            if (hasPlayerVersion(regObjArr[i].swfVersion)) {
                                if (ua.webkit && ua.webkit < 312) {
                                    fixParams(obj)
                                }
                                setVisibility(id, true)
                            } else {
                                if (regObjArr[i].expressInstall && !isExpressInstallActive && hasPlayerVersion("6.0.65") && (ua.win || ua.mac)) {
                                    showExpressInstall(regObjArr[i])
                                } else {
                                    displayAltContent(obj)
                                }
                            }
                        }
                    } else {
                        setVisibility(id, true)
                    }
                }
            }
            function fixParams(obj) {
                var nestedObj = obj.getElementsByTagName(OBJECT)[0];
                if (nestedObj) {
                    var e = createElement("embed"),
                        a = nestedObj.attributes;
                    if (a) {
                        var al = a.length;
                        for (var i = 0; i < al; i++) {
                            if (a[i].nodeName == "DATA") {
                                e.setAttribute("src", a[i].nodeValue)
                            } else {
                                e.setAttribute(a[i].nodeName, a[i].nodeValue)
                            }
                        }
                    }
                    var c = nestedObj.childNodes;
                    if (c) {
                        var cl = c.length;
                        for (var j = 0; j < cl; j++) {
                            if (c[j].nodeType == 1 && c[j].nodeName == "PARAM") {
                                e.setAttribute(c[j].getAttribute("name"), c[j].getAttribute("value"))
                            }
                        }
                    }
                    obj.parentNode.replaceChild(e, obj)
                }
            }
            function showExpressInstall(regObj) {
                isExpressInstallActive = true;
                var obj = getElementById(regObj.id);
                if (obj) {
                    if (regObj.altContentId) {
                        var ac = getElementById(regObj.altContentId);
                        if (ac) {
                            storedAltContent = ac;
                            storedAltContentId = regObj.altContentId
                        }
                    } else {
                        storedAltContent = abstractAltContent(obj)
                    }
                    if (!(/%$/.test(regObj.width)) && parseInt(regObj.width, 10) < 310) {
                        regObj.width = "310"
                    }
                    if (!(/%$/.test(regObj.height)) && parseInt(regObj.height, 10) < 137) {
                        regObj.height = "137"
                    }
                    doc.title = doc.title.slice(0, 47) + " - Flash Player Installation";
                    var pt = ua.ie && ua.win ? "ActiveX" : "PlugIn",
                        dt = doc.title,
                        fv = "MMredirectURL=" + win.location + "&MMplayerType=" + pt + "&MMdoctitle=" + dt,
                        replaceId = regObj.id;
                    if (ua.ie && ua.win && obj.readyState != 4) {
                        var newObj = createElement("div");
                        replaceId += "SWFObjectNew";
                        newObj.setAttribute("id", replaceId);
                        obj.parentNode.insertBefore(newObj, obj);
                        obj.style.display = "none";
                        var fn = function () {
                            obj.parentNode.removeChild(obj)
                        };
                        addListener(win, "onload", fn)
                    }
                    createSWF({
                        data: regObj.expressInstall,
                        id: EXPRESS_INSTALL_ID,
                        width: regObj.width,
                        height: regObj.height
                    }, {
                        flashvars: fv
                    }, replaceId)
                }
            }
            function displayAltContent(obj) {
                if (ua.ie && ua.win && obj.readyState != 4) {
                    var el = createElement("div");
                    obj.parentNode.insertBefore(el, obj);
                    el.parentNode.replaceChild(abstractAltContent(obj), el);
                    obj.style.display = "none";
                    var fn = function () {
                        obj.parentNode.removeChild(obj)
                    };
                    addListener(win, "onload", fn)
                } else {
                    obj.parentNode.replaceChild(abstractAltContent(obj), obj)
                }
            }
            function abstractAltContent(obj) {
                var ac = createElement("div");
                if (ua.win && ua.ie) {
                    ac.innerHTML = obj.innerHTML
                } else {
                    var nestedObj = obj.getElementsByTagName(OBJECT)[0];
                    if (nestedObj) {
                        var c = nestedObj.childNodes;
                        if (c) {
                            var cl = c.length;
                            for (var i = 0; i < cl; i++) {
                                if (!(c[i].nodeType == 1 && c[i].nodeName == "PARAM") && !(c[i].nodeType == 8)) {
                                    ac.appendChild(c[i].cloneNode(true))
                                }
                            }
                        }
                    }
                }
                return ac
            }
            function createSWF(attObj, parObj, id) {
                var r, el = getElementById(id);
                if (el) {
                    if (typeof attObj.id == UNDEF) {
                        attObj.id = id
                    }
                    if (ua.ie && ua.win) {
                        var att = "";
                        for (var i in attObj) {
                            if (attObj[i] != Object.prototype[i]) {
                                if (i.toLowerCase() == "data") {
                                    parObj.movie = attObj[i]
                                } else {
                                    if (i.toLowerCase() == "styleclass") {
                                        att += ' class="' + attObj[i] + '"'
                                    } else {
                                        if (i.toLowerCase() != "classid") {
                                            att += " " + i + '="' + attObj[i] + '"'
                                        }
                                    }
                                }
                            }
                        }
                        var par = "";
                        for (var j in parObj) {
                            if (parObj[j] != Object.prototype[j]) {
                                par += '<param name="' + j + '" value="' + parObj[j] + '" />'
                            }
                        }
                        el.outerHTML = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"' + att + ">" + par + "</object>";
                        objIdArr[objIdArr.length] = attObj.id;
                        r = getElementById(attObj.id)
                    } else {
                        if (ua.webkit && ua.webkit < 312) {
                            var e = createElement("embed");
                            e.setAttribute("type", FLASH_MIME_TYPE);
                            for (var k in attObj) {
                                if (attObj[k] != Object.prototype[k]) {
                                    if (k.toLowerCase() == "data") {
                                        e.setAttribute("src", attObj[k])
                                    } else {
                                        if (k.toLowerCase() == "styleclass") {
                                            e.setAttribute("class", attObj[k])
                                        } else {
                                            if (k.toLowerCase() != "classid") {
                                                e.setAttribute(k, attObj[k])
                                            }
                                        }
                                    }
                                }
                            }
                            for (var l in parObj) {
                                if (parObj[l] != Object.prototype[l]) {
                                    if (l.toLowerCase() != "movie") {
                                        e.setAttribute(l, parObj[l])
                                    }
                                }
                            }
                            el.parentNode.replaceChild(e, el);
                            r = e
                        } else {
                            var o = createElement(OBJECT);
                            o.setAttribute("type", FLASH_MIME_TYPE);
                            for (var m in attObj) {
                                if (attObj[m] != Object.prototype[m]) {
                                    if (m.toLowerCase() == "styleclass") {
                                        o.setAttribute("class", attObj[m])
                                    } else {
                                        if (m.toLowerCase() != "classid") {
                                            o.setAttribute(m, attObj[m])
                                        }
                                    }
                                }
                            }
                            for (var n in parObj) {
                                if (parObj[n] != Object.prototype[n] && n.toLowerCase() != "movie") {
                                    createObjParam(o, n, parObj[n])
                                }
                            }
                            el.parentNode.replaceChild(o, el);
                            r = o
                        }
                    }
                }
                return r
            }
            function createObjParam(el, pName, pValue) {
                var p = createElement("param");
                p.setAttribute("name", pName);
                p.setAttribute("value", pValue);
                el.appendChild(p)
            }
            function removeSWF(id) {
                var obj = getElementById(id);
                if (obj && (obj.nodeName == "OBJECT" || obj.nodeName == "EMBED")) {
                    if (ua.ie && ua.win) {
                        if (obj.readyState == 4) {
                            removeObjectInIE(id)
                        } else {
                            win.attachEvent("onload", function () {
                                removeObjectInIE(id)
                            })
                        }
                    } else {
                        obj.parentNode.removeChild(obj)
                    }
                }
            }
            function removeObjectInIE(id) {
                var obj = getElementById(id);
                if (obj) {
                    for (var i in obj) {
                        if (typeof obj[i] == "function") {
                            obj[i] = null
                        }
                    }
                    obj.parentNode.removeChild(obj)
                }
            }
            function getElementById(id) {
                var el = null;
                try {
                    el = doc.getElementById(id)
                } catch (e) {}
                return el
            }
            function createElement(el) {
                return doc.createElement(el)
            }
            function addListener(target, eventType, fn) {
                target.attachEvent(eventType, fn);
                listenersArr[listenersArr.length] = [target, eventType, fn]
            }
            function hasPlayerVersion(rv) {
                var pv = ua.pv,
                    v = rv.split(".");
                v[0] = parseInt(v[0], 10);
                v[1] = parseInt(v[1], 10) || 0;
                v[2] = parseInt(v[2], 10) || 0;
                return (pv[0] > v[0] || (pv[0] == v[0] && pv[1] > v[1]) || (pv[0] == v[0] && pv[1] == v[1] && pv[2] >= v[2])) ? true : false
            }
            function createCSS(sel, decl) {
                if (ua.ie && ua.mac) {
                    return
                }
                var h = doc.getElementsByTagName("head")[0],
                    s = createElement("style");
                s.setAttribute("type", "text/css");
                s.setAttribute("media", "screen");
                if (!(ua.ie && ua.win) && typeof doc.createTextNode != UNDEF) {
                    s.appendChild(doc.createTextNode(sel + " {" + decl + "}"))
                }
                h.appendChild(s);
                if (ua.ie && ua.win && typeof doc.styleSheets != UNDEF && doc.styleSheets.length > 0) {
                    var ls = doc.styleSheets[doc.styleSheets.length - 1];
                    if (typeof ls.addRule == OBJECT) {
                        ls.addRule(sel, decl)
                    }
                }
            }
            function setVisibility(id, isVisible) {
                var v = isVisible ? "visible" : "hidden";
                if (isDomLoaded && getElementById(id)) {
                    getElementById(id).style.visibility = v
                } else {
                    createCSS("#" + id, "visibility:" + v)
                }
            }
            function urlEncodeIfNecessary(s) {
                var regex = /[\\\"<>\.;]/;
                var hasBadChars = regex.exec(s) != null;
                return hasBadChars ? encodeURIComponent(s) : s
            }
            var cleanup = function () {
                if (ua.ie && ua.win) {
                    window.attachEvent("onunload", function () {
                        var ll = listenersArr.length;
                        for (var i = 0; i < ll; i++) {
                            listenersArr[i][0].detachEvent(listenersArr[i][1], listenersArr[i][2])
                        }
                        var il = objIdArr.length;
                        for (var j = 0; j < il; j++) {
                            removeSWF(objIdArr[j])
                        }
                        for (var k in ua) {
                            ua[k] = null
                        }
                        ua = null;
                        for (var l in swfobject) {
                            swfobject[l] = null
                        }
                        swfobject = null
                    })
                }
            }();
            return {
                registerObject: function (objectIdStr, swfVersionStr, xiSwfUrlStr) {
                    if (!ua.w3cdom || !objectIdStr || !swfVersionStr) {
                        return
                    }
                    var regObj = {};
                    regObj.id = objectIdStr;
                    regObj.swfVersion = swfVersionStr;
                    regObj.expressInstall = xiSwfUrlStr ? xiSwfUrlStr : false;
                    regObjArr[regObjArr.length] = regObj;
                    setVisibility(objectIdStr, false)
                }, getObjectById: function (objectIdStr) {
                    var r = null;
                    if (ua.w3cdom) {
                        var o = getElementById(objectIdStr);
                        if (o) {
                            var n = o.getElementsByTagName(OBJECT)[0];
                            if (!n || (n && typeof o.SetVariable != UNDEF)) {
                                r = o
                            } else {
                                if (typeof n.SetVariable != UNDEF) {
                                    r = n
                                }
                            }
                        }
                    }
                    return r
                }, embedSWF: function (swfUrlStr, replaceElemIdStr, widthStr, heightStr, swfVersionStr, xiSwfUrlStr, flashvarsObj, parObj, attObj) {
                    if (!ua.w3cdom || !swfUrlStr || !replaceElemIdStr || !widthStr || !heightStr || !swfVersionStr) {
                        return
                    }
                    widthStr += "";
                    heightStr += "";
                    if (hasPlayerVersion(swfVersionStr)) {
                        setVisibility(replaceElemIdStr, false);
                        var att = {};
                        if (attObj && typeof attObj === OBJECT) {
                            for (var i in attObj) {
                                if (attObj[i] != Object.prototype[i]) {
                                    att[i] = attObj[i]
                                }
                            }
                        }
                        att.data = swfUrlStr;
                        att.width = widthStr;
                        att.height = heightStr;
                        var par = {};
                        if (parObj && typeof parObj === OBJECT) {
                            for (var j in parObj) {
                                if (parObj[j] != Object.prototype[j]) {
                                    par[j] = parObj[j]
                                }
                            }
                        }
                        if (flashvarsObj && typeof flashvarsObj === OBJECT) {
                            for (var k in flashvarsObj) {
                                if (flashvarsObj[k] != Object.prototype[k]) {
                                    if (typeof par.flashvars != UNDEF) {
                                        par.flashvars += "&" + k + "=" + flashvarsObj[k]
                                    } else {
                                        par.flashvars = k + "=" + flashvarsObj[k]
                                    }
                                }
                            }
                        }
                        addDomLoadEvent(function () {
                            createSWF(att, par, replaceElemIdStr);
                            if (att.id == replaceElemIdStr) {
                                setVisibility(replaceElemIdStr, true)
                            }
                        })
                    } else {
                        if (xiSwfUrlStr && !isExpressInstallActive && hasPlayerVersion("6.0.65") && (ua.win || ua.mac)) {
                            isExpressInstallActive = true;
                            setVisibility(replaceElemIdStr, false);
                            addDomLoadEvent(function () {
                                var regObj = {};
                                regObj.id = regObj.altContentId = replaceElemIdStr;
                                regObj.width = widthStr;
                                regObj.height = heightStr;
                                regObj.expressInstall = xiSwfUrlStr;
                                showExpressInstall(regObj)
                            })
                        }
                    }
                }, getFlashPlayerVersion: function () {
                    return {
                        major: ua.pv[0],
                        minor: ua.pv[1],
                        release: ua.pv[2]
                    }
                }, hasFlashPlayerVersion: hasPlayerVersion,
                createSWF: function (attObj, parObj, replaceElemIdStr) {
                    if (ua.w3cdom) {
                        return createSWF(attObj, parObj, replaceElemIdStr)
                    } else {
                        return undefined
                    }
                }, removeSWF: function (objElemIdStr) {
                    if (ua.w3cdom) {
                        removeSWF(objElemIdStr)
                    }
                }, createCSS: function (sel, decl) {
                    if (ua.w3cdom) {
                        createCSS(sel, decl)
                    }
                }, addDomLoadEvent: addDomLoadEvent,
                addLoadEvent: addLoadEvent,
                getQueryParamValue: function (param) {
                    var q = doc.location.search || doc.location.hash;
                    if (param == null) {
                        return urlEncodeIfNecessary(q)
                    }
                    if (q) {
                        var pairs = q.substring(1).split("&");
                        for (var i = 0; i < pairs.length; i++) {
                            if (pairs[i].substring(0, pairs[i].indexOf("=")) == param) {
                                return urlEncodeIfNecessary(pairs[i].substring((pairs[i].indexOf("=") + 1)))
                            }
                        }
                    }
                    return ""
                }, expressInstallCallback: function () {
                    if (isExpressInstallActive && storedAltContent) {
                        var obj = getElementById(EXPRESS_INSTALL_ID);
                        if (obj) {
                            obj.parentNode.replaceChild(storedAltContent, obj);
                            if (storedAltContentId) {
                                setVisibility(storedAltContentId, true);
                                if (ua.ie && ua.win) {
                                    storedAltContent.style.display = "block"
                                }
                            }
                            storedAltContent = null;
                            storedAltContentId = null;
                            isExpressInstallActive = false
                        }
                    }
                }
            }
        }();
        return swfobject
    })();
    S.lang = {
        code: "en",
        of: "of",
        loading: "loading",
        cancel: "Cancel",
        next: "Next",
        previous: "Previous",
        play: "Play",
        pause: "Pause",
        close: "Close",
        errors: {
            single: 'You must install the <a href="{0}">{1}</a> browser plugin to view this content.',
            shared: 'You must install both the <a href="{0}">{1}</a> and <a href="{2}">{3}</a> browser plugins to view this content.',
            either: 'You must install either the <a href="{0}">{1}</a> or the <a href="{2}">{3}</a> browser plugin to view this content.'
        }
    };
    var pre, proxyId = "sb-drag-proxy",
        dragData, dragProxy, dragTarget;

    function resetDrag() {
        dragData = {
            x: 0,
            y: 0,
            startX: null,
            startY: null
        }
    }
    function updateProxy() {
        var dims = S.dimensions;
        apply(dragProxy.style, {
            height: dims.innerHeight + "px",
            width: dims.innerWidth + "px"
        })
    }
    function enableDrag() {
        resetDrag();
        var style = ["position:absolute", "cursor:" + (S.isGecko ? "-moz-grab" : "move"), "background-color:" + (S.isIE ? "#fff;filter:alpha(opacity=0)" : "transparent")].join(";");
        S.appendHTML(S.skin.body, '<div id="' + proxyId + '" style="' + style + '"></div>');
        dragProxy = get(proxyId);
        updateProxy();
        addEvent(dragProxy, "mousedown", startDrag)
    }
    function disableDrag() {
        if (dragProxy) {
            removeEvent(dragProxy, "mousedown", startDrag);
            remove(dragProxy);
            dragProxy = null
        }
        dragTarget = null
    }
    function startDrag(e) {
        preventDefault(e);
        var xy = getPageXY(e);
        dragData.startX = xy[0];
        dragData.startY = xy[1];
        dragTarget = get(S.player.id);
        addEvent(document, "mousemove", positionDrag);
        addEvent(document, "mouseup", endDrag);
        if (S.isGecko) {
            dragProxy.style.cursor = "-moz-grabbing"
        }
    }
    function positionDrag(e) {
        var player = S.player,
            dims = S.dimensions,
            xy = getPageXY(e);
        var moveX = xy[0] - dragData.startX;
        dragData.startX += moveX;
        dragData.x = Math.max(Math.min(0, dragData.x + moveX), dims.innerWidth - player.width);
        var moveY = xy[1] - dragData.startY;
        dragData.startY += moveY;
        dragData.y = Math.max(Math.min(0, dragData.y + moveY), dims.innerHeight - player.height);
        apply(dragTarget.style, {
            left: dragData.x + "px",
            top: dragData.y + "px"
        })
    }
    function endDrag() {
        removeEvent(document, "mousemove", positionDrag);
        removeEvent(document, "mouseup", endDrag);
        if (S.isGecko) {
            dragProxy.style.cursor = "-moz-grab"
        }
    }
    S.img = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.ready = false;
        var self = this;
        pre = new Image();
        pre.onload = function () {
            self.height = obj.height ? parseInt(obj.height, 10) : pre.height;
            self.width = obj.width ? parseInt(obj.width, 10) : pre.width;
            self.ready = true;
            pre.onload = null;
            pre = null
        };
        pre.src = obj.content
    };
    S.img.ext = ["bmp", "gif", "jpg", "jpeg", "png"];
    S.img.prototype = {
        append: function (body, dims) {
            var img = document.createElement("img");
            img.id = this.id;
            img.src = this.obj.content;
            img.style.position = "absolute";
            var height, width;
            if (dims.oversized && S.options.handleOversize == "resize") {
                height = dims.innerHeight;
                width = dims.innerWidth
            } else {
                height = this.height;
                width = this.width
            }
            img.setAttribute("height", height);
            img.setAttribute("width", width);
            body.appendChild(img)
        }, remove: function () {
            var el = get(this.id);
            if (el) {
                remove(el)
            }
            disableDrag();
            if (pre) {
                pre.onload = null;
                pre = null
            }
        }, onLoad: function () {
            var dims = S.dimensions;
            if (dims.oversized && S.options.handleOversize == "drag") {
                enableDrag()
            }
        }, onWindowResize: function () {
            var dims = S.dimensions;
            switch (S.options.handleOversize) {
            case "resize":
                var el = get(this.id);
                el.height = dims.innerHeight;
                el.width = dims.innerWidth;
                break;
            case "drag":
                if (dragTarget) {
                    var top = parseInt(S.getStyle(dragTarget, "top")),
                        left = parseInt(S.getStyle(dragTarget, "left"));
                    if (top + this.height < dims.innerHeight) {
                        dragTarget.style.top = dims.innerHeight - this.height + "px"
                    }
                    if (left + this.width < dims.innerWidth) {
                        dragTarget.style.left = dims.innerWidth - this.width + "px"
                    }
                    updateProxy()
                }
                break
            }
        }
    };
    S.iframe = function (obj, id) {
        this.obj = obj;
        this.id = id;
        var overlay = get("sb-overlay");
        this.height = obj.height ? parseInt(obj.height, 10) : overlay.offsetHeight;
        this.width = obj.width ? parseInt(obj.width, 10) : overlay.offsetWidth
    };
    S.iframe.prototype = {
        append: function (body, dims) {
            var html = '<iframe id="' + this.id + '" name="' + this.id + '" height="100%" width="100%" frameborder="0" marginwidth="0" marginheight="0" style="visibility:hidden" onload="this.style.visibility=\'visible\'" scrolling="auto"';
            if (S.isIE) {
                html += ' allowtransparency="true"';
                if (S.isIE6) {
                    html += " src=\"javascript:false;document.write('');\""
                }
            }
            html += "></iframe>";
            body.innerHTML = html
        }, remove: function () {
            var el = get(this.id);
            if (el) {
                remove(el);
                if (S.isGecko) {
                    delete window.frames[this.id]
                }
            }
        }, onLoad: function () {
            var win = S.isIE ? get(this.id).contentWindow : window.frames[this.id];
            win.location.href = this.obj.content
        }
    };
    S.html = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.height = obj.height ? parseInt(obj.height, 10) : 300;
        this.width = obj.width ? parseInt(obj.width, 10) : 500
    };
    S.html.prototype = {
        append: function (body, dims) {
            var div = document.createElement("div");
            div.id = this.id;
            div.className = "html";
            div.innerHTML = this.obj.content;
            body.appendChild(div)
        }, remove: function () {
            var el = get(this.id);
            if (el) {
                remove(el)
            }
        }
    };
    S.swf = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.height = obj.height ? parseInt(obj.height, 10) : 300;
        this.width = obj.width ? parseInt(obj.width, 10) : 300
    };
    S.swf.ext = ["swf"];
    S.swf.prototype = {
        append: function (body, dims) {
            var tmp = document.createElement("div");
            tmp.id = this.id;
            body.appendChild(tmp);
            var height = dims.innerHeight,
                width = dims.innerWidth,
                swf = this.obj.content,
                version = S.options.flashVersion,
                express = S.path + "expressInstall.swf",
                flashvars = S.options.flashVars,
                params = S.options.flashParams;
            S.flash.embedSWF(swf, this.id, width, height, version, express, flashvars, params)
        }, remove: function () {
            S.flash.expressInstallCallback();
            S.flash.removeSWF(this.id)
        }, onWindowResize: function () {
            var dims = S.dimensions,
                el = get(this.id);
            el.height = dims.innerHeight;
            el.width = dims.innerWidth
        }
    };
    var jwControllerHeight = 20;
    S.flv = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.height = obj.height ? parseInt(obj.height, 10) : 300;
        if (S.options.showMovieControls) {
            this.height += jwControllerHeight
        }
        this.width = obj.width ? parseInt(obj.width, 10) : 300
    };
    S.flv.ext = ["flv", "m4v"];
    S.flv.prototype = {
        append: function (body, dims) {
            var tmp = document.createElement("div");
            tmp.id = this.id;
            body.appendChild(tmp);
            var height = dims.innerHeight,
                width = dims.innerWidth,
                swf = S.path + "player.swf",
                version = S.options.flashVersion,
                express = S.path + "expressInstall.swf",
                flashvars = apply({
                    file: this.obj.content,
                    height: height,
                    width: width,
                    autostart: (S.options.autoplayMovies ? "true" : "false"),
                    controlbar: (S.options.showMovieControls ? "bottom" : "none"),
                    backcolor: "0x000000",
                    frontcolor: "0xCCCCCC",
                    lightcolor: "0x557722"
                }, S.options.flashVars),
                params = S.options.flashParams;
            S.flash.embedSWF(swf, this.id, width, height, version, express, flashvars, params)
        }, remove: function () {
            S.flash.expressInstallCallback();
            S.flash.removeSWF(this.id)
        }, onWindowResize: function () {
            var dims = S.dimensions,
                el = get(this.id);
            el.height = dims.innerHeight;
            el.width = dims.innerWidth
        }
    };
    var qtControllerHeight = 16;
    S.qt = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.height = obj.height ? parseInt(obj.height, 10) : 300;
        if (S.options.showMovieControls) {
            this.height += qtControllerHeight
        }
        this.width = obj.width ? parseInt(obj.width, 10) : 300
    };
    S.qt.ext = ["dv", "mov", "moov", "movie", "mp4", "avi", "mpg", "mpeg"];
    S.qt.prototype = {
        append: function (body, dims) {
            var opt = S.options,
                autoplay = String(opt.autoplayMovies),
                controls = String(opt.showMovieControls);
            var html = "<object",
                movie = {
                    id: this.id,
                    name: this.id,
                    height: this.height,
                    width: this.width,
                    kioskmode: "true"
                };
            if (S.isIE) {
                movie.classid = "clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B";
                movie.codebase = "http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0"
            } else {
                movie.type = "video/quicktime";
                movie.data = this.obj.content
            }
            for (var m in movie) {
                html += " " + m + '="' + movie[m] + '"'
            }
            html += ">";
            var params = {
                src: this.obj.content,
                scale: "aspect",
                controller: controls,
                autoplay: autoplay
            };
            for (var p in params) {
                html += '<param name="' + p + '" value="' + params[p] + '">'
            }
            html += "</object>";
            body.innerHTML = html
        }, remove: function () {
            try {
                document[this.id].Stop()
            } catch (e) {}
            var el = get(this.id);
            if (el) {
                remove(el)
            }
        }
    };
    var wmpControllerHeight = (S.isIE ? 70 : 45);
    S.wmp = function (obj, id) {
        this.obj = obj;
        this.id = id;
        this.height = obj.height ? parseInt(obj.height, 10) : 300;
        if (S.options.showMovieControls) {
            this.height += wmpControllerHeight
        }
        this.width = obj.width ? parseInt(obj.width, 10) : 300
    };
    S.wmp.ext = ["asf", "avi", "mpg", "mpeg", "wm", "wmv"];
    S.wmp.prototype = {
        append: function (body, dims) {
            var opt = S.options,
                autoplay = opt.autoplayMovies ? 1 : 0;
            var movie = '<object id="' + this.id + '" name="' + this.id + '" height="' + this.height + '" width="' + this.width + '"',
                params = {
                    autostart: opt.autoplayMovies ? 1 : 0
                };
            if (S.isIE) {
                movie += ' classid="clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6"';
                params.url = this.obj.content;
                params.uimode = opt.showMovieControls ? "full" : "none"
            } else {
                movie += ' type="video/x-ms-wmv"';
                movie += ' data="' + this.obj.content + '"';
                params.showcontrols = opt.showMovieControls ? 1 : 0
            }
            movie += ">";
            for (var p in params) {
                movie += '<param name="' + p + '" value="' + params[p] + '">'
            }
            movie += "</object>";
            body.innerHTML = movie
        }, remove: function () {
            if (S.isIE) {
                try {
                    window[this.id].controls.stop();
                    window[this.id].URL = "movie" + now() + ".wmv";
                    window[this.id] = function () {}
                } catch (e) {}
            }
            var el = get(this.id);
            if (el) {
                setTimeout(function () {
                    remove(el)
                }, 10)
            }
        }
    };
    var overlayOn = false,
        visibilityCache = [],
        pngIds = ["sb-nav-close", "sb-nav-next", "sb-nav-play", "sb-nav-pause", "sb-nav-previous"],
        container, overlay, wrapper, doWindowResize = true;

    function animate(el, property, to, duration, callback) {
        var isOpacity = (property == "opacity"),
            anim = isOpacity ? S.setOpacity : function (el, value) {
                el.style[property] = "" + value + "px"
            };
        if (duration == 0 || (!isOpacity && !S.options.animate) || (isOpacity && !S.options.animateFade)) {
            anim(el, to);
            if (callback) {
                callback()
            }
            return
        }
        var from = parseFloat(S.getStyle(el, property)) || 0;
        var delta = to - from;
        if (delta == 0) {
            if (callback) {
                callback()
            }
            return
        }
        duration *= 1000;
        var begin = now(),
            ease = S.ease,
            end = begin + duration,
            time;
        var interval = setInterval(function () {
            time = now();
            if (time >= end) {
                clearInterval(interval);
                interval = null;
                anim(el, to);
                if (callback) {
                    callback()
                }
            } else {
                anim(el, from + ease((time - begin) / duration) * delta)
            }
        }, 10)
    }
    function setSize() {
        container.style.height = S.getWindowSize("Height") + "px";
        container.style.width = S.getWindowSize("Width") + "px"
    }
    function setPosition() {
        container.style.top = document.documentElement.scrollTop + "px";
        container.style.left = document.documentElement.scrollLeft + "px"
    }
    function toggleTroubleElements(on) {
        if (on) {
            each(visibilityCache, function (i, el) {
                el[0].style.visibility = el[1] || ""
            })
        } else {
            visibilityCache = [];
            each(S.options.troubleElements, function (i, tag) {
                each(document.getElementsByTagName(tag), function (j, el) {
                    visibilityCache.push([el, el.style.visibility]);
                    el.style.visibility = "hidden"
                })
            })
        }
    }
    function toggleNav(id, on) {
        var el = get("sb-nav-" + id);
        if (el) {
            el.style.display = on ? "" : "none"
        }
    }
    function toggleLoading(on, callback) {
        var loading = get("sb-loading"),
            playerName = S.getCurrent().player,
            anim = (playerName == "img" || playerName == "html");
        if (on) {
            S.setOpacity(loading, 0);
            loading.style.display = "block";
            var wrapped = function () {
                S.clearOpacity(loading);
                if (callback) {
                    callback()
                }
            };
            if (anim) {
                animate(loading, "opacity", 1, S.options.fadeDuration, wrapped)
            } else {
                wrapped()
            }
        } else {
            var wrapped = function () {
                loading.style.display = "none";
                S.clearOpacity(loading);
                if (callback) {
                    callback()
                }
            };
            if (anim) {
                animate(loading, "opacity", 0, S.options.fadeDuration, wrapped)
            } else {
                wrapped()
            }
        }
    }
    function buildBars(callback) {
        var obj = S.getCurrent();
        get("sb-title-inner").innerHTML = obj.title || "";
        var close, next, play, pause, previous;
        if (S.options.displayNav) {
            close = true;
            var len = S.gallery.length;
            if (len > 1) {
                if (S.options.continuous) {
                    next = previous = true
                } else {
                    next = (len - 1) > S.current;
                    previous = S.current > 0
                }
            }
            if (S.options.slideshowDelay > 0 && S.hasNext()) {
                pause = !S.isPaused();
                play = !pause
            }
        } else {
            close = next = play = pause = previous = false
        }
        toggleNav("close", close);
        toggleNav("next", next);
        toggleNav("play", play);
        toggleNav("pause", pause);
        toggleNav("previous", previous);
        var counter = "";
        if (S.options.displayCounter && S.gallery.length > 1) {
            var len = S.gallery.length;
            if (S.options.counterType == "skip") {
                var i = 0,
                    end = len,
                    limit = parseInt(S.options.counterLimit) || 0;
                if (limit < len && limit > 2) {
                    var h = Math.floor(limit / 2);
                    i = S.current - h;
                    if (i < 0) {
                        i += len
                    }
                    end = S.current + (limit - h);
                    if (end > len) {
                        end -= len
                    }
                }
                while (i != end) {
                    if (i == len) {
                        i = 0
                    }
                    counter += '<a onclick="Shadowbox.change(' + i + ');"';
                    if (i == S.current) {
                        counter += ' class="sb-counter-current"'
                    }
                    counter += ">" + (++i) + "</a>"
                }
            } else {
                counter = [S.current + 1, S.lang.of, len].join(" ")
            }
        }
        get("sb-counter").innerHTML = counter;
        callback()
    }
    function showBars(callback) {
        var titleInner = get("sb-title-inner"),
            infoInner = get("sb-info-inner"),
            duration = 0.35;
        titleInner.style.visibility = infoInner.style.visibility = "";
        if (titleInner.innerHTML != "") {
            animate(titleInner, "marginTop", 0, duration)
        }
        animate(infoInner, "marginTop", 0, duration, callback)
    }
    function hideBars(anim, callback) {
        var title = get("sb-title"),
            info = get("sb-info"),
            titleHeight = title.offsetHeight,
            infoHeight = info.offsetHeight,
            titleInner = get("sb-title-inner"),
            infoInner = get("sb-info-inner"),
            duration = (anim ? 0.35 : 0);
        animate(titleInner, "marginTop", titleHeight, duration);
        animate(infoInner, "marginTop", infoHeight * -1, duration, function () {
            titleInner.style.visibility = infoInner.style.visibility = "hidden";
            callback()
        })
    }
    function adjustHeight(height, top, anim, callback) {
        var wrapperInner = get("sb-wrapper-inner"),
            duration = (anim ? S.options.resizeDuration : 0);
        animate(wrapper, "top", top, duration);
        animate(wrapperInner, "height", height, duration, callback)
    }
    function adjustWidth(width, left, anim, callback) {
        var duration = (anim ? S.options.resizeDuration : 0);
        animate(wrapper, "left", left, duration);
        animate(wrapper, "width", width, duration, callback)
    }
    function setDimensions(height, width) {
        var bodyInner = get("sb-body-inner"),
            height = parseInt(height),
            width = parseInt(width),
            topBottom = wrapper.offsetHeight - bodyInner.offsetHeight,
            leftRight = wrapper.offsetWidth - bodyInner.offsetWidth,
            maxHeight = overlay.offsetHeight,
            maxWidth = overlay.offsetWidth,
            padding = parseInt(S.options.viewportPadding) || 20,
            preserveAspect = (S.player && S.options.handleOversize != "drag");
        return S.setDimensions(height, width, maxHeight, maxWidth, topBottom, leftRight, padding, preserveAspect)
    }
    var K = {};
    K.markup = '<div id="sb-container"><div id="sb-overlay"></div><div id="sb-wrapper"><div id="sb-title"><div id="sb-title-inner"></div></div><div id="sb-wrapper-inner"><div id="sb-body"><div id="sb-body-inner"></div><div id="sb-loading"><div id="sb-loading-inner"><span>{loading}</span></div></div></div></div><div id="sb-info"><div id="sb-info-inner"><div id="sb-counter"></div><div id="sb-nav"><a id="sb-nav-close" title="{close}" onclick="Shadowbox.close()"></a><a id="sb-nav-next" title="{next}" onclick="Shadowbox.next()"></a><a id="sb-nav-play" title="{play}" onclick="Shadowbox.play()"></a><a id="sb-nav-pause" title="{pause}" onclick="Shadowbox.pause()"></a><a id="sb-nav-previous" title="{previous}" onclick="Shadowbox.previous()"></a></div></div></div></div></div>';
    K.options = {
        animSequence: "sync",
        counterLimit: 10,
        counterType: "default",
        displayCounter: true,
        displayNav: true,
        fadeDuration: 0.35,
        initialHeight: 160,
        initialWidth: 320,
        modal: false,
        overlayColor: "#000",
        overlayOpacity: 0.5,
        resizeDuration: 0.35,
        showOverlay: true,
        troubleElements: ["select", "object", "embed", "canvas"]
    };
    K.init = function () {
        S.appendHTML(document.body, sprintf(K.markup, S.lang));
        K.body = get("sb-body-inner");
        container = get("sb-container");
        overlay = get("sb-overlay");
        wrapper = get("sb-wrapper");
        if (!supportsFixed) { /*container.style.position="absolute"*/
        }
        if (!supportsOpacity) {
            var el, m, re = /url\("(.*\.png)"\)/;
            each(pngIds, function (i, id) {
                el = get(id);
                if (el) {
                    m = S.getStyle(el, "backgroundImage").match(re);
                    if (m) {
                        el.style.backgroundImage = "none";
                        el.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,src=" + m[1] + ",sizingMethod=scale);"
                    }
                }
            })
        }
        var timer;
        addEvent(window, "resize", function () {
            if (timer) {
                clearTimeout(timer);
                timer = null
            }
            if (open) {
                timer = setTimeout(K.onWindowResize, 10)
            }
        })
    };
    K.onOpen = function (obj, callback) {
        doWindowResize = false;
        container.style.display = "block";
        setSize();
        var dims = setDimensions(S.options.initialHeight, S.options.initialWidth);
        adjustHeight(dims.innerHeight, dims.top);
        adjustWidth(dims.width, dims.left);
        if (S.options.showOverlay) {
            overlay.style.backgroundColor = S.options.overlayColor;
            S.setOpacity(overlay, 0);
            if (!S.options.modal) {
                addEvent(overlay, "click", S.close)
            }
            overlayOn = true
        }
        if (!supportsFixed) {
            setPosition();
            addEvent(window, "scroll", setPosition)
        }
        toggleTroubleElements();
        container.style.visibility = "visible";
        if (overlayOn) {
            animate(overlay, "opacity", S.options.overlayOpacity, S.options.fadeDuration, callback)
        } else {
            callback()
        }
    };
    K.onLoad = function (changing, callback) {
        toggleLoading(true);
        while (K.body.firstChild) {
            remove(K.body.firstChild)
        }
        hideBars(changing, function () {
            if (!open) {
                return
            }
            if (!changing) {
                wrapper.style.visibility = "visible"
            }
            buildBars(callback)
        })
    };
    K.onReady = function (callback) {
        if (!open) {
            return
        }
        var player = S.player,
            dims = setDimensions(player.height, player.width);
        var wrapped = function () {
            showBars(callback)
        };
        switch (S.options.animSequence) {
        case "hw":
            adjustHeight(dims.innerHeight, dims.top, true, function () {
                adjustWidth(dims.width, dims.left, true, wrapped)
            });
            break;
        case "wh":
            adjustWidth(dims.width, dims.left, true, function () {
                adjustHeight(dims.innerHeight, dims.top, true, wrapped)
            });
            break;
        default:
            adjustWidth(dims.width, dims.left, true);
            adjustHeight(dims.innerHeight, dims.top, true, wrapped)
        }
    };
    K.onShow = function (callback) {
        toggleLoading(false, callback);
        doWindowResize = true
    };
    K.onClose = function () {
        if (!supportsFixed) {
            removeEvent(window, "scroll", setPosition)
        }
        removeEvent(overlay, "click", S.close);
        wrapper.style.visibility = "hidden";
        var callback = function () {
            container.style.visibility = "hidden";
            container.style.display = "none";
            toggleTroubleElements(true)
        };
        if (overlayOn) {
            animate(overlay, "opacity", 0, S.options.fadeDuration, callback)
        } else {
            callback()
        }
    };
    K.onPlay = function () {
        toggleNav("play", false);
        toggleNav("pause", true)
    };
    K.onPause = function () {
        toggleNav("pause", false);
        toggleNav("play", true)
    };
    K.onWindowResize = function () {
        if (!doWindowResize) {
            return
        }
        setSize();
        var player = S.player,
            dims = setDimensions(player.height, player.width);
        adjustWidth(dims.width, dims.left);
        adjustHeight(dims.innerHeight, dims.top);
        if (player.onWindowResize) {
            player.onWindowResize()
        }
    };
    S.skin = K;
    window.Shadowbox = S
})(window);;