<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🔥 Road Map']) ?>
</head>

<body
    class="relative min-h-screen bg-cover bg-center text-[var(--neutral)] font-sans"
    style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://i.pinimg.com/1200x/eb/87/23/eb87234f0ec8bd8a719d80e228fb30a8.jpg');">

    <?= view('components/header') ?> <!-- header now inside body so it inherits fonts / styles -->

    <main class="relative max-w-7xl mx-auto px-6 py-16 z-10">
        <header class="mb-8 text-center">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-[var(--secondary)] leading-tight">Road Map</h1>
            <p class="mt-3 text-[var(--neutral)]/80 text-lg">Our to-do list for Edo Ember Gallery</p>
        </header>

        <section class="space-y-6">
            <!-- Item -->
            <article class="bg-[var(--accent)] shadow-lg rounded-2xl p-6 flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div>
                    <h3 class="font-serif text-xl text-[var(--secondary)] mb-1">Database & Seeding</h3>
                    <p class="text-[var(--secondary)]/80 mb-1">Three DBs: users, products/services, orders</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: High</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 rounded-full font-semibold text-sm" onchange="updateStatusColor(this)">
                        <option value="planned">Planned</option>
                        <option value="in-progress" selected>In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </div>
            </article>

            <!-- Item -->
            <article class="bg-[var(--accent)] shadow-lg rounded-2xl p-6 flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div>
                    <h3 class="font-serif text-xl text-[var(--secondary)] mb-1">CRUD for Users</h3>
                    <p class="text-[var(--secondary)]/80 mb-1">Create, update, soft-delete user accounts</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: High</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 rounded-full font-semibold text-sm" onchange="updateStatusColor(this)">
                        <option value="planned" selected>Planned</option>
                        <option value="in-progress">In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </div>
            </article>

            <!-- Item -->
            <article class="bg-[var(--accent)] shadow-lg rounded-2xl p-6 flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div>
                    <h3 class="font-serif text-xl text-[var(--secondary)] mb-1">CRUD for Orders</h3>
                    <p class="text-[var(--secondary)]/80 mb-1">Admin: update, cancel, and manage orders</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: Medium</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 rounded-full font-semibold text-sm" onchange="updateStatusColor(this)">
                        <option value="planned" selected>Planned</option>
                        <option value="in-progress">In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </div>
            </article>

            <!-- Item -->
            <article class="bg-[var(--accent)] shadow-lg rounded-2xl p-6 flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div>
                    <h3 class="font-serif text-xl text-[var(--secondary)] mb-1">CRUD for Products</h3>
                    <p class="text-[var(--secondary)]/80 mb-1">Admin product management (create / update / delete)</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: Medium</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 rounded-full font-semibold text-sm" onchange="updateStatusColor(this)">
                        <option value="planned" selected>Planned</option>
                        <option value="in-progress">In Progress</option>
                        <option value="done">Done</option>
                    </select>
                </div>
            </article>

            <article class="bg-[var(--accent)] shadow-lg rounded-2xl p-6 flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div>
                    <h3 class="font-serif text-xl text-[var(--secondary)] mb-1">Frontend Websites</h3>
                    <p class="text-[var(--secondary)]/80 mb-1">Landing, login, sign up, mood board, road map</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: Low</p>
                </div>
                <div class="flex items-center gap-4">
                    <select class="px-4 py-2 rounded-full font-semibold text-sm" onchange="updateStatusColor(this)">
                        <option value="planned">Planned</option>
                        <option value="in-progress">In Progress</option>
                        <option value="done" selected>Done</option>
                    </select>
                </div>
            </article>
        </section>
    </main>

    <?= view('components/footer') ?>

    <script>
        function updateStatusColor(select) {
            switch (select.value) {
                case 'planned':
                    select.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--secondary') || '#a67d43';
                    select.style.color = getComputedStyle(document.documentElement).getPropertyValue('--neutral') || '#e5e2dc';
                    break;
                case 'in-progress':
                    select.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--primary') || '#ad0013';
                    select.style.color = getComputedStyle(document.documentElement).getPropertyValue('--neutral') || '#e5e2dc';
                    break;
                case 'done':
                    select.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('') || '#ff7141ff';
                    select.style.color = getComputedStyle(document.documentElement).getPropertyValue('--neutral') || '#e5e2dc';
                    break;
            }
        }

        document.querySelectorAll('select').forEach(sel => updateStatusColor(sel));
    </script>
</body>

</html>