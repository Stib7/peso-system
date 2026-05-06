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
            <div class="col-md-12">
                <div class="card">
                    <div class="p-2">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Program Name</label>
                                        <input type="text" name="progName" class="form-control form-control-user">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Description</label><br/>
                                        <textarea id="subject" name="progDesc" placeholder="Write something.." style="height:50px; width:100%; max-width:400px;"></textarea>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Program Type</label>
                                        <input type="text" name="progName" class="form-control form-control-user">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Start Date</label>
                                        <input type="date" name="start_date" class="form-control form-control-user">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" class="form-control form-control-user">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="text" name="progName" class="form-control form-control-user">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 text-end">
                                        <br/>
                                        <button type="submit" name="saveProg" class="btn btn-primary">Submit</button>  
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