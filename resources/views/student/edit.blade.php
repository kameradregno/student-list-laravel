@extends('layouts.app')

@section('title', 'Edit Data')

@section('content')


    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $counter = 1 @endphp
            <tr>
                <th scope="row">{{ $counter++ }}</th>
                <form method="post" action="{{ url("student/$student->id") }}">
                    @method('patch')
                    @csrf
                    <td>
                        <div class="mb-3">
                            <input type="text" value="{{ $student->nama }}" class="form-control rounded-0" style="width: auto;"
                                name="nama" id="siswa" aria-describedby="helpId" placeholder="">
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" value="{{ $student->kelas }}" class="form-control rounded-0" style="width: auto;"
                                name="kelas" id="kelas" aria-describedby="helpId" placeholder="">
                        </div>
                    </td>
                    <td> <button type="submit" class="btn btn-outline-dark mx-3 rounded-0">Edit Data</button></td>
                </form>
            </tr>
        </tbody>
    </table>


@endsection



