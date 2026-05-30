@props(['subtitle' => null, 'title', 'description' => null, 'alignment' => 'left'])

<div class="mb-12 {{ $alignment === 'center' ? 'text-center' : '' }} {{ $alignment === 'right' ? 'text-right' : '' }}">
    @if($subtitle)
        <span class="text-transparent bg-clip-text bg-gradient-brand font-semibold tracking-wider uppercase text-sm mb-3 block">
            {{ $subtitle }}
        </span>
    @endif
    
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-white mb-6 leading-tight">
        {{ $title }}
    </h2>
    
    @if($description)
        <p class="text-gray-400 text-lg md:text-xl max-w-3xl {{ $alignment === 'center' ? 'mx-auto' : '' }} leading-relaxed">
            {{ $description }}
        </p>
    @endif
</div>