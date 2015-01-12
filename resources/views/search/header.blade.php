<div class="row">
	<div class="search-box">
		<div class="col-md-5">
			@include("search._advanced-search")
		</div>

		<div class="col-md-7">
			<div class="combined-search-box">
				@include("search._simple-search")
				@include("search._manufacturer_search")
			</div>
		</div>
	</div>
</div>