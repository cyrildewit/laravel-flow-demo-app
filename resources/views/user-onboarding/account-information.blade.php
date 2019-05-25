@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Account Information</h3>
                <form action="{{ $processsUrl }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                {!! dump($errors) ?? null !!}
            </div>
        </div>
    </div>
</div>

@endsection
