<x-admin-menu />

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="alert alert-primary" role="alert">
                         role created successfully
                         </div>
                        </div>
                        <div class="row m-t-25">
                        <a href="{{url('categorylist')}}" class="btn btn-info">categories list</a>
                        </div>
                        <div class="row">
                           
                        <div class="row">
                            <div class="col-lg-11">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <form action="{{url('categoryupdate')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                   <div class="mb-6">
                                    <label for="exampleInputEmail1" class="form-label">Category NAME</label>
                                    <input name="name" value="{{$user->name}}"  type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <input type="hidden" value="{{$user->id}}" name="id">
                                    <input name="file" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                   </div>
                                  
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-lg-3">
                               
                              
                            </div>
                        </div>
                        <div class="row">
                        
                                              
                                    
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
