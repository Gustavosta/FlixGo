<?php
  //  Lấy quốc gia
    $allCata = country_select_all();
?>

<section class="main-movie col-10">
    <?php require './view/template/admin.php'; ?>
  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="mr-auto "></div>
      <button class="btn blue-gradient mt-4" id='insertCatalog' data-toggle="modal" data-target="#centralModal-lg" title="Thêm danh mục mới"><i class="fas fa-plus"></i></button>
    </div>
    <div class="row  mb-5 RootClass RootClass">
        <?php
        foreach ($allCata as $item) {
            extract($item);
            echo
            "
              <div class='col-md-3 mb-4'>
                <div class='card-showCata'>
                  <div class='content-allmovie'>
                    <p>Tổng phim</p>
                    <h2>$count</h2>
                  </div>
                  <div class='content-cata'> 
                    <h5>$name_country</h5>
                  </div>
                  <div class='card-upde'>
                    <button class='update-Cata' data-id='$id' data-toggle='modal' data-target='#centralModal-lg'><i class='fas fa-edit'></i></button>
                    <button class='itemdelete' data-id='$id'><i class='fas fa-trash-alt'></i></button>
                  </div>
                </div>
              </div>
            ";
        }
      ?>
    </div>
  </div>
  <!-- MODAL INSERT  -->
  <div class="modal fade modalCustom" id="centralModal-lg" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog  modal-lg" role="form">
          <form method="post" action="index.php?page=catalog">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Thêm danh mục</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body" id="content-insert">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="formGroupExampleInput">Tên Quốc Gia</label>
                        <input class="form-control" id="formGroupExampleInput" type="text" name="name" placeholder="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Close</button>
                <input class="btn btn-primary btn-sm" type="" value="Insert" name="addnew" data-dismiss="modal"  id='btnInsert'>
                <input class="btn btn-primary btn-sm d-none" type="" value="Update" name="update" data-dismiss="modal"  id='btnUpdate'>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<script src="public/js/thuvien.js"></script>
<script src="public/js/country.js"></script>
      

