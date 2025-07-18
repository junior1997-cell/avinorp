<!DOCTYPE html>
<html lang="es" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="icon-overlay-close" data-bg-img="bgimg4" style="--primary-rgb: 208, 2, 149;" loader="enable">

  <head>
    <?php $title_page = "Inicio 1"; include("template/head.php"); ?>
    <!-- Prism CSS -->
    <link rel="stylesheet" href="../assets/libs/prismjs/themes/prism-coy.min.css">
  </head>

<body>

  <?php include("template/switcher.php"); ?>
  <?php include("template/loader.php"); ?>

  <div class="page">

    <?php include("template/header.php"); ?>
    <?php include("template/sidebar.php"); ?>

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
      <div class="container-fluid">
        
        <?php $title_body = "Modal & Closes"; $subtitle_body = "Advanced Ui"; include("template/page-header.php") ?>

        <!-- Start:: row-1 -->
        <div class="row">
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Basic Modal
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Launch demo modal
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel1">Modal title</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModal"&gt;
    Launch demo modal
&lt;/button&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalLabel1"&gt;Modal title&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Save
                    changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Static backdrop
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Launch static backdrop modal
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>I will not close if you click outside me. Don't even try to
                          press
                          escape key.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#staticBackdrop"&gt;
    Launch static backdrop modal
&lt;/button&gt;
&lt;div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="staticBackdropLabel"&gt;Modal title
                &lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;p&gt;I will not close if you click outside me. Don't even try to
                    press
                    escape key.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Understood&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Scrolling long content
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                  Scrolling long content
                </button>
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollable" data-bs-keyboard="false" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel1">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          Libero
                          ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                          nisi
                          ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                          voluptatibus, ipsam quo est rerum modi quos expedita facere,
                          ex
                          tempore fuga similique ipsa blanditiis et accusamus
                          temporibus
                          commodi voluptas! Nobis veniam illo architecto expedita quam
                          ratione quaerat omnis. In, recusandae eos! Pariatur,
                          deleniti
                          quis ad nemo ipsam officia temporibus, doloribus fuga
                          asperiores
                          ratione distinctio velit alias hic modi praesentium aperiam
                          officiis eaque, accusamus aut. Accusantium assumenda,
                          commodi
                          nulla provident asperiores fugit inventore iste amet aut
                          placeat
                          consequatur reprehenderit. Ratione tenetur eligendi, quis
                          aperiam dolores magni iusto distinctio voluptatibus minus a
                          unde
                          at! Consequatur voluptatum in eaque obcaecati, impedit
                          accusantium ea soluta, excepturi, quasi quia commodi
                          blanditiis?
                          Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                          consequuntur quod quo veniam? Labore dignissimos reiciendis
                          accusamus recusandae est consequuntur iure.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable"&gt;
    Scrolling long content
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable" tabindex="-1"
        aria-labelledby="exampleModalScrollable" data-bs-keyboard="false"
        aria-hidden="true"&gt;
        &lt;div class="modal-dialog modal-dialog-scrollable"&gt;
            &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                    &lt;h6 class="modal-title" id="staticBackdropLabel1"&gt;Modal title
                    &lt;/h6&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                    &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Libero
                        ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                        nisi
                        ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                        voluptatibus, ipsam quo est rerum modi quos expedita facere,
                        ex
                        tempore fuga similique ipsa blanditiis et accusamus
                        temporibus
                        commodi voluptas! Nobis veniam illo architecto expedita quam
                        ratione quaerat omnis. In, recusandae eos! Pariatur,
                        deleniti
                        quis ad nemo ipsam officia temporibus, doloribus fuga
                        asperiores
                        ratione distinctio velit alias hic modi praesentium aperiam
                        officiis eaque, accusamus aut. Accusantium assumenda,
                        commodi
                        nulla provident asperiores fugit inventore iste amet aut
                        placeat
                        consequatur reprehenderit. Ratione tenetur eligendi, quis
                        aperiam dolores magni iusto distinctio voluptatibus minus a
                        unde
                        at! Consequatur voluptatum in eaque obcaecati, impedit
                        accusantium ea soluta, excepturi, quasi quia commodi
                        blanditiis?
                        Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                        consequuntur quod quo veniam? Labore dignissimos reiciendis
                        accusamus recusandae est consequuntur iure.&lt;/p&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                    &lt;button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save
                        Changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-1 -->

        <!-- Start:: row-2 -->
        <div class="row">
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Vertically centered modal
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable2">
                  Vertically centered modal
                </button>
                <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false" aria-hidden="true">
                  <!-- Scrollable modal -->
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel2">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          Libero
                          ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                          nisi
                          ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable2"&gt;
    Vertically centered modal
&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalScrollable2" tabindex="-1"
aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false"
aria-hidden="true"&gt;
&lt;!-- Scrollable modal --&gt;
&lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel2"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Libero
                ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                nisi
                ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save
                Changes&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Vertical Centered Scrollable
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable3">
                  Vertically centered scrollable modal
                </button>
                <div class="modal fade" id="exampleModalScrollable3" tabindex="-1" aria-labelledby="exampleModalScrollable3" data-bs-keyboard="false" aria-hidden="true">
                  <!-- Scrollable modal -->
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel3">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                          voluptatibus, ipsam quo est rerum modi quos expedita facere,
                          ex
                          tempore fuga similique ipsa blanditiis et accusamus
                          temporibus
                          commodi voluptas! Nobis veniam illo architecto expedita quam
                          ratione quaerat omnis. In, recusandae eos! Pariatur,
                          deleniti
                          quis ad nemo ipsam officia temporibus, doloribus fuga
                          asperiores
                          ratione distinctio velit alias hic modi praesentium aperiam
                          officiis eaque, accusamus aut. Accusantium assumenda,
                          commodi
                          nulla provident asperiores fugit inventore iste amet aut
                          placeat
                          consequatur reprehenderit. Ratione tenetur eligendi, quis
                          aperiam dolores magni iusto distinctio voluptatibus minus a
                          unde
                          at! Consequatur voluptatum in eaque obcaecati, impedit
                          accusantium ea soluta, excepturi, quasi quia commodi
                          blanditiis?
                          Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                          consequuntur quod quo veniam? Labore dignissimos reiciendis
                          accusamus recusandae est consequuntur iure.</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Lorem ipsum dolor sit amet.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable3"&gt;
    Vertically centered scrollable modal
&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalScrollable3" tabindex="-1"
aria-labelledby="exampleModalScrollable3" data-bs-keyboard="false"
aria-hidden="true"&gt;
&lt;!-- Scrollable modal --&gt;
&lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel3"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                voluptatibus, ipsam quo est rerum modi quos expedita facere,
                ex
                tempore fuga similique ipsa blanditiis et accusamus
                temporibus
                commodi voluptas! Nobis veniam illo architecto expedita quam
                ratione quaerat omnis. In, recusandae eos! Pariatur,
                deleniti
                quis ad nemo ipsam officia temporibus, doloribus fuga
                asperiores
                ratione distinctio velit alias hic modi praesentium aperiam
                officiis eaque, accusamus aut. Accusantium assumenda,
                commodi
                nulla provident asperiores fugit inventore iste amet aut
                placeat
                consequatur reprehenderit. Ratione tenetur eligendi, quis
                aperiam dolores magni iusto distinctio voluptatibus minus a
                unde
                at! Consequatur voluptatum in eaque obcaecati, impedit
                accusantium ea soluta, excepturi, quasi quia commodi
                blanditiis?
                Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                consequuntur quod quo veniam? Labore dignissimos reiciendis
                accusamus recusandae est consequuntur iure.&lt;/p&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save
                Changes&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Tooltips and popovers
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable4">
                  Launch demo modal
                </button>
                <div class="modal fade" id="exampleModalScrollable4" tabindex="-1" aria-labelledby="exampleModalScrollable4" data-bs-keyboard="false" aria-hidden="true">
                  <!-- Scrollable modal -->
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel4">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <h5>Popover in a modal</h5>
                        <p>This <a href="javascript:void(0);" role="button" class="btn btn-secondary" data-bs-toggle="popover" title="Popover title" data-bs-content="Popover body content is set in this attribute.">button</a>
                          triggers a popover on click.</p>
                        <hr>
                        <h5>Tooltips in a modal</h5>
                        <p><a href="javascript:void(0);" class="text-primary" data-bs-toggle="tooltip" title="Tooltip">This
                            link</a> and <a href="javascript:void(0);" class="text-primary" data-bs-toggle="tooltip" title="Tooltip">that link</a> have tooltips on hover.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable4"&gt;
    Launch demo modal
