

@extends('layouts.master')


@section('title','Show Page')


@section('content')


    <div class="card">
        <div class="card-body">

            <h1>Show Data one by one</h1>


            <ul>
                <h2> {{ $cagethory->title }}</h2>
                <p>Post by Tun Tun/ 5/8/2022 8:20:43</p>
                <h4> {{ $cagethory->body }}</h4>
            
                <a href="/cagethories" class="btn btn-primary">Go Home</a>
            </ul>
        </div>

    </div>

    @endsection