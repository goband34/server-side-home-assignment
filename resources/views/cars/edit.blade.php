@extends('layouts.app')

@section('content')
<header>
    <h1 class="header-title">{{ $mode === 'create' ? 'Add New Car' : 'Edit Car Details' }}</h1>
</header>

<div id="form_container">
    @if($mode === 'create')
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
    @else
    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="POST">
    @endif
        @csrf
        <label for="model_name">Model</label>
        <input type="text" id="model_name" name="model" value="{{ old('model', $car->model) }}" @error('model') class="input-error" @enderror>
        @error('model')
        <div></div>
        <span class="error-message">{{ $message }}</span>
        @enderror
        <label for="year">Year</label>
        <input type="text" id="year" name="year" value="{{ old('year', $car->year) }}" @error('model') class="input-error" @enderror>
        @error('year')
        <div></div>
        <span class="error-message">{{ $message }}</span>
        @enderror
        <label for="salesperson_email">Salesperson Email</label>
        <input type="text" id="salesperson_email" name="salesperson_email" value="{{ old('salesperson_email', $car->salesperson_email) }}" @error('model') class="input-error" @enderror>
        @error('salesperson_email')
        <div></div>
        <span class="error-message">{{ $message }}</span>
        @enderror
        <label for="manufacturer">Manufacturer</label>
        <select id="manufacturer" class="tom-select" name="manufacturer" @error('model') class="input-error" @enderror>
            <option value="">All Manufacturers</option>
            @foreach($manufacturers as $manufacturer)
            <option value="{{ $manufacturer->id }}" {{ old('manufacturer', $car->manufacturer()->first()?->id) == $manufacturer->id ? 'selected' : '' }}>{{ $manufacturer->name }}</option>
            @endforeach
        </select>
        @error('manufacturer')
        <div></div>
        <span class="error-message">{{ $message }}</span>
        @enderror
        <div></div>
        <div class="form-buttons">
            <button class="button button-blue">Save</button>
            <button class="button button-pale">Cancel</button>
        </div>
    </form>
</div>
@endsection
