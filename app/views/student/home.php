<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #f1f4f3;
            --card: #fff;
            --primary: #174b42;
            --primary-dark: #103a33;
            --soft: #e5efec;
            --text: #17221f;
            --muted: #71807b;
            --light: #9aa7a3;
            --border: #e3e9e6;
            --danger: #a33c2c;
            --danger-bg: #fff4f1;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 20px;
            display: grid;
            place-items: center;
            font-family: "DM Sans", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 10% 10%, #dce9e5, transparent 30%),
                radial-gradient(circle at 90% 90%, #e3ece9, transparent 30%),
                var(--bg);
        }

        .portal {
            width: 100%;
            max-width: 460px;
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--primary);
            color: white;
            font-family: "Space Grotesk", sans-serif;
        }

        .card {
            padding: 32px;
            border: 1px solid #fff;
            border-radius: 22px;
            background: rgba(255,255,255,.94);
            box-shadow: 0 24px 60px rgba(23,75,66,.11);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0 0 auto;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #5b897f, var(--primary));
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .avatar {
            position: relative;
            width: 60px;
            height: 60px;
            display: grid;
            place-items: center;
            flex-shrink: 0;
            border-radius: 17px;
            background: var(--soft);
            color: var(--primary);
            font: 700 18px "Space Grotesk", sans-serif;
        }

        .avatar::after {
            content: "";
            position: absolute;
            right: -2px;
            bottom: -2px;
            width: 11px;
            height: 11px;
            border: 3px solid white;
            border-radius: 50%;
            background: #4caf79;
        }

        .welcome {
            margin: 0 0 3px;
            color: var(--muted);
            font-size: 12px;
        }

        h1 {
            margin: 0;
            font: 700 21px "Space Grotesk", sans-serif;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 20px;
        }

        .detail {
            padding: 13px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #f7f9f8;
        }

        .detail small {
            display: block;
            margin-bottom: 4px;
            color: var(--light);
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
        }

        .detail span {
            font-size: 12px;
            font-weight: 600;
        }

        .alert {
            display: flex;
            gap: 10px;
            margin-bottom: 16px;
            padding: 12px;
            border: 1px solid #f1d2ca;
            border-radius: 10px;
            background: var(--danger-bg);
            color: var(--danger);
            font-size: 12px;
            line-height: 1.5;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 14px 15px;
            border-radius: 12px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: .2s;
        }

        .button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .button span {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .icon {
            width: 29px;
            height: 29px;
            display: grid;
            place-items: center;
            border-radius: 8px;
            background: rgba(255,255,255,.12);
        }

        .footer {
            margin-top: 16px;
            text-align: center;
            color: var(--light);
            font-size: 11px;
        }

        @media (max-width: 380px) {
            .card {
                padding: 24px 20px;
            }

            .details {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 19px;
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

            <div class="profile">
                <div class="avatar">AL</div>

                <div>
                    <p class="welcome">Welcome back</p>
                    <h1>Aaronjay Lusterio</h1>
                </div>
            </div>

            <div class="details">
                <div class="detail">
                    <small>Student ID</small>
                    <span>00232</span>
                </div>

                <div class="detail">
                    <small>Program</small>
                    <span>BS Information Technology</span>
                </div>
            </div>

            <?php if (isset($_SESSION['access_denied_msg'])): ?>
                <div class="alert">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>

                    <span>
                        <?= htmlspecialchars($_SESSION['access_denied_msg']) ?>
                    </span>
                </div>

                <?php unset($_SESSION['access_denied_msg']); ?>
            <?php endif; ?>

            <a class="button" href="<?= site_url('student/profile') ?>">
                <span>
                    <i class="icon">
                        <svg width="15" height="15" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21a8 8 0 0 0-16 0"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </i>

                    View My Profile
                </span>

                <svg width="17" height="17" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>

        </section>

        <div class="footer">
            Student Portal · LavaLust SIS · Secure Access
        </div>

    </main>

</body>
</html>