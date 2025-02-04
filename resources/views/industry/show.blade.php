<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $industry->name }} の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-6">{{ $industry->name }}</h1>
                    <p>登録者ID: {{ $industry->user_id }}</p>
                    <p>作成日: {{ $industry->created_at }}</p>
                    <p>更新日: {{ $industry->updated_at }}</p>

                    <a href="{{ route('industry') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        戻る
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>