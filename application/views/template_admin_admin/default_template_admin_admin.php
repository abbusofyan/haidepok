<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <?php echo $page["head_admin_admin"]; ?>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  <?php echo $page["header_admin_admin"]; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php echo $page["sidebar_admin_admin"]; ?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">

        <!-- Zero configuration table -->
        <?php echo $content;?>
        <!--/ Zero configuration table -->

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php echo $page["footer_admin_admin"]; ?>
  <?php echo $page['main_js_admin_admin'];?>

</body>
</html>
