<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penjualan Motor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Stok Sepeda Motor</h1>
            <a href="{{ route('motorcycles.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
                + Tambah Motor Baru
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">Merk</th>
                    <th class="p-3 border">Tipe</th>
                    <th class="p-3 border">Harga (Rp)</th>
                    <th class="p-3 border">Stok</th>
                    <th class="p-3 border">Deskripsi</th>
                    <th class="p-3 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($motorcycles as $key => $motor)
                    <tr class="hover:bg-gray-50">
                        <td class="p-3 border">{{ $key + 1 }}</td>
                        <td class="p-3 border font-semibold">{{ $motor->merk }}</td>
                        <td class="p-3 border">{{ $motor->tipe }}</td>
                        <td class="p-3 border">Rp {{ number_format($motor->harga, 0, ',', '.') }}</td>
                        <td class="p-3 border">{{ $motor->stok }} unit</td>
                        <td class="p-3 border text-gray-500">{{ $motor->deskripsi ?? '-' }}</td>
                        <td class="p-3 border text-center flex justify-center gap-2">
                            <a href="{{ route('motorcycles.edit', $motor->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm shadow">
                                Edit
                            </a>
                            <form action="{{ route('motorcycles.destroy', $motor->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm shadow">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-4 text-center text-gray-500">Belum ada data motor. Silakan tambah data baru.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>