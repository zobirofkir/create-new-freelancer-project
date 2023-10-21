<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .custom-bg-image {
            background-image: url('https://img.freepik.com/photos-gratuite/concept-fond-studio-fond-salle-studio-violet-degrade-clair-vide-abstrait-pour-produit-fond-studio-uni_1258-63886.jpg?w=996&t=st=1697874564~exp=1697875164~hmac=40578bd3151a1b2f6ee95929829bd77de7c20a4b10c4a400e09c7feb2db488ac');
            background-size: cover;
            background-position: center;
        }

    </style>
</head>
<body class="">
    <div class="min-h-screen flex items-center justify-center custom-bg-image">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl text-center mb-4" style="color: purple;">User Registration</h2>
            <form action="{{ route('store.student') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="first_name" class="block text-gray-600" style="color: purple;">First Name:</label>
                    <input type="text" id="first_name" name="first_name" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="last_name" class="block text-gray-600" style="color: purple;">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="date_of_birth" class="block text-gray-600" style="color: purple;">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600" style="color: purple;">Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror">
                </div>

                @if ($errors->has('email'))
                    <p class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
                @endif

                <!-- Add an input field for image upload -->
                <div class="mb-4">
                <label for="user_image" class="block text-gray-600" style="color: purple;">User Image:</label>
                <input type="file" id="user_image" name="user_image" class="w-full px-3 py-2 border rounded">
            </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" style="background-color: purple; color: white;">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

</x-app-layout>
