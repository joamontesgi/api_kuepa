{{-- table with data from ProductsController --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Unidades</th>
            <th>Precio</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $pepito)
        <tr>
            <td>{{ $pepito->id }}</td>
            <td>{{ $pepito->units }}</td>
            <td>{{ $pepito->price }}</td>
            <td>{{ $pepito->name }}</td>

        </tr>
        @endforeach
    </tbody>


