<div class="main-content container-fluid">
        <div class="page-title">
            <h3>GENERATE</h3>
        </div> 
        <div class="row mb-5">
    <div class="card">
      <div class="card-content">
              <?= $this->session->flashdata('pesan'); ?>
              <br>
              <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <!-- <a href="<?= base_url('generate/tambah_generate');?>" class="btn btn-primary round" style="float: right;"><i data-feather="plus-circle"> </i> generate </a> -->
            </div>
            <br>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">assignment id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">certificate id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">user id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">assigned id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                            $count = 0;
                            foreach ($queryAllgenerate as $row) {
                                $count = $count + 1;
                            ?>                     
                    <tr>
                    <td class="text-center" style="vertical-align: middle;"><?= $row->assignment_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->certificate_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->user_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->assigned_at ?></td>
                       
                        <td>
                        <!-- <a href="<?= base_url('generate/edit_generate/' . $row->assignment_id);?>" class="btn btn-primary round btn-sm"><i data-feather="edit"></i></a> -->
                        <a href="<?= base_url('generate/download/' . $row->assignment_id);?>" class="btn btn-primary round btn-sm"></i><i data-feather="download"></i></a>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>