@extends('layouts.partials.default')
    <div class="form_header">
    	<span class="styl">
		    VOIR UNE DECISION ANTERIEURE
	   </span>
	</div>

<form method="GET"  action=" {{url('dec_ant')}} " style="margin-left:130px;  margin-right:30px;
position: relative;  display:inline-block; width:900px; margin-top:200px; background:#FBFCFA;
border-radius:0px 0px 30px 30px ;
box-shadow:0px 1px 2px 2px black; height:300px">
	
	<div class="form_voirD">
		
		<div class="voirD_input">
			{{ method_field('GET') }}
			<input type="text" name="voirD_input" placeholder=" Entrez le n° de la  décision svp">

		</div>
		<div class="voirD_submit">
			<input type="submit" name="voirD_submit" value="Ok">
		</div>
    </div>
</form>