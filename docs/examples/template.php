<script id="J_SkinRow" type="type/html">
{{each(i, d) data}}
<tr>
	<td class="sequence"><span class="badge">${i}</span></td>
	<td class="skinName"><span class="badge badge-success">${d.name}</span></td>
	<td class="skinLevels">
		{{each(i, level) levels}}
		<span class="${level.key}" data-original-title="${level.value}" style="background:${level.value}"></span>
		{{/each}}
	</td>
	<td class="markets">
		{{each(i, market) markets}}
		<span class="label label-info" data-original-title="${market.key}" data-id="${market.key}">${market.value}</span>
		{{/each}}
	</td>
	<td class="btn-toolbar">
		<div class="btn-group">
		  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
			操作
			<span class="caret"></span>
		  </a>
		  <ul class="dropdown-menu">
			<li><a class="J_EditRow" data-index="${i}" href="#myModal"><s class="icon-pencil"></s> 编辑</a></li>
			<li><a class="J_DeleteRow" href="#"><s class="icon-remove"></s> 删除</a></li>
		  </ul>
		</div>
		<div class="btn-group">
			<a href="" class="J_Preview btn btn-primary" data-id="${markets[0].key}">Demo预览</a>
		</div>
	</td>
</tr>
{{/each}}
</script>

<script id="J_CreateSkinForm" type="type/html">
<form class="form-horizontal">
	<fieldset>
	  <div class="control-group">
		<label class="control-label">皮肤名称：</label>
		<div class="controls">
		  <input type="text" class="input-medium" placeholder="比如：女人，男人" value="${name}">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label">皮肤颜色：</label>
		<div class="controls">
			{{each(i,d) levels}}
			<input type="text" class="input-mini" placeholder="level${i+1}" value="${value}">
			{{/each}}
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label">市场选择：</label>
		<div class="controls">
		  <select multiple="multiple" id="select01">
			{{each(i,d) marketId}}
			<option value="${key}">${value}</option>
			{{/each}}
		  </select>
		  <span style="display:inline-block;vertical-align: middle;">
			  <span data-from="select01" data-to="select02" class="J_SelectMove icon-arrow-right" style="cursor:pointer"></span><br/>
			  <span data-from="select02" data-to="select01" class="J_SelectMove icon-arrow-left" style="cursor:pointer"></span>
		  </span>
		  <select multiple="multiple" id="select02">
			{{each(i,d) markets}}
			<option value="${key}">${value}</option>
			{{/each}}
		  </select>
		</div>
	  </div>
	</fieldset>
  </form>
</script>