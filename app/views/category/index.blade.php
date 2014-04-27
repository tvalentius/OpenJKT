

<!-- Category -->

<div class='category-content'>
	APBD berdasarkan nama {{$category_name}}

	<div>
		
		<p class=''>{{-- print_r($category_data); --}}</p>
		
		@foreach($category_data->result as $key)
		<!--
		
		-->
		@if($category_name == 'skpd')
		
		<form action='{{ url("/category/list/".$key->SKPDKode."/skpd") }}' method='get'>
			<input type="submit" value="{{$key->SKPDNama}}">
		</form>
		@endif

		@if($category_name == 'program')
		<form action='{{ url("/category/list/".$key->program."/program") }}' method='get'>
			<input type="submit" value="{{$key->namaProgram}}">
		</form>
		@endif

		@if($category_name == 'urusan')
		<form action='{{ url("/category/list/".$key->urusan."/urusan") }}' method='get'>
			<input type="submit" value="{{$key->namaUrusan}}">
		</form>
		@endif

		@endforeach
	</div>	

	{{--
	@if ($specification->type == "string") 
		{{$specification->value}}
	@elseif ($specification->type == "numeric")
		{{number_format($specification->value,0,',','.')}}
	@elseif ($specification->type == "currency")
		IDR {{number_format($specification->value,0,',','.')}}
	@elseif ($specification->type == "percentage")
		{{number_format($specification->value,2,',','.')}}%
	@elseif ($specification->type == "percentage,minimum")
		<?php $value = explode(",",$specification->value) ?>									
		{{number_format($value[0],2,',','.')}}%  (IDR {{number_format($value[1],0,',','.')}} min)
	@elseif ($specification->type == "percentage,maximum")
		<?php $value = explode(",",$specification->value) ?>									
		{{number_format($value[0],2,',','.')}}% (IDR{{number_format($value[1],0,',','.')}} min)
	@else
		{{$specification->value}}
	@endif

	--}}
</div>


<script type="text/javascript">
	

</script>



