@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">All Manufacturers</h1>
</header>
<section id="table_section">
    <table class="table-alternate-color">
        <thead>
            <tr>
                <th class="id-column" scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manufacturers as $manufacturer)
            <tr>
                <td class="id-column">{{ $manufacturer->id }}</td>
                <td>{{ $manufacturer->name }}</td>
                <td>{{ $manufacturer->address }}</td>
                <td>{{ $manufacturer->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
