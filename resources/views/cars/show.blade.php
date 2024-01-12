@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">Car Details</h1>
</header>

<div id="form_container">
    <div class="form-layout">
        <label for="model_name">Model</label>
        <input type="text" id="model_name" value="{{ $car->model }}" disabled>
        <label for="year">Year</label>
        <input type="text" id="year" value="{{ $car->year }}" disabled>
        <label for="salesperson_email">Salesperson Email</label>
        <input type="text" id="salesperson_email" value="{{ $car->salesperson_email }}" disabled>
        <label for="manufacturer">Manufacturer</label>
        <input type="text" id="manufacturer" value="{{ $car->manufacturer()->first()?->name }}" disabled>
        <div></div>
        <div class="form-buttons">
            <a href="{{ route('cars.edit', ['car' => $car->id]) }}" class="button button-blue">Edit</a>
            <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" onsubmit="return confirm('Are you sure you want to delete the record?');" method="POST" style="display: inline-block">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="button button-red">Delete</button>
            </form>
            <a href="{{ route('cars.index') }}" class="button button-pale">Cancel</a>
        </div>
    </div>
</div>
@endsection
