<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('components/head', ['title' => '🔥 Login']) ?>
</head>

<body class="bg-[var(--accent)] flex items-center justify-center min-h-screen font-sans">

    <div class="flex flex-col md:flex-row w-full max-w-6xl shadow-2xl rounded-3xl overflow-hidden">

        <div class="relative md:flex-1 hidden md:block bg-cover bg-center"
            style="background-image: url('https://i.pinimg.com/1200x/12/7c/1a/127c1ae027fe838dd660ead4f8b77b6b.jpg');">
            <div class="absolute inset-0 bg-black/50"></div>
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-8">
                <h2 class="text-4xl font-bold text-[var(--neutral)] mb-4">Edo Ember Gallery</h2>
                <p class="text-[var(--neutral)]/80">Bringing classic brushwork to the digital age.</p>
            </div>
        </div>

        <div class="md:flex-1 p-10 flex flex-col justify-center"
            style="background: linear-gradient(90deg, #1c1c1cff, var(--accent));">
            <h2 class="text-[var(--secondary)] text-3xl md:text-4xl font-bold mb-2">Welcome Back!</h2>
            <p class="text-[var(--neutral)]/80 mb-6">Log in to your account</p>

            <form class="flex flex-col gap-4" action="/login" method="post">
                <input type="text" name="email" placeholder="Email" class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">
                <input type="password" name="password" placeholder="Password" class="px-4 py-2 rounded-lg border border-[var(--secondary)] bg-[#1b1b1b] text-[var(--neutral)] focus:outline-none">

                <div class="text-right mb-4">
                    <a href="#" class="text-[var(--secondary)] hover:underline text-sm">Forgot password?</a>
                </div>

                <button type="submit" class="border-2 border-[var(--primary)] text-[var(--primary)] font-bold py-2 rounded-lg transition hover:bg-[var(--primary)] hover:text-[var(--neutral)] hover:shadow-[0_0_15px_var(--primary)]">
                    Log In
                </button>

                <div class="divider flex items-center text-[var(--secondary)] text-sm my-4">
                    <span class="flex-1 border-b border-[var(--secondary)]"></span>
                    <span class="mx-2">or access quickly with</span>
                    <span class="flex-1 border-b border-[var(--secondary)]"></span>
                </div>

                <div class="flex justify-center gap-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google" class="w-10 h-10 cursor-pointer hover:scale-110 transition">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="w-10 h-10 cursor-pointer hover:scale-110 transition">
                </div>

                <p class="text-[var(--neutral)]/70 text-center mt-6">
                    Don’t have an account? <a href="/signup" class="text-[var(--secondary)] font-semibold hover:underline">Sign Up</a><br>
                    <a href="/" class="text-[var(--secondary)] font-semibold hover:underline">Back to Home</a>
                </p>
            </form>
        </div>

    </div>
</body>

</html>