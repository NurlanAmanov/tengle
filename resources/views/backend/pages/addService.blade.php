@extends('backend.layout.master')

@section('content')

<div class="container">
    <h1>Add Service</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Section</label>
            <select name="section" class="form-control" required>
                <option value="what_we_do">What We Do</option>
                <option value="our_process">Our Process</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Icon (for What We Do)</label>
            <input type="text" name="icon" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image (for Our Process)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="0">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>

@endsection
