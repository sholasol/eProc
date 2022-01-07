<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>eProc | Old Mutual</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('asset/icon.jpg')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
      <!-- Full calendar -->
      <link href='{{ asset('fullcalendar/core/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('fullcalendar/daygrid/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('fullcalendar/timegrid/main.css')}}' rel='stylesheet' />
      <link href='{{ asset('fullcalendar/list/main.css')}}' rel='stylesheet' />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      @livewireStyles
   </head>
   <body class="two-sidebar">
    <!-- loader Start -->
    <div id="loading">
       <div id="loading-center">

       </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
       <!-- Sidebar  -->
      @if (Auth::user()->utype=="ADM")
         @livewire('admin.admin-sidebar')
      @elseif (Auth::user()->utype=="USR")
         @livewire('user.user-sidebar')
      @elseif (Auth::user()->utype=="PROC")
         @livewire('procurement.procurement-sidebar')
      @elseif (Auth::user()->utype=="FIN")
         @livewire('finance.finance-sidebar')
      @elseif (Auth::user()->utype=="VEN")
         @livewire('vendor.vendor-sidebar')
      @elseif (Auth::user()->utype=="HRM")
         @livewire('h-r.h-r-sidebar')
      @endif


         <!-- Page Content  -->
         {{ $slot }}
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright {{ date('Y') }} <a href="#">Hybridsoft Limited</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('js/jquery.min.js')}}"></script>
      <script src="{{ asset('js/popper.min.js')}}"></script>
      <script src="{{ asset('js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('js/waypoints.min.js')}}"></script>
      <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('js/wow.min.js')}}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('js/apexcharts.js')}}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('js/slick.min.js')}}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('js/select2.min.js')}}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('js/smooth-scrollbar.js')}}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('js/lottie.js')}}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset('js/core.js')}}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset('js/charts.js')}}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset('js/animated.js')}}"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ asset('js/kelly.js')}}"></script>
      <!-- Flatpicker Js -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('js/chart-custom.js')}}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('js/maps.js')}}"></script>
      <script src="{{ asset('js/worldLow.js')}}"></script>
      <script src="{{ asset('js/custom.js')}}"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
        window.addEventListener('success', event => {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Operation successful',
            type: 'success',
            showConfirmButton: true,
            timer: 2000
            }).then(function() {
                //window.location.reload();
                window.location = '{{ route('admin.dashboard') }}';
            });
        })
    </script>
    <script>
        window.addEventListener('user-success', event => {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Operation successful',
            type: 'success',
            showConfirmButton: true,
            timer: 2000
            }).then(function() {
                //window.location.reload();
                window.location = '{{ route('user.dashboard') }}';
            });
        })
    </script>
    <script>
        window.addEventListener('hr-success', event => {
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Operation successful',
            type: 'success',
            showConfirmButton: true,
            timer: 2000
            }).then(function() {
                //window.location.reload();
                window.location = '{{ route('h-r.dashboard') }}';
            });
        })
    </script>

   <script>
      window.addEventListener('redirectDashboard', event => {
         Swal.fire({
         icon: 'success',
         title: 'Success',
         text: 'Operation successful',
         type: 'success',
         showConfirmButton: true,
         timer: 2000
         }).then(function() {
            //window.location.reload();
            window.location = '{{ route('admin.dashboard') }}';
         });
      })
   </script>
   <script>
      function printContent(el){
              var restorepage = document.body.innerHTML;
              var printcontent = document.getElementById(el).innerHTML;
              document.body.innerHTML = printcontent;
              window.print();
              document.body.innerHTML = restorepage;
          }
   </script>
   <script>
    window.addEventListener('show-form', event => {
        $('#form').modal('show');
    });
</script>
      @livewireScripts
      @stack('scripts')
   </body>
</html>
