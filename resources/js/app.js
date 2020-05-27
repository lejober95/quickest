
        function flashy(message, link) {
            var template = $($("#flashy-template").html());
            $(".flashy").remove();
            template.find(".flashy__body").html(message).attr("href", link || "#").end()
             .appendTo("body").hide().fadeIn(300).delay(2800).animate({
                marginRight: "-150%"
            }, 300, "swing", function() {
                $(this).remove();
            });
        }
    //les différentes fonctions

// fonction(s) pour generer automatiquement  les champs pour les décisions
    var i = 1;
function Ajouter()
{
    
    var form = document.getElementById("form");
    var textarea = document.createElement("textarea");
    
    textarea.setAttribute('name','consti[]');
    // textarea.setAttribute('type','text');
     
    // input.setAttribute('value','menu'+i);
    textarea.setAttribute('id','arti');
    textarea.setAttribute('required', 'required');
    
    form.appendChild(textarea);
    
    i++;
    
    form.appendChild(document.createElement("br"));
    form.appendChild(document.createElement("br"));
}
 
function Supprimer()
{
    var form = document.getElementById("form");
    form.removeChild(form.lastChild);
    i--;
     
}
// fonction(s) pour generer  automatiquement les formulaire pour la saisie des articles
var a=1;
 function addArt()
{
     
    var art = document.getElementById("art");
    var textarea = document.createElement("textarea");
    
    textarea.setAttribute('name','arti[]');
    // textarea.setAttribute('type','text');
    // input.setAttribute('value','menu'+i);
    textarea.setAttribute('id','arti');
    textarea.setAttribute('placeholder', 'articles'+a);
    textarea.setAttribute('required', 'required');
    art.appendChild(textarea);
    
   
    
    a++;
    
    art.appendChild(document.createElement("br"));
    art.appendChild(document.createElement("br"));
}
 
function delArt(){  
var art = document.getElementById("art");
    art.removeChild(art.lastChild);
    a--;
    
    }

// fonction pour l'Ampliation
    var expended=false;
    function showCheckbox(){
        var checkboxes= document.getElementById('checkboxes');
        if(!expended){
            checkboxes.style.display='block';
            expended=true;
        }else{
            chechkboxes.style.display='none';
            expended=false;
        }
    }
