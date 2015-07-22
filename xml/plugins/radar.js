/* krpanoJS 1.0.8.15 radar plugin (build 2012-10-05) */
var krpanoplugin=function(){function x(){var c=j,e=g/2;if(o){var d=b.getmouse(true);d.x*=g/Number(f.width);d.y*=g/Number(f.height);d=Math.atan2(d.y-e,d.x-e)*180/Math.PI;d-=n;if(k==null)k=d-i.view.hlookat;else i.view.hlookat=d-k}d=(n+p-90+i.view.hlookat)*Math.PI/180;var a=0.5*i.view.fov*Math.PI/180;if(q)a=-a;if(Math.abs(d-u)>0.01||Math.abs(a-v)>0.02){u=d;v=a;h=true}if(h){h=false;c.clearRect(0,0,g,g);c.fillStyle="rgba("+(l>>16&255)+","+(l>>8&255)+","+(l&255)+","+r+")";c.strokeStyle="rgba("+(m>>16&255)+
","+(m>>8&255)+","+(m&255)+","+s+")";c.lineWidth=t;c.beginPath();c.moveTo(e,e);c.arc(e,e,e,d-a,d+a);c.fill()}}var i=null,b=null,f=null,j=null,g=256,n=0,p=90,q=false,l=16777215,m=16777215,r=0.5,s=0.3,t=0,o=false,k=null,h=true,w=null,u=0,v=0;this.registerplugin=function(c,e,d){i=c;b=d;if(i.version<"1.0.8.14"||i.build<"2011-03-30"){i.trace(3,"radar plugin - too old krpano version (min. 1.0.8.14)");b=i=null}else{b.registerattribute("heading",0,function(a){n=Number(a);h=true},function(){return n});b.registerattribute("headingoffset",
90,function(a){p=Number(a);h=true},function(){return p});b.registerattribute("invert",false,function(a){q=String(a).toLowerCase()=="true";h=true},function(){return q});b.registerattribute("fillcolor",16777215,function(a){l=parseInt(a);h=true},function(){return l});b.registerattribute("linecolor",16777215,function(a){m=parseInt(a);h=true},function(){return m});b.registerattribute("fillalpha",0.5,function(a){r=Number(a);h=true},function(){return r});b.registerattribute("linealpha",0.3,function(a){s=
Number(a);h=true},function(){return s});b.registerattribute("linewidth",0,function(a){t=Number(a);h=true},function(){return t});b.handcursor=false;b.ondown=function(){o=true;k=null};b.onup=function(){o=false;k=null};b.registercontentsize(g,g);f=document.createElement("canvas");f.width=g;f.height=g;f.style.width="100%";f.style.height="100%";f.onselectstart=function(){return false};b.sprite.appendChild(f);j=f.getContext("2d");w=setInterval(x,1E3/30)}};this.unloadplugin=function(){if(i&&b){clearInterval(w);
b.sprite.removeChild(f);i=b=f=j=null}};this.hittest=function(c,e){return j.isPointInPath(c,e)};this.onresize=function(c,e){g=Math.max(c,e);f.width=c;f.height=e;j.scale(c/g,e/g);h=true;return false}};
