<div class="main-content container-fluid">
        <div class="page-title">
            <h3>EVENTS</h3>
        </div> 
        <div class="row mb-5">
    <div class="card">
      <div class="card-content">
              <?= $this->session->flashdata('pesan'); ?>
              <br>
              <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <a href="<?= base_url('events/tambah_events');?>" class="btn btn-primary round" style="float: right;"><i data-feather="plus-circle"> </i> events </a>
            </div>
            <br>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event id</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">event date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">location</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">organizer</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                            $count = 0;
                            foreach ($queryAllevents as $row) {
                                $count = $count + 1;
                            ?>                     
                    <tr>
                    <td class="text-center" style="vertical-align: middle;"><?= $row->event_id ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_name ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_date ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->location ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->organizer ?></td>
                        <td>
                        <a href="<?= base_url('events/edit_events/' . $row->event_id);?>" class="btn btn-primary round btn-sm"><i data-feather="edit"></i></a>
                        <a href="<?= base_url('events/hapus_events/' . $row->event_id);?>" class="btn btn-danger round btn-sm"><i data-feather="trash"></i></a>
                            </td>
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