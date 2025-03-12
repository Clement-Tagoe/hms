<section class="w-full">
    <x-general-header title="Create User" description="Add a new user" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-6 w-3xl">
             <!-- Name -->
             <div class="w-1/2">
                <flux:input
                    wire:model="name"
                    id="name"
                    :label="__('Name')"
                    type="text"
                    name="name"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Full name"
                />
             </div>
            

            <!-- Email Address -->
            <div class="w-1/2">
                <flux:input
                    wire:model="email"
                    id="email"
                    :label="__('Email address')"
                    type="email"
                    name="email"
                    required
                    autocomplete="email"
                    placeholder="email@example.com"
                />
            </div>
            
        </div>
       
        <div class="flex flex-col md:flex-row gap-6 w-3xl">
            <div class="w-1/2">
                <!-- Contact -->
                    <flux:input
                    wire:model="contact"
                    id="contact"
                    :label="__('Contact')"
                    type="text"
                    name="contact"
                    required
                    autofocus
                    autocomplete="contact"
                    placeholder="Contact"
                />
            </div>
            
            <div class="w-1/2">
                <!-- Role -->
                <flux:select wire:model="role_id" :label="__('Role')">
                    <flux:select.option>Choose role...</flux:select.option>
                    <flux:select.option value="1">Super_Administrator</flux:select.option>
                    <flux:select.option value="2">Administrator</flux:select.option>
                    <flux:select.option value="3">Doctor</flux:select.option>
                    <flux:select.option value="4">Nurse</flux:select.option>
                </flux:select>
            </div>
        </div>
        

        
        <div class="flex flex-col md:flex-row gap-6 w-3xl">
            <div class="w-1/2">
                <!-- Password -->
                <flux:input
                    wire:model="password"
                    id="password"
                    :label="__('Password')"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    placeholder="Password"
                />
            </div>

            <div class="w-1/2">
                <!-- Confirm Password -->
                <flux:input
                    wire:model="password_confirmation"
                    id="password_confirmation"
                    :label="__('Confirm password')"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm password"
                />
            </div>
        </div>

        
        

        <div class="flex w-3xl items-center md:justify-end">
            <flux:button type="submit" variant="primary" class="w-1/2 md:w-full">
                {{ __('Create New User') }}
            </flux:button>
        </div>
    </form>
</section>