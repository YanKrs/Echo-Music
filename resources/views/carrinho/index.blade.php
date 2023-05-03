@extends('layout.app')
@section('main')


<h1 style="text-align: center;">Seu Carrinho</h1>
<div style="align: center; margin: 4% 0% 5% 23%;">
<table style="text-align: center; padding:10%;">

<tr>
    <th>   </th>
    <th> Nome Do Produto</th>
    <th> Descrição do Produto</th>
    <th> Quantidade</th>
    <th> Preço </th>
</tr>


@foreach($carrinho as $carrinho)

<tr style="border: 2px solid black; padding:10%;">

        <td style="padding: 10%;">{{$carrinho->Produto->PRODUTO_IMAGEM}}</td>

        <td style="padding: 10%; ">{{$carrinho->Produto->PRODUTO_NOME}}</td>

        <td style="padding: 10%; border: 2px solid black;">{{$carrinho->Produto->PRODUTO_DESC}}</td>

        <td style="border: 2px solid black;"> {{$carrinho->ITEM_QTD}} </td>

        <td style="border: 2px solid black;"> R${{$carrinho->Produto->PRODUTO_PRECO}} </td>


</tr>

@endforeach

</table>
</div>

@endsection
