<table class="table table-bordered table-responsive table-hover">
    <tr>
        <td colspan="2">PT's Name: <?=@$patient->name?></td><td>MRN: <?=@$patient->id?></td>
    </tr>
    <tr>
        <td>Age: <span id="age"><?=@PublicFunction::ageCalculator($patient->age)?></span>  years old </td><td>Gender: <?=@Patient::Gender()[@$patient->gender]?></td><td>PT's ID: <?=@$patient->pt_id?></td>
    </tr>
    <tr>
        <td colspan="3">Diagnosis: <?=@$diagnosis->diagnosis?></td>
    </tr>
</table>