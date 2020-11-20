<link href="css/custom/fileupload/jquery.fileupload.css"/>
<link href="css/custom/ileupload/jquery.fileupload-ui.css"/>
<link href="css/custom/blueimp-gallery.css"/>
<!-- CSS adjustments for browsers with JavaScript disabled -->

<!-- <asset:stylesheet src="glyphicons.css"/>
%{--<asset:stylesheet src="fileupload/jquery.fileupload-noscript.css"/>--}%
%{--<asset:stylesheet src="fileupload/jquery.fileupload-ui-noscript.css"/>--}% -->


<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/custom/jquery.ui.widget.js"/>
<!-- The main application script -->
<script src="js/custom/fileupload/demo.js"/>
<!-- The File Upload user interface plugin -->
<script src="js/custom/fileupload/jquery.fileupload-ui.js"/>
<!-- The File Upload validation plugin -->
  <script src="js/custom/fileupload/jquery.fileupload-validate.js"/>
<!-- The File Upload image preview & resize plugin -->
<script src="js/custom/fileupload/jquery.fileupload-image.js"/>
<!-- The File Upload processing plugin -->
<script src="js/custom/fileupload/jquery.fileupload-process.js"/>
<!-- The basic File Upload plugin -->
<script src="js/custom/jquery.fileupload.js"/>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/custom/fileupload/jquery.iframe-transport.js"/>
<!-- Gallery script -->
  <script src="js/custom/jquery.blueimp-gallery.min.js"/>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/custom/canvas-to-blob.min.js"/>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/custom/fileupload/template.js"/>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/custom/fileupload/own.js"/>
<script src="js/custom/fileupload/jquery.xdr-transport.js"/>
<script src="js/custom/load-image.all.min.js"/>
<script src="js/custom/tmpl.min.js"/>
// <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
// <!--[if (gte IE 8)&(lt IE 10)]>

<!-- Generic page styles -->
<style>
#navigation {
    margin: 10px 0;
}
@media (max-width: 767px) {
    #title,
    #description {
        display: none;
    }
}
</style>
<!-- blueimp Gallery styles -->


<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->


