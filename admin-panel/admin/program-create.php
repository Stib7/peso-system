<?php include('includes/header.php') ?>

    <div class="container-fluid">    
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Program</h1>
            <a href="program.php" class="btn btn-warning btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span class="text">Back</span>
            </a>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="p-2">

                    <form class="program">

                        <div class="form-group">
                            <p class="mb-4">Program Name</p>
                            <input type="text" class="form-control form-control-user"
                                id="program-create-name">
                        </div>

                        <div class="form-group">
                            <p class="mb-4">Program Description</p>
                            <input type="text" class="form-control form-control-user"
                                id="program-create-desc">
                        </div>
                        
                        <a href="index.html" class="btn btn-primary btn-user btn-block">
                            Add
                        </a>
                        <hr>
                        
                    </form>
                    <hr>
                </div>
            </div>
        </div>


    </div>
<?php include('includes/footer.php') ?>