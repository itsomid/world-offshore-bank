@extends('layouts.app')

@section('content')


    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-start mb-2">
        <a href="{{route('banks.create')}}" class="btn btn-success">Add Bank</a>
    </div>
    <div class="card">
        <div class="card-header">Banks List</div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>BIC</th>
                    <th>Website</th>
                    <th>Headquarter</th>
                    <th>Status in Website</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banks as $bank)
                    <tr>
                        <th>{{$bank->id}}</th>
                        <td><img width="30" height="30" class="rounded-circle mr-2" src="{{$bank->img_1}}"><b
                                class="font-weight-bold">{{$bank->name}}</b></td>
                        <td>{{$bank->bic}}</td>
                        <td>
                            <a href="{{$bank->website}}" target="_blank">{{$bank->website}}</a>
                        </td>
                        <td>{{$bank->headquarter}}</td>
                        <td>
                            @if($bank->status)
                                <div class="d-flex align-items-center">
                                    <span class="dot active"></span>
                                    <span class="badge badge-success ml-1">Active</span>
                                </div>
                            @else
                                <div class="d-flex align-items-center">
                                    <span class="dot deactive"></span>
                                    <span class="badge badge-danger ml-1">Deactive</span>
                                </div>
                            @endif
                        </td>
                        <td class="d-flex">
                            <a href="{{route('banks.edit',$bank->slug)}}" class="btn btn-info btn-sm text-white">Edit</a>
{{--                            <a class="btn btn-sm {{$bank->status?'btn-danger':'btn-success'}} text-white"--}}
{{--                               onclick="handleDelete()"--}}
{{--                               style="min-width: 70px">{{$bank->status?'Deactive':'Active'}}</a>--}}
                            <a href="{{route('bank/show',$bank->slug)}}" target="_blank" class="btn btn-info btn-sm text-white ml-2">View</a>
                            <form action="{{route('banks.destroy',$bank->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ml-2">
                                    @if($bank->trashed())
                                        Delete
                                    @else
                                        Trash
                                    @endif
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('css')

@endsection
