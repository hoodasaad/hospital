<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">

                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Full Risk Assessment Tool
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/emr_control/display_risk"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <div class="form-group">
                        <label class="mws-form-label">If Patient has any of the following conditions,Check the box and
                            apply Fall Risk interventions as indicated </label>
                    </div>

                    <?php echo form_open('emr_control/add_risk') ?>
                    <div id="MRN-INFO"></div>
                    <div class="form-group" id="MRN">
                        <label class="mws-form-label">Mrn Number</label>
                        <input type='text' placeholder='Mrn' name='mrn' class="form-control MRN"/>
                        <span class="glyphicon glyphicon-ok form-control-feedback c_done" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-remove form-control-feedback error" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">High Fall Risk&nbsp; &nbsp;</label> <span>-Implement High Fall Risk interventions per protocol </span>
                        <ul class="list-group">
                            <li class="list-group-item"><input type='radio' name='high' class="sam"
                                                               value="History of more than one fall within 6 months before admission"/><label>History
                                    of more than one fall within 6 months before admission</label></li>
                            <li class="list-group-item"><input type='radio' name='high' class="sam"
                                                               value="Patient has experienced a fall during this hospitalization"/><label>Patient
                                    has experienced a fall during this hospitalization</label></li>
                            <li class="list-group-item"><input type='radio' name='high' class="sam"
                                                               value="Patient is deemed high fall-risk per protocol(e.g.,seizure precautions)"/><label>Patient
                                    is deemed high fall-risk per protocol(e.g.,seizure precautions)</label></li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Low Fall Risk &nbsp; &nbsp;</label> <span>Implement Low Fall Risk interventions per protocol</span>
                        <ul class="list-group">
                            <li class="list-group-item"><input type='radio' class="sam" name='low'
                                                               value="Complete paralysis or Completely immobilized"/><label>Complete
                                    paralysis or Completely immobilized</label></li>
                        </ul>
                    </div>
                    <table class="table table-responsive table-bordered" id="show">
                        <thead>
                        <thead>
                        <th class="active"><label class="mws-form-label">Fall Risk Scope Calculation &nbsp;
                                &nbsp;</label> <span>Select the appropriate option in each category .Add all points to calculate Fall Risk Score (if no option is selected ,score for category is 0)</span>
                        </th>
                        <th class="active">Points</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Age &nbsp; &nbsp; <span class="badge" id="age2"></span></label> <span>(Single-Select)</span>
                                    <ul class="list-group" id="ages">
                                        <li class="list-group-item"><input type='radio' class="age age1" name='age'
                                                                           value="60-69 Years" data-value="1"/><label>60-69
                                                Years(1 point)</label></li>
                                        <li class="list-group-item"><input type='radio' name='age' class="age age2"
                                                                           data-value="2" value="70-79 Years"/><label>70-79
                                                Years (2 Points)</label></li>
                                        <li class="list-group-item"><input type='radio' name='age' class="age age3"
                                                                           data-value="3"
                                                                           value="greater than or equal to 80 Years"/><label>greater
                                                than or equal to 80 Years (3 Points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='age_point' class="form-control Total" id="age_point"
                                           readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Fall History&nbsp; &nbsp;</label> <span>(Single-Select)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='radio' class="history" name='history'
                                                                           data-value="5"
                                                                           value="One fall within 6 months before admission"/><label>One
                                                fall within 6 months before admission(5 points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='history_point' id="history_point"
                                           class="form-control Total" readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Elimination, Bowel an Urine &nbsp; &nbsp;</label>
                                    <span>(Single-Select)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='radio' name='bowel' class="bowel"
                                                                           data-value="2" value="Incontinence"/><label>Incontinence(2
                                                point)</label></li>
                                        <li class="list-group-item"><input type='radio' name='bowel' class="bowel"
                                                                           data-value="2" value="Urgency or frequency"/><label>Urgency
                                                or frequency (2 Points)</label></li>
                                        <li class="list-group-item"><input type='radio' name='bowel' class="bowel"
                                                                           data-value="4"
                                                                           value="Urgency/frequency and Incontinence"/><label>Urgency/frequency
                                                and Incontinence (4 Points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='bowel_point' class="form-control Total" id="bowel_point"
                                           readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Medication: &nbsp; &nbsp;</label> <span>Includes PCA/opiates, anticonvulsants, anti-hypertensives, diuretics,hypnotics,laxatives,sadatives,and psychotropics (Single Select)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='radio' class="medication"
                                                                           name='medication' data-value="3"
                                                                           value="On 1 high fall risk drug"/><label>On 1
                                                high fall risk drug (3 points)</label></li>
                                        <li class="list-group-item"><input type='radio' class="medication"
                                                                           name='medication' data-value="5"
                                                                           value="On 2 or more high fall risk drugs"/><label>On
                                                2 or more high fall risk drugs (5 Points)</label></li>
                                        <li class="list-group-item"><input type='radio' class="medication"
                                                                           name='medication' data-value="7"
                                                                           value="Sedated procedure within past 24 hours"/><label>Sedated
                                                procedure within past 24 hours(7 points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='medication_point' class="form-control Total"
                                           id="medication_point" readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Patient Care Equipment:&nbsp; &nbsp;</label> <span>Any equipment that tethers patient (e.g., IV infusion, Chest tube, indwelling catheter, SCDs, ets.) (Single Select)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='radio' class="care" name='care'
                                                                           data-value="1" value="One present"/><label>One
                                                present(1 point)</label></li>
                                        <li class="list-group-item"><input type='radio' class="care" name='care'
                                                                           data-value="2" value="Two present"/><label>Two
                                                present(2 Points)</label></li>
                                        <li class="list-group-item"><input type='radio' class="care" name='care'
                                                                           data-value="3"
                                                                           value="3 or more present"/><label>3 or more
                                                present (3 points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='care_point' class="form-control Total" id="care_point"
                                           readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Mobility &nbsp; &nbsp;</label> <span>(multi-select: choose all that apply and points together)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='checkbox' name='mobility[]'
                                                                           class="mobility" data-value="2"
                                                                           value="Reqires assistance or supervision for mobility,transfer,or ambulation"/><label>Reqires
                                                assistance or supervision for mobility,transfer,or ambulation(2
                                                point)</label></li>
                                        <li class="list-group-item"><input type='checkbox' name='mobility[]'
                                                                           class="mobility" data-value="2"
                                                                           value="Unsteady gait"/><label>Unsteady gait(2
                                                Points)</label></li>
                                        <li class="list-group-item"><input type='checkbox' name='mobility[]'
                                                                           class="mobility" data-value="2"
                                                                           value="Visual or auditory impairment affecting mobility"/><label>Visual
                                                or auditory impairment affecting mobility (2 points)</label></li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='mobility_point' class="form-control Total" id="mobility_point"
                                           readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Cognition &nbsp; &nbsp;</label> <span>(multi-select: choose all that apply and points together)</span>
                                    <ul class="list-group">
                                        <li class="list-group-item"><input type='checkbox' name='cogntion[]'
                                                                           class="cogntion" data-value="1"
                                                                           value="Altered awareness of immediate physical environment"/><label>Altered
                                                awareness of immediate physical environment(1 point)</label></li>
                                        <li class="list-group-item"><input type='checkbox' name='cogntion[]'
                                                                           class="cogntion" data-value="2"
                                                                           value="Impulsive"/><label>Impulsive(2
                                                Points)</label></li>
                                        <li class="list-group-item"><input type='checkbox' name='cogntion[]'
                                                                           class="cogntion" data-value="4"
                                                                           value="Lack of understanding of one's physical and cognitive limitation"/><label>Lack
                                                of understanding of one's physical and cognitive limitation(4
                                                points)</label></li>

                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type='text' name='cogntion_point' class="form-control Total"
                                           id="cogntion_point" readonly/>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="Total">Total Fall Risk Score: </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Total" id="Total"
                                           placeholder="Total Fall Risk Score" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-group">
                                    <label> SCORING: 6-13 Total Points = Moderate Fall Risk, > 13 Total Points = High
                                        Fall Risk </label>
                                </div>
                            </td>
                        </tr>


                        </tbody>

                    </table>


                    <div class="form-group">
                        <label class="mws-form-label">Doctor Signature</label>
                        <input type='text' placeholder='Doctor Signature' name='sign' class="form-control"/>
                    </div>
                    <input
                        type='hidden' name='time'
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
<script>
    $(".MRN").change(function(){
       var id = $(this).val();
        //alert(id);
        $.get('<?= base_url()?>index.php/PublicFunction/GetAge/' + id, function (age) {
            //alert(age);
            $("#age2").text(age);
            if(age <60){
                $("#ages").hide();
                $("#age_point").val(0);
            }else if(age >=60 || age <=69){
                $(".age1").attr("checked","checked");
                $("#age_point").val(1);
            }else if(age >=70 || age <=79){
                $(".age2").attr("checked","checked");
                $("#age_point").val(2);
            }else if(age >=80){
                $(".age3").attr("checked","checked");
                $("#age_point").val(3);
            }
        });
    });
    $(".sam").click(function () {
        if ($(this).is(":checked"))
            $("#show").hide();
    });
    $(".age").click(function () {
        $("#age_point").val($(this).attr("data-value"));
    });

    $(".history").click(function () {
        $("#history_point").val($(this).attr("data-value"));

    });
    $(".medication").click(function () {
        $("#medication_point").val($(this).attr("data-value"));

    });

    $(".bowel").click(function () {
        $("#bowel_point").val($(this).attr("data-value"));

    });
    $(".care").click(function () {
        $("#care_point").val($(this).attr("data-value"));

    });
    $(".mobility").click(function () {
        var v = Number($(this).attr("data-value"));
        var x = $("#mobility_point").val();
        if ($(this).is(":checked")) {
            var t = parseInt(x || 0) + parseInt(v || 0);

            $("#mobility_point").val(t);
        } else {
            var t = x - v;

            $("#mobility_point").val(t);
        }
    });
    $(".cogntion").click(function () {
        var v = Number($(this).attr("data-value"));
        var x = $("#cogntion_point").val();


        if ($(this).is(":checked")) {
            var t = parseInt(x || 0) + parseInt(v || 0);

            $("#cogntion_point").val(t);
        } else {
            var t = x - v;

            $("#cogntion_point").val(t);
        }
    });
    $("input").click(function () {
        var sum = 0;
        $('.Total').each(function () {
            sum += Number($(this).val());
        });
        //alert(sum);
        $("#Total").val(sum);
    });

</script>

