<style type="text/css">
	.categories {
		margin-bottom: 10px;
	}
	.label-danger{ background-color: maroon; }
</style>
<div ng-app="homepageApp">
	
	<div class="row" ng-controller="ItemListCtrl" >
		<div ng-repeat="item in items" class=" col-md-4">
			<div class="panel panel-info">
			  <div class="panel-heading">
				<code class="pull-right">${{item.Price}}</code>
			    <h3 class="panel-title">{{item.Name}}</h3>
			  </div>
			  <div class="panel-body">
					<img ng-src="{{item.Picture_Url}}" class="img-thumbnail pull-right" alt="140x140" style="width: 140px; height: 140px;" >
					<p>{{item.Description}}</p>
					<a class="btn btn-success">Purchase</a>
			  </div>
			</div>
		</div>
	</div>	
</div>


	<? function JavaScripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular.min.js"></script>
	<script src="../Content/js/controllers.js"></script>
		<script type="text/javascript">
			$(function(){
				
			});
		</script>
	<? } ?>
