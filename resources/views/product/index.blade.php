<x-master-layout>
<table class="mx-auto border-collapse w-3/4 ">
     <div class="flex flex-wrap justify-between">

                    <a href="{{route('produt.create')}}" class="p-4 font-bold uppercase bg-gray-200 text-gray-600">
                        <i class="fas fa-plus-circle"></i>
                        Ajouter
                    </a>
                </div>
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">#</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">nom product</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">reference</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">prix</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produts as $produt)
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                {{$produt->picture}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                {{$produt->nomproduct}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                {{$produt->reference}}
            </td>
             <td class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>
                {{$produt->prix}}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>

                <form method="POST" action="{{route('produt.destroy', $produt->id)}}">
                    @method('delete')
                    @csrf
                    <a href="" class="text-blue-400 hover:text-blue-600 underline">Details</a>
                    <a href="{{ route('produt.edit', $produt->id) }}" class="text-blue-400 hover:text-blue-600 underline pl-6">Edit</a>
                    <button type="submit" class="text-blue-400 hover:text-blue-600 underline pl-6" >Remove</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
</x-master-layout>
