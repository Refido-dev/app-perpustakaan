@extends('layouts.app')

@section('title', 'Edit Peminjaman')

@section('content')
    <h1>Edit Peminjaman</h1>
    <p><a href="{{ route('loans.index') }}">&larr; Kembali ke daftar peminjaman</a></p>

    <p><strong>Anggota:</strong> {{ $loan['member']['nama'] }}</p>
    <p><strong>Buku:</strong>
        @foreach ($loan['loanItems'] as $item)
            {{ $item['book']['judul'] }}@if (! $loop->last), @endif
        @endforeach
    </p>

    <form action="{{ route('loans.update', $loan['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="tanggal_pinjam" value="{{ $loan['tanggal_pinjam'] }}">

        <label for="tanggal_kembali">Tanggal Kembali</label>
        <input type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali', $loan['tanggal_kembali']) }}">
        @error('tanggal_kembali')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="status">Status</label>
        <select name="status" id="status">
            @foreach (['dipinjam', 'dikembalikan', 'terlambat'] as $s)
                <option value="{{ $s }}" @selected(old('status', $loan['status']) == $s)>{{ ucfirst($s) }}</option>
            @endforeach
        </select>
        @error('status')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">Perbarui</button>
    </form>
@endsection
