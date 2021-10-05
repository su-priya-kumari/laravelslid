@extends('base')
@section('content')

<div style="text-align:center;">
    <div id="carouselExampleControls" class="carousel slide w-80" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100 h-10" src="{{asset('2img.jpg')}}" alt="First slide"  width="90%">
                        <div class="carousel-caption">
                            <h3 class="text-dark">FOR USER</h3>
                            <hr class="text-dark">
                            <p class="text-dark">Fill Your Details !</p>
                            <p class="text-dark">Click on Insert Button...</p>
                            <a class="btn btn-success text-white" href="{{route('storepage')}}">Insert</a>
                        </div>
                </div> 
                <div class="carousel-item active">
                    <img class="d-block w-100 h-50" src="{{asset('1img.jpg')}}" alt="Second slide"  width="90%">
                        <div class="carousel-caption">
                            <h3 class="text-dark">FOR USER</h3>
                            <hr class="text-dark">
                            <p class="text-dark">Fill Your Details !</p>
                            <p class="text-dark">Click on Insert Button...</p>
                            <a class="btn btn-success text-white" href="{{route('storepage')}}">Insert</a>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('3img.jpg')}}"  alt="Third slide"  width="90%">
                        <div class="carousel-caption">
                            <h3 class="text-dark">FOR USER</h3>
                            <hr class="text-dark">
                            <p class="text-dark">Fill Your Details !</p>
                            <p class="text-dark">Click on Insert Button...</p>
                            <a class="btn btn-success text-white" href="{{route('storepage')}}">Insert</a>
                        </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev btn" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn"  type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <table class="table">
                <h2 class="text-center">All DATA</h2>
                <hr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                </tr>
                @endforeach
            </table>                    
        </div>
    </div>
</div>
@endsection