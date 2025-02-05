<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">エントリーシート管理</h2>

                    <!-- エントリーシート作成ボタン -->
                    <a href="{{ route('entrysheet.create') }}" 
                       class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow">
                        エントリーシートを作成
                    </a>

                    <!-- ログインユーザーが登録したエントリーシート一覧 -->
                    <h2 class="text-xl font-bold mt-6">登録したエントリーシート</h2>

                    @if ($entrysheets->isEmpty())
                        <p class="text-gray-600 mt-4">登録されたエントリーシートがありません。</p>
                    @else
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($entrysheets as $entrysheet)
                                <div class="p-4 border rounded-lg shadow cursor-pointer hover:bg-gray-100" 
                                    onclick="location.href='{{ route('entrysheet.show', $entrysheet->id) }}'">
                                    <h3 class="text-lg font-semibold">{{ $entrysheet->title }}</h3>
                                    <p class="text-sm text-gray-600 mt-1">企業: {{ $entrysheet->company->name ?? '未設定' }}</p>
                                    <p class="text-sm text-gray-600">ステータス: {{ $entrysheet->status }}</p>
                                    <p class="text-sm text-gray-600">締切: {{ $entrysheet->deadline ?? '未設定' }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>