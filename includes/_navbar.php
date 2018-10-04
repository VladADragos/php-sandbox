<nav class="navbar">
    <header class="navbar__header">
        <a  href="./">
            <h1 class="navbar__header__text">
                Time Tuner
            </h1>
        </a>
    </header>
    <ul class="navbar__list">
        <li class="navbar__list__item">
            <a href="./">
                Home
            </a>
        </li>
        <li class="navbar__list__item">
            <a href="./">
                Activities
            </a>
        </li>
        <li class="navbar__list__item">
            <a href="./">
                Routines
            </a>
        </li>
        <li class="navbar__list__item">
            <a href="./">
                Profile
            </a>
        </li>
        <li class="navbar__list__item">
        <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="submit" value="logout" name="logout">
        </form>
        </li>
        
    </ul>
</nav>

<?php
  

  if (isset($_POST['logout'])) {
    setcookie('isLogedIn',false,time()-3600);
    
  }
?>
