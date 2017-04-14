<div class="panel panel-default">
    <div class="panel-heading">
        <h6 class="panel-title ptitle"><strong><i class="fa fa-user-plus"></i>&emsp;Add New Student</strong></h6>
    </div>
    <div class="panel-body">
        <div class="form">
            <form action="#" class="form-horizontal" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="col-form-legend">Personal Information&emsp;
                                <small class="text-muted">(Basic information about the student)</small>
                            </legend>
                            <div class="form-group">
                                <label for="fname" class="control-label col-md-3">First Name:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Felix">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sname" class="control-label col-md-3">Second Name:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="sname" name="sname" placeholder="Watilah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender" class="control-label col-md-3">Gender:</label>
                                <div class="col-md-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender">Male
                                    </label>
                                    <label class="radio-inline" for="female">
                                        <input type="radio" id="female" name="gender">Female
                                    </label>
                                    <label class="radio-inline" for="other">
                                        <input type="radio" id="other" name="gender">Other
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="control-label col-md-3">DOB:</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="20/02/2000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id" class="control-label col-md-3">ID No:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="id" name="id" placeholder="29007776">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nationality" class="control-label col-md-3">Nationality:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Kenyan">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <legend class="col-form-legend">Address&emsp;
                                <small class="text-muted">(Information about residence and contact address)</small>
                            </legend>
                            <div class="form-group">
                                <label for="phone" class="control-label col-md-3">Phone Number:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0712423121">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="fwatilah@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="county" class="control-label col-md-3">County:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="county" name="county" placeholder="Trans-Nzoia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="town" class="control-label col-md-3">Town:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="town" name="town" placeholder="Kitale">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="box" class="control-label col-md-3">P.O Box:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="box" name="box" placeholder="200">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="code" class="control-label col-md-3">Postal Code:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="code" name="code" placeholder="30200">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <legend class="col-form-legend">Education&emsp;
                                <small class="text-muted">(Student details concerning education)</small>
                            </legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adm" class="control-label col-md-3">Adm No:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="adm" name="adm" placeholder="CIT-221-010/2014">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="yos" class="control-label col-md-3">YOS:</label>
                                        <div class="col-md-9">
                                            <select name="yos" id="yos" class="form-control">
                                                <option value="select">-- Select year of study --</option>
                                                <option value="first">First Year</option>
                                                <option value="second">Second Year</option>
                                                <option value="third">Third Year</option>
                                                <option value="fourth">Fourth Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="control-label col-md-3">Student Type:</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="type" id="type">
                                                <option value="select">-- Select student type --</option>
                                                <option value="kuccps">KUCCPS</option>
                                                <option value="ssp">SSPS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pic" class="control-label col-md-3">Photo:</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control-file" id="pic" name="pic">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="residence" class="control-label col-md-3">Residence:</label>
                                        <div class="col-md-9">
                                            <select name="residence" id="residence" class="form-control">
                                                <option value="select">-- Select your residence --</option>
                                                <option value="hostel">School Hostel</option>
                                                <option value="rental">Rental</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">SAVE</button>
                            <button type="reset" class="btn btn-primary">RESET</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>