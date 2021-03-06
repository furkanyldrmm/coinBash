@extends('fronts.master')
@section('content')


    <div class="container">
        <h2 class="balance-title">Coin Balance</h2>

        <div class="half-table">
       <table class="table table-responsive-md table-striped" id="myTable">
           <thead>
           <tr>
               <th scope="col"></th>
               <th scope="col">Pair</th>
               <th scope="col">Unit Value</th>
               <th scope="dolar">Dolar Value</th>


           </tr>
           </thead>
           <tbody>
           @foreach($user_coins as $coin)

               <tr>
                   <td scope="row"><img class="coin-icon" src="{{$coin->getCoin->src}}"></td>

                   <td>{{$coin->coin_name}}</td>
                   <td>{{$coin->value}}</td>
                   <td>{{dolarPrice($coin->value,$coin->coin_name)}}</td>

               </tr>
           @endforeach
           </tbody>
       </table>
</div>
        <h2 class="balance-title">Last Transactions</h2>

        <div class="half-table">
        <table class="table table-responsive-md table-striped" id="myTable">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Type</th>
                <th scope="col">Pair</th>
                <th scope="col">Unit Value</th>
                <th scope="dolar">Dolar Value</th>
                <th scope="col">Date</th>



            </tr>
            </thead>
            <tbody>
            @foreach($operations as $operation)

                <tr>
                    <td scope="row"><img class="coin-icon" src="{{$operation->getCoin->src}}"></td>
                    <td class="@if($operation->type=="buy") btn btn-success @else btn btn-danger @endif">{{$operation->type}}  </td>
                    <td>{{$operation->coin_name}}</td>
                    <td>{{$operation->unit_value}}</td>
                    <td>{{$operation->value}}</td>
                    <td>{{$operation->created_at}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
