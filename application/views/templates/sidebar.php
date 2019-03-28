
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets/image/profile/'.$dbase['image']);?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $dbase['nama']; ?></p>
          <a>Level ID <?= $dbase['level_id']; ?></a>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
          <a href="<?= base_url('ticket');?>">
            <button type="button" class="btn btn-success">Open Ticket</button>
          </a>
        </li>

        <li class="<?php if($this->uri->segment(1)=="dashboard"||$this->uri->segment(1)==""){echo "active";}?>">
          <a href="<?= base_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(2)=="edit_profile"){echo "active";}?>">
          <a href="<?= base_url('profile/edit_profile');?>">
            <i class="fa fa-users"></i> <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(2)=="daftar"){echo "active";}?>">
          <a href="<?= base_url('hukdis/daftar');?>">
            <i class="fa fa-user-times"></i> <span>Daftar Hukdis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(2)=="search"){echo "active";}?>">
          <a href="<?= base_url('search/');?>">
            <i class="fa fa-search"></i> <span>Cari Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>

    
  </aside>
