$(function(){

	$(".del").on("click", function(){
		var id = $(this).attr('data-id');
		var toke = $('meta[name="_token"]').attr('content');
		console.log(toke);

		var msg = "确定删除用户: "+id+" 吗 ?";
		if(confirm(msg) == false)
		{
			return false;
		}

		$.ajax({
			url: 'student_delete',
			type: 'post',
			dataType: 'json',
			data: {'id':id},
			headers: {
			'X-CSRF-TOKEN': toke
			},
			success:function(res){
				console.log(res);
                alert(res.msg);
                // if(res.code != 200){
				// }
			}
		})
	});
});
	
