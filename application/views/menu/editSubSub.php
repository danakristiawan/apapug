<section class="section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <?= form_open(); ?>
          <div class="card-header">

          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="">Sub Menu :</label>
              <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" value="<?= $subsubmenu['name']; ?>">
              <div class="invalid-feedback">
                <?= form_error('name') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="">URL :</label>
              <input type="text" name="url" class="form-control <?= form_error('url') ? 'is-invalid' : '' ?>" value="<?= $subsubmenu['url']; ?>">
              <div class="invalid-feedback">
                <?= form_error('url') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="">Icon :</label>
              <input type="text" name="icon" class="form-control <?= form_error('icon') ? 'is-invalid' : '' ?>" value="<?= $subsubmenu['icon']; ?>">
              <div class="invalid-feedback">
                <?= form_error('icon') ?>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <input type="hidden" name="menu_id" value="<?= $subsubmenu['menu_id']; ?>">
            <input type="hidden" name="sub_menu_id" value="<?= $subsubmenu['sub_menu_id']; ?>">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>