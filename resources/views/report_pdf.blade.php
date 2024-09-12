<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>


    <div class="container mx-auto p-4">
        <div class="flex flex-wrap gap-6 justify-center">
            @foreach ($products as $product)
                <a href="{{ route('show', $product->id) }}"
                    class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->name }}</h5>

                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->price }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->description }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->amount }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $product->category }}</p>
                </a>
            @endforeach
        </div>
    </div>

</body>
</html>
