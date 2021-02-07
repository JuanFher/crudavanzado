<script src="{{ asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/js/misc.js')}}"></script>
  <script src="{{ asset('assets/js/settings.js')}}"></script>
  <script src="{{ asset('assets/js/todolist.js')}}"></script>
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>     
  @livewireScripts
@yield('scripts')
<script>
    window.livewire.on('msgok', msgOK => {
        toastr.success(msgOK, "info")
    })

    window.livewire.on('msg-error', msgError => {
        toastr.error(msgError, "info")
    })
</script>
