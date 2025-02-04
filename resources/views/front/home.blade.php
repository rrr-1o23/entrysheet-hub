<x-front-layout>
    <x-slot:title>EntrySheetManager</x-slot:title>

    <section>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800">
            エントリーシートを効率的に管理しましょう
        </h2>
        <p class="mt-4 text-base md:text-lg text-gray-600">
            業界別、企業別に整理し、簡単にアクセスできる直感的なプラットフォームです。
        </p>
        <div class="mt-6">
            <a href="/register"
               class="px-6 py-3 bg-blue-600 text-white text-base md:text-lg font-semibold rounded-lg shadow hover:bg-blue-500">
                今すぐ始める
            </a>
            <a href="#features"
               class="ml-4 px-6 py-3 bg-gray-200 text-gray-800 text-base md:text-lg font-semibold rounded-lg shadow hover:bg-gray-300">
                詳細を見る
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="mt-16">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">機能</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h4 class="text-lg md:text-xl font-bold text-blue-600">フォルダー別管理</h4>
                <p class="mt-2 text-gray-600">
                    業界や企業ごとに分類して、ドキュメントを整理整頓できます。
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h4 class="text-lg md:text-xl font-bold text-blue-600">クイックアクセス</h4>
                <p class="mt-2 text-gray-600">
                    強力な検索ツールでエントリーシートを簡単に管理できます。
                </p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h4 class="text-lg md:text-xl font-bold text-blue-600">安全な保存</h4>
                <p class="mt-2 text-gray-600">
                    ドキュメントは安全に保存され、あなただけがアクセスできます。
                </p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="mt-16">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">概要</h3>
        <p class="mt-4 text-gray-600">
            求職者がエントリーシート管理を効率化できる、使いやすく便利なツールを提供します。
        </p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="mt-16">
        <h3 class="text-2xl md:text-3xl font-bold text-gray-800">お問い合わせ</h3>
        <p class="mt-4 text-gray-600">
            ご質問やサポートが必要な場合は、
            <a href="mailto:support@entrysheetmanager.com" class="text-blue-600 underline">
                support@entrysheetmanager.com
            </a>
            までご連絡ください。
        </p>
    </section>

    <x-slot:js>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            menu.classList.toggle('flex-col');
            menu.classList.toggle('justify-end')
        });
    </x-slot:js>
</x-front-layout>