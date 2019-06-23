@if(count($errors)>0)
  @foreach($errors->all() as $error)
  
  <div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Oh snap!</strong> {{$error}} <a href="#" class="alert-link"></a> and try submitting again.
  </div>
  
  

  
  @endforeach

  @endif

  @if(session('success'))

  
  <div id="suc" class="alert alert-success alert-dismissible fade in mb-2" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a> alert message.
 </div>

<script>
var x = document.getElementById('suc');
setTimeout(function(){ 
  x.style.display = "none";
}, 3000);

</script>

  @endif


   @if(session('error'))
  



   <div id="err" class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and try submitting again.
  </div>

<script>
var x = document.getElementById('err');
setTimeout(function(){ 
  x.style.display = "none";
}, 3000);

</script>
  @endif

