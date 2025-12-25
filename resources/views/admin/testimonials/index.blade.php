@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Data Testimoni</h3>

    <a href="{{ route('testimonials.create') }}" class="btn btn-success mb-3">
        + Tambah Testimoni
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Pesan</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($testimonials as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->rating }} ⭐</td>
                    <td>{{ $item->pesan }}</td>
                    <td>
                        @if ($item->is_approved)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <!-- APPROVE -->
                        <form action="{{ route('testimonials.approve', $item) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-sm btn-primary">
                                {{ $item->is_approved ? 'Unapprove' : 'Approve' }}
                            </button>
                        </form>

                        <!-- EDIT -->
                        <a href="{{ route('testimonials.edit', $item) }}"
                           class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <!-- DELETE -->
                        <form action="{{ route('testimonials.destroy', $item) }}"
                              method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada testimoni</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
