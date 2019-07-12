@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class=panel panel-default>
				<div class="panel-heading">
					New Documents
				</div>

				<div class="panel-body">
					<form action="{{ url('document') }}" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="document-contents" class="col-sm-3 control-label">Document</label>
							<div class="col-sm-6">
								<textarea name="contents" id="document-contents" class="form-control">
								</textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Add Document
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
