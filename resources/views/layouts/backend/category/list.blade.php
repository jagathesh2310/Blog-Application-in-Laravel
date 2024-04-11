<x-admin-menu />

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                        </div>
                        <div class="row m-t-25">
                        <a href="{{url('categorycreate')}}" class="btn btn-info">create categories</a>
                        </div>
                        <div class="row">
                           
                        <div class="row">
                            <div class="col-lg-11">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>category</th>
                                               
                                                <th class="text-right">image</th>
                                                <th class="text-right">Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $users)
                                            <tr>
                                                <td>{{$users->id}}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->image}}</td>
                                               
                                                <td class="text-right"> 
                                                  <form action="{{url('categorydelete')}}" method="post">
                                                     @csrf
                                                     <input type="hidden" value="{{$users->id}}" name="id">
                                                     <button type="submit" class="btn btn-danger">delete</button>
                                                  </form>
                                                  <br>
                                                  <form action="{{url('categoryedit')}}" method="post">
                                                     @csrf
                                                     <input type="hidden" value="{{$users->id}}" name="id">
                                                     <button type="submit" class="btn btn-info">Edit</button>
                                                  </form>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                         
                                       
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                               
                              
                            </div>
                        </div>
                        <div class="row">
                        
                                              
                                    
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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
