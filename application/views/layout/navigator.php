<script>
  window.onload = function() {
    checkMenuActive();
  };
  /**
   * @brief check which menu is active
   * @param {} name description
   * @returns {none}
   */
  function checkMenuActive() {
<?php if (isset($menu)) { ?>
      var menu = '<?php echo $menu; ?>';
      switch (menu) {
        case 'home':
          $('#navHomepage').addClass('active');
          break;
        case 'moneyManagement':
          $('#navMoneyManagement').addClass('active');
          break;
      }
<?php } ?>
  }
</script>

<aside class="left-side sidebar-offcanvas">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Hello, Shin</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="" id="navHomepage">
        <a href="<?php echo base_url('') ?>">
          <i class="fa fa-dashboard"></i><span>Dashboard</span>
        </a>
      </li>
      <li class="" id="navMoneyManagement">
        <a href="<?php echo base_url('/moneyManagement') ?>">
          <i class="fa fa-usd"></i><span>Money management</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>