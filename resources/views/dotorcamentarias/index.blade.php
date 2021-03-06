@extends('master')

@section('title')
    Dotações Orçamentárias
@stop

@section('content')
    @include('messages.flash')
    @include('messages.errors')

<div class="form-group">
<label>
<p><a href="{{ route('dotorcamentarias.create') }}" class="btn btn-success">Adicionar Dotação Orçamentária</a></p>
</label>

<label>
<form method="get" action="/dotorcamentarias">
  <div class="row">
    <div class=" col-sm input-group">
      <input size="80%" type="text" class="form-control" name="busca" value="{{ Request()->busca}}" placeholder="[ Busca por Dotação Orçamentária ]">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success"> Buscar </button>
      </span>
    </div>
  </div>
</form>
</label>
</div>

<div class="table-responsive">
<p>{{ $dotorcamentarias->links() }}</p>
    <table class="table table-striped" border="0">
        <thead>
            <tr align="center">
                <th width="5%" align="center">#</th>
                <th width="5%" align="left">Dotação</th>
                <th width="5%" align="center">Grupo</th>
                <th width="30%" align="center">Descrição do Grupo</th>
                <th width="10%" align="center">Item</th>
                <th width="30%" align="left">Descrição do Item</th>  
                <th width="5%" align="center">Receita</th>   
                @can('admin')                           
                <th width="10%" align="center" colspan="2">Ações</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($dotorcamentarias as $dotorcamentaria)
            <tr>
                <td align="center" valign="middle">{{ $dotorcamentaria->id }}</td>
                <td align="left"><a href="/dotorcamentarias/{{ $dotorcamentaria->id }}">{{ $dotorcamentaria->dotacao }}</a></td>
                <td align="center">{{ $dotorcamentaria->grupo }}</td>
                <td align="left">{{ $dotorcamentaria->descricaogrupo }}</td>
                <td align="left">{{ $dotorcamentaria->item }}</td>
                <td align="left">{{ $dotorcamentaria->descricaoitem }}</td>
                <td align="center" valign="middle">@if ($dotorcamentaria->receita == 1) [ x ] @else [ &nbsp; ] @endif</td>
                @can('admin')
                <td align="center"><a class="btn btn-warning" href="/dotorcamentarias/{{$dotorcamentaria->id}}/edit">Editar</a></td>
                <td align="center">
                    <form method="post" role="form" action="{{ route('dotorcamentarias.destroy', $dotorcamentaria) }}" >
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="delete-item btn btn-danger" type="submit" onclick="return confirm('Deseja realmente excluir a Dotação Orçamentária?');">Deletar</button>
                    </form>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
<p>{{ $dotorcamentarias->links() }}</p>
</div>
@stop
