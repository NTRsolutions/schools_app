<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Academic Years</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p><a href="<?php echo base_url('super/academicyear/add');?>" class="btn btn-danger btn-xs"><i class="fa fa-plus"></i> Create New Academic Year</a></p></div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-blue">
                    <div class="panel-heading">
                        <h4>Academic Year</h4></div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="fixedHeader" class="table table-striped table-bordered no-margin" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" value="None" id="check2" name="check"> All</th>
                                        <th>Session</th>
                                        <th>Created On</th>
                                        <th>Status</th>
                                          <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td><input type="checkbox" value="None" id="check2" name="check"></td>
                                      <td>2018-2019</td>
                                      <td>20/08/2018</td>
                                      <td><label class="switch">
                          <input type="checkbox" class="switch-input" checked="checked"> <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span></label></td>

                                      <td>
                                      <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> </button>
                                      <button type="button" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> </button>
                                      <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </button>
                                      </td>

                                    </tr>
                                </tbody>
                                  <tfoot>
                                    <tr>
                                      <th colspan="5">
                                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-ban"></i> Disable</button>
                                        <button type="button" class="btn btn-success btn-xs"><i class="fa fa-flag"></i> Enable</button>
                                         <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></th>

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
