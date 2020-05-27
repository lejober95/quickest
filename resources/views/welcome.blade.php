<?php

$ft1="Mon universite avec moi,partout et à tout moment";
$footer="Université Virtuelle de Côte d'Ivoire".$ft1;
$siege="Abidjan Cocody Deux-Plateau";
$mail="Mail: secretaire@uvci.edu.ci";
$tel="Tel: +225.22515147";


 ?>
@extends('layouts.partials.default')
<html>
	<head>
		<meta charset="UTF-8" />
		<title>select multiple</title>
	</head>
	<body style="width:100% ; position:fixed;">
<div class="header">
     <b class="gestion" style="text-decoration:none; ">  
      Gestion  de décisions
     </b>
</div>

 <div class="img_header">
		<img src="storage/images/uvciLog.jpg" width="180px" >
     </div>

<div id="link">
	<div class="nouvelD">
			<a href="{{url('insert')}}">
			<button class="btn btn-success">
			Nouvelle décision
			</button>
			</a>

	</div>		

	<div class="voirD">
			<a href="{{url('voirD')}}" >
			<button class="btn btn-success">
			 Décision antérieure
			</button>
			</a>
	</div>

</div>
		
<hr  style="color:grey; margin-top:60px">
<div class="footer" style="background-color:#17657D; height:110px; color:white; text-align: center" >
	<div class="foot">
		{{$footer}}
	</div>

	<div class="sieg">
		{{$siege}}
	</div>
	<div class="email">
		{{$mail}}
	</div>
	<div class="tl">
		{{$tel}}
	</div>

</div>



</body>
</html>

	