<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Stack</title>
    <style>
        /* Base Reset & Typography */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #fafafa;
            color: #1e293b;
            /* slate-800 */
            line-height: 1.5;
            padding: 3rem 1.5rem;
        }

        .container {
            max-width: 56rem;
            /* 4xl */
            margin: 0 auto;
        }

        /* Layout Helpers */
        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
        }

        .title {
            font-size: 1.875rem;
            font-weight: 700;
            letter-spacing: -0.025em;
        }

        .subtitle {
            color: #64748b;
            font-style: italic;
        }

        .badge {
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #10b981;
            /* emerald-500 */
            background-color: #ecfdf5;
            /* emerald-50 */
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
        }

        /* Grid System */
        .grid-clean {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        /* Card Styles */
        .card {
            background-color: white;
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
            border-radius: 1rem;
        }

        .card-dark {
            background-color: #0f172a;
            /* slate-900 */
            color: white;
            transition: background-color 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-dark:hover {
            background-color: #000;
        }

        .label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #94a3b8;
            /* slate-400 */
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        /* Typography inside cards */
        .val-large {
            font-size: 2.25rem;
            font-weight: 300;
            margin-bottom: 1rem;
        }

        .val-medium {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .val-tool {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .mono-tag {
            font-family: ui-monospace, SFMono-Regular, Menlo, monospace;
            background-color: #f1f5f9;
            padding: 0 0.25rem;
        }

        /* Links */
        a {
            text-decoration: none;
            transition: 0.2s;
        }

        .link-blue {
            color: #3b82f6;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .link-blue:hover {
            color: #1d4ed8;
        }

        .link-white {
            display: inline-block;
            margin-top: 1rem;
            font-size: 0.875rem;
            color: white;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 0.25rem;
        }

        .link-white:hover {
            border-bottom-color: white;
        }

        /* Footer Stats */
        .stats-footer {
            border-top: 1px solid #e2e8f0;
            padding-top: 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            font-size: 0.875rem;
        }

        @media (min-width: 768px) {
            .stats-footer {
                grid-template-columns: repeat(4, 1fr);
            }

            body {
                padding: 3rem;
            }
        }

        .stat-item p:first-child {
            color: #94a3b8;
        }

        .stat-item p:last-child {
            font-weight: 500;
        }

        /* PHP Info Section */
        .info-section {
            margin-top: 3rem;
            border-top: 1px solid #e2e8f0;
            padding-top: 2rem;
        }

        .info-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .info-content {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            padding: 1rem;
            overflow-x: auto;
            font-size: 10px;
        }

        /* PHPInfo Styles Reset */
        .info-content table {
            border-collapse: collapse;
            width: 100%;
        }

        .info-content td,
        .info-content th {
            border: 1px solid #ddd;
            padding: 4px;
        }

        .page-footer {
            margin-top: 5rem;
            font-size: 11px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: -0.025em;
        }
    </style>
</head>

<body>

    <div class="container">
        <header>
            <div>
                <h1 class="title">Docker Dev</h1>
                <p class="subtitle">Môi trường đã sẵn sàng.</p>
            </div>
            <div class="badge">Active</div>
        </header>

        <div class="grid-clean">
            <div class="card">
                <p class="label">PHP Version</p>
                <p class="val-large"><?php echo PHP_VERSION; ?></p>
                <a href="?info=1" class="link-blue">Chi tiết cấu hình →</a>
            </div>

            <div class="card">
                <p class="label">Database Host</p>
                <p class="val-medium">mysql_container</p>
                <p style="font-size: 0.875rem; color: #64748b;">User: <span class="mono-tag">root</span></p>
            </div>

            <div class="card card-dark">
                <p class="label" style="color: #94a3b8;">Tools</p>
                <div>
                    <p class="val-tool">phpMyAdmin</p>
                    <a href="http://localhost/phpmyadmin/" target="_blank" class="link-white">Truy cập Dashboard</a>
                </div>
            </div>
        </div>

        <div class="stats-footer">
            <div class="stat-item">
                <p>Server</p>
                <p style="word-break: break-all;"><?php echo explode('/', $_SERVER['SERVER_SOFTWARE'])[0]; ?></p>
            </div>
            <div class="stat-item">
                <p>IP Address</p>
                <p style="font-family: monospace;"><?php echo $_SERVER['SERVER_ADDR'] ?? '127.0.0.1'; ?></p>
            </div>
            <div class="stat-item" style="grid-column: span 2;">
                <p>Time</p>
                <p><?php echo date('Y-m-d H:i'); ?></p>
            </div>
        </div>

        <?php if (isset($_GET['info'])): ?>
            <div class="info-section">
                <div class="info-header">
                    <h3 style="font-weight: 700;">PHP Info</h3>
                    <a href="?" style="color: #94a3b8;">Đóng [x]</a>
                </div>
                <div class="info-content">
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

        <footer class="page-footer">
            Minimalist Dashboard &bull; Running on Docker
        </footer>
    </div>

</body>

</html>
