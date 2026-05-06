<?php include('includes/header.php') ?>

    <div class="container-fluid">    
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h2 mb-0 text-gray-800">Programs</h1>
            <a href="program-create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Create Program</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Program Name</th>
                                <th>Program Type</th>
                                <th>Description</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Livelihood</td>
                                <td>Employment</td>
                                <td>Livelihood program</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>Ongoing</td>
                            </tr>
                            <tr>
                                <td>TUPAD</td>
                                <td>Employment</td>
                                <td>Emergency employment program</td>
                                <td>2011/04/25</td>
                                <td>2011/04/25</td>
                                <td>Ongoing</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
<?php include('includes/footer.php') ?>