<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Projects
            <small>All Projects</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Projects</a></li>
        </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Projects</h3>
                        <div class="box-tools">
                            <div class="input-group pull-right">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i
                                                class="fa fa-plus"></i> Add Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="projectTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Project Manager</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Ecom-Website</td>
                                <td>Lanka Gadget Home</td>
                                <td>2015-11-01</td>
                                <td>2015-11-30</td>
                                <td>Praneeth</td>
                                <td><span class="label label-success">Finished</span></td>
                                <td>
                                    <div class="tools">
                                        <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-xs btn-warning edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ecom-Website</td>
                                <td>Lanka Gadget Home</td>
                                <td>2015-11-01</td>
                                <td>2015-11-30</td>
                                <td>Praneeth</td>
                                <td><span class="label label-warning">Inprogress</span></td>
                                <td>
                                    <div class="tools">
                                        <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-xs btn-warning edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ecom-Website</td>
                                <td>Lanka Gadget Home</td>
                                <td>2015-11-01</td>
                                <td>2015-11-30</td>
                                <td>Praneeth</td>
                                <td><span class="label label-primary">Approved</span></td>
                                <td>
                                    <div class="tools">
                                        <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-xs btn-warning edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ecom-Website</td>
                                <td>Lanka Gadget Home</td>
                                <td>2015-11-01</td>
                                <td>2015-11-30</td>
                                <td>Praneeth</td>
                                <td><span class="label label-danger">Cancelled</span></td>
                                <td>
                                    <div class="tools">
                                        <button class="btn btn-xs btn-primary view"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-xs btn-warning edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-xs btn-danger delete"><i class="fa fa-trash-o"></i></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Project Manager</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--  Modal -->
<div class="modal fade" role="dialog" aria-labelledby="myModalLabel" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Create Project</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="projectName" class="col-sm-2 control-label">Project Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="projectName" placeholder="Project Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="startDate" class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="text" id="startDate" class="form-control" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dueDate" class="col-sm-2 control-label">Due Date</label>
                            <div class="col-sm-10">
                                <input type="text" id="dueDate" class="form-control" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="client" class="col-sm-2 control-label">Client</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" id="client">
                                    <option>-- Select --</option>
                                    >
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="projectManager" class="col-sm-2 control-label">Project Manager</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" id="projectManager">
                                    <option>-- Select --</option>
                                    >
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="budget" class="col-sm-2 control-label">Budget</label>
                            <div class="col-sm-10">
                                <input type="text" id="budget" class="form-control" placeholder="Budget">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

