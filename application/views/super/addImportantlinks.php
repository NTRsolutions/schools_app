<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Add Links</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p><a href="<?php echo base_url('super/importantlinks');?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> View Important Links</a></p></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <h4>Create New Link</h4></div>
                    <div class="panel-body">
                        <form method="post" action="" class="form-horizontal">
                            <fieldset>
                              <div class="form-group col-lg-12">
                                                      <label class="col-lg-3 control-label">Select School</label>
                                                      <div class="col-lg-9">
                                                          <select class="form-control" name="country">
                                                              <option value="">-- Select School --</option>
                                                              <option value="">DPS Delhi</option>
                                                              <option value="">SMP Inter college, Bareilly</option>
                                                            </select>
                                                      </div>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label class="col-lg-3 control-label">Link Title</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="name" placeholder="Example: Goole Website">
                                    </div>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label class="col-lg-3 control-label">Link URL</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="name" placeholder="Example: https://www.google.com/">
                                    </div>
                                </div>
                              </fieldset>

                            <div class="form-group">
                                <div class="col-lg-6 col-lg-offset-6">
                                    <button type="submit" class="btn btn-success">Create</button>
                                    <button type="reset" class="btn btn-danger">Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


                  </div>
    </div>
</div>
