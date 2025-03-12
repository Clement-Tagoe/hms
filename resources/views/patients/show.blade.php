<x-layouts.app>
    <div class="w-full">
        <x-general-header title="Patient" description="Patient Details" />

        <div class="flex flex-col md:flex-row gap-6 max-w-7xl">
            <div class="w-full md:w-2/3 p-6 bg-zinc-50 dark:bg-zinc-700 shadow-lg rounded-lg">

                <h1 class="font-semibold text-zinc-600 dark:text-white/90 mb-4">Personal Information</h1>

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
            </div>

            <div class="w-full md:w-1/3 p-6 bg-zinc-50 dark:bg-zinc-700 shadow-lg rounded-lg">

                <h1 class="font-semibold text-zinc-600 dark:text-white/90 mb-4">Latest Patient Vitals</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Medical Record Number -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Temperature</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->latestVital->temperature ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Full Name -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Pulse</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{  $patient->latestVital->pulse ?? 'N/A' }}</span>
                    </div>
    
                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Blood Pressure</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->latestVital->blood_pressure ?? 'N/A' }}</span>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Respiratory Rate</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->latestVital->respiratory_rate ?? 'N/A' }}</span>
                    </div>

                    <!-- Date of Birth -->
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold text-zinc-500 dark:text-white/80">Date & Time</span>
                        <span class="text-md text-zinc-900 dark:text-white/90">{{ $patient->latestVital->created_at ?? 'N/A'}}</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-layouts.app>