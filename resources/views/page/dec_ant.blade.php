@extends('layouts.partials.default')

<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Model\Insert;

$request=new Request;

//les variables liées au données postées.
$consti=Insert::select('consti')->where( Input::get('voirD_input','decision');
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
$dus=$du[0]->du;
$deci=$decision[0]->decision;
//les entêtes de la fiche
$saut="\n\n";
$ent_gauche1="MINISTERE DE L'ENSEIGNEMENT SUPERIEUR";
 $ent_gauche2="ET DE LA RECHERCHE SCIENTIFIQUE";
$ent_droit="REPUBLIQUE DE COTE D'IVOIRE";
$dev="union-discipline-travail";
$uvci="UNIVERSITE VIRTUELLE DE COTE D'IVOIRE";
$direct=" Le Directeur general de l'université virtuelle de cote d'ivoire ;";
$DG="DIRECTION GENERALE";
$ent_decision="Décision.................../MESRS/UVCI-DG/  du...............................................portant";
$nomi="nomination du Sous-directeurde la Techno-pédagogie à l'université Virtuelle de Côte d'Ivoire(UVCI)";
$ft1="Mon universite avec moi,partout et à tout moment";
$footer="Université Virtuelle de Côte d'Ivoire".$ft1;
$siege="Abidjan Cocody Deux-Plateau";
$mail="Mail: secretaire@uvci.edu.ci";
$tel="Tel: +225.22515147";

?>

<style media="print">
 @page {
  size: auto;

  margin: 0;

  margin-left: 100px;

       }
</style>

	<body  >
		
<div class="doloadBtn" >
<button onclick="Print('printDoc')">Télécharger</button>

</div>
 <div id="printDoc"  style="margin-left:160px; ">
    <div id="div1" style="page-break-after: always; padding-left: 20px;display:justify; margin-top: 100px;" >
			<div class="entête" style="display:flex; ">
				<div class="ent_gauche"  >
					{{$ent_gauche1}}<br/>
					{{$ent_gauche2}}

				</div>

				<div class="ent_droit" style="margin-left: 250px">
					{{$ent_droit}}<br/>
					{{$dev}}
				</div>
			</div>
			    <div class="uvci" style="margin-left:100px;">
			    <strong ><img src="storage/images/uVci.JPG"></strong>&nbsp;&nbsp;
			    <u style="font-weight:bold; font-size:1.6em;
			    font-stretch:extra-condensed;">{{$uvci}}</u>
			    </div>
			<div class="DG">
				{{$DG}}
			</div><br/>
			<div class="decision" style="color:blue; z-index: 2; position:relative; bottom:-2em; left:60px; font-style: italic;">
				<h4><strong>{{$deci}}</strong></h4>
			</div>
			<div class="ent_decision">
				{{$ent_decision}}<br/>
				{{$nomi}}
			</div><br/><br/>
			<div class="du" style="bottom:6em;color:blue; z-index:2;position: relative;left:300px; font-style:italic;">
				<h4><strong>{{$dus}}</strong></h4>
			</div>
			
			<div class="directeur">
			<strong>	{{$direct}}</strong><br/>


	<?php
	$ex=$select_const[0]->consti;
	$expl=	explode('/',$ex);
	?>
	@foreach($expl as $k =>$explode)

	<strong>Vu &nbsp;&nbsp; </strong>&nbsp;&nbsp;{{$explode}}&nbsp;;<br/>
	@endforeach
    
	
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
	

	
		 
	</div>
	<div class="div2" style="padding-left: 20px; margin-top: 100px;">
		 
		 <div class="print2">
			 <div class="considerant">
			Considérant	 {{$considerant}},
			 </div><br/>
			 <div class="decide" style="margin-left:400px;">
				<strong> <u>{{'DECIDE'}}</u> </strong>
			 </div>
			<?php
			$ex2=$select_art[0]->arti;
			$expl2=	explode('/',$ex2);
			?>
			@foreach($expl2 as $ky =>$explode2)
		
			<strong><u>Article&nbsp;{{$ky+1}}</u> &nbsp;&nbsp; </strong>&nbsp;&nbsp;{{$explode2}}&nbsp;;<br/>
			@endforeach
			</div><br/>
			<div class="date" style="margin-left:690px;">
				Fait à Abidjan, le .....................

			</div>
			<div class="date" style="position:relative; z-index:2;
			 bottom:1.5em; color:blue; left:800px; font-style:italic; font-weight: bold">
	{{date('d/m/Y')}} 
</div>
			<div class="ordonnateur" style="margin-left:600px">
				<img src="storage/images/signatureUVCI.JPG" width="250">
			</div>

         <div class="ampliation">
         	<strong><u>{{'AMPLIATION'}}</u></strong><br/>
         	
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
</div>



	</body>

</html>

