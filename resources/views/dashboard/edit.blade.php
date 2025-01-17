<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    プロジェクトを編集
                </h2>
            </x-slot>

            <a href="{{ route('dashboard.index') }}"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none mb-4">
                < 一覧へ戻る</a>

                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-7 text-gray-900 mb-6 bg-white rounded border shadow">
                            <div class="max-w-[85rem] px-4 mx-auto">
                                <div class="flex flex-col gap-4">



                                    <div class="max-w-14xl px-4 py-14 mx-auto">
                                        <div class="">
                                            <form action="{{ route('dashboard.update', $data->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                                <h2 class="text-xl font-semibold text-gray-800 mb-6">プロジェクト名</h2>
                                                <input name="project_name" id="af-submit-application-full-name"
                                                    type="text"
                                                    class="peer py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                    placeholder="This is a input placeholder"
                                                    value="{{ $data->project_name }}">
                                        </div>

                                        <div
                                            class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-300">
                                            <div class="sm:col-span-12">
                                                <h2 class="text-lg font-semibold text-gray-800">説明</h2>
                                            </div>

                                            <div class="sm:col-span-12">
                                                <div class="sm:flex">
                                                    <div class="max-w-full space-y-3">
                                                        <textarea name="description"
                                                            class="py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                                            rows="12" cols="100" placeholder="This is a textarea placeholder">{{ $data->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="flex items-center gap-16 py-8 border-t first:border-transparent border-gray-300">
                                            <div class="flex items-center gap-4">
                                                <h2 class="text-lg font-semibold text-gray-800">公開開始日</h2>
                                                <input name="published_at" id="datetime_start" type="datetime-local"
                                                    value="{{ $data->published_at }}">
                                            </div>

                                            <div class="flex items-center gap-4">
                                                <h2 class="text-lg font-semibold text-gray-800">公開終了日</h2>
                                                <input name="unpublished_at" id="datetime_end" type="datetime-local"
                                                    value="{{ $data->unpublished_at }}">
                                            </div>
                                        </div>


                                        <button type="submit"
                                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                            更新
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
