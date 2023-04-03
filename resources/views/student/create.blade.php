@extends('layouts.app')

@section('title', 'Siswa Baru')

@section('content')

    {{-- <h3 class="mb-3">Tambah Siswa</h3> --}}

    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Siswa</th>
                <th scope="col">Kelas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="POST" action="{{ url('student') }}" class="mt-5">
                    @csrf
                    <td>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0" style="width: auto;" name="nama"
                                id="nama" aria-describedby="helpId" placeholder="" required>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" class="form-control rounded-0" style="width: auto;" name="kelas"
                                id="kelas" aria-describedby="helpId" placeholder="" required>
                        </div>
                    </td>
                    <td> <button type="submit" class="btn btn-outline-dark rounded-0 mx-3">Simpan Data</button></td>
                </form>
            </tr>
        </tbody>
    </table>

@endsection
