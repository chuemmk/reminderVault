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
                        <a href="{{route('notetype.index')}}" class="btn btn-primary">View All Note</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('notetype.update', $notetype->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <strong>Title</strong>
                        <input type="text" class="form-control" name="title" value="{{$notetype->title}}" autofocus>
                    </div>

                    <div class="form-group">
                        <strong>Description</strong>
                        <input type="text" name="description" class="form-control" value="{{$notetype->description}}" autofocus>
                    </div>

                    <div class="form-group">
                        <strong>Mail Template ID</strong>
                        <input type="text" class="form-control" name="mailtemplate_id" value="{{$notetype->mailtemplate_id}}" autofocus>
                    </div>

                    <button type="submit" class="btn btn-success mt-2" >Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection