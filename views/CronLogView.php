<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Cron<b> Logs</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#export2excel" class="btn btn-success"><i class="fas fa-file-excel"></i><span>Export To Excel</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cron Id</th>
                            <th>Execution Status</th>

                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>55</td>
                            <td>1</td>
                            <td>True</td>
                            <td>06/01/22 04:11:05</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>2</td>
                            <td>True</td>
                            <td>06/01/22 04:11:05</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>3</td>
                            <td>True</td>
                            <td>06/01/22 04:11:05</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>4</td>
                            <td>True</td>
                            <td>06/01/22 04:11:05</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>5</td>
                            <td>True</td>
                            <td>06/01/22 04:11:05</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="far fa-edit" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="far fa-trash-alt" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Cron</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Cron ID</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Execution Status</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Timestamp</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Cron</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
   
<!-- Bootstrap js -->