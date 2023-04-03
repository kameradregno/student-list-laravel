@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="row mt-5">
        <div class="col-md-4 mx-auto">

            <div class="card rounded-0" style="width: 18rem;">
                <div class="card-body">
                    <form method="POST" action="{{ url('register') }}">
                        @csrf
                        <h4 class="mb-4">Daftar</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-0" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label rounded-0">Alamat email</label>
                            <input type="email" class="form-control rounded-0" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label rounded-0">Kata Sandi</label>
                            <input type="password" class="form-control rounded-0" id="password" name="password" required>
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi kata sandi</label>
                            <input type="password" class="form-control rounded-0" id="password_confirmation"
                                name="password_confirmation">
                            </div>
                        <button type="submit" class="btn btn-outline-dark rounded-0">Daftar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
