<div class="top-bar clearfix">
    <div class="page-title">
        <h4>Teachers Monthly Attendance</h4></div>
</div>
<div class="main-container">
    <div class="container-fluid">
        <div class="row gutter">
          <div class="col-lg-6">
              <a href="<?php echo base_url('super/teachersMonthlyAttend');?>" class="btn btn-danger pull-left"><i class="fa fa-plus"></i> Add Attendance </a>

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
                        <select class="form-control" name="country" >
                            <option value="">-- Month --</option>
                            <option value="fr">January</option>
                            <option value="de">Feb</option>
                            </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-control" name="country" >
                            <option value="">-- Year --</option>
                            <option value="fr">2018 </option>
                            <option value="de">2019 </option>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-brown">
                            <div class="panel-heading">
                                <h4>Attendance Information</h4></div>
                            <div class="panel-body">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item "><a href="#">Session<span class="badge blue-bg pull-right">2018</span></a></li>
                                    <li class="list-group-item "><a href="#">Month<span class="badge blue-bg pull-right">July</span></a></li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-brown">
                            <div class="panel-heading">
                                <h4>Status Information</h4></div>
                            <div class="panel-body">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item "><a href="#">Total Students<span class="badge red-bg pull-right">80</span></a></li>
                                    <li class="list-group-item "><a href="#">Present  <span class="badge green-bg pull-right">65</span></a></li>
                                    <li class="list-group-item "><a href="#">Absent <span class="badge blue-bg pull-right">7</span></a></li>
                                    <li class="list-group-item "><a href="#">Leave <span class="badge yellow-bg pull-right">3</span></a></li>
                                    <li class="list-group-item "><a href="#">Late <span class="badge grey-bg pull-right">5</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-brown">
                            <div class="panel-heading">
                                <h4>Attendance abbreviations</h4></div>
                            <div class="panel-body">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item "><a href="#">Present<span class="badge blue-bg pull-right">P</span></a></li>
                                    <li class="list-group-item "><a href="#">Absent  <span class="badge red-bg pull-right">A</span></a></li>
                                    <li class="list-group-item "><a href="#">Half Day <span class="badge green-bg pull-right">HD</span></a></li>
                                    <li class="list-group-item "><a href="#">Late Present<span class="badge yellow-bg pull-right">LP</span></a></li>
                                    <li class="list-group-item "><a href="#">Leave <span class="badge grey-bg pull-right">L</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-blue">
                    <div class="panel-heading">
                        <h4>Teachers Attendance</h4>
                      </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="fixedHeader" class="table table-striped table-bordered no-margin center-text" cellspacing="0" width="100%">
                                <thead>

                                    <tr>
                                        <th>Name</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>21</th>
                                        <th>22</th>
                                        <th>23</th>
                                        <th>24</th>
                                        <th>25</th>
                                        <th>26</th>
                                        <th>27</th>
                                        <th>28</th>
                                        <th>29</th>
                                        <th>30</th>
                                        <th>31</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>Lavish</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td><button class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></button></td>


                                    </tr>

                                    <tr>
                                      <td>Ashraf</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td><button class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></button></td>

                                    </tr>
                                    <tr>
                                      <td>Rahul</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td><button class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></button></td>

                                    </tr>
                                    <tr>
                                      <td>Rinku</td>
                                      <td>P</td>
                                      <td class="red-bg">AS</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td class="yellow-bg">LP</td>
                                      <td class="green-bg" title="Half Day due to Doctor appointment">HD</td>
                                      <td class="">L</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td>A</td>
                                      <td>P</td>
                                      <td>P</td>
                                      <td>LP</td>
                                      <td>HD</td>
                                      <td>P</td>
                                      <td><button class="btn btn-xs btn-primary"><i class="fa fa-eye"></i></button></td>

                                    </tr>

                                </tbody>


                            </table>

                        </div>
                    </div>
                </div>
            </div>

                  </div>
    </div>
</div>
