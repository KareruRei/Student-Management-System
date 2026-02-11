<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($_GET['action']) ? ucfirst($_GET['action']) . ' | ' : '' ?>StudSyst.os</title>
    
    <link rel="icon" href="icon/icon.svg?v=1" type="image/svg+xml">
    <link rel="alternate icon" href="icon/icon.png?v=1" type="image/png">
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-slate-50 text-slate-900">   
    <?php 
        // Logic to handle active states accurately
        $current_action = $_GET['action'] ?? 'home'; 
    ?>

    <header class="fixed top-2 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">
        <nav class="bg-white/70 backdrop-blur-md border border-white/20 shadow-xl rounded-2xl px-6 h-16">
            <div class="relative flex justify-between h-16 items-center">
                
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-2.5 h-2.5 bg-red-600 rounded-full animate-pulse shadow-[0_0_8px_rgba(220,38,38,0.5)]"></div>
                    <span class="text-xl font-bold text-slate-800 tracking-tight">
                        Stud<span class="text-red-600">Syst.os</span>
                    </span>
                </div>

                <div class="absolute left-1/2 -translate-x-1/2 flex space-x-1 bg-slate-900/5 p-1 rounded-xl">
                    <a href="index.php" 
                       class="px-4 py-1.5 text-xs font-bold rounded-lg transition-all tracking-wider uppercase
                       <?= ($current_action === 'home') ? 'bg-white text-red-600 shadow-sm' : 'text-slate-500 hover:text-red-600' ?>">
                        Home
                    </a>
                    <a href="index.php?action=add" 
                       class="px-4 py-1.5 text-xs font-bold rounded-lg transition-all tracking-wider uppercase
                       <?= ($current_action === 'add') ? 'bg-white text-red-600 shadow-sm' : 'text-slate-500 hover:text-red-600' ?>">
                        Add
                    </a>
                    <a href="index.php?action=list" 
                       class="px-4 py-1.5 text-xs font-bold rounded-lg transition-all tracking-wider uppercase
                       <?= ($current_action === 'list') ? 'bg-white text-red-600 shadow-sm' : 'text-slate-500 hover:text-red-600' ?>">
                        List
                    </a>
                </div>

                <div class="flex items-center">
                    <a href="https://github.com/KareruRei/Student-Management-System" target="_blank" 
                       class="group p-2 transition-all" title="View on GitHub">
                        <svg class="w-6 h-6 text-slate-400 group-hover:text-red-600 transition-colors duration-300" 
                             viewBox="0 0 24 24" 
                             fill="currentColor" 
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.79 8.205 11.385.6.11.82-.26.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                    </a>
                </div>

            </div>
        </nav>
    </header>

    <div class="h-20"></div>

    <main class="flex-grow">