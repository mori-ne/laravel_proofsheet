<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>


            <div class="flex justify-between mb-4">
                <a href="{{ route('dashboard.index') }}"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none ">
                    < 一覧へ戻る</a>

                        <a href="{{ route('dashboard.create') }}"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">プロジェクトを新規追加</a>

            </div>



            <div class=" overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-7 text-gray-900 mb-6 bg-white rounded border shadow">

                    <div class="flex justify-between mb-4 gap-4">
                        <p
                            class="ml-4 h-fit py-1 px-4 inline-flex items-center gap-x-1 text-xs font-medium bg-gray-100 text-teal-800 rounded-full">
                            プロジェクトID：
                            {{ $post->unique_id }}
                        </p>
                        <div>
                            @if (!$post->status)
                                <span
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-100 text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
                                    非公開
                                </span>
                            @else
                                <span
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-100 text-teal-800 disabled:opacity-50 disabled:pointer-events-none">
                                    公開中
                                </span>
                            @endif

                            <div class="inline-flex rounded-lg shadow-sm">
                                <a href="{{ route('dashboard.show', $post->id) }}"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    編集する
                                </a>
                                <a href="#"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none text-red-500">
                                    削除
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- FAQ -->
                    <div class="max-w-[85rem] px-4 mx-auto">
                        <!-- Grid -->
                        <div class="flex flex-col gap-4">
                            <div class="md:row-span-2">
                                <div class="w-full">
                                    <h2 class="text-2xl font-bold md:text-2xl md:leading-tight">
                                        {{ $post->project_name }}
                                    </h2>
                                    <p class="mt-1 mb-4 hidden md:block text-gray-600">
                                        公開期間：
                                        {{ $post->published_at }}～{{ $post->unpublished_at }}
                                    </p>
                                    <p class="text-sm mb-2 leading-6 hidden md:block text-gray-600">
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
                                                <table class="w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                Name</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                Age</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                                Address</th>
                                                            <th scope="col"
                                                                class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                                                Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                John Brown</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                45</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                New York No. 1 Lake Park</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                <button type="button"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                Jim Green</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                27</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                London No. 1 Lake Park</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                <button type="button"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                Joe Black</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                31</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                Sidney No. 1 Lake Park</td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                <button type="button"
                                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
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
            </div>
        </div>
    </div>


</x-app-layout>