&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalScrollable4" tabindex="-1"
aria-labelledby="exampleModalScrollable4" data-bs-keyboard="false"
aria-hidden="true"&gt;
&lt;!-- Scrollable modal --&gt;
&lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel4"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;h5&gt;Popover in a modal&lt;/h5&gt;
            &lt;p&gt;This &lt;a href="javascript:void(0);" role="button" class="btn btn-secondary"
                    data-bs-toggle="popover" title="Popover title"
                    data-bs-content="Popover body content is set in this attribute."&gt;button&lt;/a&gt;
                triggers a popover on click.&lt;/p&gt;
            &lt;hr&gt;
            &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
            &lt;p&gt;&lt;a href="javascript:void(0);" class="text-primary" data-bs-toggle="tooltip" title="Tooltip"&gt;This
                    link&lt;/a&gt; and &lt;a href="javascript:void(0);" class="text-primary" data-bs-toggle="tooltip"
                    title="Tooltip"&gt;that link&lt;/a&gt; have tooltips on hover.
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save
                Changes&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-2 -->

        <!-- Start:: row-3 -->
        <div class="row">
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Using the grid
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable5">
                  Launch demo modal
                </button>
                <div class="modal fade" id="exampleModalScrollable5" tabindex="-1" aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel5">Modal title
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-4 bg-light border">.col-md-4</div>
                            <div class="col-md-4 ms-auto bg-light border">.col-md-4
                              .ms-auto</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-md-3 ms-auto bg-light border">.col-md-3
                              .ms-auto</div>
                            <div class="col-md-2 ms-auto bg-light border">.col-md-2
                              .ms-auto</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-md-6 ms-auto bg-light border">.col-md-6
                              .ms-auto</div>
                          </div>
                          <div class="row mt-3">
                            <div class="col-sm-9 bg-light border">
                              Level 1: .col-sm-9
                              <div class="row">
                                <div class="col-8 col-sm-6 bg-light border">
                                  Level 2: .col-8 .col-sm-6
                                </div>
                                <div class="col-4 col-sm-6 bg-light border">
                                  Level 2: .col-4 .col-sm-6
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save
                          Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable5"&gt;
    Launch demo modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable5" tabindex="-1"
        aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false"
        aria-hidden="true"&gt;
        &lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
            &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                    &lt;h6 class="modal-title" id="staticBackdropLabel5"&gt;Modal title
                    &lt;/h6&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                    &lt;div class="container-fluid"&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col-md-4 bg-light border"&gt;.col-md-4&lt;/div&gt;
                            &lt;div class="col-md-4 ms-auto bg-light border"&gt;.col-md-4
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-md-3 ms-auto bg-light border"&gt;.col-md-3
                                .ms-auto&lt;/div&gt;
                            &lt;div class="col-md-2 ms-auto bg-light border"&gt;.col-md-2
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-md-6 ms-auto bg-light border"&gt;.col-md-6
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-sm-9 bg-light border"&gt;
                                Level 1: .col-sm-9
                                &lt;div class="row"&gt;
                                    &lt;div class="col-8 col-sm-6 bg-light border"&gt;
                                        Level 2: .col-8 .col-sm-6
                                    &lt;/div&gt;
                                    &lt;div class="col-4 col-sm-6 bg-light border"&gt;
                                        Level 2: .col-4 .col-sm-6
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                    &lt;button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save
                        Changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Toggle between modals
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal
                </a>
                <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalToggleLabel">Modal 1
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Show a second modal and hide this one with the button below.
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalToggleLabel2">Modal 2
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Hide this modal and show the first with the button below.
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
    role="button"&gt;Open first modal
&lt;/a&gt;
&lt;div class="modal fade" id="exampleModalToggle"
aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true"
style="display: none;"&gt;
&lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalToggleLabel"&gt;Modal 1
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            Show a second modal and hide this one with the button below.
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button class="btn btn-primary"
                data-bs-target="#exampleModalToggle2"
                data-bs-toggle="modal"&gt;Open second modal&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalToggle2"
