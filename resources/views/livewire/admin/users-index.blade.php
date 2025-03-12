<section class="w-full">
    <x-general-header title="Users" description="List of all users" />

    <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row py-4 justify-between">
        <div class="flex space-x-2 items-center">
            <flux:icon.users />
            <h3 class="font-bold text-lg">{{ $total_users }}</h3>
            <p class="text-gray-400">Total users</p>  
        </div>

        <div class="flex flex-col space-y-2 w-full md:w-lg md:space-y-0 md:flex-row md:space-x-2">
            <div class="w-full md:w-96">                      
                <flux:input icon="magnifying-glass" wire:model.live="search" placeholder="Search users..." clearable/>
            </div>
            <div>
                <flux:select wire:model.change="role" name="role" id="role">
                    <flux:select.option value="All Roles">All Roles</flux:select.option>
                    @foreach ($roles as $role)
                        <flux:select.option value="{{ $role->name }}">{{ $role->name }} </flux:select.option>
                    @endforeach
                </flux:select>
            </div>
            
        </div>
        

        <div>
            <flux:button icon="plus" :href="route('admin.create-user')" variant="primary">Create New User</flux:button>
        </div>
    </div>


    <div class="mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 text-left text-sm font-semibold uppercase tracking-wide text-zinc-500 dark:text-white/80">
                        <th class="px-4 py-3">Full Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Role</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y text-zinc-700 dark:text-white/90">
                    @forelse($users as $user)
                        <tr>
                            <td class="px-4 py-3 text-sm">
                                {{ $user->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $user->email }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $user->contact }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $user->role->name }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-4 py-3" colspan="4">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{ $users->links() }}
</section>