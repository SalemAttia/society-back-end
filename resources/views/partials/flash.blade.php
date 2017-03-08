@if(session()->has('flash_massege'))
<script type="text/javascript">
  swal({
  title: "{{ session('flash_massege.title') }}",
  text: "{{ session('flash_massege.message') }}",
  type: "{{ session('flash_massege.type') }}",
  timer:2000,
  confirmButtonText: false
});
</script>
@endif