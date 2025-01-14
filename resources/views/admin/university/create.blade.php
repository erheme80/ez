@extends('layouts.admin')
@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Их Сургуулиуд</h4>
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
                    <h1>{{ isset($university) ? 'Их Сургуулийг Засах' : 'Шинэ Их Сургууль Нэмэх' }}</h1>
                    <!--  -->
                    <form action="{{route('admin.university.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($university))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Нэр</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $university->name ?? old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Зураг</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                            @if(isset($university) && $university->thumbnail)
                                <img src="{{ $university->thumbnail }}" alt="Зураг" style="width: 100px;">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Тайлбар</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required>{{ $university->description ?? old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Байршил</label>
                            <input type="text" class="form-control" id="location" name="location"
                                value="{{ $university->location ?? old('location') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="established_at" class="form-label">Үүсгэн Байгуулагдсан Он</label>
                            <input type="date" class="form-control" id="established_at" name="established_at"
                                value="{{ $university->established_at ?? old('established_at') }}">
                        </div>

                        <div class="mb-3">
                            <label for="ranking" class="form-label">Эрэмбэ</label>
                            <input type="number" class="form-control" id="ranking" name="ranking"
                                value="{{ $university->ranking ?? old('ranking') }}">
                        </div>

                        <div class="mb-3">
                            <label for="student_population" class="form-label">Оюутны Тоо</label>
                            <input type="number" class="form-control" id="student_population" name="student_population"
                                value="{{ $university->student_population ?? old('student_population') }}">
                        </div>

                        <div class="mb-3">
                            <label for="faculty_count" class="form-label">Багш Нарын Тоо</label>
                            <input type="number" class="form-control" id="faculty_count" name="faculty_count"
                                value="{{ $university->faculty_count ?? old('faculty_count') }}">
                        </div>

                        <div class="mb-3">
                            <label for="contact_email" class="form-label">Холбоо Барих Имэйл</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email"
                                value="{{ $university->contact_email ?? old('contact_email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="contact_phone" class="form-label">Холбоо Барих Утас</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone"
                                value="{{ $university->contact_phone ?? old('contact_phone') }}">
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Вэбсайт</label>
                            <input type="url" class="form-control" id="website" name="website"
                                value="{{ $university->website ?? old('website') }}">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Хаяг</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $university->address ?? old('address') }}">
                        </div>

                        <div class="mb-3">
                            <label for="admission_requirements" class="form-label">Элсэлтийн Шаардлага</label>
                            <textarea class="form-control" id="admission_requirements" name="admission_requirements"
                                rows="3">{{ $university->admission_requirements ?? old('admission_requirements') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Төлөв</label>
                            <select class="form-control" id="status" name="status">
                                <option value="active" {{ isset($university) && $university->status === 'active' ? 'selected' : '' }}>Идэвхтэй</option>
                                <option value="inactive" {{ isset($university) && $university->status === 'inactive' ? 'selected' : '' }}>Идэвхгүй</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">{{ isset($university) ? 'Шинэчлэх' : 'Илгээх' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection