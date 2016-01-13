
<div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
      <h2>Benvenuto su CalciAMM - <?php echo $_SESSION[username]; ?></h2>
      <p>CalciAMM è il migliore sito di e-commerce per magliette e completi da calcio <strong>originali</strong>. Sei già iscritto! Puoi accedere a tutte le funzionalità del sito!
       Puoi effettuare il <a href="./index.php?page=logout">Logout</a>
       
        </div>
    
        
       <div class="content bg1">
      <h2>Osserva il nostro campionario! </h2>
      <p>Abbiamo maglie da calcio, pantaloncini, e scarpe</p>
      <p>Guarda la <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'class="active"' : false; ?> <a href="index.php?page=products">Galleria</a> completa
          	<div id="Galleria">
                        <img title="milan" alt="Foto" src="images/milan.jpg" width="140" height="140"/>
                   
                        <img title="milan" alt="Foto" src="images/milan.jpg" width="140" height="140"/>
                    
                        <img title="milan" alt="Foto" src="images/milan.jpg" width="140" height="140"/>
                                      
      </div>
      </div>
      

    </div>
    
</div>
    </div>