<div class="container">


    <!-- Modal -->
    <div class="modal fade " id="myModal" role="dialog">
        <div class="modal-dialog " style="width: 75%!important;">

            <!-- Modal content-->
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body  ">
                    <div class="container">

                        <!-- The file upload form used as target for the file upload widget -->
                       <g:form name="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data"/>
                        %{--<form--}%
                                %{--id="fileupload"--}%
                                %{--action="https://jquery-file-upload.appspot.com/"--}%
                                %{--method="POST"--}%
                                %{--enctype="multipart/form-data"--}%
                        %{-->--}%
                            <!-- Redirect browsers with JavaScript disabled to the origin page -->
                            <noscript
                            >
                        <input
                                    type="hidden"
                                    name="redirect"
                                    value="https://blueimp.github.io/jQuery-File-Upload/"
                            /></noscript>
                            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                            <div class="row fileupload-buttonbar">
                                <div class="col-lg-7">
                                    <!-- The fileinput-button span is used to style the file input field as button -->
                                    <span class="btn btn-success fileinput-button">
                                        <i class="glyphicon glyphicon-plus"></i>
                                        <span>Add files...</span>
                                        %{--<input type="file" name="files[]" />--}%
                                    <g:field type="file" name="files[]" multiple="multiple" />
                                    %{--<asset:image name="files[]" multiple="multiple"/> --}%
                                    </span>
                                    <button type="submit" class="btn btn-primary start">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Start upload</span>
                                    </button>
                                    <button type="reset" class="btn btn-warning cancel">
                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                        <span>Cancel upload</span>
                                    </button>
                                    <button type="button" class="btn btn-danger delete">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        <span>Delete selected</span>
                                    </button>
                                    <input type="checkbox" class="toggle" />
                                    <!-- The global file processing state -->
                                    <span class="fileupload-process"></span>
                                </div>
                                <!-- The global progress state -->
                                <div class="col-lg-5 fileupload-progress fade">
                                    <!-- The global progress bar -->
                                    <div
                                            class="progress progress-striped active"
                                            role="progressbar"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                    >
                                        <div
                                                class="progress-bar progress-bar-success"
                                                style="width:0%;"
                                        ></div>
                                    </div>
                                    <!-- The extended global progress state -->
                                    <div class="progress-extended">&nbsp;</div>
                                </div>
                            </div>
                            <!-- The table listing the files available for upload/download -->
                            <table role="presentation" class="table table-striped">
                                <tbody class="files"></tbody>
                            </table>
                        </form>
                        <div class="row">
                            <div class="panel-heading">
                                <h3 class="panel-title">Demo Notes</h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        The maximum file size for uploads in this demo is
                                        <strong>999 KB</strong> (default file size is unlimited).
                                    </li>
                                    <li>
                                        Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in
                                    this demo (by default there is no file type restriction).
                                    </li>
                                    <li>
                                        Uploaded files will be deleted automatically after
                                        <strong>5 minutes or less</strong> (demo files are stored in
                                    memory).
                                    </li>
                                    <li>
                                        You can <strong>drag &amp; drop</strong> files from your desktop
                                    on this webpage (see
                                        <a
                                                href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support"
                                        >Browser support</a
                                        >).
                                    </li>
                                    <li>
                                        Please refer to the
                                        <a href="https://github.com/blueimp/jQuery-File-Upload"
                                        >project website</a
                                        >
                                        and
                                        <a href="https://github.com/blueimp/jQuery-File-Upload/wiki"
                                        >documentation</a
                                        >
                                        for more information.
                                    </li>
                                    <li>
                                        Built with the
                                        <a href="https://getbootstrap.com/">Bootstrap</a> CSS framework
                                    and Icons from <a href="https://glyphicons.com/">Glyphicons</a>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- The blueimp Gallery widget -->
                    <div
                            id="blueimp-gallery"
                            class="blueimp-gallery blueimp-gallery-controls"
                            data-filter=":even"
                    >
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>


                    %{--<script--}%
                            %{--src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"--}%
                            %{--integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"--}%
                            %{--crossorigin="anonymous"--}%
                    %{--></script>--}%



                </div>
            <!-- END #content -->

            <!-- BEGIN btn-scroll-top -->
            <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
            <!-- END btn-scroll-top -->
        </div>
            <!-- END #app -->

            <!-- BEGIN theme-panel -->

            <!-- BEGIN template-upload -->
            <script id="template-upload" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-upload">
			<td>
				<span class="preview"></span>
			</td>
			<td>
				<p class="name">{%=file.name%}</p>
				<strong class="error text-danger"></strong>
			</td>
			<td>
				<p class="size m-b-5">Processing...</p>
				<div class="progress progress-sm m-b-0 progress-striped active"><div class="progress-bar progress-bar-primary" style="min-width: 2em; width:0%;"></div></div>
			</td>
			<td nowrap>
				{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-primary btn-sm start" disabled>
						<i class="glyphicon glyphicon-upload"></i>
						<span>Start</span>
					</button>
				{% } %}
				{% if (!i) { %}
					<button class="btn btn-default btn-sm cancel m-l-3">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
	</script>
            <!-- END template-upload -->

            <!-- BEGIN template-download -->
            <script id="template-download" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-download">
			<td>
				<span class="preview">
					{% if (file.thumbnailUrl) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
					{% } %}
				</span>
			</td>
			<td>
				<p class="name">
					{% if (file.url) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
					{% } else { %}
						<span>{%=file.name%}</span>
					{% } %}
				</p>
				{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
				{% } %}
			</td>
			<td>
				<span class="size">{%=o.formatFileSize(file.size)%}</span>
			</td>
			<td nowrap>

					<button class="btn btn-danger btn-sm delete m-l-3" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
						<i class="glyphicon glyphicon-trash"></i>
						<span>Delete</span>
					</button>
					<div class="checkbox-inline checkbox-danger m-t-5">
						<input type="checkbox" id="{%=file.deleteUrl%}" name="delete" value="1" class="toggle" />
						<label for="{%=file.deleteUrl%}"></label>
					</div>

					<button class="btn btn-default btn-sm cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>

			</td>
		</tr>

	</script>
                </div>
                %{--<div class="modal-footer">--}%
                    %{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}%
                %{--</div>--}%
            %{--</div>--}%

        </div>
    </div>

</div>
