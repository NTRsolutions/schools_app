<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Students Attendance</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
          <div class="col-lg-6">
              <a href="<?php echo base_url('super/studentAttendance/add');?>" class="btn btn-danger pull-left"><i class="fa fa-plus"></i> Add Attendance </a>

              <div class="clearfix"></div>
              <br>
          </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="form-group">

                    <div class="col-lg-2">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- School --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- Class --</option>
                            <option value="fr">DPS Delhi</option>
                            <option value="de">SMP, bareilly</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <select class="form-control" name="country" data-bv-field="country">
                            <option value="">-- Section --</option>
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
            <div class="clearfix"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-brown">
                            <div class="panel-heading">
                                <h4>Students Information</h4></div>
                            <div class="panel-body">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item list-group-item-danger"><a href="#">Class<span class="badge red-bg pull-right">Two</span></a></li>
                                    <li class="list-group-item list-group-item-success"><a href="#">Section <span class="badge green-bg pull-right">A</span></a></li>
                                    <li class="list-group-item list-group-item-info"><a href="#">Date <span class="badge blue-bg pull-right">24/08/2018</span></a></li>
                                    <li class="list-group-item list-group-item-warning"><a href="#">Attendance By <span class="badge yellow-bg pull-right">Ramesh Chandra</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-brown">
                            <div class="panel-heading">
                                <h4>Ateendance Information</h4></div>
                            <div class="panel-body">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item list-group-item-danger"><a href="#">Total Students<span class="badge red-bg pull-right">80</span></a></li>
                                    <li class="list-group-item list-group-item-success"><a href="#">Present  <span class="badge green-bg pull-right">65</span></a></li>
                                    <li class="list-group-item list-group-item-info"><a href="#">Absent <span class="badge blue-bg pull-right">7</span></a></li>
                                    <li class="list-group-item list-group-item-warning"><a href="#">Leave <span class="badge yellow-bg pull-right">3</span></a></li>
                                    <li class="list-group-item list-group-item-grey"><a href="#">Late <span class="badge grey-bg pull-right">5</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-blue">
                    <div class="panel-heading">
                        <h4>Students Attendance</h4>
                      </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="fixedHeader" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Subject</th>
                                        <th>Reason</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>1. </td>
                                      <td>Lavish Gangwar</td>
                                      <td>+91 9718789479</td>
                                      <td>lavish@ordiusits.com</td>
                                      <td>Mathematcis</td>
                                      <td>DPS001236</td>

                                      <td>
                                        <label class="switch pull-right">
                                    <input type="checkbox" class="switch-input" checked="checked">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span></label>
                                  </td>
                                      <td>
                                        <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> </button>
                                         <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </button>
                                         <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> </button>
                                         <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-bell"></i> </button>
                                         <button type="button" class="btn btn-info btn-xs"><i class="fa fa-key"></i> </button>
                                         <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-mobile"></i> </button>

                                       </td>

                                    </tr>

                                    <tr>
                                      <td><input type="checkbox" value="None" id="check2" name="check"></td>
                                      <td>Lavish Gangwar</td>
                                      <td>+91 9718789479</td>
                                      <td>lavish@ordiusits.com</td>
                                      <td>Mathematcis</td>
                                      <td>DPS001236</td>

                                      <td>
                                        <label class="switch pull-right">
                                    <input type="checkbox" class="switch-input" checked="checked">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span></label>
                                  </td>
                                      <td>
                                        <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> </button>
                                         <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </button>
                                         <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> </button>
                                         <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-bell"></i> </button>
                                         <button type="button" class="btn btn-info btn-xs"><i class="fa fa-key"></i> </button>
                                         <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-mobile"></i> </button>

                                       </td>

                                    </tr>
                                    <tr>
                                      <td><input type="checkbox" value="None" id="check2" name="check"></td>
                                      <td>Lavish Gangwar</td>
                                      <td>+91 9718789479</td>
                                      <td>lavish@ordiusits.com</td>
                                      <td>Mathematcis</td>
                                      <td>DPS001236</td>

                                      <td>
                                        <label class="switch pull-right">
                                    <input type="checkbox" class="switch-input" checked="checked">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span></label>
                                  </td>
                                      <td>
                                        <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> </button>
                                         <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </button>
                                         <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> </button>
                                         <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-bell"></i> </button>
                                         <button type="button" class="btn btn-info btn-xs"><i class="fa fa-key"></i> </button>
                                         <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-mobile"></i> </button>

                                       </td>

                                    </tr>
                                </tbody>



                                <tfoot>
                                    <tr>
                                      <th colspan="8">
                                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Disable</button>
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i> Enable</button>
                                         <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                         <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-bell"></i> Send Notification</button>
                                         <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-key"></i> Send SMS</button>
                                         <button type="button" class="btn btn-info btn-xs"><i class="fa fa-key"></i> Send Credentials</button>
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
