<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold">{{ $entrysheet->title }}</h2>

                    <p class="mt-2"><strong>ステータス:</strong> {{ $entrysheet->status }}</p>
                    <p class="mt-2"><strong>締切日:</strong> {{ $entrysheet->deadline ?? '未設定' }}</p>

                    <!-- 質問と回答の登録フォーム -->
                    <h3 class="text-xl font-bold mt-6">質問と回答を追加</h3>

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

                    <form method="POST" action="{{ route('content.store', $entrysheet->id) }}">
                        @csrf

                        <!-- 質問 -->
                        <div class="mb-4">
                            <label for="question" class="block text-gray-700 font-bold mb-2">質問</label>
                            <input type="text" name="question" id="question" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                        </div>

                        <!-- 回答 -->
                        <div class="mb-4">
                            <label for="answer" class="block text-gray-700 font-bold mb-2">回答</label>
                            <textarea name="answer" id="answer" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                        </div>

                        <!-- 登録ボタン -->
                        <div class="text-right">
                            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2">
                                追加
                            </button>
                        </div>
                    </form>

                    <!-- 登録済みの質問と回答を表示 -->
                    <h3 class="text-xl font-bold mt-6">登録済みの質問と回答</h3>

                    @if ($entrysheet->contents->isEmpty())
                        <p class="text-gray-600 mt-4">まだ登録された質問がありません。</p>
                    @else
                        <ul class="mt-4">
                            @foreach ($entrysheet->contents as $content)
                                <li class="p-4 border rounded-lg shadow mt-2">
                                    <p class="font-bold">質問: {{ $content->question }}</p>
                                    <p class="mt-1">回答: {{ $content->answer }}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <!-- 戻るボタン -->
                    <a href="{{ url()->previous() }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>