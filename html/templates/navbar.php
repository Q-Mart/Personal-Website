<?php
  $links = array('Home' => 'index.php',
                'About' => 'about.php',
                'Contact' => 'contact.php' );

  function EchoLinks(){
    global $links;

    foreach ($links as $text => $href) {
    echo "<a class='mdl-navigation__link' href='" . $href . "'>" . $text . "</a>";
    }
  }
  ?>

<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout-icon"></div>
    <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Qumarth Jash</span>
      <div class="mdl-layout-spacer"></div>
      <nav class="mdl-navigation">
        <?php 
          EchoLinks();
        ?>
        <a class='mdl-navigation__link' href='https://github.com/Q-Mart'><img src="img/github.png" alt="GitHub"></a>
        <a class='mdl-navigation__link' href='https://uk.linkedin.com/in/qmart'><img src="img/linkedin.png" alt="LinkedIn"></a>

      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Qumarth Jash</span>
    <nav class="mdl-navigation">
      <?php
        EchoLinks();
      ?>

    </nav>
  </div>
  <main class="mdl-layout__content">

