<?php include('includes/header.php') ?>

    <div class="container-fluid">    
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Users</h1>
            <a href="users-create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Add Users</a>
        </div>

<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <th>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <th>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <th>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <th>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <th>
                                    <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                                    <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                                </th>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
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

<?php include('includes/footer.php') ?>