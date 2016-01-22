<div id="header">
  <h1>CalciAMM</h1>
  <h2>Proprio quello che aspettavi</h2>
</div>
<div id="menu">
  <ul>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'home') ? 'class="active"' : false; ?>> <a href="index.php?page=home">Home</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'products') ? 'class="active"' : false; ?>> <a href="index.php?page=products">Products</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'class="active"' : false; ?>><a href="index.php?page=about">About Us</a></li>
    <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'signup') ? 'class="active"' : false; ?>><a href="index.php?page=signUp">Sign up</a></li>
  </ul>
</div>