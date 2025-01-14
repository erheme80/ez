@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Тэтгэлэг Нэмэх</h4>
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
                    <h1>Шинэ Тэтгэлэг Нэмэх</h1>
                    <form action="{{ route('admin.scholarship.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="university_id" class="form-label">Сургуулийн Нэр</label>
                            <select class="form-control" id="university_id" name="university_id" required>
                                <option value="" disabled selected>Сургуулиа сонгоно уу</option>
                                @foreach($universities as $university)
                                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Тэтгэлгийн Дүн</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Тайлбар</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="eligibility" class="form-label">Шалгуур</label>
                            <textarea class="form-control" id="eligibility" name="eligibility" rows="3">{{ old('eligibility') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="deadline" class="form-label">Хугацаа</label>
                            <input type="date" class="form-control" id="deadline" name="deadline" value="{{ old('deadline') }}">
                        </div>

                        <button type="submit" class="btn btn-success">Илгээх</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection