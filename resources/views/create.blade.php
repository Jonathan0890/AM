<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="max-w-md mx-auto mt-8">
        <form action="{{ route('contacto.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <input type="text" name="nombre" placeholder="nombre" value="{{ old('nombre') }}"
                    class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                @error('nombre')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="correo_electronico" placeholder="correo_electrónico"
                    value="{{ old('correo_electronico') }}"
                    class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                @error('correo_electronico')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="telefono" placeholder="teléfono" value="{{ old('telefono') }}"
                    class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                @error('telefono')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="empresa" placeholder="empresa" value="{{ old('empresa') }}"
                    class="w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
                @error('empresa')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Registrar</button>
        </form>
    </div>
</body>

</html>
