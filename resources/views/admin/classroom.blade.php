<x-admin.layout>
    <div class="p-6">
        <h1 class="text-3xl font-bold mb-6 text-white">{{ $title }}</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-300">
                <thead class="text-xs uppercase bg-gray-700 text-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama Kelas</th>
                        <th scope="col" class="px-6 py-3">Major</th>
                        <th scope="col" class="px-6 py-3">Jumlah Siswa</th>
                        <th scope="col" class="px-6 py-3">Daftar Nama Siswa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classrooms as $index => $classroom)
                    <tr class="border-b border-gray-700 hover:bg-gray-800 align-top">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-bold">{{ $classroom->name }}</td>
                        <td class="px-6 py-4">{{ $classroom->major }}</td>

                        <td class="px-6 py-4">
                            <span class="bg-blue-900 text-blue-300 px-2 py-1 rounded">
                                {{ $classroom->students->count() }} Siswa
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <ul class="list-disc list-inside">
                                @foreach($classroom->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
