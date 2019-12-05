@extends('layouts.layout')
@section('title')

@section('header')

@endsection

@section('content')

      <!-- Page Content -->
    <div class="container pt-5">
        @if (Auth::guest())
        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
            <h1 class="display-3">A Warm Welcome!</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
        </header>
        @else
        @endif


        <div class="card-title text-center">
            <h1>Make <font class="text-danger">us</font> your family</h1>
            <img src="http://pluspng.com/img-png/pet-care-png--390.png" width="100" alt="paws logo">
        </div>
        <div class="border border-info px-3 pt-3">
        <!-- Page Features -->
        <div class="row text-center">
        @php
        $i=1;
        @endphp
        @foreach ($data as $show)
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">
                {{-- <img class="card-img-top" src="/public/images/{{$show->image}}" alt=""> --}}
                <img class="card-img-top" src="{{ URL::to('/') }}/images/{{ $show->image }}" class="img-thumbnail"/>
                <div class="card-body">
                <h4 class="card-title">{{$show->title}}</h4>
                    <p class="card-text">{{$show->description}}</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        @php
        if ($i++ == 8) break;
        @endphp
        @endforeach

        </div>
        <!-- /.row -->
        </div>

        <div class="card-title text-center mt-3">
            <h1>L<font class="text-danger">oo</font>king for Pet Care?</h1>
            <img src="http://pluspng.com/img-png/pet-care-png--390.png" width="100" alt="paws logo">
        </div>
        <div class="border border-info px-3 pt-3 mb-3">
        <!-- Page Features -->
        <div class="row text-center">
        @php
        $i=1;
        @endphp
        @foreach ($data as $show)
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card h-100">
                {{-- <img class="card-img-top" src="/public/images/{{$show->image}}" alt=""> --}}
                <img class="card-img-top" src="{{ URL::to('/') }}/images/{{ $show->image }}" class="img-thumbnail"/>
                <div class="card-body">
                <h4 class="card-title">{{$show->title}}</h4>
                    <p class="card-text">{{$show->description}}</p>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        @php
        if ($i++ == 8) break;
        @endphp
        @endforeach

        </div>
        <!-- /.row -->
        </div>

    </div>
      <!-- /.container -->
@endsection

@section('footer')

@endsection
