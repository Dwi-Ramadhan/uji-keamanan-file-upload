<?php

$whitelist_type = array('image/jpg', 'image/jpeg', 'image/png');

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_path = $target_dir . basename($_FILES['imageFile']['name']);
    $uploadOK = false;
    $error_message = 'Terjadi Error';

    if (in_array($_FILES['imageFile']['type'], $whitelist_type)) {
        if (move_uploaded_file($_FILES['imageFile']['tmp_name'], $target_path)) {
            $uploadOK = true;
        } else {
            $error_message = 'Upload gagal!';
        }
    } else {
        $error_message = "File yang di-upload harus berupa gambar (jpg, jpeg, png)!";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar - Tidak Aman</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex flex-col items-center justify-center min-h-screen transition-colors duration-300">

    <?php if (isset($uploadOK) && !$uploadOK): ?>
        <div id="error-message" class="p-4 border-l border-red-500 bg-red-100 rounded-lg" role="alert">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <div class="mt-1 text-sm text-red-700">
                        <?= '<p>' . $error_message . '</p>' ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="bg-white dark:bg-gray-800 p-6 sm:p-8 rounded-2xl shadow-lg w-full max-w-lg m-4">

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 dark:text-white text-center mb-2">Upload Gambar</h1>
        <p class="text-gray-500 dark:text-gray-400 text-center mb-6 sm:mb-8">Gambar yang telah di-upload akan ditambilkan dibawah.</p>

        <div class="w-full aspect-video bg-gray-50 dark:bg-gray-700 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-xl flex items-center justify-center text-center mb-6 overflow-hidden">

            <?php if (!empty($uploadOK)): ?>
                <img src="<?= $target_path ?>" alt="Gambar Tidak Bisa Ditampilkan" class="w-full h-full object-cover rounded-xl text-white" />
            <?php else: ?>
                <div class="text-gray-500 dark:text-gray-400">
                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="font-semibold">Preview gambar akan ditampilkan disini</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500">Pilih sebuah file dan klik "Upload" untuk melihatnya.</p>
                </div>
            <?php endif; ?>

        </div>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">

            <div>
                <label for="file-input" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pilih file</label>
                <input type="file" id="file-input" name="imageFile" accept=".png, .jpeg, .jpg" required class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">Hanya menerima file PNG, JPG, JPEG.</p>
            </div>

            <button type="submit" name="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg font-semibold text-lg hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-800 transition duration-300 ease-in-out transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                Upload
            </button>
        </form>

    </div>

</body>

</html>