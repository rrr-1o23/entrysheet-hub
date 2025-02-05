<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">{{ $company->name }}</h2>
                    
                    <p class="mt-2">{{ $company->industry->name }}</p>
                    <p class="mt-2"><strong>ホームページ:</strong> 
                        @if ($company->homepage)
                            <a href="{{ $company->homepage }}" target="_blank" class="text-blue-500">{{ $company->homepage }}</a>
                        @else
                            なし
                        @endif
                    </p>

                    <p class="mt-2"><strong>マイページ:</strong> 
                        @if ($company->mypage)
                            <a href="{{ $company->mypage }}" target="_blank" class="text-blue-500">{{ $company->mypage }}</a>
                        @else
                            なし
                        @endif
                    </p>

                    <p class="mt-2"><strong>ステータス:</strong> {{ $company->status ?? 'なし' }}</p>
                    <p class="mt-2"><strong>プロセス:</strong> {{ $company->process ?? 'なし' }}</p>

                    <!-- 企業のエントリーシート一覧 -->
                    <h3 class="text-xl font-bold mt-6">エントリーシート一覧</h3>

                    @if ($company->entrysheets->isEmpty())
                        <p class="text-gray-600 mt-4">この企業のエントリーシートは登録されていません。</p>
                    @else
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($company->entrysheets as $entrysheet)
                                <div class="p-4 border rounded-lg shadow cursor-pointer hover:bg-gray-100" 
                                    onclick="location.href='{{ route('entrysheet.show', $entrysheet->id) }}'">
                                    <h3 class="text-lg font-semibold">{{ $entrysheet->title }}</h3>
                                    <p class="text-sm text-gray-600">ステータス: {{ $entrysheet->status }}</p>
                                    <p class="text-sm text-gray-600">締切: {{ $entrysheet->deadline ?? '未設定' }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <!-- 戻るボタン -->
                    <a href="{{ route('company') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>