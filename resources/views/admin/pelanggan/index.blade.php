@extends('admin.layout.app')

@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Data Pelanggan</h1>
                <p class="mb-0">List data seluruh pelanggan</p>
            </div>
            <div>
                <a href="" class="btn btn-success text-white"><i class="far fa-question-circle me-1"></i> Tambah
                    Pelanggan</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">

                        <form method="GET" action="{{ route('pelanggan.index') }}" class="mb-3">
                            <div class="row align-items-center">

                                {{-- 1. Gender Filter (Col 2) --}}
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <select name="gender" class="form-select" onchange="this.form.submit()">
                                        <option value="">All Gender</option>
                                        <option value="Male" {{ request('gender') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ request('gender') == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                    </select>
                                </div>

                                {{-- 2. Search Bar (Col 3) --}}
                                <div class="col-md-3 mb-3 mb-md-0">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control" id="exampleInputIconRight"
                                            value="{{ request('search') }}" placeholder="Search nama atau email..."
                                            aria-label="Search">

                                        {{-- Tombol submit untuk Search --}}
                                        <button type="submit" class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                {{-- 3. Tombol Reset (Opsional, hanya tampil jika ada filter aktif) --}}
                                @if (request('search') || request('gender'))
                                    <div class="col-md-auto">
                                        <a href="{{ route('pelanggan.index') }}"
                                            class="btn btn-sm btn-outline-secondary">Reset Filter</a>
                                    </div>
                                @endif

                            </div>
                        </form>

                        <table id="table-pelanggan" class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0">First Name</th>
                                    <th class="border-0">Last Name</th>
                                    <th class="border-0">Birthday</th>
                                    <th class="border-0">Gender</th>
                                    <th class="border-0">Email</th>
                                    <th class="border-0">Phone</th>
                                    <th class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Ganti $pelanggans menjadi $dataPelanggan --}}
                                @foreach ($dataPelanggan as $pelanggan)
                                    <tr>
                                        <td class="border-0">{{ $pelanggan->first_name }}</td>
                                        <td class="border-0">{{ $pelanggan->last_name }}</td>
                                        <td class="border-0">{{ $pelanggan->birthday }}</td>
                                        <td class="border-0">{{ $pelanggan->gender }}</td>
                                        <td class="border-0">{{ $pelanggan->email }}</td>
                                        {{-- Jangan lupa tambahkan kolom 'phone' dan 'Action' agar sesuai dengan thead --}}
                                        <td class="border-0">{{ $pelanggan->phone }}</td>
                                        <td class="border-0">Action Links</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $dataPelanggan->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
