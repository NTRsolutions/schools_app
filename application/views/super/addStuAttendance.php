<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Add Attendance</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
            <div class="col-lg-6">
                <a href="<?php echo base_url('super/attendance');?>" class="btn btn-danger pull-left"><i class="fa fa-plus"></i> View Attendance</a>

                <div class="clearfix"></div>
                <br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="form-group">

                    <div class="col-lg-3">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- Select School --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- Select Class --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- Select Section --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <input type="date" class="form-control" name="username" data-bv-field="username" placeholder="DOB">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-blue">
                    <div class="panel-heading">
                        <h4>Students List</h4></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>

                                        <th>Roll No.</th>
                                        <th>Mobile</th>
                                        <th>Email Id</th>
                                        <th>
                                                Present
                                                <br>
                                                <input type="radio" value="None" name="check">
                                        </th>
                                        <th>
                                                Absent
                                                <br>
                                                <input type="radio" value="None" name="check">
                                        </th>
                                        <th>
                                                Late
                                                <br>
                                                <input type="radio" value="None" name="check">

                                        </th>
                                        <th>

                                                Leave
                                                <br>
                                                <input type="radio" value="None" name="check">

                                        </th>

                                        <th>Reason</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lavish Gangwar</td>
                                        <td>22</td>
                                        <td>+91 9718789479</td>
                                        <td>lavishgangwar</td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <textarea name="name" class="form-control"></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Lavish Gangwar</td>
                                        <td>22</td>
                                        <td>+91 9718789479</td>
                                        <td>lavishgangwar</td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <textarea name="name" class="form-control"></textarea>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Lavish Gangwar</td>
                                        <td>22</td>
                                        <td>+91 9718789479</td>
                                        <td>lavishgangwar</td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <input type="radio" value="None" name="check">
                                        </td>
                                        <td>
                                            <textarea name="name" cols="30" class="form-control"></textarea>
                                        </td>

                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="10">
                                            <button type="button" class="btn btn-info">Submit</button>
                                        </th>

                                    </tr>
                                </tfoot>

                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
