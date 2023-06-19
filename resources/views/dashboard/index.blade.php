@extends('layouts.index')
@section('minister')

<div class="container">
  <nav>
     

    <ul class="pagination"> 
      <li class="page-item"><a class="page-link" href="">Previous</a></li>
      
      <li class="page-item"><a class="page-link" href="">Next</a></li>
      
    </ul>
   
  </nav>
  
  <div class="row">
      @foreach ($data as $item)
      <div class="col-sm-6">
        <div class="card mb-4">
          <div class="card-body">
              <h5 class="card-title">{{$item['name']}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$item['position']}}</h6>
              <h6 class="card-subtitle mb-2 {{$item['status']['name'] == 'Active' ? 'text-success' : 'text-danger'}}  ">{{$item['status']['name']}}</h6>
                <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-dark btn-sm me-md-2" data-bs-toggle="modal" data-bs-target="#editCategories{{$item['id']}}">
                <span data-feather="eye"></span></a>
              </button>  
              
      {{-- @foreach ($data as $item) --}}
      <!-- Start Edit Categories Modal -->
      <div class="modal fade" id="editCategories{{$item['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Overview</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
               <div class=row>
                   <div class="col-md-4">
                   <div>
                   <img src="{{$item['image']}}" class="img-thumbnail rounded mx-auto d-block" height="auto" width="auto">
                   </div>
                   </div>  
                   <div class="col-md-8">
                   <ul class="list-group">
                     <li class="list-group-item"><span>Nama: </span><strong>{{$item['name']}}</strong></li>
                     <li class="list-group-item"><span>Mulai Menjabat: </span><strong>{{$item['start_date']}}</strong></li>
                     <li class="list-group-item"><span>Selesai Menjabat: </span><strong>{{$item['end_date']}}</strong></li>
                     <li class="list-group-item"><span>Status Jabatan: </span><strong>{{$item['status']['name']}}</strong></li>
                     <li class="list-group-item"><span>Asal Partai: </span><strong>{{$item['party']['name']}}</strong></li>
                     <li class="list-group-item"><span>Kementerian: </span><strong>{{$item['ministry']['name']}}</strong></li>
                   </ul>
                   </div>
               </div>
               </div>
             </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
              </div>
              </div>
            </div>
          </div>     
        </div>
      </div>
    </div>
      @endforeach
  </div>
</div>
@endsection
