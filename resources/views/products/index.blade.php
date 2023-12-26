<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Products</title>
</head>

<body>
    <section class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm mb-5">
            <h2 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight text-gray-900">
                Show All <a class="underline" href="{{ route('products.create') }}">Product</a>
            </h2>
        </div>
        <div class="flex items-center justify-center">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg">
                    <thead class="border-b border-gray-400">
                        <tr class="bg-blue-gray-100 text-gray-700">
                            <th class="py-3 px-4 text-left">Id</th>
                            <th class="py-3 px-4 text-left">Product Name</th>
                            <th class="py-3 px-4 text-left">Quantity</th>
                            <th class="py-3 px-4 text-left">Price</th>
                            <th class="py-3 px-4 text-left">Description</th>
                            <th class="py-3 px-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue-gray-900">
                        @foreach ($products as $product)
                            <tr class="border-b border-blue-gray-200">
                                <td class="py-3 px-4">{{ $product->id }}</td>
                                <td class="py-3 px-4">{{ $product->name }}</td>
                                <td class="py-3 px-4">{{ $product->quantity }}</td>
                                <td class="py-3 px-4">{{ $product->price }}</td>
                                <td class="py-3 px-4">{{ $product->description }}</td>
                                <td class="py-3 px-4">
                                    <a href="#" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                                    <a href="#" class="font-medium text-red-600 hover:text-red-800">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>

</html>
