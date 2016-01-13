<?php include_once './model/FantammDB.php';
?>
<div id="content">
    <div id="columnA">
    <div class="content bg1">
        
        <?php $id = $_REQUEST['id']; 
         
         $db=  FantammDB::instance();
        $query= "SELECT name,description,quantity FROM items WHERE id=$id";
        $result= $db->query($query);
        
        if($db->errno >0){
            
        erorr_log("Errore nell'esecuzione della query $db->errno : $db->error",0);
        }
           else{
        
   
        while($row= $result->fetch_row())
        {
         $url=$row[0];
         $descrizione=$row[1];
         $quantità=$row[2];
         FantammDB::chiudiDB();
           }}
       ?>
        
         <h1><?php echo $descrizione; ?> </h1><p></p>
         <?php echo "<img src=\"images/$url\";>";
          ?>
        
         <p>Solo <?php echo $quantità; ?> rimaste!</p>
          <form id="aggiungiAlCarrello" action="index.php?action=aggiungiAlCarrello&id=<?php echo $id ?>" method="post"> 
          <input type="submit" id="aggiungiAlCarrello" name="aggiungiAlCarrello" value="Aggiungi al carrello!" /></form>
    </div></div></div>


