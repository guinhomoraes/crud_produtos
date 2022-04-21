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

				<h3 class="my-0 font-weight-bold">Produtos | Cadastro</h3>

				<a href="{{ route('view_produtos')}}" class="btn btn-secondary">
					Voltar
				</a>

			</div>
		</div>

		<div class="row mt-5">
			<div class="col-12">


				<div class="card">
					<div class="card-horizontal">
						<div class="img-square-wrapper">
							<img class="" src="https://nicefilms.com.br/wp-content/uploads/ICON_PRODUTO.png" style="width: 500px; height: 500px;">
						</div>
						<div class="card-body">
							
							<form class="form-usuario" method="post" action="{{ route('cadastrar_produto')}}" enctype='multipart/form-data'>
								@csrf
					
									<div class="form-group">
										<label for="nome">Nome</label>
										<input class="form-control" type="text" name="nome" required>
									</div>
									<div class="form-group">
										<label for="descricao">Descrição</label>
										<input class="form-control" type="text" name="descricao" required>
									</div>
									<div class="form-group">
										<label for="preco">Preço</label>
										<input class="form-control" type="number" name="preco" required>
									</div>

									<div class="custom-file mt-3">
										<input type="file" class="custom-file-input" id="validatedCustomFile" name='imagem' required>
										<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
										<div class="invalid-feedback">...</div>
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
		