<div>
    <x-title id="modal-title">Adicionar link</x-title>

    <form id="form-modal" method="POST" action="{{ route('links.store') }}" enctype="multipart/form-data"
        class="pt-10 flex flex-col-reverse md:flex-row gap-8">

        @csrf
        <input type="hidden" name="_method" id="form-method" value="POST">

        <div>
            <div class="flex flex-col md:flex-row gap-3">
                <x-input id="input-title" name="title" placeholder="Digite o nome do conteúdo"
                    label="Título do link" />

                <x-input id="input-platform" name="stream_plataform" placeholder="Onde você está assistindo?"
                    label="Plataforma de streaming" />
            </div>

            <x-input id="input-url" name="url" placeholder="Cole a URL do conteúdo" label="URL " />
        </div>

        <x-input-image id="input-image" :src="asset('images/preview-link.png')" label="Alterar imagem" />
    </form>

    <div class="flex shrink-0 flex-wrap items-center pt-11 gap-3.5 justify-end">
        <x-button type="button" variant="dark" data-dialog-close="true">
            Voltar
        </x-button>
        <x-button form="form-modal" type="submit" data-dialog-close="true">
            Salvar
        </x-button>
    </div>
</div>
