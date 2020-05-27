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