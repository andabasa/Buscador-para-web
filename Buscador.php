<!DOCTYPE html>
<html>
  <head>
		<style type="text/css">
		#cuadro_buscar{
padding: 10px;
font-size: 12pt;
background-image: url(lupa.png);
background-repeat: no-repeat;
background-position: right;
height: 20px;
width: 210px;
transition-property: all;
transition-duration: 2s;
transition-timing-function: ease;
transition-delay: 0s;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
}
#cuadro_buscar:focus{
padding: 10px;
font-size: 12pt;
background-image: url(lupa.png);
background-repeat: no-repeat;
background-position: right;
width: 250px;

}
#radio_buscar,#radio_buscar1{
border: 3px blue solid;
visibility: hidden;
}
#selectoresl, #selectoresr{
padding: 10px;
border-collapse: collapse;
color: white;
background: #1e5799; /* Old browsers */
background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* IE10+ */
background: linear-gradient(to bottom,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */
font-size: 14pt

}
#selectoresl{
-webkit-border-top-left-radius: 10px;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-bottomleft: 10px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;


}
#selectoresr{
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
}
#selectoresl:hover{
-webkit-border-top-left-radius: 10px;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-bottomleft: 10px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;
color: green;
background: #b3dced; /* Old browsers */
background: -moz-linear-gradient(top,  #b3dced 0%, #29b8e5 50%, #bce0ee 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b3dced), color-stop(50%,#29b8e5), color-stop(100%,#bce0ee)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
}
#selectoresr:hover{
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
color: green;
background: #b3dced; /* Old browsers */
background: -moz-linear-gradient(top,  #b3dced 0%, #29b8e5 50%, #bce0ee 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b3dced), color-stop(50%,#29b8e5), color-stop(100%,#bce0ee)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
}
#selectoresl:active{
-webkit-border-top-left-radius: 10px;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-bottomleft: 10px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;
color: greenyellow;
background: #b3dced; /* Old browsers */
background: -moz-linear-gradient(top,  #b3dced 0%, #29b8e5 50%, #bce0ee 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b3dced), color-stop(50%,#29b8e5), color-stop(100%,#bce0ee)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
}
#selectoresr:active{
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
color: greenyellow;
background: #b3dced; /* Old browsers */
background: -moz-linear-gradient(top,  #b3dced 0%, #29b8e5 50%, #bce0ee 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b3dced), color-stop(50%,#29b8e5), color-stop(100%,#bce0ee)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* IE10+ */
background: linear-gradient(to bottom,  #b3dced 0%,#29b8e5 50%,#bce0ee 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee',GradientType=0 ); /* IE6-9 */
}

		</style>
	</head>
<body bgcolor="pink">

<form id="cse-search-box" action="http://google.com/cse" target="_blank">
	<input type="hidden" name="ie" value="UTF-8" />
	<input id="cuadro_buscar" type="text" name="q"  maxlength="30" placeholder="Pulsa intro para buscar"/><br>
	<input id="radio_buscar" type="radio" name="sitesearch" value=""/>
	<input id="radio_buscar1" type="radio" name="sitesearch" value="http://TU_BLOG" checked />
	<table style="border-collapse:collapse;">
	<tr>
		<td id="selectoresl"><label for="radio_buscar" type="">En todo internet</label></td>
		<td id="selectoresr"><label for="radio_buscar1">En el Blog</label></td>
	</tr>
</table>	

</form>



</body>
</html>
