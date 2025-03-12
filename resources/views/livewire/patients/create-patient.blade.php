<section class="w-full">
    <x-general-header title="Create Patient" description="Add a new patient" />

    <form wire:submit="createPatient" class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-6 w-full md:w-4xl">
            <!-- Full Name -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="full_name"
                    id="full_name"
                    :label="__('Full Name')"
                    type="text"
                    name="full_name"
                    required
                    autofocus
                    autocomplete="full_name"
                    placeholder="Full Name"
                />
            </div>

            <!-- Contact -->
            <div class="w-full md:w-1/3">
                    <flux:input
                    wire:model="date_of_birth"
                    id="date_of_birth"
                    :label="__('Date of Birth')"
                    type="date"
                    name="date_of_birth"
                    required
                    autofocus
                    autocomplete="date_of_birth"
                />
            </div>

            <!-- Email Address -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="email"
                    id="email"
                    :label="__('Email address')"
                    type="email"
                    name="email"
                    required
                    autofocus
                    autocomplete="email"
                    placeholder="email@example.com"
                />
            </div>
            
        </div>
       
        <div class="flex flex-col md:flex-row gap-6 w-full md:w-4xl">
            <!-- Gender -->
            <div class="w-full md:w-1/3">
                <flux:select wire:model="gender" :label="__('Gender')">
                    <flux:select.option>Choose gender...</flux:select.option>
                    <flux:select.option value="Male">Male</flux:select.option>
                    <flux:select.option value="Female">Female</flux:select.option>
                </flux:select>
            </div>

            <!-- Contact -->
            <div class="w-full md:w-1/3">
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

             <!-- Blood Type -->
             <div class="w-full md:w-1/3">
                <flux:select wire:model="blood_type" :label="__('Blood Type')">
                    <flux:select.option>Choose blood type...</flux:select.option>
                    <flux:select.option value="A+ (A positive)">A+ (A positive)</flux:select.option>
                    <flux:select.option value="A- (A negative)">A- (A negative)</flux:select.option>
                    <flux:select.option value="B+ (B positive)">B+ (B positive)</flux:select.option>
                    <flux:select.option value="B- (B negative)">B- (B negative)</flux:select.option>
                    <flux:select.option value="AB+ (AB positive)">AB+ (AB positive)</flux:select.option>
                    <flux:select.option value="AB- (AB negative)">AB- (AB negative)</flux:select.option>
                    <flux:select.option value="O+ (O positive)">O+ (O positive)</flux:select.option>
                    <flux:select.option value="O- (O negative)">O- (O negative)</flux:select.option>
                </flux:select>
            </div>
        </div>
    

        <div class="flex flex-col md:flex-row gap-6 w-full md:w-4xl">
            <!-- Allergies -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="allergies"
                    id="allergies"
                    :label="__('Allergies')"
                    type="text"
                    name="allergies"
                    autofocus
                    autocomplete="allergies"
                    placeholder="Allergies"
                />
            </div>

            <!-- Insurance Provider -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="insurance_provider"
                    id="insurance_provider"
                    :label="__('Insurance Provider')"
                    type="text"
                    name="insurance_provider"
                    autofocus
                    autocomplete="insurance_provider"
                    placeholder="Insurance Provider"
                />
            </div>

            <!-- Insurance Number -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="insurance_number"
                    id="insurance_number"
                    :label="__('Insurance Number')"
                    type="text"
                    name="insurance_number"
                    autofocus
                    autocomplete="insurance_number"
                    placeholder="Insurance Number"
                />
            </div>
        </div>

        <div class="flex flex-col md:flex-row gap-6 w-full md:w-4xl">
            <!-- Emergency Contact Name -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="emergency_contact_name"
                    id="emergency_contact_name"
                    :label="__('Emergency Contact Name')"
                    type="text"
                    name="emergency_contact_name"
                    autofocus
                    autocomplete="emergency_contact_name"
                    placeholder="Emergency Contact Name"
                />
            </div>

            <!-- Emergency Contact Number -->
            <div class="w-full md:w-1/3">
                <flux:input
                    wire:model="emergency_contact_number"
                    id="emergency_contact_number"
                    :label="__('Emergency Contact Number')"
                    type="text"
                    name="emergency_contact_name"
                    autofocus
                    autocomplete="emergency_contact_number"
                    placeholder="Emergency Contact Number"
                />
            </div>

            <!-- Empty div -->
            <div class="w-full md:w-1/3">

            </div>
        </div>

        <div class="flex w-full md:w-4xl items-center justify-center">
            <flux:button type="submit" variant="primary" class="w-full md:w-2/3">
                {{ __('Create New Patient') }}
            </flux:button>
        </div>
    </form>
</section>