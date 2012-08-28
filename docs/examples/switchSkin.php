<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="gbk">
    <title>Bootstrap, from Twitter</title>
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/smoke.css" rel="stylesheet">
    <link href="../assets/css/page.css" rel="stylesheet">
  </head>
  <body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->

<div class="container">

<table id="colorTable" class="table">
	<thead>
		<tr style="font-size:14px;">
			<th>#</th><th>皮肤名称</th><th>色板</th><th>市场</th><th>操作</th>
		</tr>
	</thead>
	<tbody></tbody>
	<tfoot>
		<tr>
			<td colspan="5">
				<div class="btn-group span4">
					<a id="J_CreateSkin" href="#myModal" class="btn btn-primary">创建皮肤</a>
					<a id="J_CreateColorFile" href="#" class="btn btn-danger">更新皮肤文件</a>
				</div>
			</td>
		</tr>
	</tfoot>
</table>

<div class="modal hide fade" id="myModal" style="overflow:hidden;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>皮肤信息</h3>
  </div>
  <div class="modal-body"></div>
  <div class="modal-footer" style="text-align: center;">
	<a href="#" class="btn btn-primary">确定</a>
    <a href="#" class="btn" data-dismiss="modal">关闭</a>    
  </div>
</div>

<?php include("template.php");?>
<!-- demo -->
<h2>DEMO</h2>
<iframe id="J_DemoIframe" scrolling="no" frameborder="0" src="items.php?marketId=874" width="1150" height="300"></iframe>
<!-- /demo -->

</div> <!-- /container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-scrollspy.js"></script>
<script src="../assets/js/bootstrap-tab.js"></script>
<script src="../assets/js/bootstrap-tooltip.js"></script>
<script src="../assets/js/bootstrap-popover.js"></script>
<script src="../assets/js/bootstrap-button.js"></script>
<script src="../assets/js/bootstrap-collapse.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>
<script src="../assets/js/bootstrap-typeahead.js"></script>
<script src="../assets/js/smoke.min.js"></script>
<script src="../assets/js/jquery.tmpl.js"></script>
<script src="marketId.js"></script>
<script>
(function ($) {
	var skinData;
    function ColorSwitcher() {
        this.init();
    }
    ColorSwitcher.prototype = {
        init: function () {
            this.getData();
            this._bind();
        },
        _bind: function () {
            this._bindPreview();
            this._bindDeleteRow();
			this._bindEditRow();
            this._bindMarketSelect();
            this._bindCreateFile();
			this._bindCreateSkin();
        },
        _bindPreview: function () {
            $(document).delegate('.J_Preview', 'click', function (e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                var iframe = $('#J_DemoIframe');
                iframe[0].src = "items.php?marketId=" + id + "&t=" + Math.random();
            });
        },
        _bindDeleteRow: function () {
            $(document).delegate('.J_DeleteRow', 'click', function (e) {
                e.preventDefault();
                $(this).parents('tr').remove();
            });
        },
		_bindEditRow: function () {
            $(document).delegate('.J_EditRow', 'click', function (e) {
                e.preventDefault();
				var index = $(this).attr('data-index');
                $('#myModal .modal-body').html($('#J_CreateSkinForm').tmpl(skinData[index])).attr('data-index',index);
				$('#myModal').modal('show');
            });
        },
        _bindMarketSelect: function () {
            $(document).delegate('.J_SelectMove', 'click', function (e) {
                $("#" + $(this).attr('data-from')).children('option:selected').removeAttr('selected').appendTo($("#" + $(this).attr('data-to')))
            });
        },
        _bindCreateFile: function () {
            $(document).delegate('#J_CreateColorFile', 'click', function (e) {
                e.preventDefault();
                smoke.confirm('确定要更新皮肤?', function (e) {
                    if (e) {
                        smoke.alert('皮肤更新成功');
                    }
                });
            });
        },
		_bindCreateSkin: function () {
            $(document).delegate('#J_CreateSkin', 'click', function (e) {
                e.preventDefault();
                $('#myModal .modal-body').html($('#J_CreateSkinForm').tmpl({
					"levels" : [{}, {}, {}, {}, {}]
				})).attr('data-index',skinData.length);
				$('#myModal').modal('show');
            });
        },
        getData: function () {
            $.ajax({
                url: 'data.js',
                dataType: 'json',
                success: function (data) {
					skinData = data;
                    $('#J_SkinRow').tmpl({
                        data: data
                    }).appendTo("#colorTable tbody");
                    $('[data-original-title]').tooltip();
                }
            });
        }
    }

    new ColorSwitcher();
})(jQuery);


</script>
</body>
</html>
