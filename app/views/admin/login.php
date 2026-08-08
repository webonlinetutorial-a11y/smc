<main class="auth-page">
    <section class="auth-panel" aria-labelledby="login-title">
        <h1 id="login-title">Admin Login</h1>

        <?php if (!empty($error)): ?>
            <p class="form-error" role="alert"><?= e($error); ?></p>
        <?php endif; ?>

        <form method="post" action="<?= e(appUrl('/admin/login.php')); ?>" class="auth-form">
            <?= csrfField(); ?>

            <label for="identity">Email or username</label>
            <input id="identity" name="identity" type="text" autocomplete="username" required>

            <label for="password">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required>

            <button type="submit">Login</button>
        </form>
    </section>
</main>
