<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            エントリーシート作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">エントリーシートを作成</h1>

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

                    <!-- エントリーシート作成フォーム -->
                    <form method="POST" action="{{ route('entrysheet.store') }}">
                        @csrf

                        <!-- タイトル -->
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 font-bold mb-2">タイトル</label>
                            <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        </div>

                        <!-- ステータス -->
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 font-bold mb-2">ステータス</label>
                            <select name="status" id="status" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">ステータスを選択</option>
                                <option value="下書き">下書き</option>
                                <option value="提出済み">提出済み</option>
                                <option value="書類通過">書類通過</option>
                                <option value="書類落ち">書類落ち</option>
                            </select>
                        </div>

                        <!-- 締切日 -->
                        <div class="mb-4">
                            <label for="deadline" class="block text-gray-700 font-bold mb-2">締切日 (任意)</label>
                            <input type="date" name="deadline" id="deadline" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- 企業選択 -->
                        <div class="mb-4">
                            <label for="company_id" class="block text-gray-700 font-bold mb-2">企業</label>
                            <select name="company_id" id="company_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">企業を選択してください</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
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