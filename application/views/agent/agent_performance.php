<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

        <div class="container-fluid" style="min-height: 100vh;">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Agent Performance</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Options</h3>
                </div>
                <div class="card-body">
                  <h6>Date Encoded</h6>
                  <form action="<?=base_url()?>agent/agent_performance" method="get">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="date" class="form-control" id="from" value="<?=isset($_GET['from'])?$_GET['from']:''?>" name="from" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="date" class="form-control" id="to" value="<?=isset($_GET['to'])?$_GET['to']:''?>" name="to" autocomplete="off">
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-group">
                            <label for="leads_status">Status</label>
                            <select class="form-control" id="leads_status" name="leads_status" autocomplete="off">
                              <option selected="selected" value=""></option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Attempted')?'selected':''):''?> value="Attempted">Attempted</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Contacted')?'selected':''):''?> value="Contacted">Contacted</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Interested')?'selected':''):''?> value="Interested">Interested</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Nurture')?'selected':''):''?> value="Nurture">Nurture</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Unresponsive')?'selected':''):''?> value="Unresponsive">Unresponsive</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Lost')?'selected':''):''?> value="Lost">Lost</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Qualified')?'selected':''):''?> value="Qualified">Qualified</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Tripping')?'selected':''):''?> value="Tripping">Tripping</option>
                              <option <?=isset($_GET['leads_status'])?(($_GET['leads_status'] == 'Closed')?'selected':''):''?> value="Closed">Closed</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" name="position" autocomplete="off" value="<?=isset($_GET['position'])?$_GET['position']:''?>">
                            
                        </div>
                      </div>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 text-right">
                        <button class="btn btn-primary btn-sm">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary">Total Lead Breakdown</h3>
                </div>
                <div class="card-body">
                  <canvas id="myChart" width="400" height="400"></canvas>
                  <script type="text/javascript">
                    var color_text = ['Attempted', 'Contacted', 'Interested', 'Nurture', 'Unresponsive', 'Lost', 'Qualified', 'Tripping', 'Closed'];
                    var chart_data = [`<?=count_leads_datastatus('Attempted')?>`, `<?=count_leads_datastatus('Contacted')?>`, `<?=count_leads_datastatus('Interested')?>`, `<?=count_leads_datastatus('Nurture')?>`, `<?=count_leads_datastatus('Unresponsive')?>`, `<?=count_leads_datastatus('Lost')?>`, `<?=count_leads_datastatus('Qualified')?>`, `<?=count_leads_datastatus('Tripping')?>`, `<?=count_leads_datastatus('Closed')?>`];
                  </script>
                  <script>
                    function getRandomColor() {
                      var letters = '0123456789ABCDEF';
                      var color = '#';
                      for (var i = 0; i < 6; i++) {
                        color += letters[Math.floor(Math.random() * 16)];
                      }
                      return color;
                    }
                  const ctx = document.getElementById('myChart').getContext('2d');
                  
                  var chart_color = [];
                  var chart_data_length = chart_data.length;
                  for (var i = 1; i <= chart_data_length; i++) {
                    chart_color.push(getRandomColor());
                  }
                  const myChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                          labels: color_text,
                          datasets: [{
                              label: 'Values',
                              data: chart_data,
                              backgroundColor: chart_color,
                              borderWidth: 1
                          }]
                      },
                      options: {
                          scales: {
                              y: {
                                  beginAtZero: true
                              }
                          }
                      }
                  });
                  </script>
                </div>
              </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h3 class="m-0 font-weight-bold text-primary"><?=isset($_GET['leads_status'])?$_GET['leads_status']:''?></h3>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="agent_performer">
                      <thead>
                        <tr>
                          <th>Agent Name</th>
                          <th>Position</th>
                          <th>Leads</th>
                          <?php if(isset($_GET['leads_status'])){ ?>
                            <th>No. of <?=isset($_GET['leads_status'])?$_GET['leads_status']:''?></th>
                          <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                          
                          <tr>
                            <td><?=get_agent_data_field('fname')?> <?=get_agent_data_field('mname')?> <?=get_agent_data_field('lname')?></td>
                            <td><?=get_agent_data_field('emp_type')?></td>
                            <td><?=get_agent_leads_number()?></td>
                            <?php if(isset($_GET['leads_status'])){ ?>
                              <td><?=count_leads_datastatus_inout($_GET['leads_status'], (isset($_GET['from'])?$_GET['from']:''), (isset($_GET['to'])?$_GET['to']:''))?></td>
                            <?php } ?>
                          </tr>

                        
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
  $(document).ready(function(){
      $('#agent_performer').DataTable();
  });
</script>