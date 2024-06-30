<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none']) }}>
    {{ $slot }}
</button>
