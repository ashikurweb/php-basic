<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind css link -->
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Form</title>
</head>

<body class="bg-gray-200">
    <form action="POST_GET/signing.php" method="post"  class="max-w-md mx-auto p-4 bg-white mt-10  rounded shadow-md">
        <h2 class="text-lg font-bold mb-4">Login</h2>
        <div class="mb-4">
            <label for = "username" class="block text-gray-700 text-sm font-bold mb-2" for="email">Username</label>
            <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username"  type="text" placeholder="Enter your email">
        </div>
        <div class="mb-4">
            <label for = "password" class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
            <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Enter your password">
        </div>
        <div class="mb-4">
            <button class="bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Sign in</button>
        </div>
    </form>
</body>

</html>