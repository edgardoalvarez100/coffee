@extends('coffeebasic::layouts.admin')

@section('title', 'CoffeeBasic Sell')
@section('actions')

@endsection
@section('content')
    <style>
        .col-centered {
            float: none;
            margin: 0 auto;
        }

    </style>

    <div class="row text-center " style="margin-left:5px; margin-right:5px;">
        <div class="col-12">
            <h4 style="margin:5px;"><b>Sell</b></h4>
        </div>

        <div class="col-lg-6 col-centered">
            <div class="card border-blue-bottom text-left" style="padding:30px;">
                <form action="">
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->namePrivate }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product">Product</label>
                        <select name="product" id="product" class="form-control">
                            <option value="Livery A"> Livery A</option>
                            <option value="Livery B"> Livery B</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" />
                    </div>

                    <button type="submit" class="btn btn-primary">Sell</button>

                </form>

            </div>
        </div>
    </div>

@endsection
