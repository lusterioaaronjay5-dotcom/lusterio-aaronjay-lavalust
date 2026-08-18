<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile - <?= $name ?></title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f4f6f8; padding: 60px; }
        .card {
            max-width: 480px; margin: auto; background: #fff; border-radius: 10px;
            padding: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 { color: #16a085; text-align: center; }
        p { margin: 8px 0; color: #333; }
        strong { color: #2c3e50; }
        .nav { text-align: center; margin-top: 25px; }
        .nav a { margin: 0 10px; color: #16a085; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>
        <p><strong>Student ID:</strong> <?= $student_id ?></p>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Course:</strong> <?= $course ?></p>
        <p><strong>Year Level:</strong> <?= $year ?></p>
        <p><strong>Section:</strong> <?= $section ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Hobbies:</strong> <?= $hobbies ?></p>
    </div>

    <div class="nav">
        <a href="<?= site_url('student') ?>">Home</a> |
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </div>
</body>
</html>