@if(session()->has('flash'))
    <script>toastr.error("{{ session('flash')}}", "¡Oops!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
@elseif(session()->has('success'))
    <script>toastr.success("{{ session('success')}}", "¡Exitoso!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
@elseif(session()->has('info'))
    <script>toastr.info("{{ session('info')}}", "¡Información!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
@elseif(session()->has('warning'))
    <script>toastr.warning("{{ session('warning')}}", "¡Alerta!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
@elseif(session()->has('error'))
    <script>toastr.error("{{ session('error')}}", "¡Error!", {timeOut:5000, progressBar:true, positionClass : 'toast-top-center'})</script>
@endif