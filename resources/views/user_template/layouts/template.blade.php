
<!DOCTYPE html>
<html lang="en">
   @include('user_template.layouts.includes.head')
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         @include('user_template.layouts.includes.header_top')
         <!-- header top section start -->
         <!-- logo section start -->
         @include('user_template.layouts.includes.logo')
         <!-- logo section end -->
         <!-- header section start -->
         @include('user_template.layouts.includes.header')
         <!-- header section end -->
         <!-- banner section start -->
         
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!--common part-->
      <div class="container py-5">
         @yield('content')
      </div>
      <!--End common part-->
      <!-- footer section start -->
      @include('user_template.layouts.includes.footer')
      <!-- Javascript files-->
      <script src=" {{ asset('home/js/jquery.min.js') }}"></script>
      <script src=" {{ asset('home/js/popper.min.js') }}"></script>
      <script src=" {{ asset('home/js/bootstrap.bundle.min.js') }}"></script>
      <script src=" {{ asset('home/js/jquery-3.0.0.min.js') }}"></script>
      <script src=" {{ asset('home/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src=" {{ asset('home/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src=" {{ asset('home/js/custom.js') }}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>