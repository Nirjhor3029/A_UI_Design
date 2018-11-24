@extends('layouts.admin')

@push('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <style>
  img{
    max-width:30rem;
    margin: 0.5rem;
  }
  .select2 {
  width:100%!important;
  }
  </style>
@endpush

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Vendor
      </h1>
    </section>

    <section class="maincontent">

      <div class="col-md-12" style="margin-top:2rem;">

        <div class="box box-primary">
          <div class="box-body" style="margin-top:2rem;">
            <form action="{{route('vendors.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="col-md-6" style="margin-bottom:2rem;">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="vendor_name" class="control-label col-md-3">Vendor Name: <span style="color:red;">*</span> </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" id="vendor_name" placeholder="Enter name" name="vendor_title" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="about_us">Vendor About Us: <span style="color:red;">*</span> </label>
                  <div class="col-md-9">
                    <textarea rows="5" class="form-control" id="about_us" placeholder="Enter about us" name="about_us" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="vendor_contact">Vendor Contact : <span style="color:red;">*</span> </label>
                  <div class="col-md-9">
                    <textarea rows="3" class="form-control" id="vendor_contact" placeholder="Enter contact us" name="vendor_contact" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3" for="vendor_catagory">Catagory: <span style="color:red;">*</span></label>
                  <div class="col-md-9">
                    <select style="padding: 5px;" class="form-control" id="vendor_catagory" name="vendor_catagory" required>
                      <option value="">-- Select any type --</option>
                      @foreach ($catagories as $catagory)
                        <option value="{{$catagory->id}}" style="text-transform:capitalize;">{{$catagory->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 1): <span style="color:red;">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_1_title" placeholder="Enter name" name="startingat_1_title" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 1): <span style="color:red;">*</span> </label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_1_price" placeholder="Enter name" name="startingat_1_price" required>
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 2):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_2_title" placeholder="Enter name" name="startingat_2_title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 2):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_2_price" placeholder="Enter name" name="startingat_2_price">
                  </div>
                </div>

                <hr>

                <div class="form-group">
                  <label for="startingat_1_title" class="control-label col-md-4">Starting Price Title (Catagory 3):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_3_title" placeholder="Enter name" name="startingat_3_title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="startingat_1_price" class="control-label col-md-4">Starting Price Price (Catagory 3):</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" id="startingat_3_price" placeholder="Enter name" name="startingat_3_price">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <table class="table table-responsive">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="feature1" class="control-label">Feature 1: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature1" name="feature1" placeholder="Feature 1" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature2" class="control-label">Feature 2: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature2" name="feature2" placeholder="Feature 2" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature3" class="control-label">Feature 3: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature3" name="feature3" placeholder="Feature 3" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature4" class="control-label">Feature 4: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature4" name="feature4" placeholder="Feature 4" required>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="feature5" class="control-label">Feature 5: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature5" name="feature5" placeholder="Feature 5" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature6" class="control-label">Feature 6: <span style="color:red;">*</span> </label>
                          <input type="text" class="form-control" id="feature6" name="feature6" placeholder="Feature 6" required>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature7" class="control-label">Feature 7:</label>
                          <input type="text" class="form-control" id="feature7" name="feature7" placeholder="Feature 7">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <label for="feature8" class="control-label">Feature 8:</label>
                          <input type="text" class="form-control" id="feature8" name="feature8" placeholder="Feature 8">
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <div class="form-group">
                  <label class="control-label col-md-2" for="lowest_price">Lowest Price:</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" id="lowest_price" name="lowest_price" placeholder="Enter the lowest price for the filter" required>
                  </div>
                </div>

                <div class="form-group" id="venue_area" style="display:none;">
                  <label class="control-label col-md-2" for="venue_area">Area:</label>
                  <div class="col-md-10">
                    <select class="form-control" name="venue_area" id="venue_area_select">
                      <option value="">-- Area In The City --</option>
                      <option class="option" value="uttara">Uttara</option>
                      <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi</option>
                      <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
                      <option class="option" value="Badda-Banasree">Badda - Banasree</option>
                      <option class="option" value="gulshan-banani">Gulshan - Banani</option>
                      <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
                      <option class="option" value="Rajarbag-Shantinagar">Rajarbag - Shantinagar</option>
                      <option class="option" value="Magbazar - Eskaton">Magbazar - Eskaton</option>
                      <option class="option" value="mirpur-pallabi">Mirpur - Pallabi</option>
                      <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
                      <option class="option" value="shamoli-mohammadpur">Shamoli - Mohammadpur</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="kazi_area" style="display:none;">
                  <label class="control-label col-md-2" for="kazi_area">Area:</label>
                  <div class="col-md-10">
                    <select class="form-control" name="kazi_area" id="kazi_area_select">
                      <option value="">Area In The City</option>
                      <option class="option" value="uttara">Uttara</option>
                      <option class="option" value="Shamoli-Mohammadpur">Shamoli - Mohammadpur</option>
                      <option class="option" value="Magbazar-Eskaton">Magbazar - Eskaton</option>
                      <option class="option" value="Badda-Banasree">Badda - Banasree</option>
                      <option class="option" value="Baridhara-Bosundhara">Baridhara - Bosundhara</option>
                      <option class="option" value="Firmget-Mohakhali">Firmget - Mohakhali</option>
                      <option class="option" value="Old-dhaka">Old Dhaka</option>
                      <option class="option" value="Lalbag-Azimpur">Lalbag - Azimpur</option>
                      <option class="option" value="Mirpur-Pallabi">Mirpur - Pallabi</option>
                      <option class="option" value="Cantonment-Kafrul">Cantonment - Kafrul</option>
                      <option class="option" value="Paltan-Motijheel">Paltan - Motijheel</option>
                      <option class="option" value="Gulshan-Banani">Gulshan - Banani</option>
                      <option class="option" value="Lalmatia-Dhanmondi">Lalmatia - Dhanmondi</option>
                      <option class="option" value="Rampura-Khilgaon">Rampura - Khilgaon</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="menu_type" style="display:none;">
                  <label class="control-label col-md-2" for="menu_type">Menu Type:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="menu_type_select" name="menu_type[]" multiple="multiple">
                      <option class="option" value="fixed">Fixed Menu</option>
                      <option class="option" value="chef">Chef Only</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="event_type" style="display:none;">
                  <label class="control-label col-md-2" for="event_type">Event Type:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="event_type_select" name="event_type[]" multiple="multiple">
                      <option class="option" value="wedding">Wedding</option>
                      <option class="option" value="birthday">Birthday</option>
                      <option class="option" value="corporate">Corporate</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="speciality" style="display:none;">
                  <label class="control-label col-md-2" for="speciality">Speciality:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="speciality_select" name="speciality[]" multiple="multiple">
                      <option class="option" value="paper">Paper Made</option>
                      <option class="option" value="wood">Wood Made</option>
                      <option class="option" value="hand">Hand Made</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" id="bakery_speciality" style="display:none;">
                  <label class="control-label col-md-2" for="bakery_speciality">Bakery Speciality:</label>
                  <div class="col-md-10">
                    <select class="form-control" id="bakery_speciality_select" name="bakery_speciality[]" multiple="multiple">
                      <option class="option" value="birthday">Birthday Pastry</option>
                      <option class="option" value="wedding">Wedding Pastry</option>
                      <option class="option" value="snacks">Snacks</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="profile_image">Profile Image:</label>
                    <p>Max (600x600)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="profile_image" id="profile_image" accept="image/*" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="profile_image">Profile Image Preview</label>
                    <div id="profile-preview"></div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="logo_image">Logo Image:</label>
                    <p>Max (600x600)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="logo_image" id="logo_image" accept="image/*" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label for="Feature Image">Logo Image Preview</label>
                    <div id="logo-preview"></div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="control-label col-lg-2">
                    <label class="" for="feature_image">Feature Image:</label>
                    <p>Max (600x400)</p>
                  </div>
                  <div class="col-lg-4">
                    <input type="file" name="feature_image[]" id="feature_image" accept="image/*" class="form-control" multiple>
                  </div>
                  <div class="col-lg-4">
                    <label for="Extra Image">Feature Image Preview</label>
                    <div id="feature_image_preview"></div>
                  </div>
                </div>

              </div>
              <div>
                <button class="btn btn-primary pull-right" type="submit" >Upload vendor</button>
              </div>
            </form>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div>



    </section><!-- /.content -->
  </div>


@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script>
  function previewprofileImage() {
    var $preview = $('#profile-preview').empty();
    if (this.files) $.each(this.files, readAndPreview);

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  function previewlogoImage() {
    var $preview = $('#logo-preview').empty();
    if (this.files) $.each(this.files, readAndPreview);

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  function previewfeatureImages() {

    if(this.files.length > 3){
      alert('Too many files');
      var $preview = $('#feature_image_preview').empty();
    }else{
      var $preview = $('#feature_image_preview').empty();
      if (this.files) $.each(this.files, readAndPreview);
    }

    function readAndPreview(i, file) {

      if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
        return alert(file.name +" is not an image");
      }
      var reader = new FileReader();

      $(reader).on("load", function() {
        $preview.append($("<img/>", {src:this.result}));
      });

      reader.readAsDataURL(file);

    }
  }

  $('#profile_image').on("change", previewprofileImage);
  $('#logo_image').on("change", previewlogoImage);
  $('#feature_image').on("change", previewfeatureImages);

  $('#vendor_catagory').on('change', function () {
    if (this.value == '9') {
      $("#venue_area").css('display', (this.value == '9') ? 'block' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '9') ? 'none' : 'none').attr('required',true);
      $("#event_type").css('display', (this.value == '9') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '9') ? 'none' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '9') ? 'none' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '9') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '11'){
      $("#menu_type").css('display', (this.value == '11') ? 'block' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '11') ? 'none' : 'none').attr('required',true);
      $("#event_type").css('display', (this.value == '11') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '11') ? 'none' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '11') ? 'none' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '11') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '12'){
      $("#event_type").css('display', (this.value == '12') ? 'block' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '12') ? 'none' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '12') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '12') ? 'none' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '12') ? 'none' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '12') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '13'){
      $("#event_type").css('display', (this.value == '13') ? 'block' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '13') ? 'none' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '13') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '13') ? 'none' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '13') ? 'none' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '13') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '14'){
      $("#speciality").css('display', (this.value == '14') ? 'block' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '14') ? 'none' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '14') ? 'none' : 'none').attr('required',true);
      $("#event_type").css('display', (this.value == '14') ? 'none' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '14') ? 'none' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '14') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '16'){
      $("#bakery_speciality").css('display', (this.value == '16') ? 'block' : 'none').attr('required',true);
      $("#home_service").css('display', (this.value == '16') ? 'none' : 'none').attr('required',true);
      $("#event_type").css('display', (this.value == '16') ? 'none' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '16') ? 'none' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '16') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '16') ? 'none' : 'none').attr('required',true);
    }
    else if (this.value == '17'){
      $("#home_service").css('display', (this.value == '17') ? 'block' : 'none').attr('required',true);
      $("#event_type").css('display', (this.value == '17') ? 'none' : 'none').attr('required',true);
      $("#menu_type").css('display', (this.value == '17') ? 'none' : 'none').attr('required',true);
      $("#venue_area").css('display', (this.value == '17') ? 'none' : 'none').attr('required',true);
      $("#speciality").css('display', (this.value == '17') ? 'none' : 'none').attr('required',true);
      $("#bakery_speciality").css('display', (this.value == '17') ? 'none' : 'none').attr('required',true);
    }
  });
  $('#menu_type_select,#event_type_select,#speciality_select,#bakery_speciality_select,#venue_area_select,#home_service_select').select2();
</script>

@endpush
