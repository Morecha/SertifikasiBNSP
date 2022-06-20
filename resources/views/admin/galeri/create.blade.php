<x-app-layout>
	<x-slot name="title">Input Picture</x-slot>

    <x-alert-error/>
    <section class="row">
        <div class="col-sm-8">
        <x-card>
            <form action="{{ route('admin.galery.create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm-9">
                        <x-input type="file" text="Pictures" name="gambar" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label for="putanginamo">Description</label>
                            <textarea class="form-control" id="putanginamo" rows="4" name="deskripsi"></textarea>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <x-button type="primary" for="submit" text="Submit" />
                </div>
            </form>
        </x-card>
        </div>
    </section>
    <x-slot name="script">
        <script>
            $('#check-all').on('change', function(){
                if($(this).prop('checked')) {
                    $('input:checkbox').prop('checked', true)
                } else {
                    $('input:checkbox').prop('checked', false)
                }
            })
        </script>
    </x-slot>
</x-app-layout>
