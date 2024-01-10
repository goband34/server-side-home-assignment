@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">Car Details</h1>
</header>

<div id="form_container">
    <form>
        <label for="model_name">Model</label>
        <input type="text" id="model_name" value="Camry" disabled>
        <label for="year">Year</label>
        <input type="text" id="year" value="2010" disabled>
        <label for="salesperson_email">Salesperson Email</label>
        <input type="text" id="salesperson_email" value="joe@carozza.com" disabled>
        <label for="manufacturer">Manufacturer</label>
        <input type="text" id="manufacturer" value="Toyota Motor Corp" disabled>
        <div></div>
        <div class="form-buttons">
            <a href="{{ route('cars.edit', ['car' => $car->id]) }}" class="button button-blue">Edit</a>
            <a href="#" class="button button-red">Delete</a>
            <a href="{{ route('cars.index') }}" class="button button-pale">Cancel</a>
        </div>
    </form>
</div>
@endsection
