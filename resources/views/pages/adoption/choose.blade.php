@extends('layouts.layout')
@section('title')

<style>

#a-height{
height: 100%;;
}

</style>
@section('content')
    <div id="a-height" class="container my-5">
        <h1 class="text-center mb-5">Chose your action!</h1>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-title">Be an Adopter</div>
                        Hello friends, be one of the parents of an adorable animal here. They need your love and affection.
                        <p></p>
                        <button class="btn btn-primary">
                            Chose
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-title">Looking for Adopters</div>
                        <p>Do your lovely animals need new families who love them too? Find one of them here!</p>
                        <a href="{{ url('/adoption/create') }}">
                            <button class="btn btn-primary">
                                Chose
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
