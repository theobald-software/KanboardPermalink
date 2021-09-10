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

<li>
    <a id="permalink-link" href="<?= $permalink ?>">
        <i class="fa fa-link fa-fw" aria-hidden="true" style="pointer-events:none"></i>Copy Permalink
    </a>
</li>