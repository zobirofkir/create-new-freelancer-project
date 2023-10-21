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
        <div class="py-6 min-h-screen custom-bg-image flex items-center justify-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="text-2xl font-semibold text-white mb-4 text-center" style="color: black;">{{ __('Search Results for') }}: {{ $query }}</h3>
                <div class="py-6" style="background-image: url('https://img.freepik.com/photos-gratuite/concept-fond-studio-fond-salle-studio-violet-degrade-clair-vide-abstrait-pour-produit-fond-studio-uni_1258-63886.jpg?w=996&t=st=1697874564~exp=1697875164~hmac=40578bd3151a1b2f6ee95929829bd77de7c20a4b10c4a400e09c7feb2db488ac'); background-size: cover;">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <h3 class="text-2xl font-semibold text-white mb-4 text-center">{{ __('Search') }}</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($students as $student)
                                <div class="bg-transparent rounded-lg shadow-lg py-6">
                                    <div class="flex flex-col items-center pb-10">
                                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->first_name }} {{ $student->last_name }}"/>
                                        <h5 class="mb-1 text-xl font-medium text-white text-center">{{ $student->first_name }} {{ $student->last_name }}</h5>
                                        <span class="text-sm text-white text-center">{{ $student->email }}</span>
                                        <div class="flex mt-4 space-x-3 justify-center">
                                            <a href="mailto:{{ $student->email }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-transparent border border-gray-300 rounded-lg hover:bg-black-100 focus:ring-4 focus:outline-none focus:ring-gray-200" style="color: white;">Message</a>
                                            @if(auth()->check() && auth()->user()->email === 'admin.firoz@mail.com')
                                                <div class="flex items-center space-x-4">
                                                    <a href="{{ route('students.edit', ['id' => $student->id]) }}" class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 focus:outline-none">
                                                        Edit
                                                    </a>

                                                    <br>
                                                    
                                                    <a href="{{ route('students.destroy', $student) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:ring-red-300 focus:outline-none cursor-pointer">
                                                        Delete Student
                                                    </a>
                                                </div>

                                                <form id="delete-form" action="{{ route('students.destroy', $student) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            @endif
                                            <a href="{{ route('show.student', ['id' => $student->id]) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-black rounded-lg hover:bg-black-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Show</a>
                                        </div>                                            

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
