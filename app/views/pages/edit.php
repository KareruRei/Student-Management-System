<?php include __DIR__ . "/../components/header.php"; ?>

<?php 
$courses = [
    "BS Computer Science", "BS Information Technology", "BS Civil Engineering",
    "BS Computer Engineering", "BS Electronics Engineering", "BS Accountancy",
    "BS Business Administration (Business Analytics)", "BS Business Administration (Digital Marketing)",
    "BS Business Administration (Financial Management)", "BS Tourism Management",
    "Bachelor of Multimedia Arts", "Bachelor of Arts in Psychology"
];
?>

<div class="relative flex items-center justify-center min-h-[calc(100vh-112px)] overflow-hidden px-4">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-full opacity-10 pointer-events-none">
        <div class="absolute top-0 right-0 w-80 h-80 bg-red-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-rose-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
    </div>

    <div class="relative z-10 w-full max-w-lg bg-white/70 backdrop-blur-xl border border-white/40 p-8 rounded-3xl shadow-2xl">
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Edit Profile</h2>
            <p class="text-slate-500 mt-2">Updating record for <span class="text-red-600 font-semibold"><?= htmlspecialchars($student['name']) ?></span></p>
        </div>
        
        <form method="POST" class="space-y-6">
            <input type="hidden" name="id" value="<?= $student['id'] ?>">

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Full Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required 
                       class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all text-slate-800">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Email Address</label>
                <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" required 
                       class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all text-slate-800">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Academic Program</label>
                <select name="course" required 
                        class="w-full px-4 py-3 bg-white/50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-red-500/10 focus:border-red-500 outline-none transition-all cursor-pointer text-slate-800 appearance-none">
                    <?php foreach($courses as $course): ?>
                        <option value="<?= htmlspecialchars($course) ?>" <?= ($student['course'] == $course) ? 'selected' : '' ?>>
                            <?= $course ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="pt-4 flex flex-col gap-3">
                <button type="submit" 
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-6 rounded-2xl transition-all shadow-xl shadow-red-200 hover:-translate-y-1 active:scale-[0.98]">
                    Update Student Record
                </button>
                
                <a href="index.php?action=list" 
                   class="w-full text-center py-3 text-xs font-bold uppercase tracking-widest text-slate-400 hover:text-slate-600 transition-colors">
                    Cancel and Return
                </a>
            </div>
        </form>
    </div>
</div>