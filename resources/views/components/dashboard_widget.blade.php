@props(['productCount' => 0, 'color' => 'blue', 'icon' => 'fa-wallet', 'title' => '', 'boxBorder' => "true"])


<div class="bg-gradient-to-b from-{{$color}}-200 to-{{$color}}-100 @if($boxBorder == "true")border-b-4 border-{{$color}}-500 @endif rounded-lg shadow-xl p-5">
    <div class="flex flex-row items-center">
        <div class="flex-shrink pr-4">
            <div class="rounded-full p-5 bg-{{$color}}-600"><i class="fa {{$icon}} fa-2x fa-inverse"></i></div>
        </div>
        <div class="flex-1 text-right md:text-center">
            <h5 class="font-bold uppercase text-gray-600">{{$title}}</h5>
            <h3 class="font-bold text-3xl">{{$productCount}} <span class="text-gray-500"><i class="fas fa-caret-up"></i></span></h3>
        </div>
    </div>
</div>
