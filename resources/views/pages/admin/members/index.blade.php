@extends('layouts.app')

@section('title', 'Kelola Members - Admin MREC')

@section('content')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="min-h-screen bg-[#FBFBFC] pt-28 pb-16">
    <div class="max-w-[1280px] mx-auto px-6">
        
        <!-- Header Halaman Admin -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8 bg-white p-6 rounded-2xl border border-gray-200 shadow-sm">
            <div>
                <h1 class="font-poppins font-semibold text-2xl text-gray-900">Kelola Anggota MREC</h1>
                <p class="font-hanken text-sm text-gray-500 mt-1">Daftar seluruh anggota MREC yang terdaftar di sistem.</p>
            </div>
            
            <a href="{{ route('admin.members.create') }}" 
               class="px-5 h-11 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-sm rounded-xl transition-all shadow-sm flex items-center justify-center gap-2 shrink-0">
                <i class="fa-solid fa-plus"></i>
                <span>Tambah Member Baru</span>
            </a>
        </div>

        <!-- Notification Alert -->
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl font-hanken text-sm flex items-center gap-2">
                <i class="fa-solid fa-circle-check text-green-600"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Tabel Data Member -->
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-gray-600 font-poppins font-semibold text-xs uppercase tracking-wider">
                            <th class="py-4 px-6">Foto</th>
                            <th class="py-4 px-6">Nama Lengkap</th>
                            <th class="py-4 px-6">Kategori</th>
                            <th class="py-4 px-6">Role / Title</th>
                            <th class="py-4 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="member-table-body" class="divide-y divide-gray-100 font-hanken text-sm text-gray-800">
                        @forelse($members ?? [] as $member)
                            <tr id="member-row-{{ $member->id }}" class="group hover:bg-gray-50/80 transition-colors">
                                <td class="py-4 px-6">
                                    @if($member->category === 'alumni' or empty($member->image))
                                        <div class="w-10 h-10 rounded-full bg-gray-100 border border-gray-200 flex items-center justify-center text-gray-400 font-bold text-xs">
                                            N/A
                                        </div>
                                    @else
                                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" class="w-10 h-10 rounded-full object-cover border border-gray-200">
                                    @endif
                                </td>
                                
                                <td class="py-4 px-6 font-semibold text-gray-900">
                                    {{ $member->name }}
                                </td>

                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-red-50 text-[#D21502] border border-red-100 uppercase">
                                        {{ str_replace('_', ' ', $member->category) }}
                                    </span>
                                </td>

                                <td class="py-4 px-6 text-gray-600">
                                    {{ $member->role ?? '-' }}
                                </td>

                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        
                                        @if(in_array($member->category, ['developer', 'designer']))
                                            <form action="{{ route('admin.members.moveToAlumni', $member->id) }}" method="POST" onsubmit="return confirm('Pindahkan {{ $member->name }} ke Alumni?')">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" 
                                                        class="opacity-0 group-hover:opacity-100 transition-opacity duration-200 px-3 py-1.5 rounded-lg bg-amber-50 hover:bg-amber-100 text-amber-700 font-poppins text-xs font-semibold flex items-center gap-1 border border-amber-200 shadow-xs" 
                                                        title="Pindahkan ke Alumni">
                                                    <i class="fa-solid fa-user-graduate text-xs"></i>
                                                    <span>Ke Alumni</span>
                                                </button>
                                            </form>
                                        @endif

                                        <!-- Tombol Edit -->
                                        <a href="{{ route('admin.members.edit', $member->id) }}" 
                                           class="px-3 py-1.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-700 font-poppins text-xs font-semibold flex items-center gap-1 transition-all" title="Edit">
                                            <i class="fa-solid fa-pen text-xs"></i>
                                            <span>Edit</span>
                                        </a>

                                        <!-- Tombol Hapus (AJAX) -->
                                        <button type="button" 
                                                onclick="deleteMemberAjax({{ $member->id }}, '{{ addslashes($member->name) }}')"
                                                class="px-3 py-1.5 rounded-lg bg-red-50 hover:bg-red-100 text-[#D21502] font-poppins text-xs font-semibold flex items-center gap-1 transition-all" 
                                                title="Hapus">
                                            <i class="fa-solid fa-trash text-xs"></i>
                                            <span>Hapus</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr id="empty-row">
                                <td colspan="5" class="py-12 text-center text-gray-400 font-hanken">
                                    <i class="fa-solid fa-users-slash text-3xl mb-2 text-gray-300"></i>
                                    <p>Belum ada data anggota.</p>
                                    <a href="{{ route('admin.members.create') }}" class="mt-3 inline-block font-poppins text-xs text-[#D21502] font-semibold hover:underline">
                                        + Tambah Member Baru
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    function deleteMemberAjax(memberId, memberName) {
        Swal.fire({
            title: 'Hapus Member?',
            text: `Apakah Anda yakin ingin menghapus "${memberName}"? Data yang dihapus tidak dapat dikembalikan.`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#D21502',
            cancelButtonColor: '#6B7280',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            customClass: {
                popup: 'rounded-2xl font-poppins',
                confirmButton: 'rounded-xl font-semibold',
                cancelButton: 'rounded-xl font-semibold'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.showLoading();

                fetch(`/admin/members/${memberId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    }
                })
                .then(async response => {
                    const data = await response.json();
                    if (!response.ok) {
                        throw new Error(data.message || 'Gagal menghapus data.');
                    }
                    return data;
                })
                .then(data => {
                    const rowElement = document.getElementById(`member-row-${memberId}`);
                    if (rowElement) {
                        rowElement.style.transition = 'all 0.3s ease';
                        rowElement.style.opacity = '0';
                        setTimeout(() => {
                            rowElement.remove();

                            const tbody = document.getElementById('member-table-body');
                            if (tbody && tbody.children.length === 0) {
                                tbody.innerHTML = `
                                    <tr id="empty-row">
                                        <td colspan="5" class="py-12 text-center text-gray-400 font-hanken">
                                            <i class="fa-solid fa-users-slash text-3xl mb-2 text-gray-300"></i>
                                            <p>Belum ada data anggota.</p>
                                            <a href="{{ route('admin.members.create') }}" class="mt-3 inline-block font-poppins text-xs text-[#D21502] font-semibold hover:underline">
                                                + Tambah Member Baru
                                            </a>
                                        </td>
                                    </tr>
                                `;
                            }
                        }, 300);
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Terhapus!',
                        text: `${memberName} telah berhasil dihapus.`,
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Menghapus',
                        text: error.message || 'Terjadi kesalahan sistem.',
                        confirmButtonColor: '#D21502'
                    });
                });
            }
        });
    }
</script>
@endsection