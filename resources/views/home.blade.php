<x-app.template>

        <h1 class="text-center text-4xl py-14"> Home </h1>

    <div class="grid grid-cols-6 gap-2">

    <a href="" class="block w-max col-start-1 col-span-2">
        <div class="p-2 px-4 h-[200px] w-[200px] bg-gray-200 rounded-lg dark:bg-gray-800 flex flex-col gap-6 relative">
            <h2 class="text-gray-50 text-center"> Orçamentos Totalmente Pagos </h2>

            <p class="text-center text-gray-50 text-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> {{ $totallyPaid }} </p>

        </div>
    </a>

    <a href="" class="block w-max col-start-3 col-span-2">
        <div class="p-2 px-4 h-[200px] w-[200px] bg-gray-200 rounded-lg dark:bg-gray-800 flex flex-col gap-6 relative">
            <h2 class="text-gray-50 text-center"> Orçamentos Parcialmente Pagos </h2>

            <p class="text-center text-gray-50 text-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"> {{ $partiallyPaid  }} </p>

        </div>
    </a>

{{--    <a href="" class="block w-max col-start-5 col-span-2">--}}
{{--        <div class="p-2 px-4 h-[200px] w-[200px] bg-gray-200 rounded-lg dark:bg-gray-800 flex flex-col gap-6 relative">--}}
{{--            <h2 class="text-gray-50 text-center"> Orçamentos não pagos </h2>--}}

{{--            <p class="text-center text-gray-50 text-5xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 "> 10 </p>--}}

{{--        </div>--}}
{{--    </a>--}}

{{--        <a href="" class="block w-max col-start-5 col-span-2">--}}
{{--            <div class="p-2 px-4 h-[200px] w-[200px] bg-gray-200 rounded-lg dark:bg-gray-800 flex flex-col gap-6 relative">--}}
{{--                <h2 class="text-gray-50 text-center"> Último orçamento feito </h2>--}}

{{--                <p class="text-center text-gray-50 text-2xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 "> 12-03-2024 </p>--}}

{{--            </div>--}}
{{--        </a>--}}

    </div>


</x-app.template>


