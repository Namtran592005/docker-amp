<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Stack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, sans-serif;
            background-color: #fafafa;
        }

        .grid-clean {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }
    </style>
</head>

<body class="p-6 md:p-12 text-slate-800">

    <div class="max-w-4xl mx-auto">
        <header class="mb-12 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-bold tracking-tight">Docker Dev</h1>
                <p class="text-slate-500 italic">Môi trường đã sẵn sàng.</p>
            </div>
            <div
                class="text-[10px] font-bold uppercase tracking-widest text-emerald-500 bg-emerald-50 px-2 py-1 rounded">
                Active
            </div>
        </header>

        <div class="grid-clean mb-12">

            <div class="bg-white border border-slate-200 p-6 rounded-2xl">
                <p class="text-xs font-semibold text-slate-400 uppercase mb-2">PHP Version</p>
                <p class="text-4xl font-light mb-4"><?php echo PHP_VERSION; ?></p>
                <a href="?info=1" class="text-sm text-blue-500 hover:text-blue-700 font-medium">Chi tiết cấu hình →</a>
            </div>

            <div class="bg-white border border-slate-200 p-6 rounded-2xl">
                <p class="text-xs font-semibold text-slate-400 uppercase mb-2">Database Host</p>
                <p class="text-2xl font-semibold mb-1">mysql_container</p>
                <p class="text-sm text-slate-500">User: <span class="font-mono bg-slate-100 px-1">root</span></p>
            </div>

            <div
                class="bg-slate-900 text-white p-6 rounded-2xl flex flex-col justify-between hover:bg-black transition-all">
                <p class="text-xs font-semibold text-slate-400 uppercase">Tools</p>
                <div>
                    <p class="text-xl font-medium">phpMyAdmin</p>
                    <a href="http://localhost/phpmyadmin/" target="_blank"
                        class="mt-4 inline-block text-sm border-b border-white/30 pb-1 hover:border-white transition-all">Truy
                        cập Dashboard</a>
                </div>
            </div>

        </div>

        <div class="border-t border-slate-200 pt-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                <div>
                    <p class="text-slate-400">Server</p>
                    <p class="font-medium truncate"><?php echo explode('/', $_SERVER['SERVER_SOFTWARE'])[0]; ?></p>
                </div>
                <div>
                    <p class="text-slate-400">IP Address</p>
                    <p class="font-mono"><?php echo $_SERVER['SERVER_ADDR'] ?? '127.0.0.1'; ?></p>
                </div>
                <div class="col-span-2">
                    <p class="text-slate-400">Time</p>
                    <p class="font-medium"><?php echo date('Y-m-d H:i'); ?></p>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['info'])): ?>
            <div class="mt-12 pt-8 border-t border-slate-200">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold">PHP Info</h3>
                    <a href="?" class="text-slate-400 hover:text-red-500">Đóng [x]</a>
                </div>
                <div class="bg-white rounded-xl border border-slate-200 p-4 overflow-x-auto text-[10px]">
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

        <footer class="mt-20 text-[11px] text-slate-400 uppercase tracking-tighter">
            Minimalist Dashboard &bull; Running on Docker
        </footer>
    </div>

</body>

</html>
