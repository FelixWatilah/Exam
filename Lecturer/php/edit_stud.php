<div class="modal fade" id="edit_stud">
    <div class="modal-dialog modal-lg modal-md modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <span class="modal-title">
                    <strong>
                        <button role="button" class="close fa fa-2x fa-times-circle" data-dismiss="modal"></button>
                        <h4 class="text-center">Update Student Details</h4>
                    </strong>
                </span>
            </div><!-- end modal-footer -->
            <div class="modal-body">
                <form class="form-horizontal" action="php/stud_update.php" onsubmit='return confirm("Are you sure you want to Update this student?");' method="post">
                    <div class="row">
                        <div id="u_info"></div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="control-label col-md-3" for="u_adm">Adm No:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="u_adm" name="u_adm" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_name">Name:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_name" name="u_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_email">Email:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="email" id="u_email" name="u_email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_phone">Phone:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_phone" name="u_phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_id">ID No:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_id" name="u_id" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Gender:</label>
                                <div class="col-md-9">
                                    <label class="control-label radio-inline" for="male">
                                        <input type="radio" class="radio" name="u_gender" id="male" value="male" checked="checked">&nbsp;Male
                                    </label>
                                    <label class="control-label radio-inline" for="female">
                                        <input type="radio" class="radio" name="u_gender" value="female" id="female">&nbsp;Female
                                    </label>
                                    <label class="control-label radio-inline" for="female">
                                        <input type="radio" class="radio" name="u_gender" value="other" id="other">&nbsp;Other
                                    </label>
                                </div>
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_yos">YOS:</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="u_yos" name="u_yos">
                                        <option selected="selected" value="first">First Year</option>
                                        <option value="second">Second Year</option>
                                        <option value="third">Third</option>
                                        <option value="fourth">Fourth</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_type">Type:</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="u_type" name="u_type">
                                        <option selected="selected" value="kuccps">KUCCPS</option>
                                        <option value="ssps">SSPS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_county">County:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_county" name="u_county">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_town">Town:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_town" name="u_town">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_address">Address:</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" id="u_address" name="u_address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="u_res">Residence:</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="u_res" name="u_res">
                                        <option selected="selected" value="hostel">Hostel</option>
                                        <option value="rental">Rental</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                    <hr>
                    <div class="row">
                        <h6 class="text-center text-danger">Please select your subjects</h6>
                        <?php
                        $conn = mysqli_connect('localhost','root','','exam');

                        //if ($sub == true){
                            echo "
                                <div class='col-md-6 text-center text-primary'>
                                  <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub1\">Subject 1:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub1\" name=\"sub1\">";
                                            $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                            while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                            }
                                            echo "</select>
                                    </div>
                                </div>";
                            echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub2\">Subject 2:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub2\" name=\"sub2\">";
                                            $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                            while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                            }
                                            echo "</select>
                                    </div>
                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub3\">Subject 3:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub3\" name=\"sub3\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub4\">Subject 4:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub4\" name=\"sub4\">";
                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                        }
                        echo "</select>
                                    </div>
                                </div>
                                </div>";
                        echo "
                                <div class='col-md-6 text-center text-primary'>
                                      <div class=\"form-group\">
                                            <label class=\"col-md-3 control-label\" for=\"sub5\">Subject 5:</label>
                                                <div class=\"col-md-9\">
                                                    <select class=\"form-control multi\" id=\"sub5\" name=\"sub5\">";
                                                        $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                                        while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                            echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                                        }
                                                        echo "</select>
                                                                    </div>
                                                                </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub6\">Subject 6:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub6\" name=\"sub6\">";
                                            $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                            while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                            }
                                            echo "</select>
                                                        </div>
                                                    </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub7\">Subject 7:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub7\" name=\"sub7\">";
                                            $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                            while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                            }
                                            echo "</select>
                                                        </div>
                                                    </div>";
                        echo "
                                <div class=\"form-group\">
                                    <label class=\"col-md-3 control-label\" for=\"sub8\">Subject 8:</label>
                                    <div class=\"col-md-9\">
                                        <select class=\"form-control multi\" id=\"sub8\" name=\"sub8\">";
                                            $sub = mysqli_query($conn, "SELECT * FROM `subject`");
                                            while ($row = mysqli_fetch_array($sub, MYSQLI_BOTH)) {
                                                echo "<option value='".$row['subject_name']."'>".$row['subject_name']."</option>";
                                            }
                                            echo "</select>
                                                        </div>
                                                    </div>
                                                    </div>";
                        //}else{
                        //    echo "No subjects found";
                        //}
                        ?>
                        <script>
                            $('.multi').SumoSelect();
                        </script>
                    </div>
                    <hr>
                    <div class="row text-center" id="modal_buttons">
                        <input type="submit" class="btn btn-success" name="update" value="UPDATE" id="update">
                    </div><!-- end row -->
                </form><!-- end form -->
            </div><!-- end modal-body -->
            <div class="modal-footer bg-danger">
                <small class="text-center text-danger">
                    Coded By: <i class="fa fa-heart text-success"></i><strong class="text-muted"> F.Watilah</strong>
                </small>
            </div>
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->