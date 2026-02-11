<?php include __DIR__ . "/../components/header.php"; ?>

<?php 
$courses = [
    "BS Computer Science",
    "BS Information Technology",
    "BS Civil Engineering",
    "BS Computer Engineering",
    "BS Electronics Engineering",
    "BS Accountancy",
    "BS Business Administration (Business Analytics)",
    "BS Business Administration (Digital Marketing)",
    "BS Business Administration (Financial Management)",
    "BS Tourism Management",
    "Bachelor of Multimedia Arts",
    "Bachelor of Arts in Psychology"
];
?>

<div class="relative flex items-center justify-center min-h-[calc(100vh-112px)] overflow-hidden px-4">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-full opacity-10 pointer-events-none">
        <div class="absolute top-0 right-0 w-80 h-80 bg-red-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-rose-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
    </div>

    <div class="relative z-10 w-full max-w-lg bg-white/70 backdrop-blur-xl border border-white/40 p-8 rounded-3xl shadow-2xl">
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Add Student</h2>
            <p class="text-slate-500 mt-2">Create a new record in <span class="font-bold">Stud<span class="text-red-600 font-bold">Syst.os</span></span></p>
        </div>
        
        <form method="POST" class="space-y-6">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Full Name</label>
                <input type="text" name="name" placeholder="Enter your name" required 
                       class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all placeholder:text-slate-400 text-slate-800">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Email Address</label>
                <input type="email" name="email" placeholder="name@student.apc.edu.ph" required 
                       class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all placeholder:text-slate-400 text-slate-800">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Academic Program</label>
                <div class="relative">
                    <select name="course" required 
                            class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all cursor-pointer appearance-none text-slate-800">
                        <option value="" disabled selected>Select a program...</option>
                        <?php foreach($courses as $course): ?>
                            <option value="<?= htmlspecialchars($course); ?>"><?= $course; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </div>
                </div>
            </div>

            <div class="pt-2">
                <button type="submit" 
                        class="group relative w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-6 rounded-2xl transition-all shadow-xl shadow-red-200 hover:-translate-y-1 active:scale-[0.98] overflow-hidden">
                    <span class="relative z-10">Save Student Record</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:animate-[shimmer_2s_infinite]"></div>
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
</style>