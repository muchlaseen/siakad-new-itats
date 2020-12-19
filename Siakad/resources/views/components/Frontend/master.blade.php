<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  {{-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/front/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    @include('components.Frontend.sidebar')
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      
      @include('components.Frontend.header')
      

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        @yield('content')
        {{-- <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p> --}}
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $(".menu-toggle").click(function(e) {
      e.preventDefault();
      // $("#wrapper").toggleClasss('toggled');
      $("#wrapper").toggleClass("toggled");
    });

    // $(".menu-toggle").click(function(e){
    //   e.preventDefault();
    //   $(this).css('#check > label > i',"fas fa-times");
    // });
  </script>

</body>

</html>
