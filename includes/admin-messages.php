<?php

$messageTypes = ['success', 'error', 'warning', 'info'];
?>
<?php foreach ($messageTypes as $messageType): ?>
    <?php $message = consumeFlash($messageType); ?>
    <?php if ($message !== null): ?>
        <p class="admin-message admin-message-<?= e($messageType); ?>" role="status"><?= e($message); ?></p>
    <?php endif; ?>
<?php endforeach; ?>
