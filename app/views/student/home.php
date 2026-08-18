<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title ?></title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #eef2f7; text-align: center; padding-top: 80px; }
        h1 { color: #2c3e50; }
        p { color: #555; }
        a.btn {
            display: inline-block; margin-top: 20px; padding: 12px 24px;
            background: #2c3e50; color: #fff; text-decoration: none; border-radius: 6px;
        }
        a.btn:hover { background: #1a252f; }
        .nav { margin-top: 30px; }
        .nav a { margin: 0 10px; color: #2c3e50; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Welcome to My Student Page</h1>
    <p>This is the home page for Aaronjay Lusterio's LavaLust Student Information System.</p>

    <?php if (isset($_SESSION['access_denied_msg'])): ?>
        <p style="color: red; font-weight: bold;">
            <?= $_SESSION['access_denied_msg'] ?>
        </p>
        <?php unset($_SESSION['access_denied_msg']); ?>
    <?php endif; ?>

    <a class="btn" href="<?= site_url('student/profile') ?>">View My Profile</a>
</body>
</html>