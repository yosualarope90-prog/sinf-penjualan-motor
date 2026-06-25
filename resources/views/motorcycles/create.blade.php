<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Motor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold text-gray-800 mb-6">Tambah Unit Motor Baru</h1>
        
        <form action="{{ route('motorcycles.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Merk Motor</label>
                <input type="text" name="merk" required placeholder="Contoh: Honda, Yamaha" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Tipe Motor</label>
                <input type="text" name="tipe" required placeholder="Contoh: Matic, Sport" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Harga</label>
                <input type="number" name="harga" required placeholder="Contoh: 25000000" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Jumlah Stok</label>
                <input type="number" name="stok" required placeholder="Contoh: 10" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" placeholder="Keterangan tambahan (opsional)" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('motorcycles.index') }}" class="text-gray-600 hover:underline">Kembali</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
                    Simpan ke Database
                </button>
            </div>
        </form>
    </div>
</body>
</html>