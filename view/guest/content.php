
<div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
      <h2>Benvenuto su CalciAMM</h2>
      <p>CalciAMM è il migliore sito di e-commerce per magliette e completi da calcio <strong>originali</strong>. 
          Iscriviti, e inizia subito ad acquistare la tua maglia da calcio preferita!

      <p>
          &raquo;&nbsp;Fai <strong>Login</strong> 
      
      <form name="login" action=index.php?action=login method="POST">    
            <input type="text" id="name" name="username" placeholder="Username">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
        </form>
      
      
      <p></p>
      &raquo;&nbsp;O <?php echo (isset($_GET['page']) && $_GET['page'] == 'signUp') ? 'class="active"' : false; ?> <a href="index.php?page=signUp"><strong>Registrati</strong></a> se non l'hai ancora fatto<p> 
    

        </div>
    
       <div class="content bg1">
      <h2>Inizia ad osservare il nostro campionario! </h2>
      <p>Abbiamo maglie da calcio e scarpe</p>
      
          	<div id="Galleria">
                        <img title="milan" alt="Foto" src="images/milan.jpg" width="140" height="140"/>
                   
                        <img title="milan" alt="Foto" src="images/italia.jpg" width="140" height="140"/>
                    
                        <img title="milan" alt="Foto" src="images/scarpa2.jpg" width="140" height="140"/>
                   
                   
      </div>
      <p>Guarda la <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'class="active"' : false; ?> <a href="index.php?page=products">Galleria</a> completa
      </div>
      

      </div>
      
    
</div>
    </div>