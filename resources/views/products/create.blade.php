<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Product</title>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-4xl font-bold leading-9 tracking-tight text-gray-900">
                Create New <a class="underline" href="{{ route('products.index') }}">Product</a>
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm border bg-white px-6 pb-5 rounded-lg">
            <form class="space-y-6" autocomplete="off" action="{{ route('products.store') }}" method="POST">
                @csrf
                @method('POST')
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                        Product Name
                    </label>
                    <div class="mt-1">
                        <input id="name" name="name" type="text" required placeholder="Product Name"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#fce7e4] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                    </div>
                    <div class="mt-1">
                        <input id="quantity" name="quantity" type="number" required placeholder="Quantity of Product"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#fce7e4] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                    </div>
                    <div class="mt-1">
                        <input id="price" name="price" type="number" step="any" required
                            placeholder="Price of the product"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#fce7e4] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="description"
                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                    </div>
                    <div class="mt-1">
                        <textarea id="description" name="description" required placeholder="About the product"
                            class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#fce7e4] sm:text-sm sm:leading-6 resize-none"></textarea>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-[#e0897b] px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:[#fce7e4] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#fce7e4]">
                        Create
                    </button>
                </div>
            </form>

            @if ($errors->any)
                <div class="mt-5">
                    <ul class="space-y-2 text-md text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

</body>

</html>
