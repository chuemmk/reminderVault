@extends('layout.main')

@section('content')
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
                <table class="table table-bordered">
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
                        @foreach ($notes as $key => $note)
                            <tr>
                                <td>{{$key + 1}}</td>
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