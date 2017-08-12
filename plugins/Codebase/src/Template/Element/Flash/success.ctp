<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?= h($message) ?>
</div>
<script>
    window.setTimeout(function() {
        $(".alert-success").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);
</script>