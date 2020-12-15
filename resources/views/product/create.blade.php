<x-master-layout>
<div class="mx-auto container flex items-center" id="nav">
        <div class="w-full pt-2 p-4">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <form method="post" action="{{route('produt.store')}}">
                        @csrf
                        <div class="mb-8">
                            <label for="nomproduct" class="block text-gray-700 text-sm font-bold mb-2">

                                Name Product
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="nomproduct" class="block pr-10 shadow appearance-none border-2 border-blue-500 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-100 transition duration-500 ease-in-out" placeholder="Name product" />
                            </div>
                        </div>
                        <div class="mb-8">
                            <label for="reference" class="block text-gray-700 text-sm font-bold mb-2">

                                Reference
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="reference" class="block pr-10 shadow appearance-none border-2 border-blue-500 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-100 transition duration-500 ease-in-out" placeholder="Reference" />
                            </div>
                        </div>
                         <div class="mb-8">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">

                                 Description
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="description" class="block pr-10 shadow appearance-none border-2 border-blue-500 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-100 transition duration-500 ease-in-out" placeholder="description" />
                            </div>
                        </div>
                         <div class="mb-8">
                            <label for="prix" class="block text-gray-700 text-sm font-bold mb-2">

                                Prix
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="text" name="prix" class="block pr-10 shadow appearance-none border-2 border-blue-500 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-100 transition duration-500 ease-in-out" placeholder="prix" />
                            </div>
                        </div>
                        <div class="mb-8">
                            <label for="prix" class="block text-gray-700 text-sm font-bold mb-2">
                                Picture
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="file" name="picture" class="block pr-10 shadow appearance-none border-2 border-blue-500 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-blue-100 transition duration-500 ease-in-out" placeholder="picture" />

                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <button class="transition duration-500 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
