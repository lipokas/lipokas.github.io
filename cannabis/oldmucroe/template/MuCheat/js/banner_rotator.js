var variableslide=new Array()

variableslide[0]=['/template/MuCheat/img.mucheat.com/es/slide1.jpg', '', '']
variableslide[1]=['/template/MuCheat/img.mucheat.com/es/slide2.jpg', '', '']
variableslide[2]=['/template/MuCheat/img.mucheat.com/es/slide3.jpg', '', '']

var slidewidth='545px' //set to width of LARGEST image in your slideshow
var slideheight='152px' //set to height of LARGEST iamge in your slideshow, plus any text description
var slidebgcolor='#000'

//configure the below variable to determine the delay between image rotations (in miliseconds)
var slidedelay=8000

////Do not edit pass this line////////////////

var ie=document.all
var dom=document.getElementById

for (i=0;i<variableslide.length;i++){
var cacheimage=new Image()
cacheimage.src=variableslide[i][0]
}

var currentslide=0

function rotateimages(){
contentcontainer='<center>'
if (variableslide[currentslide][1]!="")
contentcontainer+='<a href="'+variableslide[currentslide][1]+'" target="_blank">'
contentcontainer+='<img src="'+variableslide[currentslide][0]+'" border="0" vspace="0">'
if (variableslide[currentslide][1]!="")
contentcontainer+='</a>'
contentcontainer+='</center>'
if (variableslide[currentslide][3]!="")
contentcontainer+=variableslide[currentslide][3]

if (document.layers){
crossrotateobj.document.write(contentcontainer)
crossrotateobj.document.close()
}
else if (ie||dom)
crossrotateobj.innerHTML=contentcontainer
if (currentslide==variableslide.length-1) currentslide=0
else currentslide++
setTimeout("rotateimages()",slidedelay)
}

if (ie||dom)
document.write('<div id="slidedom" style="width:'+slidewidth+';height:'+slideheight+'; background-color:'+slidebgcolor+'"></div>')

function start_slider(){
crossrotateobj=dom? document.getElementById("slidedom") : ie? document.all.slidedom : document.slidensmain.document.slidenssub
if (document.layers)
document.slidensmain.visibility="show"
rotateimages()
}

if (ie||dom)
start_slider()
else if (document.layers)
window.onload=start_slider

