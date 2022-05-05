<!-- Navigation menu-->
<header class="fixed-top" id="header">
      <div class="nav-container">
        <a href="index.php">
          <img class="logo" src="../images/totoroFilmsLogo.png" alt="Totoro Films" />
        </a>
        <nav class="navbar" id="navbar">
          <ul>
            <li>
              <a class="nav-link scrolling" href="index.php">Home</a>
            </li>
            <li>
              <a class="nav-link scrolling" href="news.php">News</a>
            </li>
            <li><a class="nav-link scrolling" href="contactUs.php">Contact us</a></li>
            <li>
              <a class="nav-link scrolling" href="#footer">About</a>
            </li>
          </ul>
        </nav>

        <?php  
        if(isset($_SESSION['log-key']) && $_SESSION['log-key']){
        ?>
        <a id="main-login" href="login.php"><button>Login</button></a>
        <?php }else{?>
        <a id="main-logout" href="clearSession.php" ><button>logout</button></a>
        <?php }?>

      </div>
</header>
<script src="../session.js"></script>

