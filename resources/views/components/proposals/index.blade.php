<x-ui.card>
    <div class="flex items-center justify-between pb-4">
        <div class="flex flex-col">
            <h2 class="text-[20px] leading-9 text-white">
                Propostas
            </h2>
            <div class="text-[12px] text-[#8C8C9A]">
                Publicado {{ $this->lastProposalTime() }}
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <x-ui.icons.people-group class="h-[18px] w-[18px]" />
            <span>{{ $proposals->total() }}</span>
        </div>
    </div>

    <div class="py-4">
        <div class="flex flex-col gap-7">
            @foreach ($proposals as $proposal)
                <x-proposals.item :$proposal :position="$loop->index" />
            @endforeach
        </div>

        @if ($proposals->hasMorePages())
            <div class="mt-6">
                <button wire:click="loadMore"
                    class="w-full rounded-[4px] bg-[#181826] px-8 py-3 font-bold uppercase tracking-wide text-white transition duration-300 ease-in-out hover:bg-[#373751]">
                    Carregar Mais
                </button>
            </div>
        @endif
    </div>

</x-ui.card>
