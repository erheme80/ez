@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Сургуулиудын Жагсаалт</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="#" class="fw-normal">Жагсаалт</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Нэр</th>
                                <th class="border-top-0">Зураг</th>
                                <th class="border-top-0">Тайлбар</th>
                                <th class="border-top-0">Байршил</th>
                                <th class="border-top-0">Байгуулагдсан Он</th>
                                <th class="border-top-0">Эрэмбэ</th>
                                <th class="border-top-0">Оюутны Тоо</th>
                                <th class="border-top-0">Багшийн Тоо</th>
                                <th class="border-top-0">Имэйл</th>
                                <th class="border-top-0">Утас</th>
                                <th class="border-top-0">Вэбсайт</th>
                                <th class="border-top-0">Хаяг</th>
                                <th class="border-top-0">Элсэлтийн Шаардлага</th>
                                <th class="border-top-0">Орон Сууцны Сонголтууд</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universities as $university)
                            <tr>
                                <td>{{ $university->name }}</td>
                                <td><img src="{{ $university->thumbnail }}" alt="{{ $university->name }}" style="width: 50px; height: 50px;"></td>
                                <td>{{ $university->description }}</td>
                                <td>{{ $university->location }}</td>
                                <td>{{ $university->established_at }}</td>
                                <td>{{ $university->rank }}</td>
                                <td>{{ $university->student_population }}</td>
                                <td>{{ $university->faculty_count }}</td>
                                <td>{{ $university->contact_email }}</td>
                                <td>{{ $university->contact_phone }}</td>
                                <td><a href="{{ $university->website }}" target="_blank">{{ $university->website }}</a></td>
                                <td>{{ $university->address }}</td>
                                <td>{{ $university->admission_requirements }}</td>
                                <td>{{ $university->housing_options }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection