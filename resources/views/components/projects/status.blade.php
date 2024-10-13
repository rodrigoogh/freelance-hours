@props(['status'])
<span
    {{ $attributes->class([
        'rounded-full px-[14px] py-[6px] text-center text-[12px] font-bold uppercase tracking-wide',
        'bg-[#C0F7B4] text-[#1D8338]' => $status == App\ProjectStatus::Open,
        'bg-[#FECDD3] text-[#881337]' => $status == App\ProjectStatus::Closed,
    ]) }}>
    {{ $status->label() }}
</span>
