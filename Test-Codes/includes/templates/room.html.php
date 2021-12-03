<link rel="stylesheet" type="text/css" href="css/room.css">
    


<?php 

$output = '
<div class="set">
    <h2><b>GRADE LEVEL MANAGEMENT</b></h2>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <br>
    <div class="table">
        <table>
            <thead style="border-bottom: solid #000;border-bottom-width: px;"> 
                <tr>
                    <th style="text-align: center;">Grade Level</th>
                    <th style="text-align: center;">Section</th>
                    <th style="text-align: center;">Room</th>
                    <th style="text-align: center;">Action</th>
                </tr>  
            </thead>
            <tbody>
                <tr>
                    <th>7</th>
                    <td>A</td>
                    <td>R1</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>B</td>
                    <td>R2</td>
                    <td>
                    <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                    <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>C</td>
                    <td>R3</td>
                    <td>
                    <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                    <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>D</td>
                    <td>R4</td>
                    <td>
                    <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                    <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <td>A</td>
                    <td>R9</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>B</td>
                    <td>R10</td>
                    <td>
                    <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                    <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th>9</th>
                    <td>A</td>
                    <td>R15</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>B</td>
                    <td>R11</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>C</td>
                    <td>R12</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th>10</th>
                    <td>A</td>
                    <td>R18</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>B</td>
                    <td>R19</td>
                    <td>
                        <link><a href="#"><button type="button" class="btn btn-primary">Edit</button></a></link>
                        <link><a href="#"><button type="button" class="btn btn-danger">Delete</button></a></link>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="next-button">
            <a class="btn btn-light" href="curriculum.html" role="button"><i class="fas fa-chevron-left"></i>Previous</a>
            <a class="btn btn-light" href="#" role="button"><i class="fas fa-chevron-right"></i>Next</a>
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
                                    <label class="control-label">Grade Level</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Section</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Room</label>
                                    <input type="text" class="form-control" name="subject">
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


