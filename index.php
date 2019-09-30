


<html>  
    <head>  
        <title>CRUD2</title>  
        <link rel="stylesheet" href="bootstrap.min.css" />  
        <script src="bootstrap.min.js"></script>  
        <script src="jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center">CRUD2<a href="" title="CRUD using Ajax Jquery in PHP Mysql">CRUD using Ajax Jquery in PHP Mysql</a></h3><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var one = $('#one').text();  
        var two = $('#two').text();  
		var three = $('#three').text(); 
		var four = $('#four').text(); 
		var five = $('#five').text(); 
		var six = $('#six').text(); 
        if(one == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(two == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{one:one, two:two, three:three, four:four, five:five, six:six},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.one', function(){  
        var id = $(this).data("id1");  
        var one = $(this).text();  
        edit_data(id, one, "one");  
    });  
    $(document).on('blur', '.two', function(){  
        var id = $(this).data("id2");  
        var two = $(this).text();  
        edit_data(id,two, "two");  
    }); 
	$(document).on('blur', '.three', function(){  
        var id = $(this).data("id3");  
        var three = $(this).text();  
        edit_data(id,three, "three");  
    }); 
	$(document).on('blur', '.four', function(){  
        var id = $(this).data("id4");  
        var four = $(this).text();  
        edit_data(id,four, "four");  
    }); 
	$(document).on('blur', '.five', function(){  
        var id = $(this).data("id5");  
        var five = $(this).text();  
        edit_data(id,five, "five");  
    }); 
	$(document).on('blur', '.six', function(){  
        var id = $(this).data("id6");  
        var six = $(this).text();  
        edit_data(id,six, "six");  
    }); 


	
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>
