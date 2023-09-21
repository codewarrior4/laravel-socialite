@extends('admin.layouts.base')
@section('title', 'Admin Dashboard')

@section('content')

<div class="main-content-inner">
    <div class="row">
        <div class="col-xl-4 col-md-4 col-lg-12 stretched_card">
            <div class="card mb-mob-4">
                <!-- Card body -->
                <div class="card-body card_icon_right">
                    <div class="row">
                        <div class="col">
                            <h6 class="card_title text-uppercase text-muted mb-0">Total Blogs</h6>
                            <span class="font-weight-bold display-3 mb-0">{{count($blogs)}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon_rounded mb-3 icon_primary">
                                <i class="feather ft-shopping-cart" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                    </p>
                </div>
            </div>
        </div> 

        


    </div>
 
    <div class="row">
        <!-- Progress Table start -->
      
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card_title">Recent Blogs</h4>
                    <div class="single-table">
                        <div class="table-responsive datatable-primary">
                            <table id="dataTable2" class="text-center table-hover">
                                <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">SN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($lastfive as $count => $blog)
                                    <tr>
                                        <th scope="row">{{$count+1}}</th>
                                        <td>{{$blog->title}}</td> 
                                        <td><img src="{{asset('assets/images/blog/'.$blog->image)}}" height="100" width="100" alt="" class="img-fluid rounded-circle"></td>
                                        <td>{{ $blog->formatted_created_at }}</td>
                                        <td>
                                            <a href="/admin/blog/edit/{{$blog->id}}" class="btn btn-primary btn-sm">View</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Progress Table end -->
    </div>
</div> 
@endsection