<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form action="UploadFile.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                    <input type="file" name="file" id="file" value="$allowedExts" class="input-file" accept=".avi,.mp3,.mp4,.3gp,.txt,.tex,.wpd,.docx,.pdf" runat="server" action="DB.php">
                                                 <div class="form-group">
                                           <label for="file" class="btn btn-tertiary js-labelFile">
                                            <i class="icon fa fa-check"></i>
                                            <span class="js-fileName">Choose a file</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col">
                                        <select class="form-select" value="$allowedExts,$extension">
                                            <option value="mp4">Video</option>
                                            <option value="mp3">Audio</option>
                                            <option value="txt">Text</option>
                                            <option value="pdf">PDF</option>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                                    <button type="submit" class="btn btn-primary" value="submit">UPLOAD</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery("#open-menu").click(function(){
                    if(jQuery('#page-container').hasClass('show-menu')){
                    jQuery("#page-container").removeClass('show-menu');
                }
                    
                    else{
                    jQuery("#page-container").addClass('show-menu');
                    }
                });
            });
        </script>

        <script type="text/javascript">
            (function() 
            {
    
                'use strict';

                $('.input-file').each(function() {
                var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();
        
                $input.on('change', function(element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
                });
                });

            })();
        </script>

        
    </body>
</html>
