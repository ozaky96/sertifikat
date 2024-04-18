
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Generate</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <?= form_open_multipart('generate/fungsi_tambah_generate'); ?>
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="event-name-column">Certificate ID</label>
                                            <select class="form-control" id="certificate_id" name="certificate_id">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                                foreach($certificate as $certificate){
                                                ?>
                                                <option value="<?= $certificate->certificate_id ?>"><?= $certificate->certificate_id ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="event-date-column">Name</label>
                                            <select class="form-control" id="user_id" name="user_id">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                                foreach($desha as $users){
                                                ?>
                                                <option value="<?= $users->user_id ?>"><?= $users->fullname ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="location-column">event name</label>
                                            <select class="form-control" id="event_id" name="event_id">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                                foreach($events as $events){
                                                ?>
                                                <option value="<?= $events->event_id ?>"><?= $events->event_name ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1"> Tambah </button>
                                    </div>
                                </div>
                            </form>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>