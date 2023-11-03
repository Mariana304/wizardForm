<div class="max-w-full mx-auto p-6 bg-white rounded-md shadow">
    <div class="mb-8 px-32">
        <div class="text-center mb-4">
            <div class="relative">

                <div class="w-full h-2 p-2   absolute  top-2">
                    <div class="border-2 bg-[#F4F4F4]">
                        <div class="h-1 bg-[#D75672] border-2 border-[#D75672]" style="width: {{ $step * 33.33 }}%;">
                        </div>
                    </div>
                </div>
                <div class="w-full flex items-center justify-between relative">
                    <div class="w-9 h-9 rounded-full relative {{ $step >= 1 ? 'border-2 bg-white border-[#D75672] ' : 'bg-gray-300' }}">
                        <p class="text-xl font-light mt-1 {{ $step >= 1 ? 'text-slate-100' : 'text-gray-500' }}">1</p>
                    </div>
                    <div class="w-9 h-9  rounded-full   relative {{ $step >= 2 ? 'bg-[#D75672] ' : 'bg-[#DDDDDD]' }}">
                        <p class="text-xl font-light mt-1 {{ $step >= 2 ? 'text-slate-100' : 'text-gray-500' }}">2</p>

                    </div>
                    <div class="w-9 h-9   rounded-full  relative {{ $step >= 3 ? 'bg-[#D75672] ' : 'bg-[#DDDDDD]' }}">
                        <p class="text-xl font-light mt-1 {{ $step >= 3 ? 'text-slate-100' : 'text-gray-500' }}">3</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <form wire:submit.live="save">
        @if ($step === 1)
            <div>
                <label for="campo1" class="block font-semibold mb-2">campo1</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.1.campo1">
                @error('data.1.campo1')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="campo2" class="block font-semibold mb-2">campo2</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.2.campo2">
                @error('data.2.campo2')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="campo3" class="block font-semibold mb-2">campo3</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.3.campo3">
                @error('data.3.campo3')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="campo4" class="block font-semibold mb-2">campo4</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.4.campo4">
                @error('data.4.campo4')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="campo5" class="block font-semibold mb-2">campo5</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.5.campo5">
                @error('data.5.campo5')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                {{-- Editor de texto --}}
                <div class="mt-6">
                    <input id="x" type="hidden" value="{{ $content }}" name="content">
                    <trix-editor input="x"></trix-editor>
                </div>
                @error('content')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

            </div>
        @elseif ($step === 2)
            <label for="campo6" class="block font-semibold mb-2">campo6</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.6.campo6">
            @error('data.6.campo6')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo7" class="block font-semibold mb-2">campo7</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.7.campo7">
            @error('data.7.campo7')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo8" class="block font-semibold mb-2">campo8</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.8.campo8">
            @error('data.8.campo8')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo9" class="block font-semibold mb-2">campo9</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.9.campo9">
            @error('data.9.campo9')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo10" class="block font-semibold mb-2">campo10</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.10.campo10">
            @error('data.10.campo10')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        @elseif ($step === 3)
            <label for="campo11" class="block font-semibold mb-2">campo11</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.11.campo11">
            @error('data.11.campo11')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo12" class="block font-semibold mb-2">campo12</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.12.campo12">
            @error('data.12.campo12')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo13" class="block font-semibold mb-2">campo13</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.13.campo13">
            @error('data.13.campo13')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror


            <label for="campo14" class="block font-semibold mb-2">campo14</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.14.campo14">
            @error('data.14.campo14')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <label for="campo15" class="block font-semibold mb-2">campo15</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model.live="data.15.campo15">
            @error('data.15.campo15')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        @endif
        @if ($step >= 3)
            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-lime-500 text-white p-2 rounded-md">Enviar</button>
            </div>
        @endif
    </form>

    <div class="mt-4 flex justify-between">
        @if ($step > 1)
            <button wire:click="previousStep" class="bg-[#D75672] text-white p-2 rounded-md">Anterior</button>
        @endif
        <div></div>
        @if ($step < 3)
            <button wire:click="nextStep" id="recargarInput"
                class="bg-[#FD315D] text-white p-2 rounded-md">Siguiente</button>
        @endif
    </div>

    @if ($success === true)
        <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-green-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="mt-6 text-2xl font-semibold text-center text-gray-800">El formulario fue diligenciado con éxito
            </h2>
        </div>
    @endif
</div>

@push('scripts')
    <script>
        const trixEditor = document.getElementById('x');
        addEventListener('trix-blur', (event) => {
            @this.set('content', trixEditor.getAttribute('value'));
        });
    </script>
@endpush