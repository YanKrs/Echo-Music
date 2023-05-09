@extends('layout.app')
@section('main')


<h1 style="text-align: center; margin-bottom:5%;">Seu Carrinho</h1>



<!-- <tr>
    <th>   </th>
    <th> Nome Do Produto</th>
    <th> Descrição do Produto</th>
    <th> Quantidade</th>
    <th> Preço </th>
</tr> -->




<ol class="list-group list-group-numbered">

@foreach($carrinho as $carrinho)







  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{$carrinho->Produto->PRODUTO_NOME}}</div>
      {{$carrinho->Produto->PRODUTO_DESC}}
    </div>
    <p style="text-align:left;">R${{$carrinho->Produto->PRODUTO_PRECO * $carrinho->ITEM_QTD}}</p>
    <span class="badge bg-primary rounded-pill">{{$carrinho->ITEM_QTD}}</span>
</li>







<!-- <tr style="border: 2px solid black; padding:10%;">

        <td style="padding: 10%;">{{$carrinho->Produto->PRODUTO_IMAGEM}}</td>

        <td style="padding: 10%; ">{{$carrinho->Produto->PRODUTO_NOME}}</td>

        <td style="padding: 10%; border: 2px solid black;">{{$carrinho->Produto->PRODUTO_DESC}}</td>

        <td style="border: 2px solid black;"> {{$carrinho->ITEM_QTD}} </td>

        <td style="border: 2px solid black;"> R${{$carrinho->Produto->PRODUTO_PRECO}} </td>


</tr> -->

@endforeach

</ol>


<a href=""> <button type="button" class="btn btn-success" style="margin: 50px; display: flex; ">Finalizar compra</button> </a>



@endsection
