<?php include('includes/header.php') ?>

    <div class="container-fluid">    
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Users</h1>
            <a href="users-create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Add Users</a>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>
                                        <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>
                                        <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                    </th>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>
                                        <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php') ?>