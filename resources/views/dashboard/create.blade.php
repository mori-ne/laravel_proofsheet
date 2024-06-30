<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    プロジェクトを新規追加
                </h2>
            </x-slot>

            <a href="{{ route('dashboard.index') }}"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:bg-blue-800/30 dark:hover:text-blue-400 mb-4">
                < 一覧へ戻る</a>

                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-7 text-gray-900 mb-6 bg-white rounded border">
                            <div class="max-w-[85rem] px-4 mx-auto">
                                <div class="flex flex-col gap-4">



                                    <!-- Card Section -->
                                    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                                        <!-- Card -->
                                        <div class="bg-white rounded-xl p-4 sm:p-7 dark:bg-neutral-900">
                                            <form>
                                                <!-- Section -->

                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            プロジェクト名 </h2>
                                                    </div>

                                                    <div class="sm:col-span-12">
                                                        <div class="sm:flex">
                                                            <input id="af-submit-application-full-name" type="text"
                                                                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                                placeholder="第◯回 ◯◯◯◯◯◯◯◯◯◯大会">
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>

                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            説明 </h2>
                                                    </div>

                                                    <div class="sm:col-span-12">
                                                        <div class="sm:flex">
                                                            <div class="max-w-full space-y-3">
                                                                <textarea
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                                    rows="12" cols="100" placeholder="This is a textarea placeholder"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>

                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            開始・終了日 </h2>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- Datepicker -->
                                                <div id="single-pre-set-ranges-tab-preview-datepicker"
                                                    class="w-80 flex flex-col bg-white border shadow-lg rounded-xl overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                                                    <div class="p-3">
                                                        <!-- Calendar -->
                                                        <div class="space-y-0.5">
                                                            <!-- Months -->
                                                            <div
                                                                class="grid grid-cols-5 items-center gap-x-3 mx-1.5 pb-3">
                                                                <!-- Prev Button -->
                                                                <div class="col-span-1">
                                                                    <button type="button"
                                                                        class="size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-800">
                                                                        <svg class="flex-shrink-0 size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m15 18-6-6 6-6"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!-- End Prev Button -->

                                                                <!-- Month / Year -->
                                                                <div
                                                                    class="col-span-3 flex justify-center items-center gap-x-1">
                                                                    <div class="relative">
                                                                        <select
                                                                            data-hs-select='{
                  "placeholder": "Select month",
                  "viewport": "#single-pre-set-ranges-tab-preview-datepicker",
                  "toggleTag": "<button type=\"button\"></button>",
                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300",
                  "dropdownClasses": "mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                  "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                }'
                                                                            class="hidden">
                                                                            <option value="0">January</option>
                                                                            <option value="1">February</option>
                                                                            <option value="2">March</option>
                                                                            <option value="3">April</option>
                                                                            <option value="4">May</option>
                                                                            <option value="5">June</option>
                                                                            <option value="6" selected="">July
                                                                            </option>
                                                                            <option value="7">August</option>
                                                                            <option value="8">September</option>
                                                                            <option value="9">October</option>
                                                                            <option value="10">November</option>
                                                                            <option value="11">December</option>
                                                                        </select>
                                                                    </div>

                                                                    <span
                                                                        class="text-gray-800 dark:text-neutral-200">/</span>

                                                                    <div class="relative">
                                                                        <select
                                                                            data-hs-select='{
                  "placeholder": "Select year",
                  "viewport": "#single-pre-set-ranges-tab-preview-datepicker",
                  "toggleTag": "<button type=\"button\"></button>",
                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 before:absolute before:inset-0 before:z-[1] dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300",
                  "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                  "optionClasses": "p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                }'
                                                                            class="hidden">
                                                                            <option selected="">2023</option>
                                                                            <option>2024</option>
                                                                            <option>2025</option>
                                                                            <option>2026</option>
                                                                            <option>2027</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- End Month / Year -->

                                                                <!-- Next Button -->
                                                                <div class="col-span-1 flex justify-end">
                                                                    <button type="button"
                                                                        class="size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-800">
                                                                        <svg class="flex-shrink-0 size-4" width="24"
                                                                            height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m9 18 6-6-6-6"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <!-- End Next Button -->
                                                            </div>
                                                            <!-- Months -->

                                                            <!-- Weeks -->
                                                            <div class="flex pb-1.5">
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Mo
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Tu
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    We
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Th
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Fr
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Sa
                                                                </span>
                                                                <span
                                                                    class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                                                                    Su
                                                                </span>
                                                            </div>
                                                            <!-- Weeks -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        26
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        27
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        28
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        29
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        30
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        1
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        2
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        3
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        4
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 rounded-s-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center bg-blue-600 border border-transparent text-sm font-medium text-white hover:border-blue-600 rounded-full dark:bg-blue-500 disabled:text-gray-300 disabled:pointer-events-none dark:hover:border-blue-500">
                                                                        5
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        6
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        7
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        8
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        9
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        10
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        11
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        12
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        13
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        14
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        15
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        16
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        17
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        18
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 first:rounded-s-full last:rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        19
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="bg-gray-100 rounded-e-full dark:bg-neutral-800">
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center bg-blue-600 border border-transparent text-sm font-medium text-white hover:border-blue-600 rounded-full dark:bg-blue-500 disabled:text-gray-300 disabled:pointer-events-none dark:hover:border-blue-500">
                                                                        20
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        21
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        22
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        23
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        24
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        25
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        26
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        27
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        28
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        29
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        30
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->

                                                            <!-- Days -->
                                                            <div class="flex">
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600">
                                                                        31
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        1
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        2
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        3
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        4
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        5
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                        class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-blue-600 hover:text-blue-600 rounded-full disabled:text-gray-300 disabled:pointer-events-none dark:text-neutral-200 dark:hover:border-neutral-500 dark:disabled:text-neutral-600"
                                                                        disabled="">
                                                                        6
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Days -->
                                                        </div>
                                                        <!-- End Calendar -->
                                                    </div>

                                                    <!-- Footer -->
                                                    <div
                                                        class="flex justify-end items-center gap-x-2 p-3 border-t dark:border-neutral-700">
                                                        <button type="button"
                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                                            Cancel
                                                        </button>
                                                        <button type="button"
                                                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                            Apply
                                                        </button>
                                                    </div>
                                                    <!-- End Footer -->
                                                </div>
                                                <!-- End Datepicker -->


                                                <!-- Section -->
                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            Profile
                                                        </h2>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-resume-cv"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Resume/CV
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <label for="af-submit-application-resume-cv"
                                                            class="sr-only">Choose
                                                            file</label>
                                                        <input type="file" name="af-submit-application-resume-cv"
                                                            id="af-submit-application-resume-cv"
                                                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
              file:bg-gray-50 file:border-0
              file:bg-gray-100 file:me-4
              file:py-2 file:px-4
              dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <div class="inline-block">
                                                            <label for="af-submit-application-bio"
                                                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                                Personal summary
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <textarea id="af-submit-application-bio"
                                                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            rows="6" placeholder="Add a cover letter or anything else you want to share."></textarea>
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Section -->

                                                <!-- Section -->
                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            Links
                                                        </h2>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-linkedin-url"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            LinkedIn URL
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-linkedin-url" type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-twitter-url"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Twitter URL
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-twitter-url" type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-github-url"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Github URL
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-github-url" type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-portfolio-url"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Portfolio URL
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-portfolio-url" type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-other-website"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Other website
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-other-website" type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-start-4 sm:col-span-8">
                                                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                                                            href="../docs/index.html">
                                                            <svg class="flex-shrink-0 size-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <circle cx="12" cy="12" r="10" />
                                                                <path d="M8 12h8" />
                                                                <path d="M12 8v8" />
                                                            </svg>
                                                            Add URL
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- End Section -->

                                                <!-- Section -->
                                                <div
                                                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <div class="sm:col-span-12">
                                                        <h2
                                                            class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                            Before sending your application, please let us know...
                                                        </h2>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-desired-salary"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Desired salary
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-desired-salary"
                                                            type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-3">
                                                        <label for="af-submit-application-available-start-date"
                                                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                            Available start date
                                                        </label>
                                                    </div>
                                                    <!-- End Col -->

                                                    <div class="sm:col-span-9">
                                                        <input id="af-submit-application-available-start-date"
                                                            type="text"
                                                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    </div>
                                                    <!-- End Col -->
                                                </div>
                                                <!-- End Section -->

                                                <!-- Section -->
                                                <div
                                                    class="py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                    <h2
                                                        class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                                        Submit application
                                                    </h2>
                                                    <p class="mt-3 text-sm text-gray-600 dark:text-neutral-400">
                                                        In order to contact you with future jobs that you may be
                                                        interested in,
                                                        we need to store your personal data.
                                                    </p>
                                                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                                        If you are happy for us to do so please click the checkbox
                                                        below.
                                                    </p>

                                                    <div class="mt-5 flex">
                                                        <input type="checkbox"
                                                            class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                                            id="af-submit-application-privacy-check">
                                                        <label for="af-submit-application-privacy-check"
                                                            class="text-sm text-gray-500 ms-2 dark:text-neutral-400">Allow
                                                            us
                                                            to process your personal information.</label>
                                                    </div>
                                                </div>
                                                <!-- End Section -->

                                                <button type="button"
                                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                    Submit application
                                                </button>
                                            </form>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Card Section -->



                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>


</x-app-layout>
