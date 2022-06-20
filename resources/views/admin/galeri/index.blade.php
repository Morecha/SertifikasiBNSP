<x-app-layout>
	<x-slot name="title">Galery Foto</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Picture</x-slot>

        <x-slot name="option">
            <a href="{{route('admin.galery.create')}}" class="btn btn-success">
                <i class="fas fa-plus"></i>
            </a>
        </x-slot>

        <section class="row">
            @foreach ($galery as $galeri)
                <div class="col-4">
                    <div class="card mb-5">
                        <img class="card-img-top" src="{{asset('storage/galery/'.$galeri->gambar)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$galeri->deskripsi}}</h5>
                            {{-- @can('galery-foto') --}}
                            <div class="row">
                                <div class="col text-center">
                                   <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup">dont touch me</a>
                                    {{-- Popup --}}
                                   <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">{{$galeri->deskripsi}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="card-img-top img-fluid" src="{{asset('storage/galery/'.$galeri->gambar)}}" alt="Card image cap">
                                        </div>
                                        <div class="modal-footer">
                                            @can('galery-foto')
                                                <a href="{{route('admin.galery.edit', $galeri->id)}}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                                <form action="{{route('admin.galery.delete', $galeri->id)}}" method="post" style="display: inline-block;">
                                                    @csrf
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            @endcan
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                            </div>
                            {{-- @endcan --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </section>


	</x-card>

	<x-slot name="script">
	</x-slot>
</x-app-layout>
