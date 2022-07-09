<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Two D</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>


<div class="container p-0">
    <a href="" id="clean" class="btn btn-danger m-4">Clean</a>
    <div id="table"></div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(()=>{

        Table();

        function Table(){
            $.ajax({
                url : '/table',
                type : 'GET',
                success : function (res){
                    $('#table').html(res);
                }
            })
        }

        let clean = $('#clean');
        clean.click((e)=>{
            e.preventDefault();
            $.ajax({
                url : 'clean',
                method :'get',
                success : function (res){
                    Table();
                }
            })
        });

        $(document).on('click','#button-ok',function (e){
            e.preventDefault();

           let id = $(this).data('id');
           let amount = $(`#amount-${id}`).val();

            let token = document.head.querySelector('meta[name="csrf-token"]');
            if(token){
                $.ajaxSetup({
                    headers : {
                        'X-CSRF_TOKEN' : token.content
                    }
                })
            }

            $.ajax({
                url : `/two-${id}`,
                type : 'POST',
                data : {
                    two : id,
                    amount : amount
                },
                success : function (res){
                    Table();
                }
            })
        })

    })
</script>
</body>
</html>
