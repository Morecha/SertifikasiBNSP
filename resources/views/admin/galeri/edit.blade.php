<x-app-layout>
	<x-slot name="title">New Article</x-slot>

	{{-- show alert if there is errors --}}
	<x-alert-error/>

	<x-card>
		<form action="{{route('admin.galery.update', $edit->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
                <div class="col-sm-6">
                    <x-input type="file" text="Pictures" name="gambar" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="putanginamo">Description</label>
                        <textarea class="form-control" id="putanginamo" rows="4" name="deskripsi">{{$edit->deskripsi}}</textarea>
				    </div>
                </div>
			</div>
			<x-button type="primary" text="Submit" for="submit" />
		</form>
	</x-card>
</x-app-layout>
