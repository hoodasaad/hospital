
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Insulin Chart </div>
                <div class="block-content">

                    <?php echo form_open('dr_control/add_insulin') ?>
                    <div id="MRN-INFO"></div>                 
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">
                            <label class="mws-form-label">Insulin Chart</label>

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start_1" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin_1">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end_1" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start_2" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin_2" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end_2" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start_3" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin_3" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end_3" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start_4" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin_4" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end_4" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Start"
                                               name="start_5" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="Insulin"
                                               name="insulin_5" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder="End"
                                               name="end_5" />
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mws-form-inline">
                        <div class="form-group">

                            <div class="mws-form-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="mws-form-label">More than</label>

                                        <input type="text" class="form-control" placeholder="More than"
                                               name="more" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="mws-form-label">give</label>

                                        <input type="text" class="form-control" placeholder="give"
                                               name="give">
                                        <label class="mws-form-label">&ask doctor</label>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mws-form-label">Doctor Signature</label>
                        <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                    </div>


                    <input
                        type='hidden'  name='time'
                        value='<?php
                        echo date("Y-m-d H:i:s")
                        ?>'/> <br/>
                    <div class="mws-button-row">
                        <input type="submit" value="Add Patient" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn ">
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>




