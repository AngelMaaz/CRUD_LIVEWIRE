<x-slot name="header">
    <h1 class="text-gray-900">CRUD CON LARAVEL 8 Y LIVEWIRE</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm:rouder-lg px-4 py-4">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2 ">ID</th>
                        <th class="px-4 py-2 ">DESCRIPCION</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2" >{{$producto->id}}</td>
                        <td class="border px-4 py-2" >{{$producto->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>
    </div>

</div>


