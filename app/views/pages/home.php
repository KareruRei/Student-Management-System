<?php include __DIR__ . "/../components/header.php"; ?>

<div class="relative flex items-center justify-center min-h-[calc(100vh-160px)] overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-full opacity-10 pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-red-400 rounded-full mix-blend-multiply filter blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-rose-400 rounded-full mix-blend-multiply filter blur-3xl"></div>
    </div>

    <div class="relative z-10 text-center px-4 max-w-3xl">
        <span class="inline-block px-4 py-1.5 mb-6 text-sm font-semibold tracking-wide text-red-600 uppercase bg-red-50 rounded-full border border-red-100">
            MVC Framework
        </span>

        <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 mb-6 tracking-tight">
            Manage students with <span class="text-red-600">precision.</span>
        </h1>

        <p class="text-lg md:text-xl text-slate-600 mb-10 leading-relaxed">
            A mini student management system that is built using the MVC framework. 
            This is also made using PHP, MySQL and Tailwind CSS. :p
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="index.php?action=add" 
               class="w-full sm:w-auto px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-red-200 hover:-translate-y-1">
                New Student
            </a>

            <a href="index.php?action=list" 
               class="w-full sm:w-auto px-8 py-4 bg-white border border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-50 transition-all shadow-sm">
                Students List
            </a>
            
            <a href="https://github.com/KareruRei/Student-Management-System" 
               target="_blank" 
               class="text-slate-400 hover:text-red-600 transition-colors duration-300 p-2"
               aria-label="GitHub Repository">
                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.43.372.823 1.102.823 2.222 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
            </a>
        </div>
    </div>
</div>
