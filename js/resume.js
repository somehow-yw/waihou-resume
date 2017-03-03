mui.init({
			swipeBack:true //启用右滑关闭功能
		});
		mui.previewImage();
mui.ajax('json/basic.json',{
	data:{
		category:'basic'
	},
	dataType:'json',//服务器返回json格式数据
	type:'get',//HTTP请求类型 <div class="name"><p>姓名：<span>歪猴</span></p></div>
	success:function(res){
		console.log(res);
	}
});

