<div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
      <h2>Errore nel Login!</h2>
      <p>Credenziali di accesso errate!
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
</div>
</div>
</div>