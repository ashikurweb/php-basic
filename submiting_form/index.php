<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submiting Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="max-w-md w-full p-8 bg-gray-800 rounded-md shadow-lg">
            <h2 class="text-2xl text-center font-semibold text-white mb-6">Say Something!</h2>
            <form action="submiting_form/index.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Text</label>
                    <input type="text" id="name" name="name" placeholder="some text" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    Send Message
                </button>

                <div class="mb-4 mt-4 text-2xl text-green-500">
                    <?php 
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $name = $_POST['name'] ?? null;
                        if (empty(trim($name))) {
                            header('Location: index.php');
                            exit;
                        }
                        echo "Hi there, " . $name . '!';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>

</body>

</html>