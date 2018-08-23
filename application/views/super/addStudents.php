<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Parents and Gaurdians</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
      <div class="row gutter">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p><a href="<?php echo base_url('super/parents');?>" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i> All Parents List</a></p></div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="panel panel-yellow">
                          <div class="panel-body">
                              <form id="defaultForm" method="post" action="http://bootstrap.gallery/sunrise-admin-feb26/target.php" class="form-horizontal bv-form" novalidate="novalidate">
                                  <fieldset>
                                      <legend>Personal Information</legend>
                                      <div class="form-group has-feedback">
                                                      <label class="col-lg-4 control-label">Select School</label>
                                                      <div class="col-lg-8">
                                                          <select class="form-control" name="country">
                                                              <option value="">-- Select School --</option>
                                                              <option value="fr">Girls Primary</option>
                                                              <option value="fr">Girls Secondry</option>
                                                            </select>
                                                      </div>
                                </div>
                                <div class="form-group has-feedback">
                                                <label class="col-lg-4 control-label">Select Parents ID</label>
                                                <div class="col-lg-8">
                                                    <select class="form-control" name="country">
                                                        <option value="">-- Select Parents --</option>
                                                        <option value="1">Surendra (DPS0023659)</option>
                                                        <option value="2">Narendra (DPS2359883)</option>
                                                      </select>
                                                </div>
                          </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Name</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Lavish Gangwar">
                                          </div>
                                      </div>

                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">DOB</label>
                                          <div class="col-lg-8">
                                              <input type="date" class="form-control" name="username" data-bv-field="username" placeholder="DOB">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Religion</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Religion">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Place of Birth</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Place of Birth">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Blood Group</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Blood Group">
                                          </div>
                                      </div>


                                  </fieldset>

                                  <fieldset>
                                      <legend>Contact Information</legend>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Student Email</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Student Email">
                                          </div>
                                      </div>

                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Mobile</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Mobile">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Address</label>
                                          <div class="col-lg-8">
                                              <textarea type="text" class="form-control" name="username" data-bv-field="username" placeholder="Address"></textarea>
                                          </div>
                                      </div>

                                      <div class="form-group has-feedback">
                                                      <label class="col-lg-4 control-label">Select Country</label>
                                                      <div class="col-lg-8">
                                                          <select class="form-control" name="country">
                                                              <option value="">-- Select Country --</option>
                                                              <option value="fr">Girls Primary</option>
                                                              <option value="fr">Girls Secondry</option>
                                                            </select>
                                                      </div>
                                </div>

                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Postal Code</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Postal Code">
                                          </div>
                                      </div>

                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Remarks</label>
                                          <div class="col-lg-8">
                                              <textarea type="text" class="form-control" name="username" data-bv-field="username" placeholder="Something About Student"></textarea>
                                          </div>
                                      </div>
                                  </fieldset>
                                    <legend>Credentials</legend>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Username</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Username">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Password</label>
                                          <div class="col-lg-8">
                                              <input type="password" class="form-control" name="username" data-bv-field="username" placeholder="********">
                                          </div>
                                      </div>

                                  </fieldset>

                                  <div class="form-group">
                                      <div class="col-lg-6 col-lg-offset-6">
                                          <button type="submit" class="btn btn-success">Submit</button>
                                          <button type="reset" class="btn btn-danger">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>

              </div>
    </div>
</div>
