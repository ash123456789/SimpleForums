<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title"><?= h($firstPost->title); ?></h3>
        <div class="block-options">
            <a class="btn-block-option" href="#forum-reply-form" data-toggle="scroll-to">
                <i class="fa fa-reply"></i> Reply
            </a>
        </div>
    </div>
    <div class="block-content">
        <!-- Discussion -->
        <table class="table table-borderless">
            <tbody>
                <?php foreach($thread as $posts): ?>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Megan Fuller</a> on <em>February 1, 2017 16:15</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/img/avatars/avatar7.jpg" alt="">
                            </a>
                        </div>
                        <small>320 Posts<br>Level 4</small>
                    </td>
                    <td>
                        <p><?= h($posts->message); ?></p>
                        <hr>
                        <p class="font-size-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- END Discussion -->
    </div>
</div>
