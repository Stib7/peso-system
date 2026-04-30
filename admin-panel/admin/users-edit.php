<?php include('includes/header.php') ?>

    <div class="container-fluid">    
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
            <a href="users.php" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-right"></i>
                </span>
                <span class="text">Back</span>
            </a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="p-2">

                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control form-control-user">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control form-control-user">  
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone No.</label>
                                        <input type="text" name="number" class="form-control form-control-user">  
                                    </div>
                                </div>

                                <div class="col-md-6">
                                     <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control form-control-user">  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Role</label>
                                        <select name="role" class="form-select">
                                            <option value="">Select Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-end">
                                        <br/>
                                        <button type="submit" name="updateUser" class="btn btn-primary">Update</button>  
                                    </div>
                                </div>
                            </div>   
                            
                        </form>
                        <hr>
                    </div>
                </div>  
            </div>
        </div>


    </div>
<?php include('includes/footer.php') ?>