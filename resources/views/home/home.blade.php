<div class="container" >
  <h1>Servicios</h1>
  @foreach($motors as $motor)
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$motor['cliente']}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$motor['marca']}}</h6>
        <p class="card-text">{{$motor['modelo']}}</p>
      </div>
    </div>
</br>
  @endforeach
</div>
