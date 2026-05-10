<div id="modal" data-dialog-backdrop="modal" data-dialog-backdrop-close="true"
    class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-background-blur bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300 p-5 overflow-auto">
    <div data-dialog="modal" class="relative m-4 p-8 min-w-full md:min-w-[40%] max-w-[55%] rounded-2xl bg-background-primary shadow-sm">
        {{ $slot }}
    </div>
</div>
