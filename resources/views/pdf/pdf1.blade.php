<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Model\Insert;

$request=new Request;

//les variables liées au données postées.
$consti=Input::get('consti');
$arti=Input::get('arti');
$decision=Input::get('decision');
$du=Input::get('du');
$Am1=Input::get('Am1');
$Am2=Input::get('Am2');
$Am3=Input::get('Am3');
$Am4=Input::get('Am4');
$Am5=Input::get('Am5');
$Am6=Input::get('Am6');
//initialiser les Am pour dans un tableau.
$am=[
$Am1,
$Am2,
$Am3,
$Am4,
$Am5,
$Am6


];
$considerant=Input::get('considerant');
$natDecision=Input::get('natDecision');
$art=implode('/',$arti);
$const=implode('/',$consti);

// requêtes à la base de données
$select_art=Insert::select('arti')->where('arti',$art)->get();
$select_const=Insert::select('consti')->where('consti',$const)->get();
$decision=Insert::select('decision')->where('arti',$art)->get();
$du=Insert::select('du')->where('arti',$art)->get();

//les entêtes de la fiche
$ent_gauche="Ministère de l'enseignement superieur et de la recherche scientifique";
$ent_droit="republique de cote d'ivoire";
$dev="union-discipline-travail";
$uvci="université virtuelle de côte d'ivoire";
$direct="Directeur general de l'université virtuelle de cote d'ivoire";
$DG="directeur général";
$ent_decision="Décision........../MESRS/UVCI-DG/du....................portant nomination du Sous-directeurde la Techno-pédagogie à l'université Virtuelle de Côte d'Ivoire";
$ft1="Mon universite avec moi,partout et à tout moment";
$footer="Université Virtuelle de Côte d'Ivoire". "&nbsp;-".$ft1;
$siege="Abidjan Cocody Deux-Plateau";
$mail="Mail: secretaire@uvci.edu.ci";
$tel="Tel: +225.22515147";

?>


@extends('layouts.partials.default')

<html>
<head>
	

</head>
	<body>
		
<div class="doloadBtn" >
<button onclick="Print('printDoc')">Télécharger</button>

</div>
     <div id="printDoc">
		<div class="entête">
			<div class="ent_gauche">
				{{$ent_gauche}}
			</div>
			<div class="ent_droit">
				{{$ent_droit}}
			</div>
		</div>
		<div class="uvci">
		<strong>UVCI</strong>&nbsp;&nbsp;<u>{{$uvci}}</u>
		</div>
		<div class="DG">
			{{$DG}}
		</div>
		<div class="ent_decision">
			{{$ent_decision}}
		</div>
		<div class="directeur">
		<strong>	{{$direct}}</strong>
		</div>

	<div class="print1">
	<?php
	$ex=$select_const[0]->consti;
	$expl=	explode('/',$ex);
	?>
	@foreach($expl as $k =>$explode)

	<strong>Vu &nbsp;&nbsp; </strong>&nbsp;&nbsp;{{$explode}}&nbsp;;<br/>
	@endforeach
    </div>
	
    	<hr>
         <div class="footer">
         	{{$footer}}
         </div>
         <div class="siege">
         	{{$siege}}
         </div>
         <div class="coord">
         	<div class="mail">
         		{{$mail}}
         	</div>
         	<div class="tel">
         		{{$tel}}
         	</div>
		 </div>
		 <div class="print2">
			 <div class="considerant">
			Considérant	 {{$considerant}}
			 </div>
			 <div class="decide">
				<u><b> DECIDE</b> </u>
			 </div>
			<?php
			$ex2=$select_art[0]->arti;
			$expl2=	explode('/',$ex2);
			?>
			@foreach($expl2 as $ky =>$explode2)
		
			<strong><u>Article&nbsp;{{$ky+1}}</u> &nbsp;&nbsp; </strong>&nbsp;&nbsp;{{$explode2}}&nbsp;;<br/>
			@endforeach
			</div>
			<div class="date">
				Fait à Abidjan, le ........
			</div>
			<div class="ordonnateur">
				<img src="storage/images/signatureUVCI.JPG" width="250">
			</div>

         <div class="ampliation">
         	<u><b>{{'Ampliation'}}</b></u><br/>
         	
			 @for($a=0; $a<=6; $a++)
			 
         	@if(!empty($am[$a]))
         	-{{$am[$a]}}:&nbsp;&nbsp;&nbsp;01<br/>
         	@endif
         	@endfor

		 </div>
		<hr>
		<div class="footer">
			{{$footer}}
		</div>
		<div class="siege">
			{{$siege}}
		</div>
		<div class="coord">
			<div class="mail">
				{{$mail}}
			</div>
			<div class="tel">
				{{$tel}}
			</div>
		</div>
</div>


	</body>

</html>

