@props(['proposal', 'position'])
<div class="flex items-center justify-between">
    <div class="flex items-center space-x-2">
        <div>
            <x-proposals.position :$position :status="$proposal->position_status" />
        </div>
        <div>
            <div class="w-[140px] truncate text-[14px] font-bold tracking-wide text-white">
                {{ $proposal->email }}
            </div>
            <div class="text-[12px] text-[#8C8C9A]">
                Enviado {{ $proposal->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
    <div
        class="flex items-center space-x-2 whitespace-nowrap rounded-full border border-[#1E1E2C] bg-[#181826] px-[8px] py-[4px] text-[12px] font-bold uppercase text-[#C3C3D1]">
        <x-ui.icons.clock class="h-[18px] w-[18px]" />
        <span>{{ str_pad($proposal->hours, 2, '0', STR_PAD_LEFT) }} horas</span>
    </div>
</div>
