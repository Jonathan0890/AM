<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Table 2</title>
</head>

<body>
    <div class="overflow-x-auto p-10">
        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Nombre</th>
                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Correo Electronico
                    </th>
                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Telefono</th>
                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Empresa</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-900">
                @foreach ($contactos as $contacto)
                    <tr class="hover:bg-gray-200 transition-colors">
                        <td class="px-4 py-2 whitespace-nowrap border border-gray-500">{{ $contacto->nombre }}</td>
                        <td class="px-4 py-2 whitespace-nowrap border border-gray-500">
                            {{ $contacto->correo_electronico }}</td>
                        <td class="px-4 py-2 whitespace-nowrap border border-gray-500">{{ $contacto->telefono }}
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap border border-gray-500">{{ $contacto->empresa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $contactos->links() }}
        </div>
    </div>
</body>

</html>
