@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')

<body>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="nama">Nama Lengkap</label>
                            <input class="form-control" id="nama" type="text" placeholder="Enter your Fullname" autofocus value="">
                        </div>
                        <!-- Form Row-->
                        <div class="mb-3">
                            <label class="small mb-1" for="nama">Alamat</label>
                            <input class="form-control" id="nama" type="text" placeholder="Enter your Address" value="">
                        </div>
                        <!-- Form Row        -->
                    
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control" id="email" type="email" placeholder="Enter your email address" value="">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="telpon">Phone number</label>
                                <input class="form-control" id="telpon" type="number" placeholder="Enter your phone number" value=" ">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="ultah">Birthday</label>
                                <input class="form-control" id="ultah" type="date" name="ultah" placeholder="Enter your birthday" value="">
                            </div>
                        </div>
                        <!-- Save changes button-->
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')
@endsection