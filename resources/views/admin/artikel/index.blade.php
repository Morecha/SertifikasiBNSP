<x-app-layout>
	<x-slot name="title">Artikel</x-slot>
    <x-slot name="head">
        <style>
            .card-text{ overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 3; /* number of lines to show */
                        -webkit-box-orient: vertical; }
        </style>
    </x-slot>

	<x-card>
		<x-slot name="title">All Article</x-slot>
        @can('artikel')
        <x-slot name="option">
            <a href="{{route('admin.artikel.create')}}" class="btn btn-success">
                <i class="fas fa-plus"></i>
            </a>
        </x-slot>
        @endcan
        <section class="row">
            @foreach ($isi as $isian)
                <div class="col-4">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">{{$isian->judul}} </h5>
                            <p class="card-text">{{$isian->deskripsi}}</p>
                            <a href="{{route('admin.artikel.show', $isian->id)}}">show more..</a>
                            @can('artikel')
                                <form action="{{route('admin.artikel.delete', $isian->id)}}" method="post" class="float-sm-right">
                                    @csrf
                                    <button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
                                </form>
                                <a href="{{route('admin.artikel.edit', $isian->id)}}" class="btn btn-primary mr-1 float-sm-right"><i class="fas fa-edit"></i></a>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
	</x-card>

	<x-slot name="script">
        <script>
			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus artikel?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>
