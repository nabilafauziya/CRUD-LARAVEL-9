@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Wali
                    </div>
                    <div class="card-body">
                        
                        <div class="mb-3">
                            <label class="form-label">Nama Wali</label>
                            <input type="text" class="form-control " name="nama" value="{{ $wali->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Wali</label>
                            @if (isset($wali) && $wali->foto)
                            <p>
                                <img src="{{asset('images/wali/'.$wali->foto}}" class="img-rounded img-responsive"
                                    style="width:75px; height:75px;">
                            </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" name="nama" value="{{ $wali->nama }}"
                                readonly>

                        </div>
                        
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('wali.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection