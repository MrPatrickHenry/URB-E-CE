

<!-- Modal -->
<div class="modal fade" id="modalOrdersInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Insertion Order</h5>
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


          <form action="order" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="file-field input-field">
              <span>Agency if applicable</span>
              <input type="text" name="agency_name" value="" placeholder="agency name if applicable">
            </div>

            <div class="file-field input-field">
              <span>contact name</span>
              <input type="text" name="contact_name" value="">
            </div>

            <div class="file-field input-field">
              <span>contact title </span>
              <input type="text" name="contact_title" value="">
            </div>


            <div class="file-field input-field">
              <span>ad start date</span>
              <input type="text" name="ad_start_date" value="" class="datepicker" id="datepicker">
            </div>

            <div class="file-field input-field">
              <span>ad end date </span>
              <input type="text" name="ad_end_date" value="" class="datepicker" id="datepicker">
            </div>


            <div class="file-field input-field">
              <span>ad descritpion </span>
              <input type="text" name="ad_descritpion" value="">
            </div>

            <div class="file-field input-field">
              <span>ad descritpion </span>
              <input type="text" name="ad_descritpion" value="">
            </div>

            <div class="file-field input-field">
              <span>ad format</span>
              <input type="text" name="ad_format" value="">
            </div>

            <div class="file-field input-field">
                      <span>File</span>
           <input type="file" name="fbxasset" accept=".fbx"/>
            </div>

            <div class="file-field input-field">
              <span>device </span>
              <input type="text" name="device" value="">
            </div>

            <div class="file-field input-field">
              <span>os</span>
              <input type="text" name="os" value="">
            </div>

            <div class="file-field input-field">
              <span>interest</span>
              <input type="text" name="interesttesting" value="">
            </div>

            <div class="file-field input-field">
              <span>ad_offer_payout</span>
              <input type="text" name="ad_offer_payout" value="">
            </div>


            <div class="file-field input-field">
              <span>whitelist</span>
              <input type="text" name="whitelist" value="">
            </div>
            <div class="file-field input-field">
              <span>blacklist</span>
              <input type="text" name="blacklist" value="">
            </div>

            <div class="file-field input-field">
              <span>pegi</span>
              <input type="text" name="pegi" value="">
            </div>

            <div class="file-field input-field">
              <span>pegi</span>
              <input type="text" name="pegi" value="">
            </div>


            <div class="file-field input-field">
              <span> signature_digital_date</span>
              <input type="text" name="signature_digital_date" id="signature_digital_date" class="date" value="">
            </div>

            <div class="file-field input-field">
              <span>signature_digital </span>
              <input type="text" name="signature_digital" value="">
            </div>


            <div class="file-field input-field">
              <span>payment_t_and_c</span>
              <input type="text" name="payment_t_and_c" value="">
            </div>

            <input type="submit" value="Save" class="waves-effect waves-light btn" />
          </form>



    </div>
  </div>
</div>
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