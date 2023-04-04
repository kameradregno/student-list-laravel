@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="row mt-5">
        <div class="col-md-4 mx-auto">

            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    <form method="POST" action="{{ url('login') }}">
                        @csrf
                        <h4 class="mb-4">Login</h4>
                        
                        @if (session()->has('error_alert'))
                            <div class="alert alert-dark bg-dark text-light bg-gradient rounded-0">
                                {{ session()->get('error_alert') }}</div>
                        @endif

                        @if (session()->has('alert_msg'))
                            <div class="alert alert-dark bg-dark text-light bg-gradient rounded-0">
                                {{ session()->get('alert_msg') }}</div>
                        @endif

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-0">Alamat email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label rounded-0">Kata Sandi</label>
                            <input type="password" class="form-control rounded-0" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark rounded-0">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
