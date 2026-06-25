<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Motor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold text-gray-800 mb-6">Edit Data Unit Motor</h1>
        
        <form action="{{ route('motorcycles.update', $motorcycle->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Merk Motor</label>
                <input type="text" name="merk" value="{{ $motorcycle->merk }}" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Tipe Motor</label>
                <input type="text" name="tipe" value="{{ $motorcycle->tipe }}" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Harga</label>
                <input type="number" name="harga" value="{{ $motorcycle->harga }}" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Jumlah Stok</label>
                <input type="number" name="stok" value="{{ $motorcycle->stok }}" required class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Deskripsi Singkat</label>
                <textarea name="deskripsi" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">{{ $motorcycle->deskripsi }}</textarea>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('motorcycles.index') }}" class="text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded shadow">
                    Perbarui Data
                </button>
            </div>
        </form>
    </div>
</body>
</html>