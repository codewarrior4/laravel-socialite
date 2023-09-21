@extends('admin.layouts.base')
@section('title', 'Admin - Add Blog')

@section('content')

<div class="main-content-inner">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-body">
                <h4 class="card_title">Add Blog</h4>
                @csrf
                {{-- error message --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form class="needs-validation" enctype="multipart/form-data" method="POST" action="{{route('admin.blog.store')}}">
                    <div class="form-row">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Title</label>
                            <input type="text" class="form-control" id="validationCustom01" name="title" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Author</label>
                            <input type="text" class="form-control" id="validationCustom01" name="author" required >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom">Image</label> 
                            <input type="file" accept=".png, .jpeg, .jpg, .gif, .jfif" required class="form-control-file" id="validationCustom01" name="image" placeholder="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Url</label>
                            <input type="url" class="form-control" id="validationCustom01"   name="url" placeholder="" >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Description</label>
                            <textarea class="form-control" name="description" id="summernote" placeholder="Message" ></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Submit </button>
                </form>
            </div>
        </div>
    </div>

 
</div>
<!--==================================*
               End Main Content
*====================================-->
@endsection
 