@extends('layouts.app')

@section('title', 'Data Testimoni')

@section('content')

    <style>
        .card-modern {
            border-radius: 18px;
            border: none;
        }

        .table thead th {
            background: #f8f9fa;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: .6px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .badge-status {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 20px;
        }

        .rating-star {
            color: #f1c40f;
            font-weight: 600;
        }
    </style>

    {{-- ===== HEADER ===== --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">
            <i class="fas fa-comments text-primary me-2"></i> Data Testimoni
        </h4>

        <a href="{{ route('testimonials.create') }}" class="btn btn-success shadow-sm">
            <i class="fas fa-plus me-2"></i> Tambah Testimoni
        </a>
    </div>

    {{-- ===== TABLE ===== --}}
    <div class="card card-modern shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Pesan</th>
                            <th class="text-center" width="200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($testimonials as $item)
                            <tr>
                                <td class="fw-semibold">
                                    {{ $item->nama }}
                                </td>

                                <td>
                                    <span class="rating-star">
                                        {{ $item->rating }} ★
                                    </span>
                                </td>

                                <td>
                                    @if ($item->is_approved)
                                        <span class="badge bg-success badge-status">
                                            Approved
                                        </span>
                                    @else
                                        <span class="badge bg-warning text-dark badge-status">
                                            Pending
                                        </span>
                                    @endif
                                </td>

                                <td style="max-width: 300px;">
                                    <small class="text-muted">
                                        {{ Str::limit($item->pesan, 80) }}
                                    </small>
                                </td>

                                <td class="text-center">
                                    {{-- APPROVE --}}
                                    <form action="{{ route('testimonials.approve', $item) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-sm btn-primary btn-icon"
                                            title="{{ $item->is_approved ? 'Unapprove' : 'Approve' }}">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>

                                    {{-- EDIT --}}
                                    <a href="{{ route('testimonials.edit', $item) }}"
                                        class="btn btn-sm btn-warning btn-icon" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- DELETE --}}
                                    <form action="{{ route('testimonials.destroy', $item) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Yakin hapus testimoni ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger btn-icon" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">
                                    <i class="fas fa-comment-slash fs-4 mb-2"></i><br>
                                    Belum ada testimoni
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
