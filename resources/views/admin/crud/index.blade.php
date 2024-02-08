@extends('admin.include.app')
@section('main-content')

<div class="content-wrapper">

    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                  {{-- <th style="width: 40px">Label</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key=>$item)
                    
                
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->address}}</td>
                  <td>{{$item->description}}</td>
                  {{-- <td>{{$item->description}}</td> --}}
                  
                  <td ><img style="height: 100px;width:100px" src="{{asset('uploads/crud/'.$item->image)}}">              

                  </td>
                  <td>
                    <a href="{{route('crud.edit',$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{route('crud.delete',$item->id)}}">Delete</a>
                  </td>
                  
                </tr>
                @endforeach
             
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>

        <!-- /.card -->
      </div>

</div>

@endsection