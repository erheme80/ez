@extends('layouts.admin')

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Сургалтын Төлбөрүүд</h4>
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
                                <th class="border-top-0">Сургуулийн Нэр</th> <!-- Changed to University -->
                                <th class="border-top-0">Тайлбар</th>
                                <th class="border-top-0">Төлбөрийн Дүн</th>
                                <th class="border-top-0">Үйлдэл</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tuitionFees as $fee)
                            <tr>
                                <td>{{ $fee->university->name }}</td> <!-- Displaying University name -->
                                <td>{{ $fee->description }}</td>
                                <td>{{ $fee->amount }}</td>
                                <td>
                                    <a href="{{ route('admin.tuition.edit', $fee->id) }}" class="btn btn-info">Засах</a>
                                    <form action="{{ route('admin.tuition.destroy', $fee->id) }}" method="POST" style="display:inline;">
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