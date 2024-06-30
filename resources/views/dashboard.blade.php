<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="flex justify-end mb-4">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    プロジェクトを新規追加
                </button>
            </div>
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">

                @foreach ($posts as $post)
                    <div class="p-6 text-gray-900 mb-6 bg-white rounded border">

                        <div class="flex justify-end mb-4 gap-2">
                            <div>
                                <span
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-100 text-teal-800 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-teal-900 dark:text-teal-500 dark:hover:text-teal-400">
                                    公開中
                                </span>

                                <div class="inline-flex rounded-lg shadow-sm">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        編集する
                                    </button>
                                    <button type="button"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white  shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 text-red-500">
                                        削除
                                    </button>
                                </div>

                            </div>
                        </div>

                        <!-- FAQ -->
                        <div class="max-w-[85rem] px-4 mx-auto">
                            <!-- Grid -->
                            <div class="flex flex-col gap-4">
                                <div class="md:row-span-2">
                                    <div class="w-full">
                                        <h2 class="text-2xl font-bold md:text-2xl md:leading-tight dark:text-white">
                                            {{ $post->project_name }}
                                        </h2>
                                        <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">
                                            公開期間：
                                            {{ $post->published_at }}～{{ $post->unpublished_at }}
                                        </p>
                                        <p class="text-sm mt-1 hidden md:block text-gray-600 dark:text-neutral-400">
                                            {{ $post->description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- End row -->

                                <div class="md:row-span-3">
                                    <!-- Accordion -->
                                    <div class="flex flex-row">
                                        <div class="w-full overflow-x-auto">
                                            <div class="p-1.5 w-full inline-block align-middle">
                                                <div class="overflow-hidden">
                                                    <table
                                                        class="w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                                    Name</th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                                    Age</th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                                    Address</th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                                    Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                    John Brown</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    45</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    New York No. 1 Lake Park</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                    <button type="button"
                                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                    Jim Green</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    27</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    London No. 1 Lake Park</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                    <button type="button"
                                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                                    Joe Black</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    31</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                                    Sidney No. 1 Lake Park</td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                    <button type="button"
                                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400">Delete</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Accordion -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- End FAQ -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
