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
        <div class="flex items-center justify-center flex-col">
            <div class="mb-3">
                <form action="{{ route('products.show') }}" method="get"
                    class="flex items-center justify-center gap-1">
                    <input type="search" name="search" id="search" placeholder="search product"
                        class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#fce7e4] sm:text-sm sm:leading-6">
                    <button type="submit" class="border border-sky-500 p-1 rounded-md hover:bg-sky-500 transition-all">
                        <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/search--v1.png" alt="search--v1"/>
                    </button>
                </form>
            </div>
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
                            @if (!$products->count())
                                <tr class="border-b border-blue-gray-200">
                                    <td class="py-3 px-4 text-center" colspan="6">
                                        No Products Found
                                        <a class="underline" href="{{ route('products.create') }}">Add Now</a>
                                    </td>
                                </tr>
                            @endif
                            <tr class="border-b border-blue-gray-200">
                                <td class="py-3 px-4">{{ $product->id }}</td>
                                <td class="py-3 px-4">{{ $product->name }}</td>
                                <td class="py-3 px-4">{{ $product->quantity }}</td>
                                <td class="py-3 px-4">{{ $product->price }}</td>
                                <td class="py-3 px-4">{{ $product->description }}</td>
                                <td class="py-3 px-4">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="font-medium text-blue-600 hover:text-blue-800">Edit
                                    </a>

                                    <form action="{{ route('products.delete', $product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            class="font-medium text-red-600 hover:text-red-800">Delete</button>
                                    </form>
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
