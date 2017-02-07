//Ancho (en pixeles)
var sliderwidth="1000px"
//Alto
var sliderheight="206px"
//Velocidad 1-10
var slidespeed=1
//Color de fondo:
slidebgcolor="white"
//#E6E6E6
//Vínculos y enlaces de las imágenes
var leftrightslide=new Array()
var finalslide=''
leftrightslide[0]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=27&cat_id=5" target="blank" title=" Chevrolet Camaro"><img border="0" src="imgMovimiento/1.jpg"></a>'
leftrightslide[1]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=6&cat_id=2" target="blank" title="Audi A6"><img border="0" src="imgMovimiento/2.jpg"></a>'
leftrightslide[2]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=16&cat_id=3" target="blank" title="BMW Serie M"><img border="0" src="imgMovimiento/3.jpg"></a>'
leftrightslide[3]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=21&cat_id=3" target="blank" title="BMW X6"><img border="0" src="imgMovimiento/4.jpg"></a>'
leftrightslide[4]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=36&cat_id=5" target="blank" title="Chevrolet Trailblazer"><img border="0" src="imgMovimiento/5.jpg"></a>'
leftrightslide[5]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=43&cat_id=7" target="blank" title="Citroën C3 Aircross"><img border="0" src="imgMovimiento/6.jpg"></a>'
leftrightslide[6]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=48&cat_id=10" target="blank" title="Ferrari California"><img border="0" src="imgMovimiento/7.jpg"></a>'
leftrightslide[7]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=120&cat_id=22" target="blank" title="Mercedes Benz AMG GT"><img border="0" src="imgMovimiento/8.jpg"></a>'
leftrightslide[8]='<a  style="padding-right:3px" href="ver-autos-nuevos.php?id_nuevos=135&cat_id=25" target="blank" title="Nissan Sentra"><img border="0" src="imgMovimiento/9.jpg"></a>'
leftrightslide[9]='<a style="margin-right:-6px" href="ver-autos-nuevos.php?id_nuevos=99&cat_id=34" target="blank" title="Toyota Corolla"><img border="0" src="imgMovimiento/10.jpg"></a>'


var imagegap=""
var slideshowgap=10


var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide

function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup

function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"

if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"

}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap

if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}


if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width="+sliderwidth+" height="+sliderheight+" name="ns_slidemenu" bgcolor="+slidebgcolor+">')
write('<layer left="0" top="0" onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed" name="ns_slidemenu2"></layer>')
write('<layer left="0" top="0" onmouseover="copyspeed=0" onmouseout="copyspeed=slidespeed" name="ns_slidemenu3"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}