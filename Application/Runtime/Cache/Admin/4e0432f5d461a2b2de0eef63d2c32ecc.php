<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
	    <!-- Loading Bootstrap -->
	    <link href="./Public/Admin/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Loading Flat UI -->
	    <link href="Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="shortcut icon" href="Public/Admin/Flat/img/favicon.ico">
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
<style>		
	.pagination{
		margin:0 auto;
	}
		.pagination ul {
    display: inline-block;
    
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}
.pagination ul li {
  display: inline;
}

.pagination ul li.rows {
    line-height: 30px;
    padding-left: 5px;
}
.pagination ul li.rows b{color: #f00}

.pagination ul li a, .pagination ul li span {
    float: left;
    padding: 4px 12px;
    line-height: 20px;
    text-decoration: none;
    background-color: #fff;
    background: url('../images/bottom_bg.png') 0px 0px;
    border: 1px solid #d3dbde;
    /*border-left-width: 0;*/
    margin-left: 2px;
    color: #08c;
}
.pagination ul li a:hover{
    color: red;
    background: #0088cc;
}
.pagination ul li.first-child a, .pagination ul li.first-child span {
    border-left-width: 1px;
    -webkit-border-bottom-left-radius: 3px;
    border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-top-left-radius: 3px;
    -moz-border-radius-bottomleft: 3px;
    -moz-border-radius-topleft: 3px;
}
.pagination ul .disabled span, .pagination ul .disabled a, .pagination ul .disabled a:hover {
color: #999;
cursor: default;
background-color: transparent;
}
.pagination ul .active a, .pagination ul .active span {
color: #999;
cursor: default;
}
.pagination ul li a:hover, .pagination ul .active a, .pagination ul .active span {
background-color: #f0c040;
}
.pagination ul li.last-child a, .pagination ul li.last-child span {
    -webkit-border-top-right-radius: 3px;
    border-top-right-radius: 3px;
    -webkit-border-bottom-right-radius: 3px;
    border-bottom-right-radius: 3px;
    -moz-border-radius-topright: 3px;
    -moz-border-radius-bottomright: 3px;
}

.pagination ul li.current a{color: #f00 ;font-weight: bold; background: #ddd}
	</style>
	</head>
	<body>
		<table class="table table-hover">
			<tr class="active">
			  <th width="30">id</th>
			  <th>标题</th>
			  <th width="200">时间</th>
				<th>阅读量</th>
				<th>图片</th>
			  <th width="200">操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<td><?php echo ($vo["medart_id"]); ?></td>
				<td><?php echo ($vo["medart_title"]); ?></td>
				<td><?php echo ($vo["medart_time"]); ?></td>
				<td><?php echo ($vo["medart_reading"]); ?></td>
				<td><img src="<?php echo ($vo["medart_pic"]); ?>" alt=""> </td>
				<td>
					<a href="<?php echo U('Medart/edit',array('medart_id'=>$vo['medart_id']));?>" class="btn btn-sm btn-success">编辑</a>
					<a href="javascript:if(confirm('确认删除？')) location.href='<?php echo U('Medart/del',array('medart_id'=>$vo['medart_id']));?>'" class="btn btn-sm btn-warning">删除</a>
				</td>
			</tr><?php endforeach; endif; ?>
		</table>

		<div class="pagination">
		    　　<ul>
			    <li><?php echo ($page); ?></li>
			</ul>
		</div>
	</body>
</html>