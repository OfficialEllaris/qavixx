@props(['value', 'label', 'prefix' => '', 'suffix' => ''])

<div class="text-center p-6 glass-panel rounded-2xl" 
     x-data="{ count: 0, target: {{ $value }}, start: false }" 
     x-intersect.once="start = true; 
                      let duration = 2000;
                      let startTimestamp = null;
                      let step = (timestamp) => {
                          if (!startTimestamp) startTimestamp = timestamp;
                          let progress = Math.min((timestamp - startTimestamp) / duration, 1);
                          // easeOutExpo
                          let ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                          count = Math.floor(ease * target);
                          if (progress < 1) {
                              window.requestAnimationFrame(step);
                          } else {
                              count = target;
                          }
                      };
                      window.requestAnimationFrame(step);">
    <div class="text-4xl md:text-5xl font-heading font-bold text-transparent bg-clip-text bg-gradient-brand mb-2">
        {{ $prefix }}<span x-text="count">0</span>{{ $suffix }}
    </div>
    <div class="text-gray-400 font-medium uppercase tracking-widest text-sm">
        {{ $label }}
    </div>
</div>