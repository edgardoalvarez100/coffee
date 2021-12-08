@extends('coffeebasic::layouts.admin')

@section('title', 'CoffeeBasic')
@section('actions')
    <li>
        <a href="{{ url('/coffeebasic/admin/create') }}">
            <i class="ti-plus"></i>
            Add New</a>
    </li>
@endsection
@section('content')

    <div class="card border-blue-bottom" style="margin-bottom: 10px;">
        <div class="content">
            <p>This module is designed to provide basic features for a Virtual Airline to operate</p>
            <p>
                Documentation about this module can be found in the <b>README.md</b> file or at GitHub via this link
                <a href="https://github.com/edgardoalvarez100/coffee" target="_blank" title="GitHub">Online
                    Readme</a>
            </p>
            <hr>
            <p><a href="https://github.com/edgardoalvarez100" target="_blank">&copy; Edgardo Alvarez</a></p>
        </div>
    </div>
    <div class="row text-center" style="margin-left:5px; margin-right:5px;">
        <h4 style="margin:5px;"><b>Admin Features</b></h4>

        <div class="col-sm-12">
            <div class="col-sm-3">
                <div class="card border-blue-bottom" style="padding:10px;">
                    <a href="{{ route('admin.coffeebasic.sell') }}">Sell things</a>
                    <br><br>
                    sell things to users
                </div>

            </div>

        </div>

    </div>

@endsection
