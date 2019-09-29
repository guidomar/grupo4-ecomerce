@extends('layouts.app')
@section('title') {{$shop->name}} @endsection
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-12 col-md-9 pb-0">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 m-auto">
                <img src="{{ Storage::url($shop->logo) }}" class="img-fluid" alt="{{$shop->name}}">
              </div>
              <div class="col-md-8">
                <div class="card-body py-0">
                  <h3 class="card-title">{{$shop->name}}</h3>
                  <h6 class="card-subtitle mb-2 text-muted">{{$shop->nbhd->name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">
                    @for($i=0; $i<$shop->stars; $i++)
                      <i class="fas fa-star"></i>
                    @endfor
                    @if($dif=5-$shop->stars)
                      @for($i=0;$i<$dif;$i++)
                        <i class="far fa-star"></i>
                      @endfor
                    @endif
                  </h6>
                  <a href="producto.php" class="btn btn-primary btn-block">Reservar</a>
                  <p class="card-text mt-2 lead"></p>
                  <p class="card-text"><a href="#"><i class="fas fa-map-marker-alt"></i>{{" " . $shop->address}}</a></p>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="card-body col-12 pb-0">
                <div class="card-header">
                  <h4 class="card-subtitle"><i class="fas fa-cut"></i> Servicios</h4>
                </div>
                <div class="list-group list-group-flush">
                  @foreach ($shop->products as $product)
                <a href="{{ url('/cart/add/'.$product->id) }}" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        {{$product->name}}
                        <small class="text-muted">{{"$" . $product->price}}</small>
                      </li>
                    </a>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
