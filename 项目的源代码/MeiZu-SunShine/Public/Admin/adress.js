$(function(){
	// 1、获取省份
	$.post(url+'/Adress/city',{upid:0},function(msg){
		console.log(msg);
		//定义一个空字符串
		var str='<option value="">--请选择--</option>';
		for(var i in msg){
			str+='<option value="'+msg[i]['id']+'">'+msg[i]['name']+'</option>';
		}
		console.log(str);
		$('#province').html(str);
	},'json')

	//根据省份的id查找省，市，县
	$('#province,#city,#county').change(function(){
		//定义一个改变的对象
		var that=$(this);
		//当省份改变的时候，后边的所有同辈标签都变为--请选择--
		that.nextAll().html("<option value=''>--请选择--</option>");
		//获取省份的id
		upid=that.val();
		//根据省份id获得市...
		$.post(url+'/Adress/city','upid='+upid,function(msg){
			console.log(msg);
			// 如果获取不到数据，就直接返回false
			if(msg==null) return false;

			//给str一个默认值
			str='<option value="">--请选择--</option>';
			// 遍历并组装数据
			for(var i in msg){
				str+='<option value="'+msg[i]['id']+'">'+msg[i]['name']+'</option>';
			}
			that.next().html(str);
		},'json')
	})
})