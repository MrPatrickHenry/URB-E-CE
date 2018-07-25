

<!-- Modal -->
<div class="modal fade" id="UploadAssetDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Assets
        Media Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-content">

        <div class="card-header">
        </div>

        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif

        @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif


        <form action="http://resources.20-twenty.online/asset/upload" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="file-field input-field">
            <div class="row">
              <span>{{ __('Asset Type') }}</span>
              <select class="browser-default" name="file_type" id="file_type">
                <option value="" selected required="true">Choose your Asset Format</option>
                <option value="USDZ">USDZ</option>

                <option value="360Video">360 Video</option>
                <option value="fbxar">fbx AR</option>
                <option value="fbxvr">fbx VR</option>
              </select><br> 
            </div>
            <div class="row">

              <span>Object File</span>
              <input type="file"   class="browser-default" required="true" name="file" accept=".usdz,.fbx,.mp4"/>
            </div>
            <div class="row">
              <span>Object Image</span>
              <input type="file"  class="browser-default" name="render"  required="true" accept="jpg"/>
            </div>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Upload" class="btn btn-primary btn-grad waves-effect waves-light btn" />
        </div>
      </form>




    </div>
  </div>
</div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
</div>

      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('statementdetails') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  //angualar calll statementdetails => recipient
})




</script>