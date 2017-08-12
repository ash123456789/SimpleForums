<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?= h($message) ?>
</div>
<script>
    window.setTimeout(function() {
        $(".alert-danger").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 10000);
</script>