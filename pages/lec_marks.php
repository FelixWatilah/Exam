<div class="well">
    <div class="form">
        <form action="#" class="form-horizontal" method="post">
            <fieldset>
                <legend class="col-form-legend"><strong>Options</strong><small class="text-muted">&emsp;(Class, Year, Semester, Unit)</small></legend>
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="myear" class="control-label col-md-3">Year:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="myear" name="myear" placeholder="2017">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="class" class="control-label col-md-3">Class:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="class" name="class">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="semester" class="control-label col-md-3">Sem:</label>
                            <div class="col-md-9">
                                <select name="semester" id="semester" class="form-control">
                                    <option value="select" selected="selected">-- Select --</option>
                                    <option value="one">One</option>
                                    <option value="two">Two</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <label for="unit" class="control-label col-md-3">Unit:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="unit" name="unit">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Submit" name="tsubmit">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="panel panel-default">

    <div class="panel-heading">
        <h1 class="panel-title">Marks</h1>
    </div>
    <div class="panel-body">
        <div class="row">
            <table class="table table-responsive table-bordered table-hover table-striped table-condensed">
                <tr>
                    <th>S/n</th>
                    <th>Name</th>
                    <th>Admission Number</th>
                    <th class="text">CAT 1</th>
                    <th class="text">CAT 2</th>
                    <th class="text">Assignment</th>
                    <th>Final Exam</th>
                    <th>Total</th>
                    <th>Grade</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Felix Watilah</td>
                    <td>CIT-221-010/2014</td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa fa-2x fa-trash text-center text-danger"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Joshua Ongaga</td>
                    <td>CIT-221-060/2014</td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td class="text"><input class="form-control" type="text"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa fa-2x fa-trash text-center text-danger"></i></td>
                </tr>
            </table>
        </div>
    </div>
</div>