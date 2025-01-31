<div class="relative overflow-x-auto">
    <table class="table-auto text-sm text-left rtl:text-right text-gray-600 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-3 py-3">
                    id
                </th>
                <th scope="col" class="px-3 py-3">
                    name
                </th>
                <th scope="col" class="px-3 py-3">
                    leader name
                </th>
                <th scope="col" class="px-3 py-3">
                    country
                </th>
                <th scope="col" class="px-3 py-3">
                    state
                </th>
                <th scope="col" class="px-3 py-3">
                    actions
                </th>
            </tr>
        </thead>
        @foreach ($cells as $cell)
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-3 py-4 font-medium">
                        {{$cell->id}}
                    </th>
                    <td class="px-3 py-4 flex max-w-40">
                        @if ($cell->gender=="m")
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-male text-sky-600" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8"/>
                            </svg>
                        @elseif ($cell->gender=="f")
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-female inline-flex text-pink-400" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1a4 4 0 1 0 0 8 4 4 0 0 0 0-8M3 5a5 5 0 1 1 5.5 4.975V12h2a.5.5 0 0 1 0 1h-2v2.5a.5.5 0 0 1-1 0V13h-2a.5.5 0 0 1 0-1h2V9.975A5 5 0 0 1 3 5"/>
                            </svg>
                        @endif
                        &nbsp;
                        <p class="truncate">{{$cell->name}}</p>
                    </td>
                    <td class="px-3 py-4">
                        <p class="truncate">{{$cell->leader->name}}</p>
                    </td>
                    <td class="px-3 py-4">
                        <p class="truncate">{{$cell->country->name??""}}</p>
                    </td>
                    <td class="px-3 py-4 max-w-40">
                        <p class="truncate">{{$cell->state->name??""}}</p>
                    </td>
                    <td class="px-3 py-0">
                        <div class="flex flex-nowrap">
                            <button data-popover-target="popover-show-{{$loop->index}}"
                                type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1.5 text-center items-center mx-1"
                                name="botonazo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                            </button>
                            <div data-popover id="popover-show-{{$loop->index}}" role="tooltip" class="absolute z-10 invisible inline-block w-16 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                                <div class="px-3 py-2">
                                    <p>{{(__("Show"))}}</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                            <button data-popover-target="popover-edit-{{$loop->index}}"
                                type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1.5 text-center items-center mx-1"
                                name="botonazo"
                                wire:click="edit({{$cell->id}})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                </svg>
                            </button>
                            <div data-popover id="popover-edit-{{$loop->index}}" role="tooltip" class="absolute z-10 invisible inline-block w-16 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                                <div class="px-3 py-2">
                                    <p>{{(__("Edit"))}}</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                            <button data-popover-target="popover-delete-{{$loop->index}}"
                                type="button" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1.5 text-center items-center"
                                name="botonazo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </button>
                            <div data-popover id="popover-delete-{{$loop->index}}" role="tooltip" class="absolute z-10 invisible inline-block w-16 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                                <div class="px-3 py-2">
                                    <p>{{(__("Delete"))}}</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>