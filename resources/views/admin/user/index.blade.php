@extends('layouts.admin.app')
@section('content')

<!-- start content// -->
<div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
        <h1 class="h4">Data Pelanggan</h1>
        <p class="mb-0">List data seluruh pelanggan</p>
    </div>
    <div>

        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    </div>
</div>

</div>
<!-- end content// -->

@endsection

