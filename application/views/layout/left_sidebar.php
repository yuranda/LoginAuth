
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar sidebar-mini"> 
    <section class="sidebar">
      	<div class="user-panel">
        	<div class="pull-left image">
              <img src="<?php echo base_url('public/images/users/default.png') ?>" class="img-circle" alt="User Image">
        	</div>
        	<div class="pull-left info">
          		<p><?php echo $user->first_name.' '.$user->last_name ?></p>
          		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        	</div>
      	</div>
      	<ul class="sidebar-menu" data-widget="tree">
        	<li class="<?php echo active_link_controller('welcome') ?>">
	          	<a href="<?php echo base_url('welcome') ?>">
	            	<i class="fa fa-dashboard"></i> <span>Dashboard</span>
	          	</a>
        	</li>
        <!-- < li class="treeview <?php echo active_link_multiple(array('kepegawaian','kepangkatan','diklat','gaji_berkala','kenaikan_pangkat')); ?>">
              <a href="#">
                  <i class="fa fa-users"></i> <span>Kepegawaian</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo active_link_method('index','kepegawaian').active_link_method('update','kepegawaian').active_link_method('detail_kepangkatan','kepangkatan').active_link_method('create','kepangkatan').active_link_method('create_pangkat','kepangkatan').active_link_method('update','kepangkatan')?>">

                  <a href="<?php echo base_url('kepegawaian') ?>"><i class="fa fa-angle-double-right"></i> Data Kepegawaian
                  <span data-toggle="tooltip" data-placement="top" title="Laporan Belum dibuat" class="label label-danger pull-right"></span>
                  </a>
                  
                  
                </li>
                <li class="<?php echo active_link_method('create','kepegawaian') ?>">
                    <a href="<?php echo base_url('kepegawaian/create') ?>"><i class="fa fa-angle-double-right"></i> Tambah Pegawai</a>
                </li>
                <li class="<?php echo active_link_method('index','kenaikan_pangkat').active_link_method('create','kenaikan_pangkat') ?>">
                    <a href="<?php echo base_url('kenaikan_pangkat/create') ?>"><i class="fa fa-angle-double-right"></i> Kenaikan Pangkat</a>
                </li>
                <li class="<?php echo active_link_method('index','gaji_berkala').active_link_method('create','gaji_berkala').active_link_method('update','gaji_berkala') ?>">
                    <a href="<?php echo base_url('gaji_berkala') ?>"><i class="fa fa-angle-double-right"></i> Gaji Berkala</a>
                </li>
                <li class="<?php echo active_link_method('index','diklat').active_link_method('create','diklat').active_link_method('update','diklat').active_link_method('detail_pegawai','diklat') ?>">
                    <a href="<?php echo base_url('diklat') ?>"><i class="fa fa-angle-double-right"></i> Diklat Pegawai</a>
                </li>
                <li class="">
                    <a href=""><i class="fa fa-angle-double-right"></i> Usulan Satya Lencana</a>
                </li>
              </ul>
          </li> -->
          <li class="treeview <?php echo active_link_multiple(array('pengguna')); ?>">
              <a href="">
                  <i class="fa fa-wrench"></i> <span>Pengaturan</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo active_link_method('index','pengguna').active_link_method('update_user','pengguna') ?>">
                    <a href="<?php echo base_url('pengguna') ?>"><i class="fa fa-angle-double-right"></i> Pengguna Sistem</a>
                </li>
                <li class="<?php echo active_link_method('update','pengguna') ?>">
                    <a href="<?php echo base_url('pengguna/update') ?>"><i class="fa fa-angle-double-right"></i> Pengaturan Akun</a>
                </li>
              </ul>
          </li>
      	</ul>
    </section>
</aside>
<div class="content-wrapper">
    <section class="content-header">
        <?php 
        /**
         * Generated Page Title
         *
         * @return string
         **/
         echo $this->page_title->show();

        /**
         * Generate Breadcrumbs from library
         *
         * @var string
         **/
          echo $this->breadcrumbs->show();
        ?>
    </section>
  <section class="content">
<?php
/* End of file left_sidebar.php */
/* Location: ./application/views/left_sidebar.php */