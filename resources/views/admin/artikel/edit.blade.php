<x-app-layout>
	<x-slot name="title">New Article</x-slot>

	{{-- show alert if there is errors --}}
	<x-alert-error/>

	<x-card>
		<form action="{{route('admin.artikel.update',$edit->id)}}" method="post">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<x-input text="Judul" name="judul" type="text" value="{{$edit->judul}}"/>
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
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Article</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" name="text">{{$edit->text}}</textarea>
				    </div>
                </div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />

		</form>
	</x-card>
</x-app-layout>
