@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Курс Нэмэх</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="#" class="fw-normal">Нэмэх</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="container">
                    <h1>{{ isset($course) ? 'Курсыг Засах' : 'Шинэ Курс Нэмэх' }}</h1>
                    <form action="{{ route('admin.course.store') }}" method="POST">
                        @csrf
                        @if(isset($course))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name ?? old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="department_id" class="form-label">Тэнхим</label>
                            <select class="form-control" id="department_id" name="department_id" required>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ isset($course) && $course->department_id == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Тайлбар</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $course->description ?? old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="duration" class="form-label">Танхимын Хугацаа</label>
                            <input type="number" class="form-control" id="duration" name="duration" value="{{ $course->duration ?? old('duration') }}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Үнэ</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $course->price ?? old('price') }}">
                        </div>

                        <button type="submit" class="btn btn-success">{{ isset($course) ? 'Шинэчлэх' : 'Илгээх' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection