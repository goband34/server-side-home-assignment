@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">Add New Car</h1>
</header>

<div id="form_container">
    <form>
        <label for="model_name">Model</label>
        <input type="text" id="model_name" class="input-error">
        <div></div>
        <span class="error-message">Please specify the model</span>
        <label for="year">Year</label>
        <input type="text" id="year">
        <label for="salesperson_email">Salesperson Email</label>
        <input type="text" id="salesperson_email">
        <label for="manufacturer">Manufacturer</label>
        <select id="manufacturer" class="tom-select">
            <option>All Manufacturers</option>
            <option>Manufac 1</option>
            <option>Manufac 2</option>
        </select>
        <div></div>
        <div class="form-buttons">
            <button class="button button-blue">Save</button>
            <button class="button button-pale">Cancel</button>
        </div>
    </form>
</div>
@endsection
