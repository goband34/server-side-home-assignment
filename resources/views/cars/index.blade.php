@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">All Cars Models</h1>
    <a href="{{ route('cars.create') }}" class="add-car-button">Add New</a>
</header>
<section id="select_section">
    <form> 
        <select class="tom-select" name="manufacturer" onchange="this.closest('form').submit()"> 
            <option value="all">All Manufacturers</option>
            @foreach($manufacturers as $manufacturer)
            <option value="{{ $manufacturer->id }}" {{ $manufacturer_filter == $manufacturer->id ? 'selected' : '' }}>{{ $manufacturer->name }}</option>
            @endforeach
        </select>
    </form>
</section>
<section id="table_section">
    <table class="table-alternate-color">
        <thead>
            <tr>
                <th class="id-column" scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Year</th>
                <th scope="col">Salesperson Email</th>
                <th scope="col">Manufacturer</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td class="id-column">{{ $car->id }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->salesperson_email }}</td>
                <td>{{ $car->manufacturer()->first()?->name }}</td>
                <td>
                    <div class="car-list-buttons">
                        <div class="car-list-button green">
                            <i data-feather="eye"></i>
                        </div>
                        <div class="car-list-button grey">
                            <i data-feather="edit"></i>
                        </div>
                        <div class="car-list-button red" onclick="alert('Are you sure?')">
                            <i data-feather="x"></i>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
