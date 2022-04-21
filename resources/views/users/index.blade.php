
@component('layout')

<div class="container">

	<div class="row">

		<div class="col-12 d-flex justify-content-between border-bottom align-items-end pb-3">

			<h2 class="my-0 font-weight-bold">Usuários | Listagem</h2>

            <a href="{{ route('tela_cad_usuario') }}" class="btn btn-secondary">
				Cadastrar Usuario
			</a>

		</div>
	</div>

	<div class="row mt-5">

		<div class="table-responsive scrollbar">
			<table class="table table-borderless table-hover table-striped">
				<thead>
					<tr class="text-center">
						<th scope="col">Nome</th>
						<th scope="col">E-mail</th>
						<th scope="col">Ações:</th>
					</tr>
				</thead>
				<tbody>

                    <?php if(count($users) > 0): ?>

                        <?php foreach($users as $key => $user): ?>

                            <tr class="text-center">
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a data-toggle="tooltip" title="Editar" href="{{ route('edicao_usuario',['id' => $user->id])}}" class="text-dark">
                                        <i class="fas fa-edit fa-lg"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>
						<tr>
							<td colspan="3" class="text-center">Nenhum registro cadastrado</td>
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
