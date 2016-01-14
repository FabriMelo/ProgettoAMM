<div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
            <h2>Il tuo profilo</h2>
            
            <?php  
        $username= $_SESSION['username']; 
        $db=  FantammDB::instance();
        $query= "SELECT email, name, surname, street, number, city, state FROM user WHERE username= '$username'";
       
        $result= $db->query($query);
        
        if($db->errno >0){
            
        echo "Errore nell'esecuzione della query $db->errno : $db->error",0;
        }
           else{
        
   
        while($row= $result->fetch_row())
        {
         $email=$row[0];
         $name=$row[1];
         $surname=$row[2];
         $street=$row[3];
         $number=$row[4];
         $city=$row[5];
         $state=$row[6];
         FantammDB::chiudiDB();
           }}
       ?>
            
            
            <p>Nome: <?php echo $name." ".$surname ?> </p>  
            <p>Email: <?php echo $email; ?></p>
            <p>Indirizzo: <?php echo $street." ".$number.", ".$city.", ".$state; ?></p> 
        </div>
    </div>
  </div>
</div>
