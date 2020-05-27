<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Insert;
use Illuminate\Support\Facades\Input;
class insertC extends Controller
{
    public  function store(Request $request){
        
        $insert=new Insert;

    if( !empty($request->Input('arti') AND !empty($request->Input('consti')))){   
   
        if(!empty($request->Input('decision'))){
            $insert->decision=$request->Input('decision');
        }else{
             $error="Veuillez remplir ce champ svp";
        }


        if(!empty($request->Input('du'))){
            $insert->du=$request->Input('du');
        }else{
             $error="veuillez remplir champ svp";
        }

        
        if(!empty($request->Input('natDecision'))){
            $insert->natDecision=$request->Input('natDecision');
        }else{
            $error="Selectionnez un element svp";
        }
           $arti=  $request->Input('arti');
            $consti=$request->Input('consti');
     
        if(!is_null($consti) AND !is_null($arti)){
           

            
        
    
            $ins_const=implode("/", $consti);
           
            $insert->consti=$ins_const;
            $ins_art=implode("/", $arti);
                   
            $insert->arti=$ins_art;
    
        }else{
    
           $error ="cliquez sur le boutton + pour remplir le formulaire svp";
    
        
        }
   
       
    if(!empty($request->Input('considerant'))){
        $insert->considerant=$request->Input('considerant');
    }else{
        $error="Veillez remplir ce champ";
    } 
       
        $insert->Am1=$request->Input('Am1');
        $insert->Am2=$request->Input('Am2');
        $insert->Am3=$request->Input('Am3');
        $insert->Am4=$request->Input('Am4');
        $insert->Am5=$request->Input('Am5');
        $insert->Am6=$request->Input('Am6');

        $insert->save();
        
        return view('pdf/pdf');
    }else{
        return view('page.gestion');
    }
            }

public function gestion(){

global $error;

return view('page.gestion')->with('error',$error);



}
public function print(){
    return view('pdf/pdf1');
}
public function voirD(){
    return view('page.voirD');
}
public function dec_ant(){
    return view('page.dec_ant');
}
        

    }


    

