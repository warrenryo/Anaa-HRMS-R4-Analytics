<!-- resources/views/reviews/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .yellow-stars {
            color: #FFD700; 
        }
    </style>
</head>
<body style="background-image: url('{{ asset('assets/images/feedbackbackground.jpg') }}'); background-size: cover;" class="min-h-screen flex items-center justify-center">
    
    <div class="absolute top-0 left-0 mt-4 ml-4">
        <img src="{{ asset('assets/images/Anaa bagong logo.png')}}" alt="Logo" class="w-40">
    </div>

    <div class="bg-gray-200 rounded-lg shadow-md p-8 max-w-md w-full">
        <h1 class="text-3xl font-bold mb-8 text-center">Anaa Restaurant Feedback</h1>

        <form action="{{ route('ratings.store') }}" method="post">
            @csrf

            <div class="mb-6">
                <label for="rating" class="block text-sm font-medium text-gray-700">Rating:</label>
                <select name="rating" id="rating" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" style="font-size: 16px;" required>
                    <option value="">Please select</option>
                    <option value="Happy" class="yellow-stars">&#9733;&#9733;&#9733;&#9733;&#9733; &#x1F604; Happy</option> 
                    
                    <option value="Love" class="yellow-stars">&#9733;&#9733;&#9733;&#9733; &#x1F60D; Love</option> 
                    <option value="Serious" class="yellow-stars">&#9733;&#9733;&#9733; &#x1F610; Serious</option>
                    <option value="Sad" class="yellow-stars">&#9733;&#9733; &#x1F622; Sad</option>
                    <option value="Pissed" class="yellow-stars">&#9733; &#x1F620; Pissed</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="comment" class="block text-sm font-medium text-gray-700">Feedback:</label>
                <textarea name="comment" id="comment" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your Feedback" required></textarea>
            </div>

            <div class="mb-1">
                <label for="comment" class="block text-sm font-medium text-gray-700">Name:</label>
                <textarea name="name" id="comment" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter your Name" required></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100">Submit</button>
        </form>
    </div>
    @include('sweetalert::alert')
   
</body>
</html>
<!-- resources/views/reviews/index.blade.php -->