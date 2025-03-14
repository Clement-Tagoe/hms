<x-layouts.app>
    <div class="w-full">
        <x-general-header title="Patient" description="Patient Details" />

        <div class="flex flex-col md:flex-row gap-6 max-w-7xl">
            <div class="w-full md:w-2/3 p-6 bg-zinc-50 dark:bg-zinc-700 shadow-lg rounded-lg">

                
                <flux:heading size="lg" class="mb-4">Personal Information</flux:heading>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Medical Record Number -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Medical Record Number</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->medical_record_number }}</span>
                    </div>
    
                    <!-- Full Name -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Full Name</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->full_name }}</span>
                    </div>
    
                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Date of Birth</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ Carbon\Carbon::parse($patient->date_of_birth)->format('F j, Y'); }}</span>
                    </div>
    
                    <!-- Email -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Email</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->email ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Gender -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Gender</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->gender ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Contact -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Contact Number</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->contact ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Blood Type -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Blood Type</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->blood_type ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Insurance Provider -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Insurance Provider</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->insurance_provider ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Insurance Number -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Insurance Number</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->insurance_number ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Emergency Contact Name -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Emergency Contact Name</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->emergency_contact_name ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Emergency Contact Number -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Emergency Contact Number</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->emergency_contact_number ?? 'N/A' }}</span>
                    </div>
                </div>

                <div class="flex justify-end mt-4 mb-2">
                    <flux:button :href="route('patient.edit', $patient)" icon="pencil-square" variant="primary">Edit</flux:button>
                </div>
            </div>


            <div class="md:w-1/3 p-6 bg-zinc-50 dark:bg-zinc-700 shadow-lg rounded-lg">

                <flux:heading size="lg" class="mb-4">Latest Patient Vitals</flux:heading>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Medical Record Number -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Temperature</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $latestVital->temperature ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Full Name -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Pulse</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{  $latestVital->pulse ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Blood Pressure</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $latestVital->blood_pressure ?? 'N/A' }}</span>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Respiratory Rate</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $latestVital->respiratory_rate ?? 'N/A' }}</span>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Date & Time</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $latestVital->created_at ?? 'N/A'}}</span>
                    </div>
                </div>

                <div class="flex flex-col space-y-2 md:space-y-0 md:flex-row justify-between mt-4 md:mt-20">
                    <flux:button :href="route('create-vital', $patient)" icon="plus" >Add New</flux:button>
                    @if ($latestVital)
                        <flux:button :href="route('edit-vital', $latestVital)" icon="pencil-square" variant="primary">Edit</flux:button>
                    @else
                        <flux:button icon="pencil-square" variant="primary">Edit</flux:button>
                    @endif
                </div>

            </div>
        </div>


        <div class="my-12">

            <div class="flex flex-col md:flex-row justify-between">
                <flux:heading size="lg" class="pb-3">Treatments</flux:heading>
                <flux:button icon="plus" variant="primary">Add Treatment</flux:button>
            </div>
            

            <flux:separator variant="subtle" />

            <div class="mt-6 mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 text-left text-sm font-semibold uppercase tracking-wide text-zinc-500 dark:text-white/80">
                                <th class="px-4 py-3">Medical Record Number</th>
                                <th class="px-4 py-3">Diagnosis</th>
                                <th class="px-4 py-3">Medication</th>
                                <th class="px-4 py-3">Treated By:</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-zinc-800 divide-y text-zinc-700 dark:text-white/90">
                            @forelse($treatments as $treatment)
                                <tr>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $patient->medical_record_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $treatment->diagnosis }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $treatment->medication }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $treatment->user->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $treatment->created_at }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <flux:button variant="filled">View</flux:button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-4 py-3" colspan="4">No treatments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{$treatments->links()}}
        </div>
        

        <div class="my-12">

            <flux:heading size="lg" class="pb-3">Vitals</flux:heading>

            <flux:separator variant="subtle" />

            <div class="mt-6 mb-8 w-full overflow-hidden rounded-lg border shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 text-left text-sm font-semibold uppercase tracking-wide text-zinc-500 dark:text-white/80">
                                <th class="px-4 py-3">Medical Record Number</th>
                                <th class="px-4 py-3">Temperature</th>
                                <th class="px-4 py-3">Pulse</th>
                                <th class="px-4 py-3">Blood Pressure</th>
                                <th class="px-4 py-3">Respiratory Rate</th>
                                <th class="px-4 py-3">Date</th>
                                <th class="px-4 py-3"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-zinc-800 divide-y text-zinc-700 dark:text-white/90">
                            @forelse($vitals as $vital)
                                <tr>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $patient->medical_record_number }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $vital->temperature }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $vital->pulse }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $vital->blood_pressure }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $vital->respiratory_rate }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $vital->created_at }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <flux:button variant="filled">View</flux:button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-4 py-3" colspan="4">No vitals found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{$vitals->links()}}
        </div>
    </div>
</x-layouts.app>