
<div class="container col-lg-offset-2">
                <form class="form-horizontal" role="form" action="projectDetails.php" method="post" enctype="multipart/form-data" multipart="">
                    <fieldset style="margin-bottom: 5em;">
                        <!-- Form Name -->
                        <legend>Project Details Form</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="projectName">Project Name</label>
                            <div class="col-md-8">
                                <input id="projectName" name="projectName" type="text" placeholder="Project Name" class="form-control input-md" required="">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="projectDetails">Project Details</label>
                            <div class="col-md-4">
                                <textarea class="form-control" id="projectDetails" name="projectDetails" placeholder="project details"></textarea>
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="thumbNailImageChooser">Choose Thumbnail Image</label>
                            <div class="col-md-4">
                                <input id="thumbNailImageChooser" name="thumbNailImageChooser" class="input-file" type="file">
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="headerImageChooser">Choose Header Image</label>
                            <div class="col-md-4">
                                <input id="headerImageChooser" name="headerImageChooser" class="input-file" type="file">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="clientName">Client Name</label>
                            <div class="col-md-8">
                                <input id="clientName" name="clientName" type="text" placeholder="Client Name" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="clientTestimonial">Client Testimonial</label>
                            <div class="col-md-4">
                                <textarea class="form-control input-md" id="clientTestimonial" name="clientTestimonial" placeholder="client testimonial"></textarea>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="createdBy">Created By</label>
                            <div class="col-md-8">
                                <input id="createdBy" name="createdBy" type="text" placeholder="Created by" class="form-control input-md" required="">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="completedOn">Completed On</label>
                            <div class="col-md-8">
                                <input id="completedOn" name="completedOn" type="date" placeholder="Completed On" class="form-control input-md" required="">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="skills">Skills</label>
                            <div class="col-md-8">
                                <input id="skills" name="skills" type="text" placeholder="Skills" class="form-control input-md">
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="chooseImages">Choose Images</label>
                            <div class="col-md-4">
                                <input id="chooseImages" name="chooseImages[]" class="input-file" type="file" multiple="multiple">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="websiteLink">Website Link</label>
                            <div class="col-md-8">
                                <input id="websiteLink" name="websiteLink" type="text" placeholder="Website Link" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Multiple Checkboxes (inline) -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="categories">Categories</label>
                            <div class="col-md-4">
                                <label class="checkbox-inline" for="categories[]">
                                    <input type="checkbox" name="categories[]" id="categories[]" value="Design" style="margin-top: 8px;"> Design
                                </label>
                                <label class="checkbox-inline" for="categories[]">
                                    <input type="checkbox" name="categories[]" id="categories[]" value="Web" style="margin-top: 8px;"> Web
                                </label>
                                <label class="checkbox-inline" for="categories[]">
                                    <input type="checkbox" name="categories[]" id="categories[]" value="Products" style="margin-top: 8px;"> Products
                                </label>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit"></label>
                            <div class="col-md-4">
                                <button id="submit" name="submit" class="btn btn-inverse">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <!-- /form -->
            </div>
