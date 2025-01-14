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
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">thumbnail</th>
                                <th class="border-top-0">description</th>
                                <th class="border-top-0">location</th>
                                <th class="border-top-0">established_at</th>
                                <th class="border-top-0">Rank</th>
                                <th class="border-top-0">student_population</th>
                                <th class="border-top-0">faculty_count</th>
                                <th class="border-top-0">contact_email</th>
                                <th class="border-top-0">contact_phone</th>
                                <th class="border-top-0">website</th>
                                <th class="border-top-0">address</th>
                                <th class="border-top-0">admission_requirements</th>
                                <th class="border-top-0">housing_options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universities as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td><img src="{{ asset($item->thumbnail) }}" alt="Thumbnail" style="width: 100px; height: auto;"></td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->established_at}}</td>
                                <td>{{$item->ranking}}</td>
                                <td>{{$item->student_population}}</td>
                                <td>{{$item->faculty_count}}</td>
                                <td>{{$item->contact_email}}</td>
                                <td>{{$item->contact_phone}}</td>
                                <td>{{$item->website}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->admission_requirements}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{ route('admin.university.edit', $item->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('admin.university.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
    <!-- ============================================================== -->
    <!-- Recent Comments -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- .col -->
        <!-- /.col -->
    </div>
</div>
@endsection