@extends('layout.main')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            {{-- <h4 class="page-title">Note Type</h4> --}}
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">NoteType</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Note Type</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('notetype.create')}}" class="btn btn-primary">Add Note</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Mail Template ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($notetypes)
                        @foreach ($notetypes as $notetype)
                            <tr>
                                <td>{{$notetype->id}}</td>
                                <td>{{$notetype->title}}</td>
                                <td>{{$notetype->description}}</td>
                                <td>{{$notetype->mailtemplate_id}}</td>
                                <td>
                                    <form action="{{route('notetype.destroy', $notetype->id)}}" method="POST">
                                    <a href="{{route('notetype.edit', $notetype->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('notetype.show', $notetype->id)}}" class="btn btn-success">Show</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
            {{-- {{$notes->links()}} --}}
        </div>
    </div>
@endsection