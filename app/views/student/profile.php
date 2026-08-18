<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - <?= htmlspecialchars($name) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #eef3f1;
            --card: #ffffff;
            --primary: #174b42;
            --primary-dark: #0f3831;
            --soft: #e6f0ed;
            --text: #17221f;
            --muted: #71807b;
            --light: #9aa7a3;
            --border: #e3e9e6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 30px 18px;
            display: grid;
            place-items: center;
            font-family: "DM Sans", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 0 0, #dce9e5, transparent 30%),
                radial-gradient(circle at 100% 100%, #dfeae7, transparent 30%),
                var(--bg);
        }

        .portal {
            width: 100%;
            max-width: 500px;
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-bottom: 18px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .brand-mark {
            width: 32px;
            height: 32px;
            display: grid;
            place-items: center;
            border-radius: 9px;
            background: var(--primary);
            color: #fff;
            font: 700 13px "Space Grotesk", sans-serif;
            box-shadow: 0 7px 16px rgba(23,75,66,.18);
        }

        .card {
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,.9);
            border-radius: 24px;
            background: var(--card);
            box-shadow: 0 25px 65px rgba(23,75,66,.12);
        }

        .top {
            height: 145px;
            position: relative;
            padding: 25px;
            background: linear-gradient(135deg, var(--primary), #286257);
            overflow: hidden;
        }

        .top::before,
        .top::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 50%;
        }

        .top::before {
            width: 220px;
            height: 220px;
            right: -90px;
            top: -130px;
        }

        .top::after {
            width: 150px;
            height: 150px;
            left: -90px;
            bottom: -110px;
        }

        .system {
            position: relative;
            z-index: 1;
            color: rgba(255,255,255,.72);
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        .profile {
            position: relative;
            margin: -55px 24px 0;
            padding-bottom: 22px;
            display: flex;
            align-items: flex-end;
            gap: 16px;
            border-bottom: 1px solid var(--border);
        }

        .avatar {
            width: 86px;
            height: 86px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border: 5px solid #fff;
            border-radius: 24px;
            background: var(--soft);
            color: var(--primary);
            font: 700 28px "Space Grotesk", sans-serif;
            box-shadow: 0 8px 20px rgba(23,75,66,.15);
            position: relative;
            z-index: 2;
        }

        .avatar::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 1px;
            width: 11px;
            height: 11px;
            border: 3px solid #fff;
            border-radius: 50%;
            background: #4caf79;
        }

        .identity {
            min-width: 0;
            padding-bottom: 4px;
            position: relative;
            z-index: 2;
        }

        .identity small {
            display: block;
            margin-bottom: 4px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .07em;
        }

        .identity h1 {
            margin: 0;
            color: #17221f;
            font: 800 23px "Space Grotesk", sans-serif;
            line-height: 1.2;
            word-break: break-word;
            letter-spacing: -0.02em;
        }

        .details {
            padding: 22px 24px 24px;
        }

        .section-title {
            margin: 0 0 13px;
            color: var(--text);
            font-size: 12px;
            font-weight: 700;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .item {
            padding: 13px 14px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: #f8faf9;
            transition: .2s;
        }

        .item:hover {
            border-color: #cbdad5;
            transform: translateY(-1px);
        }

        .item.wide {
            grid-column: span 2;
        }

        .item small {
            display: block;
            margin-bottom: 5px;
            color: var(--light);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .07em;
            text-transform: uppercase;
        }

        .item span {
            display: block;
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
            line-height: 1.4;
            word-break: break-word;
        }

        .back {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            margin-top: 17px;
            color: var(--muted);
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            transition: .2s;
        }

        .back:hover {
            color: var(--primary);
            transform: translateX(-2px);
        }

        @media (max-width: 400px) {
            .top {
                height: 130px;
            }

            .profile {
                align-items: center;
                margin-top: -42px;
            }

            .avatar {
                width: 72px;
                height: 72px;
                border-radius: 20px;
                font-size: 23px;
            }

            .identity h1 {
                font-size: 18px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .item.wide {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body>

    <main class="portal">

        <div class="brand">
            <div class="brand-mark">LL</div>
            LavaLust Student Information System
        </div>

        <section class="card">

            <div class="top">
                <div class="system">Student Portal</div>
            </div>

            <div class="profile">

                <div class="avatar">
                    <?= htmlspecialchars(strtoupper(substr($name, 0, 1))) ?>
                </div>

                <div class="identity">
                    <small>Student Profile</small>
                    <h1><?= htmlspecialchars($name) ?></h1>
                </div>

            </div>

            <div class="details">

                <h2 class="section-title">
                    Personal & Academic Information
                </h2>

                <div class="grid">

                    <div class="item">
                        <small>Student ID</small>
                        <span><?= htmlspecialchars($student_id) ?></span>
                    </div>

                    <div class="item">
                        <small>Year Level</small>
                        <span><?= htmlspecialchars($year) ?></span>
                    </div>

                    <div class="item">
                        <small>Course</small>
                        <span><?= htmlspecialchars($course) ?></span>
                    </div>

                    <div class="item">
                        <small>Section</small>
                        <span><?= htmlspecialchars($section) ?></span>
                    </div>

                    <div class="item wide">
                        <small>Email Address</small>
                        <span><?= htmlspecialchars($email) ?></span>
                    </div>

                    <div class="item wide">
                        <small>Hobbies</small>
                        <span><?= htmlspecialchars($hobbies) ?></span>
                    </div>

                </div>

            </div>

        </section>

        <a class="back" href="<?= site_url('student') ?>">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5">
                <line x1="19" y1="12" x2="5" y2="12"/>
                <polyline points="12 19 5 12 12 5"/>
            </svg>
            Back to home
        </a>

    </main>

</body>
</html>