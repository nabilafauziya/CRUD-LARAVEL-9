@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NIS</label>
                            <input type="text" class="form-control " name="nis" value="{{ $nilai->nis }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Mata Pelajaran</label>
                            <input type="text" class="form-control " name="nis" value="{{ $nilai->kode }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nilai</label>
                            <input type="text" class="form-control " name="nis" value="{{ $nilai->nilai }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Indeks Nilai</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $nilai->indeks }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('siswa.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection