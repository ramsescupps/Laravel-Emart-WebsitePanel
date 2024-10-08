@include('layouts.app')
@include('layouts.header')
<div class="container position-relative extra-page">
    <div class="col-md-12 mb-3 mt-5 pb-5 pt-3">
        <div class="terms_of_use"></div>
    </div>
</div>
@include('layouts.footer');
<script>
    var id = user_uuid;
    var database = firebase.firestore();
    var ref = database.collection('settings').doc('termsAndConditions');
    $(document).ready(function () {
        ref.get().then(async function (snapshots) {
            var user = snapshots.data();
            $(".terms_of_use").html(user.terms_and_condition);
            jQuery("#data-table_processing").hide();
        })
    });
</script>