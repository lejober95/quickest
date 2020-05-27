
@extends('layouts.partials.default')


  <div class="header" style="margin-bottom:8em; " class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-offset-1" >
     <b class="gestion" style="text-decoration:none; ">  
      Gestion  de décisions
     </b>
<div class="im_header" style="bottom:6.2em; left:66em; position:relative; z-index: 2">
    <img src="storage/images/uvciLog.jpg" width="180px"  >
     </div>

</div>


 
<form method= 'POST' enctype="multipart/form-data" 
 style="margin-bottom:15em; width:90%; margin-left:60px; background:#FBFCFA">
 
   DIRECTION GENERALE
<div class="ent">
 
           {{ method_field('POST') }}
          Objet de la décision:Décision N°&nbsp;&nbsp;<input type="number" name="decision" required placeholder="completez ici">
          <?php
          if(isset($error)):
           echo"<span style='color:red'>".$error."</span>";
         endif;
           ?>
          MESRS/UVCI-DG/ du &nbsp;&nbsp;<input type='text' placeholder="completez ici"  required name="du">
        <?php 
        if(isset($error)):
        echo"<span style='color:red'>".$error."</span>";
        endif;
        ?>
          &nbsp;&nbsp;portant nomination du Sous-directeur
           de la techno-pédaggogique à l'Université Virtuelle de Côte d'Ivoire(UVCI)

           Le Directeur Général de l'Université Virtuelle de Côte d'Ivoire,<br/>

           <label for="natDecision" >Nature de décision:</label>
            <select name="natDecision" required aria-multiselectable ="multiple"  >
               <option >Aucun</option>
              <option > Financière  </option>
               <option>Organisationnelle </option>
              <option > Pédagogique
               </option>
           </select><br/><br/> 
         <?php
        if(isset($error)):
         echo "<span style='color:red'>".$error."</span>";
        endif;
         ?>

</div> 
     
  <div id="consid">
          <label for="considerant">Considérant</label>
          <input type="text" placeholder="completez ici" name="considerant" required>
          <?php
          if(isset($error)):
          echo"<span style='color:red'>".$error."</span>";
          endif;
          ?>
          
  </div><br/>

  <div class="vuDecide">
      <div class="vu">
        <h4> Vu</h4>
      </div>
      <div class="decide">

        <h4>Décide</h4>
      </div>
  </div>

  <div  class="col-md-10 order-md-2 " style="background: #FFE4C4; box-shadow:10px 0px 0px 10px white; border-radius:20px  20px   0px 0px; width:100%">
    <div class="col-md-6 mb-2">
    <div id="form" style="">

        <button type="button" class="bt1" onclick="Ajouter()" ><i>Ajouter un champ</i></button>
          
          <button type="button"class="bt1" onclick="Supprimer()" ><i>Retirer un champ</i></button>

          <?php
          if(isset($error)):
         echo "<span style='color:red'>".$error."</span>";
        endif;
        ?>
    </div></div>
    
 
      <div class="col-md-6 mb-2" >
        <div id="art" > 

          <button  type="button" class="bt2" onclick="addArt()" ><i>Ajouter un champ</i></button> 
          <button type="button"  class="bt2" onclick="delArt()" ><i>Retirer un champ</i></button>
 
                    <?php
              if(isset($error)):
             echo "<span style='color:red'>".$error."</span>";
            endif;
            ?>    
         </div>
    
  </div>  </div>  

    <div  class="col-md-10 order-md-2" style="margin-left: 0px; background:#FBFCFA; width:100%">
      <div class="col-md-6 mb-1">
        <div class="subAmp" style="margin-left:400px">
            <h4><u> <strong>AMPLIATION</strong></u></h4>
        
      </div>
      
        <div class="multiselect">
            <div class="selectBox" onclick='showCheckbox()'>
                <select name="ampliation">
                    <option>Votre choix</option>
                </select>
                <div class="overselect">

                </div> 
            </div>
            <div id="checkboxes">
                <label for="Am1">

                    <input type="checkbox" active value="DG" name="Am1" id ="Am1">DG 
                </label>
                <label for="Am2">
                        <input type="checkbox" value="DAAF" name="Am2" id ="Am2">DAAF
                    </label>

                <label for="Am3">
                            <input type="checkbox" value="DAAP" name="Am3"  id ="Am3">DAAP
                </label>
                <label for="Am4">
                        <input type="checkbox"   value="AC" name="Am4"  id ="Am4">AC
            </label>
            <label for="Am5">
                    <input type="checkbox"  value="CB" name="Am5" id ="Am5">CB
        </label>
        <label for="Am6">
                <input type="checkbox" value="CHRONO" name="Am6" id ="Am6">CHRONO
    </label>
            </div>
          </div>
        </div>
          <div  class="col-md-10 order-md-2">
                <div class="col-md-6 mb-2">
            <button type="submit" class="send"><i>Nouvelle décision</i> </button>
                </div>
          </div>

    </form>
   


   
    

   

