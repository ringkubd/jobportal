
<div class="row">
    <div class="col-md-12">
        <div class="well">
            <div>
                  {{-- <img id="preview2" width="100" src="images/default-thumb.png" height="100"> --}}
                  @if(isset($personaldetails->profile_img))
                    {!!Html::image('/storage/jobseeker_img/'.$personaldetails->profile_img,'default-image',array("width"=>"200",'id'=>'preview2'))!!}
                  @else
                  {!!Html::image('images/default-thumb.png','default-image',array("width"=>"200",'id'=>'preview2'))!!}
                   @endif
                    
              <form action="{{url('jobseeker/imageupload')}}" id="profile_pic" method="put" enctype="multipart/form-data">
              {{ csrf_field() }}
                 <p><input type="file" name="profile_image" id="profile_image" onchange="document.getElementById('preview2').src=window.URL.createObjectURL(this.files[0])"></p>
                 <input type="hidden" name="action" id="action" value="jobseeker_img">
                {{--  <button type="submit">Upload</button> --}}
                 <input type="submit" value="upload" name="image">
              </form>



              </div>

        </div>
    </div>
</div>


