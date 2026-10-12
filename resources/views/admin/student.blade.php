<x-admin.layout>

    <div class="p-6">

        <h1 class="text-3xl font-bold mb-6 text-white">
            {{ $title }}
        </h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-300">

                <thead class="text-xs uppercase bg-gray-700 text-gray-300">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">NIS</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Class</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $index => $student)
                    <tr class="border-b border-gray-700 hover:bg-gray-800">

                        <td class="px-6 py-4">
                            {{ $index + 1 }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student['nis'] }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student['name'] }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $student['class'] }}
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</x-admin.layout>
