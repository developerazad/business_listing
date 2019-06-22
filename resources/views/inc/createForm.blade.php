    <form action="{{ url('/listings/store') }}" method="post">

        <div class="form-group"> <!-- Name -->
            <label for="full_name_id" class="control-label">Name</label>
            <input type="text" class="form-control" id="full_name_id" name="name" placeholder="Enter Your Name">
        </div>

        <div class="form-group"> <!-- Address 1 -->
            <label for="street1_id" class="control-label">Address</label>
            <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Street address, P.O. box, company name, c/o">
        </div>

        {{--<div class="form-group"> <!-- Address 2 -->--}}
        {{--<label for="street2_id" class="control-label">Street Address 2</label>--}}
        {{--<input type="text" class="form-control" id="street2_id" name="street2" placeholder="Apartment, suite, unit, building, floor, etc.">--}}
        {{--</div>--}}

        <div class="form-group"> <!-- Website-->
            <label for="city_id" class="control-label">Website</label>
            <input type="text" class="form-control" id="city_id" name="website" placeholder="developerazad.com">
        </div>

        <div class="form-group"> <!-- E-mail-->
            <label for="zip_id" class="control-label">E-mail</label>
            <input type="text" class="form-control" id="zip_id" name="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group"> <!-- Phone-->
            <label for="zip_id" class="control-label">Phone</label>
            <input type="text" class="form-control" id="zip_id" name="phone" placeholder="555-675439">
        </div>
        <div class="form-group"><!-- Bio-->
            <label for="zip_id" class="control-label">Bio</label>
            <textarea name="bio" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>

        <div class="form-group"> <!-- Submit Button -->
            <button type="submit" class="btn btn-primary pull-right">Create</button>
        </div>
    </form>