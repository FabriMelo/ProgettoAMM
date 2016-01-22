
////Lo script si occupa di controllare la validità in tempo reale dei dati immessi dall'utente nel form di registrazione (pagina signup).
//La variabile errors disabilita il pulsante di signUp se c'è qualche valore immesso che non rispetta i requisiti'

var errors;

function checkField(id, value) {
  
//Messaggi d'errore che appariranno nel form, al di sopra dei rispettivi campi  
    errors=0;
    var pass;
    var p = document.getElementById(id+"_error");
    var x = document.createElement("SPAN");
    var quattro = document.createTextNode("Errore! Il campo "+id+" deve essere lungo almeno 4 caratteri!");
    var stato = document.createTextNode("Errore! Il campo "+id+" richiede la sigla di due lettere!");
    var postal = document.createTextNode("Errore! Il campo Postal Code richiede 5 cifre!");
    var numero = document.createTextNode("Errore! Il campo Numero richiede solo cifre numeriche!");
    var email = document.createTextNode("Errore! Il campo Email richiede un indirizzo email valido!");
    var confirm = document.createTextNode("Errore! I campi Password e Confirm devono contenere lo stesso valore!");
    var password = document.createTextNode("Errore! I campi Password e Confirm devono contenere lo stesso valore!");
    
    
 //Lo switch assegna ad ogni campo il rispettivo errore, dopo aver controllato in tempo reale il dato immesso dall'utente'
    switch(id){
     
        
        
    case "email":
   if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    var patt=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!patt.test(value)){     
    x.appendChild(email);
    p.appendChild(x);
    errors=1;
    }
            break;
               
    case "password":
            
    var a=true;
    this.pass=value;
    
    if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    
    if(value.length<4){     
    x.appendChild(quattro);
    p.appendChild(x);
    errors=1;
    }
    
    if(value!=this.conf){
    a=false;
    x.appendChild(confirm);
    p.appendChild(x);
    errors=1;
        }
        
    
    break;   
       
        
        
        
    case "confirm":
        
    this.conf=value;
    
     if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}  
    
    if(this.pass!=value||a==false){
    x.appendChild(confirm);
    p.appendChild(x);
    errors=1;
        }
            
            break;
            
        case "number":
          
     if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    var patt=/^[0-9]{1,50}$/;
    if(!patt.test(value)){     
    x.appendChild(numero);
    p.appendChild(x);
    errors=1;
    }
            break;
            
        case "postalCode":
    
     if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    var patt=/^[0-9]{5,5}$/;
    if(!patt.test(value)){     
    x.appendChild(postal);
    p.appendChild(x);
    errors=1;
    }
            break; 
        
        case "username":
       
        case "name":        
            
        case "surname":     
          
        case "street":
     
        case "city":
    if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    
    if(value.length<4){     
    x.appendChild(quattro);
    p.appendChild(x);
    errors=1;
    }
            break;
            
        case "state":
    if(p.hasChildNodes())
    {p.removeChild(p.firstChild);}
    
    if(value.length!=2){     
    x.appendChild(stato);
    p.appendChild(x);
    errors=1;
    }
            break;
            
    }
      checkErrors('submit_registration');
    }


//la funzione  disabilita il pulsante di signup se la variabile errors è maggiore di zero
   function checkErrors(id){
       var e = document.getElementById(id);
       e.disabled=false;
       
       if(errors>0)
       {
           
           e.disabled=true;  
       }
       
       
   }