@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit University</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form to edit the university -->
        <form action="{{ route('admin.university.update', $university->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="form-group">
                <label for="name">University Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $university->name) }}" required>
            </div>

            <!-- Thumbnail -->
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                @if ($university->thumbnail)
                    <div class="mt-2">
                        <img src="{{ asset($university->thumbnail) }}" alt="Thumbnail" width="150">
                    </div>
                @endif
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $university->description) }}</textarea>
            </div>

            <!-- Location -->
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $university->location) }}" required>
            </div>

            <!-- Established At -->
            <div class="form-group">
                <label for="established_at">Established At</label>
                <input type="date" name="established_at" id="established_at" class="form-control" value="{{ old('established_at', $university->established_at) }}">
            </div>

            <!-- Status -->
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="active" {{ $university->status == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ $university->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update University</button>
            </div>
        </form>
    </div>
@endsection