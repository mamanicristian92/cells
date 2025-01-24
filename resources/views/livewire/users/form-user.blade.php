<div class="max-w-2xl ">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("Name")}}
                </label>
                <input type="text" id="name" wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    required autocomplete="off"/>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("Email")}}
                </label>
                <input type="text" id="email" wire:model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    placeholder="name@example.com" required autocomplete="off"/>
            </div>
            <div>
                <label for="user_type" class="block mb-2 text-sm font-medium text-gray-900">Type</label>
                <select id="user_type" wire:model="user_type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                    <option></option>
                    @foreach ($user_types as $user_type)
                        <option value="{{$user_type->id}}">{{$user_type->name}}</option>
                    @endforeach
                  </select>
            </div>  
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
            </div>
            <div>
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900">Country</label>
                <select id="country" wire:model="country_id" wire:change="$refresh" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                    <option></option>
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("State/Province")}}
                </label>
                <select id="state" wire:model="state_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                    <option></option>
                    @foreach ($states as $state)
                        @if ($country_id==$state->country_id)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div>
                <label for="city"class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("City")}}
                </label>
                <input type="text" id="city" wire:model="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    required autocomplete="off"/>
            </div>
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("Address")}}
                </label>
                <input type="text" id="address" wire:model="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    required autocomplete="off"/>
            </div>
            <div>
                <label for="doc_type" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("Document Type")}}
                </label>
                <select id="doc_type" wire:model="doc_type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                    <option></option>
                    @foreach ($doc_types as $doc_type)
                        <option value="{{$doc_type->id}}">{{$doc_type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="doc_number" class="block mb-2 text-sm font-medium text-gray-900">
                    {{__("Document Number")}}
                </label>
                <input type="text" id="doc_number" wire:model="doc_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    required autocomplete="off"/>
            </div>
        </div>
        
    </div>
</div>
