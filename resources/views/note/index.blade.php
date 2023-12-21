@extends('layout.main')

@section('content')

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            {{-- <h4 class="page-title">Dashboard</h4> --}}
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Note</li>
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
                        <h3>Note</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('note.create')}}" class="btn btn-primary">Add Note</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($notes)
                        @foreach ($notes as $note)
                            <tr>
                                <td>{{$note->id}}</td>
                                <td>{{$note->title}}</td>
                                <td>{{$note->body}}</td>
                                <td>{{$note->type}}</td>
                                <td>{{$note->status}}</td>
                                <td>
                                    <form action="{{route('note.destroy', $note->id)}}" method="POST">
                                    <a href="{{route('note.edit', $note->id)}}" class="btn btn-info">Edit</a>
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