@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Edit Note</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{route('note.index')}}" class="btn btn-primary">View All Note</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('note.update', $note->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" class="form-control" name="title" value="{{$note->title}}" placeholder="Note Title" autofocus>
                    </div>

                    <div class="form-group">
                        <strong>Body</strong>
                        <textarea name="body"  rows="6" class="form-control" placeholder="Body">{{$note->body}}</textarea>
                    </div>

                    <div class="form-group">
                        <strong>Type</strong>
                        <input type="text" class="form-control" name="type" value="{{$note->type}}" placeholder="Type" autofocus>
                    </div>

                    <div class="form-group">
                        <strong>Status</strong>
                        <input type="text" class="form-control" name="status" value="{{$note->status}}" placeholder="Status" autofocus>
                    </div>

                    <button type="submit" class="btn btn-success mt-2" >Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection