<div class="d-flex justify-content-between">
    <h4 class="m-4">Total -  <span class="text-success">{{number_format($total)}}</span></h4>
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
                            <div class="input-group mb-3">
                                <input type="hidden" name="two" id="two"   />
                                <input type="text" name="amount" class="form-control" id="amount-{{$two->two}}" placeholder="Add Amount">
                                <button id="button-ok" data-id={{$two->two}} class="btn btn-primary">OK</button>
                            </div>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function (){

        // function Table(){
        //     $.ajax({
        //         url : '/table',
        //         type : 'GET',
        //         success : function (res){
        //             $('#table').html(res);
        //         }
        //     })
        // }



    })
</script>
