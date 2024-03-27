@foreach ($category as $categoryModel)
    <p>{{ $categoryModel->category_name }}</p>
    <!-- Display other category attributes as needed -->
@endforeach