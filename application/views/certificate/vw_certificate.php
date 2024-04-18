<div class="main-content container-fluid">
        <div class="page-title">
            <h3> CERTIFICATE </h3>
        </div>
    <section class="section">
        <div class="row mb-5">
    <div class="card">
      <div class="card-content">
              <?= $this->session->flashdata('pesan'); ?>
              <br>
              <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <a href="<?= base_url('certificate/tambah_certificate');?>" class="btn btn-primary round" style="float: right;"><i data-feather="plus-circle"></i> certificate </a>
            </div>
            <br>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Certificate ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Participant Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Event Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Certificate Text</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                            $count = 0;
                            foreach ($queryAllcertificate as $row) {
                                $count = $count + 1;
                            ?>                     
                    <tr>
                    <td class="text-center" style="vertical-align: middle;"><?= $row->certificate_id ?></td>
                    <td class="text-center" style="vertical-align: middle;"><?= $row->participant_name ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_name ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->event_date ?></td>
                        <td class="text-center" style="vertical-align: middle;"><?= $row->certificate_text ?></td>
                       
                        <td>
                        <a href="<?= base_url('certificate/edit_certificate/' . $row->certificate_id);?>" class="btn btn-primary round btn-sm"><i data-feather="edit"></i></a>
                        <a href="<?= base_url('certificate/hapus_certificate/' . $row->certificate_id); ?>" class="btn btn-danger round btn-sm"><i data-feather="trash"></i></a>
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
