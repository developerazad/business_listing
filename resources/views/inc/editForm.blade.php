    <form action="{{ url('listings/'.$listing->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
        <div class="form-group"> <!-- Name -->
            <label for="full_name_id" class="control-label">Name</label>
            <input type="text" class="form-control" value="{{ $listing->name }}" id="full_name_id" name="name" placeholder="Enter Your Name">
        </div>

        <div class="form-group"> <!-- Address 1 -->
            <label for="street1_id" class="control-label">Address</label>
            <input type="text" class="form-control" value="{{ $listing->address }}" id="street1_id" name="address" placeholder="Street address, P.O. box, company name, c/o">
        </div>

        <div class="form-group"> <!-- Website-->
            <label for="city_id" class="control-label">Website</label>
            <input type="text" class="form-control" value="{{ $listing->website }}" id="city_id" name="website" placeholder="developerazad.com">
        </div>

        <div class="form-group"> <!-- E-mail-->
            <label for="zip_id" class="control-label">E-mail</label>
            <input type="email" class="form-control" value="{{ $listing->email }}" id="zip_id" name="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group"> <!-- Phone-->
            <label for="zip_id" class="control-label">Phone</label>
            <input type="text" class="form-control" value="{{ $listing->phone }}" id="zip_id" name="phone" placeholder="555-675439">
        </div>
        <div class="form-group"><!-- Bio-->
            <label for="zip_id" class="control-label">Bio</label>
            <textarea name="bio" class="form-control"  id="" cols="30" rows="5">{{ $listing->bio }}</textarea>
        </div>

        <div class="form-group"> <!-- Submit Button -->
            <button type="submit" class="btn btn-primary pull-right">Update</button>
        </div>
    </form>