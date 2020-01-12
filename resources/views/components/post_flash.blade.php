@if (session('flash_message'))
  <div class="message alert alert-success">
      {{ session('flash_message') }}
  </div>
@endif
