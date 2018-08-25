<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Add Attendance</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
            <div class="col-lg-6">
                <a href="<?php echo base_url('super/teacherAttendance');?>" class="btn btn-danger pull-left"><i class="fa fa-history"></i> Attendance Log</a>

                <div class="clearfix"></div>
                <br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="form-group">

                    <div class="col-lg-3">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- School --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <input type="date" class="form-control" name="username" data-bv-field="username" placeholder="DOB">
                    </div>

                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-blue">
                    <div class="panel-heading">
                        <h4>Teachers List</h4></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered no-margin attendance" cellspacing="0" width="100%">
                                <thead class="">
                                    <tr>
                                      <th>#</th>
                                      <th>Name</th>
                                      <th>Status</th>
                                      <th>Type</th>
                                      <th>Subject</th>
                                      <th>Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Lavish Gangwar</td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Absent</option>
                                            <option value="fr">Present</option>
                                            <option value="de">Late</option>
                                            <option value="de">Leave</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Whole Day</option>
                                            <option value="fr">Half Day</option>
                                            <option value="de">Subject</option>
                                            <option value="de">Queue</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">All Subjects</option>
                                            <option value="de">Mathematcis</option>
                                            <option value="fr">English</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Family Issue</option>
                                            <option value="fr">Traffic Issue</option>
                                            <option value="de">Health Problem</option>
                                            <option value="de">Accedent Issue</option>
                                        </select>
                                      </td>

                                  </tr>
                                  <tr>
                                      <td>2.</td>
                                      <td>Rinku Vishwakarma</td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Absent</option>
                                            <option value="fr">Present</option>
                                            <option value="de">Late</option>
                                            <option value="de">Leave</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Whole Day</option>
                                            <option value="fr">Half Day</option>
                                            <option value="de">Subject</option>
                                            <option value="de">Queue</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">All Subjects</option>
                                            <option value="de">Mathematcis</option>
                                            <option value="fr">English</option>
                                        </select>
                                      </td>
                                      <td>
                                        <select class="" name="country">
                                            <option value="">Family Issue</option>
                                            <option value="fr">Traffic Issue</option>
                                            <option value="de">Health Problem</option>
                                            <option value="de">Accedent Issue</option>
                                        </select>
                                      </td>

                                  </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Rahul Sharma</td>
                                        <td>
                                          <select class="" name="country">
                                              <option value="">Absent</option>
                                              <option value="fr">Present</option>
                                              <option value="de">Late</option>
                                              <option value="de">Leave</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="" name="country">
                                              <option value="">Whole Day</option>
                                              <option value="fr">Half Day</option>
                                              <option value="de">Subject</option>
                                              <option value="de">Queue</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="" name="country">
                                              <option value="">All Subjects</option>
                                              <option value="de">Mathematcis</option>
                                              <option value="fr">English</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select class="" name="country">
                                              <option value="">Family Issue</option>
                                              <option value="fr">Traffic Issue</option>
                                              <option value="de">Health Problem</option>
                                              <option value="de">Accedent Issue</option>
                                          </select>
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
