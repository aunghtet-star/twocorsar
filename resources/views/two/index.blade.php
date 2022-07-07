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
    <div class="d-flex justify-content-between">
        <h4 class="m-4">Total -  <span class="text-success">{{number_format($total)}}</span></h4>
        <a href="" id="clean" class="btn btn-danger m-4">Clean</a>
    </div>
    <div class="col-md-12">
        <div class="card" >
            <div class="card-body">
                <table class="table table-bordered table-hover" id="two-table" >
                    <thead>
                    <th>2D</th>
                    <th>Amount</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($twos as $two)
                    <tr>
                        <td>{{$two->two}}</td>
                        <td>{{$two->amount}}</td>
                        <td>
                            <form action="{{url('/two-'.$two->two)}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="hidden" name="two" id="two" value="{{$two->two}}" />
                                    <input type="text" name="amount" class="form-control" id="amount" placeholder="Add Amount">
                                    <button type="submit" class="btn btn-primary">OK</button>
                                </div>
                            </form>

                        </td>
                    </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(()=>{

        let clean = $('#clean');
        clean.click((e)=>{
            e.preventDefault();

            let token = document.head.querySelector('meta[name="csrf-token"]');
            if(token){
                $.ajaxSetup({
                    headers : {
                        'X-CSRF_TOKEN' : token.content
                    }
                })
            }

            $.ajax({
                url : 'clean',
                method :'get',
                success : function (res){
                    window.location.reload();
                }
            })
        });



    })
</script>
</body>
</html>
