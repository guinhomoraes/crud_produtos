
@component('layout')

<div class="container">

	<div class="row">

		<div class="col-12 d-flex justify-content-between border-bottom align-items-end pb-3">

			<h2 class="my-0 font-weight-bold">Produtos | Listagem</h2>

            <a href="{{ route('tela_cad_produto') }}" class="btn btn-secondary">
				Cadastrar Produto
			</a>

		</div>
	</div>

	<div class="row mt-5">

		<div class="table-responsive scrollbar">
			<table class="table table-borderless table-hover table-striped">
				<thead>
					<tr class="text-center">
                        <th scope="col"></th>
						<th scope="col">Nome</th>
						<th scope="col">Preço</th>
						<th scope="col">Ações:</th>
					</tr>
				</thead>
				<tbody>

                    <?php if(count($produtos) > 0): ?>

                        <?php foreach($produtos as $key => $produto): ?>

                            <tr class="text-center">
                                <td>
                                    <img src="{{ url('storage/'.$produto->caminho.'') }}" style="width:70px; height:70px;">
                                </td>
                                <td>{{$produto->nome}}</td>
                                <td>R$ {{$produto->preco}}</td>
                                <td>
                                    <a data-toggle="tooltip" title="Editar" href="{{ route('edicao_produto',['id' => $produto->id])}}" class="text-dark">
                                        <i class="fas fa-edit fa-lg"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>
						<tr>
							<td colspan="4" class="text-center">Nenhum registro cadastrado</td>
						</tr>
					<?php endif; ?>

				</tbody>
			</table>
		</div>

	</div>

	<div class="row">
		
	</div>

</div>

@endcomponent
