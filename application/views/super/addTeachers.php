<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Add Teachers</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
      <div class="row gutter">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><p><a href="<?php echo base_url('super/teachers');?>" class="btn btn-danger"><i class="fa fa-eye"></i> All Teachers List</a></p></div>
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
                                                              <option value="fr">DPS</option>
                                                              <option value="fr">SMPIC</option>
                                                            </select>
                                                      </div>

                                        </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Name</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Teacher Name">
                                          </div>
                                      </div>

                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Designation</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Designations">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">DOB</label>
                                          <div class="col-lg-8">
                                              <input type="date" class="form-control" name="username" data-bv-field="username" placeholder="DOB">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                                      <label class="col-lg-4 control-label">Gender</label>
                                                      <div class="col-lg-8">
                                                          <select class="form-control" name="country">
                                                              <option value="">-- Select Gender --</option>
                                                              <option value="fr">Male</option>
                                                              <option value="fr">Female</option>
                                                              <option value="fr">Others</option>
                                                            </select>
                                                      </div>

                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="col-lg-4 control-label">Religion</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Religion">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="col-lg-4 control-label">Blood Group</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Blood Group">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="col-lg-4 control-label">Profile Image</label>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" name="username" data-bv-field="username">
                                            </div>
                                        </div>


                                  </fieldset>
                                  <fieldset>
                                      <legend>Contact Details</legend>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Mobile Number</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="+91 9718789479">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Email Id</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="abc@gmail.com">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Address</label>
                                          <div class="col-lg-8">
                                              <textarea class="form-control" name="username" data-bv-field="username"></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                                      <label class="col-lg-4 control-label">Country</label>
                                                      <div class="col-lg-8">
                                                          <select class="form-control" name="country">
                                                              <option value="">-- Select Country --</option>
                                                              <option value="fr">India</option>
                                                              <option value="fr">UAE</option>
                                                            </select>
                                                      </div>

                                        </div>
                                  </fieldset>
                                  <fieldset>
                                      <legend>Academic Information</legend>
                                      <div class="form-group has-feedback">
                                                      <label class="col-lg-4 control-label">Expertise</label>
                                                      <div class="col-lg-8">
                                                          <select class="form-control" name="country" multiple>
                                                              <option value="">-- Select Expertise --</option>
                                                              <option value="fr">Mathematics</option>
                                                              <option value="fr">English</option>
                                                              <option value="fr">Mathematics</option>
                                                              <option value="fr">English</option>
                                                              <option value="fr">Mathematics</option>
                                                              <option value="fr">English</option>
                                                            </select>
                                                      </div>

                                        </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Highest Qualification</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="Highest Qualification">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Joining Date</label>
                                          <div class="col-lg-8">
                                              <input type="date" class="form-control" name="username" data-bv-field="username" placeholder="Joining Date">
                                          </div>
                                      </div>
                                      <div class="form-group has-feedback">
                                          <label class="col-lg-4 control-label">Salary (per month)</label>
                                          <div class="col-lg-8">
                                              <input type="text" class="form-control" name="username" data-bv-field="username" placeholder="25000">
                                          </div>
                                      </div>

                                  </fieldset>
                                  <fieldset>
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
