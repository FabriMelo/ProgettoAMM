<html>
<head>
<script>

function submitForm()
{ 
    var http; 
    try {  http = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   http = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  http = new XMLHttpRequest();     }
          catch (e3) {  http = false;   }
        }
     }
   
    http.onreadystatechange  = function()
    { 
         if(http.readyState  == 4)
         {
              if(http.status  == 200) 
                  document.ajax.dyn="Received:"  + http.responseText; 
              else
                 document.ajax.dyn="Error code " + http.status;
         }
    }; 
 
   http.open(GET, "index.php",  true); 
   http.send(null); 
} 

</script>
</head>
                  
<body><div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
           <FORM method="POST" name="ajax" action="">                  
         <INPUT type="BUTTON" value="Submit"  ONCLICK="submitForm()">
         <INPUT type="text" name="dyn"  value=""> 
    </FORM>
        </div>
    </div>
  </div>
</div>
    
 </body>
 </html>
