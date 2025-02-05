<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- 企業登録ボタン -->
                    <a href="{{ route('company.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow">
                        企業を登録
                    </a>

                    <!-- ログインユーザーが登録した企業一覧 -->
                    <h2 class="text-xl font-bold mt-6">登録した企業</h2>

                    @if ($companies->isEmpty())
                        <p class="text-gray-600 mt-4">登録された企業がありません。</p>
                    @else
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($companies as $company)
                                <div class="p-4 border rounded-lg shadow cursor-pointer hover:bg-gray-100" 
                                    onclick="location.href='{{ route('company.show', $company->id) }}'">
                                    <h3 class="text-lg font-semibold">{{ $company->name }}</h3>
                                    <p class="text-sm text-gray-600 mt-1">{{ $company->status ?? 'ステータスなし' }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>