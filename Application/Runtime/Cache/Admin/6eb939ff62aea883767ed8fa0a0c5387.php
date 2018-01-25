<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	    <!-- Loading Bootstrap -->
	    <link href="Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="Public/Admin/Flat/img/favicon.ico">
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<table class="table table-hover">
			<tr class="active">
			  <th width="30">perid</th>
			  <th>公司名称</th>
			  <th>电话</th>
			  <th>负责人</th>

			  <th>注册时间</th>
			  <th width="200">操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<td><?php echo ($vo["company_id"]); ?></td>
				<td><?php echo ($vo["company_name"]); ?></td>
				
				<td><?php echo ($vo["company_phone"]); ?></td>
				<td><?php echo ($vo["company_leader"]); ?></td>

				<td><?php echo ($vo["company_time"]); ?></td>
				<td>
					<a href="javascript:;" class="btn btn-sm btn-warning">编辑</a>
					<a href="javascript:if(confirm('确认删除？')) location.href='<?php echo U('Company/del',array('company_id'=>$vo['company_id']));?>'" class="btn btn-sm btn-danger">删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
		</table>
	</body>
</html>