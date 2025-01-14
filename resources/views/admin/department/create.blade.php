@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Тэнхим Нэмэх</h4>
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
                    <h1>{{ isset($department) ? 'Тэнхимийг Засах' : 'Шинэ Тэнхим Нэмэх' }}</h1>
                    <form action="{{route('admin.department.store')}}" method="POST">
                        @csrf
                        @if(isset($department))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $department->name ?? old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="university_id" class="form-label">Их Сургууль</label>
                            <select class="form-control" id="university_id" name="university_id" required>
                                @foreach($universities as $university)
                                    <option value="{{ $university->id }}" {{ isset($department) && $department->university_id == $university->id ? 'selected' : '' }}>
                                        {{ $university->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Тайлбар</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $department->description ?? old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success">{{ isset($department) ? 'Шинэчлэх' : 'Илгээх' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection