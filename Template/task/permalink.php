<?php
    $permalink = $this->url->to(
        'TaskViewController',
        'show',
        array(
            'task_id' => $task['id'],
        ),
        '',
        true
    );
?>

<li class="permalink">
    <a href="<?= $permalink ?>" id="permalink-link" class="" title="<?= t('Copy the direct link to this task to the clipboard') ?>">
        <i class="fa fa-link fa-fw" aria-hidden="true" style="pointer-events:none"></i> <?= t('Copy Permalink') ?>
    </a>
</li>