aria-labelledby="exampleModalToggleLabel2" tabindex="-1" aria-hidden="true"
style="display: none;"&gt;
&lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalToggleLabel2"&gt;Modal 2
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            Hide this modal and show the first with the button below.
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                data-bs-toggle="modal"&gt;Back to first&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Optional sizes
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra large modal (XL)</button>
                <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal (LG)</button>
                <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModalMD">Large modal (MD)</button>
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small modal (SM)</button>
                <div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalXlLabel">Extra large
                          modal</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Modal (XL)</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Modal (LG)</button>
                        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModalMD">Modal (MD)</button>
                        <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Modal (SM)</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLgLabel">Large modal
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Modal (XL)</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Modal (LG)</button>
                        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModalMD">Modal (MD)</button>
                        <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Modal (SM)</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalMD" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-hidden="true">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLgLabel">Large modal
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Modal (XL)</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Modal (LG)</button>
                        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModalMD">Modal (MD)</button>
                        <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Modal (SM)</button>       
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalSmLabel">Small modal
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Modal (XL)</button>
                        <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Modal (LG)</button>
                        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModalMD">Modal (MD)</button>
                        <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Modal (SM)</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary mb-sm-0 mb-1" data-bs-toggle="modal"
    data-bs-target="#exampleModalXl">Extra large modal&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary mb-sm-0 mb-1" data-bs-toggle="modal"
data-bs-target="#exampleModalLg"&gt;Large modal&lt;/button&gt;
&lt;button type="button" class="btn btn-warning" data-bs-toggle="modal"
data-bs-target="#exampleModalSm"&gt;Small modal&lt;/button&gt;
&lt;div class="modal fade" id="exampleModalXl" tabindex="-1"
aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-xl"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalXlLabel"&gt;Extra large
                modal&lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalLg" tabindex="-1"
aria-labelledby="exampleModalLgLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-lg"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalLgLabel"&gt;Large modal
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalSm" tabindex="-1"
aria-labelledby="exampleModalSmLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog modal-sm"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalSmLabel"&gt;Small modal
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-3 -->

        <!-- Start:: row-4 -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Fullscreen modal
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="bd-example">
                  <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                  <button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                  <button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>
                  <button type="button" class="btn btn-info mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>
                  <button type="button" class="btn btn-success mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>
                  <button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full screen below
                    xxl</button>
                </div>
                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenLabel">Full
                          screen modal</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen-sm-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenSmLabel">
                          Full
                          screen below sm</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen-md-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenMdLabel">
                          Full
                          screen below md</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen-lg-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenLgLabel">
                          Full
                          screen below lg</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen-xl-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenXlLabel">
                          Full
                          screen below xl</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog modal-fullscreen-xxl-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalFullscreenXxlLabel">
                          Full
                          screen below xxl</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreen"&gt;Full screen&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenSm"&gt;Full screen below sm&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenMd"&gt;Full screen below md&lt;/button&gt;
    &lt;button type="button" class="btn btn-info mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenLg"&gt;Full screen below lg&lt;/button&gt;
    &lt;button type="button" class="btn btn-success mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenXl"&gt;Full screen below xl&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenXxl"&gt;Full screen below
        xxl&lt;/button&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
    aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenLabel"&gt;Full
                    screen modal&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
    aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-sm-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenSmLabel"&gt;
                    Full
                    screen below sm&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
    aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-md-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenMdLabel"&gt;
                    Full
                    screen below md&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
    aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-lg-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenLgLabel"&gt;
                    Full
                    screen below lg&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
    aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-xl-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenXlLabel"&gt;
                    Full
                    screen below xl&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
    aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-xxl-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenXxlLabel"&gt;
                    Full
                    screen below xxl&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-4 -->

        <!-- Start:: row-5 -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Varying modal content
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#formmodal" data-bs-whatever="@mdo">Open modal for
                  @mdo</button>
                <button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal" data-bs-target="#formmodal" data-bs-whatever="@fat">Open modal for
                  @fat</button>
                <button type="button" class="btn btn-light mb-1" data-bs-toggle="modal" data-bs-target="#formmodal" data-bs-whatever="@getbootstrap">Open modal for
                  @getbootstrap</button>
                <div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">New message</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send
                          message</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
    data-bs-target="#formmodal" data-bs-whatever="@mdo">Open modal for
    @mdo&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
