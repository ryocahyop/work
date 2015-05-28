<html>
<head>
<script src="http://localhost/work/assets/js/jquery.min.js"></script> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="http://localhost/work/assets/css/jquery.dataTables.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="http://localhost/work/assets/css/jquery-ui.css" type="text/css" media="screen"/>	
<script type="text/javascript" src="http://localhost/work/assets/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
function cari(){
    $.ajax({
        type : "POST",
        url : "http://localhost/work/kamus.php",
        data : 'inp='+$('#inp').val(),
        success : function(msg){
		$('#tampil').html(msg); 
        }
    });

}
</script>
</head>
<body>
<form action="kamus.php" method="POST">
<input type="text" id="inp" name="inp" maxlength="13" minlength="3" />
<input type="submit" value="cari" />
</form>
<div id="tampil"></div>
</body>
</html>
