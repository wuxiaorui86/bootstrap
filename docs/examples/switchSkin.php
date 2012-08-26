<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="gbk">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/smoke.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
	  .skinLevels span{
		width:28px;
		height:28px;
		display:inline-block;
		border-radius: 3px;
	  }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
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
			<th>#</th>
			<th>皮肤名称</th>
			<th>色板</th>
			<th>市场</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="sequence"><span class="badge">1</span></td>
			<td class="skinName"><span class="badge badge-success">女人</span></td>
			<td class="skinLevels">
				<span class="level1" data-original-title="#A22E43" style="background:#A22E43"></span>
				<span class="level2" data-original-title="#D23856" style="background:#D23856"></span>
				<span class="level3" data-original-title="#FFDFE5" style="background:#FFDFE5"></span>
				<span class="level4" data-original-title="#FCEFF1" style="background:#FCEFF1"></span>
			</td>
			<td class="markets">
				<span class="label label-info" data-original-title="874" data-id="874">女装</span>
				<span class="label label-info" data-original-title="545" data-id="545">女鞋</span>
				<span class="label label-info" data-original-title="556" data-id="556">女包</span>
				<span class="label label-info" data-original-title="572" data-id="572">内衣</span>
				<span class="label label-info" data-original-title="566" data-id="566">服饰配件</span>
			</td>
			<td class="btn-toolbar">
				<div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					操作
					<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
					<li><a data-toggle="modal" href="#myModal"><s class="icon-pencil"></s> 编辑</a></li>
					<li><a class="J_DeleteRow" href="#"><s class="icon-remove"></s> 删除</a></li>
				  </ul>
				</div>
				<div class="btn-group">
					<a href="" class="J_Preview btn btn-primary" data-id="874">Demo预览</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="sequence"><span class="badge">2</span></td>
			<td class="skinName"><span class="badge badge-success">男人</span></td>
			<td class="skinLevels">
				<span class="level1" data-original-title="#2064A1" style="background:#2064A1"></span>
				<span class="level2" data-original-title="#66AAE9" style="background:#66AAE9"></span>
				<span class="level3" data-original-title="#E4EBF5" style="background:#E4EBF5"></span>
				<span class="level4" data-original-title="#F1F5F9" style="background:#F1F5F9"></span>
			</td>
			<td class="markets">
				<span class="label label-info" data-original-title="553" data-id="553">男装</span>
				<span class="label label-info" data-original-title="567" data-id="567">男鞋</span>
				<span class="label label-info" data-original-title="792" data-id="792">男包</span>
			</td>
			<td class="btn-toolbar">
				<div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					操作
					<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
					<li><a data-toggle="modal" href="#myModal"><s class="icon-pencil"></s> 编辑</a></li>
					<li><a class="J_DeleteRow" href="#"><s class="icon-remove"></s> 删除</a></li>
				  </ul>
				</div>
				<div class="btn-group">
					<a href="" class="J_Preview btn btn-primary" data-id="553">Demo预览</a>
				</div>
			</td>
		</tr>
		<tr>
			<td class="sequence"><span class="badge">3</span></td>
			<td class="skinName"><span class="badge badge-success">运动</span></td>
			<td class="skinLevels">
				<span class="level1" data-original-title="#43740D" style="background:#43740D"></span>
				<span class="level2" data-original-title="#91B566" style="background:#91B566"></span>
				<span class="level3" data-original-title="#ECF3E6" style="background:#ECF3E6"></span>
				<span class="level4" data-original-title="#F4F8EF" style="background:#F4F8EF"></span>
			</td>
			<td class="markets">
				<span class="label label-info" data-original-title="944" data-id="944">运动</span>
			</td>
			<td class="btn-toolbar">
				<div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					操作
					<span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
					<li><a data-toggle="modal" href="#myModal"><s class="icon-pencil"></s> 编辑</a></li>
					<li><a class="J_DeleteRow" href="#"><s class="icon-remove"></s> 删除</a></li>
				  </ul>
				</div>
				<div class="btn-group">
					<a href="" class="J_Preview btn btn-primary" data-id="944">Demo预览</a>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="5">
				<div class="btn-group span4">
					<a data-toggle="modal" href="#myModal" class="btn btn-primary">创建皮肤</a>
					<a id="J_CreateColorPan" href="#" class="btn btn-danger">更新皮肤文件</a>
				</div>
			</td>
		</tr>
	</tfoot>
</table>


<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3>皮肤信息</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">皮肤名称：</label>
            <div class="controls">
              <input type="text" class="input-medium" id="input01" placeholder="比如：女人，男人">
            </div>
          </div>
		  <div class="control-group">
            <label class="control-label" for="input02">皮肤颜色：</label>
            <div class="controls">
              <input type="text" class="input-mini" id="input02" placeholder="level1">
              <input type="text" class="input-mini" placeholder="level2">
              <input type="text" class="input-mini" placeholder="level3">
              <input type="text" class="input-mini" placeholder="level4">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">市场选择：</label>
            <div class="controls">
              <select multiple="multiple" id="select01" style="width:135px;height: 110px;">
                <option value="874">女装</option>
                <option value="545">女鞋</option>
                <option value="556">女包</option>
                <option value="572">内衣</option>
                <option value="566">服饰配件</option>
                <option value="553">男装</option>
                <option value="567">男包</option>
                <option value="792">男鞋</option>
              </select>
			  <span style="display:inline-block;vertical-align: middle;">
				  <span data-from="select01" data-to="select02" class="J_SelectMove icon-arrow-right" style="cursor:pointer"></span><br/>
				  <span data-from="select02" data-to="select01" class="J_SelectMove icon-arrow-left" style="cursor:pointer"></span>
			  </span>
			  <select multiple="multiple" id="select02" style="width:135px;height: 110px;"></select>
            </div>
          </div>
        </fieldset>
      </form>
  </div>
  <div class="modal-footer" style="text-align: center;">
	<a href="#" class="btn btn-primary">确定</a>
    <a href="#" class="btn" data-dismiss="modal">关闭</a>    
  </div>
</div>

<h2>DEMO</h2>
<iframe id="J_DemoIframe" scrolling="no" frameborder="0" src="items.php?marketId=874" width="1150" height="300"></iframe>


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
<script>
$('*').tooltip();

$('.J_Preview').click(function(e){
	e.preventDefault();
	var id = $(this).attr('data-id');
	var iframe = $('#J_DemoIframe');
	iframe[0].src="items.php?marketId="+id+"&t="+Math.random();
});

$('.J_DeleteRow').click(function(e){
	e.preventDefault();
	$(this).parents('tr').remove();
});

$('.J_SelectMove').click(function(e){
	$("#"+$(this).attr('data-from')).children('option:selected').removeAttr('selected').appendTo($("#"+$(this).attr('data-to')))
});

$('#J_CreateColorPan').click(function(e){
	e.preventDefault();
	smoke.confirm('确定要更新皮肤?',function(e){
		if (e){
			smoke.alert('皮肤更新成功');
		}
	});
});
</script>
</body>
</html>
