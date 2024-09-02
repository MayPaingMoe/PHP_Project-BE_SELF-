    
    <?php
    require_once "database_connection.php";
    $catalog = new CRUD();
    $choose = $catalog->readCatalog();
    // var_dump($choose);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meal and Dessert Selection</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Choose Your Dessert</h1>
            <form action="test.php" method="post">
                <div class="mb-4">
                    <label for="meal" class="block text-sm font-medium text-gray-700">Select a Dessert:</label>
                    <select id="meal" name="Cid" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        <?php foreach($choose as $c): ?>
                            <option value="<?php echo $c->Cid; ?>"><?php echo htmlspecialchars($c->name); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="mt-4 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition" name="submit" value="dessert">Submit</button>
            </form>
        </div>
    </body>
    </html>
