@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">All Cars Models</h1>
    <button class="add-car-button">Add New</button>
</header>
<section id="select_section">
    <select class="tom-select">
        <option>All Manufacturers</option>
        <option>Manufac 1</option>
        <option>Manufac 2</option>
    </select>
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
            <tr>
                <td class="id-column">1</td>
                <td>Camry</td>
                <td>2010</td>
                <td>joe@carozza.com</td>
                <td>Toyota Motor Corp</td>
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
            <tr>
                <td class="id-column">1</td>
                <td>Camry</td>
                <td>2010</td>
                <td>joe@carozza.com</td>
                <td>Toyota Motor Corp</td>
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
        </tbody>
    </table>
</section>
@endsection
