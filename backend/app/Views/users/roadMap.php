<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🍌Edo Ember Gallery Road Map']) ?>
</head>

<body class="relative min-h-screen bg-cover bg-center text-[var(--neutral)]"
    style="background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://i.pinimg.com/1200x/c6/35/6c/c6356c42988172a23fb41ddedac978b6.jpg');">

    <div class="relative max-w-7xl mx-auto px-6 py-12 space-y-8 z-10">

        <h2 class="text-3xl md:text-4xl font-bold text-[var(--secondary)]">Road Map</h2>
        <p class="text-[var(--neutral)]/80 text-lg mb-6">Our to-do list for Edo Ember Gallery</p>

        <div class="space-y-6">

            <!-- Roadmap Item -->
            <div class="bg-[var(--accent)] shadow-lg rounded-xl p-6 flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-[var(--secondary)] mb-1">Database & Seeding</h3>
                    <p class="text-[var(--secondary)]/80 mb-2">Three databases: users, products/service, orders</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: High</p>
                </div>
                <select class="px-3 py-1 rounded-full font-semibold text-sm text-[var(--secondary)]" onchange="updateStatusColor(this)">
                    <option value="planned">Planned</option>
                    <option value="in-progress" selected>In Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>

            <div class="bg-[var(--accent)] shadow-lg rounded-xl p-6 flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-[var(--secondary)] mb-1">CRUD for users</h3>
                    <p class="text-[var(--secondary)]/80 mb-2">Creating, updating, display & soft deleting accounts</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: High</p>
                </div>
                <select class="px-3 py-1 rounded-full font-semibold text-sm text-[var(--primary)]" onchange="updateStatusColor(this)">
                    <option value="planned" selected>Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>

            <div class="bg-[var(--accent)] shadow-lg rounded-xl p-6 flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-[var(--secondary)] mb-1">CRUD for orders</h3>
                    <p class="text-[var(--secondary)]/80 mb-2">Admin can update and delete the orders</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: Medium</p>
                </div>
                <select class="px-3 py-1 rounded-full font-semibold text-sm text-[var(--secondary)]" onchange="updateStatusColor(this)">
                    <option value="planned" selected>Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>

            <div class="bg-[var(--accent)] shadow-lg rounded-xl p-6 flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-[var(--accent)] mb-1">CRUD for products</h3>
                    <p class="text-[var(--accent)]/80 mb-2">Admin can update and delete the orders</p>
                    <p class="text-sm font-medium text-[var(--accent)]/60">Priority: Medium</p>
                </div>
                <select class="px-3 py-1 rounded-full font-semibold text-sm text-[var(--secondary)]" onchange="updateStatusColor(this)">
                    <option value="planned" selected>Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="done">Done</option>
                </select>
            </div>

            <div class="bg-[var(--accent)] shadow-lg rounded-xl p-6 flex justify-between items-start">
                <div>
                    <h3 class="font-semibold text-lg text-[var(--secondary)] mb-1">Frontend websites</h3>
                    <p class="text-[var(--secondary)]/80 mb-2">Landing page, login, sign up, mood board, & road map</p>
                    <p class="text-sm font-medium text-[var(--secondary)]/60">Priority: Low</p>
                </div>
                <select class="px-3 py-1 rounded-full font-semibold text-sm text-[var(--secondary)]" onchange="updateStatusColor(this)">
                    <option value="planned">Planned</option>
                    <option value="in-progress">In Progress</option>
                    <option value="done" selected>Done</option>
                </select>
            </div>

        </div>
    </div>

    <script>
        function updateStatusColor(select) {
            switch (select.value) {
                case 'planned':
                    select.style.backgroundColor = 'var(--secondary)';
                    select.style.color = 'var(--neutral)';
                    break;
                case 'in-progress':
                    select.style.backgroundColor = 'var(--primary)';
                    select.style.color = 'var(--neutral)';
                    break;
                case 'done':
                    select.style.backgroundColor = 'var(--neutral)';
                    select.style.color = 'var(--primary)';
                    break;
            }
        }

        document.querySelectorAll('select').forEach(sel => updateStatusColor(sel));
    </script>

</body>

</html>