<x-admin-menu />
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           
                        </div>
                        <div class="row m-t-25">
                            
                        </div>
                        <div class="row">
                           
                        <div class="row">
                            <div class="col-lg-11">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                   
                                </div>
                            </div>
                            <div class="col-lg-16">
                               <form action="{{url('Assignrole')}}" method="post">
                                @csrf
                               <select name="userid" class="form-select" aria-label="Default select example">
                                 <option value="">select User</option>
                                 @foreach($user as $users)
                                 <option value="{{$users->id}}">{{$users->email}}</option>
                                 @endforeach
                               </select>
                               <select name="roleid" class="form-select" aria-label="Default select example">
                                 <option value="">select Role</option>
                                 @foreach($role as $roles)
                                 <option value="{{$roles->id}}">{{$roles->name}}</option>
                                 @endforeach
                               </select>
                               <button type="submit" class="btn btn-primary">Assign role to User</button>

                               </form>
                           
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
