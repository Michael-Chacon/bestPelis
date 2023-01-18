<div>
    <form wire:submit.prevent='saveComments'>
        <x-text-input id="comment" class="block mt-1 w-full text-black" placeholder="Deja tu comentario" type="text" wire:model="comment" :value="old('comment')"/>
        {{-- <input type="hidden" wire:model="problem" value="{{ $modelo }}"> --}}
        <x-input-error :messages="$errors->get('comment')" class="mt-2" />
        <x-primary-button class="w-full bg-purple-900 mt-2">
            <span class="text-center">
                {{ __('Comment') }}
            </span>
        </x-primary-button>
    </form>
</div>
