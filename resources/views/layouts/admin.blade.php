<!DOCTYPE html>
<html lang="en">

<head>
  @section('title','Mentawai | Admin')
  @include('includes.admin.style')
</head>
  <!-- Navbar -->
@include('includes.admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('includes.admin.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
@include('includes.admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('includes.admin.script')


</body>
</html>
