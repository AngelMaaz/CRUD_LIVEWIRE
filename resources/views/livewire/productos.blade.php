<div>
    {{-- The whole world belongs to you. --}}

    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>DESCRIPCION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->descripcion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
