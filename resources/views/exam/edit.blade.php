<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit Exam</title>
</head>
<body class="bg-gray-100">

<div class="container mx-auto py-8">
    <h2 class="text-2xl font-semibold mb-4">Edit Exam</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-600 border-l-4 border-red-600 p-4 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('exam.update', ['id' => $exam->id]) }}" enctype="multipart/form-data" class="bg-white p-4 rounded-lg shadow-md">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
            <input type="text" name="title" value="{{ old('title', $exam->title) }}" class="form-input" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
            <input type="text" name="description" value="{{ old('description', $exam->description) }}" class="form-input" required>
        </div>

        <div class="mb-4">
            <label for="exam_date" class="block text-sm font-medium text-gray-600">Exam Date</label>
            <input type="date" name="exam_date" value="{{ old('exam_date', $exam->exam_date) }}" class="form-input" required>
        </div>

        <div class="mb-4">
            <label for="date_of_birth" class="block text-sm font-medium text-gray-600" style="color: purple;">Exam Time :</label>
            <input type="time" id="date_of_birth" name="exam_time">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-200">Update Exam</button>
    </form>
</div>

</body>
</html>
</x-app-layout>
