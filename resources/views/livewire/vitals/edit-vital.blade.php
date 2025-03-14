<section class="w-full">
    <x-general-header title="Patient Vitals" description="Add a new patient vitals" />

    <form wire:submit="updateVital" class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-6 w-full md:w-3xl">
            <!-- Temperature -->
            <div class="w-full md:w-1/2">
                <flux:input
                    wire:model="temperature"
                    id="temperature"
                    :label="__('Temperature')"
                    type="text"
                    name="temperature"
                    required
                    autofocus
                    autocomplete="temperature"
                    placeholder="Temperature"
                />
            </div>

            <!-- Pulse -->
            <div class="w-full md:w-1/2">
                    <flux:input
                    wire:model="pulse"
                    id="pulse"
                    :label="__('Pulse')"
                    type="text"
                    name="pulse"
                    required
                    autofocus
                    autocomplete="pulse"
                    placeholder="Pulse"
                />
            </div>
        </div>
       
        <div class="flex flex-col md:flex-row gap-6 w-full md:w-3xl">
            <!-- Blood Pressure -->
            <div class="w-full md:w-1/2">
                <flux:input
                    wire:model="blood_pressure"
                    id="blood_pressure"
                    :label="__('Blood Pressure')"
                    type="blood_pressure"
                    name="blood_pressure"
                    required
                    autofocus
                    autocomplete="blood_pressure"
                    placeholder="Blood Pressure"
                />
            </div>
               
            
            <!-- Respiratory Rate -->
            <div class="w-full md:w-1/2">
                <flux:input
                    wire:model="respiratory_rate"
                    id="respiratory_rate"
                    :label="__('Respiratory Rate')"
                    type="respiratory_rate"
                    name="respiratory_rate"
                    autofocus
                    autocomplete="respiratory_rate"
                    placeholder="Respiratory Rate"
                />
            </div>
        </div>

        <div class="flex w-full md:w-3xl items-center justify-center">
            <flux:button type="submit" variant="primary" class="w-full md:w-2/3">
                {{ __('Update Patient Vitals') }}
            </flux:button>
        </div>
    </form>
</section>

