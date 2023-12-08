@extends('layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
                <table class="table-hover" border="1" >
                   <thead>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Mail Template ID</th>
                   </thead>
                   <tbody>
                @isset($noteType)
                <tr>
                    <td>{{$noteType->id}}</td>
                    <td>{{$noteType->title}}</td>
                    <td>{{$noteType->description}}</td>
                    <td>{{$noteType->mailtemplate_id}}</td>
                </tr>
                    @endisset
                  </tbody>
              </table>
        </div>
    </div>
</div>


@endsection