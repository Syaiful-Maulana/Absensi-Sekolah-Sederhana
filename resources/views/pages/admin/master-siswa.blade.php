@extends('layouts.app')

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Master</a></li>
            <li class="breadcrumb-item active" aria-current="page">Siswa</li>
        </ol>
    </div>
    {{-- ipa1 --}}
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPA 1</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ipa1/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ipa1/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ipa1/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ipa2 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPA 2</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ipa2/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ipa2/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ipa2/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ipa3 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPA 3</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ipa3/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ipa3/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ipa3/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ips1 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPS 1</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ips1/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ips1/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ips1/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ips2 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPS 2</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ips2/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ips2/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ips2/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ips1 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPS 3</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ips3/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ips3/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ips3/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- ips1 --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">IPS 4</h5>
                    <div class="list-group">
                        <a href="{{ Request::url() }}/ips4/X" class="list-group-item list-group-item-action">Kelas X</a>
                        <a href="{{ Request::url() }}/ips4/XI" class="list-group-item list-group-item-action">Kelas XI</a>
                        <a href="{{ Request::url() }}/ips4/XII" class="list-group-item list-group-item-action">Kelas XII</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
@endsection
