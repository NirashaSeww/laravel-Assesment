<div>
    <flux:modal.trigger name="create-person">
    <flux:button>Create Person</flux:button>
    </flux:modal.trigger>

    <livewire:create-person />
    <livewire:edit-person />

    <flux:modal name="delete-person" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete Person?</flux:heading>

                <flux:text class="mt-2">
                    <p>You're about to delete this person.</p>
                    <p>This action cannot be reversed.</p>
                </flux:text>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click="destroy()">Delete person</flux:button>
            </div>
        </div>
    </flux:modal>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Full Name</th>
                    <th scope="col" class="px-6 py-3">NIC</th>
                    <th scope="col" class="px-6 py-3">DOB</th>
                    <th scope="col" class="px-6 py-3">Gender</th>
                    <th scope="col" class="px-6 py-3">Address</th>
                    <th scope="col" class="px-6 py-3">Contact</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($persons as $person)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->id }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->fullname }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->nic }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->dob }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->gender }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->address }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->contact }}</td>
                        <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $person->email }}</td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                            <flux:button size="sm" wire:click="edit({{$person->id}})">Edit</flux:button>
                            <flux:button size="sm" variant="danger" wire:click="delete({{$person->id}})">Delete</flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>