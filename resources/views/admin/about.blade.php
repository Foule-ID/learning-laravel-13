<x-admin.layout>
    <h1 class="text-3xl font-bold">
        {{ $title }}
    </h1>

    <p>
        Nama: {{ $nama }}
    </p>

    <p>
        Github:
        <a href="{{ $github }}" target="_blank" class="text-blue-500 hover:underline">
            Foule-ID
        </a>
    </p>
</x-admin.layout>
