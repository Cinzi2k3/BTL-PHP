<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/dabshot/img/logo/logo.png" rel="icon">
  <title>Điện Máy Xanh</title>
  <link href="/dabshot/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/dabshot/css/ruang-admin.min.css" rel="stylesheet">
  <link href="/dabshot/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  @stack('ckeditor')
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include ('admin.menuleft')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include ('admin.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield ('admin.content') 
        
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
           <div class="copyright text-center my-auto">
            <span>Cinzi &copy; <script> document.write(new Date().getFullYear()); </script> - Đỗ Mạnh Cường
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">HANDSOME</a></b>
            </span>
          </div>
      </div>
      </footer> 
 
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="/dabshot/vendor/jquery/jquery.min.js"></script>
  <script src="/dabshot/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/dabshot/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="/dabshot/js/ruang-admin.min.js"></script>
  <script src="/dabshot/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/dabshot/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  @stack('ckeditor_footer')
  <script>
    $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
    
    
</script>

</body>

</html>