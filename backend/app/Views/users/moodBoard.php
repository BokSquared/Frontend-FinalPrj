<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🔥 Mood Board']) ?>
</head>

<?= view('components/header'); ?>

<body class="bg-[url('https://i.pinimg.com/1200x/b0/f2/ac/b0f2acb61b9a6546287fe63b1405e9d6.jpg')] bg-cover bg-center text-[var(--neutral)] font-sans">

    <section class="text-center py-16">
        <h2 class="text-4xl md:text-5xl font-bold">🔥 Edo Ember Gallery - Mood Board</h2>
        <p class="text-[var(--neutral)]/80 mt-4">A canvas of inspiration for Edo Ember</p>
    </section>

    <!-- FOUR PANELS OF IMAGES -->
    <section class="max-w-6xl mx-auto grid sm:grid-cols-2 md:grid-cols-4 gap-6 px-6 py-12">
        <div class="h-48 bg-cover bg-center rounded" style="background-image: url('https://i.pinimg.com/1200x/ce/0d/ed/ce0ded0bc720853513707d9eb17dee16.jpg');"></div>
        <div class="h-48 bg-cover bg-center rounded" style="background-image: url('https://i.pinimg.com/736x/7b/88/bf/7b88bfe6932a092a04eb61c30189a65b.jpg');"></div>
        <div class="h-48 bg-cover bg-center rounded" style="background-image: url('https://i.pinimg.com/736x/74/a4/5f/74a45f255855725e6f0e6597da3ae5fb.jpg');"></div>
        <div class="h-48 bg-cover bg-center rounded" style="background-image: url('https://i.pinimg.com/736x/09/ab/10/09ab1008eab300dee6a32250e5a53e72.jpg');"></div>
    </section>


    <!-- COLOR PALETTE BLOCKS -->
    <section class="max-w-6xl mx-auto flex justify-between py-8 px-6 gap-4">
        <div class="relative flex-1 h-16 rounded shadow-lg bg-[var(--primary)]">
            <span class="absolute bottom-1 right-2 text-white text-sm font-mono">#AD0013</span>
        </div>
        <div class="relative flex-1 h-16 rounded shadow-lg bg-[var(--secondary)]">
            <span class="absolute bottom-1 right-2 text-white text-sm font-mono">#A67D43</span>
        </div>
        <div class="relative flex-1 h-16 rounded shadow-lg bg-[var(--accent)]">
            <span class="absolute bottom-1 right-2 text-white text-sm font-mono">#121312</span>
        </div>
        <div class="relative flex-1 h-16 rounded shadow-lg bg-[var(--neutral)]">
            <span class="absolute bottom-1 right-2 text-black text-sm font-mono">#E5E2DC</span>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="h-64 rounded-xl overflow-hidden">
            <img src="https://i.pinimg.com/1200x/b7/15/4c/b7154c7880bc9e19a4e0ccd32490f8fd.jpg" class="w-full h-full object-cover" alt="Banner Art">
        </div>
    </section>


    <!-- TYPOGRAPHY - 2 COLUMNS -->
    <section class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 px-6 py-12">
        <div class="bg-[#1b1b1b] h-32 rounded-xl flex flex-col justify-center items-center p-4">
            <h3 class="text-[var(--neutral)] text-3xl font-serif" style="font-family: 'Cormorant Garamond', serif;">
                Cormorant Garamond
            </h3>
            <p class="text-[var(--secondary)] mt-2 text-sm">
                Regal serif for headers
            </p>
        </div>
        <div class="bg-[#1b1b1b] h-32 rounded-xl flex flex-col justify-center items-center p-4">
            <h3 class="text-[var(--neutral)] text-3xl font-sans" style="font-family: 'Poppins', sans-serif;">
                Poppins
            </h3>
            <p class="text-[var(--secondary)] mt-2 text-sm">
                Crisp sans for body text
            </p>
        </div>
    </section>


    <!-- FOUR BUTTONS -->
    <section class="max-w-6xl mx-auto flex flex-wrap justify-center gap-6 py-8 px-6">
        <button class="px-6 py-2 border rounded">Button 1</button>
        <button class="px-6 py-2 border rounded">Button 2</button>
        <button class="px-6 py-2 border rounded">Button 3</button>
        <button class="px-6 py-2 border rounded">Button 4</button>
    </section>

    <!-- CARD SAMPLES -->
    <section class="max-w-6xl mx-auto grid sm:grid-cols-2 md:grid-cols-3 gap-6 px-6 py-12">
        <div class="bg-[#1b1b1b] h-48 rounded-xl"></div>
        <div class="bg-[#1b1b1b] h-48 rounded-xl"></div>
        <div class="bg-[#1b1b1b] h-48 rounded-xl"></div>
    </section>

    <!-- LOGO - 2 COLUMNS -->
    <section class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 px-6 py-12 items-center">
        <!-- Circle Logo -->
        <div class="flex flex-col justify-center items-center bg-[#1b1b1b] rounded-xl p-6">
            <img src="https://i.pinimg.com/originals/8c/42/43/8c4243960da81dba835adc6bbbcfda27.gif"
                alt="Circle Logo"
                class="w-32 h-32 object-cover rounded-full mb-4">
            <p class="text-[var(--neutral)] text-sm">Circle Logo</p>
        </div>

        <!-- Square Logo -->
        <div class="flex flex-col justify-center items-center bg-[#1b1b1b] rounded-xl p-6">
            <img src="https://i.pinimg.com/originals/8c/42/43/8c4243960da81dba835adc6bbbcfda27.gif"
                alt="Square Logo"
                class="w-32 h-32 object-contain mb-4">
            <p class="text-[var(--neutral)] text-sm">Square Logo</p>
        </div>
    </section>

    <?= view('components/footer'); ?>

</body>

</html>