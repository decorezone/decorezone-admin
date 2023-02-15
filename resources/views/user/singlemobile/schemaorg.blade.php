<script type="text/javascript">
	{
		"@context": "http://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [{
			"@type": "ListItem",
			"position": 1,
			"item": {
				"@id": "http://mobileinpakistan.com",
				"name": "Mobile Prices"
			}
		},{
			"@type": "ListItem",
			"position": 2,
			"item": {
				"@id": "http://mobileinpakistan.com/{{$mob->brand_name}}",
				"name": "{{$mob->brand_name}} Phones"
			}
		},{
			"@type": "ListItem",
			"position": 3,
			"item": {
				"@id": "http://mobileinpakistan.com/{{$mob->brand_name.'/'.$mob->mobile_url}}",
				"name": "{{$mob->brand_name}} {{$mob->mobile_name}} Price in Pakistan"
			}
		}]
	}
</script>
<script type="application/ld+json">
	{
		"@context": "http://schema.org/",
		"@type": "Product",
		"category" : "Mobile Phones",
		"name": "{{$mob->brand_name}} {{$mob->mobile_name}}",
		"url"  : "{{url($mob->brand_name.'/'.$mob->mobile_url)}}",
		"image": "{{ URL::asset('mobile_pics/'.$mob->pic_folder.'/'.$mob->main_pic) }}",
		"description": "",
		"sku": "{{$mob->brand_name}} {{$mob->mobile_name}}",
		"mpn": "{{$mob->mobile_name}}",
		"model": " {{$mob->mobile_name}}",
		"brand": {
		"@type": "Thing",
		"name": "{{$mob->brand_name}}"
	},
	"aggregateRating": {
	"@type": "AggregateRating",
	"ratingValue": "4.5",
	"reviewCount": "18"
},
"offers": {
"@type": "Offer",
"url"  : "{{url($mob->brand_name.'/'.$mob->mobile_url)}}",
"priceCurrency": "PKR",
"Price": {{$mob->pkr_price}},
"availability": "http://schema.org/InStock",
"seller": {
"@type": "Organization",
"name": "{{$mob->brand_name}}"
}
}
}

</script>