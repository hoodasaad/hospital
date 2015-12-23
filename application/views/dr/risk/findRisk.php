<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="block">

                <div class="block-title"><span class="glyphicon glyphicon-user"></span> Add Full Risk Assessment Tool
                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>index.php/dr_control/display_risk"><span
                            class="glyphicon glyphicon-eye-open"></span></a></div>
                <div class="block-content">
                    <table class="table table-bordered table-responsive table-hover">
                        <tr>
                            <td colspan="2">PT's Name: <?=@$patient->name?></td><td>MRN: <?=@$patient->id?></td>
                        </tr>
                        <tr>
                            <td>Age: <?=@Patient::ageCalculator(@$patient->age)?></td><td>Gender: <?=@Patient::Gender()[$patient->gender]?></td><td>PT's ID: <?=@$patient->pt_id?></td>
                        </tr>
                        <tr>
                            <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
                        </tr>
                    </table>
                    <div class="form-group">
                        <label class="mws-form-label">If Patient has any of the following conditions,Check the box and
                            apply Fall Risk interventions as indicated </label>
                    </div>
                    <form>
                    <div class="form-group">
                        <label class="mws-form-label">High Fall Risk&nbsp; &nbsp;</label> <span>-Implement High Fall Risk interventions per protocol </span>
                                <input type="text" class="form-control" value="<?= $contact->high?>" readonly>
                    </div>
                    <div class="form-group">
                        <label class="mws-form-label">Low Fall Risk &nbsp; &nbsp;</label> <span>Implement Low Fall Risk interventions per protocol</span>
                        <input type="text" class="form-control" value="<?= $contact->low?>" readonly>
                    </div>
                    <table class="table table-responsive table-bordered" id="show" <?php if ($contact->age ==0) { echo 'style="display: none"';  } ?> >
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
                                    <label class="mws-form-label">Age &nbsp; &nbsp;</label> <span>(Single-Select)</span>
                                    <input type="text" class="form-control" value="<?= $contact->age?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->age_point?>" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Fall History&nbsp; &nbsp;</label> <span>(Single-Select)</span>
                                    <input type="text" class="form-control" value="<?= $contact->history?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->history_point?>" readonly>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Elimination, Bowel an Urine &nbsp; &nbsp;</label>
                                    <input type="text" class="form-control" value="<?= $contact->bowel?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->bowel_point?>" readonly>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Medication: &nbsp; &nbsp;</label> <span>Includes PCA/opiates, anticonvulsants, anti-hypertensives, diuretics,hypnotics,laxatives,sadatives,and psychotropics (Single Select)</span>
                                    <input type="text" class="form-control" value="<?= $contact->medication?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->medication_point?>" readonly>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Patient Care Equipment:&nbsp; &nbsp;</label> <span>Any equipment that tethers patient (e.g., IV infusion, Chest tube, indwelling catheter, SCDs, ets.) (Single Select)</span>
                                    <input type="text" class="form-control" value="<?= $contact->care?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->care_point?>" readonly>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Mobility &nbsp; &nbsp;</label> <span>(multi-select: choose all that apply and points together)</span>
                                    <input type="text" class="form-control" value="<?= $contact->mobility?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->mobility_point?>" readonly>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="mws-form-label">Cognition &nbsp; &nbsp;</label> <span>(multi-select: choose all that apply and points together)</span>
                                    <input type="text" class="form-control" value="<?= $contact->cogntion?>" readonly>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?= $contact->cogntion_point?>" readonly>
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
                                    <input type="text" class="form-control" value="<?= $contact->total?>" readonly>
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
                        <input type="text" class="form-control" value="<?= $contact->dr_sign?>" readonly>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script>
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

