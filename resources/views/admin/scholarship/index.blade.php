@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Тэтгэлэг Жагсаалт</h4>
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
                                <th class="border-top-0">Сургуулийн Нэр</th> <!-- University Name -->
                                <th class="border-top-0">Нэр</th>
                                <th class="border-top-0">Тэтгэлгийн Дүн</th>
                                <th class="border-top-0">Тайлбар</th>
                                <th class="border-top-0">Шалгуур</th>
                                <th class="border-top-0">Хугацаа</th>
                                <th class="border-top-0">Үйлдэл</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scholarships as $scholarship)
                            <tr>
                                <td>{{ $scholarship->university->name }}</td> <!-- University Name -->
                                <td>{{ $scholarship->name }}</td>
                                <td>{{ $scholarship->amount }}</td>
                                <td>{{ $scholarship->description }}</td>
                                <td>{{ $scholarship->eligibility }}</td>
                                <td>{{ $scholarship->deadline }}</td>
                                <td>
                                    <a href="{{ route('admin.scholarship.edit', $scholarship->id) }}" class="btn btn-info">Засах</a>
                                    <form action="{{ route('admin.scholarship.destroy', $scholarship->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Устгах</button>
                                    </form>
                                </td>
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