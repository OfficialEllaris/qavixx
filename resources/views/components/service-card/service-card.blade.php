@props(['title', 'description', 'icon', 'href', 'active' => false])

@php
    // Determine classes based on active state to simulate a permanent 'hover/focus' state
    $cardClasses = $active ? 'border-qavixx-copper/30 bg-white/[0.03] shadow-[0_0_30px_rgba(226,161,84,0.05)] -translate-y-1' : 'group-hover:-translate-y-1';
    $glowClasses = $active ? 'opacity-100 bg-qavixx-copper/30' : 'opacity-0 group-hover:opacity-100 bg-qavixx-copper/20';
    $iconWrapperClasses = $active ? 'scale-110 text-qavixx-copper border-qavixx-copper/40 shadow-[0_0_15px_rgba(226,161,84,0.2)]' : 'text-gray-400 group-hover:scale-110 group-hover:text-qavixx-copper group-hover:border-qavixx-copper/30';
    $titleClasses = $active ? 'text-transparent bg-clip-text bg-gradient-brand-hover' : 'text-white group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-brand-hover';
    $exploreClasses = $active ? 'opacity-100 translate-x-0' : 'opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0';
    $innerShine = $active ? 'opacity-100 translate-y-0' : 'opacity-0 group-hover:opacity-100 translate-y-full group-hover:translate-y-0';
@endphp

<a href="{{ $href }}" wire:navigate class="group block h-full outline-none">
    <div class="glass-panel-interactive rounded-2xl p-8 h-full flex flex-col relative overflow-hidden transition-all duration-500 transform group-focus-visible:ring-2 group-focus-visible:ring-qavixx-copper {{ $cardClasses }}">
        
        <!-- Animated Background Glow -->
        <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full blur-[60px] transition-opacity duration-700 pointer-events-none {{ $glowClasses }}"></div>

        <div class="mb-8 relative z-10">
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-white/[0.08] to-white/[0.02] border border-white/10 flex items-center justify-center transition-all duration-500 shadow-lg relative overflow-hidden {{ $iconWrapperClasses }}">
                <!-- Inner shine on icon box -->
                <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent transition-all duration-700 {{ $innerShine }}"></div>
                <x-dynamic-component :component="'lucide-'.$icon" class="w-6 h-6 relative z-10" />
            </div>
        </div>
        
        <h3 class="text-xl font-heading font-semibold mb-4 relative z-10 transition-colors duration-300 tracking-wide {{ $titleClasses }}">
            {{ $title }}
        </h3>
        
        <p class="text-gray-400/90 text-sm leading-relaxed flex-grow relative z-10 font-light">
            {{ $description }}
        </p>

        <div class="mt-8 flex items-center text-qavixx-copper text-xs font-semibold tracking-widest uppercase relative z-10 transition-all duration-500 {{ $exploreClasses }}">
            Explore 
            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </div>
    </div>
</a>