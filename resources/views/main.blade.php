@extends('layouts.app')

@section('title', 'Page Title')
@section('nav')
<div>
    <div class="navbar-contacts mx-auto">
        <div class="row">
            <div class="col"><span>Follow Us On</span></div>
            <div class="col contacts">
                <span>Contact us : +94 312227999 / info@wingstravel.lk</span>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <ul class="d-flex">
                    @foreach ($socials as $img)
                        <li><a href="#" style="background-image: url({{ $dir.$img }})"></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col contacts">+94 (76) 692 1124 Daisy +94 (76) 692 1125 Umavi</div>
        </div>
    </div>
    <div class="border border-right-0 border-left-0 border-info bg-light">
    <nav class="navbar navbar-expand-xl navbar-light bg-light mx-auto p-0">
        <a class="navbar-brand my-1" href="#">Wings For World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Visit Sri Lanka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Discover World</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Easy Visa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Work with Us</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
</div>
@endsection
@section('corousel')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/slider-1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second slide label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/slider-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/slider-3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection
@section('promo-cards')
<div class="main-card-cont">
    <div class="cards-grid d-flex">
        <div class="card-add card text-center">
            <div class="card-body w-100">
                <h5 class="card-title font-weight-bold">WINGS FOR WORLD</h5>
                <h6 class="card-subtitle">Specially For You</h6>
            </div>
            <img class="card-img-bottom card-add-img" src="/images/TOUR_02.jpg" alt="promotion">
            <div class="card-footer w-100">
                <span>CALL US FOR MORE INFOMATION</span>
            </div>
        </div>
        <div class="cards-cont row">
            <div class="grid-item-js card">
                    <div class="card-img-top card-img-1 d-flex"><div class="m-auto">Read more</div></div>
                    <div class="card-footer border-0">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="grid-item-js card">
                    <div class="card-img-top card-img-2 d-flex"></div>
                    <div class="card-footer border-0">
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            

            <div class="w-100"></div>

            <div class="grid-item-js card">
                <div class="card-img-top card-img-2 d-flex"></div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="grid-item-js card">
                <div class="card-img-top card-img-2 d-flex"></div>
                <div class="card-footer border-0">
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <!-- <div class="card mx-4">
            <div class="m-4 rounded card-img-top card-img-2 d-flex"></div>
            <div class="card-footer border-0">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card mx-4">
            <div class="m-4 rounded card-img-top card-img-2 d-flex"></div>
            <div class="card-footer border-0">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <div class="buffer"></div> -->
    </div>
</div>
@endsection
@section('sidebar')
    @parent
    <!-- <img src="/images/facebook.png"> -->
    <!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
    <!-- <p>This is my body content.</p> -->
@endsection
