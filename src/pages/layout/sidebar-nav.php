<?php 
$active= null;
    if(isset($_GET['active'])) {
        $active = $_GET['active'];
    }
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jan Kowalski</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Szukaj...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU GŁÓWNE</li>
        <!--Kokpit-->
        <li class="<?= is_null($active)? 'active': ''?>">
          <a href="/">
            <i class="fa fa-tachometer"></i> <span>Kokpit</span>
          </a>
        </li>
        <!--Wyślij wiadomość -->
        <li class="<?= (!is_null($active) && $active=='send-email' )? 'active': ''?>">
          <a href="email.php?active=send-email">
            <i class="fa fa-envelope-o"></i> <span>Wyślij wiadomość</span>
          </a>
        </li>
        <!--Aktualności -->
        <li class="<?= (!is_null($active) && $active=='news' )? 'active': ''?>">
          <a href="404.php?active=news">
            <i class="fa fa-newspaper-o"></i> <span>Aktualności</span>
          </a>
        </li>
        <!-- Księgowość -->
        <li class="<?= (!is_null($active) && $active=='book' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa fa-money"></i>
            <span>Księgowość</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=book"><i class="fa fa-circle-o"></i> Paski wynagrodzenia </a></li>
                <li><a href="404.php?active=book"><i class="fa fa-circle-o"></i> Premie</a></li>
                <li><a href="404.php?active=book"><i class="fa fa-circle-o"></i> Delegacje</a></li>
          </ul>
        </li>
        <li class="<?= (!is_null($active) && $active=='marketing' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa fa-bar-chart"></i>
            <span>Marketing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=marketing"><i class="fa fa-circle-o"></i> Materiały do pobrania </a></li>
          </ul>
        </li>
        <!--Sprzedaż-->
        <li class="<?= (!is_null($active) && $active=='sales' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa-usd"></i>
            <span>Sprzedaż</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=sales"><i class="fa fa-circle-o"></i> Aktualności sprzedaży </a></li>
                <li><a href="404.php?active=sales"><i class="fa fa-circle-o"></i> Słupki sprzedażowe</a></li>
                <li><a href="404.php?active=sales"><i class="fa fa-circle-o"></i> Produkty </a></li>
                <li><a href="404.php?active=sales"><i class="fa fa-circle-o"></i> Promocje i rabaty </a></li>
          </ul>
        </li>
        <!--Kadry-->
        <li class="<?= (!is_null($active) && $active=='hr' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Kadry</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=hr"><i class="fa fa-circle-o"></i> Lista pracowników </a></li>
                <li><a href="404.php?active=hr"><i class="fa fa-circle-o"></i> Kalendarz urlopowy </a></li>
                <li><a href="404.php?active=hr"><i class="fa fa-circle-o"></i> Moje urlopy </a></li>
                <li><a href="404.php?active=hr"><i class="fa fa-circle-o"></i> Dodaj urlop </a></li>
          </ul>
        </li>
        <!--Administracja-->
        <li class="<?= (!is_null($active) && $active=='admin' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Administracja</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=admin"><i class="fa fa-circle-o"></i> Akty prawne </a></li>
                <li><a href="404.php?active=admin"><i class="fa fa-circle-o"></i> Dokumenty do pobrania</a></li>
                <li><a href="404.php?active=admin"><i class="fa fa-circle-o"></i> Obieg dokumentów </a></li>
                <li><a href="404.php?active=admin"><i class="fa fa-circle-o"></i> Wnioski </a></li>
          </ul>
        </li>
        <!--IT-->
        <li class="<?= (!is_null($active) && $active=='it' )? 'active': ''?> treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>IT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="404.php?active=it"><i class="fa fa-circle-o"></i> Zgłoś błąd </a></li>
                <li><a href="404.php?active=it"><i class="fa fa-circle-o"></i> Info </a></li>
          </ul>
        </li>
        <!--Zadania -->
        <li class="<?= (!is_null($active) && $active=='tasks' )? 'active': ''?>">
          <a href="404.php?active=tasks">
            <i class="fa fa-tasks"></i> <span>Moje zadania</span>
          </a>
        </li>
        <!--cele -->
        <li class="<?= (!is_null($active) && $active=='cele' )? 'active': ''?>">
          <a href="404.php?active=cele">
            <i class="fa fa-bullseye"></i> <span>Cele do realizacji</span>
          </a>
        </li>
        <!--Baza wiedzy -->
        <li class="<?= (!is_null($active) && $active=='base' )? 'active': ''?>">
          <a href="404.php?active=base">
            <i class="fa fa-database"></i> <span>Baza wiedzy</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

