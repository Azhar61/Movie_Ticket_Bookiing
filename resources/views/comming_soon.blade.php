@extends('layout')
@section('content')
    <section>
        <div class="container-fluid text-center bg-primary " style="margin-top: 3rem;">
            <h2 class="text-white p-3">Commimg Soon Movies</h2>
        </div>
    </section>
    <div class="container d-flex p-5 flex-wrap ">
    @foreach($cmdata as $item)
        <div class="card p-2 m-3" style="width: 16rem; ">
            <img class="card-img-top" src="images/{{$item['mimage']}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$item['mtitle']}}</h5>
             <p class="card-text text-muted">{{$item['mdes']}}</p>
             <button type="button" class="btn btn-primary"  value ="{{$item['mtrailer']}}" id="trailerid" onclick="showModal()"><i class="fa fa-play-circle m-1"></i>Trailer</button>
             
            
            </div>
          </div>
          @endforeach
    </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <iframe width="760" height="343" id="trailerv" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<script>
    function showModal() {
        var buttonValue = document.getElementById('trailerid').value;
        console.log(buttonValue);
        document.getElementById('trailerv').src = buttonValue;
      $('#myModal').modal('show');
  }
</script>

   


@endsection

