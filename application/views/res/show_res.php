<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"> <span class="glyphicon glyphicon-user"></span> Show Patient MRN: <?=$value->id?></div>
                <div class="block-content">
                    <form class="mws-form" action="">
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label class="form-group">Mrn</label>
                                    <input type="text" class="form-control" value="<?php echo $value->id; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Pationt Name</label>
                                    <input type="text" class="form-control" value="<?php echo $value->full_name; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Pationt Id</label>
                                    <input type="text" class="form-control" value="<?php echo $value->pationt_id; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Clinc </label>
                                    <input type="text" class="form-control" value="<?php echo $value->clinc . " " . $value->number ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Telephone #work</label>
                                    <input type="text" class="form-control" value="<?php echo $value->phone; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Date & Time</label>
                                    <input type="text" class="form-control" value="<?php echo $value->time; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Provider Seeing PT.Today</label>
                                    <input type="text" class="form-control" value="<?php echo $value->provider; ?>" readonly="readonly">
                            </div>
                            <div class="mws-form-row">
                                <label class="form-group">Pationt seen</label>
                                    <input type="text" class="form-control" value="<?php echo $value->seen . " " . $value->doctor; ?>" readonly="readonly">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
