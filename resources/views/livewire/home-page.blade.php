<div>
    <form wire:submit="save">
        {{ $this->form }}
        
        <div class="flex justify-end">
        <x-filament::button wire:loading.attr="disabled" wire:loading.class="opacity-70 cursor-wait" type="submit" class="my-4 ">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-spin filament-button-icon w-5 h-5 mr-1 -ml-2 rtl:ml-1 rtl:-mr-2" wire:loading.delay="wire:loading.delay" >
                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
                </svg>
                &nbsp;&nbsp;Save&nbsp;&nbsp;
            </x-filament::button>
        </div>
    </form>
    
    <x-filament-actions::modals />
</div>