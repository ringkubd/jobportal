<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Add new area</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			            {{ Form::label('country', 'Country', ['class' => 'control-label']) }}
			            {{ Form::select('country', isset($country)?$country:['0'=>'0'], isset($empdes->country)?$empdes->country:NULL, ['placeholder' => 'select Country','class'=>'form-control'])}}

			            {{ Form::label('division', 'Division', ['class' => 'control-label']) }}
			            {{ Form::select('division', isset($division)?$division:['0'=>'0'], isset($empdes->division)?$empdes->division:NULL, ['placeholder' => 'select division','class'=>'form-control'])}}

			            {{ Form::label('district', 'District', ['class' => 'control-label']) }}
			            {{ Form::select('district', isset($district)?$district:['0'=>'0'], isset($empdes->district)?$empdes->district:NULL, ['placeholder' => 'select district','class'=>'form-control'])}}

        			</div></p>
        			{{ Form::label('additem', 'Area:', ['class' => 'control-label']) }}
			        <p><input type="text" class="form-control" name="name" placeholder="write area here" id="additem"></p>
			        <input type="hidden" name="" id="modalid" value="" />
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal">Delete</button>
			        <button type="button" class="btn btn-primary" id="save" data-dismiss="modal" style="display:none;">Save changes</button>
			        <button type="button" class="btn btn-primary" id="addbutton" data-dismiss="modal" style="display: none;">Add item</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->