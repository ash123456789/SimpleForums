<?php $this->assign('title', $node->title); ?>

<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title"><?= $node->title; ?> </h3>
        <div class="block-options">
            <a href="/threads/add" class="btn-block-option">
                <i class="fa fa-plus"></i> New Thread
            </a>
        </div>
    </div>
    <?php if(!empty($children)): ?>
    <div class="block-content">
        <!-- Intro Category -->
        <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-default">
                <tr>
                    <th colspan="2">Subforums</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                    <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($children as $node): ?>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-check fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-size-h5 font-w600" href="/f<?= $node->node_id; ?>"><?= $node->title; ?></a>
                        <div class="text-muted my-5"><?= $node->description; ?></div>
                        <?php if (count($node->children) > 0): ?>
                            <div class="font-size-sm text-muted">
                                <em>
                                    <strong class="font-w600">Subforums:</strong>
                                    <ul class="multi-column">
                                        <?php foreach ($node->children as $childOfChild): ?>
                                            <li><i class="fa fa-comments mr-5"></i><a href="/f<?= $childOfChild->node_id; ?>"><?= $childOfChild->title; ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </em>
                            </div>
                        <?php endif; ?>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">0</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">0</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">by <a href="be_pages_generic_profile.html">Jose Mills</a><br>on <em>January 23, 2017</em></span>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- END Intro Category -->
    </div>
    <?php endif; ?>
    <!-- END Categories Block -->
    <div class="block-content">
        <!-- Threads -->
        <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-default">
                <tr>
                    <th colspan="2">Title / Thread Starter</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Replies</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Views</th>
                    <th class="d-none d-md-table-cell" style="width: 200px;">Last Post</th>
                </tr>
            </thead>
            <tbody>
                <!-- Stickied Threads -->
                <?php foreach ($stickiedThreads as $thread): ?>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="/f<?= $node->node_id; ?>/<?= $thread->slug; ?>"><?= $thread->title; ?></a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Albert Ray</a> on <em>June 20, 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">178</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">445</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">by <a href="be_pages_generic_profile.html">Andrea Gardner</a><br>on <em>January 21, 2017</em></span>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!-- END Stickied Threads -->
                <!-- Normal Threads -->
                <?php foreach ($normalThreads as $thread): ?>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="fa fa-comments-o fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="/f<?= $node->node_id; ?>/<?= $thread->slug; ?>"><?= $thread->title; ?></a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Alice Moore</a> on <em><?= $thread->created->format('D d M, Y'); ?></em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">288</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">981</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">by <a href="be_pages_generic_profile.html">Alice Moore</a><br>on <em>January 4, 2017</em></span>
                    </td>
                </tr>
                <?php endforeach; ?>
                <!-- END Normal Threads -->
            </tbody>
        </table>
        <!-- END Threads -->

        <!-- Pagination -->
        <nav aria-label="page navigation">
            <ul class="pagination justify-content-end mr-20">
                <li class="page-item"><?php echo $this->Paginator->prev('<< ' . __('Previous', true), array(), null, array('class'=>'disabled'));?></li>
                <li class="page-item"><?php echo $this->Paginator->numbers(array(   'class' => 'page-link'     ));?></li>
                <li class="page-item"><?php echo $this->Paginator->next(__('Next', true) . ' >>', array(), null, array('class' => 'disabled'));?></li>
            </ul>
        </nav>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end mr-20">
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
</div>
