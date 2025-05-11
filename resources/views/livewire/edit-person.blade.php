<div>
    <flux:modal name="edit-person" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Edit Person</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>

            <flux:input wire:model="fullname" label="fullname" placeholder="Your full name" />
            <flux:input wire:model="nic" label="nic" placeholder="Your NIC" />
            <flux:input wire:model="dob" label="Date of birth" type="date" />
            <flux:radio.group wire:model="gender" label="Select your gender">
                <flux:radio value="Male" label="Male" checked />
                <flux:radio value="Female" label="Female" />
            </flux:radio.group>

            <flux:textarea wire:model="address"
                label="Your Address"
            />
            <flux:input wire:model="contact" label="contact" placeholder="Your contact" />
            <flux:input wire:model="email" label="email" placeholder="Your email" />


            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click="update">Update</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
