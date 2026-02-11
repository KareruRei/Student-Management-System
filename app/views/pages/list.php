<?php include __DIR__ . "/../components/header.php"; ?>

<div class="relative min-h-[calc(100vh-112px)] px-4 py-12 overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-red-400/10 rounded-full filter blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-rose-400/10 rounded-full filter blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
            <div>
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Student List</h2>
                <p class="text-slate-500 mt-2 font-medium">Manage enrolled students and academic programs.</p>
            </div>
            <a href="index.php?action=add" 
               class="inline-flex items-center justify-center px-6 py-3 bg-red-600 text-white font-bold rounded-2xl hover:bg-red-700 transition-all shadow-lg shadow-red-200 hover:-translate-y-1 active:scale-95">
                + Add New Student
            </a>
        </div>

        <div class="bg-white/70 backdrop-blur-xl border border-white/40 rounded-3xl shadow-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/[0.02] border-b border-slate-200/50">
                            <th class="px-8 py-5 text-xs font-bold uppercase tracking-widest text-slate-500">Name</th>
                            <th class="px-8 py-5 text-xs font-bold uppercase tracking-widest text-slate-500">Email Address</th>
                            <th class="px-8 py-5 text-xs font-bold uppercase tracking-widest text-slate-500">Program</th>
                            <th class="px-8 py-5 text-xs font-bold uppercase tracking-widest text-slate-500 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200/50">
                        <?php if (empty($students)): ?>
                            <tr>
                                <td colspan="4" class="px-8 py-20 text-center">
                                    <p class="text-slate-400 font-medium tracking-wide">No student records found in the database.</p>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($students as $s): ?>
                            <tr class="hover:bg-white/50 transition-colors group">
                                <td class="px-8 py-5">
                                    <span class="font-bold text-slate-800 tracking-tight"><?= htmlspecialchars($s['name']) ?></span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="text-slate-600 text-sm font-medium"><?= htmlspecialchars($s['email']) ?></span>
                                </td>
                                <td class="px-8 py-5">
                                    <span class="inline-flex items-center px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider bg-red-50 text-red-600 border border-red-100">
                                        <?= htmlspecialchars($s['course']) ?>
                                    </span>
                                </td>
                                <td class="px-8 py-5 text-right">
                                    <div class="flex justify-end gap-6">
                                        <a href="index.php?action=edit&id=<?= $s['id'] ?>" 
                                           class="text-xs font-bold uppercase tracking-widest text-slate-400 hover:text-red-600 transition-colors">Edit</a>
                                        <a href="index.php?action=delete&id=<?= $s['id'] ?>" 
                                           onclick="return confirm('Are you sure you want to delete this record?')"
                                           class="text-xs font-bold uppercase tracking-widest text-slate-400 hover:text-red-600 transition-colors">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>