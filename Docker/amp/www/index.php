<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Stack - Full Dashboard</title>
    <style>
        /* Base Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: ui-sans-serif, system-ui, -apple-system, sans-serif;
            background-color: #fafafa;
            color: #1e293b;
            padding: 2rem 1rem;
            line-height: 1.5;
        }

        .container {
            max-width: 64rem;
            margin: 0 auto;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 2.5rem;
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: -0.025em;
        }

        .badge {
            font-size: 10px;
            font-weight: 700;
            color: #10b981;
            background: #ecfdf5;
            padding: 4px 10px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Grid System */
        .grid-main {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.25rem;
            margin-bottom: 2.5rem;
        }

        /* Cards Style */
        .card {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
            border-radius: 1rem;
            position: relative;
        }

        .card-dark {
            background: #0f172a;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: 0.2s;
        }

        .card-dark:hover {
            background: #000;
        }

        .label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #94a3b8;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .val-large {
            font-size: 2.25rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
        }

        .val-bold {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .mono-box {
            font-family: ui-monospace, monospace;
            background: #f1f5f9;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 0.85rem;
            color: #475569;
        }

        .card-dark .mono-box {
            background: rgba(255, 255, 255, 0.1);
            color: #cbd5e1;
        }

        /* Project Section */
        .section-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .section-title {
            font-size: 0.875rem;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .line {
            flex-grow: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .project-card {
            background: white;
            border: 1px solid #e2e8f0;
            padding: 1rem;
            border-radius: 0.75rem;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: 0.2s;
        }

        .project-card:hover {
            border-color: #3b82f6;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transform: translateY(-2px);
        }

        .project-card span {
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Footer Stats */
        .footer-stats {
            border-top: 1px solid #e2e8f0;
            padding-top: 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        @media (min-width: 768px) {
            .footer-stats {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .stat-group p:first-child {
            color: #94a3b8;
            font-size: 0.8rem;
            text-transform: uppercase;
            margin-bottom: 0.25rem;
        }

        .stat-group p:last-child {
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Utilities */
        .link-action {
            color: #3b82f6;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .link-action:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <header>
            <div>
                <h1 class="title">Docker Dev</h1>
                <p style="color: #64748b; font-style: italic;">Môi trường đã sẵn sàng</p>
            </div>
            <div class="badge">Active</div>
        </header>

        <div class="grid-main">
            <div class="card">
                <p class="label">PHP Version</p>
                <p class="val-large"><?php echo PHP_VERSION; ?></p>
                <a href="?info=1" class="link-action">Chi tiết cấu hình →</a>
            </div>

            <div class="card">
                <p class="label">Database Host</p>
                <p class="val-bold">mysql_container</p>
                <p style="font-size: 0.875rem; color: #64748b;">User: <span class="mono-box">root</span></p>
            </div>

            <div class="card card-dark">
                <p class="label" style="color: #94a3b8;">Tools</p>
                <div>
                    <p style="font-size: 1.25rem; font-weight: 500;">phpMyAdmin</p>
                    <a href="/phpmyadmin/" target="_blank" style="color: white; border-bottom: 1px solid rgba(255,255,255,0.3); font-size: 0.875rem; text-decoration: none; display: inline-block; margin-top: 0.5rem;">Truy cập Dashboard</a>
                </div>
            </div>
        </div>

        <div class="section-header">
            <h2 class="section-title">Projects</h2>
            <div class="line"></div>
        </div>

        <div class="project-grid">
            <?php
            $current_dir = __DIR__;
            $items = scandir($current_dir);
            $exclude = ['.', '..', '.git', '.github', 'node_modules', 'vendor', 'phpmyadmin', '.vscode'];
            $count = 0;

            foreach ($items as $item) {
                if (is_dir($current_dir . '/' . $item) && !in_array($item, $exclude)) {
                    $count++;
                    echo '<a href="/' . htmlspecialchars($item) . '/" class="project-card">
                        <span style="font-size: 1.25rem;">📁</span>
                        <span>' . htmlspecialchars($item) . '</span>
                      </a>';
                }
            }
            if ($count === 0) echo '<p style="color: #94a3b8; grid-column: 1/-1;">Chưa có project nào.</p>';
            ?>
        </div>

        <div class="footer-stats">
            <div class="stat-group">
                <p>Server Software</p>
                <p><?php echo explode('/', $_SERVER['SERVER_SOFTWARE'])[0]; ?></p>
            </div>
            <div class="stat-group">
                <p>IP Address</p>
                <p class="mono-box" style="display: inline-block;"><?php echo $_SERVER['SERVER_ADDR'] ?? '127.0.0.1'; ?></p>
            </div>
            <div class="stat-group" style="grid-column: span 2;">
                <p>System Time</p>
                <p><?php echo date('Y-m-d H:i:s'); ?></p>
            </div>
        </div>

        <?php if (isset($_GET['info'])): ?>
            <div style="margin-top: 3rem; border-top: 2px solid #e2e8f0; padding-top: 2rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                    <h3 style="font-weight: 700;">PHP Engine Info</h3>
                    <a href="?" style="color: #ef4444; font-weight: bold; text-decoration: none;">ĐÓNG [X]</a>
                </div>
                <div style="background: white; border-radius: 1rem; border: 1px solid #e2e8f0; padding: 1.5rem; overflow-x: auto; font-size: 10px;">
                    <?php
                    ob_start();
                    phpinfo();
                    $pinfo = ob_get_contents();
                    ob_end_clean();
                    echo preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo);
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <footer style="margin-top: 4rem; text-align: center; font-size: 11px; color: #cbd5e1; text-transform: uppercase; letter-spacing: 0.1em;">
            Minimalist Stack &bull; Dockerized Environment
        </footer>
    </div>

</body>

</html>
