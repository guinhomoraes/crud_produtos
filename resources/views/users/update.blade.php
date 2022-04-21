@component('layout')

	<div class="container">

		<div class="row">
			<div class="col-12">
				@if(Session::has('message'))
					<div class="alert <?= Session::get('alert-class') ?>">{{Session::get('message')}}</div>
				@endif
			</div>
		</div>
		

		<div class="row">

			<div class="col-12 d-flex justify-content-between border-bottom align-items-end pb-3">

				<h3 class="my-0 font-weight-bold">Usuários | Atualização</h3>

				<a href="{{ route('view_usuarios')}}" class="btn btn-secondary">
					Voltar
				</a>

			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">


				<div class="card">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img class="" src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-user-vector-avatar-png-image_1541962.jpg" style="width: 400px; height: 400px;">
						</div>
						<div class="card-body">
							
							<form class="form-usuario" method="post" action="{{ route('atualizar_usuario',['id'=> $user->id ])}}">
								@csrf
					
									<div class="form-group">
										<label for="name">Nome</label>
										<input class="form-control" type="text" name="name" value="{{ $user->name}}" required>
									</div>
									<div class="form-group">
										<label for="email">E-mail</label>
										<input class="form-control" type="email" name="email" value="{{ $user->email}}" required>
									</div>
									<div class="form-group">
										<label for="password">Nova Senha</label>
										<input class="form-control" type="password" name="new_password">
									</div>

									<div class="form-group">
										<hr>
										<button class="btn btn-secondary float-right">Salvar</button>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>

				

			</div>
		</div>

		

	</div>

@endcomponent
		