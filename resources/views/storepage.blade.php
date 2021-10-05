@extends('base')
@section('content')
<div class="container-fluid rounded-0" style="background-image:url('{{asset('1img.jpg')}}');height:641px;background-size:cover">
    <div class="row">
        <div class="col-lg-5 mx-auto mt-5">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="mb-3 mt-5">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control"  value="{{old('name')}}">
                    <label class='small text-danger'>{{$errors->first('name')}}</label>

                </div>                
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control"  value="{{old('email')}}">
                    <label class='small text-danger'>{{$errors->first('email')}}</label>
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="text" name="phone" class="form-control"  value="{{old('phone')}}">
                    <label class='small text-danger'>{{$errors->first('phone')}}</label>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection