<div class="flex flex-col items-center gap-3 w-50 mx-auto lg:mt-5">
    <label for="image" class="cursor-pointer">
        <img src="/images/preview-default.png" id="preview"
            class="w-32 h-32 object-cover rounded-xl shadow-md hover:opacity-80 transition">
    </label>

    <label for="image" class="flex items-center gap-2 text-sm text-white cursor-pointer hover:brightness-90">
        <i class="iconoir-upload text-lg"></i>

        Substituir imagem
    </label>

    <input id="image" type="file" name="image" accept="image/*" class="hidden">

    @if ($errors->has('image'))
        <x-warning-message variant='error'>
            {{ $errors->first('image') }}
        </x-warning-message>
    @endif

</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');
        const placeholder = document.getElementById('placeholder');

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
            placeholder.classList.add('hidden');
        }
    });
</script>
