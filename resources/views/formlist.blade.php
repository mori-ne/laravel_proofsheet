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
                @foreach ($forms as $form)
                    <div class="p-7 text-gray-900 bg-white rounded border shadow">
                        <div class="flex justify-between mb-4 gap-4">
                            <div class="flex gap-4">
                                <div class="inline-flex rounded-lg shadow-sm">
                                    <a href="#"
                                        class="py1.5 px-2 inline-flex items-center gap-x-2 -ms-px first:rounded-s-sm first:ms-0 last:rounded-e-sm text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                        編集
                                    </a>
                                    <form id="delete_form_{{ $form->id }}" action="#" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="confirmDelete({{ $form->id }})" type="button"
                                            class="py1.5 px-2 inline-flex items-center gap-x-2 -ms-px first:rounded-s-sm first:ms-0 last:rounded-e-sm text-sm font-medium focus:z-10 border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none text-red-500">
                                            削除
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="max-w-[85rem] px-4 mx-auto">
                            <!-- Grid -->
                            <div class="flex flex-col gap-4">
                                <div class="md:row-span-2">
                                    <div class="w-full">
                                        <h2 class="text-xl font-bold md:leading-tight">
                                            {{ $form->form_name }}
                                        </h2>

                                        <p class="text-sm mb-2 leading-6 hidden md:block text-gray-600">
                                            {{ $form->description }}
                                        </p>

                                        <p class="text-sm mb-2 leading-6 hidden md:block text-gray-600">
                                            {{ $form->project->project_name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</x-app-layout>
