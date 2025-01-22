<div class="relative overflow-x-auto">
    <table class="w-full max-w-2xl text-sm text-left rtl:text-right text-gray-600 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    tipo
                </th>
            </tr>
        </thead>
        @foreach ($users as $user)
            
        @endforeach
        <tbody>
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    {{$user->id}}
                </th>
                <td class="px-6 py-4">
                    {{$user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    {{$user->user_type->name}}
                </td>
            </tr>
        </tbody>
    </table>
</div>