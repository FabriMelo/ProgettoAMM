<div id="content-wrap">
  <div id="content">
    <div id="columnA">
        <div class="content bg1">
            <h2>Il tuo profilo</h2>
            <p>Nome: <?php echo $_SESSION["username"]; ?></p>
            <p>Cognome: <?php echo './model/user::getUsername()'; ?></p>
        </div>
    </div>
  </div>
</div>
