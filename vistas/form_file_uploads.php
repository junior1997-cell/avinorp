<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close" style="--primary-rgb: 208, 2, 149;">

  <head>
    <?php $title_page = "Inicio 1"; include("partials/mainhead.php"); ?>

    <!-- Prism CSS -->
    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">

    <link rel="stylesheet" href="../assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">
    <link rel="stylesheet" href="../assets/libs/dropzone/dropzone.css">

  </head>

  <body>

    <?php include("partials/switcher.php"); ?>
    <?php include("partials/loader.php"); ?>

    <div class="page">
      <?php include("partials/header.php"); ?>
      <?php include("partials/sidebar.php"); ?>

      <!-- Start::app-content -->
      <div class="main-content app-content">
        <div class="container-fluid">
          
          <?php $title_body = "File Uploads"; $subtitle_body = "Form Elements"; include("partials/page-header.php") ?>

          <!-- Start:: row-1 -->
          <div class="row">
            <div class="col-xl-6">
              <div class="card custom-card">
                <div class="card-header justify-content-between">
                  <div class="card-title">
                    Bootstrap File Input
                  </div>
                  <div class="prism-toggle">
                    <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input
                      example</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple="">
                  </div>
                  <div class="mb-3">
                    <label for="formFileDisabled" class="form-label">Disabled file input
                      example</label>
                    <input class="form-control" type="file" id="formFileDisabled" disabled="">
                  </div>
                  <div class="mb-3">
                    <label for="formFileSm" class="form-label">Small file input example</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                  </div>
                  <div>
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>
                </div>
                <div class="card-footer d-none border-top-0">
                  <!-- Prism Code -->
                  <pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
      &lt;label for="formFile" class="form-label"&gt;Default file input example&lt;/label&gt;
      &lt;input class="form-control" type="file" id="formFile"&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
      &lt;label for="formFileMultiple" class="form-label"&gt;Multiple files input
          example&lt;/label&gt;
      &lt;input class="form-control" type="file" id="formFileMultiple" multiple=""&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
      &lt;label for="formFileDisabled" class="form-label"&gt;Disabled file input
          example&lt;/label&gt;
      &lt;input class="form-control" type="file" id="formFileDisabled" disabled=""&gt;
  &lt;/div&gt;
  &lt;div class="mb-3"&gt;
      &lt;label for="formFileSm" class="form-label"&gt;Small file input example&lt;/label&gt;
      &lt;input class="form-control form-control-sm" id="formFileSm" type="file"&gt;
  &lt;/div&gt;
  &lt;div&gt;
      &lt;label for="formFileLg" class="form-label"&gt;Large file input example&lt;/label&gt;
      &lt;input class="form-control form-control-lg" id="formFileLg" type="file"&gt;
  &lt;/div&gt;</code></pre>
                  <!-- Prism Code -->
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <h6 class="mb-3">Filepond:</h6>
              <div class="row">
                <div class="col-xl-12">
                  <div class="card custom-card">
                    <div class="card-header">
                      <div class="card-title">
                        Multiple Upload
                      </div>
                    </div>
                    <div class="card-body">
                      <input type="file" class="multiple-filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card custom-card">
                    <div class="card-header">
                      <div class="card-title">
                        Single Upload
                      </div>
                    </div>
                    <div class="card-body">
                      <input type="file" class="single-fileupload" name="filepond" accept="image/png, image/jpeg, image/gif">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End:: row-1 -->

          <!-- Start:: row-2 -->
          <div class="row">
            <div class="col-xl-12">
              <div class="card custom-card">
                <div class="card-header">
                  <div class="card-title">
                    Dropzone
                  </div>
                </div>
                <div class="card-body">
                  <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone"></form>
                </div>
              </div>
            </div>
          </div>
          <!-- End:: row-2 -->

        </div>
      </div>
      <!-- End::app-content -->

      <?php include("partials/headersearch_modal.php"); ?>
      <?php include("partials/footer.php"); ?>

    </div>

    <?php include("partials/commonjs.php"); ?>

    <?php include("partials/custom_switcherjs.php"); ?>

    <!-- Prism JS -->
    <script src="../assets/libs/prismjs/prism.js"></script>
    <script src="../assets/js/prism-custom.js"></script>

    <!-- Filepond JS -->
    <script src="../assets/libs/filepond/filepond.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="../assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

    <!-- Dropzone JS -->
    <script src="../assets/libs/dropzone/dropzone-min.js"></script>

    <!-- Fileupload JS -->
    <script src="../assets/js/fileupload.js"></script>

    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>

  </body>

</html>