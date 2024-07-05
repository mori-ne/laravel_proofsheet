<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- アラート ここから --}}
            @if (session('success'))
                <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4 mb-4" role="alert">
                    <span class="font-bold">Success</span>
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            {{-- アラート ここまで --}}

            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>

            <div class="flex justify-between mb-4">
                <span></span>
                <a href="#"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    フォームを新規追加
                </a>
            </div>

            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900 bg-white rounded border shadow">
                    <div class="flex justify-between mb-3 gap-3">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="w-4 px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        No.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        フォーム名</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        説明</th>
                                    <th scope="col"
                                        class="w-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        親プロジェクト名</th>
                                    <th scope="col"
                                        class="w-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        終了期間</th>
                                    <th _="col" class="w-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        操作</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($forms as $form)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $form->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $form->form_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $form->description }}
                                        </td>
                                        <td class="pr-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                            {{ $form->project->project_name }}
                                        </td>
                                        <td class="pr-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                            {{ $form->project->unpublished_at }}
                                        </td>
                                        <td class="py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <div class="inline-flex rounded-lg shadow-sm">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                                    編集
                                                </button>

                                                <button type="button"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none text-red-500">
                                                    削除
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>






            </div>
        </div>
    </div>


</x-app-layout>
