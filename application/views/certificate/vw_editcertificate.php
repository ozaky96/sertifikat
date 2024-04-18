
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">edit certificate</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('certificate/fungsi_edit_certificate'); ?>
                      <form>
                      <div class="row mb-3">
                          <!-- <label class="col-sm-2 col-form-label" for="basic-default-name">certificate id</label> -->
                          <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="basic-default-name" name="certificate_id"  placeholder="..."  value="<?= $queryAllcertificate->certificate_id?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">participant name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="participant_name"  placeholder="..."  value="<?= $queryAllcertificate->participant_name?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="event_name" placeholder="..."  value="<?= $queryAllcertificate->event_name?>" />
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="basic-default-name" name="event_date"   placeholder="..." value="<?= $queryAllcertificate->event_date?>"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">certificate text</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="certificate_text"  placeholder="..."  value="<?= $queryAllcertificate->certificate_text?>" />
                          </div>
                        </div>
                            <div class="form-text"></div>
                          </div>
                        </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
          <!-- <button type="reset" class="btn btn-outline-secondary">Discard</button> -->
          <button class="btn btn-primary" type="submit">edit</button>
        </div>
                      </form>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div>