@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
    <h1 class="text-3xl font-bold text-gray-900 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Usuários</h2>
            <p class="text-gray-700 text-3xl">150</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Pedidos</h2>
            <p class="text-gray-700 text-3xl">75</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold mb-2">Receita</h2>
            <p class="text-gray-700 text-3xl">R$ 12.000</p>
        </div>
    </div>

    <div class="mt-10 bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Últimas Atividades</h2>
        <ul class="divide-y divide-gray-200">
            <li class="py-2">Usuário João fez login</li>
            <li class="py-2">Pedido #1234 foi criado</li>
            <li class="py-2">Pagamento recebido para pedido #1233</li>
        </ul>
    </div>
</div>
@endsection
