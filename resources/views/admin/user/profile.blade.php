@extends('admin.layouts.app')

@section('content')
<?php
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
    $userId = Auth::id();
    $user = User::findOrFail($userId);

?>

<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full" data-boxed-layout="full">
        
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{ URL::to('/upload/user/avatar/'.Auth::user()->avatar) }}" alt="user" class="rounded-circle" width="60" height="60">
                                    <h4 class="card-title m-t-10"><?php echo $user->name; ?></h4>
                                    <h6 class="card-subtitle">Shapee Cloud</h6>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                                        {{session('success')}}
                                    </div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form enctype="multipart/form-data" class="form-horizontal form-material" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user->name; ?>" class="form-control form-control-line" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="<?php echo $user->email; ?>" class="form-control form-control-line" name="email" readonly >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="" class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-12">Avatar</label>
                                        <div class="col-sm-12">
                                            <input value="<?php  ?>" type="file" name="avatar">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
@endsection