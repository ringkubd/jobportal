<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="title">Update job information</h4>
			      </div>
			      <div class="modal-body">
			      	
			        <p><div class="form-group">
			        	{{ Form::label('jobtitle', 'Jobtitle', ['class' => 'control-label']) }}
			        	<input type="text" class="form-control" name="name"  id="jobtitle">
			            {{ Form::label('division', 'Division', ['class' => 'control-label']) }}
			            {{ Form::select('division',isset($showdivisions)?$showdivisions:['-1'=>'Select Division'],'array()',['class'=>'form-control'])}}

			            {{ Form::label('district', 'District', ['class' => 'control-label']) }}
			            {{ Form::select('district', ['-1'=>'select District'],array(), ['placeholder' => 'select district','class'=>'form-control'])}}

			            {{ Form::label('jobcategory', 'Job category', ['class' => 'control-label']) }}
			            {{ Form::select('jobcategory',isset($showcatagories)?$showcatagories:['-1'=>'Select category'],'array()',['class'=>'form-control'])}}

			            {{ Form::label('Jobindustrytype', 'Job industry type', ['class' => 'control-label']) }}
			            {{ Form::select('Jobindustrytype',isset($showindustrytypes)?$showindustrytypes:['-1'=>'Select industry'],'array()',['class'=>'form-control'])}}

        			</div></p>
        			<p>
        			<div class="form-group">
        			{{ Form::label('JobVacancies', 'Job Vacancies:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" id="JobVacancies" min="1">
        			{{ Form::label('JobType', 'Job Type:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" id="JobType">
        			{{ Form::label('JobLevel', 'Job Level:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name"  id="JobLevel">
        			{{ Form::label('Agerange', 'Age range:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name"  id="Agerange">
        			{{ Form::label('EducationalQualification', 'Educational Qualification:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="EducationalQualification">
        			{{ Form::label('JobResponsivility', 'Job Responsivility:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="JobResponsivility">
        			{{ Form::label('JobExperiancesYear', 'Job Experiances Year:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="JobExperiancesYear">
        			{{ Form::label('JobExperiancesField', 'Job Experiances Field:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="JobExperiancesField">
        			{{ Form::label('Instruction', 'Instruction:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="Instruction">
        			{{ Form::label('SalaryRange', 'Salary Range:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="SalaryRange">
        			{{ Form::label('Deadline', 'Deadline:', ['class' => 'control-label']) }}
        			<input type="text" class="form-control" name="name" placeholder="write area here" id="Deadline"></div></p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary" id="savejobinfo" data-dismiss="modal">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->