@extends('layouts.app')

@section('title', 'Calculator')

@section('content')
<div class="row justify-content-center mt-5">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Calculator</h5>
        @if(session('result') !== null)
        <p class="card-text">Result: {{ session('result') }}</p>
        @endif

        <form method="post" action="/calculator/calculate" class="mt-3">
          @csrf
          <div class="mb-3">
            <input type="number" name="num1" class="form-control" placeholder="Enter number 1" value="{{ old('num1') }}"
              required>
          </div>
          <div class="mb-3">
            <select name="operator" class="form-select" required>
              <option value="plus" {{ old('operator')==='plus' ? 'selected' : '' }}>+</option>
              <option value="minus" {{ old('operator')==='minus' ? 'selected' : '' }}>-</option>
              <option value="multiply" {{ old('operator')==='multiply' ? 'selected' : '' }}>*</option>
              <option value="divide" {{ old('operator')==='divide' ? 'selected' : '' }}>/</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="number" name="num2" class="form-control" placeholder="Enter number 2" value="{{ old('num2') }}"
              required>
          </div>
          <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        @error('error')
        <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
    </div>
  </div>
</div>
@endsection