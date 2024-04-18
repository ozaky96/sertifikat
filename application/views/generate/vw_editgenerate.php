
      <!-- Basic Layout -->
      <div class="col-xxl">
                  <div class="card mb-5">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">edit event</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <?= form_open_multipart('events/fungsi_edit_events'); ?>
                      <form>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event id</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="event_id"  placeholder="Masukkan id kelas"  value="<?= $queryAllevents->event_id ?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">event name</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              name="event_name" placeholder="Masukkan id spp"  value="<?= $queryAllevents->event_name ?>" />
                          </div>
                        </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">event date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="basic-default-name" name="event_date"   placeholder="Masukkan NISN" value="<?= $queryAllevents->event_name?>"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">location</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company" 
                              name="location"  placeholder="Masukkan NISN"  value="<?= $queryAllevents->location ?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">organizer</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="basic-default-email"
                                name="organizer" value="<?= $queryAllevents->organizer ?>"
                                class="form-control"
                                placeholder="Masukkan Nama"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2" />
                              <span class="input-group-text" id="basic-default-email2" name="organizer"  > </span>
                            </div>
                            <div class="form-text"></div>
                          </div>
                        </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3">
          <button class="btn btn-primary" type="submit">edit</button>
        </div>
                      </form>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div>