<?php $this->assign('title', 'Forums'); ?>

        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Categories</h3>
            </div>
            <div class="block-content">
                <?php foreach ($nodes as $node): ?>
                <!-- Intro Category -->
                <table class="table table-striped table-borderless table-vcenter">
                    <thead class="thead-default">
                    <tr>
                        <th colspan="2"><?= $node->title; ?></th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                        <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($node->children as $child): ?>
                        <tr>
                            <td class="text-center" style="width: 65px;">
                                <i class="si si-check fa-2x"></i>
                            </td>
                            <td>
                                <a class="font-size-h5 font-w600" href="/f<?= $child->node_id; ?>"><?= $child->title; ?></a>
                                <div class="text-muted my-5"><?= $child->description; ?></div>
                                <?php if (count($child->children) > 0): ?>
                                <div class="font-size-sm text-muted">
                                    <em>
                                        <strong class="font-w600">Subforums:</strong>
                                        <ul class="multi-column">
                                        <?php foreach ($child->children as $childOfChild): ?>
                                            <li><i class="fa fa-comments mr-5"></i><a href="/f<?= $childOfChild->node_id; ?>"><?= $childOfChild->title; ?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </em>
                                </div>
                                <?php endif; ?>
                            </td>
                            <?php if (count($child['threads']) < 1): ?>
                                <td class="d-none d-md-table-cell text-center">
                                    <a class="font-w600" href="javascript:void(0)">0</a>
                                </td>
                            <?php else: ?>
                                <?php foreach ($child['threads'] as $threadCount): ?>
                                    <td class="d-none d-md-table-cell text-center">
                                        <a class="font-w600" href="javascript:void(0)"><?= $threadCount['total']; ?></a>
                                    </td>
                                <?php endforeach; ?>
                            <?php endif; ?>
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
                <?php endforeach; ?>
            </div>
        </div>
        <!-- END Categories Block -->