

<!-- Category -->

<div class='category-content'>
	Filter Pencarian
	<!--
	( [total] => 520 [currentPageTotal] => 250 [time] => 5ms 
	[result] => Array ( [0] => 
	stdClass Object ( [year] => 2013 [unit] => 4.12.01.00.0000.000 
	[SKPDNama] => Sudin Perindustrian dan Energi - JAKSEL 
	[urusan] => 2.03 [namaUrusan] => Energi dan Sumber Daya Mineral 
	[program] => 10 
	[namaProgram] => Program Pengembangan Penerangan Jalan dan Sarana Umum 
	[noKegiatan] => 1 
	[namaKegiatan] => Pembangunan Penerangan Jalan Penghubung Jl.Kahfi II 
	[nilai] => 200,000,000 [kegiatanId] => 23247 
	[SKPDKode2013] => 2.07.009 [programKode] => 2.03.01 
	[realisasi] => 10,900,000 [persenRealisasi] => 5.45% 
	[id] => 2013.2.03.10.1.23247 ) [1] =>
	-->
	<div>
		<p class=''>{{-- count($category_data->result); --}}</p>
		<p class=''>{{-- print_r($category_data); --}}</p>
	</div>	

	<div >
				<form>
					<input id="filterTable-input" data-type="search"></input>
				</form>
				<table data-role="table" id="movie-table" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
					<thead>
						<tr>
							<th data-priority="1">SKPD : </th>
							<th data-priority="2">Urusan : </th>
							<th data-priority="3">Program : </th>
							<th data-priority="4">Kegiatan : </th>
							<th data-priority="5">Tahun : </th>
							<th data-priority="6">Nilai : </th>
							<th data-priority="7">Realisasi : </th>
							<th data-priority="persist">Selengkapnya</th>
						</tr>
						</thead>
						<tbody>
							
							@foreach( $category_data->result as $result)
							<tr>
								<th>{{ $result->SKPDNama }}</th>
								<td>{{ $result->namaUrusan }}</td>
								<td>{{ $result->namaProgram }}</td>
								<td>{{ $result->namaKegiatan }}</td>
								<td>{{ $result->year }}</td>
								<td>Rp. {{ $result->nilai }} </td>
								<td>{{ $result->persenRealisasi }}</td>
								<td><a href="#" data-rel="external">Detail</a></td></td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
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



