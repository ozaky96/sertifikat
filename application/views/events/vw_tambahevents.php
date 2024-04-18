
<!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Event</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <?= form_open_multipart('events/fungsi_tambah_events'); ?>
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="event-name-column">Event Name</label>
                                            <input type="text" id="Event Name-column" class="form-control" placeholder="event name"
                                                name="event_name"  required="required">
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
                                            <label for="location-column">Location</label>
                                            <input type="text" id="location-column" class="form-control" placeholder="location" name="location"  required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="organizer-column">organizer</label>
                                            <input type="text" id="organizer-column" class="form-control" name="organizer"
                                                placeholder="organizer"  required="required">
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