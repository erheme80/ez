@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Шинэ Сургалтын Төлбөр Нэмэх</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="{{ route('admin.tuition.index') }}" class="fw-normal">Жагсаалт</a></li>
                    <li class="active fw-normal">Шинэ Төлбөр</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <form action="{{ route('admin.tuition.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="university_id">Сургуулийн Нэр</label>
                        <select name="university_id" id="university_id" class="form-control @error('university_id') is-invalid @enderror" required>
                            <option value="">Сургуулийг сонгоно уу</option>
                            @foreach ($universities as $university)
                                <option value="{{ $university->id }}" {{ old('university_id') == $university->id ? 'selected' : '' }}>
                                    {{ $university->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('university_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="amount">Төлбөрийн Дүн</label>
                        <input type="number" step="0.01" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror" value="{{ old('amount') }}" required>
                        @error('amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Тайлбар</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Нэмэх</button>
                        <a href="{{ route('admin.tuition.index') }}" class="btn btn-secondary">Болих</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection