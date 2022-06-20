<x-app-layout>
	<x-slot name="title">Artikel</x-slot>

	<x-card>
		<x-slot name="title">All Article</x-slot>
        <section class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 class="font-weight-bold text-center">{{$show->judul}}</h3>
                <br><br><br>
                <p>{{$show->text}}</p>
            </div>
            <div class="col-sm-2"></div>
        </section>
	</x-card>

</x-app-layout>
