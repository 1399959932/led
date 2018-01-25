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
	    <script type="text/javascript" charset="utf-8" src="Public/Admin/ccc/Org/Ueditor/ueditor.config.js"></script>
	    <script type="text/javascript" charset="utf-8" src="Public/Admin/ccc/Org/Ueditor/ueditor.all.min.js"></script>

	    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	    <script type="text/javascript" charset="utf-8" src="Public/Admin/ccc/Org/Ueditor/lang/zh-cn/zh-cn.js"></script>

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->

		<!--上传插件-->
		<script type="text/javascript" src="Public/Admin/ccc/Org/Uploadify/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="Public/Admin/ccc/Org/Uploadify/jquery.uploadify.min.js"></script>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="alert alert-success">添加文章</div>
			<div class="form-group">
			<label for="exampleInputEmail1">文章标题</label>
			<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入文章标题" required="" name="newsart_title">
		</div>
			<div class="form-group">
				<label for="exampleInputEmail1">作者</label>
				<input id="" class="form-control" type="text" placeholder="请输入作者" required="" name="newsart_author">
			</div>
			<div>

					<div>所属分类</div>
				<div>
					<select name="newsart_cate_id"  >
						<option value="0">-请选择分类-</option>
						<?php if(is_array($cateData)): foreach($cateData as $key=>$vo): ?><option value="<?php echo ($vo["category_id"]); ?>"><?php echo ($vo["category_name"]); ?></option><?php endforeach; endif; ?>

					</select>
				</div>

				<div>所属标签</div>
				<div>
					<select name="newsart_tag_id"  >
						<option value="0">-请选择标签-</option>
						<?php if(is_array($tagData)): foreach($tagData as $key=>$vo): ?><option value="<?php echo ($vo["tag_id"]); ?>"><?php echo ($vo["tag_name"]); ?></option><?php endforeach; endif; ?>

					</select>
				</div>

			</div>

			<table class='table table-bordered'>
				<tr class="info" id="uploadList">
					<td>上传图片</td>
					<td>
						<!-- <input type="file" name='picture[]' multiple="true" id='list_pic'/> -->
					</td>
					<td id='pic-list'></td>
				</tr>
			</table>

			<div lab="uploadFile">
				<input id="upload_file" type="file" name="newsart_pic">

				<script type="text/javascript">
					$(function(){
						// alert()
						var sid = '<?php echo session_id();?>';
						$('#upload_file').uploadify({
							'fileTypeDesc' : '上传文件',//上传描述
							'fileTypeExts' : '*.jpg;*.png',
							'swf'      : '/Public/Admin/ccc/Org/Uploadify/uploadify.swf',
							'uploader' : "<?php echo U('News/upload');?>",
							'buttonText':'选择文件',
							'fileSizeLimit' : '4000KB',
							'uploadLimit' : 1,//上传文件数
							'width':65,
							'height':25,
							'successTimeout':10,//等待服务器响应时间
							'removeTimeout' : 0.2,//成功显示时间
							formData : {'session_id' : sid},
							'onUploadSuccess' : function(file, data, response) {
								//转为json
								console.log(data);
								data=$.parseJSON(data);

								//获得图片地址
								// var imageUrl = data.url;
								data.url = data.savepath+data.savename;
								var li="<li path='"+data.url+"' url='"+data.url+"'><img src='"+data.url+"'/><input type='hidden' name='newsart_pic' value='"+data.url+"'/><span class='x'>X</span></li>";
								$("#uploadList1 ul").prepend(li);
								$('.x').click(function(){
									$(this).parent('li').remove();
								})
							}
						});
					});
				</script>
				<style type="text/css">
					#uploadList1 ul li img{
						width: 100px;
						height: 100px;
					}
				</style>
				<div id="uploadList1">
					<ul>

					</ul>
				</div>
			</div>


			<div class="form-group">
				<label for="exampleInputEmail1">文章正文</label>
				<script id="editor" type="text/plain" style="width:100%;height:200px;" name="newsart_content"></script>
				<script>
					var ue = UE.getEditor('editor');
				</script>
			</div>
			<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>
</html>