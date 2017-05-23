<div class="modal fade" id="myModalcompany" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title_com">Update company information</h4>
			      </div>
			      <div class="modal-body">
        			<div class="form-group">
                               
        			{{ Form::label('contactperson', ' Contact person:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" id="contactperson" min="1">
        			{{ Form::label('designation', 'Designation:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" id="designation">
        			{{ Form::label('email', 'Email:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name"  id="email">
        			</div></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" id="savecompanyinfo" data-dismiss="modal">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->