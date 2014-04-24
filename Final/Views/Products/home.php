
<h2> This is the home page</h2>

<div id="categories">
	
</div>
<div id="holder"></div>

<script type="text/template" id="product-tmpl">
	<div class="row">
		{{#each data}}
		<div class="col-md-4">
			<div class="well well-lg clearfix">
				<img src="{{Picture_Url}}" class="img-thumbnail pull-right" alt="140x140" style="width: 140px; height: 140px;" >
				<h5>{{Name}}</h5>
				<span>${{Price}}</span>
				<a class="btn btn-success">Purchase</a>
			</div>
		</div>
		{{/each}}
	</div>	
</script>

<script type="text/temple" id="categories-tmpl">
	<ul class="nav nav-pills">
		{{#each data}}
	  <li ><a href="?action=index&format=json&category_id={{id}}">{{Name}}</a></li>
	  {{/each}}
	</ul>
</script>

	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
		<script type="text/javascript">
			$(function(){
				
				var tmpl = Handlebars.compile($("#product-tmpl").html());
				var categoriesTmpl = Handlebars.compile($("#categories-tmpl").html());
				
				$.get('?action=categories&format=json', function(data){
					$("#categories").html(categoriesTmpl(data));
				}, 'json'
				);
				
				$("body").on("click",".nav a", function(){
					$(".active").removeClass("active");
					$(this).closest("li").addClass("active");
					$.get(this.href, function(data){
						$("#holder").html(tmpl(data));
					}, 'json'
					);
					return false;
				});
			});
		</script>
	<? } ?>