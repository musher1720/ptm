@extends('layouts.master')

@section('content')
    {{-- <head>
    <title>Laravel 8 Excel CSV Import/Export - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head> --}}


    <div class="container" style="margin-top: 5rem;">
        @if ($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Success!</strong> {{ $message }}
            </div>
        @endif
        {!! Session::forget('success') !!}
        <br />
        <h2 class="text-title"></h2>
        <label style="color:orange">Perhatian!!! Sistem hanya menerima fail berbentuk .xls/xlsx
            sahaja.</label><br>
        Muat turun dan sila gunakan fail excel ini sebagai format tetap : <a href="./contoh/senaraiStafBaru.xls"><b><u>Sila
                    Klik</u></b></a><br><br>
        {{-- <a href="{{ route('exportExcel', 'xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
        <a href="{{ route('exportExcel', 'xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        <a href="{{ route('exportExcel', 'csv') }}"><button class="btn btn-success">Download CSV</button></a> --}}
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ route('importExcel') }}"
            class="form-horizontal" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="file">Sila Pilih Fail :</label>
            <input type="file" name="import_file" />
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
