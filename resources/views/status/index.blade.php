@extends('layouts.index')

@section('table')
<form action="" method="post">
  @csrf
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-outline-dark btn-sm me-md-2" data-bs-toggle="modal" data-bs-target="#addStatus">
    <span data-feather="plus-circle"></span></a>
  </button>  
  <!-- Start Add Status Modal -->
  <div class="modal fade" id="addStatus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-sm-10">
              <input type="hidden" class="form-control" id="id" name="id">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputTask" class="col-sm-2 col-form-label">Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="code" name="code">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputTask" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark btn-md" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success btn-md" name='add'>Save</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Status Modal -->
  </form>

<div class="table-responsive col-lg-10">   
  <table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if ($data != null)
    @foreach ($data as $item)
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['code']}}</td>
      <td>{{$item['name']}}</td>
      
      <td>
        <div class="d-md-flex">
        {{-- Edit Status --}}
        
        <form action="" method="post">  
          @csrf 
          @method('patch')
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark btn-sm me-md-2" data-bs-toggle="modal" data-bs-target="#editStatus{{$item['id']}}">
          <span data-feather="edit"></span></a>
        </button>  
        <!-- Start Edit Status Modal -->
        <div class="modal fade" id="editStatus{{$item['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{$item['id']}}">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputTask" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="code" name="code"  value="{{$item['code']}}">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputTask" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name"  value="{{$item['name']}}">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark btn-md" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success btn-md" name='edit'>Save</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Edit Status Modal -->
        </form>
        {{-- Delete Status --}}
        <!-- Button trigger modal -->
        
      <form action="" method="post">
        @csrf
        @method('delete')
        <button type=button class="btn btn-outline-dark btn-sm"  data-bs-toggle="modal" data-bs-target="#deleteStatus{{$item['id']}}">
          <span data-feather="trash-2"></span>
        </button>
        <!-- Start Delete Status Modal -->
        <div class="modal fade" id="deleteStatus{{$item['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Delete Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{$item['id']}}">
                  </div>
                </div>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    <h6 class="text-center text-dark">Are you sure delete? 
                      <strong class="text-center text-danger">{{$item['id']}} -  {{$item['name']}}
                      </strong>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" id="{{$item['id']}}" name="delete">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </form>
         <!-- End Delete Status Modal -->
      </td>
    </div>
    </tr>
    
    @endforeach
    @endif
  </tbody>
</table>
</div> 
@endsection

  

