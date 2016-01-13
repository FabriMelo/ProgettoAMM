<div id="header">
  <h1>CalciAMM- UTENTE REGISTRATO</h1>
  <h2>Designed by Fabrizio Meloni  </h2>
</div>
<div id="menu">
  <ul>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'home') ? 'class="active"' : false; ?>> <a href="index.php?page=home">Home</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'class="active"' : false; ?>> <a href="index.php?page=products">Products</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'carrello') ? 'class="active"' : false; ?>><a href="index.php?page=carrello">Carrello</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'class="active"' : false; ?>><a href="index.php?page=about">About Us</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'profilo') ? 'class="active"' : false; ?>><a href="index.php?page=profilo">Il tuo profilo</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'logout') ? 'class="active"' : false; ?>><a href="index.php?page=logout">Logout</a></li>
  </ul>
</div>