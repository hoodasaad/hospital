<?php
$value = $contact[0];
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">
                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Patient MRN:<?= $value->mrn ?></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?= @$patient->name ?></td><td>MRN: <?= @$patient->id ?></td>
                        </tr>
                        <tr>
                            <td>Age: <?= @$patient->age ?></td><td>Gender: <?= @Patient::Gender()[$patient->gender] ?></td><td>PT's ID: <?= @$patient->pt_id ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?= @$diagnosis->diagnosis ?></td>
                        </tr>
                    </table>
                    <form class="form" action="" rel="form">
                        <div class="form-group">
                            <label class="mws-form-label">Mrn</label>
                            <span><i class="icon-pencil"></i> Patient Mrn <?php echo" " . $value->mrn; ?></span>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Permission to get records</label>
                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">1-</label>
                            <div class="mws-form-item">
                                <input type="text" class="form-control" placeholder="Patient Name"
                                       name="patient"  value="<?php echo $value->patient; ?>" readonly="readonly" />
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">,With a date of birth</label>

                                <input type="text" class="form-control" placeholder="Patient's DOB"
                                       name="dob" value="<?php echo $value->dob; ?>" readonly="readonly" >
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">,give my permission for</label>

                                <input type="text" class="form-control" placeholder="Doctor's or hospital name who has records"
                                       name="record" value="<?php echo $value->record; ?>" readonly="readonly" >
                            </div>
                            <div class="form-group">
                                <label class="mws-form-label">to give my medical records (as described on p.2)to</label>

                                <input type="text" class="form-control" placeholder="(my doctor's name)"
                                       name="doctor" value="<?php echo $value->doctor; ?>" readonly="readonly" >
                                <label class="mws-form-label">so that he/she can better understand my condition and help</label>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="mws-form-label">Permission to get sensitive information</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">By putting my initials by each item below , i understand that i give permission for records to be sent that may contain information about :- </label>
                        </div>  

                        <div class="form-group">
                            <input type='text' placeholder='my mental health' name='mental' class="form-control" value="<?php echo $value->mental; ?>" readonly="readonly" />
                            <label class="mws-form-label">my mental health ,</label>
                        </div>
                        <div class="form-group">
                            <input type='text' placeholder='transmittable disease I may have like HIV/AIDS' name='hiv' class="form-control" value="<?php echo $value->hiv; ?>" readonly="readonly" />
                            <label class="mws-form-label">transmittable disease I may have like HIV/AIDS ,</label>
                        </div>
                        <div class="form-group">
                            <input type='text' placeholder='genetic records , and/or' name='genetic' class="form-control" value="<?php echo $value->genetic; ?>" readonly="readonly" />
                            <label class="mws-form-label">genetic records , and/or ,</label>
                        </div>
                        <div class="form-group">
                            <input type='text' placeholder='drug and alcohol records' name='drug' class="form-control" value="<?php echo $value->drug; ?>" readonly="readonly" />
                            <label class="mws-form-label">drug and alcohol records.</label>
                        </div>


                        <div class="form-group">
                            <label class="mws-form-label">I Understand that :-</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">1- I do not have to give my permission to share these records.</label><br/>
                            <label class="mws-form-label">2- If I want to take away the permission for my doctor to get these records , I need to talk to my doctor or a staff person and sign a paper .</label><br/>
                            <label class="mws-form-label">3- This form is only good for 3 months from the date i sign it.</label>
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Patient's Signature </label>
                            <input type='text' placeholder="Patient's Signature" name='p_sign' class="form-control" value="<?php echo $value->p_sign; ?>" readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Authorized Representative's Signature </label>
                            <input type='text' placeholder="Authorized Representative's Signature" name='a_sign' class="form-control" value="<?php echo $value->a_sign; ?>" readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Relationship of Authorized Representative</label>
                            <input type='text' placeholder='Relationship of Authorized Representative' name='relation' class="form-control" value="<?php echo $value->relation; ?>" readonly="readonly" />
                        </div>
                        <div class="form-group">
                            <label class="mws-form-label">Time</label>
                            <input type='text' placeholder='Relationship of Authorized Representative' name='relation' class="form-control" value="<?php echo $value->time; ?>" readonly="readonly" />
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
