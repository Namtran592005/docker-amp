<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Development Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f7;
            color: #1d1d1f;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .card-shadow {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
        }

        .card-shadow:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="antialiased">

    <nav class="sticky top-0 z-50 glass border-b border-gray-200/50 px-6 py-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" alt="Docker Logo"
                    class="h-8">
                <span class="font-semibold text-lg tracking-tight">Docker Dashboard</span>
            </div>
            <div class="text-xs font-medium px-3 py-1 bg-green-100 text-green-600 rounded-full">
                ● Container Online
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 py-12">
        <header class="mb-12 text-center">
            <h1 class="text-5xl font-extrabold tracking-tight mb-4 text-gray-900">Môi trường đã sẵn sàng.</h1>
            <p class="text-xl text-gray-500">Mọi thứ đã được thiết lập tự động và đang chạy trên hệ thống của bạn.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

            <div class="bg-white p-8 rounded-3xl card-shadow border border-gray-100">
                <div class="w-12 h-12 bg-indigo-50 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                    </svg>
                </div>
                <h3 class="text-gray-400 text-sm font-semibold uppercase mb-1">PHP Engine</h3>
                <p class="text-3xl font-bold mb-4"><?php echo PHP_VERSION; ?></p>
                <a href="?info=1" class="text-blue-600 font-medium hover:underline inline-flex items-center">Cấu hình
                    chi tiết →</a>
            </div>

            <div class="bg-white p-8 rounded-3xl card-shadow border border-gray-100">
                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center mb-6">
                    <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" alt="MySQL" class="h-6">
                </div>
                <h3 class="text-gray-400 text-sm font-semibold uppercase mb-1">Cơ sở dữ liệu</h3>
                <p class="text-3xl font-bold mb-4">MySQL / MariaDB</p>
                <div class="text-sm text-gray-500 space-y-1">
                    <p>Host: <code class="bg-gray-100 px-1 rounded">mysql_container</code></p>
                    <p>User: <code class="bg-gray-100 px-1 rounded">root</code></p>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl card-shadow border border-gray-100 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-orange-50 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-gray-400 text-sm font-semibold uppercase mb-1">Quản trị DB</h3>
                    <p class="text-3xl font-bold mb-4">phpMyAdmin</p>
                </div>
                <a href="http://localhost:8081" target="_blank"
                    class="w-full py-3 bg-gray-900 text-white rounded-xl font-medium text-center hover:bg-black transition-colors">
                    Truy cập Dashboard
                </a>
            </div>

        </div>

        <div class="bg-white/50 rounded-3xl p-8 border border-gray-200">
            <h2 class="text-2xl font-bold mb-6">Thông tin hệ thống</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Web Server</span>
                        <span class="font-medium"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Giao thức</span>
                        <span class="font-medium"><?php echo $_SERVER['SERVER_PROTOCOL']; ?></span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Địa chỉ IP</span>
                        <span class="font-mono"><?php echo $_SERVER['SERVER_ADDR'] ?? '127.0.0.1'; ?></span>
                    </div>
                    <div class="flex justify-between border-b border-gray-100 pb-2">
                        <span class="text-gray-500">Thời gian</span>
                        <span class="font-medium"><?php echo date('Y-m-d H:i:s'); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['info'])): ?>
            <div class="mt-12 bg-white rounded-3xl p-8 card-shadow border border-gray-100 overflow-hidden">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-blue-600">PHP Configuration</h2>
                    <a href="?"
                        class="h-8 w-8 flex items-center justify-center bg-red-50 text-red-500 rounded-full hover:bg-red-100 transition-colors">✕</a>
                </div>
                <div class="overflow-x-auto max-h-[500px] text-xs">
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
    </main>

    <footer class="py-12 text-center text-gray-400 text-sm">
        Thiết kế bởi Gemini &bull; Chạy trên nền tảng Docker
    </footer>

</body>

</html>