data-bs-target="#formmodal" data-bs-whatever="@fat"&gt;Open modal for
@fat&lt;/button&gt;
&lt;button type="button" class="btn btn-light mb-1" data-bs-toggle="modal"
data-bs-target="#formmodal" data-bs-whatever="@getbootstrap"&gt;Open modal for
@getbootstrap&lt;/button&gt;
&lt;div class="modal fade" id="formmodal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
&lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalLabel"&gt;New message&lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;form&gt;
                &lt;div class="mb-3"&gt;
                    &lt;label for="recipient-name"
                        class="col-form-label"&gt;Recipient:&lt;/label&gt;
                    &lt;input type="text" class="form-control" id="recipient-name"&gt;
                &lt;/div&gt;
                &lt;div class="mb-3"&gt;
                    &lt;label for="message-text"
                        class="col-form-label"&gt;Message:&lt;/label&gt;
                    &lt;textarea class="form-control" id="message-text"&gt;&lt;/textarea&gt;
                &lt;/div&gt;
            &lt;/form&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Send
                message&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-5 -->

        <!-- Start:: row-6 -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Modal Animation Effects
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="row ">
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8">Scale</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8">Slide In Right</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">News paper</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8">Fall</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-vertical" data-bs-toggle="modal" href="#modaldemo8">Flip Vertical</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8">Super Scaled</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo8">Sign</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
                  </div>
                  <div class="col-sm-6 col-md-4 col-xl-3">
                    <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal" href="#modaldemo8">Rotate Left</a>
                  </div>
                </div>
                <div class="modal fade" id="modaldemo8">
                  <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                      <div class="modal-header">
                        <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      <div class="modal-body text-start">
                        <h6>Why We Use Electoral College, Not Popular Vote</h6>
                        <p class="text-muted mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary">Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;div class="row "&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8"&gt;Scale&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8"&gt;Slide In Right&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#modaldemo8"&gt;Slide In Bottom&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8"&gt;Newspaper&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8"&gt;Fall&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8"&gt;Flip Horizontal&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-flip-vertical" data-bs-toggle="modal" href="#modaldemo8"&gt;Flip Vertical&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8"&gt;Super Scaled&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo8"&gt;Sign&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8"&gt;Rotate Bottom&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-6 col-md-4 col-xl-3"&gt;
        &lt;a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal" href="#modaldemo8"&gt;Rotate Left&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="modal fade"  id="modaldemo8"&gt;
    &lt;div class="modal-dialog modal-dialog-centered text-center" role="document"&gt;
        &lt;div class="modal-content modal-content-demo"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title"&gt;Message Preview&lt;/h6&gt;&lt;button aria-label="Close" class="btn-close" data-bs-dismiss="modal"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body text-start"&gt;
                &lt;h6&gt;Why We Use Electoral College, Not Popular Vote&lt;/h6&gt;
                &lt;p class="text-muted mb-0"&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button class="btn btn-primary" &gt;Save changes&lt;/button&gt; &lt;button class="btn btn-light" data-bs-dismiss="modal" &gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-6 -->

        <!-- Start:: row-6 -->
        <h6 class="mb-3">Close Buttons:</h6>
        <div class="row">
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Basic Close
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn-close" aria-label="Close"></button>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close" aria-label="Close"&gt;&lt;/button&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  Disabel state
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn-close" disabled aria-label="Close"></button>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close" disabled aria-label="Close"&gt;&lt;/button&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card custom-card overflow-hidden">
              <div class="card-header justify-content-between">
                <div class="card-title">
                  White variant
                </div>
                <div class="prism-toggle">
                  <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                </div>
              </div>
              <div class="card-body bg-black">
                <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
                <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
              </div>
              <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close btn-close-white" aria-label="Close"&gt;&lt;/button&gt;
    &lt;button type="button" class="btn-close btn-close-white" disabled
        aria-label="Close"&gt;&lt;/button&gt;</code></pre>
                <!-- Prism Code -->
              </div>
            </div>
          </div>
        </div>
        <!-- End:: row-6 -->

      </div>
    </div>
    <!--APP-CONTENT CLOSE-->

    <?php include("template/search_modal.php"); ?>
    <?php include("template/footer.php"); ?>

  </div>

  <?php include("template/scripts.php"); ?>

  <?php include("template/custom_switcherjs.php"); ?>

  <!-- Prism JS -->
  <script src="../assets/libs/prismjs/prism.js"></script>
  <script src="../assets/js/prism-custom.js"></script>

  <!-- Modal JS -->
  <script src="../assets/js/modal.js"></script>

  <!-- Custom JS -->
  <script src="../assets/js/custom.js"></script>

</body>

</html>