
<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Certificate</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <?= form_open_multipart('certificate/fungsi_tambah_certificate');?>
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="participant-name-column">Participant Name</label>
                                            <select class="form-control" id="participant_name" name="participant_name">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                               foreach($desha as $users){
                                                ?>
                                                <option value="<?= $users->fullname ?>"><?= $users->fullname ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="event-name-column">Event Name</label>
                                            <select class="form-control" id="event_name" name="event_name">
                                                <option selected="true" disabled="disabled"> </option>
                                                <?php
                                               foreach($events as $events){
                                                ?>
                                                <option value="<?= $events->event_name ?>"><?= $events->event_name ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="event-date-column">Event Date</label>
                                            <input type="date" id="event-date-column" class="form-control" placeholder="event date"
                                                name="event_date"  required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                        <label for="event-name-column">Certificate Text</label>
                                            <textarea name="certificate_text" cols="40"  class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="organizer-column">organizer</label>
                                            <input type="text" id="organizer-column" class="form-control" name="organizer"
                                                placeholder="organizer"  required="required">
                                        </div>
                                    </div> -->
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




