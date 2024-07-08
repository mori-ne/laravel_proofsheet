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
                <a href="{{ route('dashboard.index') }}"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:bg-blue-100 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none ">
                    < 一覧へ戻る</a>

                        <a href="{{ route('dashboard.create') }}"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">プロジェクトを新規追加</a>

            </div>



            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900 mb-6 bg-white rounded border shadow">
                    <div class="flex justify-between mb-3 gap-3">
                        <p
                            class="ml-4 h-fit py-1 px-4 inline-flex items-center gap-x-1 text-sm font-medium bg-gray-100 text-teal-800 rounded-full">
                            プロジェクトID：
                            <a
                                href="{{ route('formuser.login', ['formuser' => $post->unique_id]) }}">{{ $post->unique_id }}</a>

                        </p>
                        <div class="flex gap-4">
                            @if (!$post->status)
                                <form id="toggle_status_form_{{ $post->id }}"
                                    action="{{ route('dashboard.changeToggleStatus', $post->id) }}" method="post">
                                    @csrf
                                    <button onclick="confirmToggle({{ $post->id }})" type="button"
                                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-gray-100 text-gray-500 disabled:opacity-50 disabled:pointer-events-none">
                                        非公開
                                    </button>
                                </form>
                            @else
                                <form id="toggle_status_form_{{ $post->id }}"
                                    action="{{ route('dashboard.changeToggleStatus', $post->id) }}" method="post">
                                    @csrf
                                    <button onclick="confirmToggle({{ $post->id }})" type="button"
                                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-100 text-teal-800 disabled:opacity-50 disabled:pointer-events-none shadow">
                                        公開中
                                    </button>
                                </form>
                            @endif
                            <script>
                                function confirmToggle(id) {
                                    if (confirm('選択したプロジェクトの公開・非公開を切り替えますか？')) {
                                        document.getElementById('toggle_status_form_' + id).submit();
                                    }
                                }
                            </script>

                            <div class="inline-flex rounded-lg shadow-sm">
                                <a href="{{ route('dashboard.edit', $post->id) }}"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    編集する
                                </a>
                                <form id="delete_form_{{ $post->id }}"
                                    action="{{ route('dashboard.destroy', $post->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="confirmDelete({{ $post->id }})" type="button"
                                        class="py-3 px-4 inline-flex items-center gap-x-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none text-red-500">
                                        削除
                                    </button>
                                </form>
                                <script>
                                    function confirmDelete(id) {
                                        if (confirm('選択したプロジェクトを削除してもよろしいですか？')) {
                                            document.getElementById('delete_form_' + id).submit();
                                        }
                                    }
                                </script>
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

                                {{-- button group --}}
                                <div class="flex justify-end gap-4">
                                    <button type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        新しいフォームを追加
                                    </button>
                                </div>


                                <!-- Accordion -->
                                <div class="flex flex-row">
                                    <div class="w-full overflow-x-auto">
                                        <div class="p-1.5 w-full inline-block align-middle">
                                            <div class="overflow-hidden">
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
                                                                操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="divide-y divide-gray-200">
                                                        @foreach ($post->form as $form)
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                    {{ $form->id }}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                    {{ $form->form_name }}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                    {{ $form->description }}
                                                                </td>
                                                                <td
                                                                    class="py-4 whitespace-nowrap text-end text-sm font-medium">
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
