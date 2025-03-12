<section class="w-full">
    <x-general-header title="Patients" description="List of all patients" />

    <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row py-4 justify-between">
        <div class="flex space-x-2 items-center">
            <flux:icon.users />
            <h3 class="font-bold text-lg">{{ $total_patients }}</h3>
            <p class="text-gray-400">Total Patients</p>  
        </div>

        <div class="w-full md:w-lg">
            <div class="w-full md:w-96">                      
                <flux:input icon="magnifying-glass" wire:model.live="search" placeholder="Search by name or record number..." clearable/>
            </div>
        </div>
        

        <div>
            <flux:button icon="plus" :href="route('patients.create-patient')" variant="primary">Add New Patient</flux:button>
        </div>
    </div>


    <div class="mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 text-left text-sm font-semibold uppercase tracking-wide text-zinc-500 dark:text-white/80">
                        <th class="px-4 py-3">Medical Record Number</th>
                        <th class="px-4 py-3">Full Name</th>
                        <th class="px-4 py-3">Contact</th>
                        <th class="px-4 py-3">Gender</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-zinc-800 divide-y text-zinc-700 dark:text-white/90">
                    @forelse($patients as $patient)
                        <tr>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('patient.show', $patient) }}" class="hover:underline">{{ $patient->medical_record_number }}</a>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('patient.show', $patient) }}" class="hover:underline">{{ $patient->full_name }}</a>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $patient->contact }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $patient->gender }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $patient->email }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <flux:button :href="route('patient.show', $patient)" variant="filled">View</flux:button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-4 py-3" colspan="4">No patients found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{ $patients->links() }}
</section>
