<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Tailwind CSS CDN link here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>S.M.N</title>
    <style>
        .custom-bg-image {
            background-image: url('https://img.freepik.com/photos-gratuite/concept-fond-studio-fond-salle-studio-violet-degrade-clair-vide-abstrait-pour-produit-fond-studio-uni_1258-63886.jpg?w=996&t=st=1697874564~exp=1697875164~hmac=40578bd3151a1b2f6ee95929829bd77de7c20a4b10c4a400e09c7feb2db488ac');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <div class="min-h-screen custom-bg-image flex items-center justify-center text-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-semibold text-white mb-4">{{ __('Students') }}</h3>

            <div class="py-6" style="background-image: url('https://img.freepik.com/photos-gratuite/concept-fond-studio-fond-salle-studio-violet-degrade-clair-vide-abstrait-pour-produit-fond-studio-uni_1258-63886.jpg?w=996&t=st=1697874564~exp=1697875164~hmac=40578bd3151a1b2f6ee95929829bd77de7c20a4b10c4a400e09c7feb2db488ac'); background-size: cover;">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <h3 class="text-2xl font-semibold text-white mb-4">{{ __('Students') }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center items-center">
                        <div class="bg-transparent rounded-lg shadow-lg py-6">
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->first_name }} {{ $student->last_name }}"/>
                                <h5 class="mb-1 text-xl font-medium text-white">{{ $student->first_name }} {{ $student->last_name }}</h5>
                                <span class="text-sm text-white">{{ $student->date_of_birth }}</span>
                                <span class="text-sm text-white">{{ $student->email }}</span>
                                <div class="flex mt-4 space-x-3 justify-center">
                                    <a href="mailto:{{ $student->email }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-300 rounded-lg hover:bg-black-100 focus:ring-4 focus:outline-none focus:ring-gray-200" style="color: white;">Message</a>
                                    @if(auth()->check() && auth()->user()->email === 'admin@mail.com')
                                        <a href="{{ route('students.edit', ['id' => $student->id]) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-black rounded-lg hover:bg-black-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Edit</a>
                                    @endif
                                </div>                                            
                            </div>
                        </div>
                        <div class="text-white">
                            <p style="font-weight: 900; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                Hello, I'm <span class="text-bold">{{ $student->first_name }} {{ $student->last_name }}</span> and my date of birth is <span class="text-italic">{{ $student->date_of_birth }}</span>.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
</body>
</html>
