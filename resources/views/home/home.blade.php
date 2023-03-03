@include('layouts.app')

<div class="container">
  @if(session('message'))
  <div class="alert alert-success" role="alert">
      {{session('message')}}
  </div>
  @endif
  @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
  @endif
  <h1>Servicios</h1>
  @foreach($motors as $motor)
    <div class="card" style="width: 18rem;">
    <div class="d-flex justify-content-center">
      <div class="col-md-4">
        <img src="{{$motor['img']}}" class="card-img" alt="...">
      </div>
    </div>
      <div class="card-body">
        <!-- <h5>{{$motor['img']}}</h5> -->
        <h5 class="card-title">{{$motor['cliente']}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$motor['marca']}}</h6>
        <p class="card-text">{{$motor['modelo']}}</p>
      </div>
    </div>
  </br>
  @endforeach
</div>
