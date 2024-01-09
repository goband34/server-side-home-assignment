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
            <tr>
                <td class="id-column">1</td>
                <td>Toyota Motor Corporation</td>
                <td>HQ, Kyoto District, Tokyo, Japan</td>
                <td>123</td>
            </tr>
            <tr>
                <td class="id-column">1</td>
                <td>Toyota Motor Corporation</td>
                <td>HQ, Kyoto District, Tokyo, Japan</td>
                <td>123</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection