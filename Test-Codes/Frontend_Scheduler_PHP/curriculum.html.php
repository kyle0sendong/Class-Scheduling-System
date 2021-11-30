<link rel="stylesheet" type="text/css" href="css/curriculum.css">

<?php 

    $output = '
    <div class="set">
        <h2><b>CURRICULUM MANAGEMENT</b></h2>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <br>
        <div class="table">
            <table>
                <thead style="border-bottom: solid #000;border-bottom-width: px;"> 
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th style="text-align: center;">Subject</th>
                        <th style="text-align: center;">Department</th>
                        <th style="text-align: center;">Action</th>
                    </tr>  
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>Mathematics</th>
                        <td>Mathematics Department</td>
                        <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>Science</th>
                        <td>Science Department</td>
                        <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>Araling Panlipunan</th>
                        <td>History Department</td>
                        <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="next-button">
                <a class="btn btn-light" href="#" role="button"><i class="fas fa-chevron-left"></i>Previous</a>
                <a class="btn btn-light" href="room.html" role="button"><i class="fas fa-chevron-right"></i>Next</a>
            </div>    
            
        </div> 
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="col-md-4">
                    <form action="" id="manage-subject">
                        <div class="card">
                            <div class="card-header">
                                    Form
                            </div>

                            <div class="card-body">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label class="control-label">Subject</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Department</label>
                                    <textarea class="form-control" cols="30" rows="3" name="description"></textarea>
                                </div>
                            </div>
                                    
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                                        <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div> ';
?>
        
<?php include __DIR__ . '/../includes/templates/layout.html.php'?>