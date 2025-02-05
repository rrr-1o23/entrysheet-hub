<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            企業登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">企業を登録</h1>

                    <!-- エラーメッセージの表示 -->
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- 企業登録フォーム -->
                    <form method="POST" action=" {{ route('company.store')}}">
                        @csrf

                        <!-- 業界選択 -->
                        <div class="mb-4">
                            <label for="industry_id" class="block text-gray-700 font-bold mb-2">業界</label>
                            <select name="industry_id" id="industry_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">業界を選択してください</option>
                                @foreach ($industries as $industry)
                                    <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 企業名 -->
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">企業名</label>
                            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        </div>

                        <!-- ホームページ -->
                        <div class="mb-4">
                            <label for="homepage" class="block text-gray-700 font-bold mb-2">ホームページURL (任意)</label>
                            <input type="url" name="homepage" id="homepage" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- マイページ -->
                        <div class="mb-4">
                            <label for="mypage" class="block text-gray-700 font-bold mb-2">マイページURL (任意)</label>
                            <input type="url" name="mypage" id="mypage" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- ステータス -->
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 font-bold mb-2">ステータス (任意)</label>
                            <input type="text" name="status" id="status" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- プロセス -->
                        <div class="mb-4">
                            <label for="process" class="block text-gray-700 font-bold mb-2">選考フロー (任意)</label>
                            <input type="text" name="process" id="process" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- 登録ボタン -->
                        <div class="text-right">
                            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                                登録
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>