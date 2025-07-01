
        <div class="container-fluid" style="min-height: 100vh;">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lead Demographics</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Gender</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="gender_datatables">
                      <thead>
                        <tr>
                          <th>Gender</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_gender() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['gender']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Age</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="age_datatables">
                      <thead>
                        <tr>
                          <th>Age</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_age() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['age']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Employment Industry</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="employee_industry">
                      <thead>
                        <tr>
                          <th>Employment Industry</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_industry() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['employment_industry1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Source of Income</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="source_of_income">
                      <thead>
                        <tr>
                          <th>Source of Income</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_source() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['source_of_income1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>




            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Civil Status</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="civil_status">
                      <thead>
                        <tr>
                          <th>Civil Status</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_civil_status() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['civil_status1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Employement Type</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="employment_type">
                      <thead>
                        <tr>
                          <th>Employement Type</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_employment_type() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['employment_type1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Lead Source</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="lead_source">
                      <thead>
                        <tr>
                          <th>Lead Source</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_lead_source() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['lead_source1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Income Bracket</h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="income_bracket">
                      <thead>
                        <tr>
                          <th>Income Bracket</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (get_leads_income_bracket() as $key => $value) { ?>
                          
                          <tr>
                            <td><?=$value['income_bracket1']?></td>
                            <td><?=$value['count']?></td>
                          </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

          

        </div>
      </div>
        <!-- /.container-fluid -->

<script type="text/javascript">
  $(document).ready( function () {
      $('#employee_industry').DataTable();
      $('#source_of_income').DataTable();
      $('#civil_status').DataTable();
      $('#employment_type').DataTable();
      $('#lead_source').DataTable();
      $('#income_bracket').DataTable();
      $('#gender_datatables').DataTable();
      $('#age_datatables').DataTable();
  } );
</script>