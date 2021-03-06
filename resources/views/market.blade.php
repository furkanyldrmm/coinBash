@extends('fronts.master')
@section('content')

<div class="container" style="margin: auto">
    <div class="tablo">
    <input class="form-control mt-5" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for coins.." title="Type in a name">
    <table class="table table-responsive-md table-striped" id="myTable">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Pair</th>
            <th scope="col">Last Price</th>
            <th scope="col">24h Change</th>
            <th scope="col">Market Cap</th>
            <th scope="col">24h Volume</th>
            <th scope="col">Buy-Sell</th>

        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row"><img class="coin-icon" src="{{$item['logo_url']}}"></th>
            <td>{{$item['id']}}</td>
            <td>{{getPrice($item['price'])}}</td>
            <td class="@if(($item['1d']['price_change_pct'])>0) text-success @else text-danger @endif">%{{getPercent($item['1d']['price_change_pct'])}}</td>
            <td>{{getPriceMillion($item['market_cap'])}}</td>
            <td class="@if(($item['1d']['volume_change_pct'])>0) text-success @else text-danger @endif" >%{{getPercent($item['1d']['volume_change_pct'])}}</td>
            <td><button class="btn btn-success" onclick="showBuyModal('{{$item['id']}}',{{$item['price']}})"> Buy </button> <button onclick="showSellModal('{{$item['id']}}',{{$item['price']}})" class="btn btn-danger">Sell</button></td>


        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align: center;width: 100%" ></h5>
                <button type="button" class="close" onclick="deneme()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="column">

                    <div class="form-group">
                        <label class="label-coin"></label>
                        <input id="coin_amount" type="text" name="title" class="form-control" required />
                        <input id="examp" type="text" hidden name="title" class="form-control" required />
                        <input id="coin_name" type="text" hidden name="title" class="form-control" required />


                    </div>
                    <div class="form-group">
                        <label>USD Amount  </label>
                        <input id="usd-amount" type="text" name="title" class="form-control" required />
                    </div>

                    </div>

                </div>
            <div class="modal-footer">
                <button id="send_action" type="button" onclick="buyCoin()" class="btn btn-primary col-md-12">Buy</button>
            </div>
        </div>

    </div>
    </div>
<div class="modal fade" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_sell" style="text-align: center;width: 100%" ></h5>
                <button type="button" class="close"  onclick="deneme2()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="column">

                    <div class="form-group">
                        <label id="label_sell"></label>
                        <input  type="text" id="coin_amount_sell" name="title" class="form-control" required />
                        <input id="examp_sell" type="text" hidden name="title" class="form-control" required />
                        <input id="coin_name_sell" type="text" hidden name="title" class="form-control" required />


                    </div>
                    <div class="form-group">
                        <label>USD Amount  </label>
                        <input  id="usd_amount_sell" type="text" name="title" class="form-control" required />
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button id="send_action" type="button" onclick="sellCoin()" class="btn btn-primary col-md-12">Sell</button>
            </div>
        </div>

    </div>
</div>

</div>

@endsection

@section('js')
    <script>

    function showBuyModal(id,price) {
    $(".modal-title").text(id +" Buy");
    $(".label-coin").text(id +" Amount");
    $("#coin_name").val(id);
    $("#examp").val(price);
        $("#buyModal").modal({
            backdrop:'static',
            keyboard:false
        });

    }

    $( "#coin_amount" ).keyup(function(event) {
       let coin=this.value;
       let coin_amount=$("#examp").val();
       let result=coin*parseFloat(coin_amount);
        $("#usd-amount").val(result);


    });
    $( "#usd-amount" ).keyup(function(event) {
        let usd=this.value;
        let coin_amount=$("#examp").val();
        let result=usd/parseFloat(coin_amount);
        $("#coin_amount").val(result);


    });

    $( "#coin_amount_sell" ).keyup(function(event) {
        let coin=this.value;
        let coin_amount=$("#examp_sell").val();
        let result=coin*parseFloat(coin_amount);
        $("#usd_amount_sell").val(result);


    });
    $( "#usd_amount_sell" ).keyup(function(event) {
        let usd=this.value;
        let coin_amount=$("#examp_sell").val();
        let result=usd/parseFloat(coin_amount);
        $("#coin_amount_sell").val(result);


    });



    function showSellModal(id,price) {

        $("#title_sell").text(id +" Sell");
        $("#label_sell").text(id +" Amount");
        $("#coin_name_sell").val(id);

        $("#examp_sell").val(price);


        $("#sellModal").modal({

            backdrop: 'static'}
        );

    }




    function convertAmount(n) {
        return  n.toLocaleString();

    }
    function deneme() {
        $("#coin_amount").val("");
        $("#usd-amount").val("");
     $("#buyModal").modal('hide');

    }
    function deneme2() {
        $("#coin_amount_sell").val("");
        $("#usd_amount_sell").val("");
        $("#sellModal").modal('hide');

    }


    function buyCoin() {
        let usd_value=$("#usd-amount").val();
        let coin_name=$("#coin_name").val();
        let coin_value= $("#coin_amount").val();

        $.ajax({
            type: 'post',
            url: '/buy-coin',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            },
            data: {coin_name: coin_name,coin_value: coin_value,usd_value:usd_value}
        }).done(function (response) {
if(response=="value_error"){

    swal("Oops sorry!", "Please check your usd balance", "error").then((value)=>{
        location.reload();

    });

            }
else if(response=="success_transaction"){
    swal("Good job!", "Your purchase has been completed successfully!", "success").then((value)=>{
        location.reload();

    });

}

else if(response=="user_error"){

    swal("Oops sorry!", "Please login to your account", "error").then((value)=>{
        location.reload();

    });



}

else{
    swal("Oops sorry!", "An error occured please try again", "error").then((value)=>{
        location.reload();

    });

}


        });

    }
    function sellCoin() {
        let usd_value=$("#usd_amount_sell").val();
        let coin_name=$("#coin_name_sell").val();
        let coin_value= $("#coin_amount_sell").val();

        $.ajax({
            type: 'post',
            url: '/sell-coin',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            },
            data: {coin_name: coin_name,coin_value: coin_value,usd_value:usd_value}
        }).done(function (response) {
            if(response=="value_error"){

                swal("Oops sorry!", "Please check your coin balance", "error").then((value)=>{
                    location.reload();

                });
            }
            else if(response=="success_transaction"){

                swal("Good job!", "Your sell has been completed successfully!", "success").then((value)=>{
                    location.reload();

                });



            }

            else if(response=="user_error"){

                swal("Oops sorry!", "Please login to your account", "error").then((value)=>{
                    location.reload();

                });



            }


            else{
                swal("Oops sorry!", "An error occured please try again", "error").then((value)=>{
                    location.reload();

                });



            }
            }



            );

    }





    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
@endsection
