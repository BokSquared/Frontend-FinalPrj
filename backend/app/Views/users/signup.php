<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🔥 Sign Up']) ?>
</head>

<body class="bg-[var(--accent)] flex items-center justify-center min-h-screen font-sans">

    <div class="flex flex-col md:flex-row w-full max-w-6xl shadow-2xl rounded-3xl overflow-hidden">

        <div class="md:flex-1 bg-black/70 p-10 flex flex-col justify-center" style="background: linear-gradient(90deg, var(--accent), #1c1c1cff);">
            <h2 class="text-[var(--secondary)] text-3xl md:text-4xl font-bold mb-2">Create Account</h2>
            <p class="text-[var(--neutral)]/80 mb-6">Join Edo Ember Gallery today</p>

            <form class="flex flex-col gap-4">
                <input type="text" name="first_name" placeholder="First Name"
                    class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">
                <input type="text" name="middle_name" placeholder="Middle Name"
                    class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">
                <input type="text" name="last_name" placeholder="Last Name"
                    class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">
                <input type="email" name="email" placeholder="Email"
                    class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">
                <input type="password" name="password" placeholder="Password"
                    class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">

                <button type="submit"
                    class="bg-[var(--primary)] text-[var(--neutral)] font-bold py-2 rounded-lg hover:opacity-90 transition">Sign
                    Up</button>

                <div class="divider flex items-center text-[var(--secondary)] text-sm my-4">
                    <span class="flex-1 border-b border-[var(--secondary)]"></span>
                    <span class="mx-2">or access quickly with</span>
                    <span class="flex-1 border-b border-[var(--secondary)]"></span>
                </div>

                <div class="flex justify-center gap-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google"
                        class="w-10 h-10 cursor-pointer hover:scale-110 transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                        class="w-10 h-10 cursor-pointer hover:scale-110 transition">
                </div>

                <p class="text-[var(--neutral)]/70 text-center mt-6">
                    Already have an account? <a href="/login"
                        class="text-[var(--secondary)] font-semibold hover:underline">Log In</a> |
                    <a href="/" class="text-[var(--secondary)] font-semibold hover:underline">Back to Home</a>
                </p>
            </form>
        </div>

        <div class="relative md:flex-1 hidden md:block bg-cover bg-center"
            style="background-image: url('https://i.pinimg.com/736x/7d/18/05/7d1805bba729d4ea2eca7d79eb543f09.jpg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-8">
                <h2 class="text-4xl font-bold text-[var(--neutral)] mb-4">🔥 Edo Ember Gallery</h2>
                <p class="text-[var(--neutral)]/80">Bringing classic brushwork to the digital age.</p>
            </div>
        </div>

    </div>

</body>

</html>