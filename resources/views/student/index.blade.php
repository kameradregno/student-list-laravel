@extends('layouts.app')

@section('title', 'DataSekul')

@section('content')

<div class="col-sm-auto col-md-auto mx-auto mx-lg-auto mx-md-auto mx-sm-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1 @endphp
            @foreach ($students as $student)
                <tr>
                    <th scope="row">
                        <p class="me-5">{{ $counter++ }}</p>
                    </th>
                    <td>
                        <p class="me-5">{{ $student->nama }}</p>
                    </td>
                    <td>
                        <p class="me-5">{{ $student->kelas }}</p>
                    </td>
                    <td>
                        <a href="{{ url("student/$student->id/edit") }}" class="btn btn-outline-dark rounded-0"
                            style="margin: auto;">Edit Data</a>
                    </td>
                    <td>
                        <form action="{{ url("student/$student->id") }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" style="margin: auto;" class="btn btn-outline-dark rounded-0">Hapus
                                Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </div>

    @endsection
